<?php declare(strict_types=1);


namespace App\Modules\Api\V1\Users;


use Apitte\Core\Annotation\Controller\Method;
use Apitte\Core\Annotation\Controller\Path;
use Apitte\Core\Annotation\Controller\RequestParameter;
use Apitte\Core\Annotation\Controller\RequestParameters;
use Apitte\Core\Http\ApiRequest;
use App\Domain\Api\Users\Facade\UsersFacade;
use App\Domain\Api\Users\Response\UserResDto;
use App\Modules\Api\V1\BaseV1Controller;

/**
 * Class UsersController
 * @package App\Modules\Api\V1\Users
 * @Path ("/users")
 */
class UsersController extends BaseV1Controller
{

	/** @var UsersFacade */
	private $usersFacade;

	/**
	 * UsersController constructor.
	 * @param UsersFacade $usersFacade
	 */
	public function __construct(UsersFacade $usersFacade)
	{
		$this->usersFacade = $usersFacade;
	}


	/**
	 * @Path("/")
	 * @Method("GET")
	 * @RequestParameters({
	 * 		@RequestParameter(name="limit", type="int", in="query", required=false, description="Data limit"),
	 * 		@RequestParameter(name="offset", type="int", in="query", required=false, description="Data offset")
	 * })
	 * @param ApiRequest $request
	 * @return UserResDto[]
	 */
	public function index(ApiRequest $request): array
	{
		return $this->usersFacade->findAll(
			intval($request->getParameter('limit', 10)),
			intval($request->getParameter('offset', 0))
		);
	}

}

