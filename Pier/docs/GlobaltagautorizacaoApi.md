# br.com.conductor.pier.api.v2.invoker\GlobaltagautorizacaoApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**autorizarPorContaUsingPOST**](GlobaltagautorizacaoApi.md#autorizarPorContaUsingPOST) | **POST** /api/contas/{id}/autorizar-transacao | {{{transacao_on_us_resource_autorizar_por_conta}}}
[**autorizarUsingPOST**](GlobaltagautorizacaoApi.md#autorizarUsingPOST) | **POST** /api/autorizar-transacao | {{{transacao_on_us_resource_autorizar}}}
[**autorizarUsingPOST1**](GlobaltagautorizacaoApi.md#autorizarUsingPOST1) | **POST** /api/cartoes/{id}/autorizar-transacao | {{{transacao_on_us_resource_autorizar}}}
[**cancelarPorIdContaUsingPOST**](GlobaltagautorizacaoApi.md#cancelarPorIdContaUsingPOST) | **POST** /api/contas/{id}/cancelar-transacao | {{{transacao_on_us_resource_cancelar_por_id_conta}}}
[**cancelarUsingPOST2**](GlobaltagautorizacaoApi.md#cancelarUsingPOST2) | **POST** /api/cancelar-transacao | {{{transacao_on_us_resource_cancelar}}}
[**cancelarUsingPOST3**](GlobaltagautorizacaoApi.md#cancelarUsingPOST3) | **POST** /api/cartoes/{id}/cancelar-transacao | {{{transacao_on_us_resource_cancelar}}}
[**listarCodigosProcessamentoAutorizacaoUsingGET**](GlobaltagautorizacaoApi.md#listarCodigosProcessamentoAutorizacaoUsingGET) | **GET** /api/consultar-codigos-processamento-autorizacao | {{{enum_resource_listar_codigos_processamento_autorizacao}}}
[**simularUsingPOST**](GlobaltagautorizacaoApi.md#simularUsingPOST) | **POST** /api/simular-transacao | {{{transacao_on_us_resource_simular}}}


# **autorizarPorContaUsingPOST**
> \br.com.conductor.pier.api.v2.model\TransacaoOnUsResponse autorizarPorContaUsingPOST($id, $transacao_on_us_por_id_cartao_request)

{{{transacao_on_us_resource_autorizar_por_conta}}}

{{{transacao_on_us_resource_autorizar_por_conta_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagautorizacaoApi();
$id = 789; // int | {{{transacao_on_us_resource_autorizar_por_conta_param_id_conta}}}
$transacao_on_us_por_id_cartao_request = new \br.com.conductor.pier.api.v2.model\TransacaoOnUsPorIdCartaoRequest(); // \br.com.conductor.pier.api.v2.model\TransacaoOnUsPorIdCartaoRequest | transacaoOnUsPorIdCartaoRequest

try { 
    $result = $api_instance->autorizarPorContaUsingPOST($id, $transacao_on_us_por_id_cartao_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagautorizacaoApi->autorizarPorContaUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{transacao_on_us_resource_autorizar_por_conta_param_id_conta}}} | 
 **transacao_on_us_por_id_cartao_request** | [**\br.com.conductor.pier.api.v2.model\TransacaoOnUsPorIdCartaoRequest**](\br.com.conductor.pier.api.v2.model\TransacaoOnUsPorIdCartaoRequest.md)| transacaoOnUsPorIdCartaoRequest | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TransacaoOnUsResponse**](TransacaoOnUsResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **autorizarUsingPOST**
> \br.com.conductor.pier.api.v2.model\TransacaoOnUsResponse autorizarUsingPOST($autorizacao_on_us_request)

{{{transacao_on_us_resource_autorizar}}}

{{{transacao_on_us_resource_autorizar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagautorizacaoApi();
$autorizacao_on_us_request = new \br.com.conductor.pier.api.v2.model\AutorizacaoOnUsRequest(); // \br.com.conductor.pier.api.v2.model\AutorizacaoOnUsRequest | autorizacaoOnUsRequest

try { 
    $result = $api_instance->autorizarUsingPOST($autorizacao_on_us_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagautorizacaoApi->autorizarUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **autorizacao_on_us_request** | [**\br.com.conductor.pier.api.v2.model\AutorizacaoOnUsRequest**](\br.com.conductor.pier.api.v2.model\AutorizacaoOnUsRequest.md)| autorizacaoOnUsRequest | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TransacaoOnUsResponse**](TransacaoOnUsResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **autorizarUsingPOST1**
> \br.com.conductor.pier.api.v2.model\TransacaoOnUsResponse autorizarUsingPOST1($id, $transacao_on_us_por_id_cartao_request)

{{{transacao_on_us_resource_autorizar}}}

{{{transacao_on_us_resource_autorizar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagautorizacaoApi();
$id = 789; // int | {{{transacao_on_us_resource_autorizar_param_id_cartao}}}
$transacao_on_us_por_id_cartao_request = new \br.com.conductor.pier.api.v2.model\TransacaoOnUsPorIdCartaoRequest(); // \br.com.conductor.pier.api.v2.model\TransacaoOnUsPorIdCartaoRequest | transacaoOnUsPorIdCartaoRequest

try { 
    $result = $api_instance->autorizarUsingPOST1($id, $transacao_on_us_por_id_cartao_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagautorizacaoApi->autorizarUsingPOST1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{transacao_on_us_resource_autorizar_param_id_cartao}}} | 
 **transacao_on_us_por_id_cartao_request** | [**\br.com.conductor.pier.api.v2.model\TransacaoOnUsPorIdCartaoRequest**](\br.com.conductor.pier.api.v2.model\TransacaoOnUsPorIdCartaoRequest.md)| transacaoOnUsPorIdCartaoRequest | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TransacaoOnUsResponse**](TransacaoOnUsResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **cancelarPorIdContaUsingPOST**
> \br.com.conductor.pier.api.v2.model\TransacaoOnUsResponse cancelarPorIdContaUsingPOST($id, $cancelamento_request)

{{{transacao_on_us_resource_cancelar_por_id_conta}}}

{{{transacao_on_us_resource_cancelar_por_id_conta_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagautorizacaoApi();
$id = 789; // int | {{{transacao_on_us_resource_cancelar_por_id_conta_param_id_conta}}}
$cancelamento_request = new \br.com.conductor.pier.api.v2.model\CancelamentoTransacaoPorIdCartaoRequest(); // \br.com.conductor.pier.api.v2.model\CancelamentoTransacaoPorIdCartaoRequest | cancelamentoRequest

try { 
    $result = $api_instance->cancelarPorIdContaUsingPOST($id, $cancelamento_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagautorizacaoApi->cancelarPorIdContaUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{transacao_on_us_resource_cancelar_por_id_conta_param_id_conta}}} | 
 **cancelamento_request** | [**\br.com.conductor.pier.api.v2.model\CancelamentoTransacaoPorIdCartaoRequest**](\br.com.conductor.pier.api.v2.model\CancelamentoTransacaoPorIdCartaoRequest.md)| cancelamentoRequest | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TransacaoOnUsResponse**](TransacaoOnUsResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **cancelarUsingPOST2**
> \br.com.conductor.pier.api.v2.model\TransacaoOnUsResponse cancelarUsingPOST2($cancelamento_request)

{{{transacao_on_us_resource_cancelar}}}

{{{transacao_on_us_resource_cancelar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagautorizacaoApi();
$cancelamento_request = new \br.com.conductor.pier.api.v2.model\CancelamentoTransacaoOnUsRequest(); // \br.com.conductor.pier.api.v2.model\CancelamentoTransacaoOnUsRequest | cancelamentoRequest

try { 
    $result = $api_instance->cancelarUsingPOST2($cancelamento_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagautorizacaoApi->cancelarUsingPOST2: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cancelamento_request** | [**\br.com.conductor.pier.api.v2.model\CancelamentoTransacaoOnUsRequest**](\br.com.conductor.pier.api.v2.model\CancelamentoTransacaoOnUsRequest.md)| cancelamentoRequest | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TransacaoOnUsResponse**](TransacaoOnUsResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **cancelarUsingPOST3**
> \br.com.conductor.pier.api.v2.model\TransacaoOnUsResponse cancelarUsingPOST3($id, $cancelamento_request)

{{{transacao_on_us_resource_cancelar}}}

{{{transacao_on_us_resource_cancelar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagautorizacaoApi();
$id = 789; // int | {{{transacao_on_us_resource_cancelar_param_id_cartao}}}
$cancelamento_request = new \br.com.conductor.pier.api.v2.model\CancelamentoTransacaoPorIdCartaoRequest(); // \br.com.conductor.pier.api.v2.model\CancelamentoTransacaoPorIdCartaoRequest | cancelamentoRequest

try { 
    $result = $api_instance->cancelarUsingPOST3($id, $cancelamento_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagautorizacaoApi->cancelarUsingPOST3: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{transacao_on_us_resource_cancelar_param_id_cartao}}} | 
 **cancelamento_request** | [**\br.com.conductor.pier.api.v2.model\CancelamentoTransacaoPorIdCartaoRequest**](\br.com.conductor.pier.api.v2.model\CancelamentoTransacaoPorIdCartaoRequest.md)| cancelamentoRequest | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TransacaoOnUsResponse**](TransacaoOnUsResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarCodigosProcessamentoAutorizacaoUsingGET**
> object[] listarCodigosProcessamentoAutorizacaoUsingGET()

{{{enum_resource_listar_codigos_processamento_autorizacao}}}

{{{enum_resource_listar_codigos_processamento_autorizacao_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagautorizacaoApi();

try { 
    $result = $api_instance->listarCodigosProcessamentoAutorizacaoUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagautorizacaoApi->listarCodigosProcessamentoAutorizacaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object[]**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **simularUsingPOST**
> \br.com.conductor.pier.api.v2.model\TransacaoOnUsResponse simularUsingPOST($transacoes_request)

{{{transacao_on_us_resource_simular}}}

{{{transacao_on_us_resource_simular_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagautorizacaoApi();
$transacoes_request = new \br.com.conductor.pier.api.v2.model\TransacaoOnUsRequest(); // \br.com.conductor.pier.api.v2.model\TransacaoOnUsRequest | transacoesRequest

try { 
    $result = $api_instance->simularUsingPOST($transacoes_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagautorizacaoApi->simularUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transacoes_request** | [**\br.com.conductor.pier.api.v2.model\TransacaoOnUsRequest**](\br.com.conductor.pier.api.v2.model\TransacaoOnUsRequest.md)| transacoesRequest | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TransacaoOnUsResponse**](TransacaoOnUsResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

