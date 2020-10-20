<?php declare(strict_types=1);


namespace App\Modules\Api\V1\Votes;


use Apitte\Core\Annotation\Controller\Method;
use Apitte\Core\Annotation\Controller\Path;
use Apitte\Core\Annotation\Controller\RequestParameter;
use Apitte\Core\Annotation\Controller\RequestParameters;
use Apitte\Core\Exception\Api\ClientErrorException;
use Apitte\Core\Http\ApiRequest;
use App\Domain\Api\Logs\Facade\LogsFacade;
use App\Domain\Api\Logs\Response\LogResDto;
use App\Domain\Api\Votes\Facade\VotesFacade;
use App\Domain\Api\Votes\Response\VoteResDto;
use App\Model\Exception\Runtime\Database\EntityNotFoundException;
use App\Modules\Api\V1\BaseV1Controller;
use Nette\Http\IResponse;

/**
 * Class LogsOneController
 * @package App\Modules\Api\V1\Votes
 * @Path("/votes")
 */
class VotesOneController extends BaseV1Controller
{

	/** @var VotesFacade */
	private $votesFacade;

	/**
	 * VotesOneController constructor.
	 * @param VotesFacade $votesFacade
	 */
	public function __construct(VotesFacade $votesFacade)
	{
		$this->votesFacade = $votesFacade;
	}


	/**
	 * @Path("/{id}")
	 * @Method("GET")
	 * @RequestParameters({
	 *      @RequestParameter(name="id", type="int", description="Vote ID")
	 * })
	 * @param ApiRequest $request
	 * @return VoteResDto
	 */
	public function byId(ApiRequest $request): VoteResDto
	{
		try {
			return $this->votesFacade->findOne(intval($request->getParameter('id')));
		} catch (EntityNotFoundException $e) {
			throw ClientErrorException::create()
				->withMessage('Vote not found')
				->withCode(IResponse::S404_NOT_FOUND);
		}
	}

}

