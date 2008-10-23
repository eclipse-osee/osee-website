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
	$pageTitle 		= "Eclipse OSEE - Documentation";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Define, ATS, OTE, Application Framework";
	$pageAuthor		= "Roberto E. Escobar";
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<div id="midcolumn" style="width:95%">
		<h1>OSEE User Guide</h1>
		<li><a href="gettingStarted/gettingStarted.php">Getting started</a></li>
		<li><a href="OSEE_Test_and_Simulation_Component.php">OSEE Test and Simulation Component</a></li>
		<li><a href="search/quick_search_view.php">Quick Search View</a></li>
		<li><a href="search/attribute_tagging.php">Attribute Tagging </a></li>
		
		<h1>External References</h1>
		<li><a href="http://www.acq.osd.mil/jctd/articles/OTDRoadmapFinal.pdf">U.S. Department of Defense Open Technology Development</a></li>
	</div>	

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>