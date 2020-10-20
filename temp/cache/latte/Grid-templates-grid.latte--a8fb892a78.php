<?php
// source: /var/www/html/app/ui/Control/Grid/templates/grid.latte

use Latte\Runtime as LR;

final class Templatea8fb892a78 extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		/* line 1 */ $_tmp = $this->global->uiControl->getComponent("data");
		if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
