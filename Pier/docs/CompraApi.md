# br.com.conductor.pier.api.v2.invoker\CompraApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**efetivarAntecipacaoUsingPOST**](CompraApi.md#efetivarAntecipacaoUsingPOST) | **POST** /api/compras/{id}/efetivar-antecipacao | Faz a efetiva\u00C3\u00A7\u00C3\u00A3o da antecipa\u00C3\u00A7\u00C3\u00A3o
[**listarUsingGET5**](CompraApi.md#listarUsingGET5) | **GET** /api/compras | Listar compras
[**simularAntecipacaoUsingGET**](CompraApi.md#simularAntecipacaoUsingGET) | **GET** /api/compras/{id}/simular-antecipacao | Simular antecipa\u00C3\u00A7\u00C3\u00A3o de parcelas


# **efetivarAntecipacaoUsingPOST**
> \br.com.conductor.pier.api.v2.model\AntecipacaoResponse efetivarAntecipacaoUsingPOST($id_conta, $id, $quantidade_parcelas)

Faz a efetiva\u00C3\u00A7\u00C3\u00A3o da antecipa\u00C3\u00A7\u00C3\u00A3o

Metodo responsavel pela efetiva\u00C3\u00A7\u00C3\u00A3o da antecipa\u00C3\u00A7\u00C3\u00A3o.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CompraApi();
$id_conta = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Conta.
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da compra.
$quantidade_parcelas = 789; // int | Quantidade de parcelas para serem antecipadas (quantidadeParcelas).

try { 
    $result = $api_instance->efetivarAntecipacaoUsingPOST($id_conta, $id, $quantidade_parcelas);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompraApi->efetivarAntecipacaoUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_conta** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Conta. | 
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da compra. | 
 **quantidade_parcelas** | **int**| Quantidade de parcelas para serem antecipadas (quantidadeParcelas). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\AntecipacaoResponse**](AntecipacaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET5**
> \br.com.conductor.pier.api.v2.model\PageCompras listarUsingGET5($id_conta, $page, $limit, $id_compra, $parcelada, $juros, $tipo_transacao)

Listar compras

Lista as compras de uma conta.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CompraApi();
$id_conta = 789; // int | C\u00C3\u00B3digo identificador da conta da Compra.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id_compra = 789; // int | C\u00C3\u00B3digo identificador da Compra.
$parcelada = true; // bool | Indica se a compra \u00C3\u00A9 parcelada.
$juros = true; // bool | Indica se a compra \u00C3\u00A9 com ou sem juros.
$tipo_transacao = "tipo_transacao_example"; // string | Indica se a compra \u00C3\u00A9 ON-US ou OFF-US

try { 
    $result = $api_instance->listarUsingGET5($id_conta, $page, $limit, $id_compra, $parcelada, $juros, $tipo_transacao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompraApi->listarUsingGET5: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_conta** | **int**| C\u00C3\u00B3digo identificador da conta da Compra. | 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id_compra** | **int**| C\u00C3\u00B3digo identificador da Compra. | [optional] 
 **parcelada** | **bool**| Indica se a compra \u00C3\u00A9 parcelada. | [optional] 
 **juros** | **bool**| Indica se a compra \u00C3\u00A9 com ou sem juros. | [optional] 
 **tipo_transacao** | **string**| Indica se a compra \u00C3\u00A9 ON-US ou OFF-US | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageCompras**](PageCompras.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **simularAntecipacaoUsingGET**
> \br.com.conductor.pier.api.v2.model\AntecipacaoSimuladaResponse simularAntecipacaoUsingGET($id_conta, $id)

Simular antecipa\u00C3\u00A7\u00C3\u00A3o de parcelas

Simula a antecipa\u00C3\u00A7\u00C3\u00A3o de parcelas de uma compra, listando todos os planos de parcelamento dispon\u00C3\u00ADveis.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CompraApi();
$id_conta = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da compra.

try { 
    $result = $api_instance->simularAntecipacaoUsingGET($id_conta, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompraApi->simularAntecipacaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_conta** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | 
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da compra. | 

### Return type

[**\br.com.conductor.pier.api.v2.model\AntecipacaoSimuladaResponse**](AntecipacaoSimuladaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

