# br.com.conductor.pier.api.v2.invoker\WebhooksApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarUsingPUT3**](WebhooksApi.md#alterarUsingPUT3) | **PUT** /api/webhooks | Alterar Webhook
[**consultarUsingGET9**](WebhooksApi.md#consultarUsingGET9) | **GET** /api/webhooks/{id} | Consultar Webhook
[**listarUsingGET10**](WebhooksApi.md#listarUsingGET10) | **GET** /api/webhooks | Lista os Webhooks
[**salvarUsingPOST3**](WebhooksApi.md#salvarUsingPOST3) | **POST** /api/webhooks | Salvar Webhook


# **alterarUsingPUT3**
> \br.com.conductor.pier.api.v2.model\WebHook alterarUsingPUT3($id, $evento, $metodo, $url)

Alterar Webhook

Este m\u00C3\u00A9todo permite que seja modificado um webhooks j\u00C3\u00A1 cadastrado

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\WebhooksApi();
$id = 789; // int | C\u00C3\u00B3digo identificador do Webhook
$evento = new \br.com.conductor.pier.api.v2.model\Object(); // \br.com.conductor.pier.api.v2.model\Object | Evento a ser chamado pelo WebHook
$metodo = new \br.com.conductor.pier.api.v2.model\Object(); // \br.com.conductor.pier.api.v2.model\Object | M\u00C3\u00A9todo que a ser chamado pelo WebHook
$url = "url_example"; // string | URL que a ser consumida pelo WebHook

try { 
    $result = $api_instance->alterarUsingPUT3($id, $evento, $metodo, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->alterarUsingPUT3: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo identificador do Webhook | 
 **evento** | [**\br.com.conductor.pier.api.v2.model\Object**](.md)| Evento a ser chamado pelo WebHook | 
 **metodo** | [**\br.com.conductor.pier.api.v2.model\Object**](.md)| M\u00C3\u00A9todo que a ser chamado pelo WebHook | 
 **url** | **string**| URL que a ser consumida pelo WebHook | 

### Return type

[**\br.com.conductor.pier.api.v2.model\WebHook**](WebHook.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET9**
> \br.com.conductor.pier.api.v2.model\WebHook consultarUsingGET9($id)

Consultar Webhook

Este m\u00C3\u00A9todo permite que sejam consultado um webhook do emissor atrav\u00C3\u00A9s de um id especifico

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\WebhooksApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Webhook (id).

try { 
    $result = $api_instance->consultarUsingGET9($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->consultarUsingGET9: ', $e->getMessage(), "\n";
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

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET10**
> \br.com.conductor.pier.api.v2.model\PageWebHooks listarUsingGET10($id, $evento, $metodo, $url, $page, $limit)

Lista os Webhooks

Este m\u00C3\u00A9todo permite que sejam listados os webhooks existentes

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\WebhooksApi();
$id = 789; // int | Id do WebHook
$evento = new \br.com.conductor.pier.api.v2.model\Object(); // \br.com.conductor.pier.api.v2.model\Object | Evento a ser chamado pelo WebHook
$metodo = new \br.com.conductor.pier.api.v2.model\Object(); // \br.com.conductor.pier.api.v2.model\Object | M\u00C3\u00A9todo que a ser chamado pelo WebHook
$url = "url_example"; // string | URL que a ser consumida pelo WebHook
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100)

try { 
    $result = $api_instance->listarUsingGET10($id, $evento, $metodo, $url, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->listarUsingGET10: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id do WebHook | [optional] 
 **evento** | [**\br.com.conductor.pier.api.v2.model\Object**](.md)| Evento a ser chamado pelo WebHook | [optional] 
 **metodo** | [**\br.com.conductor.pier.api.v2.model\Object**](.md)| M\u00C3\u00A9todo que a ser chamado pelo WebHook | [optional] 
 **url** | **string**| URL que a ser consumida pelo WebHook | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageWebHooks**](PageWebHooks.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST3**
> \br.com.conductor.pier.api.v2.model\WebHook salvarUsingPOST3($evento, $metodo, $url)

Salvar Webhook

Este m\u00C3\u00A9todo permite que seja adicionado um novo webhook

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\WebhooksApi();
$evento = new \br.com.conductor.pier.api.v2.model\Object(); // \br.com.conductor.pier.api.v2.model\Object | Evento a ser chamado pelo WebHook
$metodo = new \br.com.conductor.pier.api.v2.model\Object(); // \br.com.conductor.pier.api.v2.model\Object | M\u00C3\u00A9todo que a ser chamado pelo WebHook
$url = "url_example"; // string | URL que a ser consumida pelo WebHook

try { 
    $result = $api_instance->salvarUsingPOST3($evento, $metodo, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->salvarUsingPOST3: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **evento** | [**\br.com.conductor.pier.api.v2.model\Object**](.md)| Evento a ser chamado pelo WebHook | 
 **metodo** | [**\br.com.conductor.pier.api.v2.model\Object**](.md)| M\u00C3\u00A9todo que a ser chamado pelo WebHook | 
 **url** | **string**| URL que a ser consumida pelo WebHook | 

### Return type

[**\br.com.conductor.pier.api.v2.model\WebHook**](WebHook.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

