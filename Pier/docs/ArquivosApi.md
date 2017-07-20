# br.com.conductor.pier.api.v2.invoker\ArquivosApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**consultarUsingGET**](ArquivosApi.md#consultarUsingGET) | **GET** /api/arquivos/{id} | Consulta de arquivo no PIER Cloud
[**salvarUsingPOST1**](ArquivosApi.md#salvarUsingPOST1) | **POST** /api/arquivos | Permite armazenar arquivos no PIER Cloud


# **consultarUsingGET**
> \br.com.conductor.pier.api.v2.model\ArquivoResponse consultarUsingGET($id)

Consulta de arquivo no PIER Cloud

Este recurso permite consultar um determinado arquivo armazenado no PIER Cloud.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ArquivosApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do arquivo

try { 
    $result = $api_instance->consultarUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArquivosApi->consultarUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do arquivo | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ArquivoResponse**](ArquivoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST1**
> \br.com.conductor.pier.api.v2.model\ArquivoResponse salvarUsingPOST1($arquivo_persist)

Permite armazenar arquivos no PIER Cloud

Este recurso permite o armazenamento de arquivos no PIER Cloud.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ArquivosApi();
$arquivo_persist = new \br.com.conductor.pier.api.v2.model\ArquivoPersist(); // \br.com.conductor.pier.api.v2.model\ArquivoPersist | arquivoPersist

try { 
    $result = $api_instance->salvarUsingPOST1($arquivo_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArquivosApi->salvarUsingPOST1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arquivo_persist** | [**\br.com.conductor.pier.api.v2.model\ArquivoPersist**](\br.com.conductor.pier.api.v2.model\ArquivoPersist.md)| arquivoPersist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ArquivoResponse**](ArquivoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

