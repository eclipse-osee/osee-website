<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
	$App = new App();
	$Nav = new Nav();
	$Menu = new Menu();
	include($App->getProjectCommon());

	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "Requirements";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Define, ATS, OTE, Application Framework";
	$pageAuthor		= "Roberto E. Escobar";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<div id="midcolumn">

		<h3>$pageTitle</h3>
		
		<h4>System Requirements (non-Eclipse)</h4>
		<ul>
			<li>JRE 1.6 or higher</li>
			<li>Relational Database such as PostgreSQL, MySQL, Oracle, or Derby.<br/>
			See instructions for installing <a href="supported_databases.php">'Supported Databases'</a> to complete this step.</li>
		</ul>
		<h4>Eclipse Requirements</h4>
		<ul>
			<li>An Eclipse 3.4.1 base with the following features installed</li>
			<ul>
				<li>org.eclipse.gef</li>
				<li>org.eclipse.draw2d</li>
				<li>org.eclipse.birt</li>
				<li>org.eclipse.datatools</li>
				<li>org.apache.derby.core</li>
			</ul>
			The easiest solution is the Ganymede Eclipse install <a href="http://www.eclipse.org/downloads/download.php?file=/technology/epp/downloads/release/ganymede/SR2/eclipse-reporting-ganymede-SR2-win32.zip"> Eclipse IDE for Java and Report Developers</a> since it provides the above Eclipse dependencies.<br/> 
			Unzip the content of this zip file into a (short) path on you computer to create your Eclipse base.
			<li>OSEE add-ons - <a href="$externalDownloadsSite">Visit external site under the section &quot;Add-On Features&quot;</a><br/>
			To use OSEE with a database other than Derby, you will need to install JDBC Drivers distributed from this external location. Such scheme of distribution is caused by licensing requirements.</li>
		</ul>
	</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>