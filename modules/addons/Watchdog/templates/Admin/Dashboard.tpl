{include file="includes/Alerts.tpl"}
<div class="collapse-group">
	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
	{foreach $data.fileSystem as $catvar=>$category}
	<div class="panel panel-default">
    	<div class="panel-heading" role="tab" id="heading{$category@iteration}">
        	<h4 class="panel-title">
            	<a {if $smarty.get.heading!=$category@iteration}class="collapsed"{/if} role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{$category@iteration}" aria-expanded="false" aria-controls="collapse{$category@iteration}">
            		{$_ADDONLANG.Configuration.array.auditstatus[$catvar].title}
            		<span class="badge badge-warning">
            			<strong>{$data.statistics[$catvar]}</strong>
            		</span>
            		<span class="pull-right">
            			<small>{$_ADDONLANG.Configuration.array.auditstatus[$catvar].example}</small>
            			{$_ADDONLANG.Configuration.array.auditstatus[$catvar].icon}
            		</span>
            	</a>
			</h4>
        </div>
        <div id="collapse{$category@iteration}" class="panel-collapse collapse{if $smarty.get.heading==$category@iteration} in{/if}" role="tabpanel" aria-labelledby="heading{$category@iteration}">
        	<div class="panel-body">
        		<div class="pull-left">
        			<a href="#checkboxes{$catvar}" data-toggle="checkboxes" data-action="check" class="btn btn-sm btn-success"><i class="fad fa-check-square fa-fw"></i> {$_ADDONLANG.global.btn.checkall}</a>
        			<a href="#checkboxes{$catvar}" data-toggle="checkboxes" data-action="uncheck" class="btn btn-sm btn-danger"><i class="fad fa-square fa-fw"></i> {$_ADDONLANG.global.btn.uncheckall}</a>
        			<a href="#checkboxes{$catvar}" data-toggle="checkboxes" data-action="toggle" class="btn btn-sm btn-info"><i class="fad fa-sync-alt fa-fw"></i> {$_ADDONLANG.global.btn.invertselection}</a>
        		</div>
        		<div class="pull-right">
        			<span class="clientsummaryactions">
        				<i class="fad fa-smile-wink fa-fw"></i> Hold <code>SHIFT</code> for range selection
        			</span>
        		</div>
        		<div class="tablebg" style="padding-top:30px">
	                <table class="datatable" width="100%" cellspacing="1" cellpadding="3" border="0" id="checkboxes{$catvar}" data-toggle="checkboxes" data-range="true">
	                	<tbody>
	                		<tr>
	                			<th width="20"></th>
	                			<th>{$_ADDONLANG.Dashboard.th.path}</th>
	                			<th width="20"></th>
	                		</tr>
	                        {foreach from=$data.fileSystem[$catvar] name=file item=file}
	                        <tr>
	                        	<td class="text-center">
	                        		<input type="checkbox" id="file-{$catvar}-{$file@iteration}">
	                        	</td>
	                        	<td>
	                        		<label for="file-{$catvar}-{$file@iteration}">{$file->path}</label>
	                        	</td>
	                            <td>
	                                <a href="#" class="btn btn-xs btn-info inspect" data-toggle="tooltip" title="{$_ADDONLANG.Dashboard.hover.inspect}"><i class="fad fa-search fa-fw"></i></a>
								</td>
	                        </tr>
	                        {/foreach}
	                    </tbody>
	                </table>
	                <div class="pull-right">
		                <a href="addonmodules.php?module=Watchdog&status' + data.status + '&witelist=' + data.path + '" class="btn btn-success">{$_ADDONLANG.global.btn.whitelist}</a>
		                <a href="addonmodules.php?module=Watchdog&status' + data.status + '&neutralize=' + data.path + '" class="btn btn-warning">{$_ADDONLANG.global.btn.neutralize}</a>
		                <a href="addonmodules.php?module=Watchdog&status' + data.status + '&remove=' + data.path + '" class="btn btn-danger">{$_ADDONLANG.global.btn.remove}</a>
	                </div>
                </div>
        	</div>
		</div>
	</div>
	{/foreach}
	</div>
</div>

<script>
$(document).on('click', '.inspect', function(e){
	e.preventDefault();
	var path = $(e.currentTarget).parent().parent().find('td:nth-child(2) > label').text();

	$.post('', { path: path, inspect:true }).done(function( data, status )
	{
		console.log(data);
		if(status == "success")
		{
			$("#modalAjax .modal-title").html('<i class="fad fa-folder-tree fa-fw"></i> <code style="font-size: 65%;">' + data.path + '</code>');
		    $("#modalAjax .modal-body").html('<div class="container col-md-12"><div class="row"><div class="col-md-6 text-center"><div class="panel panel-default"><div class="panel-body"><h1>{$_ADDONLANG.Dashboard.modal.detected}</h1><p><i class="fad fa-barcode-read fa-5x text-warning"></i></p><p><small>' + data.detected + '</small></p></div></div></div><div style="z-index: 1000; position: absolute; left: 50%; right: 50%; margin-top: 55px; margin-left: -30px; width: 20px; text-align: center;"><i class="fad fa-not-equal fa-5x"></i></div><div class="col-md-6 text-center"><div class="panel panel-default"><div class="panel-body"><h1>{$_ADDONLANG.Dashboard.modal.expected}</h1><p><i class="fad fa-barcode-read fa-5x text-success"></i></p><p><small>' + data.expected + '</small></p></div></div></div></div><div class="row"><div class="col-md-12"><textarea class="form-control" name="notes" rows="4" placeholder="{$_ADDONLANG.Dashboard.modal.notesplaceholder}"></textarea></div></div></div><div class="row"><div class="col-md-12 text-right wd-actions"><a href="addonmodules.php?module=Watchdog&status' + data.status + '&witelist=' + data.path + '" class="btn btn-success">{$_ADDONLANG.global.btn.whitelist}</a><a href="addonmodules.php?module=Watchdog&status' + data.status + '&neutralize=' + data.path + '" class="btn btn-warning">{$_ADDONLANG.global.btn.neutralize}</a><a href="addonmodules.php?module=Watchdog&status' + data.status + '&remove=' + data.path + '" class="btn btn-danger">{$_ADDONLANG.global.btn.remove}</a></div></div>');
		    $('#modalAjax .loader').hide();
		    $('#modalAjax .modal-submit').hide();
		    $("#modalAjax").modal('show');
		}
	})
})
</script>