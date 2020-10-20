<?php
// source: /var/www/html/app/modules/Base/templates/@layout.latte

use Latte\Runtime as LR;

final class Templateb97ca7e906 extends Latte\Runtime\Template
{
	public $blocks = [
		'title' => 'blockTitle',
		'head' => 'blockHead',
		'main' => 'blockMain',
	];

	public $blockTypes = [
		'title' => 'html',
		'head' => 'html',
		'main' => 'html',
	];


	public function main(): array
	{
		extract($this->params);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 7 */ ?>/favicon.ico">

	<!-- Seo -->
	<title><?php
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('title', get_defined_vars(), function ($s, $type) {
			$_fi = new LR\FilterInfo($type);
			return LR\Filters::convertTo($_fi, 'html', $this->filters->filterContent('trim', $_fi, $this->filters->filterContent('striphtml', $_fi, $s)));
		});
?> | HLASYS</title>

	<!-- Meta -->
<?php
		if (isset($this->blockQueue["description"])) {
			?>	<meta name="description" content="<?php
			$this->renderBlock('description', $this->params, 'htmlAttr');
?>">
<?php
		}
		if (isset($this->blockQueue["keywords"])) {
			?>	<meta name="keywords" content="<?php
			$this->renderBlock('keywords', $this->params, 'htmlAttr');
?>">
<?php
		}
?>

	<?php
		$this->renderBlock('head', get_defined_vars());
?>
</head>
<body>
<?php
		$this->renderBlock('main', get_defined_vars());
?>
</body>
</html>
<?php
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	public function blockTitle(array $_args): void
	{
		
	}


	public function blockHead(array $_args): void
	{
		
	}


	public function blockMain(array $_args): void
	{
		extract($_args);
		$this->renderBlock('content', $this->params, 'html');
		
	}

}
