# br.com.conductor.pier.api.v1_1.invoker\StatusCartoApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**consultarStatusCartaoUsingGET**](StatusCartoApi.md#consultarStatusCartaoUsingGET) | **GET** /api/status-cartoes/{id_status_cartao} | Apresenta os dados de um determinado Status Cart\u00C3\u00A3o 
[**listarStatusCartoesUsingGET**](StatusCartoApi.md#listarStatusCartoesUsingGET) | **GET** /api/status-cartoes | Lista as op\u00C3\u00A7\u00C3\u00B5es de Status do Cart\u00C3\u00A3o 


# **consultarStatusCartaoUsingGET**
> \br.com.conductor.pier.api.v1_1.model\EstGioCartO consultarStatusCartaoUsingGET($id_status_cartao)

Apresenta os dados de um determinado Status Cart\u00C3\u00A3o 

Este m\u00C3\u00A9todo permite consultar os par\u00C3\u00A2metros de um determinado Status de Cart\u00C3\u00A3o a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).  

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v1_1.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v1_1.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v1_1.invoker\Api\StatusCartoApi();
$id_status_cartao = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Est\u00C3\u00A1gio de Entrega do Cart\u00C3\u00A3o (id).

try { 
    $result = $api_instance->consultarStatusCartaoUsingGET($id_status_cartao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusCartoApi->consultarStatusCartaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_status_cartao** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Est\u00C3\u00A1gio de Entrega do Cart\u00C3\u00A3o (id). | 

### Return type

[**\br.com.conductor.pier.api.v1_1.model\EstGioCartO**](EstGioCartO.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarStatusCartoesUsingGET**
> \br.com.conductor.pier.api.v1_1.model\ListaDeStatusCartEs listarStatusCartoesUsingGET($id_status_cartao, $nome, $id_status_destino_desbloqueio, $cancela_conta, $permite_desbloqueio, $page, $limit)

Lista as op\u00C3\u00A7\u00C3\u00B5es de Status do Cart\u00C3\u00A3o 

Este m\u00C3\u00A9todo permite que sejam listadas as possibilidades de Status que podem ser atribu\u00C3\u00ADdas aos Cart\u00C3\u00B5es.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v1_1.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v1_1.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v1_1.invoker\Api\StatusCartoApi();
$id_status_cartao = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Status do Cart\u00C3\u00A3o (id).
$nome = "nome_example"; // string | Nome atribu\u00C3\u00ADdo ao Status de Entrega do Cart\u00C3\u00A3o.
$id_status_destino_desbloqueio = 789; // int | Indica qual o idStatusCartao que deve ser atribu\u00C3\u00ADdo a um idCartao quando ele for desbloqueado.
$cancela_conta = "cancela_conta_example"; // string | Indica que Cart\u00C3\u00B5es com este idStatusCartao podem ter a sua conta Cancelada.
$permite_desbloqueio = "permite_desbloqueio_example"; // string | Indica que Cart\u00C3\u00B5es com este idStatusCartao podem ser Desbloqueados.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100)

try { 
    $result = $api_instance->listarStatusCartoesUsingGET($id_status_cartao, $nome, $id_status_destino_desbloqueio, $cancela_conta, $permite_desbloqueio, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusCartoApi->listarStatusCartoesUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_status_cartao** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Status do Cart\u00C3\u00A3o (id). | [optional] 
 **nome** | **string**| Nome atribu\u00C3\u00ADdo ao Status de Entrega do Cart\u00C3\u00A3o. | [optional] 
 **id_status_destino_desbloqueio** | **int**| Indica qual o idStatusCartao que deve ser atribu\u00C3\u00ADdo a um idCartao quando ele for desbloqueado. | [optional] 
 **cancela_conta** | **string**| Indica que Cart\u00C3\u00B5es com este idStatusCartao podem ter a sua conta Cancelada. | [optional] 
 **permite_desbloqueio** | **string**| Indica que Cart\u00C3\u00B5es com este idStatusCartao podem ser Desbloqueados. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v1_1.model\ListaDeStatusCartEs**](ListaDeStatusCartEs.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

