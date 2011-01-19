<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
/*******************************************************************************
 * Copyright (c) 2009 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    
 *******************************************************************************/

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nova #midcolumn Template";
	$pageKeywords	= "Nova, template, #midcolumn";
	$pageAuthor		= "Nathan Gervais";
		
	# Paste your HTML content between the EOHTML markers!	
	ob_start();
	?>
	
		
		<h3>&lt;h3&gt; tag</h3>
		<div class="homeitem">
		<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-7607153-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script> 
			<ul>
				<li><a href:"eclipse" >BugTracker, Newsgroup</a></li>
				<li><a href="http://www.spagoworld.org/xwiki/bin/view/Spagic/Support">Professional Support</a></li>
				<li></li>
			</ul>
			
		</div>
		
		<h2>&lt;h2&gt; tag</h2>
		<table>
			<tr>
				<td>Tables look </td>
				<td>like this</td>
			</tr>
			<tr>
				<td>Data</td>
				<td>Data</td>
			</tr>
			<tr>
				<td>Data</td>
				<td>Data</td>
			</tr>
		</table>
		
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="midcolumn.php">#midcolumn Template</a></li>
				<li><a href="fullcolumn.php">#fullcolumn Template</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>&lt;h6&gt; tag</h6>
				<div class="modal">
					Wrapping your content using a div.modal tag here will add the gradient background
				</div>
		</div>
	</div>

	
	<?
	$html = ob_get_clean();

	# Generate the web page
	$App->generatePage('Nova', $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>