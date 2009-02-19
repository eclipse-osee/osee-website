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
	<p>
	&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;
	&lt;DbConnection&gt;
	
	&lt;DatabaseInfo id=&quot;postgresqlInfo&quot;&gt;
		&lt;DatabaseHome key=&quot;#DBHOME#&quot; /&gt;
		&lt;DatabaseName key=&quot;#DBNAME#&quot; value="OSEE" /&gt;
		&lt;DatabaseType key=&quot;#TYPE#&quot; value="postgresql" /&gt;
		&lt;Prefix key=&quot;#PREFIX#&quot; value="jdbc:postgresql" /&gt;
		&lt;UserName key=&quot;#USERNAME#&quot; value="osee" /&gt;
		&lt;Password key=&quot;#PASSWORD#&quot; value="osee" /&gt;
		&lt;Host key=&quot;#HOST#&quot; value="@AvailableDbServices.hostAddress" /&gt;
		&lt;Port key=&quot;#PORT#&quot; value="@AvailableDbServices.port" /&gt;
	&lt;/DatabaseInfo&gt;

	&lt;ConnectionDescription id=&quot;postgresql&quot; &gt;
		&lt;Driver>org.postgresql.Driver&lt;/Driver&gt;
		&lt;Url>#PREFIX#://#HOST#:#PORT#/#DBHOME##DBNAME#&lt;/Url&gt;		
	&lt;/ConnectionDescription&gt;

	&lt;AvailableDbServices>
		&lt;Server id=&quot;<b>ANY_NAME</b>&quot; dbInfo=&quot;postgresqlInfo&quot;
			hostAddress=&quot;<b>DATABASE_IP_ADDRESS</b>&quot; port=&quot;<b>DATABASE_PORT</b>&quot;
			connectsWith=&quot;postgresql&quot; isProduction=&quot;false&quot; /&gt;
	&lt;/AvailableDbServices&gt;
	&lt;/DbConnection&gt;
	</p>
	</div>
	</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>