<?php declare(strict_types = 1);

// Uncomment this line if you must temporarily take down your site for maintenance.
//require '.maintenance.php';

use Apitte\Core\Application\IApplication as ApiApplication;
use Nette\Application\Application as UIApplication;

require __DIR__ . '/../vendor/autoload.php';

$isApi = substr($_SERVER['REQUEST_URI'], 0, 4) === '/api';

// Let bootstrap create Dependency Injection container.
$container = require_once __DIR__ . '/../app/bootstrap.php';

if ($isApi) {
	$container->getByType(ApiApplication::class)->run();
} else {
	$container->getByType(UIApplication::class)->run();
}
