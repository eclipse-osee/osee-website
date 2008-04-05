<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

require_once ($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
require_once ($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
require_once ($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
require_once ($_SERVER['DOCUMENT_ROOT'] . "/projects/common/project-info.class.php");
$projectInfo = new ProjectInfo("technology.osee");
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

      <h2>Bi-Directional Traceability</h2>
      From the first requirement that comes in to the last deliverable, all artifacts are stored, manipulated and configuration
      managed within OSEE.  Traceability from System to Subsystem to Software Requirements is created at the time of decomposition
      and maintained as an integral part of the engineering process.  Through tightly integrated configuration management and
      OSEE built-in workflow engine, users are more easily able to follow complex lifecycles of engineering.  Graphical editors
      allow the visualization and navigation of the artifacts in the system.  Any user can walk the path in either direction from
      the customer requirement down to the code unit and even the verification, validation and integration tests.
		<br><br>
      <img align="center" src="images/OSEETrace.gif" border="0" />

      <h2>Integrated Process and Workflow</h2>
      Integrating processes and workflow into OSEE allows engineers to focus more on engineering and less on process 
      training and manually reporting metrics.  Workflows are graphically defined and stored in OSEE.  Each individual
      or team that is required to work on an improvement or problem can have a uniquely configured set of states and 
      transitions.  Widgets needed to graphically view and edit data throughout the workflow is configured using a rich
      widget XML specification that declares the widget type, it's storage object and certain display attributes.
		<br><br>
      <img align="center" src="images/AtsTeamWorkflow.gif" border="0" />
		<br><br>
      OSEE reads these workflows and dynamically generates the necessary editor components to walk the user through
      the process.  Specific conditions necessary in the process are defined through these workflows, object permissions and 
      configured rules.  These conditions can include the automatic creation of review workflows, kickoff of other
      related workflows, automated notifications and even the generation or publication of reports.
		<br><br>
      <img align="center" src="images/AtsEditor.gif" border="0" />
      
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
