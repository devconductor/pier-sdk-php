# br.com.conductor.pier.api.v2.invoker\GlobaltaxasrefinanciamentoApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listarUsingGET51**](GlobaltaxasrefinanciamentoApi.md#listarUsingGET51) | **GET** /api/taxas-refinanciamento | {{{taxas_refinanciamento_listar}}}


# **listarUsingGET51**
> \br.com.conductor.pier.api.v2.model\PageTaxasRefinanciamentoResponse listarUsingGET51($sort, $page, $limit, $id, $id_produto, $data_entrada, $vencimento)

{{{taxas_refinanciamento_listar}}}

{{{taxas_refinanciamento_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltaxasrefinanciamentoApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id = 789; // int | {{{taxas_refinanciamento_request_id_value}}}
$id_produto = 789; // int | {{{taxas_refinanciamento_request_id_produto_value}}}
$data_entrada = "data_entrada_example"; // string | {{{taxas_refinanciamento_request_data_entrada_value}}}
$vencimento = "vencimento_example"; // string | {{{taxas_refinanciamento_request_vencimento_value}}}

try { 
    $result = $api_instance->listarUsingGET51($sort, $page, $limit, $id, $id_produto, $data_entrada, $vencimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltaxasrefinanciamentoApi->listarUsingGET51: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id** | **int**| {{{taxas_refinanciamento_request_id_value}}} | [optional] 
 **id_produto** | **int**| {{{taxas_refinanciamento_request_id_produto_value}}} | [optional] 
 **data_entrada** | **string**| {{{taxas_refinanciamento_request_data_entrada_value}}} | [optional] 
 **vencimento** | **string**| {{{taxas_refinanciamento_request_vencimento_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTaxasRefinanciamentoResponse**](PageTaxasRefinanciamentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

