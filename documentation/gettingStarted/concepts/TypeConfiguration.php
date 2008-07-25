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
	# requirements.php
	#
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "OSEE - Documentation";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Define, ATS, OTE, Application Framework, type, configuration";
	$pageAuthor		= "Ryan D. Brooks";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<div id="midcolumn" style="width:95%">
		<h3>Configurable and Extensible</h3>
			The data type configuration in OSEE is extensible and user configurable. Users can define new artifact, attribute, and relation types and their constraints such as multiplicity and applicability. Type inheritance allows similar types to be defined and modified without tedious redundancy because similar types inherit what is common from their super type.
		<h3>Default Type Configuration</h3>
			This type information is defined using xml spreadsheets that are contributed using the extension point org.eclipse.osee.framework.skynet.core.OseeTypes.  The default type configuration which servers as a good example can be found at https://dev.eclipse.org/svnroot/technology/trunk/org.eclipse.osee.framework.skynet.core/support/		
		<h3>Artifact Type Definition</h3>
			Factory class: The java class that constructs artifacts of a specific type
			Artifact Type Name: The name of the artifact type.
			Super Type Name: The super artifact where an artifact will inherit attributes and relations from.
		<h3>Attribute Type Definition</h3>
			Attribute Base Type: The java file that will be instantiated for this attribute type.
			Attribute Data Provider: The java class that is responsible for getting the attribute data i.e. some attributes are stored in a database and others might be located in a file structure.
			Attribute Name: The name of the attribute type.
			File extension: This is an optional field based on the selected data provider.
			Tagger ID: Describe that tagger used to support index based searching.
			Default Value: Optional - The default value that will be set on new attributes.
			Validity XML: Optional – An XML list of valid or invalid values that can be set on a specific attribute.
			Min occurrences: The minimum number of attribute occurrences an artifact can have.
			Max occurrences: The maximum number of attribute occurrences an artifact can have.
			Tip Text: Optional – Text to describe an attribute.
			User Visible: Optional – A Boolean value that allows an attribute to be displayed in the Artifact Editor.
		<h3>Relation Type definition</h3>
			Relation Type Name: The name of the relation type.
			Side A Name: The name of the artifact on the A side of the relation.
			A to B Phrase: Optional – A phrase that describe the relation between the artifacts.
			Side B Name: The name of the artifact on the B side of the relation.
			B to A Phrase: Optional – A phrase that describe the relation between the artifacts.
			Short Name: A shorter name for the relation that can be displayed in areas where a long name would be truncated.

		<h3>Artifact to Attribute (Maps attributes to artifacts)</h3>
			Artifact Type name: The name of an artifact type.
			Attribute Name: The name of an attribute type.

		<h3>Artifact to Relation (Maps artifacts to relations)</h3>
			Artifact Type: The name of an artifact type.
			Relation Type: The name of a relation type.
			Side A Max: The maximum number of time an artifact type can be on the side A of a relation.
			Side B Max: The maximum number of time an artifact type can be on the side B of a relation.
	<br/>
	<br/>
	</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>