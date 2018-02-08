# br.com.conductor.pier.api.v2.invoker\WebhookApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarUsingPUT22**](WebhookApi.md#alterarUsingPUT22) | **PUT** /api/webhooks/{id} | Alterar Webhook
[**consultarUsingGET44**](WebhookApi.md#consultarUsingGET44) | **GET** /api/webhooks/{id} | Consultar Webhook
[**listarUsingGET53**](WebhookApi.md#listarUsingGET53) | **GET** /api/webhooks | Lista os Webhooks
[**salvarUsingPOST30**](WebhookApi.md#salvarUsingPOST30) | **POST** /api/webhooks | Salvar Webhook


# **alterarUsingPUT22**
> \br.com.conductor.pier.api.v2.model\WebHookResponse alterarUsingPUT22($id, $tipo_evento, $url, $status)

Alterar Webhook

Este m\u00C3\u00A9todo permite que seja modificado um webhooks j\u00C3\u00A1 cadastrado

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\WebhookApi();
$id = 789; // int | C\u00C3\u00B3digo identificador do Webhook
$tipo_evento = "tipo_evento_example"; // string | TipoEvento a ser chamado pelo WebHook
$url = "url_example"; // string | URL que a ser consumida pelo WebHook
$status = "status_example"; // string | Status

try { 
    $result = $api_instance->alterarUsingPUT22($id, $tipo_evento, $url, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->alterarUsingPUT22: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo identificador do Webhook | 
 **tipo_evento** | **string**| TipoEvento a ser chamado pelo WebHook | 
 **url** | **string**| URL que a ser consumida pelo WebHook | 
 **status** | **string**| Status | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\WebHookResponse**](WebHookResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET44**
> \br.com.conductor.pier.api.v2.model\WebHookResponse consultarUsingGET44($id)

Consultar Webhook

Este m\u00C3\u00A9todo permite que sejam consultado um webhook do emissor atrav\u00C3\u00A9s de um id especifico

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\WebhookApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Webhook (id).

try { 
    $result = $api_instance->consultarUsingGET44($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->consultarUsingGET44: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Webhook (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\WebHookResponse**](WebHookResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET53**
> \br.com.conductor.pier.api.v2.model\PageWebHookResponse listarUsingGET53($sort, $page, $limit, $id, $tipo_evento, $metodo, $url)

Lista os Webhooks

Este m\u00C3\u00A9todo permite que sejam listados os webhooks existentes

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\WebhookApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id = 789; // int | Id do WebHook
$tipo_evento = "tipo_evento_example"; // string | TipoEvento a ser chamado pelo WebHook
$metodo = "metodo_example"; // string | M\u00C3\u00A9todo que a ser chamado pelo WebHook
$url = "url_example"; // string | URL que a ser consumida pelo WebHook

try { 
    $result = $api_instance->listarUsingGET53($sort, $page, $limit, $id, $tipo_evento, $metodo, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->listarUsingGET53: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id** | **int**| Id do WebHook | [optional] 
 **tipo_evento** | **string**| TipoEvento a ser chamado pelo WebHook | [optional] 
 **metodo** | **string**| M\u00C3\u00A9todo que a ser chamado pelo WebHook | [optional] 
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
> \br.com.conductor.pier.api.v2.model\WebHookResponse salvarUsingPOST30($tipo_evento, $url)

Salvar Webhook

Este m\u00C3\u00A9todo permite que seja adicionado um novo webhook

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\WebhookApi();
$tipo_evento = "tipo_evento_example"; // string | TipoEvento a ser chamado pelo WebHook
$url = "url_example"; // string | URL que a ser consumida pelo WebHook

try { 
    $result = $api_instance->salvarUsingPOST30($tipo_evento, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->salvarUsingPOST30: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tipo_evento** | **string**| TipoEvento a ser chamado pelo WebHook | 
 **url** | **string**| URL que a ser consumida pelo WebHook | 

### Return type

[**\br.com.conductor.pier.api.v2.model\WebHookResponse**](WebHookResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

