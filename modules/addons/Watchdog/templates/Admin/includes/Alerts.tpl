{if $smarty.get.error}
<div class="alert alert-danger">
	<h4><i class="fa fa-exclamation-circle fa-lg fa-fw"></i> <strong>{$_ADDONLANG.alert.error[$smarty.get.error].title}</strong></h4>
	<p>{$_ADDONLANG.alert.error[$smarty.get.error].descr}</p>
</div>
{/if}