<?php
	// This runs the main updater.  Requires PHP and git on the path and repo commit access.  That last part you, of course, don't have.
	// (C) 2016 CubicleSoft.  All Rights Reserved.

	if (!isset($_SERVER["argc"]) || !$_SERVER["argc"])
	{
		echo "This file is intended to be run from the command-line.";

		exit();
	}

	$rootpath = str_replace("\\", "/", dirname(__FILE__));

	require_once $rootpath . "/functions.php";

	$srcpath = $rootpath . "/repos";
	$destpath = $rootpath . "/support";

	if (!is_dir($srcpath))  mkdir($srcpath);
	if (!is_dir($destpath))  mkdir($destpath);

	// Update the registered repo list.  If nothing has changed, exit.
	$numchanged = (int)GitRepoChanged($rootpath) + GitPull($srcpath);
	if (!$numchanged)  exit();

	// Always do a full rebuild.
	DeleteDirectory($destpath);

	// Retrieve a list of all PHP files that contain 'class' + a name.
	$files = array();
	GetPHPFiles($files, $srcpath);

	// Generate final file set.
	$globalclasses = array(
		"stdClass",
		"PDO",
		"Exception",
		"Net_DNS2_Resolver",
	);

	foreach ($files as $name => $filename)
	{
		$data = "<" . "?php\n";
		$data .= "\tnamespace CubicleSoft;\n";
		$data .= "?" . ">";
		$data .= file_get_contents($filename);

		// Replace class references with CubicleSoft + class references.
		foreach ($files as $name2 => $filename2)
		{
			$data = str_replace("\"" . $name2 . "\"", "\"\\\\CubicleSoft\\\\" . $name2 . "\"", $data);
			$data = str_replace(" extends " . $name2, " extends \\CubicleSoft\\" . $name2, $data);
			$data = str_replace("\"" . $name2 . "::", "\"\\\\CubicleSoft\\\\" . $name2 . "::", $data);
			$data = str_replace("'" . $name2 . "::", "'\\CubicleSoft\\" . $name2 . "::", $data);
			$data = str_replace($name2 . "::", "\\CubicleSoft\\" . $name2 . "::", $data);
			$data = str_replace(" new " . $name2 . "(", " new \\CubicleSoft\\" . $name2 . "(", $data);
		}

		// Handle global namespace classes.
		foreach ($globalclasses as $name2)
		{
			$data = str_replace("\"" . $name2 . "\"", "\"\\\\" . $name2 . "\"", $data);
			$data = str_replace(" extends " . $name2, " extends \\" . $name2, $data);
			$data = str_replace("\"" . $name2 . "::", "\"\\\\" . $name2 . "::", $data);
			$data = str_replace("'" . $name2 . "::", "'\\" . $name2 . "::", $data);
			$data = str_replace($name2 . "::", "\\" . $name2 . "::", $data);
			$data = str_replace(" new " . $name2 . "(", " new \\" . $name2 . "(", $data);
		}

		$pos = strrpos($filename, "/");
		$name = substr($filename, $pos + 1);

		file_put_contents($destpath . "/" . $name, $data);
	}

	// Net_DNS2.
	mkdir($destpath . "/Net");
	copy($srcpath . "/php-libs/support/Net/DNS2.php", $destpath . "/Net/DNS2.php");
	copy($srcpath . "/php-libs/support/Net/license.txt", $destpath . "/Net/license.txt");

	// CA certificates.
	copy($srcpath . "/php-libs/support/cacert.pem", $destpath . "/cacert.pem");
	copy($srcpath . "/php-libs/support/digitalocean_ca.pem", $destpath . "/digitalocean_ca.pem");

	// Generate README.
	copy($srcpath . "/php-libs/readme_src/classes.json", $rootpath . "/readme_src/classes.json");
	GenerateReadme($rootpath . "/readme_src/classes.json", $rootpath . "/readme_src/README.md", $rootpath . "/README.md", "\\\\CubicleSoft\\\\", $files, "support/", $srcpath);

	CommitRepo($rootpath);
?>