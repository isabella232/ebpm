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

	$pageTitle 		= "eBPM - Support";
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/default/style.css"/>');

	$html  = <<<EOHTML
<div id="midcolumn">

<h2>$pageTitle</h2>
<p>Link to <a href="http://www.spagic.org">Spagic website </a></b></p>


<h3>Spagic Professional Support </h3>
<p>
Link to <b><a href="http://www.spagoworld.org/xwiki/bin/view/Spagic/Support">Spagic support </a></b></p>


<h3>Spagic Consulting Services </h3>
<p>
Link to <b><a href="http://www.spagoworld.org/xwiki/bin/view/Spagic/Support/Consulting">Spagic Consulting </a></b></p>


<h3>Spagic Development </h3>
<p>
Link to <b><a href="http://www.spagoworld.org/xwiki/bin/view/Spagic/Support/Development">Spagic Development </a></b></p>


<h3>Spagic Training </h3>
<p>
Link to <b><a href="http://www.spagoworld.org/xwiki/bin/view/Spagic/Support/Training">Spagic Training </a></b></p>

</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>