<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
	$App = new App();
	$Nav = new Nav();
	$Menu = new Menu();
	include($App->getProjectCommon());

	# All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# configandargs.php
	#
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "OSEE - Documentation";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Define, ATS, OTE, Application Framework, Install";
	$pageAuthor		= "Roberto E. Escobar; Ryan D. Brooks";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML
	<div id="midcolumn">

	<h3>OSEE Configuration and Arguments</h3>
	<p>OSEE can be configured by setting the following VM arguments before launching Eclipse.</p>
	<br/>
	<p>Client refers to Eclipse/OSEE on local host. Server refers to the OSEE application server</p>
	<br/>
	<table style="border:1;width:95%;font-size:1.0em;">
		<tr style="background:#CCCCCC">
			<th>System Property Name</th>
			<th>Values</th>
			<th>Default</th>
			<th>Defining Class</th>
			<th>Description</th>
		</tr>
		<tr>
			<td>org.osgi.service.http.port</td>
			<td>1 - 65535</td>
			<td>-1</td>
			<td>OseeProperties</td>
			<td>Port the client will use to communicate with the OSEE Application Server</td>
		</tr>
		<tr>
			<td>osee.application.server.data</td>
			<td>[FILE SYSTEM PATH]</td>
			<td>User Home</td>
			<td>OseeProperties</td>
			<td>A directory on the file system to be used by the application server to store and serve artifact binary data. <i>Only used when the application server is also launched through the same VM.</i></td>
		</tr>
		<tr>
			<td>osee.db.connection.id</td>
			<td>&lt;db identifier&gt;</td>
			<td>Default from db.connection file</td>
			<td>OseeProperties</td>
			<td>Specifies which database OSEE should connect to as specified by the ...db.connection.xml file. See db.connection file for more information.</td>
		</tr>
		<tr>
			<td>osee.jini.forced.reggie.search</td>
			<td>true, false</td>
			<td>false</td>
			<td>OseeProperties</td>
			<td>If true, adds the lookupList to the global lookup list such that a refresh will try to locate the service again</td>
		</tr>
		<tr>
			<td>osee.jini.lookup.groups</td>
			<td>string</td>
			<td></td>
			<td>OseeProperties</td>
			<td>the Jini Group that all OSEE provided Jini services will register with</td>
		</tr>
		<tr>
			<td>osee.log.default</td>
			<td>FINE, INFO, WARNING, SEVERE</td>
			<td>WARNING</td>
			<td>OseeProperties</td>
			<td>the default logging level for all loggers</td>
		</tr>
		<tr>
			<td>osee.port.scanner.start.port</td>
			<td>1 - 65535</td>
			<td>18000</td>
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
			<td></td>
			<td></td>
			<td>OseeClientProperties</td>
			<td></td>
		</tr>
		<tr>
			<td>osee.authentication.protocol</td>
			<td></td>
			<td></td>
			<td>OseeClientProperties</td>
			<td></td>
		</tr>
		<tr>
			<td>osee.choice.on.db.init</td>
			<td></td>
			<td></td>
			<td>OseeClientProperties</td>
			<td></td>
		</tr>
		<tr>
			<td>osee.file.specified.schema.names.on.db.init</td>
			<td></td>
			<td></td>
			<td>OseeClientProperties</td>
			<td></td>
		</tr>
		<tr>
			<td>osee.import.from.connection.id.on.db.init</td>
			<td></td>
			<td></td>
			<td>OseeClientProperties</td>
			<td></td>
		</tr>
		<tr>
			<td>osee.import.on.db.init</td>
			<td></td>
			<td></td>
			<td>OseeClientProperties</td>
			<td></td>
		</tr>
		<tr>
			<td>osee.local.application.server</td>
			<td>true, false</td>
			<td>false</td>
			<td>OseeClientProperties</td>
			<td><p>When set to <b>true</b> launches an application server upon start up. <i>Uses <b>org.osgi.service.http.port</b> arg to determine port to use.</i></p></td>
		</tr>
		<tr>
			<td>osee.local.http.worker.port</td>
			<td>&lt;port&gt;</td>
			<td>8010</td>
			<td>OseeClientProperties</td>
			<td><p>Port to use for local worker server.</p></td>
		</tr>
		<tr>
			<td>osee.prompt.on.db.init</td>
			<td></td>
			<td></td>
			<td>OseeClientProperties</td>
			<td></td>
		</tr>
		<tr>
			<td>osee.record.activity</td>
			<td></td>
			<td></td>
			<td>OseeClientProperties</td>
			<td></td>
		</tr>
		<tr>
			<td>osee.ats.always.email.me</td>
			<td></td>
			<td></td>
			<td>AtsProperties</td>
			<td></td>
		</tr>
		<tr>
			<td>osee.ats.disable.email</td>
			<td></td>
			<td></td>
			<td>AtsProperties</td>
			<td></td>
		</tr>
		<tr>
			<td>osee.ats.ignore.config.upgrades</td>
			<td></td>
			<td></td>
			<td>AtsProperties</td>
			<td></td>
		</tr>
		<tr>
			<td>osee.ote.benchmark</td>
			<td></td>
			<td></td>
			<td>OteProperties</td>
			<td></td>
		</tr>
		<tr>
			<td>osee.ote.cmd.console</td>
			<td></td>
			<td></td>
			<td>OteProperties</td>
			<td></td>
		</tr>
		<tr>
			<td>osee.ote.server.title</td>
			<td></td>
			<td></td>
			<td>OteProperties</td>
			<td></td>
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