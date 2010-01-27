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
	$releaseDate = "25 Jan 2010";
	$releaseMajorVersion = "0.9";
	$releaseVersion = "0.9.1";
	$externalDownloadsSite = "http://osee.microdoc.com/node/2";
	$arrowImage = "downloads/images/arrow.gif";
	$installRequirements = "documentation/installation/requirements.php";
	$installInstructions = "documentation/installation/eclipse_install.php";
	$releaseNotes="downloads/0_8_3/ReleaseNotes.html";
	$releaseNewAndNoteworthy="downloads/0_8_3/NewAndNoteworthy.html";
	$configandargs="documentation/configuration/configandargs.php";


	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		
		<p>
			OSEE plug-ins are provided under the terms and conditions of the Eclipse Public License Version 1.0 ("EPL").
			A copy of the EPL is available at <a href="http://www.eclipse.org/legal/epl-v10.html">http://www.eclipse.org/legal/epl-v10.html</a>.
			Add-ons are libraries with their own licenses, which are distributed from an external location
			at <a href="$externalDownloadsSite">$externalDownloadsSite</a>.
		</p>
		<h2>Requirements</h2>
        <p>
           <a href="$installRequirements">System Requirements and Eclipse Dependencies</a>.
        </p>
		<div class="homeitem3col">
			<h3>Latest Version</h3>
			<ul>
                <li>
                	<b>Client Update Site - Milestone Build $releaseVersion</b> | <b>Date</b>: $releaseDate<br/>
                	<img src="$arrowImage"></img>&nbsp;&nbsp;<b><a href="http://www.eclipse.org/downloads/download.php?file=/technology/osee/builds/org.ecilpse.osee.client_${releaseVersion}_incubation.zip">OSEE Client Incubation Archived Update Site</a></b><br/>
                	<ul>
							First ensure you have satisfied the needed <a href="$installRequirements">system requirements and Eclipse dependencies</a>.  Next, from the Eclipse base with the previously referenced dependencies, launch the update manager and install the OSEE archived update site (no need to unzip it).
				      </ul>
                 When launching the client you must set the following java system properties:<br/>
                 <ul>
                 		-Dosee.authentication.protocol=trustAll<br/>
                 		-Dosee.arbitration.server=http://localhost:8089
                 </ul>
                 <i>Refer to</i> <a href="$configandargs">OSEE Configuration Properties</a> <i>for further information on setting these properties.</i> <br/>
                </li>
                 <li>
                	<b>Server Archive - Milestone Build $releaseVersion</b> | <b>Date</b>: $releaseDate<br/>
                	<img src="$arrowImage"></img>&nbsp;&nbsp;<b><a href="http://www.eclipse.org/downloads/download.php?file=/technology/osee/builds/org.ecilpse.osee.server_${releaseVersion}_incubation.zip">OSEE Server Incubation Archived </a></b><br/>
                	<ul>
							Unzip the archive to a convenient location on the server machine (might be the same as the client).
				      </ul>
                 When launching the server you must set the following java system properties:<br/>
                 <ul>
                 		-Dosee.authentication.protocol=trustAll<br/>
                 		-Dosee.arbitration.server=http://localhost:8089
                 </ul>

                 <i>Refer to</i> <a href="$configandargs">OSEE Configuration Properties</a> <i>for further information on setting these properties.</i> 
                 <br/>
                </li>
                <li>
                	<b>All-In-One</b><br/>
                	<img src="$arrowImage"></img>&nbsp;&nbsp;<a href="$externalDownloadsSite">Visit external site to obtain all-in-one</a>
                	distribution. The distribution is comprised of Eclipse 3.4, OSEE 0.7, add-ons, and dependencies.  Such scheme of distribution is caused by licensing requirements.<br/>
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
