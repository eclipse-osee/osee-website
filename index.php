<?php  																														
   require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
   require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
   require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
   
   $App 	= new App();
   $Nav	= new Nav();
   $Menu = new Menu();
   
   include($App->getProjectCommon());
   
   #*****************************************************************************
      
	$pageTitle 			= "Open System Engineering Environment";
	$pageKeywords		= "eclipse, osee";
	include("sharedEnv.php");
	
   #*****************************************************************************
   #*****************************************************************************

	#$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/osee/style.css"/>');
	
	$html  = '<div id="bigbuttons">';
	$html .= file_get_contents('_pageHeader.html');
   $html .= '</div>';
	
	$html .= '<div id="midcolumn">';
	$html .= file_get_contents('_index.html');
	$html .= '</div>';
	
	$html .= '<div id="rightcolumn">';
	$html .= '<div class="sideitem">';
	$html .= file_get_contents('_sidePanel.html');
	$html .= '</div>';
	$html .= '</div>';

	$html = preg_replace('/@RELEASE_VERSION@/', $release_version, $html);
		
	# Generate the web page
	$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
