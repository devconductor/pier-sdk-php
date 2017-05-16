# br.com.conductor.pier.api.v2.invoker\CadastrosGeraisApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarUsingPUT1**](CadastrosGeraisApi.md#alterarUsingPUT1) | **PUT** /api/enderecos | Atualiza os dados de um determinado Endere\u00C3\u00A7o
[**alterarUsingPUT4**](CadastrosGeraisApi.md#alterarUsingPUT4) | **PUT** /api/pessoas-detalhes/{id} | Atualiza os detalhes de uma determinada Pessoa
[**alterarUsingPUT5**](CadastrosGeraisApi.md#alterarUsingPUT5) | **PUT** /api/pessoas | Atualiza os dados de uma determinada Pessoa
[**alterarUsingPUT6**](CadastrosGeraisApi.md#alterarUsingPUT6) | **PUT** /api/telefones | Realiza a altera\u00C3\u00A7\u00C3\u00A3o de um determinado Telefone
[**consultarOrigemComercialUsingGET**](CadastrosGeraisApi.md#consultarOrigemComercialUsingGET) | **GET** /api/origens-comerciais/{id} | Opera\u00C3\u00A7\u00C3\u00A3o utilizada para consultar uma determinada Origem Comercial
[**consultarProdutoUsingGET**](CadastrosGeraisApi.md#consultarProdutoUsingGET) | **GET** /api/produtos/{id} | Apresenta os dados de um determinado Produto
[**consultarUsingGET13**](CadastrosGeraisApi.md#consultarUsingGET13) | **GET** /api/telefones/{id} | Apresenta os dados de um determinado Telefone
[**consultarUsingGET14**](CadastrosGeraisApi.md#consultarUsingGET14) | **GET** /api/tipos-ajustes | Lista os tipos de ajustes do emissor 
[**consultarUsingGET15**](CadastrosGeraisApi.md#consultarUsingGET15) | **GET** /api/tipos-boletos | Lista os tipos de boletos do emissor 
[**consultarUsingGET16**](CadastrosGeraisApi.md#consultarUsingGET16) | **GET** /api/tipos-enderecos/{id} | Apresenta os dados de um determinado Tipo de Endere\u00C3\u00A7o
[**consultarUsingGET18**](CadastrosGeraisApi.md#consultarUsingGET18) | **GET** /api/tipos-telefones/{id} | Apresenta os dados de um determinado Tipo de Telefone
[**consultarUsingGET4**](CadastrosGeraisApi.md#consultarUsingGET4) | **GET** /api/enderecos/{id} | Apresenta os dados de um determinado Endere\u00C3\u00A7o
[**consultarUsingGET5**](CadastrosGeraisApi.md#consultarUsingGET5) | **GET** /api/estabelecimentos/{id} | Consultar estabelecimento por id
[**consultarUsingGET8**](CadastrosGeraisApi.md#consultarUsingGET8) | **GET** /api/pessoas-detalhes/{id} | Apresenta os detalhes de uma determinada Pessoa
[**consultarUsingGET9**](CadastrosGeraisApi.md#consultarUsingGET9) | **GET** /api/pessoas/{id} | Apresenta os dados de uma determinada Pessoa
[**listarContasPorPessoaUsingGET**](CadastrosGeraisApi.md#listarContasPorPessoaUsingGET) | **GET** /api/pessoas/listar-contas | Lista as contas da pessoa
[**listarEstadosCivisUsingGET**](CadastrosGeraisApi.md#listarEstadosCivisUsingGET) | **GET** /api/estados-civis | Lista os Estados C\u00C3\u00ADvis
[**listarHistoricoTelefonesUsingGET**](CadastrosGeraisApi.md#listarHistoricoTelefonesUsingGET) | **GET** /api/pessoas/{id}/historico-telefones | Listar altera\u00C3\u00A7\u00C3\u00B5es de telefones realizadas nos \u00C3\u00BAltimos 60 dias
[**listarNacionalidadesUsingGET**](CadastrosGeraisApi.md#listarNacionalidadesUsingGET) | **GET** /api/nacionalidades | Lista nacionalidades
[**listarNaturezasOcupacoesUsingGET**](CadastrosGeraisApi.md#listarNaturezasOcupacoesUsingGET) | **GET** /api/ocupacoes | Lista as Ocupa\u00C3\u00A7\u00C3\u00B5es
[**listarOrigensComerciaisUsingGET**](CadastrosGeraisApi.md#listarOrigensComerciaisUsingGET) | **GET** /api/origens-comerciais | Opera\u00C3\u00A7\u00C3\u00A3o utilizada para listar Origens Comerciais
[**listarProdutosUsingGET**](CadastrosGeraisApi.md#listarProdutosUsingGET) | **GET** /api/produtos | Lista os Produtos do Emissor
[**listarProfissoesUsingGET**](CadastrosGeraisApi.md#listarProfissoesUsingGET) | **GET** /api/profissoes | Lista profiss\u00C3\u00B5es
[**listarUsingGET10**](CadastrosGeraisApi.md#listarUsingGET10) | **GET** /api/pessoas-detalhes | Lista os Detalhes das Pessoas cadastradas no Emissor
[**listarUsingGET11**](CadastrosGeraisApi.md#listarUsingGET11) | **GET** /api/pessoas | Lista as Pessoas cadastradas no Emissor
[**listarUsingGET13**](CadastrosGeraisApi.md#listarUsingGET13) | **GET** /api/portadores | Lista os Portadores existentes
[**listarUsingGET17**](CadastrosGeraisApi.md#listarUsingGET17) | **GET** /api/telefones | Lista os Telefones cadastrados no Emissor
[**listarUsingGET18**](CadastrosGeraisApi.md#listarUsingGET18) | **GET** /api/tipos-enderecos | Lista as op\u00C3\u00B5es de Tipos de Endere\u00C3\u00A7os do Emissor 
[**listarUsingGET20**](CadastrosGeraisApi.md#listarUsingGET20) | **GET** /api/tipos-telefones | Lista os Tipos de Telefones
[**listarUsingGET6**](CadastrosGeraisApi.md#listarUsingGET6) | **GET** /api/enderecos | Lista os Endere\u00C3\u00A7os cadastrados para o Emissor
[**listarUsingGET7**](CadastrosGeraisApi.md#listarUsingGET7) | **GET** /api/estabelecimentos | Lista Estabelecimentos
[**salvarPessoaFisicaAprovadaUsingPOST**](CadastrosGeraisApi.md#salvarPessoaFisicaAprovadaUsingPOST) | **POST** /api/clientes-pessoas-fisicas | Cadastro de Conta e Pessoa Fisica
[**salvarPessoaJuridicaAprovadaUsingPOST**](CadastrosGeraisApi.md#salvarPessoaJuridicaAprovadaUsingPOST) | **POST** /api/clientes-pessoas-juridicas | Cadastro de Conta e Pessoa Jur\u00C3\u00ADdica
[**salvarUsingPOST4**](CadastrosGeraisApi.md#salvarUsingPOST4) | **POST** /api/enderecos | Realiza o cadastro de um novo Endere\u00C3\u00A7o
[**salvarUsingPOST6**](CadastrosGeraisApi.md#salvarUsingPOST6) | **POST** /api/pessoas-detalhes | Salvar os detalhes de uma determinada Pessoa
[**salvarUsingPOST7**](CadastrosGeraisApi.md#salvarUsingPOST7) | **POST** /api/pessoas | Realiza o cadastro de um nova Pessoa
[**salvarUsingPOST9**](CadastrosGeraisApi.md#salvarUsingPOST9) | **POST** /api/telefones | Realiza o cadastro de um novo Telefone


# **alterarUsingPUT1**
> \br.com.conductor.pier.api.v2.model\Endereco alterarUsingPUT1($id, $id_pessoa, $id_tipo_endereco, $cep, $logradouro, $numero, $complemento, $ponto_referencia, $bairro, $cidade, $uf, $pais)

Atualiza os dados de um determinado Endere\u00C3\u00A7o

Este m\u00C3\u00A9todo permite que seja alterado na base do emissor um ou mais registros ligados a um determinado Endere\u00C3\u00A7o.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastrosGeraisApi();
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
    $result = $api_instance->alterarUsingPUT1($id, $id_pessoa, $id_tipo_endereco, $cep, $logradouro, $numero, $complemento, $ponto_referencia, $bairro, $cidade, $uf, $pais);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastrosGeraisApi->alterarUsingPUT1: ', $e->getMessage(), "\n";
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

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarUsingPUT4**
> \br.com.conductor.pier.api.v2.model\PessoaDetalheResponse alterarUsingPUT4($id, $nome_mae, $id_estado_civil, $profissao, $id_natureza_ocupacao, $id_nacionalidade, $numero_agencia, $numero_conta_corrente, $email, $nome_empresa)

Atualiza os detalhes de uma determinada Pessoa

Este m\u00C3\u00A9todo permite que seja alterado na base do emissor os detalhes de uma determinada Pessoa.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastrosGeraisApi();
$id = 789; // int | ID da Pessoa
$nome_mae = "nome_mae_example"; // string | Apresenta o nome da m\u00C3\u00A3e da pessoa fisica
$id_estado_civil = 789; // int | Id Estado civil da pessoa fisica
$profissao = "profissao_example"; // string | Profiss\u00C3\u00A3o da pessoa fisica
$id_natureza_ocupacao = 789; // int | Id Natureza Ocupa\u00C3\u00A7\u00C3\u00A3o da pessoa fisica
$id_nacionalidade = 789; // int | Id Nacionalidade da pessoa fisica
$numero_agencia = 56; // int | N\u00C3\u00BAmero da ag\u00C3\u00AAncia.
$numero_conta_corrente = "numero_conta_corrente_example"; // string | N\u00C3\u00BAmero da conta corrente.
$email = "email_example"; // string | Email da pessoa fisica
$nome_empresa = "nome_empresa_example"; // string | Nome que deve ser impresso no cart\u00C3\u00A3o

try { 
    $result = $api_instance->alterarUsingPUT4($id, $nome_mae, $id_estado_civil, $profissao, $id_natureza_ocupacao, $id_nacionalidade, $numero_agencia, $numero_conta_corrente, $email, $nome_empresa);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastrosGeraisApi->alterarUsingPUT4: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID da Pessoa | 
 **nome_mae** | **string**| Apresenta o nome da m\u00C3\u00A3e da pessoa fisica | [optional] 
 **id_estado_civil** | **int**| Id Estado civil da pessoa fisica | [optional] 
 **profissao** | **string**| Profiss\u00C3\u00A3o da pessoa fisica | [optional] 
 **id_natureza_ocupacao** | **int**| Id Natureza Ocupa\u00C3\u00A7\u00C3\u00A3o da pessoa fisica | [optional] 
 **id_nacionalidade** | **int**| Id Nacionalidade da pessoa fisica | [optional] 
 **numero_agencia** | **int**| N\u00C3\u00BAmero da ag\u00C3\u00AAncia. | [optional] 
 **numero_conta_corrente** | **string**| N\u00C3\u00BAmero da conta corrente. | [optional] 
 **email** | **string**| Email da pessoa fisica | [optional] 
 **nome_empresa** | **string**| Nome que deve ser impresso no cart\u00C3\u00A3o | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PessoaDetalheResponse**](PessoaDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarUsingPUT5**
> \br.com.conductor.pier.api.v2.model\Pessoa alterarUsingPUT5($id, $nome, $tipo, $cpf, $cnpj, $data_nascimento, $sexo, $numero_identidade, $orgao_expedidor_identidade, $unidade_federativa_identidade, $data_emissao_identidade)

Atualiza os dados de uma determinada Pessoa

Este m\u00C3\u00A9todo permite que seja alterado na base do emissor um registro de determinada Pessoa.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastrosGeraisApi();
$id = 789; // int | ID da Pessoa
$nome = "nome_example"; // string | Apresenta o 'Nome Completo da PF' ou o 'Nome Completo da Raz\u00C3\u00A3o Social (Nome Empresarial)'.
$tipo = "tipo_example"; // string | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do tipo da Pessoa, sendo: (\"PF\": Pessoa F\u00C3\u00ADsica), (\"PJ\": Pessoa Jur\u00C3\u00ADdica).
$cpf = "cpf_example"; // string | N\u00C3\u00BAmero do CPF, quando PF.
$cnpj = "cnpj_example"; // string | N\u00C3\u00BAmero do CNPJ, quando PJ.
$data_nascimento = new \DateTime(); // \DateTime | Data de Nascimento da Pessoa, quando PF, ou a Data de Abertura da Empresa, quando PJ. Essa data deve ser informada no formato aaaa-MM-dd.
$sexo = "sexo_example"; // string | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do sexo da Pessoa, quando PF, sendo: (\"M\": Masculino), (\"F\": Feminino), (\"O\": Outro), (\"N\": N\u00C3\u00A3o Especificado).
$numero_identidade = "numero_identidade_example"; // string | N\u00C3\u00BAmero da Identidade.
$orgao_expedidor_identidade = "orgao_expedidor_identidade_example"; // string | Org\u00C3\u00A3o expedidor do Identidade.
$unidade_federativa_identidade = "unidade_federativa_identidade_example"; // string | Sigla da Unidade Federativa de onde foi expedido a Identidade
$data_emissao_identidade = new \DateTime(); // \DateTime | Data emiss\u00C3\u00A3o da Identidade.

try { 
    $result = $api_instance->alterarUsingPUT5($id, $nome, $tipo, $cpf, $cnpj, $data_nascimento, $sexo, $numero_identidade, $orgao_expedidor_identidade, $unidade_federativa_identidade, $data_emissao_identidade);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastrosGeraisApi->alterarUsingPUT5: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID da Pessoa | 
 **nome** | **string**| Apresenta o &#39;Nome Completo da PF&#39; ou o &#39;Nome Completo da Raz\u00C3\u00A3o Social (Nome Empresarial)&#39;. | 
 **tipo** | **string**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do tipo da Pessoa, sendo: (\&quot;PF\&quot;: Pessoa F\u00C3\u00ADsica), (\&quot;PJ\&quot;: Pessoa Jur\u00C3\u00ADdica). | 
 **cpf** | **string**| N\u00C3\u00BAmero do CPF, quando PF. | [optional] 
 **cnpj** | **string**| N\u00C3\u00BAmero do CNPJ, quando PJ. | [optional] 
 **data_nascimento** | **\DateTime**| Data de Nascimento da Pessoa, quando PF, ou a Data de Abertura da Empresa, quando PJ. Essa data deve ser informada no formato aaaa-MM-dd. | [optional] 
 **sexo** | **string**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do sexo da Pessoa, quando PF, sendo: (\&quot;M\&quot;: Masculino), (\&quot;F\&quot;: Feminino), (\&quot;O\&quot;: Outro), (\&quot;N\&quot;: N\u00C3\u00A3o Especificado). | [optional] 
 **numero_identidade** | **string**| N\u00C3\u00BAmero da Identidade. | [optional] 
 **orgao_expedidor_identidade** | **string**| Org\u00C3\u00A3o expedidor do Identidade. | [optional] 
 **unidade_federativa_identidade** | **string**| Sigla da Unidade Federativa de onde foi expedido a Identidade | [optional] 
 **data_emissao_identidade** | **\DateTime**| Data emiss\u00C3\u00A3o da Identidade. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\Pessoa**](Pessoa.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarUsingPUT6**
> \br.com.conductor.pier.api.v2.model\Telefone alterarUsingPUT6($id, $id_tipo_telefone, $ddd, $telefone, $ramal)

Realiza a altera\u00C3\u00A7\u00C3\u00A3o de um determinado Telefone

Este m\u00C3\u00A9todo permite que seja alterado um determinado Telefone na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastrosGeraisApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Telefone (id).
$id_tipo_telefone = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo do Telefone (id).
$ddd = "ddd_example"; // string | C\u00C3\u00B3digo DDD do telefone (id).
$telefone = "telefone_example"; // string | N\u00C3\u00BAmero do telefone.
$ramal = "ramal_example"; // string | N\u00C3\u00BAmero do ramal.

try { 
    $result = $api_instance->alterarUsingPUT6($id, $id_tipo_telefone, $ddd, $telefone, $ramal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastrosGeraisApi->alterarUsingPUT6: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Telefone (id). | 
 **id_tipo_telefone** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo do Telefone (id). | [optional] 
 **ddd** | **string**| C\u00C3\u00B3digo DDD do telefone (id). | [optional] 
 **telefone** | **string**| N\u00C3\u00BAmero do telefone. | [optional] 
 **ramal** | **string**| N\u00C3\u00BAmero do ramal. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\Telefone**](Telefone.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarOrigemComercialUsingGET**
> \br.com.conductor.pier.api.v2.model\OrigemComercial consultarOrigemComercialUsingGET($id)

Opera\u00C3\u00A7\u00C3\u00A3o utilizada para consultar uma determinada Origem Comercial

Este m\u00C3\u00A9todo permite que sejam listados os registros de uma determinada Origem Comercial existente na base do emissor. Para isso, \u00C3\u00A9 preciso informar o seu respectivo c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastrosGeraisApi();
$id = 789; // int | ID da Origem Comercial

try { 
    $result = $api_instance->consultarOrigemComercialUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastrosGeraisApi->consultarOrigemComercialUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID da Origem Comercial | 

### Return type

[**\br.com.conductor.pier.api.v2.model\OrigemComercial**](OrigemComercial.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarProdutoUsingGET**
> \br.com.conductor.pier.api.v2.model\ProdutoDetalhesResponse consultarProdutoUsingGET($id)

Apresenta os dados de um determinado Produto

Este m\u00C3\u00A9todo permite consultar um determinado Produto a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastrosGeraisApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Produto (id)

try { 
    $result = $api_instance->consultarProdutoUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastrosGeraisApi->consultarProdutoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Produto (id) | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ProdutoDetalhesResponse**](ProdutoDetalhesResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET13**
> \br.com.conductor.pier.api.v2.model\Telefone consultarUsingGET13($id)

Apresenta os dados de um determinado Telefone

Este m\u00C3\u00A9todo permite consultar um determinado Telefone a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastrosGeraisApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Telefone (id).

try { 
    $result = $api_instance->consultarUsingGET13($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastrosGeraisApi->consultarUsingGET13: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Telefone (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\Telefone**](Telefone.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET14**
> \br.com.conductor.pier.api.v2.model\PageTipoAjuste consultarUsingGET14($page, $limit, $id, $descricao)

Lista os tipos de ajustes do emissor 

Este recurso permite que sejam listados os tipos de ajustes existentes na base de dados do emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastrosGeraisApi();
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100)
$id = 789; // int | C\u00C3\u00B3digo identificador do tipo de ajuste.
$descricao = "descricao_example"; // string | Descri\u00C3\u00A7\u00C3\u00A3o do tipo de ajuste.

try { 
    $result = $api_instance->consultarUsingGET14($page, $limit, $id, $descricao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastrosGeraisApi->consultarUsingGET14: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) | [optional] 
 **id** | **int**| C\u00C3\u00B3digo identificador do tipo de ajuste. | [optional] 
 **descricao** | **string**| Descri\u00C3\u00A7\u00C3\u00A3o do tipo de ajuste. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTipoAjuste**](PageTipoAjuste.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET15**
> \br.com.conductor.pier.api.v2.model\PageTipoBoleto consultarUsingGET15($page, $limit, $id, $descricao, $banco)

Lista os tipos de boletos do emissor 

Este recurso permite que sejam listados os tipos de boletos existentes na base de dados do emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastrosGeraisApi();
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100)
$id = 789; // int | C\u00C3\u00B3digo identificador do tipo de boleto.
$descricao = "descricao_example"; // string | Descri\u00C3\u00A7\u00C3\u00A3o do tipo de boleto.
$banco = 789; // int | C\u00C3\u00B3digo identificador do banco.

try { 
    $result = $api_instance->consultarUsingGET15($page, $limit, $id, $descricao, $banco);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastrosGeraisApi->consultarUsingGET15: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) | [optional] 
 **id** | **int**| C\u00C3\u00B3digo identificador do tipo de boleto. | [optional] 
 **descricao** | **string**| Descri\u00C3\u00A7\u00C3\u00A3o do tipo de boleto. | [optional] 
 **banco** | **int**| C\u00C3\u00B3digo identificador do banco. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTipoBoleto**](PageTipoBoleto.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET16**
> \br.com.conductor.pier.api.v2.model\TipoEndereco consultarUsingGET16($id)

Apresenta os dados de um determinado Tipo de Endere\u00C3\u00A7o

Este m\u00C3\u00A9todo permite consultar um determinado Tipo de Endere\u00C3\u00A7o a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastrosGeraisApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo do Endere\u00C3\u00A7o (id)

try { 
    $result = $api_instance->consultarUsingGET16($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastrosGeraisApi->consultarUsingGET16: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo do Endere\u00C3\u00A7o (id) | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TipoEndereco**](TipoEndereco.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET18**
> \br.com.conductor.pier.api.v2.model\TipoTelefone consultarUsingGET18($id)

Apresenta os dados de um determinado Tipo de Telefone

Este m\u00C3\u00A9todo permite consultar um determinado Tipo de Telefone a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastrosGeraisApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo do Telefone (id)

try { 
    $result = $api_instance->consultarUsingGET18($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastrosGeraisApi->consultarUsingGET18: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo do Telefone (id) | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TipoTelefone**](TipoTelefone.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET4**
> \br.com.conductor.pier.api.v2.model\Endereco consultarUsingGET4($id)

Apresenta os dados de um determinado Endere\u00C3\u00A7o

Este m\u00C3\u00A9todo permite consultar um determinado Endere\u00C3\u00A7o a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastrosGeraisApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Endere\u00C3\u00A7o (id).

try { 
    $result = $api_instance->consultarUsingGET4($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastrosGeraisApi->consultarUsingGET4: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Endere\u00C3\u00A7o (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\Endereco**](Endereco.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET5**
> \br.com.conductor.pier.api.v2.model\Estabelecimento consultarUsingGET5($id)

Consultar estabelecimento por id

Consulta os detalhes de um determinado estabelecimento

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastrosGeraisApi();
$id = 789; // int | Id

try { 
    $result = $api_instance->consultarUsingGET5($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastrosGeraisApi->consultarUsingGET5: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id | 

### Return type

[**\br.com.conductor.pier.api.v2.model\Estabelecimento**](Estabelecimento.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET8**
> \br.com.conductor.pier.api.v2.model\PessoaDetalheResponse consultarUsingGET8($id)

Apresenta os detalhes de uma determinada Pessoa

Este m\u00C3\u00A9todo permite a consulta dos detalhes de uma Pessoa existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastrosGeraisApi();
$id = 789; // int | ID da Pessoa

try { 
    $result = $api_instance->consultarUsingGET8($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastrosGeraisApi->consultarUsingGET8: ', $e->getMessage(), "\n";
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

# **consultarUsingGET9**
> \br.com.conductor.pier.api.v2.model\Pessoa consultarUsingGET9($id)

Apresenta os dados de uma determinada Pessoa

Este m\u00C3\u00A9todo permite que sejam listadas as Pessoas existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastrosGeraisApi();
$id = 789; // int | ID da Pessoa

try { 
    $result = $api_instance->consultarUsingGET9($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastrosGeraisApi->consultarUsingGET9: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID da Pessoa | 

### Return type

[**\br.com.conductor.pier.api.v2.model\Pessoa**](Pessoa.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarContasPorPessoaUsingGET**
> \br.com.conductor.pier.api.v2.model\PageContasDetalhe listarContasPorPessoaUsingGET($numero_receita_federal, $page, $limit)

Lista as contas da pessoa

Permite listar as contas de um pessoa a partir do seu numero na receita federal.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastrosGeraisApi();
$numero_receita_federal = "numero_receita_federal_example"; // string | Id Conta
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100)

try { 
    $result = $api_instance->listarContasPorPessoaUsingGET($numero_receita_federal, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastrosGeraisApi->listarContasPorPessoaUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **numero_receita_federal** | **string**| Id Conta | 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageContasDetalhe**](PageContasDetalhe.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarEstadosCivisUsingGET**
> \br.com.conductor.pier.api.v2.model\PageCampoCodificadoDescricao listarEstadosCivisUsingGET($page, $limit)

Lista os Estados C\u00C3\u00ADvis

Este m\u00C3\u00A9todo permite que sejam listados os Estados C\u00C3\u00ADvis na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastrosGeraisApi();
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100)

try { 
    $result = $api_instance->listarEstadosCivisUsingGET($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastrosGeraisApi->listarEstadosCivisUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageCampoCodificadoDescricao**](PageCampoCodificadoDescricao.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarHistoricoTelefonesUsingGET**
> \br.com.conductor.pier.api.v2.model\HistoricoTelefone listarHistoricoTelefonesUsingGET($id)

Listar altera\u00C3\u00A7\u00C3\u00B5es de telefones realizadas nos \u00C3\u00BAltimos 60 dias

Este m\u00C3\u00A9todo permite verificar quais os telefones de um determinado que cliente que sofreram altera\u00C3\u00A7\u00C3\u00A3o nos \u00C3\u00BAltimos 60 dias.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastrosGeraisApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da pessoa (id).

try { 
    $result = $api_instance->listarHistoricoTelefonesUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastrosGeraisApi->listarHistoricoTelefonesUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da pessoa (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\HistoricoTelefone**](HistoricoTelefone.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarNacionalidadesUsingGET**
> \br.com.conductor.pier.api.v2.model\PageCampoCodificadoDescricao listarNacionalidadesUsingGET($page, $limit)

Lista nacionalidades

Este m\u00C3\u00A9todo permite que sejam listados as nacionalidades na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastrosGeraisApi();
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100)

try { 
    $result = $api_instance->listarNacionalidadesUsingGET($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastrosGeraisApi->listarNacionalidadesUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageCampoCodificadoDescricao**](PageCampoCodificadoDescricao.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarNaturezasOcupacoesUsingGET**
> \br.com.conductor.pier.api.v2.model\PageCampoCodificadoDescricao listarNaturezasOcupacoesUsingGET($page, $limit)

Lista as Ocupa\u00C3\u00A7\u00C3\u00B5es

Este m\u00C3\u00A9todo permite que sejam listados as naturezas de opera\u00C3\u00A7\u00C3\u00B5es na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastrosGeraisApi();
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100)

try { 
    $result = $api_instance->listarNaturezasOcupacoesUsingGET($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastrosGeraisApi->listarNaturezasOcupacoesUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageCampoCodificadoDescricao**](PageCampoCodificadoDescricao.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarOrigensComerciaisUsingGET**
> \br.com.conductor.pier.api.v2.model\PageOrigensComerciais listarOrigensComerciaisUsingGET($page, $limit, $id, $nome, $status)

Opera\u00C3\u00A7\u00C3\u00A3o utilizada para listar Origens Comerciais

Este m\u00C3\u00A9todo permite que sejam listadas as Origens Comerciais existentes na base do emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastrosGeraisApi();
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100)
$id = 789; // int | Id da origem comercial
$nome = "nome_example"; // string | Nome da origem comercial
$status = 56; // int | Status da origem comercial

try { 
    $result = $api_instance->listarOrigensComerciaisUsingGET($page, $limit, $id, $nome, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastrosGeraisApi->listarOrigensComerciaisUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) | [optional] 
 **id** | **int**| Id da origem comercial | [optional] 
 **nome** | **string**| Nome da origem comercial | [optional] 
 **status** | **int**| Status da origem comercial | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageOrigensComerciais**](PageOrigensComerciais.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarProdutosUsingGET**
> \br.com.conductor.pier.api.v2.model\ListaProdutos listarProdutosUsingGET($page, $limit, $id, $nome, $status, $id_fantasia_basica)

Lista os Produtos do Emissor

Este m\u00C3\u00A9todo permite que sejam listados os Produtos existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastrosGeraisApi();
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100)
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Produto (id).
$nome = "nome_example"; // string | Descri\u00C3\u00A7\u00C3\u00A3o do Nome do Produto.
$status = 56; // int | Representa o Status do Produto, onde: (\"0\": Inativo), (\"1\": Ativo).
$id_fantasia_basica = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Fantasia B\u00C3\u00A1sica (id) a qual o produto pertence.

try { 
    $result = $api_instance->listarProdutosUsingGET($page, $limit, $id, $nome, $status, $id_fantasia_basica);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastrosGeraisApi->listarProdutosUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) | [optional] 
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Produto (id). | [optional] 
 **nome** | **string**| Descri\u00C3\u00A7\u00C3\u00A3o do Nome do Produto. | [optional] 
 **status** | **int**| Representa o Status do Produto, onde: (\&quot;0\&quot;: Inativo), (\&quot;1\&quot;: Ativo). | [optional] 
 **id_fantasia_basica** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Fantasia B\u00C3\u00A1sica (id) a qual o produto pertence. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\ListaProdutos**](ListaProdutos.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarProfissoesUsingGET**
> \br.com.conductor.pier.api.v2.model\PageCampoCodificadoDescricao listarProfissoesUsingGET($page, $limit)

Lista profiss\u00C3\u00B5es

Este m\u00C3\u00A9todo permite que sejam listados as profiss\u00C3\u00B5es na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastrosGeraisApi();
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100)

try { 
    $result = $api_instance->listarProfissoesUsingGET($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastrosGeraisApi->listarProfissoesUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageCampoCodificadoDescricao**](PageCampoCodificadoDescricao.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET10**
> \br.com.conductor.pier.api.v2.model\PessoaDetalheResponse listarUsingGET10($page, $limit, $id_pessoa, $nome_mae, $id_estado_civil, $profissao, $id_natureza_ocupacao, $id_nacionalidade, $numero_agencia, $numero_conta_corrente, $email, $nome_empresa)

Lista os Detalhes das Pessoas cadastradas no Emissor

Este m\u00C3\u00A9todo permite que sejam listadas od detalhes das Pessoas existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastrosGeraisApi();
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100)
$id_pessoa = 789; // int | C\u00C3\u00B3digo identificador da pessoa
$nome_mae = "nome_mae_example"; // string | Apresenta o nome da m\u00C3\u00A3e da pessoa fisica
$id_estado_civil = 789; // int | Id Estado civil da pessoa fisica
$profissao = "profissao_example"; // string | Profiss\u00C3\u00A3o da pessoa fisica
$id_natureza_ocupacao = 789; // int | Id Natureza Ocupa\u00C3\u00A7\u00C3\u00A3o da pessoa fisica
$id_nacionalidade = 789; // int | Id Nacionalidade da pessoa fisica
$numero_agencia = 56; // int | N\u00C3\u00BAmero da ag\u00C3\u00AAncia.
$numero_conta_corrente = "numero_conta_corrente_example"; // string | N\u00C3\u00BAmero da conta corrente.
$email = "email_example"; // string | Email da pessoa fisica
$nome_empresa = "nome_empresa_example"; // string | Nome que deve ser impresso no cart\u00C3\u00A3o

try { 
    $result = $api_instance->listarUsingGET10($page, $limit, $id_pessoa, $nome_mae, $id_estado_civil, $profissao, $id_natureza_ocupacao, $id_nacionalidade, $numero_agencia, $numero_conta_corrente, $email, $nome_empresa);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastrosGeraisApi->listarUsingGET10: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) | [optional] 
 **id_pessoa** | **int**| C\u00C3\u00B3digo identificador da pessoa | [optional] 
 **nome_mae** | **string**| Apresenta o nome da m\u00C3\u00A3e da pessoa fisica | [optional] 
 **id_estado_civil** | **int**| Id Estado civil da pessoa fisica | [optional] 
 **profissao** | **string**| Profiss\u00C3\u00A3o da pessoa fisica | [optional] 
 **id_natureza_ocupacao** | **int**| Id Natureza Ocupa\u00C3\u00A7\u00C3\u00A3o da pessoa fisica | [optional] 
 **id_nacionalidade** | **int**| Id Nacionalidade da pessoa fisica | [optional] 
 **numero_agencia** | **int**| N\u00C3\u00BAmero da ag\u00C3\u00AAncia. | [optional] 
 **numero_conta_corrente** | **string**| N\u00C3\u00BAmero da conta corrente. | [optional] 
 **email** | **string**| Email da pessoa fisica | [optional] 
 **nome_empresa** | **string**| Nome que deve ser impresso no cart\u00C3\u00A3o | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PessoaDetalheResponse**](PessoaDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET11**
> \br.com.conductor.pier.api.v2.model\PagePessoas listarUsingGET11($page, $limit, $id, $nome, $tipo, $cpf, $cnpj, $data_nascimento, $sexo, $numero_identidade, $orgao_expedidor_identidade, $unidade_federativa_identidade, $data_emissao_identidade)

Lista as Pessoas cadastradas no Emissor

Este m\u00C3\u00A9todo permite que sejam listadas as Pessoas existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastrosGeraisApi();
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100)
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Pessoa (id).
$nome = "nome_example"; // string | Apresenta o 'Nome Completo da PF' ou o 'Nome Completo da Raz\u00C3\u00A3o Social (Nome Empresarial)'.
$tipo = "tipo_example"; // string | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do tipo da Pessoa, sendo: (\"PF\": Pessoa F\u00C3\u00ADsica), (\"PJ\": Pessoa Jur\u00C3\u00ADdica).
$cpf = "cpf_example"; // string | N\u00C3\u00BAmero do CPF, quando PF.
$cnpj = "cnpj_example"; // string | N\u00C3\u00BAmero do CNPJ, quando PJ.
$data_nascimento = new \DateTime(); // \DateTime | Data de Nascimento da Pessoa, quando PF, ou a Data de Abertura da Empresa, quando PJ.
$sexo = "sexo_example"; // string | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do sexo da Pessoa, quando PF, sendo: (\"M\": Masculino), (\"F\": Feminino), (\"O\": Outro), (\"N\": N\u00C3\u00A3o Especificado).
$numero_identidade = "numero_identidade_example"; // string | N\u00C3\u00BAmero da Identidade
$orgao_expedidor_identidade = "orgao_expedidor_identidade_example"; // string | Org\u00C3\u00A3o expedidor do RG.
$unidade_federativa_identidade = "unidade_federativa_identidade_example"; // string | Sigla da Unidade Federativa de onde foi expedido a Identidade
$data_emissao_identidade = new \DateTime(); // \DateTime | Data emiss\u00C3\u00A3o da identidade no formato aaaa-MM-dd

try { 
    $result = $api_instance->listarUsingGET11($page, $limit, $id, $nome, $tipo, $cpf, $cnpj, $data_nascimento, $sexo, $numero_identidade, $orgao_expedidor_identidade, $unidade_federativa_identidade, $data_emissao_identidade);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastrosGeraisApi->listarUsingGET11: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) | [optional] 
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Pessoa (id). | [optional] 
 **nome** | **string**| Apresenta o &#39;Nome Completo da PF&#39; ou o &#39;Nome Completo da Raz\u00C3\u00A3o Social (Nome Empresarial)&#39;. | [optional] 
 **tipo** | **string**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do tipo da Pessoa, sendo: (\&quot;PF\&quot;: Pessoa F\u00C3\u00ADsica), (\&quot;PJ\&quot;: Pessoa Jur\u00C3\u00ADdica). | [optional] 
 **cpf** | **string**| N\u00C3\u00BAmero do CPF, quando PF. | [optional] 
 **cnpj** | **string**| N\u00C3\u00BAmero do CNPJ, quando PJ. | [optional] 
 **data_nascimento** | **\DateTime**| Data de Nascimento da Pessoa, quando PF, ou a Data de Abertura da Empresa, quando PJ. | [optional] 
 **sexo** | **string**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do sexo da Pessoa, quando PF, sendo: (\&quot;M\&quot;: Masculino), (\&quot;F\&quot;: Feminino), (\&quot;O\&quot;: Outro), (\&quot;N\&quot;: N\u00C3\u00A3o Especificado). | [optional] 
 **numero_identidade** | **string**| N\u00C3\u00BAmero da Identidade | [optional] 
 **orgao_expedidor_identidade** | **string**| Org\u00C3\u00A3o expedidor do RG. | [optional] 
 **unidade_federativa_identidade** | **string**| Sigla da Unidade Federativa de onde foi expedido a Identidade | [optional] 
 **data_emissao_identidade** | **\DateTime**| Data emiss\u00C3\u00A3o da identidade no formato aaaa-MM-dd | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PagePessoas**](PagePessoas.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET13**
> \br.com.conductor.pier.api.v2.model\PagePortador listarUsingGET13($page, $limit, $id_conta, $id_produto, $id_pessoa, $id_parentesco, $tipo_portador, $nome_impresso, $id_tipo_cartao, $flag_ativo, $data_cadastro_portador, $data_cancelamento_portador)

Lista os Portadores existentes

Este m\u00C3\u00A9todo permite que sejam listados os portadores cadastrados na base do emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastrosGeraisApi();
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100)
$id_conta = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Conta (id).
$id_produto = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Produto (id).
$id_pessoa = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Pessoa (id).
$id_parentesco = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Parentesco (id)
$tipo_portador = "tipo_portador_example"; // string | Apresenta o tipo do Portador do cart\u00C3\u00A3o, sendo: ('T': Titular, 'A': Adicional).
$nome_impresso = "nome_impresso_example"; // string | Apresenta o nome a ser impresso no cart\u00C3\u00A3o.
$id_tipo_cartao = 789; // int | Apresenta o c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do tipo do cart\u00C3\u00A3o (id), que ser\u00C3\u00A1 utilizado para gerar os cart\u00C3\u00B5es deste portador, vinculados a sua respectiva conta atrav\u00C3\u00A9s do campo idConta.
$flag_ativo = 56; // int | Quanto ativa, indica que o cadastro do Portador est\u00C3\u00A1 ativo, em emissores que realizam este tipo de gest\u00C3\u00A3o.
$data_cadastro_portador = new \DateTime(); // \DateTime | Apresenta a data em que o Portador fora cadastrado, quando possuir esta informa\u00C3\u00A7\u00C3\u00A3o.
$data_cancelamento_portador = new \DateTime(); // \DateTime | Apresenta a data em que o Portador fora cancelado, quando possuir esta informa\u00C3\u00A7\u00C3\u00A3o.

try { 
    $result = $api_instance->listarUsingGET13($page, $limit, $id_conta, $id_produto, $id_pessoa, $id_parentesco, $tipo_portador, $nome_impresso, $id_tipo_cartao, $flag_ativo, $data_cadastro_portador, $data_cancelamento_portador);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastrosGeraisApi->listarUsingGET13: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) | [optional] 
 **id_conta** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Conta (id). | [optional] 
 **id_produto** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Produto (id). | [optional] 
 **id_pessoa** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Pessoa (id). | [optional] 
 **id_parentesco** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Parentesco (id) | [optional] 
 **tipo_portador** | **string**| Apresenta o tipo do Portador do cart\u00C3\u00A3o, sendo: (&#39;T&#39;: Titular, &#39;A&#39;: Adicional). | [optional] 
 **nome_impresso** | **string**| Apresenta o nome a ser impresso no cart\u00C3\u00A3o. | [optional] 
 **id_tipo_cartao** | **int**| Apresenta o c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do tipo do cart\u00C3\u00A3o (id), que ser\u00C3\u00A1 utilizado para gerar os cart\u00C3\u00B5es deste portador, vinculados a sua respectiva conta atrav\u00C3\u00A9s do campo idConta. | [optional] 
 **flag_ativo** | **int**| Quanto ativa, indica que o cadastro do Portador est\u00C3\u00A1 ativo, em emissores que realizam este tipo de gest\u00C3\u00A3o. | [optional] 
 **data_cadastro_portador** | **\DateTime**| Apresenta a data em que o Portador fora cadastrado, quando possuir esta informa\u00C3\u00A7\u00C3\u00A3o. | [optional] 
 **data_cancelamento_portador** | **\DateTime**| Apresenta a data em que o Portador fora cancelado, quando possuir esta informa\u00C3\u00A7\u00C3\u00A3o. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PagePortador**](PagePortador.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET17**
> \br.com.conductor.pier.api.v2.model\PageTelefones listarUsingGET17($page, $limit, $id, $id_tipo_telefone, $id_pessoa, $ddd, $telefone, $ramal, $status)

Lista os Telefones cadastrados no Emissor

Este m\u00C3\u00A9todo permite que sejam listados os Telefones existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastrosGeraisApi();
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100)
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Telefone (id).
$id_tipo_telefone = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo do Telefone (id).
$id_pessoa = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Pessoa (id) a qual o telefone pertence.
$ddd = "ddd_example"; // string | C\u00C3\u00B3digo DDD do telefone (id).
$telefone = "telefone_example"; // string | N\u00C3\u00BAmero do telefone.
$ramal = "ramal_example"; // string | N\u00C3\u00BAmero do ramal.
$status = 56; // int | Apresenta o Status do Telefone, onde: '0': Inativo e '1': Ativo

try { 
    $result = $api_instance->listarUsingGET17($page, $limit, $id, $id_tipo_telefone, $id_pessoa, $ddd, $telefone, $ramal, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastrosGeraisApi->listarUsingGET17: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) | [optional] 
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Telefone (id). | [optional] 
 **id_tipo_telefone** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo do Telefone (id). | [optional] 
 **id_pessoa** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Pessoa (id) a qual o telefone pertence. | [optional] 
 **ddd** | **string**| C\u00C3\u00B3digo DDD do telefone (id). | [optional] 
 **telefone** | **string**| N\u00C3\u00BAmero do telefone. | [optional] 
 **ramal** | **string**| N\u00C3\u00BAmero do ramal. | [optional] 
 **status** | **int**| Apresenta o Status do Telefone, onde: &#39;0&#39;: Inativo e &#39;1&#39;: Ativo | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTelefones**](PageTelefones.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET18**
> \br.com.conductor.pier.api.v2.model\PageTiposEndereco listarUsingGET18($page, $limit, $id, $nome)

Lista as op\u00C3\u00B5es de Tipos de Endere\u00C3\u00A7os do Emissor 

Este m\u00C3\u00A9todo permite que sejam listados os Tipos de Endere\u00C3\u00A7os existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastrosGeraisApi();
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100)
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo do Endere\u00C3\u00A7o (id)
$nome = "nome_example"; // string | Nome do Tipo do Endere\u00C3\u00A7o

try { 
    $result = $api_instance->listarUsingGET18($page, $limit, $id, $nome);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastrosGeraisApi->listarUsingGET18: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) | [optional] 
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo do Endere\u00C3\u00A7o (id) | [optional] 
 **nome** | **string**| Nome do Tipo do Endere\u00C3\u00A7o | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTiposEndereco**](PageTiposEndereco.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET20**
> \br.com.conductor.pier.api.v2.model\PageTipoTelefones listarUsingGET20($page, $limit, $id, $nome)

Lista os Tipos de Telefones

Este m\u00C3\u00A9todo permite que sejam listados os Tipos de Telefones existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastrosGeraisApi();
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100)
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo do Telefone (id).
$nome = "nome_example"; // string | Nome do Tipo do Telefone

try { 
    $result = $api_instance->listarUsingGET20($page, $limit, $id, $nome);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastrosGeraisApi->listarUsingGET20: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) | [optional] 
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo do Telefone (id). | [optional] 
 **nome** | **string**| Nome do Tipo do Telefone | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTipoTelefones**](PageTipoTelefones.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET6**
> \br.com.conductor.pier.api.v2.model\PageEnderecos listarUsingGET6($page, $limit, $id, $id_pessoa, $id_tipo_endereco, $cep, $logradouro, $numero, $complemento, $ponto_referencia, $bairro, $cidade, $uf, $pais, $data_inclusao, $data_ultima_atualizacao)

Lista os Endere\u00C3\u00A7os cadastrados para o Emissor

Este m\u00C3\u00A9todo permite que sejam listados os Endere\u00C3\u00A7os existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastrosGeraisApi();
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100)
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

try { 
    $result = $api_instance->listarUsingGET6($page, $limit, $id, $id_pessoa, $id_tipo_endereco, $cep, $logradouro, $numero, $complemento, $ponto_referencia, $bairro, $cidade, $uf, $pais, $data_inclusao, $data_ultima_atualizacao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastrosGeraisApi->listarUsingGET6: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) | [optional] 
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

### Return type

[**\br.com.conductor.pier.api.v2.model\PageEnderecos**](PageEnderecos.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET7**
> \br.com.conductor.pier.api.v2.model\PageEstabelecimentos listarUsingGET7($page, $limit, $id, $numero_receita_federal, $nome, $descricao, $nome_fantasia, $cep, $nome_logradouro, $numero_endereco, $complemento, $bairro, $cidade, $uf, $pais, $data_cadastramento, $contato, $email, $flag_arquivo_secr_fazenda, $flag_cartao_digitado, $inativo)

Lista Estabelecimentos

Lista todas os Estabelecimentos

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastrosGeraisApi();
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100)
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
$data_cadastramento = new \DateTime(); // \DateTime | Data de Cadastro do Estabelecimento, no formato yyyy-MM-dd.
$contato = "contato_example"; // string | Nome da pessoa para contato com o Estabelecimento.
$email = "email_example"; // string | E-mail da pessoa para contato com o Estabelecimento.
$flag_arquivo_secr_fazenda = 56; // int | Indica se o estabelecimento ser\u00C3\u00A1 inclu\u00C3\u00ADdo no arquivo de registro para a Secretaria da Fazenda Estadual.
$flag_cartao_digitado = 56; // int | Indica se o estabelecimento poder\u00C3\u00A1 originar transa\u00C3\u00A7\u00C3\u00B5es sem a leitura da tarja ou do chip do cart\u00C3\u00A3o.
$inativo = 56; // int | Indica se o estabelecimento est\u00C3\u00A1 inativo.

try { 
    $result = $api_instance->listarUsingGET7($page, $limit, $id, $numero_receita_federal, $nome, $descricao, $nome_fantasia, $cep, $nome_logradouro, $numero_endereco, $complemento, $bairro, $cidade, $uf, $pais, $data_cadastramento, $contato, $email, $flag_arquivo_secr_fazenda, $flag_cartao_digitado, $inativo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastrosGeraisApi->listarUsingGET7: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) | [optional] 
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
 **data_cadastramento** | **\DateTime**| Data de Cadastro do Estabelecimento, no formato yyyy-MM-dd. | [optional] 
 **contato** | **string**| Nome da pessoa para contato com o Estabelecimento. | [optional] 
 **email** | **string**| E-mail da pessoa para contato com o Estabelecimento. | [optional] 
 **flag_arquivo_secr_fazenda** | **int**| Indica se o estabelecimento ser\u00C3\u00A1 inclu\u00C3\u00ADdo no arquivo de registro para a Secretaria da Fazenda Estadual. | [optional] 
 **flag_cartao_digitado** | **int**| Indica se o estabelecimento poder\u00C3\u00A1 originar transa\u00C3\u00A7\u00C3\u00B5es sem a leitura da tarja ou do chip do cart\u00C3\u00A3o. | [optional] 
 **inativo** | **int**| Indica se o estabelecimento est\u00C3\u00A1 inativo. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageEstabelecimentos**](PageEstabelecimentos.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarPessoaFisicaAprovadaUsingPOST**
> \br.com.conductor.pier.api.v2.model\PessoaFisicaAprovadaResponse salvarPessoaFisicaAprovadaUsingPOST($pessoa_persist)

Cadastro de Conta e Pessoa Fisica

Permite realizar o cadastro de uma Conta para um cliente do tipo Pessoa F\u00C3\u00ADsica, recebendo nesta opera\u00C3\u00A7\u00C3\u00A3o todos os dados cadastrais que se fazem necess\u00C3\u00A1rios para isso. Uma vez criado, poder\u00C3\u00A1 ser acionado o m\u00C3\u00A9todo de 'Gera\u00C3\u00A7\u00C3\u00A3o de Cart\u00C3\u00A3o' para o cliente e seus adicionais.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastrosGeraisApi();
$pessoa_persist = new \br.com.conductor.pier.api.v2.model\PessoaFisicaAprovadaPersist(); // \br.com.conductor.pier.api.v2.model\PessoaFisicaAprovadaPersist | pessoaPersist

try { 
    $result = $api_instance->salvarPessoaFisicaAprovadaUsingPOST($pessoa_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastrosGeraisApi->salvarPessoaFisicaAprovadaUsingPOST: ', $e->getMessage(), "\n";
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

Cadastro de Conta e Pessoa Jur\u00C3\u00ADdica

Cadastro de Conta e Pessoa Jur\u00C3\u00ADdica Permite realizar o cadastro de uma Conta para um cliente do tipo Pessoa Jur\u00C3\u00ADdica, recebendo nesta opera\u00C3\u00A7\u00C3\u00A3o todos os dados cadastrais que se fazem necess\u00C3\u00A1rios para isso, inclu\u00C3\u00ADndo o registro de cada um dos s\u00C3\u00B3cios. Uma vez criado, poder\u00C3\u00A1 ser acionado o m\u00C3\u00A9todo de 'Gera\u00C3\u00A7\u00C3\u00A3o de Cart\u00C3\u00A3o' para o cliente e cada um dos s\u00C3\u00B3cios vinculados.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastrosGeraisApi();
$pessoa_persist = new \br.com.conductor.pier.api.v2.model\PessoaJuridicaAprovadaPersist(); // \br.com.conductor.pier.api.v2.model\PessoaJuridicaAprovadaPersist | pessoaPersist

try { 
    $result = $api_instance->salvarPessoaJuridicaAprovadaUsingPOST($pessoa_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastrosGeraisApi->salvarPessoaJuridicaAprovadaUsingPOST: ', $e->getMessage(), "\n";
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

# **salvarUsingPOST4**
> \br.com.conductor.pier.api.v2.model\Endereco salvarUsingPOST4($id_pessoa, $id_tipo_endereco, $cep, $logradouro, $numero, $complemento, $ponto_referencia, $bairro, $cidade, $uf, $pais)

Realiza o cadastro de um novo Endere\u00C3\u00A7o

Este m\u00C3\u00A9todo permite que seja cadastrado um novo Endere\u00C3\u00A7o na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastrosGeraisApi();
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
    $result = $api_instance->salvarUsingPOST4($id_pessoa, $id_tipo_endereco, $cep, $logradouro, $numero, $complemento, $ponto_referencia, $bairro, $cidade, $uf, $pais);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastrosGeraisApi->salvarUsingPOST4: ', $e->getMessage(), "\n";
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

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST6**
> \br.com.conductor.pier.api.v2.model\PessoaDetalheResponse salvarUsingPOST6($id_pessoa, $nome_mae, $id_estado_civil, $profissao, $id_natureza_ocupacao, $id_nacionalidade, $numero_agencia, $numero_conta_corrente, $email, $nome_empresa)

Salvar os detalhes de uma determinada Pessoa

Este m\u00C3\u00A9todo permite que seja incluido na base do emissor os detalhes de uma determinada Pessoa.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastrosGeraisApi();
$id_pessoa = 789; // int | Apresenta o c\u00C3\u00B3digo identificador da pessoa
$nome_mae = "nome_mae_example"; // string | Apresenta o nome da m\u00C3\u00A3e da pessoa fisica
$id_estado_civil = 789; // int | Id Estado civil da pessoa fisica
$profissao = "profissao_example"; // string | Profiss\u00C3\u00A3o da pessoa fisica
$id_natureza_ocupacao = 789; // int | Id Natureza Ocupa\u00C3\u00A7\u00C3\u00A3o da pessoa fisica
$id_nacionalidade = 789; // int | Id Nacionalidade da pessoa fisica
$numero_agencia = 56; // int | N\u00C3\u00BAmero da ag\u00C3\u00AAncia.
$numero_conta_corrente = "numero_conta_corrente_example"; // string | N\u00C3\u00BAmero da conta corrente.
$email = "email_example"; // string | Email da pessoa fisica
$nome_empresa = "nome_empresa_example"; // string | Nome que deve ser impresso no cart\u00C3\u00A3o

try { 
    $result = $api_instance->salvarUsingPOST6($id_pessoa, $nome_mae, $id_estado_civil, $profissao, $id_natureza_ocupacao, $id_nacionalidade, $numero_agencia, $numero_conta_corrente, $email, $nome_empresa);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastrosGeraisApi->salvarUsingPOST6: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_pessoa** | **int**| Apresenta o c\u00C3\u00B3digo identificador da pessoa | [optional] 
 **nome_mae** | **string**| Apresenta o nome da m\u00C3\u00A3e da pessoa fisica | [optional] 
 **id_estado_civil** | **int**| Id Estado civil da pessoa fisica | [optional] 
 **profissao** | **string**| Profiss\u00C3\u00A3o da pessoa fisica | [optional] 
 **id_natureza_ocupacao** | **int**| Id Natureza Ocupa\u00C3\u00A7\u00C3\u00A3o da pessoa fisica | [optional] 
 **id_nacionalidade** | **int**| Id Nacionalidade da pessoa fisica | [optional] 
 **numero_agencia** | **int**| N\u00C3\u00BAmero da ag\u00C3\u00AAncia. | [optional] 
 **numero_conta_corrente** | **string**| N\u00C3\u00BAmero da conta corrente. | [optional] 
 **email** | **string**| Email da pessoa fisica | [optional] 
 **nome_empresa** | **string**| Nome que deve ser impresso no cart\u00C3\u00A3o | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PessoaDetalheResponse**](PessoaDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST7**
> \br.com.conductor.pier.api.v2.model\Pessoa salvarUsingPOST7($nome, $tipo, $cpf, $cnpj, $data_nascimento, $sexo, $numero_identidade, $orgao_expedidor_identidade, $unidade_federativa_identidade, $data_emissao_identidade)

Realiza o cadastro de um nova Pessoa

Este m\u00C3\u00A9todo permite que seja cadastrado uma nova Pessoa na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastrosGeraisApi();
$nome = "nome_example"; // string | Apresenta o 'Nome Completo da PF' ou o 'Nome Completo da Raz\u00C3\u00A3o Social (Nome Empresarial)'.
$tipo = "tipo_example"; // string | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do tipo da Pessoa, sendo: (\"PF\": Pessoa F\u00C3\u00ADsica), (\"PJ\": Pessoa Jur\u00C3\u00ADdica).
$cpf = "cpf_example"; // string | N\u00C3\u00BAmero do CPF, quando PF.
$cnpj = "cnpj_example"; // string | N\u00C3\u00BAmero do CNPJ, quando PJ.
$data_nascimento = new \DateTime(); // \DateTime | Data de Nascimento da Pessoa, quando PF, ou a Data de Abertura da Empresa, quando PJ. Essa data deve ser informada no formato aaaa-MM-dd.
$sexo = "sexo_example"; // string | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do sexo da Pessoa, quando PF, sendo: (\"M\": Masculino), (\"F\": Feminino), (\"O\": Outro), (\"N\": N\u00C3\u00A3o Especificado).
$numero_identidade = "numero_identidade_example"; // string | N\u00C3\u00BAmero da Identidade.
$orgao_expedidor_identidade = "orgao_expedidor_identidade_example"; // string | Org\u00C3\u00A3o expedidor do Identidade.
$unidade_federativa_identidade = "unidade_federativa_identidade_example"; // string | Sigla da Unidade Federativa de onde foi expedido a Identidade
$data_emissao_identidade = new \DateTime(); // \DateTime | Data emiss\u00C3\u00A3o da Identidade.

try { 
    $result = $api_instance->salvarUsingPOST7($nome, $tipo, $cpf, $cnpj, $data_nascimento, $sexo, $numero_identidade, $orgao_expedidor_identidade, $unidade_federativa_identidade, $data_emissao_identidade);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastrosGeraisApi->salvarUsingPOST7: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nome** | **string**| Apresenta o &#39;Nome Completo da PF&#39; ou o &#39;Nome Completo da Raz\u00C3\u00A3o Social (Nome Empresarial)&#39;. | 
 **tipo** | **string**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do tipo da Pessoa, sendo: (\&quot;PF\&quot;: Pessoa F\u00C3\u00ADsica), (\&quot;PJ\&quot;: Pessoa Jur\u00C3\u00ADdica). | 
 **cpf** | **string**| N\u00C3\u00BAmero do CPF, quando PF. | [optional] 
 **cnpj** | **string**| N\u00C3\u00BAmero do CNPJ, quando PJ. | [optional] 
 **data_nascimento** | **\DateTime**| Data de Nascimento da Pessoa, quando PF, ou a Data de Abertura da Empresa, quando PJ. Essa data deve ser informada no formato aaaa-MM-dd. | [optional] 
 **sexo** | **string**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do sexo da Pessoa, quando PF, sendo: (\&quot;M\&quot;: Masculino), (\&quot;F\&quot;: Feminino), (\&quot;O\&quot;: Outro), (\&quot;N\&quot;: N\u00C3\u00A3o Especificado). | [optional] 
 **numero_identidade** | **string**| N\u00C3\u00BAmero da Identidade. | [optional] 
 **orgao_expedidor_identidade** | **string**| Org\u00C3\u00A3o expedidor do Identidade. | [optional] 
 **unidade_federativa_identidade** | **string**| Sigla da Unidade Federativa de onde foi expedido a Identidade | [optional] 
 **data_emissao_identidade** | **\DateTime**| Data emiss\u00C3\u00A3o da Identidade. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\Pessoa**](Pessoa.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST9**
> \br.com.conductor.pier.api.v2.model\Telefone salvarUsingPOST9($id_tipo_telefone, $id_pessoa, $ddd, $telefone, $ramal)

Realiza o cadastro de um novo Telefone

Este m\u00C3\u00A9todo permite que seja cadastrado um novo Telefone na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastrosGeraisApi();
$id_tipo_telefone = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo do Telefone (id).
$id_pessoa = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Pessoa (id) a qual o telefone pertence.
$ddd = "ddd_example"; // string | C\u00C3\u00B3digo DDD do telefone (id).
$telefone = "telefone_example"; // string | N\u00C3\u00BAmero do telefone.
$ramal = "ramal_example"; // string | N\u00C3\u00BAmero do ramal.

try { 
    $result = $api_instance->salvarUsingPOST9($id_tipo_telefone, $id_pessoa, $ddd, $telefone, $ramal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastrosGeraisApi->salvarUsingPOST9: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_tipo_telefone** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo do Telefone (id). | [optional] 
 **id_pessoa** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Pessoa (id) a qual o telefone pertence. | [optional] 
 **ddd** | **string**| C\u00C3\u00B3digo DDD do telefone (id). | [optional] 
 **telefone** | **string**| N\u00C3\u00BAmero do telefone. | [optional] 
 **ramal** | **string**| N\u00C3\u00BAmero do ramal. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\Telefone**](Telefone.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

