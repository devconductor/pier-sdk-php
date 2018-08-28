# br.com.conductor.pier.api.v2.invoker\GlobaltagriscofraudeApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**consultarUsingGET37**](GlobaltagriscofraudeApi.md#consultarUsingGET37) | **GET** /api/riscos-fraudes/{id} | {{{risco_fraude_resource_consultar}}}
[**listarTiposResolucaoUsingGET**](GlobaltagriscofraudeApi.md#listarTiposResolucaoUsingGET) | **GET** /api/tipos-resolucao | {{{risco_fraude_resource_listar_tipos_resolucao}}}
[**negarUsingPOST**](GlobaltagriscofraudeApi.md#negarUsingPOST) | **POST** /api/riscos-fraudes/{id}/negar | {{{risco_fraude_resource_negar}}}
[**reconhecerUsingPOST**](GlobaltagriscofraudeApi.md#reconhecerUsingPOST) | **POST** /api/riscos-fraudes/{id}/reconhecer | {{{risco_fraude_resource_reconhecer}}}
[**validarDadosPortadorUsingPOST**](GlobaltagriscofraudeApi.md#validarDadosPortadorUsingPOST) | **POST** /api/riscos-fraudes/validar-dados-portador | {{{risco_fraude_resource_validar_dados_portador}}}


# **consultarUsingGET37**
> \br.com.conductor.pier.api.v2.model\RiscoFraudeDetalhadoResponse consultarUsingGET37($id)

{{{risco_fraude_resource_consultar}}}

{{{risco_fraude_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagriscofraudeApi();
$id = 789; // int | {{{risco_fraude_resource_consultar_param_id_risco_fraude}}}

try { 
    $result = $api_instance->consultarUsingGET37($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagriscofraudeApi->consultarUsingGET37: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{risco_fraude_resource_consultar_param_id_risco_fraude}}} | 

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

{{{risco_fraude_resource_listar_tipos_resolucao}}}

{{{risco_fraude_resource_listar_tipos_resolucao_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagriscofraudeApi();
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarTiposResolucaoUsingGET($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagriscofraudeApi->listarTiposResolucaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 

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

{{{risco_fraude_resource_negar}}}

{{{risco_fraude_resource_negar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagriscofraudeApi();
$id = 789; // int | {{{risco_fraude_resource_negar_param_id_risco_fraude}}}

try { 
    $result = $api_instance->negarUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagriscofraudeApi->negarUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{risco_fraude_resource_negar_param_id_risco_fraude}}} | 

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

{{{risco_fraude_resource_reconhecer}}}

{{{risco_fraude_resource_reconhecer_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagriscofraudeApi();
$id = 789; // int | {{{risco_fraude_resource_reconhecer_param_id_risco_fraude}}}

try { 
    $result = $api_instance->reconhecerUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagriscofraudeApi->reconhecerUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{risco_fraude_resource_reconhecer_param_id_risco_fraude}}} | 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **validarDadosPortadorUsingPOST**
> object validarDadosPortadorUsingPOST($request)

{{{risco_fraude_resource_validar_dados_portador}}}

{{{risco_fraude_resource_validar_dados_portador_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagriscofraudeApi();
$request = new \br.com.conductor.pier.api.v2.model\DadosPortadorRequest(); // \br.com.conductor.pier.api.v2.model\DadosPortadorRequest | request

try { 
    $result = $api_instance->validarDadosPortadorUsingPOST($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagriscofraudeApi->validarDadosPortadorUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\br.com.conductor.pier.api.v2.model\DadosPortadorRequest**](\br.com.conductor.pier.api.v2.model\DadosPortadorRequest.md)| request | 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

