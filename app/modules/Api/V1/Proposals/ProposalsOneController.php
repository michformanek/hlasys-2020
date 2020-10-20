<?php declare(strict_types=1);


namespace App\Modules\Api\V1\Proposals;


use Apitte\Core\Annotation\Controller\Method;
use Apitte\Core\Annotation\Controller\Path;
use Apitte\Core\Annotation\Controller\RequestParameter;
use Apitte\Core\Annotation\Controller\RequestParameters;
use Apitte\Core\Exception\Api\ClientErrorException;
use Apitte\Core\Http\ApiRequest;
use App\Domain\Api\Logs\Facade\LogsFacade;
use App\Domain\Api\Logs\Response\LogResDto;
use App\Domain\Api\Proposals\Facade\ProposalsFacade;
use App\Domain\Api\Proposals\Response\ProposalResDto;
use App\Model\Exception\Runtime\Database\EntityNotFoundException;
use App\Modules\Api\V1\BaseV1Controller;
use Nette\Http\IResponse;

/**
 * Class ProposalsOneController
 * @package App\Modules\Api\V1\Proposals
 * @Path("/proposals")
 */
class ProposalsOneController extends BaseV1Controller
{

	/** @var ProposalsFacade */
	private $proposalsFacade;

	/**
	 * ProposalsOneController constructor.
	 * @param ProposalsFacade $proposalsFacade
	 */
	public function __construct(ProposalsFacade $proposalsFacade)
	{
		$this->proposalsFacade = $proposalsFacade;
	}


	/**
	 * @Path("/{id}")
	 * @Method("GET")
	 * @RequestParameters({
	 *      @RequestParameter(name="id", type="int", description="Proposal ID")
	 * })
	 * @param ApiRequest $request
	 * @return ProposalResDto
	 */
	public function byId(ApiRequest $request): ProposalResDto
	{
		try {
			return $this->proposalsFacade->findOne(intval($request->getParameter('id')));
		} catch (EntityNotFoundException $e) {
			throw ClientErrorException::create()
				->withMessage('Proposal not found')
				->withCode(IResponse::S404_NOT_FOUND);
		}
	}

}

