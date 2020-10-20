<?php
// source: /var/www/html/app/modules/Front/Error4xx/templates/404.latte

use Latte\Runtime as LR;

final class Templateec352698ce extends Latte\Runtime\Template
{
	public $blocks = [
		'content' => 'blockContent',
		'title' => 'blockTitle',
	];

	public $blockTypes = [
		'content' => 'html',
		'title' => 'html',
	];


	public function main(): array
	{
		extract($this->params);
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('content', get_defined_vars());
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	public function blockContent(array $_args): void
	{
		extract($_args);
		$this->renderBlock('title', get_defined_vars());
?>

<p>The page you requested could not be found. It is possible that the address is
	incorrect, or that the page no longer exists. Please use a search engine to find
	what you are looking for.</p>

<p><small>error 404</small></p>
<?php
	}


	public function blockTitle(array $_args): void
	{
		extract($_args);
?><h1>Page Not Found</h1>
<?php
	}

}
