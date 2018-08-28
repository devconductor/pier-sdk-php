# br.com.conductor.pier.api.v2.invoker\GlobaltagcadastroclienteApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarUsingPUT**](GlobaltagcadastroclienteApi.md#alterarUsingPUT) | **PUT** /api/contas/{id}/adicionais/{idPessoa} | {{{adicional_resource_alterar}}}
[**alterarUsingPUT15**](GlobaltagcadastroclienteApi.md#alterarUsingPUT15) | **PUT** /api/pessoas-detalhes/{id} | {{{pessoa_detalhe_resource_alterar}}}
[**alterarUsingPUT16**](GlobaltagcadastroclienteApi.md#alterarUsingPUT16) | **PUT** /api/pessoas/{id} | {{{pessoa_resource_alterar}}}
[**alterarUsingPUT18**](GlobaltagcadastroclienteApi.md#alterarUsingPUT18) | **PUT** /api/telefones | {{{telefone_resource_alterar}}}
[**alterarUsingPUT5**](GlobaltagcadastroclienteApi.md#alterarUsingPUT5) | **PUT** /api/enderecos | {{{endereco_resource_alterar}}}
[**atribuirAssinaturaClienteUsingPOST**](GlobaltagcadastroclienteApi.md#atribuirAssinaturaClienteUsingPOST) | **POST** /api/contas/{id}/atribuir-assinatura-cliente | {{{conta_pessoa_resource_atribuir_assinatura_cliente}}}
[**atualizarEnderecoDeCorrespondenciaUsingPUT**](GlobaltagcadastroclienteApi.md#atualizarEnderecoDeCorrespondenciaUsingPUT) | **PUT** /api/enderecos/{id}/alterar-endereco-correspondencia | {{{endereco_resource_atualizar_correspondencia}}}
[**atualizarUsingPOST**](GlobaltagcadastroclienteApi.md#atualizarUsingPOST) | **POST** /api/contas/{id}/atualizar-registro-integracao | {{{integracao_emissor_resource_atualizar}}}
[**cadastrarAdicionalUsingPOST**](GlobaltagcadastroclienteApi.md#cadastrarAdicionalUsingPOST) | **POST** /api/contas/{id}/adicionais | {{{adicional_resource_cadastrar_adicional}}}
[**cadastrarUsingPOST1**](GlobaltagcadastroclienteApi.md#cadastrarUsingPOST1) | **POST** /api/contas/{id}/cadastrar-adicional | {{{adicional_resource_cadastrar}}}
[**consultarUsingGET2**](GlobaltagcadastroclienteApi.md#consultarUsingGET2) | **GET** /api/contas/{id}/adicionais/{idPessoa} | {{{adicional_resource_consultar}}}
[**consultarUsingGET21**](GlobaltagcadastroclienteApi.md#consultarUsingGET21) | **GET** /api/enderecos/{id} | {{{endereco_resource_consultar}}}
[**consultarUsingGET32**](GlobaltagcadastroclienteApi.md#consultarUsingGET32) | **GET** /api/pessoas-detalhes/{id} | {{{pessoa_detalhe_resource_consultar}}}
[**consultarUsingGET33**](GlobaltagcadastroclienteApi.md#consultarUsingGET33) | **GET** /api/pessoas/{id} | {{{pessoa_resource_consultar}}}
[**consultarUsingGET41**](GlobaltagcadastroclienteApi.md#consultarUsingGET41) | **GET** /api/telefones/{id} | {{{telefone_resource_consultar}}}
[**inativarUsingPOST**](GlobaltagcadastroclienteApi.md#inativarUsingPOST) | **POST** /api/contas/{id}/adicionais/{idPessoa}/inativar | {{{adicional_resource_inativar}}}
[**listarSociosUsingGET**](GlobaltagcadastroclienteApi.md#listarSociosUsingGET) | **GET** /api/clientes-pessoas-juridicas/{id}/socios | {{{conta_pessoa_resource_listar_socios}}}
[**listarUsingGET1**](GlobaltagcadastroclienteApi.md#listarUsingGET1) | **GET** /api/contas/{id}/adicionais | {{{adicional_resource_listar}}}
[**listarUsingGET25**](GlobaltagcadastroclienteApi.md#listarUsingGET25) | **GET** /api/enderecos | {{{endereco_resource_listar}}}
[**listarUsingGET40**](GlobaltagcadastroclienteApi.md#listarUsingGET40) | **GET** /api/pessoas-detalhes | {{{pessoa_detalhe_resource_listar}}}
[**listarUsingGET41**](GlobaltagcadastroclienteApi.md#listarUsingGET41) | **GET** /api/pessoas | {{{pessoa_resource_listar}}}
[**listarUsingGET53**](GlobaltagcadastroclienteApi.md#listarUsingGET53) | **GET** /api/telefones | {{{telefone_resource_listar}}}
[**salvarPessoaFisicaAprovadaUsingPOST**](GlobaltagcadastroclienteApi.md#salvarPessoaFisicaAprovadaUsingPOST) | **POST** /api/clientes-pessoas-fisicas | {{{conta_pessoa_resource_salvar_pessoa_fisica_aprovada}}}
[**salvarPessoaJuridicaAprovadaUsingPOST**](GlobaltagcadastroclienteApi.md#salvarPessoaJuridicaAprovadaUsingPOST) | **POST** /api/clientes-pessoas-juridicas | {{{conta_pessoa_resource_salvar_pessoa_juridica_aprovada}}}
[**salvarUsingPOST14**](GlobaltagcadastroclienteApi.md#salvarUsingPOST14) | **POST** /api/enderecos | {{{endereco_resource_salvar}}}
[**salvarUsingPOST17**](GlobaltagcadastroclienteApi.md#salvarUsingPOST17) | **POST** /api/contas/{id}/incluir-registro-integracao | {{{integracao_emissor_resource_salvar}}}
[**salvarUsingPOST25**](GlobaltagcadastroclienteApi.md#salvarUsingPOST25) | **POST** /api/pessoas-detalhes | {{{pessoa_detalhe_resource_salvar}}}
[**salvarUsingPOST26**](GlobaltagcadastroclienteApi.md#salvarUsingPOST26) | **POST** /api/pessoas | {{{pessoa_resource_salvar}}}
[**salvarUsingPOST29**](GlobaltagcadastroclienteApi.md#salvarUsingPOST29) | **POST** /api/telefones | {{{telefone_resource_salvar}}}


# **alterarUsingPUT**
> \br.com.conductor.pier.api.v2.model\AdicionalDetalheResponse alterarUsingPUT($id, $id_pessoa, $adicional_update)

{{{adicional_resource_alterar}}}

{{{adicional_resource_alterar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastroclienteApi();
$id = 789; // int | {{{adicional_resource_alterar_param_id_conta}}}
$id_pessoa = 789; // int | {{{adicional_resource_alterar_param_id_pessoa}}}
$adicional_update = new \br.com.conductor.pier.api.v2.model\AdicionalUpdate(); // \br.com.conductor.pier.api.v2.model\AdicionalUpdate | adicionalUpdate

try { 
    $result = $api_instance->alterarUsingPUT($id, $id_pessoa, $adicional_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastroclienteApi->alterarUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{adicional_resource_alterar_param_id_conta}}} | 
 **id_pessoa** | **int**| {{{adicional_resource_alterar_param_id_pessoa}}} | 
 **adicional_update** | [**\br.com.conductor.pier.api.v2.model\AdicionalUpdate**](\br.com.conductor.pier.api.v2.model\AdicionalUpdate.md)| adicionalUpdate | 

### Return type

[**\br.com.conductor.pier.api.v2.model\AdicionalDetalheResponse**](AdicionalDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarUsingPUT15**
> \br.com.conductor.pier.api.v2.model\PessoaDetalheResponse alterarUsingPUT15($id, $nome_mae, $id_estado_civil, $id_profissao, $id_natureza_ocupacao, $id_nacionalidade, $numero_banco, $numero_agencia, $numero_conta_corrente, $email, $nome_empresa)

{{{pessoa_detalhe_resource_alterar}}}

{{{pessoa_detalhe_resource_alterar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastroclienteApi();
$id = 789; // int | {{{pessoa_detalhe_resource_alterar_param_id}}}
$nome_mae = "nome_mae_example"; // string | {{{pessoa_detalhe_update_nome_mae_value}}}
$id_estado_civil = 789; // int | {{{pessoa_detalhe_update_id_estado_civil_value}}}
$id_profissao = "id_profissao_example"; // string | {{{pessoa_detalhe_update_id_profissao_value}}}
$id_natureza_ocupacao = 789; // int | {{{pessoa_detalhe_update_id_natureza_ocupacao_value}}}
$id_nacionalidade = 789; // int | {{{pessoa_detalhe_update_id_nacionalidade_value}}}
$numero_banco = 56; // int | {{{pessoa_detalhe_update_numero_banco_value}}}
$numero_agencia = 56; // int | {{{pessoa_detalhe_update_numero_agencia_value}}}
$numero_conta_corrente = "numero_conta_corrente_example"; // string | {{{pessoa_detalhe_update_numero_conta_corrente_value}}}
$email = "email_example"; // string | {{{pessoa_detalhe_update_email_value}}}
$nome_empresa = "nome_empresa_example"; // string | {{{pessoa_detalhe_update_nome_empresa_value}}}

try { 
    $result = $api_instance->alterarUsingPUT15($id, $nome_mae, $id_estado_civil, $id_profissao, $id_natureza_ocupacao, $id_nacionalidade, $numero_banco, $numero_agencia, $numero_conta_corrente, $email, $nome_empresa);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastroclienteApi->alterarUsingPUT15: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{pessoa_detalhe_resource_alterar_param_id}}} | 
 **nome_mae** | **string**| {{{pessoa_detalhe_update_nome_mae_value}}} | [optional] 
 **id_estado_civil** | **int**| {{{pessoa_detalhe_update_id_estado_civil_value}}} | [optional] 
 **id_profissao** | **string**| {{{pessoa_detalhe_update_id_profissao_value}}} | [optional] 
 **id_natureza_ocupacao** | **int**| {{{pessoa_detalhe_update_id_natureza_ocupacao_value}}} | [optional] 
 **id_nacionalidade** | **int**| {{{pessoa_detalhe_update_id_nacionalidade_value}}} | [optional] 
 **numero_banco** | **int**| {{{pessoa_detalhe_update_numero_banco_value}}} | [optional] 
 **numero_agencia** | **int**| {{{pessoa_detalhe_update_numero_agencia_value}}} | [optional] 
 **numero_conta_corrente** | **string**| {{{pessoa_detalhe_update_numero_conta_corrente_value}}} | [optional] 
 **email** | **string**| {{{pessoa_detalhe_update_email_value}}} | [optional] 
 **nome_empresa** | **string**| {{{pessoa_detalhe_update_nome_empresa_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PessoaDetalheResponse**](PessoaDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarUsingPUT16**
> \br.com.conductor.pier.api.v2.model\PessoaResponse alterarUsingPUT16($id, $nome, $tipo, $data_nascimento, $cpf, $cnpj, $sexo, $numero_identidade, $orgao_expedidor_identidade, $unidade_federativa_identidade, $data_emissao_identidade)

{{{pessoa_resource_alterar}}}

{{{pessoa_resource_alterar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastroclienteApi();
$id = 789; // int | {{{pessoa_resource_alterar_param_id}}}
$nome = "nome_example"; // string | {{{pessoa_persist_nome_value}}}
$tipo = "tipo_example"; // string | {{{pessoa_persist_tipo_value}}}
$data_nascimento = "data_nascimento_example"; // string | {{{pessoa_persist_data_nascimento_value}}}
$cpf = "cpf_example"; // string | {{{pessoa_persist_cpf_value}}}
$cnpj = "cnpj_example"; // string | {{{pessoa_persist_cnpj_value}}}
$sexo = "sexo_example"; // string | {{{pessoa_persist_sexo_value}}}
$numero_identidade = "numero_identidade_example"; // string | {{{pessoa_persist_numero_identidade_value}}}
$orgao_expedidor_identidade = "orgao_expedidor_identidade_example"; // string | {{{pessoa_persist_orgao_expedidor_identidade_value}}}
$unidade_federativa_identidade = "unidade_federativa_identidade_example"; // string | {{{pessoa_persist_unidade_federativa_identidade_value}}}
$data_emissao_identidade = "data_emissao_identidade_example"; // string | {{{pessoa_persist_data_emissao_identidade_value}}}

try { 
    $result = $api_instance->alterarUsingPUT16($id, $nome, $tipo, $data_nascimento, $cpf, $cnpj, $sexo, $numero_identidade, $orgao_expedidor_identidade, $unidade_federativa_identidade, $data_emissao_identidade);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastroclienteApi->alterarUsingPUT16: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{pessoa_resource_alterar_param_id}}} | 
 **nome** | **string**| {{{pessoa_persist_nome_value}}} | 
 **tipo** | **string**| {{{pessoa_persist_tipo_value}}} | 
 **data_nascimento** | **string**| {{{pessoa_persist_data_nascimento_value}}} | 
 **cpf** | **string**| {{{pessoa_persist_cpf_value}}} | [optional] 
 **cnpj** | **string**| {{{pessoa_persist_cnpj_value}}} | [optional] 
 **sexo** | **string**| {{{pessoa_persist_sexo_value}}} | [optional] 
 **numero_identidade** | **string**| {{{pessoa_persist_numero_identidade_value}}} | [optional] 
 **orgao_expedidor_identidade** | **string**| {{{pessoa_persist_orgao_expedidor_identidade_value}}} | [optional] 
 **unidade_federativa_identidade** | **string**| {{{pessoa_persist_unidade_federativa_identidade_value}}} | [optional] 
 **data_emissao_identidade** | **string**| {{{pessoa_persist_data_emissao_identidade_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PessoaResponse**](PessoaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarUsingPUT18**
> \br.com.conductor.pier.api.v2.model\TelefoneResponse alterarUsingPUT18($id, $id_tipo_telefone, $ddd, $telefone, $ramal)

{{{telefone_resource_alterar}}}

{{{telefone_resource_alterar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastroclienteApi();
$id = 789; // int | {{{telefone_alterar_persist_id_value}}}
$id_tipo_telefone = 789; // int | {{{telefone_alterar_persist_id_tipo_telefone_value}}}
$ddd = "ddd_example"; // string | {{{telefone_alterar_persist_ddd_value}}}
$telefone = "telefone_example"; // string | {{{telefone_alterar_persist_telefone_value}}}
$ramal = "ramal_example"; // string | {{{telefone_alterar_persist_ramal_value}}}

try { 
    $result = $api_instance->alterarUsingPUT18($id, $id_tipo_telefone, $ddd, $telefone, $ramal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastroclienteApi->alterarUsingPUT18: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{telefone_alterar_persist_id_value}}} | 
 **id_tipo_telefone** | **int**| {{{telefone_alterar_persist_id_tipo_telefone_value}}} | [optional] 
 **ddd** | **string**| {{{telefone_alterar_persist_ddd_value}}} | [optional] 
 **telefone** | **string**| {{{telefone_alterar_persist_telefone_value}}} | [optional] 
 **ramal** | **string**| {{{telefone_alterar_persist_ramal_value}}} | [optional] 

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

{{{endereco_resource_alterar}}}

{{{endereco_resource_alterar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastroclienteApi();
$id = 789; // int | id
$id_pessoa = 789; // int | {{{endereco_persist_id_pessoa_value}}}
$id_tipo_endereco = 789; // int | {{{endereco_persist_id_tipo_endereco_value}}}
$cep = "cep_example"; // string | {{{endereco_persist_cep_value}}}
$logradouro = "logradouro_example"; // string | {{{endereco_persist_logradouro_value}}}
$numero = 56; // int | {{{endereco_persist_numero_value}}}
$complemento = "complemento_example"; // string | {{{endereco_persist_complemento_value}}}
$ponto_referencia = "ponto_referencia_example"; // string | {{{endereco_persist_ponto_referencia_value}}}
$bairro = "bairro_example"; // string | {{{endereco_persist_bairro_value}}}
$cidade = "cidade_example"; // string | {{{endereco_persist_cidade_value}}}
$uf = "uf_example"; // string | {{{endereco_persist_uf_value}}}
$pais = "pais_example"; // string | {{{endereco_persist_pais_value}}}

try { 
    $result = $api_instance->alterarUsingPUT5($id, $id_pessoa, $id_tipo_endereco, $cep, $logradouro, $numero, $complemento, $ponto_referencia, $bairro, $cidade, $uf, $pais);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastroclienteApi->alterarUsingPUT5: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id | 
 **id_pessoa** | **int**| {{{endereco_persist_id_pessoa_value}}} | [optional] 
 **id_tipo_endereco** | **int**| {{{endereco_persist_id_tipo_endereco_value}}} | [optional] 
 **cep** | **string**| {{{endereco_persist_cep_value}}} | [optional] 
 **logradouro** | **string**| {{{endereco_persist_logradouro_value}}} | [optional] 
 **numero** | **int**| {{{endereco_persist_numero_value}}} | [optional] 
 **complemento** | **string**| {{{endereco_persist_complemento_value}}} | [optional] 
 **ponto_referencia** | **string**| {{{endereco_persist_ponto_referencia_value}}} | [optional] 
 **bairro** | **string**| {{{endereco_persist_bairro_value}}} | [optional] 
 **cidade** | **string**| {{{endereco_persist_cidade_value}}} | [optional] 
 **uf** | **string**| {{{endereco_persist_uf_value}}} | [optional] 
 **pais** | **string**| {{{endereco_persist_pais_value}}} | [optional] 

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

{{{conta_pessoa_resource_atribuir_assinatura_cliente}}}

{{{conta_pessoa_resource_atribuir_assinatura_cliente_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastroclienteApi();
$id = 789; // int | {{{conta_pessoa_resource_atribuir_assinatura_cliente_param_id}}}
$body = new \br.com.conductor.pier.api.v2.model\AtribuirAssinaturaClientePersist(); // \br.com.conductor.pier.api.v2.model\AtribuirAssinaturaClientePersist | {{{conta_pessoa_resource_atribuir_assinatura_cliente_param_body}}}

try { 
    $result = $api_instance->atribuirAssinaturaClienteUsingPOST($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastroclienteApi->atribuirAssinaturaClienteUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{conta_pessoa_resource_atribuir_assinatura_cliente_param_id}}} | 
 **body** | [**\br.com.conductor.pier.api.v2.model\AtribuirAssinaturaClientePersist**](\br.com.conductor.pier.api.v2.model\AtribuirAssinaturaClientePersist.md)| {{{conta_pessoa_resource_atribuir_assinatura_cliente_param_body}}} | 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **atualizarEnderecoDeCorrespondenciaUsingPUT**
> \br.com.conductor.pier.api.v2.model\EnderecoResponse atualizarEnderecoDeCorrespondenciaUsingPUT($id, $id_conta)

{{{endereco_resource_atualizar_correspondencia}}}

{{{endereco_resource_atualizar_correspondencia_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastroclienteApi();
$id = 789; // int | {{{endereco_resource_atualizar_correspondencia_param_id}}}
$id_conta = 789; // int | {{{endereco_resource_atualizar_correspondencia_param_idConta}}}

try { 
    $result = $api_instance->atualizarEnderecoDeCorrespondenciaUsingPUT($id, $id_conta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastroclienteApi->atualizarEnderecoDeCorrespondenciaUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{endereco_resource_atualizar_correspondencia_param_id}}} | 
 **id_conta** | **int**| {{{endereco_resource_atualizar_correspondencia_param_idConta}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\EnderecoResponse**](EnderecoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **atualizarUsingPOST**
> \br.com.conductor.pier.api.v2.model\IntegracaoEmissorResponse atualizarUsingPOST($id, $body)

{{{integracao_emissor_resource_atualizar}}}

{{{integracao_emissor_resource_atualizar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastroclienteApi();
$id = 789; // int | {{{integracao_emissor_resource_atualizar_param_id_conta}}}
$body = new \br.com.conductor.pier.api.v2.model\IntegracaoEmissorPersist(); // \br.com.conductor.pier.api.v2.model\IntegracaoEmissorPersist | {{{integracao_emissor_resource_atualizar_param_body}}}

try { 
    $result = $api_instance->atualizarUsingPOST($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastroclienteApi->atualizarUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{integracao_emissor_resource_atualizar_param_id_conta}}} | 
 **body** | [**\br.com.conductor.pier.api.v2.model\IntegracaoEmissorPersist**](\br.com.conductor.pier.api.v2.model\IntegracaoEmissorPersist.md)| {{{integracao_emissor_resource_atualizar_param_body}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\IntegracaoEmissorResponse**](IntegracaoEmissorResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **cadastrarAdicionalUsingPOST**
> \br.com.conductor.pier.api.v2.model\AdicionalContaResponse cadastrarAdicionalUsingPOST($id, $adicional_conta_persist)

{{{adicional_resource_cadastrar_adicional}}}

{{{adicional_resource_cadastrar_adicional_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastroclienteApi();
$id = 789; // int | {{{adicional_resource_cadastrar_adicional_param_id_conta}}}
$adicional_conta_persist = new \br.com.conductor.pier.api.v2.model\AdicionalContaPersist(); // \br.com.conductor.pier.api.v2.model\AdicionalContaPersist | adicionalContaPersist

try { 
    $result = $api_instance->cadastrarAdicionalUsingPOST($id, $adicional_conta_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastroclienteApi->cadastrarAdicionalUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{adicional_resource_cadastrar_adicional_param_id_conta}}} | 
 **adicional_conta_persist** | [**\br.com.conductor.pier.api.v2.model\AdicionalContaPersist**](\br.com.conductor.pier.api.v2.model\AdicionalContaPersist.md)| adicionalContaPersist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\AdicionalContaResponse**](AdicionalContaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **cadastrarUsingPOST1**
> \br.com.conductor.pier.api.v2.model\AdicionalDetalheResponse cadastrarUsingPOST1($id, $persist)

{{{adicional_resource_cadastrar}}}

{{{adicional_resource_cadastrar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastroclienteApi();
$id = 789; // int | {{{adicional_resource_cadastrar_param_id_conta}}}
$persist = new \br.com.conductor.pier.api.v2.model\AdicionalPersist(); // \br.com.conductor.pier.api.v2.model\AdicionalPersist | persist

try { 
    $result = $api_instance->cadastrarUsingPOST1($id, $persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastroclienteApi->cadastrarUsingPOST1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{adicional_resource_cadastrar_param_id_conta}}} | 
 **persist** | [**\br.com.conductor.pier.api.v2.model\AdicionalPersist**](\br.com.conductor.pier.api.v2.model\AdicionalPersist.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\AdicionalDetalheResponse**](AdicionalDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET2**
> \br.com.conductor.pier.api.v2.model\AdicionalDetalheResponse consultarUsingGET2($id, $id_pessoa)

{{{adicional_resource_consultar}}}

{{{adicional_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastroclienteApi();
$id = 789; // int | {{{adicional_resource_consultar_param_id_conta}}}
$id_pessoa = 789; // int | {{{adicional_resource_consultar_param_id_pessoa}}}

try { 
    $result = $api_instance->consultarUsingGET2($id, $id_pessoa);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastroclienteApi->consultarUsingGET2: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{adicional_resource_consultar_param_id_conta}}} | 
 **id_pessoa** | **int**| {{{adicional_resource_consultar_param_id_pessoa}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\AdicionalDetalheResponse**](AdicionalDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET21**
> \br.com.conductor.pier.api.v2.model\EnderecoResponse consultarUsingGET21($id)

{{{endereco_resource_consultar}}}

{{{endereco_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastroclienteApi();
$id = 789; // int | {{{endereco_resource_consultar_param_id}}}

try { 
    $result = $api_instance->consultarUsingGET21($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastroclienteApi->consultarUsingGET21: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{endereco_resource_consultar_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\EnderecoResponse**](EnderecoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET32**
> \br.com.conductor.pier.api.v2.model\PessoaDetalheResponse consultarUsingGET32($id)

{{{pessoa_detalhe_resource_consultar}}}

{{{pessoa_detalhe_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastroclienteApi();
$id = 789; // int | {{{pessoa_detalhe_resource_consultar_param_id}}}

try { 
    $result = $api_instance->consultarUsingGET32($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastroclienteApi->consultarUsingGET32: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{pessoa_detalhe_resource_consultar_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\PessoaDetalheResponse**](PessoaDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET33**
> \br.com.conductor.pier.api.v2.model\PessoaResponse consultarUsingGET33($id)

{{{pessoa_resource_consultar}}}

{{{pessoa_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastroclienteApi();
$id = 789; // int | {{{pessoa_resource_consultar_param_id}}}

try { 
    $result = $api_instance->consultarUsingGET33($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastroclienteApi->consultarUsingGET33: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{pessoa_resource_consultar_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\PessoaResponse**](PessoaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET41**
> \br.com.conductor.pier.api.v2.model\TelefoneResponse consultarUsingGET41($id)

{{{telefone_resource_consultar}}}

{{{telefone_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastroclienteApi();
$id = 789; // int | {{{telefone_resource_consultar_param_id}}}

try { 
    $result = $api_instance->consultarUsingGET41($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastroclienteApi->consultarUsingGET41: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{telefone_resource_consultar_param_id}}} | 

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

{{{adicional_resource_inativar}}}

{{{adicional_resource_inativar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastroclienteApi();
$id = 789; // int | {{{adicional_resource_inativar_param_id_conta}}}
$id_pessoa = 789; // int | {{{adicional_resource_inativar_param_id_pessoa}}}

try { 
    $result = $api_instance->inativarUsingPOST($id, $id_pessoa);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastroclienteApi->inativarUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{adicional_resource_inativar_param_id_conta}}} | 
 **id_pessoa** | **int**| {{{adicional_resource_inativar_param_id_pessoa}}} | 

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

{{{conta_pessoa_resource_listar_socios}}}

{{{conta_pessoa_resource_listar_socios_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastroclienteApi();
$id = 789; // int | {{{conta_pessoa_resource_listar_socios_param_id}}}
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}

try { 
    $result = $api_instance->listarSociosUsingGET($id, $sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastroclienteApi->listarSociosUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{conta_pessoa_resource_listar_socios_param_id}}} | 
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 

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

{{{adicional_resource_listar}}}

{{{adicional_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastroclienteApi();
$id = 789; // int | {{{adicional_resource_listar_param_id_conta}}}
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}

try { 
    $result = $api_instance->listarUsingGET1($id, $sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastroclienteApi->listarUsingGET1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{adicional_resource_listar_param_id_conta}}} | 
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\AdicionalResponse**](AdicionalResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET25**
> \br.com.conductor.pier.api.v2.model\PageEnderecoResponse listarUsingGET25($sort, $page, $limit, $id, $id_pessoa, $id_tipo_endereco, $cep, $logradouro, $numero, $complemento, $ponto_referencia, $bairro, $cidade, $uf, $pais, $data_inclusao, $data_ultima_atualizacao)

{{{endereco_resource_listar}}}

{{{endereco_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastroclienteApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id = 789; // int | {{{endereco_request_id_value}}}
$id_pessoa = 789; // int | {{{endereco_request_id_pessoa_value}}}
$id_tipo_endereco = 789; // int | {{{endereco_request_id_tipo_endereco_value}}}
$cep = "cep_example"; // string | {{{endereco_request_cep_value}}}
$logradouro = "logradouro_example"; // string | {{{endereco_request_logradouro_value}}}
$numero = 56; // int | {{{endereco_request_numero_value}}}
$complemento = "complemento_example"; // string | {{{endereco_request_complemento_value}}}
$ponto_referencia = "ponto_referencia_example"; // string | {{{endereco_request_ponto_referencia_value}}}
$bairro = "bairro_example"; // string | {{{endereco_request_bairro_value}}}
$cidade = "cidade_example"; // string | {{{endereco_request_cidade_value}}}
$uf = "uf_example"; // string | {{{endereco_request_uf_value}}}
$pais = "pais_example"; // string | {{{endereco_request_pais_value}}}
$data_inclusao = "data_inclusao_example"; // string | {{{endereco_request_data_inclusao_value}}}
$data_ultima_atualizacao = "data_ultima_atualizacao_example"; // string | {{{endereco_request_data_ultima_atualizacao_value}}}

try { 
    $result = $api_instance->listarUsingGET25($sort, $page, $limit, $id, $id_pessoa, $id_tipo_endereco, $cep, $logradouro, $numero, $complemento, $ponto_referencia, $bairro, $cidade, $uf, $pais, $data_inclusao, $data_ultima_atualizacao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastroclienteApi->listarUsingGET25: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id** | **int**| {{{endereco_request_id_value}}} | [optional] 
 **id_pessoa** | **int**| {{{endereco_request_id_pessoa_value}}} | [optional] 
 **id_tipo_endereco** | **int**| {{{endereco_request_id_tipo_endereco_value}}} | [optional] 
 **cep** | **string**| {{{endereco_request_cep_value}}} | [optional] 
 **logradouro** | **string**| {{{endereco_request_logradouro_value}}} | [optional] 
 **numero** | **int**| {{{endereco_request_numero_value}}} | [optional] 
 **complemento** | **string**| {{{endereco_request_complemento_value}}} | [optional] 
 **ponto_referencia** | **string**| {{{endereco_request_ponto_referencia_value}}} | [optional] 
 **bairro** | **string**| {{{endereco_request_bairro_value}}} | [optional] 
 **cidade** | **string**| {{{endereco_request_cidade_value}}} | [optional] 
 **uf** | **string**| {{{endereco_request_uf_value}}} | [optional] 
 **pais** | **string**| {{{endereco_request_pais_value}}} | [optional] 
 **data_inclusao** | **string**| {{{endereco_request_data_inclusao_value}}} | [optional] 
 **data_ultima_atualizacao** | **string**| {{{endereco_request_data_ultima_atualizacao_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageEnderecoResponse**](PageEnderecoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET40**
> \br.com.conductor.pier.api.v2.model\PagePessoaDetalheResponse listarUsingGET40($sort, $page, $limit, $id_pessoa, $nome_mae, $id_estado_civil, $id_profissao, $id_natureza_ocupacao, $id_nacionalidade, $numero_banco, $numero_agencia, $numero_conta_corrente, $email, $nome_empresa)

{{{pessoa_detalhe_resource_listar}}}

{{{pessoa_detalhe_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastroclienteApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id_pessoa = 789; // int | {{{pessoa_detalhe_request_id_pessoa_value}}}
$nome_mae = "nome_mae_example"; // string | {{{pessoa_detalhe_request_nome_mae_value}}}
$id_estado_civil = 789; // int | {{{pessoa_detalhe_request_id_estado_civil_value}}}
$id_profissao = "id_profissao_example"; // string | {{{pessoa_detalhe_request_id_profissao_value}}}
$id_natureza_ocupacao = 789; // int | {{{pessoa_detalhe_request_id_natureza_ocupacao_value}}}
$id_nacionalidade = 789; // int | {{{pessoa_detalhe_request_id_nacionalidade_value}}}
$numero_banco = 56; // int | {{{pessoa_detalhe_request_numero_banco_value}}}
$numero_agencia = 56; // int | {{{pessoa_detalhe_request_numero_agencia_value}}}
$numero_conta_corrente = "numero_conta_corrente_example"; // string | {{{pessoa_detalhe_request_numero_conta_corrente_value}}}
$email = "email_example"; // string | {{{pessoa_detalhe_request_email_value}}}
$nome_empresa = "nome_empresa_example"; // string | {{{pessoa_detalhe_request_nome_empresa_value}}}

try { 
    $result = $api_instance->listarUsingGET40($sort, $page, $limit, $id_pessoa, $nome_mae, $id_estado_civil, $id_profissao, $id_natureza_ocupacao, $id_nacionalidade, $numero_banco, $numero_agencia, $numero_conta_corrente, $email, $nome_empresa);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastroclienteApi->listarUsingGET40: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id_pessoa** | **int**| {{{pessoa_detalhe_request_id_pessoa_value}}} | [optional] 
 **nome_mae** | **string**| {{{pessoa_detalhe_request_nome_mae_value}}} | [optional] 
 **id_estado_civil** | **int**| {{{pessoa_detalhe_request_id_estado_civil_value}}} | [optional] 
 **id_profissao** | **string**| {{{pessoa_detalhe_request_id_profissao_value}}} | [optional] 
 **id_natureza_ocupacao** | **int**| {{{pessoa_detalhe_request_id_natureza_ocupacao_value}}} | [optional] 
 **id_nacionalidade** | **int**| {{{pessoa_detalhe_request_id_nacionalidade_value}}} | [optional] 
 **numero_banco** | **int**| {{{pessoa_detalhe_request_numero_banco_value}}} | [optional] 
 **numero_agencia** | **int**| {{{pessoa_detalhe_request_numero_agencia_value}}} | [optional] 
 **numero_conta_corrente** | **string**| {{{pessoa_detalhe_request_numero_conta_corrente_value}}} | [optional] 
 **email** | **string**| {{{pessoa_detalhe_request_email_value}}} | [optional] 
 **nome_empresa** | **string**| {{{pessoa_detalhe_request_nome_empresa_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PagePessoaDetalheResponse**](PagePessoaDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET41**
> \br.com.conductor.pier.api.v2.model\PagePessoaResponse listarUsingGET41($sort, $page, $limit, $id, $nome, $tipo, $cpf, $cnpj, $data_nascimento, $sexo, $numero_identidade, $orgao_expedidor_identidade, $unidade_federativa_identidade, $data_emissao_identidade)

{{{pessoa_resource_listar}}}

{{{pessoa_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastroclienteApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id = 789; // int | {{{pessoa_request_id_value}}}
$nome = "nome_example"; // string | {{{pessoa_request_nome_value}}}
$tipo = "tipo_example"; // string | {{{pessoa_request_tipo_value}}}
$cpf = "cpf_example"; // string | {{{pessoa_request_cpf_value}}}
$cnpj = "cnpj_example"; // string | {{{pessoa_request_cnpj_value}}}
$data_nascimento = "data_nascimento_example"; // string | {{{pessoa_request_data_nascimento_value}}}
$sexo = "sexo_example"; // string | {{{pessoa_request_sexo_value}}}
$numero_identidade = "numero_identidade_example"; // string | {{{pessoa_request_numero_identidade_value}}}
$orgao_expedidor_identidade = "orgao_expedidor_identidade_example"; // string | {{{pessoa_request_orgao_expedidor_identidade_value}}}
$unidade_federativa_identidade = "unidade_federativa_identidade_example"; // string | {{{pessoa_request_unidade_federativa_identidade_value}}}
$data_emissao_identidade = "data_emissao_identidade_example"; // string | {{{pessoa_request_data_emissao_identidade_value}}}

try { 
    $result = $api_instance->listarUsingGET41($sort, $page, $limit, $id, $nome, $tipo, $cpf, $cnpj, $data_nascimento, $sexo, $numero_identidade, $orgao_expedidor_identidade, $unidade_federativa_identidade, $data_emissao_identidade);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastroclienteApi->listarUsingGET41: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id** | **int**| {{{pessoa_request_id_value}}} | [optional] 
 **nome** | **string**| {{{pessoa_request_nome_value}}} | [optional] 
 **tipo** | **string**| {{{pessoa_request_tipo_value}}} | [optional] 
 **cpf** | **string**| {{{pessoa_request_cpf_value}}} | [optional] 
 **cnpj** | **string**| {{{pessoa_request_cnpj_value}}} | [optional] 
 **data_nascimento** | **string**| {{{pessoa_request_data_nascimento_value}}} | [optional] 
 **sexo** | **string**| {{{pessoa_request_sexo_value}}} | [optional] 
 **numero_identidade** | **string**| {{{pessoa_request_numero_identidade_value}}} | [optional] 
 **orgao_expedidor_identidade** | **string**| {{{pessoa_request_orgao_expedidor_identidade_value}}} | [optional] 
 **unidade_federativa_identidade** | **string**| {{{pessoa_request_unidade_federativa_identidade_value}}} | [optional] 
 **data_emissao_identidade** | **string**| {{{pessoa_request_data_emissao_identidade_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PagePessoaResponse**](PagePessoaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET53**
> \br.com.conductor.pier.api.v2.model\PageTelefoneResponse listarUsingGET53($sort, $page, $limit, $id, $id_tipo_telefone, $id_pessoa, $ddd, $telefone, $ramal, $status)

{{{telefone_resource_listar}}}

{{{telefone_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastroclienteApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id = 789; // int | {{{telefone_request_id_value}}}
$id_tipo_telefone = 789; // int | {{{telefone_request_id_tipo_telefone_value}}}
$id_pessoa = 789; // int | {{{telefone_request_id_pessoa_value}}}
$ddd = "ddd_example"; // string | {{{telefone_request_ddd_value}}}
$telefone = "telefone_example"; // string | {{{telefone_request_telefone_value}}}
$ramal = "ramal_example"; // string | {{{telefone_request_ramal_value}}}
$status = 56; // int | {{{telefone_request_status_value}}}

try { 
    $result = $api_instance->listarUsingGET53($sort, $page, $limit, $id, $id_tipo_telefone, $id_pessoa, $ddd, $telefone, $ramal, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastroclienteApi->listarUsingGET53: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id** | **int**| {{{telefone_request_id_value}}} | [optional] 
 **id_tipo_telefone** | **int**| {{{telefone_request_id_tipo_telefone_value}}} | [optional] 
 **id_pessoa** | **int**| {{{telefone_request_id_pessoa_value}}} | [optional] 
 **ddd** | **string**| {{{telefone_request_ddd_value}}} | [optional] 
 **telefone** | **string**| {{{telefone_request_telefone_value}}} | [optional] 
 **ramal** | **string**| {{{telefone_request_ramal_value}}} | [optional] 
 **status** | **int**| {{{telefone_request_status_value}}} | [optional] 

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

{{{conta_pessoa_resource_salvar_pessoa_fisica_aprovada}}}

{{{conta_pessoa_resource_salvar_pessoa_fisica_aprovada_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastroclienteApi();
$pessoa_persist = new \br.com.conductor.pier.api.v2.model\PessoaFisicaAprovadaPersistValue_(); // \br.com.conductor.pier.api.v2.model\PessoaFisicaAprovadaPersistValue_ | pessoaPersist

try { 
    $result = $api_instance->salvarPessoaFisicaAprovadaUsingPOST($pessoa_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastroclienteApi->salvarPessoaFisicaAprovadaUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pessoa_persist** | [**\br.com.conductor.pier.api.v2.model\PessoaFisicaAprovadaPersistValue_**](\br.com.conductor.pier.api.v2.model\PessoaFisicaAprovadaPersistValue_.md)| pessoaPersist | 

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

{{{conta_pessoa_resource_salvar_pessoa_juridica_aprovada}}}

{{{conta_pessoa_resource_salvar_pessoa_juridica_aprovada_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastroclienteApi();
$pessoa_persist = new \br.com.conductor.pier.api.v2.model\PessoaJuridicaAprovadaPersist(); // \br.com.conductor.pier.api.v2.model\PessoaJuridicaAprovadaPersist | pessoaPersist

try { 
    $result = $api_instance->salvarPessoaJuridicaAprovadaUsingPOST($pessoa_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastroclienteApi->salvarPessoaJuridicaAprovadaUsingPOST: ', $e->getMessage(), "\n";
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

# **salvarUsingPOST14**
> \br.com.conductor.pier.api.v2.model\EnderecoResponse salvarUsingPOST14($id_pessoa, $id_tipo_endereco, $cep, $logradouro, $numero, $complemento, $ponto_referencia, $bairro, $cidade, $uf, $pais)

{{{endereco_resource_salvar}}}

{{{endereco_resource_salvar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastroclienteApi();
$id_pessoa = 789; // int | {{{endereco_persist_id_pessoa_value}}}
$id_tipo_endereco = 789; // int | {{{endereco_persist_id_tipo_endereco_value}}}
$cep = "cep_example"; // string | {{{endereco_persist_cep_value}}}
$logradouro = "logradouro_example"; // string | {{{endereco_persist_logradouro_value}}}
$numero = 56; // int | {{{endereco_persist_numero_value}}}
$complemento = "complemento_example"; // string | {{{endereco_persist_complemento_value}}}
$ponto_referencia = "ponto_referencia_example"; // string | {{{endereco_persist_ponto_referencia_value}}}
$bairro = "bairro_example"; // string | {{{endereco_persist_bairro_value}}}
$cidade = "cidade_example"; // string | {{{endereco_persist_cidade_value}}}
$uf = "uf_example"; // string | {{{endereco_persist_uf_value}}}
$pais = "pais_example"; // string | {{{endereco_persist_pais_value}}}

try { 
    $result = $api_instance->salvarUsingPOST14($id_pessoa, $id_tipo_endereco, $cep, $logradouro, $numero, $complemento, $ponto_referencia, $bairro, $cidade, $uf, $pais);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastroclienteApi->salvarUsingPOST14: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_pessoa** | **int**| {{{endereco_persist_id_pessoa_value}}} | [optional] 
 **id_tipo_endereco** | **int**| {{{endereco_persist_id_tipo_endereco_value}}} | [optional] 
 **cep** | **string**| {{{endereco_persist_cep_value}}} | [optional] 
 **logradouro** | **string**| {{{endereco_persist_logradouro_value}}} | [optional] 
 **numero** | **int**| {{{endereco_persist_numero_value}}} | [optional] 
 **complemento** | **string**| {{{endereco_persist_complemento_value}}} | [optional] 
 **ponto_referencia** | **string**| {{{endereco_persist_ponto_referencia_value}}} | [optional] 
 **bairro** | **string**| {{{endereco_persist_bairro_value}}} | [optional] 
 **cidade** | **string**| {{{endereco_persist_cidade_value}}} | [optional] 
 **uf** | **string**| {{{endereco_persist_uf_value}}} | [optional] 
 **pais** | **string**| {{{endereco_persist_pais_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\EnderecoResponse**](EnderecoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST17**
> \br.com.conductor.pier.api.v2.model\IntegracaoEmissorResponse salvarUsingPOST17($id, $body)

{{{integracao_emissor_resource_salvar}}}

{{{integracao_emissor_resource_salvar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastroclienteApi();
$id = 789; // int | {{{integracao_emissor_resource_salvar_param_id_conta}}}
$body = new \br.com.conductor.pier.api.v2.model\IntegracaoEmissorPersist(); // \br.com.conductor.pier.api.v2.model\IntegracaoEmissorPersist | {{{integracao_emissor_resource_salvar_param_body}}}

try { 
    $result = $api_instance->salvarUsingPOST17($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastroclienteApi->salvarUsingPOST17: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{integracao_emissor_resource_salvar_param_id_conta}}} | 
 **body** | [**\br.com.conductor.pier.api.v2.model\IntegracaoEmissorPersist**](\br.com.conductor.pier.api.v2.model\IntegracaoEmissorPersist.md)| {{{integracao_emissor_resource_salvar_param_body}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\IntegracaoEmissorResponse**](IntegracaoEmissorResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST25**
> \br.com.conductor.pier.api.v2.model\PessoaDetalheResponse salvarUsingPOST25($id_pessoa, $nome_mae, $id_estado_civil, $id_profissao, $id_natureza_ocupacao, $id_nacionalidade, $numero_banco, $numero_agencia, $numero_conta_corrente, $email, $nome_empresa)

{{{pessoa_detalhe_resource_salvar}}}

{{{pessoa_detalhe_resource_salvar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastroclienteApi();
$id_pessoa = 789; // int | {{{pessoa_detalhe_persist_id_pessoa_value}}}
$nome_mae = "nome_mae_example"; // string | {{{pessoa_detalhe_persist_nome_mae_value}}}
$id_estado_civil = 789; // int | {{{pessoa_detalhe_persist_id_estado_civil_value}}}
$id_profissao = "id_profissao_example"; // string | {{{pessoa_detalhe_persist_id_profissao_value}}}
$id_natureza_ocupacao = 789; // int | {{{pessoa_detalhe_persist_id_natureza_ocupacao_value}}}
$id_nacionalidade = 789; // int | {{{pessoa_detalhe_persist_id_nacionalidade_value}}}
$numero_banco = 56; // int | {{{pessoa_detalhe_persist_numero_banco_value}}}
$numero_agencia = 56; // int | {{{pessoa_detalhe_persist_numero_agencia_value}}}
$numero_conta_corrente = "numero_conta_corrente_example"; // string | {{{pessoa_detalhe_persist_numero_conta_corrente_value}}}
$email = "email_example"; // string | {{{pessoa_detalhe_persist_email_value}}}
$nome_empresa = "nome_empresa_example"; // string | {{{pessoa_detalhe_persist_nome_empresa_value}}}

try { 
    $result = $api_instance->salvarUsingPOST25($id_pessoa, $nome_mae, $id_estado_civil, $id_profissao, $id_natureza_ocupacao, $id_nacionalidade, $numero_banco, $numero_agencia, $numero_conta_corrente, $email, $nome_empresa);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastroclienteApi->salvarUsingPOST25: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_pessoa** | **int**| {{{pessoa_detalhe_persist_id_pessoa_value}}} | 
 **nome_mae** | **string**| {{{pessoa_detalhe_persist_nome_mae_value}}} | [optional] 
 **id_estado_civil** | **int**| {{{pessoa_detalhe_persist_id_estado_civil_value}}} | [optional] 
 **id_profissao** | **string**| {{{pessoa_detalhe_persist_id_profissao_value}}} | [optional] 
 **id_natureza_ocupacao** | **int**| {{{pessoa_detalhe_persist_id_natureza_ocupacao_value}}} | [optional] 
 **id_nacionalidade** | **int**| {{{pessoa_detalhe_persist_id_nacionalidade_value}}} | [optional] 
 **numero_banco** | **int**| {{{pessoa_detalhe_persist_numero_banco_value}}} | [optional] 
 **numero_agencia** | **int**| {{{pessoa_detalhe_persist_numero_agencia_value}}} | [optional] 
 **numero_conta_corrente** | **string**| {{{pessoa_detalhe_persist_numero_conta_corrente_value}}} | [optional] 
 **email** | **string**| {{{pessoa_detalhe_persist_email_value}}} | [optional] 
 **nome_empresa** | **string**| {{{pessoa_detalhe_persist_nome_empresa_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PessoaDetalheResponse**](PessoaDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST26**
> \br.com.conductor.pier.api.v2.model\PessoaResponse salvarUsingPOST26($nome, $tipo, $data_nascimento, $cpf, $cnpj, $sexo, $numero_identidade, $orgao_expedidor_identidade, $unidade_federativa_identidade, $data_emissao_identidade)

{{{pessoa_resource_salvar}}}

{{{pessoa_resource_salvar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastroclienteApi();
$nome = "nome_example"; // string | {{{pessoa_persist_nome_value}}}
$tipo = "tipo_example"; // string | {{{pessoa_persist_tipo_value}}}
$data_nascimento = "data_nascimento_example"; // string | {{{pessoa_persist_data_nascimento_value}}}
$cpf = "cpf_example"; // string | {{{pessoa_persist_cpf_value}}}
$cnpj = "cnpj_example"; // string | {{{pessoa_persist_cnpj_value}}}
$sexo = "sexo_example"; // string | {{{pessoa_persist_sexo_value}}}
$numero_identidade = "numero_identidade_example"; // string | {{{pessoa_persist_numero_identidade_value}}}
$orgao_expedidor_identidade = "orgao_expedidor_identidade_example"; // string | {{{pessoa_persist_orgao_expedidor_identidade_value}}}
$unidade_federativa_identidade = "unidade_federativa_identidade_example"; // string | {{{pessoa_persist_unidade_federativa_identidade_value}}}
$data_emissao_identidade = "data_emissao_identidade_example"; // string | {{{pessoa_persist_data_emissao_identidade_value}}}

try { 
    $result = $api_instance->salvarUsingPOST26($nome, $tipo, $data_nascimento, $cpf, $cnpj, $sexo, $numero_identidade, $orgao_expedidor_identidade, $unidade_federativa_identidade, $data_emissao_identidade);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastroclienteApi->salvarUsingPOST26: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nome** | **string**| {{{pessoa_persist_nome_value}}} | 
 **tipo** | **string**| {{{pessoa_persist_tipo_value}}} | 
 **data_nascimento** | **string**| {{{pessoa_persist_data_nascimento_value}}} | 
 **cpf** | **string**| {{{pessoa_persist_cpf_value}}} | [optional] 
 **cnpj** | **string**| {{{pessoa_persist_cnpj_value}}} | [optional] 
 **sexo** | **string**| {{{pessoa_persist_sexo_value}}} | [optional] 
 **numero_identidade** | **string**| {{{pessoa_persist_numero_identidade_value}}} | [optional] 
 **orgao_expedidor_identidade** | **string**| {{{pessoa_persist_orgao_expedidor_identidade_value}}} | [optional] 
 **unidade_federativa_identidade** | **string**| {{{pessoa_persist_unidade_federativa_identidade_value}}} | [optional] 
 **data_emissao_identidade** | **string**| {{{pessoa_persist_data_emissao_identidade_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PessoaResponse**](PessoaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST29**
> \br.com.conductor.pier.api.v2.model\TelefoneResponse salvarUsingPOST29($id_tipo_telefone, $id_pessoa, $ddd, $telefone, $ramal)

{{{telefone_resource_salvar}}}

{{{telefone_resource_salvar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastroclienteApi();
$id_tipo_telefone = 789; // int | {{{telefone_persist_id_tipo_telefone_value}}}
$id_pessoa = 789; // int | {{{telefone_persist_id_pessoa_value}}}
$ddd = "ddd_example"; // string | {{{telefone_persist_ddd_value}}}
$telefone = "telefone_example"; // string | {{{telefone_persist_telefone_value}}}
$ramal = "ramal_example"; // string | {{{telefone_persist_ramal_value}}}

try { 
    $result = $api_instance->salvarUsingPOST29($id_tipo_telefone, $id_pessoa, $ddd, $telefone, $ramal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastroclienteApi->salvarUsingPOST29: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_tipo_telefone** | **int**| {{{telefone_persist_id_tipo_telefone_value}}} | [optional] 
 **id_pessoa** | **int**| {{{telefone_persist_id_pessoa_value}}} | [optional] 
 **ddd** | **string**| {{{telefone_persist_ddd_value}}} | [optional] 
 **telefone** | **string**| {{{telefone_persist_telefone_value}}} | [optional] 
 **ramal** | **string**| {{{telefone_persist_ramal_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\TelefoneResponse**](TelefoneResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

