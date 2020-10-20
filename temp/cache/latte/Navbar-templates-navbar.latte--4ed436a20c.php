<?php
// source: /var/www/html/app/ui/Navigation/Navbar/templates/navbar.latte

use Latte\Runtime as LR;

final class Template4ed436a20c extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
?>
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
	<a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">HLASYS</a>
	<button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
			data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Rozbalit menu">
		<span class="navbar-toggler-icon"></span>
	</button>
<?php
		$form = $_form = $this->global->formsStack[] = $this->global->uiControl["searchForm"];
		?>	<form class="w-100"<?php echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin(end($this->global->formsStack), ['class' => null], false) ?>>
		<input class="form-control form-control-dark w-100" type="text" placeholder="Hledat"
							   aria-label="Search"<?php
		$_input = end($this->global->formsStack)["search"];
		echo $_input->getControlPart()->addAttributes(['class' => null, 'type' => null, 'placeholder' => null, 'aria-label' => null])->attributes() ?>>
<?php
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack), false);
?>	</form>

	<ul class="navbar-nav px-3">
	</ul>
</nav>
<?php
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
