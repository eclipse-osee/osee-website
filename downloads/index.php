<?php  																														
   require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
   require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
   require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
   $App 	= new App();
   $Nav	= new Nav();
   $Menu = new Menu();
   include($App->getProjectCommon());
   include("../sharedEnv.php");
	
   #*****************************************************************************

	$pageTitle 		= "OSEE - Downloads";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Define, ATS, OTE, Application Framework";
	$pageAuthor		= "Roberto E. Escobar";
	$postgres_bundle 		 = "https://github.com/osee-dev/osee.external.releases/raw/master/org.eclipse.ip/org.postgresql.driver_8.3.0.v201703031753-REL.jar"
   $config_args="http://wiki.eclipse.org/OSEE/Developers_Guide#Configuration_Properties";
   
   #*****************************************************************************
	
	$html  = '<div id="midcolumn">';
	$html .= file_get_contents('_index.html');
	$html .= "</div>";
	
	$html = preg_replace('/@RELEASE_VERSION@/', $release_version, $html);
	$html = preg_replace('/@POSTGRES_BUNDLE@/', $postgres_bundle, $html);
	$html = preg_replace('/@CONFIG_AND_ARGS@/', $config_args, $html);
	
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
