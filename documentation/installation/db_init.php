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
	# install.php
	#
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "OSEE - Database Initialization";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Define, ATS, OTE, Application Framework, Install";
	$pageAuthor		= "Roberto E. Escobar";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<div id="midcolumn">

		<h3>$pageTitle</h3>
		
		<h4>Pre-requisites</h4>
		<p>Visit the <a href="../index.php">'User's Guide'</a> if you need more information about any of the pre-requisites below.</p>	
			<ul>
				<li>Database has been installed</li>
				<li>Database server is running</li>
				<li>A file system path has been selected for binary data storage. The system default the user's home directory.</li>
				<li>An application server is running. See <a href="../launch/osee_launch.php">'Application Server Launch'<a> for more info.</li>
			</ul> 
		
		<br/>
		
		<h4>Warning</h4>
		<p>This process will delete all data from OSEE Data Store.  Make sure you are certain before running this process.</p>

		<h4>Instructions</h4>
		<ol>
		<li>Ensure database connection information matches database installation. OSEE is pre-configured 
		to work with a PostgreSQL server running on port 5432. If you need a specialized database connection
		see the <a href="../launch/osee_launch.php">'Configuring Database Connection'</a> section. </li>		
		<li>In a console use the following http request to initialize the OSEE database:
		<div style="border-width:thin;border:solid;padding:0.2em;">
		<br/>
		curl -X POST -H "osee.account.id: 11" -H "Content-Type: text/plain" http://localhost:8089/ats/config/initialize/demo
		<br/>
		</div>
		</li>
		</ol>
		
		<br/>
	</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
