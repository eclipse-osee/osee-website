<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
	$App = new App();
	$Nav = new Nav();
	$Menu = new Menu();
	include($App->getProjectCommon());
	# All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "OSEE - Components";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Define, ATS, OTE, Application Framework";
	$pageAuthor		= "Roberto E. Escobar";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>
	
	
	<div class="homeitem3col">
		<h4 id=framework name=framework>OSEE Application Framework</h4>
			<u>Key Capabilities</u>
			<ul>
				<li>Dynamic and strongly typed artifact model (persistence layer)</li>
				<li>Bidirectional traceability through typed relations model</li>
				<li>Advanced version control including multi-level branching</li>
				<li>Subject-based and object-based Access Control</li>
				<li>User management and authentication</li>
				<li>Dynamic searching API</li>
				<li>Indexing and tagging services</li>
				<li>Views and editors for the creation, manipulation, and navigation of artifacts, attributes, and relations</li>
				<li>Remote event service for communication and synchronization of OSEE instances</li>
				<li>Rules framework for text processing</li>
				<li>Utilities for plug-in developers</li>
				<li>Scheduling framework</li>
				<li>API for the extension and use of this framework to build tightly integrated applications</li>
				<li>Encryption Utility</li>
				<li>Database Utilities</li>
				<li>Jini Utilities</li>
				<li>Scheduling Service</li>
				<li>Datastore Adaptor</li>
			</ul>
	</div>
			

	<div class="homeitem3col">
		<h4 id=define name=define>Define</h4>
			<p>Define provides requirements and process management with tightly integrated change management using the Action Tracking System (ATS).  OSEE provides publishing capabilities that enable the creation of documents from smaller internal documents to the complex documents needed to meet military requirements for contract deliverables such as the Software Requirements Specification (SRS), System Performance Specification (SPS), Prime Item Development Specification (PIDS), and all the required traceability between them.</p>
			<u>Key Capabilities</u>
			<ul>	
				<li>Enterprise support for concurrent, distributed requirements development</li>
				<li>Integrated process and workflow</li>
				<li>Programmatic, bidirectional traceability</li>
				<li>End user navigation and search capabilities</li>
				<li>Capture accurate, meaningful review metrics</li>
				<li>Tight integration with lifecycle tools</li>
				<li>Automated change detection capabilities</li>
			</ul>
</div>
						
	<div class="homeitem3col">
		<h4 id=ats name=ats>Action Tracking System (ATS)</h4>
			<p>ATS is a tightly integrated change tracking system that manages changes throughout a product's lifecycle.  ATS provides integrated change management to all OSEE applications through user customizable workflows.</p>
			<u>Key Capabilities</u>
			<ul>			
				<li>Built on same OSEE application framework as requirements, code, test development</li>
				<li>Common Workflow Framework that provides for the creation of any number of simple to complex workflow state machine configurations that can work together during the engineering lifecycle</li>
				<li>Workflows are configured through graphical diagrams that ATS uses at runtime</li>
				<li>Configuration of ATS performed through OSEE�s common application framework enabling workflows to be created and modified without separate OSEE releases</li>
				<li>Advanced project planning capabilities and release management</li>
				<li>Duplication errors are minimized as items are automatically linked and data is shared</li>
				<li>Menus, Views and Editors give access to ATS while working in any other aspect in OSEE</li>
				<li>ATS is used to track changes and support issues for the development of OSEE itself</li>
				<li>Bug Icon allows quick Action creation against any OSEE integrated tool</li>
			</ul>
</div>
			
	<div class="homeitem3col">
		<h4 id=ote name=ote>OSEE Test Environment (OTE)</h4>
			<p>OTE is a powerful test solution within OSEE that integrates with existing Java, C, and C++ development environments to provide a seamless flow between developing, debugging, executing, and dispositioning of tests for complex hardware and software.  The user is provided a common interface to the simulated and real-time environments for both functional and unit testing.
			</p>
			<u>Key Capabilities</u>
			<ul>
				<li>Supports the execution of multiple simultaneous batches within a single workspace</li>
				<li>Built-in help system extended with test manger user guide</li>
				<li>Message system supporting MIL-STD-1553 MUX, serial, wire, Ethernet, and Data Distribution Service (DDS)</li>
				<li>Message GUIs provide monitoring, manipulation, and recording of messaging data</li>
				<li>Utilizes OSEE application framework to provide traceability to software requirements</li>
				<li>Automatic generation of tests and testing support classes, directly from requirements.</li>
				<li>Leverages off Java Development Toolkit (JDT) and C/C++ Development Toolkit (CDT)</li>
				<li>Provides remote execution of scripts against target hardware and operating system</li>
				<li>Test results are logged in XML</li>
				<li>Transforms test results via built-in or user supplied XSL Transformations</li>
				<li>Built-in XSL Transformations produce interactive HTML result reports</li>
				<li>A test environment service that provides both soft real-time and simulated capabilities, schedules the periodic execution of simulation components, and manages the I/O and testing resources.</li>
			</ul>
</div>
	

<div class="homeitem3col">
		<h4>BLAM</h4>
			BLAM Lightweight Artifact Manipulation (BLAM) allows non-programmers to graphically construct workflows to automate repetitive tasks.  A given workflow can be used for variety of similar tasks by using customizable controls to specify workflow parameters.
</div>
				
<div class="homeitem3col">
		<h4>Program/Project Management</h4>
			<p>Program and project management tightly integrated with the Action Tracking System and other OSEE components to provide services necessary for estimation, planning, execution, and delivery of products managed within OSEE.</p>
			<u>Key Capabilities</u>
			<ul>	
				<li>Integrated management of charge/cost accounting </li>
				<li>Build planning and execution</li>
				<li>Reporting services</li>
				<li>Rules framework for requiring/alerting certain conditions</li>
				<li>Scheduling services for automating reoccurring tasks</li>
			</ul>
	</div>
	
<div class="homeitem3col">			
		<h4>Discovery and Learning</h4>
			<p>Services provided for allowing advanced learning and discovery using OSEE�s abundant and inherent lifecycle data and metrics.</p>
			<u>Key Capabilities</u>
			<ul>	
				<li>Discovery of inefficiencies in lifecycle processes</li>
				<li>Advanced data mining and data fusion</li>
				<li>Advanced estimating</li>
				<li>Advanced export/import of product capabilities between programs including applicable design, requirements, code, and test</li>
				<li>Advanced data visualization</li>
				<li>Prediction of future risks</li>
				<li>Simulation of recommended process and lifecycle changes</li>
			</ul>
	</div>
	
<div class="homeitem3col">			
		<h4>Application Development</h4>
			Provide capabilities needed for external software application development plug-ins, like JDT, to utilize the OSEE persistence layer and integrate with other OSEE-based applications.
	</div>
	
<div class="homeitem3col">
		<h4>Design and Modeling</h4>
			Provide capabilities needed for external design and modeling plug-ins to utilize the OSEE persistence layer and integrate with other OSEE-based applications.    		
	</div>
	
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>