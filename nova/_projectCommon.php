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

	$theme = "Nova";

	# Define your project-wide Navigation here
	# This appears on the left of the page if you define a left nav
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	
	# If you want to override the eclipse.org navigation, uncomment below.
	# $Nav->setLinkList(array());
	
	$Nav->addNavSeparator("OSEE Home", "/osee/index.php");
	$Nav->addCustomNav("About OSEE", "http://www.eclipse.org/projects/project_summary.php?projectid=technology.osee", "_self", 2);
	$Nav->addCustomNav("Downloads", "/osee/downloads.php", "_self", 2);
	
	$Nav->addNavSeparator("Documentation", "http://wiki.eclipse.org/OSEE");
	$Nav->addCustomNav("Wiki", "http://wiki.eclipse.org/OSEE", "_self", 2);
	$Nav->addCustomNav("Screencasts", "http://wiki.eclipse.org/OSEE/Users_Guide/Getting_Started#Screencasts", "_self", 2);
	
	$Nav->addNavSeparator("Development", "https://bugs.eclipse.org");
	$Nav->addCustomNav("Source Code", "https://dev.eclipse.org/svnroot/technology/org.eclipse.osee", "_self", 2);
	$Nav->addCustomNav("Bugzilla", "https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Technology&product=OSEE&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED", "_self", 2);

	$Nav->addNavSeparator("Support", "https://dev.eclipse.org/mailman/listinfo/osee-dev");
	$Nav->addCustomNav("Mailing List", "https://dev.eclipse.org/mailman/listinfo/osee-dev", "_self", 2);
	$Nav->addCustomNav("Forum", "http://www.eclipse.org/forums/index.php?t=thread&frm_id=68&S=03be8852279043e2fbe465ca71cbb7ac", "_self", 2);
	$Nav->addCustomNav("Contacts", "/osee/contact.php", "_self", 2);
	
	# Define keywords, author and title here, or in each PHP page specifically
	$pageKeywords	= "osee, systems engineering";
	$pageAuthor		= "Ryan Schmitt";
	# $pageTitle 		= "Osee";


	# top navigation bar
	# To override and replace the navigation with your own, uncomment the line below.
	# $Menu->setMenuItemList(array());
	# $Menu->addMenuItem("Home", "/project", "_self");
	# $Menu->addMenuItem("Download", "/project/download.php", "_self");
	# $Menu->addMenuItem("Documentation", "/project/documentation.php", "_self");
	# $Menu->addMenuItem("Support", "/project/support.php", "_self");
	# $Menu->addMenuItem("Developers", "/project/developers", "_self");
	
	# To define additional CSS or other pre-body headers
	# $App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/osee/style.css"/>');
	
	# To enable occasional Eclipse Foundation Promotion banners on your pages (EclipseCon, etc)
	$App->Promotion = TRUE;
	
	# If you have Google Analytics code, use it here
	# $App->SetGoogleAnalyticsTrackingCode("YOUR_CODE");
?>