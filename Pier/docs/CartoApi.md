# br.com.conductor.pier.api.v1_1.invoker\CartoApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**consultarUsingGET**](CartoApi.md#consultarUsingGET) | **GET** /api/cartoes/{id_cartao} | Apresenta os dados de um determinado Cart\u00C3\u00A3o
[**listarUsingGET**](CartoApi.md#listarUsingGET) | **GET** /api/cartoes | Lista os Cart\u00C3\u00B5es gerados pelo Emissor


# **consultarUsingGET**
> \br.com.conductor.pier.api.v1_1.model\OrigemComercial consultarUsingGET($id_cartao)

Apresenta os dados de um determinado Cart\u00C3\u00A3o

Este m\u00C3\u00A9todo permite consultar as informa\u00C3\u00A7\u00C3\u00B5es b\u00C3\u00A1sicas de um determinado Cart\u00C3\u00A3o a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v1_1.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v1_1.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v1_1.invoker\Api\CartoApi();
$id_cartao = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o (id).

try { 
    $result = $api_instance->consultarUsingGET($id_cartao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartoApi->consultarUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_cartao** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o (id). | 

### Return type

[**\br.com.conductor.pier.api.v1_1.model\OrigemComercial**](OrigemComercial.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET**
> \br.com.conductor.pier.api.v1_1.model\ListaDeCartEs listarUsingGET($id_cartao, $id_status_cartao, $id_estagio_cartao, $id_conta, $id_pessoa, $portador, $numero_cartao, $data_geracao, $data_status_cartao, $data_estagio_cartao, $data_validade, $data_impressao, $arquivo_impressao, $flag_impressao_origem_comercial, $flag_provisorio, $codigo_desbloqueio, $page, $limit)

Lista os Cart\u00C3\u00B5es gerados pelo Emissor

Este m\u00C3\u00A9todo permite que sejam listados os cart\u00C3\u00B5es existentes na base do emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v1_1.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v1_1.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v1_1.invoker\Api\CartoApi();
$id_cartao = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o (id).
$id_status_cartao = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Status do Cart\u00C3\u00A3o (id).
$id_estagio_cartao = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Est\u00C3\u00A1gio de Impress\u00C3\u00A3o do Cart\u00C3\u00A3o (id).
$id_conta = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Conta a qual o cart\u00C3\u00A3o pertence (id).
$id_pessoa = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Pessoa a qual o cart\u00C3\u00A3o pertence (id).
$portador = 56; // int | Indica qual \u00C3\u00A9 a rela\u00C3\u00A7\u00C3\u00A3o do portador do cart\u00C3\u00A3o com a conta. Quando \u00E2\u0080\u00981\u00E2\u0080\u0099, corresponde ao seu titular. Quando diferente disso, corresponde a um cart\u00C3\u00A3o adicional.
$numero_cartao = "numero_cartao_example"; // string | Apresenta o n\u00C3\u00BAmero do cart\u00C3\u00A3o.
$data_geracao = "data_geracao_example"; // string | Apresenta a data em que o cart\u00C3\u00A3o foi gerado.
$data_status_cartao = "data_status_cartao_example"; // string | Apresenta a data em que o idStatusCartao atual do cart\u00C3\u00A3o fora aplicado, quando houver.
$data_estagio_cartao = "data_estagio_cartao_example"; // string | Apresenta a data em que o idEstagioCartao atual do cart\u00C3\u00A3o fora aplicado, quando houver.
$data_validade = "data_validade_example"; // string | Apresenta a data de validade do cart\u00C3\u00A3o em formato AAAA-MM, quando houver.
$data_impressao = "data_impressao_example"; // string | Apresenta a data em que o cart\u00C3\u00A3o fora impresso, caso impress\u00C3\u00A3o em loja, ou a data em que ele fora inclu\u00C3\u00ADdo no arquivo para impress\u00C3\u00A3o via gr\u00C3\u00A1fica.
$arquivo_impressao = "arquivo_impressao_example"; // string | Apresenta o nome do arquivo onde o cart\u00C3\u00A3o fora inclu\u00C3\u00ADdo para impress\u00C3\u00A3o por uma gr\u00C3\u00A1fica, quando houver.
$flag_impressao_origem_comercial = 56; // int | Quando ativa, indica que o cart\u00C3\u00A3o fora impresso na Origem Comercial.
$flag_provisorio = 56; // int | Quando ativa, indica que o cart\u00C3\u00A3o \u00C3\u00A9 provis\u00C3\u00B3rio. Ou seja, \u00C3\u00A9 um cart\u00C3\u00A3o para uso tempor\u00C3\u00A1rio quando se deseja permitir que o cliente transacione sem que ele tenha recebido um cart\u00C3\u00A3o definitivo.
$codigo_desbloqueio = "codigo_desbloqueio_example"; // string | Apresenta um c\u00C3\u00B3digo espec\u00C3\u00ADfico para ser utilizado como vari\u00C3\u00A1vel no processo de desbloqueio do cart\u00C3\u00A3o para emissores que querem usar esta funcionalidade.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100)

try { 
    $result = $api_instance->listarUsingGET($id_cartao, $id_status_cartao, $id_estagio_cartao, $id_conta, $id_pessoa, $portador, $numero_cartao, $data_geracao, $data_status_cartao, $data_estagio_cartao, $data_validade, $data_impressao, $arquivo_impressao, $flag_impressao_origem_comercial, $flag_provisorio, $codigo_desbloqueio, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartoApi->listarUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_cartao** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o (id). | [optional] 
 **id_status_cartao** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Status do Cart\u00C3\u00A3o (id). | [optional] 
 **id_estagio_cartao** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Est\u00C3\u00A1gio de Impress\u00C3\u00A3o do Cart\u00C3\u00A3o (id). | [optional] 
 **id_conta** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Conta a qual o cart\u00C3\u00A3o pertence (id). | [optional] 
 **id_pessoa** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Pessoa a qual o cart\u00C3\u00A3o pertence (id). | [optional] 
 **portador** | **int**| Indica qual \u00C3\u00A9 a rela\u00C3\u00A7\u00C3\u00A3o do portador do cart\u00C3\u00A3o com a conta. Quando \u00E2\u0080\u00981\u00E2\u0080\u0099, corresponde ao seu titular. Quando diferente disso, corresponde a um cart\u00C3\u00A3o adicional. | [optional] 
 **numero_cartao** | **string**| Apresenta o n\u00C3\u00BAmero do cart\u00C3\u00A3o. | [optional] 
 **data_geracao** | **string**| Apresenta a data em que o cart\u00C3\u00A3o foi gerado. | [optional] 
 **data_status_cartao** | **string**| Apresenta a data em que o idStatusCartao atual do cart\u00C3\u00A3o fora aplicado, quando houver. | [optional] 
 **data_estagio_cartao** | **string**| Apresenta a data em que o idEstagioCartao atual do cart\u00C3\u00A3o fora aplicado, quando houver. | [optional] 
 **data_validade** | **string**| Apresenta a data de validade do cart\u00C3\u00A3o em formato AAAA-MM, quando houver. | [optional] 
 **data_impressao** | **string**| Apresenta a data em que o cart\u00C3\u00A3o fora impresso, caso impress\u00C3\u00A3o em loja, ou a data em que ele fora inclu\u00C3\u00ADdo no arquivo para impress\u00C3\u00A3o via gr\u00C3\u00A1fica. | [optional] 
 **arquivo_impressao** | **string**| Apresenta o nome do arquivo onde o cart\u00C3\u00A3o fora inclu\u00C3\u00ADdo para impress\u00C3\u00A3o por uma gr\u00C3\u00A1fica, quando houver. | [optional] 
 **flag_impressao_origem_comercial** | **int**| Quando ativa, indica que o cart\u00C3\u00A3o fora impresso na Origem Comercial. | [optional] 
 **flag_provisorio** | **int**| Quando ativa, indica que o cart\u00C3\u00A3o \u00C3\u00A9 provis\u00C3\u00B3rio. Ou seja, \u00C3\u00A9 um cart\u00C3\u00A3o para uso tempor\u00C3\u00A1rio quando se deseja permitir que o cliente transacione sem que ele tenha recebido um cart\u00C3\u00A3o definitivo. | [optional] 
 **codigo_desbloqueio** | **string**| Apresenta um c\u00C3\u00B3digo espec\u00C3\u00ADfico para ser utilizado como vari\u00C3\u00A1vel no processo de desbloqueio do cart\u00C3\u00A3o para emissores que querem usar esta funcionalidade. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v1_1.model\ListaDeCartEs**](ListaDeCartEs.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

