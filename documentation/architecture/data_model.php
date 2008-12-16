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
		<center><img border="1" style="width:414;height:165;" src="images/basic_artifact.png" alt="Basic Artifact Example"/></center>
		<center><b>Figure 1. Basic Artifact Example.</b></center>
	 
		<p>Now that we have a basic understanding of the model, lets take a closer look at attributes and how they are defined. An attribute is defined through its attribute type.
		The attribute type is a blue print for constructing attribute instances. It defines the type of data the will be held by the attribute, the data source or who provides it, how many 
		instances can be created, default value to use during creation, whether the attribute can be tagged for word searches, and if the attribute holds file data, its file extension. 
		
		By default, data contained in the attribute can be represented through OSEE's basic data types: 
		<ul>
			<li>String Attribute</li>
			<li>Boolean Attribute</li>			
			<li>Integer Attribute</li>
			<li>Floating Point Attribute</li>
			<li>Date Attribute<li>
			<li>Enumerated Attribute</li>
		</ul>
		</p>
		
		<p>OSEE provides 3 attribute data providers: the default attribute data provider, URI attribute data provider, and the Clob attribute data provider. The default attribute data provider
		is used for data containing less than 4000 characters in length. Data is stored and retrieved from the OSEE relational database. Most attribute types will use this data provider to handle
		its data content. The URI attribute data provider is used for large data. The provider communicates to the OSEE application server to store and retrieve data. The Clob attribute data provider 
		is a hybrid provider using both the OSEE relational database and the application server to retrieve and store data. When the data contained by the attribute has less than 4000 characters, 
		the provider uses the relational database. If the data exceeds the 4000 character limit, then the application server is used. 
		</p>
		
		<br/>
		<center><img border="1" style="width:414;height:165;" src="images/attributeType.png" alt="Attribute Type Example"/></center>
		<center><b>Figure 1. Attribute Type Example.</b></center>
		<br/>
	</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
