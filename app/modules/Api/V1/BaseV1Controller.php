<?php declare(strict_types = 1);

namespace App\Modules\Api\V1;

use Apitte\Core\Annotation\Controller\Id;
use Apitte\Core\Annotation\Controller\Path;
use App\Modules\Api\BaseController;

/**
 * @Path("/v1")
 * @Id("v1")
 */
abstract class BaseV1Controller extends BaseController
{

}
