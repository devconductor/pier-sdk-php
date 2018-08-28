# br.com.conductor.pier.api.v2.invoker\GlobaltagnotificacaoApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarConfiguracaoUsingPUT**](GlobaltagnotificacaoApi.md#alterarConfiguracaoUsingPUT) | **PUT** /api/configuracoes-email/{id} | {{{email_resource_alterar_configuracao}}}
[**alterarTemplateNotificacaoUsingPUT**](GlobaltagnotificacaoApi.md#alterarTemplateNotificacaoUsingPUT) | **PUT** /api/templates-notificacoes/{id} | {{{notificacao_resource_alterar_template_notificacao}}}
[**atualizarSMSUsingPOST**](GlobaltagnotificacaoApi.md#atualizarSMSUsingPOST) | **POST** /api/notificacoes/sms/atualizar-status | {{{notificacao_resource_atualizar_s_m_s}}}
[**consultarConfiguracaoUsingGET**](GlobaltagnotificacaoApi.md#consultarConfiguracaoUsingGET) | **GET** /api/configuracoes-email/{id} | {{{email_resource_consultar_configuracao}}}
[**consultarPorEmailUsingGET**](GlobaltagnotificacaoApi.md#consultarPorEmailUsingGET) | **GET** /api/codigos-seguranca-email/{id} | {{{codigo_seguranca_resource_consultar_por_email}}}
[**consultarPorSMSUsingGET**](GlobaltagnotificacaoApi.md#consultarPorSMSUsingGET) | **GET** /api/codigos-seguranca-sms/{id} | {{{codigo_seguranca_resource_consultar_por_s_m_s}}}
[**consultarTemplateNotificacaoUsingGET**](GlobaltagnotificacaoApi.md#consultarTemplateNotificacaoUsingGET) | **GET** /api/templates-notificacoes/{id} | {{{notificacao_resource_consultar_template_notificacao}}}
[**enviarOTPUsingPOST**](GlobaltagnotificacaoApi.md#enviarOTPUsingPOST) | **POST** /api/notificacoes/3d-secure | {{{notificacao_resource_3d_secure}}}
[**gerarTokenEMAILUsingPOST**](GlobaltagnotificacaoApi.md#gerarTokenEMAILUsingPOST) | **POST** /api/notificacoes-email/gerar-codigo-seguranca | {{{codigo_seguranca_resource_gerar_token_e_m_a_i_l}}}
[**gerarTokenSMSUsingPOST**](GlobaltagnotificacaoApi.md#gerarTokenSMSUsingPOST) | **POST** /api/notificacoes-sms/gerar-codigo-seguranca | {{{codigo_seguranca_resource_gerar_token_s_m_s}}}
[**listarConfiguracaoUsingGET**](GlobaltagnotificacaoApi.md#listarConfiguracaoUsingGET) | **GET** /api/configuracoes-email | {{{email_resource_listar_configuracao}}}
[**listarPorEmailUsingGET**](GlobaltagnotificacaoApi.md#listarPorEmailUsingGET) | **GET** /api/codigos-seguranca-email | {{{codigo_seguranca_resource_listar_por_email}}}
[**listarPorSMSUsingGET**](GlobaltagnotificacaoApi.md#listarPorSMSUsingGET) | **GET** /api/codigos-seguranca-sms | {{{codigo_seguranca_resource_listar_por_s_m_s}}}
[**listarPushUsingGET**](GlobaltagnotificacaoApi.md#listarPushUsingGET) | **GET** /api/notificacoes/push | {{{notificacao_resource_listar_push}}}
[**listarSMSUsingGET**](GlobaltagnotificacaoApi.md#listarSMSUsingGET) | **GET** /api/notificacoes/sms | {{{notificacao_resource_listar_s_m_s}}}
[**listarTemplateNotificacaoUsingGET**](GlobaltagnotificacaoApi.md#listarTemplateNotificacaoUsingGET) | **GET** /api/templates-notificacoes | {{{notificacao_resource_listar_template_notificacao}}}
[**listarTiposLayoutsUsingGET**](GlobaltagnotificacaoApi.md#listarTiposLayoutsUsingGET) | **GET** /api/tipos-layouts | {{{enum_resource_listar_tipos_layouts}}}
[**notificacaoEmailUsingPOST**](GlobaltagnotificacaoApi.md#notificacaoEmailUsingPOST) | **POST** /api/notificacoes-email | {{{notificacao_resource_notificacao_email}}}
[**reenviarTokenSMSUsingPOST**](GlobaltagnotificacaoApi.md#reenviarTokenSMSUsingPOST) | **POST** /api/notificacoes-sms/reenviar-codigo-seguranca | {{{codigo_seguranca_resource_reenviar_token_s_m_s}}}
[**responderSMSGetUsingGET**](GlobaltagnotificacaoApi.md#responderSMSGetUsingGET) | **GET** /api/notificacoes/sms/responder | {{{notificacao_resource_responder_s_m_s_get}}}
[**salvarConfiguracaoUsingPOST**](GlobaltagnotificacaoApi.md#salvarConfiguracaoUsingPOST) | **POST** /api/configuracoes-email | {{{email_resource_salvar_configuracao}}}
[**salvarPushFCMUsingPOST**](GlobaltagnotificacaoApi.md#salvarPushFCMUsingPOST) | **POST** /api/notificacoes/push/fcm | {{{notificacao_resource_salvar_push_f_c_m}}}
[**salvarPushGCMUsingPOST**](GlobaltagnotificacaoApi.md#salvarPushGCMUsingPOST) | **POST** /api/notificacoes/push/gcm | {{{notificacao_resource_salvar_push_g_c_m}}}
[**salvarPushUsingPOST**](GlobaltagnotificacaoApi.md#salvarPushUsingPOST) | **POST** /api/notificacoes/push/apns | {{{notificacao_resource_salvar_push}}}
[**salvarSMSUsingPOST**](GlobaltagnotificacaoApi.md#salvarSMSUsingPOST) | **POST** /api/notificacoes/sms | {{{notificacao_resource_salvar_s_m_s}}}
[**salvarTemplateNotificacaoUsingPOST**](GlobaltagnotificacaoApi.md#salvarTemplateNotificacaoUsingPOST) | **POST** /api/templates-notificacoes | {{{notificacao_resource_salvar_template_notificacao}}}
[**validarTokenEMAILUsingPOST**](GlobaltagnotificacaoApi.md#validarTokenEMAILUsingPOST) | **POST** /api/notificacoes-email/validar-codigo-seguranca | {{{codigo_seguranca_resource_validar_token_e_m_a_i_l}}}
[**validarTokenSMSUsingPOST**](GlobaltagnotificacaoApi.md#validarTokenSMSUsingPOST) | **POST** /api/notificacoes-sms/validar-codigo-seguranca | {{{codigo_seguranca_resource_validar_token_s_m_s}}}


# **alterarConfiguracaoUsingPUT**
> \br.com.conductor.pier.api.v2.model\ConfiguracaoEmailResponse alterarConfiguracaoUsingPUT($id, $persist)

{{{email_resource_alterar_configuracao}}}

{{{email_resource_alterar_configuracao_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagnotificacaoApi();
$id = 789; // int | {{{email_resource_alterar_configuracao_param_id}}}
$persist = new \br.com.conductor.pier.api.v2.model\ConfiguracaoEmailPersist(); // \br.com.conductor.pier.api.v2.model\ConfiguracaoEmailPersist | persist

try { 
    $result = $api_instance->alterarConfiguracaoUsingPUT($id, $persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagnotificacaoApi->alterarConfiguracaoUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{email_resource_alterar_configuracao_param_id}}} | 
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
> \br.com.conductor.pier.api.v2.model\TemplateNotificacaoDetalheResponse alterarTemplateNotificacaoUsingPUT($id, $conteudo, $id_configuracao_email, $tipo_layout, $tipo_notificacao, $remetente, $assunto, $template_padrao)

{{{notificacao_resource_alterar_template_notificacao}}}

{{{notificacao_resource_alterar_template_notificacao_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagnotificacaoApi();
$id = 789; // int | {{{notificacao_resource_alterar_template_notificacao_param_id}}}
$conteudo = "conteudo_example"; // string | {{{notificacao_resource_alterar_template_notificacao_param_conteudo}}}
$id_configuracao_email = 789; // int | {{{template_notificacao_persist_id_configuracao_email_value}}}
$tipo_layout = "tipo_layout_example"; // string | {{{template_notificacao_persist_tipo_layout_value}}}
$tipo_notificacao = "tipo_notificacao_example"; // string | {{{template_notificacao_persist_tipo_notificacao_value}}}
$remetente = "remetente_example"; // string | {{{template_notificacao_persist_remetente_value}}}
$assunto = "assunto_example"; // string | {{{template_notificacao_persist_assunto_value}}}
$template_padrao = true; // bool | {{{template_notificacao_persist_template_padrao_value}}}

try { 
    $result = $api_instance->alterarTemplateNotificacaoUsingPUT($id, $conteudo, $id_configuracao_email, $tipo_layout, $tipo_notificacao, $remetente, $assunto, $template_padrao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagnotificacaoApi->alterarTemplateNotificacaoUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{notificacao_resource_alterar_template_notificacao_param_id}}} | 
 **conteudo** | **string**| {{{notificacao_resource_alterar_template_notificacao_param_conteudo}}} | 
 **id_configuracao_email** | **int**| {{{template_notificacao_persist_id_configuracao_email_value}}} | [optional] 
 **tipo_layout** | **string**| {{{template_notificacao_persist_tipo_layout_value}}} | [optional] 
 **tipo_notificacao** | **string**| {{{template_notificacao_persist_tipo_notificacao_value}}} | [optional] 
 **remetente** | **string**| {{{template_notificacao_persist_remetente_value}}} | [optional] 
 **assunto** | **string**| {{{template_notificacao_persist_assunto_value}}} | [optional] 
 **template_padrao** | **bool**| {{{template_notificacao_persist_template_padrao_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\TemplateNotificacaoDetalheResponse**](TemplateNotificacaoDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: text/plain
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **atualizarSMSUsingPOST**
> \br.com.conductor.pier.api.v2.model\NotificacaoSMSResponse atualizarSMSUsingPOST($nsu, $status, $data, $texto_status, $operadora)

{{{notificacao_resource_atualizar_s_m_s}}}

{{{notificacao_resource_atualizar_s_m_s_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagnotificacaoApi();
$nsu = "nsu_example"; // string | {{{notificacao_resource_atualizar_s_m_s_param_nsu}}}
$status = "status_example"; // string | {{{notificacao_resource_atualizar_s_m_s_param_status}}}
$data = "data_example"; // string | {{{notificacao_resource_atualizar_s_m_s_param_data}}}
$texto_status = "texto_status_example"; // string | {{{notificacao_resource_atualizar_s_m_s_param_texto_status}}}
$operadora = "operadora_example"; // string | {{{notificacao_resource_atualizar_s_m_s_param_operadora}}}

try { 
    $result = $api_instance->atualizarSMSUsingPOST($nsu, $status, $data, $texto_status, $operadora);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagnotificacaoApi->atualizarSMSUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nsu** | **string**| {{{notificacao_resource_atualizar_s_m_s_param_nsu}}} | [optional] 
 **status** | **string**| {{{notificacao_resource_atualizar_s_m_s_param_status}}} | [optional] 
 **data** | **string**| {{{notificacao_resource_atualizar_s_m_s_param_data}}} | [optional] 
 **texto_status** | **string**| {{{notificacao_resource_atualizar_s_m_s_param_texto_status}}} | [optional] 
 **operadora** | **string**| {{{notificacao_resource_atualizar_s_m_s_param_operadora}}} | [optional] 

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

{{{email_resource_consultar_configuracao}}}

{{{email_resource_consultar_configuracao_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagnotificacaoApi();
$id = 789; // int | {{{email_resource_consultar_configuracao_param_id}}}

try { 
    $result = $api_instance->consultarConfiguracaoUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagnotificacaoApi->consultarConfiguracaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{email_resource_consultar_configuracao_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ConfiguracaoEmailResponse**](ConfiguracaoEmailResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarPorEmailUsingGET**
> \br.com.conductor.pier.api.v2.model\CodigoSegurancaResponse consultarPorEmailUsingGET($id)

{{{codigo_seguranca_resource_consultar_por_email}}}

{{{codigo_seguranca_resource_consultar_por_email_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagnotificacaoApi();
$id = 789; // int | {{{codigo_seguranca_resource_consultar_por_email_param_id}}}

try { 
    $result = $api_instance->consultarPorEmailUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagnotificacaoApi->consultarPorEmailUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{codigo_seguranca_resource_consultar_por_email_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\CodigoSegurancaResponse**](CodigoSegurancaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarPorSMSUsingGET**
> \br.com.conductor.pier.api.v2.model\CodigoSegurancaResponse consultarPorSMSUsingGET($id)

{{{codigo_seguranca_resource_consultar_por_s_m_s}}}

{{{codigo_seguranca_resource_consultar_por_s_m_s_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagnotificacaoApi();
$id = 789; // int | {{{codigo_seguranca_resource_consultar_por_s_m_s_param_id}}}

try { 
    $result = $api_instance->consultarPorSMSUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagnotificacaoApi->consultarPorSMSUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{codigo_seguranca_resource_consultar_por_s_m_s_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\CodigoSegurancaResponse**](CodigoSegurancaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarTemplateNotificacaoUsingGET**
> \br.com.conductor.pier.api.v2.model\TemplateNotificacaoDetalheResponse consultarTemplateNotificacaoUsingGET($id)

{{{notificacao_resource_consultar_template_notificacao}}}

{{{notificacao_resource_consultar_template_notificacao_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagnotificacaoApi();
$id = 789; // int | {{{notificacao_resource_consultar_template_notificacao_param_id}}}

try { 
    $result = $api_instance->consultarTemplateNotificacaoUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagnotificacaoApi->consultarTemplateNotificacaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{notificacao_resource_consultar_template_notificacao_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TemplateNotificacaoDetalheResponse**](TemplateNotificacaoDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **enviarOTPUsingPOST**
> object enviarOTPUsingPOST($secure3d_request)

{{{notificacao_resource_3d_secure}}}

{{{notificacao_resource_3d_secure_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagnotificacaoApi();
$secure3d_request = new \br.com.conductor.pier.api.v2.model\Secure3dRequest(); // \br.com.conductor.pier.api.v2.model\Secure3dRequest | secure3dRequest

try { 
    $result = $api_instance->enviarOTPUsingPOST($secure3d_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagnotificacaoApi->enviarOTPUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **secure3d_request** | [**\br.com.conductor.pier.api.v2.model\Secure3dRequest**](\br.com.conductor.pier.api.v2.model\Secure3dRequest.md)| secure3dRequest | 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **gerarTokenEMAILUsingPOST**
> string gerarTokenEMAILUsingPOST($email)

{{{codigo_seguranca_resource_gerar_token_e_m_a_i_l}}}

{{{codigo_seguranca_resource_gerar_token_e_m_a_i_l_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagnotificacaoApi();
$email = "email_example"; // string | email

try { 
    $result = $api_instance->gerarTokenEMAILUsingPOST($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagnotificacaoApi->gerarTokenEMAILUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| email | 

### Return type

**string**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **gerarTokenSMSUsingPOST**
> string gerarTokenSMSUsingPOST($persist)

{{{codigo_seguranca_resource_gerar_token_s_m_s}}}

{{{codigo_seguranca_resource_gerar_token_s_m_s_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagnotificacaoApi();
$persist = new \br.com.conductor.pier.api.v2.model\CodigoSegurancaSMSPersist(); // \br.com.conductor.pier.api.v2.model\CodigoSegurancaSMSPersist | persist

try { 
    $result = $api_instance->gerarTokenSMSUsingPOST($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagnotificacaoApi->gerarTokenSMSUsingPOST: ', $e->getMessage(), "\n";
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

{{{email_resource_listar_configuracao}}}

{{{email_resource_listar_configuracao_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagnotificacaoApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}

try { 
    $result = $api_instance->listarConfiguracaoUsingGET($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagnotificacaoApi->listarConfiguracaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageConfiguracaoEmailResponse**](PageConfiguracaoEmailResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarPorEmailUsingGET**
> \br.com.conductor.pier.api.v2.model\PageCodigoSegurancaResponse listarPorEmailUsingGET($sort, $page, $limit)

{{{codigo_seguranca_resource_listar_por_email}}}

{{{codigo_seguranca_resource_listar_por_email_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagnotificacaoApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}

try { 
    $result = $api_instance->listarPorEmailUsingGET($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagnotificacaoApi->listarPorEmailUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageCodigoSegurancaResponse**](PageCodigoSegurancaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarPorSMSUsingGET**
> \br.com.conductor.pier.api.v2.model\PageCodigoSegurancaResponse listarPorSMSUsingGET($sort, $page, $limit)

{{{codigo_seguranca_resource_listar_por_s_m_s}}}

{{{codigo_seguranca_resource_listar_por_s_m_s_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagnotificacaoApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}

try { 
    $result = $api_instance->listarPorSMSUsingGET($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagnotificacaoApi->listarPorSMSUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageCodigoSegurancaResponse**](PageCodigoSegurancaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarPushUsingGET**
> \br.com.conductor.pier.api.v2.model\PagePushResponse listarPushUsingGET($sort, $page, $limit, $data_envio, $tipo_evento, $status, $plataforma, $protocolo)

{{{notificacao_resource_listar_push}}}

{{{notificacao_resource_listar_push_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagnotificacaoApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$data_envio = "data_envio_example"; // string | {{{notificacao_push_request_data_envio_value}}}
$tipo_evento = "tipo_evento_example"; // string | {{{notificacao_push_request_tipo_evento_value}}}
$status = "status_example"; // string | {{{notificacao_push_request_status_value}}}
$plataforma = "plataforma_example"; // string | {{{notificacao_push_request_plataforma_value}}}
$protocolo = "protocolo_example"; // string | {{{notificacao_push_request_protocolo_value}}}

try { 
    $result = $api_instance->listarPushUsingGET($sort, $page, $limit, $data_envio, $tipo_evento, $status, $plataforma, $protocolo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagnotificacaoApi->listarPushUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **data_envio** | **string**| {{{notificacao_push_request_data_envio_value}}} | [optional] 
 **tipo_evento** | **string**| {{{notificacao_push_request_tipo_evento_value}}} | [optional] 
 **status** | **string**| {{{notificacao_push_request_status_value}}} | [optional] 
 **plataforma** | **string**| {{{notificacao_push_request_plataforma_value}}} | [optional] 
 **protocolo** | **string**| {{{notificacao_push_request_protocolo_value}}} | [optional] 

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

{{{notificacao_resource_listar_s_m_s}}}

{{{notificacao_resource_listar_s_m_s_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagnotificacaoApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$data_inclusao = "data_inclusao_example"; // string | {{{notificacao_s_m_s_request_data_inclusao_value}}}
$tipo_evento = "tipo_evento_example"; // string | {{{notificacao_s_m_s_request_tipo_evento_value}}}
$status = "status_example"; // string | {{{notificacao_s_m_s_request_status_value}}}
$operadora = "operadora_example"; // string | {{{notificacao_s_m_s_request_operadora_value}}}
$protocolo = "protocolo_example"; // string | {{{notificacao_s_m_s_request_protocolo_value}}}
$nsu = 789; // int | {{{notificacao_s_m_s_request_nsu_value}}}

try { 
    $result = $api_instance->listarSMSUsingGET($sort, $page, $limit, $data_inclusao, $tipo_evento, $status, $operadora, $protocolo, $nsu);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagnotificacaoApi->listarSMSUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **data_inclusao** | **string**| {{{notificacao_s_m_s_request_data_inclusao_value}}} | [optional] 
 **tipo_evento** | **string**| {{{notificacao_s_m_s_request_tipo_evento_value}}} | [optional] 
 **status** | **string**| {{{notificacao_s_m_s_request_status_value}}} | [optional] 
 **operadora** | **string**| {{{notificacao_s_m_s_request_operadora_value}}} | [optional] 
 **protocolo** | **string**| {{{notificacao_s_m_s_request_protocolo_value}}} | [optional] 
 **nsu** | **int**| {{{notificacao_s_m_s_request_nsu_value}}} | [optional] 

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

{{{notificacao_resource_listar_template_notificacao}}}

{{{notificacao_resource_listar_template_notificacao_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagnotificacaoApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}

try { 
    $result = $api_instance->listarTemplateNotificacaoUsingGET($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagnotificacaoApi->listarTemplateNotificacaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 

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

{{{enum_resource_listar_tipos_layouts}}}

{{{enum_resource_listar_tipos_layouts_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagnotificacaoApi();

try { 
    $result = $api_instance->listarTiposLayoutsUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagnotificacaoApi->listarTiposLayoutsUsingGET: ', $e->getMessage(), "\n";
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

# **notificacaoEmailUsingPOST**
> object notificacaoEmailUsingPOST($request)

{{{notificacao_resource_notificacao_email}}}

{{{notificacao_resource_notificacao_email_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagnotificacaoApi();
$request = new \br.com.conductor.pier.api.v2.model\NotificacaoEmailRequest(); // \br.com.conductor.pier.api.v2.model\NotificacaoEmailRequest | request

try { 
    $result = $api_instance->notificacaoEmailUsingPOST($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagnotificacaoApi->notificacaoEmailUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\br.com.conductor.pier.api.v2.model\NotificacaoEmailRequest**](\br.com.conductor.pier.api.v2.model\NotificacaoEmailRequest.md)| request | 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **reenviarTokenSMSUsingPOST**
> string reenviarTokenSMSUsingPOST($persist)

{{{codigo_seguranca_resource_reenviar_token_s_m_s}}}

{{{codigo_seguranca_resource_reenviar_token_s_m_s_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagnotificacaoApi();
$persist = new \br.com.conductor.pier.api.v2.model\CodigoSegurancaSMSPersist(); // \br.com.conductor.pier.api.v2.model\CodigoSegurancaSMSPersist | persist

try { 
    $result = $api_instance->reenviarTokenSMSUsingPOST($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagnotificacaoApi->reenviarTokenSMSUsingPOST: ', $e->getMessage(), "\n";
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

# **responderSMSGetUsingGET**
> \br.com.conductor.pier.api.v2.model\NotificacaoSMSResponse responderSMSGetUsingGET($nsu, $data, $resposta)

{{{notificacao_resource_responder_s_m_s_get}}}

{{{notificacao_resource_responder_s_m_s_get_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagnotificacaoApi();
$nsu = "nsu_example"; // string | {{{notificacao_resource_responder_s_m_s_get_param_nsu}}}
$data = "data_example"; // string | {{{notificacao_resource_responder_s_m_s_get_param_data}}}
$resposta = "resposta_example"; // string | {{{notificacao_resource_responder_s_m_s_get_param_resposta}}}

try { 
    $result = $api_instance->responderSMSGetUsingGET($nsu, $data, $resposta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagnotificacaoApi->responderSMSGetUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nsu** | **string**| {{{notificacao_resource_responder_s_m_s_get_param_nsu}}} | [optional] 
 **data** | **string**| {{{notificacao_resource_responder_s_m_s_get_param_data}}} | [optional] 
 **resposta** | **string**| {{{notificacao_resource_responder_s_m_s_get_param_resposta}}} | [optional] 

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

{{{email_resource_salvar_configuracao}}}

{{{email_resource_salvar_configuracao_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagnotificacaoApi();
$persist = new \br.com.conductor.pier.api.v2.model\ConfiguracaoEmailPersist(); // \br.com.conductor.pier.api.v2.model\ConfiguracaoEmailPersist | persist

try { 
    $result = $api_instance->salvarConfiguracaoUsingPOST($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagnotificacaoApi->salvarConfiguracaoUsingPOST: ', $e->getMessage(), "\n";
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

{{{notificacao_resource_salvar_push_f_c_m}}}

{{{notificacao_resource_salvar_push_f_c_m_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagnotificacaoApi();
$push_persists = array(new PushFCMGCMPersistValue_()); // \br.com.conductor.pier.api.v2.model\PushFCMGCMPersistValue_[] | pushPersists

try { 
    $result = $api_instance->salvarPushFCMUsingPOST($push_persists);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagnotificacaoApi->salvarPushFCMUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **push_persists** | [**\br.com.conductor.pier.api.v2.model\PushFCMGCMPersistValue_[]**](PushFCMGCMPersistValue_.md)| pushPersists | 

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

{{{notificacao_resource_salvar_push_g_c_m}}}

{{{notificacao_resource_salvar_push_g_c_m_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagnotificacaoApi();
$push_persists = array(new PushFCMGCMPersistValue_()); // \br.com.conductor.pier.api.v2.model\PushFCMGCMPersistValue_[] | pushPersists

try { 
    $result = $api_instance->salvarPushGCMUsingPOST($push_persists);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagnotificacaoApi->salvarPushGCMUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **push_persists** | [**\br.com.conductor.pier.api.v2.model\PushFCMGCMPersistValue_[]**](PushFCMGCMPersistValue_.md)| pushPersists | 

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

{{{notificacao_resource_salvar_push}}}

{{{notificacao_resource_salvar_push_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagnotificacaoApi();
$push_persists = array(new PushAPNSPersistValue_()); // \br.com.conductor.pier.api.v2.model\PushAPNSPersistValue_[] | pushPersists

try { 
    $result = $api_instance->salvarPushUsingPOST($push_persists);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagnotificacaoApi->salvarPushUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **push_persists** | [**\br.com.conductor.pier.api.v2.model\PushAPNSPersistValue_[]**](PushAPNSPersistValue_.md)| pushPersists | 

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

{{{notificacao_resource_salvar_s_m_s}}}

{{{notificacao_resource_salvar_s_m_s_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagnotificacaoApi();
$lista_sms = array(new SMSPersistValue_()); // \br.com.conductor.pier.api.v2.model\SMSPersistValue_[] | listaSMS

try { 
    $result = $api_instance->salvarSMSUsingPOST($lista_sms);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagnotificacaoApi->salvarSMSUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lista_sms** | [**\br.com.conductor.pier.api.v2.model\SMSPersistValue_[]**](SMSPersistValue_.md)| listaSMS | 

### Return type

[**\br.com.conductor.pier.api.v2.model\NotificacaoResponse**](NotificacaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarTemplateNotificacaoUsingPOST**
> \br.com.conductor.pier.api.v2.model\TemplateNotificacaoDetalheResponse salvarTemplateNotificacaoUsingPOST($conteudo, $id_configuracao_email, $tipo_layout, $tipo_notificacao, $remetente, $assunto, $template_padrao)

{{{notificacao_resource_salvar_template_notificacao}}}

{{{notificacao_resource_salvar_template_notificacao_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagnotificacaoApi();
$conteudo = "conteudo_example"; // string | {{{notificacao_resource_salvar_template_notificacao_param_conteudo}}}
$id_configuracao_email = 789; // int | {{{template_notificacao_persist_id_configuracao_email_value}}}
$tipo_layout = "tipo_layout_example"; // string | {{{template_notificacao_persist_tipo_layout_value}}}
$tipo_notificacao = "tipo_notificacao_example"; // string | {{{template_notificacao_persist_tipo_notificacao_value}}}
$remetente = "remetente_example"; // string | {{{template_notificacao_persist_remetente_value}}}
$assunto = "assunto_example"; // string | {{{template_notificacao_persist_assunto_value}}}
$template_padrao = true; // bool | {{{template_notificacao_persist_template_padrao_value}}}

try { 
    $result = $api_instance->salvarTemplateNotificacaoUsingPOST($conteudo, $id_configuracao_email, $tipo_layout, $tipo_notificacao, $remetente, $assunto, $template_padrao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagnotificacaoApi->salvarTemplateNotificacaoUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conteudo** | **string**| {{{notificacao_resource_salvar_template_notificacao_param_conteudo}}} | 
 **id_configuracao_email** | **int**| {{{template_notificacao_persist_id_configuracao_email_value}}} | [optional] 
 **tipo_layout** | **string**| {{{template_notificacao_persist_tipo_layout_value}}} | [optional] 
 **tipo_notificacao** | **string**| {{{template_notificacao_persist_tipo_notificacao_value}}} | [optional] 
 **remetente** | **string**| {{{template_notificacao_persist_remetente_value}}} | [optional] 
 **assunto** | **string**| {{{template_notificacao_persist_assunto_value}}} | [optional] 
 **template_padrao** | **bool**| {{{template_notificacao_persist_template_padrao_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\TemplateNotificacaoDetalheResponse**](TemplateNotificacaoDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: text/plain
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **validarTokenEMAILUsingPOST**
> string validarTokenEMAILUsingPOST($request)

{{{codigo_seguranca_resource_validar_token_e_m_a_i_l}}}

{{{codigo_seguranca_resource_validar_token_e_m_a_i_l_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagnotificacaoApi();
$request = new \br.com.conductor.pier.api.v2.model\CodigoSegurancaEMAILPersist(); // \br.com.conductor.pier.api.v2.model\CodigoSegurancaEMAILPersist | request

try { 
    $result = $api_instance->validarTokenEMAILUsingPOST($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagnotificacaoApi->validarTokenEMAILUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\br.com.conductor.pier.api.v2.model\CodigoSegurancaEMAILPersist**](\br.com.conductor.pier.api.v2.model\CodigoSegurancaEMAILPersist.md)| request | 

### Return type

**string**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **validarTokenSMSUsingPOST**
> string validarTokenSMSUsingPOST($request)

{{{codigo_seguranca_resource_validar_token_s_m_s}}}

{{{codigo_seguranca_resource_validar_token_s_m_s_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagnotificacaoApi();
$request = new \br.com.conductor.pier.api.v2.model\CodigoSegurancaSMSRequest(); // \br.com.conductor.pier.api.v2.model\CodigoSegurancaSMSRequest | request

try { 
    $result = $api_instance->validarTokenSMSUsingPOST($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagnotificacaoApi->validarTokenSMSUsingPOST: ', $e->getMessage(), "\n";
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

