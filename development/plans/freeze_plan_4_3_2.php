<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		
	# Date:			2013-12-18
	#
	# Description: Eclipse project 4.3.2 release freeze plan
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Kepler 4.3 SR2 Endgame Plan";
	$pageKeywords	= "eclipse, 4.3.2,  milestone, schedule, endgame";
	$pageAuthor		= "";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the markers!	
ob_start();
?>		
	<style type="text/css">
		table.schedule td {font-weight:bold; padding-left:10px;}
		table.schedule td.date {font-weight:normal; }
		table.schedule td.spacer {padding-top:10px; padding-bottom:10px; }
		table.schedule tr.current td {
			background-color: #F4EEFF;
		}
	</style>

	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
		<div class="homeitem3col">
			<h3>Status</h3>
			<p><b>December 18, 2013 - weekly maintenance builds in progress.</b></p>
      	</div>
		<div class="homeitem3col">
			<h3>Detailed Timeline</h3>
	        <table class="schedule" border="0" cellspacing="0" align="center" width=100%>
	          <tr>
	            <td>December 2013</td>
	          </tr>
	          <tr class="current">
	            <td></td>
	            <td></td>
	            <td></td>
	            <td></td>
	            <td>Weekly maintenance builds</td>
	            <td></td>
	          </tr>
			  <tr>
	            <td class="spacer">&nbsp;</td>
	          </tr>
	          <tr>
	            <td>January 2014</td>
	          </tr>
	          <tr>
	            <td></td>
	            <td></td>
	            <td></td>
	            <td></td>
	            <td>Weekly maintenance builds</td>
	            <td></td>
	          </tr>
			  <tr>
	            <td class="spacer">&nbsp;</td>
	          </tr>
	          <tr>
	            <td></td>
	            <td class="date">15</td>
	            <td class="date">Wed 08:00 EDT</td>
	            <td></td>
	            <td>Release Candidate 1 build</td>
	            <td></td>
	          </tr>         
			  <tr>
	            <td class="spacer">&nbsp;</td>
	          </tr>
	          <tr>
	            <td></td>
	            <td class="date">29</td>
	            <td class="date">Wed 08:00 EDT</td>
	            <td></td>
	            <td>Release Candidate 2 build</td>
	            <td></td>
	          </tr>         
	          <tr>
	            <td></td>
	            <td class="date">30</td>
	            <td class="date">Thu 08:00 EDT</td>
	            <td></td>
	            <td>Start 1-day test pass against RC2</td>
	            <td></td>
	          </tr>         
	          <tr>
	            <td>February 2014</td>
	          </tr>
	          <tr>
	            <td></td>
	            <td class="date">5</td>
	            <td class="date">Wed 08:00 EDT</td>
	            <td></td>
	            <td>Release Candidate 3 build</td>
	            <td></td>
	          </tr>         
	          <tr>
	            <td></td>
	            <td class="date">6</td>
	            <td class="date">Thu 08:00 EDT</td>
	            <td></td>
	            <td>Start 1-day test pass against RC3</td>
	            <td></td>
	          </tr>         
			  <tr>
	            <td class="spacer">&nbsp;</td>
	          </tr>
	          <tr>
	            <td></td>
	            <td class="date">12</td>
	            <td class="date">Wed 08:00 EDT</td>
	            <td></td>
	            <td>Release Candidate 4 build [if required]</td>
	            <td></td>
	          </tr>         
	        </table>
			<p>
			Here are some holidays during the freeze period to keep in mind:
			<ul>
				<li>February 17 - Canada</li>
			</ul>
			</p>
      	</div>
		<div class="homeitem3col">
			<h3>Useful Links</h3>
			<ul>
			<li><a href="http://www.eclipse.org/eclipse/platform-releng/buildSchedule.html">Build Schedule</a> - details on build times.</li>
			<li><a href="http://wiki.eclipse.org/Eclipse/Release_checklist">Eclipse Release Checklist</a> - lists various things that need to be checked before each release.</li>
			<li><a href="http://www.eclipse.org/projects/project-plan.php?projectid=eclipse">Eclipse Project Kepler Plan</a></li>
			<li><a href="http://wiki.eclipse.org/index.php/Kepler">Kepler Simultaneous Release</a></li>
			</ul>
      	</div>
		<div class="homeitem3col">
			<h3>What is the game plan?</h3>
			<p> 
	 		The Eclipse Kepler 4.3 Service Release 2 ("Kepler 4.3 SR2") endgame involves building 
	        a series of release candidates leading to the Eclipse project's contribution to the
	        Kepler 4.3 SR2 release. The Eclipse project version number for this release is 4.3.2.
	        By its nature, this maintenance release contains fixes to a small number 
	        of serious problems found in the June 2013 Kepler 4.3 and Kepler 4.3 SR1 releases. We make and verify each 
	        fix carefully, so that we do not need to tie up the entire development 
	        team in time-consuming test passes. As always, we welcome help from the 
	        community with testing the release candidates. By default, Kepler 4.3 SR2
	        is supposed to work exactly like the initial Kepler 4.3 release except for the problems we intended 
	        to fix. All problems fixed in Kepler 4.3 SR2 are in the Eclipse bugzilla database 
	        and flagged with Target Milestone &quot;4.3.2&quot; (query bugzilla for 
	        the <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced;resolution=FIXED;target_milestone=4.3.2;product=Equinox;product=JDT;product=PDE;product=Platform;classification=Eclipse;classification=RT">complete 
	        list of bugs fixed in Kepler 4.3 SR2</a>). So we're most interested in identifying 
	        regressions where we've changed something that we did not intend to.
	        </p> 

	        <p>General announcements during the Kepler 4.3 SR2 endgame are posted to the 
	        <a href="http://dev.eclipse.org/mailman/listinfo/platform-releng-dev">platform-releng-dev@eclipse.org</a> 
		    developer mailing list. Anyone participating in the endgame should be subscribed 
			to this list, and should direct any general questions and comments about the process 
			there as well.</p>			

		   <strong>RC1</strong>
		   <p>
		   Release candidate 1 is a warm-up build to ensure the release train build
		   process is in place and all projects are making contributions. All fixes submitted 
		   to maintenance stream builds must have a component lead vote on the bug report,
		   and the fix must be reviewed by an additional committer (any committer other than
		   the one who made the fix).
		   </p>

		   <strong>RC2</strong>
		   <p>
	        Release candidate containing fixes for the majority of known outstanding 
	        defects that we intend to fix for Kepler 4.3 SR2. At the end of RC2 build, 
	        there should not be any open defects tagged 4.3.2. All fixes submitted 
	        to maintenance stream builds must have a component lead vote on the bug report,
	        and the fix must be reviewed by an additional committer (any committer other than
	        the one who made the fix).
	        </p>               
	
	        <strong>Test pass using RC2</strong>
	        <p>Concerted 1-day testing effort using RC2 involving entire community including 
	        all component teams. The goal is to verify all the fixes and check for any regressions.
			</p>
	
	        <strong>RC3</strong>
	        <p>Release candidate containing fixes for all known outstanding defects
	        that we intend to fix for Kepler 4.3 SR2. All fixes submitted to RC3 must have a PMC vote on the bug report,
	        and the fix must be reviewed by an additional committer (any committer other than
	        the one who made the fix).
	        Ensure that all feature/plugin versions have been consistently incremented when needed.
	        </p>
	
	        <strong>Test pass using RC3</strong>
	        <p>Concerted 1-day testing effort using RC3 involving entire community 
	           including all component teams. The goal is to verify all the fixes, check 
	           for any regressions and sanity check our RC3 candidate.
	         </p>
	         
	         <strong>RC4</strong>
	         <p>Release candidate 4, if required, to fix problems detected during the test pass.
	         We expect NO CHANGE at this point. If you find a show stopper, please notify ASAP the 
	         <a href="http://dev.eclipse.org/mailman/listinfo/eclipse-pmc">eclipse-pmc@eclipse.org</a> mailing list.
	         All fixes submitted to RC4 must have a PMC vote on the bug report and be reviewed
	         by an additional committer (any committer other than the one who made the fix).
	         </p>
	         <p>No test pass is scheduled unless significant contributions occurred. If so, 
	         then Thursday would be elected for a one day test pass</p>
	         
			<strong>API change approval</strong>
	        <p>
			No API changes are expected during a maintenance release. Any exception must be
			approved by the PMC. No changes are to be released without prior approval
			and associated bug report. Send the request for approval to the eclipse-pmc
			mailing list. If a change is made to API to make it binary compatible with
			a previous release, technically this is still an API change, and thus it should be treated
			in the same way as any other API change requests.	
			</p>
			
			<strong>Kepler 4.3 SR2 Release</strong>
			<p>The Kepler 4.3 SR2 release should be complete and available for download by 
	              the end of February 2014 as part of the <a href="http://wiki.eclipse.org/Kepler">Kepler 
	              coordinated service release</a> . If product teams intending 
	              to ship on Kepler 4.3 SR2 uncover further serious defects during the endgame, 
	              we may schedule additional release candidate builds to incorporate fixes.
			</p>             
		</div>
	</div>
              
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
