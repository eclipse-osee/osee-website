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
	$pageTitle 		= "Attribute Tagging for Quick Search";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Define, Requirements, Management";
	$pageAuthor		= "Roberto E. Escobar";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML


<div id="midcolumn" style="width:95%">
	<h1>$pageTitle</h1>
	<br/>
	<p>When an artifact is saved, each attribute contained in the artifact is analyzed to produce a list of
	tags that are then associated with the artifact. Quick search is a form of <i>keyword</i> based searching
	which uses tags to perform contextual artifact searches.</p>

	<p>For an attribute to be tagged by the system, it must meet the following criteria:</p>
	<ol>
		<li>The attribute's type must specify an <b>Attribute Tagger</b> to be used by the tagging system.</li>
		<li>The attribute must contain valid data.</li>
		<li>The attribute revision must be saved in the database before sending to tagging system.</li>
	</ol>

	<p>To produce tags, modified attributes are sent to the OSEE application server where the tagging system
	processes each attribute using an <b>Attribute Tagger</b> specified by the attribute's type. The <b>Attribute Tagger</b>
	knows how to interpret the attribute's data and how to extract words from the content. At this point, a word is defined
	as a sequential set of alphanumeric characters delimited by one or more spaces. As words are parsed, they are sent
	to the tagging system's word encoder where the following processing takes place:
	</p>
	<ol>
		<li>The characters in the original word are converted to lower case.</li>
		<li>The lower cased version of the word is encoded and stored in the tagging system.</li>
		<li>The lower cased version of the word is split using punctuation characters such as (<b><code>' '</code>,
      <code>!</code>, <code>"</code>, <code>#</code>, <code>$</code>,
      <code>%</code>, <code>(</code>, <code>)</code>, <code>*</code>, <code>+</code>,
      <code>,</code>, <code>-</code>, <code>.</code>, <code>/</code>, <code>:</code>,
      <code>;</code>, <code>&lt;</code>, <code>&gt;</code>, <code>?</code>, <code>@</code>,
      <code>[</code>, <code>\</code>, <code>]</code>, <code>^</code>, <code>{</code>,
      <code>|</code>, <code>}</code>, <code>~</code>, <code>_</code></b>) as delimiters.</li>
		<li>Possessive words <i>(ending in 's)</i> are converted into regular form.</li>
		<li>Each word is converted from plural to singular form.</li>
		<li>Each word is encoded and stored in the tag system.</li>
	</ol>

	<p> When encoding words into tags, the tag encoder uses an algorithm which transforms the word's characters
	into a bit-packed tag that will fit in a 64-bit integer. The tag will represent up to 12 characters
	(all that can fit into 64-bits). Longer words will be turned into consecutive tags.</p>

	<h3>Tag Encoding Examples</h3>
	<table style="width:50%;" border="1">
		<tr style="background:lightgrey">
		<th>Original</th>
		<th>Keywords</th>
		<th>Encoding</th>
		</tr>
		<tr>
			<td>appendeces</td>
			<td>appendix</td>
			<td>-220858502</td>
		</tr>
		<tr>
			<td>battery(ies)</td>
			<td>battery</td>
			<td>529513131</td>
		</tr>
		<tr>
			<td>alternate/backup</td>
			<td>
				<table>
					<tr><td>alternate</td></tr>
					<tr><td>backup</td></tr>
				</table>
			</td>
			<td>
				<table>
					<tr><td>-1420231874</td></tr>
					<tr><td>24902827</td></tr>
				</table>
			</td>
		</tr>
	</table>

	<p><img border="0" src="../../images/ngrelr.png" alt="Related reference" /><br>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="quick_search_view.php">Quick Search View</a>
	</p>
</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>