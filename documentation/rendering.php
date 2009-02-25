<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
	$App = new App();
	$Nav = new Nav();
	$Menu = new Menu();
	include($App->getProjectCommon());
	
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "OSEE - Rendering";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Application Framework, Renderer";
	$pageAuthor		= "Jeff C. Phillips";

	# Paste your HTML content between the EOHTML markers!
	
	$html = <<<EOHTML

	<div id="midcolumn" style="width:95%">
		<h3>$pageTitle</h3>
		<h4>Adding a Custom Editor</h4>
		
		<p>Additional editors can be added to OSEE and configured so that they will appear in the "Open With" menus throughout OSEE based on a specific artifact type selected. The steps outlined below assume that a custom editor has already been created.</p>
		
		<h4>Topics</h4>
		<ul>
			<li>Create Command</li>
			<li>Create Handler</li>
			<li>Create Renderer</li>
			</ul>
		
		<h4>Create a Command</h4>
		<ul>
		<li>Command id: command.custom.editor</li>
		<li>A command will need to be created to provide a name and icon for the menu item.</li>
			<br>1) Create an extension for the command org.eclipse.ui.commands.
			<br>2) To add an icon create an extension org.eclipse.ui.commandImages.
		</ul>
		

	</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
