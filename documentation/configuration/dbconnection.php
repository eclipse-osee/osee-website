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
	# configandargs.php
	#
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "OSEE Database Connection Information";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Define, ATS, OTE, Application Framework, Install";
	$pageAuthor		= "Roberto E. Escobar; Ryan D. Brooks";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML
	<div id="midcolumn">

	<h3>$pageTitle</h3>
	<p>To define a custom database connection for the application server, 
	a path to an xml with the following format is required when launching the application server. 
	This path will need to be specified using the <b><i>osee.connection.info.uri</i></b> and <b><i>osee.db.connection.id</i></b> jvm arguments on launch.
	See <a href="configandargs.php">configuration and arguments</a> for more information.
	</p>

	<div style="border-width:thin;border:solid;padding:0.2em;width:140%"">	
	<pre>
	&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;
	&lt;DbConnection&gt;
	
	&lt;DatabaseInfo id=&quot;<font color="green">postgresqlInfo</font>&quot;&gt;
		&lt;DatabaseHome key=&quot;#DBHOME#&quot; value=&quot;<b>DATABASE HOME LOCATION</b>&quot; /&gt;
		&lt;DatabaseName key=&quot;#DBNAME#&quot; value=&quot;<b>DATABASE NAME</b>&quot; /&gt;
		&lt;DatabaseType key=&quot;#TYPE#&quot; value="postgresql" /&gt;
		&lt;Prefix key=&quot;#PREFIX#&quot; value="jdbc:postgresql" /&gt;
		&lt;UserName key=&quot;#USERNAME#&quot; value=&quot;<b>DATABASE USERNAME</b>&quot; /&gt;
		&lt;Password key=&quot;#PASSWORD#&quot; value=&quot;<b>DATABASE PASSWORD</b>&quot; /&gt;
		&lt;Host key=&quot;#HOST#&quot; value="@AvailableDbServices.hostAddress" /&gt;
		&lt;Port key=&quot;#PORT#&quot; value="@AvailableDbServices.port" /&gt;
	&lt;/DatabaseInfo&gt;

	&lt;ConnectionDescription id=&quot;<font color="blue">postgresql</font>&quot; &gt;
		&lt;Driver>org.postgresql.Driver&lt;/Driver&gt;
		&lt;Url>#PREFIX#://#HOST#:#PORT#/#DBHOME##DBNAME#&lt;/Url&gt;		
	&lt;/ConnectionDescription&gt;

	&lt;AvailableDbServices>
		&lt;Server id=&quot;<b>ANY NAME</b>&quot; dbInfo=&quot;<font color="green">postgresqlInfo</font>&quot;
			hostAddress=&quot;<b>DATABASE IP ADDRESS</b>&quot; port=&quot;<b>DATABASE PORT</b>&quot;
			connectsWith=&quot;<font color="blue">postgresql</font>&quot; isProduction=&quot;false&quot; /&gt;
	&lt;/AvailableDbServices&gt;
	&lt;/DbConnection&gt;
	</pre>
	</div>
	
	<p>The sample file above is used to define PostgreSql connections but it can be changed easily to define oracle or derby connections.
	</p> 
	
	A description of the entries follows:
		<ul>
	 		<li><b>Database Info:</b> 
	 			<p>This entry describes the database to connect to by defining the database name, database home location and user name (or schema) and password to use during connection.
	 			When using the OSEE PostgreSql installation instructions, the fields should be set to the following:
	 				<ul>
	 					<li><b>DATABASE HOME LOCATION:</b> not used therefore remove the value field from this attribute.</li>
	 					<li><b>DATABASE NAME:</b> OSEE</li>
	 					<li><b>DATABASE USERNAME:</b> osee</li>
	 					<li><b>DATABASE PASSWORD:</b> osee</li>
		 			</ul>
		 		</p> 
	 		</li>
	 		<li><b>Connection Description:</b>
	 			<p>This entry describes how the database connection url should be assembled. 
	 			At connection time, the fields enclosed in ## are substituted with the information defined in the database info section. 
	 			There shouldn't be a need to change this unless you want to connect to a database other than PostgreSQL. 
	 			</p> 
	 		</li>
	 		<li><b>Available Database Services:</b>
	 			<p>This section contains entries for each database server and connection option needed at launch time. 
	 			An entry is referenced at launch time by calling out the entry id in the <b><i>osee.db.connection.id</i></b> argument. 
	 			When using a local OSEE PostgreSql install, the attributes on a server entry should be set to the following:
	 				<ul>
	 					<li><b>id:</b> any meaningful name to identify this entry</li>
	 					<li><b>hostAddress:</b>localhost</li>
	 					<li><b>port:</b>5432 (the default PostgreSql port)</li>
	 					<li><b>isProduction:</b>false unless you want to prevent clients from initializing the database</li>
		 			</ul>
	 			</p>
	 		</li>
	 	</ul>
	</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>