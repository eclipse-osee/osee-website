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
	$pageTitle 		= "OSEE - Client/Server Overview";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Define, ATS, OTE, Application Framework, Install";
	$pageAuthor		= "Roberto E. Escobar";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<div id="midcolumn" style="width:95%">

		<h3>$pageTitle</h3>
		
		<p>IN WORK</p>
		
		<p>In an effort to support a large number of users, OSEE has been slowly migrating into a thin-client/server architecture.</p>
		
		
		<br/><br/><img border="0" src="images/client_server_view.png" alt="Client/Server View"/><br/><br/>
		<br/><br/><img border="0" src="images/arbitration_sequence.png" alt="Arbitration Sequence"/><br/><br/>
		<br/><br/><img border="0" src="images/authentication_sequence.png" alt="Authentication Sequence"/><br/><br/>
		<p></p>
		<br>
		</br>
	</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>