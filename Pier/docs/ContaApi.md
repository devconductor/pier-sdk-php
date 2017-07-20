# br.com.conductor.pier.api.v2.invoker\ContaApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ajustarContaUsingPOST**](ContaApi.md#ajustarContaUsingPOST) | **POST** /api/contas/{id}/ajustes-financeiros | Lan\u00C3\u00A7a um ajuste para a conta do id informado
[**alterarLimiteUsingPUT**](ContaApi.md#alterarLimiteUsingPUT) | **PUT** /api/contas/{id}/alterar-limites | Realiza a altera\u00C3\u00A7\u00C3\u00A3o dos limites da conta
[**alterarTitularUsingPOST**](ContaApi.md#alterarTitularUsingPOST) | **POST** /api/contas/{id}/alterar-titular | Realiza a altera\u00C3\u00A7\u00C3\u00A3o de uma Pessoa tilular da conta
[**alterarVencimentoUsingPUT**](ContaApi.md#alterarVencimentoUsingPUT) | **PUT** /api/contas/{id}/alterar-vencimento | Realiza a altera\u00C3\u00A7\u00C3\u00A3o do dia de vencimento das faturas da conta
[**ativarAnuidadeUsingPOST**](ContaApi.md#ativarAnuidadeUsingPOST) | **POST** /api/contas/{id}/atribuir-anuidade | Atribuir Anuidade
[**ativarEnvioFaturaEmailUsingPOST**](ContaApi.md#ativarEnvioFaturaEmailUsingPOST) | **POST** /api/contas/{id}/ativar-fatura-email |  Ativa o servi\u00C3\u00A7o de envio de fatura por email
[**bloquearUsingPOST1**](ContaApi.md#bloquearUsingPOST1) | **POST** /api/contas/{id}/bloquear | Realiza o bloqueio de uma determinada Conta
[**cancelarUsingPOST1**](ContaApi.md#cancelarUsingPOST1) | **POST** /api/contas/{id}/cancelar | Realiza o cancelamento de uma determinada Conta
[**consultarBoletoEmitidoUsingGET**](ContaApi.md#consultarBoletoEmitidoUsingGET) | **GET** /api/contas/{id}/consultar-dados-pagamento-fatura | Consulta os dados de um determinado boleto da fatura
[**consultarDividaAtualizadaClienteUsingGET**](ContaApi.md#consultarDividaAtualizadaClienteUsingGET) | **GET** /api/contas/{id}/recuperar-divida-atualizada | Consulta a d\u00C3\u00ADvida atualizada do cliente
[**consultarFaturaConsignadaAbertaUsingGET**](ContaApi.md#consultarFaturaConsignadaAbertaUsingGET) | **GET** /api/contas/{id}/faturas-consignadas/consultar-aberta | Consultar a fatura consignadas abertas da conta
[**consultarFaturaConsignadaUsingGET**](ContaApi.md#consultarFaturaConsignadaUsingGET) | **GET** /api/contas/{id}/faturas-consignadas/{id_fatura} | Apresenta dados de uma determinada fatura consignada
[**consultarFaturaUsingGET**](ContaApi.md#consultarFaturaUsingGET) | **GET** /api/contas/{id}/faturas/consultar-fechada | Consultar Fatura da Conta
[**consultarLancamentosFuturosFaturaUsingGET**](ContaApi.md#consultarLancamentosFuturosFaturaUsingGET) | **GET** /api/contas/{id}/faturas/consultar-aberta | Consultar Lan\u00C3\u00A7amentos Futuros da Fatura de uma Conta
[**consultarLimiteDisponibilidadeUsingGET1**](ContaApi.md#consultarLimiteDisponibilidadeUsingGET1) | **GET** /api/contas/{id}/limites-disponibilidades | Apresenta os limites da conta
[**consultarTaxasTarifasUsingGET**](ContaApi.md#consultarTaxasTarifasUsingGET) | **GET** /api/contas/{id}/consultar-taxas-tarifas | Permite consultar a partir do ID da conta as taxas e tarifas
[**consultarUsingGET24**](ContaApi.md#consultarUsingGET24) | **GET** /api/contas/{id}/transferencias-creditos-contas-bancarias/{id_transferencia} | Consultar uma transfer\u00C3\u00AAncia banc\u00C3\u00A1ria para um banco
[**consultarUsingGET25**](ContaApi.md#consultarUsingGET25) | **GET** /api/contas/{id}/transferencias-creditos-cartoes/{id_transferencia} | Consulta os detalhes de uma determinada transfer\u00C3\u00AAncia
[**consultarUsingGET5**](ContaApi.md#consultarUsingGET5) | **GET** /api/contas/{id} | Apresenta dados de uma determinada conta
[**desativarEnvioFaturaEmailUsingPOST**](ContaApi.md#desativarEnvioFaturaEmailUsingPOST) | **POST** /api/contas/{id}/desativar-fatura-email | Desativa o servi\u00C3\u00A7o de envio de fatura por email
[**gerarBoletoRecargaUsingPOST**](ContaApi.md#gerarBoletoRecargaUsingPOST) | **POST** /api/contas/{id}/gerar-boleto-recarga | Gera um boleto de recarga
[**gerarCartaoUsingPOST**](ContaApi.md#gerarCartaoUsingPOST) | **POST** /api/contas/{id}/pessoas/{id_pessoa}/gerar-cartao | Realiza a gera\u00C3\u00A7\u00C3\u00A3o de um novo cart\u00C3\u00A3o para impress\u00C3\u00A3o avulsa
[**gerarCartaoVirtualUsingPOST**](ContaApi.md#gerarCartaoVirtualUsingPOST) | **POST** /api/contas/{id}/gerar-cartao-virtual | Realiza a gera\u00C3\u00A7\u00C3\u00A3o de um cart\u00C3\u00A3o virtual
[**listarFaturasConsignadasUsingGET**](ContaApi.md#listarFaturasConsignadasUsingGET) | **GET** /api/contas/{id}/faturas-consignadas | Lista as faturas consignadas da conta
[**listarFaturasUsingGET**](ContaApi.md#listarFaturasUsingGET) | **GET** /api/contas/{id}/faturas | Lista as faturas da conta
[**listarHistoricoAlteracoesLimitesUsingGET**](ContaApi.md#listarHistoricoAlteracoesLimitesUsingGET) | **GET** /api/contas/{id}/historicos-alteracoes-limites | Lista o hist\u00C3\u00B3rico de altera\u00C3\u00A7\u00C3\u00B5es de limites da conta
[**listarHistoricoAssessoriaUsingGET**](ContaApi.md#listarHistoricoAssessoriaUsingGET) | **GET** /api/contas/{id}/historicos-assessorias-cobranca | Lista o hist\u00C3\u00B3rico de entradas/sa\u00C3\u00ADdas de assessorias de cobran\u00C3\u00A7a
[**listarHistoricoAtrasosFaturasUsingGET**](ContaApi.md#listarHistoricoAtrasosFaturasUsingGET) | **GET** /api/contas/{id}/historicos-faturas-atrasos | Lista o historico de atrasos das faturas
[**listarNaoProcessadasUsingGET**](ContaApi.md#listarNaoProcessadasUsingGET) | **GET** /api/contas/{id}/transacoes/listar-nao-processadas | Lista as transa\u00C3\u00A7\u00C3\u00B5es n\u00C3\u00A3o processadas da conta
[**listarProcessadasUsingGET**](ContaApi.md#listarProcessadasUsingGET) | **GET** /api/contas/{id}/transacoes/listar-processadas | Lista as transa\u00C3\u00A7\u00C3\u00B5es processadas da conta
[**listarUsingGET28**](ContaApi.md#listarUsingGET28) | **GET** /api/contas/{id}/transferencias-creditos-contas-bancarias | Listar as transfer\u00C3\u00AAncias banc\u00C3\u00A1rias realizadas
[**listarUsingGET29**](ContaApi.md#listarUsingGET29) | **GET** /api/contas/{id}/transferencias-creditos-cartoes | Lista as transfer\u00C3\u00AAncias realizadas pela conta
[**listarUsingGET7**](ContaApi.md#listarUsingGET7) | **GET** /api/contas | Lista contas existentes na base de dados do Emissor
[**reativarUsingPOST1**](ContaApi.md#reativarUsingPOST1) | **POST** /api/contas/{id}/reativar | Realiza a reativa\u00C3\u00A7\u00C3\u00A3o de contas.
[**transacoesUsingGET**](ContaApi.md#transacoesUsingGET) | **GET** /api/contas/{id}/timeline | Permite listar uma linha do tempo com os eventos da conta
[**transferirUsingPOST**](ContaApi.md#transferirUsingPOST) | **POST** /api/contas/{id}/transferencias-creditos-contas-bancarias | Realizar transfer\u00C3\u00AAncia banc\u00C3\u00A1ria do cart\u00C3\u00A3o para contas banc\u00C3\u00A1rias
[**transferirUsingPOST1**](ContaApi.md#transferirUsingPOST1) | **POST** /api/contas/{id}/transferencias-creditos-cartoes | Realiza uma transfer\u00C3\u00AAncia de Cr\u00C3\u00A9dito para outro cliente do mesmo Emissor


# **ajustarContaUsingPOST**
> \br.com.conductor.pier.api.v2.model\AjusteResponse ajustarContaUsingPOST($id, $id_tipo_ajuste, $data_ajuste, $valor_ajuste)

Lan\u00C3\u00A7a um ajuste para a conta do id informado

Este recurso insere um ajuste para a conta do id informado

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | Id Conta
$id_tipo_ajuste = 789; // int | C\u00C3\u00B3digo identificador do tipo de ajuste.
$data_ajuste = "data_ajuste_example"; // string | Data do ajuste.
$valor_ajuste = new Number(); // Number | Valor do ajuste

try { 
    $result = $api_instance->ajustarContaUsingPOST($id, $id_tipo_ajuste, $data_ajuste, $valor_ajuste);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->ajustarContaUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id Conta | 
 **id_tipo_ajuste** | **int**| C\u00C3\u00B3digo identificador do tipo de ajuste. | 
 **data_ajuste** | **string**| Data do ajuste. | 
 **valor_ajuste** | [**Number**](.md)| Valor do ajuste | 

### Return type

[**\br.com.conductor.pier.api.v2.model\AjusteResponse**](AjusteResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarLimiteUsingPUT**
> \br.com.conductor.pier.api.v2.model\LimiteDisponibilidadeResponse alterarLimiteUsingPUT($id, $limite_global, $limite_compra, $limite_parcelado, $limite_parcelas, $limite_saque_global, $limite_saque_periodo, $limite_consignado, $limite_internacional_compra, $limite_internacional_parcelado, $limite_internacional_parcelas, $limite_internacional_saque_global, $limite_internacional_saque_periodo, $limite_maximo)

Realiza a altera\u00C3\u00A7\u00C3\u00A3o dos limites da conta

Esse recurso permite realizar a altera\u00C3\u00A7\u00C3\u00A3o dos Limites de uma determinada Conta.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).
$limite_global = new Number(); // Number | Apresenta o valor do limite de cr\u00C3\u00A9dito que o portador do cart\u00C3\u00A3o possui.
$limite_compra = new Number(); // Number | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador possui para uso exclusivo em Compras Nacionais.
$limite_parcelado = new Number(); // Number | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador possui para realizar transa\u00C3\u00A7\u00C3\u00B5es de compras parceladas.
$limite_parcelas = new Number(); // Number | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que portador pode acumular a partir da soma das parcelas das compras que forem realizadas nesta modalidade.
$limite_saque_global = new Number(); // Number | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador pode utilizar para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Nacional.
$limite_saque_periodo = new Number(); // Number | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador pode utilizar para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Nacional dentro de cada ciclo de faturamento.
$limite_consignado = new Number(); // Number | Quando utilizado pelo emissor, este campo apresenta o valor da margem de cr\u00C3\u00A9dito que ele poder\u00C3\u00A1 utilizar para ser cobrado de forma consignada (desconto em folha) em seu sal\u00C3\u00A1rio/vencimentos.
$limite_internacional_compra = new Number(); // Number | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador possui para uso exclusivo em Compras Internacionais.
$limite_internacional_parcelado = new Number(); // Number | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador possui para realizar transa\u00C3\u00A7\u00C3\u00B5es Internacionais de Compras Parceladas.
$limite_internacional_parcelas = new Number(); // Number | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que portador pode acumular a partir da soma das parcelas das compras internacionais que forem realizadas nesta modalidade.
$limite_internacional_saque_global = new Number(); // Number | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador pode utilizar para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Internacional.
$limite_internacional_saque_periodo = new Number(); // Number | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador pode utilizar para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Internacional dentro de cada ciclo de faturamento.
$limite_maximo = new Number(); // Number | Valor m\u00C3\u00A1ximo do limite de cr\u00C3\u00A9dito para realizar transa\u00C3\u00A7\u00C3\u00B5es.

try { 
    $result = $api_instance->alterarLimiteUsingPUT($id, $limite_global, $limite_compra, $limite_parcelado, $limite_parcelas, $limite_saque_global, $limite_saque_periodo, $limite_consignado, $limite_internacional_compra, $limite_internacional_parcelado, $limite_internacional_parcelas, $limite_internacional_saque_global, $limite_internacional_saque_periodo, $limite_maximo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->alterarLimiteUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | 
 **limite_global** | [**Number**](.md)| Apresenta o valor do limite de cr\u00C3\u00A9dito que o portador do cart\u00C3\u00A3o possui. | 
 **limite_compra** | [**Number**](.md)| Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador possui para uso exclusivo em Compras Nacionais. | 
 **limite_parcelado** | [**Number**](.md)| Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador possui para realizar transa\u00C3\u00A7\u00C3\u00B5es de compras parceladas. | 
 **limite_parcelas** | [**Number**](.md)| Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que portador pode acumular a partir da soma das parcelas das compras que forem realizadas nesta modalidade. | 
 **limite_saque_global** | [**Number**](.md)| Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador pode utilizar para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Nacional. | 
 **limite_saque_periodo** | [**Number**](.md)| Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador pode utilizar para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Nacional dentro de cada ciclo de faturamento. | 
 **limite_consignado** | [**Number**](.md)| Quando utilizado pelo emissor, este campo apresenta o valor da margem de cr\u00C3\u00A9dito que ele poder\u00C3\u00A1 utilizar para ser cobrado de forma consignada (desconto em folha) em seu sal\u00C3\u00A1rio/vencimentos. | 
 **limite_internacional_compra** | [**Number**](.md)| Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador possui para uso exclusivo em Compras Internacionais. | 
 **limite_internacional_parcelado** | [**Number**](.md)| Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador possui para realizar transa\u00C3\u00A7\u00C3\u00B5es Internacionais de Compras Parceladas. | 
 **limite_internacional_parcelas** | [**Number**](.md)| Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que portador pode acumular a partir da soma das parcelas das compras internacionais que forem realizadas nesta modalidade. | 
 **limite_internacional_saque_global** | [**Number**](.md)| Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador pode utilizar para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Internacional. | 
 **limite_internacional_saque_periodo** | [**Number**](.md)| Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador pode utilizar para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Internacional dentro de cada ciclo de faturamento. | 
 **limite_maximo** | [**Number**](.md)| Valor m\u00C3\u00A1ximo do limite de cr\u00C3\u00A9dito para realizar transa\u00C3\u00A7\u00C3\u00B5es. | 

### Return type

[**\br.com.conductor.pier.api.v2.model\LimiteDisponibilidadeResponse**](LimiteDisponibilidadeResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarTitularUsingPOST**
> \br.com.conductor.pier.api.v2.model\ContaResponse alterarTitularUsingPOST($id, $id_pessoa)

Realiza a altera\u00C3\u00A7\u00C3\u00A3o de uma Pessoa tilular da conta

Esta m\u00C3\u00A9todo permite altera a pessoa de uma conta.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Conta (id)
$id_pessoa = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o de uma Pessoa (id).

try { 
    $result = $api_instance->alterarTitularUsingPOST($id, $id_pessoa);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->alterarTitularUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Conta (id) | 
 **id_pessoa** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o de uma Pessoa (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ContaResponse**](ContaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarVencimentoUsingPUT**
> \br.com.conductor.pier.api.v2.model\ContaResponse alterarVencimentoUsingPUT($id, $novo_dia_vencimento)

Realiza a altera\u00C3\u00A7\u00C3\u00A3o do dia de vencimento das faturas da conta

Esse recurso permite alterar o vencimento de uma conta especifica.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).
$novo_dia_vencimento = 56; // int | Novo dia de vencimento.

try { 
    $result = $api_instance->alterarVencimentoUsingPUT($id, $novo_dia_vencimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->alterarVencimentoUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | 
 **novo_dia_vencimento** | **int**| Novo dia de vencimento. | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ContaResponse**](ContaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **ativarAnuidadeUsingPOST**
> object ativarAnuidadeUsingPOST($id, $id_anuidade, $page, $limit, $ddd, $celular, $id_operadora, $id_origem_comercial)

Atribuir Anuidade

Esse recurso permite configurar qual a regra de Anuidade que ser\u00C3\u00A1 atribu\u00C3\u00ADda a uma determinada Conta.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).
$id_anuidade = 789; // int | Identificador da anuidade
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$ddd = "ddd_example"; // string | DDD do celular
$celular = "celular_example"; // string | N\u00C3\u00BAmero do celular
$id_operadora = 789; // int | Identificador da operadora do celular
$id_origem_comercial = 789; // int | Identificador da origem comercial

try { 
    $result = $api_instance->ativarAnuidadeUsingPOST($id, $id_anuidade, $page, $limit, $ddd, $celular, $id_operadora, $id_origem_comercial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->ativarAnuidadeUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | 
 **id_anuidade** | **int**| Identificador da anuidade | 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **ddd** | **string**| DDD do celular | [optional] 
 **celular** | **string**| N\u00C3\u00BAmero do celular | [optional] 
 **id_operadora** | **int**| Identificador da operadora do celular | [optional] 
 **id_origem_comercial** | **int**| Identificador da origem comercial | [optional] 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **ativarEnvioFaturaEmailUsingPOST**
> object ativarEnvioFaturaEmailUsingPOST($id)

 Ativa o servi\u00C3\u00A7o de envio de fatura por email

Este recurso ativa o servi\u00C3\u00A7o de envio de fatura por email

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).

try { 
    $result = $api_instance->ativarEnvioFaturaEmailUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->ativarEnvioFaturaEmailUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **bloquearUsingPOST1**
> \br.com.conductor.pier.api.v2.model\ContaResponse bloquearUsingPOST1($id, $id_status)

Realiza o bloqueio de uma determinada Conta

Este m\u00C3\u00A9todo permite a realiza\u00C3\u00A7\u00C3\u00A3o do bloqueio de uma determinada conta a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).
$id_status = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Novo Status Conta.

try { 
    $result = $api_instance->bloquearUsingPOST1($id, $id_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->bloquearUsingPOST1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | 
 **id_status** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Novo Status Conta. | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ContaResponse**](ContaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **cancelarUsingPOST1**
> \br.com.conductor.pier.api.v2.model\ContaResponse cancelarUsingPOST1($id, $id_status)

Realiza o cancelamento de uma determinada Conta

Este m\u00C3\u00A9todo permite a realiza\u00C3\u00A7\u00C3\u00A3o do cancelamento de uma determinada conta a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).
$id_status = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Novo Status Conta.

try { 
    $result = $api_instance->cancelarUsingPOST1($id, $id_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->cancelarUsingPOST1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | 
 **id_status** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Novo Status Conta. | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ContaResponse**](ContaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarBoletoEmitidoUsingGET**
> \br.com.conductor.pier.api.v2.model\BoletoResponse consultarBoletoEmitidoUsingGET($id)

Consulta os dados de um determinado boleto da fatura

Este recurso consulta um boleto da fatura

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | Id Conta

try { 
    $result = $api_instance->consultarBoletoEmitidoUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->consultarBoletoEmitidoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id Conta | 

### Return type

[**\br.com.conductor.pier.api.v2.model\BoletoResponse**](BoletoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarDividaAtualizadaClienteUsingGET**
> \br.com.conductor.pier.api.v2.model\DividaClienteResponse consultarDividaAtualizadaClienteUsingGET($id, $page, $limit, $data_vencimento, $id_escritorio_cobranca)

Consulta a d\u00C3\u00ADvida atualizada do cliente

Este recurso consulta a d\u00C3\u00ADvida atualizada do cliente

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | Id Conta
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$data_vencimento = "data_vencimento_example"; // string | Data do vencimento
$id_escritorio_cobranca = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do escrit\u00C3\u00B3rio de cobran\u00C3\u00A7a

try { 
    $result = $api_instance->consultarDividaAtualizadaClienteUsingGET($id, $page, $limit, $data_vencimento, $id_escritorio_cobranca);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->consultarDividaAtualizadaClienteUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id Conta | 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **data_vencimento** | **string**| Data do vencimento | [optional] 
 **id_escritorio_cobranca** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do escrit\u00C3\u00B3rio de cobran\u00C3\u00A7a | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\DividaClienteResponse**](DividaClienteResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarFaturaConsignadaAbertaUsingGET**
> \br.com.conductor.pier.api.v2.model\DetalhesFaturaConsignadaResponse consultarFaturaConsignadaAbertaUsingGET($id, $data_vencimento)

Consultar a fatura consignadas abertas da conta

Atrav\u00C3\u00A9s desta opera\u00C3\u00A7\u00C3\u00A3o os Emissores ou Portadores poder\u00C3\u00A3o consultar a fatura consignada em aberto

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).
$data_vencimento = "data_vencimento_example"; // string | Data Vencimento

try { 
    $result = $api_instance->consultarFaturaConsignadaAbertaUsingGET($id, $data_vencimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->consultarFaturaConsignadaAbertaUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | 
 **data_vencimento** | **string**| Data Vencimento | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\DetalhesFaturaConsignadaResponse**](DetalhesFaturaConsignadaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarFaturaConsignadaUsingGET**
> \br.com.conductor.pier.api.v2.model\FaturaConsignadaDetalheResponse consultarFaturaConsignadaUsingGET($id, $id_fatura)

Apresenta dados de uma determinada fatura consignada

Atrav\u00C3\u00A9s desta opera\u00C3\u00A7\u00C3\u00A3o os Emissores ou Portadores poder\u00C3\u00A3o consultar uma fatura, atrav\u00C3\u00A9s do id da conta e o id da fatura.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).
$id_fatura = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da fatura (id_fatura).

try { 
    $result = $api_instance->consultarFaturaConsignadaUsingGET($id, $id_fatura);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->consultarFaturaConsignadaUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | 
 **id_fatura** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da fatura (id_fatura). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\FaturaConsignadaDetalheResponse**](FaturaConsignadaDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarFaturaUsingGET**
> \br.com.conductor.pier.api.v2.model\DetalhesFaturaResponse consultarFaturaUsingGET($id, $data_vencimento)

Consultar Fatura da Conta

Atrav\u00C3\u00A9s desta opera\u00C3\u00A7\u00C3\u00A3o os Emissores ou Portadores poder\u00C3\u00A3o consultar os detalhes de uma fatura vinculados a uma determinada conta.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).
$data_vencimento = "data_vencimento_example"; // string | Data Vencimento.

try { 
    $result = $api_instance->consultarFaturaUsingGET($id, $data_vencimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->consultarFaturaUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | 
 **data_vencimento** | **string**| Data Vencimento. | 

### Return type

[**\br.com.conductor.pier.api.v2.model\DetalhesFaturaResponse**](DetalhesFaturaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarLancamentosFuturosFaturaUsingGET**
> \br.com.conductor.pier.api.v2.model\DetalhesFaturaResponse consultarLancamentosFuturosFaturaUsingGET($id, $data_vencimento)

Consultar Lan\u00C3\u00A7amentos Futuros da Fatura de uma Conta

Atrav\u00C3\u00A9s desta opera\u00C3\u00A7\u00C3\u00A3o os Emissores ou Portadores poder\u00C3\u00A3o consultar os detalhes dos lan\u00C3\u00A7amentos futuros de uma fatura vinculados a uma determinada conta.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).
$data_vencimento = "data_vencimento_example"; // string | Data Vencimento

try { 
    $result = $api_instance->consultarLancamentosFuturosFaturaUsingGET($id, $data_vencimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->consultarLancamentosFuturosFaturaUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | 
 **data_vencimento** | **string**| Data Vencimento | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\DetalhesFaturaResponse**](DetalhesFaturaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarLimiteDisponibilidadeUsingGET1**
> \br.com.conductor.pier.api.v2.model\LimiteDisponibilidadeResponse consultarLimiteDisponibilidadeUsingGET1($id)

Apresenta os limites da conta

Este m\u00C3\u00A9todo permite consultar os Limites configurados para uma determinada Conta, a partir do c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | Id Conta

try { 
    $result = $api_instance->consultarLimiteDisponibilidadeUsingGET1($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->consultarLimiteDisponibilidadeUsingGET1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id Conta | 

### Return type

[**\br.com.conductor.pier.api.v2.model\LimiteDisponibilidadeResponse**](LimiteDisponibilidadeResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarTaxasTarifasUsingGET**
> \br.com.conductor.pier.api.v2.model\PageTaxasRefinanciamentoResponse consultarTaxasTarifasUsingGET($id, $page, $limit)

Permite consultar a partir do ID da conta as taxas e tarifas

Esta opera\u00C3\u00A7\u00C3\u00A3o tem como objetivo permitir que os Emissores consultem as taxas e tarifas da conta

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | ID da conta a ser consultada.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->consultarTaxasTarifasUsingGET($id, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->consultarTaxasTarifasUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID da conta a ser consultada. | 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTaxasRefinanciamentoResponse**](PageTaxasRefinanciamentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET24**
> \br.com.conductor.pier.api.v2.model\TransferenciaBancariaResponse consultarUsingGET24($id, $id_transferencia, $id_conta_bancaria_destino)

Consultar uma transfer\u00C3\u00AAncia banc\u00C3\u00A1ria para um banco

Este recurso permite consultar os detalhes de uma determinada transfer\u00C3\u00AAncia de cr\u00C3\u00A9dito realizada para uma conta banc\u00C3\u00A1ria. De modo geral, esta opera\u00C3\u00A7\u00C3\u00A3o poder\u00C3\u00A1 ser utilizada para uma consulta simples destes detalhes ou para realizar a montagem de um comprovante de 2\u00C2\u00AA via de transfer\u00C3\u00AAncia entre contas.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | Id Conta
$id_transferencia = 789; // int | Id Transfer\u00C3\u00AAncia
$id_conta_bancaria_destino = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta banc\u00C3\u00A1ria de destino (id)

try { 
    $result = $api_instance->consultarUsingGET24($id, $id_transferencia, $id_conta_bancaria_destino);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->consultarUsingGET24: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id Conta | 
 **id_transferencia** | **int**| Id Transfer\u00C3\u00AAncia | 
 **id_conta_bancaria_destino** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta banc\u00C3\u00A1ria de destino (id) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\TransferenciaBancariaResponse**](TransferenciaBancariaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET25**
> \br.com.conductor.pier.api.v2.model\PageTransferenciaResponse consultarUsingGET25($id, $id_transferencia)

Consulta os detalhes de uma determinada transfer\u00C3\u00AAncia

Este m\u00C3\u00A9todo permite consultar os detalhes de uma determinada transfer\u00C3\u00AAncia de cr\u00C3\u00A9dito realizada entre contas.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).
$id_transferencia = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da transfer\u00C3\u00AAncia (id_transferencia).

try { 
    $result = $api_instance->consultarUsingGET25($id, $id_transferencia);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->consultarUsingGET25: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | 
 **id_transferencia** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da transfer\u00C3\u00AAncia (id_transferencia). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTransferenciaResponse**](PageTransferenciaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET5**
> \br.com.conductor.pier.api.v2.model\ContaDetalheResponse consultarUsingGET5($id)

Apresenta dados de uma determinada conta

Este m\u00C3\u00A9todo permite consultar dados de uma determinada conta a partir de seu codigo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).

try { 
    $result = $api_instance->consultarUsingGET5($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->consultarUsingGET5: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ContaDetalheResponse**](ContaDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **desativarEnvioFaturaEmailUsingPOST**
> object desativarEnvioFaturaEmailUsingPOST($id)

Desativa o servi\u00C3\u00A7o de envio de fatura por email

Este recurso desativa o servi\u00C3\u00A7o de envio de fatura por email

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).

try { 
    $result = $api_instance->desativarEnvioFaturaEmailUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->desativarEnvioFaturaEmailUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **gerarBoletoRecargaUsingPOST**
> \br.com.conductor.pier.api.v2.model\BoletoResponse gerarBoletoRecargaUsingPOST($id, $valor, $data_vencimento)

Gera um boleto de recarga

Este recurso gera um boleto de recarga

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | Id Conta
$valor = new Number(); // Number | Atributo que representa o valor do Boleto Emitido
$data_vencimento = "data_vencimento_example"; // string | Atributo que representa a data de vencimento do boleto

try { 
    $result = $api_instance->gerarBoletoRecargaUsingPOST($id, $valor, $data_vencimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->gerarBoletoRecargaUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id Conta | 
 **valor** | [**Number**](.md)| Atributo que representa o valor do Boleto Emitido | 
 **data_vencimento** | **string**| Atributo que representa a data de vencimento do boleto | 

### Return type

[**\br.com.conductor.pier.api.v2.model\BoletoResponse**](BoletoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **gerarCartaoUsingPOST**
> \br.com.conductor.pier.api.v2.model\CartaoImpressaoResponse gerarCartaoUsingPOST($id, $id_pessoa, $id_tipo_plastico)

Realiza a gera\u00C3\u00A7\u00C3\u00A3o de um novo cart\u00C3\u00A3o para impress\u00C3\u00A3o avulsa

Este recurso permite que seja gerado um novo Cart\u00C3\u00A3o para um determinado Portador que esteja vinculado a uma Conta. Para isso, ser\u00C3\u00A1 preciso informar o c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da Conta (id), o idPessoa do Portador e o idTipoPlastico do Cart\u00C3\u00A3o que dever\u00C3\u00A1 ser gerado para impress\u00C3\u00A3o. Esta funcionalidade poder\u00C3\u00A1 ser utilizada para realizar a impress\u00C3\u00A3o de cart\u00C3\u00B5es em Lojas, Quiosques, Escrit\u00C3\u00B3rios, Terminais de Auto Atendimento, ou outro local que o Emissor escolher, desde que se possua uma impressora de Cart\u00C3\u00B5es habilidade para o fazer, no local.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).
$id_pessoa = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da pessoa (id).
$id_tipo_plastico = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do TipoPlastico (id).

try { 
    $result = $api_instance->gerarCartaoUsingPOST($id, $id_pessoa, $id_tipo_plastico);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->gerarCartaoUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | 
 **id_pessoa** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da pessoa (id). | 
 **id_tipo_plastico** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do TipoPlastico (id). | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\CartaoImpressaoResponse**](CartaoImpressaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **gerarCartaoVirtualUsingPOST**
> \br.com.conductor.pier.api.v2.model\CartaoImpressaoResponse gerarCartaoVirtualUsingPOST($id, $data_validade)

Realiza a gera\u00C3\u00A7\u00C3\u00A3o de um cart\u00C3\u00A3o virtual

Este recurso permite que seja gerado um Cart\u00C3\u00A3o virtual para um determinado Portador que esteja vinculado a uma Conta. Para isso, ser\u00C3\u00A1 preciso informar o c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da Conta (id). Esta funcionalidade poder\u00C3\u00A1 ser utilizada para realizar a cria\u00C3\u00A7\u00C3\u00A3o de cart\u00C3\u00B5es virtuaes atraves de um app.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).
$data_validade = "data_validade_example"; // string | Data de Validade

try { 
    $result = $api_instance->gerarCartaoVirtualUsingPOST($id, $data_validade);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->gerarCartaoVirtualUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | 
 **data_validade** | **string**| Data de Validade | 

### Return type

[**\br.com.conductor.pier.api.v2.model\CartaoImpressaoResponse**](CartaoImpressaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarFaturasConsignadasUsingGET**
> \br.com.conductor.pier.api.v2.model\PageFaturaConsignadaResponse listarFaturasConsignadasUsingGET($id, $page, $limit, $data_vencimento)

Lista as faturas consignadas da conta

Atrav\u00C3\u00A9s desta opera\u00C3\u00A7\u00C3\u00A3o os Emissores ou Portadores poder\u00C3\u00A3o consultar todo o Hist\u00C3\u00B3rico de Faturas vinculados a uma determinada Conta, independentemente do valor delas.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$data_vencimento = "data_vencimento_example"; // string | Apresenta a data de vencimento da fatura.

try { 
    $result = $api_instance->listarFaturasConsignadasUsingGET($id, $page, $limit, $data_vencimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->listarFaturasConsignadasUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **data_vencimento** | **string**| Apresenta a data de vencimento da fatura. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageFaturaConsignadaResponse**](PageFaturaConsignadaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarFaturasUsingGET**
> \br.com.conductor.pier.api.v2.model\PageFaturaResponse listarFaturasUsingGET($id, $page, $limit, $data_vencimento)

Lista as faturas da conta

Atrav\u00C3\u00A9s desta opera\u00C3\u00A7\u00C3\u00A3o os Emissores ou Portadores poder\u00C3\u00A3o consultar todo o Hist\u00C3\u00B3rico de Faturas vinculados a uma determinada Conta, independentemente do valor delas.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$data_vencimento = "data_vencimento_example"; // string | Data de Vencimento da Fatura.

try { 
    $result = $api_instance->listarFaturasUsingGET($id, $page, $limit, $data_vencimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->listarFaturasUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **data_vencimento** | **string**| Data de Vencimento da Fatura. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageFaturaResponse**](PageFaturaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarHistoricoAlteracoesLimitesUsingGET**
> \br.com.conductor.pier.api.v2.model\PageHistoricoEventosResponse listarHistoricoAlteracoesLimitesUsingGET($id, $page, $limit)

Lista o hist\u00C3\u00B3rico de altera\u00C3\u00A7\u00C3\u00B5es de limites da conta

Este recurso consulta o hist\u00C3\u00B3rico com as altera\u00C3\u00A7\u00C3\u00B5es de limites da conta informada

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarHistoricoAlteracoesLimitesUsingGET($id, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->listarHistoricoAlteracoesLimitesUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageHistoricoEventosResponse**](PageHistoricoEventosResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarHistoricoAssessoriaUsingGET**
> \br.com.conductor.pier.api.v2.model\PageHistoricoAssessoriaResponse listarHistoricoAssessoriaUsingGET($id, $page, $limit)

Lista o hist\u00C3\u00B3rico de entradas/sa\u00C3\u00ADdas de assessorias de cobran\u00C3\u00A7a

Permite listar todos os registros de entrada e sa\u00C3\u00ADda da Conta em arquivos de integra\u00C3\u00A7\u00C3\u00A3o com empresas de assessorias de cobran\u00C3\u00A7a a partir do c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (idConta).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | Id Conta
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarHistoricoAssessoriaUsingGET($id, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->listarHistoricoAssessoriaUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id Conta | 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageHistoricoAssessoriaResponse**](PageHistoricoAssessoriaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarHistoricoAtrasosFaturasUsingGET**
> \br.com.conductor.pier.api.v2.model\PageHistoricoAtrasoFaturaResponse listarHistoricoAtrasosFaturasUsingGET($id)

Lista o historico de atrasos das faturas

Este recurso lista o hist\u00C3\u00B3rico do pagamento de faturas em atraso

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | Id Conta

try { 
    $result = $api_instance->listarHistoricoAtrasosFaturasUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->listarHistoricoAtrasosFaturasUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id Conta | 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageHistoricoAtrasoFaturaResponse**](PageHistoricoAtrasoFaturaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarNaoProcessadasUsingGET**
> \br.com.conductor.pier.api.v2.model\PageTransacoesCorrentesResponse listarNaoProcessadasUsingGET($id, $page, $limit, $data_inicio, $data_fim)

Lista as transa\u00C3\u00A7\u00C3\u00B5es n\u00C3\u00A3o processadas da conta

Este m\u00C3\u00A9todo permite que sejam listadas todas as transa\u00C3\u00A7\u00C3\u00B5es n\u00C3\u00A3o processadas da Conta.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$data_inicio = "data_inicio_example"; // string | Data de in\u00C3\u00ADcio da consulta do extrato no formato yyyy-MM-dd (Par\u00C3\u00A2mentro Ignorado se dataFim n\u00C3\u00A3o for definida).
$data_fim = "data_fim_example"; // string | Data fim da consulta do extrato no formato yyyy-MM-dd  (Par\u00C3\u00A2mentro Ignorado se dataInicio n\u00C3\u00A3o for definida).

try { 
    $result = $api_instance->listarNaoProcessadasUsingGET($id, $page, $limit, $data_inicio, $data_fim);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->listarNaoProcessadasUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **data_inicio** | **string**| Data de in\u00C3\u00ADcio da consulta do extrato no formato yyyy-MM-dd (Par\u00C3\u00A2mentro Ignorado se dataFim n\u00C3\u00A3o for definida). | [optional] 
 **data_fim** | **string**| Data fim da consulta do extrato no formato yyyy-MM-dd  (Par\u00C3\u00A2mentro Ignorado se dataInicio n\u00C3\u00A3o for definida). | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTransacoesCorrentesResponse**](PageTransacoesCorrentesResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarProcessadasUsingGET**
> \br.com.conductor.pier.api.v2.model\PageTransacoesCorrentesResponse listarProcessadasUsingGET($id, $page, $limit, $data_vencimento, $data_inicio, $data_fim)

Lista as transa\u00C3\u00A7\u00C3\u00B5es processadas da conta

Este m\u00C3\u00A9todo permite que sejam listadas todas as transa\u00C3\u00A7\u00C3\u00B5es processadas da Conta.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$data_vencimento = "data_vencimento_example"; // string | Data de vencimento do extrato no formato yyyy-MM-dd.
$data_inicio = "data_inicio_example"; // string | Data de in\u00C3\u00ADcio da consulta do extrato no formato yyyy-MM-dd (Ignorado quando o par\u00C3\u00A2mentro dataVencimento \u00C3\u00A9 usado).
$data_fim = "data_fim_example"; // string | Data fim da consulta do extrato no formato yyyy-MM-dd  (Ignorado quando o par\u00C3\u00A2mentro dataVencimento \u00C3\u00A9 usado).

try { 
    $result = $api_instance->listarProcessadasUsingGET($id, $page, $limit, $data_vencimento, $data_inicio, $data_fim);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->listarProcessadasUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **data_vencimento** | **string**| Data de vencimento do extrato no formato yyyy-MM-dd. | [optional] 
 **data_inicio** | **string**| Data de in\u00C3\u00ADcio da consulta do extrato no formato yyyy-MM-dd (Ignorado quando o par\u00C3\u00A2mentro dataVencimento \u00C3\u00A9 usado). | [optional] 
 **data_fim** | **string**| Data fim da consulta do extrato no formato yyyy-MM-dd  (Ignorado quando o par\u00C3\u00A2mentro dataVencimento \u00C3\u00A9 usado). | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTransacoesCorrentesResponse**](PageTransacoesCorrentesResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET28**
> \br.com.conductor.pier.api.v2.model\PageTransferenciaBancariaResponse listarUsingGET28($id, $id_conta_bancaria_destino, $page, $limit)

Listar as transfer\u00C3\u00AAncias banc\u00C3\u00A1rias realizadas

Este recurso tem como objetivo permitir que o portador de um Cart\u00C3\u00A3o possa consultar uma lista das Transfer\u00C3\u00AAncias Banc\u00C3\u00A1rias para os Favorecidos cadastrados.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | Id Conta
$id_conta_bancaria_destino = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta banc\u00C3\u00A1ria de destino (id)
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarUsingGET28($id, $id_conta_bancaria_destino, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->listarUsingGET28: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id Conta | 
 **id_conta_bancaria_destino** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta banc\u00C3\u00A1ria de destino (id) | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTransferenciaBancariaResponse**](PageTransferenciaBancariaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET29**
> \br.com.conductor.pier.api.v2.model\PageTransferenciaResponse listarUsingGET29($id, $page, $limit, $id_transferencia, $id_conta_origem, $id_conta_destino, $valor_transferencia, $data_transferencia)

Lista as transfer\u00C3\u00AAncias realizadas pela conta

Este m\u00C3\u00A9todo permite que sejam listadas as transfer\u00C3\u00AAncias realizadas pela conta existentes na base do emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id_transferencia = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da transfer\u00C3\u00AAncia (id).
$id_conta_origem = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta em que o valor ser\u00C3\u00A1 debitado para a transfer\u00C3\u00AAncia. (id).
$id_conta_destino = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta em que o valor ser\u00C3\u00A1 creditado para a transfer\u00C3\u00AAncia. (id).
$valor_transferencia = new Number(); // Number | Valor estabelecido para ser transferido.
$data_transferencia = "data_transferencia_example"; // string | Data estabelecida para ocorrer a transfer\u00C3\u00AAncia.

try { 
    $result = $api_instance->listarUsingGET29($id, $page, $limit, $id_transferencia, $id_conta_origem, $id_conta_destino, $valor_transferencia, $data_transferencia);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->listarUsingGET29: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id_transferencia** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da transfer\u00C3\u00AAncia (id). | [optional] 
 **id_conta_origem** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta em que o valor ser\u00C3\u00A1 debitado para a transfer\u00C3\u00AAncia. (id). | [optional] 
 **id_conta_destino** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta em que o valor ser\u00C3\u00A1 creditado para a transfer\u00C3\u00AAncia. (id). | [optional] 
 **valor_transferencia** | [**Number**](.md)| Valor estabelecido para ser transferido. | [optional] 
 **data_transferencia** | **string**| Data estabelecida para ocorrer a transfer\u00C3\u00AAncia. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTransferenciaResponse**](PageTransferenciaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET7**
> \br.com.conductor.pier.api.v2.model\PageContaResponse listarUsingGET7($page, $limit, $id_produto, $id_origem_comercial, $id_pessoa, $id_status_conta, $dia_vencimento, $melhor_dia_compra, $data_status_conta, $data_cadastro, $data_ultima_alteracao_vencimento)

Lista contas existentes na base de dados do Emissor

Este recurso permite listar contas existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id_produto = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do produto ao qual a conta faz parte. (id).
$id_origem_comercial = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Origem Comercial (id) que deu origem a Conta.
$id_pessoa = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Pessoa Titular da Conta (id).
$id_status_conta = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Produto a qual o cart\u00C3\u00A3o pertence (id).
$dia_vencimento = 56; // int | Apresenta o dia de vencimento.
$melhor_dia_compra = 56; // int | Apresenta o melhor dia de compra.
$data_status_conta = "data_status_conta_example"; // string | Apresenta a data em que o idStatusConta atual fora atribu\u00C3\u00ADdo para ela.
$data_cadastro = "data_cadastro_example"; // string | Apresenta a data em que o cart\u00C3\u00A3o foi gerado.
$data_ultima_alteracao_vencimento = "data_ultima_alteracao_vencimento_example"; // string | Apresenta a data da ultima altera\u00C3\u00A7\u00C3\u00A3o de vencimento.

try { 
    $result = $api_instance->listarUsingGET7($page, $limit, $id_produto, $id_origem_comercial, $id_pessoa, $id_status_conta, $dia_vencimento, $melhor_dia_compra, $data_status_conta, $data_cadastro, $data_ultima_alteracao_vencimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->listarUsingGET7: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id_produto** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do produto ao qual a conta faz parte. (id). | [optional] 
 **id_origem_comercial** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Origem Comercial (id) que deu origem a Conta. | [optional] 
 **id_pessoa** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Pessoa Titular da Conta (id). | [optional] 
 **id_status_conta** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Produto a qual o cart\u00C3\u00A3o pertence (id). | [optional] 
 **dia_vencimento** | **int**| Apresenta o dia de vencimento. | [optional] 
 **melhor_dia_compra** | **int**| Apresenta o melhor dia de compra. | [optional] 
 **data_status_conta** | **string**| Apresenta a data em que o idStatusConta atual fora atribu\u00C3\u00ADdo para ela. | [optional] 
 **data_cadastro** | **string**| Apresenta a data em que o cart\u00C3\u00A3o foi gerado. | [optional] 
 **data_ultima_alteracao_vencimento** | **string**| Apresenta a data da ultima altera\u00C3\u00A7\u00C3\u00A3o de vencimento. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageContaResponse**](PageContaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **reativarUsingPOST1**
> object reativarUsingPOST1($id)

Realiza a reativa\u00C3\u00A7\u00C3\u00A3o de contas.

Este recurso permite reativar contas. Para isso, ser\u00C3\u00A1 preciso informar o c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da Conta (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | Id Conta

try { 
    $result = $api_instance->reativarUsingPOST1($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->reativarUsingPOST1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id Conta | 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **transacoesUsingGET**
> \br.com.conductor.pier.api.v2.model\PageTransacaoResponse transacoesUsingGET($id, $page, $limit)

Permite listar uma linha do tempo com os eventos da conta

Esta opera\u00C3\u00A7\u00C3\u00A3o tem como objetivo permitir a listagem, em formato de timeline, dos eventos vinculados a uma detemrinada conta. Transa\u00C3\u00A7\u00C3\u00B5es, fechamento da fatura, pagamentos, gera\u00C3\u00A7\u00C3\u00A3o de cart\u00C3\u00B5es e altera\u00C3\u00A7\u00C3\u00A3o de limite s\u00C3\u00A3o exemplos de eventos contemplados por esta funcionalidade. Neste m\u00C3\u00A9todo, as opera\u00C3\u00A7\u00C3\u00B5es s\u00C3\u00A3o ordenadas de forma decrescente.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | Id Conta
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->transacoesUsingGET($id, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->transacoesUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id Conta | 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTransacaoResponse**](PageTransacaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **transferirUsingPOST**
> \br.com.conductor.pier.api.v2.model\TransferenciaBancariaResponse transferirUsingPOST($id, $transferencia_bancaria_persist)

Realizar transfer\u00C3\u00AAncia banc\u00C3\u00A1ria do cart\u00C3\u00A3o para contas banc\u00C3\u00A1rias

Este recurso tem como objetivo permitir que o portador de um cart\u00C3\u00A3o possa realizar a transfer\u00C3\u00AAncia de cr\u00C3\u00A9dito para uma conta banc\u00C3\u00A1ria. Assim, o valor do cr\u00C3\u00A9dito somado a tarifa para transfer\u00C3\u00AAncia, quando praticada pelo emissor, ser\u00C3\u00A1 debitado da conta de origem, se houver saldo suficiente, e ser\u00C3\u00A1 creditado na conta banc\u00C3\u00A1ria de destino.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | Id Conta
$transferencia_bancaria_persist = new \br.com.conductor.pier.api.v2.model\TransferenciaBancariaPersist(); // \br.com.conductor.pier.api.v2.model\TransferenciaBancariaPersist | transferenciaBancariaPersist

try { 
    $result = $api_instance->transferirUsingPOST($id, $transferencia_bancaria_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->transferirUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id Conta | 
 **transferencia_bancaria_persist** | [**\br.com.conductor.pier.api.v2.model\TransferenciaBancariaPersist**](\br.com.conductor.pier.api.v2.model\TransferenciaBancariaPersist.md)| transferenciaBancariaPersist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TransferenciaBancariaResponse**](TransferenciaBancariaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **transferirUsingPOST1**
> \br.com.conductor.pier.api.v2.model\PageTransferenciaResponse transferirUsingPOST1($id, $id_conta_destino, $valor_transferencia)

Realiza uma transfer\u00C3\u00AAncia de Cr\u00C3\u00A9dito para outro cliente do mesmo Emissor

Este m\u00C3\u00A9todo permite que um portador de um cart\u00C3\u00A3o possa realizar auma transfer\u00C3\u00AAncia de cr\u00C3\u00A9dito para outro cliente do mesmo emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ContaApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da conta do cliente portador do cart\u00C3\u00A3o que ser\u00C3\u00A1 debitado (id).
$id_conta_destino = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do cliente portador do cart\u00C3\u00A3o que ser\u00C3\u00A1 creditado (id).
$valor_transferencia = new Number(); // Number | Valor da Transfer\u00C3\u00AAncia.

try { 
    $result = $api_instance->transferirUsingPOST1($id, $id_conta_destino, $valor_transferencia);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->transferirUsingPOST1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da conta do cliente portador do cart\u00C3\u00A3o que ser\u00C3\u00A1 debitado (id). | 
 **id_conta_destino** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do cliente portador do cart\u00C3\u00A3o que ser\u00C3\u00A1 creditado (id). | 
 **valor_transferencia** | [**Number**](.md)| Valor da Transfer\u00C3\u00AAncia. | 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTransferenciaResponse**](PageTransferenciaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

