# br.com.conductor.pier.api.v1.invoker\TokenApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callbackUsingPOST**](TokenApi.md#callbackUsingPOST) | **POST** /v1/tokens/callback | /tokens/callback
[**validarUsingPOST**](TokenApi.md#validarUsingPOST) | **POST** /v1/tokens/validar | /tokens/validar


# **callbackUsingPOST**
> \br.com.conductor.pier.api.v1.model\BodyAccessToken callbackUsingPOST($body_access_token)

/tokens/callback

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v1.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v1.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v1.invoker\Api\TokenApi();
$body_access_token = new \br.com.conductor.pier.api.v1.model\BodyAccessToken(); // \br.com.conductor.pier.api.v1.model\BodyAccessToken | bodyAccessToken

try { 
    $result = $api_instance->callbackUsingPOST($body_access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->callbackUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body_access_token** | [**\br.com.conductor.pier.api.v1.model\BodyAccessToken**](\br.com.conductor.pier.api.v1.model\BodyAccessToken.md)| bodyAccessToken | 

### Return type

[**\br.com.conductor.pier.api.v1.model\BodyAccessToken**](BodyAccessToken.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **validarUsingPOST**
> object validarUsingPOST($body_access_token)

/tokens/validar

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v1.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v1.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v1.invoker\Api\TokenApi();
$body_access_token = new \br.com.conductor.pier.api.v1.model\BodyAccessToken(); // \br.com.conductor.pier.api.v1.model\BodyAccessToken | bodyAccessToken

try { 
    $result = $api_instance->validarUsingPOST($body_access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->validarUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body_access_token** | [**\br.com.conductor.pier.api.v1.model\BodyAccessToken**](\br.com.conductor.pier.api.v1.model\BodyAccessToken.md)| bodyAccessToken | 

### Return type

**object**

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

