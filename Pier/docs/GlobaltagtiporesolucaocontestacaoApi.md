# br.com.conductor.pier.api.v2.invoker\GlobaltagtiporesolucaocontestacaoApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listarStatusContestacaoUsingGET**](GlobaltagtiporesolucaocontestacaoApi.md#listarStatusContestacaoUsingGET) | **GET** /api/status-contestacoes | {{{status_contestacao_resource_listar_status_contestacao}}}
[**listarTipoResolucaoContestacaoUsingGET**](GlobaltagtiporesolucaocontestacaoApi.md#listarTipoResolucaoContestacaoUsingGET) | **GET** /api/tipos-resolucoes-contestacoes | {{{tipo_resolucao_contestacao_resource_listar_tipo_contestacao}}}


# **listarStatusContestacaoUsingGET**
> \br.com.conductor.pier.api.v2.model\PageStatusContestacaoResponse listarStatusContestacaoUsingGET($sort, $page, $limit, $id_status_contestacao, $id_status_contestacao_origem, $descricao, $flag_permite_alteracao, $flag_sistema)

{{{status_contestacao_resource_listar_status_contestacao}}}

{{{status_contestacao_resource_listar_status_contestacao_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagtiporesolucaocontestacaoApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id_status_contestacao = 789; // int | {{{status_contestacao_request_idstatuscontestacao_value}}}
$id_status_contestacao_origem = 789; // int | {{{status_contestacao_request_idstatuscontestacaoOrigem_value}}}
$descricao = "descricao_example"; // string | {{{status_contestacao_request_descricao_value}}}
$flag_permite_alteracao = 56; // int | {{{status_contestacao_request_flagpermitealteracao_value}}}
$flag_sistema = 56; // int | {{{status_contestacao_request_flagsistema_value}}}

try { 
    $result = $api_instance->listarStatusContestacaoUsingGET($sort, $page, $limit, $id_status_contestacao, $id_status_contestacao_origem, $descricao, $flag_permite_alteracao, $flag_sistema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagtiporesolucaocontestacaoApi->listarStatusContestacaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id_status_contestacao** | **int**| {{{status_contestacao_request_idstatuscontestacao_value}}} | [optional] 
 **id_status_contestacao_origem** | **int**| {{{status_contestacao_request_idstatuscontestacaoOrigem_value}}} | [optional] 
 **descricao** | **string**| {{{status_contestacao_request_descricao_value}}} | [optional] 
 **flag_permite_alteracao** | **int**| {{{status_contestacao_request_flagpermitealteracao_value}}} | [optional] 
 **flag_sistema** | **int**| {{{status_contestacao_request_flagsistema_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageStatusContestacaoResponse**](PageStatusContestacaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarTipoResolucaoContestacaoUsingGET**
> \br.com.conductor.pier.api.v2.model\PageTipoResolucaoContestacaoResponse listarTipoResolucaoContestacaoUsingGET($sort, $page, $limit, $id_tipo_resolucao_contestacao, $descricao)

{{{tipo_resolucao_contestacao_resource_listar_tipo_contestacao}}}

{{{tipo_resolucao_contestacao_resource_listar_tipo_resolucao_contestacao_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagtiporesolucaocontestacaoApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id_tipo_resolucao_contestacao = 789; // int | {{{tipo_resolucao_contestacao_request_idTipoResolucaoContestacao_value}}}
$descricao = "descricao_example"; // string | {{{tipo_resolucao_contestacao_request_descricao_value}}}

try { 
    $result = $api_instance->listarTipoResolucaoContestacaoUsingGET($sort, $page, $limit, $id_tipo_resolucao_contestacao, $descricao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagtiporesolucaocontestacaoApi->listarTipoResolucaoContestacaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id_tipo_resolucao_contestacao** | **int**| {{{tipo_resolucao_contestacao_request_idTipoResolucaoContestacao_value}}} | [optional] 
 **descricao** | **string**| {{{tipo_resolucao_contestacao_request_descricao_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTipoResolucaoContestacaoResponse**](PageTipoResolucaoContestacaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

