# br.com.conductor.pier.api.v2.invoker\AntecipacaoApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**configurarTaxaAntecipacaoUsingPOST**](AntecipacaoApi.md#configurarTaxaAntecipacaoUsingPOST) | **POST** /api/produtos/{id}/configurar-taxa-antecipacao | Configura a Taxa de Antecipa\u00C3\u00A7\u00C3\u00A3o de um Produto
[**consultarTaxaAntecipacaoUsingGET**](AntecipacaoApi.md#consultarTaxaAntecipacaoUsingGET) | **GET** /api/produtos/{id}/consultar-taxa-antecipacao | Consulta a Taxa de Antecipa\u00C3\u00A7\u00C3\u00A3o de um Produto
[**efetivarAntecipacaoUsingPOST**](AntecipacaoApi.md#efetivarAntecipacaoUsingPOST) | **POST** /api/compras-antecipaveis/{id}/efetivar-antecipacao | Faz a efetiva\u00C3\u00A7\u00C3\u00A3o da antecipa\u00C3\u00A7\u00C3\u00A3o
[**listarUsingGET7**](AntecipacaoApi.md#listarUsingGET7) | **GET** /api/compras-antecipaveis | Listar compras com parcelas antecip\u00C3\u00A1veis
[**simularAntecipacaoUsingGET**](AntecipacaoApi.md#simularAntecipacaoUsingGET) | **GET** /api/compras-antecipaveis/{id}/simular-antecipacao | Simular antecipa\u00C3\u00A7\u00C3\u00A3o de parcelas


# **configurarTaxaAntecipacaoUsingPOST**
> \br.com.conductor.pier.api.v2.model\ParametroProdutoResponse configurarTaxaAntecipacaoUsingPOST($id, $taxa_antecipacao_request)

Configura a Taxa de Antecipa\u00C3\u00A7\u00C3\u00A3o de um Produto

Este recurso permite configurar a Taxa de Antecipa\u00C3\u00A7\u00C3\u00A3o de um Produto, a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\AntecipacaoApi();
$id = 789; // int | Id Produto
$taxa_antecipacao_request = new \br.com.conductor.pier.api.v2.model\TaxaAntecipacaoRequest(); // \br.com.conductor.pier.api.v2.model\TaxaAntecipacaoRequest | taxaAntecipacaoRequest

try { 
    $result = $api_instance->configurarTaxaAntecipacaoUsingPOST($id, $taxa_antecipacao_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AntecipacaoApi->configurarTaxaAntecipacaoUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id Produto | 
 **taxa_antecipacao_request** | [**\br.com.conductor.pier.api.v2.model\TaxaAntecipacaoRequest**](\br.com.conductor.pier.api.v2.model\TaxaAntecipacaoRequest.md)| taxaAntecipacaoRequest | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ParametroProdutoResponse**](ParametroProdutoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarTaxaAntecipacaoUsingGET**
> \br.com.conductor.pier.api.v2.model\ParametroProdutoResponse consultarTaxaAntecipacaoUsingGET($id, $tipo_transacao)

Consulta a Taxa de Antecipa\u00C3\u00A7\u00C3\u00A3o de um Produto

Este recurso permite consultar a Taxa de Antecipa\u00C3\u00A7\u00C3\u00A3o de um Produto, a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\AntecipacaoApi();
$id = 789; // int | Id Produto
$tipo_transacao = "tipo_transacao_example"; // string | Tipo da Transa\u00C3\u00A7\u00C3\u00A3o (ON-US ou OFF-US)

try { 
    $result = $api_instance->consultarTaxaAntecipacaoUsingGET($id, $tipo_transacao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AntecipacaoApi->consultarTaxaAntecipacaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id Produto | 
 **tipo_transacao** | **string**| Tipo da Transa\u00C3\u00A7\u00C3\u00A3o (ON-US ou OFF-US) | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ParametroProdutoResponse**](ParametroProdutoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **efetivarAntecipacaoUsingPOST**
> \br.com.conductor.pier.api.v2.model\AntecipacaoResponse efetivarAntecipacaoUsingPOST($id_conta, $id, $quantidade_parcelas)

Faz a efetiva\u00C3\u00A7\u00C3\u00A3o da antecipa\u00C3\u00A7\u00C3\u00A3o

M\u00C3\u00A9todo responsavel pela efetiva\u00C3\u00A7\u00C3\u00A3o da antecipa\u00C3\u00A7\u00C3\u00A3o, cujo desconto \u00C3\u00A9 calculado baseado na data da \u00C3\u00BAltima parcela em aberto.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\AntecipacaoApi();
$id_conta = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Conta.
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do evento.
$quantidade_parcelas = 789; // int | Quantidade de parcelas para serem antecipadas.

try { 
    $result = $api_instance->efetivarAntecipacaoUsingPOST($id_conta, $id, $quantidade_parcelas);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AntecipacaoApi->efetivarAntecipacaoUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_conta** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Conta. | 
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do evento. | 
 **quantidade_parcelas** | **int**| Quantidade de parcelas para serem antecipadas. | 

### Return type

[**\br.com.conductor.pier.api.v2.model\AntecipacaoResponse**](AntecipacaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET7**
> \br.com.conductor.pier.api.v2.model\PageCompraResponse listarUsingGET7($id_conta, $sort, $page, $limit, $id_compra, $parcelada, $juros, $tipo_origem_transacao)

Listar compras com parcelas antecip\u00C3\u00A1veis

Lista as compras antecip\u00C3\u00A1veis de uma conta.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\AntecipacaoApi();
$id_conta = 789; // int | C\u00C3\u00B3digo identificador da conta da Compra.
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id_compra = 789; // int | C\u00C3\u00B3digo identificador da Compra.
$parcelada = true; // bool | Indica se a compra \u00C3\u00A9 parcelada.
$juros = true; // bool | Indica se a compra \u00C3\u00A9 com ou sem juros.
$tipo_origem_transacao = "tipo_origem_transacao_example"; // string | Indica se a compra \u00C3\u00A9 ON-US ou OFF-US

try { 
    $result = $api_instance->listarUsingGET7($id_conta, $sort, $page, $limit, $id_compra, $parcelada, $juros, $tipo_origem_transacao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AntecipacaoApi->listarUsingGET7: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_conta** | **int**| C\u00C3\u00B3digo identificador da conta da Compra. | 
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id_compra** | **int**| C\u00C3\u00B3digo identificador da Compra. | [optional] 
 **parcelada** | **bool**| Indica se a compra \u00C3\u00A9 parcelada. | [optional] 
 **juros** | **bool**| Indica se a compra \u00C3\u00A9 com ou sem juros. | [optional] 
 **tipo_origem_transacao** | **string**| Indica se a compra \u00C3\u00A9 ON-US ou OFF-US | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageCompraResponse**](PageCompraResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **simularAntecipacaoUsingGET**
> \br.com.conductor.pier.api.v2.model\AntecipacaoSimuladaResponse simularAntecipacaoUsingGET($id_conta, $id)

Simular antecipa\u00C3\u00A7\u00C3\u00A3o de parcelas

Simula a antecipa\u00C3\u00A7\u00C3\u00A3o de parcelas de um evento, listando todos os planos de parcelamento dispon\u00C3\u00ADveis, cujo desconto \u00C3\u00A9 calculado baseado na data da \u00C3\u00BAltima parcela em aberto.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\AntecipacaoApi();
$id_conta = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta.
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do evento.

try { 
    $result = $api_instance->simularAntecipacaoUsingGET($id_conta, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AntecipacaoApi->simularAntecipacaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_conta** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta. | 
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do evento. | 

### Return type

[**\br.com.conductor.pier.api.v2.model\AntecipacaoSimuladaResponse**](AntecipacaoSimuladaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

