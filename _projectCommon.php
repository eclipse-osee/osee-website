<?php

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/
	# Optional: defaults to system theme 
	$theme = "";

	$Nav->setLinkList(array());

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	$Nav->addNavSeparator("Getting Started", 	"/osee/index.php");
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Demos", "/osee/demos.php", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Downloads", "/osee/downloads.php", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;FAQ", "/osee/faq.php", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;News and Events", "/osee/news.php", 	"_self", 1);
	$Nav->addNavSeparator("Development", 	"");
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Newsgroup", "http://www.eclipse.org/newsportal/thread.php?group=eclipse.technology.osee", "_blank", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Bugs", "https://bugs.eclipse.org/bugs/buglist.cgi?product=OSEE", "_blank", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Architecture", "/osee/arch.php", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Workspace Setup", "/osee/devSetup.php", "_self", 1);
	$Nav->addNavSeparator("Other", 	"");
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;OSEE Proposal", "http://www.eclipse.org/proposals/osee/", "_blank", 1);

?>
