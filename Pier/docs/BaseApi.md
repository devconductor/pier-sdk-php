# br.com.conductor.pier.api.v2.invoker\BaseApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**clearUsingPOST**](BaseApi.md#clearUsingPOST) | **POST** /api/bases/limpar | Limpar mapa de bases


# **clearUsingPOST**
> \br.com.conductor.pier.api.v2.model\BodyAccessToken clearUsingPOST()

Limpar mapa de bases

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\BaseApi();

try { 
    $result = $api_instance->clearUsingPOST();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BaseApi->clearUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\br.com.conductor.pier.api.v2.model\BodyAccessToken**](BodyAccessToken.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

