# br.com.conductor.pier.api.v2.invoker\RiscoFraudeApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**consultarUsingGET23**](RiscoFraudeApi.md#consultarUsingGET23) | **GET** /api/riscos-fraudes/{id} | Consultar uma transa\u00C3\u00A7\u00C3\u00A3o classificada com risco de fraude
[**listarTiposResolucaoUsingGET**](RiscoFraudeApi.md#listarTiposResolucaoUsingGET) | **GET** /api/tipos-resolucao | Listar os tipos de resolu\u00C3\u00A7\u00C3\u00A3o de fraude
[**negarUsingPOST**](RiscoFraudeApi.md#negarUsingPOST) | **POST** /api/riscos-fraudes/{id}/negar | Negar autenticidade de uma transa\u00C3\u00A7\u00C3\u00A3o classificada como risco de fraude
[**reconhecerUsingPOST**](RiscoFraudeApi.md#reconhecerUsingPOST) | **POST** /api/riscos-fraudes/{id}/reconhecer | Reconhecer autenticidade de uma transa\u00C3\u00A7\u00C3\u00A3o classificada como risco de fraude


# **consultarUsingGET23**
> \br.com.conductor.pier.api.v2.model\RiscoFraudeDetalhadoResponse consultarUsingGET23($id)

Consultar uma transa\u00C3\u00A7\u00C3\u00A3o classificada com risco de fraude

Consulta os detalhes de uma transa\u00C3\u00A7\u00C3\u00A3o classificada como risco de fraude.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\RiscoFraudeApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do risco de fraude

try { 
    $result = $api_instance->consultarUsingGET23($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RiscoFraudeApi->consultarUsingGET23: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do risco de fraude | 

### Return type

[**\br.com.conductor.pier.api.v2.model\RiscoFraudeDetalhadoResponse**](RiscoFraudeDetalhadoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarTiposResolucaoUsingGET**
> \br.com.conductor.pier.api.v2.model\TipoResolucaoResponse listarTiposResolucaoUsingGET($page, $limit)

Listar os tipos de resolu\u00C3\u00A7\u00C3\u00A3o de fraude

Este recurso permite que sejam listados os tipos de resolu\u00C3\u00A7\u00C3\u00A3o de fraude, cadastrados para um emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\RiscoFraudeApi();
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarTiposResolucaoUsingGET($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RiscoFraudeApi->listarTiposResolucaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\TipoResolucaoResponse**](TipoResolucaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **negarUsingPOST**
> object negarUsingPOST($id)

Negar autenticidade de uma transa\u00C3\u00A7\u00C3\u00A3o classificada como risco de fraude

Nega a realiza\u00C3\u00A7\u00C3\u00A3o de uma transa\u00C3\u00A7\u00C3\u00A3o classificada como risco de fraude.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\RiscoFraudeApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do risco de fraude

try { 
    $result = $api_instance->negarUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RiscoFraudeApi->negarUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do risco de fraude | 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **reconhecerUsingPOST**
> object reconhecerUsingPOST($id)

Reconhecer autenticidade de uma transa\u00C3\u00A7\u00C3\u00A3o classificada como risco de fraude

Confirma a autenticidade de uma transa\u00C3\u00A7\u00C3\u00A3o classificada como risco de fraude.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\RiscoFraudeApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do risco de fraude

try { 
    $result = $api_instance->reconhecerUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RiscoFraudeApi->reconhecerUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do risco de fraude | 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

