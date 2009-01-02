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
<h2>Define Custom Data Model</h2>
<p>
The data model in OSEE is extensible and user configurable. Users can define new artifact, attribute, and relation types and their
constraints such as multiplicity and applicability. Type inheritance allows similar types to be defined and modified without tedious redundancy
because similar types inherit what is common from their super type.</p>
<p>
The OSEE data model is defined using a tabular format involving 5 tables.  See the following xml spreadsheet
<a href="https://dev.eclipse.org/svnroot/technology/org.eclipse.osee/trunk/org.eclipse.osee.framework.skynet.core/support/ProgramAndCommon.xml">
ProgramAndCommon.xml</a> for an example.

The full data model can be defined using a single spreadsheet or be divided among multiple spreadsheets that can reference types defined in any spreadsheet.</p>
	<table style="border:1;width:95%;font-size:1.0em;">
		<tr style="background:#CCCCCC"><th colspan="2">Artifact Type Table</th></tr>
		<tr align="left">
			<th  width="160">Column Name</th>
			<th>Description</th>
		</tr>
		<tr>
			<td>Factory Class</td>
			<td>The factory that is responsible for constructing instances of this artifact type at runtime.  Fully qualified java class name of a class that extends <code>org.eclipse.osee.framework.skynet.core.artifact.ArtifactFactory</code>.
The standard and simplest case is to specify <code>org.eclipse.osee.framework.skynet.core.artifact.factory.BasicArtifactFactory</code> which will cause 
the java type <code>org.eclipse.osee.framework.skynet.core.artifact.Artifact</code> to be instantiated at runtime.  If a custom java type that extends 
<code>Artifact</code> is needed, then the corresponding custom artifact factory should be specified here.</td>
		</tr>
		<tr>
			<td>Artifact Type Name</td>
			<td>any valid UTF-8 characters with a max length of 75 bytes</td>
		</tr>
		<tr>
			<td>Super Type Name</td>
			<td>The super artifact type from which this type will inherit associated attributes and relations.  Another concrete artifact type or an abstract one that exists only in data model definition.</td>
		</tr>
		<tr style="background:#CCCCCC"><th colspan="2">Attribute Type Table</th></tr>
		<tr align="left">
			<th>Column Name</th>
			<th>Description</th>
		</tr>
		<tr>
			<td>Attribute Base Type</td>
			<td>
			Fully qualified java class name of a class that extends <code>org.eclipse.osee.framework.skynet.core.attribute</code>.
			<br/>The typical and simplest case is to specify one of the built-in types:
			<ul>
				<li><code>org.eclipse.osee.framework.skynet.core.BooleanAttribute</code></li>
				<li><code>org.eclipse.osee.framework.skynet.core.CompressedContentAttribute</code></li>
				<li><code>org.eclipse.osee.framework.skynet.core.JavaObjectAttribute</code></li>
				<li><code>org.eclipse.osee.framework.skynet.core.DateAttribute</code></li>
				<li><code>org.eclipse.osee.framework.skynet.core.FloatingPointAttribute</code></li>
				<li><code>org.eclipse.osee.framework.skynet.core.IntegerAttribute</code></li>
				<li><code>org.eclipse.osee.framework.skynet.core.StringAttribute</code></li>
				<li><code>org.eclipse.osee.framework.skynet.core.EnumeratedAttribute</code></li>
				<li><code>org.eclipse.osee.framework.skynet.core.WordTemplateAttribute</code></li>
				<li><code>org.eclipse.osee.framework.skynet.core.WordWholeDocumentAttribute</code></li>
				</ul>
			 If a custom java type that extends <code>Attribute</code> is needed, then that type should be specified here.
			</td>
		</tr>
		<tr>
			<td>Attribute Data Provider</td>
			<td>The attribute data provider is responsible for storing and retrieving attribute data.  Fully qualified java class name of a class that implements <code>org.eclipse.osee.framework.skynet.core.attribute.providers.IAttributeDataProvider</code>.  <code>org.eclipse.osee.framework.skynet.core.DefaultAttributeDataProvider</code> may be used when the data to be stored does not exceeded 4000 bytes, otherwise <code>org.eclipse.osee.framework.skynet.core.UriAttributeDataProvider</code> may be used.
			</td>
		</tr>
		<tr>
			<td>Attribute Type Name</td>
			<td>Any valid UTF-8 characters with a max length of 500 bytes</td>
		</tr>
		<tr>
			<td>File Extension</td>
			<td>Any valid UTF-8 characters with a max length of 50 bytes; only applies when using the <code>org.eclipse.osee.framework.skynet.core.UriAttributeDataProvider</code></td>
		</tr>
		<tr>
			<td>Tagger ID</td>
			<td>If the attrbiute&#146;s content is to be included in the search index for the quick search, use <code>DefaultAttributeTaggerProvider</code>, otherwise leave blank.
			</td>
		</tr>
		<tr>
			<td>Default Value</td>
			<td>The initial value given an attribute upon initialization, this may be left blank</td>
		</tr>
		<tr>
			<td>Validity Xml</td>
			<td>For the attribute base type <code>org.eclipse.osee.framework.skynet.core.EnumeratedAttribute</code>, specifies the valid enumerations. For example, &lt;Page_Type&gt;&lt;Enum&gt;Portrait&lt;/Enum&gt;&lt;Enum&gt;Landscape&lt;/Enum&gt;&lt;/Page_Type&gt;</td>
		</tr>
		<tr>
			<td>Min Occurrence</td>
			<td>The framework with prevent having lest than this number of this attribute type on a single artifact</td>
		</tr>
		<tr>
			<td>Max Occurrence</td>
			<td>The framework with prevent adding more than this number of this attribute type to a single artifact</td>
		</tr>
		<tr>
			<td>Tip Text</td>
			<td>Text to describe an attribute.  Any valid UTF-8 characters with a max length of 4000 bytes</td>
		</tr>
		<tr style="background:#CCCCCC"><th colspan="2">Artifact Type / Attribute Type Mapping Table</th></tr>
		<tr align="left">
			<th>Column Name</th>
			<th>Description</th>
		</tr>
		<tr>
			<td>Artifact Type Name</td>
			<td>Exact name of an artifact type defined above (or previously)</td>
		</tr>
		<tr>
			<td>Attribute Type Name</td>
			<td>Exact name of an attribute type defined above (or previously) to be associated with the corresponding artifact type</td> 
		</tr>
		<tr style="background:#CCCCCC"><th colspan="2">Relation Type Table</th></tr>
		<tr align="left">
			<th>Column Name</th>
			<th>Description</th>
		</tr>
		<tr>
			<td>Relation Type Name</td>
			<td>Any valid UTF-8 characters with a max length of 50 bytes</td>
		</tr>
		<tr>
			<td>Side A Name</td>
			<td>Descriptive name for the A side of the relation.  Any valid UTF-8 characters with a max length of 50 bytes</td>
		</tr>
		<tr>
			<td>A to B Phrase</td>
			<td>An optional phrase that describe the relation between the artifacts from the side A perspective.  Any valid UTF-8 characters with a max length of 50 bytes</td>
		</tr>
		<tr>
			<td>Side B Name</td>
			<td>Descriptive name for the B side of the relation.  Any valid UTF-8 characters with a max length of 50 bytes</td>
		</tr>
		<tr>
			<td>B to A Phrase</td>
			<td>An optional phrase that describe the relation between the artifacts from the side B perspective.  Any valid UTF-8 characters with a max length of 50 bytes</td>
		</tr>
		<tr>
			<td>Short Name</td>
			<td>Five or less characters is typical.  This abbreviated name is used in the user interface when space is at a premium</td>
		</tr>
		<tr>
			<td>Ordered</td>
			<td><code>Yes</code> to have artifacts on the same side of this relation type use a user defined ordered, otherwise <code>No</code></td>
		</tr>	
		<tr style="background:#CCCCCC"><th colspan="2">Artifact Type / Relation Type Mapping Table</th></tr>
		<tr align="left">
			<th>Column Name</th>
			<th>Description</th>
		</tr>
		<tr>
			<td>Artifact Type</td>
			<td>Exact name of an artifact type defined above (or previously)</td>
		</tr>
		<tr>
			<td>Relation Type</td>
			<td>Exact name of an relation type defined above (or previously)</td>
		</tr>
		<tr>
			<td>Side A Max</td>
			<td>An artifact of type &quot;Artifact Type&quot; can be on side &quot;A&quot;, &quot;Side A Max&quot; number of times for relation links of type &quot;Relation Type&quot;</td>
		</tr>
		<tr>
			<td>Side B Max</td>
			<td>An artifact of type &quot;Artifact Type&quot; can be on side &quot;B&quot;, &quot;Side B Max&quot; number of times for relation links of type &quot;Relation Type&quot;</td>
		</tr>
	</table>
<h2>Import OSEE Data Model</h2>
To import changes to the data model for an existing OSEE database: 
<ol>
	<li>Navigate to the Project Explorer (Resource Perspective) or the Package Explorer (Java Perspective)</li>
	<li>Select a file or folder containing the OSEE data model</li>
	<li>Right click and select <code>Import...</code></li>
	<li>Under the <code>OSEE</code> category, select <code>OSEE Types</code></li>
</ol>
To automatically import the data model during database initialization use the extension point <code>org.eclipse.osee.framework.skynet.core.OseeTypes</code>
	</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>