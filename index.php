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
			OSEE provides a tightly integrated environment that supports lean engineering across the full product life-cycle. Since OSEE integrates all engineering areas, the full lifecycle data for a product is managed by a common platform allowing this data to be seamlessly combined to form a coherent, accurate view of a project in real-time. At the heart of the OSEE architecture are the OSEE core services and application framework which are available to all the OSEE applications and enable their tight integration.<br><br>
			
<a href="http://www.eclipse.org/downloads/download.php?file=/technology/osee/2.0%20OSEE%20Overview%20Screencast.zip">OSEE Overview</a> - This screencast provides an overview of OSEE including the driving forces that caused it's creation, it's architecture, the maturity of the application framework and the status and maturity of the different applications that use the framework.<br>

		<h2>Tutorials - Screencasts - Demo Installation</h2>
      In order to understand OSEE, the following screencasts are available that will help the user/developer/manager understand more about what OSEE is and what it can provide for any engineering project.<br><br>

      For those wishing to follow along and take OSEE for a test run, we also provides a demo installation that includes a copy OSEE and a database loaded with sample data.  Although the OSEE team is moving toward providing the demo installation downloadable from this site, it is currently only available directly from the team leads.  Please feel free to email <a href="mailto:donald.g.dunne@boeing.com">Don Dunne</a> or <a href="mailto:ryan.d.brooks@boeing.com">Ryan Brooks</a> to access a copy of this installation.  The installation is NOT required to view the following screencasts.<br><br>

<a href="http://www.eclipse.org/downloads/download.php?file=/technology/osee/1.0%20OSEE%20Demo%20Introduction%20Screencast.zip">OSEE Demo Introduction Screencast - START HERE</a> - This screencast introduces all the other screencasts that are available and describes the pre-requisites necessary for following along with the remainder of the screencasts.<br><br>

<a href="http://www.eclipse.org/downloads/download.php?file=/technology/osee/2.0%20OSEE%20Overview%20Screencast.zip">OSEE Overview</a> - This screencast provides an overview of OSEE including the driving forces that caused it's creation, it's architecture, the maturity of the application framework and the status and maturity of the different applications that use the framework.<br><br>

<a href="http://www.eclipse.org/downloads/download.php?file=/technology/osee/3.0%20OSEE%20Skynet%20Introduction.zip">OSEE Application Framework Introduction</a> - This screencast introduces the application framework that OSEE applications use to persist their shared data.  It also gives an introduction to the generic views and editors that are available to all OSEE applications.<br><br>

<a href="http://www.eclipse.org/downloads/download.php?file=/technology/osee/4.0%20OSEE%20Demo%20Data%20Introduction%20Screencast.zip">OSEE Demo Data Introduction</a> - This screencast introduces the data that is loaded into the OSEE Demo database for use by these screencasts.  This helps the user understand how the data for an engineering environment fits into Application Framework and will help clarify the OSEE Define and OSEE ATS screencast demos.<br><br>

<a href="http://www.eclipse.org/downloads/download.php?file=/technology/osee/5.0%20OSEE%20Define%20Introduction%20Screencats.zip">OSEE Define Introduction</a> - This screencast introduces OSEE Define, the requirements and document management application that is built into OSEE.  It will introduce the difference between requirements and document management and how both types are imported into OSEE.  It will also introduce editing artifacts directly on the main branch, using working branches and show the basics of relating artifacts to each-other.<br><br>

<a href="http://www.eclipse.org/downloads/download.php?file=/technology/osee/6.0%20OSEE%20ATS%20Introduction%20Screencast.zip">OSEE Action Tracking System (ATS) Introduction</a> - This screencast introduces OSEE ATS, the integrated configuration management/change request application built into OSEE.  It will introduce the purpose of creating an integrated change management system, the terms and objects used in ATS, the benefits of integrated processes and configured workflows in an integrated environment and the scenarios of creating and transitioning an action to completion.  It will also walk through a simple configuration of ATS for a new product and briefly introduce the peer review framework that is available.<br><br>

		<h1>Latest News</h1>
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
