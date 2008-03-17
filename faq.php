<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	# faq.php
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "OSEE FAQs";
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
      OSEE provides a tightly integrated environment that supports lean engineering.  It is integrated around a simple, 
      user-definable data model to eloquently provide bidirectional traceability across the full product life-cycle 
      including: architecture and design, requirements management, implementation, verification, and validation.

		<h2>Other products sound similar.  Why OSEE?</h2>
		<ol>
      <li>Open Source Extensible Platform
		<li>Open Eclipse Project w/ Collaboration
		<li>Tight Integration Around A Common Data Model
		<li>Full Lifecycle Engineering Environment
		</ol>

		<h2>Is OSEE an application framework or an application?</h2>
		The simple answer is BOTH.  OSEE Application Framework is created to allow applications to be built
		on top and share the common data model.  This can be used independently of any OSEE applications.  In addition,
		there are applications that are delivered with and use the OSEE Application Framework.  This includes a full
		featured Requirements and Document Management System (OSEE Define), a powerful change tracking and configuration
		management application (OSEE ATS - Action Tracking System), a fully customizable peer-review module and 
		other project, reporting and metrics tools.  These application can be used out-of-the-box and new applications
		can be created or integrated on the framework to share and contribute to the same data.

		<h2>Is OSEE only for Avionics Engineering?</h2>
		No.  OSEE's was created by The Boeing Company in support of the Apache AH-64 Attack Helicopter flight control
		software.  Although it was created for the complexity of a large US Department of Defense program, it was
		architected to support any systems engineering project from a simple application built for a customer to a 
		large complex application like the Apache flight controls.  In addition, since OSEE is an application on
		it's own, the OSEE Team uses OSEE to develop, deploy and maintain OSEE.

	   <h2>What is the OSEE Define?</h2>
		OSEE Define is OSEE's advanced Requirements and Document Management System.  OSEE Define can be used to
		track a simple application's requirements, code and test or configured to support a large program
		doing concurrent development with multiple parallel builds and manage requirements for multiple product
		lines simultaneously.  Although any application file (document) can be stored and managed, OSEE Define
		is tightly integrated with Microsoft Word(c) to store and manage individual requirement objects (stored
		in XML) and provide advanced features like index based searching and showing differences between historical
		changes.  Integrated tightly with the Action Tracking System, OSEE Define can be configured to provide
		advanced configuration management for any set of requirements object.

	   <h2>What is the Action Tracking System (ATS)?</h2>
		The Action Tracking System is the tightly integrated configuration management system built in OSEE and
		very tightly integrated with the OSEE Application Framework.  It uses a powerful workflow engine to
		provides a fully customizeable workflow to track improvements, problems and support for any number of 
		teams/tools/programs simultaneously.  This gives the user a single point view into all the work that
		they are required to do.
	
		<h2>Why build yet another bug tracking tool like the Action Tracking System (ATS)?</h2>
		Although there are a number of open source and commercial bug tracking systems available, OSEE's goal to
		integrate workflow management and provide a tight integration with the Application Framework, and the
		applications built on top, required us to develop ATS.  ATS is meant to be more than simple bug tracking
		since it can be used to manage mutliple teams working on multiple products or support simultaneously.
		This means that you can create a single "Action" to "Fix the XYZ capability" that will create the
		necessary workflows for all the teams that need to perform work.  For example, a workflow may be created
		for not only the Software Development team, but also the test team, documentation team, integration team
		and even facilities like labs or conference rooms.  Each team then moves intependently through its
		workflow to perform the work necessary for the common "Action".

	</div>
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
