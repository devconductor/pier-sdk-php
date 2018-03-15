# br.com.conductor.pier.api.v2.invoker\CadastroClienteApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarUsingPUT**](CadastroClienteApi.md#alterarUsingPUT) | **PUT** /api/contas/{id}/adicionais/{idPessoa} | Altera Adicional de uma Conta
[**alterarUsingPUT13**](CadastroClienteApi.md#alterarUsingPUT13) | **PUT** /api/pessoas-detalhes/{id} | Atualiza os detalhes de uma determinada Pessoa
[**alterarUsingPUT14**](CadastroClienteApi.md#alterarUsingPUT14) | **PUT** /api/pessoas/{id} | Atualiza os dados de uma determinada Pessoa
[**alterarUsingPUT16**](CadastroClienteApi.md#alterarUsingPUT16) | **PUT** /api/telefones | Realiza a altera\u00E7\u00E3o de um determinado Telefone
[**alterarUsingPUT5**](CadastroClienteApi.md#alterarUsingPUT5) | **PUT** /api/enderecos | Atualiza os dados de um determinado Endere\u00E7o
[**atribuirAssinaturaClienteUsingPOST**](CadastroClienteApi.md#atribuirAssinaturaClienteUsingPOST) | **POST** /api/contas/{id}/atribuir-assinatura-cliente | Permite atribuir um documento para uma Conta
[**atualizarUsingPOST**](CadastroClienteApi.md#atualizarUsingPOST) | **POST** /api/contas/{id}/atualizar-registro-integracao | Atualiza conta integrada com o emissor
[**cadastrarUsingPOST**](CadastroClienteApi.md#cadastrarUsingPOST) | **POST** /api/contas/{id}/cadastrar-adicional | Realiza o cadastro de Adicionais para uma Conta
[**consultarUsingGET1**](CadastroClienteApi.md#consultarUsingGET1) | **GET** /api/contas/{id}/adicionais/{idPessoa} | Consulta Adicional de uma Conta
[**consultarUsingGET16**](CadastroClienteApi.md#consultarUsingGET16) | **GET** /api/enderecos/{id} | Apresenta os dados de um determinado Endere\u00E7o
[**consultarUsingGET24**](CadastroClienteApi.md#consultarUsingGET24) | **GET** /api/pessoas-detalhes/{id} | Apresenta os detalhes de uma determinada Pessoa
[**consultarUsingGET25**](CadastroClienteApi.md#consultarUsingGET25) | **GET** /api/pessoas/{id} | Apresenta os dados de uma determinada Pessoa
[**consultarUsingGET31**](CadastroClienteApi.md#consultarUsingGET31) | **GET** /api/telefones/{id} | Apresenta os dados de um determinado Telefone
[**inativarUsingPOST**](CadastroClienteApi.md#inativarUsingPOST) | **POST** /api/contas/{id}/adicionais/{idPessoa}/inativar | Inativa Adicional de uma Conta
[**listarSociosUsingGET**](CadastroClienteApi.md#listarSociosUsingGET) | **GET** /api/clientes-pessoas-juridicas/{id}/socios | Listar s\u00F3cios de uma pessoa jur\u00EDdica
[**listarUsingGET1**](CadastroClienteApi.md#listarUsingGET1) | **GET** /api/contas/{id}/adicionais | Lista os Adicionais de uma Conta
[**listarUsingGET21**](CadastroClienteApi.md#listarUsingGET21) | **GET** /api/enderecos | Lista os Endere\u00E7os cadastrados para o Emissor
[**listarUsingGET31**](CadastroClienteApi.md#listarUsingGET31) | **GET** /api/pessoas-detalhes | Lista os Detalhes das Pessoas cadastradas no Emissor
[**listarUsingGET32**](CadastroClienteApi.md#listarUsingGET32) | **GET** /api/pessoas | Lista as Pessoas cadastradas no Emissor
[**listarUsingGET41**](CadastroClienteApi.md#listarUsingGET41) | **GET** /api/telefones | Lista os Telefones cadastrados no Emissor
[**salvarPessoaFisicaAprovadaUsingPOST**](CadastroClienteApi.md#salvarPessoaFisicaAprovadaUsingPOST) | **POST** /api/clientes-pessoas-fisicas | Cadastro de Conta e Pessoa Fisica
[**salvarPessoaJuridicaAprovadaUsingPOST**](CadastroClienteApi.md#salvarPessoaJuridicaAprovadaUsingPOST) | **POST** /api/clientes-pessoas-juridicas | Cadastro de Conta e Pessoa Jur\u00EDdica
[**salvarUsingPOST12**](CadastroClienteApi.md#salvarUsingPOST12) | **POST** /api/enderecos | Realiza o cadastro de um novo Endere\u00E7o
[**salvarUsingPOST14**](CadastroClienteApi.md#salvarUsingPOST14) | **POST** /api/contas/{id}/incluir-registro-integracao | Inclui a conta como registro para integra\u00E7\u00E3o
[**salvarUsingPOST19**](CadastroClienteApi.md#salvarUsingPOST19) | **POST** /api/pessoas-detalhes | Salvar os detalhes de uma determinada Pessoa
[**salvarUsingPOST20**](CadastroClienteApi.md#salvarUsingPOST20) | **POST** /api/pessoas | Realiza o cadastro de um nova Pessoa
[**salvarUsingPOST23**](CadastroClienteApi.md#salvarUsingPOST23) | **POST** /api/telefones | Realiza o cadastro de um novo Telefone


# **alterarUsingPUT**
> \br.com.conductor.pier.api.v2.model\AdicionalDetalheResponse alterarUsingPUT($id, $id_pessoa, $adicional_update)

Altera Adicional de uma Conta

Este m\u00E9todo permite que seja alterado um portador Adicional de uma determinada Conta.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroClienteApi();
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o da conta (id).
$id_pessoa = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o da pessoa (id).
$adicional_update = new \br.com.conductor.pier.api.v2.model\AdicionalUpdate(); // \br.com.conductor.pier.api.v2.model\AdicionalUpdate | adicionalUpdate

try { 
    $result = $api_instance->alterarUsingPUT($id, $id_pessoa, $adicional_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroClienteApi->alterarUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o da conta (id). | 
 **id_pessoa** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o da pessoa (id). | 
 **adicional_update** | [**\br.com.conductor.pier.api.v2.model\AdicionalUpdate**](\br.com.conductor.pier.api.v2.model\AdicionalUpdate.md)| adicionalUpdate | 

### Return type

[**\br.com.conductor.pier.api.v2.model\AdicionalDetalheResponse**](AdicionalDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarUsingPUT13**
> \br.com.conductor.pier.api.v2.model\PessoaDetalheResponse alterarUsingPUT13($id, $nome_mae, $id_estado_civil, $id_profissao, $id_natureza_ocupacao, $id_nacionalidade, $numero_banco, $numero_agencia, $numero_conta_corrente, $email, $nome_empresa)

Atualiza os detalhes de uma determinada Pessoa

Este m\u00E9todo permite que seja alterado na base do emissor os detalhes de uma determinada Pessoa.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroClienteApi();
$id = 789; // int | ID da Pessoa
$nome_mae = "nome_mae_example"; // string | Apresenta o nome da m\u00E3e da pessoa fisica
$id_estado_civil = 789; // int | Id Estado civil da pessoa fisica
$id_profissao = "id_profissao_example"; // string | Profiss\u00E3o da pessoa fisica
$id_natureza_ocupacao = 789; // int | Id Natureza Ocupa\u00E7\u00E3o da pessoa fisica
$id_nacionalidade = 789; // int | Id Nacionalidade da pessoa fisica
$numero_banco = 56; // int | N\u00FAmero do banco.
$numero_agencia = 56; // int | N\u00FAmero da ag\u00EAncia.
$numero_conta_corrente = "numero_conta_corrente_example"; // string | N\u00FAmero da conta corrente.
$email = "email_example"; // string | Email da pessoa fisica
$nome_empresa = "nome_empresa_example"; // string | Nome que deve ser impresso no cart\u00E3o

try { 
    $result = $api_instance->alterarUsingPUT13($id, $nome_mae, $id_estado_civil, $id_profissao, $id_natureza_ocupacao, $id_nacionalidade, $numero_banco, $numero_agencia, $numero_conta_corrente, $email, $nome_empresa);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroClienteApi->alterarUsingPUT13: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID da Pessoa | 
 **nome_mae** | **string**| Apresenta o nome da m\u00E3e da pessoa fisica | [optional] 
 **id_estado_civil** | **int**| Id Estado civil da pessoa fisica | [optional] 
 **id_profissao** | **string**| Profiss\u00E3o da pessoa fisica | [optional] 
 **id_natureza_ocupacao** | **int**| Id Natureza Ocupa\u00E7\u00E3o da pessoa fisica | [optional] 
 **id_nacionalidade** | **int**| Id Nacionalidade da pessoa fisica | [optional] 
 **numero_banco** | **int**| N\u00FAmero do banco. | [optional] 
 **numero_agencia** | **int**| N\u00FAmero da ag\u00EAncia. | [optional] 
 **numero_conta_corrente** | **string**| N\u00FAmero da conta corrente. | [optional] 
 **email** | **string**| Email da pessoa fisica | [optional] 
 **nome_empresa** | **string**| Nome que deve ser impresso no cart\u00E3o | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PessoaDetalheResponse**](PessoaDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarUsingPUT14**
> \br.com.conductor.pier.api.v2.model\PessoaResponse alterarUsingPUT14($id, $nome, $tipo, $data_nascimento, $cpf, $cnpj, $sexo, $numero_identidade, $orgao_expedidor_identidade, $unidade_federativa_identidade, $data_emissao_identidade)

Atualiza os dados de uma determinada Pessoa

Este m\u00E9todo permite que seja alterado na base do emissor um registro de determinada Pessoa.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroClienteApi();
$id = 789; // int | ID da Pessoa
$nome = "nome_example"; // string | Apresenta o 'Nome Completo da PF' ou o 'Nome Completo da Raz\u00E3o Social (Nome Empresarial)'.
$tipo = "tipo_example"; // string | C\u00F3digo de identifica\u00E7\u00E3o do tipo da Pessoa, sendo: (\"PF\": Pessoa F\u00EDsica), (\"PJ\": Pessoa Jur\u00EDdica).
$data_nascimento = "data_nascimento_example"; // string | Data de Nascimento da Pessoa, quando PF, ou a Data de Abertura da Empresa, quando PJ. Essa data deve ser informada no formato aaaa-MM-dd.
$cpf = "cpf_example"; // string | N\u00FAmero do CPF, quando PF.
$cnpj = "cnpj_example"; // string | N\u00FAmero do CNPJ, quando PJ.
$sexo = "sexo_example"; // string | C\u00F3digo de identifica\u00E7\u00E3o do sexo da Pessoa, quando PF, sendo: (\"M\": Masculino), (\"F\": Feminino), (\"O\": Outro), (\"N\": N\u00E3o Especificado).
$numero_identidade = "numero_identidade_example"; // string | N\u00FAmero da Identidade.
$orgao_expedidor_identidade = "orgao_expedidor_identidade_example"; // string | Org\u00E3o expedidor do Identidade.
$unidade_federativa_identidade = "unidade_federativa_identidade_example"; // string | Sigla da Unidade Federativa de onde foi expedido a Identidade
$data_emissao_identidade = "data_emissao_identidade_example"; // string | Data emiss\u00E3o da Identidade.

try { 
    $result = $api_instance->alterarUsingPUT14($id, $nome, $tipo, $data_nascimento, $cpf, $cnpj, $sexo, $numero_identidade, $orgao_expedidor_identidade, $unidade_federativa_identidade, $data_emissao_identidade);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroClienteApi->alterarUsingPUT14: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID da Pessoa | 
 **nome** | **string**| Apresenta o &#39;Nome Completo da PF&#39; ou o &#39;Nome Completo da Raz\u00E3o Social (Nome Empresarial)&#39;. | 
 **tipo** | **string**| C\u00F3digo de identifica\u00E7\u00E3o do tipo da Pessoa, sendo: (\&quot;PF\&quot;: Pessoa F\u00EDsica), (\&quot;PJ\&quot;: Pessoa Jur\u00EDdica). | 
 **data_nascimento** | **string**| Data de Nascimento da Pessoa, quando PF, ou a Data de Abertura da Empresa, quando PJ. Essa data deve ser informada no formato aaaa-MM-dd. | 
 **cpf** | **string**| N\u00FAmero do CPF, quando PF. | [optional] 
 **cnpj** | **string**| N\u00FAmero do CNPJ, quando PJ. | [optional] 
 **sexo** | **string**| C\u00F3digo de identifica\u00E7\u00E3o do sexo da Pessoa, quando PF, sendo: (\&quot;M\&quot;: Masculino), (\&quot;F\&quot;: Feminino), (\&quot;O\&quot;: Outro), (\&quot;N\&quot;: N\u00E3o Especificado). | [optional] 
 **numero_identidade** | **string**| N\u00FAmero da Identidade. | [optional] 
 **orgao_expedidor_identidade** | **string**| Org\u00E3o expedidor do Identidade. | [optional] 
 **unidade_federativa_identidade** | **string**| Sigla da Unidade Federativa de onde foi expedido a Identidade | [optional] 
 **data_emissao_identidade** | **string**| Data emiss\u00E3o da Identidade. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PessoaResponse**](PessoaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarUsingPUT16**
> \br.com.conductor.pier.api.v2.model\TelefoneResponse alterarUsingPUT16($id, $id_tipo_telefone, $ddd, $telefone, $ramal)

Realiza a altera\u00E7\u00E3o de um determinado Telefone

Este m\u00E9todo permite que seja alterado um determinado Telefone na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroClienteApi();
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do Telefone (id).
$id_tipo_telefone = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do Tipo do Telefone (id).
$ddd = "ddd_example"; // string | C\u00F3digo DDD do telefone (id).
$telefone = "telefone_example"; // string | N\u00FAmero do telefone.
$ramal = "ramal_example"; // string | N\u00FAmero do ramal.

try { 
    $result = $api_instance->alterarUsingPUT16($id, $id_tipo_telefone, $ddd, $telefone, $ramal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroClienteApi->alterarUsingPUT16: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do Telefone (id). | 
 **id_tipo_telefone** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do Tipo do Telefone (id). | [optional] 
 **ddd** | **string**| C\u00F3digo DDD do telefone (id). | [optional] 
 **telefone** | **string**| N\u00FAmero do telefone. | [optional] 
 **ramal** | **string**| N\u00FAmero do ramal. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\TelefoneResponse**](TelefoneResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarUsingPUT5**
> \br.com.conductor.pier.api.v2.model\EnderecoResponse alterarUsingPUT5($id, $id_pessoa, $id_tipo_endereco, $cep, $logradouro, $numero, $complemento, $ponto_referencia, $bairro, $cidade, $uf, $pais)

Atualiza os dados de um determinado Endere\u00E7o

Este m\u00E9todo permite que seja alterado na base do emissor um ou mais registros ligados a um determinado Endere\u00E7o.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroClienteApi();
$id = 789; // int | id
$id_pessoa = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o da Pessoa a qual o endere\u00E7o pertence (id)
$id_tipo_endereco = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o da Tipo Endere\u00E7o (id)
$cep = "cep_example"; // string | Apresenta o C\u00F3digo de Endere\u00E7amento Postal (CEP) no formaro '58800000'
$logradouro = "logradouro_example"; // string | Apresenta o nome do Logradouro
$numero = 56; // int | Apresenta o n\u00FAmero do endere\u00E7o
$complemento = "complemento_example"; // string | Apresenta descri\u00E7oes complementares referente ao endere\u00E7o
$ponto_referencia = "ponto_referencia_example"; // string | Apresenta a descri\u00E7\u00E3o de ponto de refer\u00EAncia do endere\u00E7o
$bairro = "bairro_example"; // string | Apresenta nome do bairro
$cidade = "cidade_example"; // string | Apresenta nome da cidade
$uf = "uf_example"; // string | Apresenta sigla da Unidade Federativa
$pais = "pais_example"; // string | Apresenta nome do Pais

try { 
    $result = $api_instance->alterarUsingPUT5($id, $id_pessoa, $id_tipo_endereco, $cep, $logradouro, $numero, $complemento, $ponto_referencia, $bairro, $cidade, $uf, $pais);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroClienteApi->alterarUsingPUT5: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id | 
 **id_pessoa** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o da Pessoa a qual o endere\u00E7o pertence (id) | [optional] 
 **id_tipo_endereco** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o da Tipo Endere\u00E7o (id) | [optional] 
 **cep** | **string**| Apresenta o C\u00F3digo de Endere\u00E7amento Postal (CEP) no formaro &#39;58800000&#39; | [optional] 
 **logradouro** | **string**| Apresenta o nome do Logradouro | [optional] 
 **numero** | **int**| Apresenta o n\u00FAmero do endere\u00E7o | [optional] 
 **complemento** | **string**| Apresenta descri\u00E7oes complementares referente ao endere\u00E7o | [optional] 
 **ponto_referencia** | **string**| Apresenta a descri\u00E7\u00E3o de ponto de refer\u00EAncia do endere\u00E7o | [optional] 
 **bairro** | **string**| Apresenta nome do bairro | [optional] 
 **cidade** | **string**| Apresenta nome da cidade | [optional] 
 **uf** | **string**| Apresenta sigla da Unidade Federativa | [optional] 
 **pais** | **string**| Apresenta nome do Pais | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\EnderecoResponse**](EnderecoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **atribuirAssinaturaClienteUsingPOST**
> object atribuirAssinaturaClienteUsingPOST($id, $body)

Permite atribuir um documento para uma Conta

Este m\u00E9todo permite que seja atribu\u00EDdo a uma determinada Conta um documento que esteja armazenado no PIER Cloud, informando qual o tipo do documento e o seu respectivo id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroClienteApi();
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o da Conta
$body = new \br.com.conductor.pier.api.v2.model\AtribuirAssinaturaClientePersist(); // \br.com.conductor.pier.api.v2.model\AtribuirAssinaturaClientePersist | C\u00F3digo de Identifica\u00E7\u00E3o do Arquivo

try { 
    $result = $api_instance->atribuirAssinaturaClienteUsingPOST($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroClienteApi->atribuirAssinaturaClienteUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o da Conta | 
 **body** | [**\br.com.conductor.pier.api.v2.model\AtribuirAssinaturaClientePersist**](\br.com.conductor.pier.api.v2.model\AtribuirAssinaturaClientePersist.md)| C\u00F3digo de Identifica\u00E7\u00E3o do Arquivo | 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **atualizarUsingPOST**
> \br.com.conductor.pier.api.v2.model\IntegracaoEmissorResponse atualizarUsingPOST($id, $body)

Atualiza conta integrada com o emissor

Este recurso permite a atualiza\u00E7\u00E3o de uma conta integrada com o emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroClienteApi();
$id = 789; // int | C\u00F3digo de identifica\u00E7\u00E3o da conta (id).
$body = new \br.com.conductor.pier.api.v2.model\IntegracaoEmissorPersist(); // \br.com.conductor.pier.api.v2.model\IntegracaoEmissorPersist | Descri\u00E7\u00E3o do canal de entrada

try { 
    $result = $api_instance->atualizarUsingPOST($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroClienteApi->atualizarUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de identifica\u00E7\u00E3o da conta (id). | 
 **body** | [**\br.com.conductor.pier.api.v2.model\IntegracaoEmissorPersist**](\br.com.conductor.pier.api.v2.model\IntegracaoEmissorPersist.md)| Descri\u00E7\u00E3o do canal de entrada | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\IntegracaoEmissorResponse**](IntegracaoEmissorResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **cadastrarUsingPOST**
> \br.com.conductor.pier.api.v2.model\AdicionalDetalheResponse cadastrarUsingPOST($id, $persist)

Realiza o cadastro de Adicionais para uma Conta

Este m\u00E9todo permite que sejam cadastrados um portador Adicional para uma determinada Conta.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroClienteApi();
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o da conta (id).
$persist = new \br.com.conductor.pier.api.v2.model\AdicionalPersist(); // \br.com.conductor.pier.api.v2.model\AdicionalPersist | persist

try { 
    $result = $api_instance->cadastrarUsingPOST($id, $persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroClienteApi->cadastrarUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o da conta (id). | 
 **persist** | [**\br.com.conductor.pier.api.v2.model\AdicionalPersist**](\br.com.conductor.pier.api.v2.model\AdicionalPersist.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\AdicionalDetalheResponse**](AdicionalDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET1**
> \br.com.conductor.pier.api.v2.model\AdicionalDetalheResponse consultarUsingGET1($id, $id_pessoa)

Consulta Adicional de uma Conta

Este m\u00E9todo permite que seja consultado um portador Adicional de uma determinada Conta.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroClienteApi();
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o da conta (id).
$id_pessoa = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o da pessoa (id).

try { 
    $result = $api_instance->consultarUsingGET1($id, $id_pessoa);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroClienteApi->consultarUsingGET1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o da conta (id). | 
 **id_pessoa** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o da pessoa (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\AdicionalDetalheResponse**](AdicionalDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET16**
> \br.com.conductor.pier.api.v2.model\EnderecoResponse consultarUsingGET16($id)

Apresenta os dados de um determinado Endere\u00E7o

Este m\u00E9todo permite consultar um determinado Endere\u00E7o a partir do seu c\u00F3digo de identifica\u00E7\u00E3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroClienteApi();
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do Endere\u00E7o (id).

try { 
    $result = $api_instance->consultarUsingGET16($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroClienteApi->consultarUsingGET16: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do Endere\u00E7o (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\EnderecoResponse**](EnderecoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET24**
> \br.com.conductor.pier.api.v2.model\PessoaDetalheResponse consultarUsingGET24($id)

Apresenta os detalhes de uma determinada Pessoa

Este m\u00E9todo permite a consulta dos detalhes de uma Pessoa existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroClienteApi();
$id = 789; // int | ID da Pessoa

try { 
    $result = $api_instance->consultarUsingGET24($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroClienteApi->consultarUsingGET24: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID da Pessoa | 

### Return type

[**\br.com.conductor.pier.api.v2.model\PessoaDetalheResponse**](PessoaDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET25**
> \br.com.conductor.pier.api.v2.model\PessoaResponse consultarUsingGET25($id)

Apresenta os dados de uma determinada Pessoa

Este m\u00E9todo permite que sejam listadas as Pessoas existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroClienteApi();
$id = 789; // int | ID da Pessoa

try { 
    $result = $api_instance->consultarUsingGET25($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroClienteApi->consultarUsingGET25: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID da Pessoa | 

### Return type

[**\br.com.conductor.pier.api.v2.model\PessoaResponse**](PessoaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET31**
> \br.com.conductor.pier.api.v2.model\TelefoneResponse consultarUsingGET31($id)

Apresenta os dados de um determinado Telefone

Este m\u00E9todo permite consultar um determinado Telefone a partir do seu c\u00F3digo de identifica\u00E7\u00E3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroClienteApi();
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do Telefone (id).

try { 
    $result = $api_instance->consultarUsingGET31($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroClienteApi->consultarUsingGET31: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do Telefone (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TelefoneResponse**](TelefoneResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **inativarUsingPOST**
> string inativarUsingPOST($id, $id_pessoa)

Inativa Adicional de uma Conta

Este m\u00E9todo permite que seja inativado um portador Adicional de uma determinada Conta.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroClienteApi();
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o da conta (id).
$id_pessoa = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o da pessoa (id).

try { 
    $result = $api_instance->inativarUsingPOST($id, $id_pessoa);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroClienteApi->inativarUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o da conta (id). | 
 **id_pessoa** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o da pessoa (id). | 

### Return type

**string**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarSociosUsingGET**
> \br.com.conductor.pier.api.v2.model\PagePessoaResponse listarSociosUsingGET($id, $sort, $page, $limit)

Listar s\u00F3cios de uma pessoa jur\u00EDdica

Lista os s\u00F3cios vinculados \u00E0 uma Pessoa Jur\u00EDdica cadastrada.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroClienteApi();
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o da Pessoa Jur\u00EDdica
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarSociosUsingGET($id, $sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroClienteApi->listarSociosUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o da Pessoa Jur\u00EDdica | 
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PagePessoaResponse**](PagePessoaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET1**
> \br.com.conductor.pier.api.v2.model\AdicionalResponse listarUsingGET1($id, $sort, $page, $limit)

Lista os Adicionais de uma Conta

Este m\u00E9todo permite que sejam listados portadores Adicionais de uma determinada Conta.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroClienteApi();
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o da conta (id).
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarUsingGET1($id, $sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroClienteApi->listarUsingGET1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o da conta (id). | 
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\AdicionalResponse**](AdicionalResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET21**
> \br.com.conductor.pier.api.v2.model\PageEnderecoResponse listarUsingGET21($sort, $page, $limit, $id, $id_pessoa, $id_tipo_endereco, $cep, $logradouro, $numero, $complemento, $ponto_referencia, $bairro, $cidade, $uf, $pais, $data_inclusao, $data_ultima_atualizacao)

Lista os Endere\u00E7os cadastrados para o Emissor

Este m\u00E9todo permite que sejam listados os Endere\u00E7os existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroClienteApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do Endere\u00E7o (id).
$id_pessoa = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o da Pessoa a qual o endere\u00E7o pertence (id)
$id_tipo_endereco = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o da Tipo Endere\u00E7o (id)
$cep = "cep_example"; // string | Apresenta o C\u00F3digo de Endere\u00E7amento Postal (CEP)
$logradouro = "logradouro_example"; // string | Apresenta o nome do Logradouro
$numero = 56; // int | Apresenta o n\u00FAmero do endere\u00E7o
$complemento = "complemento_example"; // string | Apresenta descri\u00E7oes complementares referente ao endere\u00E7o
$ponto_referencia = "ponto_referencia_example"; // string | Apresenta a descri\u00E7\u00E3o de ponto de refer\u00EAncia do endere\u00E7o
$bairro = "bairro_example"; // string | Apresenta nome do bairro
$cidade = "cidade_example"; // string | Apresenta nome da cidade
$uf = "uf_example"; // string | Apresenta sigla da Unidade Federativa
$pais = "pais_example"; // string | Apresenta nome do Pais
$data_inclusao = "data_inclusao_example"; // string | Apresenta a data em que fora cadastrado o Endere\u00E7o
$data_ultima_atualizacao = "data_ultima_atualizacao_example"; // string | Data em que fora realizada a \u00FAltima mudan\u00E7a neste registro de endere\u00E7o. Quando n\u00E3o tiver ocorrido mudan\u00E7a, conter\u00E1 a mesma informa\u00E7\u00E3o que o campo dataInclusao

try { 
    $result = $api_instance->listarUsingGET21($sort, $page, $limit, $id, $id_pessoa, $id_tipo_endereco, $cep, $logradouro, $numero, $complemento, $ponto_referencia, $bairro, $cidade, $uf, $pais, $data_inclusao, $data_ultima_atualizacao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroClienteApi->listarUsingGET21: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do Endere\u00E7o (id). | [optional] 
 **id_pessoa** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o da Pessoa a qual o endere\u00E7o pertence (id) | [optional] 
 **id_tipo_endereco** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o da Tipo Endere\u00E7o (id) | [optional] 
 **cep** | **string**| Apresenta o C\u00F3digo de Endere\u00E7amento Postal (CEP) | [optional] 
 **logradouro** | **string**| Apresenta o nome do Logradouro | [optional] 
 **numero** | **int**| Apresenta o n\u00FAmero do endere\u00E7o | [optional] 
 **complemento** | **string**| Apresenta descri\u00E7oes complementares referente ao endere\u00E7o | [optional] 
 **ponto_referencia** | **string**| Apresenta a descri\u00E7\u00E3o de ponto de refer\u00EAncia do endere\u00E7o | [optional] 
 **bairro** | **string**| Apresenta nome do bairro | [optional] 
 **cidade** | **string**| Apresenta nome da cidade | [optional] 
 **uf** | **string**| Apresenta sigla da Unidade Federativa | [optional] 
 **pais** | **string**| Apresenta nome do Pais | [optional] 
 **data_inclusao** | **string**| Apresenta a data em que fora cadastrado o Endere\u00E7o | [optional] 
 **data_ultima_atualizacao** | **string**| Data em que fora realizada a \u00FAltima mudan\u00E7a neste registro de endere\u00E7o. Quando n\u00E3o tiver ocorrido mudan\u00E7a, conter\u00E1 a mesma informa\u00E7\u00E3o que o campo dataInclusao | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageEnderecoResponse**](PageEnderecoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET31**
> \br.com.conductor.pier.api.v2.model\PagePessoaDetalheResponse listarUsingGET31($sort, $page, $limit, $id_pessoa, $nome_mae, $id_estado_civil, $id_profissao, $id_natureza_ocupacao, $id_nacionalidade, $numero_banco, $numero_agencia, $numero_conta_corrente, $email, $nome_empresa)

Lista os Detalhes das Pessoas cadastradas no Emissor

Este m\u00E9todo permite que sejam listadas od detalhes das Pessoas existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroClienteApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$id_pessoa = 789; // int | C\u00F3digo identificador da pessoa
$nome_mae = "nome_mae_example"; // string | Apresenta o nome da m\u00E3e da pessoa fisica
$id_estado_civil = 789; // int | Id Estado civil da pessoa fisica
$id_profissao = "id_profissao_example"; // string | Profiss\u00E3o da pessoa fisica
$id_natureza_ocupacao = 789; // int | Id Natureza Ocupa\u00E7\u00E3o da pessoa fisica
$id_nacionalidade = 789; // int | Id Nacionalidade da pessoa fisica
$numero_banco = 56; // int | N\u00FAmero do Banco.
$numero_agencia = 56; // int | N\u00FAmero da ag\u00EAncia.
$numero_conta_corrente = "numero_conta_corrente_example"; // string | N\u00FAmero da conta corrente.
$email = "email_example"; // string | Email da pessoa fisica
$nome_empresa = "nome_empresa_example"; // string | Nome que deve ser impresso no cart\u00E3o

try { 
    $result = $api_instance->listarUsingGET31($sort, $page, $limit, $id_pessoa, $nome_mae, $id_estado_civil, $id_profissao, $id_natureza_ocupacao, $id_nacionalidade, $numero_banco, $numero_agencia, $numero_conta_corrente, $email, $nome_empresa);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroClienteApi->listarUsingGET31: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **id_pessoa** | **int**| C\u00F3digo identificador da pessoa | [optional] 
 **nome_mae** | **string**| Apresenta o nome da m\u00E3e da pessoa fisica | [optional] 
 **id_estado_civil** | **int**| Id Estado civil da pessoa fisica | [optional] 
 **id_profissao** | **string**| Profiss\u00E3o da pessoa fisica | [optional] 
 **id_natureza_ocupacao** | **int**| Id Natureza Ocupa\u00E7\u00E3o da pessoa fisica | [optional] 
 **id_nacionalidade** | **int**| Id Nacionalidade da pessoa fisica | [optional] 
 **numero_banco** | **int**| N\u00FAmero do Banco. | [optional] 
 **numero_agencia** | **int**| N\u00FAmero da ag\u00EAncia. | [optional] 
 **numero_conta_corrente** | **string**| N\u00FAmero da conta corrente. | [optional] 
 **email** | **string**| Email da pessoa fisica | [optional] 
 **nome_empresa** | **string**| Nome que deve ser impresso no cart\u00E3o | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PagePessoaDetalheResponse**](PagePessoaDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET32**
> \br.com.conductor.pier.api.v2.model\PagePessoaResponse listarUsingGET32($sort, $page, $limit, $id, $nome, $tipo, $cpf, $cnpj, $data_nascimento, $sexo, $numero_identidade, $orgao_expedidor_identidade, $unidade_federativa_identidade, $data_emissao_identidade)

Lista as Pessoas cadastradas no Emissor

Este m\u00E9todo permite que sejam listadas as Pessoas existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroClienteApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o da Pessoa (id).
$nome = "nome_example"; // string | Apresenta o 'Nome Completo da PF' ou o 'Nome Completo da Raz\u00E3o Social (Nome Empresarial)'.
$tipo = "tipo_example"; // string | C\u00F3digo de identifica\u00E7\u00E3o do tipo da Pessoa, sendo: (\"PF\": Pessoa F\u00EDsica), (\"PJ\": Pessoa Jur\u00EDdica).
$cpf = "cpf_example"; // string | N\u00FAmero do CPF, quando PF.
$cnpj = "cnpj_example"; // string | N\u00FAmero do CNPJ, quando PJ.
$data_nascimento = "data_nascimento_example"; // string | Data de Nascimento da Pessoa, quando PF, ou a Data de Abertura da Empresa, quando PJ.
$sexo = "sexo_example"; // string | C\u00F3digo de identifica\u00E7\u00E3o do sexo da Pessoa, quando PF, sendo: (\"M\": Masculino), (\"F\": Feminino), (\"O\": Outro), (\"N\": N\u00E3o Especificado).
$numero_identidade = "numero_identidade_example"; // string | N\u00FAmero da Identidade
$orgao_expedidor_identidade = "orgao_expedidor_identidade_example"; // string | Org\u00E3o expedidor do RG.
$unidade_federativa_identidade = "unidade_federativa_identidade_example"; // string | Sigla da Unidade Federativa de onde foi expedido a Identidade
$data_emissao_identidade = "data_emissao_identidade_example"; // string | Data emiss\u00E3o da identidade no formato aaaa-MM-dd

try { 
    $result = $api_instance->listarUsingGET32($sort, $page, $limit, $id, $nome, $tipo, $cpf, $cnpj, $data_nascimento, $sexo, $numero_identidade, $orgao_expedidor_identidade, $unidade_federativa_identidade, $data_emissao_identidade);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroClienteApi->listarUsingGET32: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o da Pessoa (id). | [optional] 
 **nome** | **string**| Apresenta o &#39;Nome Completo da PF&#39; ou o &#39;Nome Completo da Raz\u00E3o Social (Nome Empresarial)&#39;. | [optional] 
 **tipo** | **string**| C\u00F3digo de identifica\u00E7\u00E3o do tipo da Pessoa, sendo: (\&quot;PF\&quot;: Pessoa F\u00EDsica), (\&quot;PJ\&quot;: Pessoa Jur\u00EDdica). | [optional] 
 **cpf** | **string**| N\u00FAmero do CPF, quando PF. | [optional] 
 **cnpj** | **string**| N\u00FAmero do CNPJ, quando PJ. | [optional] 
 **data_nascimento** | **string**| Data de Nascimento da Pessoa, quando PF, ou a Data de Abertura da Empresa, quando PJ. | [optional] 
 **sexo** | **string**| C\u00F3digo de identifica\u00E7\u00E3o do sexo da Pessoa, quando PF, sendo: (\&quot;M\&quot;: Masculino), (\&quot;F\&quot;: Feminino), (\&quot;O\&quot;: Outro), (\&quot;N\&quot;: N\u00E3o Especificado). | [optional] 
 **numero_identidade** | **string**| N\u00FAmero da Identidade | [optional] 
 **orgao_expedidor_identidade** | **string**| Org\u00E3o expedidor do RG. | [optional] 
 **unidade_federativa_identidade** | **string**| Sigla da Unidade Federativa de onde foi expedido a Identidade | [optional] 
 **data_emissao_identidade** | **string**| Data emiss\u00E3o da identidade no formato aaaa-MM-dd | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PagePessoaResponse**](PagePessoaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET41**
> \br.com.conductor.pier.api.v2.model\PageTelefoneResponse listarUsingGET41($sort, $page, $limit, $id, $id_tipo_telefone, $id_pessoa, $ddd, $telefone, $ramal, $status)

Lista os Telefones cadastrados no Emissor

Este m\u00E9todo permite que sejam listados os Telefones existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroClienteApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do Telefone (id).
$id_tipo_telefone = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do Tipo do Telefone (id).
$id_pessoa = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o da Pessoa (id) a qual o telefone pertence.
$ddd = "ddd_example"; // string | C\u00F3digo DDD do telefone (id).
$telefone = "telefone_example"; // string | N\u00FAmero do telefone.
$ramal = "ramal_example"; // string | N\u00FAmero do ramal.
$status = 56; // int | Apresenta o Status do Telefone, onde: '0': Inativo e '1': Ativo

try { 
    $result = $api_instance->listarUsingGET41($sort, $page, $limit, $id, $id_tipo_telefone, $id_pessoa, $ddd, $telefone, $ramal, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroClienteApi->listarUsingGET41: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do Telefone (id). | [optional] 
 **id_tipo_telefone** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do Tipo do Telefone (id). | [optional] 
 **id_pessoa** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o da Pessoa (id) a qual o telefone pertence. | [optional] 
 **ddd** | **string**| C\u00F3digo DDD do telefone (id). | [optional] 
 **telefone** | **string**| N\u00FAmero do telefone. | [optional] 
 **ramal** | **string**| N\u00FAmero do ramal. | [optional] 
 **status** | **int**| Apresenta o Status do Telefone, onde: &#39;0&#39;: Inativo e &#39;1&#39;: Ativo | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTelefoneResponse**](PageTelefoneResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarPessoaFisicaAprovadaUsingPOST**
> \br.com.conductor.pier.api.v2.model\PessoaFisicaAprovadaResponse salvarPessoaFisicaAprovadaUsingPOST($pessoa_persist)

Cadastro de Conta e Pessoa Fisica

Permite realizar o cadastro de uma Conta para um cliente do tipo Pessoa F\u00EDsica, recebendo nesta opera\u00E7\u00E3o todos os dados cadastrais que se fazem necess\u00E1rios para isso. Uma vez criado, poder\u00E1 ser acionado o m\u00E9todo de 'Gera\u00E7\u00E3o de Cart\u00E3o' para o cliente e seus adicionais.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroClienteApi();
$pessoa_persist = new \br.com.conductor.pier.api.v2.model\PessoaFisicaAprovadaPersist(); // \br.com.conductor.pier.api.v2.model\PessoaFisicaAprovadaPersist | pessoaPersist

try { 
    $result = $api_instance->salvarPessoaFisicaAprovadaUsingPOST($pessoa_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroClienteApi->salvarPessoaFisicaAprovadaUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pessoa_persist** | [**\br.com.conductor.pier.api.v2.model\PessoaFisicaAprovadaPersist**](\br.com.conductor.pier.api.v2.model\PessoaFisicaAprovadaPersist.md)| pessoaPersist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\PessoaFisicaAprovadaResponse**](PessoaFisicaAprovadaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarPessoaJuridicaAprovadaUsingPOST**
> \br.com.conductor.pier.api.v2.model\PessoaJuridicaAprovadaResponse salvarPessoaJuridicaAprovadaUsingPOST($pessoa_persist)

Cadastro de Conta e Pessoa Jur\u00EDdica

Cadastro de Conta e Pessoa Jur\u00EDdica Permite realizar o cadastro de uma Conta para um cliente do tipo Pessoa Jur\u00EDdica, recebendo nesta opera\u00E7\u00E3o todos os dados cadastrais que se fazem necess\u00E1rios para isso, inclu\u00EDndo o registro de cada um dos s\u00F3cios. Uma vez criado, poder\u00E1 ser acionado o m\u00E9todo de 'Gera\u00E7\u00E3o de Cart\u00E3o' para o cliente e cada um dos s\u00F3cios vinculados.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroClienteApi();
$pessoa_persist = new \br.com.conductor.pier.api.v2.model\PessoaJuridicaAprovadaPersist(); // \br.com.conductor.pier.api.v2.model\PessoaJuridicaAprovadaPersist | pessoaPersist

try { 
    $result = $api_instance->salvarPessoaJuridicaAprovadaUsingPOST($pessoa_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroClienteApi->salvarPessoaJuridicaAprovadaUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pessoa_persist** | [**\br.com.conductor.pier.api.v2.model\PessoaJuridicaAprovadaPersist**](\br.com.conductor.pier.api.v2.model\PessoaJuridicaAprovadaPersist.md)| pessoaPersist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\PessoaJuridicaAprovadaResponse**](PessoaJuridicaAprovadaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST12**
> \br.com.conductor.pier.api.v2.model\EnderecoResponse salvarUsingPOST12($id_pessoa, $id_tipo_endereco, $cep, $logradouro, $numero, $complemento, $ponto_referencia, $bairro, $cidade, $uf, $pais)

Realiza o cadastro de um novo Endere\u00E7o

Este m\u00E9todo permite que seja cadastrado um novo Endere\u00E7o na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroClienteApi();
$id_pessoa = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o da Pessoa a qual o endere\u00E7o pertence (id)
$id_tipo_endereco = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o da Tipo Endere\u00E7o (id)
$cep = "cep_example"; // string | Apresenta o C\u00F3digo de Endere\u00E7amento Postal (CEP) no formaro '58800000'
$logradouro = "logradouro_example"; // string | Apresenta o nome do Logradouro
$numero = 56; // int | Apresenta o n\u00FAmero do endere\u00E7o
$complemento = "complemento_example"; // string | Apresenta descri\u00E7oes complementares referente ao endere\u00E7o
$ponto_referencia = "ponto_referencia_example"; // string | Apresenta a descri\u00E7\u00E3o de ponto de refer\u00EAncia do endere\u00E7o
$bairro = "bairro_example"; // string | Apresenta nome do bairro
$cidade = "cidade_example"; // string | Apresenta nome da cidade
$uf = "uf_example"; // string | Apresenta sigla da Unidade Federativa
$pais = "pais_example"; // string | Apresenta nome do Pais

try { 
    $result = $api_instance->salvarUsingPOST12($id_pessoa, $id_tipo_endereco, $cep, $logradouro, $numero, $complemento, $ponto_referencia, $bairro, $cidade, $uf, $pais);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroClienteApi->salvarUsingPOST12: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_pessoa** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o da Pessoa a qual o endere\u00E7o pertence (id) | [optional] 
 **id_tipo_endereco** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o da Tipo Endere\u00E7o (id) | [optional] 
 **cep** | **string**| Apresenta o C\u00F3digo de Endere\u00E7amento Postal (CEP) no formaro &#39;58800000&#39; | [optional] 
 **logradouro** | **string**| Apresenta o nome do Logradouro | [optional] 
 **numero** | **int**| Apresenta o n\u00FAmero do endere\u00E7o | [optional] 
 **complemento** | **string**| Apresenta descri\u00E7oes complementares referente ao endere\u00E7o | [optional] 
 **ponto_referencia** | **string**| Apresenta a descri\u00E7\u00E3o de ponto de refer\u00EAncia do endere\u00E7o | [optional] 
 **bairro** | **string**| Apresenta nome do bairro | [optional] 
 **cidade** | **string**| Apresenta nome da cidade | [optional] 
 **uf** | **string**| Apresenta sigla da Unidade Federativa | [optional] 
 **pais** | **string**| Apresenta nome do Pais | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\EnderecoResponse**](EnderecoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST14**
> \br.com.conductor.pier.api.v2.model\IntegracaoEmissorResponse salvarUsingPOST14($id, $body)

Inclui a conta como registro para integra\u00E7\u00E3o

Este recurso permite incluir uma conta como registro para integra\u00E7\u00E3o.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroClienteApi();
$id = 789; // int | C\u00F3digo de identifica\u00E7\u00E3o da conta (id).
$body = new \br.com.conductor.pier.api.v2.model\IntegracaoEmissorPersist(); // \br.com.conductor.pier.api.v2.model\IntegracaoEmissorPersist | Descri\u00E7\u00E3o do canal de entrada

try { 
    $result = $api_instance->salvarUsingPOST14($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroClienteApi->salvarUsingPOST14: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de identifica\u00E7\u00E3o da conta (id). | 
 **body** | [**\br.com.conductor.pier.api.v2.model\IntegracaoEmissorPersist**](\br.com.conductor.pier.api.v2.model\IntegracaoEmissorPersist.md)| Descri\u00E7\u00E3o do canal de entrada | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\IntegracaoEmissorResponse**](IntegracaoEmissorResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST19**
> \br.com.conductor.pier.api.v2.model\PessoaDetalheResponse salvarUsingPOST19($id_pessoa, $nome_mae, $id_estado_civil, $id_profissao, $id_natureza_ocupacao, $id_nacionalidade, $numero_banco, $numero_agencia, $numero_conta_corrente, $email, $nome_empresa)

Salvar os detalhes de uma determinada Pessoa

Este m\u00E9todo permite que seja incluido na base do emissor os detalhes de uma determinada Pessoa.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroClienteApi();
$id_pessoa = 789; // int | Apresenta o c\u00F3digo identificador da pessoa
$nome_mae = "nome_mae_example"; // string | Apresenta o nome da m\u00E3e da pessoa fisica
$id_estado_civil = 789; // int | Id Estado civil da pessoa fisica
$id_profissao = "id_profissao_example"; // string | Profiss\u00E3o da pessoa fisica
$id_natureza_ocupacao = 789; // int | Id Natureza Ocupa\u00E7\u00E3o da pessoa fisica
$id_nacionalidade = 789; // int | Id Nacionalidade da pessoa fisica
$numero_banco = 56; // int | N\u00FAmero do banco.
$numero_agencia = 56; // int | N\u00FAmero da ag\u00EAncia.
$numero_conta_corrente = "numero_conta_corrente_example"; // string | N\u00FAmero da conta corrente.
$email = "email_example"; // string | Email da pessoa fisica
$nome_empresa = "nome_empresa_example"; // string | Nome que deve ser impresso no cart\u00E3o

try { 
    $result = $api_instance->salvarUsingPOST19($id_pessoa, $nome_mae, $id_estado_civil, $id_profissao, $id_natureza_ocupacao, $id_nacionalidade, $numero_banco, $numero_agencia, $numero_conta_corrente, $email, $nome_empresa);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroClienteApi->salvarUsingPOST19: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_pessoa** | **int**| Apresenta o c\u00F3digo identificador da pessoa | 
 **nome_mae** | **string**| Apresenta o nome da m\u00E3e da pessoa fisica | [optional] 
 **id_estado_civil** | **int**| Id Estado civil da pessoa fisica | [optional] 
 **id_profissao** | **string**| Profiss\u00E3o da pessoa fisica | [optional] 
 **id_natureza_ocupacao** | **int**| Id Natureza Ocupa\u00E7\u00E3o da pessoa fisica | [optional] 
 **id_nacionalidade** | **int**| Id Nacionalidade da pessoa fisica | [optional] 
 **numero_banco** | **int**| N\u00FAmero do banco. | [optional] 
 **numero_agencia** | **int**| N\u00FAmero da ag\u00EAncia. | [optional] 
 **numero_conta_corrente** | **string**| N\u00FAmero da conta corrente. | [optional] 
 **email** | **string**| Email da pessoa fisica | [optional] 
 **nome_empresa** | **string**| Nome que deve ser impresso no cart\u00E3o | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PessoaDetalheResponse**](PessoaDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST20**
> \br.com.conductor.pier.api.v2.model\PessoaResponse salvarUsingPOST20($nome, $tipo, $data_nascimento, $cpf, $cnpj, $sexo, $numero_identidade, $orgao_expedidor_identidade, $unidade_federativa_identidade, $data_emissao_identidade)

Realiza o cadastro de um nova Pessoa

Este m\u00E9todo permite que seja cadastrado uma nova Pessoa na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroClienteApi();
$nome = "nome_example"; // string | Apresenta o 'Nome Completo da PF' ou o 'Nome Completo da Raz\u00E3o Social (Nome Empresarial)'.
$tipo = "tipo_example"; // string | C\u00F3digo de identifica\u00E7\u00E3o do tipo da Pessoa, sendo: (\"PF\": Pessoa F\u00EDsica), (\"PJ\": Pessoa Jur\u00EDdica).
$data_nascimento = "data_nascimento_example"; // string | Data de Nascimento da Pessoa, quando PF, ou a Data de Abertura da Empresa, quando PJ. Essa data deve ser informada no formato aaaa-MM-dd.
$cpf = "cpf_example"; // string | N\u00FAmero do CPF, quando PF.
$cnpj = "cnpj_example"; // string | N\u00FAmero do CNPJ, quando PJ.
$sexo = "sexo_example"; // string | C\u00F3digo de identifica\u00E7\u00E3o do sexo da Pessoa, quando PF, sendo: (\"M\": Masculino), (\"F\": Feminino), (\"O\": Outro), (\"N\": N\u00E3o Especificado).
$numero_identidade = "numero_identidade_example"; // string | N\u00FAmero da Identidade.
$orgao_expedidor_identidade = "orgao_expedidor_identidade_example"; // string | Org\u00E3o expedidor do Identidade.
$unidade_federativa_identidade = "unidade_federativa_identidade_example"; // string | Sigla da Unidade Federativa de onde foi expedido a Identidade
$data_emissao_identidade = "data_emissao_identidade_example"; // string | Data emiss\u00E3o da Identidade.

try { 
    $result = $api_instance->salvarUsingPOST20($nome, $tipo, $data_nascimento, $cpf, $cnpj, $sexo, $numero_identidade, $orgao_expedidor_identidade, $unidade_federativa_identidade, $data_emissao_identidade);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroClienteApi->salvarUsingPOST20: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nome** | **string**| Apresenta o &#39;Nome Completo da PF&#39; ou o &#39;Nome Completo da Raz\u00E3o Social (Nome Empresarial)&#39;. | 
 **tipo** | **string**| C\u00F3digo de identifica\u00E7\u00E3o do tipo da Pessoa, sendo: (\&quot;PF\&quot;: Pessoa F\u00EDsica), (\&quot;PJ\&quot;: Pessoa Jur\u00EDdica). | 
 **data_nascimento** | **string**| Data de Nascimento da Pessoa, quando PF, ou a Data de Abertura da Empresa, quando PJ. Essa data deve ser informada no formato aaaa-MM-dd. | 
 **cpf** | **string**| N\u00FAmero do CPF, quando PF. | [optional] 
 **cnpj** | **string**| N\u00FAmero do CNPJ, quando PJ. | [optional] 
 **sexo** | **string**| C\u00F3digo de identifica\u00E7\u00E3o do sexo da Pessoa, quando PF, sendo: (\&quot;M\&quot;: Masculino), (\&quot;F\&quot;: Feminino), (\&quot;O\&quot;: Outro), (\&quot;N\&quot;: N\u00E3o Especificado). | [optional] 
 **numero_identidade** | **string**| N\u00FAmero da Identidade. | [optional] 
 **orgao_expedidor_identidade** | **string**| Org\u00E3o expedidor do Identidade. | [optional] 
 **unidade_federativa_identidade** | **string**| Sigla da Unidade Federativa de onde foi expedido a Identidade | [optional] 
 **data_emissao_identidade** | **string**| Data emiss\u00E3o da Identidade. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PessoaResponse**](PessoaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST23**
> \br.com.conductor.pier.api.v2.model\TelefoneResponse salvarUsingPOST23($id_tipo_telefone, $id_pessoa, $ddd, $telefone, $ramal)

Realiza o cadastro de um novo Telefone

Este m\u00E9todo permite que seja cadastrado um novo Telefone na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroClienteApi();
$id_tipo_telefone = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do Tipo do Telefone (id).
$id_pessoa = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o da Pessoa (id) a qual o telefone pertence.
$ddd = "ddd_example"; // string | C\u00F3digo DDD do telefone (id).
$telefone = "telefone_example"; // string | N\u00FAmero do telefone.
$ramal = "ramal_example"; // string | N\u00FAmero do ramal.

try { 
    $result = $api_instance->salvarUsingPOST23($id_tipo_telefone, $id_pessoa, $ddd, $telefone, $ramal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroClienteApi->salvarUsingPOST23: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_tipo_telefone** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do Tipo do Telefone (id). | [optional] 
 **id_pessoa** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o da Pessoa (id) a qual o telefone pertence. | [optional] 
 **ddd** | **string**| C\u00F3digo DDD do telefone (id). | [optional] 
 **telefone** | **string**| N\u00FAmero do telefone. | [optional] 
 **ramal** | **string**| N\u00FAmero do ramal. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\TelefoneResponse**](TelefoneResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

