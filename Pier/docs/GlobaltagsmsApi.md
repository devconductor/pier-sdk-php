# br.com.conductor.pier.api.v2.invoker\GlobaltagsmsApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listarSMSUsingGET1**](GlobaltagsmsApi.md#listarSMSUsingGET1) | **GET** /api/sms | {{{sms_resource_listar_sms}}}


# **listarSMSUsingGET1**
> \br.com.conductor.pier.api.v2.model\PageSMSEnvioResponse listarSMSUsingGET1($id_conta, $sort, $page, $limit, $data_inicio, $data_fim)

{{{sms_resource_listar_sms}}}

{{{sms_resource_listar_sms_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagsmsApi();
$id_conta = 789; // int | {{{sms_envio_request_id_conta_value}}}
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$data_inicio = "data_inicio_example"; // string | {{{sms_envio_request_data_inicio_value}}}
$data_fim = "data_fim_example"; // string | {{{sms_envio_request_data_fim_value}}}

try { 
    $result = $api_instance->listarSMSUsingGET1($id_conta, $sort, $page, $limit, $data_inicio, $data_fim);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagsmsApi->listarSMSUsingGET1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_conta** | **int**| {{{sms_envio_request_id_conta_value}}} | 
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **data_inicio** | **string**| {{{sms_envio_request_data_inicio_value}}} | [optional] 
 **data_fim** | **string**| {{{sms_envio_request_data_fim_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageSMSEnvioResponse**](PageSMSEnvioResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

