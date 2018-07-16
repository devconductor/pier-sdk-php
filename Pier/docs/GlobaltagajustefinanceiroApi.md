# br.com.conductor.pier.api.v2.invoker\GlobaltagajustefinanceiroApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ajustarContaUsingPOST**](GlobaltagajustefinanceiroApi.md#ajustarContaUsingPOST) | **POST** /api/ajustes-financeiros | {{{ajuste_financeiro_resource_ajustar_conta}}}
[**consultarUsingGET3**](GlobaltagajustefinanceiroApi.md#consultarUsingGET3) | **GET** /api/ajustes-financeiros/{id} | {{{ajuste_financeiro_resource_consultar}}}
[**listarUsingGET2**](GlobaltagajustefinanceiroApi.md#listarUsingGET2) | **GET** /api/ajustes-financeiros | {{{ajuste_financeiro_resource_listar}}}


# **ajustarContaUsingPOST**
> \br.com.conductor.pier.api.v2.model\AjusteFinanceiroResponse ajustarContaUsingPOST($id_tipo_ajuste, $data_ajuste, $valor_ajuste, $id_conta, $identificador_externo, $id_transacao_original)

{{{ajuste_financeiro_resource_ajustar_conta}}}

{{{ajuste_financeiro_resource_ajustar_conta_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagajustefinanceiroApi();
$id_tipo_ajuste = 789; // int | {{{ajuste_financeiro_persist_id_tipo_ajuste_value}}}
$data_ajuste = "data_ajuste_example"; // string | {{{ajuste_financeiro_persist_data_ajuste_value}}}
$valor_ajuste = new Number(); // Number | {{{ajuste_financeiro_persist_valor_ajuste_value}}}
$id_conta = 789; // int | {{{ajuste_financeiro_persist_id_conta_value}}}
$identificador_externo = "identificador_externo_example"; // string | {{{ajuste_financeiro_persist_identificador_externo_value}}}
$id_transacao_original = 789; // int | {{{ajuste_persist_id_transacao_original}}}

try { 
    $result = $api_instance->ajustarContaUsingPOST($id_tipo_ajuste, $data_ajuste, $valor_ajuste, $id_conta, $identificador_externo, $id_transacao_original);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagajustefinanceiroApi->ajustarContaUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_tipo_ajuste** | **int**| {{{ajuste_financeiro_persist_id_tipo_ajuste_value}}} | 
 **data_ajuste** | **string**| {{{ajuste_financeiro_persist_data_ajuste_value}}} | 
 **valor_ajuste** | [**Number**](.md)| {{{ajuste_financeiro_persist_valor_ajuste_value}}} | 
 **id_conta** | **int**| {{{ajuste_financeiro_persist_id_conta_value}}} | 
 **identificador_externo** | **string**| {{{ajuste_financeiro_persist_identificador_externo_value}}} | [optional] 
 **id_transacao_original** | **int**| {{{ajuste_persist_id_transacao_original}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\AjusteFinanceiroResponse**](AjusteFinanceiroResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET3**
> \br.com.conductor.pier.api.v2.model\AjusteFinanceiroResponse consultarUsingGET3($id)

{{{ajuste_financeiro_resource_consultar}}}

{{{ajuste_financeiro_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagajustefinanceiroApi();
$id = 789; // int | {{{ajuste_financeiro_resource_consultar_param_id}}}

try { 
    $result = $api_instance->consultarUsingGET3($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagajustefinanceiroApi->consultarUsingGET3: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{ajuste_financeiro_resource_consultar_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\AjusteFinanceiroResponse**](AjusteFinanceiroResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET2**
> \br.com.conductor.pier.api.v2.model\PageAjusteResponse listarUsingGET2($sort, $page, $limit, $id_tipo_ajuste, $data_ajuste, $valor_ajuste, $identificador_externo, $id_conta)

{{{ajuste_financeiro_resource_listar}}}

{{{ajuste_financeiro_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagajustefinanceiroApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id_tipo_ajuste = 789; // int | {{{ajuste_request_id_tipo_ajuste_value}}}
$data_ajuste = "data_ajuste_example"; // string | {{{ajuste_request_data_ajuste_value}}}
$valor_ajuste = new Number(); // Number | {{{ajuste_request_valor_ajuste_value}}}
$identificador_externo = "identificador_externo_example"; // string | {{{ajuste_request_identificador_externo_value}}}
$id_conta = 789; // int | {{{ajuste_request_id_conta_value}}}

try { 
    $result = $api_instance->listarUsingGET2($sort, $page, $limit, $id_tipo_ajuste, $data_ajuste, $valor_ajuste, $identificador_externo, $id_conta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagajustefinanceiroApi->listarUsingGET2: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id_tipo_ajuste** | **int**| {{{ajuste_request_id_tipo_ajuste_value}}} | [optional] 
 **data_ajuste** | **string**| {{{ajuste_request_data_ajuste_value}}} | [optional] 
 **valor_ajuste** | [**Number**](.md)| {{{ajuste_request_valor_ajuste_value}}} | [optional] 
 **identificador_externo** | **string**| {{{ajuste_request_identificador_externo_value}}} | [optional] 
 **id_conta** | **int**| {{{ajuste_request_id_conta_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageAjusteResponse**](PageAjusteResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

