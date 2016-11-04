# br.com.conductor.pier.api.v2.invoker\ContaApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarVencimentoUsingPUT**](ContaApi.md#alterarVencimentoUsingPUT) | **PUT** /api/contas/{id_conta}/alterar-vencimento | Alterar vencimento
[**consultarUsingGET1**](ContaApi.md#consultarUsingGET1) | **GET** /api/contas/{id_conta} | Apresenta dados de uma determinada conta
[**listarUsingGET1**](ContaApi.md#listarUsingGET1) | **GET** /api/contas | Lista contas existentes na base de dados do Emissor


# **alterarVencimentoUsingPUT**
> \br.com.conductor.pier.api.v2.model\Conta alterarVencimentoUsingPUT($id_conta, $novo_dia_vencimento)

Alterar vencimento

Esse recurso permite alterar o vencimento de uma conta especifica.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id_conta = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).
$novo_dia_vencimento = 56; // int | Novo dia de vencimento.

try { 
    $result = $api_instance->alterarVencimentoUsingPUT($id_conta, $novo_dia_vencimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->alterarVencimentoUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_conta** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | 
 **novo_dia_vencimento** | **int**| Novo dia de vencimento. | 

### Return type

[**\br.com.conductor.pier.api.v2.model\Conta**](Conta.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET1**
> \br.com.conductor.pier.api.v2.model\Conta consultarUsingGET1($id_conta)

Apresenta dados de uma determinada conta

Este m\u00C3\u00A9todo permite consultar dados de uma determinada conta a partir de seu codigo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id_conta = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).

try { 
    $result = $api_instance->consultarUsingGET1($id_conta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->consultarUsingGET1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_conta** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\Conta**](Conta.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET1**
> \br.com.conductor.pier.api.v2.model\Conta listarUsingGET1($id, $id_produto, $id_origem_comercial, $id_pessoa, $id_status_conta, $dia_vencimento, $melhor_dia_compra, $data_status_conta, $data_cadastro, $data_ultima_alteracao_vencimento, $page, $limit)

Lista contas existentes na base de dados do Emissor

Este recurso permite listar contas existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o de conta (id).
$id_produto = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do produto ao qual a conta faz parte. (id).
$id_origem_comercial = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Origem Comercial (id) que deu origem a Conta.
$id_pessoa = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Pessoa Titular da Conta (id).
$id_status_conta = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Produto a qual o cart\u00C3\u00A3o pertence (id).
$dia_vencimento = 56; // int | Apresenta o dia de vencimento.
$melhor_dia_compra = 56; // int | Apresenta o melhor dia de compra.
$data_status_conta = new \DateTime(); // \DateTime | Apresenta a data em que o idStatusConta atual fora atribu\u00C3\u00ADdo para ela.
$data_cadastro = new \DateTime(); // \DateTime | Apresenta a data em que o cart\u00C3\u00A3o foi gerado.
$data_ultima_alteracao_vencimento = new \DateTime(); // \DateTime | Apresenta a data da ultima altera\u00C3\u00A7\u00C3\u00A3o de vencimento.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100)

try { 
    $result = $api_instance->listarUsingGET1($id, $id_produto, $id_origem_comercial, $id_pessoa, $id_status_conta, $dia_vencimento, $melhor_dia_compra, $data_status_conta, $data_cadastro, $data_ultima_alteracao_vencimento, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->listarUsingGET1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o de conta (id). | [optional] 
 **id_produto** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do produto ao qual a conta faz parte. (id). | [optional] 
 **id_origem_comercial** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Origem Comercial (id) que deu origem a Conta. | [optional] 
 **id_pessoa** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Pessoa Titular da Conta (id). | [optional] 
 **id_status_conta** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Produto a qual o cart\u00C3\u00A3o pertence (id). | [optional] 
 **dia_vencimento** | **int**| Apresenta o dia de vencimento. | [optional] 
 **melhor_dia_compra** | **int**| Apresenta o melhor dia de compra. | [optional] 
 **data_status_conta** | **\DateTime**| Apresenta a data em que o idStatusConta atual fora atribu\u00C3\u00ADdo para ela. | [optional] 
 **data_cadastro** | **\DateTime**| Apresenta a data em que o cart\u00C3\u00A3o foi gerado. | [optional] 
 **data_ultima_alteracao_vencimento** | **\DateTime**| Apresenta a data da ultima altera\u00C3\u00A7\u00C3\u00A3o de vencimento. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\Conta**](Conta.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

