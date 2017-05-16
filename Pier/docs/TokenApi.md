# br.com.conductor.pier.api.v2.invoker\TokenApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callbackUsingPOST**](TokenApi.md#callbackUsingPOST) | **POST** /api/tokens/callback | /api/tokens/callback


# **callbackUsingPOST**
> \br.com.conductor.pier.api.v2.model\BodyAccessToken callbackUsingPOST($body_access_token)

/api/tokens/callback

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\TokenApi();
$body_access_token = new \br.com.conductor.pier.api.v2.model\BodyAccessToken(); // \br.com.conductor.pier.api.v2.model\BodyAccessToken | bodyAccessToken

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
 **body_access_token** | [**\br.com.conductor.pier.api.v2.model\BodyAccessToken**](\br.com.conductor.pier.api.v2.model\BodyAccessToken.md)| bodyAccessToken | 

### Return type

[**\br.com.conductor.pier.api.v2.model\BodyAccessToken**](BodyAccessToken.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

