# br.com.conductor.pier.api.v2.invoker\AutorizacoesApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**autorizarUsingPOST**](AutorizacoesApi.md#autorizarUsingPOST) | **POST** /api/autorizar-transacao | Autoriza transa\u00C3\u00A7\u00C3\u00A3o financeira
[**cancelarUsingPOST2**](AutorizacoesApi.md#cancelarUsingPOST2) | **POST** /api/cancelar-transacao | Cancela transa\u00C3\u00A7\u00C3\u00A3o financeira
[**listarCodigosProcessamentoAutorizacaoUsingGET**](AutorizacoesApi.md#listarCodigosProcessamentoAutorizacaoUsingGET) | **GET** /api/consultar-codigos-processamento-autorizacao | Retorna c\u00C3\u00B3digos de processamento de autoriza\u00C3\u00A7\u00C3\u00A3o
[**simularUsingPOST**](AutorizacoesApi.md#simularUsingPOST) | **POST** /api/simular-transacao | Simula planos de transa\u00C3\u00A7\u00C3\u00B5es


# **autorizarUsingPOST**
> \br.com.conductor.pier.api.v2.model\TransacaoOnUsResponse autorizarUsingPOST($autorizacao_on_us_request)

Autoriza transa\u00C3\u00A7\u00C3\u00A3o financeira

Este m\u00C3\u00A9todo faz uma autoriza\u00C3\u00A7\u00C3\u00A3o de transa\u00C3\u00A7\u00C3\u00A3o financeira.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\AutorizacoesApi();
$autorizacao_on_us_request = new \br.com.conductor.pier.api.v2.model\AutorizacaoOnUsRequest(); // \br.com.conductor.pier.api.v2.model\AutorizacaoOnUsRequest | autorizacaoOnUsRequest

try { 
    $result = $api_instance->autorizarUsingPOST($autorizacao_on_us_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutorizacoesApi->autorizarUsingPOST: ', $e->getMessage(), "\n";
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

# **cancelarUsingPOST2**
> \br.com.conductor.pier.api.v2.model\TransacaoOnUsResponse cancelarUsingPOST2($cancelamento_request)

Cancela transa\u00C3\u00A7\u00C3\u00A3o financeira

Este m\u00C3\u00A9todo permite que seja cancelada uma transa\u00C3\u00A7\u00C3\u00A3o.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\AutorizacoesApi();
$cancelamento_request = new \br.com.conductor.pier.api.v2.model\CancelamentoTransacaoOnUsRequest(); // \br.com.conductor.pier.api.v2.model\CancelamentoTransacaoOnUsRequest | cancelamentoRequest

try { 
    $result = $api_instance->cancelarUsingPOST2($cancelamento_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutorizacoesApi->cancelarUsingPOST2: ', $e->getMessage(), "\n";
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

# **listarCodigosProcessamentoAutorizacaoUsingGET**
> object[] listarCodigosProcessamentoAutorizacaoUsingGET()

Retorna c\u00C3\u00B3digos de processamento de autoriza\u00C3\u00A7\u00C3\u00A3o

Este m\u00C3\u00A9todo retorna a lista dos c\u00C3\u00B3digos de processamento para autoriza\u00C3\u00A7\u00C3\u00A3o de transa\u00C3\u00A7\u00C3\u00B5es financeiras.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\AutorizacoesApi();

try { 
    $result = $api_instance->listarCodigosProcessamentoAutorizacaoUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutorizacoesApi->listarCodigosProcessamentoAutorizacaoUsingGET: ', $e->getMessage(), "\n";
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

Simula planos de transa\u00C3\u00A7\u00C3\u00B5es

Este m\u00C3\u00A9todo permite que seja simulada um plano de transa\u00C3\u00A7\u00C3\u00B5es.

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

