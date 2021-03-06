<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitAdvancedContentFilterAddon
{
    public static $files = array (
        '32dcc8afd4335739640db7d200c1971d' => __DIR__ . '/..' . '/symfony/polyfill-apcu/bootstrap.php',
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Apcu\\' => 22,
            'Symfony\\Component\\ExpressionLanguage\\' => 37,
            'Symfony\\Component\\Cache\\' => 24,
            'Slim\\' => 5,
        ),
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Container\\' => 14,
            'Psr\\Cache\\' => 10,
        ),
        'I' => 
        array (
            'Interop\\Container\\' => 18,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Apcu\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-apcu',
        ),
        'Symfony\\Component\\ExpressionLanguage\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/expression-language',
        ),
        'Symfony\\Component\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/cache',
        ),
        'Slim\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/slim/Slim',
        ),
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Psr\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/cache/src',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static $classMap = array (
        'FastRoute\\BadRouteException' => __DIR__ . '/..' . '/nikic/fast-route/src/BadRouteException.php',
        'FastRoute\\DataGenerator' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator.php',
        'FastRoute\\DataGenerator\\CharCountBased' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator/CharCountBased.php',
        'FastRoute\\DataGenerator\\GroupCountBased' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator/GroupCountBased.php',
        'FastRoute\\DataGenerator\\GroupPosBased' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator/GroupPosBased.php',
        'FastRoute\\DataGenerator\\MarkBased' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator/MarkBased.php',
        'FastRoute\\DataGenerator\\RegexBasedAbstract' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator/RegexBasedAbstract.php',
        'FastRoute\\Dispatcher' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher.php',
        'FastRoute\\Dispatcher\\CharCountBased' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher/CharCountBased.php',
        'FastRoute\\Dispatcher\\GroupCountBased' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher/GroupCountBased.php',
        'FastRoute\\Dispatcher\\GroupPosBased' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher/GroupPosBased.php',
        'FastRoute\\Dispatcher\\MarkBased' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher/MarkBased.php',
        'FastRoute\\Dispatcher\\RegexBasedAbstract' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher/RegexBasedAbstract.php',
        'FastRoute\\Route' => __DIR__ . '/..' . '/nikic/fast-route/src/Route.php',
        'FastRoute\\RouteCollector' => __DIR__ . '/..' . '/nikic/fast-route/src/RouteCollector.php',
        'FastRoute\\RouteParser' => __DIR__ . '/..' . '/nikic/fast-route/src/RouteParser.php',
        'FastRoute\\RouteParser\\Std' => __DIR__ . '/..' . '/nikic/fast-route/src/RouteParser/Std.php',
        'Interop\\Container\\ContainerInterface' => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container/ContainerInterface.php',
        'Interop\\Container\\Exception\\ContainerException' => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container/Exception/ContainerException.php',
        'Interop\\Container\\Exception\\NotFoundException' => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container/Exception/NotFoundException.php',
        'Pimple\\Container' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Container.php',
        'Pimple\\Exception\\ExpectedInvokableException' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Exception/ExpectedInvokableException.php',
        'Pimple\\Exception\\FrozenServiceException' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Exception/FrozenServiceException.php',
        'Pimple\\Exception\\InvalidServiceIdentifierException' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Exception/InvalidServiceIdentifierException.php',
        'Pimple\\Exception\\UnknownIdentifierException' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Exception/UnknownIdentifierException.php',
        'Pimple\\Psr11\\Container' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Psr11/Container.php',
        'Pimple\\Psr11\\ServiceLocator' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Psr11/ServiceLocator.php',
        'Pimple\\ServiceIterator' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/ServiceIterator.php',
        'Pimple\\ServiceProviderInterface' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/ServiceProviderInterface.php',
        'Pimple\\Tests\\Fixtures\\Invokable' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Tests/Fixtures/Invokable.php',
        'Pimple\\Tests\\Fixtures\\NonInvokable' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Tests/Fixtures/NonInvokable.php',
        'Pimple\\Tests\\Fixtures\\PimpleServiceProvider' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Tests/Fixtures/PimpleServiceProvider.php',
        'Pimple\\Tests\\Fixtures\\Service' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Tests/Fixtures/Service.php',
        'Pimple\\Tests\\PimpleServiceProviderInterfaceTest' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Tests/PimpleServiceProviderInterfaceTest.php',
        'Pimple\\Tests\\PimpleTest' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Tests/PimpleTest.php',
        'Pimple\\Tests\\Psr11\\ContainerTest' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Tests/Psr11/ContainerTest.php',
        'Pimple\\Tests\\Psr11\\ServiceLocatorTest' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Tests/Psr11/ServiceLocatorTest.php',
        'Pimple\\Tests\\ServiceIteratorTest' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Tests/ServiceIteratorTest.php',
        'Psr\\Cache\\CacheException' => __DIR__ . '/..' . '/psr/cache/src/CacheException.php',
        'Psr\\Cache\\CacheItemInterface' => __DIR__ . '/..' . '/psr/cache/src/CacheItemInterface.php',
        'Psr\\Cache\\CacheItemPoolInterface' => __DIR__ . '/..' . '/psr/cache/src/CacheItemPoolInterface.php',
        'Psr\\Cache\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/cache/src/InvalidArgumentException.php',
        'Psr\\Container\\ContainerExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerExceptionInterface.php',
        'Psr\\Container\\ContainerInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerInterface.php',
        'Psr\\Container\\NotFoundExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/NotFoundExceptionInterface.php',
        'Psr\\Http\\Message\\MessageInterface' => __DIR__ . '/..' . '/psr/http-message/src/MessageInterface.php',
        'Psr\\Http\\Message\\RequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/RequestInterface.php',
        'Psr\\Http\\Message\\ResponseInterface' => __DIR__ . '/..' . '/psr/http-message/src/ResponseInterface.php',
        'Psr\\Http\\Message\\ServerRequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/ServerRequestInterface.php',
        'Psr\\Http\\Message\\StreamInterface' => __DIR__ . '/..' . '/psr/http-message/src/StreamInterface.php',
        'Psr\\Http\\Message\\UploadedFileInterface' => __DIR__ . '/..' . '/psr/http-message/src/UploadedFileInterface.php',
        'Psr\\Http\\Message\\UriInterface' => __DIR__ . '/..' . '/psr/http-message/src/UriInterface.php',
        'Psr\\Log\\AbstractLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/AbstractLogger.php',
        'Psr\\Log\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/log/Psr/Log/InvalidArgumentException.php',
        'Psr\\Log\\LogLevel' => __DIR__ . '/..' . '/psr/log/Psr/Log/LogLevel.php',
        'Psr\\Log\\LoggerAwareInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareInterface.php',
        'Psr\\Log\\LoggerAwareTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareTrait.php',
        'Psr\\Log\\LoggerInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerInterface.php',
        'Psr\\Log\\LoggerTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerTrait.php',
        'Psr\\Log\\NullLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/NullLogger.php',
        'Psr\\Log\\Test\\DummyTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Psr\\Log\\Test\\LoggerInterfaceTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Psr\\SimpleCache\\CacheException' => __DIR__ . '/..' . '/psr/simple-cache/src/CacheException.php',
        'Psr\\SimpleCache\\CacheInterface' => __DIR__ . '/..' . '/psr/simple-cache/src/CacheInterface.php',
        'Psr\\SimpleCache\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/simple-cache/src/InvalidArgumentException.php',
        'Slim\\App' => __DIR__ . '/..' . '/slim/slim/Slim/App.php',
        'Slim\\CallableResolver' => __DIR__ . '/..' . '/slim/slim/Slim/CallableResolver.php',
        'Slim\\CallableResolverAwareTrait' => __DIR__ . '/..' . '/slim/slim/Slim/CallableResolverAwareTrait.php',
        'Slim\\Collection' => __DIR__ . '/..' . '/slim/slim/Slim/Collection.php',
        'Slim\\Container' => __DIR__ . '/..' . '/slim/slim/Slim/Container.php',
        'Slim\\DefaultServicesProvider' => __DIR__ . '/..' . '/slim/slim/Slim/DefaultServicesProvider.php',
        'Slim\\DeferredCallable' => __DIR__ . '/..' . '/slim/slim/Slim/DeferredCallable.php',
        'Slim\\Exception\\ContainerException' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/ContainerException.php',
        'Slim\\Exception\\ContainerValueNotFoundException' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/ContainerValueNotFoundException.php',
        'Slim\\Exception\\InvalidMethodException' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/InvalidMethodException.php',
        'Slim\\Exception\\MethodNotAllowedException' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/MethodNotAllowedException.php',
        'Slim\\Exception\\NotFoundException' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/NotFoundException.php',
        'Slim\\Exception\\SlimException' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/SlimException.php',
        'Slim\\Handlers\\AbstractError' => __DIR__ . '/..' . '/slim/slim/Slim/Handlers/AbstractError.php',
        'Slim\\Handlers\\AbstractHandler' => __DIR__ . '/..' . '/slim/slim/Slim/Handlers/AbstractHandler.php',
        'Slim\\Handlers\\Error' => __DIR__ . '/..' . '/slim/slim/Slim/Handlers/Error.php',
        'Slim\\Handlers\\NotAllowed' => __DIR__ . '/..' . '/slim/slim/Slim/Handlers/NotAllowed.php',
        'Slim\\Handlers\\NotFound' => __DIR__ . '/..' . '/slim/slim/Slim/Handlers/NotFound.php',
        'Slim\\Handlers\\PhpError' => __DIR__ . '/..' . '/slim/slim/Slim/Handlers/PhpError.php',
        'Slim\\Handlers\\Strategies\\RequestResponse' => __DIR__ . '/..' . '/slim/slim/Slim/Handlers/Strategies/RequestResponse.php',
        'Slim\\Handlers\\Strategies\\RequestResponseArgs' => __DIR__ . '/..' . '/slim/slim/Slim/Handlers/Strategies/RequestResponseArgs.php',
        'Slim\\Http\\Body' => __DIR__ . '/..' . '/slim/slim/Slim/Http/Body.php',
        'Slim\\Http\\Cookies' => __DIR__ . '/..' . '/slim/slim/Slim/Http/Cookies.php',
        'Slim\\Http\\Environment' => __DIR__ . '/..' . '/slim/slim/Slim/Http/Environment.php',
        'Slim\\Http\\Headers' => __DIR__ . '/..' . '/slim/slim/Slim/Http/Headers.php',
        'Slim\\Http\\Message' => __DIR__ . '/..' . '/slim/slim/Slim/Http/Message.php',
        'Slim\\Http\\Request' => __DIR__ . '/..' . '/slim/slim/Slim/Http/Request.php',
        'Slim\\Http\\RequestBody' => __DIR__ . '/..' . '/slim/slim/Slim/Http/RequestBody.php',
        'Slim\\Http\\Response' => __DIR__ . '/..' . '/slim/slim/Slim/Http/Response.php',
        'Slim\\Http\\Stream' => __DIR__ . '/..' . '/slim/slim/Slim/Http/Stream.php',
        'Slim\\Http\\UploadedFile' => __DIR__ . '/..' . '/slim/slim/Slim/Http/UploadedFile.php',
        'Slim\\Http\\Uri' => __DIR__ . '/..' . '/slim/slim/Slim/Http/Uri.php',
        'Slim\\Interfaces\\CallableResolverInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/CallableResolverInterface.php',
        'Slim\\Interfaces\\CollectionInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/CollectionInterface.php',
        'Slim\\Interfaces\\Http\\CookiesInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/Http/CookiesInterface.php',
        'Slim\\Interfaces\\Http\\EnvironmentInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/Http/EnvironmentInterface.php',
        'Slim\\Interfaces\\Http\\HeadersInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/Http/HeadersInterface.php',
        'Slim\\Interfaces\\InvocationStrategyInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/InvocationStrategyInterface.php',
        'Slim\\Interfaces\\RouteGroupInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/RouteGroupInterface.php',
        'Slim\\Interfaces\\RouteInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/RouteInterface.php',
        'Slim\\Interfaces\\RouterInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/RouterInterface.php',
        'Slim\\MiddlewareAwareTrait' => __DIR__ . '/..' . '/slim/slim/Slim/MiddlewareAwareTrait.php',
        'Slim\\Routable' => __DIR__ . '/..' . '/slim/slim/Slim/Routable.php',
        'Slim\\Route' => __DIR__ . '/..' . '/slim/slim/Slim/Route.php',
        'Slim\\RouteGroup' => __DIR__ . '/..' . '/slim/slim/Slim/RouteGroup.php',
        'Slim\\Router' => __DIR__ . '/..' . '/slim/slim/Slim/Router.php',
        'Symfony\\Component\\Cache\\Adapter\\AbstractAdapter' => __DIR__ . '/..' . '/symfony/cache/Adapter/AbstractAdapter.php',
        'Symfony\\Component\\Cache\\Adapter\\AdapterInterface' => __DIR__ . '/..' . '/symfony/cache/Adapter/AdapterInterface.php',
        'Symfony\\Component\\Cache\\Adapter\\ApcuAdapter' => __DIR__ . '/..' . '/symfony/cache/Adapter/ApcuAdapter.php',
        'Symfony\\Component\\Cache\\Adapter\\ArrayAdapter' => __DIR__ . '/..' . '/symfony/cache/Adapter/ArrayAdapter.php',
        'Symfony\\Component\\Cache\\Adapter\\ChainAdapter' => __DIR__ . '/..' . '/symfony/cache/Adapter/ChainAdapter.php',
        'Symfony\\Component\\Cache\\Adapter\\DoctrineAdapter' => __DIR__ . '/..' . '/symfony/cache/Adapter/DoctrineAdapter.php',
        'Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter' => __DIR__ . '/..' . '/symfony/cache/Adapter/FilesystemAdapter.php',
        'Symfony\\Component\\Cache\\Adapter\\MemcachedAdapter' => __DIR__ . '/..' . '/symfony/cache/Adapter/MemcachedAdapter.php',
        'Symfony\\Component\\Cache\\Adapter\\NullAdapter' => __DIR__ . '/..' . '/symfony/cache/Adapter/NullAdapter.php',
        'Symfony\\Component\\Cache\\Adapter\\PdoAdapter' => __DIR__ . '/..' . '/symfony/cache/Adapter/PdoAdapter.php',
        'Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter' => __DIR__ . '/..' . '/symfony/cache/Adapter/PhpArrayAdapter.php',
        'Symfony\\Component\\Cache\\Adapter\\PhpFilesAdapter' => __DIR__ . '/..' . '/symfony/cache/Adapter/PhpFilesAdapter.php',
        'Symfony\\Component\\Cache\\Adapter\\ProxyAdapter' => __DIR__ . '/..' . '/symfony/cache/Adapter/ProxyAdapter.php',
        'Symfony\\Component\\Cache\\Adapter\\RedisAdapter' => __DIR__ . '/..' . '/symfony/cache/Adapter/RedisAdapter.php',
        'Symfony\\Component\\Cache\\Adapter\\SimpleCacheAdapter' => __DIR__ . '/..' . '/symfony/cache/Adapter/SimpleCacheAdapter.php',
        'Symfony\\Component\\Cache\\Adapter\\TagAwareAdapter' => __DIR__ . '/..' . '/symfony/cache/Adapter/TagAwareAdapter.php',
        'Symfony\\Component\\Cache\\Adapter\\TagAwareAdapterInterface' => __DIR__ . '/..' . '/symfony/cache/Adapter/TagAwareAdapterInterface.php',
        'Symfony\\Component\\Cache\\Adapter\\TraceableAdapter' => __DIR__ . '/..' . '/symfony/cache/Adapter/TraceableAdapter.php',
        'Symfony\\Component\\Cache\\Adapter\\TraceableAdapterEvent' => __DIR__ . '/..' . '/symfony/cache/Adapter/TraceableAdapter.php',
        'Symfony\\Component\\Cache\\Adapter\\TraceableTagAwareAdapter' => __DIR__ . '/..' . '/symfony/cache/Adapter/TraceableTagAwareAdapter.php',
        'Symfony\\Component\\Cache\\CacheItem' => __DIR__ . '/..' . '/symfony/cache/CacheItem.php',
        'Symfony\\Component\\Cache\\DataCollector\\CacheDataCollector' => __DIR__ . '/..' . '/symfony/cache/DataCollector/CacheDataCollector.php',
        'Symfony\\Component\\Cache\\DoctrineProvider' => __DIR__ . '/..' . '/symfony/cache/DoctrineProvider.php',
        'Symfony\\Component\\Cache\\Exception\\CacheException' => __DIR__ . '/..' . '/symfony/cache/Exception/CacheException.php',
        'Symfony\\Component\\Cache\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/symfony/cache/Exception/InvalidArgumentException.php',
        'Symfony\\Component\\Cache\\PruneableInterface' => __DIR__ . '/..' . '/symfony/cache/PruneableInterface.php',
        'Symfony\\Component\\Cache\\ResettableInterface' => __DIR__ . '/..' . '/symfony/cache/ResettableInterface.php',
        'Symfony\\Component\\Cache\\Simple\\AbstractCache' => __DIR__ . '/..' . '/symfony/cache/Simple/AbstractCache.php',
        'Symfony\\Component\\Cache\\Simple\\ApcuCache' => __DIR__ . '/..' . '/symfony/cache/Simple/ApcuCache.php',
        'Symfony\\Component\\Cache\\Simple\\ArrayCache' => __DIR__ . '/..' . '/symfony/cache/Simple/ArrayCache.php',
        'Symfony\\Component\\Cache\\Simple\\ChainCache' => __DIR__ . '/..' . '/symfony/cache/Simple/ChainCache.php',
        'Symfony\\Component\\Cache\\Simple\\DoctrineCache' => __DIR__ . '/..' . '/symfony/cache/Simple/DoctrineCache.php',
        'Symfony\\Component\\Cache\\Simple\\FilesystemCache' => __DIR__ . '/..' . '/symfony/cache/Simple/FilesystemCache.php',
        'Symfony\\Component\\Cache\\Simple\\MemcachedCache' => __DIR__ . '/..' . '/symfony/cache/Simple/MemcachedCache.php',
        'Symfony\\Component\\Cache\\Simple\\NullCache' => __DIR__ . '/..' . '/symfony/cache/Simple/NullCache.php',
        'Symfony\\Component\\Cache\\Simple\\PdoCache' => __DIR__ . '/..' . '/symfony/cache/Simple/PdoCache.php',
        'Symfony\\Component\\Cache\\Simple\\PhpArrayCache' => __DIR__ . '/..' . '/symfony/cache/Simple/PhpArrayCache.php',
        'Symfony\\Component\\Cache\\Simple\\PhpFilesCache' => __DIR__ . '/..' . '/symfony/cache/Simple/PhpFilesCache.php',
        'Symfony\\Component\\Cache\\Simple\\Psr6Cache' => __DIR__ . '/..' . '/symfony/cache/Simple/Psr6Cache.php',
        'Symfony\\Component\\Cache\\Simple\\RedisCache' => __DIR__ . '/..' . '/symfony/cache/Simple/RedisCache.php',
        'Symfony\\Component\\Cache\\Simple\\TraceableCache' => __DIR__ . '/..' . '/symfony/cache/Simple/TraceableCache.php',
        'Symfony\\Component\\Cache\\Simple\\TraceableCacheEvent' => __DIR__ . '/..' . '/symfony/cache/Simple/TraceableCache.php',
        'Symfony\\Component\\Cache\\Traits\\AbstractTrait' => __DIR__ . '/..' . '/symfony/cache/Traits/AbstractTrait.php',
        'Symfony\\Component\\Cache\\Traits\\ApcuTrait' => __DIR__ . '/..' . '/symfony/cache/Traits/ApcuTrait.php',
        'Symfony\\Component\\Cache\\Traits\\ArrayTrait' => __DIR__ . '/..' . '/symfony/cache/Traits/ArrayTrait.php',
        'Symfony\\Component\\Cache\\Traits\\DoctrineTrait' => __DIR__ . '/..' . '/symfony/cache/Traits/DoctrineTrait.php',
        'Symfony\\Component\\Cache\\Traits\\FilesystemCommonTrait' => __DIR__ . '/..' . '/symfony/cache/Traits/FilesystemCommonTrait.php',
        'Symfony\\Component\\Cache\\Traits\\FilesystemTrait' => __DIR__ . '/..' . '/symfony/cache/Traits/FilesystemTrait.php',
        'Symfony\\Component\\Cache\\Traits\\MemcachedTrait' => __DIR__ . '/..' . '/symfony/cache/Traits/MemcachedTrait.php',
        'Symfony\\Component\\Cache\\Traits\\PdoTrait' => __DIR__ . '/..' . '/symfony/cache/Traits/PdoTrait.php',
        'Symfony\\Component\\Cache\\Traits\\PhpArrayTrait' => __DIR__ . '/..' . '/symfony/cache/Traits/PhpArrayTrait.php',
        'Symfony\\Component\\Cache\\Traits\\PhpFilesTrait' => __DIR__ . '/..' . '/symfony/cache/Traits/PhpFilesTrait.php',
        'Symfony\\Component\\Cache\\Traits\\ProxyTrait' => __DIR__ . '/..' . '/symfony/cache/Traits/ProxyTrait.php',
        'Symfony\\Component\\Cache\\Traits\\RedisProxy' => __DIR__ . '/..' . '/symfony/cache/Traits/RedisProxy.php',
        'Symfony\\Component\\Cache\\Traits\\RedisTrait' => __DIR__ . '/..' . '/symfony/cache/Traits/RedisTrait.php',
        'Symfony\\Component\\ExpressionLanguage\\Compiler' => __DIR__ . '/..' . '/symfony/expression-language/Compiler.php',
        'Symfony\\Component\\ExpressionLanguage\\Expression' => __DIR__ . '/..' . '/symfony/expression-language/Expression.php',
        'Symfony\\Component\\ExpressionLanguage\\ExpressionFunction' => __DIR__ . '/..' . '/symfony/expression-language/ExpressionFunction.php',
        'Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface' => __DIR__ . '/..' . '/symfony/expression-language/ExpressionFunctionProviderInterface.php',
        'Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage' => __DIR__ . '/..' . '/symfony/expression-language/ExpressionLanguage.php',
        'Symfony\\Component\\ExpressionLanguage\\Lexer' => __DIR__ . '/..' . '/symfony/expression-language/Lexer.php',
        'Symfony\\Component\\ExpressionLanguage\\Node\\ArgumentsNode' => __DIR__ . '/..' . '/symfony/expression-language/Node/ArgumentsNode.php',
        'Symfony\\Component\\ExpressionLanguage\\Node\\ArrayNode' => __DIR__ . '/..' . '/symfony/expression-language/Node/ArrayNode.php',
        'Symfony\\Component\\ExpressionLanguage\\Node\\BinaryNode' => __DIR__ . '/..' . '/symfony/expression-language/Node/BinaryNode.php',
        'Symfony\\Component\\ExpressionLanguage\\Node\\ConditionalNode' => __DIR__ . '/..' . '/symfony/expression-language/Node/ConditionalNode.php',
        'Symfony\\Component\\ExpressionLanguage\\Node\\ConstantNode' => __DIR__ . '/..' . '/symfony/expression-language/Node/ConstantNode.php',
        'Symfony\\Component\\ExpressionLanguage\\Node\\FunctionNode' => __DIR__ . '/..' . '/symfony/expression-language/Node/FunctionNode.php',
        'Symfony\\Component\\ExpressionLanguage\\Node\\GetAttrNode' => __DIR__ . '/..' . '/symfony/expression-language/Node/GetAttrNode.php',
        'Symfony\\Component\\ExpressionLanguage\\Node\\NameNode' => __DIR__ . '/..' . '/symfony/expression-language/Node/NameNode.php',
        'Symfony\\Component\\ExpressionLanguage\\Node\\Node' => __DIR__ . '/..' . '/symfony/expression-language/Node/Node.php',
        'Symfony\\Component\\ExpressionLanguage\\Node\\UnaryNode' => __DIR__ . '/..' . '/symfony/expression-language/Node/UnaryNode.php',
        'Symfony\\Component\\ExpressionLanguage\\ParsedExpression' => __DIR__ . '/..' . '/symfony/expression-language/ParsedExpression.php',
        'Symfony\\Component\\ExpressionLanguage\\Parser' => __DIR__ . '/..' . '/symfony/expression-language/Parser.php',
        'Symfony\\Component\\ExpressionLanguage\\ParserCache\\ArrayParserCache' => __DIR__ . '/..' . '/symfony/expression-language/ParserCache/ArrayParserCache.php',
        'Symfony\\Component\\ExpressionLanguage\\ParserCache\\ParserCacheAdapter' => __DIR__ . '/..' . '/symfony/expression-language/ParserCache/ParserCacheAdapter.php',
        'Symfony\\Component\\ExpressionLanguage\\ParserCache\\ParserCacheInterface' => __DIR__ . '/..' . '/symfony/expression-language/ParserCache/ParserCacheInterface.php',
        'Symfony\\Component\\ExpressionLanguage\\SerializedParsedExpression' => __DIR__ . '/..' . '/symfony/expression-language/SerializedParsedExpression.php',
        'Symfony\\Component\\ExpressionLanguage\\SyntaxError' => __DIR__ . '/..' . '/symfony/expression-language/SyntaxError.php',
        'Symfony\\Component\\ExpressionLanguage\\Token' => __DIR__ . '/..' . '/symfony/expression-language/Token.php',
        'Symfony\\Component\\ExpressionLanguage\\TokenStream' => __DIR__ . '/..' . '/symfony/expression-language/TokenStream.php',
        'Symfony\\Polyfill\\Apcu\\Apcu' => __DIR__ . '/..' . '/symfony/polyfill-apcu/Apcu.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitAdvancedContentFilterAddon::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitAdvancedContentFilterAddon::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitAdvancedContentFilterAddon::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitAdvancedContentFilterAddon::$classMap;

        }, null, ClassLoader::class);
    }
}
