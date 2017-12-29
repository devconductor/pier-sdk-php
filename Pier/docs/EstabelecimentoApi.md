# br.com.conductor.pier.api.v2.invoker\EstabelecimentoApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarUsingPUT11**](EstabelecimentoApi.md#alterarUsingPUT11) | **PUT** /api/pessoas-juridicas/{id} | Alterar Pessoa Jur\u00C3\u00ADdica
[**alterarUsingPUT13**](EstabelecimentoApi.md#alterarUsingPUT13) | **PUT** /api/telefones-estabelecimentos/{id} | Altera um Telefone do estabelecimento
[**alterarUsingPUT15**](EstabelecimentoApi.md#alterarUsingPUT15) | **PUT** /api/terminais/{id} | Altera um Terminal
[**alterarUsingPUT5**](EstabelecimentoApi.md#alterarUsingPUT5) | **PUT** /api/credores/{id} | Alterar Credor
[**cadastrarUsingPOST2**](EstabelecimentoApi.md#cadastrarUsingPOST2) | **POST** /api/credores | Cadastrar Credor
[**cadastrarUsingPOST3**](EstabelecimentoApi.md#cadastrarUsingPOST3) | **POST** /api/pessoas-juridicas | Cadastrar Pessoa Jur\u00C3\u00ADdica
[**consultaOperacaoUsingGET**](EstabelecimentoApi.md#consultaOperacaoUsingGET) | **GET** /api/tipos-operacoes-estabelecimentos/{id} | Apresenta dados de um determinado tipo de opera\u00C3\u00A7\u00C3\u00A3o
[**consultarUsingGET12**](EstabelecimentoApi.md#consultarUsingGET12) | **GET** /api/credores/{id} | Consultar credor
[**consultarUsingGET16**](EstabelecimentoApi.md#consultarUsingGET16) | **GET** /api/estabelecimentos/{id} | Consultar estabelecimento por id
[**consultarUsingGET21**](EstabelecimentoApi.md#consultarUsingGET21) | **GET** /api/pessoas-juridicas/{id} | Consultar pessoa jur\u00C3\u00ADdica
[**consultarUsingGET27**](EstabelecimentoApi.md#consultarUsingGET27) | **GET** /api/telefones-estabelecimentos/{id} | Apresenta os dados de um determinado telefone de um estabelecimento
[**consultarUsingGET29**](EstabelecimentoApi.md#consultarUsingGET29) | **GET** /api/terminais/{id} | Apresenta os dados de um determinado Terminal
[**listaOperacaoUsingGET**](EstabelecimentoApi.md#listaOperacaoUsingGET) | **GET** /api/tipos-operacoes-estabelecimentos | Apresenta dados de opera\u00C3\u00A7\u00C3\u00B5es em uma lista
[**listarUsingGET14**](EstabelecimentoApi.md#listarUsingGET14) | **GET** /api/credores | Listar credores
[**listarUsingGET19**](EstabelecimentoApi.md#listarUsingGET19) | **GET** /api/estabelecimentos | Lista Estabelecimentos
[**listarUsingGET24**](EstabelecimentoApi.md#listarUsingGET24) | **GET** /api/pessoas-juridicas | Listar pessoas jur\u00C3\u00ADdicas
[**listarUsingGET33**](EstabelecimentoApi.md#listarUsingGET33) | **GET** /api/telefones-estabelecimentos | Lista os Telefones Estabelecimentos
[**listarUsingGET35**](EstabelecimentoApi.md#listarUsingGET35) | **GET** /api/terminais | Lista os Terminais cadastrados no Emissor
[**salvarUsingPOST19**](EstabelecimentoApi.md#salvarUsingPOST19) | **POST** /api/telefones-estabelecimentos | Realiza o cadastro de um novo telefone para um estabelecimento 
[**salvarUsingPOST21**](EstabelecimentoApi.md#salvarUsingPOST21) | **POST** /api/terminais | Realiza o cadastro de um novo Terminal


# **alterarUsingPUT11**
> \br.com.conductor.pier.api.v2.model\PessoaJuridicaResponse alterarUsingPUT11($id, $razao_social, $inscricao_estadual, $contato, $banco, $agencia, $digito_verificador_agencia, $conta_corrente, $digito_verificador_conta_corrente)

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
    $result = $api_instance->alterarUsingPUT11($id, $razao_social, $inscricao_estadual, $contato, $banco, $agencia, $digito_verificador_agencia, $conta_corrente, $digito_verificador_conta_corrente);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->alterarUsingPUT11: ', $e->getMessage(), "\n";
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
> \br.com.conductor.pier.api.v2.model\TelefoneEstabelecimentoResponse alterarUsingPUT13($id, $ddd, $telefone, $ramal)

Altera um Telefone do estabelecimento

Este m\u00C3\u00A9todo realiza a altera\u00C3\u00A7\u00C3\u00A3o dos telefones dos estabelecimentos.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Telefone Estabelecimento (id).
$ddd = "ddd_example"; // string | C\u00C3\u00B3digo DDD do telefone (id).
$telefone = "telefone_example"; // string | N\u00C3\u00BAmero do telefone.
$ramal = "ramal_example"; // string | N\u00C3\u00BAmero do ramal.

try { 
    $result = $api_instance->alterarUsingPUT13($id, $ddd, $telefone, $ramal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->alterarUsingPUT13: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Telefone Estabelecimento (id). | 
 **ddd** | **string**| C\u00C3\u00B3digo DDD do telefone (id). | 
 **telefone** | **string**| N\u00C3\u00BAmero do telefone. | 
 **ramal** | **string**| N\u00C3\u00BAmero do ramal. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\TelefoneEstabelecimentoResponse**](TelefoneEstabelecimentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarUsingPUT15**
> \br.com.conductor.pier.api.v2.model\TerminalResponse alterarUsingPUT15($id, $terminal_update)

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
    $result = $api_instance->alterarUsingPUT15($id, $terminal_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->alterarUsingPUT15: ', $e->getMessage(), "\n";
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

# **alterarUsingPUT5**
> \br.com.conductor.pier.api.v2.model\CredorResponse alterarUsingPUT5($id, $credor_update)

Alterar Credor

Altera um credor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da credor
$credor_update = new \br.com.conductor.pier.api.v2.model\CredorDTO(); // \br.com.conductor.pier.api.v2.model\CredorDTO | credorUpdate

try { 
    $result = $api_instance->alterarUsingPUT5($id, $credor_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->alterarUsingPUT5: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da credor | 
 **credor_update** | [**\br.com.conductor.pier.api.v2.model\CredorDTO**](\br.com.conductor.pier.api.v2.model\CredorDTO.md)| credorUpdate | 

### Return type

[**\br.com.conductor.pier.api.v2.model\CredorResponse**](CredorResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **cadastrarUsingPOST2**
> \br.com.conductor.pier.api.v2.model\CredorResponse cadastrarUsingPOST2($credor_persist)

Cadastrar Credor

Cadastra um credor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$credor_persist = new \br.com.conductor.pier.api.v2.model\CredorDTO(); // \br.com.conductor.pier.api.v2.model\CredorDTO | credorPersist

try { 
    $result = $api_instance->cadastrarUsingPOST2($credor_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->cadastrarUsingPOST2: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credor_persist** | [**\br.com.conductor.pier.api.v2.model\CredorDTO**](\br.com.conductor.pier.api.v2.model\CredorDTO.md)| credorPersist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\CredorResponse**](CredorResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **cadastrarUsingPOST3**
> \br.com.conductor.pier.api.v2.model\PessoaJuridicaResponse cadastrarUsingPOST3($razao_social, $cnpj, $inscricao_estadual, $contato, $banco, $agencia, $digito_verificador_agencia, $conta_corrente, $digito_verificador_conta_corrente)

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
    $result = $api_instance->cadastrarUsingPOST3($razao_social, $cnpj, $inscricao_estadual, $contato, $banco, $agencia, $digito_verificador_agencia, $conta_corrente, $digito_verificador_conta_corrente);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->cadastrarUsingPOST3: ', $e->getMessage(), "\n";
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

# **consultaOperacaoUsingGET**
> \br.com.conductor.pier.api.v2.model\DetalheOperacaoResponse consultaOperacaoUsingGET($id)

Apresenta dados de um determinado tipo de opera\u00C3\u00A7\u00C3\u00A3o

Este recurso permite consultar dados de um determinado tipo opera\u00C3\u00A7\u00C3\u00A3o a partir do idoperacao

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00C3\u00B3digo de processamento da opera\u00C3\u00A7\u00C3\u00A3o (idOperacao).

try { 
    $result = $api_instance->consultaOperacaoUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->consultaOperacaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de processamento da opera\u00C3\u00A7\u00C3\u00A3o (idOperacao). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\DetalheOperacaoResponse**](DetalheOperacaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET12**
> \br.com.conductor.pier.api.v2.model\CredorResponse consultarUsingGET12($id)

Consultar credor

Consulta um credor atrav\u00C3\u00A9s do seu identificador.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da credor

try { 
    $result = $api_instance->consultarUsingGET12($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->consultarUsingGET12: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da credor | 

### Return type

[**\br.com.conductor.pier.api.v2.model\CredorResponse**](CredorResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET16**
> \br.com.conductor.pier.api.v2.model\EstabelecimentoResponse consultarUsingGET16($id)

Consultar estabelecimento por id

Consulta os detalhes de um determinado estabelecimento

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | Id

try { 
    $result = $api_instance->consultarUsingGET16($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->consultarUsingGET16: ', $e->getMessage(), "\n";
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
> \br.com.conductor.pier.api.v2.model\PessoaJuridicaResponse consultarUsingGET21($id)

Consultar pessoa jur\u00C3\u00ADdica

Consulta uma pessoa jur\u00C3\u00ADdica atrav\u00C3\u00A9s do seu identificador.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da pessoa jur\u00C3\u00ADdica

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
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da pessoa jur\u00C3\u00ADdica | 

### Return type

[**\br.com.conductor.pier.api.v2.model\PessoaJuridicaResponse**](PessoaJuridicaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET27**
> \br.com.conductor.pier.api.v2.model\TelefoneEstabelecimentoResponse consultarUsingGET27($id)

Apresenta os dados de um determinado telefone de um estabelecimento

Este m\u00C3\u00A9todo permite consultar um determinado telefone de um estabelecimento a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Telefone Estabelecimento (id).

try { 
    $result = $api_instance->consultarUsingGET27($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->consultarUsingGET27: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Telefone Estabelecimento (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TelefoneEstabelecimentoResponse**](TelefoneEstabelecimentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET29**
> \br.com.conductor.pier.api.v2.model\TerminalResponse consultarUsingGET29($id)

Apresenta os dados de um determinado Terminal

Este m\u00C3\u00A9todo permite consultar um determinado Terminal a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Terminal (id).

try { 
    $result = $api_instance->consultarUsingGET29($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->consultarUsingGET29: ', $e->getMessage(), "\n";
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

# **listaOperacaoUsingGET**
> \br.com.conductor.pier.api.v2.model\PageOperacaoResponse listaOperacaoUsingGET($sort, $page, $limit, $id_operacao, $codigo_processamento)

Apresenta dados de opera\u00C3\u00A7\u00C3\u00B5es em uma lista

Este recurso permite listar as opera\u00C3\u00A7\u00C3\u00A3o

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id_operacao = 789; // int | C\u00C3\u00B3digo que identifica a opera\u00C3\u00A7\u00C3\u00A3o
$codigo_processamento = "codigo_processamento_example"; // string | C\u00C3\u00B3digo de processamento usado em transa\u00C3\u00A7\u00C3\u00B5es com o autorizador

try { 
    $result = $api_instance->listaOperacaoUsingGET($sort, $page, $limit, $id_operacao, $codigo_processamento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->listaOperacaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id_operacao** | **int**| C\u00C3\u00B3digo que identifica a opera\u00C3\u00A7\u00C3\u00A3o | [optional] 
 **codigo_processamento** | **string**| C\u00C3\u00B3digo de processamento usado em transa\u00C3\u00A7\u00C3\u00B5es com o autorizador | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageOperacaoResponse**](PageOperacaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET14**
> \br.com.conductor.pier.api.v2.model\PageCredorResponse listarUsingGET14($sort, $page, $limit, $id_pessoa_juridica, $nome, $periodicidade, $pagamento_semanal, $pagamento_mensal, $pagamento_decendial_primeiro, $pagamento_decendial_segundo, $pagamento_decendial_terceiro, $pagamento_quinzenal_primeiro, $pagamento_quinzenal_segundo, $credor_banco, $percentual_rav, $recebe_rav, $percentual_multiplica, $taxa_adm, $taxa_banco, $limite_rav, $id_credor_rav, $banco, $agencia, $digito_verificador_agencia, $conta_corrente, $digito_verificador_conta_corrente)

Listar credores

Lista credores cadastrados. 

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id_pessoa_juridica = 789; // int | Identificador da pessoa jur\u00C3\u00ADdica do credor
$nome = "nome_example"; // string | Nome do credor
$periodicidade = "periodicidade_example"; // string | Periodicidade do pagamento
$pagamento_semanal = "pagamento_semanal_example"; // string | Dia para pagamento semanal
$pagamento_mensal = 56; // int | Dia da data para o pagamento mensal
$pagamento_decendial_primeiro = 56; // int | Dia da data para o primeiro pagamento decendial
$pagamento_decendial_segundo = 56; // int | Dia da data para o segundo pagamento decendial
$pagamento_decendial_terceiro = 56; // int | Dia da data para o terceiro pagamento decendial
$pagamento_quinzenal_primeiro = 56; // int | Dia da data para o primeiro pagamento quinzenal
$pagamento_quinzenal_segundo = 56; // int | Dia da data para o segundo pagamento quinzenal
$credor_banco = true; // bool | Indica se este credor pode ser um Credor RAV de outros credores
$percentual_rav = new Number(); // Number | Valor percentual do RAV do credor
$recebe_rav = "recebe_rav_example"; // string | Indica se o credor recebe RAV e o tipo
$percentual_multiplica = new Number(); // Number | Percentual Multiplica
$taxa_adm = new Number(); // Number | Taxa Administrativa
$taxa_banco = new Number(); // Number | Taxa do Banco
$limite_rav = new Number(); // Number | Valor limite do RAV
$id_credor_rav = 789; // int | C\u00C3\u00B3digo identificador do credor RAV
$banco = 56; // int | C\u00C3\u00B3digo do banco
$agencia = 56; // int | Raz\u00C3\u00A3o social da pessoa jur\u00C3\u00ADdica
$digito_verificador_agencia = "digito_verificador_agencia_example"; // string | D\u00C3\u00ADgito Verificador da ag\u00C3\u00AAncia
$conta_corrente = "conta_corrente_example"; // string | C\u00C3\u00B3digo da Conta Corrente
$digito_verificador_conta_corrente = "digito_verificador_conta_corrente_example"; // string | D\u00C3\u00ADgito Verificador da Conta Corrente

try { 
    $result = $api_instance->listarUsingGET14($sort, $page, $limit, $id_pessoa_juridica, $nome, $periodicidade, $pagamento_semanal, $pagamento_mensal, $pagamento_decendial_primeiro, $pagamento_decendial_segundo, $pagamento_decendial_terceiro, $pagamento_quinzenal_primeiro, $pagamento_quinzenal_segundo, $credor_banco, $percentual_rav, $recebe_rav, $percentual_multiplica, $taxa_adm, $taxa_banco, $limite_rav, $id_credor_rav, $banco, $agencia, $digito_verificador_agencia, $conta_corrente, $digito_verificador_conta_corrente);
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
 **id_pessoa_juridica** | **int**| Identificador da pessoa jur\u00C3\u00ADdica do credor | [optional] 
 **nome** | **string**| Nome do credor | [optional] 
 **periodicidade** | **string**| Periodicidade do pagamento | [optional] 
 **pagamento_semanal** | **string**| Dia para pagamento semanal | [optional] 
 **pagamento_mensal** | **int**| Dia da data para o pagamento mensal | [optional] 
 **pagamento_decendial_primeiro** | **int**| Dia da data para o primeiro pagamento decendial | [optional] 
 **pagamento_decendial_segundo** | **int**| Dia da data para o segundo pagamento decendial | [optional] 
 **pagamento_decendial_terceiro** | **int**| Dia da data para o terceiro pagamento decendial | [optional] 
 **pagamento_quinzenal_primeiro** | **int**| Dia da data para o primeiro pagamento quinzenal | [optional] 
 **pagamento_quinzenal_segundo** | **int**| Dia da data para o segundo pagamento quinzenal | [optional] 
 **credor_banco** | **bool**| Indica se este credor pode ser um Credor RAV de outros credores | [optional] 
 **percentual_rav** | [**Number**](.md)| Valor percentual do RAV do credor | [optional] 
 **recebe_rav** | **string**| Indica se o credor recebe RAV e o tipo | [optional] 
 **percentual_multiplica** | [**Number**](.md)| Percentual Multiplica | [optional] 
 **taxa_adm** | [**Number**](.md)| Taxa Administrativa | [optional] 
 **taxa_banco** | [**Number**](.md)| Taxa do Banco | [optional] 
 **limite_rav** | [**Number**](.md)| Valor limite do RAV | [optional] 
 **id_credor_rav** | **int**| C\u00C3\u00B3digo identificador do credor RAV | [optional] 
 **banco** | **int**| C\u00C3\u00B3digo do banco | [optional] 
 **agencia** | **int**| Raz\u00C3\u00A3o social da pessoa jur\u00C3\u00ADdica | [optional] 
 **digito_verificador_agencia** | **string**| D\u00C3\u00ADgito Verificador da ag\u00C3\u00AAncia | [optional] 
 **conta_corrente** | **string**| C\u00C3\u00B3digo da Conta Corrente | [optional] 
 **digito_verificador_conta_corrente** | **string**| D\u00C3\u00ADgito Verificador da Conta Corrente | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageCredorResponse**](PageCredorResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET19**
> \br.com.conductor.pier.api.v2.model\PageEstabelecimentoResponse listarUsingGET19($sort, $page, $limit, $id, $numero_receita_federal, $nome, $descricao, $nome_fantasia, $cep, $nome_logradouro, $numero_endereco, $complemento, $bairro, $cidade, $uf, $pais, $data_cadastramento, $contato, $email, $flag_arquivo_secr_fazenda, $flag_cartao_digitado, $inativo)

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
    $result = $api_instance->listarUsingGET19($sort, $page, $limit, $id, $numero_receita_federal, $nome, $descricao, $nome_fantasia, $cep, $nome_logradouro, $numero_endereco, $complemento, $bairro, $cidade, $uf, $pais, $data_cadastramento, $contato, $email, $flag_arquivo_secr_fazenda, $flag_cartao_digitado, $inativo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->listarUsingGET19: ', $e->getMessage(), "\n";
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

# **listarUsingGET24**
> \br.com.conductor.pier.api.v2.model\PagePessoaJuridicaResponse listarUsingGET24($sort, $page, $limit, $razao_social, $cnpj, $inscricao_estadual, $contato, $banco, $agencia, $digito_verificador_agencia, $conta_corrente, $digito_verificador_conta_corrente)

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
    $result = $api_instance->listarUsingGET24($sort, $page, $limit, $razao_social, $cnpj, $inscricao_estadual, $contato, $banco, $agencia, $digito_verificador_agencia, $conta_corrente, $digito_verificador_conta_corrente);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->listarUsingGET24: ', $e->getMessage(), "\n";
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
> \br.com.conductor.pier.api.v2.model\PageTelefoneEstabelecimentoResponse listarUsingGET33($sort, $page, $limit, $id_estabelecimento)

Lista os Telefones Estabelecimentos

Este m\u00C3\u00A9todo permite que sejam listados os telefones dos estabelecimentos existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id_estabelecimento = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo do Estabelecimento (id).

try { 
    $result = $api_instance->listarUsingGET33($sort, $page, $limit, $id_estabelecimento);
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
 **id_estabelecimento** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo do Estabelecimento (id). | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTelefoneEstabelecimentoResponse**](PageTelefoneEstabelecimentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET35**
> \br.com.conductor.pier.api.v2.model\PageTerminalResponse listarUsingGET35($sort, $page, $limit, $id, $terminal, $numero_estabelecimento, $id_estabelecimento)

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
    $result = $api_instance->listarUsingGET35($sort, $page, $limit, $id, $terminal, $numero_estabelecimento, $id_estabelecimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->listarUsingGET35: ', $e->getMessage(), "\n";
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

# **salvarUsingPOST19**
> \br.com.conductor.pier.api.v2.model\TelefoneEstabelecimentoResponse salvarUsingPOST19($id_estabelecimento, $ddd, $telefone, $ramal)

Realiza o cadastro de um novo telefone para um estabelecimento 

Este m\u00C3\u00A9todo permite que seja cadastrado um novo telefone para um estabelecimento.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id_estabelecimento = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Estabelecimento (id).
$ddd = "ddd_example"; // string | C\u00C3\u00B3digo DDD do telefone (id).
$telefone = "telefone_example"; // string | N\u00C3\u00BAmero do telefone.
$ramal = "ramal_example"; // string | N\u00C3\u00BAmero do ramal.

try { 
    $result = $api_instance->salvarUsingPOST19($id_estabelecimento, $ddd, $telefone, $ramal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->salvarUsingPOST19: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_estabelecimento** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Estabelecimento (id). | 
 **ddd** | **string**| C\u00C3\u00B3digo DDD do telefone (id). | 
 **telefone** | **string**| N\u00C3\u00BAmero do telefone. | 
 **ramal** | **string**| N\u00C3\u00BAmero do ramal. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\TelefoneEstabelecimentoResponse**](TelefoneEstabelecimentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST21**
> \br.com.conductor.pier.api.v2.model\TerminalResponse salvarUsingPOST21($id_estabelecimento, $flag_consulta_extrato, $flag_terminal_virtual)

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
    $result = $api_instance->salvarUsingPOST21($id_estabelecimento, $flag_consulta_extrato, $flag_terminal_virtual);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->salvarUsingPOST21: ', $e->getMessage(), "\n";
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

