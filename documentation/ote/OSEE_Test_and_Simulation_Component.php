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
	# Getting Started.php
	#
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "OSEE Test and Simulation Component";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Test, Environment";
	$pageAuthor		= "Ryan D. Brooks";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML


<div id="midcolumn" style="width:95%">
	<h1>OSEE Test and Simulation Component Features</h1>
	<br/>
	<h3>Test Environment Service</h3>
	<ul>
		<li>Provides dynamic lookup of resources</li>
		<li>Provides both soft real-time and simulated capabilities</li>
		<li>Schedules periodic execution of models (simulation components)</li>
		<li>Supports user configurable number of simultaneous connections</li>
		<li>manages the I/O and testing resources</li>
	</ul>
	<h3>Fully automated testing</h3>
	<ul>
		<li>Automated test point tally and rollup of pass/fail determination</li>
		<li>Functional Testing
		<ul>
			<li>Simulated Environment (eases demand on limited test station resources)</li>
			<li>Tests (without modification of any kind) can be run in both soft real-time and simulated environments (simultaneously, if desired)</li>
			<li>Real-time messaging system that supports MIL-STD-1553 MUX, serial, wire, analog and digital discretes, and publish/subscribe Data Distribution Service (DDS)</li>
		</ul></li>
		<li>Unit Testing
		<ul>
			<li>Java</li>
			<li>C++</li>
		</ul></li>
		<li>Automated Display Testing (ADT)</li>
	</ul>
	<h3>Interactive Testing (automated tests with user input)</h3>
	<h3>Output files</h3>
	<ul>
		<li>Output file in XML</li>
		<li>Interactive outfiles (user can navigate the out file)</li>
		<li>User selectable views of outfiles: normal, debug, and flat</li>
		<li>Direct linking of output file lines to source test lines</li>
		<li>Automatic correlation of a run-time test point to the test source line that generated it</li>
		<li>XML output file can be automatically transformed into any format
		<ul>
			<li>Current output file transform is JavaScript enabled HTML</li>
			<li>Can apply any XSLT translation</li>
		</ul></li>
	</ul>
	<h3>Test Source File</h3>
	<ul>
		<li>Test files are color/tool tip annotated with failures</li>
	</ul>
	<h3>Tightly Integrated into the Open System Engineering Environment</h3>
	<ul>
		<li>Utilizes OSEE Application Framework to provide bidirectional traceability between software requirements, application code, and tests</li>
		<li>Leverages Java Development Toolkit (JDT) and C/C++ Development Toolkit (CDT)</li>
		<li>Facilitates seamless flow between test development, debugging, execution, and result analysis</li>
		<li>Supports the execution of multiple simultaneous batches within a single workspace</li>
		<li>Built-in help system extended with test manger user guide</li>
	</ul>
	<h3>Test Manager GUI</h3>
	<ul>
		<li>Consistent, clean interface for the control of unit and functional test in the real-time and simulated environments</li>
		<li>Test results streamed in real-time from test service to test manager</li>
		<li>Remote viewing and manipulation of test service</li>
		<li>Single/Batch run mode</li>
		<li>Enable/disable running of individual scripts in the run list</li>
		<li>Drag and drop test files into run list</li>
		<li>Integrated with code debugger</li>
		<li>Access to test and output files from the GUI</li>
		<li>Lists available test services that can be used to run test files</li>
		<li>Real-time display of test service usage information</li>
	</ul>
	<h3>Message GUI</h3>
	<ul>
		<li>Monitor, manipulate and record real-time messaging data</li>
		<li>Common user interface supporting P/S, 1553, discrete, analog, serial</li>
		<li>Advanced regular-expression searching</li>
		<li>Import/Export view lists</li>
		<li>Remote attachment to message service</li>
	</ul>
	<ul>
		<li>Playback environment</li>
		<li>message recording playback environment that allows for the analysis of Ethernet  and MUX recordings</li>
		<li>supports advanced debugging of the test environment using repeatable conditions</li>
		<li>investigate flight recordings</li>
	</ul>
</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>