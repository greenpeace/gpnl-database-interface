<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2194dae2083591ac8f3aadbae66e032b
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'PhpOption\\' => 10,
            'P4NL_DATABASE_INTERFACE\\' => 24,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'PhpOption\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption',
        ),
        'P4NL_DATABASE_INTERFACE\\' => 
        array (
            0 => __DIR__ . '/../..' . '/client/lib',
            1 => __DIR__ . '/../..' . '/',
            2 => __DIR__ . '/../..' . '/client/test',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static $classMap = array (
        'Dotenv\\Dotenv' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Dotenv.php',
        'Dotenv\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/ExceptionInterface.php',
        'Dotenv\\Exception\\InvalidFileException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/InvalidFileException.php',
        'Dotenv\\Exception\\InvalidPathException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/InvalidPathException.php',
        'Dotenv\\Exception\\ValidationException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/ValidationException.php',
        'Dotenv\\Loader\\Lines' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Loader/Lines.php',
        'Dotenv\\Loader\\Loader' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Loader/Loader.php',
        'Dotenv\\Loader\\LoaderInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Loader/LoaderInterface.php',
        'Dotenv\\Loader\\Parser' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Loader/Parser.php',
        'Dotenv\\Loader\\Value' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Loader/Value.php',
        'Dotenv\\Regex\\Regex' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Regex/Regex.php',
        'Dotenv\\Repository\\AbstractRepository' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/AbstractRepository.php',
        'Dotenv\\Repository\\AdapterRepository' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/AdapterRepository.php',
        'Dotenv\\Repository\\Adapter\\ApacheAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ApacheAdapter.php',
        'Dotenv\\Repository\\Adapter\\ArrayAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ArrayAdapter.php',
        'Dotenv\\Repository\\Adapter\\AvailabilityInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/AvailabilityInterface.php',
        'Dotenv\\Repository\\Adapter\\EnvConstAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/EnvConstAdapter.php',
        'Dotenv\\Repository\\Adapter\\PutenvAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/PutenvAdapter.php',
        'Dotenv\\Repository\\Adapter\\ReaderInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ReaderInterface.php',
        'Dotenv\\Repository\\Adapter\\ServerConstAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ServerConstAdapter.php',
        'Dotenv\\Repository\\Adapter\\WriterInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/WriterInterface.php',
        'Dotenv\\Repository\\RepositoryBuilder' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/RepositoryBuilder.php',
        'Dotenv\\Repository\\RepositoryInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/RepositoryInterface.php',
        'Dotenv\\Result\\Error' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Result/Error.php',
        'Dotenv\\Result\\Result' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Result/Result.php',
        'Dotenv\\Result\\Success' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Result/Success.php',
        'Dotenv\\Store\\FileStore' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/FileStore.php',
        'Dotenv\\Store\\File\\Paths' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/File/Paths.php',
        'Dotenv\\Store\\File\\Reader' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/File/Reader.php',
        'Dotenv\\Store\\StoreBuilder' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/StoreBuilder.php',
        'Dotenv\\Store\\StoreInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/StoreInterface.php',
        'Dotenv\\Validator' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Validator.php',
        'GuzzleHttp\\Client' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Client.php',
        'GuzzleHttp\\ClientInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/ClientInterface.php',
        'GuzzleHttp\\Cookie\\CookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJar.php',
        'GuzzleHttp\\Cookie\\CookieJarInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJarInterface.php',
        'GuzzleHttp\\Cookie\\FileCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/FileCookieJar.php',
        'GuzzleHttp\\Cookie\\SessionCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SessionCookieJar.php',
        'GuzzleHttp\\Cookie\\SetCookie' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SetCookie.php',
        'GuzzleHttp\\Exception\\BadResponseException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/BadResponseException.php',
        'GuzzleHttp\\Exception\\ClientException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ClientException.php',
        'GuzzleHttp\\Exception\\ConnectException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ConnectException.php',
        'GuzzleHttp\\Exception\\GuzzleException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/GuzzleException.php',
        'GuzzleHttp\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/InvalidArgumentException.php',
        'GuzzleHttp\\Exception\\RequestException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/RequestException.php',
        'GuzzleHttp\\Exception\\SeekException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/SeekException.php',
        'GuzzleHttp\\Exception\\ServerException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ServerException.php',
        'GuzzleHttp\\Exception\\TooManyRedirectsException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TooManyRedirectsException.php',
        'GuzzleHttp\\Exception\\TransferException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TransferException.php',
        'GuzzleHttp\\HandlerStack' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/HandlerStack.php',
        'GuzzleHttp\\Handler\\CurlFactory' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlFactory.php',
        'GuzzleHttp\\Handler\\CurlFactoryInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlFactoryInterface.php',
        'GuzzleHttp\\Handler\\CurlHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlHandler.php',
        'GuzzleHttp\\Handler\\CurlMultiHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlMultiHandler.php',
        'GuzzleHttp\\Handler\\EasyHandle' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/EasyHandle.php',
        'GuzzleHttp\\Handler\\MockHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/MockHandler.php',
        'GuzzleHttp\\Handler\\Proxy' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/Proxy.php',
        'GuzzleHttp\\Handler\\StreamHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/StreamHandler.php',
        'GuzzleHttp\\MessageFormatter' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/MessageFormatter.php',
        'GuzzleHttp\\Middleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Middleware.php',
        'GuzzleHttp\\Pool' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Pool.php',
        'GuzzleHttp\\PrepareBodyMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/PrepareBodyMiddleware.php',
        'GuzzleHttp\\Promise\\AggregateException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/AggregateException.php',
        'GuzzleHttp\\Promise\\CancellationException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/CancellationException.php',
        'GuzzleHttp\\Promise\\Coroutine' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Coroutine.php',
        'GuzzleHttp\\Promise\\EachPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/EachPromise.php',
        'GuzzleHttp\\Promise\\FulfilledPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/FulfilledPromise.php',
        'GuzzleHttp\\Promise\\Promise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Promise.php',
        'GuzzleHttp\\Promise\\PromiseInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/PromiseInterface.php',
        'GuzzleHttp\\Promise\\PromisorInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/PromisorInterface.php',
        'GuzzleHttp\\Promise\\RejectedPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/RejectedPromise.php',
        'GuzzleHttp\\Promise\\RejectionException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/RejectionException.php',
        'GuzzleHttp\\Promise\\TaskQueue' => __DIR__ . '/..' . '/guzzlehttp/promises/src/TaskQueue.php',
        'GuzzleHttp\\Promise\\TaskQueueInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/TaskQueueInterface.php',
        'GuzzleHttp\\Psr7\\AppendStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/AppendStream.php',
        'GuzzleHttp\\Psr7\\BufferStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/BufferStream.php',
        'GuzzleHttp\\Psr7\\CachingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/CachingStream.php',
        'GuzzleHttp\\Psr7\\DroppingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/DroppingStream.php',
        'GuzzleHttp\\Psr7\\FnStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/FnStream.php',
        'GuzzleHttp\\Psr7\\InflateStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/InflateStream.php',
        'GuzzleHttp\\Psr7\\LazyOpenStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LazyOpenStream.php',
        'GuzzleHttp\\Psr7\\LimitStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LimitStream.php',
        'GuzzleHttp\\Psr7\\MessageTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MessageTrait.php',
        'GuzzleHttp\\Psr7\\MultipartStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MultipartStream.php',
        'GuzzleHttp\\Psr7\\NoSeekStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/NoSeekStream.php',
        'GuzzleHttp\\Psr7\\PumpStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/PumpStream.php',
        'GuzzleHttp\\Psr7\\Request' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Request.php',
        'GuzzleHttp\\Psr7\\Response' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Response.php',
        'GuzzleHttp\\Psr7\\Rfc7230' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Rfc7230.php',
        'GuzzleHttp\\Psr7\\ServerRequest' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/ServerRequest.php',
        'GuzzleHttp\\Psr7\\Stream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Stream.php',
        'GuzzleHttp\\Psr7\\StreamDecoratorTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamDecoratorTrait.php',
        'GuzzleHttp\\Psr7\\StreamWrapper' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamWrapper.php',
        'GuzzleHttp\\Psr7\\UploadedFile' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UploadedFile.php',
        'GuzzleHttp\\Psr7\\Uri' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Uri.php',
        'GuzzleHttp\\Psr7\\UriNormalizer' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriNormalizer.php',
        'GuzzleHttp\\Psr7\\UriResolver' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriResolver.php',
        'GuzzleHttp\\RedirectMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RedirectMiddleware.php',
        'GuzzleHttp\\RequestOptions' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RequestOptions.php',
        'GuzzleHttp\\RetryMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RetryMiddleware.php',
        'GuzzleHttp\\TransferStats' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/TransferStats.php',
        'GuzzleHttp\\UriTemplate' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/UriTemplate.php',
        'P4NL_DATABASE_INTERFACE\\ApiConnector' => __DIR__ . '/../..' . '/ApiConnector.php',
        'P4NL_DATABASE_INTERFACE\\ApiException' => __DIR__ . '/../..' . '/client/lib/ApiException.php',
        'P4NL_DATABASE_INTERFACE\\Api\\ContactApi' => __DIR__ . '/../..' . '/client/lib/Api/ContactApi.php',
        'P4NL_DATABASE_INTERFACE\\Api\\MachtigingApi' => __DIR__ . '/../..' . '/client/lib/Api/MachtigingApi.php',
        'P4NL_DATABASE_INTERFACE\\Api\\PaymentApi' => __DIR__ . '/../..' . '/client/lib/Api/PaymentApi.php',
        'P4NL_DATABASE_INTERFACE\\Api\\RegisterApi' => __DIR__ . '/../..' . '/client/lib/Api/RegisterApi.php',
        'P4NL_DATABASE_INTERFACE\\Api\\TransactionStateApi' => __DIR__ . '/../..' . '/client/lib/Api/TransactionStateApi.php',
        'P4NL_DATABASE_INTERFACE\\Api\\ValidationApi' => __DIR__ . '/../..' . '/client/lib/Api/ValidationApi.php',
        'P4NL_DATABASE_INTERFACE\\Configuration' => __DIR__ . '/../..' . '/client/lib/Configuration.php',
        'P4NL_DATABASE_INTERFACE\\ContactApiTest' => __DIR__ . '/../..' . '/client/test/Api/ContactApiTest.php',
        'P4NL_DATABASE_INTERFACE\\CustomParameterTest' => __DIR__ . '/../..' . '/client/test/Model/CustomParameterTest.php',
        'P4NL_DATABASE_INTERFACE\\EmailRequestTest' => __DIR__ . '/../..' . '/client/test/Model/EmailRequestTest.php',
        'P4NL_DATABASE_INTERFACE\\HeaderSelector' => __DIR__ . '/../..' . '/client/lib/HeaderSelector.php',
        'P4NL_DATABASE_INTERFACE\\InfoRequestTest' => __DIR__ . '/../..' . '/client/test/Model/InfoRequestTest.php',
        'P4NL_DATABASE_INTERFACE\\MachtigingApiTest' => __DIR__ . '/../..' . '/client/test/Api/MachtigingApiTest.php',
        'P4NL_DATABASE_INTERFACE\\MachtigingRequestTest' => __DIR__ . '/../..' . '/client/test/Model/MachtigingRequestTest.php',
        'P4NL_DATABASE_INTERFACE\\Model\\CustomParameter' => __DIR__ . '/../..' . '/client/lib/Model/CustomParameter.php',
        'P4NL_DATABASE_INTERFACE\\Model\\EmailRequest' => __DIR__ . '/../..' . '/client/lib/Model/EmailRequest.php',
        'P4NL_DATABASE_INTERFACE\\Model\\InfoRequest' => __DIR__ . '/../..' . '/client/lib/Model/InfoRequest.php',
        'P4NL_DATABASE_INTERFACE\\Model\\MachtigingRequest' => __DIR__ . '/../..' . '/client/lib/Model/MachtigingRequest.php',
        'P4NL_DATABASE_INTERFACE\\Model\\ModelInterface' => __DIR__ . '/../..' . '/client/lib/Model/ModelInterface.php',
        'P4NL_DATABASE_INTERFACE\\Model\\PaymentRequest' => __DIR__ . '/../..' . '/client/lib/Model/PaymentRequest.php',
        'P4NL_DATABASE_INTERFACE\\Model\\PeriodiekSchenkenRequest' => __DIR__ . '/../..' . '/client/lib/Model/PeriodiekSchenkenRequest.php',
        'P4NL_DATABASE_INTERFACE\\Model\\PostcodeValidationRequest' => __DIR__ . '/../..' . '/client/lib/Model/PostcodeValidationRequest.php',
        'P4NL_DATABASE_INTERFACE\\Model\\RelatedTransaction' => __DIR__ . '/../..' . '/client/lib/Model/RelatedTransaction.php',
        'P4NL_DATABASE_INTERFACE\\Model\\ResponseParameter' => __DIR__ . '/../..' . '/client/lib/Model/ResponseParameter.php',
        'P4NL_DATABASE_INTERFACE\\Model\\Service' => __DIR__ . '/../..' . '/client/lib/Model/Service.php',
        'P4NL_DATABASE_INTERFACE\\Model\\Status' => __DIR__ . '/../..' . '/client/lib/Model/Status.php',
        'P4NL_DATABASE_INTERFACE\\Model\\StatusCode' => __DIR__ . '/../..' . '/client/lib/Model/StatusCode.php',
        'P4NL_DATABASE_INTERFACE\\Model\\StatusSubCode' => __DIR__ . '/../..' . '/client/lib/Model/StatusSubCode.php',
        'P4NL_DATABASE_INTERFACE\\Model\\TransactionStatus' => __DIR__ . '/../..' . '/client/lib/Model/TransactionStatus.php',
        'P4NL_DATABASE_INTERFACE\\Model\\TransactionStatusResponseAdditionalParameter' => __DIR__ . '/../..' . '/client/lib/Model/TransactionStatusResponseAdditionalParameter.php',
        'P4NL_DATABASE_INTERFACE\\Model\\TransactionStatusWrapper' => __DIR__ . '/../..' . '/client/lib/Model/TransactionStatusWrapper.php',
        'P4NL_DATABASE_INTERFACE\\ObjectSerializer' => __DIR__ . '/../..' . '/client/lib/ObjectSerializer.php',
        'P4NL_DATABASE_INTERFACE\\PaymentApiTest' => __DIR__ . '/../..' . '/client/test/Api/PaymentApiTest.php',
        'P4NL_DATABASE_INTERFACE\\PaymentRequestTest' => __DIR__ . '/../..' . '/client/test/Model/PaymentRequestTest.php',
        'P4NL_DATABASE_INTERFACE\\PeriodiekSchenkenRequestTest' => __DIR__ . '/../..' . '/client/test/Model/PeriodiekSchenkenRequestTest.php',
        'P4NL_DATABASE_INTERFACE\\PostcodeValidationRequestTest' => __DIR__ . '/../..' . '/client/test/Model/PostcodeValidationRequestTest.php',
        'P4NL_DATABASE_INTERFACE\\RegisterApiTest' => __DIR__ . '/../..' . '/client/test/Api/RegisterApiTest.php',
        'P4NL_DATABASE_INTERFACE\\RelatedTransactionTest' => __DIR__ . '/../..' . '/client/test/Model/RelatedTransactionTest.php',
        'P4NL_DATABASE_INTERFACE\\ResponseParameterTest' => __DIR__ . '/../..' . '/client/test/Model/ResponseParameterTest.php',
        'P4NL_DATABASE_INTERFACE\\ServiceTest' => __DIR__ . '/../..' . '/client/test/Model/ServiceTest.php',
        'P4NL_DATABASE_INTERFACE\\StatusCodeTest' => __DIR__ . '/../..' . '/client/test/Model/StatusCodeTest.php',
        'P4NL_DATABASE_INTERFACE\\StatusSubCodeTest' => __DIR__ . '/../..' . '/client/test/Model/StatusSubCodeTest.php',
        'P4NL_DATABASE_INTERFACE\\StatusTest' => __DIR__ . '/../..' . '/client/test/Model/StatusTest.php',
        'P4NL_DATABASE_INTERFACE\\TransactionStateApiTest' => __DIR__ . '/../..' . '/client/test/Api/TransactionStateApiTest.php',
        'P4NL_DATABASE_INTERFACE\\TransactionStatusResponseAdditionalParameterTest' => __DIR__ . '/../..' . '/client/test/Model/TransactionStatusResponseAdditionalParameterTest.php',
        'P4NL_DATABASE_INTERFACE\\TransactionStatusTest' => __DIR__ . '/../..' . '/client/test/Model/TransactionStatusTest.php',
        'P4NL_DATABASE_INTERFACE\\TransactionStatusWrapperTest' => __DIR__ . '/../..' . '/client/test/Model/TransactionStatusWrapperTest.php',
        'P4NL_DATABASE_INTERFACE\\ValidationApiTest' => __DIR__ . '/../..' . '/client/test/Api/ValidationApiTest.php',
        'PhpOption\\LazyOption' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/LazyOption.php',
        'PhpOption\\None' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/None.php',
        'PhpOption\\Option' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/Option.php',
        'PhpOption\\Some' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/Some.php',
        'Psr\\Http\\Message\\MessageInterface' => __DIR__ . '/..' . '/psr/http-message/src/MessageInterface.php',
        'Psr\\Http\\Message\\RequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/RequestInterface.php',
        'Psr\\Http\\Message\\ResponseInterface' => __DIR__ . '/..' . '/psr/http-message/src/ResponseInterface.php',
        'Psr\\Http\\Message\\ServerRequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/ServerRequestInterface.php',
        'Psr\\Http\\Message\\StreamInterface' => __DIR__ . '/..' . '/psr/http-message/src/StreamInterface.php',
        'Psr\\Http\\Message\\UploadedFileInterface' => __DIR__ . '/..' . '/psr/http-message/src/UploadedFileInterface.php',
        'Psr\\Http\\Message\\UriInterface' => __DIR__ . '/..' . '/psr/http-message/src/UriInterface.php',
        'Symfony\\Polyfill\\Ctype\\Ctype' => __DIR__ . '/..' . '/symfony/polyfill-ctype/Ctype.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2194dae2083591ac8f3aadbae66e032b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2194dae2083591ac8f3aadbae66e032b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2194dae2083591ac8f3aadbae66e032b::$classMap;

        }, null, ClassLoader::class);
    }
}
