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
	$release_version      = "0.24.4.v201703241706-REL";
	$postgres_bundle 		 = "https://storage.googleapis.com/google-code-archive-downloads/v2/code.google.com/osee-external/org.ecilpse.osee.server_postgresql_0.9.1_incubation_updated.zip";
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
