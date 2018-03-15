# br.com.conductor.pier.api.v2.invoker\EnderecoNacionalApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**consultarEnderecoUsingGET**](EnderecoNacionalApi.md#consultarEnderecoUsingGET) | **GET** /api/ceps | Consultar Endere\u00E7o


# **consultarEnderecoUsingGET**
> \br.com.conductor.pier.api.v2.model\EnderecoResponse consultarEnderecoUsingGET($cep)

Consultar Endere\u00E7o

Este recurso permite consultar endere\u00E7os atrav\u00E9s do CEP.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EnderecoNacionalApi();
$cep = "cep_example"; // string | CEP

try { 
    $result = $api_instance->consultarEnderecoUsingGET($cep);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnderecoNacionalApi->consultarEnderecoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cep** | **string**| CEP | 

### Return type

[**\br.com.conductor.pier.api.v2.model\EnderecoResponse**](EnderecoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

