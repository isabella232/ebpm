<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
/*******************************************************************************
 * Copyright (c) 2009 
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    
 *******************************************************************************/

	$pageTitle 		= "eBPM - Getting Involved";
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/default/style.css"/>');

	$html  = <<<EOHTML
<div id="midcolumn">

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-7607153-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<h2>$pageTitle</h2>
<p></p>

<h3>Committers</h3>
<p>
<b>Coming Soon </b>
<!-- <a href="http://dash.eclipse.org/dash/commits/web-app/active-committers.cgi?project=soa.ebpm"></a> -->
 </p>

<h3>SVN</h3>
<p>
<b>Go to the  </b><a href="http://dev.eclipse.org/svnroot/soa/org.eclipse.ebpm">SVN Repository</a> </p>

<h3>Blog</h3>
<p>
<b>Link to</b><a href="http://www.spagoworld.org/blog/">eBPM Blog</a></p>


</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>