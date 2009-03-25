<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
	$App = new App();
	$Nav = new Nav();
	$Menu = new Menu();
	include($App->getProjectCommon());

	# All on the same line to unclutter the user's desktop'

	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "OSEE Configuration Properties";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Define, ATS, OTE, Application Framework, Install";
	$pageAuthor		= "Roberto E. Escobar; Ryan D. Brooks";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML
	<div id="midcolumn">

	<h3>$pageTitle</h3>
	OSEE can be configured by setting the following Java system properties when launching Eclipse.  Java system properties are key/value pairs and can
	be passed as launch arguments in the form of -D<key>=<value> (i.e. -Dosee.authentication.protocol=trustAll).  These -D options can be specified directly
	in the command to	launch Eclipse or in the corresponding ini file for the eclipse executable used.
	<br/>
	<br/>
	<table style="border:1;width:95%;font-size:1.0em;">
	 <col span=5 valign="top">
		<tr style="background:#CCCCCC">
			<th>System Property Name</th>
			<th>Values</th>
			<th>Default</th>
			<th>Defining Class</th>
			<th>Description</th>
		</tr>
		<tr>
			<td>org.osgi.service.http.port</td>
			<td><code>1 - 65535</code></td>
			<td><code>-1</code></td>
			<td>OseeServerProperties</td>
			<td>Port the client will use to communicate with the OSEE Application Server</td>
		</tr>
		<tr>
			<td>osee.application.server.data</td>
			<td><code>[FILE SYSTEM PATH]</code></td>
			<td>User Home</td>
			<td>OseeServerProperties</td>
			<td>A directory on the file system to be used by the application server to store and serve artifact binary data.</td>
		</tr>
		<tr>
			<td>osee.connection.info.uri</td>
			<td><code>[FILE SYSTEM PATH]</code></td>
			<td></td>
			<td>OseeServerProperties</td>
			<td>File system path or uri containing custom database connection information.</td>
		</tr>
		<tr>
			<td>osee.derby.server</td>
			<td><code>[&lt;address&gt;:&lt;port&gt;]</code></td>
			<td></td>
			<td>OseeServerProperties</td>
			<td>When specified, this system property sets the URL used to launch a derby database server.</td>
		</tr>
		<tr>
			<td>osee.db.connection.id</td>
			<td><code>&lt;db identifier&gt;</code></td>
			<td>Default from db.connection file</td>
			<td>OseeProperties</td>
			<td>Specifies which database OSEE should connect to. This id references connection information specified in the ...db.connection.xml file. See <a href="dbconnection.php" >Database Connection Information</a> file for more information.</td>
		</tr>
		<tr>
			<td>osee.jini.forced.reggie.search</td>
			<td><code>true, false</code></td>
			<td><code>false</code></td>
			<td>OseeProperties</td>
			<td>If true, adds the lookupList to the global lookup list such that a refresh will try to locate the service again</td>
		</tr>
		<tr>
			<td>osee.jini.lookup.groups</td>
			<td>user defined group name</td>
			<td></td>
			<td>OseeProperties</td>
			<td>the Jini Group that all OSEE provided Jini services will register with</td>
		</tr>
		<tr>
			<td>osee.log.default</td>
			<td><code>FINE, INFO, WARNING, SEVERE</code></td>
			<td><code>WARNING</code></td>
			<td>OseeProperties</td>
			<td>the default logging level for all loggers</td>
		</tr>
		<tr>
			<td>osee.port.scanner.start.port</td>
			<td><code>1 - 65535</code></td>
			<td><code>18000</code></td>
			<td>OseeProperties</td>
			<td>the first port number to test for availability when a new port is needed</td>
		</tr>
		<tr>
			<td>osee.application.server</td>
			<td><code>[http://&lt;address&gt;:&lt;port&gt;]</code></td>
			<td></td>
			<td>OseeClientProperties</td>
			<td>When specified, this system property sets the URL used to reference the application server and arbitration is bypassed.</td>
		</tr>
		<tr>
			<td>osee.arbitration.server</td>
			<td><code>[http://&lt;address&gt;:&lt;port&gt;]</code></td>
			<td></td>
			<td>OseeClientProperties</td>
			<td>The arbitration server address and port to use. This system property must be specified for the system to gain access to OSEE data. If the application server property is set then that address takes precedence and arbitration is bypassed.</td>
		</tr>
		<tr>
			<td>osee.authentication.protocol</td>
			<td>protocol name</td>
			<td></td>
			<td>OseeClientProperties</td>
			<td>protocol to be used by the client to authenticate with the server</td>
		</tr>
		<tr>
			<td>osee.choice.on.db.init</td>
			<td>choice name</td>
			<td></td>
			<td>OseeClientProperties</td>
			<td>the predefined database initialization choice</td>
		</tr>
		<tr>
			<td>osee.file.specified.schema.names.on.db.init</td>
			<td><code>true, false</code></td>
			<td><code>false</code></td>
			<td>OseeClientProperties</td>
			<td>Specifies whether OSEE database initialization should use the schema names specified in the schema.xml files instead of using the connection schema. Using the connection specified schema is the default behavior.</td>
		</tr>
		<tr>
			<td>osee.import.from.connection.id.on.db.init</td>
			<td><code>[FILE SYSTEM PATH]</code></td>
			<td></td>
			<td>OseeClientProperties</td>
			<td>Specifies where table data should be imported from during OSEE database initialization. The default is to use the database connection id specified in the schema.xml files.</td>
		</tr>
		<tr>
			<td>osee.import.on.db.init</td>
			<td><code>true, false</code></td>
			<td><code>false</code></td>
			<td>OseeClientProperties</td>
			<td>Specifies whether OSEE database initialization should import database data as part of its tasks.</td>
		</tr>
		<tr>
			<td>osee.local.application.server</td>
			<td><code>true, false</code></td>
			<td><code>false</code></td>
			<td>OseeClientProperties</td>
			<td><p>When set to <b>true</b> launches an application server upon start up. <i>Uses <b>org.osgi.service.http.port</b> arg to determine port to use.</i></p></td>
		</tr>
		<tr>
			<td>osee.local.http.worker.port</td>
			<td><code>&lt;port&gt;</code></td>
			<td><code>8010</code></td>
			<td>OseeClientProperties</td>
			<td><p>Port to use for local worker server.</p></td>
		</tr>
		<tr>
			<td>osee.prompt.on.db.init</td>
			<td><code>true, false</code></td>
			<td><code>true</code></td>
			<td>OseeClientProperties</td>
			<td>Specifies whether to interactively prompt the user during database initialization for init choice</td>
		</tr>
		<tr>
			<td>osee.record.activity</td>
			<td><code>true, false</code></td>
			<td><code>true</code></td>
			<td>OseeClientProperties</td>
			<td>Specifies whether user activity should be logged</td>
		</tr>
		<tr>
			<td>osee.ats.ignore.config.upgrades</td>
			<td><code>true, false</code></td>
			<td></td>
			<td>AtsProperties</td>
			<td></td>
		</tr>
		<tr>
			<td>osee.ote.benchmark</td>
			<td><code>true, false</code></td>
			<td></td>
			<td>OteProperties</td>
			<td></td>
		</tr>
		<tr>
			<td>osee.ote.cmd.console</td>
			<td><code>true, false</code></td>
			<td></td>
			<td>OteProperties</td>
			<td>Specifies whether to enable the OTE command console</td>
		</tr>
		<tr>
			<td>osee.ote.server.title</td>
			<td>free text name</td>
			<td></td>
			<td>OteProperties</td>
			<td>name given to the OTE server which is displayed in the test manager</td>
		</tr>
		<tr>
			<td>osee.ote.timing.log.path</td>
			<td></td>
			<td></td>
			<td>OteProperties</td>
			<td></td>
		</tr>
	</table>
		<br/>
	</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>