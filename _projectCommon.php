<?php

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/
	# Optional: defaults to system theme 
	$theme = "Phoenix";
	
	include("sidebar.php");
	
	$Nav->setLinkList(array());

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	$Nav->addNavSeparator("OSEE Home", "/osee/index.php");
	$Nav->addCustomNav("About This Project", "http://www.eclipse.org/projects/project_summary.php?projectid=technology.osee", "_self", 2);
	$Nav->addCustomNav("News and Events", "/osee/news.php", "_self", 2);	
	$Nav->addCustomNav("Documentation", "/osee/documentation/index.php", "_self", 2);
	$Nav->addCustomNav("Screencasts", "/osee/screencasts.php", "_self", 2);
	$Nav->addCustomNav("FAQ", "/osee/faq.php", "_self", 2);
	$Nav->addCustomNav("Downloads", "/osee/downloads.php", "_self", 2);
	$Nav->addCustomNav("Repository", "https://dev.eclipse.org/svnroot/technology/org.eclipse.osee", "_self", 2);
	$Nav->addCustomNav("Bug Components", "https://bugs.eclipse.org/bugs/describecomponents.cgi?product=OSEE", "_self", 2);
	$Nav->addCustomNav("Bugs", "https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Technology&product=OSEE&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED", "_self", 2);
	$Nav->addCustomNav("Mailing List", "https://dev.eclipse.org/mailman/listinfo/osee-dev", "_self", 2);
	$Nav->addCustomNav("Newsgroup", "http://www.eclipse.org/newsportal/thread.php?group=eclipse.technology.osee", "_self", 2);
	$Nav->addCustomNav("Contacts", "/osee/contact.php", "_self", 2);
?>
