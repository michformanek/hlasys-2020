<?php declare(strict_types=1);


namespace App\Modules\Api\V1\Watches;


use Apitte\Core\Annotation\Controller\Method;
use Apitte\Core\Annotation\Controller\Path;
use Apitte\Core\Annotation\Controller\RequestParameter;
use Apitte\Core\Annotation\Controller\RequestParameters;
use Apitte\Core\Http\ApiRequest;
use App\Domain\Api\Watches\Facade\WatchesFacade;
use App\Domain\Api\Watches\Response\WatchResDto;
use App\Modules\Api\V1\BaseV1Controller;

/**
 * Class LogsController
 * @package App\Modules\Api\V1\Logs
 * @Path ("/watches")
 */
class WatchesController extends BaseV1Controller
{

	/** @var WatchesFacade */
	private $watchesFacade;

	/**
	 * WatchesController constructor.
	 * @param WatchesFacade $watchesFacade
	 */
	public function __construct(WatchesFacade $watchesFacade)
	{
		$this->watchesFacade = $watchesFacade;
	}

	/**
	 * @Path("/")
	 * @Method("GET")
	 * @RequestParameters({
	 * 		@RequestParameter(name="limit", type="int", in="query", required=false, description="Data limit"),
	 * 		@RequestParameter(name="offset", type="int", in="query", required=false, description="Data offset")
	 * })
	 * @param ApiRequest $request
	 * @return WatchResDto[]
	 */
	public function index(ApiRequest $request): array
	{
		return $this->watchesFacade->findAll(
			intval($request->getParameter('limit', 10)),
			intval($request->getParameter('offset', 0))
		);
	}

}

