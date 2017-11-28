# br.com.conductor.pier.api.v2.invoker\BoletoApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**registrarBoletoUsingPOST**](BoletoApi.md#registrarBoletoUsingPOST) | **POST** /api/boletos/{id}/registrar | Registra uma cobranca na entidade banco relacionada a cobranca informado.


# **registrarBoletoUsingPOST**
> \br.com.conductor.pier.api.v2.model\BoletoResponse registrarBoletoUsingPOST($id)

Registra uma cobranca na entidade banco relacionada a cobranca informado.

Este recurso registra uma cobranca emitido.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\BoletoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Cobranca (id)

try { 
    $result = $api_instance->registrarBoletoUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoletoApi->registrarBoletoUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Cobranca (id) | 

### Return type

[**\br.com.conductor.pier.api.v2.model\BoletoResponse**](BoletoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

