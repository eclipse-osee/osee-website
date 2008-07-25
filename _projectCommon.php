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
	$Nav->addCustomNav("Getting Started", 	"/osee/documentation/gettingStarted/gettingStarted.php", "_self", 2);
	$Nav->addCustomNav("Documentation", "/osee/documentation/index.php", "_self", 2);
	$Nav->addCustomNav("Demos", "/osee/demos.php", "_self", 2);
	$Nav->addCustomNav("Downloads", "/osee/downloads.php", "_self", 2);
	$Nav->addCustomNav("Repository", "http://dev.eclipse.org/viewsvn/index.cgi/org.eclipse.osee/?root=Technology_SVN", "_self", 2);
	$Nav->addCustomNav("Bugs", "/osee/bugs.php", "_self", 2);
	$Nav->addCustomNav("Mailing List", "https://dev.eclipse.org/mailman/listinfo/osee-dev", "_self", 2);
	$Nav->addCustomNav("Newsgroup", "http://www.eclipse.org/newsportal/thread.php?group=eclipse.technology.osee", "_self", 2);
	$Nav->addCustomNav("FAQ", "/osee/faq.php", "_self", 2);
	$Nav->addCustomNav("News and Events", "/osee/news.php", "_self", 2);	
	$Nav->addCustomNav("Contacts", "/osee/contact.php", "_self", 2);
?>
