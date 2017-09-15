# br.com.conductor.pier.api.v2.invoker\NotificacaoApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarConfiguracaoUsingPUT**](NotificacaoApi.md#alterarConfiguracaoUsingPUT) | **PUT** /api/configuracoes-email/{id} | Altera configura\u00C3\u00A7\u00C3\u00B5es de E-mail
[**alterarTemplateNotificacaoUsingPUT**](NotificacaoApi.md#alterarTemplateNotificacaoUsingPUT) | **PUT** /api/templates-notificacoes/{id} | Alterar template de notifica\u00C3\u00A7\u00C3\u00A3o
[**atualizarSMSUsingPOST**](NotificacaoApi.md#atualizarSMSUsingPOST) | **POST** /api/notificacoes/sms/atualizar-status | Atualizar SMS
[**consultarConfiguracaoUsingGET**](NotificacaoApi.md#consultarConfiguracaoUsingGET) | **GET** /api/configuracoes-email/{id} | Consulta configura\u00C3\u00A7\u00C3\u00A3o de E-mail
[**consultarTemplateNotificacaoUsingGET**](NotificacaoApi.md#consultarTemplateNotificacaoUsingGET) | **GET** /api/templates-notificacoes/{id} | Consulta template de notifica\u00C3\u00A7\u00C3\u00A3o
[**gerarTokenUsingPOST**](NotificacaoApi.md#gerarTokenUsingPOST) | **POST** /api/notificacoes-sms/gerar-codigo-seguranca | Gerar c\u00C3\u00B3digo de seguran\u00C3\u00A7a e enviar por sms
[**listarConfiguracaoUsingGET**](NotificacaoApi.md#listarConfiguracaoUsingGET) | **GET** /api/configuracoes-email | Lista configura\u00C3\u00A7\u00C3\u00B5es de E-mails
[**listarPushUsingGET**](NotificacaoApi.md#listarPushUsingGET) | **GET** /api/notificacoes/push | Listar Push
[**listarSMSUsingGET**](NotificacaoApi.md#listarSMSUsingGET) | **GET** /api/notificacoes/sms | Listar SMS
[**listarTemplateNotificacaoUsingGET**](NotificacaoApi.md#listarTemplateNotificacaoUsingGET) | **GET** /api/templates-notificacoes | Lista templates de notifica\u00C3\u00A7\u00C3\u00B5es
[**listarTiposLayoutsUsingGET**](NotificacaoApi.md#listarTiposLayoutsUsingGET) | **GET** /api/tipos-layouts | Lista os tipos templates de notifica\u00C3\u00A7\u00C3\u00A3o
[**responderSMSUsingPOST**](NotificacaoApi.md#responderSMSUsingPOST) | **POST** /api/notificacoes/sms/responder | Responder SMS
[**salvarConfiguracaoUsingPOST**](NotificacaoApi.md#salvarConfiguracaoUsingPOST) | **POST** /api/configuracoes-email | Salva configura\u00C3\u00A7\u00C3\u00B5es de E-mail
[**salvarPushFCMUsingPOST**](NotificacaoApi.md#salvarPushFCMUsingPOST) | **POST** /api/notificacoes/push/fcm | Enviar Push FCM
[**salvarPushGCMUsingPOST**](NotificacaoApi.md#salvarPushGCMUsingPOST) | **POST** /api/notificacoes/push/gcm | Enviar Push GCM
[**salvarPushUsingPOST**](NotificacaoApi.md#salvarPushUsingPOST) | **POST** /api/notificacoes/push/apns | Enviar Push APNS
[**salvarSMSUsingPOST**](NotificacaoApi.md#salvarSMSUsingPOST) | **POST** /api/notificacoes/sms | Enviar SMS
[**salvarTemplateNotificacaoUsingPOST**](NotificacaoApi.md#salvarTemplateNotificacaoUsingPOST) | **POST** /api/templates-notificacoes | Salva template de notifica\u00C3\u00A7\u00C3\u00A3o
[**validarTokenUsingPOST**](NotificacaoApi.md#validarTokenUsingPOST) | **POST** /api/notificacoes-sms/validar-codigo-seguranca | Validar c\u00C3\u00B3digo de seguran\u00C3\u00A7a enviado por sms


# **alterarConfiguracaoUsingPUT**
> \br.com.conductor.pier.api.v2.model\ConfiguracaoEmailResponse alterarConfiguracaoUsingPUT($id, $persist)

Altera configura\u00C3\u00A7\u00C3\u00B5es de E-mail

Esse recurso permite salvar altera\u00C3\u00A7\u00C3\u00B5es de configura\u00C3\u00A7\u00C3\u00B5es de E-mail.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\NotificacaoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da configura\u00C3\u00A7\u00C3\u00A3o de e-mail.
$persist = new \br.com.conductor.pier.api.v2.model\ConfiguracaoEmailPersist(); // \br.com.conductor.pier.api.v2.model\ConfiguracaoEmailPersist | persist

try { 
    $result = $api_instance->alterarConfiguracaoUsingPUT($id, $persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificacaoApi->alterarConfiguracaoUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da configura\u00C3\u00A7\u00C3\u00A3o de e-mail. | 
 **persist** | [**\br.com.conductor.pier.api.v2.model\ConfiguracaoEmailPersist**](\br.com.conductor.pier.api.v2.model\ConfiguracaoEmailPersist.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ConfiguracaoEmailResponse**](ConfiguracaoEmailResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarTemplateNotificacaoUsingPUT**
> \br.com.conductor.pier.api.v2.model\TemplateNotificacaoResponse alterarTemplateNotificacaoUsingPUT($id, $conteudo, $id_configuracao_email, $tipo_layout, $tipo_notificacao, $assunto)

Alterar template de notifica\u00C3\u00A7\u00C3\u00A3o

Esse recurso permite salvar altera\u00C3\u00A7\u00C3\u00B5es de templates notifica\u00C3\u00A7\u00C3\u00B5es.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\NotificacaoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do layout de e-mail.
$conteudo = "conteudo_example"; // string | Template HTML
$id_configuracao_email = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da configra\u00C3\u00A7\u00C3\u00A3o de EMAIL.
$tipo_layout = "tipo_layout_example"; // string | Tipo do layout.
$tipo_notificacao = "tipo_notificacao_example"; // string | Tipo da notifica\u00C3\u00A7\u00C3\u00A3o.
$assunto = "assunto_example"; // string | Assunto da Notificaca\u00C3\u00A7\u00C3\u00A3o.

try { 
    $result = $api_instance->alterarTemplateNotificacaoUsingPUT($id, $conteudo, $id_configuracao_email, $tipo_layout, $tipo_notificacao, $assunto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificacaoApi->alterarTemplateNotificacaoUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do layout de e-mail. | 
 **conteudo** | **string**| Template HTML | 
 **id_configuracao_email** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da configra\u00C3\u00A7\u00C3\u00A3o de EMAIL. | [optional] 
 **tipo_layout** | **string**| Tipo do layout. | [optional] 
 **tipo_notificacao** | **string**| Tipo da notifica\u00C3\u00A7\u00C3\u00A3o. | [optional] 
 **assunto** | **string**| Assunto da Notificaca\u00C3\u00A7\u00C3\u00A3o. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\TemplateNotificacaoResponse**](TemplateNotificacaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: text/plain
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **atualizarSMSUsingPOST**
> \br.com.conductor.pier.api.v2.model\NotificacaoSMSResponse atualizarSMSUsingPOST($nsu, $status, $data, $texto_status, $operadora)

Atualizar SMS

Esse recurso permite atualizar o status do SMS do emissor

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\NotificacaoApi();
$nsu = "nsu_example"; // string | Seu n\u00C3\u00BAmero
$status = "status_example"; // string | Status
$data = "data_example"; // string | Data
$texto_status = "texto_status_example"; // string | TextoStatus
$operadora = "operadora_example"; // string | Operadora

try { 
    $result = $api_instance->atualizarSMSUsingPOST($nsu, $status, $data, $texto_status, $operadora);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificacaoApi->atualizarSMSUsingPOST: ', $e->getMessage(), "\n";
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

[**\br.com.conductor.pier.api.v2.model\NotificacaoSMSResponse**](NotificacaoSMSResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarConfiguracaoUsingGET**
> \br.com.conductor.pier.api.v2.model\ConfiguracaoEmailResponse consultarConfiguracaoUsingGET($id)

Consulta configura\u00C3\u00A7\u00C3\u00A3o de E-mail

Esse recurso permite consultar uma configura\u00C3\u00A7\u00C3\u00A3o espec\u00C3\u00ADfica por id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\NotificacaoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da configura\u00C3\u00A7\u00C3\u00A3o de e-mail.

try { 
    $result = $api_instance->consultarConfiguracaoUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificacaoApi->consultarConfiguracaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da configura\u00C3\u00A7\u00C3\u00A3o de e-mail. | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ConfiguracaoEmailResponse**](ConfiguracaoEmailResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarTemplateNotificacaoUsingGET**
> \br.com.conductor.pier.api.v2.model\TemplateNotificacaoResponse consultarTemplateNotificacaoUsingGET($id)

Consulta template de notifica\u00C3\u00A7\u00C3\u00A3o

Esse recurso permite consultar uma configura\u00C3\u00A7\u00C3\u00A3o espec\u00C3\u00ADfica por id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\NotificacaoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do layout de e-mail.

try { 
    $result = $api_instance->consultarTemplateNotificacaoUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificacaoApi->consultarTemplateNotificacaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do layout de e-mail. | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TemplateNotificacaoResponse**](TemplateNotificacaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **gerarTokenUsingPOST**
> string gerarTokenUsingPOST($persist)

Gerar c\u00C3\u00B3digo de seguran\u00C3\u00A7a e enviar por sms

Esse recurso permite gerar e enviar c\u00C3\u00B3digos de seguran\u00C3\u00A7a por sms, para valida\u00C3\u00A7\u00C3\u00A3o de dispositivos.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\NotificacaoApi();
$persist = new \br.com.conductor.pier.api.v2.model\CodigoSegurancaSMSPersist(); // \br.com.conductor.pier.api.v2.model\CodigoSegurancaSMSPersist | persist

try { 
    $result = $api_instance->gerarTokenUsingPOST($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificacaoApi->gerarTokenUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **persist** | [**\br.com.conductor.pier.api.v2.model\CodigoSegurancaSMSPersist**](\br.com.conductor.pier.api.v2.model\CodigoSegurancaSMSPersist.md)| persist | 

### Return type

**string**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarConfiguracaoUsingGET**
> \br.com.conductor.pier.api.v2.model\PageConfiguracaoEmailResponse listarConfiguracaoUsingGET($sort, $page, $limit)

Lista configura\u00C3\u00A7\u00C3\u00B5es de E-mails

Esse recurso permite listar as configura\u00C3\u00A7\u00C3\u00B5es de E-mails.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\NotificacaoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarConfiguracaoUsingGET($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificacaoApi->listarConfiguracaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageConfiguracaoEmailResponse**](PageConfiguracaoEmailResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarPushUsingGET**
> \br.com.conductor.pier.api.v2.model\PagePushResponse listarPushUsingGET($sort, $page, $limit, $data_envio, $tipo_evento, $status, $plataforma, $protocolo)

Listar Push

Esse recurso permite listar os Pushes do emissor

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\NotificacaoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$data_envio = "data_envio_example"; // string | Apresenta a data e em que o registro foi enviado para o dispositivo.
$tipo_evento = "tipo_evento_example"; // string | Nome do tipoEvento da notifica\u00C3\u00A7\u00C3\u00A3o
$status = "status_example"; // string | Status de envio da notifica\u00C3\u00A7\u00C3\u00A3o
$plataforma = "plataforma_example"; // string | Plataforma de Push notifications.
$protocolo = "protocolo_example"; // string | N\u00C3\u00BAmero do protocolo de envio de notifica\u00C3\u00A7\u00C3\u00B5es

try { 
    $result = $api_instance->listarPushUsingGET($sort, $page, $limit, $data_envio, $tipo_evento, $status, $plataforma, $protocolo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificacaoApi->listarPushUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **data_envio** | **string**| Apresenta a data e em que o registro foi enviado para o dispositivo. | [optional] 
 **tipo_evento** | **string**| Nome do tipoEvento da notifica\u00C3\u00A7\u00C3\u00A3o | [optional] 
 **status** | **string**| Status de envio da notifica\u00C3\u00A7\u00C3\u00A3o | [optional] 
 **plataforma** | **string**| Plataforma de Push notifications. | [optional] 
 **protocolo** | **string**| N\u00C3\u00BAmero do protocolo de envio de notifica\u00C3\u00A7\u00C3\u00B5es | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PagePushResponse**](PagePushResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarSMSUsingGET**
> \br.com.conductor.pier.api.v2.model\PageSMSResponse listarSMSUsingGET($sort, $page, $limit, $data_inclusao, $tipo_evento, $status, $operadora, $protocolo, $nsu)

Listar SMS

Esse recurso permite listar os SMS do emissor

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\NotificacaoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$data_inclusao = "data_inclusao_example"; // string | Apresenta a data e em que o registro foi inclu\u00C3\u00ADdo na base para ser enviado
$tipo_evento = "tipo_evento_example"; // string | Nome do tipoEvento da notifica\u00C3\u00A7\u00C3\u00A3o
$status = "status_example"; // string | Status de envio da notifica\u00C3\u00A7\u00C3\u00A3o
$operadora = "operadora_example"; // string | Nome da operadora a qual a notifica\u00C3\u00A7\u00C3\u00A3o foi enviada.
$protocolo = "protocolo_example"; // string | N\u00C3\u00BAmero do protocolo de envio de notifica\u00C3\u00A7\u00C3\u00B5es
$nsu = 789; // int | Apresenta o nsu da notifica\u00C3\u00A7\u00C3\u00A3o

try { 
    $result = $api_instance->listarSMSUsingGET($sort, $page, $limit, $data_inclusao, $tipo_evento, $status, $operadora, $protocolo, $nsu);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificacaoApi->listarSMSUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **data_inclusao** | **string**| Apresenta a data e em que o registro foi inclu\u00C3\u00ADdo na base para ser enviado | [optional] 
 **tipo_evento** | **string**| Nome do tipoEvento da notifica\u00C3\u00A7\u00C3\u00A3o | [optional] 
 **status** | **string**| Status de envio da notifica\u00C3\u00A7\u00C3\u00A3o | [optional] 
 **operadora** | **string**| Nome da operadora a qual a notifica\u00C3\u00A7\u00C3\u00A3o foi enviada. | [optional] 
 **protocolo** | **string**| N\u00C3\u00BAmero do protocolo de envio de notifica\u00C3\u00A7\u00C3\u00B5es | [optional] 
 **nsu** | **int**| Apresenta o nsu da notifica\u00C3\u00A7\u00C3\u00A3o | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageSMSResponse**](PageSMSResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarTemplateNotificacaoUsingGET**
> \br.com.conductor.pier.api.v2.model\PageTemplateNotificacaoResponse listarTemplateNotificacaoUsingGET($sort, $page, $limit)

Lista templates de notifica\u00C3\u00A7\u00C3\u00B5es

Esse recurso permite listar templates notifica\u00C3\u00A7\u00C3\u00B5es.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\NotificacaoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarTemplateNotificacaoUsingGET($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificacaoApi->listarTemplateNotificacaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTemplateNotificacaoResponse**](PageTemplateNotificacaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarTiposLayoutsUsingGET**
> object[] listarTiposLayoutsUsingGET()

Lista os tipos templates de notifica\u00C3\u00A7\u00C3\u00A3o

Esse recurso permite listar os tipos de templates dispon\u00C3\u00ADveis os par\u00C3\u00A2metros devem ser usados entre chaves. Ex: {{nomeParametro}} .

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\NotificacaoApi();

try { 
    $result = $api_instance->listarTiposLayoutsUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificacaoApi->listarTiposLayoutsUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object[]**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **responderSMSUsingPOST**
> \br.com.conductor.pier.api.v2.model\NotificacaoSMSResponse responderSMSUsingPOST($nsu, $data, $resposta)

Responder SMS

Esse recurso permite atualizar a resposta do SMS, fornecida pedo usu\u00C3\u00A1rio

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\NotificacaoApi();
$nsu = "nsu_example"; // string | Seu n\u00C3\u00BAmero
$data = "data_example"; // string | Data
$resposta = "resposta_example"; // string | TextoStatus

try { 
    $result = $api_instance->responderSMSUsingPOST($nsu, $data, $resposta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificacaoApi->responderSMSUsingPOST: ', $e->getMessage(), "\n";
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

[**\br.com.conductor.pier.api.v2.model\NotificacaoSMSResponse**](NotificacaoSMSResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarConfiguracaoUsingPOST**
> \br.com.conductor.pier.api.v2.model\ConfiguracaoEmailResponse salvarConfiguracaoUsingPOST($persist)

Salva configura\u00C3\u00A7\u00C3\u00B5es de E-mail

Esse recurso salvar configura\u00C3\u00A7\u00C3\u00B5es de E-mail.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\NotificacaoApi();
$persist = new \br.com.conductor.pier.api.v2.model\ConfiguracaoEmailPersist(); // \br.com.conductor.pier.api.v2.model\ConfiguracaoEmailPersist | persist

try { 
    $result = $api_instance->salvarConfiguracaoUsingPOST($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificacaoApi->salvarConfiguracaoUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **persist** | [**\br.com.conductor.pier.api.v2.model\ConfiguracaoEmailPersist**](\br.com.conductor.pier.api.v2.model\ConfiguracaoEmailPersist.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ConfiguracaoEmailResponse**](ConfiguracaoEmailResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarPushFCMUsingPOST**
> \br.com.conductor.pier.api.v2.model\NotificacaoResponse salvarPushFCMUsingPOST($push_persists)

Enviar Push FCM

Esse recurso permite enviar Push para um determinado dipositivo movel atrav\u00C3\u00A9s da plataforma FCM (Firebase Cloud Messaging).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\NotificacaoApi();
$push_persists = array(new PushFCMEGCM()); // \br.com.conductor.pier.api.v2.model\PushFCMEGCM[] | pushPersists

try { 
    $result = $api_instance->salvarPushFCMUsingPOST($push_persists);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificacaoApi->salvarPushFCMUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **push_persists** | [**\br.com.conductor.pier.api.v2.model\PushFCMEGCM[]**](PushFCMEGCM.md)| pushPersists | 

### Return type

[**\br.com.conductor.pier.api.v2.model\NotificacaoResponse**](NotificacaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarPushGCMUsingPOST**
> \br.com.conductor.pier.api.v2.model\NotificacaoResponse salvarPushGCMUsingPOST($push_persists)

Enviar Push GCM

Esse recurso permite enviar Push para um determinado dipositivo movel atrav\u00C3\u00A9s da plataforma GCM (Google Cloud Messaging).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\NotificacaoApi();
$push_persists = array(new PushFCMEGCM()); // \br.com.conductor.pier.api.v2.model\PushFCMEGCM[] | pushPersists

try { 
    $result = $api_instance->salvarPushGCMUsingPOST($push_persists);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificacaoApi->salvarPushGCMUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **push_persists** | [**\br.com.conductor.pier.api.v2.model\PushFCMEGCM[]**](PushFCMEGCM.md)| pushPersists | 

### Return type

[**\br.com.conductor.pier.api.v2.model\NotificacaoResponse**](NotificacaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarPushUsingPOST**
> \br.com.conductor.pier.api.v2.model\NotificacaoResponse salvarPushUsingPOST($push_persists)

Enviar Push APNS

Esse recurso permite enviar Push para um determinado dipositivo movel atrav\u00C3\u00A9s da plataforma APNS (Apple Push Notification Service).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\NotificacaoApi();
$push_persists = array(new PushAPNS()); // \br.com.conductor.pier.api.v2.model\PushAPNS[] | pushPersists

try { 
    $result = $api_instance->salvarPushUsingPOST($push_persists);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificacaoApi->salvarPushUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **push_persists** | [**\br.com.conductor.pier.api.v2.model\PushAPNS[]**](PushAPNS.md)| pushPersists | 

### Return type

[**\br.com.conductor.pier.api.v2.model\NotificacaoResponse**](NotificacaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarSMSUsingPOST**
> \br.com.conductor.pier.api.v2.model\NotificacaoResponse salvarSMSUsingPOST($lista_sms)

Enviar SMS

Esse recurso permite enviar uma lista de SMS.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\NotificacaoApi();
$lista_sms = array(new NotificacaoSMSBody()); // \br.com.conductor.pier.api.v2.model\NotificacaoSMSBody[] | listaSMS

try { 
    $result = $api_instance->salvarSMSUsingPOST($lista_sms);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificacaoApi->salvarSMSUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lista_sms** | [**\br.com.conductor.pier.api.v2.model\NotificacaoSMSBody[]**](NotificacaoSMSBody.md)| listaSMS | 

### Return type

[**\br.com.conductor.pier.api.v2.model\NotificacaoResponse**](NotificacaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarTemplateNotificacaoUsingPOST**
> \br.com.conductor.pier.api.v2.model\TemplateNotificacaoResponse salvarTemplateNotificacaoUsingPOST($conteudo, $id_configuracao_email, $tipo_layout, $tipo_notificacao, $assunto)

Salva template de notifica\u00C3\u00A7\u00C3\u00A3o

Esse recurso salvar template notifica\u00C3\u00A7\u00C3\u00B5e.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\NotificacaoApi();
$conteudo = "conteudo_example"; // string | Template HTML
$id_configuracao_email = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da configra\u00C3\u00A7\u00C3\u00A3o de EMAIL.
$tipo_layout = "tipo_layout_example"; // string | Tipo do layout.
$tipo_notificacao = "tipo_notificacao_example"; // string | Tipo da notifica\u00C3\u00A7\u00C3\u00A3o.
$assunto = "assunto_example"; // string | Assunto da Notificaca\u00C3\u00A7\u00C3\u00A3o.

try { 
    $result = $api_instance->salvarTemplateNotificacaoUsingPOST($conteudo, $id_configuracao_email, $tipo_layout, $tipo_notificacao, $assunto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificacaoApi->salvarTemplateNotificacaoUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conteudo** | **string**| Template HTML | 
 **id_configuracao_email** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da configra\u00C3\u00A7\u00C3\u00A3o de EMAIL. | [optional] 
 **tipo_layout** | **string**| Tipo do layout. | [optional] 
 **tipo_notificacao** | **string**| Tipo da notifica\u00C3\u00A7\u00C3\u00A3o. | [optional] 
 **assunto** | **string**| Assunto da Notificaca\u00C3\u00A7\u00C3\u00A3o. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\TemplateNotificacaoResponse**](TemplateNotificacaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: text/plain
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **validarTokenUsingPOST**
> string validarTokenUsingPOST($request)

Validar c\u00C3\u00B3digo de seguran\u00C3\u00A7a enviado por sms

Esse recurso permite validar os c\u00C3\u00B3digos de seguran\u00C3\u00A7a enviador por sms, para valida\u00C3\u00A7\u00C3\u00A3o de dispositivos.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\NotificacaoApi();
$request = new \br.com.conductor.pier.api.v2.model\CodigoSegurancaSMSRequest(); // \br.com.conductor.pier.api.v2.model\CodigoSegurancaSMSRequest | request

try { 
    $result = $api_instance->validarTokenUsingPOST($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificacaoApi->validarTokenUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\br.com.conductor.pier.api.v2.model\CodigoSegurancaSMSRequest**](\br.com.conductor.pier.api.v2.model\CodigoSegurancaSMSRequest.md)| request | 

### Return type

**string**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

