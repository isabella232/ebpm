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

	$pageTitle 		= "eBPM - Download";
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/ebpm/style.css"/>');

	$html  = <<<EOHTML
<div id="midcolumn">
<h2>$pageTitle</h2>
<!-- disclaimer -->
<!--<p>All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a> unless otherwise specified.</p> -->




<h3>eBPM - Preview</h3>
<p>eBPM Runtime - Preview</p>
<p><a href="ftp://ebpm:bpm!2010@193.178.245.9/eBPM-service-manager-linux0.7PREVIEW.zip">eBPM Service Manager 0.7PREVIEW for Linux</a></p>
<p><a href="ftp://ebpm:bpm!2010@193.178.245.9/eBPM-service-manager-win0.7PREVIEW.zip">eBPM Service Manager 0.7PREVIEW for Windows</a></p>
<p><a href="ftp://ebpm:bpm!2010@193.178.245.9/eBPM-src.zip">eBPM sources 0.7PREVIEW </a></p>
<p><a href="ftp://ebpm:bpm!2010@193.178.245.9/eBPM_Getting_Started.pdf">eBPM documentation 0.7PREVIEW </a></p>
<h3>eBPM - RoadMap</h3>
<p>Page under Construction</p>

<h3></div>

  <img align="center" src="/images/egg-incubation.png" 
        border="0" alt="Incubation" /></a></div>
</div></h3>

</div>

EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>