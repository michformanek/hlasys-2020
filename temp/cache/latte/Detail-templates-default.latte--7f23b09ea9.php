<?php
// source: /var/www/html/app/modules/Front/Detail/templates/default.latte

use Latte\Runtime as LR;

final class Template7f23b09ea9 extends Latte\Runtime\Template
{
	public $blocks = [
		'page' => 'blockPage',
	];

	public $blockTypes = [
		'page' => 'html',
	];


	public function main(): array
	{
		extract($this->params);
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('page', get_defined_vars());
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	public function blockPage(array $_args): void
	{
		extract($_args);
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2"><?php echo LR\Filters::escapeHtmlText($proposal->getTitle()) /* line 3 */ ?></h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
			<button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
		</div>
	</div>
</div>

<div>
	<?php echo LR\Filters::escapeHtmlText($proposal->getText()) /* line 13 */ ?>

</div>
<hr>
<div>
<?php
		/* line 17 */ $_tmp = $this->global->uiControl->getComponent("voteForm");
		if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
?>
</div>
<hr class="pb-2">
<div>
<?php
		/* line 21 */ $_tmp = $this->global->uiControl->getComponent("voteTable");
		if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
?>
</div>
<hr class="pb-2">
<div>
<?php
		/* line 25 */ $_tmp = $this->global->uiControl->getComponent("commentTable");
		if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
?>
</div>
<div>
<?php
		/* line 28 */ $_tmp = $this->global->uiControl->getComponent("commentForm");
		if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
?>
</div>
<?php
	}

}
