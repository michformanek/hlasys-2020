<?php declare(strict_types=1);


namespace App\Modules\Api\V1\Watches;


use Apitte\Core\Annotation\Controller\Method;
use Apitte\Core\Annotation\Controller\Path;
use Apitte\Core\Annotation\Controller\RequestParameter;
use Apitte\Core\Annotation\Controller\RequestParameters;
use Apitte\Core\Exception\Api\ClientErrorException;
use Apitte\Core\Http\ApiRequest;
use App\Domain\Api\Watches\Facade\WatchesFacade;
use App\Domain\Api\Watches\Response\WatchResDto;
use App\Model\Exception\Runtime\Database\EntityNotFoundException;
use App\Modules\Api\V1\BaseV1Controller;
use Nette\Http\IResponse;

/**
 * Class LogsOneController
 * @package App\Modules\Api\V1\Watches
 * @Path("/watches")
 */
class WatchesOneController extends BaseV1Controller
{

	/** @var WatchesFacade */
	private $watchesFacade;

	/**
	 * WatchesOneController constructor.
	 * @param WatchesFacade $watchesFacade
	 */
	public function __construct(WatchesFacade $watchesFacade)
	{
		$this->watchesFacade = $watchesFacade;
	}

	/**
	 * @Path("/{id}")
	 * @Method("GET")
	 * @RequestParameters({
	 *      @RequestParameter(name="id", type="int", description="Log ID")
	 * })
	 * @param ApiRequest $request
	 * @return WatchResDto
	 */
	public function byId(ApiRequest $request): WatchResDto
	{
		try {
			return $this->watchesFacade->findOne(intval($request->getParameter('id')));
		} catch (EntityNotFoundException $e) {
			throw ClientErrorException::create()
				->withMessage('Watch not found')
				->withCode(IResponse::S404_NOT_FOUND);
		}
	}

}

