# br.com.conductor.pier.api.v2.invoker\GlobaltagdebitorecorrenteApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**aderirDebitoRecorrenteUsingPOST**](GlobaltagdebitorecorrenteApi.md#aderirDebitoRecorrenteUsingPOST) | **POST** /api/debitos-recorrentes | {{{conta_debito_recorrente_resource_aderir}}}
[**cancelarDebitoRecorrenteUsingPOST**](GlobaltagdebitorecorrenteApi.md#cancelarDebitoRecorrenteUsingPOST) | **POST** /api/debitos-recorrentes/{id}/cancelar | {{{conta_debito_recorrente_resource_cancelar}}}
[**listarUsingGET18**](GlobaltagdebitorecorrenteApi.md#listarUsingGET18) | **GET** /api/debitos-recorrentes | {{{conta_debito_recorrente_resource_listar}}}
[**listarUsingGET56**](GlobaltagdebitorecorrenteApi.md#listarUsingGET56) | **GET** /api/tipos-debitos-recorrentes | {{{tipo_debito_recorrente_resource_listar}}}


# **aderirDebitoRecorrenteUsingPOST**
> \br.com.conductor.pier.api.v2.model\ContaDebitoRecorrenteResponse aderirDebitoRecorrenteUsingPOST($conta_debito_recorrente_persist)

{{{conta_debito_recorrente_resource_aderir}}}

{{{conta_debito_recorrente_resource_aderir_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagdebitorecorrenteApi();
$conta_debito_recorrente_persist = new \br.com.conductor.pier.api.v2.model\ContaDebitoRecorrentePersistValue_(); // \br.com.conductor.pier.api.v2.model\ContaDebitoRecorrentePersistValue_ | contaDebitoRecorrentePersist

try { 
    $result = $api_instance->aderirDebitoRecorrenteUsingPOST($conta_debito_recorrente_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagdebitorecorrenteApi->aderirDebitoRecorrenteUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conta_debito_recorrente_persist** | [**\br.com.conductor.pier.api.v2.model\ContaDebitoRecorrentePersistValue_**](\br.com.conductor.pier.api.v2.model\ContaDebitoRecorrentePersistValue_.md)| contaDebitoRecorrentePersist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ContaDebitoRecorrenteResponse**](ContaDebitoRecorrenteResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **cancelarDebitoRecorrenteUsingPOST**
> \br.com.conductor.pier.api.v2.model\ContaDebitoRecorrenteResponse cancelarDebitoRecorrenteUsingPOST($id, $conta_debito_recorrente_persist)

{{{conta_debito_recorrente_resource_cancelar}}}

{{{conta_debito_recorrente_resource_cancelar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagdebitorecorrenteApi();
$id = 789; // int | {{{conta_debito_recorrente_resource_cancelar_param_id_debito_recorrente}}}
$conta_debito_recorrente_persist = new \br.com.conductor.pier.api.v2.model\ContaDebitoRecorrentePersistValue_(); // \br.com.conductor.pier.api.v2.model\ContaDebitoRecorrentePersistValue_ | contaDebitoRecorrentePersist

try { 
    $result = $api_instance->cancelarDebitoRecorrenteUsingPOST($id, $conta_debito_recorrente_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagdebitorecorrenteApi->cancelarDebitoRecorrenteUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{conta_debito_recorrente_resource_cancelar_param_id_debito_recorrente}}} | 
 **conta_debito_recorrente_persist** | [**\br.com.conductor.pier.api.v2.model\ContaDebitoRecorrentePersistValue_**](\br.com.conductor.pier.api.v2.model\ContaDebitoRecorrentePersistValue_.md)| contaDebitoRecorrentePersist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ContaDebitoRecorrenteResponse**](ContaDebitoRecorrenteResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET18**
> \br.com.conductor.pier.api.v2.model\PageContaDebitoRecorrenteResponse listarUsingGET18($id_conta, $id_tipo_debito_recorrente, $sort, $page, $limit, $data_hora_inicio, $data_hora_fim, $ativo, $data_hora_ultimo_pagamento)

{{{conta_debito_recorrente_resource_listar}}}

{{{conta_debito_recorrente_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagdebitorecorrenteApi();
$id_conta = 789; // int | {{{conta_debito_recorrente_resource_listar_param_id_conta}}}
$id_tipo_debito_recorrente = 789; // int | {{{conta_debito_recorrente_resource_listar_param_id_tipo_debito_recorrente}}}
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$data_hora_inicio = "data_hora_inicio_example"; // string | {{{conta_debito_recorrente_request_data_hora_inicio_value}}}
$data_hora_fim = "data_hora_fim_example"; // string | {{{conta_debito_recorrente_request_data_hora_fim_value}}}
$ativo = true; // bool | {{{conta_debito_recorrente_request_ativo_value}}}
$data_hora_ultimo_pagamento = "data_hora_ultimo_pagamento_example"; // string | {{{conta_debito_recorrente_request_data_hora_ultimo_pagamento_value}}}

try { 
    $result = $api_instance->listarUsingGET18($id_conta, $id_tipo_debito_recorrente, $sort, $page, $limit, $data_hora_inicio, $data_hora_fim, $ativo, $data_hora_ultimo_pagamento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagdebitorecorrenteApi->listarUsingGET18: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_conta** | **int**| {{{conta_debito_recorrente_resource_listar_param_id_conta}}} | 
 **id_tipo_debito_recorrente** | **int**| {{{conta_debito_recorrente_resource_listar_param_id_tipo_debito_recorrente}}} | [optional] 
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **data_hora_inicio** | **string**| {{{conta_debito_recorrente_request_data_hora_inicio_value}}} | [optional] 
 **data_hora_fim** | **string**| {{{conta_debito_recorrente_request_data_hora_fim_value}}} | [optional] 
 **ativo** | **bool**| {{{conta_debito_recorrente_request_ativo_value}}} | [optional] 
 **data_hora_ultimo_pagamento** | **string**| {{{conta_debito_recorrente_request_data_hora_ultimo_pagamento_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageContaDebitoRecorrenteResponse**](PageContaDebitoRecorrenteResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET56**
> \br.com.conductor.pier.api.v2.model\PageTipoDebitoRecorrenteResponse listarUsingGET56($sort, $page, $limit, $id, $descricao, $valor, $flag_ativo)

{{{tipo_debito_recorrente_resource_listar}}}

{{{tipo_debito_recorrente_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagdebitorecorrenteApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id = 789; // int | {{{tipo_debito_recorrente_request_id_value}}}
$descricao = "descricao_example"; // string | {{{tipo_debito_recorrente_request_descricao_value}}}
$valor = new Number(); // Number | {{{tipo_debito_recorrente_request_valor_value}}}
$flag_ativo = true; // bool | {{{tipo_debito_recorrente_request_flag_ativo_value}}}

try { 
    $result = $api_instance->listarUsingGET56($sort, $page, $limit, $id, $descricao, $valor, $flag_ativo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagdebitorecorrenteApi->listarUsingGET56: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id** | **int**| {{{tipo_debito_recorrente_request_id_value}}} | [optional] 
 **descricao** | **string**| {{{tipo_debito_recorrente_request_descricao_value}}} | [optional] 
 **valor** | [**Number**](.md)| {{{tipo_debito_recorrente_request_valor_value}}} | [optional] 
 **flag_ativo** | **bool**| {{{tipo_debito_recorrente_request_flag_ativo_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTipoDebitoRecorrenteResponse**](PageTipoDebitoRecorrenteResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

