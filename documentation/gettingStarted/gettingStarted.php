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
	# Getting Started.php
	#
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "OSEE - Getting Started";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Define, ATS, OTE, Application Framework, Install";
	$pageAuthor		= "Roberto E. Escobar";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<div id="midcolumn" style="width:95%">
		<h3>$pageTitle</h3>
		<p>
		Before installation, users should familiarize themselves with the 
		<a href="/osee/documentation/gettingStarted/aboutOsee/requirements.php">'requirements'</a> for installation. 
		To get detailed instructions refer to <a href="/osee/documentation/gettingStarted/aboutOsee/install.php">'OSEE installation instructions'</a>. 
		</p>
		
		<h2>I installed now what?</h2>
		<p>
		Before diving into the system, please take a look at the following topics or proceed to the <a href="/osee/demos/php">'demos'</a> section:
		</p>
		<ul>
			<li><a href="concepts/arch.php">Architecture</li>
			<li><a href="concepts/components.php">Components</li>
			<li><a href="concepts/TypeConfiguration.php">Data Types</a></li>
			<li><a href="aboutOsee/configandargs.php">Configuration and VM Arguments</a></li>
		</ul>
		<p>
		More detailed information can be found in the <a href="../index.php">'Documentation'</a>.
		</p>		
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>