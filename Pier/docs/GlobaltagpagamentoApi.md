# br.com.conductor.pier.api.v2.invoker\GlobaltagpagamentoApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**consultarUsingGET**](GlobaltagpagamentoApi.md#consultarUsingGET) | **GET** /api/acordos/{id} | {{{acordo_resource_consultar}}}
[**listarPagamentosUsingGET1**](GlobaltagpagamentoApi.md#listarPagamentosUsingGET1) | **GET** /api/pagamentos | {{{pagamento_resource_listar_pagamentos}}}
[**listarUsingGET**](GlobaltagpagamentoApi.md#listarUsingGET) | **GET** /api/acordos | {{{acordo_resource_listar}}}


# **consultarUsingGET**
> \br.com.conductor.pier.api.v2.model\AcordoDetalheResponse consultarUsingGET($id)

{{{acordo_resource_consultar}}}

{{{acordo_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagpagamentoApi();
$id = 789; // int | {{{acordo_resource_consultar_param_id}}}

try { 
    $result = $api_instance->consultarUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagpagamentoApi->consultarUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{acordo_resource_consultar_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\AcordoDetalheResponse**](AcordoDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarPagamentosUsingGET1**
> \br.com.conductor.pier.api.v2.model\PageHistoricoPagamentoResponse listarPagamentosUsingGET1($sort, $page, $limit, $id_conta, $id_pagamento, $id_estabelecimento, $id_banco, $id_cartao, $data_hora_pagamento, $status)

{{{pagamento_resource_listar_pagamentos}}}

{{{pagamento_resource_listar_pagamentos_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagpagamentoApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id_conta = 789; // int | {{{historico_pagamento_request_id_conta_value}}}
$id_pagamento = 789; // int | {{{historico_pagamento_request_id_pagamento_value}}}
$id_estabelecimento = 789; // int | {{{historico_pagamento_request_id_estabelecimento_value}}}
$id_banco = 789; // int | {{{historico_pagamento_request_id_banco_value}}}
$id_cartao = 789; // int | {{{historico_pagamento_request_id_cartao_value}}}
$data_hora_pagamento = "data_hora_pagamento_example"; // string | {{{historico_pagamento_request_data_hora_pagamento_value}}}
$status = 789; // int | {{{historico_pagamento_request_status_value}}}

try { 
    $result = $api_instance->listarPagamentosUsingGET1($sort, $page, $limit, $id_conta, $id_pagamento, $id_estabelecimento, $id_banco, $id_cartao, $data_hora_pagamento, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagpagamentoApi->listarPagamentosUsingGET1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id_conta** | **int**| {{{historico_pagamento_request_id_conta_value}}} | [optional] 
 **id_pagamento** | **int**| {{{historico_pagamento_request_id_pagamento_value}}} | [optional] 
 **id_estabelecimento** | **int**| {{{historico_pagamento_request_id_estabelecimento_value}}} | [optional] 
 **id_banco** | **int**| {{{historico_pagamento_request_id_banco_value}}} | [optional] 
 **id_cartao** | **int**| {{{historico_pagamento_request_id_cartao_value}}} | [optional] 
 **data_hora_pagamento** | **string**| {{{historico_pagamento_request_data_hora_pagamento_value}}} | [optional] 
 **status** | **int**| {{{historico_pagamento_request_status_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageHistoricoPagamentoResponse**](PageHistoricoPagamentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET**
> \br.com.conductor.pier.api.v2.model\PageAcordoResponse listarUsingGET($sort, $page, $limit, $id_conta, $status_acordo, $data_acordo, $quantidade_parcelas)

{{{acordo_resource_listar}}}

{{{acordo_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagpagamentoApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id_conta = 789; // int | {{{acordo_request_id_conta_value}}}
$status_acordo = 789; // int | {{{acordo_request_status_acordo_value}}}
$data_acordo = "data_acordo_example"; // string | {{{acordo_request_data_acordo_value}}}
$quantidade_parcelas = 56; // int | {{{acordo_request_quantidade_parcelas_value}}}

try { 
    $result = $api_instance->listarUsingGET($sort, $page, $limit, $id_conta, $status_acordo, $data_acordo, $quantidade_parcelas);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagpagamentoApi->listarUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id_conta** | **int**| {{{acordo_request_id_conta_value}}} | [optional] 
 **status_acordo** | **int**| {{{acordo_request_status_acordo_value}}} | [optional] 
 **data_acordo** | **string**| {{{acordo_request_data_acordo_value}}} | [optional] 
 **quantidade_parcelas** | **int**| {{{acordo_request_quantidade_parcelas_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageAcordoResponse**](PageAcordoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

