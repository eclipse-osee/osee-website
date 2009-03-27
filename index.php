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
		<td class="date">2009/03/12</td>
		<td><b>Updated <a href="http://www.eclipse.org/osee/downloads.php">OSEE 0.7.0 Integration Build (Incubation)</a> available </b>
		</td>
	</tr>
 	<tr>
		<td class="date">2009/03/23</td>
		<td><b><a href="http://www.eclipse.org/osee/OSEE_eclipsecon2009_tutorial_slides.pdf">From www.eclipse.org/osee to deployment - Tutorial</a></b>
			<div class="details">
					Introduces new and current users to the latest features available in OSEE 0.7.0.<br/> 
					Describes how a company can deploy and configure OSEE to meet its needs.<br/>
					Click the following link to download the material: <a href="http://www.eclipse.org/osee/OSEE_eclipsecon2009_tutorial_materials.zip">'OSEE Tutorial Material'</a>
			</div>
       </td>
	</tr> 
	 <tr>
		<td class="date">2009/03/25</td>
		<td><b><a href="http://www.eclipse.org/osee/xviewer/XViewer.pdf">XViewer - An SWT Widget with the power of the spreadsheet</a></b>
			<div class="details">
					Introduces users to XViewer features and capabilities.<br/> Describes how users can incorporate the XViewer into their GUIs.<br/>
					Click the following link to download the material: <a href="http://www.eclipse.org/osee/xviewer/org_eclipse_nebula_widgets_xviewer.zip">'XViewer Code and Example'</a>
			</div>
       </td>
	</tr> 
	  <tr>
		<td class="date">2009/03/25</td>
		<td><b><a href="http://www.eclipse.org/osee/OTE_eclipsecon2009_slides.pdf">An Integrated Test Environment for Systems Engineering</a></b>
			<div class="details">
			Short introduction to features provided by OSEE's newest component - the Open System Engineering Test Environment Framework
			</div>
       </td>
	</tr> 
   	<tr>
		<td class="date">2009/03/26</td>
		<td><b><a href="http://www.eclipse.org/osee/Unlocking_the_OSEE_Core_Framework.pdf">Unlocking the OSEE Core Framework</a></b>
			<div class="details">
					Short introduction to OSEE's core framework services and how developers can incorporate them into their applications.
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
