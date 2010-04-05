<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
/*******************************************************************************
 * Copyright (c) 2009 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    
 *******************************************************************************/

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "OSEE Documentation";
	$pageKeywords	= "OSEE, documentation, wiki, screencasts";
	$pageAuthor		= "Ryan Schmitt";
	$theme = "Miasma";
		
	# Paste your HTML content between the EOHTML markers!	
	ob_start();
	?>
	<div class="homeitem">
		<h1>Documentation</h1>
		<p>
			<ul>
				<li>
				The <a href="http://wiki.eclipse.org/OSEE">OSEE Wiki</a> is the central repository for OSEE documentation, 
				including tutorials, installation help, user guides, and other information.
				</li>
				<li>
				Our <a href="http://wiki.eclipse.org/OSEE/Users_Guide/Getting_Started#Screencasts">screencasts</a> provide a
				detailed video demonstration of OSEE's capabilities.
				</li>
			</ul>
		</p>
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<!--
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="midcolumn.php">#midcolumn Template</a></li>
				<li><a href="fullcolumn.php">#fullcolumn Template</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>&lt;h6&gt; tag</h6>
				<div class="modal">
					Wrapping your content using a div.modal tag here will add the gradient background
				</div>
		</div>
	</div>
	-->

	
	<?
	$html = ob_get_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>