<?php declare(strict_types=1);


namespace App\Modules\Api\V1\Logs;


use Apitte\Core\Annotation\Controller\Method;
use Apitte\Core\Annotation\Controller\Path;
use Apitte\Core\Annotation\Controller\RequestParameter;
use Apitte\Core\Annotation\Controller\RequestParameters;
use Apitte\Core\Http\ApiRequest;
use App\Domain\Api\Logs\Facade\LogsFacade;
use App\Domain\Api\Logs\Response\LogResDto;
use App\Modules\Api\V1\BaseV1Controller;

/**
 * Class LogsController
 * @package App\Modules\Api\V1\Logs
 * @Path ("/logs")
 */
class LogsController extends BaseV1Controller
{

	/** @var LogsFacade */
	private $logsFacade;

	/**
	 * LogsController constructor.
	 * @param LogsFacade $logsFacade
	 */
	public function __construct(LogsFacade $logsFacade)
	{
		$this->logsFacade = $logsFacade;
	}

	/**
	 * @Path("/")
	 * @Method("GET")
	 * @RequestParameters({
	 * 		@RequestParameter(name="limit", type="int", in="query", required=false, description="Data limit"),
	 * 		@RequestParameter(name="offset", type="int", in="query", required=false, description="Data offset")
	 * })
	 * @param ApiRequest $request
	 * @return LogResDto[]
	 */
	public function index(ApiRequest $request): array
	{
		return $this->logsFacade->findAll(
			intval($request->getParameter('limit', 10)),
			intval($request->getParameter('offset', 0))
		);
	}

}

