<?php  																														
   require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
   require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
   require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
   $App 	= new App();
   $Nav	= new Nav();
   $Menu = new Menu();
   include($App->getProjectCommon());
   
   #*****************************************************************************
	
	$pageTitle 		= "OSEE - Contacts";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Define, ATS, OTE, Application Framework";
	
	#*****************************************************************************
	
	$html  = '<div id="midcolumn">';
	$html .= file_get_contents('_index.html');
	$html .= '</div>';
	
	$html .= '<div id="rightcolumn">';
	$html .= '<div class="sideitem">';
	$html .= file_get_contents('_sidePanel.html');
	$html .= '</div>';
	$html .= '</div>';
	
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
