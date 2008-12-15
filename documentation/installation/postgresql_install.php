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
	$pageTitle 		= "OSEE - PostgreSQL Installation";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Define, ATS, OTE, Application Framework, Install";
	$pageAuthor		= "Roberto E. Escobar";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<div id="midcolumn" style="width:95%">

		<h3>$pageTitle</h3>

		<h4>Pre-Requisites</h4>
		<ul>
			<li>Ensure you have selected the best database for your needs</li>
		</ul>

		<h4>Instructions</h4>
		<ol>
			<li>Download PostgreSQL from <a href="http://www.postgresql.org">http://www.postgresql.org/download</a></li>					
			<li>Follow PostgreSQL installation instructions</li>
			<li>Configure PostgreSQL for OSEE
					<ol>
							<li>Launch pgAdmin (in windows Start->All Programs->PostgreSQL*->pgAdmin III) </li>
							<li>Double Click on PostgreSQL Database Server (listed under Servers on the left hand side)
									<ol>
										<li>If you are prompted for a password type the password selected during installation (user should be postgres by default)</li>
									</ol>
							</li>
							<li>Create an "osee" user
									<ol>
										<li>Right-click on Login Roles (at the bottom of the tree on the left hand side) and select "New Login Role..."
										<li>Enter the following in the dialog:
											<p>
											Role Name: osee<br/>
											Can login should be checked<br/>
											Password: osee<br/>
											Password (again): osee<br/>
											For Role Priviledges - select the following:<br/>
											&nbsp;&nbsp;&nbsp;&nbsp;Inherits rights from parent roles<br/>
											&nbsp;&nbsp;&nbsp;&nbsp;Superuser<br/>
											&nbsp;&nbsp;&nbsp;&nbsp;Can create database objects<br/>
											&nbsp;&nbsp;&nbsp;&nbsp;Can modify catalog directly<br/>
											</p>
										</li>
										<li>Click 'OK'</li>
										<li>You should now have an "osee" user under Login Roles</li>
									</ol>
							</li>
							<li>Expand the Databases item in the tree</li>
									<ol>
										<li>Create the OSEE database right-clicking on Databases and selecting "New Database..."</li>
										<li>Enter the following in the dialog:<br/>
												&nbsp;&nbsp;&nbsp;&nbsp;Name: OSEE<br/>
												&nbsp;&nbsp;&nbsp;&nbsp;Owner: osee<br/>
												&nbsp;&nbsp;&nbsp;&nbsp;Encoding: UTF-8
										</li>
									<li>Click 'OK'</li>
									<li> You should now have an "OSEE" Database under Databases</li>
									</ol>
							<li>Click on OSEE and then expand it and expand Schemas</li> 
							<ol>
									<li>Create the "osee" schema:
											<ol>
												<li>Right click on Schemas and select "New Schema..."</li>
												<li>Enter the following in the dialog: <br/> 
													&nbsp;&nbsp;&nbsp;&nbsp;Name: osee<br/>
													&nbsp;&nbsp;&nbsp;&nbsp;Owner: osee</li>
												<li>Click 'OK'</li>
												<li>You should now have an "osee" schema under schemas</li>
											</ol>
									</li>
							<ol>
						</li> 
				 </ol>
			</li>
			<li>The relational database is now configured. Proceed to <a href="db_init.php">OSEE Database Initialization</a></li>
		</ol>
		<br/>
	</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>