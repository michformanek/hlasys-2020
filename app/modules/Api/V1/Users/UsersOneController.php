<?php declare(strict_types=1);


namespace App\Modules\Api\V1\Users;


use Apitte\Core\Annotation\Controller\Method;
use Apitte\Core\Annotation\Controller\Path;
use Apitte\Core\Annotation\Controller\RequestParameter;
use Apitte\Core\Annotation\Controller\RequestParameters;
use Apitte\Core\Exception\Api\ClientErrorException;
use Apitte\Core\Http\ApiRequest;
use App\Domain\Api\Logs\Facade\LogsFacade;
use App\Domain\Api\Logs\Response\LogResDto;
use App\Domain\Api\Users\Facade\UsersFacade;
use App\Domain\Api\Users\Response\UserResDto;
use App\Model\Exception\Runtime\Database\EntityNotFoundException;
use App\Modules\Api\V1\BaseV1Controller;
use Nette\Http\IResponse;

/**
 * Class UsersOneController
 * @package App\Modules\Api\V1\Users
 * @Path("/users")
 */
class UsersOneController extends BaseV1Controller
{

	/** @var UsersFacade */
	private $usersFacade;

	/**
	 * UsersOneController constructor.
	 * @param UsersFacade $usersFacade
	 */
	public function __construct(UsersFacade $usersFacade)
	{
		$this->usersFacade = $usersFacade;
	}


	/**
	 * @Path("/{id}")
	 * @Method("GET")
	 * @RequestParameters({
	 *      @RequestParameter(name="id", type="int", description="User ID")
	 * })
	 * @param ApiRequest $request
	 * @return UserResDto
	 */
	public function byId(ApiRequest $request): UserResDto
	{
		try {
			return $this->usersFacade->findOne(intval($request->getParameter('id')));
		} catch (EntityNotFoundException $e) {
			throw ClientErrorException::create()
				->withMessage('User not found')
				->withCode(IResponse::S404_NOT_FOUND);
		}
	}

}

