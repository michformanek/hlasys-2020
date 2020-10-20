<?php declare(strict_types=1);


namespace App\UI\Control\Grid;


use App\Model\Database\Entity\Proposal;
use App\UI\Control\BaseControl;
use Doctrine\ORM\QueryBuilder;
use Ublaboo\DataGrid\DataGrid;

class ProposalGrid extends BaseControl
{
	/**
	 * @var QueryBuilder
	 */
	private $queryBuilder;

	/**
	 * @var boolean
	 */
	private $showPrice = false;

	/**
	 * ProposalGrid constructor.
	 * @param QueryBuilder $queryBuilder
	 */
	public function __construct(QueryBuilder $queryBuilder)
	{
		$this->queryBuilder = $queryBuilder;
	}

	/**
	 * @param bool $showPrice
	 * @return ProposalGrid
	 */
	public function setShowPrice(bool $showPrice): ProposalGrid
	{
		$this->showPrice = $showPrice;
		return $this;
	}


	public function createComponentData($name): DataGrid
	{
		$grid = new DataGrid($this, $name);
		$grid->setDataSource($this->queryBuilder);
		$grid->addColumnText('id', 'Id');
		$grid->addColumnLink('title', 'Název', 'Detail:default')->setSortable();

		if ($this->showPrice) {
			$grid->addColumnText('price', 'Cena')
				->setRenderer(function (Proposal $proposal) {
					$sum = null;
					foreach ($proposal->getItems() as $item) {
						$sum += $item->getPrice();
					}
					return $sum;
				});
		}

		$grid->addColumnText('status.name', 'Stav');
		$grid->addColumnText('voteType.name', 'Rozhoduje');

		$grid->addColumnText('author.username', 'Vytvořil');
		$grid->addColumnDateTime('voteFrom', 'Od');
		$grid->addColumnDateTime('voteTo', 'Do')->setRenderer(
			function ($item) {
				return ' - ';
			}, function ($item) {
			return (bool)($item->getVoteTo() != null);
		});

		$grid->setTemplateFile(__DIR__ . '/templates/grid_template.latte');
		return $grid;
	}

	public function render()
	{
		$template = $this->template;
		$template->setFile(__DIR__ . '/templates/grid.latte');
		$template->render();
	}


}

