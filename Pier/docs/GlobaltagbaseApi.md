# br.com.conductor.pier.api.v2.invoker\GlobaltagbaseApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**limparUsingPOST**](GlobaltagbaseApi.md#limparUsingPOST) | **POST** /api/bases/limpar | {{{base_resource_limpar}}}


# **limparUsingPOST**
> \br.com.conductor.pier.api.v2.model\BodyAccessToken limparUsingPOST()

{{{base_resource_limpar}}}

{{{base_resource_limpar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagbaseApi();

try { 
    $result = $api_instance->limparUsingPOST();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagbaseApi->limparUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\br.com.conductor.pier.api.v2.model\BodyAccessToken**](BodyAccessToken.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

