<?php
// source: /var/www/html/app/modules/Front/Home/templates/default.latte

use Latte\Runtime as LR;

final class Template2051761642 extends Latte\Runtime\Template
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
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	public function blockPage(array $_args): void
	{
		
	}

}
