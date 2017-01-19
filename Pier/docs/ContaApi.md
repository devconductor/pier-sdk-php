# br.com.conductor.pier.api.v2.invoker\ContaApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarLimiteUsingPUT**](ContaApi.md#alterarLimiteUsingPUT) | **PUT** /api/contas/{id}/alterar-limites | Alterar limite
[**alterarVencimentoUsingPUT**](ContaApi.md#alterarVencimentoUsingPUT) | **PUT** /api/contas/{id}/alterar-vencimento | Alterar vencimento
[**consultarLimiteDisponibilidadeUsingGET1**](ContaApi.md#consultarLimiteDisponibilidadeUsingGET1) | **GET** /api/contas/{id}/limites-disponibilidades | Apresenta os limites da conta
[**consultarUsingGET1**](ContaApi.md#consultarUsingGET1) | **GET** /api/contas/{id} | Apresenta dados de uma determinada conta
[**gerarCartaoUsingPOST**](ContaApi.md#gerarCartaoUsingPOST) | **POST** /api/contas/{id}/pessoas/{id_pessoa}/gerar-cartao | Realiza a gera\u00C3\u00A7\u00C3\u00A3o de um novo cart\u00C3\u00A3o para impress\u00C3\u00A3o avulsa
[**listarFaturasUsingGET**](ContaApi.md#listarFaturasUsingGET) | **GET** /api/contas/{id_conta}/faturas | Atrav\u00C3\u00A9s desta opera\u00C3\u00A7\u00C3\u00A3o os Emissores ou Portadores poder\u00C3\u00A3o consultar todo o Hist\u00C3\u00B3rico de Faturas vinculados a uma determinada Conta, independentemente do valor delas.
[**listarUsingGET1**](ContaApi.md#listarUsingGET1) | **GET** /api/contas | Lista contas existentes na base de dados do Emissor
[**transacoesUsingPOST**](ContaApi.md#transacoesUsingPOST) | **POST** /api/contas/{id_conta}/transacoes | Permite listar todas as transa\u00C3\u00A7\u00C3\u00B5es da Conta


# **alterarLimiteUsingPUT**
> \br.com.conductor.pier.api.v2.model\Conta alterarLimiteUsingPUT($id, $limite_global, $limite_compra, $limite_parcelado, $limite_parcelas, $limite_saque_global, $limite_saque_periodo, $limite_consignado, $limite_internacional_compra, $limite_internacional_parcelado, $limite_internacional_parcelas, $limite_internacional_saque_global, $limite_internacional_saque_periodo)

Alterar limite

Esse recurso permite realizar a altera\u00C3\u00A7\u00C3\u00A3o dos Limites de uma determinada Conta.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).
$limite_global = new Number(); // Number | Apresenta o valor do limite de cr\u00C3\u00A9dito que o portador do cart\u00C3\u00A3o possui.
$limite_compra = new Number(); // Number | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador possui para uso exclusivo em Compras Nacionais.
$limite_parcelado = new Number(); // Number | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador possui para realizar transa\u00C3\u00A7\u00C3\u00B5es de compras parceladas.
$limite_parcelas = new Number(); // Number | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que portador pode acumular a partir da soma das parcelas das compras que forem realizadas nesta modalidade.
$limite_saque_global = new Number(); // Number | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador pode utilizar para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Nacional.
$limite_saque_periodo = new Number(); // Number | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador pode utilizar para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Nacional dentro de cada ciclo de faturamento.
$limite_consignado = new Number(); // Number | Quando utilizado pelo emissor, este campo apresenta o valor da margem de cr\u00C3\u00A9dito que ele poder\u00C3\u00A1 utilizar para ser cobrado de forma consignada (desconto em folha) em seu sal\u00C3\u00A1rio/vencimentos.
$limite_internacional_compra = new Number(); // Number | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador possui para uso exclusivo em Compras Internacionais.
$limite_internacional_parcelado = new Number(); // Number | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador possui para realizar transa\u00C3\u00A7\u00C3\u00B5es Internacionais de Compras Parceladas.
$limite_internacional_parcelas = new Number(); // Number | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que portador pode acumular a partir da soma das parcelas das compras internacionais que forem realizadas nesta modalidade.
$limite_internacional_saque_global = new Number(); // Number | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador pode utilizar para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Internacional.
$limite_internacional_saque_periodo = new Number(); // Number | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador pode utilizar para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Internacional dentro de cada ciclo de faturamento.

try { 
    $result = $api_instance->alterarLimiteUsingPUT($id, $limite_global, $limite_compra, $limite_parcelado, $limite_parcelas, $limite_saque_global, $limite_saque_periodo, $limite_consignado, $limite_internacional_compra, $limite_internacional_parcelado, $limite_internacional_parcelas, $limite_internacional_saque_global, $limite_internacional_saque_periodo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->alterarLimiteUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | 
 **limite_global** | [**Number**](.md)| Apresenta o valor do limite de cr\u00C3\u00A9dito que o portador do cart\u00C3\u00A3o possui. | 
 **limite_compra** | [**Number**](.md)| Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador possui para uso exclusivo em Compras Nacionais. | 
 **limite_parcelado** | [**Number**](.md)| Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador possui para realizar transa\u00C3\u00A7\u00C3\u00B5es de compras parceladas. | 
 **limite_parcelas** | [**Number**](.md)| Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que portador pode acumular a partir da soma das parcelas das compras que forem realizadas nesta modalidade. | 
 **limite_saque_global** | [**Number**](.md)| Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador pode utilizar para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Nacional. | 
 **limite_saque_periodo** | [**Number**](.md)| Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador pode utilizar para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Nacional dentro de cada ciclo de faturamento. | 
 **limite_consignado** | [**Number**](.md)| Quando utilizado pelo emissor, este campo apresenta o valor da margem de cr\u00C3\u00A9dito que ele poder\u00C3\u00A1 utilizar para ser cobrado de forma consignada (desconto em folha) em seu sal\u00C3\u00A1rio/vencimentos. | 
 **limite_internacional_compra** | [**Number**](.md)| Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador possui para uso exclusivo em Compras Internacionais. | 
 **limite_internacional_parcelado** | [**Number**](.md)| Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador possui para realizar transa\u00C3\u00A7\u00C3\u00B5es Internacionais de Compras Parceladas. | 
 **limite_internacional_parcelas** | [**Number**](.md)| Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que portador pode acumular a partir da soma das parcelas das compras internacionais que forem realizadas nesta modalidade. | 
 **limite_internacional_saque_global** | [**Number**](.md)| Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador pode utilizar para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Internacional. | 
 **limite_internacional_saque_periodo** | [**Number**](.md)| Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador pode utilizar para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Internacional dentro de cada ciclo de faturamento. | 

### Return type

[**\br.com.conductor.pier.api.v2.model\Conta**](Conta.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarVencimentoUsingPUT**
> \br.com.conductor.pier.api.v2.model\Conta alterarVencimentoUsingPUT($id, $novo_dia_vencimento)

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
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).
$novo_dia_vencimento = 56; // int | Novo dia de vencimento.

try { 
    $result = $api_instance->alterarVencimentoUsingPUT($id, $novo_dia_vencimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->alterarVencimentoUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | 
 **novo_dia_vencimento** | **int**| Novo dia de vencimento. | 

### Return type

[**\br.com.conductor.pier.api.v2.model\Conta**](Conta.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarLimiteDisponibilidadeUsingGET1**
> \br.com.conductor.pier.api.v2.model\LimiteDisponibilidade consultarLimiteDisponibilidadeUsingGET1($id)

Apresenta os limites da conta

Este m\u00C3\u00A9todo permite consultar os Limites configurados para uma determinada Conta, a partir do c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o (id).

try { 
    $result = $api_instance->consultarLimiteDisponibilidadeUsingGET1($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->consultarLimiteDisponibilidadeUsingGET1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\LimiteDisponibilidade**](LimiteDisponibilidade.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET1**
> \br.com.conductor.pier.api.v2.model\Conta consultarUsingGET1($id)

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
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).

try { 
    $result = $api_instance->consultarUsingGET1($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->consultarUsingGET1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\Conta**](Conta.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **gerarCartaoUsingPOST**
> \br.com.conductor.pier.api.v2.model\CartaoImpressao gerarCartaoUsingPOST($id, $id_pessoa)

Realiza a gera\u00C3\u00A7\u00C3\u00A3o de um novo cart\u00C3\u00A3o para impress\u00C3\u00A3o avulsa

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).
$id_pessoa = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da pessoa (id).

try { 
    $result = $api_instance->gerarCartaoUsingPOST($id, $id_pessoa);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->gerarCartaoUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | 
 **id_pessoa** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da pessoa (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\CartaoImpressao**](CartaoImpressao.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarFaturasUsingGET**
> \br.com.conductor.pier.api.v2.model\Fatura listarFaturasUsingGET($page, $limit, $id, $data_vencimento)

Atrav\u00C3\u00A9s desta opera\u00C3\u00A7\u00C3\u00A3o os Emissores ou Portadores poder\u00C3\u00A3o consultar todo o Hist\u00C3\u00B3rico de Faturas vinculados a uma determinada Conta, independentemente do valor delas.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100)
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o de conta (id).
$data_vencimento = new \DateTime(); // \DateTime | Data de Vencimento da Fatura.

try { 
    $result = $api_instance->listarFaturasUsingGET($page, $limit, $id, $data_vencimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->listarFaturasUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) | [optional] 
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o de conta (id). | [optional] 
 **data_vencimento** | **\DateTime**| Data de Vencimento da Fatura. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\Fatura**](Fatura.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET1**
> \br.com.conductor.pier.api.v2.model\Conta listarUsingGET1($page, $limit, $id, $id_produto, $id_origem_comercial, $id_pessoa, $id_status_conta, $dia_vencimento, $melhor_dia_compra, $data_status_conta, $data_cadastro, $data_ultima_alteracao_vencimento)

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
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100)
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

try { 
    $result = $api_instance->listarUsingGET1($page, $limit, $id, $id_produto, $id_origem_comercial, $id_pessoa, $id_status_conta, $dia_vencimento, $melhor_dia_compra, $data_status_conta, $data_cadastro, $data_ultima_alteracao_vencimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->listarUsingGET1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) | [optional] 
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

### Return type

[**\br.com.conductor.pier.api.v2.model\Conta**](Conta.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **transacoesUsingPOST**
> \br.com.conductor.pier.api.v2.model\PageTransacaoResponse transacoesUsingPOST($page, $limit, $id_conta)

Permite listar todas as transa\u00C3\u00A7\u00C3\u00B5es da Conta

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100)
$id_conta = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).

try { 
    $result = $api_instance->transacoesUsingPOST($page, $limit, $id_conta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->transacoesUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) | [optional] 
 **id_conta** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTransacaoResponse**](PageTransacaoResponse.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

