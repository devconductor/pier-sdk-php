# br.com.conductor.pier.api.v2.invoker\NotificacoesApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**atualizarSMSUsingPUT**](NotificacoesApi.md#atualizarSMSUsingPUT) | **PUT** /api/notificacoes/sms/atualizar-status | Atualizar SMS
[**responderSMSUsingPUT**](NotificacoesApi.md#responderSMSUsingPUT) | **PUT** /api/notificacoes/sms/responder | Responder SMS


# **atualizarSMSUsingPUT**
> \br.com.conductor.pier.api.v2.model\SMS atualizarSMSUsingPUT($seu_num, $status, $data, $texto_status, $operadora)

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
$seu_num = "seu_num_example"; // string | Seu n\u00C3\u00BAmero
$status = "status_example"; // string | Status
$data = "data_example"; // string | Data
$texto_status = "texto_status_example"; // string | TextoStatus
$operadora = "operadora_example"; // string | Operadora

try { 
    $result = $api_instance->atualizarSMSUsingPUT($seu_num, $status, $data, $texto_status, $operadora);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificacoesApi->atualizarSMSUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seu_num** | **string**| Seu n\u00C3\u00BAmero | 
 **status** | **string**| Status | 
 **data** | **string**| Data | 
 **texto_status** | **string**| TextoStatus | 
 **operadora** | **string**| Operadora | 

### Return type

[**\br.com.conductor.pier.api.v2.model\SMS**](SMS.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **responderSMSUsingPUT**
> \br.com.conductor.pier.api.v2.model\SMS responderSMSUsingPUT($seunum, $data, $texto_sms_mo)

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
$seunum = "seunum_example"; // string | Seu n\u00C3\u00BAmero
$data = "data_example"; // string | Data
$texto_sms_mo = "texto_sms_mo_example"; // string | TextoStatus

try { 
    $result = $api_instance->responderSMSUsingPUT($seunum, $data, $texto_sms_mo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificacoesApi->responderSMSUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seunum** | **string**| Seu n\u00C3\u00BAmero | 
 **data** | **string**| Data | 
 **texto_sms_mo** | **string**| TextoStatus | 

### Return type

[**\br.com.conductor.pier.api.v2.model\SMS**](SMS.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

