# br.com.conductor.pier.api.v2.invoker\AutorizacoesApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelarUsingPOST**](AutorizacoesApi.md#cancelarUsingPOST) | **POST** /api/cancelar-transacao | Cancela Transa\u00C3\u00A7\u00C3\u00A3o financeira
[**desfazerUsingPOST**](AutorizacoesApi.md#desfazerUsingPOST) | **POST** /api/autorizar-transacao | Autoriza transa\u00C3\u00A7\u00C3\u00A3o financeira
[**desfazerUsingPOST1**](AutorizacoesApi.md#desfazerUsingPOST1) | **POST** /api/desfazer-transacao | Desfazimento de Transa\u00C3\u00A7\u00C3\u00A3o
[**simularUsingPOST**](AutorizacoesApi.md#simularUsingPOST) | **POST** /api/simular-transacao | Simula Compra Parcelada


# **cancelarUsingPOST**
> \br.com.conductor.pier.api.v2.model\TransacaoOnUsResponse cancelarUsingPOST($cancelamento_request)

Cancela Transa\u00C3\u00A7\u00C3\u00A3o financeira

Este m\u00C3\u00A9todo permite que seja cancelada uma transa\u00C3\u00A7\u00C3\u00A3o.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\AutorizacoesApi();
$cancelamento_request = new \br.com.conductor.pier.api.v2.model\CancelamentoTransacaoOnUsRequest(); // \br.com.conductor.pier.api.v2.model\CancelamentoTransacaoOnUsRequest | cancelamentoRequest

try { 
    $result = $api_instance->cancelarUsingPOST($cancelamento_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutorizacoesApi->cancelarUsingPOST: ', $e->getMessage(), "\n";
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

# **desfazerUsingPOST**
> \br.com.conductor.pier.api.v2.model\TransacaoOnUsResponse desfazerUsingPOST($autorizacao_on_us_request)

Autoriza transa\u00C3\u00A7\u00C3\u00A3o financeira

Este m\u00C3\u00A9todo faz uma autoriza\u00C3\u00A7\u00C3\u00A3o de transa\u00C3\u00A7\u00C3\u00A3o financeira.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\AutorizacoesApi();
$autorizacao_on_us_request = new \br.com.conductor.pier.api.v2.model\AutorizacaoOnUsRequest(); // \br.com.conductor.pier.api.v2.model\AutorizacaoOnUsRequest | autorizacaoOnUsRequest

try { 
    $result = $api_instance->desfazerUsingPOST($autorizacao_on_us_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutorizacoesApi->desfazerUsingPOST: ', $e->getMessage(), "\n";
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

# **desfazerUsingPOST1**
> \br.com.conductor.pier.api.v2.model\TransacaoOnUsResponse desfazerUsingPOST1($desfazimento_request)

Desfazimento de Transa\u00C3\u00A7\u00C3\u00A3o

Este m\u00C3\u00A9todo permite que seja desfeita uma transa\u00C3\u00A7\u00C3\u00A3o.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\AutorizacoesApi();
$desfazimento_request = new \br.com.conductor.pier.api.v2.model\DesfazimentoTransacaoOnURequest(); // \br.com.conductor.pier.api.v2.model\DesfazimentoTransacaoOnURequest | desfazimentoRequest

try { 
    $result = $api_instance->desfazerUsingPOST1($desfazimento_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutorizacoesApi->desfazerUsingPOST1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **desfazimento_request** | [**\br.com.conductor.pier.api.v2.model\DesfazimentoTransacaoOnURequest**](\br.com.conductor.pier.api.v2.model\DesfazimentoTransacaoOnURequest.md)| desfazimentoRequest | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TransacaoOnUsResponse**](TransacaoOnUsResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **simularUsingPOST**
> \br.com.conductor.pier.api.v2.model\TransacaoOnUsResponse simularUsingPOST($transacoes_request)

Simula Compra Parcelada

Este m\u00C3\u00A9todo permite que seja simulada uma compra parcelada.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\AutorizacoesApi();
$transacoes_request = new \br.com.conductor.pier.api.v2.model\TransacaoOnUsRequest(); // \br.com.conductor.pier.api.v2.model\TransacaoOnUsRequest | transacoesRequest

try { 
    $result = $api_instance->simularUsingPOST($transacoes_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutorizacoesApi->simularUsingPOST: ', $e->getMessage(), "\n";
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

