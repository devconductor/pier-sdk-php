# br.com.conductor.pier.api.v1.invoker\CartaoApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelarCartaoUsingPOST**](CartaoApi.md#cancelarCartaoUsingPOST) | **POST** /v1/contas/{idConta}/cartoes/{idCartao}/cancelar | /contas/{idConta}/cartoes/{idCartao}/cancelar
[**consultarCartaoUsingGET**](CartaoApi.md#consultarCartaoUsingGET) | **GET** /v1/contas/{idConta}/cartoes/{idCartao} | /contas/{idConta}/cartoes/{idCartao}
[**consultarCartoesUsingGET**](CartaoApi.md#consultarCartoesUsingGET) | **GET** /v1/contas/{idConta}/cartoes | /contas/{idConta}/cartoes
[**consultarExtratoFaturasUsingGET**](CartaoApi.md#consultarExtratoFaturasUsingGET) | **GET** /v1/contas/{idConta}/cartoes/{idCartao}/faturas | /contas/{idConta}/cartoes/{idCartao}/faturas
[**consultarSaldosLimitesUsingGET**](CartaoApi.md#consultarSaldosLimitesUsingGET) | **GET** /v1/contas/{idConta}/cartoes/{idCartao}/limites | /contas/{idConta}/cartoes/{idCartao}/limites
[**desbloquearCartaoUsingPOST**](CartaoApi.md#desbloquearCartaoUsingPOST) | **POST** /v1/contas/{idConta}/cartoes/{idCartao}/desbloquear | /contas/{idConta}/cartoes/{idCartao}/desbloquear


# **cancelarCartaoUsingPOST**
> \br.com.conductor.pier.api.v1.model\CancelarCartaoResponse cancelarCartaoUsingPOST($id_conta, $id_cartao, $motivo, $observacao)

/contas/{idConta}/cartoes/{idCartao}/cancelar

Cancelar um determinado cart\u00C3\u00A3o

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v1.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v1.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v1.invoker\Api\CartaoApi();
$id_conta = 56; // int | ID da Conta
$id_cartao = 56; // int | ID do Cart\u00C3\u00A3o que deseja cancelar
$motivo = 56; // int | Motivo do cancelamento
$observacao = "observacao_example"; // string | Alguma observa\u00C3\u00A7\u00C3\u00A3o para o cancelamento

try { 
    $result = $api_instance->cancelarCartaoUsingPOST($id_conta, $id_cartao, $motivo, $observacao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartaoApi->cancelarCartaoUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_conta** | **int**| ID da Conta | 
 **id_cartao** | **int**| ID do Cart\u00C3\u00A3o que deseja cancelar | 
 **motivo** | **int**| Motivo do cancelamento | 
 **observacao** | **string**| Alguma observa\u00C3\u00A7\u00C3\u00A3o para o cancelamento | 

### Return type

[**\br.com.conductor.pier.api.v1.model\CancelarCartaoResponse**](CancelarCartaoResponse.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarCartaoUsingGET**
> \br.com.conductor.pier.api.v1.model\ConsultarCartaoResponse consultarCartaoUsingGET($id_conta, $id_cartao, $numero_cartao)

/contas/{idConta}/cartoes/{idCartao}

Consultar as informa\u00C3\u00A7\u00C3\u00B5es de um determinado cart\u00C3\u00A3o de uma conta

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v1.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v1.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v1.invoker\Api\CartaoApi();
$id_conta = 56; // int | ID da Conta que pertence o cart\u00C3\u00A3o
$id_cartao = 56; // int | ID do Cart\u00C3\u00A3o que deseja consultar
$numero_cartao = "numero_cartao_example"; // string | N\u00C3\u00BAmero do Cart\u00C3\u00A3o que deseja consultar (opcional)

try { 
    $result = $api_instance->consultarCartaoUsingGET($id_conta, $id_cartao, $numero_cartao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartaoApi->consultarCartaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_conta** | **int**| ID da Conta que pertence o cart\u00C3\u00A3o | 
 **id_cartao** | **int**| ID do Cart\u00C3\u00A3o que deseja consultar | 
 **numero_cartao** | **string**| N\u00C3\u00BAmero do Cart\u00C3\u00A3o que deseja consultar (opcional) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v1.model\ConsultarCartaoResponse**](ConsultarCartaoResponse.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarCartoesUsingGET**
> \br.com.conductor.pier.api.v1.model\ConsultarCartaoResponse consultarCartoesUsingGET($id_conta)

/contas/{idConta}/cartoes

Consultar todos os cart\u00C3\u00B5es de uma determinada conta

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v1.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v1.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v1.invoker\Api\CartaoApi();
$id_conta = 56; // int | ID da Conta

try { 
    $result = $api_instance->consultarCartoesUsingGET($id_conta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartaoApi->consultarCartoesUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_conta** | **int**| ID da Conta | 

### Return type

[**\br.com.conductor.pier.api.v1.model\ConsultarCartaoResponse**](ConsultarCartaoResponse.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarExtratoFaturasUsingGET**
> \br.com.conductor.pier.api.v1.model\ConsultarExtratoContaResponse consultarExtratoFaturasUsingGET($id_conta, $id_cartao, $data_vencimento)

/contas/{idConta}/cartoes/{idCartao}/faturas

Consulte os extratos/faturas do cart\u00C3\u00A3o de uma determinada conta

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v1.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v1.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v1.invoker\Api\CartaoApi();
$id_conta = 56; // int | ID da Conta
$id_cartao = 56; // int | ID do Cart\u00C3\u00A3o que deseja consultar o extrato
$data_vencimento = "data_vencimento_example"; // string | Data limite para o vencimento das transa\u00C3\u00A7\u00C3\u00B5es

try { 
    $result = $api_instance->consultarExtratoFaturasUsingGET($id_conta, $id_cartao, $data_vencimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartaoApi->consultarExtratoFaturasUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_conta** | **int**| ID da Conta | 
 **id_cartao** | **int**| ID do Cart\u00C3\u00A3o que deseja consultar o extrato | 
 **data_vencimento** | **string**| Data limite para o vencimento das transa\u00C3\u00A7\u00C3\u00B5es | 

### Return type

[**\br.com.conductor.pier.api.v1.model\ConsultarExtratoContaResponse**](ConsultarExtratoContaResponse.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarSaldosLimitesUsingGET**
> \br.com.conductor.pier.api.v1.model\ConsultarSaldoLimitesResponse consultarSaldosLimitesUsingGET($id_conta, $id_cartao)

/contas/{idConta}/cartoes/{idCartao}/limites

Consulte os limites de um determinado cart\u00C3\u00A3o

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v1.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v1.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v1.invoker\Api\CartaoApi();
$id_conta = 56; // int | ID da Conta
$id_cartao = 56; // int | ID do Cart\u00C3\u00A3o que deseja consultar o saldo/limite

try { 
    $result = $api_instance->consultarSaldosLimitesUsingGET($id_conta, $id_cartao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartaoApi->consultarSaldosLimitesUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_conta** | **int**| ID da Conta | 
 **id_cartao** | **int**| ID do Cart\u00C3\u00A3o que deseja consultar o saldo/limite | 

### Return type

[**\br.com.conductor.pier.api.v1.model\ConsultarSaldoLimitesResponse**](ConsultarSaldoLimitesResponse.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **desbloquearCartaoUsingPOST**
> \br.com.conductor.pier.api.v1.model\DesbloquearCartaoResponse desbloquearCartaoUsingPOST($id_conta, $id_cartao, $codigo_segurancao)

/contas/{idConta}/cartoes/{idCartao}/desbloquear

Desbloquear cart\u00C3\u00A3o de uma determinada conta

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v1.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v1.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v1.invoker\Api\CartaoApi();
$id_conta = 56; // int | ID da Conta
$id_cartao = 56; // int | ID do Cart\u00C3\u00A3o que deseja consultar o saldo/limite
$codigo_segurancao = "codigo_segurancao_example"; // string | C\u00C3\u00B3digo seguran\u00C3\u00A7a do cart\u00C3\u00A3o

try { 
    $result = $api_instance->desbloquearCartaoUsingPOST($id_conta, $id_cartao, $codigo_segurancao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartaoApi->desbloquearCartaoUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_conta** | **int**| ID da Conta | 
 **id_cartao** | **int**| ID do Cart\u00C3\u00A3o que deseja consultar o saldo/limite | 
 **codigo_segurancao** | **string**| C\u00C3\u00B3digo seguran\u00C3\u00A7a do cart\u00C3\u00A3o | 

### Return type

[**\br.com.conductor.pier.api.v1.model\DesbloquearCartaoResponse**](DesbloquearCartaoResponse.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

