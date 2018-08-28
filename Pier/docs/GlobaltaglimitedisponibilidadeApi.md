# br.com.conductor.pier.api.v2.invoker\GlobaltaglimitedisponibilidadeApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarUsingPUT9**](GlobaltaglimitedisponibilidadeApi.md#alterarUsingPUT9) | **PUT** /api/limites-disponibilidades | {{{limite_disponibilidade_resource_alterar}}}
[**consultarUsingGET25**](GlobaltaglimitedisponibilidadeApi.md#consultarUsingGET25) | **GET** /api/limites-disponibilidades | {{{limite_disponibilidade_resource_consultar}}}
[**sensibilizarSaldoDisponivelGlobalUsingPOST**](GlobaltaglimitedisponibilidadeApi.md#sensibilizarSaldoDisponivelGlobalUsingPOST) | **POST** /api/contas/{id}/limites-disponibilidades/sensibilizar-saldo-disponivel-global | {{{limite_disponibilidade_resource_sensibilizar_credito_disponivel}}}


# **alterarUsingPUT9**
> \br.com.conductor.pier.api.v2.model\LimiteDisponibilidadeResponse alterarUsingPUT9($id_conta, $limite_global, $limite_compra, $limite_parcelado, $limite_parcelas, $limite_saque_global, $limite_saque_periodo, $limite_consignado, $limite_internacional_compra, $limite_internacional_parcelado, $limite_internacional_parcelas, $limite_internacional_saque_global, $limite_internacional_saque_periodo, $limite_maximo)

{{{limite_disponibilidade_resource_alterar}}}

{{{limite_disponibilidade_resource_alterar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltaglimitedisponibilidadeApi();
$id_conta = 789; // int | {{{limite_disponibilidade_update_id_conta_value}}}
$limite_global = new Number(); // Number | {{{limite_disponibilidade_persist_limite_global_value}}}
$limite_compra = new Number(); // Number | {{{limite_disponibilidade_persist_limite_compra_value}}}
$limite_parcelado = new Number(); // Number | {{{limite_disponibilidade_persist_limite_parcelado_value}}}
$limite_parcelas = new Number(); // Number | {{{limite_disponibilidade_persist_limite_parcelas_value}}}
$limite_saque_global = new Number(); // Number | {{{limite_disponibilidade_persist_limite_saque_global_value}}}
$limite_saque_periodo = new Number(); // Number | {{{limite_disponibilidade_persist_limite_saque_periodo_value}}}
$limite_consignado = new Number(); // Number | {{{limite_disponibilidade_persist_limite_consignado_value}}}
$limite_internacional_compra = new Number(); // Number | {{{limite_disponibilidade_persist_limite_internacional_compra_value}}}
$limite_internacional_parcelado = new Number(); // Number | {{{limite_disponibilidade_persist_limite_internacional_parcelado_value}}}
$limite_internacional_parcelas = new Number(); // Number | {{{limite_disponibilidade_persist_limite_internacional_parcelas_value}}}
$limite_internacional_saque_global = new Number(); // Number | {{{limite_disponibilidade_persist_limite_internacional_saque_global_value}}}
$limite_internacional_saque_periodo = new Number(); // Number | {{{limite_disponibilidade_persist_limite_internacional_saque_periodo_value}}}
$limite_maximo = new Number(); // Number | {{{limite_disponibilidade_persist_limite_maximo_value}}}

try { 
    $result = $api_instance->alterarUsingPUT9($id_conta, $limite_global, $limite_compra, $limite_parcelado, $limite_parcelas, $limite_saque_global, $limite_saque_periodo, $limite_consignado, $limite_internacional_compra, $limite_internacional_parcelado, $limite_internacional_parcelas, $limite_internacional_saque_global, $limite_internacional_saque_periodo, $limite_maximo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltaglimitedisponibilidadeApi->alterarUsingPUT9: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_conta** | **int**| {{{limite_disponibilidade_update_id_conta_value}}} | 
 **limite_global** | [**Number**](.md)| {{{limite_disponibilidade_persist_limite_global_value}}} | [optional] 
 **limite_compra** | [**Number**](.md)| {{{limite_disponibilidade_persist_limite_compra_value}}} | [optional] 
 **limite_parcelado** | [**Number**](.md)| {{{limite_disponibilidade_persist_limite_parcelado_value}}} | [optional] 
 **limite_parcelas** | [**Number**](.md)| {{{limite_disponibilidade_persist_limite_parcelas_value}}} | [optional] 
 **limite_saque_global** | [**Number**](.md)| {{{limite_disponibilidade_persist_limite_saque_global_value}}} | [optional] 
 **limite_saque_periodo** | [**Number**](.md)| {{{limite_disponibilidade_persist_limite_saque_periodo_value}}} | [optional] 
 **limite_consignado** | [**Number**](.md)| {{{limite_disponibilidade_persist_limite_consignado_value}}} | [optional] 
 **limite_internacional_compra** | [**Number**](.md)| {{{limite_disponibilidade_persist_limite_internacional_compra_value}}} | [optional] 
 **limite_internacional_parcelado** | [**Number**](.md)| {{{limite_disponibilidade_persist_limite_internacional_parcelado_value}}} | [optional] 
 **limite_internacional_parcelas** | [**Number**](.md)| {{{limite_disponibilidade_persist_limite_internacional_parcelas_value}}} | [optional] 
 **limite_internacional_saque_global** | [**Number**](.md)| {{{limite_disponibilidade_persist_limite_internacional_saque_global_value}}} | [optional] 
 **limite_internacional_saque_periodo** | [**Number**](.md)| {{{limite_disponibilidade_persist_limite_internacional_saque_periodo_value}}} | [optional] 
 **limite_maximo** | [**Number**](.md)| {{{limite_disponibilidade_persist_limite_maximo_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\LimiteDisponibilidadeResponse**](LimiteDisponibilidadeResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET25**
> \br.com.conductor.pier.api.v2.model\LimiteDisponibilidadeResponse consultarUsingGET25($id_conta)

{{{limite_disponibilidade_resource_consultar}}}

{{{limite_disponibilidade_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltaglimitedisponibilidadeApi();
$id_conta = 789; // int | {{{limite_disponibilidade_resource_consultar_param_id_conta}}}

try { 
    $result = $api_instance->consultarUsingGET25($id_conta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltaglimitedisponibilidadeApi->consultarUsingGET25: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_conta** | **int**| {{{limite_disponibilidade_resource_consultar_param_id_conta}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\LimiteDisponibilidadeResponse**](LimiteDisponibilidadeResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **sensibilizarSaldoDisponivelGlobalUsingPOST**
> \br.com.conductor.pier.api.v2.model\LimiteDisponibilidadeResponse sensibilizarSaldoDisponivelGlobalUsingPOST($id, $sensibilizar_saldo_global)

{{{limite_disponibilidade_resource_sensibilizar_credito_disponivel}}}

{{{limite_disponibilidade_resource_sensibilizar_credito_disponivel_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltaglimitedisponibilidadeApi();
$id = 789; // int | {{{sensibilizar_saldo_global_param_id}}}
$sensibilizar_saldo_global = new \br.com.conductor.pier.api.v2.model\SensibilizarSaldoGlobalUpdateValue_(); // \br.com.conductor.pier.api.v2.model\SensibilizarSaldoGlobalUpdateValue_ | sensibilizarSaldoGlobal

try { 
    $result = $api_instance->sensibilizarSaldoDisponivelGlobalUsingPOST($id, $sensibilizar_saldo_global);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltaglimitedisponibilidadeApi->sensibilizarSaldoDisponivelGlobalUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{sensibilizar_saldo_global_param_id}}} | 
 **sensibilizar_saldo_global** | [**\br.com.conductor.pier.api.v2.model\SensibilizarSaldoGlobalUpdateValue_**](\br.com.conductor.pier.api.v2.model\SensibilizarSaldoGlobalUpdateValue_.md)| sensibilizarSaldoGlobal | 

### Return type

[**\br.com.conductor.pier.api.v2.model\LimiteDisponibilidadeResponse**](LimiteDisponibilidadeResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

