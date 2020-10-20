<?php declare(strict_types=1);


namespace App\Modules\Api\V1\Comments;


use Apitte\Core\Annotation\Controller\Method;
use Apitte\Core\Annotation\Controller\Path;
use Apitte\Core\Annotation\Controller\RequestParameter;
use Apitte\Core\Annotation\Controller\RequestParameters;
use Apitte\Core\Http\ApiRequest;
use App\Domain\Api\Comments\Facade\CommentsFacade;
use App\Domain\Api\Comments\Response\CommentResDto;
use App\Modules\Api\V1\BaseV1Controller;

/**
 * Class CommentsController
 * @package App\Modules\Api\V1\Comments
 * @Path ("/comments")
 */
class CommentsController extends BaseV1Controller
{

	/** @var CommentsFacade */
	private $commentsFacade;

	/**
	 * CommentsController constructor.
	 * @param CommentsFacade $commentsFacade
	 */
	public function __construct(CommentsFacade $commentsFacade)
	{
		$this->commentsFacade = $commentsFacade;
	}


	/**
	 * @Path("/")
	 * @Method("GET")
	 * @RequestParameters({
	 * 		@RequestParameter(name="limit", type="int", in="query", required=false, description="Data limit"),
	 * 		@RequestParameter(name="offset", type="int", in="query", required=false, description="Data offset")
	 * })
	 * @param ApiRequest $request
	 * @return CommentResDto[]
	 */
	public function index(ApiRequest $request): array
	{
		return $this->commentsFacade->findAll(
			intval($request->getParameter('limit', 10)),
			intval($request->getParameter('offset', 0))
		);
	}

}

