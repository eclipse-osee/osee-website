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
      
		<div class="homeitem">	
			<h3>What's New</h3>
			<ul>
				<li>
					<a href="http://www.eclipse.org/osee/downloads.php">OSEE 0.4.0</a> was released on 
					<span class="dates">
						2008-09-24
					</span>
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
