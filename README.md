CubicleSoft Namespaced PHP Libraries
====================================

A single repository containing all CubicleSoft PHP libraries inside a CubicleSoft namespace.  Fully automated nightly updates.  MIT or LGPL, your choice.

[![Donate](https://cubiclesoft.com/res/donate-shield.png)](https://cubiclesoft.com/donate/)

Classes
-------

Included and supported:

* \\CubicleSoft\\AppleICNS - Create and parse Apple icon (.icns) files.  [Documentation](https://github.com/cubiclesoft/php-misc/blob/master/docs/apple_icns.md)  (support/apple_icns.php)
* \\CubicleSoft\\ArrayUtils - Implements missing functions for associative arrays.  [Documentation](https://github.com/cubiclesoft/php-misc/blob/master/docs/array_utils.md)  (support/array_utils.php)
* \\CubicleSoft\\CalendarEvent - Powerful scheduling class.  Feed in a cron line, get back the next timestamp of when something should trigger.  [Documentation](https://github.com/cubiclesoft/php-misc/blob/master/docs/calendar_event.md)  (support/calendar_event.php)
* \\CubicleSoft\\CLI - Static functions in a class to extract command-line options, parse user input on the command-line, and log messages to the console.  Do you really need a separate logging library?  I don't.  [Documentation](https://github.com/cubiclesoft/php-misc/blob/master/docs/cli.md)  (support/cli.php)
* \\CubicleSoft\\ColorTools - Static functions in a class to convert RGB to other color spaces and calculate readable foreground text colors for any background color.  [Documentation](https://github.com/cubiclesoft/php-misc/blob/master/docs/color_tools.md)  (support/color_tools.php)
* \\CubicleSoft\\CRC32Stream - Calculates CRC32 checksums in a streaming format.  [Documentation](https://github.com/cubiclesoft/ultimate-web-scraper/blob/master/docs/crc32_stream.md)  (support/crc32_stream.php)
* \\CubicleSoft\\CSDB - Cross-database, cross-platform, lightweight base class for interfacing with databases.  Designed specifically for developing open source applications where the target database is unknown.  Write each SQL query one time and have all queries automagically work for all supported databases.  Complete with all the standard features you expect in a SQL injection free database class.  Uses PDO by default.  [Documentation](https://github.com/cubiclesoft/csdb)  (support/db.php)
* \\CubicleSoft\\CSDB_mysql - Full MySQL/Maria DB interface.  (support/db_mysql.php)
* \\CubicleSoft\\CSDB_mysql_lite - Lightweight MySQL/Maria DB interface.  (support/db_mysql_lite.php)
* \\CubicleSoft\\CSDB_oci - Full Oracle DB interface (beta).  (support/db_oci.php)
* \\CubicleSoft\\CSDB_oci_lite - Lightweight Oracle DB interface (beta).  (support/db_oci_lite.php)
* \\CubicleSoft\\CSDB_pgsql - Full PostgreSQL interface.  (support/db_pgsql.php)
* \\CubicleSoft\\CSDB_pgsql_lite - Lightweight PostgreSQL interface.  (support/db_pgsql_lite.php)
* \\CubicleSoft\\CSDB_sqlite - Full SQLite interface.  (support/db_sqlite.php)
* \\CubicleSoft\\CSDB_sqlite_lite - Lightweight SQLite interface.  (support/db_sqlite_lite.php)
* \\CubicleSoft\\CSPRNG - Cross-platform Cryptographically Secure Random Number Generator (CSPRNG).  Unlike nearly all of the classes out there that claim to implement a CSPRNG, this one actually does things correctly because I scoured the actual PHP C source code and spent the necessary time figuring out which calls called the system-level CSPRNG for each major platform.  This class also doesn't wimp out and fallback to some hocus-pocus, non-random, weak sauce solution - it throws an Exception which you intentionally and correctly do not ever catch.  [Documentation](https://github.com/cubiclesoft/csprng/blob/master/docs/random.md)  (support/random.php)
* \\CubicleSoft\\DeflateStream - Compresses/Uncompresses deflate data (including gzip) in a streaming format without intermediate files.  [Documentation](https://github.com/cubiclesoft/ultimate-web-scraper/blob/master/docs/deflate_stream.md)  (support/deflate_stream.php)
* \\CubicleSoft\\DigitalOcean - A complete SDK for interacting with all DigitalOcean APIs.  (support/sdk_digitalocean.php)
* \\CubicleSoft\\DirHelper - Static functions in a class for simplifying common file system tasks regarding directories, including recursive copy, delete, and permissions changes when building installers, live demos, and testing tools.  [Documentation](https://github.com/cubiclesoft/php-misc/blob/master/docs/dir_helper.md)  (support/dir_helper.php)
* \\CubicleSoft\\EFSS - Creates hierarchical, encrypted, compressed data stores.  Encrypted File Storage System is a real, virtual, mountable block-based file system for PHP.  [Documentation](https://github.com/cubiclesoft/efss)  (support/efss.php)
* \\CubicleSoft\\EmailBuilder - Powerful class for constructing fancy HTML emails using arrays without having to worry about HTML tables.  [Documentation](https://github.com/cubiclesoft/ultimate-email/blob/master/docs/email_builder.md)  (support/email_builder.php)
* \\CubicleSoft\\EventManager - Register to listen for events whenever the application fires them.  Can be the basis of a plugin/module system.  [Documentation](https://github.com/cubiclesoft/php-misc/blob/master/docs/event_manager.md)  (support/event_manager.php)
* \\CubicleSoft\\FastCGI - Implements a FactCGI client.  [Documentation](https://github.com/cubiclesoft/php-misc/blob/master/docs/fastcgi.md)  (support/fastcgi.php)
* \\CubicleSoft\\FlexForms - Powerful class for building/generating HTML forms.  Highly extensible with XSRF and anti-bot defenses.  [Documentation](https://github.com/cubiclesoft/php-flexforms/blob/master/docs/flex_forms.md)  (support/flex_forms.php)
* \\CubicleSoft\\GenericServer - Implements a generic TCP/IP server class.  Can be used for creating custom protocols.  [Documentation](https://github.com/cubiclesoft/php-misc/blob/master/docs/generic_server.md)  (support/generic_server.php)
* \\CubicleSoft\\HTTP - Baseline static functions in a class for performing all things HTTP.  Has powerful URL parsing tools (e.g. relative to absolute URL conversion).  Used primarily by WebBrowser.  Asynchronous capable.  [Documentation](https://github.com/cubiclesoft/ultimate-web-scraper/blob/master/docs/http.md)  (support/http.php)
* \\CubicleSoft\\IPAddr - Static functions in a class for processing IPv4 and IPv6 addresses into a uniform format.  [Documentation](https://github.com/cubiclesoft/php-misc/blob/master/docs/ipaddr.md)  (support/ipaddr.php)
* \\CubicleSoft\\LineDiff - Static functions in a class for generating line-by-line diffs.  [Documentation](https://github.com/cubiclesoft/php-misc/blob/master/docs/line_diff.md)  (support/line_diff.php)
* \\CubicleSoft\\MIMEParser - Parses MIME content of all forms.  Intended primarily for use with POP3.  [Documentation](https://github.com/cubiclesoft/ultimate-email/blob/master/docs/mime_parser.md)  (support/mime_parser.php)
* \\CubicleSoft\\MultiAsyncHelper - Not for the feint of heart.  This class simplifies management of mixing multiple non-blocking objects.  See the Ultimate Web Scraper toolkit test suite for example usage.  [Documentation](https://github.com/cubiclesoft/ultimate-web-scraper/blob/master/docs/multi_async_helper.md)  (support/multi_async_helper.php)
* \\CubicleSoft\\PHPMinifier - Static functions in a class for minifying PHP code while still generally maintaining readability.  [Documentation](https://github.com/cubiclesoft/php-misc/blob/master/docs/php_minifier.md)  (support/php_minifier.php)
* \\CubicleSoft\\POP3 - Powerful class for accessing a POP3 server.  Pair it with MIMEParser and TagFilter for advanced e-mail handling.  [Documentation](https://github.com/cubiclesoft/ultimate-email/blob/master/docs/pop3.md)  (support/pop3.php)
* \\CubicleSoft\\ProcessHelper - Static functions in a class for starting and terminating non-blocking processes across all platforms.  [Documentation](https://github.com/cubiclesoft/php-misc/blob/master/docs/process_helper.md)  (support/process_helper.php)
* \\CubicleSoft\\ReadWriteLock - A very old class that implements a cross-platform, named read-write lock for very old versions of PHP.  Use the [PECL sync](http://php.net/manual/en/book.sync.php) extension instead.  [Documentation](https://github.com/cubiclesoft/efss/blob/master/docs/read_write_lock.md)  (support/read_write_lock.php)
* \\CubicleSoft\\Request - Static functions in a class for doing basic, common, but missing request initialization handling.  Common initialization routines for CubicleSoft applications.  [Documentation](https://github.com/cubiclesoft/php-misc/blob/master/docs/request.md)  (support/request.php)
* \\CubicleSoft\\SMTP - Powerful set of static functions in a class for sending e-mail.  Full RFC support.  [Documentation](https://github.com/cubiclesoft/ultimate-email/blob/master/docs/smtp.md)  (support/smtp.php)
* \\CubicleSoft\\Str - Static functions in a class for doing basic, common, but missing string manipulation.  Common initialization routines for CubicleSoft applications.  Some minor carryover from extremely old C++ libraries.  [Documentation](https://github.com/cubiclesoft/php-misc/blob/master/docs/str_basics.md)  (support/str_basics.php)
* \\CubicleSoft\\StringBitStream - Parse data stored in a bit stream such as Flash (SWF) files.  [Documentation](https://github.com/cubiclesoft/php-misc/blob/master/docs/bits.md)  (support/bits.php)
* \\CubicleSoft\\TagFilter - The world's most powerful tag filtering PHP class.  It can clean up the worst HTML (e.g. Word HTML) in a single pass or extract data (or both).  As a direct result, it is blistering fast.  Many, many times faster and smaller than everything else I've used.  [Documentation](https://github.com/cubiclesoft/ultimate-web-scraper/blob/master/docs/tag_filter.md)  (support/tag_filter.php)
* \\CubicleSoft\\TagFilterNodes - Output from TagFilter::Explode(), which explodes a HTML document into a flattened DOM-like structure.  From there, use CSS3 media queries to locate nodes of interest.  [Documentation](https://github.com/cubiclesoft/ultimate-web-scraper/blob/master/docs/tag_filter.md#tagfilternodes-class)  (support/tag_filter.php)
* \\CubicleSoft\\TagFilterNode - TagFilterNodes::Get() returns a TagFilterNode object which provides easy but slower object-oriented access to TagFilterNodes.  [Documentation](https://github.com/cubiclesoft/ultimate-web-scraper/blob/master/docs/tag_filter.md#tagfilternode-class)  (support/tag_filter.php)
* \\CubicleSoft\\TagFilterNodeIterator - Allows iteration over CSS3 query results from TagFilterNode::Find() using foreach.  Also has a Filter() function to further reduce results using additional CSS3 selectors.  [Documentation](https://github.com/cubiclesoft/ultimate-web-scraper/blob/master/docs/tag_filter.md#tagfilternodeiterator-class)  (support/tag_filter.php)
* \\CubicleSoft\\TagFilterStream - Used by TagFilter but can be used separately for processing large HTML files in smaller chunks (aka a stream).  [Documentation](https://github.com/cubiclesoft/ultimate-web-scraper/blob/master/docs/tag_filter.md#tagfilterstream-class)  (support/tag_filter.php)
* \\CubicleSoft\\UTF8 - Flexible UTF-8 string manipulation static functions in a class.  CubicleSoft was doing Unicode and UTF-8 long before Unicode and UTF-8 were cool.  [Documentation](https://github.com/cubiclesoft/php-misc/blob/master/docs/utf8.md)  (support/utf8.php)
* \\CubicleSoft\\UTFUtils - Convert between various Unicode Transformation Formats (UTF-8, UTF-16, UTF-32).  [Documentation](https://github.com/cubiclesoft/php-misc/blob/master/docs/utf_utils.md)  (support/utf_utils.php)
* \\CubicleSoft\\WebBrowser - Probably the most powerful state tracking system in pure PHP for web scraping.  Virtually indistiguishable from a real web browser and therefore extremely difficult to detect.  Has HTML form extraction and command-line shell interface capabilities.  I occasionally dream of adding a Javascript parsing engine to it.  Superior in every way to Guzzle when it comes to web scraping (Guzzle is an API consumer, not a web scraper - different domains).  [Documentation](https://github.com/cubiclesoft/ultimate-web-scraper/blob/master/docs/web_browser.md)  (support/web_browser.php)
* \\CubicleSoft\\WebBrowserForm - Represents and manipulates a single extracted HTML form from a page.  Generates WebBrowser-compliant output for feeding back into WebBrowser for another request.  [Documentation](https://github.com/cubiclesoft/ultimate-web-scraper/blob/master/docs/web_browser.md#webbrowserform-class)  (support/web_browser.php)
* \\CubicleSoft\\WebMutex - A very old class that implements a cross-platform, named mutex for very old versions of PHP.  Use the [PECL sync](http://php.net/manual/en/book.sync.php) extension instead.  [Documentation](https://github.com/cubiclesoft/efss/blob/master/docs/web_mutex.md)  (support/web_mutex.php)
* \\CubicleSoft\\WebServer - It is what it says on the tin.  It's a web server.  In pure PHP.  Abuses the HTTP class to implement a rather scary and complete feature set that probably rivals Apache.  Isn't going to win any performance awards.  Is probably susceptible to DoS attacks due to multiple bugs in PHP.  Used by Cloud Storage Server and PHP App Server.  [Documentation](https://github.com/cubiclesoft/ultimate-web-scraper/blob/master/docs/web_server.md)  (support/web_server.php)
* \\CubicleSoft\\WebSocket - Implements a WebSocket client.  Probably not as robust as it could be on the async front but, unlike most WebSocket classes, this one allows the application to ignore those pesky control packets.  [Docuemtation](https://github.com/cubiclesoft/ultimate-web-scraper/blob/master/docs/websocket.md)  (support/websocket.php)
* \\CubicleSoft\\WebSocketServer - Move over Node.js and whatever else is out there.  A new WebSocket server is in town.  With limits on packet size because, well, WebSocket vulnerabilities.  Actually, you probably shouldn't use this in production environments either.  WebSocket is kind of a broken protocol.  The server exists to test the client because there aren't that many open servers out there.  [Documentation](https://github.com/cubiclesoft/ultimate-web-scraper/blob/master/docs/websocket_server.md)  (support/websocket_server.php)
* \\CubicleSoft\\WinICO - Create and parse Windows icon (.ico) and cursor (.cur) files.  [Documentation](https://github.com/cubiclesoft/php-winpefile/blob/master/docs/win_ico.md)  (support/win_ico.php)
* \\CubicleSoft\\WinPEFile - Extract information, modify, and create Windows Portable Executable files.  [Documentation](https://github.com/cubiclesoft/php-winpefile/blob/master/docs/win_pe_file.md)  (support/win_pe_file.php)
* \\CubicleSoft\\WinPEUtils - Advanced data extraction and manipulation of Windows Portable Executable files.  [Documentation](https://github.com/cubiclesoft/php-winpefile/blob/master/docs/win_pe_utils.md)  (support/win_pe_utils.php)
* \\CubicleSoft\\XTerm - Static functions in a class for emitting XTerm-compatible escape codes to alter terminal behavior.  Mostly for changing font styles and colors but also supports most escape codes with easier to comprehend functions.  Many features also work with the Command Prompt in Windows 10 and later.  [Documentation](https://github.com/cubiclesoft/php-misc/blob/master/docs/xterm.md)  (support/xterm.php)
* \\CubicleSoft\\ZipStreamWriter - Generates ZIP files on the fly.  Stream content of any size to users.  [Documentation](https://github.com/cubiclesoft/php-zipstreamwriter/blob/master/docs/zipstreamwriter.md)  (support/zip_stream_writer.php)
* \\CubicleSoft\\simple_html_dom - Not actually a CubicleSoft class.  Accidental inclusion from Ultimate Web Scraper Toolkit.  \[Shrugs\]  Obsoleted by TagFilter.  (support/simple_html_dom.php)

Other:

* \\CubicleSoft\\Crypt_AES - Internal or undocumented class.  (support/AES.php)
* \\CubicleSoft\\Crypt_Base - Internal or undocumented class.  (support/Base.php)
* \\CubicleSoft\\CalendarEvent_TZSwitch - Internal or undocumented class.  (support/calendar_event.php)
* \\CubicleSoft\\CSDB_PDO_Statement - Internal or undocumented class.  (support/db.php)
* \\CubicleSoft\\EFSS_FirstBlock - Internal or undocumented class.  (support/efss.php)
* \\CubicleSoft\\EFSS_DirEntry_DirFile - Internal or undocumented class.  (support/efss.php)
* \\CubicleSoft\\EFSS_DirEntries - Internal or undocumented class.  (support/efss.php)
* \\CubicleSoft\\EFSS_File - Internal or undocumented class.  (support/efss.php)
* \\CubicleSoft\\EFSS_Unused - Internal or undocumented class.  (support/efss.php)
* \\CubicleSoft\\EFSS_DirCopyHelper - Internal or undocumented class.  (support/efss.php)
* \\CubicleSoft\\EFSS_SymlinkCopyHelper - Internal or undocumented class.  (support/efss.php)
* \\CubicleSoft\\EFSS_FileCopyHelper - Internal or undocumented class.  (support/efss.php)
* \\CubicleSoft\\EFSSIncremental - Internal or undocumented class.  (support/efss.php)
* \\CubicleSoft\\LibEvGenericServer - Internal or undocumented class.  (support/generic_server_libev.php)
* \\CubicleSoft\\Crypt_Rijndael - Internal or undocumented class.  (support/Rijndael.php)
* \\CubicleSoft\\SerialNumber - Internal or undocumented class.  (support/serial_number.php)
* \\CubicleSoft\\simple_html_dom_node - Internal or undocumented class.  (support/simple_html_dom.php)
* \\CubicleSoft\\LibEvWebSocketServer - Internal or undocumented class.  (support/websocket_server_libev.php)
* \\CubicleSoft\\WebServer_TempFile - Internal or undocumented class.  (support/web_server.php)
* \\CubicleSoft\\WebServer_Client - Internal or undocumented class.  (support/web_server.php)

Sources
-------

* https://github.com/cubiclesoft/php-libs
