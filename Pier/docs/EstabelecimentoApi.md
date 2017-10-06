# br.com.conductor.pier.api.v2.invoker\EstabelecimentoApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**consultarUsingGET11**](EstabelecimentoApi.md#consultarUsingGET11) | **GET** /api/estabelecimentos/{id} | Consultar estabelecimento por id
[**consultarUsingGET21**](EstabelecimentoApi.md#consultarUsingGET21) | **GET** /api/terminais/{id} | Apresenta os dados de um determinado Terminal
[**listarUsingGET14**](EstabelecimentoApi.md#listarUsingGET14) | **GET** /api/estabelecimentos | Lista Estabelecimentos
[**listarUsingGET28**](EstabelecimentoApi.md#listarUsingGET28) | **GET** /api/terminais | Lista os Terminais cadastrados no Emissor


# **consultarUsingGET11**
> \br.com.conductor.pier.api.v2.model\EstabelecimentoResponse consultarUsingGET11($id)

Consultar estabelecimento por id

Consulta os detalhes de um determinado estabelecimento

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | Id

try { 
    $result = $api_instance->consultarUsingGET11($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->consultarUsingGET11: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id | 

### Return type

[**\br.com.conductor.pier.api.v2.model\EstabelecimentoResponse**](EstabelecimentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET21**
> \br.com.conductor.pier.api.v2.model\TerminalResponse consultarUsingGET21($id)

Apresenta os dados de um determinado Terminal

Este m\u00C3\u00A9todo permite consultar um determinado Terminal a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Terminal (id).

try { 
    $result = $api_instance->consultarUsingGET21($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->consultarUsingGET21: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Terminal (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TerminalResponse**](TerminalResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET14**
> \br.com.conductor.pier.api.v2.model\PageEstabelecimentoResponse listarUsingGET14($sort, $page, $limit, $id, $numero_receita_federal, $nome, $descricao, $nome_fantasia, $cep, $nome_logradouro, $numero_endereco, $complemento, $bairro, $cidade, $uf, $pais, $data_cadastramento, $contato, $email, $flag_arquivo_secr_fazenda, $flag_cartao_digitado, $inativo)

Lista Estabelecimentos

Lista todas os Estabelecimentos

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do estabelecimento (id).
$numero_receita_federal = 789; // int | Apresenta o n\u00C3\u00BAmero de identifica\u00C3\u00A7\u00C3\u00A3o do Estabelecimento na Receita Federal.
$nome = "nome_example"; // string | Nome do Estabelecimento.
$descricao = "descricao_example"; // string | Raz\u00C3\u00A3o Social do Estabelecimento.
$nome_fantasia = "nome_fantasia_example"; // string | T\u00C3\u00ADtulo Comercial do Estabelecimento.
$cep = "cep_example"; // string | C\u00C3\u00B3digo de Endere\u00C3\u00A7amento Postal (CEP).
$nome_logradouro = "nome_logradouro_example"; // string | Nome do Logradouro.
$numero_endereco = 789; // int | N\u00C3\u00BAmero do endere\u00C3\u00A7o.
$complemento = "complemento_example"; // string | Descri\u00C3\u00A7\u00C3\u00B5es complementares referente ao endere\u00C3\u00A7o.
$bairro = "bairro_example"; // string | Nome do bairro do endere\u00C3\u00A7o.
$cidade = "cidade_example"; // string | Nome da cidade do endere\u00C3\u00A7o.
$uf = "uf_example"; // string | Sigla de identifica\u00C3\u00A7\u00C3\u00A3o da Unidade Federativa do endere\u00C3\u00A7o.
$pais = "pais_example"; // string | Nome do pa\u00C3\u00ADs.
$data_cadastramento = "data_cadastramento_example"; // string | Data de Cadastro do Estabelecimento, no formato yyyy-MM-dd.
$contato = "contato_example"; // string | Nome da pessoa para contato com o Estabelecimento.
$email = "email_example"; // string | E-mail da pessoa para contato com o Estabelecimento.
$flag_arquivo_secr_fazenda = 56; // int | Indica se o estabelecimento ser\u00C3\u00A1 inclu\u00C3\u00ADdo no arquivo de registro para a Secretaria da Fazenda Estadual.
$flag_cartao_digitado = 56; // int | Indica se o estabelecimento poder\u00C3\u00A1 originar transa\u00C3\u00A7\u00C3\u00B5es sem a leitura da tarja ou do chip do cart\u00C3\u00A3o.
$inativo = 56; // int | Indica se o estabelecimento est\u00C3\u00A1 inativo.

try { 
    $result = $api_instance->listarUsingGET14($sort, $page, $limit, $id, $numero_receita_federal, $nome, $descricao, $nome_fantasia, $cep, $nome_logradouro, $numero_endereco, $complemento, $bairro, $cidade, $uf, $pais, $data_cadastramento, $contato, $email, $flag_arquivo_secr_fazenda, $flag_cartao_digitado, $inativo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->listarUsingGET14: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do estabelecimento (id). | [optional] 
 **numero_receita_federal** | **int**| Apresenta o n\u00C3\u00BAmero de identifica\u00C3\u00A7\u00C3\u00A3o do Estabelecimento na Receita Federal. | [optional] 
 **nome** | **string**| Nome do Estabelecimento. | [optional] 
 **descricao** | **string**| Raz\u00C3\u00A3o Social do Estabelecimento. | [optional] 
 **nome_fantasia** | **string**| T\u00C3\u00ADtulo Comercial do Estabelecimento. | [optional] 
 **cep** | **string**| C\u00C3\u00B3digo de Endere\u00C3\u00A7amento Postal (CEP). | [optional] 
 **nome_logradouro** | **string**| Nome do Logradouro. | [optional] 
 **numero_endereco** | **int**| N\u00C3\u00BAmero do endere\u00C3\u00A7o. | [optional] 
 **complemento** | **string**| Descri\u00C3\u00A7\u00C3\u00B5es complementares referente ao endere\u00C3\u00A7o. | [optional] 
 **bairro** | **string**| Nome do bairro do endere\u00C3\u00A7o. | [optional] 
 **cidade** | **string**| Nome da cidade do endere\u00C3\u00A7o. | [optional] 
 **uf** | **string**| Sigla de identifica\u00C3\u00A7\u00C3\u00A3o da Unidade Federativa do endere\u00C3\u00A7o. | [optional] 
 **pais** | **string**| Nome do pa\u00C3\u00ADs. | [optional] 
 **data_cadastramento** | **string**| Data de Cadastro do Estabelecimento, no formato yyyy-MM-dd. | [optional] 
 **contato** | **string**| Nome da pessoa para contato com o Estabelecimento. | [optional] 
 **email** | **string**| E-mail da pessoa para contato com o Estabelecimento. | [optional] 
 **flag_arquivo_secr_fazenda** | **int**| Indica se o estabelecimento ser\u00C3\u00A1 inclu\u00C3\u00ADdo no arquivo de registro para a Secretaria da Fazenda Estadual. | [optional] 
 **flag_cartao_digitado** | **int**| Indica se o estabelecimento poder\u00C3\u00A1 originar transa\u00C3\u00A7\u00C3\u00B5es sem a leitura da tarja ou do chip do cart\u00C3\u00A3o. | [optional] 
 **inativo** | **int**| Indica se o estabelecimento est\u00C3\u00A1 inativo. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageEstabelecimentoResponse**](PageEstabelecimentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET28**
> \br.com.conductor.pier.api.v2.model\PageTerminalResponse listarUsingGET28($sort, $page, $limit, $id, $terminal, $numero_estabelecimento, $id_estabelecimento)

Lista os Terminais cadastrados no Emissor

Este m\u00C3\u00A9todo permite que sejam listados os terminais existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Terminal (id).
$terminal = "terminal_example"; // string | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do terminal.
$numero_estabelecimento = 789; // int | N\u00C3\u00BAmero do estabelecimento a qual o terminal pertence.
$id_estabelecimento = 789; // int | N\u00C3\u00BAmero de identifica\u00C3\u00A7\u00C3\u00A3o do estabelecimento a qual o terminal pertence.

try { 
    $result = $api_instance->listarUsingGET28($sort, $page, $limit, $id, $terminal, $numero_estabelecimento, $id_estabelecimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->listarUsingGET28: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Terminal (id). | [optional] 
 **terminal** | **string**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do terminal. | [optional] 
 **numero_estabelecimento** | **int**| N\u00C3\u00BAmero do estabelecimento a qual o terminal pertence. | [optional] 
 **id_estabelecimento** | **int**| N\u00C3\u00BAmero de identifica\u00C3\u00A7\u00C3\u00A3o do estabelecimento a qual o terminal pertence. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTerminalResponse**](PageTerminalResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

