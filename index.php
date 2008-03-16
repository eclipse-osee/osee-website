<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

require_once ($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
require_once ($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
require_once ($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
require_once ($_SERVER['DOCUMENT_ROOT'] . "/projects/common/project-info.class.php");
$projectInfo = new ProjectInfo("technology.alf");
$App = new App();
$Nav = new Nav();
$Menu = new Menu();
include ($App->getProjectCommon()); # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	# index.php
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Open System Engineering Environment";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Define, ATS, OTE, Application Framework";
	$pageAuthor		= "Ryan D. Brooks; Donald G. Dunne";
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>
			OSEE provides a tightly integrated environment that supports lean engineering.  
			It is integrated around a simple, user-definable data model to eloquently 
			provide bidirectional traceability across the full product life-cycle 
			including: architecture and design, requirements management, implementation, 
			verification, and validation.
		<br><br>
      <a href="http://www.eclipse.org/downloads/download.php?file=/technology/osee/2.0%20OSEE%20Overview%20Screencast.zip">OSEE Overview</a> - This screencast provides an overview of OSEE including the driving forces that caused it's creation, it's architecture, the maturity of the application framework and the status and maturity of the different applications that use the framework.<br>

		<br><br>
      <a href="http://en.wikipedia.org/wiki/V_model" target="_blank"><img align="center" src="images/VDiagram_sm.png" border="0" /></a>
      <br>
      <a href="http://en.wikipedia.org/wiki/V_model" target="_blank" align="center">V-Model - http://en.wikipedia.org/wiki/V_model</a>
      
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
				<li><a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.technology.osee" target="_blank">OSEE Newsgroup</a></li>
				<li><a href="http://www.eclipse.org/proposals/osee/" target="_blank">OSEE Proposal</a></li>
			</ul>
		</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
