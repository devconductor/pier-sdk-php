# br.com.conductor.pier.api.v2.invoker\ConductorPayApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**atualizarChaveUsingPOST**](ConductorPayApi.md#atualizarChaveUsingPOST) | **POST** /api/cartoes-tokenizados/{id}/atualizar-chave | Atualiza a chave de gera\u00C3\u00A7\u00C3\u00A3o de transa\u00C3\u00A7\u00C3\u00A3o
[**atualizarUsingPUT**](ConductorPayApi.md#atualizarUsingPUT) | **PUT** /api/cartoes-tokenizados/{id} | Atualiza os dados do cart\u00C3\u00A3o
[**confirmaAtualizacaoChaveUsingPOST**](ConductorPayApi.md#confirmaAtualizacaoChaveUsingPOST) | **POST** /api/cartoes-tokenizados/{id}/confirmar-chave | Confirma a atualiza\u00C3\u00A7\u00C3\u00A3o da chave de transa\u00C3\u00A7\u00C3\u00A3o
[**consultarUsingGET6**](ConductorPayApi.md#consultarUsingGET6) | **GET** /api/cartoes-tokenizados/{id} | Apresenta os dados de um determinado cart\u00C3\u00A3o
[**listarCodigosRespostaUsingGET**](ConductorPayApi.md#listarCodigosRespostaUsingGET) | **GET** /api/codigos-resposta | Lista os c\u00C3\u00B3digos de resposta dos recursos de transa\u00C3\u00A7\u00C3\u00A3o e consulta de conta
[**listarModosEntradaUsingGET**](ConductorPayApi.md#listarModosEntradaUsingGET) | **GET** /api/modos-entrada | Lista os modos entradas
[**listarOperacoesUsingGET**](ConductorPayApi.md#listarOperacoesUsingGET) | **GET** /api/operacoes | Lista as opera\u00C3\u00A7\u00C3\u00B5es
[**listarTiposTerminaisUsingGET**](ConductorPayApi.md#listarTiposTerminaisUsingGET) | **GET** /api/tipos-terminais | Lista os tipos de terminais
[**listarTiposTransacoesUsingGET**](ConductorPayApi.md#listarTiposTransacoesUsingGET) | **GET** /api/tipos-transacoes | Lista os tipos de transa\u00C3\u00A7\u00C3\u00B5es
[**listarUsingGET6**](ConductorPayApi.md#listarUsingGET6) | **GET** /api/cartoes-tokenizados | Lista os cart\u00C3\u00B5es cadastrados
[**salvarUsingPOST5**](ConductorPayApi.md#salvarUsingPOST5) | **POST** /api/cartoes-tokenizados | Cria\u00C3\u00A7\u00C3\u00A3o de cart\u00C3\u00A3o


# **atualizarChaveUsingPOST**
> \br.com.conductor.pier.api.v2.model\CartaoPayAtualizarChaveResponse atualizarChaveUsingPOST($device_id, $id)

Atualiza a chave de gera\u00C3\u00A7\u00C3\u00A3o de transa\u00C3\u00A7\u00C3\u00A3o

Este m\u00C3\u00A9todo permite atualizar a chave de gera\u00C3\u00A7\u00C3\u00A3o de transa\u00C3\u00A7\u00C3\u00A3o de um dispositivo a partir do seu identificador (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ConductorPayApi();
$device_id = "device_id_example"; // string | Device id criptografado
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do cart\u00C3\u00A3o (id).

try { 
    $result = $api_instance->atualizarChaveUsingPOST($device_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConductorPayApi->atualizarChaveUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| Device id criptografado | 
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do cart\u00C3\u00A3o (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\CartaoPayAtualizarChaveResponse**](CartaoPayAtualizarChaveResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **atualizarUsingPUT**
> \br.com.conductor.pier.api.v2.model\CartaoPayResponse atualizarUsingPUT($device_id, $id, $update)

Atualiza os dados do cart\u00C3\u00A3o

Este m\u00C3\u00A9todo permite atualizar os dados do cart\u00C3\u00A3o tokenizados de um dispositivo a partir do seu identificador (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ConductorPayApi();
$device_id = "device_id_example"; // string | Device id criptografado
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do cart\u00C3\u00A3o (id).
$update = new \br.com.conductor.pier.api.v2.model\CartaoPayUpdate(); // \br.com.conductor.pier.api.v2.model\CartaoPayUpdate | update

try { 
    $result = $api_instance->atualizarUsingPUT($device_id, $id, $update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConductorPayApi->atualizarUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| Device id criptografado | 
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do cart\u00C3\u00A3o (id). | 
 **update** | [**\br.com.conductor.pier.api.v2.model\CartaoPayUpdate**](\br.com.conductor.pier.api.v2.model\CartaoPayUpdate.md)| update | 

### Return type

[**\br.com.conductor.pier.api.v2.model\CartaoPayResponse**](CartaoPayResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **confirmaAtualizacaoChaveUsingPOST**
> \br.com.conductor.pier.api.v2.model\CartaoPayConfirmarChaveResponse confirmaAtualizacaoChaveUsingPOST($device_id, $id, $update)

Confirma a atualiza\u00C3\u00A7\u00C3\u00A3o da chave de transa\u00C3\u00A7\u00C3\u00A3o

Este met\u00C3\u00B3do recebe confirma\u00C3\u00A7\u00C3\u00A3o de atualiza\u00C3\u00A7\u00C3\u00A3o de chave transa\u00C3\u00A7\u00C3\u00A3o.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ConductorPayApi();
$device_id = "device_id_example"; // string | Device id criptografado
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do cart\u00C3\u00A3o (id).
$update = new \br.com.conductor.pier.api.v2.model\CartaoPayKeyUpdate(); // \br.com.conductor.pier.api.v2.model\CartaoPayKeyUpdate | update

try { 
    $result = $api_instance->confirmaAtualizacaoChaveUsingPOST($device_id, $id, $update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConductorPayApi->confirmaAtualizacaoChaveUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| Device id criptografado | 
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do cart\u00C3\u00A3o (id). | 
 **update** | [**\br.com.conductor.pier.api.v2.model\CartaoPayKeyUpdate**](\br.com.conductor.pier.api.v2.model\CartaoPayKeyUpdate.md)| update | 

### Return type

[**\br.com.conductor.pier.api.v2.model\CartaoPayConfirmarChaveResponse**](CartaoPayConfirmarChaveResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET6**
> \br.com.conductor.pier.api.v2.model\CartaoPayDetalheResponse consultarUsingGET6($device_id, $id)

Apresenta os dados de um determinado cart\u00C3\u00A3o

Este m\u00C3\u00A9todo permite consultar as informa\u00C3\u00A7\u00C3\u00B5es de um determinado cart\u00C3\u00A3o a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ConductorPayApi();
$device_id = "device_id_example"; // string | Device id criptografado
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do cart\u00C3\u00A3o (id).

try { 
    $result = $api_instance->consultarUsingGET6($device_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConductorPayApi->consultarUsingGET6: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| Device id criptografado | 
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do cart\u00C3\u00A3o (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\CartaoPayDetalheResponse**](CartaoPayDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarCodigosRespostaUsingGET**
> object[] listarCodigosRespostaUsingGET()

Lista os c\u00C3\u00B3digos de resposta dos recursos de transa\u00C3\u00A7\u00C3\u00A3o e consulta de conta

Este m\u00C3\u00A9todo retorna a lista dos c\u00C3\u00B3digos de resposta das transa\u00C3\u00A7\u00C3\u00B5es e consulta de saque realizada no Pay.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ConductorPayApi();

try { 
    $result = $api_instance->listarCodigosRespostaUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConductorPayApi->listarCodigosRespostaUsingGET: ', $e->getMessage(), "\n";
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

# **listarModosEntradaUsingGET**
> object[] listarModosEntradaUsingGET()

Lista os modos entradas

Este recurso permite listar os modos de entrada para transa\u00C3\u00A7\u00C3\u00A3o

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ConductorPayApi();

try { 
    $result = $api_instance->listarModosEntradaUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConductorPayApi->listarModosEntradaUsingGET: ', $e->getMessage(), "\n";
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

# **listarOperacoesUsingGET**
> object[] listarOperacoesUsingGET()

Lista as opera\u00C3\u00A7\u00C3\u00B5es

Este recurso permite listar as opera\u00C3\u00A7\u00C3\u00B5es disponiveis de transa\u00C3\u00A7\u00C3\u00A3o

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ConductorPayApi();

try { 
    $result = $api_instance->listarOperacoesUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConductorPayApi->listarOperacoesUsingGET: ', $e->getMessage(), "\n";
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

# **listarTiposTerminaisUsingGET**
> object[] listarTiposTerminaisUsingGET()

Lista os tipos de terminais

Este m\u00C3\u00A9todo retorna a lista dos tipos de terminais.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ConductorPayApi();

try { 
    $result = $api_instance->listarTiposTerminaisUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConductorPayApi->listarTiposTerminaisUsingGET: ', $e->getMessage(), "\n";
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

# **listarTiposTransacoesUsingGET**
> object[] listarTiposTransacoesUsingGET()

Lista os tipos de transa\u00C3\u00A7\u00C3\u00B5es

Este m\u00C3\u00A9todo retorna a lista dos tipos de transa\u00C3\u00A7\u00C3\u00B5es realizadas no Pay.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ConductorPayApi();

try { 
    $result = $api_instance->listarTiposTransacoesUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConductorPayApi->listarTiposTransacoesUsingGET: ', $e->getMessage(), "\n";
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

# **listarUsingGET6**
> \br.com.conductor.pier.api.v2.model\PageCartaoPayResponse listarUsingGET6($device_id, $sort, $page, $limit, $status, $numero_cartao)

Lista os cart\u00C3\u00B5es cadastrados

Este m\u00C3\u00A9todo permite listar os cart\u00C3\u00B5es cadastrado em um dispositivo.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ConductorPayApi();
$device_id = "device_id_example"; // string | Device id criptografado
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$status = "status_example"; // string | Status do cart\u00C3\u00A3o tokenizado
$numero_cartao = "numero_cartao_example"; // string | Numero do cart\u00C3\u00A3o tokenizado

try { 
    $result = $api_instance->listarUsingGET6($device_id, $sort, $page, $limit, $status, $numero_cartao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConductorPayApi->listarUsingGET6: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| Device id criptografado | [optional] 
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **status** | **string**| Status do cart\u00C3\u00A3o tokenizado | [optional] 
 **numero_cartao** | **string**| Numero do cart\u00C3\u00A3o tokenizado | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageCartaoPayResponse**](PageCartaoPayResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST5**
> \br.com.conductor.pier.api.v2.model\CartaoPayCadastroResponse salvarUsingPOST5($device_id, $persist)

Cria\u00C3\u00A7\u00C3\u00A3o de cart\u00C3\u00A3o

Este met\u00C3\u00B3do permite a tokeniza\u00C3\u00A7\u00C3\u00A3o de um cart\u00C3\u00A3o a partir dos seus dados impressos.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ConductorPayApi();
$device_id = "device_id_example"; // string | Device id criptografado
$persist = new \br.com.conductor.pier.api.v2.model\CartaoPayPersist(); // \br.com.conductor.pier.api.v2.model\CartaoPayPersist | persist

try { 
    $result = $api_instance->salvarUsingPOST5($device_id, $persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConductorPayApi->salvarUsingPOST5: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| Device id criptografado | 
 **persist** | [**\br.com.conductor.pier.api.v2.model\CartaoPayPersist**](\br.com.conductor.pier.api.v2.model\CartaoPayPersist.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\CartaoPayCadastroResponse**](CartaoPayCadastroResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

