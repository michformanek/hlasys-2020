<?php
// source: /var/www/html/app/ui/Navigation/Sidebar/templates/sidebar.latte

use Latte\Runtime as LR;

final class Template0dc87143e5 extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
?>
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
	<div class="sidebar-sticky pt-3">
		<ul class="nav flex-column">
			<li class="nav-item">
				<a class="nav-link" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiPresenter->link("Proposal:unvoted")) ?>">
					<span data-feather="home">
					Neodhlasované návrhy
					</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiPresenter->link("Proposal:vv")) ?>">
					<span data-feather=" file"></span>
					Přehled návrhů - VV
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiPresenter->link("Proposal:so")) ?>">
					<span data-feather=" shopping-cart"></span>
					Přehled návrhů - SO
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiPresenter->link("Proposal:deleted")) ?>">
					<span data-feather=" users"></span>
				Přehled smazaných návrhů
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiPresenter->link("Proposal:mine")) ?>">
					<span data-feather=" bar-chart-2"></span>
				Moje návrhy
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">
					<span data-feather="layers"></span>
					Vložit návrh
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="../../eshop">
					<span data-feather="layers"></span>
					Vložit návrh z eshopu
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiPresenter->link("Changelog:default")) ?>">
					<span data-feather="layers"></span>
					Changelog
				</a>
			</li>
		</ul>
	</div>
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
