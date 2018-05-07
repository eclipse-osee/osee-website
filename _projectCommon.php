<?php

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

	$theme = "Quicksilver";
	
	$pageKeywords	= "osee, systems engineering";
	$pageAuthor		= "Ryan Brooks";
	$pageTitle 		= "OSEE";
	
	# Define your project-wide Navigation here
	# This appears on the left of the page if you define a left nav
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	$Nav->setLinkList(array());
	
	$Nav->addNavSeparator("OSEE", "/osee/");
	$Nav->addCustomNav("Downloads", "/osee/downloads/", "_self", 3);
	$Nav->addCustomNav("Documentation", "/osee/documentation/", "_self", 3);

	$Nav->addNavSeparator("Support", "/osee/support/", "_self", 3);
	$Nav->addCustomNav("Mailing List", "https://dev.eclipse.org/mailman/listinfo/osee-dev", "_self", 3);
	$Nav->addCustomNav("Forum", "http://www.eclipse.org/forums/index.php?t=thread&frm_id=68", "_self", 3);
	$Nav->addCustomNav("Contacts", "/osee/contact/", "_self", 3);
   
   $Nav->addNavSeparator("Getting Involved", "/osee/developers/", "_self", 3);
	$Nav->addCustomNav("Source Code", "http://git.eclipse.org/c/osee/org.eclipse.osee.git/", "_self", 3);
	$Nav->addCustomNav("Bugzilla", "https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Technology&product=OSEE&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED", "_self", 3);
      
   $Nav->addNavSeparator("About", "http://www.eclipse.org/projects/project_summary.php?projectid=technology.osee", "_self", 3);


	# top navigation bar
	# To override and replace the navigation with your own, uncomment the line below.
	$Menu->setMenuItemList(array());
	$Menu->addMenuItem("Home", "/osee/", "_self");
	$Menu->addMenuItem("Download", "/osee/downloads/", "_self");
	$Menu->addMenuItem("Documentation", "/osee/documentation/", "_self");
	$Menu->addMenuItem("Support", "/osee/support/", "_self");
	$Menu->addMenuItem("Getting Involved", "/osee/developers/", "_self");
	$Menu->addMenuItem("About", "http://www.eclipse.org/projects/project_summary.php?projectid=technology.osee", "_self", 3);
		
	# To define additional CSS or other pre-body headers
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="style.css"/>' . "\n\t");
	
	# To enable occasional Eclipse Foundation Promotion banners on your pages (EclipseCon, etc)
	$App->Promotion = TRUE;
	
	# If you have Google Analytics code, use it here
	# $App->SetGoogleAnalyticsTrackingCode("YOUR_CODE");
?>
