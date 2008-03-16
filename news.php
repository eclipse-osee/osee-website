<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Denis Roy
	# Date:			2005-06-16
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "OSEE News and Events";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Define, ATS, OTE, Application Framework";
	$pageAuthor		= "Ryan D. Brooks; Donald G. Dunne";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>12/17/2007 - Talks accepted for EclipseCon 2008</h2>
<a href="https://eclipsecon.greenmeetingsystems.com/submissions/view/421">The Cure for Your Disconnected Toolset Headache</a> - Long Talk - Tools<br>
<a href="https://eclipsecon.greenmeetingsystems.com/submissions/view/428">Top 10 Deployment Secrets They Don't Want You To Know</a> - Short Talk - Emerging Technologies<br>
<a href="https://eclipsecon.greenmeetingsystems.com/submissions/view/422">Open System Engineering Environment: An Integrated Solution</a> - Short Talk - Emerging Technologies<br>

		<h2>12/10/2007 - Demo Screencasts Available</h2>
      The Eclipse OSEE Project released demonstration screencasts to showcase the capabilities of OSEE.  These can be viewed seperately or used as a tutorial along side the OSEE Demo Installation.  Contact <a href="mailto: donald.g.dunne@boeing.com">Don Dunne</a> for details.<br>

		<h2>12/8/2007 - OSEE source code committed to Eclipse</h2>
      The OSEE Project released its first set of source code to the Eclipse SVN repository.  Screencasts will be provided as well as a demo installation within the week.<br>

		<h2>11/19/2007 - Proposed Talks for EclipseCon 2008</h2>
<a href="https://eclipsecon.greenmeetingsystems.com/submissions/view/421">The Cure for Your Disconnected Toolset Headache</a><br>
<a href="https://eclipsecon.greenmeetingsystems.com/submissions/view/428">Top 10 Deployment Secrets They Don't Want You To Know</a><br>
<a href="https://eclipsecon.greenmeetingsystems.com/submissions/view/431">Going Vertical: An Experience from the Aerospace Industry</a><br>
<a href="https://eclipsecon.greenmeetingsystems.com/submissions/view/422">Open System Engineering Environment: An Integrated Solution</a><br>
<a href="https://eclipsecon.greenmeetingsystems.com/submissions/view/425">Take Courage and Arm Yourself With The Right Tooling To Embrace Change</a><br><br>
		
	</div>
	
	<div id="rightcolumn">
     <div class="sideitem">
       <h6>Incubation</h6><p>
       <div align="center">
         <a href="/projects/what-is-incubation.php">
           <img align="center" src="/images/egg-incubation.png" border="0"/>
         </a>
       </div>
       <div align="center">  
         This project is in the 
         <a href="/projects/dev_process/validation-phase.php">Incubation Phase</a>
       </div>
     </div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
