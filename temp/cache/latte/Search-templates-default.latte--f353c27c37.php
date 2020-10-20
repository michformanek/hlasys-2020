<?php
// source: /var/www/html/app/modules/Front/Search/templates/default.latte

use Latte\Runtime as LR;

final class Templatef353c27c37 extends Latte\Runtime\Template
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
?>

<?php
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('page', get_defined_vars());
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		$this->parentName = '../../templates/@layout.latte';
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	public function blockPage(array $_args): void
	{
		extract($_args);
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
	<h1 class="h2">Výsledky vyhledávání</h1>
</div>

<?php
		/* line 8 */ $_tmp = $this->global->uiControl->getComponent("searchGrid");
		if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
?>
</div>
<?php
	}

}
