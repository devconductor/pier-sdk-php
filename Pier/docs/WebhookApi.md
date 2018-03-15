# br.com.conductor.pier.api.v2.invoker\WebhookApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarUsingPUT22**](WebhookApi.md#alterarUsingPUT22) | **PUT** /api/webhooks/{id} | Alterar Webhook
[**consultarUsingGET45**](WebhookApi.md#consultarUsingGET45) | **GET** /api/webhooks/{id} | Consultar Webhook
[**listarUsingGET55**](WebhookApi.md#listarUsingGET55) | **GET** /api/webhooks | Lista os Webhooks
[**salvarUsingPOST30**](WebhookApi.md#salvarUsingPOST30) | **POST** /api/webhooks | Salvar Webhook


# **alterarUsingPUT22**
> \br.com.conductor.pier.api.v2.model\WebHookResponse alterarUsingPUT22($id, $webhook, $status)

Alterar Webhook

Este m\u00E9todo permite que seja modificado um webhooks j\u00E1 cadastrado

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\WebhookApi();
$id = 789; // int | C\u00F3digo identificador do Webhook
$webhook = new \br.com.conductor.pier.api.v2.model\WebHook(); // \br.com.conductor.pier.api.v2.model\WebHook | webhook
$status = "status_example"; // string | Status

try { 
    $result = $api_instance->alterarUsingPUT22($id, $webhook, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->alterarUsingPUT22: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo identificador do Webhook | 
 **webhook** | [**\br.com.conductor.pier.api.v2.model\WebHook**](\br.com.conductor.pier.api.v2.model\WebHook.md)| webhook | 
 **status** | **string**| Status | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\WebHookResponse**](WebHookResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET45**
> \br.com.conductor.pier.api.v2.model\WebHookResponse consultarUsingGET45($id)

Consultar Webhook

Este m\u00E9todo permite que sejam consultado um webhook do emissor atrav\u00E9s de um id especifico

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\WebhookApi();
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do Webhook (id).

try { 
    $result = $api_instance->consultarUsingGET45($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->consultarUsingGET45: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do Webhook (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\WebHookResponse**](WebHookResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET55**
> \br.com.conductor.pier.api.v2.model\PageWebHookResponse listarUsingGET55($sort, $page, $limit, $id, $tipo_evento, $metodo, $url)

Lista os Webhooks

Este m\u00E9todo permite que sejam listados os webhooks existentes

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\WebhookApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$id = 789; // int | Id do WebHook
$tipo_evento = "tipo_evento_example"; // string | TipoEvento a ser chamado pelo WebHook
$metodo = "metodo_example"; // string | M\u00E9todo que a ser chamado pelo WebHook
$url = "url_example"; // string | URL que a ser consumida pelo WebHook

try { 
    $result = $api_instance->listarUsingGET55($sort, $page, $limit, $id, $tipo_evento, $metodo, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->listarUsingGET55: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **id** | **int**| Id do WebHook | [optional] 
 **tipo_evento** | **string**| TipoEvento a ser chamado pelo WebHook | [optional] 
 **metodo** | **string**| M\u00E9todo que a ser chamado pelo WebHook | [optional] 
 **url** | **string**| URL que a ser consumida pelo WebHook | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageWebHookResponse**](PageWebHookResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST30**
> \br.com.conductor.pier.api.v2.model\WebHookResponse salvarUsingPOST30($webhook)

Salvar Webhook

Este m\u00E9todo permite que seja adicionado um novo webhook

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\WebhookApi();
$webhook = new \br.com.conductor.pier.api.v2.model\WebHook(); // \br.com.conductor.pier.api.v2.model\WebHook | webhook

try { 
    $result = $api_instance->salvarUsingPOST30($webhook);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->salvarUsingPOST30: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook** | [**\br.com.conductor.pier.api.v2.model\WebHook**](\br.com.conductor.pier.api.v2.model\WebHook.md)| webhook | 

### Return type

[**\br.com.conductor.pier.api.v2.model\WebHookResponse**](WebHookResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

