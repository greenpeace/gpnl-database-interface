# P4NL_DATABASE_INTERFACE\ValidationApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**info**](ValidationApi.md#info) | **GET** /validate/info | To test if this API controller is running.
[**validateIban**](ValidationApi.md#validateIban) | **POST** /validate/iban | To validate an IBAN bank account number.
[**validatePostcode**](ValidationApi.md#validatePostcode) | **POST** /validate/postcode | To retrieve address information based on a combination of postal code and house number.


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

$apiInstance = new P4NL_DATABASE_INTERFACE\Api\ValidationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->info();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValidationApi->info: ', $e->getMessage(), PHP_EOL;
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

# **validateIban**
> object validateIban($iban)

To validate an IBAN bank account number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKey
$config = P4NL_DATABASE_INTERFACE\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = P4NL_DATABASE_INTERFACE\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$apiInstance = new P4NL_DATABASE_INTERFACE\Api\ValidationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$iban = "iban_example"; // string | 

try {
    $result = $apiInstance->validateIban($iban);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValidationApi->validateIban: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **iban** | **string**|  |

### Return type

**object**

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validatePostcode**
> object validatePostcode($request)

To retrieve address information based on a combination of postal code and house number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKey
$config = P4NL_DATABASE_INTERFACE\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = P4NL_DATABASE_INTERFACE\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$apiInstance = new P4NL_DATABASE_INTERFACE\Api\ValidationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \P4NL_DATABASE_INTERFACE\Model\PostcodeValidationRequest(); // \P4NL_DATABASE_INTERFACE\Model\PostcodeValidationRequest | 

try {
    $result = $apiInstance->validatePostcode($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValidationApi->validatePostcode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\P4NL_DATABASE_INTERFACE\Model\PostcodeValidationRequest**](../Model/PostcodeValidationRequest.md)|  |

### Return type

**object**

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

