# br.com.conductor.pier.api.v2.invoker\GlobaltaggrupochagebackApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listarCodigosUsingGET**](GlobaltaggrupochagebackApi.md#listarCodigosUsingGET) | **GET** /api/grupos-chargeback/{grupoChargebackId}/codigos | {{{codigo_chargeback_resource_listar}}}
[**listarUsingGET28**](GlobaltaggrupochagebackApi.md#listarUsingGET28) | **GET** /api/grupos-chargeback | {{{grupo_chargeback_resource_listar}}}


# **listarCodigosUsingGET**
> \br.com.conductor.pier.api.v2.model\PageCodigoChargebackResponse listarCodigosUsingGET($grupo_chargeback_id, $sort, $page, $limit, $id, $descricao, $flag_atm, $grupo_chargeback_id2)

{{{codigo_chargeback_resource_listar}}}

{{{codigo_chargeback_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltaggrupochagebackApi();
$grupo_chargeback_id = 789; // int | grupoChargebackId
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id = 789; // int | 
$descricao = "descricao_example"; // string | 
$flag_atm = true; // bool | 
$grupo_chargeback_id2 = 789; // int | 

try { 
    $result = $api_instance->listarCodigosUsingGET($grupo_chargeback_id, $sort, $page, $limit, $id, $descricao, $flag_atm, $grupo_chargeback_id2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltaggrupochagebackApi->listarCodigosUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grupo_chargeback_id** | **int**| grupoChargebackId | 
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id** | **int**|  | [optional] 
 **descricao** | **string**|  | [optional] 
 **flag_atm** | **bool**|  | [optional] 
 **grupo_chargeback_id2** | **int**|  | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageCodigoChargebackResponse**](PageCodigoChargebackResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET28**
> \br.com.conductor.pier.api.v2.model\PageGrupoChargebackResponse listarUsingGET28($sort, $page, $limit)

{{{grupo_chargeback_resource_listar}}}

{{{grupo_chargeback_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltaggrupochagebackApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}

try { 
    $result = $api_instance->listarUsingGET28($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltaggrupochagebackApi->listarUsingGET28: ', $e->getMessage(), "\n";
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

