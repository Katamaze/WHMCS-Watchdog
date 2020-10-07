<ul class="nav nav-tabs client-tabs" role="tablist">
	<li class="{if !$smarty.get.view OR $smarty.get.view == 'Dashboard'}active{else}tab{/if}"><a href="{$modulelink}&view=Dashboard"><i class="fad fa-tachometer-alt"></i> {$_ADDONLANG.maintoolbar.dashboard}</a></li>
    <li class="{if $smarty.get.view == 'Whitelist'}active{else}tab{/if}"><a href="{$modulelink}&view=Whitelist"><i class="fad fa-check-square"></i> {$_ADDONLANG.maintoolbar.whitelist}</a></li>
    <li class="{if $smarty.get.view == 'Settings'}active{else}tab{/if}"><a href="{$modulelink}&view=Settings"><i class="fad fa-cogs"></i> {$_ADDONLANG.maintoolbar.settings}</a></li>
</ul>