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
	$pageTitle 		= "Getting involved in OSEE";
	$pageKeywords	= "OSEE, source, community";
	$pageAuthor		= "Ryan Schmitt";
	$theme = "Miasma";
		
	# Paste your HTML content between the EOHTML markers!	
	ob_start();
	?>
	<div class="homeitem">
		<h1>Get Involved</h1>
		<p>
			<ul>
				<li>
				Our <a href="https://dev.eclipse.org/svnroot/technology/org.eclipse.osee">SVN repository</a> contains all the
				source code for OSEE.
				</li>
				<li>
				Our <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Technology&product=OSEE&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED">Bugzilla page</a>
				lists all the open bugs users have submitted against OSEE and its components.
				</li>
			</ul>
		</p>
	</div>
	
	<?
	$html = ob_get_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>