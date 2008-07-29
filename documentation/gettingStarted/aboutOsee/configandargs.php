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
	$pageAuthor		= "Roberto E. Escobar";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML
	<div id="midcolumn">

	<h3>OSEE Configuration and Arguments</h3>
	<p>OSEE can be configured by setting the following VM arguments before launching Eclipse.</p>
	<br/>
	<p>Client refers to Eclipse/OSEE on local host. Server refers to the OSEE application server</p>
	<br/>
	<table border="1" width="95%">
		<tr>
			<th>Name</th>
			<th>Values</th>
			<th>Client/Server<th>
			<th>Description</th>
		</tr>
		<tr>
			<td>osee.application.server.override</td>
			<td>[http://&lt;address&gt;:&lt;port&gt;]</td>
			<td>Client</td>
			<td><p>Speciefies the application server address to use. This overrides the application server address specified in the database.</p></td>
		</tr>
		<tr>
			<td>osee.application.server.data</td>
			<td>[FILE SYSTEM PATH]</td>
			<td>Server or Client with Server Launch</td>
			<td><p>A directory on the file system to be use by the application server to store and serve artifact binary data.<i>Only used when the application server is also launched through the same VM.</i></p></td>
		</tr>
		<tr>
			<td>osee.local.application.server</td>
			<td>true | false</td>
			<td>Client</td>
			<td><p>When set to <b>true</b> launches an application server upon start up. <i>Uses <b>org.osgi.service.http.port</b> arg to determine port to use.</i></p></td>
		</tr>
		<tr>
			<td>osee.local.http.worker.port</td>
			<td>&lt;port&gt;</td>
			<td>Client</td>
			<td><p>Port to use for local worker server.</p></td>
		</tr>
		<tr>
			<td>osee.developer</td>
			<td>true | false</td>
			<td>Client</td>
			<td><p>When set to <b>true</b> enables debug and administrative features intended to be used only by developers.</p></td>			
		</tr>
		<tr>
			<td>osee.db.connection.id</td>
			<td>&lt;db identifier&gt;</td>
			<td>Both</td>
			<td><p>Specifies which database OSEE should connect to as specified by the ...db.connection.xml file. See db.connection file for more information.</p></td>
		</tr>
	</table>
		<br/>
	</div>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>