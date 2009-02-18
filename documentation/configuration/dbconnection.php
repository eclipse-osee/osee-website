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
	To define a custom database connection to be used by the application server, a path to an xml with the following format is required when launching the application server.
	
	<div>	
	<pre>
	<?xml version="1.0" encoding="UTF-8"?>
	<DbConnection>
	
	<DatabaseInfo id="postgresqlInfo">
		<DatabaseHome key="#DBHOME#" />
		<DatabaseName key="#DBNAME#" value="OSEE" />
		<DatabaseType key="#TYPE#" value="postgresql" />
		<Prefix key="#PREFIX#" value="jdbc:postgresql" />
		<UserName key="#USERNAME#" value="osee" />
		<Password key="#PASSWORD#" value="osee" />
		<Host key="#HOST#" value="@AvailableDbServices.hostAddress" />
		<Port key="#PORT#" value="@AvailableDbServices.port" />
	</DatabaseInfo>

	<ConnectionDescription id="postgresql">
		<Driver>org.postgresql.Driver</Driver>
		<Url>#PREFIX#://#HOST#:#PORT#/#DBHOME##DBNAME#</Url>		
	</ConnectionDescription>

	<AvailableDbServices>
		<Server id="osee.microdoc" dbInfo="postgresqlInfo"
			hostAddress="78.46.71.230" port="5432"
			connectsWith="postgresql" applicationServer="http://osee.microdoc.com:8089/" />
	</AvailableDbServices>
	</DbConnection>
	</pre>
	</div>
	</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>