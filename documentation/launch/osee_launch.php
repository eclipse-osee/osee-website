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
	# install.php
	#
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "OSEE - Launch & Configurations";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Define, ATS, OTE, Application Framework, Install";
	$pageAuthor		= "Roberto E. Escobar";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<div id="midcolumn" >
		<h3>$pageTitle</h3>
		
		<p>Before you can launch OSEE, you will need the address of an arbitration server or an application server to access the OSEE data store.
		If you have questions regarding client/server interactions, visit <a href="../architecture/client_server_overview.php">'Client/Server Overview'</a>.
		</p>
						
		<h4>Pre-requisites</h4>
		<p>Visit the <a href="../index.php">'User's Guide'</a> if you need more information about any of the pre-requisites below.</p>	
		<ul>
			<li>Database has been installed</li>
			<li>Database server is running</li>
			<li>A file system path has been selected for binary data storage. The system default the user's home directory.</li>
		</ul>
				
		<br/>
		<h4>Application Server Launch Instructions</h4>
		<p>COMING SOON</p>
		<ol>
			<li></li>
			<li>
				<div style="border-width:thin;border:solid;padding:0.2em;">	
				</div>
			</li>
		</ol>
		
		<br/>
		<h4>OSEE Client Launch Instructions</h4>
		<p>COMING SOON</p>
		<ol>
			<li></li>
			<li>
				<div style="border-width:thin;border:solid;padding:0.2em;">	
				</div>
			</li>
		</ol>

		
		<br>
		</br>
	</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>