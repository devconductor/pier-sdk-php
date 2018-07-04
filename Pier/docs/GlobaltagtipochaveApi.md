# br.com.conductor.pier.api.v2.invoker\GlobaltagtipochaveApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listarTipoChaveUsingGET**](GlobaltagtipochaveApi.md#listarTipoChaveUsingGET) | **GET** /api/tipos-chaves | {{{tipo_chave_resource_listar_tipos_chaves}}}


# **listarTipoChaveUsingGET**
> \br.com.conductor.pier.api.v2.model\PageTipoChaveResponse listarTipoChaveUsingGET($sort, $page, $limit, $id, $descricao)

{{{tipo_chave_resource_listar_tipos_chaves}}}

{{{tipo_chave_resource_listar_tipos_chaves_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagtipochaveApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id = 789; // int | {{{tipo_chave_request_id_value}}}
$descricao = "descricao_example"; // string | {{{tipo_chave_request_descricao_value}}}

try { 
    $result = $api_instance->listarTipoChaveUsingGET($sort, $page, $limit, $id, $descricao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagtipochaveApi->listarTipoChaveUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id** | **int**| {{{tipo_chave_request_id_value}}} | [optional] 
 **descricao** | **string**| {{{tipo_chave_request_descricao_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTipoChaveResponse**](PageTipoChaveResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

