<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#****************************************************************************
	# template.php
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
		<h1>Events and Milestones</h1>
		<h3>2008, November 19 -  Eclipse Summit Birds of Feather (BOF) session at 7:00 p.m.</h3>
		<h3>2008, November 19 - Peter Kirschner presents OSEE talk at Eclipse Summit Europe</h3>
		<a href="http://www.eclipsecon.org/summiteurope2008/sessions?id=169">Open System Engineering Environment - An Integrated Solution</a><br>
		<h3>2008, Sep 24 - OSEE 0.4.0 was released</h3>
		<h3>2008, April 10 - OSEE holds first Architecture deep-dive.</h3>
		<h3>2008, March 26 - MicroDoc <a href="www.microdoc.com">www.microdoc.com</a> agrees to host server for OSEE demo.</h3>
		<h3>2008, March 24 - Eclipse ORMF Project joins OSEE as a component.</h3>
		<h3>2008, Feb - EclipseCon Birds of Feather (BOF) session for OSEE Accepted</h3>
<a href="http://www.eclipsecon.org/2008/?page=sub/&id=590">Open System Engineering Environment BOF</a><br>

		<h3>2007, December 17 - Talks accepted for EclipseCon 2008</h3>
<a href="http://www.eclipsecon.org/2008/index.php?page=sub/&id=421">The Cure for Your Disconnected Toolset Headache</a> - Long Talk - Tools<br>
<a href="http://www.eclipsecon.org/2008/index.php?page=sub/&id=428">Top 10 Deployment Secrets They Don't Want You To Know</a> - Short Talk - Emerging Technologies<br>
<a href="http://www.eclipsecon.org/2008/index.php?page=sub/&id=422">Open System Engineering Environment: An Integrated Solution</a> - Short Talk - Emerging Technologies<br>

		<h3>2007, December 10 - Demo Screencasts Available</h3>
      The Eclipse OSEE Project released demonstration screencasts to showcase the capabilities of OSEE.  These can be viewed seperately or used as a tutorial along side the OSEE Demo Installation.  Contact <a href="mailto: donald.g.dunne@boeing.com">Don Dunne</a> for details.<br>

		<h3>2007, December 8 - OSEE source code committed to Eclipse</h3>
      The OSEE Project released its first set of source code to the Eclipse SVN repository.  Screencasts will be provided as well as a demo installation within the week.<br>

		<h3>2007, December 19 - Proposed Talks for EclipseCon 2008</h3>
<a href="https://eclipsecon.greenmeetingsystems.com/submissions/view/421">The Cure for Your Disconnected Toolset Headache</a><br>
<a href="https://eclipsecon.greenmeetingsystems.com/submissions/view/428">Top 10 Deployment Secrets They Don't Want You To Know</a><br>
<a href="https://eclipsecon.greenmeetingsystems.com/submissions/view/431">Going Vertical: An Experience from the Aerospace Industry</a><br>
<a href="https://eclipsecon.greenmeetingsystems.com/submissions/view/422">Open System Engineering Environment: An Integrated Solution</a><br>
<a href="https://eclipsecon.greenmeetingsystems.com/submissions/view/425">Take Courage and Arm Yourself With The Right Tooling To Embrace Change</a><br><br>
	
		<h3>2007, Nov 8 - Delivered OSEE with database to US Army</h3>
		<h3>2007, Aug 10 - Incubation Phase (conforming)</h3>
		<h3>2007, July 10 - Project Proposal Phase Approved</h3>
		<h3>2007, March 5-8 - Exploration of OSEE becoming Eclipse Project</h3>
		<h3>2004, November - Test Environment first used for requirements verification in simulated environment</h3>
	</div>
	<div id="rightcolumn">
       <h1>In the News</h1><p>
       <a href="http://www.ebizq.net/blogs/it_directions/archives/2008/04/reduce_software.php">2008-04-08 - Reduce Software Project Failure</a><br><br>
       <a href="http://www.embedded-computing.com/b/?p=225">2008-03-19 - OSEE at EclipseCon - Embedded now Blog </a><br><br>
       <a href="http://ralph-at-eclipse.blog.de/2008/02/14/hidden_gem%7E3726625">2008-02-14 - Ralph Mueller - "OSEE Collaboration and EclipseCon"</a><br><br>
       <a href="http://www.sdtimes.com/content/article.aspx?ArticleID=30587">2007-05-23 - SDTimes - "Persistence is a Virtue"</a><br><br>
       <a href="http://www.sdtimes.com/content/article.aspx?ArticleID=30656">2007-05-29 - SDTimes - "Boeing Pilots Test Solution With Eclipse Persistence"</a><br><br>
       <a href="http://www.eclipse.org/proposals/osee/">OSEE Proposal</a>
   </div>
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
