<?php declare(strict_types=1);


namespace App\Modules\Api\V1\Logs;


use Apitte\Core\Annotation\Controller\Method;
use Apitte\Core\Annotation\Controller\Path;
use Apitte\Core\Annotation\Controller\RequestParameter;
use Apitte\Core\Annotation\Controller\RequestParameters;
use Apitte\Core\Exception\Api\ClientErrorException;
use Apitte\Core\Http\ApiRequest;
use App\Domain\Api\Logs\Facade\LogsFacade;
use App\Domain\Api\Logs\Response\LogResDto;
use App\Model\Exception\Runtime\Database\EntityNotFoundException;
use App\Modules\Api\V1\BaseV1Controller;
use Nette\Http\IResponse;

/**
 * Class LogsOneController
 * @package App\Modules\Api\V1\Logs
 * @Path("/logs")
 */
class LogsOneController extends BaseV1Controller
{

	/** @var LogsFacade */
	private $logsFacade;

	/**
	 * LogsOneController constructor.
	 * @param LogsFacade $logsFacade
	 */
	public function __construct(LogsFacade $logsFacade)
	{
		$this->logsFacade = $logsFacade;
	}

	/**
	 * @Path("/{id}")
	 * @Method("GET")
	 * @RequestParameters({
	 *      @RequestParameter(name="id", type="int", description="Log ID")
	 * })
	 * @param ApiRequest $request
	 * @return LogResDto
	 */
	public function byId(ApiRequest $request): LogResDto
	{
		try {
			return $this->logsFacade->findOne(intval($request->getParameter('id')));
		} catch (EntityNotFoundException $e) {
			throw ClientErrorException::create()
				->withMessage('Log not found')
				->withCode(IResponse::S404_NOT_FOUND);
		}
	}

}

