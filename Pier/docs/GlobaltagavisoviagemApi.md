# br.com.conductor.pier.api.v2.invoker\GlobaltagavisoviagemApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**consultarUsingGET8**](GlobaltagavisoviagemApi.md#consultarUsingGET8) | **GET** /api/avisos-viagens/{id} | {{{aviso_viagem_resource_consultar}}}
[**desabilitarUsingPOST**](GlobaltagavisoviagemApi.md#desabilitarUsingPOST) | **POST** /api/avisos-viagens/{id}/desabilitar | {{{aviso_viagem_resource_desabilitar}}}
[**habilitarUsingPOST**](GlobaltagavisoviagemApi.md#habilitarUsingPOST) | **POST** /api/avisos-viagens/{id}/habilitar | {{{aviso_viagem_resource_habilitar}}}
[**listarUsingGET9**](GlobaltagavisoviagemApi.md#listarUsingGET9) | **GET** /api/avisos-viagens | {{{aviso_viagem_resource_listar}}}
[**salvarUsingPOST3**](GlobaltagavisoviagemApi.md#salvarUsingPOST3) | **POST** /api/avisos-viagens | {{{aviso_viagem_resource_salvar}}}


# **consultarUsingGET8**
> \br.com.conductor.pier.api.v2.model\AvisoViagemResponse consultarUsingGET8($id)

{{{aviso_viagem_resource_consultar}}}

{{{aviso_viagem_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagavisoviagemApi();
$id = 789; // int | {{{aviso_viagem_resource_consultar_param_id}}}

try { 
    $result = $api_instance->consultarUsingGET8($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagavisoviagemApi->consultarUsingGET8: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{aviso_viagem_resource_consultar_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\AvisoViagemResponse**](AvisoViagemResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **desabilitarUsingPOST**
> \br.com.conductor.pier.api.v2.model\AvisoViagemResponse desabilitarUsingPOST($id)

{{{aviso_viagem_resource_desabilitar}}}

{{{aviso_viagem_resource_desabilitar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagavisoviagemApi();
$id = 789; // int | {{{aviso_viagem_resource_desabilitar_param_id}}}

try { 
    $result = $api_instance->desabilitarUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagavisoviagemApi->desabilitarUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{aviso_viagem_resource_desabilitar_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\AvisoViagemResponse**](AvisoViagemResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **habilitarUsingPOST**
> \br.com.conductor.pier.api.v2.model\AvisoViagemResponse habilitarUsingPOST($id)

{{{aviso_viagem_resource_habilitar}}}

{{{aviso_viagem_resource_habilitar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagavisoviagemApi();
$id = 789; // int | {{{aviso_viagem_resource_habilitar_param_id}}}

try { 
    $result = $api_instance->habilitarUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagavisoviagemApi->habilitarUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{aviso_viagem_resource_habilitar_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\AvisoViagemResponse**](AvisoViagemResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET9**
> \br.com.conductor.pier.api.v2.model\PageAvisoViagemResponse listarUsingGET9($sort, $page, $limit, $id_cartao, $codigo_pais, $data_inicio, $data_fim, $flag_ativo)

{{{aviso_viagem_resource_listar}}}

{{{aviso_viagem_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagavisoviagemApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id_cartao = 789; // int | {{{aviso_viagem_request_id_cartao_value}}}
$codigo_pais = "codigo_pais_example"; // string | {{{aviso_viagem_request_codigo_pais_value}}}
$data_inicio = "data_inicio_example"; // string | {{{aviso_viagem_request_data_inicio_value}}}
$data_fim = "data_fim_example"; // string | {{{aviso_viagem_request_data_fim_value}}}
$flag_ativo = 56; // int | {{{aviso_viagem_request_flag_ativo_value}}}

try { 
    $result = $api_instance->listarUsingGET9($sort, $page, $limit, $id_cartao, $codigo_pais, $data_inicio, $data_fim, $flag_ativo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagavisoviagemApi->listarUsingGET9: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id_cartao** | **int**| {{{aviso_viagem_request_id_cartao_value}}} | [optional] 
 **codigo_pais** | **string**| {{{aviso_viagem_request_codigo_pais_value}}} | [optional] 
 **data_inicio** | **string**| {{{aviso_viagem_request_data_inicio_value}}} | [optional] 
 **data_fim** | **string**| {{{aviso_viagem_request_data_fim_value}}} | [optional] 
 **flag_ativo** | **int**| {{{aviso_viagem_request_flag_ativo_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageAvisoViagemResponse**](PageAvisoViagemResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST3**
> \br.com.conductor.pier.api.v2.model\AvisoViagemResponse salvarUsingPOST3($id_cartao, $codigo_pais, $data_inicio, $data_fim)

{{{aviso_viagem_resource_salvar}}}

{{{aviso_viagem_resource_salvar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagavisoviagemApi();
$id_cartao = 789; // int | {{{aviso_viagem_persist_id_cartao_value}}}
$codigo_pais = "codigo_pais_example"; // string | {{{aviso_viagem_persist_codigo_pais_value}}}
$data_inicio = "data_inicio_example"; // string | {{{aviso_viagem_persist_data_inicio_value}}}
$data_fim = "data_fim_example"; // string | {{{aviso_viagem_persist_data_fim_value}}}

try { 
    $result = $api_instance->salvarUsingPOST3($id_cartao, $codigo_pais, $data_inicio, $data_fim);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagavisoviagemApi->salvarUsingPOST3: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_cartao** | **int**| {{{aviso_viagem_persist_id_cartao_value}}} | 
 **codigo_pais** | **string**| {{{aviso_viagem_persist_codigo_pais_value}}} | 
 **data_inicio** | **string**| {{{aviso_viagem_persist_data_inicio_value}}} | 
 **data_fim** | **string**| {{{aviso_viagem_persist_data_fim_value}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\AvisoViagemResponse**](AvisoViagemResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

