<?php  	 																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
	$App = new App();
	$Nav = new Nav();
	$Menu = new Menu();
	include($App->getProjectCommon());
	# All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "OSEE Contacts";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Define, ATS, OTE, Application Framework";
	$pageAuthor		= "Ryan D. Brooks; Donald G. Dunne";
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="midcolumn">
	<h1>OSEE Committers, Contributors and Collaboration Partners</h1>
<blockquote><ul><li><a href="#Committers">Committers</a> &#160;
<a href="#Contributors">Contributors</a> &#160;
<a href="#Collaborators">Interested Parties</a> &#160;
</li></ul>

</blockquote>
<div class="homeitem3col">
<h3><a name="Committers"></a>Committers</h3>
<p><table border="0" width="100%"><tr>
<td width="33%" height="200" align="center" valign="bottom"><img border="0" src="images/team/KenAguilar.jpg"/><br/>Ken Aguilar<br/>Boeing<br/>Framework, Test<br/></td>
<td width="33%" height="200" align="center" valign="bottom"><img border="0" src="images/team/RyanBrooks.jpg"/><br/><a href="http://www.eclipsecon.org/2008/index.php?page=presenters/#Ryan_Brooks">Ryan Brooks</a><br/>Boeing<br>OSEE Project Lead<br/>Framework, Define, ATS, Test</td>
<td width="33%" height="200" align="center" valign="bottom"><img border="0" src="images/team/DonDunne.jpg"/><br/><a href="http://www.eclipsecon.org/2008/index.php?page=presenters/#Donald_G._Dunne">Don Dunne</a><br/>Boeing<br>OSEE Project Lead<br/>Framework, ATS</td>
</tr><tr>
<td width="33%" height="200" align="center" valign="bottom"><img border="0" src="images/team/RobertoEscobar.jpg"/><br/>Robert Escobar<br/>Boeing<br/>Framework, Define</td>
<td width="33%" height="200" align="center" valign="bottom"><img border="0" src="images/team/AndyFinkbeiner.jpg"/><br/><a href="http://www.eclipsecon.org/2008/index.php?page=presenters/#Andrew_Finkbeiner">Andrew Finkbeiner</a><br/>Boeing<br/>Framework, Test</td>
<td width="33%" height="200" align="center" valign="bottom"><img border="0" src="images/team/MikeM_120x120.jpg"/><br/>Michael Masterson<br/>Boeing<br/>Framework, Test</td>
</tr><tr>
<td width="33%" height="200" align="center" valign="bottom"><img border="0" src="images/team/JeffPhillips.jpg"/><br/><a href="http://www.eclipsecon.org/2008/index.php?page=presenters/#Jeff_Phillips">Jeff Phillips</a><br/>Boeing<br/>Framework, Define</td>
<td width="33%" height="200" align="center" valign="bottom"><img border="0" src="images/team/MegumiTelles.jpg"/><br/>Megumi Telles</a><br/>Boeing<br/>Framework, ATS</td>
</table>

<! 
Ryan Brooks is the co-lead of the Open System Engineering Environment (OSEE) project.
OSEE had its roots in Boeing's Longbow Apache helicopter program where he worked as
an Embedded Software Engineer.  He earned a Bachelor of Science in Computer
Engineering from Auburn University.  Previous conference presentations and papers include:
"An Integrated Test Environment for Systems Engineering" - EclipseCon 2009;
"The Cure for Your Disconnected Toolset Headache" - EclipseCon 2008;
"A Linux/Java Environment for Testing Real-time Avionics Software" - 2nd Boeing Software Conference, 2007;
"Lean Engineering and the Open System Engineering Environment" - 1st Boeing Software Conference, 2006;
"Lean Engineering and the Open System Engineering Environment" - JACMET Lean Symposium, 2005;
"A Jini-enabled Active Badge System" - 38th Annual ACM Southeast Conference, 2000.
-->

</div>
<div class="homeitem3col">
<h3><a name="Contributors"></a>Contributors</h3>
<p><table border="0" width="100%"><tr >
<td width="33%" height="200" align="center" valign="bottom"><img border="0" src="images/team/eclipseface.png"/><br/>Paul Walfogel<br/>Boeing<br/>Define</td>
<td width="33%" height="200" align="center" valign="bottom"><img border="0" src="images/team/AndyJury.jpg"/><br/>Andy Jury<br/>Boeing<br/>Test</td>
<td width="33%" height="200" align="center" valign="bottom"><img border="0" src="images/team/TheronVirgin.jpg"/><br/>Theron Virgin<br/>Boeing<br/>Define, Test</td>
</tr><tr>
<td width="33%" height="200" align="center" valign="bottom"><img border="0" src="images/team/eclipseface.png"/><br/>Stephan Eberle<br/>Geensys<br>Define, Framework, Application Dev</td>
</tr></table>

</div>
<div class="homeitem3col">
<h3><a name="Collaborators"></a>Interested Parties</h3>
<p><table border="0" width="100%"><tr >
</tr></table>

</div>
</div>

<div id="rightcolumn">	<div class="sideitem">
		<h6>Submit Yourself</h6>

		<p>Not on this list? Information wrong or missing? Attach your details and a photo (or URL) to <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=224930">bug 224930</a>.</p>
</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
