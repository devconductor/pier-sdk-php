# br.com.conductor.pier.api.v2.invoker\GlobaltagcadastrogeralApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarConvenioUsingPUT**](GlobaltagcadastrogeralApi.md#alterarConvenioUsingPUT) | **PUT** /api/convenios/{id} | Altera os dados banc\u00E1rios de um determinado conv\u00EAnio
[**alterarUsingPUT1**](GlobaltagcadastrogeralApi.md#alterarUsingPUT1) | **PUT** /api/campanhas/{id} | {{{campanha_resource_alterar}}}
[**alterarUsingPUT2**](GlobaltagcadastrogeralApi.md#alterarUsingPUT2) | **PUT** /api/configuracoes-registro-cobranca/{id} | {{{configuracao_registro_cobranca_resource_alterar}}}
[**alterarUsingPUT3**](GlobaltagcadastrogeralApi.md#alterarUsingPUT3) | **PUT** /api/configuracoes-rotativos/{id} | {{{configuracao_rotativo_resource_alterar}}}
[**cadastrarConvenioUsingPOST**](GlobaltagcadastrogeralApi.md#cadastrarConvenioUsingPOST) | **POST** /api/convenios | Adiciona novo conv\u00EAnio para o emissor
[**cadastrarUsingPOST1**](GlobaltagcadastrogeralApi.md#cadastrarUsingPOST1) | **POST** /api/configuracoes-registro-cobranca | {{{configuracao_registro_cobranca_resource_cadastrar}}}
[**configurarTaxaAntecipacaoUsingPOST**](GlobaltagcadastrogeralApi.md#configurarTaxaAntecipacaoUsingPOST) | **POST** /api/produtos/{id}/configurar-taxa-antecipacao | {{{produto_resource_configurar_taxa_antecipacao}}}
[**consultarCampanhaUsingGET**](GlobaltagcadastrogeralApi.md#consultarCampanhaUsingGET) | **GET** /api/campanhas/{id} | {{{campanha_resource_consultar_campanha}}}
[**consultarConvenioUsingGET**](GlobaltagcadastrogeralApi.md#consultarConvenioUsingGET) | **GET** /api/convenios/{id} | Consultar dados banc\u00E1rios pelo id do conv\u00EAnio
[**consultarTaxaAntecipacaoUsingGET**](GlobaltagcadastrogeralApi.md#consultarTaxaAntecipacaoUsingGET) | **GET** /api/produtos/{id}/consultar-taxa-antecipacao | {{{produto_resource_consultar_taxa_antecipacao}}}
[**consultarUsingGET10**](GlobaltagcadastrogeralApi.md#consultarUsingGET10) | **GET** /api/configuracoes-registro-cobranca/{id} | {{{configuracao_registro_cobranca_resource_consultar}}}
[**consultarUsingGET11**](GlobaltagcadastrogeralApi.md#consultarUsingGET11) | **GET** /api/configuracoes-rotativos/{id} | {{{configuracao_rotativo_resource_consultar}}}
[**consultarUsingGET31**](GlobaltagcadastrogeralApi.md#consultarUsingGET31) | **GET** /api/produtos/{id} | {{{produto_resource_consultar}}}
[**consultarUsingGET40**](GlobaltagcadastrogeralApi.md#consultarUsingGET40) | **GET** /api/tipos-ajustes/{id} | {{{tipo_transacoes_ajuste_resource_consultar}}}
[**consultarUsingGET41**](GlobaltagcadastrogeralApi.md#consultarUsingGET41) | **GET** /api/tipos-boletos | {{{tipo_boleto_resource_consultar}}}
[**consultarUsingGET42**](GlobaltagcadastrogeralApi.md#consultarUsingGET42) | **GET** /api/tipos-enderecos/{id} | {{{tipo_endereco_resource_consultar}}}
[**consultarUsingGET43**](GlobaltagcadastrogeralApi.md#consultarUsingGET43) | **GET** /api/tipos-operacoes | {{{tipo_operacao_resource_consultar}}}
[**consultarUsingGET45**](GlobaltagcadastrogeralApi.md#consultarUsingGET45) | **GET** /api/tipos-telefones/{id} | {{{tipo_telefone_resource_consultar}}}
[**consultarUsingGET5**](GlobaltagcadastrogeralApi.md#consultarUsingGET5) | **GET** /api/atendimento-clientes/{id} | {{{atendimento_cliente_resource_consultar}}}
[**consultarUsingGET7**](GlobaltagcadastrogeralApi.md#consultarUsingGET7) | **GET** /api/bancos/{id} | {{{banco_resource_consultar}}}
[**listarCampanhasUsingGET**](GlobaltagcadastrogeralApi.md#listarCampanhasUsingGET) | **GET** /api/campanhas | {{{campanha_resource_listar_campanhas}}}
[**listarContasPorPessoaUsingGET**](GlobaltagcadastrogeralApi.md#listarContasPorPessoaUsingGET) | **GET** /api/pessoas/listar-contas | {{{pessoa_resource_listar_contas_por_pessoa}}}
[**listarConveniosUsingGET**](GlobaltagcadastrogeralApi.md#listarConveniosUsingGET) | **GET** /api/convenios | Lista os dados banc\u00E1rios dos conv\u00EAnios existentes
[**listarEstadosCivisUsingGET**](GlobaltagcadastrogeralApi.md#listarEstadosCivisUsingGET) | **GET** /api/estados-civis | {{{campo_codificado_resource_listar_estados_civis}}}
[**listarFantasiasBasicasUsingGET**](GlobaltagcadastrogeralApi.md#listarFantasiasBasicasUsingGET) | **GET** /api/fantasias-basicas | {{{fantasia_basica_resource_listar_fantasias_basicas}}}
[**listarHistoricoTelefonesUsingGET**](GlobaltagcadastrogeralApi.md#listarHistoricoTelefonesUsingGET) | **GET** /api/pessoas/{id}/historico-telefones | {{{pessoa_resource_listar_historico_telefones}}}
[**listarNacionalidadesUsingGET**](GlobaltagcadastrogeralApi.md#listarNacionalidadesUsingGET) | **GET** /api/nacionalidades | {{{campo_codificado_resource_listar_nacionalidades}}}
[**listarNaturezasOcupacoesUsingGET**](GlobaltagcadastrogeralApi.md#listarNaturezasOcupacoesUsingGET) | **GET** /api/ocupacoes | {{{campo_codificado_resource_listar_naturezas_ocupacoes}}}
[**listarParentescosUsingGET**](GlobaltagcadastrogeralApi.md#listarParentescosUsingGET) | **GET** /api/parentescos | {{{campo_codificado_resource_listar_parentescos}}}
[**listarProfissoesUsingGET**](GlobaltagcadastrogeralApi.md#listarProfissoesUsingGET) | **GET** /api/profissoes | {{{campo_codificado_resource_listar_profissoes}}}
[**listarTiposCampanhasUsingGET**](GlobaltagcadastrogeralApi.md#listarTiposCampanhasUsingGET) | **GET** /api/tipos-campanhas | {{{tipo_campanha_resource_listar_tipos_campanhas}}}
[**listarUsingGET14**](GlobaltagcadastrogeralApi.md#listarUsingGET14) | **GET** /api/configuracoes-registro-cobranca | {{{configuracao_registro_cobranca_resource_listar}}}
[**listarUsingGET15**](GlobaltagcadastrogeralApi.md#listarUsingGET15) | **GET** /api/configuracoes-rotativos | {{{configuracao_rotativo_resource_listar}}}
[**listarUsingGET41**](GlobaltagcadastrogeralApi.md#listarUsingGET41) | **GET** /api/portadores | {{{portador_resource_listar}}}
[**listarUsingGET42**](GlobaltagcadastrogeralApi.md#listarUsingGET42) | **GET** /api/produtos | {{{produto_resource_listar}}}
[**listarUsingGET43**](GlobaltagcadastrogeralApi.md#listarUsingGET43) | **GET** /api/promotores | {{{promotor_resource_listar}}}
[**listarUsingGET52**](GlobaltagcadastrogeralApi.md#listarUsingGET52) | **GET** /api/tipos-ajustes | {{{tipo_ajuste_resource_consultar}}}
[**listarUsingGET54**](GlobaltagcadastrogeralApi.md#listarUsingGET54) | **GET** /api/tipos-enderecos | {{{tipo_endereco_resource_listar}}}
[**listarUsingGET56**](GlobaltagcadastrogeralApi.md#listarUsingGET56) | **GET** /api/tipos-telefones | {{{tipo_telefone_resource_listar}}}
[**listarUsingGET63**](GlobaltagcadastrogeralApi.md#listarUsingGET63) | **GET** /api/vencimentos | {{{vencimento_resource_listar}}}
[**listarUsingGET7**](GlobaltagcadastrogeralApi.md#listarUsingGET7) | **GET** /api/atendimento-clientes | {{{atendimento_cliente_resource_listar}}}
[**listarUsingGET9**](GlobaltagcadastrogeralApi.md#listarUsingGET9) | **GET** /api/bancos | {{{banco_resource_listar}}}
[**salvarUsingPOST2**](GlobaltagcadastrogeralApi.md#salvarUsingPOST2) | **POST** /api/atendimento-clientes | {{{atendimento_cliente_resource_salvar}}}
[**salvarUsingPOST4**](GlobaltagcadastrogeralApi.md#salvarUsingPOST4) | **POST** /api/campanhas | {{{campanha_resource_salvar}}}
[**salvarUsingPOST6**](GlobaltagcadastrogeralApi.md#salvarUsingPOST6) | **POST** /api/configuracoes-rotativos | {{{configuracao_rotativo_resource_salvar}}}


# **alterarConvenioUsingPUT**
> \br.com.conductor.pier.api.v2.model\ConvenioResponse alterarConvenioUsingPUT($id, $convenio_persist)

Altera os dados banc\u00E1rios de um determinado conv\u00EAnio

Altera os dados banc\u00E1rios de um determinado conv\u00EAnio

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$id = 789; // int | Id
$convenio_persist = new \br.com.conductor.pier.api.v2.model\ConvenioPersist(); // \br.com.conductor.pier.api.v2.model\ConvenioPersist | convenioPersist

try { 
    $result = $api_instance->alterarConvenioUsingPUT($id, $convenio_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->alterarConvenioUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id | 
 **convenio_persist** | [**\br.com.conductor.pier.api.v2.model\ConvenioPersist**](\br.com.conductor.pier.api.v2.model\ConvenioPersist.md)| convenioPersist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ConvenioResponse**](ConvenioResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarUsingPUT1**
> \br.com.conductor.pier.api.v2.model\CampanhaResponse alterarUsingPUT1($id, $update)

{{{campanha_resource_alterar}}}

{{{campanha_resource_alterar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$id = 789; // int | {{{campanha_resource_alterar_param_id}}}
$update = new \br.com.conductor.pier.api.v2.model\CampanhaUpdateValue_(); // \br.com.conductor.pier.api.v2.model\CampanhaUpdateValue_ | update

try { 
    $result = $api_instance->alterarUsingPUT1($id, $update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->alterarUsingPUT1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{campanha_resource_alterar_param_id}}} | 
 **update** | [**\br.com.conductor.pier.api.v2.model\CampanhaUpdateValue_**](\br.com.conductor.pier.api.v2.model\CampanhaUpdateValue_.md)| update | 

### Return type

[**\br.com.conductor.pier.api.v2.model\CampanhaResponse**](CampanhaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarUsingPUT2**
> \br.com.conductor.pier.api.v2.model\ConfiguracaoRegistroCobrancaResponse alterarUsingPUT2($id, $configuracao_persist)

{{{configuracao_registro_cobranca_resource_alterar}}}

{{{configuracao_registro_cobranca_resource_alterar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$id = 789; // int | {{{configuracao_registro_cobranca_resource_alterar_param_id}}}
$configuracao_persist = new \br.com.conductor.pier.api.v2.model\ConfiguracaoRegistroCobrancaPersist(); // \br.com.conductor.pier.api.v2.model\ConfiguracaoRegistroCobrancaPersist | configuracaoPersist

try { 
    $result = $api_instance->alterarUsingPUT2($id, $configuracao_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->alterarUsingPUT2: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{configuracao_registro_cobranca_resource_alterar_param_id}}} | 
 **configuracao_persist** | [**\br.com.conductor.pier.api.v2.model\ConfiguracaoRegistroCobrancaPersist**](\br.com.conductor.pier.api.v2.model\ConfiguracaoRegistroCobrancaPersist.md)| configuracaoPersist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ConfiguracaoRegistroCobrancaResponse**](ConfiguracaoRegistroCobrancaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarUsingPUT3**
> \br.com.conductor.pier.api.v2.model\ConfiguracaoRotativoDetalheResponse alterarUsingPUT3($id, $configuracao_rotativo_persist)

{{{configuracao_rotativo_resource_alterar}}}

{{{configuracao_rotativo_resource_alterar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$id = 789; // int | {{{configuracao_rotativo_resource_alterar_param_id}}}
$configuracao_rotativo_persist = new \br.com.conductor.pier.api.v2.model\ConfiguracaoRotativoPersist(); // \br.com.conductor.pier.api.v2.model\ConfiguracaoRotativoPersist | configuracaoRotativoPersist

try { 
    $result = $api_instance->alterarUsingPUT3($id, $configuracao_rotativo_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->alterarUsingPUT3: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{configuracao_rotativo_resource_alterar_param_id}}} | 
 **configuracao_rotativo_persist** | [**\br.com.conductor.pier.api.v2.model\ConfiguracaoRotativoPersist**](\br.com.conductor.pier.api.v2.model\ConfiguracaoRotativoPersist.md)| configuracaoRotativoPersist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ConfiguracaoRotativoDetalheResponse**](ConfiguracaoRotativoDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **cadastrarConvenioUsingPOST**
> \br.com.conductor.pier.api.v2.model\ConvenioResponse cadastrarConvenioUsingPOST($convenio_persist)

Adiciona novo conv\u00EAnio para o emissor

Adiciona novo conv\u00EAnio para o emissor

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$convenio_persist = new \br.com.conductor.pier.api.v2.model\ConvenioPersist(); // \br.com.conductor.pier.api.v2.model\ConvenioPersist | convenioPersist

try { 
    $result = $api_instance->cadastrarConvenioUsingPOST($convenio_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->cadastrarConvenioUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **convenio_persist** | [**\br.com.conductor.pier.api.v2.model\ConvenioPersist**](\br.com.conductor.pier.api.v2.model\ConvenioPersist.md)| convenioPersist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ConvenioResponse**](ConvenioResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **cadastrarUsingPOST1**
> \br.com.conductor.pier.api.v2.model\ConfiguracaoRegistroCobrancaResponse cadastrarUsingPOST1($configuracao_persist)

{{{configuracao_registro_cobranca_resource_cadastrar}}}

{{{configuracao_registro_cobranca_resource_cadastrar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$configuracao_persist = new \br.com.conductor.pier.api.v2.model\ConfiguracaoRegistroCobrancaPersist(); // \br.com.conductor.pier.api.v2.model\ConfiguracaoRegistroCobrancaPersist | configuracaoPersist

try { 
    $result = $api_instance->cadastrarUsingPOST1($configuracao_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->cadastrarUsingPOST1: ', $e->getMessage(), "\n";
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

{{{produto_resource_configurar_taxa_antecipacao}}}

{{{produto_resource_configurar_taxa_antecipacao_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$id = 789; // int | {{{produto_resource_configurar_taxa_antecipacao_param_id}}}
$taxa_antecipacao_request = new \br.com.conductor.pier.api.v2.model\TaxaAntecipacaoRequest(); // \br.com.conductor.pier.api.v2.model\TaxaAntecipacaoRequest | taxaAntecipacaoRequest

try { 
    $result = $api_instance->configurarTaxaAntecipacaoUsingPOST($id, $taxa_antecipacao_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->configurarTaxaAntecipacaoUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{produto_resource_configurar_taxa_antecipacao_param_id}}} | 
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

{{{campanha_resource_consultar_campanha}}}

{{{campanha_resource_consultar_campanha_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$id = 789; // int | {{{campanha_resource_consultar_campanha_param_id_campanha}}}

try { 
    $result = $api_instance->consultarCampanhaUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->consultarCampanhaUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{campanha_resource_consultar_campanha_param_id_campanha}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\CampanhaResponse**](CampanhaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarConvenioUsingGET**
> \br.com.conductor.pier.api.v2.model\ConvenioResponse consultarConvenioUsingGET($id)

Consultar dados banc\u00E1rios pelo id do conv\u00EAnio

Consultar dados banc\u00E1rios de um determinado conv\u00EAnio

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$id = 789; // int | Id

try { 
    $result = $api_instance->consultarConvenioUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->consultarConvenioUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ConvenioResponse**](ConvenioResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarTaxaAntecipacaoUsingGET**
> \br.com.conductor.pier.api.v2.model\ParametroProdutoResponse consultarTaxaAntecipacaoUsingGET($id, $tipo_transacao)

{{{produto_resource_consultar_taxa_antecipacao}}}

{{{produto_resource_consultar_taxa_antecipacao_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$id = 789; // int | {{{produto_resource_consultar_taxa_antecipacao_param_id}}}
$tipo_transacao = "tipo_transacao_example"; // string | {{{produto_resource_consultar_taxa_antecipacao_param_tipo_transacao}}}

try { 
    $result = $api_instance->consultarTaxaAntecipacaoUsingGET($id, $tipo_transacao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->consultarTaxaAntecipacaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{produto_resource_consultar_taxa_antecipacao_param_id}}} | 
 **tipo_transacao** | **string**| {{{produto_resource_consultar_taxa_antecipacao_param_tipo_transacao}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ParametroProdutoResponse**](ParametroProdutoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET10**
> \br.com.conductor.pier.api.v2.model\ConfiguracaoRegistroCobrancaResponse consultarUsingGET10($id)

{{{configuracao_registro_cobranca_resource_consultar}}}

{{{configuracao_registro_cobranca_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$id = 789; // int | {{{configuracao_registro_cobranca_resource_consultar_param_id}}}

try { 
    $result = $api_instance->consultarUsingGET10($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->consultarUsingGET10: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{configuracao_registro_cobranca_resource_consultar_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ConfiguracaoRegistroCobrancaResponse**](ConfiguracaoRegistroCobrancaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET11**
> \br.com.conductor.pier.api.v2.model\ConfiguracaoRotativoDetalheResponse consultarUsingGET11($id)

{{{configuracao_rotativo_resource_consultar}}}

{{{configuracao_rotativo_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$id = 789; // int | {{{configuracao_rotativo_resource_consultar_param_id}}}

try { 
    $result = $api_instance->consultarUsingGET11($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->consultarUsingGET11: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{configuracao_rotativo_resource_consultar_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ConfiguracaoRotativoDetalheResponse**](ConfiguracaoRotativoDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET31**
> \br.com.conductor.pier.api.v2.model\ProdutoDetalhesResponse consultarUsingGET31($id)

{{{produto_resource_consultar}}}

{{{produto_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$id = 789; // int | {{{produto_resource_consultar_param_id}}}

try { 
    $result = $api_instance->consultarUsingGET31($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->consultarUsingGET31: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{produto_resource_consultar_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ProdutoDetalhesResponse**](ProdutoDetalhesResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET40**
> \br.com.conductor.pier.api.v2.model\TipoAjusteResponse consultarUsingGET40($id)

{{{tipo_transacoes_ajuste_resource_consultar}}}

{{{tipo_transacoes_ajuste_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$id = 789; // int | {{{tipo_transacoes_ajuste_resource_consultar_param_id}}}

try { 
    $result = $api_instance->consultarUsingGET40($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->consultarUsingGET40: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{tipo_transacoes_ajuste_resource_consultar_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TipoAjusteResponse**](TipoAjusteResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET41**
> \br.com.conductor.pier.api.v2.model\PageTipoBoletoResponse consultarUsingGET41($sort, $page, $limit, $id, $descricao, $banco)

{{{tipo_boleto_resource_consultar}}}

{{{tipo_boleto_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id = 789; // int | {{{tipo_boleto_request_id_value}}}
$descricao = "descricao_example"; // string | {{{tipo_boleto_request_descricao_value}}}
$banco = 789; // int | {{{tipo_boleto_request_banco_value}}}

try { 
    $result = $api_instance->consultarUsingGET41($sort, $page, $limit, $id, $descricao, $banco);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->consultarUsingGET41: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id** | **int**| {{{tipo_boleto_request_id_value}}} | [optional] 
 **descricao** | **string**| {{{tipo_boleto_request_descricao_value}}} | [optional] 
 **banco** | **int**| {{{tipo_boleto_request_banco_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTipoBoletoResponse**](PageTipoBoletoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET42**
> \br.com.conductor.pier.api.v2.model\TipoEnderecoResponse consultarUsingGET42($id)

{{{tipo_endereco_resource_consultar}}}

{{{tipo_endereco_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$id = 789; // int | {{{tipo_endereco_resource_consultar_param_id}}}

try { 
    $result = $api_instance->consultarUsingGET42($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->consultarUsingGET42: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{tipo_endereco_resource_consultar_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TipoEnderecoResponse**](TipoEnderecoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET43**
> \br.com.conductor.pier.api.v2.model\TipoOperacaoResponse consultarUsingGET43($id_cartao, $id_estabelecimento, $codigo_processamento)

{{{tipo_operacao_resource_consultar}}}

{{{tipo_operacao_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$id_cartao = 789; // int | {{{tipo_operacao_resource_consultar_param_id_cartao}}}
$id_estabelecimento = 789; // int | {{{tipo_operacao_resource_consultar_param_id_estabelecimento}}}
$codigo_processamento = "codigo_processamento_example"; // string | {{{tipo_operacao_resource_consultar_param_codigo_processamento}}}

try { 
    $result = $api_instance->consultarUsingGET43($id_cartao, $id_estabelecimento, $codigo_processamento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->consultarUsingGET43: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_cartao** | **int**| {{{tipo_operacao_resource_consultar_param_id_cartao}}} | 
 **id_estabelecimento** | **int**| {{{tipo_operacao_resource_consultar_param_id_estabelecimento}}} | 
 **codigo_processamento** | **string**| {{{tipo_operacao_resource_consultar_param_codigo_processamento}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TipoOperacaoResponse**](TipoOperacaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET45**
> \br.com.conductor.pier.api.v2.model\TipoTelefoneResponse consultarUsingGET45($id)

{{{tipo_telefone_resource_consultar}}}

{{{tipo_telefone_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$id = 789; // int | {{{tipo_telefone_resource_consultar_param_id}}}

try { 
    $result = $api_instance->consultarUsingGET45($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->consultarUsingGET45: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{tipo_telefone_resource_consultar_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TipoTelefoneResponse**](TipoTelefoneResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET5**
> \br.com.conductor.pier.api.v2.model\AtendimentoClienteResponse consultarUsingGET5($id)

{{{atendimento_cliente_resource_consultar}}}

{{{atendimento_cliente_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$id = 789; // int | {{{atendimento_cliente_resource_consultar_param_id_atendimento}}}

try { 
    $result = $api_instance->consultarUsingGET5($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->consultarUsingGET5: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{atendimento_cliente_resource_consultar_param_id_atendimento}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\AtendimentoClienteResponse**](AtendimentoClienteResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET7**
> \br.com.conductor.pier.api.v2.model\BancoResponse consultarUsingGET7($id)

{{{banco_resource_consultar}}}

{{{banco_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$id = 789; // int | {{{banco_resource_consultar_param_id}}}

try { 
    $result = $api_instance->consultarUsingGET7($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->consultarUsingGET7: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{banco_resource_consultar_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\BancoResponse**](BancoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarCampanhasUsingGET**
> \br.com.conductor.pier.api.v2.model\PageCampanhaResponse listarCampanhasUsingGET($sort, $page, $limit, $id_tipo_campanha)

{{{campanha_resource_listar_campanhas}}}

{{{campanha_resource_listar_campanhas_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id_tipo_campanha = 789; // int | {{{campanha_request_id_tipo_campanha_value}}}

try { 
    $result = $api_instance->listarCampanhasUsingGET($sort, $page, $limit, $id_tipo_campanha);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->listarCampanhasUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id_tipo_campanha** | **int**| {{{campanha_request_id_tipo_campanha_value}}} | [optional] 

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

{{{pessoa_resource_listar_contas_por_pessoa}}}

{{{pessoa_resource_listar_contas_por_pessoa_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$numero_receita_federal = "numero_receita_federal_example"; // string | {{{pessoa_resource_listar_contas_por_pessoa_param_numero_receita_federal}}}
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}

try { 
    $result = $api_instance->listarContasPorPessoaUsingGET($numero_receita_federal, $sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->listarContasPorPessoaUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **numero_receita_federal** | **string**| {{{pessoa_resource_listar_contas_por_pessoa_param_numero_receita_federal}}} | 
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageContaDetalheResponse**](PageContaDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarConveniosUsingGET**
> \br.com.conductor.pier.api.v2.model\PageConvenioResponse listarConveniosUsingGET($sort, $page, $limit, $banco, $agencia, $conta_corrente, $numero_convenio)

Lista os dados banc\u00E1rios dos conv\u00EAnios existentes

Lista os dados banc\u00E1rios dos conv\u00EAnios existentes

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$banco = 789; // int | Identifica\u00E7\u00E3o do banco.
$agencia = 789; // int | N\u00FAmero da ag\u00EAncia.
$conta_corrente = "conta_corrente_example"; // string | Conta corrente.
$numero_convenio = new Number(); // Number | C\u00F3digo de identifica\u00E7\u00E3o do conv\u00EAnio.

try { 
    $result = $api_instance->listarConveniosUsingGET($sort, $page, $limit, $banco, $agencia, $conta_corrente, $numero_convenio);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->listarConveniosUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **banco** | **int**| Identifica\u00E7\u00E3o do banco. | [optional] 
 **agencia** | **int**| N\u00FAmero da ag\u00EAncia. | [optional] 
 **conta_corrente** | **string**| Conta corrente. | [optional] 
 **numero_convenio** | [**Number**](.md)| C\u00F3digo de identifica\u00E7\u00E3o do conv\u00EAnio. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageConvenioResponse**](PageConvenioResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarEstadosCivisUsingGET**
> \br.com.conductor.pier.api.v2.model\PageCampoCodificadoDescricaoResponse listarEstadosCivisUsingGET($sort, $page, $limit)

{{{campo_codificado_resource_listar_estados_civis}}}

{{{campo_codificado_resource_listar_estados_civis_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}

try { 
    $result = $api_instance->listarEstadosCivisUsingGET($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->listarEstadosCivisUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 

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

{{{fantasia_basica_resource_listar_fantasias_basicas}}}

{{{fantasia_basica_resource_listar_fantasias_basicas_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}

try { 
    $result = $api_instance->listarFantasiasBasicasUsingGET($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->listarFantasiasBasicasUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 

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

{{{pessoa_resource_listar_historico_telefones}}}

{{{pessoa_resource_listar_historico_telefones_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$id = 789; // int | {{{pessoa_resource_listar_historico_telefones_param_id_pessoa}}}

try { 
    $result = $api_instance->listarHistoricoTelefonesUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->listarHistoricoTelefonesUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{pessoa_resource_listar_historico_telefones_param_id_pessoa}}} | 

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

{{{campo_codificado_resource_listar_nacionalidades}}}

{{{campo_codificado_resource_listar_nacionalidades_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}

try { 
    $result = $api_instance->listarNacionalidadesUsingGET($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->listarNacionalidadesUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 

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

{{{campo_codificado_resource_listar_naturezas_ocupacoes}}}

{{{campo_codificado_resource_listar_naturezas_ocupacoes_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}

try { 
    $result = $api_instance->listarNaturezasOcupacoesUsingGET($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->listarNaturezasOcupacoesUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageCampoCodificadoDescricaoResponse**](PageCampoCodificadoDescricaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarParentescosUsingGET**
> \br.com.conductor.pier.api.v2.model\PageCampoCodificadoDescricaoResponse listarParentescosUsingGET($sort, $page, $limit)

{{{campo_codificado_resource_listar_parentescos}}}

{{{campo_codificado_resource_listar_parentescos_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}

try { 
    $result = $api_instance->listarParentescosUsingGET($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->listarParentescosUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 

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

{{{campo_codificado_resource_listar_profissoes}}}

{{{campo_codificado_resource_listar_profissoes_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}

try { 
    $result = $api_instance->listarProfissoesUsingGET($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->listarProfissoesUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 

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

{{{tipo_campanha_resource_listar_tipos_campanhas}}}

{{{tipo_campanha_resource_listar_tipos_campanhas_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}

try { 
    $result = $api_instance->listarTiposCampanhasUsingGET($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->listarTiposCampanhasUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTipoCampanhaResponse**](PageTipoCampanhaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET14**
> \br.com.conductor.pier.api.v2.model\ConfiguracaoRegistroCobrancaResponse listarUsingGET14($sort, $page, $limit)

{{{configuracao_registro_cobranca_resource_listar}}}

{{{configuracao_registro_cobranca_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}

try { 
    $result = $api_instance->listarUsingGET14($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->listarUsingGET14: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\ConfiguracaoRegistroCobrancaResponse**](ConfiguracaoRegistroCobrancaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET15**
> \br.com.conductor.pier.api.v2.model\PageConfiguracaoRotativoResponse listarUsingGET15($sort, $page, $limit, $id_produto)

{{{configuracao_rotativo_resource_listar}}}

{{{configuracao_rotativo_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id_produto = 789; // int | {{{configuracao_rotativo_request_id_produto_value}}}

try { 
    $result = $api_instance->listarUsingGET15($sort, $page, $limit, $id_produto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->listarUsingGET15: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id_produto** | **int**| {{{configuracao_rotativo_request_id_produto_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageConfiguracaoRotativoResponse**](PageConfiguracaoRotativoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET41**
> \br.com.conductor.pier.api.v2.model\PagePortadorResponse listarUsingGET41($sort, $page, $limit, $id_conta, $id_produto, $id_pessoa, $id_parentesco, $tipo_portador, $nome_impresso, $id_tipo_cartao, $flag_ativo, $data_cadastro_portador, $data_cancelamento_portador)

{{{portador_resource_listar}}}

{{{portador_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id_conta = 789; // int | {{{portador_request_id_conta_value}}}
$id_produto = 789; // int | {{{portador_request_id_produto_value}}}
$id_pessoa = 789; // int | {{{portador_request_id_pessoa_value}}}
$id_parentesco = 789; // int | {{{portador_request_id_parentesco_value}}}
$tipo_portador = "tipo_portador_example"; // string | {{{portador_request_tipo_portador_value}}}
$nome_impresso = "nome_impresso_example"; // string | {{{portador_request_nome_impresso_value}}}
$id_tipo_cartao = 789; // int | {{{portador_request_id_tipo_cartao_value}}}
$flag_ativo = 56; // int | {{{portador_request_flag_ativo_value}}}
$data_cadastro_portador = "data_cadastro_portador_example"; // string | {{{portador_request_data_cadastro_portador_value}}}
$data_cancelamento_portador = "data_cancelamento_portador_example"; // string | {{{portador_request_data_cancelamento_portador_value}}}

try { 
    $result = $api_instance->listarUsingGET41($sort, $page, $limit, $id_conta, $id_produto, $id_pessoa, $id_parentesco, $tipo_portador, $nome_impresso, $id_tipo_cartao, $flag_ativo, $data_cadastro_portador, $data_cancelamento_portador);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->listarUsingGET41: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id_conta** | **int**| {{{portador_request_id_conta_value}}} | [optional] 
 **id_produto** | **int**| {{{portador_request_id_produto_value}}} | [optional] 
 **id_pessoa** | **int**| {{{portador_request_id_pessoa_value}}} | [optional] 
 **id_parentesco** | **int**| {{{portador_request_id_parentesco_value}}} | [optional] 
 **tipo_portador** | **string**| {{{portador_request_tipo_portador_value}}} | [optional] 
 **nome_impresso** | **string**| {{{portador_request_nome_impresso_value}}} | [optional] 
 **id_tipo_cartao** | **int**| {{{portador_request_id_tipo_cartao_value}}} | [optional] 
 **flag_ativo** | **int**| {{{portador_request_flag_ativo_value}}} | [optional] 
 **data_cadastro_portador** | **string**| {{{portador_request_data_cadastro_portador_value}}} | [optional] 
 **data_cancelamento_portador** | **string**| {{{portador_request_data_cancelamento_portador_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PagePortadorResponse**](PagePortadorResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET42**
> \br.com.conductor.pier.api.v2.model\PageProdutoResponse listarUsingGET42($sort, $page, $limit, $nome, $status, $id_fantasia_basica)

{{{produto_resource_listar}}}

{{{produto_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$nome = "nome_example"; // string | {{{produto_request_nome_value}}}
$status = 56; // int | {{{produto_request_status_value}}}
$id_fantasia_basica = 789; // int | {{{produto_request_id_fantasia_basica_value}}}

try { 
    $result = $api_instance->listarUsingGET42($sort, $page, $limit, $nome, $status, $id_fantasia_basica);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->listarUsingGET42: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **nome** | **string**| {{{produto_request_nome_value}}} | [optional] 
 **status** | **int**| {{{produto_request_status_value}}} | [optional] 
 **id_fantasia_basica** | **int**| {{{produto_request_id_fantasia_basica_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageProdutoResponse**](PageProdutoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET43**
> \br.com.conductor.pier.api.v2.model\PagePromotorResponse listarUsingGET43($sort, $page, $limit, $id, $nome, $data_cadastro, $id_estabelecimento, $id_usuario)

{{{promotor_resource_listar}}}

{{{promotor_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id = 789; // int | {{{promotor_request_id_value}}}
$nome = "nome_example"; // string | {{{promotor_request_nome_value}}}
$data_cadastro = "data_cadastro_example"; // string | {{{promotor_request_data_cadastro_value}}}
$id_estabelecimento = 789; // int | {{{promotor_request_id_estabelecimento_value}}}
$id_usuario = 789; // int | {{{promotor_request_id_usuario_value}}}

try { 
    $result = $api_instance->listarUsingGET43($sort, $page, $limit, $id, $nome, $data_cadastro, $id_estabelecimento, $id_usuario);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->listarUsingGET43: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id** | **int**| {{{promotor_request_id_value}}} | [optional] 
 **nome** | **string**| {{{promotor_request_nome_value}}} | [optional] 
 **data_cadastro** | **string**| {{{promotor_request_data_cadastro_value}}} | [optional] 
 **id_estabelecimento** | **int**| {{{promotor_request_id_estabelecimento_value}}} | [optional] 
 **id_usuario** | **int**| {{{promotor_request_id_usuario_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PagePromotorResponse**](PagePromotorResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET52**
> \br.com.conductor.pier.api.v2.model\PageTipoAjusteResponse listarUsingGET52($sort, $page, $limit, $id, $descricao)

{{{tipo_ajuste_resource_consultar}}}

{{{tipo_ajuste_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id = 789; // int | {{{tipo_ajuste_request_id_value}}}
$descricao = "descricao_example"; // string | {{{tipo_ajuste_request_descricao_value}}}

try { 
    $result = $api_instance->listarUsingGET52($sort, $page, $limit, $id, $descricao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->listarUsingGET52: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id** | **int**| {{{tipo_ajuste_request_id_value}}} | [optional] 
 **descricao** | **string**| {{{tipo_ajuste_request_descricao_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTipoAjusteResponse**](PageTipoAjusteResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET54**
> \br.com.conductor.pier.api.v2.model\PageTipoEnderecoResponse listarUsingGET54($sort, $page, $limit, $id, $nome)

{{{tipo_endereco_resource_listar}}}

{{{tipo_endereco_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id = 789; // int | {{{tipo_endereco_request_id_value}}}
$nome = "nome_example"; // string | {{{tipo_endereco_request_nome_value}}}

try { 
    $result = $api_instance->listarUsingGET54($sort, $page, $limit, $id, $nome);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->listarUsingGET54: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id** | **int**| {{{tipo_endereco_request_id_value}}} | [optional] 
 **nome** | **string**| {{{tipo_endereco_request_nome_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTipoEnderecoResponse**](PageTipoEnderecoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET56**
> \br.com.conductor.pier.api.v2.model\PageTipoTelefoneResponse listarUsingGET56($sort, $page, $limit, $id, $nome)

{{{tipo_telefone_resource_listar}}}

{{{tipo_telefone_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id = 789; // int | {{{tipo_telefone_request_id_value}}}
$nome = "nome_example"; // string | {{{tipo_telefone_request_nome_value}}}

try { 
    $result = $api_instance->listarUsingGET56($sort, $page, $limit, $id, $nome);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->listarUsingGET56: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id** | **int**| {{{tipo_telefone_request_id_value}}} | [optional] 
 **nome** | **string**| {{{tipo_telefone_request_nome_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTipoTelefoneResponse**](PageTipoTelefoneResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET63**
> \br.com.conductor.pier.api.v2.model\PageControleVencimentoResponse listarUsingGET63($sort, $page, $limit, $data_vencimento)

{{{vencimento_resource_listar}}}

{{{vencimento_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$data_vencimento = "data_vencimento_example"; // string | {{{controle_vencimento_request_data_vencimento_value}}}

try { 
    $result = $api_instance->listarUsingGET63($sort, $page, $limit, $data_vencimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->listarUsingGET63: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **data_vencimento** | **string**| {{{controle_vencimento_request_data_vencimento_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageControleVencimentoResponse**](PageControleVencimentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET7**
> \br.com.conductor.pier.api.v2.model\PageAtendimentoClienteResponse listarUsingGET7($sort, $page, $limit, $id_tipo_atendimento, $id_conta, $nome_atendente, $data_atendimento)

{{{atendimento_cliente_resource_listar}}}

{{{atendimento_cliente_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id_tipo_atendimento = 789; // int | {{{atendimento_cliente_request_id_tipo_atendimento_value}}}
$id_conta = 789; // int | {{{atendimento_cliente_request_id_conta_value}}}
$nome_atendente = "nome_atendente_example"; // string | {{{atendimento_cliente_request_nome_atendente_value}}}
$data_atendimento = "data_atendimento_example"; // string | {{{atendimento_cliente_request_data_atendimento_value}}}

try { 
    $result = $api_instance->listarUsingGET7($sort, $page, $limit, $id_tipo_atendimento, $id_conta, $nome_atendente, $data_atendimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->listarUsingGET7: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id_tipo_atendimento** | **int**| {{{atendimento_cliente_request_id_tipo_atendimento_value}}} | [optional] 
 **id_conta** | **int**| {{{atendimento_cliente_request_id_conta_value}}} | [optional] 
 **nome_atendente** | **string**| {{{atendimento_cliente_request_nome_atendente_value}}} | [optional] 
 **data_atendimento** | **string**| {{{atendimento_cliente_request_data_atendimento_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageAtendimentoClienteResponse**](PageAtendimentoClienteResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET9**
> \br.com.conductor.pier.api.v2.model\PageBancoResponse listarUsingGET9($sort, $page, $limit)

{{{banco_resource_listar}}}

{{{banco_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}

try { 
    $result = $api_instance->listarUsingGET9($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->listarUsingGET9: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageBancoResponse**](PageBancoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST2**
> \br.com.conductor.pier.api.v2.model\AtendimentoClienteResponse salvarUsingPOST2($id_conta, $conteudo_atendimento, $detalhes_atendimento, $nome_atendente, $data_atendimento, $data_agendamento, $data_hora_inicio_atendimento, $data_hora_fim_atendimento, $flag_fila_fraude)

{{{atendimento_cliente_resource_salvar}}}

{{{atendimento_cliente_resource_salvar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$id_conta = 789; // int | {{{atendimento_cliente_persist_id_conta_value}}}
$conteudo_atendimento = "conteudo_atendimento_example"; // string | {{{atendimento_cliente_persist_conteudo_atendimento_value}}}
$detalhes_atendimento = "detalhes_atendimento_example"; // string | {{{atendimento_cliente_persist_detalhes_atendimento_value}}}
$nome_atendente = "nome_atendente_example"; // string | {{{atendimento_cliente_persist_nome_atendente_value}}}
$data_atendimento = "data_atendimento_example"; // string | {{{atendimento_cliente_persist_data_atendimento_value}}}
$data_agendamento = "data_agendamento_example"; // string | {{{atendimento_cliente_persist_data_agendamento_value}}}
$data_hora_inicio_atendimento = "data_hora_inicio_atendimento_example"; // string | {{{atendimento_cliente_persist_data_hora_inicio_atendimento_value}}}
$data_hora_fim_atendimento = "data_hora_fim_atendimento_example"; // string | {{{atendimento_cliente_persist_data_hora_fim_atendimento_value}}}
$flag_fila_fraude = 56; // int | {{{atendimento_cliente_persist_flag_fila_fraude_value}}}

try { 
    $result = $api_instance->salvarUsingPOST2($id_conta, $conteudo_atendimento, $detalhes_atendimento, $nome_atendente, $data_atendimento, $data_agendamento, $data_hora_inicio_atendimento, $data_hora_fim_atendimento, $flag_fila_fraude);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->salvarUsingPOST2: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_conta** | **int**| {{{atendimento_cliente_persist_id_conta_value}}} | [optional] 
 **conteudo_atendimento** | **string**| {{{atendimento_cliente_persist_conteudo_atendimento_value}}} | [optional] 
 **detalhes_atendimento** | **string**| {{{atendimento_cliente_persist_detalhes_atendimento_value}}} | [optional] 
 **nome_atendente** | **string**| {{{atendimento_cliente_persist_nome_atendente_value}}} | [optional] 
 **data_atendimento** | **string**| {{{atendimento_cliente_persist_data_atendimento_value}}} | [optional] 
 **data_agendamento** | **string**| {{{atendimento_cliente_persist_data_agendamento_value}}} | [optional] 
 **data_hora_inicio_atendimento** | **string**| {{{atendimento_cliente_persist_data_hora_inicio_atendimento_value}}} | [optional] 
 **data_hora_fim_atendimento** | **string**| {{{atendimento_cliente_persist_data_hora_fim_atendimento_value}}} | [optional] 
 **flag_fila_fraude** | **int**| {{{atendimento_cliente_persist_flag_fila_fraude_value}}} | [optional] 

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

{{{campanha_resource_salvar}}}

{{{campanha_resource_salvar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$campanha_persist = new \br.com.conductor.pier.api.v2.model\CampanhaPersist(); // \br.com.conductor.pier.api.v2.model\CampanhaPersist | campanhaPersist

try { 
    $result = $api_instance->salvarUsingPOST4($campanha_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->salvarUsingPOST4: ', $e->getMessage(), "\n";
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

{{{configuracao_rotativo_resource_salvar}}}

{{{configuracao_rotativo_resource_salvar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcadastrogeralApi();
$configuracao_rotativo_persist = new \br.com.conductor.pier.api.v2.model\ConfiguracaoRotativoPersist(); // \br.com.conductor.pier.api.v2.model\ConfiguracaoRotativoPersist | configuracaoRotativoPersist

try { 
    $result = $api_instance->salvarUsingPOST6($configuracao_rotativo_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcadastrogeralApi->salvarUsingPOST6: ', $e->getMessage(), "\n";
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

