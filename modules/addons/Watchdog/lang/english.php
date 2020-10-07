<?php

/*
 * Watchdog - Configuration
 */

$_ADDONLANG['Configuration']['locale'] = 'en_US';
$_ADDONLANG['Configuration']['array']['actionsTaken']['neutralize'] = "Neutralize file";
$_ADDONLANG['Configuration']['array']['actionsTaken']['notify'] = "Notify Administrators";

/*
 * Watchdog - Admin
 */

$_ADDONLANG['maintoolbar']['dashboard'] = "Dashboard";
$_ADDONLANG['maintoolbar']['whitelist'] = "Whitelist";
$_ADDONLANG['maintoolbar']['settings'] = "Settings";

$_ADDONLANG['News']['title']['main'] = "News";
$_ADDONLANG['News']['title']['singular'] = "News";
$_ADDONLANG['News']['descr']['main'] = "Communicate with your customers";
$_ADDONLANG['News']['title']['add'] = "Add News";
$_ADDONLANG['News']['descr']['add'] = "";
$_ADDONLANG['News']['addtitle'] = "Status";
$_ADDONLANG['News']['th']['id'] = "ID";
$_ADDONLANG['News']['th']['packages'] = "Category";
$_ADDONLANG['News']['th']['title'] = "Title";
$_ADDONLANG['News']['th']['created'] = "Created";
$_ADDONLANG['News']['th']['modified'] = "Last Updated";
$_ADDONLANG['News']['th']['scheduled'] = "Scheduled";
$_ADDONLANG['News']['th']['status'] = "Status";
$_ADDONLANG['News']['th']['author'] = "Author";
$_ADDONLANG['News']['add']['title'] = "Add News";
$_ADDONLANG['News']['add']['descr'] = "";
$_ADDONLANG['News']['add']['assistedadd'] = "";
$_ADDONLANG['News']['add']['input']['title'] = "Title";
$_ADDONLANG['News']['add']['input']['seourl'] = '<span data-toggle="tooltip" title="Leave empty to automatically generate one based on title">SEO URL <i class="fas fa-info-circle"></i></span>';
$_ADDONLANG['News']['add']['input']['seourlplaceholder'] = "Optional";
$_ADDONLANG['News']['add']['input']['content'] = "Content";
$_ADDONLANG['News']['add']['input']['description'] = "<a href=\"https://katamaze.com/docs/mercury/45/meta-data\" target=\"_blank\">Meta Description <i class=\"fas fa-info-circle\"></i></a>";
$_ADDONLANG['News']['add']['input']['created'] = "Date";
$_ADDONLANG['News']['add']['input']['scheduled'] = "Publishing schedule";
$_ADDONLANG['News']['add']['input']['status'] = "Status";
$_ADDONLANG['News']['add']['input']['packages'] = "Categories";
$_ADDONLANG['News']['add']['input']['brands'] = '<span data-toggle="tooltip" title="Leave empty to display on all domains/brands">Brands <i class="fas fa-info-circle"></i></span>';
$_ADDONLANG['News']['add']['input']['screenshots'] = "Screenshots";
$_ADDONLANG['News']['add']['btnadd'] = "Add News";
$_ADDONLANG['News']['edit']['title'] = "Edit News";
$_ADDONLANG['News']['edit']['descr'] = "";
$_ADDONLANG['News']['edit']['btnsavechanges'] = "Save Changes";

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

$_ADDONLANG['pagination']['ltc'] = "%1 Records Found, Page %2 of %3";
$_ADDONLANG['pagination']['rtc'] = "Jump to Page:";
$_ADDONLANG['pagination']['go'] = "Go";
$_ADDONLANG['pagination']['applyfilters'] = "Apply Filters";
$_ADDONLANG['pagination']['activefilters'] = "<a href=\"#\" title=\"%1\">Active filters (%2)</a>";
$_ADDONLANG['pagination']['prev'] = "« Previous Page";
$_ADDONLANG['pagination']['next'] = "Next Page »";

$_ADDONLANG['sortables']['actions'] = "Actions";
$_ADDONLANG['sortables']['add'] = "Add";
$_ADDONLANG['sortables']['edit'] = "Edit";
$_ADDONLANG['sortables']['delete'] = "Delete";
$_ADDONLANG['sortables']['order'] = "Order";
$_ADDONLANG['sortables']['addcol'] = "Add Column";
$_ADDONLANG['sortables']['exportcurrentpage'] = "Export current page";
$_ADDONLANG['sortables']['morecolumnstitle'] = "Show more columns";
$_ADDONLANG['sortables']['actionstitle'] = "Actions for this table";
$_ADDONLANG['sortables']['actionsnotavailable'] = "Actions not available in sort mode";
$_ADDONLANG['sortables']['nocolstoadd'] = "No columns to add";
$_ADDONLANG['sortables']['addcolumn'] = "Add column";
$_ADDONLANG['sortables']['edititem'] = "Edit item";

$_ADDONLANG['global']['addonmodules']['description'] = "Mercury is a revolution for WHMCS, a feature-rich platform designed to simplify user interaction. You can manage News, Blog, Docs, Changelog, Development and much more, in one place, quickly and intuitively.";
$_ADDONLANG['global']['addonmodules']['licensekey'] = "License Key";
$_ADDONLANG['global']['addonmodules']['licensekeydescr'] = "Insert the license key that we've sent you via email.";
$_ADDONLANG['global']['select']['noitemselected'] = "Select...";
$_ADDONLANG['global']['select']['selectall'] = "Select all";
$_ADDONLANG['global']['select']['deselectall'] = "Deselect all";
$_ADDONLANG['global']['daterange']['applybutton'] = "Apply";
$_ADDONLANG['global']['daterange']['clearbutton'] = "Clear";
$_ADDONLANG['global']['daterange']['cancelbutton'] = "Cancel";
$_ADDONLANG['global']['daterange']['today'] = "Today";
$_ADDONLANG['global']['daterange']['yesterday'] = "Yesterday";
$_ADDONLANG['global']['daterange']['last7days'] = "Last 7 days";
$_ADDONLANG['global']['daterange']['lastweek'] = "Last week (Mo-Su)";
$_ADDONLANG['global']['daterange']['monthtodate'] = "Month to date";
$_ADDONLANG['global']['daterange']['previousmonth'] = "Previous month";
$_ADDONLANG['global']['daterange']['yeartodate'] = "Year to date";
$_ADDONLANG['global']['btnadd'] = "Add";
$_ADDONLANG['global']['btnsave'] = "Save";
$_ADDONLANG['global']['btnsaveorder'] = "Save Order";
$_ADDONLANG['global']['btncancel'] = "Cancel";
$_ADDONLANG['global']['btngoback'] = "Back";
$_ADDONLANG['global']['btnclose'] = "Close";
$_ADDONLANG['global']['btndeleteselected'] = "Delete Selected";
$_ADDONLANG['global']['yes'] = "Yes";
$_ADDONLANG['global']['no'] = "No";
$_ADDONLANG['global']['none'] = "None";
$_ADDONLANG['global']['datetime']['now'] = "now";
$_ADDONLANG['global']['datetime']['today'] = "today";
$_ADDONLANG['global']['datetime']['tomorrow'] = "tomorrow";
$_ADDONLANG['global']['datetime']['yesterday'] = "yesterday";
$_ADDONLANG['global']['datetime']['year'] = "%1 year";
$_ADDONLANG['global']['datetime']['years'] = "%1 years";
$_ADDONLANG['global']['datetime']['month'] = "%1 month";
$_ADDONLANG['global']['datetime']['months'] = "%1 months";
$_ADDONLANG['global']['datetime']['week'] = "%1 week";
$_ADDONLANG['global']['datetime']['weeks'] = "%1 weeks";
$_ADDONLANG['global']['datetime']['day'] = "%1 day";
$_ADDONLANG['global']['datetime']['days'] = "%1 days";
$_ADDONLANG['global']['datetime']['hour'] = "%1 hour";
$_ADDONLANG['global']['datetime']['hours'] = "%1 hours";
$_ADDONLANG['global']['datetime']['minute'] = "%1 minute";
$_ADDONLANG['global']['datetime']['minutes'] = "%1 minutes";
$_ADDONLANG['global']['datetime']['second'] = "%1 second";
$_ADDONLANG['global']['datetime']['seconds'] = "%1 seconds";
$_ADDONLANG['global']['datetime']['ago'] = "%1 ago";
$_ADDONLANG['global']['datetime']['in'] = "in %1";
$_ADDONLANG['global']['datetime']['morethanaweek'] = "more than a week";
$_ADDONLANG['global']['copytoclipboard'] = "Copy to clipboard";
$_ADDONLANG['global']['copiedtoclipboard'] = "Copied";
$_ADDONLANG['global']['makedefault'] = "Make default";
$_ADDONLANG['global']['hidden'] = "Hidden";
$_ADDONLANG['global']['premiuminvoicedescription'] = "Premium ticket #%ticketid (%title)";
$_ADDONLANG['global']['premiumunpaidtitle'] = "Oops, this Premium ticket is Unpaid";
$_ADDONLANG['global']['premiumunpaiddescr'] = "<a href=\"viewinvoice.php?id=%id\"><strong>Pay it now</strong></a> in order to get Premium priority.";
$_ADDONLANG['global']['badge']['licenseexpiring']['label'] = "";
$_ADDONLANG['global']['badge']['licenseexpiring']['title'] = "Your license is going to expire soon";
$_ADDONLANG['global']['badge']['licenseexpiring']['icon'] = "exclamation-triangle";
$_ADDONLANG['global']['badge']['licenseexpiring']['status'] = "warning";
$_ADDONLANG['global']['badge']['licenseexpiring']['link'] = "addonmodules.php?module=Mercury&sub=Settings&view=Settings";
$_ADDONLANG['global']['badge']['licenseexpired']['label'] = "";
$_ADDONLANG['global']['badge']['licenseexpired']['title'] = "Your license has expired";
$_ADDONLANG['global']['badge']['licenseexpired']['icon'] = "exclamation-triangle";
$_ADDONLANG['global']['badge']['licenseexpired']['status'] = "danger";
$_ADDONLANG['global']['badge']['licenseexpired']['link'] = "addonmodules.php?module=Mercury&sub=Settings&view=Settings";
$_ADDONLANG['global']['titleseoplaceholder'] = "Optimal length less than 60 characters";
$_ADDONLANG['global']['metadescriptionplaceholder'] = "Optimal length 70-155 characters";
$_ADDONLANG['global']['clientareapagetitle'] = " - Page %page";
$_ADDONLANG['global']['readingtime'] = "Reading time";

$_ADDONLANG['form']['toggleon'] = "Enabled";
$_ADDONLANG['form']['toggleoff'] = "Disabled";
$_ADDONLANG['form']['addfiles'] = "Add Files";
$_ADDONLANG['form']['startupload'] = "Start Upload";
$_ADDONLANG['form']['cancelupload'] = "Cancel Upload";
$_ADDONLANG['form']['deleteupload'] = "Delete";
$_ADDONLANG['form']['dropzone'] = "Drop Zone";
$_ADDONLANG['form']['uploadnotes'] = "Notes";
$_ADDONLANG['form']['uploadmaxsize'] = "The maximum file size for uploads is <strong>%1</strong>.";
$_ADDONLANG['form']['uploadmaxfiles'] = "The number of files that are allowed to be uploaded is <strong>%1</strong>.";
$_ADDONLANG['form']['uploadtypes'] = "Only <strong>%1</strong> files are allowed.";
$_ADDONLANG['form']['draganddrop'] = "You can <strong>drag & drop</strong> files from your desktop on the drop zone.";
$_ADDONLANG['form']['unlimitedfiles'] = "unlimited";
$_ADDONLANG['form']['individualdeleteupload'] = "Delete";
$_ADDONLANG['form']['individualstartupload'] = "Start";
$_ADDONLANG['form']['individualcancelupload'] = "Cancel";
$_ADDONLANG['form']['individualerrorupload'] = "Error";
$_ADDONLANG['form']['processingupload'] = "Processing...";
$_ADDONLANG['form']['readdoc'] = "Read more";
$_ADDONLANG['form']['visible'] = "Visible";
$_ADDONLANG['form']['hidden'] = "Hidden";

$_ADDONLANG['alert']['error']['integer']['title'] = "Must be an Integear";
$_ADDONLANG['alert']['error']['integer']['descr'] = "Valid values are 1, 2, 3 etc. No decimals, no letters or spaces.";
$_ADDONLANG['alert']['error']['invalidemail']['title'] = "Invalid email";
$_ADDONLANG['alert']['error']['invalidemail']['descr'] = "One or more email addresses are invalid.";

$_ADDONLANG['translation']['menutitle'] = "Translate";
$_ADDONLANG['translation']['closemenu'] = "Close translate";
$_ADDONLANG['translation']['defaulttranslation'] = "Default";
$_ADDONLANG['translation']['othertranslation'] = "Translation";

$_ADDONLANG['Install']['error']['base64'] = "Error: <strong>base64_encode</strong> and <strong>base64_decode</strong> PHP functions are not enabled on your system. Mercury requires both functions to work. Please, activate them and <strong><a href=\"configaddonmods.php\">retry the installation</a></strong>.";

/*
 * Watchdog - Settings
 */

$_ADDONLANG['settingcategories']['automation'] = "Automation <i class=\"fad fa-robot fa-fw pull-right\"></i>";
$_ADDONLANG['settingcategories']['notifications'] = "Notifications <i class=\"fas fa-envelope-open-text fa-fw pull-right\"></i>";

$_ADDONLANG['settings']['automation']['checkFrequency']['title'] = "Check Frequency";
$_ADDONLANG['settings']['automation']['checkFrequency']['description'] = "Run checksum vrification every certain period of time (in hours).";
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