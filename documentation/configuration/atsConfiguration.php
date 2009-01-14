<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
	$App = new App();
	$Nav = new Nav();
	$Menu = new Menu();
	include($App->getProjectCommon());

	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "OSEE - Configuring ATS for Change Tracking";
	$pageKeywords	= "OSEE, ATS, Change, Tracking, PCR, Open, System, Engineering, Environment, Eclipse";
	$pageAuthor		= "Donald G. Dunne";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML
	<div id="midcolumn">

	<h2>$pageTitle</h2>
	<p>
	The Action Tracking System (ATS) can be configured for tracking changes made to requirements, software, hardware or anything else that needs to be tracked.<br><br>
	The integrated nature of ATS allows for the tight configuration management of changes to the artifacts that are stored and managed
	in OSEE, such as requirement, and provides advanced features that allow for advanced workflow management of assets.<br><br>
	OSEE ATS provides a few levels of configuration, from the simple/dynamic configuration that can be created/modified during runtime
	to a more advanced configuration that requires a separate plugin and release/update.</p>

	<ol>
		<li>Create a New configuration using the ATS Configuration Wizard</li>
		<ol>
			<li>Select File -> New -> Other -> OSEE ATS -> ATS Configuration</li>
			<li>Enter in a unique namespace for your configuration (eg: org.company.code)</li>
			<li>Enter in a name for the Team that will be performing the work (eg: Code Team)</li>
			<li>Enter in a list of Actionable Items that you want the users to write change requests against. (eg: Editor, Installer, Website)</li>
			<li>If Actions are to be grouped and released in versions (or builds), enter a list of versions. (eg: 1.0.0, 1.1.0, 1.2.0)</li>
			<li>If an existing workflow (eg: ats.defaultTeamWorkflow) is to be used, enter this as the id.  Otherwise a new workflow will be created.</li>
			<li>Upon Selecting Finish, ATS will be configured with the entered information.  You can then select to create a new Action and select
			one of the Actionable Items (named above).  This will create a new workflow and assign it to the above Team for processing.</li>
			<li>See <a href="ats/ATS.htm#section8.1">Configure ATS for Change Tracking</a> for more information.</li>
		</ol>
		<li>Creating a New workflow configuration for existing Team / Actionable Items using the ATS Workflow Configuration Editor</li>
		<ol>
			<li>Select File -> New -> Other -> OSEE ATS -> ATS Workflow Configuration</li>
			<li>Enter in a unique namespace for your configuration (eg: org.company.code)</li>
			<li>Upon Selecting Finish, ATS will create a simple workflow that can be expanded with new states, transitions and widgets.</li>
			<li>This workflow will need to be related to the Team Definition that will use it.  
			See <a href="ats/ATS.htm#section8.1">Configure ATS for Change Tracking</a> for more information.</li>
		</ol>
		<li>Editing an existing workflow configuration using the ATS Workflow Configuration Editor</li>
		<ol>
			<li>In the Branch Manager, set the Default Working Branch to the Common branh.</li>
			<li>In the Artifact Explorer, expand Action Tracking System -> Work Flows and select the workflow to edit.  This will
			open the ATS Workflow Configuration Editor.</li>
			<li>Workflow can be edited to include new states and transitions.  Double-click state to relate widgets and rules.</li>
			<li>Selecting Save will validate the workflow and save the changes to the database.  These changes can be used immediately by Team Definitions
			configured to use this workflow.</li>
			<li>See <a href="ats/ATS.htm#section8.1">Configure ATS for Change Tracking</a> for more information.</li>
		</ol>
		<li>Advanced ATS Configuration via the org.eclipse.osee.ats.config.demo - Although ATS can be configured dynamically in a runtime environment, 
		advanced configuration like including creating new widgets and rules, can be done through extension points.  
		The ats.config.demo plugin is an example of these capabilities.</li>
	</ol>
	</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>