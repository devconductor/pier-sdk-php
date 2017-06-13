# br.com.conductor.pier.api.v2.invoker\RiscoFraudeApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**consultarUsingGET**](RiscoFraudeApi.md#consultarUsingGET) | **GET** /api/atendimento-clientes/{id} | Apresenta os dados de um determinado Atendimento
[**consultarUsingGET12**](RiscoFraudeApi.md#consultarUsingGET12) | **GET** /api/riscos-fraudes/{id} | Consultar uma transa\u00C3\u00A7\u00C3\u00A3o classificada com risco de fraude
[**informarRiscoFraudeUsingPOST**](RiscoFraudeApi.md#informarRiscoFraudeUsingPOST) | **POST** /api/riscos-fraudes | Receber Risco Fraude
[**listarUsingGET1**](RiscoFraudeApi.md#listarUsingGET1) | **GET** /api/atendimento-clientes | Lista todos os atendimentos
[**listarUsingGET18**](RiscoFraudeApi.md#listarUsingGET18) | **GET** /api/riscos-fraudes | Listar as transa\u00C3\u00A7\u00C3\u00B5es com resolu\u00C3\u00A7\u00C3\u00A3o de risco fraude pendente
[**negarUsingPOST**](RiscoFraudeApi.md#negarUsingPOST) | **POST** /api/riscos-fraudes/{id}/negar | Negar autenticidade da transa\u00C3\u00A7\u00C3\u00A3o com risco de fraude
[**reconhecerUsingPOST**](RiscoFraudeApi.md#reconhecerUsingPOST) | **POST** /api/riscos-fraudes/{id}/reconhecer | Reconhecer a transa\u00C3\u00A7\u00C3\u00A3o com risco de fraude
[**salvarUsingPOST1**](RiscoFraudeApi.md#salvarUsingPOST1) | **POST** /api/atendimento-clientes | Cadastro um novo Atendimento do tipo Gen\u00C3\u00A9rico para uma Conta


# **consultarUsingGET**
> \br.com.conductor.pier.api.v2.model\AtendimentoCliente consultarUsingGET($id)

Apresenta os dados de um determinado Atendimento

Este m\u00C3\u00A9todo permite consultar os par\u00C3\u00A2metros de um determinado Atendimento a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (idAtendimento).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\RiscoFraudeApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do atendimento cliente (id).

try { 
    $result = $api_instance->consultarUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RiscoFraudeApi->consultarUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do atendimento cliente (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\AtendimentoCliente**](AtendimentoCliente.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET12**
> \br.com.conductor.pier.api.v2.model\RiscoFraudeDetalhadoResponse consultarUsingGET12($id)

Consultar uma transa\u00C3\u00A7\u00C3\u00A3o classificada com risco de fraude

Consulta os detalhes de uma transa\u00C3\u00A7\u00C3\u00A3o classificada com risco de fraude.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\RiscoFraudeApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do risco de fraude

try { 
    $result = $api_instance->consultarUsingGET12($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RiscoFraudeApi->consultarUsingGET12: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do risco de fraude | 

### Return type

[**\br.com.conductor.pier.api.v2.model\RiscoFraudeDetalhadoResponse**](RiscoFraudeDetalhadoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **informarRiscoFraudeUsingPOST**
> string informarRiscoFraudeUsingPOST($detalhado_responses)

Receber Risco Fraude

Receber risco fraude

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\RiscoFraudeApi();
$detalhado_responses = array(new RiscoFraudeDetalhadoResponse()); // \br.com.conductor.pier.api.v2.model\RiscoFraudeDetalhadoResponse[] | detalhadoResponses

try { 
    $result = $api_instance->informarRiscoFraudeUsingPOST($detalhado_responses);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RiscoFraudeApi->informarRiscoFraudeUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **detalhado_responses** | [**\br.com.conductor.pier.api.v2.model\RiscoFraudeDetalhadoResponse[]**](RiscoFraudeDetalhadoResponse.md)| detalhadoResponses | 

### Return type

**string**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET1**
> \br.com.conductor.pier.api.v2.model\PageAtendimentoClientes listarUsingGET1($page, $limit, $id_tipo_atendimento, $id_conta, $nome_atendente, $data_atendimento)

Lista todos os atendimentos

Este m\u00C3\u00A9todo permite que sejam listados todos os Registro de Atendimento, independente do Tipo.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\RiscoFraudeApi();
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id_tipo_atendimento = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo de Atendimento (id)
$id_conta = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o de conta (id).
$nome_atendente = "nome_atendente_example"; // string | Apresenta o nome do Atendente que registrou o Atendimento.
$data_atendimento = "data_atendimento_example"; // string | Apresenta a data em que o Atendimento foi realizado.

try { 
    $result = $api_instance->listarUsingGET1($page, $limit, $id_tipo_atendimento, $id_conta, $nome_atendente, $data_atendimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RiscoFraudeApi->listarUsingGET1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id_tipo_atendimento** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo de Atendimento (id) | [optional] 
 **id_conta** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o de conta (id). | [optional] 
 **nome_atendente** | **string**| Apresenta o nome do Atendente que registrou o Atendimento. | [optional] 
 **data_atendimento** | **string**| Apresenta a data em que o Atendimento foi realizado. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageAtendimentoClientes**](PageAtendimentoClientes.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET18**
> \br.com.conductor.pier.api.v2.model\RiscoFraudeResponsePage listarUsingGET18($id_conta, $confirmacao_fraude, $page, $limit)

Listar as transa\u00C3\u00A7\u00C3\u00B5es com resolu\u00C3\u00A7\u00C3\u00A3o de risco fraude pendente

Este recurso permite que sejam listados os riscos de fraudes existentes

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\RiscoFraudeApi();
$id_conta = 789; // int | Id Conta
$confirmacao_fraude = "confirmacao_fraude_example"; // string | Confirma\u00C3\u00A7\u00C3\u00A3o da fraude
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarUsingGET18($id_conta, $confirmacao_fraude, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RiscoFraudeApi->listarUsingGET18: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_conta** | **int**| Id Conta | 
 **confirmacao_fraude** | **string**| Confirma\u00C3\u00A7\u00C3\u00A3o da fraude | 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\RiscoFraudeResponsePage**](RiscoFraudeResponsePage.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **negarUsingPOST**
> \br.com.conductor.pier.api.v2.model\RiscoFraudeDetalhadoResponse negarUsingPOST($id)

Negar autenticidade da transa\u00C3\u00A7\u00C3\u00A3o com risco de fraude

Nega a realiza\u00C3\u00A7\u00C3\u00A3o da transa\u00C3\u00A7\u00C3\u00A3o classificada com risco de fraude.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\RiscoFraudeApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do risco de fraude

try { 
    $result = $api_instance->negarUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RiscoFraudeApi->negarUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do risco de fraude | 

### Return type

[**\br.com.conductor.pier.api.v2.model\RiscoFraudeDetalhadoResponse**](RiscoFraudeDetalhadoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **reconhecerUsingPOST**
> \br.com.conductor.pier.api.v2.model\RiscoFraudeDetalhadoResponse reconhecerUsingPOST($id)

Reconhecer a transa\u00C3\u00A7\u00C3\u00A3o com risco de fraude

Confirma a autenticidade da transa\u00C3\u00A7\u00C3\u00A3o classificada com risco de fraude.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\RiscoFraudeApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do risco de fraude

try { 
    $result = $api_instance->reconhecerUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RiscoFraudeApi->reconhecerUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do risco de fraude | 

### Return type

[**\br.com.conductor.pier.api.v2.model\RiscoFraudeDetalhadoResponse**](RiscoFraudeDetalhadoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST1**
> \br.com.conductor.pier.api.v2.model\AtendimentoCliente salvarUsingPOST1($id_conta, $conteudo_atendimento, $detalhes_atendimento, $nome_atendente, $data_atendimento, $data_agendamento, $data_hora_inicio_atendimento, $data_hora_fim_atendimento, $flag_fila_fraude)

Cadastro um novo Atendimento do tipo Gen\u00C3\u00A9rico para uma Conta

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\RiscoFraudeApi();
$id_conta = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Conta a qual o Atendimento est\u00C3\u00A1 associado
$conteudo_atendimento = "conteudo_atendimento_example"; // string | Apresenta as informa\u00C3\u00A7\u00C3\u00B5es que foram utilizadas para consultar, cadastrar ou alterar informa\u00C3\u00A7\u00C3\u00B5es relacionadas ao Atendimento.
$detalhes_atendimento = "detalhes_atendimento_example"; // string | Apresenta os detalhes lan\u00C3\u00A7ados pelo sistema ou pelo Atendente durante relacionados ao Atendimento.
$nome_atendente = "nome_atendente_example"; // string | Apresenta o nome do Atendente que registrou o Atendimento.
$data_atendimento = "data_atendimento_example"; // string | Apresenta a data e hora em que o Atendimento foi realizado no formato yyyy-MM-dd'T'HH:mm:ss.SSS'Z'.
$data_agendamento = "data_agendamento_example"; // string | Quando utilizado, de acordo com o Tipo de Atendimento, apresenta a data e hora para processamento ou a data e hora para retorno do Atendimento no formato yyyy-MM-dd'T'HH:mm:ss.SSS'Z'.
$data_hora_inicio_atendimento = "data_hora_inicio_atendimento_example"; // string | Apresenta a data e hora em que o Atendimento foi iniciado. Quando utilizado, serve para medir a performance dos Atendimentos no formato yyyy-MM-dd'T'HH:mm:ss.SSS'Z'.
$data_hora_fim_atendimento = "data_hora_fim_atendimento_example"; // string | Apresenta a data e hora em que o Atendimento foi iniciado. Quando utilizado, serve para medir a performance dos Atendimentos no formato yyyy-MM-dd'T'HH:mm:ss.SSS'Z'.
$flag_fila_fraude = 56; // int | Flag fila fraude

try { 
    $result = $api_instance->salvarUsingPOST1($id_conta, $conteudo_atendimento, $detalhes_atendimento, $nome_atendente, $data_atendimento, $data_agendamento, $data_hora_inicio_atendimento, $data_hora_fim_atendimento, $flag_fila_fraude);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RiscoFraudeApi->salvarUsingPOST1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_conta** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Conta a qual o Atendimento est\u00C3\u00A1 associado | [optional] 
 **conteudo_atendimento** | **string**| Apresenta as informa\u00C3\u00A7\u00C3\u00B5es que foram utilizadas para consultar, cadastrar ou alterar informa\u00C3\u00A7\u00C3\u00B5es relacionadas ao Atendimento. | [optional] 
 **detalhes_atendimento** | **string**| Apresenta os detalhes lan\u00C3\u00A7ados pelo sistema ou pelo Atendente durante relacionados ao Atendimento. | [optional] 
 **nome_atendente** | **string**| Apresenta o nome do Atendente que registrou o Atendimento. | [optional] 
 **data_atendimento** | **string**| Apresenta a data e hora em que o Atendimento foi realizado no formato yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSS&#39;Z&#39;. | [optional] 
 **data_agendamento** | **string**| Quando utilizado, de acordo com o Tipo de Atendimento, apresenta a data e hora para processamento ou a data e hora para retorno do Atendimento no formato yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSS&#39;Z&#39;. | [optional] 
 **data_hora_inicio_atendimento** | **string**| Apresenta a data e hora em que o Atendimento foi iniciado. Quando utilizado, serve para medir a performance dos Atendimentos no formato yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSS&#39;Z&#39;. | [optional] 
 **data_hora_fim_atendimento** | **string**| Apresenta a data e hora em que o Atendimento foi iniciado. Quando utilizado, serve para medir a performance dos Atendimentos no formato yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSS&#39;Z&#39;. | [optional] 
 **flag_fila_fraude** | **int**| Flag fila fraude | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\AtendimentoCliente**](AtendimentoCliente.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

