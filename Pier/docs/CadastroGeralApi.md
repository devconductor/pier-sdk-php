# br.com.conductor.pier.api.v2.invoker\CadastroGeralApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarUsingPUT2**](CadastroGeralApi.md#alterarUsingPUT2) | **PUT** /api/campanhas/{id} | Alterar campanha
[**alterarUsingPUT3**](CadastroGeralApi.md#alterarUsingPUT3) | **PUT** /api/configuracoes-registro-cobranca/{id} | Atualizar configura\u00C3\u00A7\u00C3\u00A3o para registro de cobran\u00C3\u00A7a
[**alterarUsingPUT4**](CadastroGeralApi.md#alterarUsingPUT4) | **PUT** /api/configuracoes-rotativos/{id} | Alterar os dados de configura\u00C3\u00A7\u00C3\u00A3o do rotativo de um produto
[**ativarUsoExteriorUsingPOST**](CadastroGeralApi.md#ativarUsoExteriorUsingPOST) | **POST** /api/produtos/{id}/ativar-uso-exterior | Ativa o par\u00C3\u00A2metro uso exterior para o produto
[**cadastrarUsingPOST1**](CadastroGeralApi.md#cadastrarUsingPOST1) | **POST** /api/configuracoes-registro-cobranca | Inserir configura\u00C3\u00A7\u00C3\u00A3o para registro de cobran\u00C3\u00A7a
[**configurarTaxaAntecipacaoUsingPOST**](CadastroGeralApi.md#configurarTaxaAntecipacaoUsingPOST) | **POST** /api/produtos/{id}/configurar-taxa-antecipacao | Configura a Taxa de Antecipa\u00C3\u00A7\u00C3\u00A3o de um Produto
[**consultarCampanhaUsingGET**](CadastroGeralApi.md#consultarCampanhaUsingGET) | **GET** /api/campanhas/{id} | Consultar campanha
[**consultarOrigemComercialUsingGET**](CadastroGeralApi.md#consultarOrigemComercialUsingGET) | **GET** /api/origens-comerciais/{id} | Opera\u00C3\u00A7\u00C3\u00A3o utilizada para consultar uma determinada Origem Comercial
[**consultarTaxaAntecipacaoUsingGET**](CadastroGeralApi.md#consultarTaxaAntecipacaoUsingGET) | **GET** /api/produtos/{id}/consultar-taxa-antecipacao | Consulta a Taxa de Antecipa\u00C3\u00A7\u00C3\u00A3o de um Produto
[**consultarUsingGET2**](CadastroGeralApi.md#consultarUsingGET2) | **GET** /api/atendimento-clientes/{id} | Apresenta os dados de um determinado Atendimento
[**consultarUsingGET22**](CadastroGeralApi.md#consultarUsingGET22) | **GET** /api/produtos/{id} | Apresenta os dados de um determinado Produto
[**consultarUsingGET29**](CadastroGeralApi.md#consultarUsingGET29) | **GET** /api/tipos-ajustes | Lista os tipos de ajustes do emissor 
[**consultarUsingGET3**](CadastroGeralApi.md#consultarUsingGET3) | **GET** /api/bancos/{id} | Apresenta os dados de um determinado Banco
[**consultarUsingGET30**](CadastroGeralApi.md#consultarUsingGET30) | **GET** /api/tipos-boletos | Lista os tipos de boletos do emissor 
[**consultarUsingGET31**](CadastroGeralApi.md#consultarUsingGET31) | **GET** /api/tipos-enderecos/{id} | Apresenta os dados de um determinado Tipo de Endere\u00C3\u00A7o
[**consultarUsingGET32**](CadastroGeralApi.md#consultarUsingGET32) | **GET** /api/tipos-operacoes | Apresenta dados de um determinado tipo de opera\u00C3\u00A7\u00C3\u00A3o
[**consultarUsingGET34**](CadastroGeralApi.md#consultarUsingGET34) | **GET** /api/tipos-telefones/{id} | Apresenta os dados de um determinado Tipo de Telefone
[**consultarUsingGET7**](CadastroGeralApi.md#consultarUsingGET7) | **GET** /api/configuracoes-registro-cobranca/{id} | Consultar configura\u00C3\u00A7\u00C3\u00A3o para registro de cobran\u00C3\u00A7a
[**consultarUsingGET8**](CadastroGeralApi.md#consultarUsingGET8) | **GET** /api/configuracoes-rotativos/{id} | Apresenta dados de configura\u00C3\u00A7\u00C3\u00A3o do rotativo espec\u00C3\u00ADfico.
[**desativarUsoExteriorUsingPOST**](CadastroGeralApi.md#desativarUsoExteriorUsingPOST) | **POST** /api/produtos/{id}/desativar-uso-exterior | Desativa o par\u00C3\u00A2metro uso exterior para o produto
[**listarCampanhasUsingGET**](CadastroGeralApi.md#listarCampanhasUsingGET) | **GET** /api/campanhas | Listar Campanhas
[**listarContasPorPessoaUsingGET**](CadastroGeralApi.md#listarContasPorPessoaUsingGET) | **GET** /api/pessoas/listar-contas | Lista as contas da pessoa
[**listarEstadosCivisUsingGET**](CadastroGeralApi.md#listarEstadosCivisUsingGET) | **GET** /api/estados-civis | Lista os Estados C\u00C3\u00ADvis
[**listarFantasiasBasicasUsingGET**](CadastroGeralApi.md#listarFantasiasBasicasUsingGET) | **GET** /api/fantasias-basicas | Listar Fantasias B\u00C3\u00A1sicas
[**listarHistoricoTelefonesUsingGET**](CadastroGeralApi.md#listarHistoricoTelefonesUsingGET) | **GET** /api/pessoas/{id}/historico-telefones | Listar altera\u00C3\u00A7\u00C3\u00B5es de telefones realizadas nos \u00C3\u00BAltimos 60 dias
[**listarNacionalidadesUsingGET**](CadastroGeralApi.md#listarNacionalidadesUsingGET) | **GET** /api/nacionalidades | Lista nacionalidades
[**listarNaturezasOcupacoesUsingGET**](CadastroGeralApi.md#listarNaturezasOcupacoesUsingGET) | **GET** /api/ocupacoes | Lista as Ocupa\u00C3\u00A7\u00C3\u00B5es
[**listarOrigensComerciaisUsingGET**](CadastroGeralApi.md#listarOrigensComerciaisUsingGET) | **GET** /api/origens-comerciais | Opera\u00C3\u00A7\u00C3\u00A3o utilizada para listar Origens Comerciais
[**listarParentescosUsingGET**](CadastroGeralApi.md#listarParentescosUsingGET) | **GET** /api/parentescos | Lista os Parentescos
[**listarProfissoesUsingGET**](CadastroGeralApi.md#listarProfissoesUsingGET) | **GET** /api/profissoes | Lista profiss\u00C3\u00B5es
[**listarTiposCampanhasUsingGET**](CadastroGeralApi.md#listarTiposCampanhasUsingGET) | **GET** /api/tipos-campanhas | Listar Tipos de Campanhas
[**listarUsingGET10**](CadastroGeralApi.md#listarUsingGET10) | **GET** /api/configuracoes-rotativos | Listar as configura\u00C3\u00A7\u00C3\u00B5es rotativo.
[**listarUsingGET2**](CadastroGeralApi.md#listarUsingGET2) | **GET** /api/atendimento-clientes | Lista todos os atendimentos
[**listarUsingGET27**](CadastroGeralApi.md#listarUsingGET27) | **GET** /api/portadores | Lista os Portadores existentes
[**listarUsingGET28**](CadastroGeralApi.md#listarUsingGET28) | **GET** /api/produtos | Lista os Produtos do Emissor
[**listarUsingGET29**](CadastroGeralApi.md#listarUsingGET29) | **GET** /api/promotores | Lista promotores cadastrados na base do emissor
[**listarUsingGET3**](CadastroGeralApi.md#listarUsingGET3) | **GET** /api/bancos | Lista os Bancos cadastrados para o Emissor
[**listarUsingGET37**](CadastroGeralApi.md#listarUsingGET37) | **GET** /api/tipos-enderecos | Lista as op\u00C3\u00B5es de Tipos de Endere\u00C3\u00A7os do Emissor 
[**listarUsingGET39**](CadastroGeralApi.md#listarUsingGET39) | **GET** /api/tipos-telefones | Lista os Tipos de Telefones
[**listarUsingGET45**](CadastroGeralApi.md#listarUsingGET45) | **GET** /api/vencimentos | Listar Vencimentos
[**listarUsingGET9**](CadastroGeralApi.md#listarUsingGET9) | **GET** /api/configuracoes-registro-cobranca | Listar configura\u00C3\u00A7\u00C3\u00B5es para registro de cobran\u00C3\u00A7a
[**salvarUsingPOST2**](CadastroGeralApi.md#salvarUsingPOST2) | **POST** /api/atendimento-clientes | Cadastro um novo Atendimento do tipo Gen\u00C3\u00A9rico para uma Conta
[**salvarUsingPOST4**](CadastroGeralApi.md#salvarUsingPOST4) | **POST** /api/campanhas | Inserir campanha
[**salvarUsingPOST6**](CadastroGeralApi.md#salvarUsingPOST6) | **POST** /api/configuracoes-rotativos | Inserir os dados de configura\u00C3\u00A7\u00C3\u00A3o do rotativo de um produto


# **alterarUsingPUT2**
> \br.com.conductor.pier.api.v2.model\CampanhaResponse alterarUsingPUT2($id, $update)

Alterar campanha

Este m\u00C3\u00A9todo permite que sejam alterados os dados de uma campanha.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da campanha (id).
$update = new \br.com.conductor.pier.api.v2.model\CampanhaUpdate(); // \br.com.conductor.pier.api.v2.model\CampanhaUpdate | update

try { 
    $result = $api_instance->alterarUsingPUT2($id, $update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->alterarUsingPUT2: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da campanha (id). | 
 **update** | [**\br.com.conductor.pier.api.v2.model\CampanhaUpdate**](\br.com.conductor.pier.api.v2.model\CampanhaUpdate.md)| update | 

### Return type

[**\br.com.conductor.pier.api.v2.model\CampanhaResponse**](CampanhaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarUsingPUT3**
> \br.com.conductor.pier.api.v2.model\ConfiguracaoRegistroCobrancaResponse alterarUsingPUT3($id, $configuracao_persist)

Atualizar configura\u00C3\u00A7\u00C3\u00A3o para registro de cobran\u00C3\u00A7a

Este m\u00C3\u00A9todo permite atualizar uma configura\u00C3\u00A7\u00C3\u00A3o, para registro de cobran\u00C3\u00A7a.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da configura\u00C3\u00A7\u00C3\u00A3o (id).
$configuracao_persist = new \br.com.conductor.pier.api.v2.model\ConfiguracaoRegistroCobrancaPersist(); // \br.com.conductor.pier.api.v2.model\ConfiguracaoRegistroCobrancaPersist | configuracaoPersist

try { 
    $result = $api_instance->alterarUsingPUT3($id, $configuracao_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->alterarUsingPUT3: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da configura\u00C3\u00A7\u00C3\u00A3o (id). | 
 **configuracao_persist** | [**\br.com.conductor.pier.api.v2.model\ConfiguracaoRegistroCobrancaPersist**](\br.com.conductor.pier.api.v2.model\ConfiguracaoRegistroCobrancaPersist.md)| configuracaoPersist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ConfiguracaoRegistroCobrancaResponse**](ConfiguracaoRegistroCobrancaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarUsingPUT4**
> \br.com.conductor.pier.api.v2.model\ConfiguracaoRotativoDetalheResponse alterarUsingPUT4($id, $configuracao_rotativo_persist)

Alterar os dados de configura\u00C3\u00A7\u00C3\u00A3o do rotativo de um produto

Este m\u00C3\u00A9todo permite que seja alterada uma configura\u00C3\u00A7\u00C3\u00A3o do rotativo para um determinado produto.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da configura\u00C3\u00A7\u00C3\u00A3o (id).
$configuracao_rotativo_persist = new \br.com.conductor.pier.api.v2.model\ConfiguracaoRotativoPersist(); // \br.com.conductor.pier.api.v2.model\ConfiguracaoRotativoPersist | configuracaoRotativoPersist

try { 
    $result = $api_instance->alterarUsingPUT4($id, $configuracao_rotativo_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->alterarUsingPUT4: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da configura\u00C3\u00A7\u00C3\u00A3o (id). | 
 **configuracao_rotativo_persist** | [**\br.com.conductor.pier.api.v2.model\ConfiguracaoRotativoPersist**](\br.com.conductor.pier.api.v2.model\ConfiguracaoRotativoPersist.md)| configuracaoRotativoPersist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ConfiguracaoRotativoDetalheResponse**](ConfiguracaoRotativoDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **ativarUsoExteriorUsingPOST**
> \br.com.conductor.pier.api.v2.model\ProdutoDetalhesResponse ativarUsoExteriorUsingPOST($id)

Ativa o par\u00C3\u00A2metro uso exterior para o produto

Este m\u00C3\u00A9todo permite ativar o uso no exterior para o produto atrav\u00C3\u00A9s do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Produto (id)

try { 
    $result = $api_instance->ativarUsoExteriorUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->ativarUsoExteriorUsingPOST: ', $e->getMessage(), "\n";
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

# **cadastrarUsingPOST1**
> \br.com.conductor.pier.api.v2.model\ConfiguracaoRegistroCobrancaResponse cadastrarUsingPOST1($configuracao_persist)

Inserir configura\u00C3\u00A7\u00C3\u00A3o para registro de cobran\u00C3\u00A7a

Este m\u00C3\u00A9todo permite que seja cadastrado uma nova configura\u00C3\u00A7\u00C3\u00A3o, para registro de cobran\u00C3\u00A7a.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$configuracao_persist = new \br.com.conductor.pier.api.v2.model\ConfiguracaoRegistroCobrancaPersist(); // \br.com.conductor.pier.api.v2.model\ConfiguracaoRegistroCobrancaPersist | configuracaoPersist

try { 
    $result = $api_instance->cadastrarUsingPOST1($configuracao_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->cadastrarUsingPOST1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **configuracao_persist** | [**\br.com.conductor.pier.api.v2.model\ConfiguracaoRegistroCobrancaPersist**](\br.com.conductor.pier.api.v2.model\ConfiguracaoRegistroCobrancaPersist.md)| configuracaoPersist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ConfiguracaoRegistroCobrancaResponse**](ConfiguracaoRegistroCobrancaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **configurarTaxaAntecipacaoUsingPOST**
> \br.com.conductor.pier.api.v2.model\ParametroProdutoResponse configurarTaxaAntecipacaoUsingPOST($id, $taxa_antecipacao_request)

Configura a Taxa de Antecipa\u00C3\u00A7\u00C3\u00A3o de um Produto

Este recurso permite configurar a Taxa de Antecipa\u00C3\u00A7\u00C3\u00A3o de um Produto, a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$id = 789; // int | Id Produto
$taxa_antecipacao_request = new \br.com.conductor.pier.api.v2.model\TaxaAntecipacaoRequest(); // \br.com.conductor.pier.api.v2.model\TaxaAntecipacaoRequest | taxaAntecipacaoRequest

try { 
    $result = $api_instance->configurarTaxaAntecipacaoUsingPOST($id, $taxa_antecipacao_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->configurarTaxaAntecipacaoUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id Produto | 
 **taxa_antecipacao_request** | [**\br.com.conductor.pier.api.v2.model\TaxaAntecipacaoRequest**](\br.com.conductor.pier.api.v2.model\TaxaAntecipacaoRequest.md)| taxaAntecipacaoRequest | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ParametroProdutoResponse**](ParametroProdutoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarCampanhaUsingGET**
> \br.com.conductor.pier.api.v2.model\CampanhaResponse consultarCampanhaUsingGET($id)

Consultar campanha

Este m\u00C3\u00A9todo permite que sejam listados os dados de uma determinada campanha existente na base do emissor. Para isso, \u00C3\u00A9 preciso informar o seu respectivo c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$id = 789; // int | ID da Campanha

try { 
    $result = $api_instance->consultarCampanhaUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->consultarCampanhaUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID da Campanha | 

### Return type

[**\br.com.conductor.pier.api.v2.model\CampanhaResponse**](CampanhaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarOrigemComercialUsingGET**
> \br.com.conductor.pier.api.v2.model\OrigemComercialResponse consultarOrigemComercialUsingGET($id)

Opera\u00C3\u00A7\u00C3\u00A3o utilizada para consultar uma determinada Origem Comercial

Este m\u00C3\u00A9todo permite que sejam listados os registros de uma determinada Origem Comercial existente na base do emissor. Para isso, \u00C3\u00A9 preciso informar o seu respectivo c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$id = 789; // int | ID da Origem Comercial

try { 
    $result = $api_instance->consultarOrigemComercialUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->consultarOrigemComercialUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID da Origem Comercial | 

### Return type

[**\br.com.conductor.pier.api.v2.model\OrigemComercialResponse**](OrigemComercialResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarTaxaAntecipacaoUsingGET**
> \br.com.conductor.pier.api.v2.model\ParametroProdutoResponse consultarTaxaAntecipacaoUsingGET($id, $tipo_transacao)

Consulta a Taxa de Antecipa\u00C3\u00A7\u00C3\u00A3o de um Produto

Este recurso permite consultar a Taxa de Antecipa\u00C3\u00A7\u00C3\u00A3o de um Produto, a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$id = 789; // int | Id Produto
$tipo_transacao = "tipo_transacao_example"; // string | Tipo da Transa\u00C3\u00A7\u00C3\u00A3o (ON-US ou OFF-US)

try { 
    $result = $api_instance->consultarTaxaAntecipacaoUsingGET($id, $tipo_transacao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->consultarTaxaAntecipacaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id Produto | 
 **tipo_transacao** | **string**| Tipo da Transa\u00C3\u00A7\u00C3\u00A3o (ON-US ou OFF-US) | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ParametroProdutoResponse**](ParametroProdutoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET2**
> \br.com.conductor.pier.api.v2.model\AtendimentoClienteResponse consultarUsingGET2($id)

Apresenta os dados de um determinado Atendimento

Este m\u00C3\u00A9todo permite consultar os par\u00C3\u00A2metros de um determinado Atendimento a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (idAtendimento).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do atendimento cliente (id).

try { 
    $result = $api_instance->consultarUsingGET2($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->consultarUsingGET2: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do atendimento cliente (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\AtendimentoClienteResponse**](AtendimentoClienteResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET22**
> \br.com.conductor.pier.api.v2.model\ProdutoDetalhesResponse consultarUsingGET22($id)

Apresenta os dados de um determinado Produto

Este m\u00C3\u00A9todo permite consultar um determinado Produto a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Produto (id)

try { 
    $result = $api_instance->consultarUsingGET22($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->consultarUsingGET22: ', $e->getMessage(), "\n";
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

# **consultarUsingGET29**
> \br.com.conductor.pier.api.v2.model\PageTipoAjusteResponse consultarUsingGET29($sort, $page, $limit, $id, $descricao)

Lista os tipos de ajustes do emissor 

Este recurso permite que sejam listados os tipos de ajustes existentes na base de dados do emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id = 789; // int | C\u00C3\u00B3digo identificador do tipo de ajuste.
$descricao = "descricao_example"; // string | Descri\u00C3\u00A7\u00C3\u00A3o do tipo de ajuste.

try { 
    $result = $api_instance->consultarUsingGET29($sort, $page, $limit, $id, $descricao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->consultarUsingGET29: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id** | **int**| C\u00C3\u00B3digo identificador do tipo de ajuste. | [optional] 
 **descricao** | **string**| Descri\u00C3\u00A7\u00C3\u00A3o do tipo de ajuste. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTipoAjusteResponse**](PageTipoAjusteResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET3**
> \br.com.conductor.pier.api.v2.model\BancoResponse consultarUsingGET3($id)

Apresenta os dados de um determinado Banco

Este m\u00C3\u00A9todo permite consultar um determinado Banco a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Banco (id).

try { 
    $result = $api_instance->consultarUsingGET3($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->consultarUsingGET3: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Banco (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\BancoResponse**](BancoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET30**
> \br.com.conductor.pier.api.v2.model\PageTipoBoletoResponse consultarUsingGET30($sort, $page, $limit, $id, $descricao, $banco)

Lista os tipos de boletos do emissor 

Este recurso permite que sejam listados os tipos de boletos existentes na base de dados do emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id = 789; // int | C\u00C3\u00B3digo identificador do tipo de boleto.
$descricao = "descricao_example"; // string | Descri\u00C3\u00A7\u00C3\u00A3o do tipo de boleto.
$banco = 789; // int | C\u00C3\u00B3digo identificador do banco.

try { 
    $result = $api_instance->consultarUsingGET30($sort, $page, $limit, $id, $descricao, $banco);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->consultarUsingGET30: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id** | **int**| C\u00C3\u00B3digo identificador do tipo de boleto. | [optional] 
 **descricao** | **string**| Descri\u00C3\u00A7\u00C3\u00A3o do tipo de boleto. | [optional] 
 **banco** | **int**| C\u00C3\u00B3digo identificador do banco. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTipoBoletoResponse**](PageTipoBoletoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET31**
> \br.com.conductor.pier.api.v2.model\TipoEnderecoResponse consultarUsingGET31($id)

Apresenta os dados de um determinado Tipo de Endere\u00C3\u00A7o

Este m\u00C3\u00A9todo permite consultar um determinado Tipo de Endere\u00C3\u00A7o a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo do Endere\u00C3\u00A7o (id)

try { 
    $result = $api_instance->consultarUsingGET31($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->consultarUsingGET31: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo do Endere\u00C3\u00A7o (id) | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TipoEnderecoResponse**](TipoEnderecoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET32**
> \br.com.conductor.pier.api.v2.model\TipoOperacaoResponse consultarUsingGET32($id_cartao, $id_estabelecimento, $codigo_processamento)

Apresenta dados de um determinado tipo de opera\u00C3\u00A7\u00C3\u00A3o

Este recurso permite consultar dados de um determinado tipo opera\u00C3\u00A7\u00C3\u00A3o a partir do idCartao, idEstabelecimento e codigoProcessamento.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$id_cartao = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do cartao (idCartao).
$id_estabelecimento = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do estabelecimento (idEstabelecimento).
$codigo_processamento = "codigo_processamento_example"; // string | C\u00C3\u00B3digo de processamento da opera\u00C3\u00A7\u00C3\u00A3o.

try { 
    $result = $api_instance->consultarUsingGET32($id_cartao, $id_estabelecimento, $codigo_processamento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->consultarUsingGET32: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_cartao** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do cartao (idCartao). | 
 **id_estabelecimento** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do estabelecimento (idEstabelecimento). | 
 **codigo_processamento** | **string**| C\u00C3\u00B3digo de processamento da opera\u00C3\u00A7\u00C3\u00A3o. | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TipoOperacaoResponse**](TipoOperacaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET34**
> \br.com.conductor.pier.api.v2.model\TipoTelefoneResponse consultarUsingGET34($id)

Apresenta os dados de um determinado Tipo de Telefone

Este m\u00C3\u00A9todo permite consultar um determinado Tipo de Telefone a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo do Telefone (id)

try { 
    $result = $api_instance->consultarUsingGET34($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->consultarUsingGET34: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo do Telefone (id) | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TipoTelefoneResponse**](TipoTelefoneResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET7**
> \br.com.conductor.pier.api.v2.model\ConfiguracaoRegistroCobrancaResponse consultarUsingGET7($id)

Consultar configura\u00C3\u00A7\u00C3\u00A3o para registro de cobran\u00C3\u00A7a

Este m\u00C3\u00A9todo permite buscar uma configura\u00C3\u00A7\u00C3\u00A3o, para registro de cobran\u00C3\u00A7a.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da configura\u00C3\u00A7\u00C3\u00A3o (id).

try { 
    $result = $api_instance->consultarUsingGET7($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->consultarUsingGET7: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da configura\u00C3\u00A7\u00C3\u00A3o (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ConfiguracaoRegistroCobrancaResponse**](ConfiguracaoRegistroCobrancaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET8**
> \br.com.conductor.pier.api.v2.model\ConfiguracaoRotativoDetalheResponse consultarUsingGET8($id)

Apresenta dados de configura\u00C3\u00A7\u00C3\u00A3o do rotativo espec\u00C3\u00ADfico.

Este recurso permite consultar dados de configura\u00C3\u00A7\u00C3\u00A3o do parcelamento rotativo a partir de seu codigo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o de configura\u00C3\u00A7\u00C3\u00A3o rotativo (id).

try { 
    $result = $api_instance->consultarUsingGET8($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->consultarUsingGET8: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o de configura\u00C3\u00A7\u00C3\u00A3o rotativo (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ConfiguracaoRotativoDetalheResponse**](ConfiguracaoRotativoDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **desativarUsoExteriorUsingPOST**
> \br.com.conductor.pier.api.v2.model\ProdutoDetalhesResponse desativarUsoExteriorUsingPOST($id)

Desativa o par\u00C3\u00A2metro uso exterior para o produto

Este m\u00C3\u00A9todo permite desativar o uso no exterior para o produto atrav\u00C3\u00A9s do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Produto (id)

try { 
    $result = $api_instance->desativarUsoExteriorUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->desativarUsoExteriorUsingPOST: ', $e->getMessage(), "\n";
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

# **listarCampanhasUsingGET**
> \br.com.conductor.pier.api.v2.model\PageCampanhaResponse listarCampanhasUsingGET($sort, $page, $limit, $id_tipo_campanha)

Listar Campanhas

Lista as campanhas.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id_tipo_campanha = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do tipo de campanha (id).

try { 
    $result = $api_instance->listarCampanhasUsingGET($sort, $page, $limit, $id_tipo_campanha);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->listarCampanhasUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id_tipo_campanha** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do tipo de campanha (id). | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageCampanhaResponse**](PageCampanhaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarContasPorPessoaUsingGET**
> \br.com.conductor.pier.api.v2.model\PageContaDetalheResponse listarContasPorPessoaUsingGET($numero_receita_federal, $sort, $page, $limit)

Lista as contas da pessoa

Permite listar as contas de um pessoa a partir do seu numero na receita federal.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$numero_receita_federal = "numero_receita_federal_example"; // string | N\u00C3\u00BAmero de identifica\u00C3\u00A7\u00C3\u00A3o do cliente na Receita Federal (CPF ou CNPJ)
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarContasPorPessoaUsingGET($numero_receita_federal, $sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->listarContasPorPessoaUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **numero_receita_federal** | **string**| N\u00C3\u00BAmero de identifica\u00C3\u00A7\u00C3\u00A3o do cliente na Receita Federal (CPF ou CNPJ) | 
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageContaDetalheResponse**](PageContaDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarEstadosCivisUsingGET**
> \br.com.conductor.pier.api.v2.model\PageCampoCodificadoDescricaoResponse listarEstadosCivisUsingGET($sort, $page, $limit)

Lista os Estados C\u00C3\u00ADvis

Este m\u00C3\u00A9todo permite que sejam listados os Estados C\u00C3\u00ADvis na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarEstadosCivisUsingGET($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->listarEstadosCivisUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageCampoCodificadoDescricaoResponse**](PageCampoCodificadoDescricaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarFantasiasBasicasUsingGET**
> \br.com.conductor.pier.api.v2.model\PageFantasiaBasicaResponse listarFantasiasBasicasUsingGET($sort, $page, $limit)

Listar Fantasias B\u00C3\u00A1sicas

Lista as fantasia b\u00C3\u00A1sicas.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarFantasiasBasicasUsingGET($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->listarFantasiasBasicasUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageFantasiaBasicaResponse**](PageFantasiaBasicaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarHistoricoTelefonesUsingGET**
> \br.com.conductor.pier.api.v2.model\HistoricoTelefoneResponse listarHistoricoTelefonesUsingGET($id)

Listar altera\u00C3\u00A7\u00C3\u00B5es de telefones realizadas nos \u00C3\u00BAltimos 60 dias

Este m\u00C3\u00A9todo permite verificar quais os telefones de um determinado que cliente que sofreram altera\u00C3\u00A7\u00C3\u00A3o nos \u00C3\u00BAltimos 60 dias.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da pessoa (id).

try { 
    $result = $api_instance->listarHistoricoTelefonesUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->listarHistoricoTelefonesUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da pessoa (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\HistoricoTelefoneResponse**](HistoricoTelefoneResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarNacionalidadesUsingGET**
> \br.com.conductor.pier.api.v2.model\PageCampoCodificadoDescricaoResponse listarNacionalidadesUsingGET($sort, $page, $limit)

Lista nacionalidades

Este m\u00C3\u00A9todo permite que sejam listados as nacionalidades na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarNacionalidadesUsingGET($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->listarNacionalidadesUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageCampoCodificadoDescricaoResponse**](PageCampoCodificadoDescricaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarNaturezasOcupacoesUsingGET**
> \br.com.conductor.pier.api.v2.model\PageCampoCodificadoDescricaoResponse listarNaturezasOcupacoesUsingGET($sort, $page, $limit)

Lista as Ocupa\u00C3\u00A7\u00C3\u00B5es

Este m\u00C3\u00A9todo permite que sejam listados as naturezas de opera\u00C3\u00A7\u00C3\u00B5es na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarNaturezasOcupacoesUsingGET($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->listarNaturezasOcupacoesUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageCampoCodificadoDescricaoResponse**](PageCampoCodificadoDescricaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarOrigensComerciaisUsingGET**
> \br.com.conductor.pier.api.v2.model\PageOrigemComercialResponse listarOrigensComerciaisUsingGET($sort, $page, $limit, $id, $nome, $status, $id_estabelecimento, $id_produto)

Opera\u00C3\u00A7\u00C3\u00A3o utilizada para listar Origens Comerciais

Este m\u00C3\u00A9todo permite que sejam listadas as Origens Comerciais existentes na base do emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id = 789; // int | Id da origem comercial
$nome = "nome_example"; // string | Nome da origem comercial
$status = 56; // int | Status da origem comercial
$id_estabelecimento = 789; // int | C\u00C3\u00B3digo identificador do estabelecimento
$id_produto = 789; // int | C\u00C3\u00B3digo identificador do produto

try { 
    $result = $api_instance->listarOrigensComerciaisUsingGET($sort, $page, $limit, $id, $nome, $status, $id_estabelecimento, $id_produto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->listarOrigensComerciaisUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id** | **int**| Id da origem comercial | [optional] 
 **nome** | **string**| Nome da origem comercial | [optional] 
 **status** | **int**| Status da origem comercial | [optional] 
 **id_estabelecimento** | **int**| C\u00C3\u00B3digo identificador do estabelecimento | [optional] 
 **id_produto** | **int**| C\u00C3\u00B3digo identificador do produto | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageOrigemComercialResponse**](PageOrigemComercialResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarParentescosUsingGET**
> \br.com.conductor.pier.api.v2.model\PageCampoCodificadoDescricaoResponse listarParentescosUsingGET($sort, $page, $limit)

Lista os Parentescos

Este m\u00C3\u00A9todo permite que sejam listados parentescos na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarParentescosUsingGET($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->listarParentescosUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageCampoCodificadoDescricaoResponse**](PageCampoCodificadoDescricaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarProfissoesUsingGET**
> \br.com.conductor.pier.api.v2.model\PageCampoCodificadoDescricaoResponse listarProfissoesUsingGET($sort, $page, $limit)

Lista profiss\u00C3\u00B5es

Este m\u00C3\u00A9todo permite que sejam listados as profiss\u00C3\u00B5es na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarProfissoesUsingGET($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->listarProfissoesUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageCampoCodificadoDescricaoResponse**](PageCampoCodificadoDescricaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarTiposCampanhasUsingGET**
> \br.com.conductor.pier.api.v2.model\PageTipoCampanhaResponse listarTiposCampanhasUsingGET($sort, $page, $limit)

Listar Tipos de Campanhas

Lista os tipos de campanhas.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarTiposCampanhasUsingGET($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->listarTiposCampanhasUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTipoCampanhaResponse**](PageTipoCampanhaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET10**
> \br.com.conductor.pier.api.v2.model\PageConfiguracaoRotativoResponse listarUsingGET10($sort, $page, $limit, $id_produto)

Listar as configura\u00C3\u00A7\u00C3\u00B5es rotativo.

Este recurso permite listar as configura\u00C3\u00A7\u00C3\u00B5es rotativo.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id_produto = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do Produto.

try { 
    $result = $api_instance->listarUsingGET10($sort, $page, $limit, $id_produto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->listarUsingGET10: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id_produto** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do Produto. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageConfiguracaoRotativoResponse**](PageConfiguracaoRotativoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET2**
> \br.com.conductor.pier.api.v2.model\PageAtendimentoClienteResponse listarUsingGET2($sort, $page, $limit, $id_tipo_atendimento, $id_conta, $nome_atendente, $data_atendimento)

Lista todos os atendimentos

Este m\u00C3\u00A9todo permite que sejam listados todos os Registro de Atendimento, independente do Tipo.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id_tipo_atendimento = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo de Atendimento (id)
$id_conta = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o de conta (id).
$nome_atendente = "nome_atendente_example"; // string | Apresenta o nome do Atendente que registrou o Atendimento.
$data_atendimento = "data_atendimento_example"; // string | Apresenta a data em que o Atendimento foi realizado.

try { 
    $result = $api_instance->listarUsingGET2($sort, $page, $limit, $id_tipo_atendimento, $id_conta, $nome_atendente, $data_atendimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->listarUsingGET2: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id_tipo_atendimento** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo de Atendimento (id) | [optional] 
 **id_conta** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o de conta (id). | [optional] 
 **nome_atendente** | **string**| Apresenta o nome do Atendente que registrou o Atendimento. | [optional] 
 **data_atendimento** | **string**| Apresenta a data em que o Atendimento foi realizado. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageAtendimentoClienteResponse**](PageAtendimentoClienteResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET27**
> \br.com.conductor.pier.api.v2.model\PagePortadorResponse listarUsingGET27($sort, $page, $limit, $id_conta, $id_produto, $id_pessoa, $id_parentesco, $tipo_portador, $nome_impresso, $id_tipo_cartao, $flag_ativo, $data_cadastro_portador, $data_cancelamento_portador)

Lista os Portadores existentes

Este m\u00C3\u00A9todo permite que sejam listados os portadores cadastrados na base do emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id_conta = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Conta (id).
$id_produto = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Produto (id).
$id_pessoa = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Pessoa (id).
$id_parentesco = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Parentesco (id)
$tipo_portador = "tipo_portador_example"; // string | Apresenta o tipo do Portador do cart\u00C3\u00A3o, sendo: ('T': Titular, 'A': Adicional).
$nome_impresso = "nome_impresso_example"; // string | Apresenta o nome a ser impresso no cart\u00C3\u00A3o.
$id_tipo_cartao = 789; // int | Apresenta o c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do tipo do cart\u00C3\u00A3o (id), que ser\u00C3\u00A1 utilizado para gerar os cart\u00C3\u00B5es deste portador, vinculados a sua respectiva conta atrav\u00C3\u00A9s do campo idConta.
$flag_ativo = 56; // int | Quanto ativa, indica que o cadastro do Portador est\u00C3\u00A1 ativo, em emissores que realizam este tipo de gest\u00C3\u00A3o.
$data_cadastro_portador = "data_cadastro_portador_example"; // string | Apresenta a data em que o Portador fora cadastrado, quando possuir esta informa\u00C3\u00A7\u00C3\u00A3o.
$data_cancelamento_portador = "data_cancelamento_portador_example"; // string | Apresenta a data em que o Portador fora cancelado, quando possuir esta informa\u00C3\u00A7\u00C3\u00A3o.

try { 
    $result = $api_instance->listarUsingGET27($sort, $page, $limit, $id_conta, $id_produto, $id_pessoa, $id_parentesco, $tipo_portador, $nome_impresso, $id_tipo_cartao, $flag_ativo, $data_cadastro_portador, $data_cancelamento_portador);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->listarUsingGET27: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id_conta** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Conta (id). | [optional] 
 **id_produto** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Produto (id). | [optional] 
 **id_pessoa** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Pessoa (id). | [optional] 
 **id_parentesco** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Parentesco (id) | [optional] 
 **tipo_portador** | **string**| Apresenta o tipo do Portador do cart\u00C3\u00A3o, sendo: (&#39;T&#39;: Titular, &#39;A&#39;: Adicional). | [optional] 
 **nome_impresso** | **string**| Apresenta o nome a ser impresso no cart\u00C3\u00A3o. | [optional] 
 **id_tipo_cartao** | **int**| Apresenta o c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do tipo do cart\u00C3\u00A3o (id), que ser\u00C3\u00A1 utilizado para gerar os cart\u00C3\u00B5es deste portador, vinculados a sua respectiva conta atrav\u00C3\u00A9s do campo idConta. | [optional] 
 **flag_ativo** | **int**| Quanto ativa, indica que o cadastro do Portador est\u00C3\u00A1 ativo, em emissores que realizam este tipo de gest\u00C3\u00A3o. | [optional] 
 **data_cadastro_portador** | **string**| Apresenta a data em que o Portador fora cadastrado, quando possuir esta informa\u00C3\u00A7\u00C3\u00A3o. | [optional] 
 **data_cancelamento_portador** | **string**| Apresenta a data em que o Portador fora cancelado, quando possuir esta informa\u00C3\u00A7\u00C3\u00A3o. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PagePortadorResponse**](PagePortadorResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET28**
> \br.com.conductor.pier.api.v2.model\PageProdutoResponse listarUsingGET28($sort, $page, $limit, $nome, $status, $id_fantasia_basica)

Lista os Produtos do Emissor

Este m\u00C3\u00A9todo permite que sejam listados os Produtos existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$nome = "nome_example"; // string | Descri\u00C3\u00A7\u00C3\u00A3o do Nome do Produto.
$status = 56; // int | Representa o Status do Produto, onde: (\"0\": Inativo), (\"1\": Ativo).
$id_fantasia_basica = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Fantasia B\u00C3\u00A1sica (id) a qual o produto pertence.

try { 
    $result = $api_instance->listarUsingGET28($sort, $page, $limit, $nome, $status, $id_fantasia_basica);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->listarUsingGET28: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **nome** | **string**| Descri\u00C3\u00A7\u00C3\u00A3o do Nome do Produto. | [optional] 
 **status** | **int**| Representa o Status do Produto, onde: (\&quot;0\&quot;: Inativo), (\&quot;1\&quot;: Ativo). | [optional] 
 **id_fantasia_basica** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Fantasia B\u00C3\u00A1sica (id) a qual o produto pertence. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageProdutoResponse**](PageProdutoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET29**
> \br.com.conductor.pier.api.v2.model\PagePromotorResponse listarUsingGET29($sort, $page, $limit, $id, $nome, $data_cadastro, $id_estabelecimento, $id_usuario)

Lista promotores cadastrados na base do emissor

Este m\u00C3\u00A9todo permite que sejam listados os cadastros de Promoteres existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do promotor (id)
$nome = "nome_example"; // string | Nome do Promotor
$data_cadastro = "data_cadastro_example"; // string | Data da Inclus\u00C3\u00A3o.
$id_estabelecimento = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Estabelecimento
$id_usuario = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do usu\u00C3\u00A1rio

try { 
    $result = $api_instance->listarUsingGET29($sort, $page, $limit, $id, $nome, $data_cadastro, $id_estabelecimento, $id_usuario);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->listarUsingGET29: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do promotor (id) | [optional] 
 **nome** | **string**| Nome do Promotor | [optional] 
 **data_cadastro** | **string**| Data da Inclus\u00C3\u00A3o. | [optional] 
 **id_estabelecimento** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Estabelecimento | [optional] 
 **id_usuario** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do usu\u00C3\u00A1rio | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PagePromotorResponse**](PagePromotorResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET3**
> \br.com.conductor.pier.api.v2.model\PageBancoResponse listarUsingGET3($sort, $page, $limit)

Lista os Bancos cadastrados para o Emissor

Este m\u00C3\u00A9todo permite que sejam listados os Bancos existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarUsingGET3($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->listarUsingGET3: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageBancoResponse**](PageBancoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET37**
> \br.com.conductor.pier.api.v2.model\PageTipoEnderecoResponse listarUsingGET37($sort, $page, $limit, $id, $nome)

Lista as op\u00C3\u00B5es de Tipos de Endere\u00C3\u00A7os do Emissor 

Este m\u00C3\u00A9todo permite que sejam listados os Tipos de Endere\u00C3\u00A7os existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo do Endere\u00C3\u00A7o (id)
$nome = "nome_example"; // string | Nome do Tipo do Endere\u00C3\u00A7o

try { 
    $result = $api_instance->listarUsingGET37($sort, $page, $limit, $id, $nome);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->listarUsingGET37: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo do Endere\u00C3\u00A7o (id) | [optional] 
 **nome** | **string**| Nome do Tipo do Endere\u00C3\u00A7o | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTipoEnderecoResponse**](PageTipoEnderecoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET39**
> \br.com.conductor.pier.api.v2.model\PageTipoTelefoneResponse listarUsingGET39($sort, $page, $limit, $id, $nome)

Lista os Tipos de Telefones

Este m\u00C3\u00A9todo permite que sejam listados os Tipos de Telefones existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo do Telefone (id).
$nome = "nome_example"; // string | Nome do Tipo do Telefone

try { 
    $result = $api_instance->listarUsingGET39($sort, $page, $limit, $id, $nome);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->listarUsingGET39: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo do Telefone (id). | [optional] 
 **nome** | **string**| Nome do Tipo do Telefone | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTipoTelefoneResponse**](PageTipoTelefoneResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET45**
> \br.com.conductor.pier.api.v2.model\PageControleVencimentoResponse listarUsingGET45($sort, $page, $limit, $data_vencimento)

Listar Vencimentos

Este recurso permite que sejam listados os Vencimentos do emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$data_vencimento = "data_vencimento_example"; // string | Indica a data de vencimento das faturas

try { 
    $result = $api_instance->listarUsingGET45($sort, $page, $limit, $data_vencimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->listarUsingGET45: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **data_vencimento** | **string**| Indica a data de vencimento das faturas | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageControleVencimentoResponse**](PageControleVencimentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET9**
> \br.com.conductor.pier.api.v2.model\ConfiguracaoRegistroCobrancaResponse listarUsingGET9($sort, $page, $limit)

Listar configura\u00C3\u00A7\u00C3\u00B5es para registro de cobran\u00C3\u00A7a

Este m\u00C3\u00A9todo permite listar as configura\u00C3\u00A7\u00C3\u00B5es de registro de cobran\u00C3\u00A7a.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarUsingGET9($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->listarUsingGET9: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\ConfiguracaoRegistroCobrancaResponse**](ConfiguracaoRegistroCobrancaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST2**
> \br.com.conductor.pier.api.v2.model\AtendimentoClienteResponse salvarUsingPOST2($id_conta, $conteudo_atendimento, $detalhes_atendimento, $nome_atendente, $data_atendimento, $data_agendamento, $data_hora_inicio_atendimento, $data_hora_fim_atendimento, $flag_fila_fraude)

Cadastro um novo Atendimento do tipo Gen\u00C3\u00A9rico para uma Conta

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$id_conta = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Conta a qual o Atendimento est\u00C3\u00A1 associado
$conteudo_atendimento = "conteudo_atendimento_example"; // string | Apresenta as informa\u00C3\u00A7\u00C3\u00B5es que foram utilizadas para consultar, cadastrar ou alterar informa\u00C3\u00A7\u00C3\u00B5es relacionadas ao Atendimento.
$detalhes_atendimento = "detalhes_atendimento_example"; // string | Apresenta os detalhes lan\u00C3\u00A7ados pelo sistema ou pelo Atendente durante relacionados ao Atendimento.
$nome_atendente = "nome_atendente_example"; // string | Apresenta o nome do Atendente que registrou o Atendimento.
$data_atendimento = "data_atendimento_example"; // string | Apresenta a data e hora em que o Atendimento foi realizado no formato yyyy-MM-dd'T'HH:mm:ss.SSS'Z'.
$data_agendamento = "data_agendamento_example"; // string | Quando utilizado, de acordo com o Tipo de Atendimento, apresenta a data e hora para processamento ou a data e hora para retorno do Atendimento no formato yyyy-MM-dd'T'HH:mm:ss.SSS'Z'.
$data_hora_inicio_atendimento = "data_hora_inicio_atendimento_example"; // string | Apresenta a data e hora em que o Atendimento foi iniciado. Quando utilizado, serve para medir a performance dos Atendimentos no formato yyyy-MM-dd'T'HH:mm:ss.SSS'Z'.
$data_hora_fim_atendimento = "data_hora_fim_atendimento_example"; // string | Apresenta a data e hora em que o Atendimento foi finalizado. Quando utilizado, serve para medir a performance dos Atendimentos no formato yyyy-MM-dd'T'HH:mm:ss.SSS'Z'.
$flag_fila_fraude = 56; // int | Flag fila fraude

try { 
    $result = $api_instance->salvarUsingPOST2($id_conta, $conteudo_atendimento, $detalhes_atendimento, $nome_atendente, $data_atendimento, $data_agendamento, $data_hora_inicio_atendimento, $data_hora_fim_atendimento, $flag_fila_fraude);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->salvarUsingPOST2: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_conta** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Conta a qual o Atendimento est\u00C3\u00A1 associado | [optional] 
 **conteudo_atendimento** | **string**| Apresenta as informa\u00C3\u00A7\u00C3\u00B5es que foram utilizadas para consultar, cadastrar ou alterar informa\u00C3\u00A7\u00C3\u00B5es relacionadas ao Atendimento. | [optional] 
 **detalhes_atendimento** | **string**| Apresenta os detalhes lan\u00C3\u00A7ados pelo sistema ou pelo Atendente durante relacionados ao Atendimento. | [optional] 
 **nome_atendente** | **string**| Apresenta o nome do Atendente que registrou o Atendimento. | [optional] 
 **data_atendimento** | **string**| Apresenta a data e hora em que o Atendimento foi realizado no formato yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSS&#39;Z&#39;. | [optional] 
 **data_agendamento** | **string**| Quando utilizado, de acordo com o Tipo de Atendimento, apresenta a data e hora para processamento ou a data e hora para retorno do Atendimento no formato yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSS&#39;Z&#39;. | [optional] 
 **data_hora_inicio_atendimento** | **string**| Apresenta a data e hora em que o Atendimento foi iniciado. Quando utilizado, serve para medir a performance dos Atendimentos no formato yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSS&#39;Z&#39;. | [optional] 
 **data_hora_fim_atendimento** | **string**| Apresenta a data e hora em que o Atendimento foi finalizado. Quando utilizado, serve para medir a performance dos Atendimentos no formato yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSS&#39;Z&#39;. | [optional] 
 **flag_fila_fraude** | **int**| Flag fila fraude | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\AtendimentoClienteResponse**](AtendimentoClienteResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST4**
> \br.com.conductor.pier.api.v2.model\CampanhaResponse salvarUsingPOST4($campanha_persist)

Inserir campanha

Este m\u00C3\u00A9todo permite que seja cadastrado uma nova campanha.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$campanha_persist = new \br.com.conductor.pier.api.v2.model\CampanhaPersist(); // \br.com.conductor.pier.api.v2.model\CampanhaPersist | campanhaPersist

try { 
    $result = $api_instance->salvarUsingPOST4($campanha_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->salvarUsingPOST4: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campanha_persist** | [**\br.com.conductor.pier.api.v2.model\CampanhaPersist**](\br.com.conductor.pier.api.v2.model\CampanhaPersist.md)| campanhaPersist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\CampanhaResponse**](CampanhaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST6**
> \br.com.conductor.pier.api.v2.model\ConfiguracaoRotativoDetalheResponse salvarUsingPOST6($configuracao_rotativo_persist)

Inserir os dados de configura\u00C3\u00A7\u00C3\u00A3o do rotativo de um produto

Este m\u00C3\u00A9todo permite que seja cadastrado uma nova configura\u00C3\u00A7\u00C3\u00A3o do rotativo para um determinado produto.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CadastroGeralApi();
$configuracao_rotativo_persist = new \br.com.conductor.pier.api.v2.model\ConfiguracaoRotativoPersist(); // \br.com.conductor.pier.api.v2.model\ConfiguracaoRotativoPersist | configuracaoRotativoPersist

try { 
    $result = $api_instance->salvarUsingPOST6($configuracao_rotativo_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastroGeralApi->salvarUsingPOST6: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **configuracao_rotativo_persist** | [**\br.com.conductor.pier.api.v2.model\ConfiguracaoRotativoPersist**](\br.com.conductor.pier.api.v2.model\ConfiguracaoRotativoPersist.md)| configuracaoRotativoPersist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ConfiguracaoRotativoDetalheResponse**](ConfiguracaoRotativoDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

