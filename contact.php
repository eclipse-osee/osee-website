<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "OSEE Contacts";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Define, ATS, OTE, Application Framework";
	$pageAuthor		= "Ryan D. Brooks; Donald G. Dunne";
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="container"><div id="midcolumn">
	<h1>OSEE Committers, Contributers and Collaboration Partners</h1><blockquote><ul><li><a href="#Committers">Committers</a> &#160;
<a href="#Contributors">Contributors</a> &#160;
</li></ul>

</blockquote>
<div class="homeitem3col">
<h3><a name="Committers"></a>Committers</h3>
<p><table border="0" width="100%"><tr>
<td width="33%" height="200" align="center" valign="bottom"><img border="0" src="images/team/eclipseface.png"/><br/>Ken Aguilar<br/>Boeing<br/></td>
<td width="33%" height="200" align="center" valign="bottom"><img border="0" src="images/team/RyanBrooks.jpg"/><br/>Ryan Brooks<br/>Boeing<br>OSEE Project Lead<br/></td>
<td width="33%" height="200" align="center" valign="bottom"><img border="0" src="images/team/DonDunne.jpg"/><br/>Don Dunne<br/>Boeing<br>OSEE Project Lead<br/></td>
</tr><tr>
<td width="33%" height="200" align="center" valign="bottom"><img border="0" src="images/team/eclipseface.png"/><br/>Robert Escobar<br/>Boeing<br/></td>
<td width="33%" height="200" align="center" valign="bottom"><img border="0" src="images/team/AndyFinkbeiner.jpg"/><br/>Andrew Finkbeiner<br/>Boeing<br/></td>
<td width="33%" height="200" align="center" valign="bottom"><img border="0" src="images/team/eclipseface.png"/><br/>Michael Masterson<br/>Boeing<br/></td>
</tr><tr>
<td width="33%" height="200" align="center" valign="bottom"><img border="0" src="images/team/JeffPhillips.jpg"/><br/>Jeff Phillips<br/>Boeing<br/></td>
</table>

</div>
<div class="homeitem3col">
<h3><a name="Contributors"></a>Contributors (7)</h3>
<p><table border="0" width="100%"><tr >
<td width="33%" height="200" align="center" valign="bottom"><img border="0" src="images/team/eclipseface.png"/><br/>Paul Walfogel<br/>Boeing<br/></td>
<td width="33%" height="200" align="center" valign="bottom"><img border="0" src="images/team/eclipseface.png"/><br/>Andy Jury<br/>Boeing<br/></td>
<td width="33%" height="200" align="center" valign="bottom"><img border="0" src="images/team/eclipseface.png"/><br/>Theron Virgin<br/>Boeing<br/></td>
</tr></table>

</div>
</div>

<div id="rightcolumn">	<div class="sideitem">
		<h6>Submit Yourself</h6>

		<p>Not on this list? Information wrong or missing? Attach your details and a photo (or URL) to <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=182613#c11">bug 182613</a>.</p>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
