# br.com.conductor.pier.api.v2.invoker\GlobaltagbinApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listarBinUsingGET**](GlobaltagbinApi.md#listarBinUsingGET) | **GET** /api/bins | {{{Bin_resource_listar_bins}}}


# **listarBinUsingGET**
> \br.com.conductor.pier.api.v2.model\PageBinResponse listarBinUsingGET($sort, $page, $limit, $id, $proxima_conta, $flag_cartao_virtual, $flag_provisorio, $service_code)

{{{Bin_resource_listar_bins}}}

{{{Bin_resource_listar_Bin_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagbinApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id = 789; // int | {{{bin_request_id_value}}}
$proxima_conta = 789; // int | {{{bin_request_proximaconta_value}}}
$flag_cartao_virtual = 56; // int | {{{bin_request_flagcartaocirtual_value}}}
$flag_provisorio = 56; // int | {{{bin_request_flagprovisorio_value}}}
$service_code = 56; // int | {{{bin_request_servicecode_value}}}

try { 
    $result = $api_instance->listarBinUsingGET($sort, $page, $limit, $id, $proxima_conta, $flag_cartao_virtual, $flag_provisorio, $service_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagbinApi->listarBinUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id** | **int**| {{{bin_request_id_value}}} | [optional] 
 **proxima_conta** | **int**| {{{bin_request_proximaconta_value}}} | [optional] 
 **flag_cartao_virtual** | **int**| {{{bin_request_flagcartaocirtual_value}}} | [optional] 
 **flag_provisorio** | **int**| {{{bin_request_flagprovisorio_value}}} | [optional] 
 **service_code** | **int**| {{{bin_request_servicecode_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageBinResponse**](PageBinResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

