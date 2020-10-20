<?php declare(strict_types=1);


namespace App\Modules\Front\Proposal;


use App\Model\Database\EntityManager;
use App\Modules\Base\SecuredPresenter;
use App\Modules\Front\BaseFrontPresenter;
use App\UI\Control\Grid\ProposalGridFactory;

class ProposalPresenter extends BaseFrontPresenter
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
	 * ProposalPresenter constructor.
	 * @param ProposalGridFactory $proposalGridFactory
	 * @param EntityManager $entityManager
	 */
	public function __construct(ProposalGridFactory $proposalGridFactory, EntityManager $entityManager)
	{
		$this->proposalGridFactory = $proposalGridFactory;
		$this->entityManager = $entityManager;
	}


	public function renderMine()
	{

	}

	public function renderVV()
	{

	}

	public function renderSO()
	{

	}

	public function renderUnvoted()
	{

	}

	public function renderDeleted()
	{

	}

	public function createComponentMineGrid()
	{
		$userId = $this->getUser()->getId();
		$queryBuilder = $this->entityManager->getProposalRepository()
			->createQueryBuilder('er')
			->where("er.author = $userId");
		return $this->proposalGridFactory->fromQueryBuilder($queryBuilder);
	}

	public function createComponentVvGrid()
	{
		$queryBuilder = $this->entityManager->getProposalRepository()
			->createQueryBuilder('er')
			->where("er.voteType = 1");
		return $this->proposalGridFactory->fromQueryBuilder($queryBuilder)->setShowPrice(true);
	}

	public function createComponentSoGrid()
	{
		$queryBuilder = $this->entityManager->getProposalRepository()
			->createQueryBuilder('er')
			->where("er.voteType = 2");
		return $this->proposalGridFactory->fromQueryBuilder($queryBuilder);
	}

	public function createComponentDeletedGrid()
	{
		$queryBuilder = $this->entityManager->getProposalRepository()
			->createQueryBuilder('er')
			->where("er.deleted = true");
		return $this->proposalGridFactory->fromQueryBuilder($queryBuilder);
	}

	public function createComponentUnvotedGrid()
	{
		$userId = $this->getUser()->getId();
		$queryBuilder = $this->entityManager->getProposalRepository()
			->createQueryBuilder('er')
			->where("er.author = $userId");

//		$sub = $this->entityManager->createQueryBuilder();
//		$sub->select("v");
//		$sub->from("Vote","v");
//		$sub->andWhere("v.user = $userId");
//		$sub->andWhere("v.proposal = er");

		// Your query builder:
//		$queryBuilder->andWhere($queryBuilder->expr()->not($queryBuilder->expr()->exists($sub->getDQL())));
		return $this->proposalGridFactory->fromQueryBuilder($queryBuilder);
	}

}
