<?php

/*
 * Watchdog - Configuration
 */

$_ADDONLANG['Configuration']['locale'] = 'en_US';
$_ADDONLANG['Configuration']['array']['actionsTaken']['neutralize'] = "Neutralize file";
$_ADDONLANG['Configuration']['array']['actionsTaken']['notify'] = "Notify Administrators";
$_ADDONLANG['Configuration']['array']['auditstatus']['1']['title'] = "Too long";
$_ADDONLANG['Configuration']['array']['auditstatus']['1']['icon'] = '<i class="fad fa-snake fa-fw"></i>';
$_ADDONLANG['Configuration']['array']['auditstatus']['1']['example'] = "Anamalous and suspicious files";
$_ADDONLANG['Configuration']['array']['auditstatus']['2']['title'] = "Intruder";
$_ADDONLANG['Configuration']['array']['auditstatus']['2']['icon'] = '<i class="fad fa-user-secret fa-fw"></i>';
$_ADDONLANG['Configuration']['array']['auditstatus']['2']['example'] = "Legitimate third-party vendors or backdoors";
$_ADDONLANG['Configuration']['array']['auditstatus']['3']['title'] = "Corrupted";
$_ADDONLANG['Configuration']['array']['auditstatus']['3']['icon'] = '<i class="fas fa-heart-broken fa-fw"></i>';
$_ADDONLANG['Configuration']['array']['auditstatus']['3']['example'] = "Could contain malwares";
$_ADDONLANG['Configuration']['array']['auditstatus']['4']['title'] = "Missing";
$_ADDONLANG['Configuration']['array']['auditstatus']['4']['icon'] = '<i class="fad fa-sad-cry fa-fw"></i>';
$_ADDONLANG['Configuration']['array']['auditstatus']['4']['example'] = "Could cause unexpected errors";

/*
 * Watchdog - Admin
 */

$_ADDONLANG['maintoolbar']['dashboard'] = "Dashboard";
$_ADDONLANG['maintoolbar']['whitelist'] = "Whitelist";
$_ADDONLANG['maintoolbar']['settings'] = "Settings";

$_ADDONLANG['Dashboard']['th']['path'] = "Path";
$_ADDONLANG['Dashboard']['hover']['inspect'] = "Inspect this file";
$_ADDONLANG['Dashboard']['modal']['detected'] = "Detected";
$_ADDONLANG['Dashboard']['modal']['expected'] = "Expected";
$_ADDONLANG['Dashboard']['modal']['notesplaceholder'] = "Write a note";

/*
 * Watchdog - Hooks
 */

$_ADDONLANG['hook']['submenu']['CRM'] = 'CRM';
$_ADDONLANG['hook']['submenu']['News'] = 'News';
$_ADDONLANG['hook']['submenu']['Blog'] = 'Blog';
$_ADDONLANG['hook']['submenu']['Lab'] = 'Lab';
$_ADDONLANG['hook']['submenu']['Releases'] = 'Releases';
$_ADDONLANG['hook']['submenu']['Documentation'] = 'Documentation';
$_ADDONLANG['hook']['submenu']['Comments'] = 'Comments';
$_ADDONLANG['hook']['submenu']['Demos'] = 'Demo';
$_ADDONLANG['hook']['submenu']['Support'] = 'Support';
$_ADDONLANG['hook']['submenu']['Packages'] = 'Packages';
$_ADDONLANG['hook']['submenu']['Projects'] = 'Projects';
$_ADDONLANG['hook']['submenu']['Settings'] = 'Settings';
$_ADDONLANG['hook']['sidebar']['News']['title'] = 'Sections';
$_ADDONLANG['hook']['sidebar']['News']['tocmenu'] = 'Contents';
$_ADDONLANG['hook']['sidebar']['News']['latestnews'] = 'Latest News';
$_ADDONLANG['hook']['sidebar']['News']['latestnewsicon'] = 'fas fa-calendar';
$_ADDONLANG['hook']['sidebar']['News']['notlocalisedicon'] = 'fas fa-calendar';
$_ADDONLANG['hook']['sidebar']['News']['notlocalisedtitle'] = 'Oops';
$_ADDONLANG['hook']['sidebar']['News']['notlocaliseddescr'] = 'Sorry, this article is not available in <strong>%language</strong>.';
$_ADDONLANG['hook']['sidebar']['News']['backtonews'] = 'Back to news';
$_ADDONLANG['hook']['sidebar']['News']['newsinfo'] = 'News details';
$_ADDONLANG['hook']['sidebar']['News']['datecell'] = 'Date';
$_ADDONLANG['hook']['sidebar']['News']['authorcell'] = 'Author';
$_ADDONLANG['hook']['sidebar']['News']['authorstaff'] = 'Staff';
$_ADDONLANG['hook']['sidebar']['News']['categories'] = 'Categories';
$_ADDONLANG['hook']['sidebar']['Blog']['title'] = 'Categories';
$_ADDONLANG['hook']['sidebar']['Blog']['tocmenu'] = 'Contents';
$_ADDONLANG['hook']['sidebar']['Blog']['latestblog'] = 'Latest Posts';
$_ADDONLANG['hook']['sidebar']['Blog']['latestblogicon'] = 'fas fa-calendar';
$_ADDONLANG['hook']['sidebar']['Blog']['notlocalisedicon'] = 'fas fa-calendar';
$_ADDONLANG['hook']['sidebar']['Blog']['notlocalisedtitle'] = 'Oops';
$_ADDONLANG['hook']['sidebar']['Blog']['notlocaliseddescr'] = 'Sorry, this post is not available in <strong>%language</strong>.';
$_ADDONLANG['hook']['sidebar']['Blog']['backtoblog'] = 'Back to Blog';
$_ADDONLANG['hook']['sidebar']['Blog']['bloginfo'] = 'Post details';
$_ADDONLANG['hook']['sidebar']['Blog']['datecell'] = 'Date';
$_ADDONLANG['hook']['sidebar']['Blog']['authorcell'] = 'Author';
$_ADDONLANG['hook']['sidebar']['Blog']['authorstaff'] = 'Staff';
$_ADDONLANG['hook']['sidebar']['Blog']['categories'] = 'Categories';
$_ADDONLANG['hook']['sidebar']['Lab']['newfeature'] = 'Ask for a feature';
$_ADDONLANG['hook']['sidebar']['Lab']['newbugfix'] = 'Ask for a bug-fix';
$_ADDONLANG['hook']['sidebar']['Lab']['rate'] = 'Your Priority List';
$_ADDONLANG['hook']['sidebar']['Lab']['rateicon'] = 'fa-rocket';
$_ADDONLANG['hook']['sidebar']['Lab']['ratecell'] = 'Pending Items';
$_ADDONLANG['hook']['sidebar']['Lab']['title'] = 'Categories';
$_ADDONLANG['hook']['sidebar']['Lab']['addedby'] = 'Added by';
$_ADDONLANG['hook']['sidebar']['Lab']['suggestedby'] = 'Suggested by';
$_ADDONLANG['hook']['sidebar']['Lab']['status'] = 'Status';
$_ADDONLANG['hook']['sidebar']['Lab']['notlocalisedicon'] = 'fa-file-alt';
$_ADDONLANG['hook']['sidebar']['Lab']['notlocalisedtitle'] = 'Oops';
$_ADDONLANG['hook']['sidebar']['Lab']['notlocaliseddescr'] = 'Sorry, this article is not available in <strong>%language</strong>.';
$_ADDONLANG['hook']['sidebar']['Lab']['backtolab'] = 'Back to Lab';

/*
 * Watchdog - Globals
 */

$_ADDONLANG['global']['btn']['checkall'] = "Check All";
$_ADDONLANG['global']['btn']['uncheckall'] = "Uncheck All";
$_ADDONLANG['global']['btn']['invertselection'] = "Invert Selection";
$_ADDONLANG['global']['btn']['whitelist'] = "<i class=\"fad fa-check-circle fa-fw\"></i> Whitelist";
$_ADDONLANG['global']['btn']['neutralize'] = "<i class=\"fad fa-umbrella\"></i> Neutralize";
$_ADDONLANG['global']['btn']['remove'] = "<i class=\"fad fa-skull-crossbones\"></i> Delete";
$_ADDONLANG['alert']['error']['integer']['title'] = "Must be an Integear";
$_ADDONLANG['alert']['error']['integer']['descr'] = "Valid values are 1, 2, 3 etc. No decimals, no letters or spaces.";
$_ADDONLANG['alert']['error']['invalidemail']['title'] = "Invalid email";
$_ADDONLANG['alert']['error']['invalidemail']['descr'] = "One or more email addresses are invalid.";

/*
 * Watchdog - Settings
 */

$_ADDONLANG['settingcategories']['automation'] = "Automation <i class=\"fad fa-robot fa-fw pull-right\"></i>";
$_ADDONLANG['settingcategories']['notifications'] = "Notifications <i class=\"fas fa-envelope-open-text fa-fw pull-right\"></i>";

$_ADDONLANG['settings']['automation']['checkFrequency']['title'] = "Check Frequency";
$_ADDONLANG['settings']['automation']['checkFrequency']['description'] = "Run checksum verification every certain period of time (in hours).";
$_ADDONLANG['settings']['automation']['checkFrequency']['placeholder'] = "eg. 24 hours";
$_ADDONLANG['settings']['automation']['checkFrequency']['docs'] = "";
$_ADDONLANG['settings']['automation']['actionsTaken']['title'] = "Actions Taken";
$_ADDONLANG['settings']['automation']['actionsTaken']['description'] = "Actions to take when Watchdog detects suspicious files.";
$_ADDONLANG['settings']['automation']['actionsTaken']['docs'] = "";
$_ADDONLANG['settings']['notifications']['recipients']['title'] = "Email";
$_ADDONLANG['settings']['notifications']['recipients']['description'] = "Send notifications to the following email addresses (one per line).";
$_ADDONLANG['settings']['notifications']['recipients']['placeholder'] = "One per line";
$_ADDONLANG['settings']['notifications']['recipients']['docs'] = "";

// DO NOT EDIT/DELETE ANYTHING BELOW THIS LINE
$_ADDONLANG['kt_language'] = basename(__FILE__, '.php');