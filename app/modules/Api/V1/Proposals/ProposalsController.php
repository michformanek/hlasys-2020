<?php declare(strict_types=1);


namespace App\Modules\Api\V1\Proposals;


use Apitte\Core\Annotation\Controller\Method;
use Apitte\Core\Annotation\Controller\Path;
use Apitte\Core\Annotation\Controller\RequestParameter;
use Apitte\Core\Annotation\Controller\RequestParameters;
use Apitte\Core\Http\ApiRequest;
use App\Domain\Api\Logs\Facade\LogsFacade;
use App\Domain\Api\Logs\Response\LogResDto;
use App\Domain\Api\Proposals\Facade\ProposalsFacade;
use App\Domain\Api\Proposals\Response\ProposalResDto;
use App\Modules\Api\V1\BaseV1Controller;

/**
 * Class ProposalsController
 * @package App\Modules\Api\V1\Proposals
 * @Path ("/proposals")
 */
class ProposalsController extends BaseV1Controller
{

	/** @var ProposalsFacade */
	private $proposalsFacade;

	/**
	 * ProposalsController constructor.
	 * @param ProposalsFacade $proposalsFacade
	 */
	public function __construct(ProposalsFacade $proposalsFacade)
	{
		$this->proposalsFacade = $proposalsFacade;
	}


	/**
	 * @Path("/")
	 * @Method("GET")
	 * @RequestParameters({
	 * 		@RequestParameter(name="limit", type="int", in="query", required=false, description="Data limit"),
	 * 		@RequestParameter(name="offset", type="int", in="query", required=false, description="Data offset")
	 * })
	 * @param ApiRequest $request
	 * @return ProposalResDto[]
	 */
	public function index(ApiRequest $request): array
	{
		return $this->proposalsFacade->findAll(
			intval($request->getParameter('limit', 10)),
			intval($request->getParameter('offset', 0))
		);
	}

}

