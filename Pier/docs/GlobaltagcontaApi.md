# br.com.conductor.pier.api.v2.invoker\GlobaltagcontaApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ajustarContaUsingPOST1**](GlobaltagcontaApi.md#ajustarContaUsingPOST1) | **POST** /api/contas/{id}/ajustes-financeiros | {{{conta_resource_ajustar_conta}}}
[**alterarProdutoUsingPOST**](GlobaltagcontaApi.md#alterarProdutoUsingPOST) | **POST** /api/contas/{id}/alterar-produto | {{{conta_resource_alterar_produto}}}
[**alterarTitularUsingPOST**](GlobaltagcontaApi.md#alterarTitularUsingPOST) | **POST** /api/contas/{id}/alterar-titular | {{{conta_resource_alterar_titular}}}
[**alterarVencimentoUsingPUT**](GlobaltagcontaApi.md#alterarVencimentoUsingPUT) | **PUT** /api/contas/{id}/alterar-vencimento | {{{conta_resource_alterar_vencimento}}}
[**ativarAnuidadeUsingPOST**](GlobaltagcontaApi.md#ativarAnuidadeUsingPOST) | **POST** /api/contas/{id}/atribuir-anuidade | {{{conta_resource_ativar_anuidade}}}
[**ativarEnvioFaturaEmailUsingPOST**](GlobaltagcontaApi.md#ativarEnvioFaturaEmailUsingPOST) | **POST** /api/contas/{id}/ativar-fatura-email | {{{conta_resource_ativar_envio_fatura_email}}}
[**bloquearUsingPOST1**](GlobaltagcontaApi.md#bloquearUsingPOST1) | **POST** /api/contas/{id}/bloquear | {{{conta_resource_bloquear}}}
[**cadastrarUsingPOST**](GlobaltagcontaApi.md#cadastrarUsingPOST) | **POST** /api/adesoes-pagamentos-sabados | {{{aderir_pagamento_sabado_recurso_cadastrar}}}
[**cancelarUsingPOST1**](GlobaltagcontaApi.md#cancelarUsingPOST1) | **POST** /api/contas/{id}/cancelar | {{{conta_resource_cancelar}}}
[**consultarBeneficioPagamentoAtrasoUsingGET**](GlobaltagcontaApi.md#consultarBeneficioPagamentoAtrasoUsingGET) | **GET** /api/contas/{id}/consultar-beneficio-pagamento-atraso | {{{conta_resource_consultar_beneficio_pagamento_atraso}}}
[**consultarBoletoEmitidoUsingGET**](GlobaltagcontaApi.md#consultarBoletoEmitidoUsingGET) | **GET** /api/contas/{id}/consultar-dados-pagamento-fatura | {{{conta_resource_consultar_boleto_emitido}}}
[**consultarDividaAtualizadaClienteUsingGET**](GlobaltagcontaApi.md#consultarDividaAtualizadaClienteUsingGET) | **GET** /api/contas/{id}/recuperar-divida-atualizada | {{{conta_resource_consultar_divida_atualizada_cliente}}}
[**consultarTaxasTarifasUsingGET**](GlobaltagcontaApi.md#consultarTaxasTarifasUsingGET) | **GET** /api/contas/{id}/consultar-taxas-tarifas | {{{conta_resource_consultar_taxas_tarifas}}}
[**consultarUsingGET1**](GlobaltagcontaApi.md#consultarUsingGET1) | **GET** /api/adesoes-pagamentos-sabados | {{{aderir_pagamento_sabado_recurso_consultar}}}
[**consultarUsingGET16**](GlobaltagcontaApi.md#consultarUsingGET16) | **GET** /api/contas/{id} | {{{conta_resource_consultar}}}
[**consultarUsingGET51**](GlobaltagcontaApi.md#consultarUsingGET51) | **GET** /api/contas/{id}/transferencias-creditos-cartoes/{id_transferencia} | {{{transferencia_resource_consultar}}}
[**criarContasMultiAppUsingPOST**](GlobaltagcontaApi.md#criarContasMultiAppUsingPOST) | **POST** /api/contas/cadastrar-conta-multiapp | {{{conta_resource_cadastrar_conta_multiapp}}}
[**desativarEnvioFaturaEmailUsingPOST**](GlobaltagcontaApi.md#desativarEnvioFaturaEmailUsingPOST) | **POST** /api/contas/{id}/desativar-fatura-email | {{{conta_resource_desativar_envio_fatura_email}}}
[**gerarBoletoRecargaUsingPOST**](GlobaltagcontaApi.md#gerarBoletoRecargaUsingPOST) | **POST** /api/contas/{id}/gerar-boleto-recarga | {{{conta_resource_gerar_boleto_recarga}}}
[**gerarCartaoEmbossingUsingPOST**](GlobaltagcontaApi.md#gerarCartaoEmbossingUsingPOST) | **POST** /api/contas/{id}/gerar-cartao-grafica | {{{conta_resource_gerar_cartao_embossing}}}
[**gerarCartaoProvisorioUsingPOST**](GlobaltagcontaApi.md#gerarCartaoProvisorioUsingPOST) | **POST** /api/contas/{id}/gerar-cartao-provisorio | {{{conta_resource_gerar_cartao_provisorio}}}
[**gerarCartaoUsingPOST**](GlobaltagcontaApi.md#gerarCartaoUsingPOST) | **POST** /api/contas/{id}/pessoas/{id_pessoa}/gerar-cartao | {{{conta_resource_gerar_cartao}}}
[**gerarCartaoVirtualUsingPOST**](GlobaltagcontaApi.md#gerarCartaoVirtualUsingPOST) | **POST** /api/contas/{id}/gerar-cartao-virtual | {{{conta_resource_gerar_cartao_virtual}}}
[**listarHistoricoAlteracoesLimitesUsingGET**](GlobaltagcontaApi.md#listarHistoricoAlteracoesLimitesUsingGET) | **GET** /api/contas/{id}/historicos-alteracoes-limites | {{{conta_resource_listar_historico_alteracoes_limites}}}
[**listarHistoricoAssessoriaUsingGET**](GlobaltagcontaApi.md#listarHistoricoAssessoriaUsingGET) | **GET** /api/contas/{id}/historicos-assessorias-cobranca | {{{conta_resource_listar_historico_assessoria}}}
[**listarHistoricoAtrasosFaturasUsingGET**](GlobaltagcontaApi.md#listarHistoricoAtrasosFaturasUsingGET) | **GET** /api/contas/{id}/historicos-faturas-atrasos | {{{conta_resource_listar_historico_atrasos_faturas}}}
[**listarNaoProcessadasUsingGET**](GlobaltagcontaApi.md#listarNaoProcessadasUsingGET) | **GET** /api/contas/{id}/transacoes/listar-nao-processadas | {{{transacoes_correntes_resource_listar_nao_processadas}}}
[**listarProcessadasUsingGET**](GlobaltagcontaApi.md#listarProcessadasUsingGET) | **GET** /api/contas/{id}/transacoes/listar-processadas | {{{transacoes_correntes_resource_listar_processadas}}}
[**listarUsingGET19**](GlobaltagcontaApi.md#listarUsingGET19) | **GET** /api/contas | {{{conta_resource_listar}}}
[**listarUsingGET61**](GlobaltagcontaApi.md#listarUsingGET61) | **GET** /api/contas/{id}/transacoes | {{{transacoes_correntes_resource_listar_nao_processadas_e_processadas}}}
[**listarUsingGET63**](GlobaltagcontaApi.md#listarUsingGET63) | **GET** /api/contas/{id}/transferencias-creditos-cartoes | {{{transferencia_resource_listar}}}
[**reativarUsingPOST1**](GlobaltagcontaApi.md#reativarUsingPOST1) | **POST** /api/contas/{id}/reativar | {{{conta_resource_reativar}}}
[**salvarUsingPOST9**](GlobaltagcontaApi.md#salvarUsingPOST9) | **POST** /api/contas | {{{conta_resource_salvar}}}
[**simularEmprestimoFinanciamentoUsingPOST**](GlobaltagcontaApi.md#simularEmprestimoFinanciamentoUsingPOST) | **POST** /api/contas/{id}/simular-emprestimos-financiamentos | {{{financiamento_resource_simular_emprestimo_financiamento}}}
[**transacoesUsingGET**](GlobaltagcontaApi.md#transacoesUsingGET) | **GET** /api/contas/{id}/timeline | {{{conta_resource_transacoes}}}
[**transferirUsingPOST1**](GlobaltagcontaApi.md#transferirUsingPOST1) | **POST** /api/contas/{id}/transferencias-creditos-cartoes | {{{transferencia_resource_transferir}}}


# **ajustarContaUsingPOST1**
> \br.com.conductor.pier.api.v2.model\AjusteFinanceiroResponse ajustarContaUsingPOST1($id, $id_tipo_ajuste, $data_ajuste, $valor_ajuste, $identificador_externo, $id_transacao_original)

{{{conta_resource_ajustar_conta}}}

{{{conta_resource_ajustar_conta_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcontaApi();
$id = 789; // int | {{{conta_resource_ajustar_conta_param_id}}}
$id_tipo_ajuste = 789; // int | {{{ajuste_persist_id_tipo_ajuste_value}}}
$data_ajuste = "data_ajuste_example"; // string | {{{ajuste_persist_data_ajuste_value}}}
$valor_ajuste = new Number(); // Number | {{{ajuste_persist_valor_ajuste_value}}}
$identificador_externo = "identificador_externo_example"; // string | {{{ajuste_persist_identificador_externo_value}}}
$id_transacao_original = 789; // int | {{{ajuste_persist_id_transacao_original}}}

try { 
    $result = $api_instance->ajustarContaUsingPOST1($id, $id_tipo_ajuste, $data_ajuste, $valor_ajuste, $identificador_externo, $id_transacao_original);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcontaApi->ajustarContaUsingPOST1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{conta_resource_ajustar_conta_param_id}}} | 
 **id_tipo_ajuste** | **int**| {{{ajuste_persist_id_tipo_ajuste_value}}} | 
 **data_ajuste** | **string**| {{{ajuste_persist_data_ajuste_value}}} | 
 **valor_ajuste** | [**Number**](.md)| {{{ajuste_persist_valor_ajuste_value}}} | 
 **identificador_externo** | **string**| {{{ajuste_persist_identificador_externo_value}}} | [optional] 
 **id_transacao_original** | **int**| {{{ajuste_persist_id_transacao_original}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\AjusteFinanceiroResponse**](AjusteFinanceiroResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarProdutoUsingPOST**
> string alterarProdutoUsingPOST($id, $request)

{{{conta_resource_alterar_produto}}}

{{{conta_resource_alterar_produto_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcontaApi();
$id = 789; // int | {{{conta_resource_alterar_produto_param_id}}}
$request = new \br.com.conductor.pier.api.v2.model\AlterarProdutoRequest(); // \br.com.conductor.pier.api.v2.model\AlterarProdutoRequest | request

try { 
    $result = $api_instance->alterarProdutoUsingPOST($id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcontaApi->alterarProdutoUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{conta_resource_alterar_produto_param_id}}} | 
 **request** | [**\br.com.conductor.pier.api.v2.model\AlterarProdutoRequest**](\br.com.conductor.pier.api.v2.model\AlterarProdutoRequest.md)| request | 

### Return type

**string**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarTitularUsingPOST**
> \br.com.conductor.pier.api.v2.model\ContaResponse alterarTitularUsingPOST($id, $id_pessoa)

{{{conta_resource_alterar_titular}}}

{{{conta_resource_alterar_titular_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcontaApi();
$id = 789; // int | {{{conta_resource_alterar_titular_param_id_conta}}}
$id_pessoa = 789; // int | {{{conta_resource_alterar_titular_param_id_pessoa}}}

try { 
    $result = $api_instance->alterarTitularUsingPOST($id, $id_pessoa);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcontaApi->alterarTitularUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{conta_resource_alterar_titular_param_id_conta}}} | 
 **id_pessoa** | **int**| {{{conta_resource_alterar_titular_param_id_pessoa}}} | 

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

{{{conta_resource_alterar_vencimento}}}

{{{conta_resource_alterar_vencimento_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcontaApi();
$id = 789; // int | {{{conta_resource_alterar_vencimento_param_id}}}
$novo_dia_vencimento = 56; // int | {{{conta_resource_alterar_vencimento_param_novo_dia_vencimento}}}

try { 
    $result = $api_instance->alterarVencimentoUsingPUT($id, $novo_dia_vencimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcontaApi->alterarVencimentoUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{conta_resource_alterar_vencimento_param_id}}} | 
 **novo_dia_vencimento** | **int**| {{{conta_resource_alterar_vencimento_param_novo_dia_vencimento}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ContaResponse**](ContaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **ativarAnuidadeUsingPOST**
> object ativarAnuidadeUsingPOST($id, $id_anuidade, $sort, $page, $limit, $ddd, $celular, $id_operadora, $id_origem_comercial)

{{{conta_resource_ativar_anuidade}}}

{{{conta_resource_ativar_anuidade_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcontaApi();
$id = 789; // int | {{{conta_resource_ativar_anuidade_param_id}}}
$id_anuidade = 789; // int | {{{anuidade_request_id_anuidade_value}}}
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$ddd = "ddd_example"; // string | {{{anuidade_request_d_d_d_value}}}
$celular = "celular_example"; // string | {{{anuidade_request_celular_value}}}
$id_operadora = 789; // int | {{{anuidade_request_id_operadora_value}}}
$id_origem_comercial = 789; // int | {{{anuidade_request_id_origem_comercial_value}}}

try { 
    $result = $api_instance->ativarAnuidadeUsingPOST($id, $id_anuidade, $sort, $page, $limit, $ddd, $celular, $id_operadora, $id_origem_comercial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcontaApi->ativarAnuidadeUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{conta_resource_ativar_anuidade_param_id}}} | 
 **id_anuidade** | **int**| {{{anuidade_request_id_anuidade_value}}} | 
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **ddd** | **string**| {{{anuidade_request_d_d_d_value}}} | [optional] 
 **celular** | **string**| {{{anuidade_request_celular_value}}} | [optional] 
 **id_operadora** | **int**| {{{anuidade_request_id_operadora_value}}} | [optional] 
 **id_origem_comercial** | **int**| {{{anuidade_request_id_origem_comercial_value}}} | [optional] 

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

{{{conta_resource_ativar_envio_fatura_email}}}

{{{conta_resource_ativar_envio_fatura_email_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcontaApi();
$id = 789; // int | {{{conta_resource_ativar_envio_fatura_email_param_id}}}

try { 
    $result = $api_instance->ativarEnvioFaturaEmailUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcontaApi->ativarEnvioFaturaEmailUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{conta_resource_ativar_envio_fatura_email_param_id}}} | 

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

{{{conta_resource_bloquear}}}

{{{conta_resource_bloquear_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcontaApi();
$id = 789; // int | {{{conta_resource_bloquear_param_id}}}
$id_status = 789; // int | {{{conta_resource_bloquear_param_id_status}}}

try { 
    $result = $api_instance->bloquearUsingPOST1($id, $id_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcontaApi->bloquearUsingPOST1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{conta_resource_bloquear_param_id}}} | 
 **id_status** | **int**| {{{conta_resource_bloquear_param_id_status}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ContaResponse**](ContaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **cadastrarUsingPOST**
> \br.com.conductor.pier.api.v2.model\AdesaoPagamentoSabadoResponse cadastrarUsingPOST($id)

{{{aderir_pagamento_sabado_recurso_cadastrar}}}

{{{aderir_pagamento_sabado_recurso_cadastrar_notas}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcontaApi();
$id = 789; // int | {{{aderir_pagamento_sabado_recurso_cadastrar_param_id}}}

try { 
    $result = $api_instance->cadastrarUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcontaApi->cadastrarUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{aderir_pagamento_sabado_recurso_cadastrar_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\AdesaoPagamentoSabadoResponse**](AdesaoPagamentoSabadoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **cancelarUsingPOST1**
> \br.com.conductor.pier.api.v2.model\ContaResponse cancelarUsingPOST1($id, $id_status)

{{{conta_resource_cancelar}}}

{{{conta_resource_cancelar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcontaApi();
$id = 789; // int | {{{conta_resource_cancelar_param_id}}}
$id_status = 789; // int | {{{conta_resource_cancelar_param_id_status}}}

try { 
    $result = $api_instance->cancelarUsingPOST1($id, $id_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcontaApi->cancelarUsingPOST1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{conta_resource_cancelar_param_id}}} | 
 **id_status** | **int**| {{{conta_resource_cancelar_param_id_status}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ContaResponse**](ContaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarBeneficioPagamentoAtrasoUsingGET**
> \br.com.conductor.pier.api.v2.model\BeneficioPagamentoAtrasoResponse consultarBeneficioPagamentoAtrasoUsingGET($id)

{{{conta_resource_consultar_beneficio_pagamento_atraso}}}

{{{conta_resource_consultar_beneficio_pagamento_atraso_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcontaApi();
$id = 789; // int | {{{conta_resource_consultar_beneficio_pagamento_atraso_param_id}}}

try { 
    $result = $api_instance->consultarBeneficioPagamentoAtrasoUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcontaApi->consultarBeneficioPagamentoAtrasoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{conta_resource_consultar_beneficio_pagamento_atraso_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\BeneficioPagamentoAtrasoResponse**](BeneficioPagamentoAtrasoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarBoletoEmitidoUsingGET**
> \br.com.conductor.pier.api.v2.model\BoletoResponse consultarBoletoEmitidoUsingGET($id)

{{{conta_resource_consultar_boleto_emitido}}}

{{{conta_resource_consultar_boleto_emitido_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcontaApi();
$id = 789; // int | {{{conta_resource_consultar_boleto_emitido_param_id}}}

try { 
    $result = $api_instance->consultarBoletoEmitidoUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcontaApi->consultarBoletoEmitidoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{conta_resource_consultar_boleto_emitido_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\BoletoResponse**](BoletoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarDividaAtualizadaClienteUsingGET**
> \br.com.conductor.pier.api.v2.model\DividaClienteResponse consultarDividaAtualizadaClienteUsingGET($id, $sort, $page, $limit, $data_vencimento, $id_escritorio_cobranca)

{{{conta_resource_consultar_divida_atualizada_cliente}}}

{{{conta_resource_consultar_divida_atualizada_cliente_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcontaApi();
$id = 789; // int | {{{conta_resource_consultar_divida_atualizada_cliente_param_id}}}
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$data_vencimento = "data_vencimento_example"; // string | {{{divida_cliente_request_data_vencimento_value}}}
$id_escritorio_cobranca = 789; // int | {{{divida_cliente_request_id_escritorio_cobranca_value}}}

try { 
    $result = $api_instance->consultarDividaAtualizadaClienteUsingGET($id, $sort, $page, $limit, $data_vencimento, $id_escritorio_cobranca);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcontaApi->consultarDividaAtualizadaClienteUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{conta_resource_consultar_divida_atualizada_cliente_param_id}}} | 
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **data_vencimento** | **string**| {{{divida_cliente_request_data_vencimento_value}}} | [optional] 
 **id_escritorio_cobranca** | **int**| {{{divida_cliente_request_id_escritorio_cobranca_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\DividaClienteResponse**](DividaClienteResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarTaxasTarifasUsingGET**
> \br.com.conductor.pier.api.v2.model\PageTaxasRefinanciamentoResponse consultarTaxasTarifasUsingGET($id, $sort, $page, $limit)

{{{conta_resource_consultar_taxas_tarifas}}}

{{{conta_resource_consultar_taxas_tarifas_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcontaApi();
$id = 789; // int | {{{conta_resource_consultar_taxas_tarifas_param_id_conta}}}
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}

try { 
    $result = $api_instance->consultarTaxasTarifasUsingGET($id, $sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcontaApi->consultarTaxasTarifasUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{conta_resource_consultar_taxas_tarifas_param_id_conta}}} | 
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTaxasRefinanciamentoResponse**](PageTaxasRefinanciamentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET1**
> \br.com.conductor.pier.api.v2.model\AdesaoPagamentoSabadoResponse consultarUsingGET1($id, $data_vencimento)

{{{aderir_pagamento_sabado_recurso_consultar}}}

{{{aderir_pagamento_sabado_recurso_consultar_notas}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcontaApi();
$id = 789; // int | {{{aderir_pagamento_sabado_recurso_consultar_param_id}}}
$data_vencimento = "data_vencimento_example"; // string | {{{aderir_pagamento_sabado_recurso_consultar_param_data_vencimento}}}

try { 
    $result = $api_instance->consultarUsingGET1($id, $data_vencimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcontaApi->consultarUsingGET1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{aderir_pagamento_sabado_recurso_consultar_param_id}}} | 
 **data_vencimento** | **string**| {{{aderir_pagamento_sabado_recurso_consultar_param_data_vencimento}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\AdesaoPagamentoSabadoResponse**](AdesaoPagamentoSabadoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET16**
> \br.com.conductor.pier.api.v2.model\ContaDetalheResponse consultarUsingGET16($id)

{{{conta_resource_consultar}}}

{{{conta_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcontaApi();
$id = 789; // int | {{{conta_resource_consultar_param_id}}}

try { 
    $result = $api_instance->consultarUsingGET16($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcontaApi->consultarUsingGET16: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{conta_resource_consultar_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ContaDetalheResponse**](ContaDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET51**
> \br.com.conductor.pier.api.v2.model\TransferenciaDetalheResponse consultarUsingGET51($id, $id_transferencia)

{{{transferencia_resource_consultar}}}

{{{transferencia_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcontaApi();
$id = 789; // int | {{{transferencia_resource_consultar_param_id_conta}}}
$id_transferencia = 789; // int | {{{transferencia_resource_consultar_param_id_transferencia}}}

try { 
    $result = $api_instance->consultarUsingGET51($id, $id_transferencia);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcontaApi->consultarUsingGET51: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{transferencia_resource_consultar_param_id_conta}}} | 
 **id_transferencia** | **int**| {{{transferencia_resource_consultar_param_id_transferencia}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TransferenciaDetalheResponse**](TransferenciaDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **criarContasMultiAppUsingPOST**
> \br.com.conductor.pier.api.v2.model\ContaMultiAppResponse criarContasMultiAppUsingPOST($conta_multi_app_persist)

{{{conta_resource_cadastrar_conta_multiapp}}}

{{{conta_resource_cadastrar_conta_multiapp_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcontaApi();
$conta_multi_app_persist = new \br.com.conductor.pier.api.v2.model\ContaMultiAppPersistValue_(); // \br.com.conductor.pier.api.v2.model\ContaMultiAppPersistValue_ | contaMultiAppPersist

try { 
    $result = $api_instance->criarContasMultiAppUsingPOST($conta_multi_app_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcontaApi->criarContasMultiAppUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conta_multi_app_persist** | [**\br.com.conductor.pier.api.v2.model\ContaMultiAppPersistValue_**](\br.com.conductor.pier.api.v2.model\ContaMultiAppPersistValue_.md)| contaMultiAppPersist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ContaMultiAppResponse**](ContaMultiAppResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **desativarEnvioFaturaEmailUsingPOST**
> object desativarEnvioFaturaEmailUsingPOST($id)

{{{conta_resource_desativar_envio_fatura_email}}}

{{{conta_resource_desativar_envio_fatura_email_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcontaApi();
$id = 789; // int | {{{conta_resource_desativar_envio_fatura_email_param_id}}}

try { 
    $result = $api_instance->desativarEnvioFaturaEmailUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcontaApi->desativarEnvioFaturaEmailUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{conta_resource_desativar_envio_fatura_email_param_id}}} | 

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

{{{conta_resource_gerar_boleto_recarga}}}

{{{conta_resource_gerar_boleto_recarga_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcontaApi();
$id = 789; // int | {{{conta_resource_gerar_boleto_recarga_param_id}}}
$valor = new Number(); // Number | {{{boleto_recarga_request_valor_value}}}
$data_vencimento = "data_vencimento_example"; // string | {{{boleto_recarga_request_data_vencimento_value}}}

try { 
    $result = $api_instance->gerarBoletoRecargaUsingPOST($id, $valor, $data_vencimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcontaApi->gerarBoletoRecargaUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{conta_resource_gerar_boleto_recarga_param_id}}} | 
 **valor** | [**Number**](.md)| {{{boleto_recarga_request_valor_value}}} | 
 **data_vencimento** | **string**| {{{boleto_recarga_request_data_vencimento_value}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\BoletoResponse**](BoletoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **gerarCartaoEmbossingUsingPOST**
> \br.com.conductor.pier.api.v2.model\CartaoEmbossingResponse gerarCartaoEmbossingUsingPOST($id, $cartao_embossing_request)

{{{conta_resource_gerar_cartao_embossing}}}

{{{conta_resource_gerar_cartao_embossing_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcontaApi();
$id = 789; // int | {{{conta_resource_gerar_cartao_embossing_param_id}}}
$cartao_embossing_request = new \br.com.conductor.pier.api.v2.model\CartaoEmbossingRequest(); // \br.com.conductor.pier.api.v2.model\CartaoEmbossingRequest | cartaoEmbossingRequest

try { 
    $result = $api_instance->gerarCartaoEmbossingUsingPOST($id, $cartao_embossing_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcontaApi->gerarCartaoEmbossingUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{conta_resource_gerar_cartao_embossing_param_id}}} | 
 **cartao_embossing_request** | [**\br.com.conductor.pier.api.v2.model\CartaoEmbossingRequest**](\br.com.conductor.pier.api.v2.model\CartaoEmbossingRequest.md)| cartaoEmbossingRequest | 

### Return type

[**\br.com.conductor.pier.api.v2.model\CartaoEmbossingResponse**](CartaoEmbossingResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **gerarCartaoProvisorioUsingPOST**
> \br.com.conductor.pier.api.v2.model\CartaoImpressaoProvisorioResponse gerarCartaoProvisorioUsingPOST($id)

{{{conta_resource_gerar_cartao_provisorio}}}

{{{conta_resource_gerar_cartao_provisorio_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcontaApi();
$id = 789; // int | {{{conta_resource_gerar_cartao_provisorio_param_id_conta}}}

try { 
    $result = $api_instance->gerarCartaoProvisorioUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcontaApi->gerarCartaoProvisorioUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{conta_resource_gerar_cartao_provisorio_param_id_conta}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\CartaoImpressaoProvisorioResponse**](CartaoImpressaoProvisorioResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **gerarCartaoUsingPOST**
> \br.com.conductor.pier.api.v2.model\CartaoImpressaoResponse gerarCartaoUsingPOST($id, $id_pessoa, $id_tipo_plastico)

{{{conta_resource_gerar_cartao}}}

{{{conta_resource_gerar_cartao_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcontaApi();
$id = 789; // int | {{{conta_resource_gerar_cartao_param_id}}}
$id_pessoa = 789; // int | {{{conta_resource_gerar_cartao_param_id_pessoa}}}
$id_tipo_plastico = 789; // int | {{{conta_resource_gerar_cartao_param_id_tipo_plastico}}}

try { 
    $result = $api_instance->gerarCartaoUsingPOST($id, $id_pessoa, $id_tipo_plastico);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcontaApi->gerarCartaoUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{conta_resource_gerar_cartao_param_id}}} | 
 **id_pessoa** | **int**| {{{conta_resource_gerar_cartao_param_id_pessoa}}} | 
 **id_tipo_plastico** | **int**| {{{conta_resource_gerar_cartao_param_id_tipo_plastico}}} | [optional] 

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

{{{conta_resource_gerar_cartao_virtual}}}

{{{conta_resource_gerar_cartao_virtual_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcontaApi();
$id = 789; // int | {{{conta_resource_gerar_cartao_virtual_param_id}}}
$data_validade = "data_validade_example"; // string | {{{conta_resource_gerar_cartao_virtual_param_data_validade}}}

try { 
    $result = $api_instance->gerarCartaoVirtualUsingPOST($id, $data_validade);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcontaApi->gerarCartaoVirtualUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{conta_resource_gerar_cartao_virtual_param_id}}} | 
 **data_validade** | **string**| {{{conta_resource_gerar_cartao_virtual_param_data_validade}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\CartaoImpressaoResponse**](CartaoImpressaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarHistoricoAlteracoesLimitesUsingGET**
> \br.com.conductor.pier.api.v2.model\PageHistoricoEventosResponse listarHistoricoAlteracoesLimitesUsingGET($id, $sort, $page, $limit)

{{{conta_resource_listar_historico_alteracoes_limites}}}

{{{conta_resource_listar_historico_alteracoes_limites_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcontaApi();
$id = 789; // int | {{{conta_resource_listar_historico_alteracoes_limites_param_id}}}
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}

try { 
    $result = $api_instance->listarHistoricoAlteracoesLimitesUsingGET($id, $sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcontaApi->listarHistoricoAlteracoesLimitesUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{conta_resource_listar_historico_alteracoes_limites_param_id}}} | 
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageHistoricoEventosResponse**](PageHistoricoEventosResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarHistoricoAssessoriaUsingGET**
> \br.com.conductor.pier.api.v2.model\PageHistoricoAssessoriaResponse listarHistoricoAssessoriaUsingGET($id, $sort, $page, $limit)

{{{conta_resource_listar_historico_assessoria}}}

{{{conta_resource_listar_historico_assessoria_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcontaApi();
$id = 789; // int | {{{conta_resource_listar_historico_assessoria_param_id}}}
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}

try { 
    $result = $api_instance->listarHistoricoAssessoriaUsingGET($id, $sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcontaApi->listarHistoricoAssessoriaUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{conta_resource_listar_historico_assessoria_param_id}}} | 
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageHistoricoAssessoriaResponse**](PageHistoricoAssessoriaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarHistoricoAtrasosFaturasUsingGET**
> \br.com.conductor.pier.api.v2.model\PageHistoricoAtrasoFaturaResponse listarHistoricoAtrasosFaturasUsingGET($id, $sort, $page, $limit)

{{{conta_resource_listar_historico_atrasos_faturas}}}

{{{conta_resource_listar_historico_atrasos_faturas_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcontaApi();
$id = 789; // int | {{{conta_resource_listar_historico_atrasos_faturas_param_id}}}
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}

try { 
    $result = $api_instance->listarHistoricoAtrasosFaturasUsingGET($id, $sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcontaApi->listarHistoricoAtrasosFaturasUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{conta_resource_listar_historico_atrasos_faturas_param_id}}} | 
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageHistoricoAtrasoFaturaResponse**](PageHistoricoAtrasoFaturaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarNaoProcessadasUsingGET**
> \br.com.conductor.pier.api.v2.model\PageTransacaoNaoProcessadaResponse listarNaoProcessadasUsingGET($id, $sort, $page, $limit, $data_inicio, $data_fim)

{{{transacoes_correntes_resource_listar_nao_processadas}}}

{{{transacoes_correntes_resource_listar_nao_processadas_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcontaApi();
$id = 789; // int | {{{transacoes_correntes_resource_listar_nao_processadas_param_id}}}
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$data_inicio = "data_inicio_example"; // string | {{{transacoes_nao_processadas_request_data_inicio_value}}}
$data_fim = "data_fim_example"; // string | {{{transacoes_nao_processadas_request_data_fim_value}}}

try { 
    $result = $api_instance->listarNaoProcessadasUsingGET($id, $sort, $page, $limit, $data_inicio, $data_fim);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcontaApi->listarNaoProcessadasUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{transacoes_correntes_resource_listar_nao_processadas_param_id}}} | 
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **data_inicio** | **string**| {{{transacoes_nao_processadas_request_data_inicio_value}}} | [optional] 
 **data_fim** | **string**| {{{transacoes_nao_processadas_request_data_fim_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTransacaoNaoProcessadaResponse**](PageTransacaoNaoProcessadaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarProcessadasUsingGET**
> \br.com.conductor.pier.api.v2.model\PageTransacoesCorrentesResponse listarProcessadasUsingGET($id, $sort, $page, $limit, $data_vencimento, $data_inicio, $data_fim, $id_tipo_transacao, $recupera_encargos)

{{{transacoes_correntes_resource_listar_processadas}}}

{{{transacoes_correntes_resource_listar_processadas_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcontaApi();
$id = 789; // int | {{{transacoes_correntes_resource_listar_processadas_param_id}}}
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$data_vencimento = "data_vencimento_example"; // string | {{{transacoes_processadas_request_data_vencimento_value}}}
$data_inicio = "data_inicio_example"; // string | {{{transacoes_processadas_request_data_inicio_value}}}
$data_fim = "data_fim_example"; // string | {{{transacoes_processadas_request_data_fim_value}}}
$id_tipo_transacao = 789; // int | {{{transacoes_processadas_request_tipo_transacao}}}
$recupera_encargos = 56; // int | {{{transacoes_processadas_request_recupera_encargos}}}

try { 
    $result = $api_instance->listarProcessadasUsingGET($id, $sort, $page, $limit, $data_vencimento, $data_inicio, $data_fim, $id_tipo_transacao, $recupera_encargos);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcontaApi->listarProcessadasUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{transacoes_correntes_resource_listar_processadas_param_id}}} | 
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **data_vencimento** | **string**| {{{transacoes_processadas_request_data_vencimento_value}}} | [optional] 
 **data_inicio** | **string**| {{{transacoes_processadas_request_data_inicio_value}}} | [optional] 
 **data_fim** | **string**| {{{transacoes_processadas_request_data_fim_value}}} | [optional] 
 **id_tipo_transacao** | **int**| {{{transacoes_processadas_request_tipo_transacao}}} | [optional] 
 **recupera_encargos** | **int**| {{{transacoes_processadas_request_recupera_encargos}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTransacoesCorrentesResponse**](PageTransacoesCorrentesResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET19**
> \br.com.conductor.pier.api.v2.model\PageContaResponse listarUsingGET19($sort, $page, $limit, $id_produto, $id_origem_comercial, $id_pessoa, $id_status_conta, $dia_vencimento, $melhor_dia_compra, $data_status_conta, $data_cadastro, $data_ultima_alteracao_vencimento)

{{{conta_resource_listar}}}

{{{conta_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcontaApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id_produto = 789; // int | {{{conta_request_id_produto_value}}}
$id_origem_comercial = 789; // int | {{{conta_request_id_origem_comercial_value}}}
$id_pessoa = 789; // int | {{{conta_request_id_pessoa_value}}}
$id_status_conta = 789; // int | {{{conta_request_id_status_conta_value}}}
$dia_vencimento = 56; // int | {{{conta_request_dia_vencimento_value}}}
$melhor_dia_compra = 56; // int | {{{conta_request_melhor_dia_compra_value}}}
$data_status_conta = "data_status_conta_example"; // string | {{{conta_request_data_status_conta_value}}}
$data_cadastro = "data_cadastro_example"; // string | {{{conta_request_data_cadastro_value}}}
$data_ultima_alteracao_vencimento = "data_ultima_alteracao_vencimento_example"; // string | {{{conta_request_data_ultima_alteracao_vencimento_value}}}

try { 
    $result = $api_instance->listarUsingGET19($sort, $page, $limit, $id_produto, $id_origem_comercial, $id_pessoa, $id_status_conta, $dia_vencimento, $melhor_dia_compra, $data_status_conta, $data_cadastro, $data_ultima_alteracao_vencimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcontaApi->listarUsingGET19: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id_produto** | **int**| {{{conta_request_id_produto_value}}} | [optional] 
 **id_origem_comercial** | **int**| {{{conta_request_id_origem_comercial_value}}} | [optional] 
 **id_pessoa** | **int**| {{{conta_request_id_pessoa_value}}} | [optional] 
 **id_status_conta** | **int**| {{{conta_request_id_status_conta_value}}} | [optional] 
 **dia_vencimento** | **int**| {{{conta_request_dia_vencimento_value}}} | [optional] 
 **melhor_dia_compra** | **int**| {{{conta_request_melhor_dia_compra_value}}} | [optional] 
 **data_status_conta** | **string**| {{{conta_request_data_status_conta_value}}} | [optional] 
 **data_cadastro** | **string**| {{{conta_request_data_cadastro_value}}} | [optional] 
 **data_ultima_alteracao_vencimento** | **string**| {{{conta_request_data_ultima_alteracao_vencimento_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageContaResponse**](PageContaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET61**
> \br.com.conductor.pier.api.v2.model\PageTransacaoProcessadaNaoProcessadaResponse listarUsingGET61($id, $sort, $page, $limit, $data_vencimento, $data_inicio, $data_fim, $id_tipo_transacao)

{{{transacoes_correntes_resource_listar_nao_processadas_e_processadas}}}

{{{transacoes_correntes_resource_listar_nao_processadas_e_processadas_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcontaApi();
$id = 789; // int | {{{transacoes_correntes_resource_listar_nao_processadas_param_id}}}
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$data_vencimento = "data_vencimento_example"; // string | {{{transacoes_processadas_request_data_vencimento_value}}}
$data_inicio = "data_inicio_example"; // string | {{{transacoes_processadas_request_data_inicio_value}}}
$data_fim = "data_fim_example"; // string | {{{transacoes_processadas_request_data_fim_value}}}
$id_tipo_transacao = 789; // int | {{{transacoes_processadas_request_tipo_transacao}}}

try { 
    $result = $api_instance->listarUsingGET61($id, $sort, $page, $limit, $data_vencimento, $data_inicio, $data_fim, $id_tipo_transacao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcontaApi->listarUsingGET61: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{transacoes_correntes_resource_listar_nao_processadas_param_id}}} | 
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **data_vencimento** | **string**| {{{transacoes_processadas_request_data_vencimento_value}}} | [optional] 
 **data_inicio** | **string**| {{{transacoes_processadas_request_data_inicio_value}}} | [optional] 
 **data_fim** | **string**| {{{transacoes_processadas_request_data_fim_value}}} | [optional] 
 **id_tipo_transacao** | **int**| {{{transacoes_processadas_request_tipo_transacao}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTransacaoProcessadaNaoProcessadaResponse**](PageTransacaoProcessadaNaoProcessadaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET63**
> \br.com.conductor.pier.api.v2.model\PageTransferenciaResponse listarUsingGET63($id, $sort, $page, $limit, $id_transferencia, $id_conta_origem, $id_conta_destino, $valor_transferencia, $data_transferencia)

{{{transferencia_resource_listar}}}

{{{transferencia_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcontaApi();
$id = 789; // int | {{{transferencia_resource_listar_param_id}}}
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id_transferencia = 789; // int | {{{transferencia_request_id_transferencia_value}}}
$id_conta_origem = 789; // int | {{{transferencia_request_id_conta_origem_value}}}
$id_conta_destino = 789; // int | {{{transferencia_request_id_conta_destino_value}}}
$valor_transferencia = new Number(); // Number | {{{transferencia_request_valor_transferencia_value}}}
$data_transferencia = "data_transferencia_example"; // string | {{{transferencia_request_data_transferencia_value}}}

try { 
    $result = $api_instance->listarUsingGET63($id, $sort, $page, $limit, $id_transferencia, $id_conta_origem, $id_conta_destino, $valor_transferencia, $data_transferencia);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcontaApi->listarUsingGET63: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{transferencia_resource_listar_param_id}}} | 
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id_transferencia** | **int**| {{{transferencia_request_id_transferencia_value}}} | [optional] 
 **id_conta_origem** | **int**| {{{transferencia_request_id_conta_origem_value}}} | [optional] 
 **id_conta_destino** | **int**| {{{transferencia_request_id_conta_destino_value}}} | [optional] 
 **valor_transferencia** | [**Number**](.md)| {{{transferencia_request_valor_transferencia_value}}} | [optional] 
 **data_transferencia** | **string**| {{{transferencia_request_data_transferencia_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTransferenciaResponse**](PageTransferenciaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **reativarUsingPOST1**
> object reativarUsingPOST1($id)

{{{conta_resource_reativar}}}

{{{conta_resource_reativar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcontaApi();
$id = 789; // int | {{{conta_resource_reativar_param_id}}}

try { 
    $result = $api_instance->reativarUsingPOST1($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcontaApi->reativarUsingPOST1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{conta_resource_reativar_param_id}}} | 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST9**
> \br.com.conductor.pier.api.v2.model\ContaResponse salvarUsingPOST9($conta_persist)

{{{conta_resource_salvar}}}

{{{conta_resource_salvar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcontaApi();
$conta_persist = new \br.com.conductor.pier.api.v2.model\ContaPersistValue_(); // \br.com.conductor.pier.api.v2.model\ContaPersistValue_ | contaPersist

try { 
    $result = $api_instance->salvarUsingPOST9($conta_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcontaApi->salvarUsingPOST9: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conta_persist** | [**\br.com.conductor.pier.api.v2.model\ContaPersistValue_**](\br.com.conductor.pier.api.v2.model\ContaPersistValue_.md)| contaPersist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ContaResponse**](ContaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **simularEmprestimoFinanciamentoUsingPOST**
> \br.com.conductor.pier.api.v2.model\EmprestimoPessoalResponse simularEmprestimoFinanciamentoUsingPOST($id, $request)

{{{financiamento_resource_simular_emprestimo_financiamento}}}

{{{financiamento_resource_simular_emprestimo_financiamento_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcontaApi();
$id = 789; // int | {{{financiamento_resource_simular_emprestimo_financiamento_param_id_conta}}}
$request = new \br.com.conductor.pier.api.v2.model\EmprestimoPessoalRequest(); // \br.com.conductor.pier.api.v2.model\EmprestimoPessoalRequest | request

try { 
    $result = $api_instance->simularEmprestimoFinanciamentoUsingPOST($id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcontaApi->simularEmprestimoFinanciamentoUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{financiamento_resource_simular_emprestimo_financiamento_param_id_conta}}} | 
 **request** | [**\br.com.conductor.pier.api.v2.model\EmprestimoPessoalRequest**](\br.com.conductor.pier.api.v2.model\EmprestimoPessoalRequest.md)| request | 

### Return type

[**\br.com.conductor.pier.api.v2.model\EmprestimoPessoalResponse**](EmprestimoPessoalResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **transacoesUsingGET**
> \br.com.conductor.pier.api.v2.model\PageTransacaoResponse transacoesUsingGET($id, $sort, $page, $limit)

{{{conta_resource_transacoes}}}

{{{conta_resource_transacoes_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcontaApi();
$id = 789; // int | {{{conta_resource_transacoes_param_id}}}
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}

try { 
    $result = $api_instance->transacoesUsingGET($id, $sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcontaApi->transacoesUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{conta_resource_transacoes_param_id}}} | 
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTransacaoResponse**](PageTransacaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **transferirUsingPOST1**
> \br.com.conductor.pier.api.v2.model\TransferenciaDetalheResponse transferirUsingPOST1($id, $id_conta_destino, $valor_transferencia)

{{{transferencia_resource_transferir}}}

{{{transferencia_resource_transferir_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcontaApi();
$id = 789; // int | {{{transferencia_resource_transferir_param_id_conta_origem}}}
$id_conta_destino = 789; // int | {{{transferencia_resource_transferir_param_id_conta_destino}}}
$valor_transferencia = new Number(); // Number | {{{transferencia_resource_transferir_param_valor_transferencia}}}

try { 
    $result = $api_instance->transferirUsingPOST1($id, $id_conta_destino, $valor_transferencia);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcontaApi->transferirUsingPOST1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{transferencia_resource_transferir_param_id_conta_origem}}} | 
 **id_conta_destino** | **int**| {{{transferencia_resource_transferir_param_id_conta_destino}}} | 
 **valor_transferencia** | [**Number**](.md)| {{{transferencia_resource_transferir_param_valor_transferencia}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TransferenciaDetalheResponse**](TransferenciaDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

