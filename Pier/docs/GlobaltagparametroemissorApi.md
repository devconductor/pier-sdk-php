# br.com.conductor.pier.api.v2.invoker\GlobaltagparametroemissorApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**consultarUsingGET27**](GlobaltagparametroemissorApi.md#consultarUsingGET27) | **GET** /api/parametros-emissor/{codigo} | {{{parametro_emissor_recurso}}}


# **consultarUsingGET27**
> \br.com.conductor.pier.api.v2.model\ParametroEmissorResponse consultarUsingGET27($codigo)

{{{parametro_emissor_recurso}}}

{{{parametro_emissor_recurso_notas}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagparametroemissorApi();
$codigo = "codigo_example"; // string | {{{parametro_emissor_recurso_pesquisa_codigo_param}}}

try { 
    $result = $api_instance->consultarUsingGET27($codigo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagparametroemissorApi->consultarUsingGET27: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **codigo** | **string**| {{{parametro_emissor_recurso_pesquisa_codigo_param}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ParametroEmissorResponse**](ParametroEmissorResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

