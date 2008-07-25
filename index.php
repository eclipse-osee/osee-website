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
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Define, ATS, OTE, Application Framework";
	$pageAuthor		= "Roberto E. Escobar";
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="midcolumn">
	<div id="intro">
		<h1>$pageTitle</h1>
		
		<a href="http://en.wikipedia.org/wiki/V_model" target="_self">
		<img align="left" src="images/VDiagram_sm.png" style="padding-right:10px;width:320px;height:166px;" alt="V-Model"/></a>		
		<p>OSEE provides a tightly integrated environment that supports lean engineering. 
		   It is integrated around a simple, user-definable data model to eloquently provide bidirectional 
		   traceability across the full product life-cycle including: architecture and design, requirements management, implementation, 
		   verification, and validation.
		</p>
		
		<h3>General Features:</h3>
		<ul>
			<li>Bi-Directional Traceability</li>
			<li>Integrated Process and Workflow</li>
		</ul>
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
      
		<div class="homeitem">	
			<h3>What's New</h3>
			<ul>
				<li>
					<a href="">OSEE 0.4.0 RC 1</a> will be released on 
					<span class="dates">
						07/28/08
					</span>
					. Stay Tuned.
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
