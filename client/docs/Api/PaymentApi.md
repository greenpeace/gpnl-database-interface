# P4NL_DATABASE_INTERFACE\PaymentApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getIssuerBanks**](PaymentApi.md#getIssuerBanks) | **GET** /payment/ideal/issuerbanks | To get a list of all the iDeal issuerbanks.
[**info**](PaymentApi.md#info) | **GET** /payment/info | To test if this API controller is running.
[**requestIDealPayment**](PaymentApi.md#requestIDealPayment) | **POST** /payment/ideal | To register an iDeal payment request.


# **getIssuerBanks**
> object getIssuerBanks()

To get a list of all the iDeal issuerbanks.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKey
$config = P4NL_DATABASE_INTERFACE\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = P4NL_DATABASE_INTERFACE\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$apiInstance = new P4NL_DATABASE_INTERFACE\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getIssuerBanks();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->getIssuerBanks: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new P4NL_DATABASE_INTERFACE\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->info();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->info: ', $e->getMessage(), PHP_EOL;
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

# **requestIDealPayment**
> object requestIDealPayment($request)

To register an iDeal payment request.

You have to supply the NAW data or the guid of the contact to register the iDeal payment for that contact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKey
$config = P4NL_DATABASE_INTERFACE\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = P4NL_DATABASE_INTERFACE\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$apiInstance = new P4NL_DATABASE_INTERFACE\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \P4NL_DATABASE_INTERFACE\Model\PaymentRequest(); // \P4NL_DATABASE_INTERFACE\Model\PaymentRequest | 

try {
    $result = $apiInstance->requestIDealPayment($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->requestIDealPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\P4NL_DATABASE_INTERFACE\Model\PaymentRequest**](../Model/PaymentRequest.md)|  |

### Return type

**object**

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

