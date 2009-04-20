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
	$pageTitle 		= "OSEE - Launch Application Server";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Define, ATS, OTE, Application Framework, Install";
	$pageAuthor		= "Donald G. Dunne";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<div id="midcolumn">

		<h3>$pageTitle</h3>
		
		<h4>Pre-requisites</h4>
		<p>Visit the <a href="../index.php">'User's Guide'</a> if you need more information about any of the pre-requisites below.</p>	
			<ul>
				<li>Database has been installed</li>
			</ul> 
		
		<br/>
		
		<h4>Instructions</h4>
		<ol>
		<li>Execute the launch script for your OS (if running from microdoc: http://osee.microdoc.com/node/2)</li>		
		<li>Wait until server finishes the startup procedure - Do Not Close The Console</li>
		</ol>
		
		<br/>
	</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>