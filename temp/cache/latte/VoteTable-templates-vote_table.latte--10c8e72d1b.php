<?php
// source: /var/www/html/app/ui/Control/VoteTable/templates/vote_table.latte

use Latte\Runtime as LR;

final class Template10c8e72d1b extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		$iterations = 0;
		foreach ($iterator = $this->global->its[] = new LR\CachingIterator($votes) as $vote) {
			if ($iterator->isFirst()) {
?>
		<table class="table table-sm table-bordered text-center">
		<tbody>
<?php
			}
			if ($iterator->isFirst(7)) {
?>
<tr>
<?php
			}
			if ($iterator->getCounter() - 1 < $positiveCount) {
				?>		<td class="table-success" ><?php echo LR\Filters::escapeHtmlText($vote->getUsername()) /* line 10 */ ?></td>
<?php
			}
			elseif ($iterator->getCounter() - 1 < $negativeCount + $positiveCount) {
				?>		<td class="table-danger" ><?php echo LR\Filters::escapeHtmlText($vote->getUsername()) /* line 12 */ ?></td>
<?php
			}
			elseif ($iterator->getCounter() - 1 < $negativeCount + $positiveCount + $didNotVoteCount) {
				?>		<td class="table-active" ><?php echo LR\Filters::escapeHtmlText($vote->getUsername()) /* line 14 */ ?></td>
<?php
			}
			if ($iterator->isLast(7)) {
				?></tr><?php
			}
?>

<?php
			if ($iterator->isLast()) {
?>
		</tbody>
		</table>
<?php
			}
			$iterations++;
		}
		array_pop($this->global->its);
		$iterator = end($this->global->its);
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['vote' => '1'], $this->params) as $_v => $_l) {
				trigger_error("Variable \$$_v overwritten in foreach on line $_l");
			}
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
