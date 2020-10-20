<?php
// source: /var/www/html/app/config/env/prod.neon
// source: /var/www/html/app/config/config.local.neon
// source: array
// source: array

/** @noinspection PhpParamsInspection,PhpMethodMayBeStaticInspection */

declare(strict_types=1);

class Container_9dfe81f1cc extends Nette\DI\Container
{
	protected $tags = [
		'nettrine.subscriber' => ['017' => true],
		'middleware' => [
			'api.middlewares.api' => ['priority' => 500],
			'middleware.authenticator' => ['priority' => 200],
			'middleware.methodOverride' => ['priority' => 150],
			'middleware.tryCatch' => ['priority' => 1],
		],
		'nette.inject' => [
			'application.1' => true,
			'application.10' => true,
			'application.2' => true,
			'application.3' => true,
			'application.4' => true,
			'application.5' => true,
			'application.6' => true,
			'application.7' => true,
			'application.8' => true,
			'application.9' => true,
			'nettrine.fixtures.loadDataFixturesCommand' => true,
		],
		'console.command' => [
			'nettrine.fixtures.loadDataFixturesCommand' => 'doctrine:fixtures:load',
			'nettrine.migrations.diffCommand' => 'migrations:diff',
			'nettrine.migrations.executeCommand' => 'migrations:execute',
			'nettrine.migrations.generateCommand' => 'migrations:generate',
			'nettrine.migrations.latestCommand' => 'migrations:latest',
			'nettrine.migrations.migrateCommand' => 'migrations:migrate',
			'nettrine.migrations.statusCommand' => 'migrations:status',
			'nettrine.migrations.upToDateCommand' => 'migrations:up-to-date',
			'nettrine.migrations.versionCommand' => 'migrations:version',
		],
		'nettrine.orm.annotation.driver' => ['nettrine.orm.annotations.annotationDriver' => true],
	];

	protected $types = ['container' => 'Nette\DI\Container'];

	protected $aliases = [
		'application' => 'application.application',
		'cacheStorage' => 'cache.storage',
		'httpRequest' => 'http.request',
		'httpResponse' => 'http.response',
		'nette.httpRequestFactory' => 'http.requestFactory',
		'nette.latteFactory' => 'latte.latteFactory',
		'nette.mailer' => 'mail.mailer',
		'nette.presenterFactory' => 'application.presenterFactory',
		'nette.templateFactory' => 'latte.templateFactory',
		'nette.userStorage' => 'security.userStorage',
		'router' => 'routing.router',
		'session' => 'session.session',
		'user' => 'security.user',
	];

	protected $wiring = [
		'Nette\DI\Container' => [['container']],
		'Nette\Application\Application' => [['application.application']],
		'Nette\Application\IPresenterFactory' => [['application.presenterFactory']],
		'Nette\Application\LinkGenerator' => [['application.linkGenerator']],
		'Nette\Caching\IStorage' => [['cache.storage']],
		'Nette\Http\RequestFactory' => [['http.requestFactory']],
		'Nette\Http\IRequest' => [['http.request']],
		'Nette\Http\Request' => [['http.request']],
		'Nette\Http\IResponse' => [['http.response']],
		'Nette\Http\Response' => [['http.response']],
		'Nette\Bridges\ApplicationLatte\ILatteFactory' => [['latte.latteFactory']],
		'Nette\Bridges\ApplicationLatte\TemplateFactory' => [['latte.templateFactory']],
		'Nette\Application\UI\ITemplateFactory' => [['latte.templateFactory']],
		'App\Model\Latte\TemplateFactory' => [['latte.templateFactory']],
		'Nette\Mail\Mailer' => [0 => ['contributte.post.mailer'], 2 => ['mail.mailer']],
		'Nette\Routing\Router' => [['routing.router']],
		'Nette\Application\IRouter' => [['routing.router']],
		'Nette\Security\Passwords' => [['security.passwords']],
		'Nette\Security\IUserStorage' => [['security.userStorage']],
		'Nette\Security\User' => [['security.user']],
		'App\Model\Security\SecurityUser' => [['security.user']],
		'Nette\Http\Session' => [['session.session']],
		'Tracy\ILogger' => [
			0 => ['contributte.monolog.psrToTracyLazyAdapter'],
			2 => ['tracy.logger', 'contributte.monolog.psrToTracyAdapter'],
		],
		'Tracy\BlueScreen' => [['tracy.blueScreen']],
		'Tracy\Bar' => [['tracy.bar']],
		'Symfony\Component\Console\Command\Command' => [
			0 => [
				'contributte.console.extra.advancedCache.generatorCommand',
				'contributte.console.extra.advancedCache.cleanCommand',
				'contributte.console.extra.cache.purge',
				'contributte.console.extra.caching.clear',
				'contributte.console.extra.di.purge',
				'contributte.console.extra.latte.warmup',
				'contributte.console.extra.latte.purge',
				'contributte.console.extra.router.dump',
				'contributte.console.extra.security.password',
				'contributte.console.extra.utils.random',
				'nettrine.fixtures.loadDataFixturesCommand',
			],
			2 => [
				10 => 'nettrine.migrations.diffCommand',
				'nettrine.migrations.executeCommand',
				'nettrine.migrations.generateCommand',
				'nettrine.migrations.latestCommand',
				'nettrine.migrations.migrateCommand',
				'nettrine.migrations.statusCommand',
				'nettrine.migrations.upToDateCommand',
				'nettrine.migrations.versionCommand',
			],
		],
		'Contributte\Console\Extra\Command\AdvancedCache\CacheGenerateCommand' => [
			['contributte.console.extra.advancedCache.generatorCommand'],
		],
		'Contributte\Console\Extra\Command\AdvancedCache\CacheCleanCommand' => [
			['contributte.console.extra.advancedCache.cleanCommand'],
		],
		'Contributte\Console\Extra\Command\Cache\CachePurgeCommand' => [['contributte.console.extra.cache.purge']],
		'Contributte\Console\Extra\Command\Caching\CachingClearCommand' => [['contributte.console.extra.caching.clear']],
		'Contributte\Console\Extra\Command\DI\DIPurgeCommand' => [['contributte.console.extra.di.purge']],
		'Contributte\Console\Extra\Command\Latte\LatteWarmupCommand' => [['contributte.console.extra.latte.warmup']],
		'Contributte\Console\Extra\Command\Latte\LattePurgeCommand' => [['contributte.console.extra.latte.purge']],
		'Contributte\Console\Extra\Command\Router\RouterDumpCommand' => [['contributte.console.extra.router.dump']],
		'Contributte\Console\Extra\Command\Security\SecurityPasswordCommand' => [
			['contributte.console.extra.security.password'],
		],
		'Contributte\Console\Extra\Command\Utils\UtilsRandomCommand' => [['contributte.console.extra.utils.random']],
		'Symfony\Contracts\EventDispatcher\EventDispatcherInterface' => [['contributte.events.dispatcher']],
		'Psr\EventDispatcher\EventDispatcherInterface' => [['contributte.events.dispatcher']],
		'Symfony\Component\EventDispatcher\EventDispatcherInterface' => [['contributte.events.dispatcher']],
		'Monolog\Handler\StreamHandler' => [2 => ['contributte.monolog.logger.default.handler.0']],
		'Monolog\Handler\AbstractProcessingHandler' => [2 => ['contributte.monolog.logger.default.handler.0']],
		'Monolog\Handler\AbstractHandler' => [
			2 => ['contributte.monolog.logger.default.handler.0', 'contributte.monolog.logger.default.handler.tracy'],
		],
		'Monolog\Handler\Handler' => [
			2 => ['contributte.monolog.logger.default.handler.0', 'contributte.monolog.logger.default.handler.tracy'],
		],
		'Monolog\Handler\HandlerInterface' => [
			2 => ['contributte.monolog.logger.default.handler.0', 'contributte.monolog.logger.default.handler.tracy'],
		],
		'Monolog\ResettableInterface' => [
			0 => ['contributte.monolog.logger.default'],
			2 => ['contributte.monolog.logger.default.handler.0', 'contributte.monolog.logger.default.handler.tracy'],
		],
		'Monolog\Handler\ProcessableHandlerInterface' => [2 => ['contributte.monolog.logger.default.handler.0']],
		'Monolog\Handler\FormattableHandlerInterface' => [
			2 => ['contributte.monolog.logger.default.handler.0', 'contributte.monolog.logger.default.handler.tracy'],
		],
		'Monolog\Handler\RotatingFileHandler' => [2 => ['contributte.monolog.logger.default.handler.0']],
		'Monolog\Handler\PsrHandler' => [2 => ['contributte.monolog.logger.default.handler.tracy']],
		'Monolog\Processor\ProcessorInterface' => [
			2 => [
				'contributte.monolog.logger.default.processor.0',
				'contributte.monolog.logger.default.processor.1',
				'contributte.monolog.logger.default.processor.2',
				'contributte.monolog.logger.default.processor.3',
			],
		],
		'Monolog\Processor\WebProcessor' => [2 => ['contributte.monolog.logger.default.processor.0']],
		'Monolog\Processor\IntrospectionProcessor' => [2 => ['contributte.monolog.logger.default.processor.1']],
		'Monolog\Processor\MemoryProcessor' => [2 => ['contributte.monolog.logger.default.processor.2']],
		'Monolog\Processor\MemoryPeakUsageProcessor' => [2 => ['contributte.monolog.logger.default.processor.2']],
		'Monolog\Processor\ProcessIdProcessor' => [2 => ['contributte.monolog.logger.default.processor.3']],
		'Psr\Log\LoggerInterface' => [['contributte.monolog.logger.default']],
		'Monolog\Logger' => [['contributte.monolog.logger.default']],
		'Tracy\Bridges\Psr\PsrToTracyLoggerAdapter' => [2 => ['contributte.monolog.psrToTracyAdapter']],
		'Contributte\Monolog\Tracy\LazyTracyLogger' => [['contributte.monolog.psrToTracyLazyAdapter']],
		'Contributte\Mailing\IMailBuilderFactory' => [['contributte.mailing.builderFactory']],
		'Contributte\Mailing\IMailSender' => [['contributte.mailing.sender']],
		'Contributte\Mailing\IMailTemplateFactory' => [['contributte.mailing.templateFactory']],
		'Contributte\Mail\Message\IMessageFactory' => [['contributte.post.messageFactory']],
		'Nette\Mail\SmtpMailer' => [['contributte.post.mailer']],
		'Doctrine\DBAL\Logging\SQLLogger' => [1 => ['nettrine.dbal.logger'], [1 => 'nettrine.dbal.logger.config']],
		'Doctrine\DBAL\Logging\LoggerChain' => [['nettrine.dbal.logger']],
		'Doctrine\DBAL\Configuration' => [0 => ['nettrine.orm.configuration'], 2 => ['nettrine.dbal.configuration']],
		'Nettrine\DBAL\Logger\PsrLogger' => [2 => ['nettrine.dbal.logger.config']],
		'Doctrine\Common\EventManager' => [['nettrine.dbal.eventManager']],
		'Nettrine\DBAL\Events\ContainerAwareEventManager' => [['nettrine.dbal.eventManager']],
		'Nettrine\DBAL\ConnectionFactory' => [['nettrine.dbal.connectionFactory']],
		'Doctrine\DBAL\Driver\Connection' => [['nettrine.dbal.connection']],
		'Doctrine\DBAL\Connection' => [['nettrine.dbal.connection']],
		'Doctrine\ORM\Configuration' => [['nettrine.orm.configuration']],
		'Doctrine\ORM\Mapping\EntityListenerResolver' => [['nettrine.orm.entityListenerResolver']],
		'Nettrine\ORM\Mapping\ContainerEntityListenerResolver' => [['nettrine.orm.entityListenerResolver']],
		'Nettrine\ORM\EntityManagerDecorator' => [['nettrine.orm.entityManagerDecorator']],
		'Doctrine\ORM\Decorator\EntityManagerDecorator' => [['nettrine.orm.entityManagerDecorator']],
		'Doctrine\Persistence\ObjectManagerDecorator' => [['nettrine.orm.entityManagerDecorator']],
		'Doctrine\Persistence\ObjectManager' => [['nettrine.orm.entityManagerDecorator']],
		'Doctrine\ORM\EntityManagerInterface' => [['nettrine.orm.entityManagerDecorator']],
		'App\Model\Database\EntityManager' => [['nettrine.orm.entityManagerDecorator']],
		'Doctrine\Persistence\AbstractManagerRegistry' => [['nettrine.orm.managerRegistry']],
		'Doctrine\Persistence\ConnectionRegistry' => [['nettrine.orm.managerRegistry']],
		'Doctrine\Persistence\ManagerRegistry' => [['nettrine.orm.managerRegistry']],
		'Nettrine\ORM\ManagerRegistry' => [['nettrine.orm.managerRegistry']],
		'Doctrine\Persistence\Mapping\Driver\MappingDriver' => [
			0 => ['nettrine.orm.mappingDriver'],
			2 => [1 => 'nettrine.orm.annotations.annotationDriver'],
		],
		'Doctrine\Persistence\Mapping\Driver\MappingDriverChain' => [['nettrine.orm.mappingDriver']],
		'Doctrine\ORM\Cache\RegionsConfiguration' => [2 => ['nettrine.orm.cache.regions']],
		'Doctrine\ORM\Cache\CacheFactory' => [2 => ['nettrine.orm.cache.cacheFactory']],
		'Doctrine\ORM\Cache\DefaultCacheFactory' => [2 => ['nettrine.orm.cache.cacheFactory']],
		'Doctrine\ORM\Cache\CacheConfiguration' => [2 => ['nettrine.orm.cache.cacheConfiguration']],
		'Doctrine\Common\Annotations\Reader' => [
			0 => ['nettrine.annotations.reader'],
			2 => [0 => 'nettrine.annotations.delegatedReader', 2 => 'symfony.serializer.annotationReader'],
		],
		'Doctrine\Common\Annotations\AnnotationReader' => [
			2 => ['nettrine.annotations.delegatedReader', 'symfony.serializer.annotationReader'],
		],
		'Doctrine\Common\Cache\Cache' => [['nettrine.cache.driver']],
		'Doctrine\Migrations\Configuration\Configuration' => [['nettrine.migrations.configuration']],
		'Nettrine\Migrations\ContainerAwareConfiguration' => [['nettrine.migrations.configuration']],
		'Doctrine\Migrations\Tools\Console\Command\AbstractCommand' => [
			2 => [
				'nettrine.migrations.diffCommand',
				'nettrine.migrations.executeCommand',
				'nettrine.migrations.generateCommand',
				'nettrine.migrations.latestCommand',
				'nettrine.migrations.migrateCommand',
				'nettrine.migrations.statusCommand',
				'nettrine.migrations.upToDateCommand',
				'nettrine.migrations.versionCommand',
			],
		],
		'Doctrine\Migrations\Tools\Console\Command\DiffCommand' => [2 => ['nettrine.migrations.diffCommand']],
		'Doctrine\Migrations\Tools\Console\Command\ExecuteCommand' => [2 => ['nettrine.migrations.executeCommand']],
		'Doctrine\Migrations\Tools\Console\Command\GenerateCommand' => [2 => ['nettrine.migrations.generateCommand']],
		'Doctrine\Migrations\Tools\Console\Command\LatestCommand' => [2 => ['nettrine.migrations.latestCommand']],
		'Doctrine\Migrations\Tools\Console\Command\MigrateCommand' => [2 => ['nettrine.migrations.migrateCommand']],
		'Doctrine\Migrations\Tools\Console\Command\StatusCommand' => [2 => ['nettrine.migrations.statusCommand']],
		'Doctrine\Migrations\Tools\Console\Command\UpToDateCommand' => [2 => ['nettrine.migrations.upToDateCommand']],
		'Doctrine\Migrations\Tools\Console\Command\VersionCommand' => [2 => ['nettrine.migrations.versionCommand']],
		'Symfony\Component\Console\Helper\Helper' => [2 => ['nettrine.migrations.configurationHelper']],
		'Symfony\Component\Console\Helper\HelperInterface' => [2 => ['nettrine.migrations.configurationHelper']],
		'Doctrine\Migrations\Tools\Console\Helper\ConfigurationHelperInterface' => [
			2 => ['nettrine.migrations.configurationHelper'],
		],
		'Doctrine\Migrations\Tools\Console\Helper\ConfigurationHelper' => [
			2 => ['nettrine.migrations.configurationHelper'],
		],
		'Doctrine\Common\DataFixtures\Loader' => [['nettrine.fixtures.fixturesLoader']],
		'Nettrine\Fixtures\Loader\FixturesLoader' => [['nettrine.fixtures.fixturesLoader']],
		'Nettrine\Fixtures\Command\LoadDataFixturesCommand' => [['nettrine.fixtures.loadDataFixturesCommand']],
		'Contributte\Middlewares\Utils\ChainBuilder' => [2 => ['middlewares.chain']],
		'Contributte\Middlewares\Application\AbstractApplication' => [['middlewares.application']],
		'Contributte\Middlewares\Application\IApplication' => [['middlewares.application']],
		'Contributte\Middlewares\Application\MiddlewareApplication' => [['middlewares.application']],
		'App\Modules\Api\PubV1\BasePubV1Controller' => [['resource._App_Modules_Api_.1']],
		'App\Modules\Api\BasePubController' => [['resource._App_Modules_Api_.1']],
		'Apitte\Core\UI\Controller\IController' => [
			[
				'resource._App_Modules_Api_.1',
				'resource._App_Modules_Api_.2',
				'resource._App_Modules_Api_.3',
				'resource._App_Modules_Api_.4',
				'resource._App_Modules_Api_.5',
				'resource._App_Modules_Api_.6',
				'resource._App_Modules_Api_.7',
				'resource._App_Modules_Api_.8',
				'resource._App_Modules_Api_.9',
				'resource._App_Modules_Api_.10',
				'resource._App_Modules_Api_.11',
				'resource._App_Modules_Api_.12',
				'resource._App_Modules_Api_.13',
			],
		],
		'App\Modules\Api\PubV1\OpenApiController' => [['resource._App_Modules_Api_.1']],
		'App\Modules\Api\V1\BaseV1Controller' => [
			[
				'resource._App_Modules_Api_.2',
				'resource._App_Modules_Api_.3',
				'resource._App_Modules_Api_.4',
				'resource._App_Modules_Api_.5',
				'resource._App_Modules_Api_.6',
				'resource._App_Modules_Api_.7',
				'resource._App_Modules_Api_.8',
				'resource._App_Modules_Api_.9',
				'resource._App_Modules_Api_.10',
				'resource._App_Modules_Api_.11',
				'resource._App_Modules_Api_.12',
				'resource._App_Modules_Api_.13',
			],
		],
		'App\Modules\Api\BaseController' => [
			[
				'resource._App_Modules_Api_.2',
				'resource._App_Modules_Api_.3',
				'resource._App_Modules_Api_.4',
				'resource._App_Modules_Api_.5',
				'resource._App_Modules_Api_.6',
				'resource._App_Modules_Api_.7',
				'resource._App_Modules_Api_.8',
				'resource._App_Modules_Api_.9',
				'resource._App_Modules_Api_.10',
				'resource._App_Modules_Api_.11',
				'resource._App_Modules_Api_.12',
				'resource._App_Modules_Api_.13',
			],
		],
		'App\Modules\Api\V1\Comments\CommentsOneController' => [['resource._App_Modules_Api_.2']],
		'App\Modules\Api\V1\Comments\CommentsController' => [['resource._App_Modules_Api_.3']],
		'App\Modules\Api\V1\Logs\LogsController' => [['resource._App_Modules_Api_.4']],
		'App\Modules\Api\V1\Logs\LogsOneController' => [['resource._App_Modules_Api_.5']],
		'App\Modules\Api\V1\Proposals\ProposalsController' => [['resource._App_Modules_Api_.6']],
		'App\Modules\Api\V1\Proposals\ProposalsOneController' => [['resource._App_Modules_Api_.7']],
		'App\Modules\Api\V1\Users\UsersOneController' => [['resource._App_Modules_Api_.8']],
		'App\Modules\Api\V1\Users\UsersController' => [['resource._App_Modules_Api_.9']],
		'App\Modules\Api\V1\Votes\VotesController' => [['resource._App_Modules_Api_.10']],
		'App\Modules\Api\V1\Votes\VotesOneController' => [['resource._App_Modules_Api_.11']],
		'App\Modules\Api\V1\Watches\WatchesOneController' => [['resource._App_Modules_Api_.12']],
		'App\Modules\Api\V1\Watches\WatchesController' => [['resource._App_Modules_Api_.13']],
		'Apitte\Core\Dispatcher\JsonDispatcher' => [['api.core.dispatcher']],
		'Apitte\Core\Dispatcher\CoreDispatcher' => [['api.core.dispatcher']],
		'Apitte\Core\Dispatcher\IDispatcher' => [['api.core.dispatcher']],
		'App\Model\Api\Dispatcher\JsonDispatcher' => [['api.core.dispatcher']],
		'Apitte\Core\ErrorHandler\IErrorHandler' => [['api.core.errorHandler']],
		'Apitte\Core\Application\IApplication' => [['api.core.application']],
		'Apitte\Core\Router\IRouter' => [['api.core.router']],
		'Apitte\Core\Handler\IHandler' => [['api.core.handler']],
		'Apitte\Core\Schema\Schema' => [['api.core.schema']],
		'Contributte\Middlewares\IMiddleware' => [
			['api.middlewares.api', 'middleware.tryCatch', 'middleware.methodOverride', 'middleware.authenticator'],
		],
		'Apitte\Middlewares\ApiMiddleware' => [['api.middlewares.api']],
		'Apitte\OpenApi\SchemaDefinition\Entity\IEntityAdapter' => [['api.openapi.entityAdapter']],
		'Apitte\OpenApi\SchemaDefinition\Entity\EntityAdapter' => [['api.openapi.entityAdapter']],
		'Apitte\OpenApi\SchemaDefinition\IDefinition' => [['api.openapi.coreDefinition']],
		'Apitte\OpenApi\SchemaDefinition\CoreDefinition' => [['api.openapi.coreDefinition']],
		'Apitte\OpenApi\ISchemaBuilder' => [['api.openapi.schemaBuilder']],
		'Apitte\OpenApi\SchemaBuilder' => [['api.openapi.schemaBuilder']],
		'App\Domain\Api\Comments\Facade\CommentsFacade' => [['01']],
		'App\Domain\Api\Logs\Facade\LogsFacade' => [['02']],
		'App\Domain\Api\Proposals\Facade\ProposalsFacade' => [['03']],
		'App\Domain\Api\Users\Facade\UsersFacade' => [['04']],
		'App\Domain\Api\Votes\Facade\VotesFacade' => [['05']],
		'App\Domain\Api\Watches\Facade\WatchesFacade' => [['06']],
		'App\Domain\User\CreateUserFacade' => [['07']],
		'App\Domain\Vote\VoteFacade' => [['08']],
		'App\Domain\Comment\CommentFacade' => [['09']],
		'App\Domain\Proposal\ProposalFacade' => [['010']],
		'App\UI\Form\FormFactory' => [['011']],
		'App\UI\Control\Grid\ProposalGridFactory' => [['012']],
		'App\UI\Control\VoteTable\VoteTableFactory' => [['013']],
		'App\UI\Control\CommentTable\CommentTableFactory' => [['014']],
		'App\UI\Navigation\NavigationFactory' => [['015']],
		'Nette\Security\IAuthenticator' => [['security.authenticator']],
		'App\Model\Security\Authenticator\UserAuthenticator' => [['security.authenticator']],
		'App\Model\Router\RouterFactory' => [['016']],
		'Symfony\Component\Serializer\SerializerInterface' => [['symfony.serializer.serializer']],
		'Symfony\Component\Serializer\Normalizer\ContextAwareNormalizerInterface' => [['symfony.serializer.serializer']],
		'Symfony\Component\Serializer\Normalizer\ContextAwareDenormalizerInterface' => [['symfony.serializer.serializer']],
		'Symfony\Component\Serializer\Encoder\ContextAwareEncoderInterface' => [['symfony.serializer.serializer']],
		'Symfony\Component\Serializer\Encoder\ContextAwareDecoderInterface' => [['symfony.serializer.serializer']],
		'Symfony\Component\Serializer\Normalizer\NormalizerInterface' => [
			0 => ['symfony.serializer.serializer'],
			2 => [1 => 'symfony.serializer.objectNormalizer'],
		],
		'Symfony\Component\Serializer\Normalizer\DenormalizerInterface' => [
			0 => ['symfony.serializer.serializer'],
			2 => [1 => 'symfony.serializer.objectNormalizer'],
		],
		'Symfony\Component\Serializer\Encoder\EncoderInterface' => [['symfony.serializer.serializer']],
		'Symfony\Component\Serializer\Encoder\DecoderInterface' => [['symfony.serializer.serializer']],
		'Symfony\Component\Serializer\Serializer' => [['symfony.serializer.serializer']],
		'Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer' => [
			2 => ['symfony.serializer.objectNormalizer'],
		],
		'Symfony\Component\Serializer\Normalizer\AbstractNormalizer' => [2 => ['symfony.serializer.objectNormalizer']],
		'Symfony\Component\Serializer\SerializerAwareInterface' => [2 => ['symfony.serializer.objectNormalizer']],
		'Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface' => [
			2 => ['symfony.serializer.objectNormalizer'],
		],
		'Symfony\Component\Serializer\Normalizer\ObjectNormalizer' => [2 => ['symfony.serializer.objectNormalizer']],
		'Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactoryInterface' => [
			2 => ['symfony.serializer.classMetadataFactory'],
		],
		'Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory' => [
			2 => ['symfony.serializer.classMetadataFactory'],
		],
		'Symfony\Component\Serializer\Mapping\Loader\LoaderInterface' => [2 => ['symfony.serializer.annotationLoader']],
		'Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader' => [2 => ['symfony.serializer.annotationLoader']],
		'Symfony\Component\Validator\Mapping\Factory\MetadataFactoryInterface' => [['symfony.validator']],
		'Symfony\Component\Validator\Validator\ValidatorInterface' => [['symfony.validator']],
		'Symfony\Component\Validator\ValidatorBuilder' => [2 => ['symfony.validator.builder']],
		'Doctrine\Common\EventSubscriber' => [['017']],
		'Nettrine\Migrations\Events\FixPostgreSQLDefaultSchemaSubscriber' => [['017']],
		'Contributte\Middlewares\TryCatchMiddleware' => [['middleware.tryCatch']],
		'Contributte\Middlewares\MethodOverrideMiddleware' => [['middleware.methodOverride']],
		'App\Model\Api\Middleware\AuthenticationMiddleware' => [['middleware.authenticator']],
		'App\Modules\Base\BaseErrorPresenter' => [2 => ['application.1']],
		'App\Modules\Base\SecuredPresenter' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
			],
		],
		'App\Modules\Base\BasePresenter' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
			],
		],
		'Nette\Application\UI\Presenter' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
			],
		],
		'Nette\Application\UI\Control' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
			],
		],
		'Nette\Application\UI\Component' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
			],
		],
		'Nette\ComponentModel\Container' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
			],
		],
		'Nette\ComponentModel\Component' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
			],
		],
		'Nette\ComponentModel\IComponent' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
			],
		],
		'Nette\ComponentModel\IContainer' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
			],
		],
		'Nette\Application\UI\ISignalReceiver' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
			],
		],
		'Nette\Application\UI\IStatePersistent' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
			],
		],
		'ArrayAccess' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
			],
		],
		'Nette\Application\UI\IRenderable' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
			],
		],
		'Nette\Application\IPresenter' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
			],
		],
		'App\Modules\Front\Error\ErrorPresenter' => [2 => ['application.1']],
		'App\Modules\Base\BaseError4xxPresenter' => [2 => ['application.2']],
		'App\Modules\Front\Error4xx\Error4xxPresenter' => [2 => ['application.2']],
		'App\Modules\Front\BaseFrontPresenter' => [
			2 => ['application.3', 'application.5', 'application.6', 'application.7', 'application.8'],
		],
		'App\Modules\Front\Home\HomePresenter' => [2 => ['application.3']],
		'App\Modules\Base\UnsecuredPresenter' => [2 => ['application.4']],
		'App\Modules\Front\Sign\SignPresenter' => [2 => ['application.4']],
		'App\Modules\Front\Proposal\ProposalPresenter' => [2 => ['application.5']],
		'App\Modules\Front\Search\SearchPresenter' => [2 => ['application.6']],
		'App\Modules\Front\Detail\DetailPresenter' => [2 => ['application.7']],
		'App\Modules\Front\Changelog\ChangelogPresenter' => [2 => ['application.8']],
		'NetteModule\ErrorPresenter' => [2 => ['application.9']],
		'NetteModule\MicroPresenter' => [2 => ['application.10']],
		'Apitte\Core\Schema\Serialization\IHydrator' => [['api.core.schema.hydrator']],
		'Apitte\Core\Schema\Serialization\ArrayHydrator' => [['api.core.schema.hydrator']],
	];


	public function __construct(array $params = [])
	{
		parent::__construct($params);
		$this->parameters += [
			'system' => ['error' => ['email' => 'dev@hkfree.org', 'presenter' => 'Front:Error']],
			'database' => [
				'driver' => 'pdo_mysql',
				'host' => 'database',
				'dbname' => 'hlasys',
				'user' => 'hlas',
				'password' => 'hlas',
			],
			'project' => ['rev' => '1.0.0'],
			'files' => ['root' => '/var/www/html/app/../data/files'],
			'mailing' => ['from' => 'hlasys@localhost', 'from_name' => 'Hlasys'],
			'smtp' => ['host' => 'localhost', 'username' => 'fake', 'password' => 'fake'],
			'appDir' => '/var/www/html/app',
			'wwwDir' => '/var/www/html/www',
			'debugMode' => false,
			'productionMode' => true,
			'consoleMode' => false,
			'tempDir' => '/var/www/html/app/../temp',
			'rootDir' => '/var/www/html',
		];
	}


	public function createService01(): App\Domain\Api\Comments\Facade\CommentsFacade
	{
		return new App\Domain\Api\Comments\Facade\CommentsFacade($this->getService('nettrine.orm.entityManagerDecorator'));
	}


	public function createService02(): App\Domain\Api\Logs\Facade\LogsFacade
	{
		return new App\Domain\Api\Logs\Facade\LogsFacade($this->getService('nettrine.orm.entityManagerDecorator'));
	}


	public function createService03(): App\Domain\Api\Proposals\Facade\ProposalsFacade
	{
		return new App\Domain\Api\Proposals\Facade\ProposalsFacade($this->getService('nettrine.orm.entityManagerDecorator'));
	}


	public function createService04(): App\Domain\Api\Users\Facade\UsersFacade
	{
		return new App\Domain\Api\Users\Facade\UsersFacade($this->getService('nettrine.orm.entityManagerDecorator'));
	}


	public function createService05(): App\Domain\Api\Votes\Facade\VotesFacade
	{
		return new App\Domain\Api\Votes\Facade\VotesFacade($this->getService('nettrine.orm.entityManagerDecorator'));
	}


	public function createService06(): App\Domain\Api\Watches\Facade\WatchesFacade
	{
		return new App\Domain\Api\Watches\Facade\WatchesFacade($this->getService('nettrine.orm.entityManagerDecorator'));
	}


	public function createService07(): App\Domain\User\CreateUserFacade
	{
		return new App\Domain\User\CreateUserFacade($this->getService('nettrine.orm.entityManagerDecorator'));
	}


	public function createService08(): App\Domain\Vote\VoteFacade
	{
		return new App\Domain\Vote\VoteFacade(
			$this->getService('nettrine.orm.entityManagerDecorator'),
			$this->getService('security.user')
		);
	}


	public function createService09(): App\Domain\Comment\CommentFacade
	{
		return new App\Domain\Comment\CommentFacade(
			$this->getService('nettrine.orm.entityManagerDecorator'),
			$this->getService('security.user')
		);
	}


	public function createService010(): App\Domain\Proposal\ProposalFacade
	{
		return new App\Domain\Proposal\ProposalFacade($this->getService('nettrine.orm.entityManagerDecorator'));
	}


	public function createService011(): App\UI\Form\FormFactory
	{
		return new App\UI\Form\FormFactory(
			$this->getService('nettrine.orm.entityManagerDecorator'),
			$this->getService('08'),
			$this->getService('09'),
			$this->getService('security.user')
		);
	}


	public function createService012(): App\UI\Control\Grid\ProposalGridFactory
	{
		return new App\UI\Control\Grid\ProposalGridFactory;
	}


	public function createService013(): App\UI\Control\VoteTable\VoteTableFactory
	{
		return new App\UI\Control\VoteTable\VoteTableFactory;
	}


	public function createService014(): App\UI\Control\CommentTable\CommentTableFactory
	{
		return new App\UI\Control\CommentTable\CommentTableFactory;
	}


	public function createService015(): App\UI\Navigation\NavigationFactory
	{
		return new App\UI\Navigation\NavigationFactory;
	}


	public function createService016(): App\Model\Router\RouterFactory
	{
		return new App\Model\Router\RouterFactory;
	}


	public function createService017(): Nettrine\Migrations\Events\FixPostgreSQLDefaultSchemaSubscriber
	{
		return new Nettrine\Migrations\Events\FixPostgreSQLDefaultSchemaSubscriber;
	}


	public function createServiceApi__core__application(): Apitte\Core\Application\IApplication
	{
		return new Apitte\Core\Application\Application(
			$this->getService('api.core.errorHandler'),
			$this->getService('api.core.dispatcher')
		);
	}


	public function createServiceApi__core__dispatcher(): App\Model\Api\Dispatcher\JsonDispatcher
	{
		return new App\Model\Api\Dispatcher\JsonDispatcher(
			$this->getService('api.core.router'),
			$this->getService('api.core.handler'),
			$this->getService('symfony.serializer.serializer'),
			$this->getService('symfony.validator')
		);
	}


	public function createServiceApi__core__errorHandler(): Apitte\Core\ErrorHandler\IErrorHandler
	{
		$service = new Apitte\Core\ErrorHandler\PsrLogErrorHandler($this->getService('contributte.monolog.logger.default'));
		$service->setCatchException(true);
		return $service;
	}


	public function createServiceApi__core__handler(): Apitte\Core\Handler\IHandler
	{
		return new Apitte\Core\Handler\ServiceHandler($this);
	}


	public function createServiceApi__core__router(): Apitte\Core\Router\IRouter
	{
		return new Apitte\Core\Router\SimpleRouter($this->getService('api.core.schema'));
	}


	public function createServiceApi__core__schema(): Apitte\Core\Schema\Schema
	{
		return $this->getService('api.core.schema.hydrator')->hydrate([
			[
				'handler' => ['class' => 'App\Modules\Api\PubV1\OpenApiController', 'method' => 'meta'],
				'id' => null,
				'tags' => [],
				'methods' => ['GET'],
				'mask' => '/api/public/v1/openapi/meta',
				'parameters' => [],
				'responses' => [],
				'negotiations' => [],
				'attributes' => ['pattern' => '/api/public/v1/openapi/meta'],
				'openApi' => ['controller' => [], 'method' => []],
			],
			[
				'handler' => ['class' => 'App\Modules\Api\V1\Comments\CommentsOneController', 'method' => 'byId'],
				'id' => null,
				'tags' => [],
				'methods' => ['GET'],
				'mask' => '/api/v1/comments/{id}',
				'parameters' => [
					'id' => [
						'name' => 'id',
						'type' => 'int',
						'description' => 'Comment ID',
						'in' => 'path',
						'required' => true,
						'allowEmpty' => false,
						'deprecated' => false,
					],
				],
				'responses' => [],
				'negotiations' => [],
				'attributes' => ['pattern' => '/api/v1/comments/(?P<id>[^/]+)'],
				'openApi' => ['controller' => [], 'method' => []],
			],
			[
				'handler' => ['class' => 'App\Modules\Api\V1\Comments\CommentsController', 'method' => 'index'],
				'id' => null,
				'tags' => [],
				'methods' => ['GET'],
				'mask' => '/api/v1/comments',
				'parameters' => [
					'limit' => [
						'name' => 'limit',
						'type' => 'int',
						'description' => 'Data limit',
						'in' => 'query',
						'required' => false,
						'allowEmpty' => false,
						'deprecated' => false,
					],
					'offset' => [
						'name' => 'offset',
						'type' => 'int',
						'description' => 'Data offset',
						'in' => 'query',
						'required' => false,
						'allowEmpty' => false,
						'deprecated' => false,
					],
				],
				'responses' => [],
				'negotiations' => [],
				'attributes' => ['pattern' => '/api/v1/comments'],
				'openApi' => ['controller' => [], 'method' => []],
			],
			[
				'handler' => ['class' => 'App\Modules\Api\V1\Logs\LogsOneController', 'method' => 'byId'],
				'id' => null,
				'tags' => [],
				'methods' => ['GET'],
				'mask' => '/api/v1/logs/{id}',
				'parameters' => [
					'id' => [
						'name' => 'id',
						'type' => 'int',
						'description' => 'Log ID',
						'in' => 'path',
						'required' => true,
						'allowEmpty' => false,
						'deprecated' => false,
					],
				],
				'responses' => [],
				'negotiations' => [],
				'attributes' => ['pattern' => '/api/v1/logs/(?P<id>[^/]+)'],
				'openApi' => ['controller' => [], 'method' => []],
			],
			[
				'handler' => ['class' => 'App\Modules\Api\V1\Logs\LogsController', 'method' => 'index'],
				'id' => null,
				'tags' => [],
				'methods' => ['GET'],
				'mask' => '/api/v1/logs',
				'parameters' => [
					'limit' => [
						'name' => 'limit',
						'type' => 'int',
						'description' => 'Data limit',
						'in' => 'query',
						'required' => false,
						'allowEmpty' => false,
						'deprecated' => false,
					],
					'offset' => [
						'name' => 'offset',
						'type' => 'int',
						'description' => 'Data offset',
						'in' => 'query',
						'required' => false,
						'allowEmpty' => false,
						'deprecated' => false,
					],
				],
				'responses' => [],
				'negotiations' => [],
				'attributes' => ['pattern' => '/api/v1/logs'],
				'openApi' => ['controller' => [], 'method' => []],
			],
			[
				'handler' => ['class' => 'App\Modules\Api\V1\Proposals\ProposalsOneController', 'method' => 'byId'],
				'id' => null,
				'tags' => [],
				'methods' => ['GET'],
				'mask' => '/api/v1/proposals/{id}',
				'parameters' => [
					'id' => [
						'name' => 'id',
						'type' => 'int',
						'description' => 'Proposal ID',
						'in' => 'path',
						'required' => true,
						'allowEmpty' => false,
						'deprecated' => false,
					],
				],
				'responses' => [],
				'negotiations' => [],
				'attributes' => ['pattern' => '/api/v1/proposals/(?P<id>[^/]+)'],
				'openApi' => ['controller' => [], 'method' => []],
			],
			[
				'handler' => ['class' => 'App\Modules\Api\V1\Proposals\ProposalsController', 'method' => 'index'],
				'id' => null,
				'tags' => [],
				'methods' => ['GET'],
				'mask' => '/api/v1/proposals',
				'parameters' => [
					'limit' => [
						'name' => 'limit',
						'type' => 'int',
						'description' => 'Data limit',
						'in' => 'query',
						'required' => false,
						'allowEmpty' => false,
						'deprecated' => false,
					],
					'offset' => [
						'name' => 'offset',
						'type' => 'int',
						'description' => 'Data offset',
						'in' => 'query',
						'required' => false,
						'allowEmpty' => false,
						'deprecated' => false,
					],
				],
				'responses' => [],
				'negotiations' => [],
				'attributes' => ['pattern' => '/api/v1/proposals'],
				'openApi' => ['controller' => [], 'method' => []],
			],
			[
				'handler' => ['class' => 'App\Modules\Api\V1\Users\UsersOneController', 'method' => 'byId'],
				'id' => null,
				'tags' => [],
				'methods' => ['GET'],
				'mask' => '/api/v1/users/{id}',
				'parameters' => [
					'id' => [
						'name' => 'id',
						'type' => 'int',
						'description' => 'User ID',
						'in' => 'path',
						'required' => true,
						'allowEmpty' => false,
						'deprecated' => false,
					],
				],
				'responses' => [],
				'negotiations' => [],
				'attributes' => ['pattern' => '/api/v1/users/(?P<id>[^/]+)'],
				'openApi' => ['controller' => [], 'method' => []],
			],
			[
				'handler' => ['class' => 'App\Modules\Api\V1\Users\UsersController', 'method' => 'index'],
				'id' => null,
				'tags' => [],
				'methods' => ['GET'],
				'mask' => '/api/v1/users',
				'parameters' => [
					'limit' => [
						'name' => 'limit',
						'type' => 'int',
						'description' => 'Data limit',
						'in' => 'query',
						'required' => false,
						'allowEmpty' => false,
						'deprecated' => false,
					],
					'offset' => [
						'name' => 'offset',
						'type' => 'int',
						'description' => 'Data offset',
						'in' => 'query',
						'required' => false,
						'allowEmpty' => false,
						'deprecated' => false,
					],
				],
				'responses' => [],
				'negotiations' => [],
				'attributes' => ['pattern' => '/api/v1/users'],
				'openApi' => ['controller' => [], 'method' => []],
			],
			[
				'handler' => ['class' => 'App\Modules\Api\V1\Votes\VotesOneController', 'method' => 'byId'],
				'id' => null,
				'tags' => [],
				'methods' => ['GET'],
				'mask' => '/api/v1/votes/{id}',
				'parameters' => [
					'id' => [
						'name' => 'id',
						'type' => 'int',
						'description' => 'Vote ID',
						'in' => 'path',
						'required' => true,
						'allowEmpty' => false,
						'deprecated' => false,
					],
				],
				'responses' => [],
				'negotiations' => [],
				'attributes' => ['pattern' => '/api/v1/votes/(?P<id>[^/]+)'],
				'openApi' => ['controller' => [], 'method' => []],
			],
			[
				'handler' => ['class' => 'App\Modules\Api\V1\Votes\VotesController', 'method' => 'index'],
				'id' => null,
				'tags' => [],
				'methods' => ['GET'],
				'mask' => '/api/v1/votes',
				'parameters' => [
					'limit' => [
						'name' => 'limit',
						'type' => 'int',
						'description' => 'Data limit',
						'in' => 'query',
						'required' => false,
						'allowEmpty' => false,
						'deprecated' => false,
					],
					'offset' => [
						'name' => 'offset',
						'type' => 'int',
						'description' => 'Data offset',
						'in' => 'query',
						'required' => false,
						'allowEmpty' => false,
						'deprecated' => false,
					],
				],
				'responses' => [],
				'negotiations' => [],
				'attributes' => ['pattern' => '/api/v1/votes'],
				'openApi' => ['controller' => [], 'method' => []],
			],
			[
				'handler' => ['class' => 'App\Modules\Api\V1\Watches\WatchesOneController', 'method' => 'byId'],
				'id' => null,
				'tags' => [],
				'methods' => ['GET'],
				'mask' => '/api/v1/watches/{id}',
				'parameters' => [
					'id' => [
						'name' => 'id',
						'type' => 'int',
						'description' => 'Log ID',
						'in' => 'path',
						'required' => true,
						'allowEmpty' => false,
						'deprecated' => false,
					],
				],
				'responses' => [],
				'negotiations' => [],
				'attributes' => ['pattern' => '/api/v1/watches/(?P<id>[^/]+)'],
				'openApi' => ['controller' => [], 'method' => []],
			],
			[
				'handler' => ['class' => 'App\Modules\Api\V1\Watches\WatchesController', 'method' => 'index'],
				'id' => null,
				'tags' => [],
				'methods' => ['GET'],
				'mask' => '/api/v1/watches',
				'parameters' => [
					'limit' => [
						'name' => 'limit',
						'type' => 'int',
						'description' => 'Data limit',
						'in' => 'query',
						'required' => false,
						'allowEmpty' => false,
						'deprecated' => false,
					],
					'offset' => [
						'name' => 'offset',
						'type' => 'int',
						'description' => 'Data offset',
						'in' => 'query',
						'required' => false,
						'allowEmpty' => false,
						'deprecated' => false,
					],
				],
				'responses' => [],
				'negotiations' => [],
				'attributes' => ['pattern' => '/api/v1/watches'],
				'openApi' => ['controller' => [], 'method' => []],
			],
		]);
	}


	public function createServiceApi__core__schema__hydrator(): Apitte\Core\Schema\Serialization\ArrayHydrator
	{
		return new Apitte\Core\Schema\Serialization\ArrayHydrator;
	}


	public function createServiceApi__middlewares__api(): Apitte\Middlewares\ApiMiddleware
	{
		return new Apitte\Middlewares\ApiMiddleware(
			$this->getService('api.core.dispatcher'),
			$this->getService('api.core.errorHandler')
		);
	}


	public function createServiceApi__openapi__coreDefinition(): Apitte\OpenApi\SchemaDefinition\CoreDefinition
	{
		return new Apitte\OpenApi\SchemaDefinition\CoreDefinition(
			$this->getService('api.core.schema'),
			$this->getService('api.openapi.entityAdapter')
		);
	}


	public function createServiceApi__openapi__entityAdapter(): Apitte\OpenApi\SchemaDefinition\Entity\EntityAdapter
	{
		return new Apitte\OpenApi\SchemaDefinition\Entity\EntityAdapter;
	}


	public function createServiceApi__openapi__schemaBuilder(): Apitte\OpenApi\SchemaBuilder
	{
		$service = new Apitte\OpenApi\SchemaBuilder;
		$service->addDefinition(\Nette\PhpGenerator\Dumper::createObject('Apitte\OpenApi\SchemaDefinition\BaseDefinition', [
		]));
		$service->addDefinition($this->getService('api.openapi.coreDefinition'));
		$service->addDefinition(\Nette\PhpGenerator\Dumper::createObject('Apitte\OpenApi\SchemaDefinition\ArrayDefinition', [
			"\x00Apitte\\OpenApi\\SchemaDefinition\\ArrayDefinition\x00data" => [],
		]));
		return $service;
	}


	public function createServiceApplication__1(): App\Modules\Front\Error\ErrorPresenter
	{
		$service = new App\Modules\Front\Error\ErrorPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('routing.router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 1;
		return $service;
	}


	public function createServiceApplication__10(): NetteModule\MicroPresenter
	{
		return new NetteModule\MicroPresenter($this, $this->getService('http.request'), $this->getService('routing.router'));
	}


	public function createServiceApplication__2(): App\Modules\Front\Error4xx\Error4xxPresenter
	{
		$service = new App\Modules\Front\Error4xx\Error4xxPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('routing.router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 1;
		return $service;
	}


	public function createServiceApplication__3(): App\Modules\Front\Home\HomePresenter
	{
		$service = new App\Modules\Front\Home\HomePresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('routing.router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->injectNavigationFactory($this->getService('015'));
		$service->invalidLinkMode = 1;
		return $service;
	}


	public function createServiceApplication__4(): App\Modules\Front\Sign\SignPresenter
	{
		$service = new App\Modules\Front\Sign\SignPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('routing.router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 1;
		return $service;
	}


	public function createServiceApplication__5(): App\Modules\Front\Proposal\ProposalPresenter
	{
		$service = new App\Modules\Front\Proposal\ProposalPresenter(
			$this->getService('012'),
			$this->getService('nettrine.orm.entityManagerDecorator')
		);
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('routing.router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->injectNavigationFactory($this->getService('015'));
		$service->invalidLinkMode = 1;
		return $service;
	}


	public function createServiceApplication__6(): App\Modules\Front\Search\SearchPresenter
	{
		$service = new App\Modules\Front\Search\SearchPresenter(
			$this->getService('012'),
			$this->getService('nettrine.orm.entityManagerDecorator')
		);
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('routing.router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->injectNavigationFactory($this->getService('015'));
		$service->invalidLinkMode = 1;
		return $service;
	}


	public function createServiceApplication__7(): App\Modules\Front\Detail\DetailPresenter
	{
		$service = new App\Modules\Front\Detail\DetailPresenter(
			$this->getService('nettrine.orm.entityManagerDecorator'),
			$this->getService('011'),
			$this->getService('014'),
			$this->getService('013')
		);
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('routing.router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->injectNavigationFactory($this->getService('015'));
		$service->invalidLinkMode = 1;
		return $service;
	}


	public function createServiceApplication__8(): App\Modules\Front\Changelog\ChangelogPresenter
	{
		$service = new App\Modules\Front\Changelog\ChangelogPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('routing.router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->injectNavigationFactory($this->getService('015'));
		$service->invalidLinkMode = 1;
		return $service;
	}


	public function createServiceApplication__9(): NetteModule\ErrorPresenter
	{
		return new NetteModule\ErrorPresenter($this->getService('contributte.monolog.psrToTracyLazyAdapter'));
	}


	public function createServiceApplication__application(): Nette\Application\Application
	{
		$service = new Nette\Application\Application(
			$this->getService('application.presenterFactory'),
			$this->getService('routing.router'),
			$this->getService('http.request'),
			$this->getService('http.response')
		);
		$service->catchExceptions = true;
		$service->errorPresenter = 'Front:Error';
		Nette\Bridges\ApplicationTracy\RoutingPanel::initializePanel($service);
		$service->onStartup[] = function() {$this->getService('contributte.events.dispatcher')->dispatch(new Contributte\Events\Extra\Event\Application\StartupEvent(...func_get_args()));};
		$service->onError[] = function() {$this->getService('contributte.events.dispatcher')->dispatch(new Contributte\Events\Extra\Event\Application\ErrorEvent(...func_get_args()));};
		$service->onPresenter[] = function() {$this->getService('contributte.events.dispatcher')->dispatch(new Contributte\Events\Extra\Event\Application\PresenterEvent(...func_get_args()));};
		$service->onPresenter[] = function($application, $presenter) {if(!$presenter instanceof Nette\Application\UI\Presenter){return;} $presenter->onStartup[] = function() {$this->getService('contributte.events.dispatcher')->dispatch(new Contributte\Events\Extra\Event\Application\PresenterStartupEvent(...func_get_args()));};};
		$service->onPresenter[] = function($application, $presenter) {if(!$presenter instanceof Nette\Application\UI\Presenter){return;} $presenter->onShutdown[] = function() {$this->getService('contributte.events.dispatcher')->dispatch(new Contributte\Events\Extra\Event\Application\PresenterShutdownEvent(...func_get_args()));};};
		$service->onRequest[] = function() {$this->getService('contributte.events.dispatcher')->dispatch(new Contributte\Events\Extra\Event\Application\RequestEvent(...func_get_args()));};
		$service->onResponse[] = function() {$this->getService('contributte.events.dispatcher')->dispatch(new Contributte\Events\Extra\Event\Application\ResponseEvent(...func_get_args()));};
		$service->onShutdown[] = function() {$this->getService('contributte.events.dispatcher')->dispatch(new Contributte\Events\Extra\Event\Application\ShutdownEvent(...func_get_args()));};
		return $service;
	}


	public function createServiceApplication__linkGenerator(): Nette\Application\LinkGenerator
	{
		return new Nette\Application\LinkGenerator(
			$this->getService('routing.router'),
			$this->getService('http.request')->getUrl()->withoutUserInfo(),
			$this->getService('application.presenterFactory')
		);
	}


	public function createServiceApplication__presenterFactory(): Nette\Application\IPresenterFactory
	{
		$service = new Nette\Application\PresenterFactory(new Nette\Bridges\ApplicationDI\PresenterFactoryCallback($this, 1, null));
		$service->setMapping([
			'Admin' => ['App\Modules\Admin', '*', '*\*Presenter'],
			'Front' => ['App\Modules\Front', '*', '*\*Presenter'],
			'Api' => ['App\Modules\Api', '*', '*\*Controller'],
		]);
		return $service;
	}


	public function createServiceCache__storage(): Nette\Caching\IStorage
	{
		return new Nette\Caching\Storages\FileStorage('/var/www/html/app/../temp/cache');
	}


	public function createServiceContainer(): Container_9dfe81f1cc
	{
		return $this;
	}


	public function createServiceContributte__console__extra__advancedCache__cleanCommand(): Contributte\Console\Extra\Command\AdvancedCache\CacheCleanCommand
	{
		return new Contributte\Console\Extra\Command\AdvancedCache\CacheCleanCommand([]);
	}


	public function createServiceContributte__console__extra__advancedCache__generatorCommand(): Contributte\Console\Extra\Command\AdvancedCache\CacheGenerateCommand
	{
		return new Contributte\Console\Extra\Command\AdvancedCache\CacheGenerateCommand([]);
	}


	public function createServiceContributte__console__extra__cache__purge(): Contributte\Console\Extra\Command\Cache\CachePurgeCommand
	{
		return new Contributte\Console\Extra\Command\Cache\CachePurgeCommand(['/var/www/html/app/../temp/cache']);
	}


	public function createServiceContributte__console__extra__caching__clear(): Contributte\Console\Extra\Command\Caching\CachingClearCommand
	{
		return new Contributte\Console\Extra\Command\Caching\CachingClearCommand($this->getService('cache.storage'));
	}


	public function createServiceContributte__console__extra__di__purge(): Contributte\Console\Extra\Command\DI\DIPurgeCommand
	{
		return new Contributte\Console\Extra\Command\DI\DIPurgeCommand(['/var/www/html/app/../temp/cache/nette.configurator']);
	}


	public function createServiceContributte__console__extra__latte__purge(): Contributte\Console\Extra\Command\Latte\LattePurgeCommand
	{
		return new Contributte\Console\Extra\Command\Latte\LattePurgeCommand(['/var/www/html/app/../temp/cache/latte']);
	}


	public function createServiceContributte__console__extra__latte__warmup(): Contributte\Console\Extra\Command\Latte\LatteWarmupCommand
	{
		return new Contributte\Console\Extra\Command\Latte\LatteWarmupCommand(
			$this->getService('latte.templateFactory'),
			['/var/www/html/app']
		);
	}


	public function createServiceContributte__console__extra__router__dump(): Contributte\Console\Extra\Command\Router\RouterDumpCommand
	{
		return new Contributte\Console\Extra\Command\Router\RouterDumpCommand($this->getService('routing.router'));
	}


	public function createServiceContributte__console__extra__security__password(): Contributte\Console\Extra\Command\Security\SecurityPasswordCommand
	{
		return new Contributte\Console\Extra\Command\Security\SecurityPasswordCommand($this->getService('security.passwords'));
	}


	public function createServiceContributte__console__extra__utils__random(): Contributte\Console\Extra\Command\Utils\UtilsRandomCommand
	{
		return new Contributte\Console\Extra\Command\Utils\UtilsRandomCommand;
	}


	public function createServiceContributte__events__dispatcher(): Symfony\Component\EventDispatcher\EventDispatcherInterface
	{
		return new Contributte\EventDispatcher\LazyEventDispatcher($this);
	}


	public function createServiceContributte__mailing__builderFactory(): Contributte\Mailing\IMailBuilderFactory
	{
		return new Contributte\Mailing\MailBuilderFactory(
			$this->getService('contributte.mailing.sender'),
			$this->getService('contributte.mailing.templateFactory')
		);
	}


	public function createServiceContributte__mailing__sender(): Contributte\Mailing\IMailSender
	{
		return new Contributte\Mailing\NetteMailSender($this->getService('contributte.post.mailer'));
	}


	public function createServiceContributte__mailing__templateFactory(): Contributte\Mailing\IMailTemplateFactory
	{
		$service = new Contributte\Mailing\NetteTemplateFactory(
			$this->getService('latte.templateFactory'),
			$this->getService('application.linkGenerator')
		);
		$service->setDefaults(['layout' => '@default']);
		$service->setConfig(['layout' => '/var/www/html/app/resources/mail/@layout.latte']);
		return $service;
	}


	public function createServiceContributte__monolog__logger__default(): Monolog\Logger
	{
		return new Monolog\Logger(
			'default',
			[
				$this->getService('contributte.monolog.logger.default.handler.0'),
				$this->getService('contributte.monolog.logger.default.handler.tracy'),
			],
			[
				$this->getService('contributte.monolog.logger.default.processor.0'),
				$this->getService('contributte.monolog.logger.default.processor.1'),
				$this->getService('contributte.monolog.logger.default.processor.2'),
				$this->getService('contributte.monolog.logger.default.processor.3'),
			]
		);
	}


	public function createServiceContributte__monolog__logger__default__handler__0(): Monolog\Handler\RotatingFileHandler
	{
		return new Monolog\Handler\RotatingFileHandler('/var/www/html/app/../log/syslog.log', 30, 300);
	}


	public function createServiceContributte__monolog__logger__default__handler__tracy(): Monolog\Handler\PsrHandler
	{
		return new Monolog\Handler\PsrHandler(new Tracy\Bridges\Psr\TracyToPsrLoggerAdapter($this->getService('tracy.logger')));
	}


	public function createServiceContributte__monolog__logger__default__processor__0(): Monolog\Processor\WebProcessor
	{
		return new Monolog\Processor\WebProcessor;
	}


	public function createServiceContributte__monolog__logger__default__processor__1(): Monolog\Processor\IntrospectionProcessor
	{
		return new Monolog\Processor\IntrospectionProcessor;
	}


	public function createServiceContributte__monolog__logger__default__processor__2(): Monolog\Processor\MemoryPeakUsageProcessor
	{
		return new Monolog\Processor\MemoryPeakUsageProcessor;
	}


	public function createServiceContributte__monolog__logger__default__processor__3(): Monolog\Processor\ProcessIdProcessor
	{
		return new Monolog\Processor\ProcessIdProcessor;
	}


	public function createServiceContributte__monolog__psrToTracyAdapter(): Tracy\Bridges\Psr\PsrToTracyLoggerAdapter
	{
		return new Tracy\Bridges\Psr\PsrToTracyLoggerAdapter($this->getService('contributte.monolog.logger.default'));
	}


	public function createServiceContributte__monolog__psrToTracyLazyAdapter(): Contributte\Monolog\Tracy\LazyTracyLogger
	{
		return new Contributte\Monolog\Tracy\LazyTracyLogger('contributte.monolog.psrToTracyAdapter', $this);
	}


	public function createServiceContributte__post__mailer(): Nette\Mail\SmtpMailer
	{
		return new Nette\Mail\SmtpMailer(['host' => 'localhost', 'username' => 'fake', 'password' => 'fake']);
	}


	public function createServiceContributte__post__messageFactory(): Contributte\Mail\Message\IMessageFactory
	{
		return new class ($this) implements Contributte\Mail\Message\IMessageFactory {
			private $container;


			public function __construct(Container_9dfe81f1cc $container)
			{
				$this->container = $container;
			}


			public function create(): Nette\Mail\Message
			{
				return new Nette\Mail\Message;
			}
		};
	}


	public function createServiceHttp__request(): Nette\Http\Request
	{
		return $this->getService('http.requestFactory')->fromGlobals();
	}


	public function createServiceHttp__requestFactory(): Nette\Http\RequestFactory
	{
		$service = new Nette\Http\RequestFactory;
		$service->setProxy([]);
		return $service;
	}


	public function createServiceHttp__response(): Nette\Http\Response
	{
		return new Nette\Http\Response;
	}


	public function createServiceLatte__latteFactory(): Nette\Bridges\ApplicationLatte\ILatteFactory
	{
		return new class ($this) implements Nette\Bridges\ApplicationLatte\ILatteFactory {
			private $container;


			public function __construct(Container_9dfe81f1cc $container)
			{
				$this->container = $container;
			}


			public function create(): Latte\Engine
			{
				$service = new Latte\Engine;
				$service->setTempDirectory('/var/www/html/app/../temp/cache/latte');
				$service->setAutoRefresh(false);
				$service->setContentType('html');
				Nette\Utils\Html::$xhtml = false;
				$service->onCompile[] = function ($engine) { App\Model\Latte\Macros::register($engine->getCompiler()); };
				$service->addFilter('datetime', 'App\Model\Latte\Filters::datetime');
				$service->addFilter('neon', 'App\Model\Latte\Filters::neon');
				$service->addFilter('json', 'App\Model\Latte\Filters::json');
				$service->onCompile[] = function() {$this->container->getService('contributte.events.dispatcher')->dispatch(new Contributte\Events\Extra\Event\Latte\LatteCompileEvent(...func_get_args()));};
				return $service;
			}
		};
	}


	public function createServiceLatte__templateFactory(): App\Model\Latte\TemplateFactory
	{
		return new App\Model\Latte\TemplateFactory(
			$this->getService('latte.latteFactory'),
			$this->getService('http.request'),
			$this->getService('security.user'),
			$this->getService('cache.storage')
		);
	}


	public function createServiceMail__mailer(): Nette\Mail\Mailer
	{
		return new Nette\Mail\SendmailMailer;
	}


	public function createServiceMiddleware__authenticator(): App\Model\Api\Middleware\AuthenticationMiddleware
	{
		return new App\Model\Api\Middleware\AuthenticationMiddleware(new App\Model\Api\Security\TokenAuthenticator($this->getService('nettrine.orm.entityManagerDecorator')));
	}


	public function createServiceMiddleware__methodOverride(): Contributte\Middlewares\MethodOverrideMiddleware
	{
		return new Contributte\Middlewares\MethodOverrideMiddleware;
	}


	public function createServiceMiddleware__tryCatch(): Contributte\Middlewares\TryCatchMiddleware
	{
		$service = new Contributte\Middlewares\TryCatchMiddleware;
		$service->setDebugMode(false);
		$service->setCatchExceptions(true);
		return $service;
	}


	public function createServiceMiddlewares__application(): Contributte\Middlewares\Application\MiddlewareApplication
	{
		return new Contributte\Middlewares\Application\MiddlewareApplication($this->getService('middlewares.chain')->create());
	}


	public function createServiceMiddlewares__chain(): Contributte\Middlewares\Utils\ChainBuilder
	{
		$service = new Contributte\Middlewares\Utils\ChainBuilder;
		$service->add($this->getService('middleware.tryCatch'));
		$service->add($this->getService('middleware.methodOverride'));
		$service->add($this->getService('middleware.authenticator'));
		$service->add($this->getService('api.middlewares.api'));
		return $service;
	}


	public function createServiceNettrine__annotations__delegatedReader(): Doctrine\Common\Annotations\AnnotationReader
	{
		$service = new Doctrine\Common\Annotations\AnnotationReader;
		$service->addGlobalIgnoredName('persistent');
		$service->addGlobalIgnoredName('serializationVersion');
		return $service;
	}


	public function createServiceNettrine__annotations__reader(): Doctrine\Common\Annotations\Reader
	{
		return new Doctrine\Common\Annotations\CachedReader(
			$this->getService('nettrine.annotations.delegatedReader'),
			$this->getService('nettrine.cache.driver')
		);
	}


	public function createServiceNettrine__cache__driver(): Doctrine\Common\Cache\Cache
	{
		return new Doctrine\Common\Cache\PhpFileCache('/var/www/html/app/../temp/cache/nettrine.cache');
	}


	public function createServiceNettrine__dbal__configuration(): Doctrine\DBAL\Configuration
	{
		$service = new Doctrine\DBAL\Configuration;
		$service->setSQLLogger($this->getService('nettrine.dbal.logger'));
		$service->setResultCacheImpl($this->getService('nettrine.cache.driver'));
		$service->setAutoCommit(true);
		return $service;
	}


	public function createServiceNettrine__dbal__connection(): Doctrine\DBAL\Connection
	{
		return $this->getService('nettrine.dbal.connectionFactory')->createConnection(
			[
				'driver' => 'pdo_mysql',
				'host' => 'database',
				'user' => 'test',
				'password' => 'test',
				'dbname' => 'test',
				'types' => [],
				'typesMapping' => [],
			],
			$this->getService('nettrine.dbal.configuration'),
			$this->getService('nettrine.dbal.eventManager')
		);
	}


	public function createServiceNettrine__dbal__connectionFactory(): Nettrine\DBAL\ConnectionFactory
	{
		return new Nettrine\DBAL\ConnectionFactory;
	}


	public function createServiceNettrine__dbal__eventManager(): Nettrine\DBAL\Events\ContainerAwareEventManager
	{
		$service = new Nettrine\DBAL\Events\ContainerAwareEventManager($this);
		$service->addEventListener(['postGenerateSchema'], '017');
		return $service;
	}


	public function createServiceNettrine__dbal__logger(): Doctrine\DBAL\Logging\LoggerChain
	{
		$service = new Doctrine\DBAL\Logging\LoggerChain;
		$service->addLogger($this->getService('nettrine.dbal.logger.config'));
		return $service;
	}


	public function createServiceNettrine__dbal__logger__config(): Nettrine\DBAL\Logger\PsrLogger
	{
		return new Nettrine\DBAL\Logger\PsrLogger($this->getService('contributte.monolog.logger.default'));
	}


	public function createServiceNettrine__fixtures__fixturesLoader(): Nettrine\Fixtures\Loader\FixturesLoader
	{
		return new Nettrine\Fixtures\Loader\FixturesLoader(['/var/www/html/db/Fixtures'], $this);
	}


	public function createServiceNettrine__fixtures__loadDataFixturesCommand(): Nettrine\Fixtures\Command\LoadDataFixturesCommand
	{
		return new Nettrine\Fixtures\Command\LoadDataFixturesCommand(
			$this->getService('nettrine.fixtures.fixturesLoader'),
			$this->getService('nettrine.orm.managerRegistry')
		);
	}


	public function createServiceNettrine__migrations__configuration(): Nettrine\Migrations\ContainerAwareConfiguration
	{
		$service = new Nettrine\Migrations\ContainerAwareConfiguration($this->getService('nettrine.dbal.connection'));
		$service->setContainer($this->createServiceContainer());
		$service->setCustomTemplate(null);
		$service->setMigrationsTableName('doctrine_migrations');
		$service->setMigrationsColumnName('version');
		$service->setMigrationsDirectory('/var/www/html/db/Migrations');
		$service->setMigrationsNamespace('Database\Migrations');
		return $service;
	}


	public function createServiceNettrine__migrations__configurationHelper(): Doctrine\Migrations\Tools\Console\Helper\ConfigurationHelper
	{
		return new Doctrine\Migrations\Tools\Console\Helper\ConfigurationHelper(
			$this->getService('nettrine.dbal.connection'),
			$this->getService('nettrine.migrations.configuration')
		);
	}


	public function createServiceNettrine__migrations__diffCommand(): Doctrine\Migrations\Tools\Console\Command\DiffCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\DiffCommand;
	}


	public function createServiceNettrine__migrations__executeCommand(): Doctrine\Migrations\Tools\Console\Command\ExecuteCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\ExecuteCommand;
	}


	public function createServiceNettrine__migrations__generateCommand(): Doctrine\Migrations\Tools\Console\Command\GenerateCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\GenerateCommand;
	}


	public function createServiceNettrine__migrations__latestCommand(): Doctrine\Migrations\Tools\Console\Command\LatestCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\LatestCommand;
	}


	public function createServiceNettrine__migrations__migrateCommand(): Doctrine\Migrations\Tools\Console\Command\MigrateCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\MigrateCommand;
	}


	public function createServiceNettrine__migrations__statusCommand(): Doctrine\Migrations\Tools\Console\Command\StatusCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\StatusCommand;
	}


	public function createServiceNettrine__migrations__upToDateCommand(): Doctrine\Migrations\Tools\Console\Command\UpToDateCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\UpToDateCommand;
	}


	public function createServiceNettrine__migrations__versionCommand(): Doctrine\Migrations\Tools\Console\Command\VersionCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\VersionCommand;
	}


	public function createServiceNettrine__orm__annotations__annotationDriver(): Doctrine\Persistence\Mapping\Driver\MappingDriver
	{
		$service = new Nettrine\ORM\Mapping\AnnotationDriver(
			$this->getService('nettrine.annotations.reader'),
			['/var/www/html/app/model/Database/Entity']
		);
		$service->addExcludePaths([]);
		return $service;
	}


	public function createServiceNettrine__orm__cache__cacheConfiguration(): Doctrine\ORM\Cache\CacheConfiguration
	{
		$service = new Doctrine\ORM\Cache\CacheConfiguration;
		$service->setCacheFactory($this->getService('nettrine.orm.cache.cacheFactory'));
		return $service;
	}


	public function createServiceNettrine__orm__cache__cacheFactory(): Doctrine\ORM\Cache\DefaultCacheFactory
	{
		return new Doctrine\ORM\Cache\DefaultCacheFactory(
			$this->getService('nettrine.orm.cache.regions'),
			$this->getService('nettrine.cache.driver')
		);
	}


	public function createServiceNettrine__orm__cache__regions(): Doctrine\ORM\Cache\RegionsConfiguration
	{
		return new Doctrine\ORM\Cache\RegionsConfiguration;
	}


	public function createServiceNettrine__orm__configuration(): Doctrine\ORM\Configuration
	{
		$service = new Doctrine\ORM\Configuration;
		$service->setProxyDir('/var/www/html/app/../temp/proxies');
		$service->setAutoGenerateProxyClasses(0);
		$service->setProxyNamespace('Nettrine\Proxy');
		$service->setMetadataDriverImpl($this->getService('nettrine.orm.mappingDriver'));
		$service->setCustomStringFunctions([]);
		$service->setCustomNumericFunctions([]);
		$service->setCustomDatetimeFunctions([]);
		$service->setCustomHydrationModes([]);
		$service->setNamingStrategy(new Doctrine\ORM\Mapping\UnderscoreNamingStrategy);
		$service->setEntityListenerResolver($this->getService('nettrine.orm.entityListenerResolver'));
		$service->setQueryCacheImpl($this->getService('nettrine.cache.driver'));
		$service->setHydrationCacheImpl($this->getService('nettrine.cache.driver'));
		$service->setResultCacheImpl($this->getService('nettrine.cache.driver'));
		$service->setMetadataCacheImpl($this->getService('nettrine.cache.driver'));
		$service->setSecondLevelCacheEnabled();
		$service->setSecondLevelCacheConfiguration($this->getService('nettrine.orm.cache.cacheConfiguration'));
		$service->addCustomDatetimeFunction('addtime', 'DoctrineExtensions\Query\Mysql\AddTime');
		$service->addCustomDatetimeFunction('convert_tz', 'DoctrineExtensions\Query\Mysql\ConvertTz');
		$service->addCustomDatetimeFunction('date', 'DoctrineExtensions\Query\Mysql\Date');
		$service->addCustomDatetimeFunction('date_format', 'DoctrineExtensions\Query\Mysql\DateFormat');
		$service->addCustomDatetimeFunction('dateadd', 'DoctrineExtensions\Query\Mysql\DateAdd');
		$service->addCustomDatetimeFunction('datesub', 'DoctrineExtensions\Query\Mysql\DateSub');
		$service->addCustomDatetimeFunction('datediff', 'DoctrineExtensions\Query\Mysql\DateDiff');
		$service->addCustomDatetimeFunction('day', 'DoctrineExtensions\Query\Mysql\Day');
		$service->addCustomDatetimeFunction('dayname', 'DoctrineExtensions\Query\Mysql\DayName');
		$service->addCustomDatetimeFunction('dayofweek', 'DoctrineExtensions\Query\Mysql\DayOfWeek');
		$service->addCustomDatetimeFunction('dayofyear', 'DoctrineExtensions\Query\Mysql\DayOfYear');
		$service->addCustomDatetimeFunction('div', 'DoctrineExtensions\Query\Mysql\Div');
		$service->addCustomDatetimeFunction('from_unixtime', 'DoctrineExtensions\Query\Mysql\FromUnixtime');
		$service->addCustomDatetimeFunction('hour', 'DoctrineExtensions\Query\Mysql\Hour');
		$service->addCustomDatetimeFunction('last_day', 'DoctrineExtensions\Query\Mysql\LastDay');
		$service->addCustomDatetimeFunction('makedate', 'DoctrineExtensions\Query\Mysql\MakeDate');
		$service->addCustomDatetimeFunction('minute', 'DoctrineExtensions\Query\Mysql\Minute');
		$service->addCustomDatetimeFunction('now', 'DoctrineExtensions\Query\Mysql\Now');
		$service->addCustomDatetimeFunction('month', 'DoctrineExtensions\Query\Mysql\Month');
		$service->addCustomDatetimeFunction('monthname', 'DoctrineExtensions\Query\Mysql\MonthName');
		$service->addCustomDatetimeFunction('period_diff', 'DoctrineExtensions\Query\Mysql\PeriodDiff');
		$service->addCustomDatetimeFunction('second', 'DoctrineExtensions\Query\Mysql\Second');
		$service->addCustomDatetimeFunction('sectotime', 'DoctrineExtensions\Query\Mysql\SecToTime');
		$service->addCustomDatetimeFunction('strtodate', 'DoctrineExtensions\Query\Mysql\StrToDate');
		$service->addCustomDatetimeFunction('time', 'DoctrineExtensions\Query\Mysql\Time');
		$service->addCustomDatetimeFunction('timediff', 'DoctrineExtensions\Query\Mysql\TimeDiff');
		$service->addCustomDatetimeFunction('timestampadd', 'DoctrineExtensions\Query\Mysql\TimestampAdd');
		$service->addCustomDatetimeFunction('timestampdiff', 'DoctrineExtensions\Query\Mysql\TimestampDiff');
		$service->addCustomDatetimeFunction('timetosec', 'DoctrineExtensions\Query\Mysql\TimeToSec');
		$service->addCustomDatetimeFunction('week', 'DoctrineExtensions\Query\Mysql\Week');
		$service->addCustomDatetimeFunction('weekday', 'DoctrineExtensions\Query\Mysql\WeekDay');
		$service->addCustomDatetimeFunction('year', 'DoctrineExtensions\Query\Mysql\Year');
		$service->addCustomDatetimeFunction('yearmonth', 'DoctrineExtensions\Query\Mysql\YearMonth');
		$service->addCustomDatetimeFunction('yearweek', 'DoctrineExtensions\Query\Mysql\YearWeek');
		$service->addCustomDatetimeFunction('unix_timestamp', 'DoctrineExtensions\Query\Mysql\UnixTimestamp');
		$service->addCustomDatetimeFunction('utc_timestamp', 'DoctrineExtensions\Query\Mysql\UtcTimestamp');
		$service->addCustomDatetimeFunction('extract', 'DoctrineExtensions\Query\Mysql\Extract');
		$service->addCustomNumericFunction('acos', 'DoctrineExtensions\Query\Mysql\Acos');
		$service->addCustomNumericFunction('asin', 'DoctrineExtensions\Query\Mysql\Asin');
		$service->addCustomNumericFunction('atan', 'DoctrineExtensions\Query\Mysql\Atan');
		$service->addCustomNumericFunction('atan2', 'DoctrineExtensions\Query\Mysql\Atan2');
		$service->addCustomNumericFunction('bit_count', 'DoctrineExtensions\Query\Mysql\BitCount');
		$service->addCustomNumericFunction('bit_xor', 'DoctrineExtensions\Query\Mysql\BitXor');
		$service->addCustomNumericFunction('ceil', 'DoctrineExtensions\Query\Mysql\Ceil');
		$service->addCustomNumericFunction('cos', 'DoctrineExtensions\Query\Mysql\Cos');
		$service->addCustomNumericFunction('cot', 'DoctrineExtensions\Query\Mysql\Cot');
		$service->addCustomNumericFunction('degrees', 'DoctrineExtensions\Query\Mysql\Degrees');
		$service->addCustomNumericFunction('exp', 'DoctrineExtensions\Query\Mysql\Exp');
		$service->addCustomNumericFunction('floor', 'DoctrineExtensions\Query\Mysql\Floor');
		$service->addCustomNumericFunction('log', 'DoctrineExtensions\Query\Mysql\Log');
		$service->addCustomNumericFunction('log10', 'DoctrineExtensions\Query\Mysql\Log10');
		$service->addCustomNumericFunction('log2', 'DoctrineExtensions\Query\Mysql\Log2');
		$service->addCustomNumericFunction('pi', 'DoctrineExtensions\Query\Mysql\Pi');
		$service->addCustomNumericFunction('power', 'DoctrineExtensions\Query\Mysql\Power');
		$service->addCustomNumericFunction('quarter', 'DoctrineExtensions\Query\Mysql\Quarter');
		$service->addCustomNumericFunction('radians', 'DoctrineExtensions\Query\Mysql\Radians');
		$service->addCustomNumericFunction('rand', 'DoctrineExtensions\Query\Mysql\Rand');
		$service->addCustomNumericFunction('round', 'DoctrineExtensions\Query\Mysql\Round');
		$service->addCustomNumericFunction('stddev', 'DoctrineExtensions\Query\Mysql\StdDev');
		$service->addCustomNumericFunction('sin', 'DoctrineExtensions\Query\Mysql\Sin');
		$service->addCustomNumericFunction('std', 'DoctrineExtensions\Query\Mysql\Std');
		$service->addCustomNumericFunction('tan', 'DoctrineExtensions\Query\Mysql\Tan');
		$service->addCustomNumericFunction('variance', 'DoctrineExtensions\Query\Mysql\Variance');
		$service->addCustomStringFunction('aes_decrypt', 'DoctrineExtensions\Query\Mysql\AesDecrypt');
		$service->addCustomStringFunction('aes_encrypt', 'DoctrineExtensions\Query\Mysql\AesEncrypt');
		$service->addCustomStringFunction('any_value', 'DoctrineExtensions\Query\Mysql\AnyValue');
		$service->addCustomStringFunction('ascii', 'DoctrineExtensions\Query\Mysql\Ascii');
		$service->addCustomStringFunction('binary', 'DoctrineExtensions\Query\Mysql\Binary');
		$service->addCustomStringFunction('cast', 'DoctrineExtensions\Query\Mysql\Cast');
		$service->addCustomStringFunction('char_length', 'DoctrineExtensions\Query\Mysql\CharLength');
		$service->addCustomStringFunction('collate', 'DoctrineExtensions\Query\Mysql\Collate');
		$service->addCustomStringFunction('concat_ws', 'DoctrineExtensions\Query\Mysql\ConcatWs');
		$service->addCustomStringFunction('countif', 'DoctrineExtensions\Query\Mysql\CountIf');
		$service->addCustomStringFunction('crc32', 'DoctrineExtensions\Query\Mysql\Crc32');
		$service->addCustomStringFunction('degrees', 'DoctrineExtensions\Query\Mysql\Degrees');
		$service->addCustomStringFunction('field', 'DoctrineExtensions\Query\Mysql\Field');
		$service->addCustomStringFunction('find_in_set', 'DoctrineExtensions\Query\Mysql\FindInSet');
		$service->addCustomStringFunction('format', 'DoctrineExtensions\Query\Mysql\Format');
		$service->addCustomStringFunction('greatest', 'DoctrineExtensions\Query\Mysql\Greatest');
		$service->addCustomStringFunction('group_concat', 'DoctrineExtensions\Query\Mysql\GroupConcat');
		$service->addCustomStringFunction('hex', 'DoctrineExtensions\Query\Mysql\Hex');
		$service->addCustomStringFunction('ifelse', 'DoctrineExtensions\Query\Mysql\IfElse');
		$service->addCustomStringFunction('ifnull', 'DoctrineExtensions\Query\Mysql\IfNull');
		$service->addCustomStringFunction('inet_aton', 'DoctrineExtensions\Query\Mysql\InetAton');
		$service->addCustomStringFunction('inet_ntoa', 'DoctrineExtensions\Query\Mysql\InetNtoa');
		$service->addCustomStringFunction('inet6_aton', 'DoctrineExtensions\Query\Mysql\Inet6Aton');
		$service->addCustomStringFunction('inet6_ntoa', 'DoctrineExtensions\Query\Mysql\Inet6Ntoa');
		$service->addCustomStringFunction('instr', 'DoctrineExtensions\Query\Mysql\Instr');
		$service->addCustomStringFunction('is_ipv4', 'DoctrineExtensions\Query\Mysql\IsIpv4');
		$service->addCustomStringFunction('is_ipv4_compat', 'DoctrineExtensions\Query\Mysql\IsIpv4Compat');
		$service->addCustomStringFunction('is_ipv4_mapped', 'DoctrineExtensions\Query\Mysql\IsIpv4Mapped');
		$service->addCustomStringFunction('is_ipv6', 'DoctrineExtensions\Query\Mysql\IsIpv6');
		$service->addCustomStringFunction('lag', 'DoctrineExtensions\Query\Mysql\Lag');
		$service->addCustomStringFunction('lead', 'DoctrineExtensions\Query\Mysql\Lead');
		$service->addCustomStringFunction('least', 'DoctrineExtensions\Query\Mysql\Least');
		$service->addCustomStringFunction('lpad', 'DoctrineExtensions\Query\Mysql\Lpad');
		$service->addCustomStringFunction('match', 'DoctrineExtensions\Query\Mysql\MatchAgainst');
		$service->addCustomStringFunction('md5', 'DoctrineExtensions\Query\Mysql\Md5');
		$service->addCustomStringFunction('nullif', 'DoctrineExtensions\Query\Mysql\NullIf');
		$service->addCustomStringFunction('over', 'DoctrineExtensions\Query\Mysql\Over');
		$service->addCustomStringFunction('radians', 'DoctrineExtensions\Query\Mysql\Radians');
		$service->addCustomStringFunction('regexp', 'DoctrineExtensions\Query\Mysql\Regexp');
		$service->addCustomStringFunction('replace', 'DoctrineExtensions\Query\Mysql\Replace');
		$service->addCustomStringFunction('rpad', 'DoctrineExtensions\Query\Mysql\Rpad');
		$service->addCustomStringFunction('sha1', 'DoctrineExtensions\Query\Mysql\Sha1');
		$service->addCustomStringFunction('sha2', 'DoctrineExtensions\Query\Mysql\Sha2');
		$service->addCustomStringFunction('soundex', 'DoctrineExtensions\Query\Mysql\Soundex');
		$service->addCustomStringFunction('str_to_date', 'DoctrineExtensions\Query\Mysql\StrToDate');
		$service->addCustomStringFunction('substring_index', 'DoctrineExtensions\Query\Mysql\SubstringIndex');
		$service->addCustomStringFunction('unhex', 'DoctrineExtensions\Query\Mysql\Unhex');
		$service->addCustomStringFunction('uuid_short', 'DoctrineExtensions\Query\Mysql\UuidShort');
		return $service;
	}


	public function createServiceNettrine__orm__entityListenerResolver(): Nettrine\ORM\Mapping\ContainerEntityListenerResolver
	{
		return new Nettrine\ORM\Mapping\ContainerEntityListenerResolver($this);
	}


	public function createServiceNettrine__orm__entityManagerDecorator(): App\Model\Database\EntityManager
	{
		return new App\Model\Database\EntityManager(Doctrine\ORM\EntityManager::create(
			$this->getService('nettrine.dbal.connection'),
			$this->getService('nettrine.orm.configuration'),
			$this->getService('nettrine.dbal.eventManager')
		));
	}


	public function createServiceNettrine__orm__managerRegistry(): Nettrine\ORM\ManagerRegistry
	{
		return new Nettrine\ORM\ManagerRegistry(
			$this->getService('nettrine.dbal.connection'),
			$this->getService('nettrine.orm.entityManagerDecorator'),
			$this
		);
	}


	public function createServiceNettrine__orm__mappingDriver(): Doctrine\Persistence\Mapping\Driver\MappingDriverChain
	{
		$service = new Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain;
		if (!$service instanceof Doctrine\Persistence\Mapping\Driver\MappingDriverChain) {
			throw new Nette\UnexpectedValueException('Unable to create service \'nettrine.orm.mappingDriver\', value returned by factory is not Doctrine\Persistence\Mapping\Driver\MappingDriverChain type.');
		}
		$service->addDriver($this->getService('nettrine.orm.annotations.annotationDriver'), 'App\Model\Database\Entity');
		return $service;
	}


	public function createServiceResource___App_Modules_Api___1(): App\Modules\Api\PubV1\OpenApiController
	{
		return new App\Modules\Api\PubV1\OpenApiController($this->getService('api.openapi.schemaBuilder'));
	}


	public function createServiceResource___App_Modules_Api___10(): App\Modules\Api\V1\Votes\VotesController
	{
		return new App\Modules\Api\V1\Votes\VotesController($this->getService('05'));
	}


	public function createServiceResource___App_Modules_Api___11(): App\Modules\Api\V1\Votes\VotesOneController
	{
		return new App\Modules\Api\V1\Votes\VotesOneController($this->getService('05'));
	}


	public function createServiceResource___App_Modules_Api___12(): App\Modules\Api\V1\Watches\WatchesOneController
	{
		return new App\Modules\Api\V1\Watches\WatchesOneController($this->getService('06'));
	}


	public function createServiceResource___App_Modules_Api___13(): App\Modules\Api\V1\Watches\WatchesController
	{
		return new App\Modules\Api\V1\Watches\WatchesController($this->getService('06'));
	}


	public function createServiceResource___App_Modules_Api___2(): App\Modules\Api\V1\Comments\CommentsOneController
	{
		return new App\Modules\Api\V1\Comments\CommentsOneController($this->getService('01'));
	}


	public function createServiceResource___App_Modules_Api___3(): App\Modules\Api\V1\Comments\CommentsController
	{
		return new App\Modules\Api\V1\Comments\CommentsController($this->getService('01'));
	}


	public function createServiceResource___App_Modules_Api___4(): App\Modules\Api\V1\Logs\LogsController
	{
		return new App\Modules\Api\V1\Logs\LogsController($this->getService('02'));
	}


	public function createServiceResource___App_Modules_Api___5(): App\Modules\Api\V1\Logs\LogsOneController
	{
		return new App\Modules\Api\V1\Logs\LogsOneController($this->getService('02'));
	}


	public function createServiceResource___App_Modules_Api___6(): App\Modules\Api\V1\Proposals\ProposalsController
	{
		return new App\Modules\Api\V1\Proposals\ProposalsController($this->getService('03'));
	}


	public function createServiceResource___App_Modules_Api___7(): App\Modules\Api\V1\Proposals\ProposalsOneController
	{
		return new App\Modules\Api\V1\Proposals\ProposalsOneController($this->getService('03'));
	}


	public function createServiceResource___App_Modules_Api___8(): App\Modules\Api\V1\Users\UsersOneController
	{
		return new App\Modules\Api\V1\Users\UsersOneController($this->getService('04'));
	}


	public function createServiceResource___App_Modules_Api___9(): App\Modules\Api\V1\Users\UsersController
	{
		return new App\Modules\Api\V1\Users\UsersController($this->getService('04'));
	}


	public function createServiceRouting__router(): Nette\Application\IRouter
	{
		return $this->getService('016')->create();
	}


	public function createServiceSecurity__authenticator(): App\Model\Security\Authenticator\UserAuthenticator
	{
		return new App\Model\Security\Authenticator\UserAuthenticator($this->getService('nettrine.orm.entityManagerDecorator'));
	}


	public function createServiceSecurity__passwords(): Nette\Security\Passwords
	{
		return new Nette\Security\Passwords;
	}


	public function createServiceSecurity__user(): App\Model\Security\SecurityUser
	{
		$service = new App\Model\Security\SecurityUser(
			$this->getService('security.userStorage'),
			$this->getService('security.authenticator')
		);
		$service->onLoggedIn[] = function() {$this->getService('contributte.events.dispatcher')->dispatch(new Contributte\Events\Extra\Event\Security\LoggedInEvent(...func_get_args()));};
		$service->onLoggedOut[] = function() {$this->getService('contributte.events.dispatcher')->dispatch(new Contributte\Events\Extra\Event\Security\LoggedOutEvent(...func_get_args()));};
		return $service;
	}


	public function createServiceSecurity__userStorage(): Nette\Security\IUserStorage
	{
		$service = new Nette\Http\UserStorage($this->getService('session.session'));
		$service->setNamespace('Hlasys');
		return $service;
	}


	public function createServiceSession__session(): Nette\Http\Session
	{
		$service = new Nette\Http\Session($this->getService('http.request'), $this->getService('http.response'));
		$service->setExpiration('1 year');
		$service->setOptions([
			'cookieHttponly' => true,
			'cookieSamesite' => 'Lax',
			'cookieSecure' => $this->getByType(Nette\Http\IRequest::class)->isSecured(),
			'name' => 'SID',
			'sidBitsPerCharacter' => 6,
			'sidLength' => 128,
			'useCookies' => true,
			'useOnlyCookies' => true,
			'useStrictMode' => true,
		]);
		return $service;
	}


	public function createServiceSymfony__serializer__annotationLoader(): Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader
	{
		return new Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(new Doctrine\Common\Annotations\CachedReader(
			$this->getService('symfony.serializer.annotationReader'),
			new Doctrine\Common\Cache\FilesystemCache('/var/www/html/app/../temp/cache/Symfony.Serializer')
		));
	}


	public function createServiceSymfony__serializer__annotationReader(): Doctrine\Common\Annotations\AnnotationReader
	{
		$service = new Doctrine\Common\Annotations\AnnotationReader;
		$service->addGlobalIgnoredName('phpcsSuppress');
		return $service;
	}


	public function createServiceSymfony__serializer__classMetadataFactory(): Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory
	{
		return new Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory($this->getService('symfony.serializer.annotationLoader'));
	}


	public function createServiceSymfony__serializer__objectNormalizer(): Symfony\Component\Serializer\Normalizer\ObjectNormalizer
	{
		return new Symfony\Component\Serializer\Normalizer\ObjectNormalizer(
			$this->getService('symfony.serializer.classMetadataFactory'),
			new Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter,
			null,
			new Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor
		);
	}


	public function createServiceSymfony__serializer__serializer(): Symfony\Component\Serializer\Serializer
	{
		return new Symfony\Component\Serializer\Serializer(
			[
				new Symfony\Component\Serializer\Normalizer\DateTimeNormalizer,
				new Symfony\Component\Serializer\Normalizer\ArrayDenormalizer,
				$this->getService('symfony.serializer.objectNormalizer'),
			],
			[new Symfony\Component\Serializer\Encoder\JsonEncoder]
		);
	}


	public function createServiceSymfony__validator(): Symfony\Component\Validator\Validator\ValidatorInterface
	{
		return $this->getService('symfony.validator.builder')->getValidator();
	}


	public function createServiceSymfony__validator__builder(): Symfony\Component\Validator\ValidatorBuilder
	{
		return Symfony\Component\Validator\Validation::createValidatorBuilder()->enableAnnotationMapping(new Doctrine\Common\Annotations\CachedReader(
			$this->getService('symfony.serializer.annotationReader'),
			new Doctrine\Common\Cache\FilesystemCache('/var/www/html/app/../temp/cache/Symfony.Validator')
		));
	}


	public function createServiceTracy__bar(): Tracy\Bar
	{
		return Tracy\Debugger::getBar();
	}


	public function createServiceTracy__blueScreen(): Tracy\BlueScreen
	{
		return Tracy\Debugger::getBlueScreen();
	}


	public function createServiceTracy__logger(): Tracy\ILogger
	{
		return Tracy\Debugger::getLogger();
	}


	public function initialize()
	{
		Doctrine\Common\Annotations\AnnotationRegistry::registerUniqueLoader("class_exists");
		// http.
		(function () {
			$response = $this->getService('http.response');
			$response->setHeader('X-Powered-By', 'Nette Framework 3');
			$response->setHeader('Content-Type', 'text/html; charset=utf-8');
			$response->setHeader('X-Frame-Options', 'SAMEORIGIN');
			$response->setCookie('nette-samesite', '1', 0, '/', null, null, true, 'Strict');
		})();
		// php.
		(function () {
			date_default_timezone_set('Europe/Prague');
			ini_set('output_buffering', '4096');
		})();
		// session.
		(function () {
			$this->getService('session.session')->exists() && $this->getService('session.session')->start();
		})();
		// tracy.
		(function () {
			Tracy\Debugger::$email = 'dev@hkfree.org';
			Tracy\Debugger::$logSeverity = 32767;
			Tracy\Debugger::$strictMode = true;
			Tracy\Debugger::getLogger()->mailer = [
				new Tracy\Bridges\Nette\MailSender($this->getService('contributte.post.mailer')),
				'send',
			];
		})();
		$this->getService("tracy.logger");
		Tracy\Debugger::setLogger($this->getService('contributte.monolog.psrToTracyLazyAdapter'));
		Contributte\Monolog\LoggerHolder::setLogger('contributte.monolog.logger.default', $this);

		Apitte\Debug\Tracy\BlueScreen\ApiBlueScreen::register($this->getService('tracy.blueScreen'));
		Apitte\Debug\Tracy\BlueScreen\ValidationBlueScreen::register($this->getService('tracy.blueScreen'));
	}
}
