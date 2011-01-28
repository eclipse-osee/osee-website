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
	$pageTitle 		= "Nova #midcolumn Template";
	$pageKeywords	= "OSEE, template, #midcolumn";
	$pageAuthor		= "Ryan Schmitt";
	$theme = "Nova";
		
	# Paste your HTML content between the EOHTML markers!	
	ob_start();
	?>
	<div class="homeitem">
		<h1>Support</h1>
		
		<p>
			<ul>
				<li>
					Our <a href="https://dev.eclipse.org/mailman/listinfo/osee-dev">developer mailing list</a> is a good venue for OSEE development questions and discussions. 
				</li>
				
				<li>
					The <a href="http://www.eclipse.org/forums/index.php?t=thread&frm_id=68&S=03be8852279043e2fbe465ca71cbb7ac">OSEE forum</a> is an excellent place for general OSEE discussion.
				</li>
				
				<li>
					You can also <a href="http://eclipse.org/osee/contact.php">directly contact</a> OSEE's committers and contributors via email.
				</li>
			</ul>
		</p>
	</div>

	<?
	$html = ob_get_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>