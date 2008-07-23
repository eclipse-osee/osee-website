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


	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<p>
			OSEE distribution consists of two parts - OSEE plug-ins and JDBC Drivers. Both parts are required.<br> 
			OSEE plug-ins are provided under the terms and conditions of the Eclipse Public License Version 1.0 ("EPL"). A copy of the EPL is available at <a href="http://www.eclipse.org/legal/epl-v10.html">http://www.eclipse.org/legal/epl-v10.html</a>.<br> 		
			JDBC Drivers are external libraries with their own licenses, which are distributed from an external location at <a href="http://osee.microdoc.com/">osee.microdoc.com</a>.
		</p>
		<h2>Installation and update process</h2>
		<p>
		    You can find step-by-step process descriptions in <a href="/osee/documentation/gettingStarted/aboutOsee/install.php">Installation instructions</a> and in <a href="/osee/documentation/gettingStarted/aboutOsee/update_eclipse.php">Update instructions</a>.
		</p>
		<h2>Requirements</h2>
        <p>
            This version requires Eclipse 3.4 and doesn't support previous versions of Eclipse IDE. You can see full list of requirements in <a href="/osee/documentation/gettingStarted/aboutOsee/requirements.php">'Requirements'</a>.
        </p>
		<div class="homeitem3col">
			<h3>Latest Version</h3>
			<ul>
            	<li>
                    <b>Version</b>: XXX  |  <b>Date</b>: XX July 2008  |  <b>Type</b>: X.X.X Release<br/>
                    <img src="/osee/downloads/images/arrow.gif"></img>&nbsp;&nbsp;<a href="/osee/changelogs/changelog.txt">Change Log</a><br/>
                    <img src="/osee/downloads/images/arrow.gif"></img>&nbsp;&nbsp;<a href="/osee/changelogs/releasenotes.txt">Release Notes</a>
                </li>
                <li>
                	<b>Update Site</b><br/>
                	<img src="/osee/downloads/images/arrow.gif"></img>&nbsp;&nbsp;<b><a href="http://download.eclipse.org/technology/osee/VERSION/update-site/">http://download.eclipse.org/technology/osee/VERSION/update-site/</a></b> - [required]<br/>
                	<i>Important: In order to start working with OSEE you need to install JDBC Drivers distributed from external location. Such scheme of distribution is caused by licensing requirements.</i><br/>
                    <img src="/osee/downloads/images/arrow.gif"></img>&nbsp;&nbsp;<b><a href="http://osee.microdoc.com/">Visit external site to get JDBC Drivers</a></b> - [required]
                </li>
                <li>
                	<b>All-In-One</b><br/>
                	<img src="/osee/downloads/images/arrow.gif"></img>&nbsp;&nbsp;<b><a href='http://www.eclipse.org.downloads/download.php?file=/osee/downloads/drops/RELEASE/osee-all-in-one-VERSION.zip'></a></b><br/>
                	<i>Important: In order to start working with OSEE you need to install JDBC Drivers distributed from external location. Such scheme of distribution is caused by licensing requirements.</i><br/>
                    <img src="/osee/downloads/images/arrow.gif"></img>&nbsp;&nbsp;<b><a href="http://osee.microdoc.com/">Visit external site to get JDBC Drivers</a></b> - [required]
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
