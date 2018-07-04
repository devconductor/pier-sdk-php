# br.com.conductor.pier.api.v2.invoker\GlobaltagpropostaApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarUsingPOST**](GlobaltagpropostaApi.md#alterarUsingPOST) | **POST** /api/propostas/{id}/alterar-status | {{{proposta_resource_alterar_status}}}
[**consultarUsingGET32**](GlobaltagpropostaApi.md#consultarUsingGET32) | **GET** /api/propostas/{id} | {{{proposta_resource_consultar}}}
[**listarStatusPropostaUsingGET**](GlobaltagpropostaApi.md#listarStatusPropostaUsingGET) | **GET** /api/status-propostas | {{{proposta_resource_listar_status}}}
[**listarUsingGET44**](GlobaltagpropostaApi.md#listarUsingGET44) | **GET** /api/propostas | {{{proposta_resource_listar}}}


# **alterarUsingPOST**
> \br.com.conductor.pier.api.v2.model\PropostaResponse alterarUsingPOST($id, $update)

{{{proposta_resource_alterar_status}}}

{{{proposta_resource_alterar_status_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagpropostaApi();
$id = 789; // int | {{{proposta_resource_alterar_status_param_id}}}
$update = new \br.com.conductor.pier.api.v2.model\StatusPropostaUpdate(); // \br.com.conductor.pier.api.v2.model\StatusPropostaUpdate | update

try { 
    $result = $api_instance->alterarUsingPOST($id, $update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagpropostaApi->alterarUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{proposta_resource_alterar_status_param_id}}} | 
 **update** | [**\br.com.conductor.pier.api.v2.model\StatusPropostaUpdate**](\br.com.conductor.pier.api.v2.model\StatusPropostaUpdate.md)| update | 

### Return type

[**\br.com.conductor.pier.api.v2.model\PropostaResponse**](PropostaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET32**
> \br.com.conductor.pier.api.v2.model\PropostaResponse consultarUsingGET32($id)

{{{proposta_resource_consultar}}}

{{{proposta_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagpropostaApi();
$id = 789; // int | {{{proposta_resource_consultar_param_id}}}

try { 
    $result = $api_instance->consultarUsingGET32($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagpropostaApi->consultarUsingGET32: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{proposta_resource_consultar_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\PropostaResponse**](PropostaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarStatusPropostaUsingGET**
> \br.com.conductor.pier.api.v2.model\PageStatusPropostaResponse listarStatusPropostaUsingGET($sort, $page, $limit, $status, $flag_permite_alteracao)

{{{proposta_resource_listar_status}}}

{{{proposta_resource_listar_status_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagpropostaApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$status = 56; // int | {{{status_proposta_request_status_value}}}
$flag_permite_alteracao = true; // bool | {{{status_proposta_request_flag_permite_alteracao_value}}}

try { 
    $result = $api_instance->listarStatusPropostaUsingGET($sort, $page, $limit, $status, $flag_permite_alteracao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagpropostaApi->listarStatusPropostaUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **status** | **int**| {{{status_proposta_request_status_value}}} | [optional] 
 **flag_permite_alteracao** | **bool**| {{{status_proposta_request_flag_permite_alteracao_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageStatusPropostaResponse**](PageStatusPropostaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET44**
> \br.com.conductor.pier.api.v2.model\PagePropostaResponse listarUsingGET44($sort, $page, $limit, $status)

{{{proposta_resource_listar}}}

{{{proposta_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagpropostaApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$status = 56; // int | {{{proposta_request_status_value}}}

try { 
    $result = $api_instance->listarUsingGET44($sort, $page, $limit, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagpropostaApi->listarUsingGET44: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **status** | **int**| {{{proposta_request_status_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PagePropostaResponse**](PagePropostaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

