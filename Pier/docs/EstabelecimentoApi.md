# br.com.conductor.pier.api.v2.invoker\EstabelecimentoApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarUsingPUT10**](EstabelecimentoApi.md#alterarUsingPUT10) | **PUT** /api/pessoas-juridicas/{id} | Alterar Pessoa Jur\u00C3\u00ADdica
[**alterarUsingPUT13**](EstabelecimentoApi.md#alterarUsingPUT13) | **PUT** /api/terminais/{id} | Altera um Terminal
[**cadastrarUsingPOST2**](EstabelecimentoApi.md#cadastrarUsingPOST2) | **POST** /api/pessoas-juridicas | Cadastrar Pessoa Jur\u00C3\u00ADdica
[**consultarUsingGET14**](EstabelecimentoApi.md#consultarUsingGET14) | **GET** /api/estabelecimentos/{id} | Consultar estabelecimento por id
[**consultarUsingGET19**](EstabelecimentoApi.md#consultarUsingGET19) | **GET** /api/pessoas-juridicas/{id} | Consultar pessoa jur\u00C3\u00ADdica
[**consultarUsingGET26**](EstabelecimentoApi.md#consultarUsingGET26) | **GET** /api/terminais/{id} | Apresenta os dados de um determinado Terminal
[**listarUsingGET18**](EstabelecimentoApi.md#listarUsingGET18) | **GET** /api/estabelecimentos | Lista Estabelecimentos
[**listarUsingGET23**](EstabelecimentoApi.md#listarUsingGET23) | **GET** /api/pessoas-juridicas | Listar pessoas jur\u00C3\u00ADdicas
[**listarUsingGET33**](EstabelecimentoApi.md#listarUsingGET33) | **GET** /api/terminais | Lista os Terminais cadastrados no Emissor
[**salvarUsingPOST20**](EstabelecimentoApi.md#salvarUsingPOST20) | **POST** /api/terminais | Realiza o cadastro de um novo Terminal


# **alterarUsingPUT10**
> \br.com.conductor.pier.api.v2.model\PessoaJuridicaResponse alterarUsingPUT10($id, $razao_social, $inscricao_estadual, $contato, $banco, $agencia, $digito_verificador_agencia, $conta_corrente, $digito_verificador_conta_corrente)

Alterar Pessoa Jur\u00C3\u00ADdica

Altera uma pessoa jur\u00C3\u00ADdica.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da pessoa jur\u00C3\u00ADdica
$razao_social = "razao_social_example"; // string | Raz\u00C3\u00A3o social da pessoa jur\u00C3\u00ADdica
$inscricao_estadual = "inscricao_estadual_example"; // string | N\u00C3\u00BAmero da inscri\u00C3\u00A7\u00C3\u00A3o estadual
$contato = "contato_example"; // string | Nome da pessoa para entrar em contato
$banco = 56; // int | C\u00C3\u00B3digo do banco
$agencia = 56; // int | Raz\u00C3\u00A3o social da pessoa jur\u00C3\u00ADdica
$digito_verificador_agencia = "digito_verificador_agencia_example"; // string | D\u00C3\u00ADgito Verificador da ag\u00C3\u00AAncia
$conta_corrente = "conta_corrente_example"; // string | C\u00C3\u00B3digo da Conta Corrente
$digito_verificador_conta_corrente = "digito_verificador_conta_corrente_example"; // string | D\u00C3\u00ADgito Verificador da Conta Corrente

try { 
    $result = $api_instance->alterarUsingPUT10($id, $razao_social, $inscricao_estadual, $contato, $banco, $agencia, $digito_verificador_agencia, $conta_corrente, $digito_verificador_conta_corrente);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->alterarUsingPUT10: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da pessoa jur\u00C3\u00ADdica | 
 **razao_social** | **string**| Raz\u00C3\u00A3o social da pessoa jur\u00C3\u00ADdica | 
 **inscricao_estadual** | **string**| N\u00C3\u00BAmero da inscri\u00C3\u00A7\u00C3\u00A3o estadual | [optional] 
 **contato** | **string**| Nome da pessoa para entrar em contato | [optional] 
 **banco** | **int**| C\u00C3\u00B3digo do banco | [optional] 
 **agencia** | **int**| Raz\u00C3\u00A3o social da pessoa jur\u00C3\u00ADdica | [optional] 
 **digito_verificador_agencia** | **string**| D\u00C3\u00ADgito Verificador da ag\u00C3\u00AAncia | [optional] 
 **conta_corrente** | **string**| C\u00C3\u00B3digo da Conta Corrente | [optional] 
 **digito_verificador_conta_corrente** | **string**| D\u00C3\u00ADgito Verificador da Conta Corrente | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PessoaJuridicaResponse**](PessoaJuridicaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarUsingPUT13**
> \br.com.conductor.pier.api.v2.model\TerminalResponse alterarUsingPUT13($id, $terminal_update)

Altera um Terminal

Este m\u00C3\u00A9todo realiza a altera\u00C3\u00A7\u00C3\u00A3o dos Terminais.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do terminal (id).
$terminal_update = new \br.com.conductor.pier.api.v2.model\TerminalUpdate(); // \br.com.conductor.pier.api.v2.model\TerminalUpdate | terminalUpdate

try { 
    $result = $api_instance->alterarUsingPUT13($id, $terminal_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->alterarUsingPUT13: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do terminal (id). | 
 **terminal_update** | [**\br.com.conductor.pier.api.v2.model\TerminalUpdate**](\br.com.conductor.pier.api.v2.model\TerminalUpdate.md)| terminalUpdate | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TerminalResponse**](TerminalResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **cadastrarUsingPOST2**
> \br.com.conductor.pier.api.v2.model\PessoaJuridicaResponse cadastrarUsingPOST2($razao_social, $cnpj, $inscricao_estadual, $contato, $banco, $agencia, $digito_verificador_agencia, $conta_corrente, $digito_verificador_conta_corrente)

Cadastrar Pessoa Jur\u00C3\u00ADdica

Cadastra uma pessoa jur\u00C3\u00ADdica.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$razao_social = "razao_social_example"; // string | Raz\u00C3\u00A3o social da pessoa jur\u00C3\u00ADdica
$cnpj = "cnpj_example"; // string | C\u00C3\u00B3digo do Cadastro Nacional de Pessoas Jur\u00C3\u00ADdicas
$inscricao_estadual = "inscricao_estadual_example"; // string | N\u00C3\u00BAmero da inscri\u00C3\u00A7\u00C3\u00A3o estadual
$contato = "contato_example"; // string | Nome da pessoa para entrar em contato
$banco = 56; // int | C\u00C3\u00B3digo do banco
$agencia = 56; // int | Raz\u00C3\u00A3o social da pessoa jur\u00C3\u00ADdica
$digito_verificador_agencia = "digito_verificador_agencia_example"; // string | D\u00C3\u00ADgito Verificador da ag\u00C3\u00AAncia
$conta_corrente = "conta_corrente_example"; // string | C\u00C3\u00B3digo da Conta Corrente
$digito_verificador_conta_corrente = "digito_verificador_conta_corrente_example"; // string | D\u00C3\u00ADgito Verificador da Conta Corrente

try { 
    $result = $api_instance->cadastrarUsingPOST2($razao_social, $cnpj, $inscricao_estadual, $contato, $banco, $agencia, $digito_verificador_agencia, $conta_corrente, $digito_verificador_conta_corrente);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->cadastrarUsingPOST2: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **razao_social** | **string**| Raz\u00C3\u00A3o social da pessoa jur\u00C3\u00ADdica | 
 **cnpj** | **string**| C\u00C3\u00B3digo do Cadastro Nacional de Pessoas Jur\u00C3\u00ADdicas | 
 **inscricao_estadual** | **string**| N\u00C3\u00BAmero da inscri\u00C3\u00A7\u00C3\u00A3o estadual | [optional] 
 **contato** | **string**| Nome da pessoa para entrar em contato | [optional] 
 **banco** | **int**| C\u00C3\u00B3digo do banco | [optional] 
 **agencia** | **int**| Raz\u00C3\u00A3o social da pessoa jur\u00C3\u00ADdica | [optional] 
 **digito_verificador_agencia** | **string**| D\u00C3\u00ADgito Verificador da ag\u00C3\u00AAncia | [optional] 
 **conta_corrente** | **string**| C\u00C3\u00B3digo da Conta Corrente | [optional] 
 **digito_verificador_conta_corrente** | **string**| D\u00C3\u00ADgito Verificador da Conta Corrente | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PessoaJuridicaResponse**](PessoaJuridicaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET14**
> \br.com.conductor.pier.api.v2.model\EstabelecimentoResponse consultarUsingGET14($id)

Consultar estabelecimento por id

Consulta os detalhes de um determinado estabelecimento

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | Id

try { 
    $result = $api_instance->consultarUsingGET14($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->consultarUsingGET14: ', $e->getMessage(), "\n";
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

# **consultarUsingGET19**
> \br.com.conductor.pier.api.v2.model\PessoaJuridicaResponse consultarUsingGET19($id)

Consultar pessoa jur\u00C3\u00ADdica

Consulta uma pessoa jur\u00C3\u00ADdica atrav\u00C3\u00A9s do seu identificador.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da pessoa jur\u00C3\u00ADdica

try { 
    $result = $api_instance->consultarUsingGET19($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->consultarUsingGET19: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da pessoa jur\u00C3\u00ADdica | 

### Return type

[**\br.com.conductor.pier.api.v2.model\PessoaJuridicaResponse**](PessoaJuridicaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET26**
> \br.com.conductor.pier.api.v2.model\TerminalResponse consultarUsingGET26($id)

Apresenta os dados de um determinado Terminal

Este m\u00C3\u00A9todo permite consultar um determinado Terminal a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Terminal (id).

try { 
    $result = $api_instance->consultarUsingGET26($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->consultarUsingGET26: ', $e->getMessage(), "\n";
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

# **listarUsingGET18**
> \br.com.conductor.pier.api.v2.model\PageEstabelecimentoResponse listarUsingGET18($sort, $page, $limit, $id, $numero_receita_federal, $nome, $descricao, $nome_fantasia, $cep, $nome_logradouro, $numero_endereco, $complemento, $bairro, $cidade, $uf, $pais, $data_cadastramento, $contato, $email, $flag_arquivo_secr_fazenda, $flag_cartao_digitado, $inativo)

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
    $result = $api_instance->listarUsingGET18($sort, $page, $limit, $id, $numero_receita_federal, $nome, $descricao, $nome_fantasia, $cep, $nome_logradouro, $numero_endereco, $complemento, $bairro, $cidade, $uf, $pais, $data_cadastramento, $contato, $email, $flag_arquivo_secr_fazenda, $flag_cartao_digitado, $inativo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->listarUsingGET18: ', $e->getMessage(), "\n";
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

# **listarUsingGET23**
> \br.com.conductor.pier.api.v2.model\PagePessoaJuridicaResponse listarUsingGET23($sort, $page, $limit, $razao_social, $cnpj, $inscricao_estadual, $contato, $banco, $agencia, $digito_verificador_agencia, $conta_corrente, $digito_verificador_conta_corrente)

Listar pessoas jur\u00C3\u00ADdicas

Lista pessoas jur\u00C3\u00ADdicas cadastradas. 

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$razao_social = "razao_social_example"; // string | Raz\u00C3\u00A3o social da pessoa jur\u00C3\u00ADdica
$cnpj = "cnpj_example"; // string | C\u00C3\u00B3digo do Cadastro Nacional de Pessoas Jur\u00C3\u00ADdicas
$inscricao_estadual = "inscricao_estadual_example"; // string | N\u00C3\u00BAmero da inscri\u00C3\u00A7\u00C3\u00A3o estadual
$contato = "contato_example"; // string | Nome da pessoa para entrar em contato
$banco = 56; // int | C\u00C3\u00B3digo do banco
$agencia = 56; // int | Raz\u00C3\u00A3o social da pessoa jur\u00C3\u00ADdica
$digito_verificador_agencia = "digito_verificador_agencia_example"; // string | D\u00C3\u00ADgito Verificador da ag\u00C3\u00AAncia
$conta_corrente = "conta_corrente_example"; // string | C\u00C3\u00B3digo da Conta Corrente
$digito_verificador_conta_corrente = "digito_verificador_conta_corrente_example"; // string | D\u00C3\u00ADgito Verificador da Conta Corrente

try { 
    $result = $api_instance->listarUsingGET23($sort, $page, $limit, $razao_social, $cnpj, $inscricao_estadual, $contato, $banco, $agencia, $digito_verificador_agencia, $conta_corrente, $digito_verificador_conta_corrente);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->listarUsingGET23: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **razao_social** | **string**| Raz\u00C3\u00A3o social da pessoa jur\u00C3\u00ADdica | [optional] 
 **cnpj** | **string**| C\u00C3\u00B3digo do Cadastro Nacional de Pessoas Jur\u00C3\u00ADdicas | [optional] 
 **inscricao_estadual** | **string**| N\u00C3\u00BAmero da inscri\u00C3\u00A7\u00C3\u00A3o estadual | [optional] 
 **contato** | **string**| Nome da pessoa para entrar em contato | [optional] 
 **banco** | **int**| C\u00C3\u00B3digo do banco | [optional] 
 **agencia** | **int**| Raz\u00C3\u00A3o social da pessoa jur\u00C3\u00ADdica | [optional] 
 **digito_verificador_agencia** | **string**| D\u00C3\u00ADgito Verificador da ag\u00C3\u00AAncia | [optional] 
 **conta_corrente** | **string**| C\u00C3\u00B3digo da Conta Corrente | [optional] 
 **digito_verificador_conta_corrente** | **string**| D\u00C3\u00ADgito Verificador da Conta Corrente | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PagePessoaJuridicaResponse**](PagePessoaJuridicaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET33**
> \br.com.conductor.pier.api.v2.model\PageTerminalResponse listarUsingGET33($sort, $page, $limit, $id, $terminal, $numero_estabelecimento, $id_estabelecimento)

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
    $result = $api_instance->listarUsingGET33($sort, $page, $limit, $id, $terminal, $numero_estabelecimento, $id_estabelecimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->listarUsingGET33: ', $e->getMessage(), "\n";
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

# **salvarUsingPOST20**
> \br.com.conductor.pier.api.v2.model\TerminalResponse salvarUsingPOST20($id_estabelecimento, $flag_consulta_extrato, $flag_terminal_virtual)

Realiza o cadastro de um novo Terminal

Este m\u00C3\u00A9todo permite que seja cadastrado um novo Terminal.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id_estabelecimento = 789; // int | Apresenta o id do estabelecimento.
$flag_consulta_extrato = true; // bool | Flag indicando se o terminal \u00C3\u00A9 f\u00C3\u00ADsico ou virtual, sendo: (true: Sim), (false: N\u00C3\u00A3o)).
$flag_terminal_virtual = true; // bool | Flag indicando se o terminal permite consultar extrato, sendo: (true: Sim), (false: N\u00C3\u00A3o)).

try { 
    $result = $api_instance->salvarUsingPOST20($id_estabelecimento, $flag_consulta_extrato, $flag_terminal_virtual);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->salvarUsingPOST20: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_estabelecimento** | **int**| Apresenta o id do estabelecimento. | 
 **flag_consulta_extrato** | **bool**| Flag indicando se o terminal \u00C3\u00A9 f\u00C3\u00ADsico ou virtual, sendo: (true: Sim), (false: N\u00C3\u00A3o)). | 
 **flag_terminal_virtual** | **bool**| Flag indicando se o terminal permite consultar extrato, sendo: (true: Sim), (false: N\u00C3\u00A3o)). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TerminalResponse**](TerminalResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

