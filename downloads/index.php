<?php  																														
   require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
   require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
   require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
   $App 	= new App();
   $Nav	= new Nav();
   $Menu = new Menu();
   include($App->getProjectCommon());
	
   #*****************************************************************************
   	
	$pageTitle 		= "OSEE - Downloads";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Define, ATS, OTE, Application Framework";
	$pageAuthor		= "Roberto E. Escobar";
	
	$release_version      = "0.9.4";
   $externalDownloadsSite = "http://osee.microdoc.com/node/2";
   $configandargs="documentation/configuration/configandargs.php";
   
   #*****************************************************************************
	
	$html  = '<div id="midcolumn">';
	$html .= file_get_contents('_index.html');
	$html .= "</div>";
	
	$html = preg_replace('/@RELEASE_VERSION@/', $release_version, $html);
	$html = preg_replace('/@EXTERNAL_DOWNLOADS_SITE@/', $externalDownloadsSite, $html);
	$html = preg_replace('/@CONFIG_AND_ARGS@/', $configandargs, $html);
	
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
