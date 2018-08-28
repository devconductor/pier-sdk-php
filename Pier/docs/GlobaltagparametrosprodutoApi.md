# br.com.conductor.pier.api.v2.invoker\GlobaltagparametrosprodutoApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listarUsingGET37**](GlobaltagparametrosprodutoApi.md#listarUsingGET37) | **GET** /api/parametros-produto | {{{parametro_produto_listar}}}


# **listarUsingGET37**
> \br.com.conductor.pier.api.v2.model\ParametroProdutoResponse listarUsingGET37($sort, $page, $limit, $id, $codigo, $tipo, $id_produto)

{{{parametro_produto_listar}}}

{{{parametro_produto_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagparametrosprodutoApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id = 789; // int | {{{parametro_produto_request_id_value}}}
$codigo = "codigo_example"; // string | {{{parametro_produto_request_codigo_value}}}
$tipo = "tipo_example"; // string | {{{parametro_produto_request_tipo_value}}}
$id_produto = 789; // int | {{{parametro_produto_request_id_produto_value}}}

try { 
    $result = $api_instance->listarUsingGET37($sort, $page, $limit, $id, $codigo, $tipo, $id_produto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagparametrosprodutoApi->listarUsingGET37: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id** | **int**| {{{parametro_produto_request_id_value}}} | [optional] 
 **codigo** | **string**| {{{parametro_produto_request_codigo_value}}} | [optional] 
 **tipo** | **string**| {{{parametro_produto_request_tipo_value}}} | [optional] 
 **id_produto** | **int**| {{{parametro_produto_request_id_produto_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\ParametroProdutoResponse**](ParametroProdutoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

