# br.com.conductor.pier.api.v2.invoker\GlobaltagwebhookApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarUsingPUT24**](GlobaltagwebhookApi.md#alterarUsingPUT24) | **PUT** /api/webhooks/{id} | {{{web_hook_resource_alterar}}}
[**consultarUsingGET55**](GlobaltagwebhookApi.md#consultarUsingGET55) | **GET** /api/webhooks/{id} | {{{web_hook_resource_consultar}}}
[**listarUsingGET69**](GlobaltagwebhookApi.md#listarUsingGET69) | **GET** /api/webhooks | {{{web_hook_resource_listar}}}
[**salvarUsingPOST36**](GlobaltagwebhookApi.md#salvarUsingPOST36) | **POST** /api/webhooks | {{{web_hook_resource_salvar}}}


# **alterarUsingPUT24**
> \br.com.conductor.pier.api.v2.model\WebHookResponse alterarUsingPUT24($id, $webhook, $status)

{{{web_hook_resource_alterar}}}

{{{web_hook_resource_alterar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagwebhookApi();
$id = 789; // int | {{{web_hook_resource_alterar_param_id}}}
$webhook = new \br.com.conductor.pier.api.v2.model\WebHookPersistValue_(); // \br.com.conductor.pier.api.v2.model\WebHookPersistValue_ | webhook
$status = "status_example"; // string | {{{web_hook_resource_alterar_param_status}}}

try { 
    $result = $api_instance->alterarUsingPUT24($id, $webhook, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagwebhookApi->alterarUsingPUT24: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{web_hook_resource_alterar_param_id}}} | 
 **webhook** | [**\br.com.conductor.pier.api.v2.model\WebHookPersistValue_**](\br.com.conductor.pier.api.v2.model\WebHookPersistValue_.md)| webhook | 
 **status** | **string**| {{{web_hook_resource_alterar_param_status}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\WebHookResponse**](WebHookResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET55**
> \br.com.conductor.pier.api.v2.model\WebHookResponse consultarUsingGET55($id)

{{{web_hook_resource_consultar}}}

{{{web_hook_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagwebhookApi();
$id = 789; // int | {{{web_hook_resource_consultar_param_id}}}

try { 
    $result = $api_instance->consultarUsingGET55($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagwebhookApi->consultarUsingGET55: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{web_hook_resource_consultar_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\WebHookResponse**](WebHookResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET69**
> \br.com.conductor.pier.api.v2.model\PageWebHookResponse listarUsingGET69($sort, $page, $limit, $id, $tipo_evento, $metodo, $url)

{{{web_hook_resource_listar}}}

{{{web_hook_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagwebhookApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id = 789; // int | {{{web_hook_request_id_value}}}
$tipo_evento = "tipo_evento_example"; // string | {{{web_hook_request_tipo_evento_value}}}
$metodo = "metodo_example"; // string | {{{web_hook_request_metodo_value}}}
$url = "url_example"; // string | {{{web_hook_request_url_value}}}

try { 
    $result = $api_instance->listarUsingGET69($sort, $page, $limit, $id, $tipo_evento, $metodo, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagwebhookApi->listarUsingGET69: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id** | **int**| {{{web_hook_request_id_value}}} | [optional] 
 **tipo_evento** | **string**| {{{web_hook_request_tipo_evento_value}}} | [optional] 
 **metodo** | **string**| {{{web_hook_request_metodo_value}}} | [optional] 
 **url** | **string**| {{{web_hook_request_url_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageWebHookResponse**](PageWebHookResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST36**
> \br.com.conductor.pier.api.v2.model\WebHookResponse salvarUsingPOST36($webhook)

{{{web_hook_resource_salvar}}}

{{{web_hook_resource_salvar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagwebhookApi();
$webhook = new \br.com.conductor.pier.api.v2.model\WebHookPersistValue_(); // \br.com.conductor.pier.api.v2.model\WebHookPersistValue_ | webhook

try { 
    $result = $api_instance->salvarUsingPOST36($webhook);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagwebhookApi->salvarUsingPOST36: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook** | [**\br.com.conductor.pier.api.v2.model\WebHookPersistValue_**](\br.com.conductor.pier.api.v2.model\WebHookPersistValue_.md)| webhook | 

### Return type

[**\br.com.conductor.pier.api.v2.model\WebHookResponse**](WebHookResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

