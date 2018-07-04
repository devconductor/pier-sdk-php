# br.com.conductor.pier.api.v2.invoker\GlobaltagdispositivoApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ativarUsingPOST**](GlobaltagdispositivoApi.md#ativarUsingPOST) | **POST** /api/dispositivos/{id}/ativar-dispositivo | {{{dispositivo_resource_ativar}}}
[**desativarUsingPOST**](GlobaltagdispositivoApi.md#desativarUsingPOST) | **POST** /api/dispositivos/{id}/desativar-dispositivo | {{{dispositivo_resource_desativar}}}
[**listarUsingGET20**](GlobaltagdispositivoApi.md#listarUsingGET20) | **GET** /api/dispositivos | {{{dispositivo_resource_listar}}}
[**salvarUsingPOST10**](GlobaltagdispositivoApi.md#salvarUsingPOST10) | **POST** /api/dispositivos | {{{dispositivo_resource_salvar}}}


# **ativarUsingPOST**
> \br.com.conductor.pier.api.v2.model\DispositivoResponse ativarUsingPOST($id)

{{{dispositivo_resource_ativar}}}

{{{dispositivo_resource_ativar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagdispositivoApi();
$id = 789; // int | {{{dispositivo_resource_ativar_param_id}}}

try { 
    $result = $api_instance->ativarUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagdispositivoApi->ativarUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{dispositivo_resource_ativar_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\DispositivoResponse**](DispositivoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **desativarUsingPOST**
> \br.com.conductor.pier.api.v2.model\DispositivoResponse desativarUsingPOST($id)

{{{dispositivo_resource_desativar}}}

{{{dispositivo_resource_desativar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagdispositivoApi();
$id = 789; // int | {{{dispositivo_resource_desativar_param_id}}}

try { 
    $result = $api_instance->desativarUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagdispositivoApi->desativarUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{dispositivo_resource_desativar_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\DispositivoResponse**](DispositivoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET20**
> \br.com.conductor.pier.api.v2.model\PageDispositivoResponse listarUsingGET20($sort, $page, $limit, $token, $id_usuario, $id_aplicacao_mobile, $data_criacao, $data_desativacao)

{{{dispositivo_resource_listar}}}

{{{dispositivo_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagdispositivoApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$token = "token_example"; // string | {{{dispositivo_request_token_value}}}
$id_usuario = 789; // int | {{{dispositivo_request_id_usuario_value}}}
$id_aplicacao_mobile = 789; // int | {{{dispositivo_request_id_aplicacao_mobile_value}}}
$data_criacao = "data_criacao_example"; // string | {{{dispositivo_request_data_criacao_value}}}
$data_desativacao = "data_desativacao_example"; // string | {{{dispositivo_request_data_desativacao_value}}}

try { 
    $result = $api_instance->listarUsingGET20($sort, $page, $limit, $token, $id_usuario, $id_aplicacao_mobile, $data_criacao, $data_desativacao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagdispositivoApi->listarUsingGET20: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **token** | **string**| {{{dispositivo_request_token_value}}} | [optional] 
 **id_usuario** | **int**| {{{dispositivo_request_id_usuario_value}}} | [optional] 
 **id_aplicacao_mobile** | **int**| {{{dispositivo_request_id_aplicacao_mobile_value}}} | [optional] 
 **data_criacao** | **string**| {{{dispositivo_request_data_criacao_value}}} | [optional] 
 **data_desativacao** | **string**| {{{dispositivo_request_data_desativacao_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageDispositivoResponse**](PageDispositivoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST10**
> \br.com.conductor.pier.api.v2.model\DispositivoResponse salvarUsingPOST10($persist)

{{{dispositivo_resource_salvar}}}

{{{dispositivo_resource_salvar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagdispositivoApi();
$persist = new \br.com.conductor.pier.api.v2.model\DispositivoPersistValue_(); // \br.com.conductor.pier.api.v2.model\DispositivoPersistValue_ | persist

try { 
    $result = $api_instance->salvarUsingPOST10($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagdispositivoApi->salvarUsingPOST10: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **persist** | [**\br.com.conductor.pier.api.v2.model\DispositivoPersistValue_**](\br.com.conductor.pier.api.v2.model\DispositivoPersistValue_.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\DispositivoResponse**](DispositivoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

