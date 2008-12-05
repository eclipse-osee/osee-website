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
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "OSEE - Eclipse Installation";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Define, ATS, OTE, Application Framework, Install";
	$pageAuthor		= "Roberto E. Escobar";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<div id="midcolumn" style="width:95%">

		<h3>$pageTitle</h3>
		<p> OSEE can be installed from within Eclipse using update manager. All the user should do is point update manager to the remote or local update site. To install OSEE:</p>
	<ol>
		<li>
			Start Eclipse and select menu item <i>'Help > Software Updates...'</i>
			<br/><br/><img border="0" src="images/find_and_install.png" alt="Software Updates"/><br/><br/>
		</li>
		<li>
			Select the <i>'Available Software'</i> tab group and click the <i>'Add Site...'</i> button.
			<br/><br/><img border="0" src="images/add_site.png" alt="Update manager"/><br/><br/>
		</li>
		<li>
			On the <i>'Add Site'</i> dialog enter the URL to the 'Add-On' update site. The proper URL can be found on 
			<a href="http://www.eclipse.org/osee/downloads.php">http://www.eclipse.org/osee/downloads.php</a>. If the update 
			site is marked as an archived site, you will need to download the archived update site to your local file system, and add the 
			path to the 'Add-On' dialog by using the 'Archive' button. If the update site is not marked as an archived update site then 
			copy the URL listed in the downloads page directly into the 'Add-On' dialog.
			<ul>
				<li>
					<u><i>Please note that the use of the software you are about to access may be subject to third party terms and 
					conditions and you are responsible for abiding by such terms and conditions.</i></u>
				</li>
			</ul>
			<br/>Click on the <i>'OK'</i> button to store update site information.
			<br/><br/><img border="0" src="images/new_update_site.png" alt="New update site"/><br/><br/>		
		</li>
		<li>
			Select the OSEE update site entry and all features listed under its category. Click the <i>'Install'</i> button.
			<br/><br/><img border="0" src="images/install_updates.png" alt="Feature Search Result"/><br/><br/>
		</li>
		<li>
			The update manager calculates dependencies and offers you a list of features to install. Select the needed ones and click the <i>'Next >'</i> button.
			<br/><br/><img border="0" src="images/install.png" alt="Features to Install"/><br/><br/>
		</li>
		<li>
			Accept terms of license agreement and click the <i>'Finish'</i> button in order to start the download of selected features.
			<br/><br/><img border="0" src="images/install_license.png" alt="Feature License"/><br/><br/>
		</li>
		<li>
			To apply installation changes click on the <i>'No'</i> button and shutdown Eclipse. It is important that you don't restart Eclipse until 
			you have completed the database initialization steps below.
			<br/><br/><img border="0" src="images/restart_dialog.png" alt="Restart dialog"/><br/><br/>
		</li>
		<li>
			Before you can use OSEE you will need to install a relational database. Follow the instructions at 
			<a href="supported_databases.php">'Supported Databases'</a> to complete this step.
		</li>
		<li>
			Initialize the database with default OSEE data <a href="db_init.php">'Database Initialization'</a>
		</li>
		<li>	
			Setup config.ini and launch eclipse to start using OSEE <a href="../launch/osee_launch.php">'OSEE Config & Launch'</a>
		</li>
		<li> You can find different OSEE perspectives, such as Define and ATS, and views in correspondent dialogs, activated by menu items <i>'Window > Open Perspective > Other...'</i> and <i>'Window > Show View > Other...'</i>.
			<br/><br/>
			<table border="0" cellpadding="5" cellspacing="0">
				<tr>
					<td valign="top">
						<img border="0" src="images/open_perspective.png" alt="Open Perspective"/>
					</td>
					<td valign="top">
						<img border="0" src="images/show_view.png" alt="Show View"/>
					</td>
				</tr>
			</table>
		</li>
		</ol>
		<br>
		</br>
	</div>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>