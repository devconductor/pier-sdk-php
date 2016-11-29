# br.com.conductor.pier.api.v2.invoker\StatusImpressaoApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**consultarUsingGET5**](StatusImpressaoApi.md#consultarUsingGET5) | **GET** /api/status-impressoes/{id_status_impressao} | Apresenta os dados de um determinado Status Impress\u00C3\u00A3o
[**listarUsingGET6**](StatusImpressaoApi.md#listarUsingGET6) | **GET** /api/status-impressoes | Lista as op\u00C3\u00A7\u00C3\u00B5es de Status Impress\u00C3\u00A3o


# **consultarUsingGET5**
> \br.com.conductor.pier.api.v2.model\StatusImpressao consultarUsingGET5($id_status_impressao)

Apresenta os dados de um determinado Status Impress\u00C3\u00A3o

Este m\u00C3\u00A9todo permite consultar os par\u00C3\u00A2metros de um determinado Status de Impress\u00C3\u00A3o do Cart\u00C3\u00A3o a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\StatusImpressaoApi();
$id_status_impressao = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Status de Impress\u00C3\u00A3o do Cart\u00C3\u00A3o (id).

try { 
    $result = $api_instance->consultarUsingGET5($id_status_impressao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusImpressaoApi->consultarUsingGET5: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_status_impressao** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Status de Impress\u00C3\u00A3o do Cart\u00C3\u00A3o (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\StatusImpressao**](StatusImpressao.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET6**
> \br.com.conductor.pier.api.v2.model\PageStatusImpressao listarUsingGET6($id, $nome, $page, $limit)

Lista as op\u00C3\u00A7\u00C3\u00B5es de Status Impress\u00C3\u00A3o

Este m\u00C3\u00A9todo permite que sejam listadas as op\u00C3\u00A7\u00C3\u00B5es de Status Impress\u00C3\u00A3o que podem ser atribu\u00C3\u00ADdas aos Cart\u00C3\u00B5es.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\StatusImpressaoApi();
$id = 789; // int | Id do est\u00C3\u00A1gio cart\u00C3\u00A3o
$nome = "nome_example"; // string | Nome do status impress\u00C3\u00A3o
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100)

try { 
    $result = $api_instance->listarUsingGET6($id, $nome, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusImpressaoApi->listarUsingGET6: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id do est\u00C3\u00A1gio cart\u00C3\u00A3o | [optional] 
 **nome** | **string**| Nome do status impress\u00C3\u00A3o | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageStatusImpressao**](PageStatusImpressao.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

