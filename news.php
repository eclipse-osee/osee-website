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
		<h1>$pageTitle</h1>

<div class='homeitem'>

	<table class="newsPosts" cellspacing="0" cellpadding="0">
	
	<tr>
		<td class="date">2008/11/28</td>
		<td><h5>Talks submitted for EclipseCon 2009</h5>
			<div class="details">
				<a class="link" href="https://www.eclipsecon.org/submissions/2009/view_talk.php?id=680">OSEE, from www.eclipse.org/osee to deployment...</a><br>
				<a class="link" href="https://www.eclipsecon.org/submissions/2009/view_talk.php?id=675">An Integrated Test Environment for Systems Engineering</a><br>
				<a class="link" href="https://www.eclipsecon.org/submissions/2009/view_talk.php?id=672">XViewer - An SWT Widget with the power of the spreadsheet.</a><br>
				<a class="link" href="https://www.eclipsecon.org/submissions/2009/view_talk.php?id=671">Improved Engineering Through Integrated Workflows and Data Management</a><br>
				<a class="link" href="https://www.eclipsecon.org/submissions/2009/view_talk.php?id=484">Developing High Integrity Software</a><br>
				<a class="link" href="https://www.eclipsecon.org/submissions/2009/view_talk.php?id=676">Unlocking the OSEE Core Framework</a>
			</div>
		</td>
	</tr>
		
	<tr>
		<td class="date">2008/11/19</td>
		<td><h5>Eclipse Summit Birds of Feather (BOF) session at 19:30 CET</h5></td>
	</tr>
	
	<tr>
		<td class="date">2008/11/19</td>
		<td><h5>OSEE talk is presented at Eclipse Summit Europe</h5>
			<div class="details">
				<a class="link" href="http://www.eclipsecon.org/summiteurope2008/sessions?id=169">Open System Engineering Environment - An Integrated Solution</a>
			</div>
		</td>
	</tr>
	
	<tr>
		<td class="date">2008/09/24</td>
		<td><h5>OSEE 0.4.0 was released</h5></td>
	</tr>
	
	<tr>
		<td class="date">2008/04/10</td>
		<td><h5>2008, April 10 - OSEE holds first Architecture deep-dive.</h5></td>
	</tr>
	
	<tr>
		<td class="date">2008/03/26</td>
		<td><h5>MicroDoc <a class="link"href="www.microdoc.com">www.microdoc.com</a> agrees to host server for OSEE demo.</h5></td>
	</tr>
	
	<tr>
		<td class="date">2008/03/24</td>
		<td><h5>Eclipse ORMF Project joins OSEE as a component.</h5></td>
	</tr>
	
	<tr>
		<td class="date">2008/02/01</td>
		<td><h5>2008, Feb - EclipseCon Birds of Feather (BOF) session for OSEE Accepted</h5>
			<div class="details">
				<a class="link" href="http://www.eclipsecon.org/2008/?page=sub/&id=590">Open System Engineering Environment BOF</a>
   		</div>
		</td>
	</tr>
	
	<tr>
		<td class="date">2007/12/17</td>
		<td><h5>Talks accepted for EclipseCon 2008</h5>
			<div class="details">
				<a class="link" href="http://www.eclipsecon.org/2008/index.php?page=sub/&id=421">The Cure for Your Disconnected Toolset Headache</a> - Long Talk - Tools<br>
				<a class="link" href="http://www.eclipsecon.org/2008/index.php?page=sub/&id=428">Top 10 Deployment Secrets They Don't Want You To Know</a> - Short Talk - Emerging Technologies<br>
				<a class="link" href="http://www.eclipsecon.org/2008/index.php?page=sub/&id=422">Open System Engineering Environment: An Integrated Solution</a> - Short Talk - Emerging Technologies
			</div>
		</td>
	</tr>
	
	<tr>
		<td class="date">2007/12/10</td>
		<td><h5>Demo Screencasts Available</h5>
      	<div class="details">The Eclipse OSEE Project released demonstration screencasts to showcase the capabilities of OSEE.  These can be viewed separately or used as a tutorial along side the OSEE Demo Installation.  Contact <a class="link" href="mailto: donald.g.dunne@boeing.com">Don Dunne</a> for details.</div>
		</td>
	</tr>
	
	<tr>
		<td class="date">2007/12/08</td>
		<td><h5>OSEE source code committed to Eclipse</h5>
			<div class="details">The OSEE Project released its first set of source code to the Eclipse SVN repository.  Screencasts will be provided as well as a demo installation within the week.</div>
		</td>
	</tr>
	
	<tr>
		<td class="date">2007/12/19</td>
		<td><h5>Proposed Talks for EclipseCon 2008</h5>
				<div class="details">
					<a class="link" href="https://eclipsecon.greenmeetingsystems.com/submissions/view/421">The Cure for Your Disconnected Toolset Headache</a><br>
					<a class="link" href="https://eclipsecon.greenmeetingsystems.com/submissions/view/428">Top 10 Deployment Secrets They Don't Want You To Know</a><br>
					<a class="link" href="https://eclipsecon.greenmeetingsystems.com/submissions/view/431">Going Vertical: An Experience from the Aerospace Industry</a><br>
					<a class="link" href="https://eclipsecon.greenmeetingsystems.com/submissions/view/422">Open System Engineering Environment: An Integrated Solution</a><br>
					<a class="link" href="https://eclipsecon.greenmeetingsystems.com/submissions/view/425">Take Courage and Arm Yourself With The Right Tooling To Embrace Change</a>
				</div>
			</td>
	</tr>
	
	<tr>
		<td class="date">2007/05/08</td>
		<td><h5>2007, Nov 8 - Delivered OSEE with database to US Army</h5></td>
	</tr>
	
	<tr>
		<td class="date">2007/08/10</td>
		<td><h5>2007, Aug 10 - Incubation Phase (conforming)</h5></td>
	</tr>
	
	<tr>
		<td class="date">2007/07/10</td>
		<td><h5>Project Proposal Phase Approved</h5></td>
	</tr>
	
	<tr>
		<td class="date">2007/03/05</td>
		<td><h5>Exploration of OSEE becoming Eclipse Project</h5></td>
	</tr>
	
	<tr>
		<td class="date">2004/11/01</td>
		<td><h5>Test Environment first used for requirements verification in simulated environment</h5></td>
	</tr>
	
	</table>
	</div>
</div>	
<div id="rightcolumn">
	<div class="sideitem">
       <h6>In the News</h6>
       <div class="modal">
       <p>
       <a class="link" href="http://www.ebizq.net/blogs/it_directions/archives/2008/04/reduce_software.php">2008-04-08 - Reduce Software Project Failure</a><br><br>
       <a class="link" href="http://www.embedded-computing.com/b/?p=225">2008-03-19 - OSEE at EclipseCon - Embedded now Blog </a><br><br>
       <a class="link" href="http://ralph-at-eclipse.blog.de/2008/02/14/hidden_gem%7E3726625">2008-02-14 - Ralph Mueller - "OSEE Collaboration and EclipseCon"</a><br><br>
       <a class="link" href="http://www.sdtimes.com/content/article.aspx?ArticleID=30587">2007-05-23 - SDTimes - "Persistence is a Virtue"</a><br><br>
       <a class="link" href="http://www.sdtimes.com/content/article.aspx?ArticleID=30656">2007-05-29 - SDTimes - "Boeing Pilots Test Solution With Eclipse Persistence"</a><br><br>
       <a class="link" href="http://www.eclipse.org/proposals/osee/">OSEE Proposal</a>
       </p>
       </div>
   </div>
   </div>
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
