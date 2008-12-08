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

	<div id="midcolumn" style="width:95%">

		<h3>$pageTitle</h3>
		
		<h4>Pre-requisites</h4>
		<p>Visit the <a href="../index.php">'User's Guide'</a> if you need more information about any of the pre-requisites below.</p>	
			<ul>
				<li>Database has been installed</li>
				<li>Database server is running</li>
				<li>A file system path has been selected for binary data storage. The system default is to user the user's home directory.</li>
				<li>An application server is running</li>
			</ul> 
		
		<br/>
		
		<h4>Warning</h4>
		<p>This process will delete all data from OSEE Data Store.  Make sure you are certain before running this process.</p>

		<br/>
		<h4>Instructions</h4>
		

		
		<ol>
		<li>Ensure database connection information matches database installation. OSEE is preconfigured 
		to work with a PostgreSQL server running on port 5432. If you need a specialized database connection
		see the <a href="">'Configuring Database Connection'</a> section. </li>		
		<li>In a console, launch the database initialization application by entering the following:
		<div style="border-width:1;border:solid;text-align:center;padding:0.2em;">
		<br/>
		eclipse -nosplash -application org.eclipse.osee.framework.application.server.DbInit
      -console 
      -vmargs 
      -XX:MaxPermSize=256m 
      -Xmx512m 
      -Dosgi.compatibility.bootdelegation=true
		-Dequinox.ds.debug=true 
		-Dorg.osgi.service.http.port=8089 
		-Dosee.local.application.server=true
		-Dosee.db.connection.id=postgresqlLocalhost
		<br/>
		</div>
		</li>
		<li>When prompted select "Y"</li>
		<li>Select 'ATS Configuration'</li>
		<li>Wait for initialization to complete</li>
		</ol>
		
		<br/>
	</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>