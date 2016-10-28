# br.com.conductor.pier.api.v2.invoker\EnderecoApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarUsingPUT**](EnderecoApi.md#alterarUsingPUT) | **PUT** /api/enderecos | Atualiza os dados de um determinado Endere\u00C3\u00A7o
[**consultarUsingGET2**](EnderecoApi.md#consultarUsingGET2) | **GET** /api/enderecos/{id_endereco} | Apresenta os dados de um determinado Endere\u00C3\u00A7o
[**listarUsingGET2**](EnderecoApi.md#listarUsingGET2) | **GET** /api/enderecos | Lista os Endere\u00C3\u00A7os cadastrados para o Emissor
[**salvarUsingPOST**](EnderecoApi.md#salvarUsingPOST) | **POST** /api/enderecos | Realiza o cadastro de um novo Endere\u00C3\u00A7o


# **alterarUsingPUT**
> \br.com.conductor.pier.api.v2.model\Endereco alterarUsingPUT($id, $id_pessoa, $id_tipo_endereco, $cep, $logradouro, $numero, $complemento, $ponto_referencia, $bairro, $cidade, $uf, $pais)

Atualiza os dados de um determinado Endere\u00C3\u00A7o

Este m\u00C3\u00A9todo permite que seja alterado na base do emissor um ou mais registros ligados a um determinado Endere\u00C3\u00A7o.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EnderecoApi();
$id = 789; // int | id
$id_pessoa = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Pessoa a qual o endere\u00C3\u00A7o pertence (id)
$id_tipo_endereco = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Tipo Endere\u00C3\u00A7o (id)
$cep = "cep_example"; // string | Apresenta o C\u00C3\u00B3digo de Endere\u00C3\u00A7amento Postal (CEP) no formaro '58800000'
$logradouro = "logradouro_example"; // string | Apresenta o nome do Logradouro
$numero = 56; // int | Apresenta o n\u00C3\u00BAmero do endere\u00C3\u00A7o
$complemento = "complemento_example"; // string | Apresenta descri\u00C3\u00A7oes complementares referente ao endere\u00C3\u00A7o
$ponto_referencia = "ponto_referencia_example"; // string | Apresenta a descri\u00C3\u00A7\u00C3\u00A3o de ponto de refer\u00C3\u00AAncia do endere\u00C3\u00A7o
$bairro = "bairro_example"; // string | Apresenta nome do bairro
$cidade = "cidade_example"; // string | Apresenta nome da cidade
$uf = "uf_example"; // string | Apresenta sigla da Unidade Federativa
$pais = "pais_example"; // string | Apresenta nome do Pais

try { 
    $result = $api_instance->alterarUsingPUT($id, $id_pessoa, $id_tipo_endereco, $cep, $logradouro, $numero, $complemento, $ponto_referencia, $bairro, $cidade, $uf, $pais);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnderecoApi->alterarUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id | 
 **id_pessoa** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Pessoa a qual o endere\u00C3\u00A7o pertence (id) | [optional] 
 **id_tipo_endereco** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Tipo Endere\u00C3\u00A7o (id) | [optional] 
 **cep** | **string**| Apresenta o C\u00C3\u00B3digo de Endere\u00C3\u00A7amento Postal (CEP) no formaro &#39;58800000&#39; | [optional] 
 **logradouro** | **string**| Apresenta o nome do Logradouro | [optional] 
 **numero** | **int**| Apresenta o n\u00C3\u00BAmero do endere\u00C3\u00A7o | [optional] 
 **complemento** | **string**| Apresenta descri\u00C3\u00A7oes complementares referente ao endere\u00C3\u00A7o | [optional] 
 **ponto_referencia** | **string**| Apresenta a descri\u00C3\u00A7\u00C3\u00A3o de ponto de refer\u00C3\u00AAncia do endere\u00C3\u00A7o | [optional] 
 **bairro** | **string**| Apresenta nome do bairro | [optional] 
 **cidade** | **string**| Apresenta nome da cidade | [optional] 
 **uf** | **string**| Apresenta sigla da Unidade Federativa | [optional] 
 **pais** | **string**| Apresenta nome do Pais | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\Endereco**](Endereco.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET2**
> \br.com.conductor.pier.api.v2.model\Endereco consultarUsingGET2($id_endereco)

Apresenta os dados de um determinado Endere\u00C3\u00A7o

Este m\u00C3\u00A9todo permite consultar um determinado Endere\u00C3\u00A7o a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EnderecoApi();
$id_endereco = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Endere\u00C3\u00A7o (id).

try { 
    $result = $api_instance->consultarUsingGET2($id_endereco);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnderecoApi->consultarUsingGET2: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_endereco** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Endere\u00C3\u00A7o (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\Endereco**](Endereco.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET2**
> \br.com.conductor.pier.api.v2.model\PageEnderecos listarUsingGET2($id, $id_pessoa, $id_tipo_endereco, $cep, $logradouro, $numero, $complemento, $ponto_referencia, $bairro, $cidade, $uf, $pais, $data_inclusao, $data_ultima_atualizacao, $page, $limit)

Lista os Endere\u00C3\u00A7os cadastrados para o Emissor

Este m\u00C3\u00A9todo permite que sejam listados os Endere\u00C3\u00A7os existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EnderecoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Endere\u00C3\u00A7o (id).
$id_pessoa = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Pessoa a qual o endere\u00C3\u00A7o pertence (id)
$id_tipo_endereco = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Tipo Endere\u00C3\u00A7o (id)
$cep = "cep_example"; // string | Apresenta o C\u00C3\u00B3digo de Endere\u00C3\u00A7amento Postal (CEP)
$logradouro = "logradouro_example"; // string | Apresenta o nome do Logradouro
$numero = 56; // int | Apresenta o n\u00C3\u00BAmero do endere\u00C3\u00A7o
$complemento = "complemento_example"; // string | Apresenta descri\u00C3\u00A7oes complementares referente ao endere\u00C3\u00A7o
$ponto_referencia = "ponto_referencia_example"; // string | Apresenta a descri\u00C3\u00A7\u00C3\u00A3o de ponto de refer\u00C3\u00AAncia do endere\u00C3\u00A7o
$bairro = "bairro_example"; // string | Apresenta nome do bairro
$cidade = "cidade_example"; // string | Apresenta nome da cidade
$uf = "uf_example"; // string | Apresenta sigla da Unidade Federativa
$pais = "pais_example"; // string | Apresenta nome do Pais
$data_inclusao = new \DateTime(); // \DateTime | Apresenta a data em que fora cadastrado o Endere\u00C3\u00A7o
$data_ultima_atualizacao = new \DateTime(); // \DateTime | Data em que fora realizada a \u00C3\u00BAltima mudan\u00C3\u00A7a neste registro de endere\u00C3\u00A7o. Quando n\u00C3\u00A3o tiver ocorrido mudan\u00C3\u00A7a, conter\u00C3\u00A1 a mesma informa\u00C3\u00A7\u00C3\u00A3o que o campo dataInclusao
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100)

try { 
    $result = $api_instance->listarUsingGET2($id, $id_pessoa, $id_tipo_endereco, $cep, $logradouro, $numero, $complemento, $ponto_referencia, $bairro, $cidade, $uf, $pais, $data_inclusao, $data_ultima_atualizacao, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnderecoApi->listarUsingGET2: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Endere\u00C3\u00A7o (id). | [optional] 
 **id_pessoa** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Pessoa a qual o endere\u00C3\u00A7o pertence (id) | [optional] 
 **id_tipo_endereco** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Tipo Endere\u00C3\u00A7o (id) | [optional] 
 **cep** | **string**| Apresenta o C\u00C3\u00B3digo de Endere\u00C3\u00A7amento Postal (CEP) | [optional] 
 **logradouro** | **string**| Apresenta o nome do Logradouro | [optional] 
 **numero** | **int**| Apresenta o n\u00C3\u00BAmero do endere\u00C3\u00A7o | [optional] 
 **complemento** | **string**| Apresenta descri\u00C3\u00A7oes complementares referente ao endere\u00C3\u00A7o | [optional] 
 **ponto_referencia** | **string**| Apresenta a descri\u00C3\u00A7\u00C3\u00A3o de ponto de refer\u00C3\u00AAncia do endere\u00C3\u00A7o | [optional] 
 **bairro** | **string**| Apresenta nome do bairro | [optional] 
 **cidade** | **string**| Apresenta nome da cidade | [optional] 
 **uf** | **string**| Apresenta sigla da Unidade Federativa | [optional] 
 **pais** | **string**| Apresenta nome do Pais | [optional] 
 **data_inclusao** | **\DateTime**| Apresenta a data em que fora cadastrado o Endere\u00C3\u00A7o | [optional] 
 **data_ultima_atualizacao** | **\DateTime**| Data em que fora realizada a \u00C3\u00BAltima mudan\u00C3\u00A7a neste registro de endere\u00C3\u00A7o. Quando n\u00C3\u00A3o tiver ocorrido mudan\u00C3\u00A7a, conter\u00C3\u00A1 a mesma informa\u00C3\u00A7\u00C3\u00A3o que o campo dataInclusao | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageEnderecos**](PageEnderecos.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST**
> \br.com.conductor.pier.api.v2.model\Endereco salvarUsingPOST($id_pessoa, $id_tipo_endereco, $cep, $logradouro, $numero, $complemento, $ponto_referencia, $bairro, $cidade, $uf, $pais)

Realiza o cadastro de um novo Endere\u00C3\u00A7o

Este m\u00C3\u00A9todo permite que seja cadastrado um novo Endere\u00C3\u00A7o na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EnderecoApi();
$id_pessoa = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Pessoa a qual o endere\u00C3\u00A7o pertence (id)
$id_tipo_endereco = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Tipo Endere\u00C3\u00A7o (id)
$cep = "cep_example"; // string | Apresenta o C\u00C3\u00B3digo de Endere\u00C3\u00A7amento Postal (CEP) no formaro '58800000'
$logradouro = "logradouro_example"; // string | Apresenta o nome do Logradouro
$numero = 56; // int | Apresenta o n\u00C3\u00BAmero do endere\u00C3\u00A7o
$complemento = "complemento_example"; // string | Apresenta descri\u00C3\u00A7oes complementares referente ao endere\u00C3\u00A7o
$ponto_referencia = "ponto_referencia_example"; // string | Apresenta a descri\u00C3\u00A7\u00C3\u00A3o de ponto de refer\u00C3\u00AAncia do endere\u00C3\u00A7o
$bairro = "bairro_example"; // string | Apresenta nome do bairro
$cidade = "cidade_example"; // string | Apresenta nome da cidade
$uf = "uf_example"; // string | Apresenta sigla da Unidade Federativa
$pais = "pais_example"; // string | Apresenta nome do Pais

try { 
    $result = $api_instance->salvarUsingPOST($id_pessoa, $id_tipo_endereco, $cep, $logradouro, $numero, $complemento, $ponto_referencia, $bairro, $cidade, $uf, $pais);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnderecoApi->salvarUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_pessoa** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Pessoa a qual o endere\u00C3\u00A7o pertence (id) | [optional] 
 **id_tipo_endereco** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Tipo Endere\u00C3\u00A7o (id) | [optional] 
 **cep** | **string**| Apresenta o C\u00C3\u00B3digo de Endere\u00C3\u00A7amento Postal (CEP) no formaro &#39;58800000&#39; | [optional] 
 **logradouro** | **string**| Apresenta o nome do Logradouro | [optional] 
 **numero** | **int**| Apresenta o n\u00C3\u00BAmero do endere\u00C3\u00A7o | [optional] 
 **complemento** | **string**| Apresenta descri\u00C3\u00A7oes complementares referente ao endere\u00C3\u00A7o | [optional] 
 **ponto_referencia** | **string**| Apresenta a descri\u00C3\u00A7\u00C3\u00A3o de ponto de refer\u00C3\u00AAncia do endere\u00C3\u00A7o | [optional] 
 **bairro** | **string**| Apresenta nome do bairro | [optional] 
 **cidade** | **string**| Apresenta nome da cidade | [optional] 
 **uf** | **string**| Apresenta sigla da Unidade Federativa | [optional] 
 **pais** | **string**| Apresenta nome do Pais | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\Endereco**](Endereco.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

