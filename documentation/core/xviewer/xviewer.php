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
	$pageTitle 		= "OSEE - XViewer";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, XViewer, Eclipse, Define, ATS, OTE, Application Framework, Install";
	$pageAuthor		= "Donald G. Dunne";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

   XViewer has moved to <a href="http://www.eclipse.org/osee/xviewer">XViewer</a>. 
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
