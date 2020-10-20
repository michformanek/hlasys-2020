<?php declare(strict_types=1);


namespace App\Modules\Api\V1\Comments;


use Apitte\Core\Annotation\Controller\Method;
use Apitte\Core\Annotation\Controller\Path;
use Apitte\Core\Annotation\Controller\RequestParameter;
use Apitte\Core\Annotation\Controller\RequestParameters;
use Apitte\Core\Exception\Api\ClientErrorException;
use Apitte\Core\Http\ApiRequest;
use App\Domain\Api\Comments\Facade\CommentsFacade;
use App\Domain\Api\Comments\Response\CommentResDto;
use App\Model\Exception\Runtime\Database\EntityNotFoundException;
use App\Modules\Api\V1\BaseV1Controller;
use Nette\Http\IResponse;

/**
 * Class CommentsOneController
 * @package App\Modules\Api\V1\Comments
 * @Path("/comments")
 */
class CommentsOneController extends BaseV1Controller
{

	/** @var CommentsFacade */
	private $commentsFacade;

	/**
	 * CommentsOneController constructor.
	 * @param CommentsFacade $commentsFacade
	 */
	public function __construct(CommentsFacade $commentsFacade)
	{
		$this->commentsFacade = $commentsFacade;
	}


	/**
	 * @Path("/{id}")
	 * @Method("GET")
	 * @RequestParameters({
	 *      @RequestParameter(name="id", type="int", description="Comment ID")
	 * })
	 * @param ApiRequest $request
	 * @return CommentResDto
	 */
	public function byId(ApiRequest $request): CommentResDto
	{
		try {
			return $this->commentsFacade->findOne(intval($request->getParameter('id')));
		} catch (EntityNotFoundException $e) {
			throw ClientErrorException::create()
				->withMessage('Comment not found')
				->withCode(IResponse::S404_NOT_FOUND);
		}
	}

}

