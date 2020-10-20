<?php
// source: /var/www/html/app/ui/Control/CommentTable/templates/comment_table.latte

use Latte\Runtime as LR;

final class Templateb54d895aa6 extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
?>
<div class="row">
	<div class="panel panel-default">

		<div class="panel-body">
			<ul class="media-list">
<?php
		$iterations = 0;
		foreach ($comments as $comment) {
?>
					<li class="media">
						<div class="media-body">
							<h4 class="media-heading">
								<?php echo LR\Filters::escapeHtmlText($comment->getUser()->getUsername()) /* line 10 */ ?>

								<br>
								<small>
									<?php echo LR\Filters::escapeHtmlText(($this->filters->date)($comment->getCreatedAt(), 'j. n. Y')) /* line 13 */ ?>

								</small>
							</h4>
							<p>
								<?php echo LR\Filters::escapeHtmlText($comment->getText()) /* line 17 */ ?>

							</p>
						</div>
					</li>
					<hr>
<?php
			$iterations++;
		}
?>
		</div>
	</div>
</div>
<?php
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['comment' => '6'], $this->params) as $_v => $_l) {
				trigger_error("Variable \$$_v overwritten in foreach on line $_l");
			}
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
