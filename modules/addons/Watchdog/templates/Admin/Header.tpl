<script type="text/javascript" src="../modules/addons/Watchdog/templates/Admin/js/jquery.checkboxes.js"></script>
<link href="../modules/addons/Watchdog/templates/Admin/css/style.css" rel="stylesheet" />
{include file="includes/Toolbar.tpl"}
<div class="tab-content client-tabs">
	<div class="tab-pane active">
		{if $versionchecker}
		<div class="alert alert-warning">
			<h4>{$_ADDONLANG.alert.moduleoutdatedtitle}</h4>
			<table style="width: auto;margin: 15px 0;" class="text-center table">
				<thead>
					<tr>
						<th class="text-center text-warning" style="padding: 0 20px; border-color: #ac976e;">{$_ADDONLANG.alert.moduleoutdatedyourversion}</th>
						<th class="text-center text-warning" style="padding: 0 20px; border-color: #ac976e;">{$_ADDONLANG.alert.moduleoutdatedlatestversion}</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td style="border-color: #ac976e;"><h1 class="text-warning" style="margin: 4px;"><i class="fa fa-fw fa-exclamation-triangle"></i> {$conf->module->version}</h1><small class="text-warning" style="opacity: .7;"><a href="{$modulelink}&view={$smarty.get.view}&checkversion=HG">{$_ADDONLANG.alert.moduleoutdatedrechecknow}</a></small></td>
						<td style="border-color: #ac976e;"><h1 class="text-warning" style="margin: 4px;"><strong><i class="fa fa-check-circle"></i> {$conf->module->latestversion}</strong></h1><small class="text-warning" style="opacity: .7;" title="{$_ADDONLANG.alert.moduleoutdatedreleasedate}">{$conf->module->latestversiondate}</small></td>
					</tr>
					<tr>
						<td colspan="2" style="border-color: #ac976e;">
							<p class="small text-warning" style="margin: 0;">{$_ADDONLANG.alert.moduleoutdatedchangelog}</p>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		{/if}