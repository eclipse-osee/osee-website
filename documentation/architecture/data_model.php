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
	$pageTitle 		= "OSEE - Data Model";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Define, ATS, OTE, Application Framework, Install";
	$pageAuthor		= "Roberto E. Escobar";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<div id="midcolumn" style="width:95%">

		<h3>$pageTitle</h3>
		
		<p>IN WORK</p>
				
		<p>The OSEE framework is built around a user configurable and extensible data model comprised of
		attributes, artifacts, and relations.  An attribute is a key value pair representing a single data element such as a description, a date, a number, or a file.  
		These basic data elements are grouped into artifacts. Artifacts can be configured to have any number of attributes. By default, an artifact will always 
		have an attribute of type name. In addition, artifacts can be related to one another via relations. By default, an artifact will always have a default hierarchy 
		relation type. This allows artifacts to be connected together in a tree like fashion. In the example below, two instances of the basic artifact type are shown. 
		Artifact 1 has an attribute of type name set to string data "X". Artifact 2 has an attribute of type name set to string data "Y". These two artifact instances 
		are related via the default hierarchy relation type. Artifact 1 is Artifact 2's parent artifact.    
		</p>
		
		<br/> 		
		<center><img border="1" style="width:891;height:494;" src="images/basic_artifact.png" alt="Basic Artifact Example"/></center>
		<center><b>Figure 1. Basic Artifact Example.</b></center>
		 
		<p>By default, OSEE has the following basic attributes:</p>
		<ul>
			<li>String Attribute</li>
			<li>Boolean Attribute</li>			
			<li>Integer Attribute</li>
			<li>Floating Point Attribute</li>
			<li>Date Attribute<li>
			<li>Enumerated Attribute</li>
		</ul>
		<br/>
	</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
