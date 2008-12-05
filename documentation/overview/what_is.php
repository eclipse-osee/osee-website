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
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "What is OSEE?";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Define, ATS, OTE, Application Framework";
	$pageAuthor		= "Roberto E. Escobar";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<div id="midcolumn" style="width:95%">
		<h1>$pageTitle</h1>
		
	<p>
	OSEE provides a tightly integrated environment that supports lean engineering.  
			It is integrated around a simple, user-definable data model to eloquently 
			provide bidirectional traceability across the full product life-cycle 
			including: architecture and design, requirements management, implementation, 
			verification, and validation.  
	
		OSEE is a tightly integrated environment that supports lean engineering across the full product life-cycle. 
				
		Since 
		OSEE integrates all engineering areas, the full lifecycle data for a product is managed by a common platform 
		allowing this data to be seamlessly combined to form a coherent, accurate view of a project in real-time.  At 
		the heart of the OSEE architecture are the OSEE core services and application framework which are available to 
		all the OSEE applications and enable their tight integration.  
	</p>
	<p>
		The vision for OSEE finds concrete grounding in daily use by Subject Matter Experts developing next generation 
		mission software for an existing Boeing aircraft. This direct involvement with a full-scale deployment of OSEE 
		allows important user feedback to be rapidly incorporated back into both OSEE itself and as lessons learned 
		for the development team.
	</p>
	<p>
		Since OSEE has been developed for use by separate groups of end users, careful attention has been given to 
		providing a proper separation of core OSEE capabilities and specific extensions made for various groups. The 
		requirement to support separate groups has helped ensure that OSEE is extensible through standard Eclipse 
		mechanisms.  The OSEE architecture is designed to provide an integrated, extensible engineering environment 
		that can be adopted by any group engaged in engineering.
	</p>
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>