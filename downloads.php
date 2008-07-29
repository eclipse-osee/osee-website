<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
	$App = new App();
	$Nav = new Nav();
	$Menu = new Menu();
	include($App->getProjectCommon());
	# All on the same line to unclutter the user's desktop'

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
	$releaseDate = "28 July 2008";
	$releaseMajorVersion = "0.4";
	$releaseVersion = "0.4.0";
	$releaseFullVersion = "XXXX";
	$externalDownloadsSite = "http://osee.microdoc.com/node/2";

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
		    You can find step-by-step process descriptions in <a href="/osee/documentation/gettingStarted/aboutOsee/install.php">'Installation Instructions'</a> 
		    and in <a href="/osee/documentation/gettingStarted/aboutOsee/update_eclipse.php">'Update Instructions'</a>.
		</p>
		<h2>Requirements</h2>
        <p>
            This version requires Eclipse 3.4 and doesn't support previous versions of Eclipse IDE. 
            You can see a full list of requirements in <a href="/osee/documentation/gettingStarted/aboutOsee/requirements.php">'Requirements'</a>.
        </p>
		<div class="homeitem3col">
			<h3>Latest Version</h3>
			<ul>
            	<li>
                    <b>Version</b>: $releaseFullVersion  |  <b>Date</b>: $releaseDate  |  <b>Type</b>: $releaseVersion Release Candidate<br/>
                    <img src="/osee/downloads/images/arrow.gif"></img>&nbsp;&nbsp;<a href="/osee/changelogs/changelog.txt">Change Log</a><br/>
                    <img src="/osee/downloads/images/arrow.gif"></img>&nbsp;&nbsp;<a href="/osee/changelogs/releasenotes.txt">Release Notes</a>
                </li>
                <li>
                	<b>Update Site</b><br/>
                	<img src="/osee/downloads/images/arrow.gif"></img>&nbsp;&nbsp;<b><a href="http://download.eclipse.org/technology/osee/$releaseMajorVersion/update-site/">http://download.eclipse.org/technology/osee/$releaseMajorVersion/update-site/</a></b> - [required]<br/>
                	
                	<i>Important: If you would like to work with a database other than Derby, you will need to install JDBC Drivers distributed from external location. Such scheme of distribution is caused by licensing requirements.</i><br/>
                    <img src="/osee/downloads/images/arrow.gif"></img>&nbsp;&nbsp;<b><a href="$externalDownloadsSite">Visit external site to get add-ons</a></b>
                </li>
                <li>
                	<b>All-In-One</b><br/>
                	<img src="/osee/downloads/images/arrow.gif"></img>&nbsp;&nbsp;<b><a href="$externalDownloadsSite">Visit external site to get all-in-one</a></b>
                	<i> Visit external site to obtain all-in-one distribution. The distribution is comprised of Eclipse 3.4, OSEE 0.4, add-ons, and dependencies. 
                	Refer to <a href="/osee/documentation/gettingStarted/aboutOsee/requirements.php">'requirements'</a> for a list of dependencies. 
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
