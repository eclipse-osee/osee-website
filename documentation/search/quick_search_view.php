<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
	$App = new App();
	$Nav = new Nav();
	$Menu = new Menu();
	include($App->getProjectCommon());
	# All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# Getting Started.php
	#
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "Quick Search View";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Define, Quick, Search";
	$pageAuthor		= "Roberto E. Escobar";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

<div id="midcolumn" style="width:95%">
	<h1>$pageTitle</h1>
	<br/>
	<h1>Quick Search View</h1>

	<p>The Quick Search view allows users to perform searches for information 
	that is contained <i>inside</i> artifacts in a selected branch. 
	</p>

	<img src="../images/quickSearchView.png" alt="quick search view"/>
	
	<p>To find all artifacts that contain a particular set of keywords:</p>
	<ol>
  		<li>Select <a class="command-link" href='javascript:executeCommand("org.eclipse.ui.views.showView(org.eclipse.ui.views.showView.viewId=org.eclipse.osee.framework.ui.skynet.QuickSearchView)")'>
		<img src="..\images\artifact_search.gif"  alt="search icon" border="0" />
		<b>Window &gt; Show View &gt; Other... &gt; OSEE &gt; Quick Search</b></a>, to open the view.
  		</li>
  		<li><p>Type your search string in the <b>Enter Search String</b> combo box, or use the 
      pull-down list to select a previously entered search expression. <br/> Special characters such as (<b><code>' '</code>, 
      <code>!</code>, <code>"</code>, <code>#</code>, <code>$</code>, 
      <code>%</code>, <code>(</code>, <code>)</code>, <code>*</code>, <code>+</code>, 
      <code>,</code>, <code>-</code>, <code>.</code>, <code>/</code>, <code>:</code>, 
      <code>;</code>, <code>&lt;</code>, <code>&gt;</code>, <code>?</code>, <code>@</code>, 
      <code>[</code>, <code>\</code>, <code>]</code>, <code>^</code>, <code>{</code>, 
      <code>|</code>, <code>}</code>, <code>~</code>, <code>_</code></b>) are assumed to be word separators unless <i>By Id</i> option is selected.
      When <i>By Id</i> option is selected, (<b><code>,</code> and <code>' '</code></b>) are treated as separators.</p>
      <p>For example:      	
      	<ul>
      		<li>When <i>By Id</i> is not selected, <b><code>hello.world</code></b> will be translated to <b><code>hello</code></b> and <b><code>world</code></b>. The search will match attributes with <b><code>hello</code></b> and <b><code>world</code></b> keywords.</li>
      		<li>When <i>By Id</i> is selected, (<b><code>A+ABG7jFm+0BKaVZIxfqOQ,AFABG7jFm+0BKaVZIxfqOQ PX1FH</code></b>) will be interpreted as 2 GUID(s) and 1 HRID. The search will match artifacts containing <b><code>A+ABG7jFm+0BKaVZIxfqOQ</code></b> and <b><code>AFABG7jFm+0BKaVZIxfqOQ</code></b> as its GUID or <b><code>PX1FH</code></b> as its HRID.</li>
      	</ul>
      </p>
      </li>
  		<li>Finish entering your search options, (for example, to scope
      	the search to include deleted artifacts, check the include deleted option), 
      	and click <b>Search</b> or press <b>Enter</b> from the combo box to execute the search.
      </li>
  		<li>The Search view displays the results of your search. Right-click on any item in
      	 the Search view to open a pop-up menu that allows you perform various operations 
      	 on the artifacts such as copy search results to the clipboard or reveal a 
      	 selected artifact in Artifact Explorer. To open one of the listed artifacts, 
      	 double-click it or select <b>Open</b> from its pop-up menu.
     	</li>
	</ol>
		
	<p><img border="0" src="../images/ngrelc.png" alt="Related concepts" /><br>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="attribute_tagging.php">Attribute Tagging</a>
	</p>
</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>