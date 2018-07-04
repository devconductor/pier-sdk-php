# br.com.conductor.pier.api.v2.invoker\GlobaltagtokenApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callbackUsingPOST**](GlobaltagtokenApi.md#callbackUsingPOST) | **POST** /api/tokens/callback | {{{token_resource_callback}}}


# **callbackUsingPOST**
> \br.com.conductor.pier.api.v2.model\BodyAccessToken callbackUsingPOST($body_access_token)

{{{token_resource_callback}}}

{{{token_resource_callback_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagtokenApi();
$body_access_token = new \br.com.conductor.pier.api.v2.model\BodyAccessToken(); // \br.com.conductor.pier.api.v2.model\BodyAccessToken | bodyAccessToken

try { 
    $result = $api_instance->callbackUsingPOST($body_access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagtokenApi->callbackUsingPOST: ', $e->getMessage(), "\n";
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

