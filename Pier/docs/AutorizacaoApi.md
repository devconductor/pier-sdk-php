# br.com.conductor.pier.api.v2.invoker\AutorizacaoApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**autorizarPorContaUsingPOST**](AutorizacaoApi.md#autorizarPorContaUsingPOST) | **POST** /api/contas/{id}/autorizar-transacao | Autoriza transa\u00E7\u00E3o financeira por idConta
[**autorizarUsingPOST**](AutorizacaoApi.md#autorizarUsingPOST) | **POST** /api/autorizar-transacao | Autoriza transa\u00E7\u00E3o financeira
[**autorizarUsingPOST1**](AutorizacaoApi.md#autorizarUsingPOST1) | **POST** /api/cartoes/{id}/autorizar-transacao | Autoriza transa\u00E7\u00E3o financeira por idCartao
[**cancelarPorIdContaUsingPOST**](AutorizacaoApi.md#cancelarPorIdContaUsingPOST) | **POST** /api/contas/{id}/cancelar-transacao | Cancela transa\u00E7\u00E3o financeira por idConta
[**cancelarUsingPOST2**](AutorizacaoApi.md#cancelarUsingPOST2) | **POST** /api/cancelar-transacao | Cancela transa\u00E7\u00E3o financeira
[**cancelarUsingPOST3**](AutorizacaoApi.md#cancelarUsingPOST3) | **POST** /api/cartoes/{id}/cancelar-transacao | Cancela transa\u00E7\u00E3o financeira por idCartao
[**listarCodigosProcessamentoAutorizacaoUsingGET**](AutorizacaoApi.md#listarCodigosProcessamentoAutorizacaoUsingGET) | **GET** /api/consultar-codigos-processamento-autorizacao | Retorna c\u00F3digos de processamento de autoriza\u00E7\u00E3o
[**simularUsingPOST**](AutorizacaoApi.md#simularUsingPOST) | **POST** /api/simular-transacao | Simula planos de transa\u00E7\u00F5es


# **autorizarPorContaUsingPOST**
> \br.com.conductor.pier.api.v2.model\TransacaoOnUsResponse autorizarPorContaUsingPOST($id, $transacao_on_us_por_id_cartao_request)

Autoriza transa\u00E7\u00E3o financeira por idConta

Este m\u00E9todo faz uma autoriza\u00E7\u00E3o de transa\u00E7\u00E3o financeira com o idConta.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\AutorizacaoApi();
$id = 789; // int | Id Conta
$transacao_on_us_por_id_cartao_request = new \br.com.conductor.pier.api.v2.model\TransacaoOnUsPorIdCartaoRequest(); // \br.com.conductor.pier.api.v2.model\TransacaoOnUsPorIdCartaoRequest | transacaoOnUsPorIdCartaoRequest

try { 
    $result = $api_instance->autorizarPorContaUsingPOST($id, $transacao_on_us_por_id_cartao_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutorizacaoApi->autorizarPorContaUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id Conta | 
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

Autoriza transa\u00E7\u00E3o financeira

Este m\u00E9todo faz uma autoriza\u00E7\u00E3o de transa\u00E7\u00E3o financeira.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\AutorizacaoApi();
$autorizacao_on_us_request = new \br.com.conductor.pier.api.v2.model\AutorizacaoOnUsRequest(); // \br.com.conductor.pier.api.v2.model\AutorizacaoOnUsRequest | autorizacaoOnUsRequest

try { 
    $result = $api_instance->autorizarUsingPOST($autorizacao_on_us_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutorizacaoApi->autorizarUsingPOST: ', $e->getMessage(), "\n";
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

Autoriza transa\u00E7\u00E3o financeira por idCartao

Este m\u00E9todo faz uma autoriza\u00E7\u00E3o de transa\u00E7\u00E3o financeira com o idCartao.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\AutorizacaoApi();
$id = 789; // int | Id Cartao
$transacao_on_us_por_id_cartao_request = new \br.com.conductor.pier.api.v2.model\TransacaoOnUsPorIdCartaoRequest(); // \br.com.conductor.pier.api.v2.model\TransacaoOnUsPorIdCartaoRequest | transacaoOnUsPorIdCartaoRequest

try { 
    $result = $api_instance->autorizarUsingPOST1($id, $transacao_on_us_por_id_cartao_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutorizacaoApi->autorizarUsingPOST1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id Cartao | 
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

Cancela transa\u00E7\u00E3o financeira por idConta

Este m\u00E9todo permite que seja cancelada uma transa\u00E7\u00E3o a partir do idConta.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\AutorizacaoApi();
$id = 789; // int | Id Conta
$cancelamento_request = new \br.com.conductor.pier.api.v2.model\CancelamentoTransacaoPorIdCartaoRequest(); // \br.com.conductor.pier.api.v2.model\CancelamentoTransacaoPorIdCartaoRequest | cancelamentoRequest

try { 
    $result = $api_instance->cancelarPorIdContaUsingPOST($id, $cancelamento_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutorizacaoApi->cancelarPorIdContaUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id Conta | 
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

Cancela transa\u00E7\u00E3o financeira

Este m\u00E9todo permite que seja cancelada uma transa\u00E7\u00E3o.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\AutorizacaoApi();
$cancelamento_request = new \br.com.conductor.pier.api.v2.model\CancelamentoTransacaoOnUsRequest(); // \br.com.conductor.pier.api.v2.model\CancelamentoTransacaoOnUsRequest | cancelamentoRequest

try { 
    $result = $api_instance->cancelarUsingPOST2($cancelamento_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutorizacaoApi->cancelarUsingPOST2: ', $e->getMessage(), "\n";
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

Cancela transa\u00E7\u00E3o financeira por idCartao

Este m\u00E9todo permite que seja cancelada uma transa\u00E7\u00E3o a partir do idCartao.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\AutorizacaoApi();
$id = 789; // int | Id Cartao
$cancelamento_request = new \br.com.conductor.pier.api.v2.model\CancelamentoTransacaoPorIdCartaoRequest(); // \br.com.conductor.pier.api.v2.model\CancelamentoTransacaoPorIdCartaoRequest | cancelamentoRequest

try { 
    $result = $api_instance->cancelarUsingPOST3($id, $cancelamento_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutorizacaoApi->cancelarUsingPOST3: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id Cartao | 
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

Retorna c\u00F3digos de processamento de autoriza\u00E7\u00E3o

Este m\u00E9todo retorna a lista dos c\u00F3digos de processamento para autoriza\u00E7\u00E3o de transa\u00E7\u00F5es financeiras.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\AutorizacaoApi();

try { 
    $result = $api_instance->listarCodigosProcessamentoAutorizacaoUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutorizacaoApi->listarCodigosProcessamentoAutorizacaoUsingGET: ', $e->getMessage(), "\n";
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

Simula planos de transa\u00E7\u00F5es

Este m\u00E9todo permite que seja simulada um plano de transa\u00E7\u00F5es.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\AutorizacaoApi();
$transacoes_request = new \br.com.conductor.pier.api.v2.model\TransacaoOnUsRequest(); // \br.com.conductor.pier.api.v2.model\TransacaoOnUsRequest | transacoesRequest

try { 
    $result = $api_instance->simularUsingPOST($transacoes_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutorizacaoApi->simularUsingPOST: ', $e->getMessage(), "\n";
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

