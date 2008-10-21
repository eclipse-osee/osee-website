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
		<a href="gettingStarted/gettingStarted.php">Getting started</a><br/>
		<a href="OSEE_Test_and_Simulation_Component.php">Getting started</a><br/>
	<br/>
	</div>	

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>