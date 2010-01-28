<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

require_once ($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
require_once ($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
require_once ($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
require_once ($_SERVER['DOCUMENT_ROOT'] . "/projects/common/project-info.class.php");
$projectInfo = new ProjectInfo("technology.osee");
$App = new App();
$Nav = new Nav();
$Menu = new Menu();
include ($App->getProjectCommon()); 
# All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	# index.php
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Open System Engineering Environment";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Define, ATS, OTE, Application Framework, Configuration Management, Requirements Management, Project Managements, Test, Simulation";
	$pageAuthor		= "Roberto E. Escobar";
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<table>
		<tr>
		<td>
		<a href="http://en.wikipedia.org/wiki/V_model" target="_self">
		<img align="left" src="images/VDiagram_sm.png" style="padding-right:10px;width:320px;height:166px;" alt="V-Model"/></a>
		</td>
		</tr>
		<tr>
		<td>		
<p>The Open System Engineering Environment (OSEE) project provides a tightly integrated environment supporting 
lean principles across a product's full life-cycle in the context of an overall systems engineering approach.  The 
system captures project data into a common user-defined data model providing bidirectional traceability, project 
health reporting, status, and metrics which seamlessly combine to form a coherent, accurate view of a project in 
real-time.  By building on top of this data model, OSEE has been architected to provide an all-in-one solution 
to configuration management, requirements management, testing, validation, and project management.  All of these 
work together to help an organization achieve lean objectives by reducing management activities, eliminating data 
duplication, reducing cycle-time through streamlined processes, and improving overall product quality through 
work flow standardization and early defect detection.</p>
		</td>
		</tr>
        </table>
        
  <div class="homeitem">	
  <h3>What's New</h3>
  <table class="newsPosts" cellspacing="0" cellpadding="0">

	<tr>
		<td class="date">25 Jan 2010</td>
		<td><b><a href="http://www.eclipse.org/osee/downloads.php">OSEE 0.9.1 is Available</a></b></td>
	</tr>
	<tr>
		<td class="date">18 Dec 2009</td>
		<td><b>Talks submitted for EclipseCon 2010</b>
			<div class="details">
			<a href="https://www.eclipsecon.org/submissions/2010/view_talk.php?id=1511">Eclipse and the development of mission/safety-critical systems</a><br>
			<a href="https://www.eclipsecon.org/submissions/2010/view_talk.php?id=1507">Xtext and GEF deliver editors for the Open System Engineering Environment</a><br>
			<a href="https://www.eclipsecon.org/submissions/2010/view_talk.php?id=1490">The users don't really know what they want!</a><br>
			<a href="https://www.eclipsecon.org/submissions/2010/view_talk.php?id=1488">What do we do with all that data?</a><br>
			</div>
		</td>
	</tr>
	<tr>
		<td class="date">29 Oct 2009</td>
		<td><b><a href="http://blogs.itemis.de/sasidharan/2009/10/29/mission-accomplished/">Independent assessment of OSEE presented at Eclipse Summit</a></b></td>
	</tr>
	<tr>
		<td class="date">26 Oct 2009</td>
		<td><b>Updated <a href="http://www.eclipse.org/osee/downloads.php">OSEE 0.8.3 Milestone Build (Incubation)</a> available </b>
		</td>
	</tr>
   <tr>
		<td class="date">26 Mar 2009</td>
		<td><b><a href="http://www.eclipse.org/osee/Unlocking_the_OSEE_Core_Framework.pdf">Unlocking the OSEE Core Framework</a></b>
			<div class="details">
					Short introduction to OSEE's core framework services and how developers can incorporate them into their applications.
			</div>
       </td>
	</tr> 
	 <tr>
		<td class="date">25 Mar 2009</td>
		<td><b><a href="http://www.eclipse.org/osee/xviewer/XViewer.pdf">XViewer - An SWT Widget with the power of the spreadsheet</a></b>
			<div class="details">
					Introduces users to XViewer features and capabilities.<br/> Describes how users can incorporate the XViewer into their GUIs.<br/>
					Click the following link to download the material: <a href="http://www.eclipse.org/osee/xviewer/org_eclipse_nebula_widgets_xviewer.zip">'XViewer Code and Example'</a>
			</div>
       </td>
	</tr> 
	  <tr>
		<td class="date">25 Mar 2009</td>
		<td><b><a href="http://www.eclipse.org/osee/OTE_eclipsecon2009_slides.pdf">An Integrated Test Environment for Systems Engineering</a></b>
			<div class="details">
			Short introduction to features provided by OSEE's newest component - the Open System Engineering Test Environment Framework
			</div>
       </td>
	</tr> 

	</table>
	</div>
        
      <div class="homeitem">
      <h3>New to OSEE?</h3>
      	<ul>
      		<li>
      		   <a href="http://www.eclipse.org/downloads/download.php?file=/technology/osee/2.0%20OSEE%20Overview%20Screencast.zip">
      		   OSEE Overview</a> - This screencast provides an overview of OSEE including the driving forces that caused it's creation, 
      		   it's architecture, the maturity of the application framework and the status and maturity of the different applications 
      		   that use the framework.
      		</li>
      		<li>
      			<a href="http://wiki.eclipse.org/OSEE/Tutorial">OSEE Tutorial</a>
      		</li>
      	</ul>
      </div>
  </div>

	<div id="rightcolumn">
		$sidebar
     </div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
