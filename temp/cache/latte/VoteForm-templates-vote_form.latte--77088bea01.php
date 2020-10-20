<?php
// source: /var/www/html/app/ui/Form/VoteForm/templates/vote_form.latte

use Latte\Runtime as LR;

final class Template77088bea01 extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
?>
<div class="text-center">
<?php
		if ($proposal->isDeleted()) {
?>
		U smazaných návrhů nelze hlasovat
<?php
		}
		elseif ($vote == null) {
?>
		Pro tento návrh jste ještě nehlasoval. <br><br>
		<a class=" btn btn-success btn--icon waves-effect ajax" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("positive")) ?>"> Pro </a>
		<a class=" btn btn-danger btn--icon waves-effect ajax" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("negative")) ?>"> Proti </a>
<?php
		}
		elseif ($vote->isPositive()) {
?>
		Tento návrh jste schválil, ale můžete si to ještě rozmyslet.<br><br>
		<a class="btn btn-danger btn--icon waves-effect ajax" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("negative")) ?>"> Proti </a>
<?php
		}
		else {
?>
		Tento návrh jste zamítl, můžete ho ještě schválit.<br><br>
		<a class="btn btn-success btn--icon waves-effect ajax" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("positive")) ?>"> Pro </a>
<?php
		}
?>
</div>
<?php
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
