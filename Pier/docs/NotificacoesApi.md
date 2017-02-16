# br.com.conductor.pier.api.v2.invoker\NotificacoesApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**atualizarSMSUsingPOST**](NotificacoesApi.md#atualizarSMSUsingPOST) | **POST** /api/notificacoes/sms/atualizar-status | Atualizar SMS
[**listarPushUsingGET**](NotificacoesApi.md#listarPushUsingGET) | **GET** /api/notificacoes/push | Listar Push
[**listarSMSUsingGET**](NotificacoesApi.md#listarSMSUsingGET) | **GET** /api/notificacoes/sms | Listar SMS
[**responderSMSUsingPOST**](NotificacoesApi.md#responderSMSUsingPOST) | **POST** /api/notificacoes/sms/responder | Responder SMS
[**salvarPushFCMUsingPOST**](NotificacoesApi.md#salvarPushFCMUsingPOST) | **POST** /api/notificacoes/push/fcm | Enviar Push FCM
[**salvarPushGCMUsingPOST**](NotificacoesApi.md#salvarPushGCMUsingPOST) | **POST** /api/notificacoes/push/gcm | Enviar Push GCM
[**salvarPushUsingPOST**](NotificacoesApi.md#salvarPushUsingPOST) | **POST** /api/notificacoes/push/apns | Enviar Push APNS
[**salvarSMSUsingPOST**](NotificacoesApi.md#salvarSMSUsingPOST) | **POST** /api/notificacoes/sms | Enviar SMS


# **atualizarSMSUsingPOST**
> \br.com.conductor.pier.api.v2.model\SMS atualizarSMSUsingPOST($nsu, $status, $data, $texto_status, $operadora)

Atualizar SMS

Esse recurso permite atualizar o status do SMS do emissor

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\NotificacoesApi();
$nsu = "nsu_example"; // string | Seu n\u00C3\u00BAmero
$status = "status_example"; // string | Status
$data = "data_example"; // string | Data
$texto_status = "texto_status_example"; // string | TextoStatus
$operadora = "operadora_example"; // string | Operadora

try { 
    $result = $api_instance->atualizarSMSUsingPOST($nsu, $status, $data, $texto_status, $operadora);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificacoesApi->atualizarSMSUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nsu** | **string**| Seu n\u00C3\u00BAmero | [optional] 
 **status** | **string**| Status | [optional] 
 **data** | **string**| Data | [optional] 
 **texto_status** | **string**| TextoStatus | [optional] 
 **operadora** | **string**| Operadora | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\SMS**](SMS.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarPushUsingGET**
> \br.com.conductor.pier.api.v2.model\PagePush listarPushUsingGET($page, $limit, $data_envio, $evento, $status, $plataforma, $protocolo)

Listar Push

Esse recurso permite listar os Pushes do emissor

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\NotificacoesApi();
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100)
$data_envio = new \DateTime(); // \DateTime | Apresenta a data e em que o registro foi enviado para o dispositivo.
$evento = "evento_example"; // string | Nome do evento da notifica\u00C3\u00A7\u00C3\u00A3o
$status = "status_example"; // string | Status de envio da notifica\u00C3\u00A7\u00C3\u00A3o
$plataforma = "plataforma_example"; // string | Plataforma de Push notifications.
$protocolo = "protocolo_example"; // string | N\u00C3\u00BAmero do protocolo de envio de notifica\u00C3\u00A7\u00C3\u00B5es

try { 
    $result = $api_instance->listarPushUsingGET($page, $limit, $data_envio, $evento, $status, $plataforma, $protocolo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificacoesApi->listarPushUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) | [optional] 
 **data_envio** | **\DateTime**| Apresenta a data e em que o registro foi enviado para o dispositivo. | [optional] 
 **evento** | **string**| Nome do evento da notifica\u00C3\u00A7\u00C3\u00A3o | [optional] 
 **status** | **string**| Status de envio da notifica\u00C3\u00A7\u00C3\u00A3o | [optional] 
 **plataforma** | **string**| Plataforma de Push notifications. | [optional] 
 **protocolo** | **string**| N\u00C3\u00BAmero do protocolo de envio de notifica\u00C3\u00A7\u00C3\u00B5es | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PagePush**](PagePush.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarSMSUsingGET**
> \br.com.conductor.pier.api.v2.model\PageSMS listarSMSUsingGET($page, $limit, $data_inclusao, $evento, $status, $operadora, $protocolo)

Listar SMS

Esse recurso permite listar os SMS do emissor

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\NotificacoesApi();
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100)
$data_inclusao = new \DateTime(); // \DateTime | Apresenta a data e em que o registro foi inclu\u00C3\u00ADdo na base para ser enviado
$evento = "evento_example"; // string | Nome do evento da notifica\u00C3\u00A7\u00C3\u00A3o
$status = "status_example"; // string | Status de envio da notifica\u00C3\u00A7\u00C3\u00A3o
$operadora = "operadora_example"; // string | Nome da operadora a qual a notifica\u00C3\u00A7\u00C3\u00A3o foi enviada.
$protocolo = "protocolo_example"; // string | N\u00C3\u00BAmero do protocolo de envio de notifica\u00C3\u00A7\u00C3\u00B5es

try { 
    $result = $api_instance->listarSMSUsingGET($page, $limit, $data_inclusao, $evento, $status, $operadora, $protocolo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificacoesApi->listarSMSUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) | [optional] 
 **data_inclusao** | **\DateTime**| Apresenta a data e em que o registro foi inclu\u00C3\u00ADdo na base para ser enviado | [optional] 
 **evento** | **string**| Nome do evento da notifica\u00C3\u00A7\u00C3\u00A3o | [optional] 
 **status** | **string**| Status de envio da notifica\u00C3\u00A7\u00C3\u00A3o | [optional] 
 **operadora** | **string**| Nome da operadora a qual a notifica\u00C3\u00A7\u00C3\u00A3o foi enviada. | [optional] 
 **protocolo** | **string**| N\u00C3\u00BAmero do protocolo de envio de notifica\u00C3\u00A7\u00C3\u00B5es | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageSMS**](PageSMS.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **responderSMSUsingPOST**
> \br.com.conductor.pier.api.v2.model\SMS responderSMSUsingPOST($nsu, $data, $resposta)

Responder SMS

Esse recurso permite atualizar a resposta do SMS, fornecida pedo usu\u00C3\u00A1rio

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\NotificacoesApi();
$nsu = "nsu_example"; // string | Seu n\u00C3\u00BAmero
$data = "data_example"; // string | Data
$resposta = "resposta_example"; // string | TextoStatus

try { 
    $result = $api_instance->responderSMSUsingPOST($nsu, $data, $resposta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificacoesApi->responderSMSUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nsu** | **string**| Seu n\u00C3\u00BAmero | [optional] 
 **data** | **string**| Data | [optional] 
 **resposta** | **string**| TextoStatus | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\SMS**](SMS.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarPushFCMUsingPOST**
> \br.com.conductor.pier.api.v2.model\NotificacaoSMSResponse salvarPushFCMUsingPOST($push_persists)

Enviar Push FCM

Esse recurso permite enviar Push para um determinado dipositivo movel atrav\u00C3\u00A9s da plataforma FCM (Firebase Cloud Messaging).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\NotificacoesApi();
$push_persists = array(new PushFCMEGCM()); // \br.com.conductor.pier.api.v2.model\PushFCMEGCM[] | pushPersists

try { 
    $result = $api_instance->salvarPushFCMUsingPOST($push_persists);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificacoesApi->salvarPushFCMUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **push_persists** | [**\br.com.conductor.pier.api.v2.model\PushFCMEGCM[]**](PushFCMEGCM.md)| pushPersists | 

### Return type

[**\br.com.conductor.pier.api.v2.model\NotificacaoSMSResponse**](NotificacaoSMSResponse.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarPushGCMUsingPOST**
> \br.com.conductor.pier.api.v2.model\NotificacaoSMSResponse salvarPushGCMUsingPOST($push_persists)

Enviar Push GCM

Esse recurso permite enviar Push para um determinado dipositivo movel atrav\u00C3\u00A9s da plataforma GCM (Google Cloud Messaging).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\NotificacoesApi();
$push_persists = array(new PushFCMEGCM()); // \br.com.conductor.pier.api.v2.model\PushFCMEGCM[] | pushPersists

try { 
    $result = $api_instance->salvarPushGCMUsingPOST($push_persists);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificacoesApi->salvarPushGCMUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **push_persists** | [**\br.com.conductor.pier.api.v2.model\PushFCMEGCM[]**](PushFCMEGCM.md)| pushPersists | 

### Return type

[**\br.com.conductor.pier.api.v2.model\NotificacaoSMSResponse**](NotificacaoSMSResponse.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarPushUsingPOST**
> \br.com.conductor.pier.api.v2.model\NotificacaoSMSResponse salvarPushUsingPOST($push_persists)

Enviar Push APNS

Esse recurso permite enviar Push para um determinado dipositivo movel atrav\u00C3\u00A9s da plataforma APNS (Apple Push Notification Service).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\NotificacoesApi();
$push_persists = array(new PushAPNS()); // \br.com.conductor.pier.api.v2.model\PushAPNS[] | pushPersists

try { 
    $result = $api_instance->salvarPushUsingPOST($push_persists);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificacoesApi->salvarPushUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **push_persists** | [**\br.com.conductor.pier.api.v2.model\PushAPNS[]**](PushAPNS.md)| pushPersists | 

### Return type

[**\br.com.conductor.pier.api.v2.model\NotificacaoSMSResponse**](NotificacaoSMSResponse.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarSMSUsingPOST**
> \br.com.conductor.pier.api.v2.model\NotificacaoSMSResponse salvarSMSUsingPOST($lista_sms)

Enviar SMS

Esse recurso permite enviar uma lista de SMS.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\NotificacoesApi();
$lista_sms = array(new NotificacaoSMSBody()); // \br.com.conductor.pier.api.v2.model\NotificacaoSMSBody[] | listaSMS

try { 
    $result = $api_instance->salvarSMSUsingPOST($lista_sms);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificacoesApi->salvarSMSUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lista_sms** | [**\br.com.conductor.pier.api.v2.model\NotificacaoSMSBody[]**](NotificacaoSMSBody.md)| listaSMS | 

### Return type

[**\br.com.conductor.pier.api.v2.model\NotificacaoSMSResponse**](NotificacaoSMSResponse.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

