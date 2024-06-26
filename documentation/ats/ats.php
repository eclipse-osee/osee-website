<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
	$App = new App();
	$Nav = new Nav();
	$Menu = new Menu();
	include($App->getProjectCommon());

# Begin: page-specific settings.  Change these.
	$pageTitle 		= "OSEE Action Tracking System (ATS)";
	$pageKeywords	= "OSEE, ATS, Change, Tracking, PCR, Open, System, Engineering, Environment, Eclipse";
	$pageAuthor		= "Donald G. Dunne";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML
	<div id="midcolumn">

	<h2>$pageTitle</h2>

<div id="toc">
<h2>Contents</h2>
<div id="toc_content">
<div class="toc_entry">1. <a href="#section1">ATS Overview</a></div><div class="toc_entry">2. <a href="#section2">ATS Icons</a></div><div class="toc_entry">3. <a href="#section3">ATS Priorities</a></div><div class="toc_entry">4. <a href="#section4">Reporting a Bug</a></div><div class="toc_entry">5. <a href="#section5">ATS Workflow Editor</a><div class="toc_subentry">5.1. <a href="#section5.1">Workflow Editor</a></div><div class="toc_subentry">5.2. <a href="#section5.2">Workflow Editor - Workflow Tab</a></div><div class="toc_subentry">5.3. <a href="#section5.3">Workflow Editor - Task Tab</a></div><div class="toc_subentry">5.4. <a href="#section5.4">Spell Checking</a></div></div><div class="toc_entry">6. <a href="#section6">ATS Views</a><div class="toc_subentry">6.1. <a href="#section6.1">Navigator View</a></div><div class="toc_subentry">6.2. <a href="#section6.2">Action View</a></div><div class="toc_subentry">6.3. <a href="#section6.3">World View</a></div><div class="toc_subentry">6.4. <a href="#section6.4">Result View</a></div></div><div class="toc_entry">7. <a href="#section7">ATS Reviews</a><div class="toc_subentry">7.1. <a href="#section7.1">Peer To Peer Review</a></div><div class="toc_subentry">7.2. <a href="#section7.2">Decision Review</a></div></div><div class="toc_entry">8. <a href="#section8">ATS Configuration</a><div class="toc_subentry">8.1. <a href="#section8.1">Configure ATS for Change Tracking</a></div><div class="toc_subentry">8.2. <a href="#section8.2">Create New Team Definition</a></div><div class="toc_subentry">8.3. <a href="#section8.3">Create New Actionable Item(s)</a></div><div class="toc_subentry">8.4. <a href="#section8.4">Create Workflow Configuration</a><div class="toc_subentry">8.4.1. <a href="#section8.4.1">Workflow Configuration Editor</a></div><div class="toc_subentry">8.4.2. <a href="#section8.4.2">Work Flow Definition</a></div><div class="toc_subentry">8.4.3. <a href="#section8.4.3">Work Page Definition</a></div><div class="toc_subentry">8.4.4. <a href="#section8.4.4">Work Widget Definition</a></div><div class="toc_subentry">8.4.5. <a href="#section8.4.5">Work Rule Definition</a></div></div><div class="toc_subentry">8.5. <a href="#section8.5">Configure ATS for Help</a></div></div><div class="toc_entry">9. <a href="#section9">Views and Editors</a><div class="toc_subentry">9.1. <a href="#section9.1">Branch Manager</a><div class="toc_subentry">9.1.1. <a href="#section9.1.1">Default Branch</a></div><div class="toc_subentry">9.1.2. <a href="#section9.1.2">Favorite Branch</a></div><div class="toc_subentry">9.1.3. <a href="#section9.1.3">Filtering</a></div><div class="toc_subentry">9.1.4. <a href="#section9.1.4">Show Change Report</a></div></div><div class="toc_subentry">9.2. <a href="#section9.2">Change Report</a><div class="toc_subentry">9.2.1. <a href="#section9.2.1">Refresh</a></div></div><div class="toc_subentry">9.3. <a href="#section9.3">Quick Search</a><div class="toc_subentry">9.3.1. <a href="#section9.3.1">In Name Search Option</a></div><div class="toc_subentry">9.3.2. <a href="#section9.3.2">Include Deleted Search Option</a></div><div class="toc_subentry">9.3.3. <a href="#section9.3.3">Attribute Tagging for Quick Search</a></div></div><div class="toc_subentry">9.4. <a href="#section9.4">Mass Editor</a></div><div class="toc_subentry">9.5. <a href="#section9.5">Merge Manager</a></div></div><div class="toc_entry">10. <a href="#section10">Table Customization</a><div class="toc_subentry">10.1. <a href="#section10.1">Table Customization</a></div></div><div class="toc_entry">11. <a href="#section11">Spell Checking</a><div class="toc_subentry">11.1. <a href="#section11.1">Spell Checking</a></div></div><div class="toc_entry">12. <a href="#section12">OSEE Branching and Differences Diagrams</a><div class="toc_subentry">12.1. <a href="#section12.1">OSEE Branching and Differences Diagrams</a></div></div></div></div>




<link rel="stylesheet" type="text/css" href="ATS_files/style.css">

<h1><a id="section1">1. </a>ATS Overview</h1>
<h2>Purpose</h2>
To give a brief overview of the Action Tracking System (ATS) including
terms and architecture.
<h2>Powerpoint Overview</h2>
<a href="./reference/overview/OSEE%20ATS%20Overview.pdf">Select to View Overview</a>
<br><br>
<h2>Terms</h2>
<b><a href="./reference/configure/ActionableItems.html">Actionable Item (AI)</a></b>
- Item that can be impacted by an Action. AIs are what the user has to
select from when creating an Action. Examples: Flight Box, Lab
Computer, Code Subsystem.<br><br>
<b><a href="./reference/configure/TeamDefinition.html">Team Workflow Definition</a></b>
- Teams are created to perform that work associated with the Action.
They are related to the AIs that they are responsible for and are
configured with Leads and Members to route the Actions and perform the
work. A workflow is configured that the team will follow to perform the
work.<br><br>
<b><a href="./reference/configure/WorkflowConfiguration.html">Workflow Configuration</a></b> - State machine that shows the path the Team will follow to perform the work associated with the Action.<br><br>
<b>Action</b> - Top level grouping object. An Action is written against
any number of AIs. The Team Workflows are then created for each team
configured to perform work for an AI.<br><br>
<b>Team Workflow</b> - Instantiation of a Workflow Diagram needed to
perform the work. Each team independently moves through their workflow
state machine however ATS can be configured such that certain gates
must be met from other Teams or outside events before a workflow can
continue.<br><br>
<b>Task</b> - Within states of a Team Workflow, smaller-light-weight
Tasks can be created to further separate the work that needs to be
completed for that state. Normally, the state can not continue until
the Task is completed.<br><br>
<b>Versions</b> - ATS has built in project/release planning.  Versions are created to group Team Workflows (Actions) into Builds and Releases.<br><br>

<!--
 Copyright (c) 2004, 2007 Boeing.
 All rights reserved. This program and the accompanying materials
 are made available under the terms of the Eclipse Public License v1.0
 which accompanies this distribution, and is available at
 http://www.eclipse.org/legal/epl-v10.html
 Contributors:
     Boeing - initial API and implementation
-->
	
		
      <link rel="stylesheet" type="text/css" href="ATS_files/style_002.css">
	
		<h1><a id="section2">2. </a>ATS Icons</h1>
		<br>
		<h2>ATS Objects</h2>
		<br>
		<img src="ATS_files/action.gif"> denotes an Action, the top level object in ATS<br>
		<img src="ATS_files/workflow.gif"> denotes a Team Workflow; moves team through completion of change<br>
		<img src="ATS_files/task.gif"> denotes a Task; lightweight workflow that is performed during Team Workflow states<br>
		<img src="ATS_files/version.gif"> denotes the ATS targeted for release version<br>
		<img src="ATS_files/R.gif"> denotes the ATS review<br>
		<br>
		<h2>ATS Overlays</h2>
		<img src="ATS_files/warn.gif"> warning that something needs to be addressed; open object for more information<br>
		<img src="ATS_files/orangeR_8_8.gif"> released version<br>
		<img src="ATS_files/yellowN_8_8.gif"> next release version<br>
		<img src="ATS_files/favorite.gif"> ATS object marked as user's favorite; select "My Favorites" to load all marked<br>
		<img src="ATS_files/subscribed.gif"> ATS object user desires to receive email upon every state transition<br>
		<img src="ATS_files/whiteT_8_8.gif"> ATS object is obtaining estimated hours, percent complete, hours spent and remaining hours from tasks<br>
		<br>
		<h2>ATS Operations</h2>
		<br>
		Select <img src="ATS_files/newAction.gif"> to create a new action<br>
		Select <img src="ATS_files/newTask.gif"> to create a new task<br>
		Select <img src="ATS_files/refresh_002.gif"> to refresh current view<br>
		Select <img src="ATS_files/print_002.gif"> to print the ATS Results<br>
		Select <img src="ATS_files/email.gif"> to email the ATS Results to an OSEE user<br>
		Select <img src="ATS_files/export_002.gif"> to export the ATS Results to CSV file<br>
		Select <img src="ATS_files/bug_002.gif"> to <a href="./reference/report_a_bug.html">Report a Bug</a>.<br>
		<br>
		<h2>ATS Configuration</h2>
		<img src="ATS_files/team.gif"> denotes a team configured to do work in ATS<br>
		<img src="ATS_files/AI.gif"> denotes an Actionable Item that a user can create an Action against<br>

<!--
 Copyright (c) 2004, 2007 Boeing.
 All rights reserved. This program and the accompanying materials
 are made available under the terms of the Eclipse Public License v1.0
 which accompanies this distribution, and is available at
 http://www.eclipse.org/legal/epl-v10.html
 Contributors:
     Boeing - initial API and implementation
-->
	
		
      <link rel="stylesheet" type="text/css" href="ATS_files/style_002.css">
	
		<h1><a id="section3">3. </a>Priorities for classifying problems</h1>

<table border="1"><tbody><tr><th>Priority</th><th>Description</th><th>MIL-STD-498 Description</th></tr> 
<tr>
   <td align="center">1</td>
   <td>Prevents end users from
performing an essential task that results in work stoppages. The impact
to project cost/schedule requires an immediate resolution and a special
release may be necessary.</td>
   <td>a. Prevent the accomplishment of an operational or mission essential capability<br>b. Jeopardize safety, security, or other requirement designated "critical"</td>
</tr>

<tr>
   <td align="center">2</td>
   <td>Adversely affects end users
from performing an essential task. Significant impact to project
cost/schedule with resolution needed within 3 weeks.</td>
   <td>a. Adversely affect the accomplishment of an operational or mission essential capability and no work-around solution is known.<br>b.
Adversely affect technical, cost, or schedule risks to the project or
to life cycle support of the system, and no work-around solution is
known</td>
</tr>

<tr>
   <td align="center">3</td>
   <td>Hinders end users from
performing an essential task or a capability is behind schedule. Impact
to project cost/schedule with resolution needed within 6 weeks.</td>
   <td>a. Adversely affect the accomplishment of an operational or mission essential capability but a work-around solution is known.<br>b.
Adversely affect technical, cost, or schedule risks to the project or
to life cycle support of the system, but a work-around solution is known</td>
</tr>

<tr>
   <td align="center">4</td>
   <td>Minor impact to end users or is a capability being developed per schedule.  Can be resolved per normal release schedule.</td>
   <td>a.
Result in user/operator inconvenience or annoyance but does not affect
a required operational or mission essential capability.<br>b. Result in
inconvenience or annoyance for development or support personnel, but
does not prevent the accomplishment of those responsibilities.</td></tr>

<tr>
   <td align="center">5</td>
   <td>An inconvenience or annoyance.  Can be resolved as schedule and budget permits.</td>
   <td>Any other effect</td>
</tr>
</tbody></table> 
		

<!--
 Copyright (c) 2004, 2007 Boeing.
 All rights reserved. This program and the accompanying materials
 are made available under the terms of the Eclipse Public License v1.0
 which accompanies this distribution, and is available at
 http://www.eclipse.org/legal/epl-v10.html
 Contributors:
     Boeing - initial API and implementation
-->
	
		
      <link rel="stylesheet" type="text/css" href="ATS_files/style_002.css">
	
		<h1><a id="section4">4. </a>Report a Bug</h1>
		<h2>Purpose</h2>
		A quick way to report a bug against a view or editor.
		<h2>How to do it</h2>
		Select the bug button (<img src="ATS_files/bug_002.gif">) from the toolbar at the top
		of the view or editor that has the problem. A wizard will come up to provide guidance
		through the rest of the steps.

<!--
 Copyright (c) 2004, 2007 Boeing.
 All rights reserved. This program and the accompanying materials
 are made available under the terms of the Eclipse Public License v1.0
 which accompanies this distribution, and is available at
 http://www.eclipse.org/legal/epl-v10.html
 Contributors:
     Boeing - initial API and implementation
-->
	
		
      <link rel="stylesheet" type="text/css" href="ATS_files/style.css">
	
		<h1><a id="section5.1">5.1. </a>ATS Workflow Editor</h1>
		<br>
		<img src="ATS_files/ats_workflow_editor_workflow_tab.jpg">
		<h2>Purpose</h2>
		Show and edit the workflows configured for use in ATS including Team Workflows, Tasks and Reviews.
		<h2>How to do it</h2>
		Double-click open any Action or Team Workflow from ATS World, Search results or ATS Results.
		The editor will be opened allowing view and edit of workflow.
		<h2><a href="./reference/workflow_editor/ats_workflow_editor_workflow_tab.html">Workflow Tab</a></h2>
		Shows states of workflow, alows entry in current state and provides services to perform actions, 
		see metrics and research information about workflow.
		<h2><a href="./reference/workflow_editor/ats_workflow_editor_task_tab.html">Task Tab</a></h2>
		Shows tasks associated with states of workflow.  Allows quick editing of task information and
		allows a quick jump (double-click) to open task in ATS Workflow Editor.

<!--
 Copyright (c) 2004, 2007 Boeing.
 All rights reserved. This program and the accompanying materials
 are made available under the terms of the Eclipse Public License v1.0
 which accompanies this distribution, and is available at
 http://www.eclipse.org/legal/epl-v10.html
 Contributors:
     Boeing - initial API and implementation
-->
	
		
      <link rel="stylesheet" type="text/css" href="ATS_files/style.css">
	
		<h1><a id="section5.2">5.2. </a>ATS Workflow Editor - Workflow Tab</h1>
		<br>
		<img src="ATS_files/ats_workflow_editor_workflow_tab.jpg">
		<h2>Purpose</h2>
		Shows states of workflow, alows entry in current state and provides services to perform actions, 
		see metrics and research information about workflow.
		<h2>How to do it</h2>
		Default tab shown when any ATS object is opened in the ATS Editor.
		<h2>Current State</h2>
		Shown in the top status bar and in the main window, the current state is the state of the workflow
		state machine that is running for this ATS object.  These workflows can be configured with 3 or 30
		state depending on the needs of the program/team that is using it.
		<a href="./reference/workflow_editor/current_state.html">More</a>
		<h2>Other States</h2>
		Shows states of workflow, alows entry in current state and provides services to perform actions, 
		see metrics and research information about workflow.
		<h2>Services</h2>
		Shows tasks associated with states of workflow.  Allows quick editing of task information and
		allows a quick jump (double-click) to open task in ATS Workflow Editor.

<!--
 Copyright (c) 2004, 2007 Boeing.
 All rights reserved. This program and the accompanying materials
 are made available under the terms of the Eclipse Public License v1.0
 which accompanies this distribution, and is available at
 http://www.eclipse.org/legal/epl-v10.html
 Contributors:
     Boeing - initial API and implementation
-->
	
		
      <link rel="stylesheet" type="text/css" href="ATS_files/style.css">
	
		<h1><a id="section5.3">5.3. </a>ATS Workflow Editor - Task Tab</h1>
		<br>
		<img src="ATS_files/ats_workflow_editor_task_tab.jpg">
		<h2>Purpose</h2>
		Shows tasks associated with states of workflow.  Allows quick editing of task information and
		allows a quick jump (double-click) to open task in ATS Workflow Editor.
		<h2>How to do it</h2>
		Select task tab after ATS object is opened in the ATS Editor.
		<h2>Open Task</h2>
		Double-click on any task to open in ATS Editor.
		<h2>Right-click edit</h2>
		Selecting one or more tasks and right-click produces a menu with selections for editing 
		multiple tasks at a single time.
		<h2>Alt-Left-Click edit</h2>
		A quick way to edit a single field in a task is by holding the Alt key down and selecting
		the cell to edit.  This pops up an editor associated with the type of cell selected.
		<br>
		<h2>Actions</h2>
		Select <img src="ATS_files/currentState.gif"> to only show tasks related to the current state of the workflow.<br>
		Select <img src="ATS_files/newTask.gif"> to create a new task.<br>
		Select <img src="ATS_files/redRemove.gif"> to delete selected task.<br>
		Select <img src="ATS_files/refresh_002.gif"> to refresh the current task list.<br>
		Select <img src="ATS_files/customize_003.gif"> to <a href="http://127.0.0.1:4441/help/topic/osee.skynet.gui/reference/table_customization.html">Customize Table</a>.<br>

<!--
 Copyright (c) 2004, 2007 Boeing.
 All rights reserved. This program and the accompanying materials
 are made available under the terms of the Eclipse Public License v1.0
 which accompanies this distribution, and is available at
 http://www.eclipse.org/legal/epl-v10.html
 Contributors:
     Boeing - initial API and implementation
-->
	
		
	
		<h1><a id="section5.4">5.4. </a>OSEE Spell Checking</h1>
		<br>
		<img src="ATS_files/spell_check.jpg">
		<h2>Purpose</h2>
		Enable data entered in OSEE to be spell checked.
		<h2>How to do it</h2>
		As data is entered into OSEE spell-checked fields, a blue line will be displayed if the word is not recognized.
		Only lower-case words or words with only first character uppercase will be spell checked.  Acronyms, words with
		special characters, numbers and single letter words will be ignored.
		<h2>Main Dictionary</h2>
		OSEE has a main dictionary included in it's release.  See below for it's source, copyrights and credits.
		<h2>Additional Released Dictionaries</h2>
		Additionally dictionaries can be added to OSEE via extension points.  These can only be
		modified by hand and thus included in normal release cycle.
		<h2>Run-time Global Dictionary</h2>
		Each OSEE user is able to add words to a Global dictionary stored in the database by right-clicking on the word
		underlined in blue and selecting to save global.  These words are stored in the "Global Preferences" artifact
		and will then be shown as a valid word in all users's spell checking.
		<h2>Run-time Personal Dictionary</h2>
		Each OSEE user is able to add words to their Personal dictionary stored in the database by right-clicking on the word
		underlined in blue and selecting to save personal.  These words are stored in the user's "User" artifact
		and will then be shown as a valid word only for that user.
		<br>

<!--
 Copyright (c) 2004, 2007 Boeing.
 All rights reserved. This program and the accompanying materials
 are made available under the terms of the Eclipse Public License v1.0
 which accompanies this distribution, and is available at
 http://www.eclipse.org/legal/epl-v10.html
 Contributors:
     Boeing - initial API and implementation
-->
	
		
      <link rel="stylesheet" type="text/css" href="ATS_files/style_002.css">
	
		<h1><a id="section6.1">6.1. </a>ATS Navigator</h1>
		<br>
		<img src="ATS_files/ats_navigator.jpg">
		<h2>Purpose</h2>
		Central location to launch ATS searches, perform quick navigation and kickoff metrics.
		<h2>How to do it</h2>
		Double-click any navigation item to kickoff the corresponding search, action, report.
		<h2>Filter</h2>
		Filter out all navigation items that conains the entered text.
		Select the clear action (<img src="ATS_files/clear.gif">) to clear out the text
		and restore all navigation items.

<!--
 Copyright (c) 2004, 2007 Boeing.
 All rights reserved. This program and the accompanying materials
 are made available under the terms of the Eclipse Public License v1.0
 which accompanies this distribution, and is available at
 http://www.eclipse.org/legal/epl-v10.html
 Contributors:
     Boeing - initial API and implementation
-->
	
		
      <link rel="stylesheet" type="text/css" href="ATS_files/style_002.css">
	
		<h1><a id="section6.2">6.2. </a>ATS Action View</h1>
		<br>
		<img src="ATS_files/ats_action_view.jpg">
		<h2>Purpose</h2>
		Shows a graphical representation of the currently open Action or Team Workflow.
		<h2>How to do it</h2>
		Double-click open any Action or Team Workflow.  Action View will show parent child
		relationship between Action and it's children Team Workflows.  Cyan outline show currently
		open editor.
		<h2>ToolTip</h2>
		Hover over any object to determine information about current state, assignees and work to be done.
		<h2>Double-Click / Right-Click</h2>
		Double-Click to open any object in the ATS Editor or right click for more options.
		

<!--
 Copyright (c) 2004, 2007 Boeing.
 All rights reserved. This program and the accompanying materials
 are made available under the terms of the Eclipse Public License v1.0
 which accompanies this distribution, and is available at
 http://www.eclipse.org/legal/epl-v10.html
 Contributors:
     Boeing - initial API and implementation
-->
	
		
      <link rel="stylesheet" type="text/css" href="ATS_files/style_002.css">
	
		<h1><a id="section6.3">6.3. </a>ATS World View</h1>
		<br>
		<img src="ATS_files/ats_world_view.jpg">
		<h2>Purpose</h2>
		Shows ATS workflow objects including Actions, Team Workflows, Tasks and Reviews that were
		returned from a search normally performed by the ATS Navigator.
		<h2>How to do it</h2>
		Double-click search item from ATS Navigator.  ATS World will show that it is loading.  Upon
		return, ATS World will contain all ATS objects from the search.  In addition, a plus is shown
		next to any object.  Upon selection, viewer will expand to show all children of the selected
		object.
		<h2>Open ATS Action, Team Workflow, Task or Review</h2>
		Double-click to open any item open in ATS Workflow Editor.
		<h2>Sorting</h2>
		Selecting column headers will sort that column.  Holding down Ctrl and selecting successive
		columns will enable multi sort.  Re-selecting a column will reverse sort that column.  
		The status label at the bottom will show the columns being sorted and which direction the
		sort is being performed.  To remove all sorting, right-click and select "Remove All Sorting".
		<h2>Bottom Status Line</h2>
		The bottom status line will show the total number of objects loaded into the table, the total
		shown and the total selected.  It will also show all the sorts and filters that are enabled.
		<h2>Top Status Line</h2>
		The top status line will show the name of the search that populated the ATS World View.  A 
		warning icon (<img src="ATS_files/warn.gif">) will show if the search returned no objects to show.
		<h2>Filtering</h2>
		Bottom right of the ATS World shows a filter box that is a quick way to filter by one or two words.
		Simply type in a string, press enter and ATS World will only show those loaded objects that where one of the 
		visible cells contains the typed text.  This is a case in-sensitive search.  Select the clear 
		action (<img src="ATS_files/clear.gif">) to clear out the text and restore all loaded actions.
		<h2>Actions</h2>
		Select <img src="ATS_files/A.gif"> to load ATS World with all the actions that you have work to do on.<br>
		Select <img src="ATS_files/action.gif"> to create a new Action.<br>
		Select <img src="ATS_files/rank.gif"> to rank actions by deadline date then by priority and annual cost avoidence.<br>
		Select <img src="ATS_files/refresh_002.gif"> to refresh the current search.<br>
		Select <img src="ATS_files/customize.gif"> to <a href="http://127.0.0.1:4441/help/topic/osee.skynet.gui/reference/table_customization.html">Customize Table</a>.<br>
		Select <img src="ATS_files/bug_002.gif"> to <a href="./reference/report_a_bug.html">Report a Bug</a>.<br>

<!--
 Copyright (c) 2004, 2007 Boeing.
 All rights reserved. This program and the accompanying materials
 are made available under the terms of the Eclipse Public License v1.0
 which accompanies this distribution, and is available at
 http://www.eclipse.org/legal/epl-v10.html
 Contributors:
     Boeing - initial API and implementation
-->
	
		
      <link rel="stylesheet" type="text/css" href="ATS_files/style_002.css">
	
		<h1><a id="section6.4">6.4. </a>Result View</h1>
		<br>
		<img src="ATS_files/result_view.jpg">
		<h2>Purpose</h2>
		Show reports, errors, metrics and other data in a multi-paged view with print, email and exporting capabilities.
		<h2>How to do it</h2>
		This view pops up automatically when OSEE needs to report larger amounts of data to the user.
		<h2>Actions</h2>
		Select <img src="ATS_files/print.gif"> to print the current window.<br>
		Select <img src="ATS_files/email_002.gif"> to email the current results view to an OSEE user.<br>
		Select <img src="ATS_files/export.gif"> to export the current table into a comma seperated value file.<br>
		<h2>Mulit-page</h2>
		Selecting the down arrow will show a list of all pages that have been displayed during the current instance
		of OSEE running.  Selecting from this list will display the previous page.

<!--
 Copyright (c) 2004, 2007 Boeing.
 All rights reserved. This program and the accompanying materials
 are made available under the terms of the Eclipse Public License v1.0
 which accompanies this distribution, and is available at
 http://www.eclipse.org/legal/epl-v10.html
 Contributors:
     Boeing - initial API and implementation
-->
	
    
      <link rel="stylesheet" type="text/css" href="ATS_files/style.css">
	
		<h1><a id="section7.1">7.1. </a>Peer To Peer Review Workflow</h1>
		<h2>Purpose</h2>
		The Peer To Peer Review is a lightweight review type that enables interactive one-on-one reviews where two people sit
		at a single computer and review, disposition and resolve the issues as they are found.  This review type does not 
		require (but does allow) defects to be logged.  This review type can be created as a stand-alone review or attached to
		any workflow.  When attached to a workflow, it is related to a state and can be set as a "blocking" review that will
		keep the workflow from continuing until the review is completed.
		<img src="ATS_files/peerToPeerReviewEditor.JPG">
		<h2>State Machine</h2>
		<img src="ATS_files/peerToPeerReviewStateMachine.JPG">
		<h2>How to do it</h2>
		<b>Stand-Alone Peer To Peer Review</b> - From ATS Navigator, filter on "peer" and select "New Peer To Peer Review".  Enter
		required fields and select transition to start the review.
		<br><br>
		<b>Workflow Related Peer To Peer Review</b> - From any ATS workflow editor, select 
		 "Create a Peer To Peer Review" in the left column of the workflow editor.
		This will create the review and attach it to the current state.  Enter
		required fields and select transition to start the review.
		
		
		<h2>Prepare State</h2>
		This state allows the user to create the peer to peer review.  Enter the required information and transition to
		Review to start the review.  All review participants will be automatically assigned to the review state upon
		transition.<br><br>
		<table border="1">
		<tbody><tr><th>Field</th><th>Description</th></tr>
		<tr><td>Title</td><td>Enter a descriptive title for this review.</td></tr>
		<tr><td>Review Roles</td><td>Add roles and select the appropriate user.  This review type requires at least one Author and one Reviewer.<br>
		</td></tr><tr><td>Location of review materials</td><td>Either enter in a description of review materials or simply drag in files from workspace to 
		be reviewed.  If files are dropped in this box, the java package name (if appropriate), filename and a space to enter in the
		repository version will be provided.</td></tr>
		<tr><td>Description</td><td>Information necessary to make an informed decision.</td></tr>
		<tr><td>Blocking Review</td><td>if NOT a stand-alone review, this field will be enabled for entry.
		select yes if this review must be completed before the parent workflow can transition</td></tr>
		<tr><td>Need By</td><td>Date the review should be completed.</td></tr>
        </tbody></table>
        
        
		<h2>Review State</h2>
This state allows the users to review the materials, log any defects
and allows for the author to resolve and close any defects.<br><br>
		<table border="1">
		<tbody><tr><th>Field</th><th>Description</th></tr>
		<tr><td>Review Roles</td><td>Add or remove participants as needed.  See Prepare State description for more information.</td></tr>
		<tr><td>Review Defect</td><td>Defects are not REQUIRED, but can be entered.  Defects must be dispositioned and closed before
		review can be completed</td></tr>
		<tr><td>Resolution</td><td>Any notes or further information can be entered here.</td></tr>
        </tbody></table>
		

<!--
 Copyright (c) 2004, 2007 Boeing.
 All rights reserved. This program and the accompanying materials
 are made available under the terms of the Eclipse Public License v1.0
 which accompanies this distribution, and is available at
 http://www.eclipse.org/legal/epl-v10.html
 Contributors:
     Boeing - initial API and implementation
-->
	
    
      <link rel="stylesheet" type="text/css" href="ATS_files/style.css">
	
		<h1><a id="section7.2">7.2. </a>Decision Review Workflow</h1>
		<h2>Purpose</h2>
		The Decision Review is a simple review that allows one or multiple users to review something
		and answer a question.  This review can be created, and thus attached, to any reviewable
		state in ATS.  In addition, it can be created automatically to perform simple "validation"
		type reviews during a workflow.
		<h2>State Machine</h2>
		<img src="ATS_files/decisionReview.JPG">
		<h2>How to do it</h2>
		From any active state, select "Create a Decision Review" in the left column of the workflow editor.
		This will create the review and attach it to the current state.  Then, proceed to "Prepare State"
		to entering the necessary information required for this review.
		
		
		<h2>Prepare State</h2>
		This state allows the user to create the decision review.  Enter the required information and transition to
		Decision to start the review.  All transitioned to assignees will be required to perform the review.<br><br>
		<table border="1">
		<tbody><tr><th>Field</th><th>Description</th></tr>
		<tr><td>Title</td><td>Enter the question that is to be answered by the reviewers.  Example: Do you think we should buy this software?</td></tr>
		<tr><td>Decision Review Options</td><td>Enter in all the options that are available for selection.<br>
		Each line is a single decision option in the format: answer;state;&lt;userId&gt;<br><br>
		Where<br>&nbsp;&nbsp;&nbsp;answer = Yes, No, Mabye, etc...<br>
		&nbsp;&nbsp;&nbsp;state = Followup or Completed - this will be the state to transition to if the answer is choosen<br>
		&nbsp;&nbsp;&nbsp;&lt;userId&gt; = userId of the user to assign to the state to transition to.
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Note: Multiple users can be specified by &lt;userId1&gt;&lt;userId2&gt;<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Note:UserIds are only valid for Followup state.  Completed state has no assignees.</td></tr>
		<tr><td>Description</td><td>Information necessary to make an informed decision.</td></tr>
		<tr><td>Blocking Review</td><td>yes if this review must be completed before the parent workflow can transition</td></tr>
		<tr><td>Need By</td><td>Date the decision must be made.</td></tr>
        </tbody></table>
        
        
		<h2>Decision State</h2>
		This state allows the user to review the description or materials and choose their decision.<br><br>
		<table border="1">
		<tbody><tr><th>Field</th><th>Description</th></tr>
		<tr><td>Question</td><td>The question to be answered as part of this review.</td></tr>
		<tr><td>Decision</td><td>The decision made by the user.</td></tr>
		<tr><td>Resolution</td><td>Any notes or information as to why the decision was made.</td></tr>
        </tbody></table>
		
		<h2>Followup State</h2>
		This state allows for followup action to be taken based on the decision.<br><br>
		<table border="1">
		<tbody><tr><td>Resolution</td><td>Any notes or information as to why the decision was made.</td></tr>
        </tbody></table>
		

<!--
 Copyright (c) 2004, 2007 Boeing.
 All rights reserved. This program and the accompanying materials
 are made available under the terms of the Eclipse Public License v1.0
 which accompanies this distribution, and is available at
 http://www.eclipse.org/legal/epl-v10.html
 Contributors:
     Boeing - initial API and implementation
-->


<link rel="stylesheet" type="text/css" href="ATS_files/style.css">

<h1><a id="section8.1">8.1. </a>Configure ATS for Change Tracking</h1>
<h2>Purpose</h2>
ATS is used to track any type of change throughout the lifecycle of a
project. Below are the steps to configure ATS for tracking something
new.
<h2>How to do it</h2>
<ul>
	<li>Review <a href="./reference/overview/ats_overview.html">ATS
	Overview</a> to understand ATS Concepts, Terms and Architecture. Pay
	special attention to ATS Terms</li>
	<li>Determine what Actionable Items (AIs) need to be available to
	the user to select from. This can be anything from a single AI for
	tracking something like a tool or even an activity that needs to be
	done to a hierarchical decomposition of an entire software product or
	engineering program.</li>
	<ul>
		<li>Considerations:</li>
		<ul>
			<li>Item should be in the context of what the user would
			recognize. eg: OSEE ATS World View versus something unknown to the
			user such as AtsWorldView.java.</li>
			<li>Decompose AI into children AI when it is desired to
			sort/filter/report by that decomposition.</li>
		</ul>
		<li>Actionable Item attributes to be configured:</li>
		<ul>
			<li>Name: Unique name that the user would identify with.</li>
			<li>Active: yes (converted to "no" when AI is no longer
			actionable)</li>
		</ul>
		<li>Actionable Item relations to be configured:</li>
		<ul>
			<li>TeamActionableItem: relate to Team Definition that is
			responsible for performing the tasks associated with this AI. NOTE:
			If this relation is not set, ATS will walk up the Default Hierarchy
			to find the first AI with this relation.</li>
		</ul>
	</ul>
	<li>Determine the teams that are going to perform the tasks that
	are associated with the AIs selected by the user.</li>
	<ul>
		<li>Considerations:</li>
		<ul>
			<li>Use separate teams if certain changes are to be managed by
			different leads.</li>
			<li>Use separate teams if one team's completion and releasing is
			independent of another's.</li>
			<li>Use separate teams if team members are separate.</li>
			<li>Use separate teams if different workflows are required for
			one set of AIs than another.</li>
		</ul>
		<li>Team attributes to be configured:</li>
		<ul>
			<li>Name: Unique team name that is distinguishable from other
			teams in a list.</li>
			<li>Description: Full description of the team and it's scope.</li>
			<li>Active: yes (converted to "no" when AI is no longer
			actionable)</li>
			<li>Team Uses Versions: yes if team workflows are going to use
			the build management and release capabilities of ATS.</li>
			<li>Full Nam: Extended name for the team. Expansion of acronym
			if applicable</li>
		</ul>
		<li>Team relations to be configured:</li>
		<ul>
			<li>TeamActionableItem: relation to all AIs that this team is
			responsible for.</li>
			<li>Work Item.Child: WorkFlowDefinition artifact
			configures the state machine that
			this team works under. NOTE: If this relation is not set, ATS will
			walk up the Default Hierarchy to find the first AI with this
			relation.</li>
			<li>TeamLead: User(s) that are leading this team. These users
			will be assigned to the Endorse state of the Team Workflow upon
			creation of an Action by a user. Providing multiple leads reduces
			bottlenecks. First lead to handle the Team Workflow wins.</li>
			<li>TeamMember: User(s) that are members of the team. These
			users will be shown first as preferred assignees and have the ability
			to privileged edit a Team Workflow for the team they belong to.</li>
		</ul>
	</ul>
	<li>Choose existing WorkFlowDefinition or create new WorkFlowDefinition
	 to be used by the team and relate it to Team Definition (as
	above).  This can be done through File-&gt;New-&gt;Workflow Configuration.  Enter a namespace
	and a default workflow will be created and can be edited.</li>
	<li>Create version artifacts necessary (if using versions) and
	relate them to Team Definition (as above)</li>
	<ul>
		<li>If branching of artifacts is going to be used (see below), configure versions
		with their appropriate parent branch id.</li>
	</ul>
	<li>Determine if Branching within one of the states in the workflow is desired/required
	and configure as appropriate.</li>
	<ul>
		<li>Considerations:</li>
		<ul>
			<li>Branching is necessary if objects to change are stored in OSEE as artifacts.
			If so, OSEE ATS can create a working branch off the parent branch, allow user
			to modify artifacts and then commit these changes when complete, reviewed and
			authorized (as necessary).  If objects are stored outside OSEE (eg. code files
			checked into SVN), this option is not necessary.</li>
		</ul>
		<li>Configure ATS workflow for branching:</li>
		<ul>
			<li>Create AtsStateItem extension specifying which state the branching will occur.
			This is normally in the Implement state of a workflow.</li>
			<li>Create root branch and import documents that will be managed through define
			and tracked through ATS.</li>
			<li>Set all Version artifacts "Parent Branch Id" attribute to the branch id
			of the root branch (or child branches, if using multi-branching)</li>
			<li>If only a single branch is to be used OR versioning is NOT configured to be
			used, the "Parent Branch Id" should be s</li>
		</ul>
	</ul>

</ul>

<!--
 Copyright (c) 2004, 2007 Boeing.
 All rights reserved. This program and the accompanying materials
 are made available under the terms of the Eclipse Public License v1.0
 which accompanies this distribution, and is available at
 http://www.eclipse.org/legal/epl-v10.html
 Contributors:
     Boeing - initial API and implementation
-->
	
		
      <link rel="stylesheet" type="text/css" href="ATS_files/style.css">
	
   <h1><a id="section8.2">8.2. </a>Configure Team Definition</h1>
		<h2>Purpose</h2>
		The Team Definition artifact specifies leads and members that are assigned to work on related Actionable Items.
		<h2>How to do it</h2>
   <ul>
      <li>Team Definitions should match company organizational structure.</li>
      <li>Attributes</li>
      <ul>
         <li>Name:[uniquely recognizable team name]</li>
         <li>ats.Full Name:[optional full name]</li>
         <li>ats.Description:[desc]</li>
         <li>ats.Active:[yes]</li>
         <li>ats.Team Uses Version:[yes if want to use release/build planning]</li>
      </ul>
      <li>Relations</li>
      <ul>
         <li>DefaultHeirarchy: Relate to parent team or top level "Teams"</li>
         <li>TeamDefinitionToVersion: Relate to current and future VersionArtifacts</li>
         <li>TeamLead:
Relate to one or more team leads. These individuals will have
priviledged edit and perform the Endorse state by default.</li>
         <li>TeamMember:
Relate to one or more team members. These individuals will have ability
to priviledged edit Workflows created by themselves against the team
they belong to.</li>
         <li>Work Item.Child: Relate to a single "Work Flow Definition" artifact that defines the workflow
         that will be used for this team.</li>
      </ul>
   </ul>

<!--
 Copyright (c) 2004, 2007 Boeing.
 All rights reserved. This program and the accompanying materials
 are made available under the terms of the Eclipse Public License v1.0
 which accompanies this distribution, and is available at
 http://www.eclipse.org/legal/epl-v10.html
 Contributors:
     Boeing - initial API and implementation
-->
	
		
      <link rel="stylesheet" type="text/css" href="ATS_files/style.css">
	
   <h1><a id="section8.3">8.3. </a>Configure Actionable Items (AI)</h1>
		<h2>Purpose</h2>
		Actionable Items provide the end user with a selection of things impacted by the Action.  They
		are related to the <a href="./reference/configure/TeamDefinition.html">Team</a> that is responsible for performing the
		work.
		<h2>How to do it</h2>
   <ul>
         <li>AIs should not be deleted.  Instead, use the ats.Active attribute to deactivate the AI.
         If an AI must be deleted, search for all "ats.Actionable Item" attributes that have the value of the AI's guid.
         These must be changed to another AI before deletion.</li>
         <li>Actionable
Item tree can be created to the level at which actions are to be
written. Usually a component decomposition. In the case of UIs, create
one for each view or window.</li>
         <li>Attributes</li>
         <ul>
            <li>Name:[uniquely recognizable team name]</li>
            <li>ats.Active:[yes]</li>
         </ul>
         <li>Relations</li>
         <ul>
            <li>DefaultHeirarchy: Relate to parent team or top level "Actionable Items" artifact"</li>
            <li>TeamActionableItem:
Relate to team responsible for performing tasks. Team can be related to
parent and all children will have team by default. </li></ul>
   </ul>

<!--
 Copyright (c) 2004, 2007 Boeing.
 All rights reserved. This program and the accompanying materials
 are made available under the terms of the Eclipse Public License v1.0
 which accompanies this distribution, and is available at
 http://www.eclipse.org/legal/epl-v10.html
 Contributors:
     Boeing - initial API and implementation
-->
	
		
      <link rel="stylesheet" type="text/css" href="ATS_files/style.css">
	
   <h1><a id="section8.4">8.4. </a>Workflow Configuration</h1>
		<h2>Purpose</h2>
		To create a new workflow configuration that ATS uses to move an Action through it's specific workflow.
		<h2>Ats Workflow Configuration artifacts.</h2>
		ATS uses four main artifacts to configure a workflow for use by a Team.
      <ul>
         <li><a href="./reference/configure/WorkFlowDefinition.html">Work Flow Definition</a><a> specifies
         the states, their transitions and the state that represents the beginning of the 
         workflow.</a></li>
<a>         </a><li><a href="./reference/configure/WorkPageDefinition.html">Work Page Definition</a><a> defines
         the a single state of the Work Flow Definition.</a></li>
<a>         </a><li><a href="./reference/configure/WorkWidgetDefinition.html">Work Widget Definition</a><a> defines
         a single widget and its corresponding attribute that the value will be stored in.  It 
         also provides some layout capabilities for that widget.</a></li>
<a>         </a><li><a href="./reference/configure/WorkRuleDefinition.html">Work Rule Definition</a><a> defines
         certain rules that can be applied to Work Pages and Team Definitions.</a></li>
<a>      </a></ul>
<a>		</a><h2><a>How to do it</a></h2>
<a>      </a><ul>
<a>         </a><li><a>Workflows can be created using the </a><a href="./reference/configure/WorkflowConfigurationEditor.html">
         ATS Workflow Configuration Editor</a><a> (0.6.0 release).  States and their transitions can 
         be edited through this interface.  Other modifications will need to be edited through 
         </a><a href="./reference/configure/create_workflowdefinition_artifact.html">Work Flow Definition</a><a> attributes
         and relations.</a></li>
<a>         </a><li><a>Work Pages, Widgets and Rules are currently edited through the
         attributes and relations using the default Artifact Editor.  See links above to
         set the proper values.</a></li>
<a>         </a><li><a>Configurations can also be created through the java.  An example of this can
         be seen by looking at the org.eclipse.osee.ats.config.demo plugin. This plugin, and the
         DemoDatabaseConfig.java class, shows how to programatically generate work flows, pages,
         rules and widgets to configure ATS.  This configuration will be generated during a database
         initialization.</a></li>
<a>      </a></ul>

<!--
 Copyright (c) 2004, 2007 Boeing.
 All rights reserved. This program and the accompanying materials
 are made available under the terms of the Eclipse Public License v1.0
 which accompanies this distribution, and is available at
 http://www.eclipse.org/legal/epl-v10.html
 Contributors:
     Boeing - initial API and implementation
-->
<a>	
		
      <link rel="stylesheet" type="text/css" href="ATS_files/style.css">
	
		</a><h1><a id="section8.4.1">8.4.1. </a>ATS Workflow Configuration Editor</h1>
		<br>
		<img src="reference/configure/configEditor.JPG" border="1">
		<h2>Purpose</h2>
		Give a graphical method to creating / updating ATS Workflow Configurations.  This editor
		also gives easy access, through double-click" to edit the "Work Page Definition" artifact
		that represent the selected state.
		<h2>How to do it</h2>
		<ul>
		   <li>Open editor for a specific workflow:</li>
         <ul>
            <li>Existing Work Flow Definition Artifact: From Common branch in Artifact Explorer, expand Action Tracking System -&gt; Work Flows
            and double-click the workflow you wish to edit.</li>
            <li>From ATS Workflow Editor: Select workflow icon at top right and associated workflow
            will be opened.</li>
            <li>New Workflow Configuration: File -&gt; New -&gt; Other -&gt; OSEE ATS -&gt; Workflow Configuration;
             Enter unique namespace for this workflow configuration. (eg: org.<company>.code).  This 
             creates a simple workflow to use as a starting place.</company></li>
         </ul>
         
		   <li>Create states:</li>
         <ul>
            <li>Add necessary states to diagram to represent workflow.  Note: Only one state
            is the entry point and the workflow must end at the "Completed" state.  The "Cancelled"
            state is optional, but should be used in most cases.</li>
         </ul>
         
		   <li>Editing Rules, Widgets and other State attributes:  Double-click on any state to open
		   the Artifact in the Artifact Editor.</li>

 		   <li>Create transitions:</li>
         <ul>
	         <li>For each state, a single "Default Transition" must be specified.  This will
	         be the default state specified as the "next" state in the workflow.  Optional transitions
	         to other states can be specified by the "Transition" arrow.  The user will have the 
	         option of selecting one of these states instead.</li>
	         <li>The "Return Transition" can be specified for valid jumps "back" to previous states.
	         (eg: The user may need to transition back to the "Analyze" state from the "Authorize"
	         state if authorization failed and more analysis is needed.</li>
         </ul>
         <li>Select a single state and set it's "Start Page" property to "Yes" for the state
         specified to start the workflow.  Only one state can be the start state.</li>
 		   <li>Save and test the new workflow configuration:</li>
            <ul>
               <li>Select Save to persist the changes.  Validation will be automatically run (see below)</li>
               <li><a href="./reference/configure/TeamDefinition.html">Configure the Team Definition</a> to use the new workflow</li>
               <li>Create a new Action and test the created workflow</li>
            </ul>
         <li>   
      </li></ul>
      <h2>Workflow Configuration - Validation</h2>
		Validation of a workflow is provided by selecting the check icon and selecting a state,
		transition or the entire workflow (selecting the white background).  This will popup
		whatever error occurs or a "Validation Success" if all is ok.<br><br>
		Note: This same validation will occur during save and will fail if all problems are not resolved.
		<br>

<!--
 Copyright (c) 2004, 2007 Boeing.
 All rights reserved. This program and the accompanying materials
 are made available under the terms of the Eclipse Public License v1.0
 which accompanies this distribution, and is available at
 http://www.eclipse.org/legal/epl-v10.html
 Contributors:
     Boeing - initial API and implementation
-->
	
		
      <link rel="stylesheet" type="text/css" href="ATS_files/style.css">
	
   <h1><a id="section8.4.2">8.4.2. </a>Work Flow Definition Artifact</h1>
		<h2>Purpose</h2>
		The Work Flow Definition artifact specifies the workflow that a team moves through to complete
		an Action.  This artifact specifies the states, their transitions and the start state of the
		workflow.  Creation/Editing of this artifact can either be done through the Artifact Editor
		or using the Workflow Configuration Editor (OSEE 0.6.0 Release and beyond). 
		
		<h2>How to do it - <a href="./reference/configure/WorkflowConfigurationEditor.html">Configuration Editor</a></h2>
      
		<h2>How to do it - Artifact Editor</h2>
		On the Common branch in the Artifact Editor, Expand "Action Tracking System" and right-click
		on "Work Flows", select New Child -&gt; Work Flow Definition.  Enter a unique namespace name
		for this workflow (eg: org.<company>.code).  In the Artifact Editor, add and set the attributes
		and relations as below.
		<br><br>
      <li>Attributes</li>
      <ul>
         <li>Name:[unique namespace, usually the same as the Work Id specified below]</li>
         <li>osee.wi.Work Id:[unique workflow namespace] - this will preceed each state name
         specified in the workflow.</li>
         <li>osee.wi.Parent Work Id:[Work Id of Parent Work Flow Definition] - this will allow
         this workflow to inherit it's transitions and start state from another workflow.  This
         can not be used with other attributes below</li>
         <li>osee.wi.Start Page:[namespace.state name] - this specifies the name of the
         initial state in the workflow</li>
         <li>osee.wi.Transition:[[from state name];[transition type];[to state name]] - specifies
         the transition from state to state where</li>
            <ul>
               <li>[from state name]/[to state name]- unique Work Page Definition Work Id comprised of [namespace].[State Name]</li>
               <li>[transition type] - one of the following:</li>
                  <ul>
                     <li>ToPageAsDefault - Transition is "Default Transition" state</li>
                     <li>ToPage - Transition is optional transition to state</li>
                     <li>ToPageAsReturn - Optional transition to a previously visited state</li>
                  </ul>
            </ul>
         <li>osee.wi.Description:Optional attribute to add description of workflow</li>
      </ul>
      <li>Relations</li>
      <ul>
         <li>Work Item.Parent: Relate to any Team Definition configured to use this workflow.</li>
      </ul>

<!--
 Copyright (c) 2004, 2007 Boeing.
 All rights reserved. This program and the accompanying materials
 are made available under the terms of the Eclipse Public License v1.0
 which accompanies this distribution, and is available at
 http://www.eclipse.org/legal/epl-v10.html
 Contributors:
     Boeing - initial API and implementation
-->
	
		
      <link rel="stylesheet" type="text/css" href="ATS_files/style.css">
	
   <h1><a id="section8.4.3">8.4.3. </a>Work Page Definition Artifact</h1>
		<h2>Purpose</h2>
		The Work Page Definition artifact configures a single state of the <a href="./reference/configure/WorkFlowDefinition.html%3EWorkflow%20Definition%3C/a%3E%20for%20a%20%3Ca%20href=" workflowconfiguration.html="">Workflow Configuration</a>. 
		
		<h2>How to do it - <a href="./reference/configure/WorkflowConfigurationEditor.html">ATS Workflow Configuration Editor</a></h2>
		The ATS Workflow Configuration Editor will allow the editing of the three main fields of a
		Work Page Definition Artifact.  The remaining fields, and the relations to <a href="./reference/configure/WorkRuleDefinition.html">
		Work Rules</a> and <a href="./reference/configure/WorkWidgetDefinition.html">Work Widgets</a> must be done through the
		Artifact Editor.
      
		<h2>How to do it - Artifact Editor</h2>
		Work Page Definitions are either stored as children of their Work Flow Definition artifact or 
		under the "Work Pages" folder.
		<br>
		On the Common branch in the Artifact Editor, Expand "Action Tracking System" and right-click
		on "Work Page", select New Child -&gt; Work Page Definition, or double-click an existing Work Page
		Definition artifact.  Edit the following attributes and relations accordingly.
		<br><br>
      <li>Attributes</li>
      <ul>
         <li>Name:[unique name matching Work Id below]</li>
         <li>osee.wi.Work Id:[unique workflow namespace].[Work Page Name] as below.</li>
         <li>osee.wi.Parent Work Id:[Work Id of Parent Work Page Definition] - this will allow
         this workflow to inherit it's widgets and rules from another workflow.  This
         can not be used with other attributes below</li>
         <li>osee.wi.Work Page Name:State Name that the user will see.  This can not have any 
         special characters including . in the name.</li>
      </ul>
      <li>Relations</li>
      <ul>
         <li>Work Item.Child: Relate to any Rules or Widgets that this state is made of.</li>
      </ul>

<!--
 Copyright (c) 2004, 2007 Boeing.
 All rights reserved. This program and the accompanying materials
 are made available under the terms of the Eclipse Public License v1.0
 which accompanies this distribution, and is available at
 http://www.eclipse.org/legal/epl-v10.html
 Contributors:
     Boeing - initial API and implementation
-->
	
		
      <link rel="stylesheet" type="text/css" href="ATS_files/style.css">
	
   <h1><a id="section8.4.4">8.4.4. </a>Work Rule Widget Artifact</h1>
		<h2>Purpose</h2>
		The Work Widget Definition artifact specifies a single widget, via xml, that will be
		displayed on the state page in the ATS Workflow Editor.
		
		<h2>How to do it - Artifact Editor</h2>
		On the Common branch in the Artifact Editor, Expand "Action Tracking System" expand
		"Work Widget" and double-click any existing Work Widget.  Edit the following attributes and relations 
		accordingly.<br><br>
		
      <li>Attributes</li>
      <ul>
         <li>Name:[unique name matching Work Id below]</li>
         <li>osee.wi.Work Id:[unique id]</li>
         <li>osee.wi.Work Description:Simple description explaining what widget is.</li>
         <li>osee.wi.Work Data: XWidget=[XWidget xml specifying widget]</li>
      </ul>
      <li>Relations</li>
      <ul>
         <li>Work Item.Parent: Relate to any Team Definition or Work Page Definition artifacts as appropriate.</li>
      </ul>

<!--
 Copyright (c) 2004, 2007 Boeing.
 All rights reserved. This program and the accompanying materials
 are made available under the terms of the Eclipse Public License v1.0
 which accompanies this distribution, and is available at
 http://www.eclipse.org/legal/epl-v10.html
 Contributors:
     Boeing - initial API and implementation
-->
	
		
      <link rel="stylesheet" type="text/css" href="ATS_files/style.css">
	
   <h1><a id="section8.4.5">8.4.5. </a>Work Rule Definition Artifact</h1>
		<h2>Purpose</h2>
		The Work Rule Definition artifact specifies a single rule that can be applied to workflow configurations
		or to <a href="./reference/configure/TeamDefinition.html">Team Definition</a> artifacts.  These rules are normally backed by
		java code that performs certain tasks like automatically creating new reviews, assigning 
		workflows to specific users or specifying states as allowing create/commit of branches.
		
		<h2>How to do it - Artifact Editor</h2>
		On the Common branch in the Artifact Editor, Expand "Action Tracking System" expand
		"Work Rule" and double-click any existing Work Rule.  Edit the following attributes and relations 
		accordingly.
		<br><br>
      <li>Attributes</li>
      <ul>
         <li>Name:[unique name matching Work Id below]</li>
         <li>osee.wi.Work Id:[unique workflow namespace].[Work Page Name] as below.</li>
         <li>osee.wi.Work Description:Simple description explaining what rule does.</li>
         <li>osee.wi.Work Data:Key/Value pares of information used by rule.</li>
      </ul>
      <li>Relations</li>
      <ul>
         <li>Work Item.Parent: Relate to any Team Definition or Work Page Definition artifacts as appropriate.</li>
      </ul>

<!--
 Copyright (c) 2004, 2007 Boeing.
 All rights reserved. This program and the accompanying materials
 are made available under the terms of the Eclipse Public License v1.0
 which accompanies this distribution, and is available at
 http://www.eclipse.org/legal/epl-v10.html
 Contributors:
     Boeing - initial API and implementation
-->
	
		
      <link rel="stylesheet" type="text/css" href="ATS_files/style.css">
	
   <h1><a id="section8.5">8.5. </a>Configure ATS for Help</h1>
		<h2>Purpose</h2>
		To configure ATS workflows to use the integrated help system.  ATS help useds a combination of widget 
		tooltip, static help pages and dynamic help content configured through extended plugins.
		<h2>How to do it</h2>
   <ul>
      <li>Workflow Page Help</li>
      <li>Workflow Widget Help</li>
      <ul>
         <li>Declared tooltip is shown as tooltip when hover over label</li>
         <li>Double-Click label pops open html dialog if help contextId and pluginId are set</li>
         <li>Double-Click label pops open tooltip</li>
         <li>Top down order of obtaining help content</li>
         <ul>
            <li>Setting tooltip in IStateItem interface</li>
            <li>Work Widget Definitions in Work Data attribute value of XWidget=...tooltip="put help here"</li>
            <li>ATSAttributes.java declarations</li>
         </ul>
      </ul>
   </ul>

<!--
 Copyright (c) 2004, 2007 Boeing.
 All rights reserved. This program and the accompanying materials
 are made available under the terms of the Eclipse Public License v1.0
 which accompanies this distribution, and is available at
 http://www.eclipse.org/legal/epl-v10.html
 Contributors:
     Boeing - initial API and implementation
-->
	
		
        <link rel="stylesheet" type="text/css" href="ATS_files/style_002.css">
	
		<h1><a id="section9.1">9.1. </a>Branch Manager View</h1>
		<br>
		<img src="ATS_files/branch_view.gif">
		<h2>Purpose</h2>
		<p>The
Branch Manager View is used to display all of the branches in Skynet,
as well as details for the transactions on each branch.</p>
		<p>Branches
and transactions can be sorted by clicking on the column heading for
the column to sort by. Initially, the data will be sorted in ascending
order. Clicking the same column multiple times will toggle the sorting
between ascending and descending.</p>
		<p>Locating branches can also be aided by <a href="http://127.0.0.1:4441/help/topic/org.eclipse.osee.framework.ui.skynet/reference/branch_filtering.html">filtering</a> or using <a href="http://127.0.0.1:4441/help/topic/org.eclipse.osee.framework.ui.skynet/reference/favorite_branch.html">favorites</a>.</p>
		<h2>Icons</h2>
		<ul>
		<li><img src="ATS_files/branch.gif"> Base image for branches</li>
		<li><img src="ATS_files/change_managed_branch.gif"> Base image for branches that are under change managment</li>
		<li><img src="ATS_files/black_check.gif"> Overlay to mark branch as the default</li>
		<li><img src="ATS_files/star_9_9.gif"> Overlay to mark branch as a favorite</li>
		<li><img src="ATS_files/transaction.gif"> Image for transactions</li>
		<li><img src="ATS_files/relate.gif"> Base image for relation links</li>
		<li><img src="ATS_files/molecule.gif"> Base image for attributes</li>
		<li><img src="ATS_files/out_new.gif"> Overlay to mark item as new</li>
		<li><img src="ATS_files/out_change.gif"> Overlay to mark item as modified</li>
		<li><img src="ATS_files/out_delete_002.gif"> Overlay to mark item as deleted</li>
		</ul>

<!--
 Copyright (c) 2004, 2007 Boeing.
 All rights reserved. This program and the accompanying materials
 are made available under the terms of the Eclipse Public License v1.0
 which accompanies this distribution, and is available at
 http://www.eclipse.org/legal/epl-v10.html
 Contributors:
     Boeing - initial API and implementation
-->
	
		
      <link rel="stylesheet" type="text/css" href="ATS_files/style_002.css">
	
		<h1><a id="section9.1.1">9.1.1. </a>Default Branch</h1>
		<h2>What it is</h2>
		The branch which is returned to any program that asks for the current default branch. For instance,
		the Artifact Explorer will use the default branch to determine what artifacts to show, and artifact
		searches are performed against the default branch.
		<h2>How to tell what the default branch is</h2>
		The Branch Manager view shows all of the branches with the <img src="ATS_files/branch.gif"> icon.<br>
		<br>
		The default branch will have a <img src="ATS_files/black_check.gif"> at the top right of the normal branch icon.<br>
		<br>
		Most views and editors that are working with artifacts will show the branch in the status bar next to the branch icon.
		<h2>How to set it</h2>
		The default branch is set from the Branch Manager view. Use sorting or <a href="http://127.0.0.1:4441/help/topic/org.eclipse.osee.framework.ui.skynet/reference/branch_filtering.html">filtering</a> in the table to find the
		desired branch. Right-click on the branch and then select <i>Set Default Branch</i> from the popup menu.<br>
		<br>
		The <i>Set Default Branch</i> option will be disabled if any of the following cases are true:
		<ul>
		<li>The branch selected is already the default</li>
		<li>The item selected is not a branch</li>
		<li>More than one item is selected</li>
		</ul>
		

<!--
 Copyright (c) 2004, 2007 Boeing.
 All rights reserved. This program and the accompanying materials
 are made available under the terms of the Eclipse Public License v1.0
 which accompanies this distribution, and is available at
 http://www.eclipse.org/legal/epl-v10.html
 Contributors:
     Boeing - initial API and implementation
-->
	
		
      <link rel="stylesheet" type="text/css" href="ATS_files/style_002.css">
	
		<h1><a id="section9.1.2">9.1.2. </a>Favorite Branch</h1>
		<h2>What it is</h2>
		A branch that the user has marked as a favorite. Any number of branches can be marked as favorite. This is
		used in conjunction with the <img src="ATS_files/filter.gif">Show Favorites First filter to quickly locate
		branches of interest.
		<h2>How to tell which branches are favorites</h2>
		The Branch Manager view shows all of the branches with the <img src="ATS_files/branch.gif"> icon.<br>
		<br>
		A favorite branch will have a <img src="ATS_files/star_9_9.gif"> at the bottom left of the normal branch icon.
		<h2>How to set/unset it</h2>
		A favorite branch is set from the Branch Manager view. Use sorting or filtering in the table to find the
		desired branch. Right-click on the branch and then select <i>Mark As Favorite</i>
		or <i>Unmark As Favorite</i> from the popup menu.<br>
		<br>

<!--
 Copyright (c) 2004, 2007 Boeing.
 All rights reserved. This program and the accompanying materials
 are made available under the terms of the Eclipse Public License v1.0
 which accompanies this distribution, and is available at
 http://www.eclipse.org/legal/epl-v10.html
 Contributors:
     Boeing - initial API and implementation
-->
	
		
      <link rel="stylesheet" type="text/css" href="ATS_files/style_002.css">
	
		<h1><a id="section9.1.3">9.1.3. </a>Branch Filtering</h1>
		<h2>What it is</h2>
		A quick way to limit which branches are displayed in the Branch Manager view.
		<h2>How to do it</h2>
		Type text in to the box labeled <i>Filter:</i>. As characters are typed, the Branch Manager
		will update to only display branches whose name contains the text, ignoring the case.<br>
		<br>
		If no text is entered then all branches will be displayed.		

<!--
 Copyright (c) 2004, 2007 Boeing.
 All rights reserved. This program and the accompanying materials
 are made available under the terms of the Eclipse Public License v1.0
 which accompanies this distribution, and is available at
 http://www.eclipse.org/legal/epl-v10.html
 Contributors:
     Boeing - initial API and implementation
-->
	
		
      <link rel="stylesheet" type="text/css" href="ATS_files/style_002.css">
	
		<h1><a id="section9.1.4">9.1.4. </a>Show Change Report</h1>
		<h2>What it is</h2>
		A view that shows all of the changes made on a branch, or between two transactions on the same branch.
		<h2>How to do it</h2>
		<h3>For a branch</h3>
		Use <a href="http://127.0.0.1:4441/help/topic/org.eclipse.osee.framework.ui.skynet/reference/branch_filtering.html">filtering</a> or sorting to locate the branch of interest. Right-click
		the branch and select <i>Show Change Report</i>. The change report will show all changes made on the branch
		since its baseline.<br>
		<br>
		If anything is selected in addition to the one branch, then the <i>Show Change Report</i> menu item will be disabled.
		<h3>For a range of transactions</h3>
		Use <a href="http://127.0.0.1:4441/help/topic/org.eclipse.osee.framework.ui.skynet/reference/branch_filtering.html">filtering</a> or sorting to locate the branch with the transactions. Then locate the
		starting and ending transactions. Select both of the transactions by ctrl-clicking each transaction, then right-click 
		and select <i>Show Change Report</i>. The change report will show all changes after the earlier transaction, up to and
		including the later transaction.<br>
		<br>
		If anything is selected in addition to the two transactions, or the two transactions are on seperate branches,
		the <i>Show Change Report</i> menu item will be disabled.

<!--
 Copyright (c) 2004, 2007 Boeing.
 All rights reserved. This program and the accompanying materials
 are made available under the terms of the Eclipse Public License v1.0
 which accompanies this distribution, and is available at
 http://www.eclipse.org/legal/epl-v10.html
 Contributors:
     Boeing - initial API and implementation
-->
	
		
        <link rel="stylesheet" type="text/css" href="ATS_files/style_002.css">
	
		<h1><a id="section9.2">9.2. </a>Change Report View</h1>
		<br>
		<img src="ATS_files/change_report_view.gif">
		<h2>Purpose</h2>
		<p>The Change Report View is used to summarize the changes that have been made on a branch or series of transactions.</p>
		<h2>Icons</h2>
		<ul>
		<li><img src="ATS_files/relate.gif"> Base image for relation links</li>
		<li><img src="ATS_files/molecule_002.gif"> Base image for attributes</li>
		<li><img src="ATS_files/inc_new.gif"> Overlay to mark item as an incoming new item</li>
		<li><img src="ATS_files/inc_change.gif"> Overlay to mark item as an incoming modification</li>
		<li><img src="ATS_files/inc_delete.gif"> Overlay to mark item as an incoming delete</li>
		<li><img src="ATS_files/out_new_002.gif"> Overlay to mark item as an outgoing new item</li>
		<li><img src="ATS_files/out_change_002.gif"> Overlay to mark item as an outgoing modification</li>
		<li><img src="ATS_files/out_delete.gif"> Overlay to mark item as an outgoing delete</li>
		<li><img src="ATS_files/con_new.gif"> Overlay to mark an item as being new but having incoming changes</li>
		<li><img src="ATS_files/con_change.gif"> Overlay to mark an item as having incoming and outgoing changes</li>
		<li><img src="ATS_files/con_delete.gif"> Overlay to mark an item as being deleted but having incoming changes</li>
		</ul>
		<h2>Branch Change Report</h2>
		<p>A Change Report can be performed for a branch two ways. The first way is by selecting right-clicking a branch 
		from the Branch Manager then choosing the "Show Change Report" menu item. The second way is to select
		"Show Change Report" from the Aspect view of an ATS Action that is still in work; this will do a Change
		Report for the working branch of the Aspect.</p>
		<p>This type of Change Report will display all of the artifacts on the branch that have had an attribute
		or relation link modified. It will also do conflict detection on these artifacts against the parent branch.
		All changes done on the current artifact will appear with a grey right arrow<img src="ATS_files/out_change_002.gif">, while all changes from the
		parent branch will be shown with a blue left arrow<img src="ATS_files/inc_change.gif">. Attributes and relation links with multiple changes will
		provide a summarized node that shows the final effect of the changes and can be expanded to view all of the
		minor changes that were made. If an attribute or relation link was modified on both
		branches then the summary will show a red conflict mark<img src="ATS_files/con_change.gif"> to signify that a commit will cause an override
		to occur.
		

<!--
 Copyright (c) 2004, 2007 Boeing.
 All rights reserved. This program and the accompanying materials
 are made available under the terms of the Eclipse Public License v1.0
 which accompanies this distribution, and is available at
 http://www.eclipse.org/legal/epl-v10.html
 Contributors:
     Boeing - initial API and implementation
-->
	
		
      <link rel="stylesheet" type="text/css" href="ATS_files/style_002.css">
	
		</p><h1><a id="section9.2.1">9.2.1. </a>Refresh Change Report</h1>
		<h2>Purpose</h2>
		Forces the Change Report to be recomputed. This is typically used when the Change Report snapshot has become out of date,
		noted by a <img src="ATS_files/old.gif"> next to the snapshot	description on the first line of the Change Report.
		<h2>How to do it</h2>
		Select the refresh button (<img src="ATS_files/refresh.gif">) from the toolbar on the top portion of the Change Report view.<br>
		<br>
		If the Change Report view is empty then the refresh button will do nothing.








<link rel="STYLESHEET" href="ATS_files/book.css" charset="ISO-8859-1" type="text/css">

<script language="JavaScript" src="ATS_files/livehelp_002.js"> </script>

<link rel="stylesheet" href="ATS_files/breadcrumbs.css" charset="ISO-8859-1" type="text/css">
<script type="text/javascript" src="ATS_files/livehelp.js"> </script>

<link rel="stylesheet" href="ATS_files/narrow_book.css" type="text/css">
<link rel="stylesheet" href="ATS_files/win32_narrow_book.css" type="text/css">
<script type="text/javascript">
<!--
if (parent.ContentToolbarFrame && parent.ContentToolbarFrame.setButtonState) parent.ContentToolbarFrame.setButtonState("toggle_highlight","hidden");
-->
</script>

	<h1><a id="section9.3">9.3. </a>Quick Search View</h1>

	<p>The Quick Search view allows users to perform searches for information 
	that is contained <i>inside</i> artifacts in a selected branch. 
	</p>

	<img src="ATS_files/quickSearchView.png" alt="quick search view">
	
	<p>To find all artifacts that contain a particular set of keywords:</p>
	<ol>
  		<li>Select <a class="command-link" href='javascript:executeCommand("org.eclipse.ui.views.showView(org.eclipse.ui.views.showView.viewId=org.eclipse.osee.framework.ui.skynet.QuickSearchView)")'>
		<img src="ATS_files/artifact_search.gif" alt="search icon" border="0">
		<b>Window &gt; Show View &gt; Other... &gt; OSEE &gt; Quick Search</b></a>, to open the view.
  		</li>
  		<li><p>Type your search string in the <b>Enter Search String</b> combo box, or use the 
      pull-down list to select a previously entered search expression. <br> Special characters such as (<b><code>' '</code>, 
      <code>!</code>, <code>"</code>, <code>#</code>, <code>$</code>, 
      <code>%</code>, <code>(</code>, <code>)</code>, <code>*</code>, <code>+</code>, 
      <code>,</code>, <code>-</code>, <code>.</code>, <code>/</code>, <code>:</code>, 
      <code>;</code>, <code>&lt;</code>, <code>&gt;</code>, <code>?</code>, <code>@</code>, 
      <code>[</code>, <code>\</code>, <code>]</code>, <code>^</code>, <code>{</code>, 
      <code>|</code>, <code>}</code>, <code>~</code>, <code>_</code></b>) are assumed to be word separators unless <i>By Id</i> option is selected.
      When <i>By Id</i> option is selected, (<b><code>,</code> and <code>' '</code></b>) are treated as separators.</p>
      <p>For example:      	
      	</p><ul>
      		<li>When <i>By Id</i> is not selected, <b><code>hello.world</code></b> will be translated to <b><code>hello</code></b> and <b><code>world</code></b>. The search will match attributes with <b><code>hello</code></b> and <b><code>world</code></b> keywords.</li>
      		<li>When <i>By Id</i> is selected, (<b><code>A+ABG7jFm+0BKaVZIxfqOQ,AFABG7jFm+0BKaVZIxfqOQ PX1FH</code></b>) will be interpreted as 2 GUID(s) and 1 HRID. The search will match artifacts containing <b><code>A+ABG7jFm+0BKaVZIxfqOQ</code></b> and <b><code>AFABG7jFm+0BKaVZIxfqOQ</code></b> as its GUID or <b><code>PX1FH</code></b> as its HRID.</li>
      	</ul>
      
      </li>
  		<li>Finish entering your search options, (for example, to scope
      	the search to include deleted artifacts, check the include deleted option), 
      	and click <b>Search</b> or press <b>Enter</b> from the combo box to execute the search.
      </li>
  		<li>The Search view displays the results of your search. Right-click on any item in
      	 the Search view to open a pop-up menu that allows you perform various operations 
      	 on the artifacts such as copy search results to the clipboard or reveal a 
      	 selected artifact in Artifact Explorer. To open one of the listed artifacts, 
      	 double-click it or select <b>Open</b> from its pop-up menu.
     	</li>
	</ol>
		
	<p><img src="ATS_files/ngrelc.png" alt="Related concepts" border="0"><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://127.0.0.1:4441/help/topic/org.eclipse.osee.framework.ui.skynet/reference/quickSearch/attribute_tagging.html">Attribute Tagging</a>
	</p>

	<p><img src="ATS_files/ngrelr.png" alt="Related reference" border="0"><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://127.0.0.1:4441/help/topic/org.eclipse.osee.framework.ui.skynet/reference/quickSearch/attribute_type_filter_option.html">Attribute Type Filter Search Option</a><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://127.0.0.1:4441/help/topic/org.eclipse.osee.framework.ui.skynet/reference/quickSearch/by_id_option.html">By Id Search Option</a><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://127.0.0.1:4441/help/topic/org.eclipse.osee.framework.ui.skynet/reference/quickSearch/include_deleted_option.html">Include Deleted Search Option</a><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://127.0.0.1:4441/help/topic/org.eclipse.osee.framework.ui.skynet/reference/quickSearch/word_order_match_option.html">Word Order Match Search Option</a><br>		
	</p>
			








<link rel="STYLESHEET" href="ATS_files/book.css" charset="ISO-8859-1" type="text/css">

<script language="JavaScript" src="ATS_files/livehelp_002.js"> </script>

<link rel="stylesheet" href="ATS_files/breadcrumbs.css" charset="ISO-8859-1" type="text/css">
<script type="text/javascript" src="ATS_files/livehelp.js"> </script>

<link rel="stylesheet" href="ATS_files/narrow_book.css" type="text/css">
<link rel="stylesheet" href="ATS_files/win32_narrow_book.css" type="text/css">
<script type="text/javascript">
<!--
if (parent.ContentToolbarFrame && parent.ContentToolbarFrame.setButtonState) parent.ContentToolbarFrame.setButtonState("toggle_highlight","hidden");
-->
</script>

		<h1><a id="section9.3.2">9.3.2. </a>Quick Search Include Deleted Search Option</h1>
		
		<h2>What it is</h2>
		<p>An option to include artifacts that have been deleted as part of a quick search on the default branch. 
		</p>
		<h2>How to do it</h2>
		<p>Type in the desired words. Make sure the <i>Include Deleted</i> option is selected
		under <i>Options</i>, then press the <i>Search</i> button.</p>
		
		<h2>Shortcuts</h2>
		<p>Pressing enter in the text entry box is equivalent to pressing the <i>Search</i> button.</p>
		
		<p><img src="ATS_files/ngrelr.png" alt="Related reference" border="0"><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://127.0.0.1:4441/help/topic/org.eclipse.osee.framework.ui.skynet/reference/quickSearch/quick_search_view.html">Quick Search View</a>
		</p>








<link rel="STYLESHEET" href="ATS_files/book.css" charset="ISO-8859-1" type="text/css">

<script language="JavaScript" src="ATS_files/livehelp_002.js"> </script>

<link rel="stylesheet" href="ATS_files/breadcrumbs.css" charset="ISO-8859-1" type="text/css">
<script type="text/javascript" src="ATS_files/livehelp.js"> </script>

<link rel="stylesheet" href="ATS_files/narrow_book.css" type="text/css">
<link rel="stylesheet" href="ATS_files/win32_narrow_book.css" type="text/css">
<script type="text/javascript">
<!--
if (parent.ContentToolbarFrame && parent.ContentToolbarFrame.setButtonState) parent.ContentToolbarFrame.setButtonState("toggle_highlight","hidden");
-->
</script>



	<h1><a id="section9.3.3">9.3.3. </a>Attribute Tagging for Quick Search</h1>

	<p>When an artifact is saved, each attribute contained in the artifact is analyzed to produce a list of 
	tags that are then associated with the artifact. Quick search is a form of <i>keyword</i> based searching 
	which uses tags to perform contextual artifact searches.</p>
	
	<p>For an attribute to be tagged by the system, it must meet the following criteria:</p>
	<ol>
		<li>The attribute's type must specify an <b>Attribute Tagger</b> to be used by the tagging system.</li>
		<li>The attribute must contain valid data.</li>
		<li>The attribute revision must be saved in the database before sending to tagging system.</li>
	</ol>
	
	<p>To produce tags, modified attributes are sent to the OSEE application server where the tagging system
	processes each attribute using an <b>Attribute Tagger</b> specified by the attribute's type. The <b>Attribute Tagger</b>
	knows how to interpret the attribute's data and how to extract words from the content. At this point, a word is defined
	as a sequential set of alphanumeric characters delimited by one or more spaces. As words are parsed, they are sent
	to the tagging system's word encoder where the following processing takes place:
	</p>
	<ol>
		<li>The characters in the original word are converted to lower case.</li>
		<li>The lower cased version of the word is encoded and stored in the tagging system.</li>
		<li>The lower cased version of the word is split using punctuation characters such as (<b><code>' '</code>, 
      <code>!</code>, <code>"</code>, <code>#</code>, <code>$</code>, 
      <code>%</code>, <code>(</code>, <code>)</code>, <code>*</code>, <code>+</code>, 
      <code>,</code>, <code>-</code>, <code>.</code>, <code>/</code>, <code>:</code>, 
      <code>;</code>, <code>&lt;</code>, <code>&gt;</code>, <code>?</code>, <code>@</code>, 
      <code>[</code>, <code>\</code>, <code>]</code>, <code>^</code>, <code>{</code>, 
      <code>|</code>, <code>}</code>, <code>~</code>, <code>_</code></b>) as delimiters.</li>
		<li>Possessive words <i>(ending in 's)</i> are converted into regular form.</li>
		<li>Each word is converted from plural to singular form.</li>
		<li>Each word is encoded and stored in the tag system.</li>		
	</ol>
	
	<p> When encoding words into tags, the tag encoder uses an algorithm which transforms the word's characters
	into a bit-packed tag that will fit in a 64-bit integer. The tag will represent up to 12 characters 
	(all that can fit into 64-bits). Longer words will be turned into consecutive tags.</p>
   	
	<h3>Tag Encoding Examples</h3>
	<table style="width: 50%;" border="1">
		<tbody><tr style="background: lightgrey none repeat scroll 0% 0%; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;">
		<th>Original</th>
		<th>Keywords</th>
		<th>Encoding</th>
		</tr>
		<tr>
			<td>appendeces</td>
			<td>appendix</td>
			<td>-220858502</td>
		</tr>
		<tr>
			<td>battery(ies)</td>
			<td>battery</td>
			<td>529513131</td>
		</tr>
		<tr>
			<td>alternate/backup</td>
			<td>
				<table>
					<tbody><tr><td>alternate</td></tr>
					<tr><td>backup</td></tr>					
				</tbody></table>
			</td>
			<td>
				<table>
					<tbody><tr><td>-1420231874</td></tr>
					<tr><td>24902827</td></tr>
				</tbody></table>
			</td>
		</tr>
	</tbody></table>	

	<p><img src="ATS_files/ngrelr.png" alt="Related reference" border="0"><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://127.0.0.1:4441/help/topic/org.eclipse.osee.framework.ui.skynet/reference/quickSearch/quick_search_view.html">Quick Search View</a>
	</p>
		

<!--
 Copyright (c) 2004, 2007 Boeing.
 All rights reserved. This program and the accompanying materials
 are made available under the terms of the Eclipse Public License v1.0
 which accompanies this distribution, and is available at
 http://www.eclipse.org/legal/epl-v10.html
 Contributors:
     Boeing - initial API and implementation
-->
	
		
        <link rel="stylesheet" type="text/css" href="ATS_files/style_002.css">
	
		<h1><a id="section9.4">9.4. </a>Mass Artifact Editor</h1>
		<h2>Purpose</h2>
		<p>The Mass Artifact Editor allows the easy view of multiple artifact along with their attributes.
		This editor can be viewed from right-click off Artifact Explorer, Search Results page, or via
		ATS action.  Single cells can be edited via Alt-Left-Mouse-Click.  After editing any number of
		artifacts shown, the save button persists this data.</p>
		<p>Note: This editor will close upon switch of default branch unless the editor is tied to 
		the common branch.</p>
		<h2>Actions</h2>
		Select <img src="ATS_files/refresh.gif"> to refresh the contents.<br>
		Select <img src="ATS_files/customize_002.gif"> to <a href="http://127.0.0.1:4441/help/topic/org.eclipse.osee.framework.ui.skynet/reference/table_customization.html">Customize Table</a>.<br>
		Select <img src="ATS_files/bug.gif"> to <a href="http://127.0.0.1:4441/help/topic/osee.ats/reference/report_a_bug.html">Report a Bug</a>.<br>








<h1><a id="section9.5">9.5. </a>Merge Manager View</h1>
<img src="ATS_files/Merge_1.gif" border="0"><br>
&nbsp;<h2>Purpose</h2>
<p>The Merge Manager is used to resolve conflicts that arise when doing 
development on parallel branches.&nbsp; The Merge Manager makes conflicts that 
arise easily identifiable and then provides the means for resolving the 
conflicts, so that the working branch can be committed.</p>
<h2>Icons</h2>
<ul>
	<li>
	<img src="ATS_files/chkbox_disabled.gif" width="16" border="0" height="16">&nbsp; 
	Resolution has been started for the conflict</li>
	<li>
	<img src="ATS_files/accept.gif" width="16" border="0" height="16">&nbsp; 
	Conflict has been resolved and is ready to be committed, In the Merge column 
	it means that the Source and Destination Branches have the same value even 
	though they were both changed. </li>
	<li>
	<img src="ATS_files/chkbox_enabled_conflicted.gif" width="16" border="0" height="16">&nbsp; 
	After a conflict has been marked as resolved the value changed on the source 
	or destination branch</li>
	<li>
	<img src="ATS_files/issue.gif" width="16" border="0" height="16">&nbsp; 
	A conflict that provides the user special information but does not need to 
	be resolved</li>
	<li>
	<img src="ATS_files/red_light.gif" width="16" border="0" height="16">&nbsp; 
	A conflict that can not be resolved except by reverting the Artifact or 
	Attribute, because it was deleted on the Destination Branch</li>
	<li>
	<img src="ATS_files/blue_d.gif" width="16" border="0" height="16">&nbsp; 
	Shows that the item defined by the column it is in has the Destination 
	Branches value</li>
	<li>
	<img src="ATS_files/green_s.gif" width="16" border="0" height="16">&nbsp; 
	Shows that the item defined by the column it is in has the Source Branches 
	value</li>
	<li>
	<img src="ATS_files/yellow_m.gif" width="16" border="0" height="16">&nbsp; 
	Shows that the item defined by the column it is in has a new value that is 
	neither the Source Branch nor Destination Branch value.</li>
	<li>
	<img src="ATS_files/conflict.gif" width="16" border="0" height="16">&nbsp; 
	Shows that the conflict has not been given an initial value </li>
	<li>
	<img src="ATS_files/user.gif" width="16" border="0" height="16">&nbsp; 
	Opens the Associated Artifact for the merge</li>
	<li>
	<img src="ATS_files/branch_change_source.gif" width="16" border="0" height="16">&nbsp; 
	Opens up the Change Report for the Source Branch</li>
	<li>
	<img src="ATS_files/branch_change_dest.gif" width="16" border="0" height="16">&nbsp; 
	Opens up the Change Report for the Destination Branch</li>
	<li>
	<img src="ATS_files/refresh.gif" width="16" border="0" height="16">&nbsp; 
	Refreshes the Merge Manger view to find new conflicts</li>
	<li>
	<img src="ATS_files/customize_002.gif" width="16" border="0" height="16">&nbsp; 
	Allows the user to customize the Merge Manager tables</li>
	<li>
	<img src="ATS_files/bug.gif" width="16" border="0" height="16">&nbsp; 
	Report a bug with the Merge Manager</li>
</ul>
<h2>Overview</h2>
<p>The Merge Manager is in place to find conflicts and help users resolve these 
conflicts.&nbsp; A conflict exists if the value of an attribute/artifact has 
changed on both the Destination and Source Branches.&nbsp; For reference the 
Source Branch is the users working branch.&nbsp; It is the branch that the user 
has been making changes to and would like to then add back into the Destination 
Branch or Baseline Branch.&nbsp; Both branches are identified by name in the 
header of the Merge Manager.&nbsp; </p>
<p>Depending upon the conflict found, the user may have several choices for 
resolution.&nbsp; These include </p>
<ul>
	<li>Accept the value on the Source Branch and overwrite the value on the 
	Destination Branch</li>
	<li>Accept the value on the Destination Branch and do not add any of the 
	Source Branch changes, (These will still show up as merged on
	<a href="http://127.0.0.1:4441/help/topic/org.eclipse.osee.framework.ui.skynet/reference/change_table.html">Change Reports</a>)</li>
	<li>Create a solution that is a combination of the two changes </li>
	<li>Revert the changes on the Source Branch&nbsp; (This is the only 
	available solution when the Artifact/Attribute was deleted on the 
	Destination Branch, will show up as no change on the
	<a href="http://127.0.0.1:4441/help/topic/org.eclipse.osee.framework.ui.skynet/reference/change_table.html">Change Report</a>)</li>
	<li>Do nothing (only possible for informational conflicts)</li>
</ul>
<p>Committing of Branches is blocked until all conflicts are resolved.</p>
<h2>The GUI</h2>
<p>The GUI is organized to provide the user with an ability to quickly identify 
conflicts.</p>
<ul>
	<li><b>The Heading</b> - The Heading contains text to help identify what is 
	being merged. It identifies the Source Branch, and the Destination Branch.&nbsp; 
	It also provides the user with information about how many conflicts there 
	are and if they have been resolved.&nbsp; The Heading also contains easy 
	launch icons for additional tools in connection with the Merge Manager.</li>
	<li><b>The Conflict Resolution Column</b> - This column provides the user 
	information about the state of the conflict.&nbsp; A blank entry in the 
	column means that the conflict is new and has not had any actions performed 
	on it. A
	<img src="ATS_files/chkbox_disabled.gif" width="16" border="0" height="16"> 
	indicates that conflict is in the modified state.&nbsp; This means the user 
	has begun merging the conflict but has not marked it as resolved.&nbsp; The 
	user may transition it into the resolved state by left clicking on the
	<img src="ATS_files/chkbox_disabled.gif" width="16" border="0" height="16"> 
	icon. The
	<img src="ATS_files/accept.gif" width="16" border="0" height="16"> 
	icon indicates the user has marked the conflict as resolved.&nbsp; This 
	means they have selected a value for it and have verified the value going in 
	is what they want.&nbsp; No additional changes are allowed on a conflict 
	once it is in the resolved state.&nbsp; It can be placed back into the 
	modified state by left clicking on the
	<img src="ATS_files/accept.gif" width="16" border="0" height="16"> 
	icon. The
	<img src="ATS_files/chkbox_enabled_conflicted.gif" width="16" border="0" height="16"> 
	means that a conflict was in the resolved state but a new change has 
	occurred on either the Source or Destination Branch.&nbsp; It serves to 
	notify the user that the conflict was not in the finalized state when they 
	resolved the conflict.&nbsp; The user can return to resolved state by left 
	clicking on the&nbsp;
	<img src="ATS_files/chkbox_enabled_conflicted.gif" width="16" border="0" height="16"> 
	icon.&nbsp; The
	<img src="ATS_files/red_light.gif" width="16" border="0" height="16"> 
	icon indicates that an Artifact or Attribute must be reverted on the Source 
	Branch.&nbsp; This indicates that the Artifact/Attribute was deleted on the 
	Destination Branch and can not have a change committed onto it.&nbsp; The 
	user must abandon any change to that artifact attribute by using the revert 
	command.&nbsp; Once the Artifact/Attribute has been reverted the Merge 
	Manager will be refreshed and the conflict will be removed. The
	<img src="ATS_files/issue.gif" width="16" border="0" height="16">icon 
	indicates an informational conflict.&nbsp; The user does not have to take 
	any action to resolve these conflicts.&nbsp; It just provides the 
	information that the Source Branch deleted the Artifact/Attribute but the 
	Destination Branch has been modified.&nbsp; The user is free to act as 
	desired based on the provided information.</li>
	<li><b>The Artifact Name Column</b> - This column tells which artifact the 
	conflict occurred on.&nbsp; If the name is different between the Source and 
	Destination Branches, (this will show up as a conflict) it will at first 
	showing use the Source Branch value and then use whatever the name is 
	resolved to be after that has occurred.</li>
	<li><b>The Artifact Type Column</b> - Simply lists what type of Artifact is 
	conflicted</li>
	<li><b>The Conflicting Item Column</b> - In the case of an attribute 
	conflict it states what attribute type is conflicting.&nbsp; In the case of 
	an artifact conflict it will always say "Artifact State"</li>
	<li><b>The Source Value Column</b> - When possible this column tells what 
	value the Source Branch has for the conflict.&nbsp; It will always have a
	<img src="ATS_files/green_s.gif" width="16" border="0" height="16"> 
	icon. If the conflicting item is Word Formatted Content the words "Stream 
	data" will be shown.&nbsp; For artifact conflicts it will either show 
	"Modified" or "Deleted".&nbsp; Left clicking on the
	<img src="ATS_files/green_s.gif" width="16" border="0" height="16"> 
	icon will populate the Merge Branch with value found on the Source Branch.</li>
	<li><b>The Destination Value Column</b> - When possible this column tells 
	what value the Destination Branch has for the conflict.&nbsp; It will always 
	have a
	<img src="ATS_files/blue_d.gif" width="16" border="0" height="16"> 
	icon. If the conflicting item is Word Formatted Content the words "Stream 
	data" will be shown.&nbsp; For artifact conflicts it will either show 
	"Modified" or "Deleted".&nbsp; Left clicking on the
	<img src="ATS_files/blue_d.gif" width="16" border="0" height="16"> 
	icon will populate the Merge Branch with value found on the Destination 
	Branch.</li>
	<li><b>The Merge Value Column</b> - The Merged Value column serves to show 
	the user the value that has been selected for use when the Branch is 
	committed.&nbsp; The Merge value is actually kept on a new "Merge Branch" 
	and so any changes made to it will not affect the value seen on the Source 
	or Destination Branches.&nbsp; When the Merge Value column is blank with no 
	icon, the conflict is informational and no actions are provided.&nbsp; When 
	the Merge Value column contains a&nbsp;
	<img src="ATS_files/conflict.gif" width="16" border="0" height="16">icon 
	the value has not been set.&nbsp; This is the icon that should be shown for all 
	conflicts (Except informational conflicts, or same value conflicts) the 
	first time the user brings up the merge manager.&nbsp; The
	<img src="ATS_files/green_s.gif" width="16" border="0" height="16"> 
	icon indicates that the Source Value was selected as the final value.&nbsp; 
	The actual Source Value text will also be shown in this column if possible. 
	The
	<img src="ATS_files/blue_d.gif" width="16" border="0" height="16"> 
	icon indicates that the Destination Value was selected as the final value.&nbsp; 
	The Destination Value text will also be shown in this column if possible. 
	The
	<img src="ATS_files/yellow_m.gif" width="16" border="0" height="16"> 
	icon will be shown when a new value has been selected for the final value.&nbsp; 
	This indicates that the user has modified the final value so that it is no 
	longer a copy of the Source or Destination, but some variation thereof.&nbsp; 
	A
	<img src="ATS_files/accept.gif" width="16" border="0" height="16"> 
	icon indicates that although both the Source Branch Value and Destination 
	Branch Value have changed they were both changed to the same value and so 
	there is not really a conflict. Left clicking on the icon in the Merge Value 
	column will bring up the Merge Wizard or in the case of un-resolvable 
	conflicts a dialog offering the ability to revert the conflicting item.</li>
	<li><b><a name="The_Right_Click_Menu">The Right Click Menu</a></b> - Right clicking on any row will display a 
	menu with options for dealing with conflicts.&nbsp; 
<ul>
	<li>"Set Source as Default Branch" - This selection is a quick way to set 
	the Source Branch as the default branch.&nbsp; If the Source Branch is 
	already set as the Default Branch, the menu item will be grayed out and 
	there will be a check mark next to the option.</li>
	<li>"Set Destination as Default Branch" - This selection is a quick way to 
	set the Destination Branch as the default branch.&nbsp; If the Destination 
	Branch is already set as the Default Branch, the menu item will be grayed 
	out and there will be a check mark next to the option.</li>
	<li>"Edit Merge Artifact" - This option is only enabled for Word Formatted 
	Content conflicts and will bring up the Merge Artifact in Word.&nbsp; The 
	Merge Artifact is a separate version of the artifact that will preserve the 
	details of the Merge, and will be reviewable in the Merge Manager after an 
	artifact is committed.&nbsp; IMPORTANT: If the user makes the changes to 
	their Source Branch instead of on the Merge Artifact the Merge Manager will 
	incorrectly represent the merge in future reviews.</li>
	<li>"Generate Three Way Merge" - Will generate a <a href="http://127.0.0.1:4441/help/topic/org.eclipse.osee.framework.ui.skynet/reference/#Three_Way_Merge">
	Three Way Merge</a> for the Word Formatted Content.</li>
	<li>"Preview" -&gt; "Preview Source Artifact", "Preview Destination Artifact", 
	"Preview Merge Artifact" will show a preview in Word of the Artifact based 
	on the version selected.</li>
	<li>"Differences" -&gt; "Show Source Branch Differences", "Show Destination 
	Branch Differences", "Show Source/Destination Differences", "Show 
	Source/Merge Differences", "Show Destination/Merge Differences"&nbsp; will 
	generate differences based upon which option is selected.&nbsp; Allows the 
	user to see how different versions of the artifact differ.</li>
	<li>"Reveal Artifact in Explorer" - This option is only available when 
	either the Source or Destination Branch is set as the default branch.&nbsp; 
	When such is the case this will reveal the artifact in the Artifact Explorer 
	for the Branch that is the default branch.</li>
	<li>"Resource History" - This option is only available when either the 
	Source or Destination Branch is set as the default branch.&nbsp; When such 
	is the case this will reveal the resource history of the artifact on the 
	Branch that is the default branch.</li>
</ul></li>
</ul>
<p>&nbsp;</p>
<h2>Resolution Of Conflicts</h2>
<p>For <a href="http://127.0.0.1:4441/help/topic/org.eclipse.osee.framework.ui.skynet/reference/#Word_Formatted_Content">Word Formatted Content</a> conflicts see the section below.&nbsp; This 
section addresses all other conflicts.</p>
<ul>
	<li><b>Informational Conflicts</b><p>Informational conflicts are identified by 
	the
	<img src="ATS_files/issue.gif" width="16" border="0" height="16"> 
	icon in the conflict resolution column in the GUI.&nbsp; Informational 
	conflicts require no action by the user, and no actions are provided in the 
	GUI other than the ability to use the <a href="http://127.0.0.1:4441/help/topic/org.eclipse.osee.framework.ui.skynet/reference/#The_Right_Click_Menu">right 
	click menu</a> to examine the artifact using the tools provided there.&nbsp; 
	An informational conflict is generated when the Source branch deletes an 
	Artifact or an Attribute and that same Artifact or Attribute was modified on 
	the Destination Branch.&nbsp; This is to allow the user the opportunity to 
	review a change that was made on the Destination Branch that&nbsp; might 
	make them want to take some action in regards to their deletion.</p>
	<p>&nbsp;
	</p></li><li><b>Un-resolvable Conflicts</b><p>Un-resolvable Conflicts are identified 
	by the
	<img src="ATS_files/red_light.gif" width="16" border="0" height="16"> 
	icon in the conflict resolution column of the GUI. This conflicts require 
	the user to revert the Artifact or Attribute that caused the conflict on the 
	Source Branch.&nbsp; An Un-resolvable conflict is caused when the 
	Destination Branch deletes an Artifact or Attribute while the Source Branch 
	modifies that same Artifact, Attribute.&nbsp; The reason the user must 
	revert their changes is that committing in their changes would essentially 
	undo that deletion and bring that item back into existence. If the deletion 
	should not have happened the user needs to talk with the committer of the 
	deletion to resolve the issue.</p>
	<p>&nbsp;
	</p></li><li><b>Attribute Conflicts</b><p>Attribute Conflicts occur when both the 
	Destination and Source branch modify an attribute.&nbsp; This section will 
	cover all attributes except <a href="http://127.0.0.1:4441/help/topic/org.eclipse.osee.framework.ui.skynet/reference/#Word_Formatted_Content">Word Formatted 
	Content</a> Attributes.&nbsp; The resolution of these Attribute values 
	provide three options.&nbsp; Use the Source attribute value, use the 
	destination attribute value,&nbsp; use a modified value that is some 
	combination of the source and destination values. In order to use the Source 
	Value the user may left click on the
	<img src="ATS_files/green_s.gif" width="16" border="0" height="16"> 
	icon in the Source Value column.&nbsp; This will copy the
	<img src="ATS_files/green_s.gif" width="16" border="0" height="16"> 
	icon and the value displayed in the Source Value column into the Merged 
	Value Column.&nbsp; In order to use the Destination Value the user may left 
	click on the
	<img src="ATS_files/blue_d.gif" width="16" border="0" height="16"> 
	icon in the Destination Value column.&nbsp; This will copy the
	<img src="ATS_files/blue_d.gif" width="16" border="0" height="16"> 
	icon and the value displayed in the Source Value column into the Merged 
	Value Column.&nbsp; Both of these options are also available from the 
	<a href="http://127.0.0.1:4441/help/topic/org.eclipse.osee.framework.ui.skynet/reference/#Wizard">Merge 
	Wizard</a> (Left click on the icon in the Merge Value column) with the "Load 
	Source Data" and "Load Destination Value" buttons.&nbsp; In order to modify 
	the value to some combination the user must bring up the Merge Wizard which 
	has an embedded editor specific to the attribute that needs to be modified.&nbsp; 
	Once the value is accurately entered in the editor the user may than select 
	"Finish"&nbsp; This will place a
	<img src="ATS_files/yellow_m.gif" width="16" border="0" height="16"> 
	icon in the Merged Value column along with the new value. The user then right clicks on the
	<img src="ATS_files/chkbox_disabled.gif" width="16" border="0" height="16"> 
		in the Conflict Status Column so that the
	<img src="ATS_files/accept.gif" width="16" border="0" height="16"> 
		icon is displayed.&nbsp; The conflict is resolved and will allow the 
		Source Branch to be committed.</p>
	<p align="center">
	<a name="Wizard">
	<img src="ATS_files/Merge_4.gif" border="0"></a> </p>
	<p align="center">
	<font size="4">The Merge Wizard</font></p>
	</li>
</ul>
<h2>Resolution Of Conflicts (<a name="Word_Formatted_Content">Word Formatted Content</a>)</h2>
<p>Resolution of conflicts is provided in two different ways.&nbsp; They can 
either copy and paste the changes into their Merge Artifact document or they can 
generate a Three Way Merge and accept the changes that show up in the generated 
document.&nbsp; Both approaches have their advantages and disadvantages and are 
best suited for different situations.&nbsp; They can also be combined where the 
situation warrants it, however the three way merge must always be done first if 
this is the case.</p>
<ul>
	<li>
	<h3><b>Manual Merging</b></h3>
	<ul>
		<li><b>Usage</b><ul>
			<li>When one version of the artifact has many changes and the other 
			version has very few changes</li>
			<li>When both files have formatting changes</li>
			<li>When three way merging generates a complex document</li>
			<li>When both versions edit the same text in multiple places</li>
		</ul>
		<p>Manual Merging is the process of combining the Source Branch changes 
		and the destination branch changes manually by copying and pasting them 
		into the Merge Artifact document.&nbsp; The Merge Artifact is a separate 
		version of the artifact that will preserve the details of the Merge, and 
		will be reviewable in the Merge Manager after an artifact is committed.&nbsp; 
		IMPORTANT: If the user makes the changes to their Source Branch instead 
		of on the Merge Artifact the Merge Manager will incorrectly represent 
		the merge in future reviews.</p>
		The following procedure illustrates the functionality available 
		to facilitate a manual merge.
		<p>The user will first either launch the <a href="http://127.0.0.1:4441/help/topic/org.eclipse.osee.framework.ui.skynet/reference/#WFC%20Wizard">Merge Wizard</a> by left clicking 
		on the icon in the Merge Value column of the GUI or they may select the 
		functionality from the <a href="http://127.0.0.1:4441/help/topic/org.eclipse.osee.framework.ui.skynet/reference/#The_Right_Click_Menu">right click menu</a> for the conflict in question.&nbsp; 
		The first thing to do is to bring up a word document comparison of both 
		the Source Branch Version and the Destination Branch Version.&nbsp; 
		These documents will show all of the changes that have been made to 
		these two artifacts since the Source Branch was created.&nbsp; To launch 
		these difference's the user either select "Show Source Diff" and "Show 
		Destination Diff" from the wizard or "Differences"-&gt;"Show Source Branch 
		Differences" and "Differences"-&gt;"Show Destination Branch Differences" 
		from the right click menu.&nbsp; These will bring up the two 
		difference's in different Word instances with window labels to allow the 
		user to differentiate the files.&nbsp; The intention of bringing up 
		these difference's is twofold.&nbsp; Firstly, it allows the user to 
		identify the file that has the most changes.&nbsp; Secondly, it will 
		come in use later when the user copy's and paste's changes into the 
		Merge document.</p>
		<p>Upon identifying the branch that has the most changes the user should 
		then set the Merge Artifact to contain that branches value.&nbsp; This 
		is done by either selecting "Populate with Source Data" or "Populate 
		with Destination Data" from the Merge Wizard or left clicking on the 
	<img src="ATS_files/green_s.gif" width="16" border="0" height="16"> 
		icon or the
	<img src="ATS_files/blue_d.gif" width="16" border="0" height="16"> 
		icon in the Source and Destination Value columns in the Merge Manager 
		GUI.&nbsp; The user can then bring up the Merge Artifact for editing by 
		clicking on "Edit Merge Artifact" in the Merge Wizard or in the right 
		click menu.&nbsp; The Document that comes up contains the Merge Artifact 
		and any changes made to it will be reflected when the Source Branch is 
		committed.&nbsp; The user can than begin to copy the changes from the 
		diff report that showed the fewest changes (opposite of the one chosen 
		as the baseline).&nbsp; After all changes have been migrated into the 
		Merge Artifact document the user than saves the document, which will 
		preserve the Merge Artifact value.&nbsp; The user should be aware that 
		any changes they do not wish to preserve from either the Source or 
		Destination version of the Artifact need to be omitted on the Merge 
		Artifact. </p>
		<p>The user then right clicks on the
	<img src="ATS_files/chkbox_disabled.gif" width="16" border="0" height="16"> 
		in the Conflict Status Column so that the
	<img src="ATS_files/accept.gif" width="16" border="0" height="16"> 
		icon is displayed.&nbsp; The conflict is resolved and will allow the 
		Source Branch to be committed.</p>
		<p>&nbsp;</p></li>
	</ul>
	</li>
	<li>
	<h3 align="left"><b><a name="Three_Way_Merge">Three Way Merge</a></b></h3>
	<ul>
		<li>
		<p align="left"><b>Usage</b></p><ul>
			<li>
			<p align="left">When both versions have many changes or both versions have few 
			changes.
			</p></li><li>
			<p align="left">When only one file has formatting changes (Must be combined with 
			Manual Merging in this case)
			</p></li><li>
			<p align="left">When three way merging generates an understandable document
		</p></li></ul>
		<p align="left">Three Way Merging leverages Microsoft Words ability to merge 
		documents.&nbsp; At the beginning of any Word Formatted Content merge it 
		is recommended that user generate a Three Way Merge and check the 
		complexity of the document.&nbsp; In most cases Three Way Merging is a 
		quicker way to merge two documents, however in some cases the Three Way 
		Merge will generate a document that is difficult to use and understand.&nbsp; 
		This usually arises when the Source and Destination branches have edited 
		the same text or if one of the branches has touched a large percentage 
		of the file.&nbsp; As it runs fairly quickly it is always a good idea to 
		run it at the beginning of a Merge to check if it is useful.&nbsp; Three 
		Way Merging only allows the user to maintain format changes from one of 
		the documents.&nbsp; If format changes are made on both documents the 
		Three Way Merge will prompt the user as to which format changes they 
		would like to maintain, the user will then need to copy the format 
		changes from the other document into the Merge Artifact document 
		manually.</p>
		<p align="left">A Three Way Merge is generated by selecting Generate Three Way Merge 
		from either the <a href="http://127.0.0.1:4441/help/topic/org.eclipse.osee.framework.ui.skynet/reference/#WFC%20Wizard">Merge Wizard</a> or the <a href="http://127.0.0.1:4441/help/topic/org.eclipse.osee.framework.ui.skynet/reference/#The_Right_Click_Menu">right click menu</a>.&nbsp; IMPORTANT: 
		Generating a Three Way Merge will discard any changes made to the Merge 
		Artifact, therefore a prompt will make sure this is the intended 
		operation.&nbsp; If a user had started a Three Way Merge previously but 
		had not completed the Merge the user is also given the option of 
		continuing the previous Merge in the prompt (Selecting Edit Merge 
		Artifact will also have this effect). The following is an example of a 
		Three Way Merge in Word.</p><p align="center"><img src="ATS_files/Merge_3.gif" border="0">
		</p>
		<p align="center"><font size="4">A Three Way Merge</font></p><p>
		The changes made by the Source Branch and Destination Branch are shown 
		in different colors in the Word Document.&nbsp; In this particular case 
		the changes made in Red were done by the Source Branch and the changes 
		made in Blue were done on the Destination Branch.&nbsp; The color scheme 
		is not consistent and the user needs to verify which color equates to 
		which changes by hovering there mouse over one of the changes.&nbsp; A 
		popup will be shown which will identify the author.&nbsp; The following
		<a href="http://127.0.0.1:4441/help/topic/org.eclipse.osee.framework.ui.skynet/reference/http://office.microsoft.com/en-us/word/HA010983881033.aspx">
		Guide</a> will explain how to resolve the changes in the document. 
		IMPORTANT: All changes must be either accepted or rejected before the 
		conflict can be marked as resolved.&nbsp; After the user has resolved 
		all the changes it is a good idea to do generate a difference document 
		between the Source Artifact and the Merge Artifact, and the Destination 
		Artifact and the Merge Artifact by selecting "Show Source/Merge Diff" 
		and "Show Destination/Merge Diff" from the merge Wizard or 
		"Differences"-&gt;"Show Source/Merge Differences" and "Differences"-&gt;"Show 
		Destination/Merge Differences" from the 
		<a href="http://127.0.0.1:4441/help/topic/org.eclipse.osee.framework.ui.skynet/reference/#The_Right_Click_Menu">right click menu</a>.&nbsp; These 
		views will show the differences between the branch artifact and the 
		merge artifact.&nbsp; For the Source/Merge difference this will show 
		everything that is different between the source document and the Merge 
		document.&nbsp; In the case where the user accepts all changes from the 
		source and destination branches this diff will highlight all of the 
		changes that occurred on the destination branch. In the 
		Destination/Merge diff it will highlight all of the changes that 
		happened on the source branch.&nbsp; It is always possible to use Manual 
		Merging techniques in conjunction with Three Way Merging.</p>
		<p>The user then right clicks on the
	<img src="ATS_files/chkbox_disabled.gif" width="16" border="0" height="16"> 
		in the Conflict Status Column so that the
	<img src="ATS_files/accept.gif" width="16" border="0" height="16"> 
		icon is displayed.&nbsp; The conflict is resolved and will allow the 
		Source Branch to be committed.</p>
		<p align="center"><a name="WFC Wizard">
		<img src="ATS_files/Merge_5.gif" border="0"></a></p>
		<p align="center"><font size="4">Word Formatted Content Merge Wizard</font></p>
		</li>
	</ul>
</li>
</ul>
<h2>Additional Features</h2>
<p>The Merge Wizard contains a "Clear the Merge Artifact" that is not available 
from the right click menu and only available for Word Formatted Content.&nbsp; This will empty out the Merge artifact and 
allow the user to start with an empty document for editing.&nbsp; It will also 
place a
	<img src="ATS_files/conflict.gif" width="16" border="0" height="16">icon 
in the merge value column for that conflict.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>


<!--
 Copyright (c) 2004, 2007 Boeing.
 All rights reserved. This program and the accompanying materials
 are made available under the terms of the Eclipse Public License v1.0
 which accompanies this distribution, and is available at
 http://www.eclipse.org/legal/epl-v10.html
 Contributors:
     Boeing - initial API and implementation
-->
	
		
        <link rel="stylesheet" type="text/css" href="ATS_files/style_002.css">
	
		<h1><a id="section10.1">10.1. </a>Table Customization</h1>
		<h2>Purpose</h2>
		<p>Customize the table to show desired columns, widths with specified sorting and filters.  Enables loading of 
		both personal and global customizations and provides the ability to select a customization as the
		default customization to be loaded upon startup.</p>
		<h2>Select Customization</h2>
		<p>Lists current personal and global customizations to be selected from.  Double-click to automatically
		load selected customizationa and close dialog.</p>
		<ul>
	   <li>"-- Table Default --"  - Show the default customization for this table.</li>
	   <li>"-- Current --"  - Show the current customization as set from table alterations.</li>
	   <li>"Other"  - Shows a stored customization available for loading.</li>
		</ul>
		<h2>Select Customization - Icons / Overlays</h2>
	  	   <ul>
		      <li><img src="ATS_files/customize_002.gif"> Customization.</li>
		      <li><img src="ATS_files/customizeD.gif"> Default customization loaded up restart.</li>
		      <li><img src="ATS_files/customizeG.gif"> Global customization available to all users.</li>
		  </ul>
		<h2>Select Customization - Buttons</h2>
		<ul>
	   <li>Load - Loads the currently selected customization.</li>
	   <li>Load+Close - Loads the selected customization and closes the dialog.</li>
	   <li>Set as Default - Sets the currently selected customization as the default to load upon restart.</li>
	   <li>Delete - Deletes the currently selected customization.</li>
		</ul>
		<h2>Configure Customization</h2>
		<p>Allows for the selected customization to be configured, loaded and saved.</p>
		<ul>
	   <li>Hidden Columns - Shows the columns that are available to be displays but configured as hidden.</li>
	   <li>Visible Columns  - Show the columns that are configured to be displayed for this customization.</li>
	   <li>(x) - shows the currently configured width of the column</li>
	   <li>Sorter - xml representation of the column order to sort by</li>
	   <li>Text Filter - shows the configured text filter to be applied for this customization. Enter as string.</li>
	   <li></li>
	   </ul>
		<h2>Configure Customization - Buttons</h2>
		<ul>
	   <li>Load - Loads the configured customization.</li>
	   <li>Load+Close - Loads the configured customization and closes the dialog.</li>
	   <li>Rename - Allows the user to define an alternate name for the column.</li>
	   <li>Save - Saves the configured customization as personal or global (if permissions allow).</li>
		</ul>

<!--
 Copyright (c) 2004, 2007 Boeing.
 All rights reserved. This program and the accompanying materials
 are made available under the terms of the Eclipse Public License v1.0
 which accompanies this distribution, and is available at
 http://www.eclipse.org/legal/epl-v10.html
 Contributors:
     Boeing - initial API and implementation
-->


<link rel="stylesheet" type="text/css" href="ATS_files/style_002.css">

<h1><a id="section12.1">12.1. </a>OSEE Branching and Differences Diagrams</h1>
<a href="http://127.0.0.1:4441/help/topic/org.eclipse.osee.framework.ui.skynet/reference/OSEE%20Branch%20Diagram.pdf">OSEE Branching Diagram</a>
<br>
<a href="http://127.0.0.1:4441/help/topic/org.eclipse.osee.framework.ui.skynet/reference/OSEE%20Branch%20Differences.pdf">OSEE Differeces Diagram</a>
<br>
</div>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

