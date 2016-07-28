# br.com.conductor.pier.api.v1.invoker\BaseApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**clearUsingGET**](BaseApi.md#clearUsingGET) | **GET** /api/bases/clear | /bases/clear


# **clearUsingGET**
> \br.com.conductor.pier.api.v1.model\BodyAccessToken clearUsingGET()

/bases/clear

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v1.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v1.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v1.invoker\Api\BaseApi();

try { 
    $result = $api_instance->clearUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BaseApi->clearUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\br.com.conductor.pier.api.v1.model\BodyAccessToken**](BodyAccessToken.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

