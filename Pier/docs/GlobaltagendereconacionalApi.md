# br.com.conductor.pier.api.v2.invoker\GlobaltagendereconacionalApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**consultarEnderecoUsingGET**](GlobaltagendereconacionalApi.md#consultarEnderecoUsingGET) | **GET** /api/ceps | {{{c_e_p_endereco_resource_consultar_endereco}}}


# **consultarEnderecoUsingGET**
> \br.com.conductor.pier.api.v2.model\EnderecoResponse consultarEnderecoUsingGET($cep)

{{{c_e_p_endereco_resource_consultar_endereco}}}

{{{c_e_p_endereco_resource_consultar_endereco_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagendereconacionalApi();
$cep = "cep_example"; // string | CEP

try { 
    $result = $api_instance->consultarEnderecoUsingGET($cep);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagendereconacionalApi->consultarEnderecoUsingGET: ', $e->getMessage(), "\n";
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

