<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
	$App = new App();
	$Nav = new Nav();
	$Menu = new Menu();
	include($App->getProjectCommon());
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "OSEE Architecture";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Define, ATS, OTE, Application Framework";
	$pageAuthor		= "Ryan D. Brooks; Donald G. Dunne";
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>
		
		<p>Although there is quite a bit to understand about the Architecture of OSEE, the main thing to understand right away
		is that OSEE provides an Extensible Framework called the OSEE Application Framework and also provides some Exemplary
		Applications built on this framework in the form of OSEE Define (the Requirements Management application) and OSEE ATS
		(Action Tracking System; the Configuration Management application).
		</p>
		
		<p>
		The Application Framework provides all the necessary services to allow the application(s) to persist and share data
		in a common-version controlled object database.
		</p>
		
		<p>
		Just like Eclipse provides the ability to add a plugin to the existing Eclipse environment, so OSEE allows other 
		applications to add plugins and share the common data storage.
		</p>
		
		<p>
		And just like Eclipse RCP allows an application to be built and deployed using the Eclipse framework but not include all the
		Exemplary applications like JDT, OSEE allows an application to be built and deployed using the OSEE Application 
		Framework without including such applications as OSEE Define and OSEE ATS.
		</p>
		<br><br>
      <img style="width:85%;height:85%;" align="center" src="/osee/images/OSEEArchitecture.gif" border="0"/>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
