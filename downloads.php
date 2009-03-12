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
	$releaseDate = "24 Sep 2008";
	$releaseMajorVersion = "0.4";
	$releaseVersion = "0.4.0";
	$externalDownloadsSite = "http://osee.microdoc.com/node/2";
	$arrowImage = "downloads/images/arrow.gif";
	$installRequirements = "documentation/installation/requirements.php";
	$installInstructions = "documentation/installation/eclipse_install.php";
	$releaseNotes="downloads/0_4_0/ReleaseNotes.html";
	$releaseNewAndNoteworthy="downloads/0_4_0/NewAndNoteworthy.html";


	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<p>
			OSEE distribution consists of two parts - OSEE plug-ins and add-ons.
			These two items are required to work with OSEE if you will be using a database other than Derby.
			OSEE plug-ins are provided under the terms and conditions of the Eclipse Public License Version 1.0 ("EPL").
			A copy of the EPL is available at <a href="http://www.eclipse.org/legal/epl-v10.html">http://www.eclipse.org/legal/epl-v10.html</a>.
			Add-ons are libraries with their own licenses, which are distributed from an external location
			at <a href="$externalDownloadsSite">$externalDownloadsSite</a>.
		</p>
		<p>
			In order to install OSEE you should install OSEE plug-ins and at least one add-ons, such as PostgreSQL.
			OSEE plug-ins and add-ons are distributed from different update sites on different locations,
			so you should point to two different update sites in the Eclipse update manager.
		</p>
		<h2>Installation and update process</h2>
		<p>
		    You can find step-by-step process descriptions in <a href="$installInstructions">'Installation Instructions'</a>.
		</p>
		<h2>Requirements</h2>
        <p>
            This version of OSEE requires Eclipse 3.4 and doesn't support previous versions of Eclipse.  Additionally, Java 1.6 or greater is required.
        </p>
		<div class="homeitem3col">
			<h3>Latest Version</h3>
			<ul>
<!--            	<li>
                    <b>Version</b>: $releaseVersion  |  <b>Date</b>: $releaseDate  |  <b>Type</b>: Release<br/>
                    <img src="$arrowImage"></img>&nbsp;&nbsp;<a href="$releaseNewAndNoteworthy">New and Noteworthy for OSEE 0.4.0</a><br/>
                    <img src="$arrowImage"></img>&nbsp;&nbsp;<a href="$releaseNotes">Release Notes for OSEE 0.4.0</a>
                </li> -->
                <li>
                	<b>Client Update Site - Integration Build</b> | <b>Date</b>: 12 Mar 2009<br/>
                	<img src="$arrowImage"></img>&nbsp;&nbsp;<b><a href="http://www.eclipse.org/downloads/download.php?file=/technology/osee/updatesite/org.ecilpse.osee_integration_build_incubation.zip">OSEE Client Incubation Archived Update Site</a></b><br/>
                	<ul>
							Required dependencies are included in the Ganymede Eclipse install <a href="http://www.eclipse.org/downloads/download.php?file=/technology/epp/downloads/release/ganymede/SR2/eclipse-reporting-ganymede-SR2-win32.zip"> Eclipse IDE for Java and Report Developers</a>.<br/>
							Just for reference, these dependencies include: org.eclipse.gef, org.eclipse.draw2d, org.eclipse.birt, org.eclipse.datatools, and org.apache.derby.core.<br/><br/>
                 <i>Important: If you would like to work with a database other than Derby, you will also need to install JDBC Drivers distributed from external location. Such scheme of distribution is caused by licensing requirements.</i><br/>
                 <br/>
                 <img src="$arrowImage"></img>&nbsp;&nbsp;<b><a href="$externalDownloadsSite">Visit external site to get add-ons</a></b> and look for the link labeled Add-Ons Archived Update Site.
                 </ul>
                 When launching the client you must set the following java system properties (i.e. include them in the command used to launch eclipse) -Dosee.authentication.protocol=trustAll -Dosee.arbitration.server=http://localhost:8089.  
                 <br/>
                </li>
                <li>
                	<b>All-In-One</b><br/>
                	<img src="$arrowImage"></img>&nbsp;&nbsp;<b><a href="$externalDownloadsSite">Visit external site to get all-in-one</a></b>
                	<i> Visit external site to obtain all-in-one distribution. The distribution is comprised of Eclipse 3.4, OSEE 0.4, add-ons, and dependencies.
                	Refer to <a href="$installRequirements">'requirements'</a> for a list of dependencies.
                	Such scheme of distribution is caused by licensing requirements.</i><br/>
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
