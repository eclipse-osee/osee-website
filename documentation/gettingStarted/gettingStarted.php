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
		
		<ol type="upper-roman">
			<li>Installation</li>
				<ol type="lower-alpha">
				<li><a href="../installation/requirements.php">Requirements</a></li>
				<li><a href="../installation/eclipse_install.php">Eclipse Installation</a></li>
				<li><a href="../installation/supported_databases.php">Supported Databases</a></li>
					<ol type="lower-roman">
						<li><a href="../installation/derby_install.php">Derby Installation</a></li>
						<li><a href="../installation/postgresql_install.php">PostgreSQL Installation</a></li>
						<li><a href="../installation/microdoc_server.php">OSEE Microdoc Server</a>
					</ol>
				<li><a href="../installation/db_init.php">Database Initialization</a></li>
				</ol>
			<li>Configuration</li>
				<li><a href="../installation/db_init.php">Database Initialization</a></li>
		</ol>
		
		
		<h2>I installed now what?</h2>
		<p>
		Before diving into the system, you want to proceed to the <a href="/osee/screencasts.php">'Screencast'</a> and <a href="/osee/faq.php">'FAQ'</a> sections.
		</p>
		<h4>Core Concepts and Topics</h4>

		<p>
		More detailed information can be found in the <a href="../index.php">'Documentation'</a>.
		</p>		
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>