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
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "What is OSEE?";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Define, ATS, OTE, Application Framework";
	$pageAuthor		= "Roberto E. Escobar";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<div id="midcolumn" style="width:95%">
		<h1>$pageTitle</h1>
		
	<p>
	OSEE or Open System Engineering Environment is a tightly integrated environment designed to support lean 
	engineering principles across a product's full life-cycle in the context of an overall systems engineering 
	approach.  The system captures project data into a common user-defined data model providing bidirectional 
	traceability, project health reporting, status, and metrics which seamlessly combine to form a coherent, 
	accurate view of a project in real-time.  By providing an extensible platform consisting of configuration management, 
	requirements management, testing, validation, and project management, OSEE is aims to become the industry's
	all-in-one open source systems engineering platform of choice. 
	</p>
	
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>