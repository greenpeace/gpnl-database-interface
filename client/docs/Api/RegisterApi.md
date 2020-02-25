# P4NL_DATABASE_INTERFACE\RegisterApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**info**](RegisterApi.md#info) | **GET** /register/info | To test if this API controller is running.
[**registerEmail**](RegisterApi.md#registerEmail) | **POST** /register/email | To register a participant for an email newsletters.
[**registerInfoRequest**](RegisterApi.md#registerInfoRequest) | **POST** /register/infoaanvraag | To register an information request.
[**registerPeriodiekeSchenking**](RegisterApi.md#registerPeriodiekeSchenking) | **POST** /register/periodiek | To register an periodical donation request.


# **info**
> object info()

To test if this API controller is running.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKey
$config = P4NL_DATABASE_INTERFACE\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = P4NL_DATABASE_INTERFACE\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$apiInstance = new P4NL_DATABASE_INTERFACE\Api\RegisterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->info();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegisterApi->info: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registerEmail**
> object registerEmail($request)

To register a participant for an email newsletters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKey
$config = P4NL_DATABASE_INTERFACE\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = P4NL_DATABASE_INTERFACE\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$apiInstance = new P4NL_DATABASE_INTERFACE\Api\RegisterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \P4NL_DATABASE_INTERFACE\Model\EmailRequest(); // \P4NL_DATABASE_INTERFACE\Model\EmailRequest | 

try {
    $result = $apiInstance->registerEmail($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegisterApi->registerEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\P4NL_DATABASE_INTERFACE\Model\EmailRequest**](../Model/EmailRequest.md)|  |

### Return type

**object**

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registerInfoRequest**
> object registerInfoRequest($request)

To register an information request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKey
$config = P4NL_DATABASE_INTERFACE\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = P4NL_DATABASE_INTERFACE\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$apiInstance = new P4NL_DATABASE_INTERFACE\Api\RegisterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \P4NL_DATABASE_INTERFACE\Model\InfoRequest(); // \P4NL_DATABASE_INTERFACE\Model\InfoRequest | 

try {
    $result = $apiInstance->registerInfoRequest($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegisterApi->registerInfoRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\P4NL_DATABASE_INTERFACE\Model\InfoRequest**](../Model/InfoRequest.md)|  |

### Return type

**object**

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registerPeriodiekeSchenking**
> object registerPeriodiekeSchenking($request)

To register an periodical donation request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKey
$config = P4NL_DATABASE_INTERFACE\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = P4NL_DATABASE_INTERFACE\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$apiInstance = new P4NL_DATABASE_INTERFACE\Api\RegisterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \P4NL_DATABASE_INTERFACE\Model\PeriodiekSchenkenRequest(); // \P4NL_DATABASE_INTERFACE\Model\PeriodiekSchenkenRequest | 

try {
    $result = $apiInstance->registerPeriodiekeSchenking($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegisterApi->registerPeriodiekeSchenking: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\P4NL_DATABASE_INTERFACE\Model\PeriodiekSchenkenRequest**](../Model/PeriodiekSchenkenRequest.md)|  |

### Return type

**object**

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

