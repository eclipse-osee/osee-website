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
		<td class="date">2008/03/10</td>
		<td><b>Birds of Feather (BOF) accepted for EclipseCon 2009</b>
		<td><b></b>
			<div class="details">
				<a  href="https://www.eclipsecon.org/submissions/2009/view_talk.php?id=833">Open System Engineering Environment - BOF</a><br>
			</div>
		</td>
	</tr>

	<tr>
		<td class="date">2009/02/11</td>
		<td><b>OSEE integrates with GEF</b>
			<div class="details">
				OSEE ATS develops and deploys Graphical Workflow Configuration editor<br>
				OSEE starts development on Graphical Artifact Types editor<br>
				OSEE starts development on Graphical Branch editor<br>
			</div>
       </td>
	</tr>
	
	<tr>
		<td class="date">2009/01/22</td>
		<td><b>OSEE integrates BIRT for charts and graphs</b></td>
	</tr>
	
	<tr>
		<td class="date">2009/01/15</td>
		<td><b>OSEE XViewer submitted to eclipse.technology.nebula</b>
			<div class="details">
				<a  href="http://www.eclipse.org/osee/documentation/core/xviewer/xviewer.php">XViewer Information</a><br>
				<a  href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=267265">Track Proposal At Bugzilla</a><br>
				<a  href="https://www.eclipsecon.org/submissions/2009/view_talk.php?id=672">Check it out at EclipseCon 2009</a><br>
			</div>
		</td>
	</tr>

	<tr>
		<td class="date">2008/12/16</td>
		<td><b>Tutorial accepted for EclipseCon 2009</b>
		<td><b></b>
			<div class="details">
            Much interest has been shown for learning how to configure and deploy OSEE.  Our tutorial addressing just this topic has been accepted for EclipseCon 2009.  Come join us to learn how to make OSEE work for problem space.
				<a  href="https://www.eclipsecon.org/submissions/2009/view_talk.php?id=680">OSEE, from www.eclipse.org/osee to deployment...</a><br>
			</div>
		</td>
	</tr>

	<tr>
		<td class="date">2008/12/16</td>
		<td><b>Talks accepted for EclipseCon 2009</b>
		<td><b></b>
			<div class="details">
				<a  href="https://www.eclipsecon.org/submissions/2009/view_talk.php?id=675">An Integrated Test Environment for Systems Engineering</a><br>
				<a  href="https://www.eclipsecon.org/submissions/2009/view_talk.php?id=672">XViewer - An SWT Widget with the power of the spreadsheet.</a><br>
				<a  href="https://www.eclipsecon.org/submissions/2009/view_talk.php?id=676">Unlocking the OSEE Core Framework</a>
			</div>
		</td>
	</tr>
	
	<tr>
		<td class="date">2008/11/28</td>
		<td><b>Talks submitted for EclipseCon 2009</b>
			<div class="details">
				<a  href="https://www.eclipsecon.org/submissions/2009/view_talk.php?id=680">OSEE, from www.eclipse.org/osee to deployment...</a><br>
				<a  href="https://www.eclipsecon.org/submissions/2009/view_talk.php?id=675">An Integrated Test Environment for Systems Engineering</a><br>
				<a  href="https://www.eclipsecon.org/submissions/2009/view_talk.php?id=672">XViewer - An SWT Widget with the power of the spreadsheet.</a><br>
				<a  href="https://www.eclipsecon.org/submissions/2009/view_talk.php?id=671">Improved Engineering Through Integrated Workflows and Data Management</a><br>
				<a  href="https://www.eclipsecon.org/submissions/2009/view_talk.php?id=484">Developing High Integrity Software</a><br>
				<a  href="https://www.eclipsecon.org/submissions/2009/view_talk.php?id=676">Unlocking the OSEE Core Framework</a>
			</div>
		</td>
	</tr>
		
	<tr>
		<td class="date">2008/11/19</td>
		<td>Eclipse Summit Birds of Feather (BOF) session at 19:30 CET</td>
	</tr>
	
	<tr>
		<td class="date">2008/11/19</td>
		<td><b>OSEE talk is presented at Eclipse Summit Europe</b>
			<div class="details">
				<a  href="http://www.eclipsecon.org/summiteurope2008/sessions?id=169">Open System Engineering Environment - An Integrated Solution</a>
			</div>
		</td>
	</tr>
	
	<tr>
		<td class="date">2008/09/24</td>
		<td><b>OSEE 0.4.0 was released</b></td>
	</tr>
	
	<tr>
		<td class="date">2008/04/10</td>
		<td><b>2008, April 10 - OSEE holds first Architecture deep-dive.</b></td>
	</tr>
	
	<tr>
		<td class="date">2008/03/26</td>
		<td><b>MicroDoc <a href="www.microdoc.com">www.microdoc.com</a> agrees to host server for OSEE demo.</b></td>
	</tr>
	
	<tr>
		<td class="date">2008/03/24</td>
		<td><b>Eclipse ORMF Project joins OSEE as a component.</b></td>
	</tr>
	
	<tr>
		<td class="date">2008/02/01</td>
		<td><b>2008, Feb - EclipseCon Birds of Feather (BOF) session for OSEE Accepted</b>
			<div class="details">
				<a  href="http://www.eclipsecon.org/2008/?page=sub/&id=590">Open System Engineering Environment BOF</a>
   		</div>
		</td>
	</tr>
	
	<tr>
		<td class="date">2007/12/17</td>
		<td><b>Talks accepted for EclipseCon 2008</b>
			<div class="details">
				<a  href="http://www.eclipsecon.org/2008/index.php?page=sub/&id=421">The Cure for Your Disconnected Toolset Headache</a> - Long Talk - Tools<br>
				<a  href="http://www.eclipsecon.org/2008/index.php?page=sub/&id=428">Top 10 Deployment Secrets They Don't Want You To Know</a> - Short Talk - Emerging Technologies<br>
				<a  href="http://www.eclipsecon.org/2008/index.php?page=sub/&id=422">Open System Engineering Environment: An Integrated Solution</a> - Short Talk - Emerging Technologies
			</div>
		</td>
	</tr>
	
	<tr>
		<td class="date">2007/12/10</td>
		<td><b>Demo Screencasts Available</b>
      	<div class="details">The Eclipse OSEE Project released demonstration screencasts to showcase the capabilities of OSEE.  These can be viewed separately or used as a tutorial along side the OSEE Demo Installation.  Contact <a  href="mailto: donald.g.dunne@boeing.com">Don Dunne</a> for details.</div>
		</td>
	</tr>
	
	<tr>
		<td class="date">2007/12/08</td>
		<td><b>OSEE source code committed to Eclipse</b>
			<div class="details">The OSEE Project released its first set of source code to the Eclipse SVN repository.  Screencasts will be provided as well as a demo installation within the week.</div>
		</td>
	</tr>
	
	<tr>
		<td class="date">2007/12/19</td>
		<td><b>Proposed Talks for EclipseCon 2008</b>
				<div class="details">
					<a  href="https://eclipsecon.greenmeetingsystems.com/submissions/view/421">The Cure for Your Disconnected Toolset Headache</a><br>
					<a  href="https://eclipsecon.greenmeetingsystems.com/submissions/view/428">Top 10 Deployment Secrets They Don't Want You To Know</a><br>
					<a  href="https://eclipsecon.greenmeetingsystems.com/submissions/view/431">Going Vertical: An Experience from the Aerospace Industry</a><br>
					<a  href="https://eclipsecon.greenmeetingsystems.com/submissions/view/422">Open System Engineering Environment: An Integrated Solution</a><br>
					<a  href="https://eclipsecon.greenmeetingsystems.com/submissions/view/425">Take Courage and Arm Yourself With The Right Tooling To Embrace Change</a>
				</div>
			</td>
	</tr>
	
	<tr>
		<td class="date">2007/05/08</td>
		<td><b>2007, Nov 8 - Delivered OSEE with database to US Army</b></td>
	</tr>
	
	<tr>
		<td class="date">2007/08/10</td>
		<td><b>2007, Aug 10 - Incubation Phase (conforming)</b></td>
	</tr>
	
	<tr>
		<td class="date">2007/07/10</td>
		<td><b>Project Proposal Phase Approved</b></td>
	</tr>
	
	<tr>
		<td class="date">2007/03/05</td>
		<td><b>Exploration of OSEE becoming Eclipse Project</b></td>
	</tr>
	
	<tr>
		<td class="date">2004/11/01</td>
		<td><b>Test Environment first used for requirements verification in simulated environment</b></td>
	</tr>
	
	</table>
	</div>
</div>	
<div id="rightcolumn">
	<div class="sideitem">
       <h6>In the News</h6>
       <div class="modal">
       	<table class="newsPosts" cellspacing="0" cellpadding="0">
				<tr>
					<td class="date">2008/04/08</td>
					<td><a href="http://www.ebizq.net/blogs/it_directions/archives/2008/04/reduce_software.php">Reduce Software Project Failure</a></td>
				</tr>
				<tr>
					<td class="date">2008/03/19</td>
					<td><a href="http://www.embedded-computing.com/b/?p=225">OSEE at EclipseCon - Embedded now Blog </a></td>
       		</tr>
				<tr>
					<td class="date">2008/02/14</td>
					<td><a href="http://ralph-at-eclipse.blog.de/2008/02/14/hidden_gem%7E3726625">Ralph Mueller - "OSEE Collaboration and EclipseCon"</a></td>
       		</tr>
				<tr>
					<td class="date">2007/05/23</td>
					<td><a href="http://www.sdtimes.com/content/article.aspx?ArticleID=30587">2007-05-23 - SDTimes - "Persistence is a Virtue"</a></td>
       		</tr>
				<tr>
					<td class="date">2007/05/29</td>
					<td><a href="http://www.sdtimes.com/content/article.aspx?ArticleID=30656">SDTimes - "Boeing Pilots Test Solution With Eclipse Persistence"</a></td>
       		</tr>
				<tr>
					<td class="date">2007/07/10</td>
					<td><a href="http://www.eclipse.org/proposals/osee/">OSEE Proposal</a></td>
       		</tr>
       	</table>
      </div>
   </div>
</div>
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
