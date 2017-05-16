# br.com.conductor.pier.api.v2.invoker\WebhooksApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarUsingPUT10**](WebhooksApi.md#alterarUsingPUT10) | **PUT** /api/webhooks/{id} | Alterar Webhook
[**consultarUsingGET23**](WebhooksApi.md#consultarUsingGET23) | **GET** /api/webhooks/{id} | Consultar Webhook
[**listarUsingGET25**](WebhooksApi.md#listarUsingGET25) | **GET** /api/webhooks | Lista os Webhooks
[**salvarUsingPOST13**](WebhooksApi.md#salvarUsingPOST13) | **POST** /api/webhooks | Salvar Webhook


# **alterarUsingPUT10**
> \br.com.conductor.pier.api.v2.model\WebHook alterarUsingPUT10($id, $tipo_evento, $url)

Alterar Webhook

Este m\u00C3\u00A9todo permite que seja modificado um webhooks j\u00C3\u00A1 cadastrado

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\WebhooksApi();
$id = 789; // int | C\u00C3\u00B3digo identificador do Webhook
$tipo_evento = "tipo_evento_example"; // string | TipoEvento a ser chamado pelo WebHook
$url = "url_example"; // string | URL que a ser consumida pelo WebHook

try { 
    $result = $api_instance->alterarUsingPUT10($id, $tipo_evento, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->alterarUsingPUT10: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo identificador do Webhook | 
 **tipo_evento** | **string**| TipoEvento a ser chamado pelo WebHook | 
 **url** | **string**| URL que a ser consumida pelo WebHook | 

### Return type

[**\br.com.conductor.pier.api.v2.model\WebHook**](WebHook.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET23**
> \br.com.conductor.pier.api.v2.model\WebHook consultarUsingGET23($id)

Consultar Webhook

Este m\u00C3\u00A9todo permite que sejam consultado um webhook do emissor atrav\u00C3\u00A9s de um id especifico

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\WebhooksApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Webhook (id).

try { 
    $result = $api_instance->consultarUsingGET23($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->consultarUsingGET23: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Webhook (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\WebHook**](WebHook.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET25**
> \br.com.conductor.pier.api.v2.model\PageWebHooks listarUsingGET25($page, $limit, $id, $tipo_evento, $metodo, $url)

Lista os Webhooks

Este m\u00C3\u00A9todo permite que sejam listados os webhooks existentes

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\WebhooksApi();
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100)
$id = 789; // int | Id do WebHook
$tipo_evento = "tipo_evento_example"; // string | TipoEvento a ser chamado pelo WebHook
$metodo = "metodo_example"; // string | M\u00C3\u00A9todo que a ser chamado pelo WebHook
$url = "url_example"; // string | URL que a ser consumida pelo WebHook

try { 
    $result = $api_instance->listarUsingGET25($page, $limit, $id, $tipo_evento, $metodo, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->listarUsingGET25: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) | [optional] 
 **id** | **int**| Id do WebHook | [optional] 
 **tipo_evento** | **string**| TipoEvento a ser chamado pelo WebHook | [optional] 
 **metodo** | **string**| M\u00C3\u00A9todo que a ser chamado pelo WebHook | [optional] 
 **url** | **string**| URL que a ser consumida pelo WebHook | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageWebHooks**](PageWebHooks.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST13**
> \br.com.conductor.pier.api.v2.model\WebHook salvarUsingPOST13($tipo_evento, $url)

Salvar Webhook

Este m\u00C3\u00A9todo permite que seja adicionado um novo webhook

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\WebhooksApi();
$tipo_evento = "tipo_evento_example"; // string | TipoEvento a ser chamado pelo WebHook
$url = "url_example"; // string | URL que a ser consumida pelo WebHook

try { 
    $result = $api_instance->salvarUsingPOST13($tipo_evento, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->salvarUsingPOST13: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tipo_evento** | **string**| TipoEvento a ser chamado pelo WebHook | 
 **url** | **string**| URL que a ser consumida pelo WebHook | 

### Return type

[**\br.com.conductor.pier.api.v2.model\WebHook**](WebHook.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

