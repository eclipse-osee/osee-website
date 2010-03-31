<?php

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/
	# Optional: defaults to system theme 
	$theme = "Nova";
	
	include("sidebar.php");
	
	$Nav->setLinkList(array());

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)

	$Nav->addNavSeparator("OSEE Home", "/osee/index.php");
	$Nav->addCustomNav("Project Summary", "http://www.eclipse.org/projects/project_summary.php?projectid=technology.osee", "_self", 2);

	$Nav->addNavSeparator("Documentation", "_blank");
	$Nav->addCustomNav("Wiki", "http://wiki.eclipse.org/OSEE", "_self", 2);
	$Nav->addCustomNav("Screencasts (wiki)", "http://wiki.eclipse.org/OSEE/Users_Guide#Screencasts", "_self", 2);
	$Nav->addCustomNav("FAQ (wiki)", "http://wiki.eclipse.org/OSEE/Users_Guide#Frequently_Asked_Questions", "_self", 2);
	
	$Nav->addNavSeparator("Development", "_blank");
	$Nav->addCustomNav("Downloads", "/osee/downloads.php", "_self", 2);
	$Nav->addCustomNav("Repository", "https://dev.eclipse.org/svnroot/technology/org.eclipse.osee", "_self", 2);
	$Nav->addCustomNav("Bugzilla", "https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Technology&product=OSEE&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED", "_self", 2);

	$Nav->addNavSeparator("Discussion", "_blank");
	$Nav->addCustomNav("Mailing List", "https://dev.eclipse.org/mailman/listinfo/osee-dev", "_self", 2);
	$Nav->addCustomNav("Forum", "http://www.eclipse.org/forums/index.php?t=thread&frm_id=68&S=03be8852279043e2fbe465ca71cbb7ac", "_self", 2);
	$Nav->addCustomNav("Contacts", "/osee/contact.php", "_self", 2);
	
	# $Nav->addCustomNav("News and Events", "/osee/news.php", "_self", 2);
	# $Nav->addCustomNav("Bug Components", "https://bugs.eclipse.org/bugs/describecomponents.cgi?product=OSEE", "_self", 2);
	
?>
