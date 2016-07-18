# br.com.conductor.pier.api.v1.invoker\CartaoApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bloquearCartaoUsingPOST**](CartaoApi.md#bloquearCartaoUsingPOST) | **POST** /api/contas/{idConta}/cartoes/{idCartao}/bloquear | Bloqueia um cart\u00C3\u00A3o
[**consultarCartaoUsingGET**](CartaoApi.md#consultarCartaoUsingGET) | **GET** /api/contas/{idConta}/cartoes/{idCartao} | Retorna um cart\u00C3\u00A3o
[**consultarCartoesUsingGET**](CartaoApi.md#consultarCartoesUsingGET) | **GET** /api/contas/{idConta}/cartoes | Retorna todos os cart\u00C3\u00B5es
[**desbloquearCartaoUsingPOST**](CartaoApi.md#desbloquearCartaoUsingPOST) | **POST** /api/contas/{idConta}/cartoes/{idCartao}/desbloquear | Desbloqueia um cart\u00C3\u00A3o
[**embossadoCartaoUsingPUT**](CartaoApi.md#embossadoCartaoUsingPUT) | **PUT** /api/contas/{idConta}/cartoes/{idCartao}/embossado | Embossado


# **bloquearCartaoUsingPOST**
> \br.com.conductor.pier.api.v1.model\CancelarCartaoResponse bloquearCartaoUsingPOST($id_conta, $id_cartao, $motivo, $observacao)

Bloqueia um cart\u00C3\u00A3o

Bloquear um determinado cart\u00C3\u00A3o

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
$motivo = 56; // int | Motivo do bloqueio
$observacao = "observacao_example"; // string | Alguma observa\u00C3\u00A7\u00C3\u00A3o para o bloqueio

try { 
    $result = $api_instance->bloquearCartaoUsingPOST($id_conta, $id_cartao, $motivo, $observacao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartaoApi->bloquearCartaoUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_conta** | **int**| ID da Conta | 
 **id_cartao** | **int**| ID do Cart\u00C3\u00A3o que deseja cancelar | 
 **motivo** | **int**| Motivo do bloqueio | 
 **observacao** | **string**| Alguma observa\u00C3\u00A7\u00C3\u00A3o para o bloqueio | [optional] 

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

Retorna um cart\u00C3\u00A3o

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

Retorna todos os cart\u00C3\u00B5es

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

# **desbloquearCartaoUsingPOST**
> \br.com.conductor.pier.api.v1.model\DesbloquearCartaoResponse desbloquearCartaoUsingPOST($id_conta, $id_cartao, $codigo_segurancao)

Desbloqueia um cart\u00C3\u00A3o

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
 **codigo_segurancao** | **string**| C\u00C3\u00B3digo seguran\u00C3\u00A7a do cart\u00C3\u00A3o | [optional] 

### Return type

[**\br.com.conductor.pier.api.v1.model\DesbloquearCartaoResponse**](DesbloquearCartaoResponse.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **embossadoCartaoUsingPUT**
> \br.com.conductor.pier.api.v1.model\EmbossadoCartaoResponse embossadoCartaoUsingPUT($id_conta, $id_cartao)

Embossado

N\u00C3\u00B3s informe caso tenha embossado algum cart\u00C3\u00A3o.

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

try { 
    $result = $api_instance->embossadoCartaoUsingPUT($id_conta, $id_cartao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartaoApi->embossadoCartaoUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_conta** | **int**| ID da Conta | 
 **id_cartao** | **int**| ID do Cart\u00C3\u00A3o que deseja cancelar | 

### Return type

[**\br.com.conductor.pier.api.v1.model\EmbossadoCartaoResponse**](EmbossadoCartaoResponse.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

