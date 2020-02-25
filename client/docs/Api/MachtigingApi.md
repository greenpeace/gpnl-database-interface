# P4NL_DATABASE_INTERFACE\MachtigingApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**info**](MachtigingApi.md#info) | **GET** /machtiging/info | To test if this API controller is running.
[**register**](MachtigingApi.md#register) | **POST** /machtiging/register | To register an authorization (machtiging) request.


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

$apiInstance = new P4NL_DATABASE_INTERFACE\Api\MachtigingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->info();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MachtigingApi->info: ', $e->getMessage(), PHP_EOL;
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

# **register**
> object register($request)

To register an authorization (machtiging) request.

You have to supply the NAW data or the guid of the contact to register the authorization for that contact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKey
$config = P4NL_DATABASE_INTERFACE\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = P4NL_DATABASE_INTERFACE\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$apiInstance = new P4NL_DATABASE_INTERFACE\Api\MachtigingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \P4NL_DATABASE_INTERFACE\Model\MachtigingRequest(); // \P4NL_DATABASE_INTERFACE\Model\MachtigingRequest | 

try {
    $result = $apiInstance->register($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MachtigingApi->register: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\P4NL_DATABASE_INTERFACE\Model\MachtigingRequest**](../Model/MachtigingRequest.md)|  |

### Return type

**object**

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

