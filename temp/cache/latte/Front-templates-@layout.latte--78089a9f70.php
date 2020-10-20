<?php
// source: /var/www/html/app/modules/Front/templates/@layout.latte

use Latte\Runtime as LR;

final class Template78089a9f70 extends Latte\Runtime\Template
{
	public $blocks = [
		'head' => 'blockHead',
		'main' => 'blockMain',
	];

	public $blockTypes = [
		'head' => 'html',
		'main' => 'html',
	];


	public function main(): array
	{
		extract($this->params);
?>

<?php
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('head', get_defined_vars());
?>

<?php
		$this->renderBlock('main', get_defined_vars());
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		$this->parentName = '../../Base/templates/@layout.latte';
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	public function blockHead(array $_args): void
	{
		extract($_args);
?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" defer>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/happy-inputs@2.0.4/src/happy.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ublaboo-datagrid@6.2.13/assets/datagrid.css">

	<!-- Use this css for ajax spinners -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ublaboo-datagrid@6.2.13/assets/datagrid-spinners.css">

	<!-- Include this css when using FilterMultiSelect (silviomoreto.github.io/bootstrap-select) -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.15/dist/css/bootstrap-select.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


	<link rel="stylesheet" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 18 */ ?>/assets/front.css" defer>
	<script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 19 */ ?>/assets/front.js" defer></script>
<?php
	}


	public function blockMain(array $_args): void
	{
		extract($_args);
?>

<?php
		/* line 24 */ $_tmp = $this->global->uiControl->getComponent("navbar");
		if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
?>
<div class="container-fluid">
  <div class="row">
<?php
		/* line 27 */ $_tmp = $this->global->uiControl->getComponent("sidebar");
		if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<?php
		$this->renderBlock('page', $this->params, 'html');
?>
    </main>
  </div>
</div>

	<script src="https://cdn.jsdelivr.net/npm/happy-inputs@2.1.0/src/nomodule-es5-fallback.js"></script>
	<script>
		var happy = new Happy;

		happy.init();
	</script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-ui-sortable@1.0.0/jquery-ui.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/nette.ajax.js@2.3.0/nette.ajax.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/ublaboo-datagrid@6.2.13/assets/datagrid.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/nette-forms@3.0.4/src/assets/netteForms.min.js"></script>

		<script src="https://cdn.jsdelivr.net/npm/ublaboo-datagrid@6.2.13/assets/datagrid-instant-url-refresh.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/ublaboo-datagrid@6.2.13/assets/datagrid-spinners.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.15/dist/js/bootstrap-select.js"></script>

<script>
$(function () {
	$.nette.init();
});
</script>
<?php
	}

}
