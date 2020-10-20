<?php declare(strict_types=1);


namespace App\Modules\Api\V1\Votes;


use Apitte\Core\Annotation\Controller\Method;
use Apitte\Core\Annotation\Controller\Path;
use Apitte\Core\Annotation\Controller\RequestParameter;
use Apitte\Core\Annotation\Controller\RequestParameters;
use Apitte\Core\Http\ApiRequest;
use App\Domain\Api\Votes\Facade\VotesFacade;
use App\Domain\Api\Votes\Response\VoteResDto;
use App\Modules\Api\V1\BaseV1Controller;

/**
 * Class LogsController
 * @package App\Modules\Api\V1\Votes
 * @Path ("/votes")
 */
class VotesController extends BaseV1Controller
{

	/** @var VotesFacade */
	private $votesFacade;

	/**
	 * VotesController constructor.
	 * @param VotesFacade $votesFacade
	 */
	public function __construct(VotesFacade $votesFacade)
	{
		$this->votesFacade = $votesFacade;
	}


	/**
	 * @Path("/")
	 * @Method("GET")
	 * @RequestParameters({
	 * 		@RequestParameter(name="limit", type="int", in="query", required=false, description="Data limit"),
	 * 		@RequestParameter(name="offset", type="int", in="query", required=false, description="Data offset")
	 * })
	 * @param ApiRequest $request
	 * @return VoteResDto[]
	 */
	public function index(ApiRequest $request): array
	{
		return $this->votesFacade->findAll(
			intval($request->getParameter('limit', 10)),
			intval($request->getParameter('offset', 0))
		);
	}

}

