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

	$pageTitle 		= "eBPM - Components";
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/ebpm/style.css"/>');

	$html  = <<<EOHTML
<div id="midcolumn">
<h1>$pageTitle</h1>
<p>Here are illustrated in detail,the eBPM Componets proposed .</p>

<h2>OSGi Bundles</h2>

<h3>eBPM Core Framework</h3>
<p>Set of bundles, that leverage the capabilities of OSGi Declarative Services, to provide a common way to define/develop OSGi services.eBPM core framework will  provide a way to realize OSGi Services based on the messaging paradigm that use the OSGi Event Admin Service to communicate with each others.</p>

<h3>eBPM Deployment Service</h3>
<p>Bundle that will provide an OSGi Service, that will look for service configuration file and will publish OSGi services using facilities offered by DS and DS Component Factories.</p>

<h3>BPM Gateway API</h3>
<p>The bundle defining the interface for BPM Gateway implementations.</p>

<h3>BPM Gateway Process Engine</h3>
<p>The bundle containing an implementation of the API based on an open source process engine ( for example jbpm ).</p>

<h3>Standard Connectors and  Services</h3>
<p>Bundles that provide common connectivity, and business services (SOAP, JMS, File System, FTP, TCP with pluggable applicative protocol implementations, Quartz, XSLT Transformation service, Groovy, JDBC, XSD Validation ).</p>

<h3>eBPM Monitoring Services</h3>
<p>The set of bundle that will leverage information from runtime and store into a relational database.</p>

<h2>Metadata Model</h2>
<p>The relational model used by eBPM to store monitoring information. Basically this will be based on the STP Intermediate Model.<p>

<h2>Eclipse IDE Plugins ( Extensions to Eclipse IDE )</h2>

<h3>eBPM Project Wizard Tool</h3>
<p>Eclipse Plugin to create an eBPM project.</p>

<h3>eBPM Service Editor</h3>
<p> visual tool for the configurations of OSGi service descriptor. This service descriptor file will be used by eBPM Core Service Framework, to register OSGi services into the runtime.This will not replace PDE tool, as it’s intended as a tool to create eBPM service descriptor to be used by eBPM Deployment Service.</p>

<h3>BPMN to BPM Gateway Process Engine Bundle</h3>
<p> Based on Eclipse STP IM ( Mangrove ) it produces process definitions to be used by BPM Gateway default implementation ( jbpm ) bundle.</p>


<h3>BPMN to BPEL</h3>
<p>Based on Eclipse STP IM ( Mangrove ), it produces BPEL processes with using the models realized by means of Eclipse BPMN Designer. The processes are then completed through the BPEL Designer.</p>

<h3>Deploy Tools</h3>
<p>Utility Tools integrated in Eclipse, that allow to deploy an eBPM project to the runtimes.</p>

<h3>Eclipse BPMN Editor Extension</h3>
<p>Extension to the eclipse bpmn editor to support the drag and drop of OSGi service definitions into the diagram</p>

<h3>Eclipse BPEL Editor Extension</h3>
<p>Extension to the eclipse bpel editor  o support the drag and drop of OSGi service definitions into bpel  diagram.</p>

<h3>Eclipse eBPM Support Tools</h3>
<p>Some support plugins ( menu contributions, preference page ), to help to work with eBPM.</p>

<h3>Monitor and Management Perspective/View</h3>
<p>Eclipse plugins to provide a view with the list of processes, process instances, and status information</p>

<h2>Extension to BPEL Runtime</h2>

<h3>OSGi Extension for the BPEL Runtime</h3>
<p>extensions enabling the BPEL runtime to orchestrate  OSGi  services. It will be initially released for Apache ODE.</p>


</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>