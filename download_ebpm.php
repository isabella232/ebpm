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

<!--<h2>$pageTitle</h2>-->
<!-- disclaimer -->
<!--<p>All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a> unless otherwise specified.</p> -->
<p></p>
<h3>eBPM - Preview</h3>
<p></p>
<p>eBPM0.7-PREVIEW is available now. </p>

<p>eBPM is the result of the contribution to Eclipse of part of the core of the open source project <a href="http://spagoworld.com/xwiki/bin/view/Spagic/">Spagic</a>, the free/open source platform
for the governance of middleware services and the development of SOA applications.
The contribution work is still in progress: this means that using eBPM without any auxiliary tools
is quite complex now. For this reason, in this tour we'll use some complementary tools provided by
the original project Spagic along with the eBPM runtime, provided in its basic version with some additional
Spagic bundles.</p>
<p>This is a temporary situation: once the submission process is completed, eBPM will provide both
runtime and designer tools.
Please notice that this preview <b>IS NOT AN OFFICIAL ECLIPSE RELEASE</b>.
The official Eclipse release will be available once the Eclipse submission process is completed.
</p>
<p>
Spagic has been refactored for the eBPM contribution: most of the core bundles have been renamed,
some code has been modified so as to allow the use of the libraries that are compatible with the EPL license. The
license of all bundles has been changed as well.	
</p>	
<p>
Downloads are available at this URL:
<br><i>Security warning may appear when clicking the Download links. This is caused by the fact that these links are located on an FTP server which requires an authorization. In order to proceed with downloading the files, you have to click on the OK button.</i>
<p></p>
<!--<p>eBPM Runtime - Preview</p>-->
<p><a href="ftp://ebpm:bpm!2010@193.178.245.9/eBPM-service-manager-linux0.7PREVIEW.zip">eBPM Service Manager 0.7PREVIEW for Linux</a></p>
<p><a href="ftp://ebpm:bpm!2010@193.178.245.9/eBPM-service-manager-win0.7PREVIEW.zip">eBPM Service Manager 0.7PREVIEW for Windows</a></p>
<p><a href="ftp://ebpm:bpm!2010@193.178.245.9/eBPM-src.zip">eBPM sources 0.7PREVIEW </a></p>
<p><a href="ftp://ebpm:bpm!2010@193.178.245.9/eBPM_Getting_Started.pdf">eBPM documentation 0.7PREVIEW </a></p>
</p>
<h4>Spagic tools working with eBPM</h4>
<p>

<p><a href="http://forge.ow2.org/project/download.php?group_id=298&file_id=15467"> Spagic3 Console </a>
<p><a href="http://forge.ow2.org/project/download.php?group_id=298&file_id=15473"> Spagic3 Studio for Windows </a>
<p><a href="http://forge.ow2.org/project/download.php?group_id=298&file_id=15474"> Spagic3 Studio for Linux </a>
</p>
<h3>eBPM - RoadMap</h3>
<p>
eBPMRoadmap for 2010 includes:
<ul>

     <li> Completing the porting of all connectors and services of version 2 towards the OSGi standard</li>
     <li> Enrichment of the BPM support to users' activities </li>
     <li>Implementation of management tools on the OSGi runtime.</li>
</ul>
</p>

<h3></div>

  <img align="center" src="/images/egg-incubation.png" 
        border="0" alt="Incubation" /></a></div>
</div></h3>

</div>

EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>