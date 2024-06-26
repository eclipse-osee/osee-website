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
	$pageTitle 		= "OSEE - Data Store - Supported Databases";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Define, ATS, OTE, Application Framework, Install";
	$pageAuthor		= "Roberto E. Escobar";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<div id="midcolumn" >

		<h3>$pageTitle</h3>

		<p>Data created and managed by OSEE is persisted into a data store divided into two sections. 
		A relational database to store type, configuration, and simple content and a remote file system to store binary content. 
		</p>
		<p>Before you can use OSEE, you will need to select and install a relational database suited for your needs and identify 
		a file system path for binary content storage. If you are new to OSEE and would like to try it out without installing 
		your own relational database, you can follow the link below for instructions on using OSEE's pre-configured server.</p>
		
		<p>OSEE provides support for the following databases:</p>
		<ul>
			<li><a href="../installation/postgresql_install.php">PostgreSQL</a></li>
			<li><a href="../installation/derby_install.php">Derby</a> <i>(install instructions coming soon)</i></li>
			<li>MySql <i>(install instructions coming soon)</i></li>
			<li>Oracle <i>(install instructions coming soon)</i></li>
		</ul>
		<br/>
		
		<p>Alternatively, users may choose to use the pre-configured OSEE Demo server before configuring their own. 
		For launch and configuration instructions visit the following link: <a href="../launch/osee_launch.php">'OSEE Launch Instructions'</a>.
		</p>		
		<br/>
	</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>