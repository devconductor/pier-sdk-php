# br.com.conductor.pier.api.v2.invoker\GlobaltagjobApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ativarJobUsingPOST**](GlobaltagjobApi.md#ativarJobUsingPOST) | **POST** /api/jobs/{id}/ativar-job | {{{job_resource_ativar_job}}}
[**atualizarUsingPUT4**](GlobaltagjobApi.md#atualizarUsingPUT4) | **PUT** /api/jobs/{id} | {{{job_resource_atualizar}}}
[**desativarJobUsingPOST**](GlobaltagjobApi.md#desativarJobUsingPOST) | **POST** /api/jobs/{id}/desativar-job | {{{job_resource_desativar_job}}}
[**listarUsingGET31**](GlobaltagjobApi.md#listarUsingGET31) | **GET** /api/jobs | {{{job_resource_listar}}}
[**salvarUsingPOST17**](GlobaltagjobApi.md#salvarUsingPOST17) | **POST** /api/jobs | {{{job_resource_salvar}}}


# **ativarJobUsingPOST**
> \br.com.conductor.pier.api.v2.model\JobResponse ativarJobUsingPOST($id)

{{{job_resource_ativar_job}}}

{{{job_resource_ativar_job_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagjobApi();
$id = 789; // int | {{{job_resource_ativar_job_param_id}}}

try { 
    $result = $api_instance->ativarJobUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagjobApi->ativarJobUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{job_resource_ativar_job_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\JobResponse**](JobResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **atualizarUsingPUT4**
> \br.com.conductor.pier.api.v2.model\JobResponse atualizarUsingPUT4($id, $descricao, $cron, $groovy)

{{{job_resource_atualizar}}}

{{{job_resource_atualizar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagjobApi();
$id = 789; // int | {{{job_resource_atualizar_param_id}}}
$descricao = "descricao_example"; // string | {{{job_resource_atualizar_param_descricao}}}
$cron = "cron_example"; // string | {{{job_resource_atualizar_param_cron}}}
$groovy = "groovy_example"; // string | groovy

try { 
    $result = $api_instance->atualizarUsingPUT4($id, $descricao, $cron, $groovy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagjobApi->atualizarUsingPUT4: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{job_resource_atualizar_param_id}}} | 
 **descricao** | **string**| {{{job_resource_atualizar_param_descricao}}} | 
 **cron** | **string**| {{{job_resource_atualizar_param_cron}}} | 
 **groovy** | **string**| groovy | 

### Return type

[**\br.com.conductor.pier.api.v2.model\JobResponse**](JobResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: text/plain
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **desativarJobUsingPOST**
> \br.com.conductor.pier.api.v2.model\JobResponse desativarJobUsingPOST($id)

{{{job_resource_desativar_job}}}

{{{job_resource_desativar_job_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagjobApi();
$id = 789; // int | {{{job_resource_desativar_job_param_id}}}

try { 
    $result = $api_instance->desativarJobUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagjobApi->desativarJobUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{job_resource_desativar_job_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\JobResponse**](JobResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET31**
> \br.com.conductor.pier.api.v2.model\PageJobResponse listarUsingGET31($groovy, $descricao, $cron, $status, $page, $limit)

{{{job_resource_listar}}}

{{{job_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagjobApi();
$groovy = "groovy_example"; // string | {{{job_d_t_o_groovy_value}}}
$descricao = "descricao_example"; // string | {{{job_d_t_o_descricao_value}}}
$cron = "cron_example"; // string | {{{job_d_t_o_cron_value}}}
$status = "status_example"; // string | {{{job_d_t_o_status_value}}}
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarUsingGET31($groovy, $descricao, $cron, $status, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagjobApi->listarUsingGET31: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groovy** | **string**| {{{job_d_t_o_groovy_value}}} | [optional] 
 **descricao** | **string**| {{{job_d_t_o_descricao_value}}} | [optional] 
 **cron** | **string**| {{{job_d_t_o_cron_value}}} | [optional] 
 **status** | **string**| {{{job_d_t_o_status_value}}} | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageJobResponse**](PageJobResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST17**
> \br.com.conductor.pier.api.v2.model\JobResponse salvarUsingPOST17($descricao, $cron, $groovy)

{{{job_resource_salvar}}}

{{{job_resource_salvar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagjobApi();
$descricao = "descricao_example"; // string | {{{job_resource_salvar_param_descricao}}}
$cron = "cron_example"; // string | {{{job_resource_salvar_param_cron}}}
$groovy = "groovy_example"; // string | groovy

try { 
    $result = $api_instance->salvarUsingPOST17($descricao, $cron, $groovy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagjobApi->salvarUsingPOST17: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **descricao** | **string**| {{{job_resource_salvar_param_descricao}}} | 
 **cron** | **string**| {{{job_resource_salvar_param_cron}}} | 
 **groovy** | **string**| groovy | 

### Return type

[**\br.com.conductor.pier.api.v2.model\JobResponse**](JobResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: text/plain
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

