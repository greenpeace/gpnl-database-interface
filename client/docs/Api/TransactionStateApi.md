# P4NL_DATABASE_INTERFACE\TransactionStateApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**info**](TransactionStateApi.md#info) | **GET** /transactionstate/info | To test if this API controller is running.
[**savePaymentTransactionState**](TransactionStateApi.md#savePaymentTransactionState) | **POST** /transactionstate/push | To save the tranaction state of an iDeal payment request.


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

$apiInstance = new P4NL_DATABASE_INTERFACE\Api\TransactionStateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->info();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionStateApi->info: ', $e->getMessage(), PHP_EOL;
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

# **savePaymentTransactionState**
> object savePaymentTransactionState($push_response_wrapper)

To save the tranaction state of an iDeal payment request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKey
$config = P4NL_DATABASE_INTERFACE\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = P4NL_DATABASE_INTERFACE\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$apiInstance = new P4NL_DATABASE_INTERFACE\Api\TransactionStateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$push_response_wrapper = new \P4NL_DATABASE_INTERFACE\Model\TransactionStatusWrapper(); // \P4NL_DATABASE_INTERFACE\Model\TransactionStatusWrapper | 

try {
    $result = $apiInstance->savePaymentTransactionState($push_response_wrapper);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionStateApi->savePaymentTransactionState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **push_response_wrapper** | [**\P4NL_DATABASE_INTERFACE\Model\TransactionStatusWrapper**](../Model/TransactionStatusWrapper.md)|  |

### Return type

**object**

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

