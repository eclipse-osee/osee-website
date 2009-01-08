<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
	$App = new App();
	$Nav = new Nav();
	$Menu = new Menu();
	include($App->getProjectCommon());

	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "OSEE - Configure a Development Runtime";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Runtime, Workspace";
	$pageAuthor		= "Roberto E. Escobar; Ryan D. Brooks";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML
	<div id="midcolumn">

	<h2>$pageTitle</h2>
	<p>
	Using an SVN client such as <a href="http://www.eclipse.org/subversive/">Subversive</a>, check out into your Eclipse 
	workspace all the projects from https://dev.eclipse.org/svnroot/technology/org.eclipse.osee/trunk/.  
	When configuring this SVN repository leave the user name and password blank in order to get anonymous, read-only access.</p>

	<ol>
		<li><a href="http://www.eclipse.org/osee/documentation/installation/postgresql_install.php">PostgreSQL Installation</a></li>
		<li>Use the configuration \org.eclipse.osee.framework.resource.management\OseeApplicationServer [postgresql localhost].launch to run an OSEE application server</li>
		<li>Use the configuration \osee.runConfigs.db.postgres\DB Config [postgresql localhost].launch to run an OSEE database initialization</li>
		<li>Use the configuration \osee.runConfigs.db.postgres\OSEE product [postgresql localhost].launch to run a local OSEE client</li>
	</ol>
	</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>