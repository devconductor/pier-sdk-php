# br.com.conductor.pier.api.v2.invoker\FraudesApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**consultarUsingGET**](FraudesApi.md#consultarUsingGET) | **GET** /api/atendimento-clientes/{id} | Apresenta os dados de um determinado Atendimento
[**listarUsingGET**](FraudesApi.md#listarUsingGET) | **GET** /api/atendimento-clientes | Lista todos os atendimentos
[**salvarUsingPOST**](FraudesApi.md#salvarUsingPOST) | **POST** /api/atendimento-clientes | Cadastro um novo Atendimento do tipo Gen\u00C3\u00A9rico para uma Conta


# **consultarUsingGET**
> \br.com.conductor.pier.api.v2.model\AtendimentoCliente consultarUsingGET($id)

Apresenta os dados de um determinado Atendimento

Este m\u00C3\u00A9todo permite consultar os par\u00C3\u00A2metros de um determinado Atendimento a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (idAtendimento).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\FraudesApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do atendimento cliente (id).

try { 
    $result = $api_instance->consultarUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FraudesApi->consultarUsingGET: ', $e->getMessage(), "\n";
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

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET**
> \br.com.conductor.pier.api.v2.model\AtendimentoCliente listarUsingGET($page, $limit, $id_atendimento, $id_tipo_atendimento, $id_conta, $nome_atendente, $data_atendimento)

Lista todos os atendimentos

Este m\u00C3\u00A9todo permite que sejam listados todos os Registro de Atendimento, independente do Tipo.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\FraudesApi();
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100)
$id_atendimento = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Atendimento (id)
$id_tipo_atendimento = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo de Atendimento (id)
$id_conta = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o de conta (id).
$nome_atendente = "nome_atendente_example"; // string | Apresenta o nome do Atendente que registrou o Atendimento.
$data_atendimento = new \DateTime(); // \DateTime | Apresenta a data em que o Atendimento foi realizado.

try { 
    $result = $api_instance->listarUsingGET($page, $limit, $id_atendimento, $id_tipo_atendimento, $id_conta, $nome_atendente, $data_atendimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FraudesApi->listarUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) | [optional] 
 **id_atendimento** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Atendimento (id) | [optional] 
 **id_tipo_atendimento** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo de Atendimento (id) | [optional] 
 **id_conta** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o de conta (id). | [optional] 
 **nome_atendente** | **string**| Apresenta o nome do Atendente que registrou o Atendimento. | [optional] 
 **data_atendimento** | **\DateTime**| Apresenta a data em que o Atendimento foi realizado. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\AtendimentoCliente**](AtendimentoCliente.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST**
> \br.com.conductor.pier.api.v2.model\AtendimentoCliente salvarUsingPOST($id_conta, $conteudo_atendimento, $detalhes_atendimento, $nome_atendente, $data_atendimento, $data_agendamento, $data_hora_inicio_atendimento, $data_hora_fim_atendimento)

Cadastro um novo Atendimento do tipo Gen\u00C3\u00A9rico para uma Conta

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\FraudesApi();
$id_conta = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Conta a qual o Atendimento est\u00C3\u00A1 associado
$conteudo_atendimento = "conteudo_atendimento_example"; // string | Apresenta as informa\u00C3\u00A7\u00C3\u00B5es que foram utilizadas para consultar, cadastrar ou alterar informa\u00C3\u00A7\u00C3\u00B5es relacionadas ao Atendimento.
$detalhes_atendimento = "detalhes_atendimento_example"; // string | Apresenta os detalhes lan\u00C3\u00A7ados pelo sistema ou pelo Atendente durante relacionados ao Atendimento.
$nome_atendente = "nome_atendente_example"; // string | Apresenta o nome do Atendente que registrou o Atendimento.
$data_atendimento = new \DateTime(); // \DateTime | Apresenta a data em que o Atendimento foi realizado.
$data_agendamento = new \DateTime(); // \DateTime | Quando utilizado, de acordo com o Tipo de Atendimento, apresenta a data para processamento ou a data para retorno do Atendimento.
$data_hora_inicio_atendimento = new \DateTime(); // \DateTime | Apresenta a data e hora em que o Atendimento foi iniciado. Quando utilizado, serve para medir a performance dos Atendimentos.
$data_hora_fim_atendimento = new \DateTime(); // \DateTime | Apresenta a data e hora em que o Atendimento foi iniciado. Quando utilizado, serve para medir a performance dos Atendimentos.

try { 
    $result = $api_instance->salvarUsingPOST($id_conta, $conteudo_atendimento, $detalhes_atendimento, $nome_atendente, $data_atendimento, $data_agendamento, $data_hora_inicio_atendimento, $data_hora_fim_atendimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FraudesApi->salvarUsingPOST: ', $e->getMessage(), "\n";
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
 **data_atendimento** | **\DateTime**| Apresenta a data em que o Atendimento foi realizado. | [optional] 
 **data_agendamento** | **\DateTime**| Quando utilizado, de acordo com o Tipo de Atendimento, apresenta a data para processamento ou a data para retorno do Atendimento. | [optional] 
 **data_hora_inicio_atendimento** | **\DateTime**| Apresenta a data e hora em que o Atendimento foi iniciado. Quando utilizado, serve para medir a performance dos Atendimentos. | [optional] 
 **data_hora_fim_atendimento** | **\DateTime**| Apresenta a data e hora em que o Atendimento foi iniciado. Quando utilizado, serve para medir a performance dos Atendimentos. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\AtendimentoCliente**](AtendimentoCliente.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

