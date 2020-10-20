<?php
// source: /var/www/html/app/ui/Control/Grid/templates/grid_template.latte

use Latte\Runtime as LR;

final class Templateda1da17159 extends Latte\Runtime\Template
{
	public $blocks = [
		'datagrid-class' => 'blockDatagrid_class',
		'_grid' => 'blockGrid',
		'_gridSnippets' => 'blockGridSnippets',
		'outer-filters' => 'blockOuter_filters',
		'icon-filter' => 'blockIcon_filter',
		'table-class' => 'blockTable_class',
		'data' => 'blockData',
		'_table' => 'blockTable',
		'header' => 'blockHeader',
		'group-actions' => 'blockGroup_actions',
		'group_actions' => 'blockGroup_actions_57877',
		'exports' => 'blockExports',
		'_exports' => 'blockExports_89404',
		'settings' => 'blockSettings',
		'icon-gear' => 'blockIcon_gear',
		'icon-checked' => 'blockIcon_checked',
		'icon-unchecked' => 'blockIcon_unchecked',
		'icon-eye' => 'blockIcon_eye',
		'icon-repeat' => 'blockIcon_repeat',
		'header-column-row' => 'blockHeader_column_row',
		'_thead-group-action' => 'blockThead_group_action',
		'icon-sort-up' => 'blockIcon_sort_up',
		'icon-sort-down' => 'blockIcon_sort_down',
		'icon-sort' => 'blockIcon_sort',
		'icon-caret-down' => 'blockIcon_caret_down',
		'icon-eye-slash' => 'blockIcon_eye_slash',
		'icon-remove' => 'blockIcon_remove',
		'header-filters' => 'blockHeader_filters',
		'tbody' => 'blockTbody',
		'_tbody' => 'blockTbody_da252',
		'_items' => 'blockItems',
		'icon-arrows-v' => 'blockIcon_arrows_v',
		'noItems' => 'blockNoItems',
		'tfoot' => 'blockTfoot',
		'_pagination' => 'blockPagination',
		'pagination' => 'blockPagination_fe7cd',
		'inlineAddRow' => 'blockInlineAddRow',
		'columnSummary' => 'blockColumnSummary',
		'_summary' => 'blockSummary',
		'columnsSummary' => 'blockColumnsSummary',
		'aggregationFunctions' => 'blockAggregationFunctions',
		'column-header' => 'blockColumn_header',
		'column-value' => 'blockColumn_value',
	];

	public $blockTypes = [
		'datagrid-class' => 'html',
		'_grid' => 'html',
		'_gridSnippets' => 'html',
		'outer-filters' => 'html',
		'icon-filter' => 'html',
		'table-class' => 'html',
		'data' => 'html',
		'_table' => 'html',
		'header' => 'html',
		'group-actions' => 'html',
		'group_actions' => 'html',
		'exports' => 'html',
		'_exports' => 'html',
		'settings' => 'html',
		'icon-gear' => 'html',
		'icon-checked' => 'html',
		'icon-unchecked' => 'html',
		'icon-eye' => 'html',
		'icon-repeat' => 'html',
		'header-column-row' => 'html',
		'_thead-group-action' => 'html',
		'icon-sort-up' => 'html',
		'icon-sort-down' => 'html',
		'icon-sort' => 'html',
		'icon-caret-down' => 'html',
		'icon-eye-slash' => 'html',
		'icon-remove' => 'html',
		'header-filters' => 'html',
		'tbody' => 'html',
		'_tbody' => 'html',
		'_items' => 'html',
		'icon-arrows-v' => 'html',
		'noItems' => 'html',
		'tfoot' => 'html',
		'_pagination' => 'html',
		'pagination' => 'html',
		'inlineAddRow' => 'html',
		'columnSummary' => 'html',
		'_summary' => 'html',
		'columnsSummary' => 'html',
		'aggregationFunctions' => 'html',
		'column-header' => 'html',
		'column-value' => 'html',
	];


	public function main(): array
	{
		extract($this->params);
		?><div class="<?php
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('datagrid-class', get_defined_vars(), function ($s, $type) {
			$_fi = new LR\FilterInfo($type);
			return LR\Filters::convertTo($_fi, 'htmlAttr', $s);
		});
		?>" style="padding: 0" data-refresh-state="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("refreshState!")) ?>">
	<div<?php echo ' id="' . htmlspecialchars($this->global->snippetDriver->getHtmlId('grid')) . '"' ?>>
<?php $this->renderBlock('_grid', $this->params) ?>
	</div>
</div>












<?php
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['f' => '42', 'form_control' => '78', 'toolbar_button' => '97', 'export' => '101', 'v_key' => '114', 'visibility' => '114', 'key' => '144, 200, 252, 286, 295, 421, 469, 482', 'column' => '144, 200, 252, 286, 421, 469, 482', 'inlineEditControl' => '260', 'action' => '295', 'row' => '242', 'inlineAddControl' => '429'], $this->params) as $_v => $_l) {
				trigger_error("Variable \$$_v overwritten in foreach on line $_l");
			}
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	public function blockDatagrid_class(array $_args): void
	{
		extract($_args);
		?>datagrid datagrid-<?php
		echo LR\Filters::escapeHtmlAttr($control->getFullName()) /* line 17 */;
	}


	public function blockGrid(array $_args): void
	{
		extract($_args);
		$this->global->snippetDriver->enter("grid", "static");
		?>	<?php
		$this->renderBlock('_gridSnippets', $this->params);
		$this->global->snippetDriver->leave();
		
	}


	public function blockGridSnippets(array $_args): void
	{
		extract($_args);
		$this->global->snippetDriver->enter("gridSnippets", "area");
		?>		<?php
		/* line 20 */
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $this->global->formsStack[] = $this->global->uiControl["filter"], ['class' => 'ajax']);
?>

<?php
		if ($control->hasOuterFilterRendering()) {
			$this->renderBlock('outer-filters', get_defined_vars());
		}
		$this->renderBlock('data', get_defined_vars());
		?>		<?php
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack));
?>

<?php
		$this->global->snippetDriver->leave();
		
	}


	public function blockOuter_filters(array $_args): void
	{
		extract($_args);
		if ($control->hasCollapsibleOuterFilters()) {
?>					<div class="row text-right datagrid-collapse-filters-button-row">
						<div class="col-sm-12">
							<button class="btn btn-xs btn-primary" type="button" data-toggle="collapse" data-target="#datagrid-<?php
			echo LR\Filters::escapeHtmlAttr($control->getFullName()) /* line 25 */ ?>-row-filters">
<?php
			$this->renderBlock('icon-filter', get_defined_vars());
			?> <?php echo LR\Filters::escapeHtmlText(($this->filters->translate)('ublaboo_datagrid.show_filter')) /* line 26 */ ?>

							</button>
						</div>
					</div>
<?php
		}
?>

<?php
		if ($control->hasCollapsibleOuterFilters() && !$filter_active) {
			$filter_row_class = 'row-filters collapse';
		}
		elseif ($filter_active) {
			$filter_row_class = 'row-filters collapse in show';
		}
		else {
			$filter_row_class = 'row-filters';
		}
		?>					<div class="<?php echo LR\Filters::escapeHtmlAttr($filter_row_class) /* line 38 */ ?>" id="datagrid-<?php
		echo LR\Filters::escapeHtmlAttr($control->getFullName()) /* line 38 */ ?>-row-filters">
						<div class="row">
<?php
		$i = 0;
		$filterColumnsClass = 'col-sm-' . (12 / $control->getOuterFilterColumnsCount());
		$iterations = 0;
		foreach ($iterator = $this->global->its[] = new LR\CachingIterator($filters) as $f) {
			?>							<div class="datagrid-row-outer-filters-group <?php echo LR\Filters::escapeHtmlAttr($filterColumnsClass) /* line 42 */ ?>">
								
<?php
			$filter_block = 'filter-' . $f->getKey();
			$filter_type_block = 'filtertype-' . $f->getType();
?>

<?php
			if (isset($this->blockQueue["$filter_block"])) {
				$this->renderBlock($filter_block, ['filter' => $f, 'input' => $form['filter'][$f->getKey()], 'outer' => TRUE] + $this->params, 'html');
			}
			else {
				if (isset($this->blockQueue["$filter_type_block"])) {
					$this->renderBlock($filter_type_block, ['filter' => $f, 'input' => $form['filter'][$f->getKey()], 'outer' => TRUE] + $this->params, 'html');
				}
				else {
					/* line 55 */
					$this->createTemplate($f->getTemplate(), ['filter' => $f, 'input' => $form['filter'][$f->getKey()], 'outer' => TRUE] + $this->params, 'include')->renderToContentType('html');
				}
			}
			$i = $i+1;
?>
							</div>
<?php
			$iterations++;
		}
		array_pop($this->global->its);
		$iterator = end($this->global->its);
		if (!$control->hasAutoSubmit()) {
?>							<div class="col-sm-12">
								<div class="text-right datagrid-manual-submit">
									<?php
			$_input = is_object($filter['filter']['submit']) ? $filter['filter']['submit'] : end($this->global->formsStack)[$filter['filter']['submit']];
			echo $_input->getControl() /* line 62 */ ?>

								</div>
							</div>
<?php
		}
?>
						</div>
					</div>
<?php
	}


	public function blockIcon_filter(array $_args): void
	{
		extract($_args);
		?>								<i class="<?php echo LR\Filters::escapeHtmlAttr($iconPrefix) /* line 26 */ ?>filter"></i><?php
	}


	public function blockTable_class(array $_args): void
	{
		?>table table-hover table-striped table-bordered table-sm<?php
	}


	public function blockData(array $_args): void
	{
		extract($_args);
		?>			<table class="<?php
		$this->renderBlock('table-class', get_defined_vars(), function ($s, $type) {
			$_fi = new LR\FilterInfo($type);
			return LR\Filters::convertTo($_fi, 'htmlAttr', $s);
		});
		?>"<?php echo ' id="' . htmlspecialchars($this->global->snippetDriver->getHtmlId('table')) . '"' ?>>
<?php $this->renderBlock('_table', $this->params) ?>
			</table>
<?php
		
	}


	public function blockTable(array $_args): void
	{
		extract($_args);
		$this->global->snippetDriver->enter("table", "static");
		$this->renderBlock('header', get_defined_vars());
?>

<?php
		$this->renderBlock('tbody', get_defined_vars());
		$this->renderBlock('tfoot', get_defined_vars());
		$this->global->snippetDriver->leave();
		
	}


	public function blockHeader(array $_args): void
	{
		extract($_args);
?>				<thead>
<?php
		$this->renderBlock('group-actions', get_defined_vars());
		$this->renderBlock('header-column-row', get_defined_vars());
		$this->renderBlock('header-filters', get_defined_vars());
?>
				</thead>
<?php
	}


	public function blockGroup_actions(array $_args): void
	{
		extract($_args);
		if ($hasGroupActions || $exports || $toolbarButtons || $control->canHideColumns() || $inlineAdd) {
?>					<tr class="row-group-actions">
						<th colspan="<?php echo LR\Filters::escapeHtmlAttr($control->getColumnsCount()) /* line 72 */ ?>" class="ublaboo-datagrid-th-form-inline">
<?php
			if ($hasGroupActions) {
				$this->renderBlock('group_actions', get_defined_vars());
			}
?>

<?php
			if ($control->canHideColumns() || $inlineAdd || $exports || $toolbarButtons) {
?>							<div class="datagrid-toolbar">
<?php
				if ($toolbarButtons) {
?>								<span>
									<?php
					$iterations = 0;
					foreach ($toolbarButtons as $toolbar_button) {
						echo LR\Filters::escapeHtmlText($toolbar_button->renderButton()) /* line 97 */;
						$iterations++;
					}
?>

								</span>
<?php
				}
?>

<?php
				$this->renderBlock('exports', get_defined_vars());
?>

<?php
				$this->renderBlock('settings', get_defined_vars());
?>
							</div>
<?php
			}
?>
						</th>
					</tr>
<?php
		}
		
	}


	public function blockGroup_actions_57877(array $_args): void
	{
		extract($_args);
?>
									<span class="datagrid-group-action-title">
										<?php echo LR\Filters::escapeHtmlText(($this->filters->translate)('ublaboo_datagrid.group_actions')) /* line 76 */ ?>:
									</span>
<?php
		$iterations = 0;
		foreach ($filter['group_action']->getControls() as $form_control) {
			if ($form_control instanceof \Nette\Forms\Controls\SubmitButton && $form_control->getName() === 'submit') {
				?>											<?php
				$_input = is_object($form_control) ? $form_control : end($this->global->formsStack)[$form_control];
				echo $_input->getControl()->addAttributes(['class' => 'btn btn-primary btn-sm', 'disabled' => TRUE]) /* line 80 */ ?>

<?php
			}
			elseif ($form_control instanceof \Nette\Forms\Controls\SubmitButton) {
				?>											<?php
				$_input = is_object($form_control) ? $form_control : end($this->global->formsStack)[$form_control];
				echo $_input->getControl()->addAttributes(['disabled' => TRUE]) /* line 82 */ ?>

<?php
			}
			elseif ($form_control->getName() == 'group_action') {
				?>											<?php
				$_input = is_object($form_control) ? $form_control : end($this->global->formsStack)[$form_control];
				echo $_input->getControl()->addAttributes(['class' => 'form-control input-sm form-control-sm', 'disabled' => TRUE]) /* line 84 */ ?>

<?php
			}
			else {
				?>											<?php
				$_input = is_object($form_control) ? $form_control : end($this->global->formsStack)[$form_control];
				echo $_input->getControl() /* line 86 */ ?>

<?php
			}
			$iterations++;
		}
		if ($control->shouldShowSelectedRowsCount()) {
?>
										<span class="datagrid-selected-rows-count"></span>
<?php
		}
		
	}


	public function blockExports(array $_args): void
	{
		extract($_args);
		if ($exports) {
			?>								<span class="datagrid-exports"<?php echo ' id="' . htmlspecialchars($this->global->snippetDriver->getHtmlId('exports')) . '"' ?>>
<?php $this->renderBlock('_exports', $this->params) ?>
								</span>
<?php
		}
		
	}


	public function blockExports_89404(array $_args): void
	{
		extract($_args);
		$this->global->snippetDriver->enter("exports", "static");
		?>									<?php
		$iterations = 0;
		foreach ($exports as $export) {
			echo LR\Filters::escapeHtmlText($export->render()) /* line 101 */;
			$iterations++;
		}
?>

<?php
		$this->global->snippetDriver->leave();
		
	}


	public function blockSettings(array $_args): void
	{
		extract($_args);
		if ($control->canHideColumns() || $inlineAdd) {
?>								<div class="datagrid-settings">
									<?php
			if ($inlineAdd) {
?>

										<?php echo LR\Filters::escapeHtmlText($inlineAdd->renderButtonAdd()) /* line 106 */ ?>

<?php
			}
?>

									<div class="btn-group">
<?php
			if ($control->canHideColumns()) {
?>										<button type="button" class="btn btn-xs btn-default btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<?php
				$this->renderBlock('icon-gear', get_defined_vars());
?>
										</button>
<?php
			}
?>
										<ul class="dropdown-menu dropdown-menu-right dropdown-menu--grid">
<?php
			$iterations = 0;
			foreach ($iterator = $this->global->its[] = new LR\CachingIterator($columnsVisibility) as $v_key => $visibility) {
?>											<li>
												<?php
				if ($visibility['visible']) {
?>

													<a class="ajax dropdown-item" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("hideColumn!", ['column' => $v_key])) ?>">
<?php
					$this->renderBlock('icon-checked', get_defined_vars());
					$this->renderBlock('column-header', ['column' => $visibility['column']] + $this->params, 'html');
?>
													</a>
<?php
				}
				else {
					?>													<a class="ajax dropdown-item" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("showColumn!", ['column' => $v_key])) ?>">
<?php
					$this->renderBlock('icon-unchecked', get_defined_vars());
					$this->renderBlock('column-header', ['column' => $visibility['column']] + $this->params, 'html');
?>
													</a>
<?php
				}
?>
											</li>
<?php
				$iterations++;
			}
			array_pop($this->global->its);
			$iterator = end($this->global->its);
?>
											<li role="separator" class="divider dropdown-divider"></li>
											<li>
												<a class="ajax dropdown-item" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("showAllColumns!")) ?>"><?php
			$this->renderBlock('icon-eye', get_defined_vars());
			?> <?php echo LR\Filters::escapeHtmlText(($this->filters->translate)('ublaboo_datagrid.show_all_columns')) /* line 129 */ ?></a>
											</li>
<?php
			if ($control->hasSomeColumnDefaultHide()) {
?>											<li>
												<a class="ajax dropdown-item" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("showDefaultColumns!")) ?>"><?php
				$this->renderBlock('icon-repeat', get_defined_vars());
				?> <?php echo LR\Filters::escapeHtmlText(($this->filters->translate)('ublaboo_datagrid.show_default_columns')) /* line 132 */ ?></a>
											</li>
<?php
			}
?>
										</ul>
									</div>
								</div>
<?php
		}
		
	}


	public function blockIcon_gear(array $_args): void
	{
		extract($_args);
		?>											<i class="<?php echo LR\Filters::escapeHtmlAttr($iconPrefix) /* line 111 */ ?>cog"></i>
<?php
	}


	public function blockIcon_checked(array $_args): void
	{
		extract($_args);
		?>														<i class="<?php echo LR\Filters::escapeHtmlAttr($iconPrefix) /* line 117 */ ?>check-square"></i>
<?php
	}


	public function blockIcon_unchecked(array $_args): void
	{
		extract($_args);
		?>														<i class="<?php echo LR\Filters::escapeHtmlAttr($iconPrefix) /* line 122 */ ?>square"></i>
<?php
	}


	public function blockIcon_eye(array $_args): void
	{
		extract($_args);
		?><i class="<?php echo LR\Filters::escapeHtmlAttr($iconPrefix) /* line 129 */ ?>eye"></i><?php
	}


	public function blockIcon_repeat(array $_args): void
	{
		extract($_args);
		?><i class="<?php echo LR\Filters::escapeHtmlAttr($iconPrefix) /* line 132 */ ?>repeat"></i><?php
	}


	public function blockHeader_column_row(array $_args): void
	{
		extract($_args);
?>					<tr>
<?php
		if ($hasGroupActions) {
			?>						<th class="col-checkbox"<?php
			$_tmp = ['rowspan=2' => !empty($filters) && !$control->hasOuterFilterRendering()];
			echo LR\Filters::htmlAttributes(isset($_tmp[0]) && is_array($_tmp[0]) ? $_tmp[0] : $_tmp);
			echo ' id="' . htmlspecialchars($this->global->snippetDriver->getHtmlId('thead-group-action')) . '"' ?>>
<?php $this->renderBlock('_thead-group-action', $this->params) ?>
						</th>
<?php
		}
		$iterations = 0;
		foreach ($iterator = $this->global->its[] = new LR\CachingIterator($columns) as $key => $column) {
			$th = $column->getElementForRender('th', $key);
			?>							<?php echo $th->startTag() /* line 146 */ ?>

<?php
			$col_header = 'col-' . $key . '-header';
?>

<?php
			if (isset($this->blockQueue["$col_header"])) {
				$this->renderBlock($col_header, ['column' => $column] + $this->params, 'html');
			}
			else {
				if ($column->isSortable()) {
					?>										<a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("sort!", ['sort' => $control->getSortNext($column)])) ?>" id="datagrid-sort-<?php
					echo LR\Filters::escapeHtmlAttr($key) /* line 156 */ ?>"<?php
					echo ($_tmp = array_filter([$column->isSortedBy() ? 'sort' : '', 'ajax'])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($_tmp))) . '"' : "";
?>>
<?php
					$this->renderBlock('column-header', ['column' => $column] + $this->params, 'html');
?>

<?php
					if ($column->isSortedBy()) {
						if ($column->isSortAsc()) {
							$this->renderBlock('icon-sort-up', get_defined_vars());
						}
						else {
							$this->renderBlock('icon-sort-down', get_defined_vars());
						}
					}
					else {
						$this->renderBlock('icon-sort', get_defined_vars());
					}
?>
										</a>
<?php
				}
				else {
					$this->renderBlock('column-header', ['column' => $column] + $this->params, 'html');
				}
			}
?>

								<div class="datagrid-column-header-additions">
<?php
			if ($control->canHideColumns()) {
?>									<div class="btn-group column-settings-menu">
										<a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">
<?php
				$this->renderBlock('icon-caret-down', get_defined_vars());
?>
										</a>
										<ul class="dropdown-menu dropdown-menu--grid">
											<li>
												<a class="ajax dropdown-item" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("hideColumn!", ['column' => $key])) ?>">
<?php
				$this->renderBlock('icon-eye-slash', get_defined_vars());
				?> <?php echo LR\Filters::escapeHtmlText(($this->filters->translate)('ublaboo_datagrid.hide_column')) /* line 182 */ ?></a>
											</li>
										</ul>
									</div>
<?php
			}
?>

<?php
			if ($control->hasColumnReset()) {
				?>										<a data-datagrid-reset-filter-by-column="<?php echo LR\Filters::escapeHtmlAttr($key) /* line 188 */ ?>" title="<?php
				echo LR\Filters::escapeHtmlAttr(($this->filters->translate)('ublaboo_datagrid.reset_filter')) /* line 188 */ ?>" href="<?php
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("resetColumnFilter!", ['key' => $key])) ?>"<?php
				echo ($_tmp = array_filter([isset($filters[$key]) && $filters[$key]->isValueSet() ? '' : 'hidden', 'ajax'])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($_tmp))) . '"' : "";
?>>
<?php
				$this->renderBlock('icon-remove', get_defined_vars());
?>
										</a>
<?php
			}
?>
								</div>
							<?php echo $th->endTag() /* line 193 */ ?>

<?php
			$iterations++;
		}
		array_pop($this->global->its);
		$iterator = end($this->global->its);
		if ($actions || $control->isSortable() || $itemsDetail || $inlineEdit || $inlineAdd) {
?>						<th class="col-action text-center">
							<?php echo LR\Filters::escapeHtmlText(($this->filters->translate)('ublaboo_datagrid.action')) /* line 196 */ ?>

						</th>
<?php
		}
?>
					</tr>
<?php
	}


	public function blockThead_group_action(array $_args): void
	{
		extract($_args);
		$this->global->snippetDriver->enter("thead-group-action", "static");
		if ($hasGroupActionOnRows) {
			?>							<input name="<?php echo LR\Filters::escapeHtmlAttr(($this->filters->lower)($control->getFullName())) /* line 142 */ ?>-toggle-all" type="checkbox" data-check="<?php
			echo LR\Filters::escapeHtmlAttr($control->getFullName()) /* line 142 */ ?>" data-check-all="<?php echo LR\Filters::escapeHtmlAttr($control->getFullName()) /* line 142 */ ?>"<?php
			echo ($_tmp = array_filter([$control->shouldUseHappyComponents() ? 'happy gray-border'  : null, 'primary'])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($_tmp))) . '"' : "";
?>>
<?php
		}
		$this->global->snippetDriver->leave();
		
	}


	public function blockIcon_sort_up(array $_args): void
	{
		extract($_args);
		?>													<i class="<?php echo LR\Filters::escapeHtmlAttr($iconPrefix) /* line 161 */ ?>caret-up"></i>
<?php
	}


	public function blockIcon_sort_down(array $_args): void
	{
		extract($_args);
		?>													<i class="<?php echo LR\Filters::escapeHtmlAttr($iconPrefix) /* line 163 */ ?>caret-down"></i>
<?php
	}


	public function blockIcon_sort(array $_args): void
	{
		extract($_args);
		?>												<i class="<?php echo LR\Filters::escapeHtmlAttr($iconPrefix) /* line 166 */ ?>sort"></i>
<?php
	}


	public function blockIcon_caret_down(array $_args): void
	{
		extract($_args);
		?>											<i class="<?php echo LR\Filters::escapeHtmlAttr($iconPrefix) /* line 177 */ ?>caret-down"></i>
<?php
	}


	public function blockIcon_eye_slash(array $_args): void
	{
		extract($_args);
		?>													<i class="<?php echo LR\Filters::escapeHtmlAttr($iconPrefix) /* line 182 */ ?>eye-slash"></i><?php
	}


	public function blockIcon_remove(array $_args): void
	{
		extract($_args);
		?>											<i class="<?php echo LR\Filters::escapeHtmlAttr($iconPrefix) /* line 189 */ ?>remove"></i>
<?php
	}


	public function blockHeader_filters(array $_args): void
	{
		extract($_args);
		if (!empty($filters) && !$control->hasOuterFilterRendering()) {
?>					<tr>
						<?php
			$iterations = 0;
			foreach ($iterator = $this->global->its[] = new LR\CachingIterator($columns) as $key => $column) {
?>

<?php
				$th = $column->getElementForRender('th', $key);
				?>							<?php echo $th->startTag() /* line 202 */ ?>

<?php
				$col_header = 'col-filter-' . $key . '-header';
				if (!$control->hasOuterFilterRendering() && isset($filters[$key])) {
					$i = $filter['filter'][$key];
?>

<?php
					$filter_block = 'filter-' . $filters[$key]->getKey();
					$filter_type_block = 'filtertype-' . $filters[$key]->getType();
?>

<?php
					if (isset($this->blockQueue["$filter_block"])) {
						$this->renderBlock($filter_block, ['filter' => $filters[$key], 'input' => $i, 'outer' => FALSE] + $this->params, 'html');
					}
					else {
						if (isset($this->blockQueue["$filter_type_block"])) {
							$this->renderBlock($filter_type_block, ['filter' => $filters[$key], 'input' => $i, 'outer' => FALSE] + $this->params, 'html');
						}
						else {
							/* line 216 */
							$this->createTemplate($filters[$key]->getTemplate(), ['filter' => $filters[$key], 'input' => $i, 'outer' => FALSE] + $this->params, 'include')->renderToContentType('html');
						}
					}
?>

<?php
				}
				?>							<?php echo $th->endTag() /* line 221 */ ?>

<?php
				$iterations++;
			}
			array_pop($this->global->its);
			$iterator = end($this->global->its);
			if ($actions || $control->isSortable() || $itemsDetail || $inlineEdit || $inlineAdd) {
?>						<th class="col-action text-center">
							<?php
				if (!$control->hasAutoSubmit() && !$control->hasOuterFilterRendering()) {
?>

								<?php
					$_input = is_object($filter['filter']['submit']) ? $filter['filter']['submit'] : end($this->global->formsStack)[$filter['filter']['submit']];
					echo $_input->getControl() /* line 225 */ ?>

<?php
				}
?>
						</th>
<?php
			}
?>
					</tr>
<?php
		}
		
	}


	public function blockTbody(array $_args): void
	{
		extract($_args);
		?>				<tbody <?php
		if ($control->isSortable()) {
			?>data-sortable data-sortable-url="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiPresenter->link($control->getSortableHandler())) ?>" data-sortable-parent-path="<?php
			echo LR\Filters::escapeHtmlAttr($control->getSortableParentPath()) /* line 232 */ ?>"<?php
		}
		echo ' id="' . htmlspecialchars($this->global->snippetDriver->getHtmlId('tbody')) . '"' ?>>
<?php $this->renderBlock('_tbody', $this->params) ?>
				</tbody>
<?php
		
	}


	public function blockTbody_da252(array $_args): void
	{
		extract($_args);
		$this->global->snippetDriver->enter("tbody", "static");
		?>					<?php
		$this->renderBlock('_items', $this->params);
		$this->global->snippetDriver->leave();
		
	}


	public function blockItems(array $_args): void
	{
		extract($_args);
		$this->global->snippetDriver->enter("items", "area");
		if ($inlineAdd && $inlineAdd->isPositionTop()) {
			$this->renderBlock('inlineAddRow', ['columns' => $columns] + $this->params, 'html');
		}
?>

<?php
		if ($columnsSummary && $columnsSummary->getPositionTop()) {
			$this->renderBlock('columnSummary', $this->params, 'html');
		}
?>

<?php
		$iterations = 0;
		foreach ($iterator = $this->global->its[] = new LR\CachingIterator($rows) as $row) {
			$item = $row->getItem();
?>

<?php
			if (!isset($toggle_detail)) {
				if ($inlineEdit && $inlineEdit->getItemId() == $row->getId()) {
					$inlineEdit->onSetDefaults($filter['inline_edit'], $item);
					;
?>

									<tr data-id="<?php echo LR\Filters::escapeHtmlAttr($row->getId()) /* line 249 */ ?>"<?php
					$_tmp = [$row->getControl()->attrs];
					echo LR\Filters::htmlAttributes(isset($_tmp[0]) && is_array($_tmp[0]) ? $_tmp[0] : $_tmp);
					echo ' id="' . htmlspecialchars($this->global->snippetDriver->getHtmlId("item-{$row->getId()}")) . '"' ?>>
<?php
					$this->global->snippetDriver->enter("item-{$row->getId()}", "dynamic");
					if ($hasGroupActions) {
?>										<td class="col-checkbox"></td>
<?php
					}
?>

<?php
					$iterations = 0;
					foreach ($columns as $key => $column) {
						$col = 'col-' . $key;
?>

<?php
						$td = $column->getElementForRender('td', $key, $row);
						$td->class[] = 'datagrid-inline-edit';
						?>											<?php echo $td->startTag() /* line 257 */ ?>

<?php
						if (isset($filter['inline_edit'][$key])) {
							if ($filter['inline_edit'][$key] instanceof \Nette\Forms\Container) {
								$iterations = 0;
								foreach ($filter['inline_edit'][$key]->getControls() as $inlineEditControl) {
									?>															<?php
									$_input = is_object($inlineEditControl) ? $inlineEditControl : end($this->global->formsStack)[$inlineEditControl];
									echo $_input->getControl() /* line 261 */ ?>

<?php
									$iterations++;
								}
							}
							else {
								?>														<?php
								$_input = is_object($filter['inline_edit'][$key]) ? $filter['inline_edit'][$key] : end($this->global->formsStack)[$filter['inline_edit'][$key]];
								echo $_input->getControl() /* line 264 */ ?>

<?php
							}
						}
						elseif ($inlineEdit->showNonEditingColumns()) {
							$this->renderBlock('column-value', ['column' => $column, 'row' => $row, 'key' => $key] + $this->params, 'html');
						}
						?>											<?php echo $td->endTag() /* line 269 */ ?>

<?php
						$iterations++;
					}
?>

										<td class="col-action col-action-inline-edit">
											<?php
					$_input = is_object($filter['inline_edit']['cancel']) ? $filter['inline_edit']['cancel'] : end($this->global->formsStack)[$filter['inline_edit']['cancel']];
					echo $_input->getControl()->addAttributes(['class' => 'btn btn-xs btn-danger']) /* line 273 */ ?>

											<?php
					$_input = is_object($filter['inline_edit']['submit']) ? $filter['inline_edit']['submit'] : end($this->global->formsStack)[$filter['inline_edit']['submit']];
					echo $_input->getControl()->addAttributes(['class' => 'btn btn-xs btn-primary']) /* line 274 */ ?>

											<?php
					$_input = is_object($filter['inline_edit']['_id']) ? $filter['inline_edit']['_id'] : end($this->global->formsStack)[$filter['inline_edit']['_id']];
					echo $_input->getControl() /* line 275 */ ?>

											<?php
					$_input = is_object($filter['inline_edit']['_primary_where_column']) ? $filter['inline_edit']['_primary_where_column'] : end($this->global->formsStack)[$filter['inline_edit']['_primary_where_column']];
					echo $_input->getControl() /* line 276 */ ?>

										</td>
<?php
					$this->global->snippetDriver->leave();
?>									</tr>
<?php
				}
				else {
					?>									<tr data-id="<?php echo LR\Filters::escapeHtmlAttr($row->getId()) /* line 280 */ ?>"<?php
					$_tmp = [$row->getControl()->attrs];
					echo LR\Filters::htmlAttributes(isset($_tmp[0]) && is_array($_tmp[0]) ? $_tmp[0] : $_tmp);
					echo ' id="' . htmlspecialchars($this->global->snippetDriver->getHtmlId("item-{$row->getId()}")) . '"' ?>>
<?php
					$this->global->snippetDriver->enter("item-{$row->getId()}", "dynamic");
					if ($hasGroupActions) {
?>										<td class="col-checkbox">
											<?php
						if ($row->hasGroupAction()) {
?>

												<input type="checkbox" data-check="<?php echo LR\Filters::escapeHtmlAttr($control->getFullName()) /* line 283 */ ?>" data-check-all-<?php
							echo $control->getFullName() /* line 283 */ ?> name="<?php echo LR\Filters::escapeHtmlAttr(($this->filters->lower)($control->getFullName())) /* line 283 */ ?>_group_action_item[<?php
							echo LR\Filters::escapeHtmlAttr($row->getId()) /* line 283 */ ?>]"<?php
							echo ($_tmp = array_filter([$control->shouldUseHappyComponents() ? 'happy gray-border'  : null, 'primary'])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($_tmp))) . '"' : "";
?>>
<?php
						}
?>
										</td>
<?php
					}
					$iterations = 0;
					foreach ($columns as $key => $column) {
						$column = $row->applyColumnCallback($key, clone $column);
?>

<?php
						$td = $column->getElementForRender('td', $key, $row);
						?>											<?php echo $td->startTag() /* line 290 */ ?>

<?php
						$this->renderBlock('column-value', ['column' => $column, 'row' => $row, 'key' => $key] + $this->params, 'html');
						?>											<?php echo $td->endTag() /* line 292 */ ?>

<?php
						$iterations++;
					}
					if ($actions || $control->isSortable() || $itemsDetail || $inlineEdit || $inlineAdd) {
?>										<td class="col-action">
											<?php
						$iterations = 0;
						foreach ($iterator = $this->global->its[] = new LR\CachingIterator($actions) as $key => $action) {
?>

<?php
							if ($row->hasAction($key)) {
								if ($action->hasTemplate()) {
									/* line 298 */
									$this->createTemplate($action->getTemplate(), array_merge(['item' => $item, ], $action->getTemplateVariables(), [ 'row' => $row]) + $this->params, 'include')->renderToContentType('html');
								}
								else {
									?>														<?php echo $action->render($row) /* line 300 */ ?>

<?php
								}
							}
							$iterations++;
						}
						array_pop($this->global->its);
						$iterator = end($this->global->its);
						if ($control->isSortable()) {
?>											<span class="handle-sort btn btn-xs btn-default btn-secondary">
<?php
							$this->renderBlock('icon-arrows-v', get_defined_vars());
?>
											</span>
<?php
						}
						if ($inlineEdit && $row->hasInlineEdit()) {
							?>												<?php echo $inlineEdit->renderButton($row) /* line 308 */ ?>

<?php
						}
						if ($itemsDetail && $itemsDetail->shouldBeRendered($row)) {
							?>												<?php echo $itemsDetail->renderButton($row) /* line 311 */ ?>

<?php
						}
?>
										</td>
<?php
					}
					$this->global->snippetDriver->leave();
?>									</tr>
<?php
				}
			}
?>

<?php
			if ($itemsDetail && $itemsDetail->shouldBeRendered($row)) {
				?>								<tr class="row-item-detail item-detail-<?php echo LR\Filters::escapeHtmlAttr($control->getFullname()) /* line 322 */ ?>-id-<?php
				echo LR\Filters::escapeHtmlAttr($row->getId()) /* line 322 */ ?>"<?php echo ' id="' . htmlspecialchars($this->global->snippetDriver->getHtmlId("item-{$row->getId()}-detail")) . '"' ?>>
<?php
				$this->global->snippetDriver->enter("item-{$row->getId()}-detail", "dynamic");
				?>									<?php
				if (isset($toggle_detail) && $toggle_detail == $row->getId()) {
?>

<?php
					$item_detail_params = ['item' => $item, '_form' => $filter] + $itemsDetail->getTemplateVariables();
?>

<?php
					if (isset($filter['items_detail_form'])) {
						$item_detail_params['items_detail_form'] = $filter['items_detail_form'];
					}
?>

<?php
					if (isset($this->blockQueue["detail"])) {
						?>											<td colspan="<?php echo LR\Filters::escapeHtmlAttr($control->getColumnsCount()) /* line 331 */ ?>">
												<div class="item-detail-content">
<?php
						$this->renderBlock('detail', array_merge([], $item_detail_params, []) + $this->params, 'html');
?>
												</div>
											</td>
<?php
					}
					elseif ($itemsDetail) {
						?>											<td colspan="<?php echo LR\Filters::escapeHtmlAttr($control->getColumnsCount()) /* line 337 */ ?>">
												<div class="item-detail-content">
<?php
						if ($itemsDetail->getType() == 'template') {
							/* line 340 */
							$this->createTemplate($itemsDetail->getTemplate(), array_merge([], $item_detail_params, []) + $this->params, 'include')->renderToContentType('html');
						}
						else {
							?>														<?php echo $itemsDetail->render($item) /* line 342 */ ?>

<?php
						}
?>
												</div>
											</td>
<?php
					}
				}
				$this->global->snippetDriver->leave();
?>								</tr>
								<tr class="row-item-detail-helper"></tr>
<?php
			}
			$iterations++;
		}
		array_pop($this->global->its);
		$iterator = end($this->global->its);
?>

<?php
		if ($inlineAdd && $inlineAdd->isPositionBottom()) {
			$this->renderBlock('inlineAddRow', ['columns' => $columns] + $this->params, 'html');
		}
?>

<?php
		if (($columnsSummary && !$columnsSummary->getPositionTop()) || $control->hasSomeAggregationFunction()) {
			$this->renderBlock('columnSummary', $this->params, 'html');
		}
?>

<?php
		$this->renderBlock('noItems', get_defined_vars());
		$this->global->snippetDriver->leave();
		
	}


	public function blockIcon_arrows_v(array $_args): void
	{
		extract($_args);
		?>												<i class="<?php echo LR\Filters::escapeHtmlAttr($iconPrefix) /* line 305 */ ?>arrows-v <?php
		echo LR\Filters::escapeHtmlAttr($iconPrefix) /* line 305 */ ?>arrows-alt-v"></i>
<?php
	}


	public function blockNoItems(array $_args): void
	{
		extract($_args);
		if (!$rows) {
?>							<tr>
								<td colspan="<?php echo LR\Filters::escapeHtmlAttr($control->getColumnsCount()) /* line 363 */ ?>">
<?php
			if ($filter_active) {
				?>										<?php echo LR\Filters::escapeHtmlText(($this->filters->translate)('ublaboo_datagrid.no_item_found_reset')) /* line 365 */ ?> <a class="link ajax" href="<?php
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("resetFilter!")) ?>"><?php echo LR\Filters::escapeHtmlText(($this->filters->translate)('ublaboo_datagrid.here')) /* line 365 */ ?></a>.
<?php
			}
			else {
				?>										<?php echo LR\Filters::escapeHtmlText(($this->filters->translate)('ublaboo_datagrid.no_item_found')) /* line 367 */ ?>

<?php
			}
?>
								</td>
							</tr>
<?php
		}
		
	}


	public function blockTfoot(array $_args): void
	{
		extract($_args);
		?>					<tfoot<?php echo ' id="' . htmlspecialchars($this->global->snippetDriver->getHtmlId('pagination')) . '"' ?>>
<?php $this->renderBlock('_pagination', $this->params) ?>
					</tfoot>
<?php
		
	}


	public function blockPagination(array $_args): void
	{
		extract($_args);
		$this->global->snippetDriver->enter("pagination", "static");
		?>						<?php
		if ($control->isPaginated() || $filter_active) {
?>

<?php
			$this->renderBlock('pagination', get_defined_vars());
		}
		$this->global->snippetDriver->leave();
		
	}


	public function blockPagination_fe7cd(array $_args): void
	{
		extract($_args);
?>							<tr>
<?php
		if (!$control->isTreeView()) {
			?>								<td colspan="<?php echo LR\Filters::escapeHtmlAttr($control->getColumnsCount()) /* line 379 */ ?>" class="row-grid-bottom">
									<div class="col-items">
<?php
			if ($control->isPaginated()) {
?>										<small class="text-muted">
											(<?php
				$paginator = $control['paginator']->getPaginator();
?>


<?php
				if ($control->getPerPage() === 'all') {
					?>												<?php echo LR\Filters::escapeHtmlText(($this->filters->translate)('ublaboo_datagrid.items')) /* line 385 */ ?>: <?php
					echo LR\Filters::escapeHtmlText(($this->filters->translate)('ublaboo_datagrid.all')) /* line 385 */ ?>

<?php
				}
				else {
					?>												<?php echo LR\Filters::escapeHtmlText(($this->filters->translate)('ublaboo_datagrid.items')) /* line 387 */ ?>: <?php
					echo LR\Filters::escapeHtmlText($paginator->getOffset() > 0 ? $paginator->getOffset() + 1 : ($paginator->getItemCount() > 0 ? 1 : 0)) /* line 387 */ ?> - <?php
					echo LR\Filters::escapeHtmlText(sizeof($rows) + $paginator->getOffset()) /* line 387 */ ?>

												<?php echo LR\Filters::escapeHtmlText(($this->filters->translate)('ublaboo_datagrid.from')) /* line 388 */ ?> <?php
					echo LR\Filters::escapeHtmlText($paginator->getItemCount()) /* line 388 */ ?>

											<?php
				}
?>)
										</small>
<?php
			}
?>
									</div>
									<div class="col-pagination text-center">
<?php
			/* line 393 */ $_tmp = $this->global->uiControl->getComponent("paginator");
			if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(null, false);
			$_tmp->render();
?>
									</div>
									<div class="col-per-page text-right">
<?php
			if ($filter_active) {
				?>										<a class="ajax btn btn-danger btn-sm reset-filter" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("resetFilter!")) ?>"><?php
				echo LR\Filters::escapeHtmlText(($this->filters->translate)('ublaboo_datagrid.reset_filter')) /* line 396 */ ?></a>
<?php
			}
			if ($control->isPaginated()) {
				?>											<?php
				$_input = is_object($filter['perPage']) ? $filter['perPage'] : end($this->global->formsStack)[$filter['perPage']];
				echo $_input->getControl()->addAttributes(['data-autosubmit-per-page' => TRUE, 'class' => 'form-control input-sm form-control-sm']) /* line 398 */ ?>

											<?php
				$_input = is_object($filter['perPage_submit']) ? $filter['perPage_submit'] : end($this->global->formsStack)[$filter['perPage_submit']];
				echo $_input->getControl()->addAttributes(['class' => 'datagrid-per-page-submit']) /* line 399 */ ?>

<?php
			}
?>
									</div>
								</td>
<?php
		}
?>
							</tr>
<?php
	}


	public function blockInlineAddRow(array $_args): void
	{
		extract($_args);
		if ($inlineAdd->shouldBeRendered()) {
			$inlineAdd->onSetDefaults($filter['inline_add']);
			;
?>

		<tr class="datagrid-row-inline-add datagrid-row-inline-add-hidden">
<?php
			if ($hasGroupActions) {
?>			<td class="col-checkbox"></td>
<?php
			}
?>

<?php
			$iterations = 0;
			foreach ($columns as $key => $column) {
				$col = 'col-' . $key;
?>

<?php
				$td = clone $column->getElementForRender('td', $key);
				$td->class[] = 'datagrid-inline-edit';
				?>				<?php echo $td->startTag() /* line 426 */ ?>

<?php
				if (isset($filter['inline_add'][$key])) {
					if ($filter['inline_add'][$key] instanceof \Nette\Forms\Container) {
						$iterations = 0;
						foreach ($filter['inline_add'][$key]->getControls() as $inlineAddControl) {
							?>								<?php
							$_input = is_object($inlineAddControl) ? $inlineAddControl : end($this->global->formsStack)[$inlineAddControl];
							echo $_input->getControl() /* line 430 */ ?>

<?php
							$iterations++;
						}
					}
					else {
						?>							<?php
						$_input = is_object($filter['inline_add'][$key]) ? $filter['inline_add'][$key] : end($this->global->formsStack)[$filter['inline_add'][$key]];
						echo $_input->getControl() /* line 433 */ ?>

<?php
					}
				}
				?>				<?php echo $td->endTag() /* line 436 */ ?>

<?php
				$iterations++;
			}
?>

			<td class="col-action col-action-inline-edit">
				<?php
			$_input = is_object($filter['inline_add']['cancel']) ? $filter['inline_add']['cancel'] : end($this->global->formsStack)[$filter['inline_add']['cancel']];
			echo $_input->getControl() /* line 440 */ ?>

				<?php
			$_input = is_object($filter['inline_add']['submit']) ? $filter['inline_add']['submit'] : end($this->global->formsStack)[$filter['inline_add']['submit']];
			echo $_input->getControl() /* line 441 */ ?>

			</td>
		</tr>
<?php
		}
		
	}


	public function blockColumnSummary(array $_args): void
	{
		extract($_args);
?>

<?php
		if (!empty($rows) && ($columnsSummary || $control->hasSomeAggregationFunction())) {
			?>	<tr class="datagrid-row-columns-summary"<?php echo ' id="' . htmlspecialchars($this->global->snippetDriver->getHtmlId('summary')) . '"' ?>>
<?php $this->renderBlock('_summary', $this->params) ?>
	</tr>
<?php
		}
?>

<?php
	}


	public function blockSummary(array $_args): void
	{
		extract($_args);
		$this->global->snippetDriver->enter("summary", "static");
		if ($hasGroupActions) {
?>		<td class="col-checkbox"></td>
<?php
		}
?>

<?php
		if ($columnsSummary && $columnsSummary->someColumnsExist($columns)) {
			$this->renderBlock('columnsSummary', ['columns' => $columns] + $this->params, 'html');
		}
?>

<?php
		if ($control->hasSomeAggregationFunction()) {
			$this->renderBlock('aggregationFunctions', ['columns' => $columns] + $this->params, 'html');
		}
?>

<?php
		if ($actions || $control->isSortable() || $itemsDetail || $inlineEdit || $inlineAdd) {
?>		<td class="col-action"></td>
<?php
		}
		$this->global->snippetDriver->leave();
		
	}


	public function blockColumnsSummary(array $_args): void
	{
		extract($_args);
?>

<?php
		$iterations = 0;
		foreach ($columns as $key => $column) {
			$td = $column->getElementForRender('td', $key);
?>

		<?php echo $td->startTag() /* line 472 */ ?>

			<?php echo LR\Filters::escapeHtmlText($columnsSummary->render($key)) /* line 473 */ ?>

		<?php echo $td->endTag() /* line 474 */ ?>

<?php
			$iterations++;
		}
?>

<?php
	}


	public function blockAggregationFunctions(array $_args): void
	{
		extract($_args);
?>

<?php
		$iterations = 0;
		foreach ($columns as $key => $column) {
			$td = $column->getElementForRender('td', $key);
?>

		<?php echo $td->startTag() /* line 485 */ ?>

<?php
			if ($aggregationFunctions) {
				if (isset($aggregationFunctions[$key])) {
					?>					<?php echo $aggregationFunctions[$key]->renderResult() /* line 488 */ ?>

<?php
				}
			}
			else {
				?>				<?php echo $multipleAggregationFunction->renderResult($key) /* line 491 */ ?>

<?php
			}
			?>		<?php echo $td->endTag() /* line 493 */ ?>

<?php
			$iterations++;
		}
?>

<?php
	}


	public function blockColumn_header(array $_args): void
	{
		extract($_args);
		if (!$column->isHeaderEscaped()) {
			if ($column instanceof \Nette\Utils\Html || !$column->isTranslatableHeader()) {
				?>			<?php echo $column->getName() /* line 502 */ ?>

<?php
			}
			else {
				?>			<?php echo ($this->filters->translate)($column->getName()) /* line 504 */ ?>

<?php
			}
		}
		else {
			if ($column instanceof \Nette\Utils\Html || !$column->isTranslatableHeader()) {
				?>			<?php echo LR\Filters::escapeHtmlText($column->getName()) /* line 508 */ ?>

<?php
			}
			else {
				?>			<?php echo LR\Filters::escapeHtmlText(($this->filters->translate)($column->getName())) /* line 510 */ ?>

<?php
			}
		}
		
	}


	public function blockColumn_value(array $_args): void
	{
		extract($_args);
		$col = 'col-' . $key;
		$item = $row->getItem();
?>

<?php
		if ($column->hasTemplate()) {
			/* line 521 */
			$this->createTemplate($column->getTemplate(), array_merge(['row' => $row, 'item' => $item, ], $column->getTemplateVariables(), []) + $this->params, 'include')->renderToContentType('html');
		}
		else {
			if (isset($this->blockQueue["$col"])) {
				$this->renderBlock($col, ['item' => $item] + $this->params, 'html');
			}
			else {
				if ($column->isTemplateEscaped()) {
					?>				<?php echo LR\Filters::escapeHtmlText($column->render($row)) /* line 527 */ ?>

<?php
				}
				else {
					?>				<?php echo $column->render($row) /* line 529 */ ?>

<?php
				}
			}
		}
		
	}

}
