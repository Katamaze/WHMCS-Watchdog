{include file="includes/Alerts.tpl"}
<div class="collapse-group">
	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
	{foreach $_ADDONLANG.settings as $catvar=>$category}
	<div class="panel panel-default">
    	<div class="panel-heading" role="tab" id="heading{$category@iteration}">
        	<h4 class="panel-title">
            	<a {if $smarty.get.heading!=$category@iteration}class="collapsed"{/if} role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{$category@iteration}" aria-expanded="false" aria-controls="collapse{$category@iteration}">
            		{$_ADDONLANG.settingcategories.$catvar}
            	</a>
			</h4>
        </div>
        <div id="collapse{$category@iteration}" class="panel-collapse collapse{if $smarty.get.heading==$category@iteration} in{/if}" role="tabpanel" aria-labelledby="heading{$category@iteration}">
        	<div class="panel-body">
        		{if $catvar == 'demos' AND $smarty.get.throw == 'timeerror'}
				<div class="alert alert-danger">
					<h4><i class="fa fa-exclamation-circle fa-lg fa-fw"></i> <strong>{$_ADDONLANG.settings.alert.timeerror.title}</strong></h4>
					<p>{$_ADDONLANG.settings.alert.timeerror.descr}</p>
				</div>
				{/if}
                <table class="form">
                	<tbody>
                        {foreach from=$category name=option item=option key=setting}
                        {if $setting|in_array:$conf->conditionalsettings->geolocation->geolocation_enable AND !$items->geolocation->geolocation_enable.value}{continue}{/if}
                        <tr>
                        	<td class="fieldlabel lined text-left">
                        		<h3><strong>{$_ADDONLANG.settings.$catvar.$setting.title}</strong></h3>
                        		{if $setting|in_array:['support_premiumprice','support_emergencyprice']}<p class="kata">{$_ADDONLANG.settings.$catvar.$setting.description|replace:'%currency':$conf->whmcs->currencies->{$conf->whmcs->defaultcurrency}->code}</p>
                        		{else}<p class="kata">{$_ADDONLANG.settings.$catvar.$setting.description}</p>{/if}
                        	</td>
                            <td class="fieldarea" style="width:250px; text-align:center;">
	                            <form action="{$modulelink}&view=Settings" method="post">
	                                <input type="hidden" name="category" value="{$catvar}">
	                                <input type="hidden" name="setting" value="{$setting}">
	                                <input type="hidden" name="heading" value="{$category@iteration}">
	                                {if $setting == 'checkFrequency'}
	                                <input type="number" class="form-control input-300" name="value" value="{$data.checkFrequency}" placeholder="{$_ADDONLANG.settings.$catvar.$setting.placeholder}" min="1" step="1" max="2160">
	                                {elseif $setting == 'actionsTaken'}
	                                <select class="form-control" name="value[]" size="3" multiple="true">
	                                	<option value="neutralize" {if $data.actionsTaken.neutralize}selected="selected"{/if}>{$_ADDONLANG.Configuration.array.actionsTaken.neutralize}</option>
	                                	<option value="notify" {if $data.actionsTaken.notify}selected="selected"{/if}>{$_ADDONLANG.Configuration.array.actionsTaken.notify}</option>
	                                </select>
	                                {elseif $setting == 'recipients'}
	                                <textarea class="form-control" rows="2" name="value" placeholder="{$_ADDONLANG.settings.$catvar.$setting.placeholder}">{$data.recipients}</textarea>
	                                {/if}
	                            </td>
	                            <td class="fieldarea" style="text-align:center;">
	                            	<button type="submit" class="kata btn btn-primary"><i class="fad fa-save"></i></button>
	                            </td>
	                            <td class="fieldarea" style="text-align:center;">
	                                {if $_ADDONLANG.settings.$catvar.$setting.docs}<a class="kata btn btn-primary btn-sm" value="Input Button" href="{$_ADDONLANG.settings.$catvar.$setting.docs}"><i class="fa fa-info" aria-hidden="true"></i></a>{/if}
	                            </form>
                            </td>
                        </tr>
                        {/foreach}
                    </tbody>
                </table>
        	</div>
		</div>
	</div>
	{/foreach}
	</div>
</div>