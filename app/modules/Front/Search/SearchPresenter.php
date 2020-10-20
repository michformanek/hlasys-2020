<?php


namespace App\Modules\Front\Search;


use App\Model\Database\EntityManager;
use App\Modules\Front\BaseFrontPresenter;
use App\UI\Control\Grid\ProposalGrid;
use App\UI\Control\Grid\ProposalGridFactory;

class SearchPresenter extends BaseFrontPresenter
{
	/**
	 * @var ProposalGridFactory
	 */
	private $proposalGridFactory;
	/**
	 * @var EntityManager
	 */
	private $entityManager;
	/**
	 * @var mixed|string
	 */
	private $term;

	/**
	 * SearchPresenter constructor.
	 * @param ProposalGridFactory $proposalGridFactory
	 * @param EntityManager $entityManager
	 */
	public function __construct(ProposalGridFactory $proposalGridFactory, EntityManager $entityManager)
	{
		$this->proposalGridFactory = $proposalGridFactory;
		$this->entityManager = $entityManager;
	}


	/**
	 * @param string $term
	 */
	public function renderDefault($term): void
	{
		$this->term = $term;
	}

	public function createComponentSearchGrid(): ProposalGrid
	{
		$queryBuilder = $this->entityManager->getProposalRepository()->createQueryBuilder("p")
			->add('where', 'MATCH(p.text, p.title) AGAINST (:searchterm) > 0.8')
			->setParameter('searchterm', $this->term);
		return $this->proposalGridFactory->fromQueryBuilder($queryBuilder);
	}

}
