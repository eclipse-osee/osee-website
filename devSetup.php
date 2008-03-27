<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "OSEE Developers Workspace Setup";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Define, ATS, OTE, Application Framework";
	$pageAuthor		= "Ryan D. Brooks; Donald G. Dunne";
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>
      This page is dedicated to steps necessary to get a development workspace up and running for OSEE.  Please contact us if anything
      here is not accurate or missing.
      
      <ol>
      <li>Install Java JDK 1.6<br>
      <li>Install Eclipse 3.3<br>
      <li>Startup Eclipse, select workspace<br>
      <li>Add SVN client to Eclipse by following instructions at <a href="http://www.polarion.org/index.php?page=download&project=subversive">
      http://www.polarion.org/index.php?page=download&project=subversive</a>. You will
      want to add all plugins available at Note:  This will allow you to connect to the OSEE SVN repositories AND OSEE uses some of these 
      plugins for compiling.<br>
      <li>Connect to the OSEE SVN repository and checkout all plugins.  You will connect using your committer username password or do an
      anonymous connection if you are not an OSEE committer.  Instructions are here <a href="http://wiki.eclipse.org/SVN_Howto">http://wiki.eclipse.org/SVN_Howto</a>.
      <br><li>OSEE uses the GEF's Zest Visualization plugins.  To resolve these dependencies, you will need to anonymously connect to the /cvsroot/tools 
      CVS repository, expand out the org.eclipse.gef project and check out org.eclilpse.zest.core and org.eclipse.zest.layouts projects.  
      Instructions on doing this are at <a href="http://wiki.eclipse.org/index.php/CVS_Howto">http://wiki.eclipse.org/index.php/CVS_Howto</a> 
      </ol>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
