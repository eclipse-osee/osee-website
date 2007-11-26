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
	$pageTitle 		= "Open System Engineering Environment";
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
		<h2>What is OSEE?</h2>
			OSEE provides a tightly integrated environment that supports lean engineering across the full product life-cycle. Since OSEE integrates all engineering areas, the full lifecycle data for a product is managed by a common platform allowing this data to be seamlessly combined to form a coherent, accurate view of a project in real-time. At the heart of the OSEE architecture are the OSEE core services and application framework which are available to all the OSEE applications and enable their tight integration.
			
			
		<h2>EclipseCon 2008 - Proposed Talks?</h2>
<a href="https://eclipsecon.greenmeetingsystems.com/submissions/view/421">The Cure for Your Disconnected Toolset Headache</a><br>
<a href="https://eclipsecon.greenmeetingsystems.com/submissions/view/428">Top 10 Deployment Secrets They Don't Want You To Know</a><br>
<a href="https://eclipsecon.greenmeetingsystems.com/submissions/view/431">Going Vertical: An Experience from the Aerospace Industry</a><br>
<a href="https://eclipsecon.greenmeetingsystems.com/submissions/view/422">Open System Engineering Environment: An Integrated Solution</a><br>
<a href="https://eclipsecon.greenmeetingsystems.com/submissions/view/425">Take Courage and Arm Yourself With The Right Tooling To Embrace Change</a>
		
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

	  <div class="sideitem">
			<h6>Links</h6>
			<ul>
				<li><a href="http://www.eclipse.org/proposals/osee/" target="_blank">Project Proposal</a></li>
			</ul>
		</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
