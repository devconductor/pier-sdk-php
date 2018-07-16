# br.com.conductor.pier.api.v2.invoker\GlobaltaggrupochagebackApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listarCodigosUsingGET**](GlobaltaggrupochagebackApi.md#listarCodigosUsingGET) | **GET** /api/grupos-chargeback/{id}/codigos | {{{codigo_chargeback_resource_listar}}}
[**listarUsingGET27**](GlobaltaggrupochagebackApi.md#listarUsingGET27) | **GET** /api/grupos-chargeback | {{{grupo_chargeback_resource_listar}}}


# **listarCodigosUsingGET**
> \br.com.conductor.pier.api.v2.model\PageCodigoChargebackResponse listarCodigosUsingGET($id, $sort, $page, $limit, $flag_atm, $id_bandeira, $group_id)

{{{codigo_chargeback_resource_listar}}}

{{{codigo_chargeback_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltaggrupochagebackApi();
$id = 789; // int | id
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$flag_atm = true; // bool | 
$id_bandeira = 789; // int | 
$group_id = 789; // int | 

try { 
    $result = $api_instance->listarCodigosUsingGET($id, $sort, $page, $limit, $flag_atm, $id_bandeira, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltaggrupochagebackApi->listarCodigosUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id | 
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **flag_atm** | **bool**|  | [optional] 
 **id_bandeira** | **int**|  | [optional] 
 **group_id** | **int**|  | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageCodigoChargebackResponse**](PageCodigoChargebackResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET27**
> \br.com.conductor.pier.api.v2.model\PageGrupoChargebackResponse listarUsingGET27($sort, $page, $limit)

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
    $result = $api_instance->listarUsingGET27($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltaggrupochagebackApi->listarUsingGET27: ', $e->getMessage(), "\n";
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

