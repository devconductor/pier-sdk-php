# br.com.conductor.pier.api.v2.invoker\GlobaltagtransferenciabancariaApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**atualizarTaxasJurosContasUsingPUT**](GlobaltagtransferenciabancariaApi.md#atualizarTaxasJurosContasUsingPUT) | **PUT** /api/contas/{id}/taxas-transferencias | {{{transferencia_bancaria_resource_atualizar_taxas_juros_contas}}}
[**atualizarUsingPUT1**](GlobaltagtransferenciabancariaApi.md#atualizarUsingPUT1) | **PUT** /api/contas-bancarias-portador/{id} | {{{conta_bancaria_resource_atualizar}}}
[**cancelarTransferenciaCreditoContaBancariaUsingPOST**](GlobaltagtransferenciabancariaApi.md#cancelarTransferenciaCreditoContaBancariaUsingPOST) | **POST** /api/transferencias-creditos-contas-bancarias/{idTransferencia}/cancelar | {{{transferencia_bancaria_resource_cancelar_transferencia_credito_conta_bancaria}}}
[**confirmarTransferenciaCreditoContaBancariaUsingPOST**](GlobaltagtransferenciabancariaApi.md#confirmarTransferenciaCreditoContaBancariaUsingPOST) | **POST** /api/transferencias-creditos-contas-bancarias/{idTransferencia}/confirmar | {{{transferencia_bancaria_resource_confirmar_transferencia_credito_conta_bancaria}}}
[**consultarTaxasJurosContasUsingGET**](GlobaltagtransferenciabancariaApi.md#consultarTaxasJurosContasUsingGET) | **GET** /api/contas/{id}/taxas-transferencias | {{{transferencia_bancaria_resource_consultar_taxas_juros_contas}}}
[**consultarTransferenciaBancariaUsingGET**](GlobaltagtransferenciabancariaApi.md#consultarTransferenciaBancariaUsingGET) | **GET** /api/transferencias-creditos-contas-bancarias/{idTransferencia} | {{{transferencia_bancaria_resource_consultar_transferencia_bancaria}}}
[**consultarUsingGET13**](GlobaltagtransferenciabancariaApi.md#consultarUsingGET13) | **GET** /api/contas-bancarias-portador/{id} | {{{conta_bancaria_resource_consultar}}}
[**consultarUsingGET48**](GlobaltagtransferenciabancariaApi.md#consultarUsingGET48) | **GET** /api/contas/{id}/transferencias-creditos-contas-bancarias/{id_transferencia} | {{{transferencia_bancaria_resource_consultar}}}
[**listarTransferenciaBancariaUsingGET**](GlobaltagtransferenciabancariaApi.md#listarTransferenciaBancariaUsingGET) | **GET** /api/transferencias-creditos-contas-bancarias | {{{transferencia_bancaria_resource_listar_transferencia_bancaria}}}
[**listarUsingGET16**](GlobaltagtransferenciabancariaApi.md#listarUsingGET16) | **GET** /api/contas-bancarias-portador | {{{conta_bancaria_resource_listar}}}
[**listarUsingGET59**](GlobaltagtransferenciabancariaApi.md#listarUsingGET59) | **GET** /api/contas/{id}/transferencias-creditos-contas-bancarias | {{{transferencia_bancaria_resource_listar}}}
[**salvarTaxasJurosContasUsingPOST**](GlobaltagtransferenciabancariaApi.md#salvarTaxasJurosContasUsingPOST) | **POST** /api/contas/{id}/taxas-transferencias | {{{transferencia_bancaria_resource_salvar_taxas_juros_contas}}}
[**salvarUsingPOST7**](GlobaltagtransferenciabancariaApi.md#salvarUsingPOST7) | **POST** /api/contas-bancarias-portador | {{{conta_bancaria_resource_salvar}}}
[**simularTransferenciaBancariaUsingPOST**](GlobaltagtransferenciabancariaApi.md#simularTransferenciaBancariaUsingPOST) | **POST** /api/simular-transferencias-creditos-contas-bancarias | {{{transferencia_bancaria_resource_simular_transferencia_bancaria}}}
[**transferenciaCreditoContaBancariaUsingPOST**](GlobaltagtransferenciabancariaApi.md#transferenciaCreditoContaBancariaUsingPOST) | **POST** /api/transferencias-creditos-contas-bancarias | {{{transferencia_bancaria_resource_transferencia_credito_conta_bancaria}}}
[**transferirUsingPOST**](GlobaltagtransferenciabancariaApi.md#transferirUsingPOST) | **POST** /api/contas/{id}/transferencias-creditos-contas-bancarias | {{{transferencia_bancaria_resource_transferir}}}


# **atualizarTaxasJurosContasUsingPUT**
> \br.com.conductor.pier.api.v2.model\TaxaJurosContaResponse atualizarTaxasJurosContasUsingPUT($id, $update)

{{{transferencia_bancaria_resource_atualizar_taxas_juros_contas}}}

{{{transferencia_bancaria_resource_atualizar_taxas_juros_contas_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagtransferenciabancariaApi();
$id = 789; // int | {{{transferencia_bancaria_resource_salvar_taxas_juros_contas_param_id}}}
$update = new \br.com.conductor.pier.api.v2.model\TaxaJurosContaPersistValue_(); // \br.com.conductor.pier.api.v2.model\TaxaJurosContaPersistValue_ | update

try { 
    $result = $api_instance->atualizarTaxasJurosContasUsingPUT($id, $update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagtransferenciabancariaApi->atualizarTaxasJurosContasUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{transferencia_bancaria_resource_salvar_taxas_juros_contas_param_id}}} | 
 **update** | [**\br.com.conductor.pier.api.v2.model\TaxaJurosContaPersistValue_**](\br.com.conductor.pier.api.v2.model\TaxaJurosContaPersistValue_.md)| update | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TaxaJurosContaResponse**](TaxaJurosContaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **atualizarUsingPUT1**
> \br.com.conductor.pier.api.v2.model\ContaBancariaPortadorResponse atualizarUsingPUT1($id, $update)

{{{conta_bancaria_resource_atualizar}}}

{{{conta_bancaria_resource_atualizar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagtransferenciabancariaApi();
$id = 789; // int | {{{conta_bancaria_resource_atualizar_param_id}}}
$update = new \br.com.conductor.pier.api.v2.model\ContaBancariaPortadorUpdateValue_(); // \br.com.conductor.pier.api.v2.model\ContaBancariaPortadorUpdateValue_ | update

try { 
    $result = $api_instance->atualizarUsingPUT1($id, $update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagtransferenciabancariaApi->atualizarUsingPUT1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{conta_bancaria_resource_atualizar_param_id}}} | 
 **update** | [**\br.com.conductor.pier.api.v2.model\ContaBancariaPortadorUpdateValue_**](\br.com.conductor.pier.api.v2.model\ContaBancariaPortadorUpdateValue_.md)| update | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ContaBancariaPortadorResponse**](ContaBancariaPortadorResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **cancelarTransferenciaCreditoContaBancariaUsingPOST**
> string cancelarTransferenciaCreditoContaBancariaUsingPOST($id_transferencia)

{{{transferencia_bancaria_resource_cancelar_transferencia_credito_conta_bancaria}}}

{{{transferencia_bancaria_resource_cancelar_transferencia_credito_conta_bancaria_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagtransferenciabancariaApi();
$id_transferencia = 789; // int | {{{transferencia_bancaria_resource_cancelar_transferencia_credito_conta_bancaria_param_id_transferencia}}}

try { 
    $result = $api_instance->cancelarTransferenciaCreditoContaBancariaUsingPOST($id_transferencia);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagtransferenciabancariaApi->cancelarTransferenciaCreditoContaBancariaUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_transferencia** | **int**| {{{transferencia_bancaria_resource_cancelar_transferencia_credito_conta_bancaria_param_id_transferencia}}} | 

### Return type

**string**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **confirmarTransferenciaCreditoContaBancariaUsingPOST**
> string confirmarTransferenciaCreditoContaBancariaUsingPOST($id_transferencia)

{{{transferencia_bancaria_resource_confirmar_transferencia_credito_conta_bancaria}}}

{{{transferencia_bancaria_resource_confirmar_transferencia_credito_conta_bancaria_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagtransferenciabancariaApi();
$id_transferencia = 789; // int | {{{transferencia_bancaria_resource_confirmar_transferencia_credito_conta_bancaria_param_id_transferencia}}}

try { 
    $result = $api_instance->confirmarTransferenciaCreditoContaBancariaUsingPOST($id_transferencia);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagtransferenciabancariaApi->confirmarTransferenciaCreditoContaBancariaUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_transferencia** | **int**| {{{transferencia_bancaria_resource_confirmar_transferencia_credito_conta_bancaria_param_id_transferencia}}} | 

### Return type

**string**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarTaxasJurosContasUsingGET**
> \br.com.conductor.pier.api.v2.model\TaxaJurosContaResponse consultarTaxasJurosContasUsingGET($id, $numero_meses_carencia)

{{{transferencia_bancaria_resource_consultar_taxas_juros_contas}}}

{{{transferencia_bancaria_resource_consultar_taxas_juros_contas_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagtransferenciabancariaApi();
$id = 789; // int | {{{transferencia_bancaria_resource_salvar_taxas_juros_contas_param_id}}}
$numero_meses_carencia = 56; // int | numeroMesesCarencia

try { 
    $result = $api_instance->consultarTaxasJurosContasUsingGET($id, $numero_meses_carencia);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagtransferenciabancariaApi->consultarTaxasJurosContasUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{transferencia_bancaria_resource_salvar_taxas_juros_contas_param_id}}} | 
 **numero_meses_carencia** | **int**| numeroMesesCarencia | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TaxaJurosContaResponse**](TaxaJurosContaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarTransferenciaBancariaUsingGET**
> \br.com.conductor.pier.api.v2.model\TransferenciaCreditoContaBancariaResponse consultarTransferenciaBancariaUsingGET($id_transferencia)

{{{transferencia_bancaria_resource_consultar_transferencia_bancaria}}}

{{{transferencia_bancaria_resource_consultar_transferencia_bancaria_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagtransferenciabancariaApi();
$id_transferencia = 789; // int | {{{transferencia_bancaria_resource_consultar_transferencia_bancaria_param_id_transferencia}}}

try { 
    $result = $api_instance->consultarTransferenciaBancariaUsingGET($id_transferencia);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagtransferenciabancariaApi->consultarTransferenciaBancariaUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_transferencia** | **int**| {{{transferencia_bancaria_resource_consultar_transferencia_bancaria_param_id_transferencia}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TransferenciaCreditoContaBancariaResponse**](TransferenciaCreditoContaBancariaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET13**
> \br.com.conductor.pier.api.v2.model\ContaBancariaPortadorResponse consultarUsingGET13($id)

{{{conta_bancaria_resource_consultar}}}

{{{conta_bancaria_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagtransferenciabancariaApi();
$id = 789; // int | {{{conta_bancaria_resource_consultar_param_id}}}

try { 
    $result = $api_instance->consultarUsingGET13($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagtransferenciabancariaApi->consultarUsingGET13: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{conta_bancaria_resource_consultar_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ContaBancariaPortadorResponse**](ContaBancariaPortadorResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET48**
> \br.com.conductor.pier.api.v2.model\TransferenciaBancariaResponse consultarUsingGET48($id, $id_transferencia, $id_conta_bancaria_destino)

{{{transferencia_bancaria_resource_consultar}}}

{{{transferencia_bancaria_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagtransferenciabancariaApi();
$id = 789; // int | {{{transferencia_bancaria_resource_consultar_param_id}}}
$id_transferencia = 789; // int | {{{transferencia_bancaria_resource_consultar_param_id_evento}}}
$id_conta_bancaria_destino = 789; // int | {{{transferencia_bancaria_resource_consultar_param_id_conta_portador}}}

try { 
    $result = $api_instance->consultarUsingGET48($id, $id_transferencia, $id_conta_bancaria_destino);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagtransferenciabancariaApi->consultarUsingGET48: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{transferencia_bancaria_resource_consultar_param_id}}} | 
 **id_transferencia** | **int**| {{{transferencia_bancaria_resource_consultar_param_id_evento}}} | 
 **id_conta_bancaria_destino** | **int**| {{{transferencia_bancaria_resource_consultar_param_id_conta_portador}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\TransferenciaBancariaResponse**](TransferenciaBancariaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarTransferenciaBancariaUsingGET**
> \br.com.conductor.pier.api.v2.model\PageTransferenciaCreditoContaBancariaResponse listarTransferenciaBancariaUsingGET($sort, $page, $limit, $id_conta, $data_solicitacao_inicial, $data_solicitacao_final, $status)

{{{transferencia_bancaria_resource_listar_transferencia_bancaria}}}

{{{transferencia_bancaria_resource_listar_transferencia_bancaria_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagtransferenciabancariaApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id_conta = 789; // int | {{{transferencia_credito_conta_bancaria_request_id_conta_value}}}
$data_solicitacao_inicial = "data_solicitacao_inicial_example"; // string | {{{transferencia_credito_conta_bancaria_request_data_solicitacao_inicial_value}}}
$data_solicitacao_final = "data_solicitacao_final_example"; // string | {{{transferencia_credito_conta_bancaria_request_data_solicitacao_final_value}}}
$status = 56; // int | {{{transferencia_credito_conta_bancaria_request_status_value}}}

try { 
    $result = $api_instance->listarTransferenciaBancariaUsingGET($sort, $page, $limit, $id_conta, $data_solicitacao_inicial, $data_solicitacao_final, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagtransferenciabancariaApi->listarTransferenciaBancariaUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id_conta** | **int**| {{{transferencia_credito_conta_bancaria_request_id_conta_value}}} | [optional] 
 **data_solicitacao_inicial** | **string**| {{{transferencia_credito_conta_bancaria_request_data_solicitacao_inicial_value}}} | [optional] 
 **data_solicitacao_final** | **string**| {{{transferencia_credito_conta_bancaria_request_data_solicitacao_final_value}}} | [optional] 
 **status** | **int**| {{{transferencia_credito_conta_bancaria_request_status_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTransferenciaCreditoContaBancariaResponse**](PageTransferenciaCreditoContaBancariaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET16**
> \br.com.conductor.pier.api.v2.model\PageContaBancariaPortadorResponse listarUsingGET16($id_conta, $nome_agencia, $banco, $numero_agencia, $numero_conta, $flag_ativo, $flag_conta_origem_doc, $id_pessoa_fisica, $favorecido, $numero_receira_federal, $sort, $page, $limit)

{{{conta_bancaria_resource_listar}}}

{{{conta_bancaria_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagtransferenciabancariaApi();
$id_conta = 789; // int | {{{conta_bancaria_portador_listar_request_id_conta_value}}}
$nome_agencia = "nome_agencia_example"; // string | {{{conta_bancaria_portador_listar_request_nome_agencia_value}}}
$banco = 789; // int | {{{conta_bancaria_portador_listar_request_codigo_banco_value}}}
$numero_agencia = "numero_agencia_example"; // string | {{{conta_bancaria_portador_listar_request_numero_agencia_value}}}
$numero_conta = "numero_conta_example"; // string | {{{conta_bancaria_portador_listar_request_numero_conta_value}}}
$flag_ativo = 56; // int | {{{conta_bancaria_portador_listar_request_flag_ativo_value}}}
$flag_conta_origem_doc = 56; // int | {{{conta_bancaria_portador_listar_request_flag_conta_origem_doc_value}}}
$id_pessoa_fisica = 789; // int | {{{conta_bancaria_portador_listar_request_id_pessoa_fisica_value}}}
$favorecido = "favorecido_example"; // string | {{{conta_bancaria_portador_listar_request_favorecido_value}}}
$numero_receira_federal = "numero_receira_federal_example"; // string | {{{conta_bancaria_portador_listar_request_numero_receira_federal_value}}}
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}

try { 
    $result = $api_instance->listarUsingGET16($id_conta, $nome_agencia, $banco, $numero_agencia, $numero_conta, $flag_ativo, $flag_conta_origem_doc, $id_pessoa_fisica, $favorecido, $numero_receira_federal, $sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagtransferenciabancariaApi->listarUsingGET16: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_conta** | **int**| {{{conta_bancaria_portador_listar_request_id_conta_value}}} | [optional] 
 **nome_agencia** | **string**| {{{conta_bancaria_portador_listar_request_nome_agencia_value}}} | [optional] 
 **banco** | **int**| {{{conta_bancaria_portador_listar_request_codigo_banco_value}}} | [optional] 
 **numero_agencia** | **string**| {{{conta_bancaria_portador_listar_request_numero_agencia_value}}} | [optional] 
 **numero_conta** | **string**| {{{conta_bancaria_portador_listar_request_numero_conta_value}}} | [optional] 
 **flag_ativo** | **int**| {{{conta_bancaria_portador_listar_request_flag_ativo_value}}} | [optional] 
 **flag_conta_origem_doc** | **int**| {{{conta_bancaria_portador_listar_request_flag_conta_origem_doc_value}}} | [optional] 
 **id_pessoa_fisica** | **int**| {{{conta_bancaria_portador_listar_request_id_pessoa_fisica_value}}} | [optional] 
 **favorecido** | **string**| {{{conta_bancaria_portador_listar_request_favorecido_value}}} | [optional] 
 **numero_receira_federal** | **string**| {{{conta_bancaria_portador_listar_request_numero_receira_federal_value}}} | [optional] 
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageContaBancariaPortadorResponse**](PageContaBancariaPortadorResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET59**
> \br.com.conductor.pier.api.v2.model\PageTransferenciaBancariaResponse listarUsingGET59($id, $id_conta_bancaria_destino, $sort, $page, $limit)

{{{transferencia_bancaria_resource_listar}}}

{{{transferencia_bancaria_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagtransferenciabancariaApi();
$id = 789; // int | {{{transferencia_bancaria_resource_listar_param_id}}}
$id_conta_bancaria_destino = 789; // int | {{{transferencia_bancaria_resource_listar_param_id_conta_portador}}}
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}

try { 
    $result = $api_instance->listarUsingGET59($id, $id_conta_bancaria_destino, $sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagtransferenciabancariaApi->listarUsingGET59: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{transferencia_bancaria_resource_listar_param_id}}} | 
 **id_conta_bancaria_destino** | **int**| {{{transferencia_bancaria_resource_listar_param_id_conta_portador}}} | [optional] 
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTransferenciaBancariaResponse**](PageTransferenciaBancariaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarTaxasJurosContasUsingPOST**
> \br.com.conductor.pier.api.v2.model\TaxaJurosContaResponse salvarTaxasJurosContasUsingPOST($id, $persist)

{{{transferencia_bancaria_resource_salvar_taxas_juros_contas}}}

{{{transferencia_bancaria_resource_salvar_taxas_juros_contas_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagtransferenciabancariaApi();
$id = 789; // int | {{{transferencia_bancaria_resource_salvar_taxas_juros_contas_param_id}}}
$persist = new \br.com.conductor.pier.api.v2.model\TaxaJurosContaPersistValue_(); // \br.com.conductor.pier.api.v2.model\TaxaJurosContaPersistValue_ | persist

try { 
    $result = $api_instance->salvarTaxasJurosContasUsingPOST($id, $persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagtransferenciabancariaApi->salvarTaxasJurosContasUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{transferencia_bancaria_resource_salvar_taxas_juros_contas_param_id}}} | 
 **persist** | [**\br.com.conductor.pier.api.v2.model\TaxaJurosContaPersistValue_**](\br.com.conductor.pier.api.v2.model\TaxaJurosContaPersistValue_.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TaxaJurosContaResponse**](TaxaJurosContaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST7**
> \br.com.conductor.pier.api.v2.model\ContaBancariaPortadorResponse salvarUsingPOST7($persist)

{{{conta_bancaria_resource_salvar}}}

{{{conta_bancaria_resource_salvar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagtransferenciabancariaApi();
$persist = new \br.com.conductor.pier.api.v2.model\ContaBancariaPortadorPersistValue_(); // \br.com.conductor.pier.api.v2.model\ContaBancariaPortadorPersistValue_ | persist

try { 
    $result = $api_instance->salvarUsingPOST7($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagtransferenciabancariaApi->salvarUsingPOST7: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **persist** | [**\br.com.conductor.pier.api.v2.model\ContaBancariaPortadorPersistValue_**](\br.com.conductor.pier.api.v2.model\ContaBancariaPortadorPersistValue_.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ContaBancariaPortadorResponse**](ContaBancariaPortadorResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **simularTransferenciaBancariaUsingPOST**
> \br.com.conductor.pier.api.v2.model\PlanoParcelamentoTransferenciaCreditoContaBancariaResponse simularTransferenciaBancariaUsingPOST($request)

{{{transferencia_bancaria_resource_simular_transferencia_bancaria}}}

{{{transferencia_bancaria_resource_simular_transferencia_bancaria_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagtransferenciabancariaApi();
$request = new \br.com.conductor.pier.api.v2.model\PlanoParcelamentoTransferenciaCreditoContaBancariaRequest(); // \br.com.conductor.pier.api.v2.model\PlanoParcelamentoTransferenciaCreditoContaBancariaRequest | request

try { 
    $result = $api_instance->simularTransferenciaBancariaUsingPOST($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagtransferenciabancariaApi->simularTransferenciaBancariaUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\br.com.conductor.pier.api.v2.model\PlanoParcelamentoTransferenciaCreditoContaBancariaRequest**](\br.com.conductor.pier.api.v2.model\PlanoParcelamentoTransferenciaCreditoContaBancariaRequest.md)| request | 

### Return type

[**\br.com.conductor.pier.api.v2.model\PlanoParcelamentoTransferenciaCreditoContaBancariaResponse**](PlanoParcelamentoTransferenciaCreditoContaBancariaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **transferenciaCreditoContaBancariaUsingPOST**
> \br.com.conductor.pier.api.v2.model\TransferenciaCreditoContaBancariaResponse transferenciaCreditoContaBancariaUsingPOST($persist)

{{{transferencia_bancaria_resource_transferencia_credito_conta_bancaria}}}

{{{transferencia_bancaria_resource_transferencia_credito_conta_bancaria_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagtransferenciabancariaApi();
$persist = new \br.com.conductor.pier.api.v2.model\TransferenciaCreditoContaBancariaPersistValue_(); // \br.com.conductor.pier.api.v2.model\TransferenciaCreditoContaBancariaPersistValue_ | persist

try { 
    $result = $api_instance->transferenciaCreditoContaBancariaUsingPOST($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagtransferenciabancariaApi->transferenciaCreditoContaBancariaUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **persist** | [**\br.com.conductor.pier.api.v2.model\TransferenciaCreditoContaBancariaPersistValue_**](\br.com.conductor.pier.api.v2.model\TransferenciaCreditoContaBancariaPersistValue_.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TransferenciaCreditoContaBancariaResponse**](TransferenciaCreditoContaBancariaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **transferirUsingPOST**
> \br.com.conductor.pier.api.v2.model\TransferenciaBancariaResponse transferirUsingPOST($id, $transferencia_bancaria_persist)

{{{transferencia_bancaria_resource_transferir}}}

{{{transferencia_bancaria_resource_transferir_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagtransferenciabancariaApi();
$id = 789; // int | {{{transferencia_bancaria_resource_transferir_param_id}}}
$transferencia_bancaria_persist = new \br.com.conductor.pier.api.v2.model\TransferenciaBancariaPersistValue_(); // \br.com.conductor.pier.api.v2.model\TransferenciaBancariaPersistValue_ | transferenciaBancariaPersist

try { 
    $result = $api_instance->transferirUsingPOST($id, $transferencia_bancaria_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagtransferenciabancariaApi->transferirUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{transferencia_bancaria_resource_transferir_param_id}}} | 
 **transferencia_bancaria_persist** | [**\br.com.conductor.pier.api.v2.model\TransferenciaBancariaPersistValue_**](\br.com.conductor.pier.api.v2.model\TransferenciaBancariaPersistValue_.md)| transferenciaBancariaPersist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TransferenciaBancariaResponse**](TransferenciaBancariaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

