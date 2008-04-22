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
      <ol>
      <li><a href="#whatisosee">What is OSEE?</a>
		<li><a href="#isoseeanapplication">Is OSEE an application framework or an application?</a>
      <li><a href="#whatisaworkingbranch">What is a Working Branch?</a>
		<li><a href="#whatareartifacts">What are Artifacts, Attributes and Relations?</a>
		<li><a href="#whatarebranches">What are Branches and how are they used in OSEE?</a>
		<li><a href="#whyosee">Other products sound similar.  Why OSEE?</a>
		<li><a href="#onlyavionics">Is OSEE only for Avionics Engineering?</a>
	   <li><a href="#whatisdefine">What is the OSEE Define?</a>
	   <li><a href="#whatisats">What is the OSEE ATS?</a>
		<li><a href="#bugtracking">Why build yet another bug tracking tool like the Action Tracking System (ATS)?</a>
		<li><a href="#importword">Can I import existing Word documents into OSEE?</a>
		<li><a href="#newtable">Do I have to create a new database table for every type of Artifact that I want to use</a>
		<li><a href="#customizeartifacttypes">Do I have to use the Artifact types that are built into OSEE?</a>
		<li><a href="#havetouseword">Do I have to use Microsoft Word to enter my requirements?</a>
      </ol>
      <a name="whatisosee"/>
		<h3>What is OSEE?</h3>
      OSEE provides a tightly integrated environment that supports lean engineering.  It is integrated around a simple, 
      user-definable data model to eloquently provide bidirectional traceability across the full product life-cycle 
      including: architecture and design, requirements management, implementation, verification, and validation.

      <a name="isoseeanapplication"/>
		<h3>Is OSEE an application framework or an application?</h3>
		The simple answer is BOTH.  OSEE Application Framework is created to allow applications to be built
		on top and share the common data model.  This can be used independently of any OSEE applications.  In addition,
		there are applications that are delivered with and use the OSEE Application Framework.  This includes a full
		featured Requirements and Document Management System (OSEE Define), a powerful change tracking and configuration
		management application (OSEE ATS - Action Tracking System), a fully customizable peer-review module and 
		other project, reporting and metrics tools.  These application can be used out-of-the-box and new applications
		can be created or integrated on the framework to share and contribute to the same data.

      <a name="whatareartifacts"/>
		<h3>What are Artifacts, Attributes and Relations?</h3>
Artifacts: Any data object stored within OSEE.  This is a strongly typed object that can store any data throughout the lifecycle of systems engineering.  From meeting minutes to architecture diagrams, processes to requirements, artifacts are the main object within OSEE's data store.   There may be a "Software Requirement" artifact defined to hold the requirements at a software level or a "User" artifact defined to hold data associated to an OSEE user.<br><br>

Attributes: Metadata attached to any Artifact.  With the example of a "Software Requirement" artifact, the attributes may be "Qualification Method", "Safety Criticality" or "Subsystem".  For a "User" artifact, the attributes would be "Email", "Name" and "Phone".<br><br>

Relations: The link between artifacts.  These too are strongly typed such that you can relate a "User" to a "Meeting" that they attended.  Or   relate the high level customer requirements to the lower level software requirements that satisfy them.  These relations can also have "Rationale" stored which gives the user the ability to note why the relation exists.
		
      <a name="whatarebranches"/>
		<h3>What are Branches and how are they used in OSEE?</h3>
      One of the problems OSEE intended to solve was to be able to manage Variants or Product Lines.  After a set of
      requirements is developed, it may become the baseline for variant sets of requirements for similar products.
      In other words, you may develop the same product for another customer, but have slight changes to the
      requirements, code and test for features specific to that customer.  Historically, this would mean maintaining
      completely separate "copies" of all the requirements and other artifacts.  This is costly to maintain when
      changes from the baseline artifacts are required to be propogated to the other product line.  Add 5 or 10 more
      customers with different needs and this becomes a major undertaking.<br><br>OSEE provides the capability to create
      these variant branches and maintain not only the record of where these branches came from, but also enables
      changes made to the baseline branches to be easily committed to the variants.  In addition, OSEE manages these
      variants in an efficient manner such that only the changed requirements (or artifacts) are "copied".<br><br>

      <a name="whatisaworkingbranch"/>
		<h3>What is a Working Branch?</h3>
      A working branch is simply a sandbox area for a users to make changes and perform reviews before committing
      to the baseline branch.<br><br>
      On complex systems engineering, requirements, and other artifacts, can be developed by hundreds of engineers.
      To have requirements "locked" while they are being modified by one user can cause significant delays in
      schedule.  The need for parallel development (multiple users working on the same requirements) 
      is a necessity to keeping a project moving forward.  In addition, users making mistakes need the ability
      to revert or throw away their changes and start over without polluting the baseline branch and teams also
      need the ablity to review changes before committing them to main baseline.  This is done using working branches.

      <a name="whyosee"/>
		<h3>Other products sound similar.  Why OSEE?</h3>
		<ol>
      <li>Open Source Extensible Platform
		<li>Open Eclipse Project w/ Collaboration
		<li>Tight Integration Around A Common Data Model
		<li>Full Lifecycle Engineering Environment
		</ol>

      <a name="onlyavionics"/>
		<h3>Is OSEE only for Avionics Engineering?</h3>
		No.  OSEE's was created by The Boeing Company in support of the Apache AH-64 Attack Helicopter flight control
		software.  Although it was created for the complexity of a large US Department of Defense program, it was
		architected to support any systems engineering project from a simple application built for a customer to a 
		large complex application like the Apache flight controls.  In addition, since OSEE is an application on
		it's own, the OSEE Team uses OSEE to develop, deploy and maintain OSEE.

      <a name="whatisdefine"/>
	   <h3>What is the OSEE Define?</h3>
		OSEE Define is OSEE's advanced Requirements and Document Management System.  OSEE Define can be used to
		track a simple application's requirements, code and test or configured to support a large program
		doing concurrent development with multiple parallel builds and manage requirements for multiple product
		lines simultaneously.  Although any application file (document) can be stored and managed, OSEE Define
		is tightly integrated with Microsoft Word(c) to store and manage individual requirement objects (stored
		in XML) and provide advanced features like index based searching and showing differences between historical
		changes.  Integrated tightly with the Action Tracking System, OSEE Define can be configured to provide
		advanced configuration management for any set of requirements object.

      <a name="whatisats"/>
	   <h3>What is the Action Tracking System (ATS)?</h3>
		The Action Tracking System is the tightly integrated configuration management system built in OSEE and
		very tightly integrated with the OSEE Application Framework.  It uses a powerful workflow engine to
		provides a fully customizeable workflow to track improvements, problems and support for any number of 
		teams/tools/programs simultaneously.  This gives the user a single point view into all the work that
		they are required to do.
	
      <a name="bugtracking"/>
		<h3>Why build yet another bug tracking tool like the Action Tracking System (ATS)?</h3>
		Although there are a number of open source and commercial bug tracking systems available, OSEE's goal to
		integrate workflow management and provide a tight integration with the Application Framework, and the
		applications built on top, required us to develop ATS.  ATS is meant to be more than simple bug tracking
		since it can be used to manage mutliple teams working on multiple products or support simultaneously.
		This means that you can create a single "Action" to "Fix the XYZ capability" that will create the
		necessary workflows for all the teams that need to perform work.  For example, a workflow may be created
		for not only the Software Development team, but also the test team, documentation team, integration team
		and even facilities like labs or conference rooms.  Each team then moves intependently through its
		workflow to perform the work necessary for the common "Action".  In addition, ATS enables complete 
      customization of different workflows for each configured team.  This means that the documentation team
      can follow their own "process" which may contain 5 different states while the application developers can 
      follow their own more complex "process" which may contain 30 different states.

      <a name="importword"/>
		<h3>Can I import existing Word documents into OSEE?</h3>
      Yes.  OSEE will import existing Word documents and atomize them by their paragraph sections.  The only requirement is that the paragraph are specified as "Heading" type.

      <a name="newtable"/>
		<h3>Do I have to create a new database table for every type of Artifact that I want to use</h3>
Quick Answer: No<br>

The OSEE Architecture Framework uses a common table structure to store all types of artifacts, attributes and relations.  This allows the users to dynamically create and start using new objects without major database modification.
      
      <a name="customizeartifacttypes"/>
		<h3>Do I have to use the Artifact types that are built into OSEE?</h3>
Quick Answer: No<br><br>

All Artifact Types, Attribute Types and Relation Types (with a few exceptions) are fully customizable.  Although OSEE was initially built for capturing all data throughout the lifecycle of a large avionics systems engineering project, it was architected to store any data by simply defining a different data model to use.<br><br>

In addition, these data models can be dynamically modified.  New Artifacts, Attributes and Relations can be specified at anytime (and even by end users if allowed).  Modification and deletion of these can be performed with some administrative back-end tools with the understanding that you would need to determine what to do with the removed data.

      <a name="havetouseword"/>
		<h3>Do I have to use Microsoft Word to enter my requirements?</h3>
Quick Answer: No<br><br>

This question comes up when users find out that OSEE is integrated with Microsoft Word as one method to enter artifact data such as requirements.<br><br>

OSEE uses Artifacts, Attributes and Relations to store information in it's data store.  The Attributes associated with   a certain Artifact can be boolean, text, date, float or any newly created attribute type.  One such attribute type is a "Word Content" attribute.  This allows word content to be added as an attribute to an Artifact.  This attribute, however, is not required to be used.  One could define a "Software Requirement" to be any set of Attribute types that must/can be entered.  Although, Word is more tightly integrated into OSEE, the architecture provides for other editing applications to be plugged in.  One area of interest would be to allow Open Office to edit requirements.<br><br>

In addition to this specific type of Attribute, OSEE does allows any operating system file to be dragged in and created as an Artifact.  This artifact, when opened, will extract its data and present it to the operating system to allow viewing and editing.  This allows things like requirements to be specified by other modeling, diagraming or even mathematical applications that OSEE doesn't know about.  These artifacts can have their own metadata associated and also be related to other artifacts in the system.<br><br>

	</div>
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
