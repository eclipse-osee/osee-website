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
	$pageTitle 		= "Requirements Management with OSEE Concepts";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Define, Requirements, Management";
	$pageAuthor		= "Ryan D. Brooks";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML


<div id="midcolumn" style="width:95%">
	<h1>$pageTitle</h1>
	<br/>
	<h3>Requirements traceability for a system</h3>
	<p>Every requirement for a system is defined at a distinct level of detail, and these levels are ordered from the highest level down to the lowest level.  A trace relation connects two requirements from adjacent levels.  Every requirement that is not a top level (highest level) requirement, must trace to one or more requirement at the next higher level.  All requirements, except those at the lowest level, must trace to one or more requirement at the next lower level.</p>

	<h3>Functional decomposition of a system</h3>
	<p>The functional decomposition of a system produces a proper tree (i.e. every node in the tree has exactly one parent except the root which has no parent).  The tree’s root represents the system in its entirety.  The root is decomposed into some number of components that can be further decomposed to any desired level.  Neither the root nor any of its components are themselves requirements.</p>

	<h3>Allocation of Requirements</h3>
	<p>Requirements are allocated using allocation relation links to components (of the functional decomposition).  A requirement at a given level is allocated to a component at the corresponding next lower level in the functional decomposition.</p>

	<h3>Relations</h3>
	<p>Each relation link connects two distinct artifacts and is of a known relation type.  Each artifact type specifies the allowable relation link types that may be attached to an instance (artifact) of its type and in what multiplicity.  What about sides?</p>

	<h3>Verification and Validation relations</h3>
	<p>Verification and Validation relations should be defined for requirements at every level of the requirements decomposition.</p>
</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>