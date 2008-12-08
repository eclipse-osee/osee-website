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
	$pageTitle 		= "OSEE - Client/Server Overview";
	$pageKeywords	= "OSEE, Open, System, Engineering, Environment, Eclipse, Define, ATS, OTE, Application Framework, Install";
	$pageAuthor		= "Roberto E. Escobar";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<div id="midcolumn" style="width:95%">

		<h3>$pageTitle</h3>
				
		<p>In order to be a scalable system, the Open System Engineering Environment (OSEE) has been slowly migrating 
		into a distributed architecture where clients interact with an application server in-charge of managing access 
		to an OSEE data store. Additionally, in an effort to provide load balancing, failure recovery, and code compatibility, 
		clients consult an arbitration server before connecting to an application server.  The arbitration server’s responsibility 
		is to keep track of all the application servers interacting with a common data store and direct clients to a healthy 
		application server compatible with the client’s OSEE code version.  In this arrangement, arbitration servers act as the 
		initial access points into the OSEE server cloud where a collection of application servers manage client requests to 
		access and operate on a common OSEE data store.  Figure 1 shows an example of the OSEE Client/Server network.</p>
		<br/>
		<center><img border="1" style="width:640;height:640;" src="images/client_server_view.png" alt="OSEE Client/Server View"/></center>		
		<center><b>Figure 1. Example of an OSEE Client/Server Network.</b></center>
		<br/>		

		<p>In the figure above, three application servers interact with a single OSEE data store.  The data store is comprised 
		of a relational database and a remote file system used to store binary data.  It is not necessary for the database and 
		the binary data to exist on the same machine.  The only requirement is that the application servers have access to both 
		resources.  Upon start-up, each application server registers himself on the data store’s server lookup table by entering 
		its host address, port, supported code versions, and its unique id.  When the arbitration server receives a request to find 
		an application server to support a client connection, the arbitration server reads the data store’s server lookup table and 
		selects the best match for the client.  The client requests this information from the arbitration server upon start-up or 
		whenever it can’t communicate with an application server.  It is important to note that the arbitration server does not have 
		to be a different server than	an application server. All application servers are able to act as an arbitration server.  An 
		application server is referred to as an arbitration server when clients interact with it in this context.  Figure 2 depicts 
		the sequence of events involved in the arbitration process.</p>		
		<br/>
		
		<center><img border="1" style="width:640;height:640;" src="images/arbitration_sequence.png" alt="Arbitration Sequence"/></center>
		<center><b>Figure 2. OSEE Client/Server Arbitration Sequence Diagram.</b></center>		
		<br/>

		<center><img border="1" style="width:891;height:494;" src="images/authentication_sequence.png" alt="Authentication Sequence"/></center>
		<center><b>Figure 3. OSEE Authentication Sequence Diagram.</b></center>
				
		<br/><br/>
		<p></p>
		<br>
		</br>
	</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>