<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Denis Roy
	# Date:			2005-06-16
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "OSEE News and Events";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Define, ATS, OTE, Application Framework";
	$pageAuthor		= "Ryan D. Brooks; Donald G. Dunne";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="midcolumn">
	   <div id="events>
		<h1>Events and Milestones</h1>
		<h2>2008, Feb - EclipseCon Birds of Feather (BOF) session for OSEE Accepted</h2>
<a href="http://www.eclipsecon.org/2008/?page=sub/&id=590">Open System Engineering Environment BOF</a><br>

		<h2>2007, December 17 - Talks accepted for EclipseCon 2008</h2>
<a href="http://www.eclipsecon.org/2008/index.php?page=sub/&id=421">The Cure for Your Disconnected Toolset Headache</a> - Long Talk - Tools<br>
<a href="http://www.eclipsecon.org/2008/index.php?page=sub/&id=428">Top 10 Deployment Secrets They Don't Want You To Know</a> - Short Talk - Emerging Technologies<br>
<a href="http://www.eclipsecon.org/2008/index.php?page=sub/&id=422">Open System Engineering Environment: An Integrated Solution</a> - Short Talk - Emerging Technologies<br>

		<h2>2007, December 10 - Demo Screencasts Available</h2>
      The Eclipse OSEE Project released demonstration screencasts to showcase the capabilities of OSEE.  These can be viewed seperately or used as a tutorial along side the OSEE Demo Installation.  Contact <a href="mailto: donald.g.dunne@boeing.com">Don Dunne</a> for details.<br>

		<h2>2007, December 8 - OSEE source code committed to Eclipse</h2>
      The OSEE Project released its first set of source code to the Eclipse SVN repository.  Screencasts will be provided as well as a demo installation within the week.<br>

		<h2>2007, December 19 - Proposed Talks for EclipseCon 2008</h2>
<a href="https://eclipsecon.greenmeetingsystems.com/submissions/view/421">The Cure for Your Disconnected Toolset Headache</a><br>
<a href="https://eclipsecon.greenmeetingsystems.com/submissions/view/428">Top 10 Deployment Secrets They Don't Want You To Know</a><br>
<a href="https://eclipsecon.greenmeetingsystems.com/submissions/view/431">Going Vertical: An Experience from the Aerospace Industry</a><br>
<a href="https://eclipsecon.greenmeetingsystems.com/submissions/view/422">Open System Engineering Environment: An Integrated Solution</a><br>
<a href="https://eclipsecon.greenmeetingsystems.com/submissions/view/425">Take Courage and Arm Yourself With The Right Tooling To Embrace Change</a><br><br>
	
		<h2>2007, Nov 8 - Delivered OSEE w/database to US Army</h2>
		<h2>2007, Aug 10 - Incubation Phase (conforming)</h2>
		<h2>2007, July 10 - Project Proposal Phase Approved</h2>
		<h2>2007, March 5-8 - Exploration of OSEE becoming Eclipse Project</h2>
		<h2>2004, November - Test Environment first used for requirements verification in simulated environment</h2>
	</div>
	<div id="news">
       <h1>In the News</h1><p>
       <a href="http://ralph-at-eclipse.blog.de/2008/02/14/hidden_gem%7E3726625">Ralph Mueller on OSEE Collaboration and EclipseCon</a>
       <a href="http://www.sdtimes.com/content/article.aspx?ArticleID=30656">Boeing Pilots Test Solution With Eclipse Persistence</a>
       <a href="http://www.sdtimes.com/content/article.aspx?ArticleID=30587">SDTimes - Persistence is a Virtue</a>
       <a href="http://www.eclipse.org/proposals/osee/">OSEE Proposal</a>
   </div>
</div>
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
