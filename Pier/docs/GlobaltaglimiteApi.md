# br.com.conductor.pier.api.v2.invoker\GlobaltaglimiteApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listarHistoricoAlteracoesLimitesUsingGET**](GlobaltaglimiteApi.md#listarHistoricoAlteracoesLimitesUsingGET) | **GET** /api/contas/{id}/historicos-alteracoes-limites | {{{conta_resource_listar_historico_alteracoes_limites}}}


# **listarHistoricoAlteracoesLimitesUsingGET**
> \br.com.conductor.pier.api.v2.model\PageHistoricoEventosResponse listarHistoricoAlteracoesLimitesUsingGET($id, $authorization, $sort, $page, $limit)

{{{conta_resource_listar_historico_alteracoes_limites}}}

{{{conta_resource_listar_historico_alteracoes_limites_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltaglimiteApi();
$id = 789; // int | {{{conta_resource_listar_historico_alteracoes_limites_param_id}}}
$authorization = "authorization_example"; // string | Authorization
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}

try { 
    $result = $api_instance->listarHistoricoAlteracoesLimitesUsingGET($id, $authorization, $sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltaglimiteApi->listarHistoricoAlteracoesLimitesUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{conta_resource_listar_historico_alteracoes_limites_param_id}}} | 
 **authorization** | **string**| Authorization | [optional] 
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageHistoricoEventosResponse**](PageHistoricoEventosResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

