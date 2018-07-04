# br.com.conductor.pier.api.v2.invoker\GlobaltagcompracontestadaApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**detalheCartaoUsingGET**](GlobaltagcompracontestadaApi.md#detalheCartaoUsingGET) | **GET** /api/cartoes-com-contestacoes/{idCartao} | {{{compra_contestada_detalhe_cartao_resource_listar}}}
[**listarUsingGET12**](GlobaltagcompracontestadaApi.md#listarUsingGET12) | **GET** /api/cartoes-com-contestacoes | {{{cartao_com_compra_contestada_resource_listar}}}
[**transacaoUsingGET**](GlobaltagcompracontestadaApi.md#transacaoUsingGET) | **GET** /api/cartoes-com-contestacoes/{idCartao}/transacoes | {{{compra_contestada_transacoes_resource_listar}}}


# **detalheCartaoUsingGET**
> \br.com.conductor.pier.api.v2.model\PageGrupoChargebackResponse detalheCartaoUsingGET($id_cartao)

{{{compra_contestada_detalhe_cartao_resource_listar}}}

{{{compra_contestada_detalhe_cartao_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcompracontestadaApi();
$id_cartao = 789; // int | idCartao

try { 
    $result = $api_instance->detalheCartaoUsingGET($id_cartao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcompracontestadaApi->detalheCartaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_cartao** | **int**| idCartao | 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageGrupoChargebackResponse**](PageGrupoChargebackResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET12**
> \br.com.conductor.pier.api.v2.model\PageGrupoChargebackResponse listarUsingGET12($sort, $page, $limit)

{{{cartao_com_compra_contestada_resource_listar}}}

{{{cartao_com_compra_contestada_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcompracontestadaApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}

try { 
    $result = $api_instance->listarUsingGET12($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcompracontestadaApi->listarUsingGET12: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageGrupoChargebackResponse**](PageGrupoChargebackResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **transacaoUsingGET**
> \br.com.conductor.pier.api.v2.model\PageGrupoChargebackResponse transacaoUsingGET($id_cartao, $sort, $page, $limit)

{{{compra_contestada_transacoes_resource_listar}}}

{{{compra_contestada_transacoes_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcompracontestadaApi();
$id_cartao = 789; // int | idCartao
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}

try { 
    $result = $api_instance->transacaoUsingGET($id_cartao, $sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcompracontestadaApi->transacaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_cartao** | **int**| idCartao | 
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageGrupoChargebackResponse**](PageGrupoChargebackResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

