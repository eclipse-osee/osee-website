<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
	$App = new App();
	$Nav = new Nav();
	$Menu = new Menu();
	include($App->getProjectCommon());

	#*****************************************************************************
	# downloads.php
	#
	# Description: Primary Download Page
	#****************************************************************************

	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "OSEE Downloads";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Define, ATS, OTE, Application Framework";
	$pageAuthor		= "Roberto E. Escobar";

	# Must update these values after every release
	$releaseDate = "19 May 2010";
	$releaseMajorVersion = "0.9";
	$releaseVersion = "0.9.4";
	$externalDownloadsSite = "http://osee.microdoc.com/node/2";
	$arrowImage = "downloads/images/arrow.gif";
	$installRequirements = "documentation/installation/requirements.php";
	$installInstructions = "documentation/installation/eclipse_install.php";
	$releaseNotes="downloads/0_8_3/ReleaseNotes.html";
	$releaseNewAndNoteworthy="downloads/0_8_3/NewAndNoteworthy.html";
	$configandargs="documentation/configuration/configandargs.php";

	$html = <<<EOHTML
	<div id="midcolumn">
		<h2>License Information</h1>
		<p>
			OSEE plug-ins are provided under the terms and conditions of the Eclipse Public License Version 1.0 ("EPL").
			A copy of the EPL is available at <a href="http://www.eclipse.org/legal/epl-v10.html">http://www.eclipse.org/legal/epl-v10.html</a>.
			Add-ons are libraries with their own licenses, which are distributed from an external location
			at <a href="$externalDownloadsSite">$externalDownloadsSite</a>.
		</p>
		<h2>System Requirements (non-Eclipse)</h2>
		<ul>
			<li>System with at least 2GB of RAM</li>
			<li>Java Runtime Environment (JRE) 1.6 or higher</li>
			<li>A PostgreSQL, Oracle, or Derby database. <br/>
			<em>See instructions for installing <a href="supported_databases.php">'Supported Databases'</a> to complete this step.</em></li>
		</ul>
		<div class="homeitem3col">
			<h2>OSEE Downloads</h3>
			<ul>
                <li>
                	<b>Client Update Site - Milestone Build $releaseVersion</b> | <b>Date</b>: $releaseDate<br/>
                	<img src="$arrowImage"></img>&nbsp;&nbsp;<b><a href="http://www.eclipse.org/downloads/download.php?file=/technology/osee/builds/org.eclipse.osee.client_${releaseVersion}_incubation.zip">OSEE Client Incubation Archived Update Site</a></b><br/>
                	<ul>
							First ensure you have satisfied the needed <a href="$installRequirements">system requirements and Eclipse dependencies</a>.  Next, from the Eclipse base with the previously referenced dependencies, launch the update manager and install the OSEE archived update site (no need to unzip it).
				      </ul>
                 When launching the client you must set the following java system properties:<br/>
                 <ul>
                 		<p>
                 			-Dosee.authentication.protocol=trustAll<br/>
                 		   -Dosee.arbitration.server=http://<serveraddress>:<serverport><br/>
                 		   <i>The server port must match the server's <b>org.osgi.service.http.port</b> system property. In the server launch files provided, the port number is set to <b>8089</b></i> 
                 		</p>
                 </ul>
                 <i>Refer to</i> <a href="$configandargs">OSEE Configuration Properties</a> <i>for further information on setting these properties.</i> <br/>
                </li>
                 <li>
                	<b>Server Archive - Milestone Build $releaseVersion</b> | <b>Date</b>: $releaseDate<br/>
                	<img src="$arrowImage"></img>&nbsp;&nbsp;<b><a href="http://www.eclipse.org/downloads/download.php?file=/technology/osee/builds/org.eclipse.osee.server_${releaseVersion}_incubation.zip">OSEE Server Incubation Archived - Derby </a></b><br/>
                	<img src="$arrowImage"></img>&nbsp;&nbsp;<b><a href="http://osee-external.googlecode.com/files/org.eclipse.osee.server_postgresql_${releaseVersion}_incubation.zip">OSEE Server Incubation Archived - Postgresql</a></b><br/>
                	<ul>
							Unzip the archive to a convenient location on the server machine (might be the same as the client).<br/>
							Launch using the startup files provided<br/>
							<i>Refer to</i> <a href="$configandargs">OSEE Configuration Properties</a> <i>for further information on setting these properties.</i> 
				      </ul>
                 <br/>
                </li>
                <li>
                  <b>Full Eclipse with OSEE Client $releaseVersion</b> | <b>Date</b>: $releaseDate<br/>
                	<img src="$arrowImage"></img>&nbsp;&nbsp;<b><a href="http://www.eclipse.org/downloads/download.php?file=/technology/osee/builds/osee.client.full.${releaseVersion}_incubation.zip">${releaseVersion} Client with Derby</a></b><br/>
                </li>
                <li>
                  <b>Postgresql Add-on Feature $releaseVersion</b> | <b>Date</b>: $releaseDate<br/>
                	<img src="$arrowImage"></img>&nbsp;&nbsp;<b><a href="http://osee-external.googlecode.com/files/postgresql_0.9.1_incubation.zip">${releaseVersion} Postgresql Feature</a></b><br/>
                </li>

				 <li>
                  <b>Full Eclipse with OSEE Client and PostgreSql 0.7.0</b><br/>
                	<img src="$arrowImage"></img>&nbsp;&nbsp;<a href="$externalDownloadsSite">Visit external site to obtain full client for PostgreSQL</a>
                	The distribution is comprised of Eclipse 3.4, OSEE 0.7, add-ons, and dependencies.  Such scheme of distribution is caused by licensing requirements.<br/>
                </li>
            </ul>
		</div>
		<p>
		   All downloads are provided under the terms and conditions of the <a href="http://www.eclipse.org/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a> unless otherwise specified. Please note that the use of the software you are about to access may be subject to third party terms and conditions and you are responsible for abiding by such terms and conditions.
		</p>
	</div>

	<div id="rightcolumn">
	        $sidebar
	</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
