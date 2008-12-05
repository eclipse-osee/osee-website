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
	# template.php
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "OSEE - User's Guide";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Define, ATS, OTE, Application Framework";
	$pageAuthor		= "Roberto E. Escobar";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<div id="midcolumn" style="width:95%">
		<h1>$pageTitle</h1>

		<ol type="upper-roman">
			<li><a href="what_is.php">What is OSEE?</a><l/i>	
				<ol type="lower-alpha">
					<li><a href="what_is.php#framework">OSEE Application Framework</a></li>
				</ol>
			<li><b>OSEE Installation & Initialization</b></li>
				<ol type="lower-alpha">
					<li><a href="installation/requirements.php">Requirements</a></li>
					<li><a href="installation/eclipse_install.php">Eclipse Installation</a></li>
					<li><a href="installation/supported_databases.php">Supported Databases</a></li>
						<ol type="lower-roman">
							<li><a href="installation/derby_install.php">Derby Installation</a></li>
							<li><a href="installation/postgresql_install.php">PostgreSQL Installation</a></li>
						</ol>
					<li><a href="installation/db_init.php">Database Initialization</a></li>
				</ol>
			<li><a href="launch/osee_launch.php">OSEE Launch & Configuration</a><l/i>
			
			<li><b>System Overview</b></li>				
				<ol type="lower-alpha">
					<li><a href="architecture/client_server_overview.php">Client/Server Overview</a></li>
				</ol>

			<li><a href="/osee/screencasts.php">Screencasts</a></li>
			<li><a href="/osee/faq.php">FAQ</a></li>
		</ol>
		
		<br/>
		<br/>	
		
		<h1>Needs Categorization</h1>
		<ul>		
			<li><a href="configuration/configandargs.php">Configuration and VM Arguments</a></li>
			<li><a href="gettingStarted/concepts/arch.php">Architecture</li>
			<li><a href="gettingStarted/concepts/TypeConfiguration.php">Data Types</a></li>
			<li><a href="ote/OSEE_Test_and_Simulation_Component.php">OSEE Test and Simulation Component</a></li>
			<li><a href="core/search/quick_search_view.php">Quick Search View</a></li>
			<li><a href="core/search/attribute_tagging.php">Attribute Tagging </a></li>

			<li><a href="core/xviewer/xviewer.php">XViewer - Advanced TreeViewer Widget</a></li>
		</ul>

		<h1>External References</h1>
		<li><a href="http://www.acq.osd.mil/jctd/articles/OTDRoadmapFinal.pdf">U.S. Department of Defense Open Technology Development</a></li>

	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>