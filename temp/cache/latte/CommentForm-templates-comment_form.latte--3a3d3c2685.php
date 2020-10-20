<?php
// source: /var/www/html/app/ui/Form/CommentForm/templates/comment_form.latte

use Latte\Runtime as LR;

final class Template3a3d3c2685 extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
?>
<hr>
<?php
		/* line 2 */
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $this->global->formsStack[] = $this->global->uiControl["form"], ['class'=>'ajax']);
?>

	<div class="form-group">
		<?php echo end($this->global->formsStack)["text"]->getControl()->addAttributes(['class'=>"form-control textarea-autosize", 'rows'=>5, 'placeholder'=>"Sem zadejte text komentáře..."]) /* line 4 */ ?>

		<i class="form-group__bar"></i>
	</div>
	<p><?php echo end($this->global->formsStack)["send"]->getControl()->addAttributes(['class'=>"btn btn-success"]) /* line 7 */ ?></p>
<?php
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack));
?>

<?php
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
