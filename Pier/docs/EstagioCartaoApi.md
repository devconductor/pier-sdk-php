# br.com.conductor.pier.api.v2.invoker\EstagioCartaoApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**consultarEstagioCartaoUsingGET**](EstagioCartaoApi.md#consultarEstagioCartaoUsingGET) | **GET** /api/estagios-cartoes/{id_estagio_cartao} | Apresenta os dados de um determinado Estagio Cart\u00C3\u00A3o 
[**listarEstagiosCartoesUsingGET**](EstagioCartaoApi.md#listarEstagiosCartoesUsingGET) | **GET** /api/estagios-cartoes | Lista as op\u00C3\u00A7\u00C3\u00B5es de Est\u00C3\u00A1gios do Cart\u00C3\u00A3o 


# **consultarEstagioCartaoUsingGET**
> \br.com.conductor.pier.api.v2.model\EstagioCartao consultarEstagioCartaoUsingGET($id_estagio_cartao)

Apresenta os dados de um determinado Estagio Cart\u00C3\u00A3o 

Este m\u00C3\u00A9todo permite consultar os par\u00C3\u00A2metros de um determinado Est\u00C3\u00A1gio de Entrega do Cart\u00C3\u00A3o a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).  

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstagioCartaoApi();
$id_estagio_cartao = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Est\u00C3\u00A1gio de Entrega do Cart\u00C3\u00A3o (id).

try { 
    $result = $api_instance->consultarEstagioCartaoUsingGET($id_estagio_cartao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstagioCartaoApi->consultarEstagioCartaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_estagio_cartao** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Est\u00C3\u00A1gio de Entrega do Cart\u00C3\u00A3o (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\EstagioCartao**](EstagioCartao.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarEstagiosCartoesUsingGET**
> \br.com.conductor.pier.api.v2.model\PageEstagiosCartoes listarEstagiosCartoesUsingGET($id, $nome, $page, $limit)

Lista as op\u00C3\u00A7\u00C3\u00B5es de Est\u00C3\u00A1gios do Cart\u00C3\u00A3o 

Este m\u00C3\u00A9todo permite que sejam listadas as op\u00C3\u00A7\u00C3\u00B5es de Est\u00C3\u00A1gio de Entrega que podem ser atribu\u00C3\u00ADdas aos Cart\u00C3\u00B5es.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstagioCartaoApi();
$id = 789; // int | Id do est\u00C3\u00A1gio cart\u00C3\u00A3o
$nome = "nome_example"; // string | Nome do est\u00C3\u00A1gio cart\u00C3\u00A3o
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100)

try { 
    $result = $api_instance->listarEstagiosCartoesUsingGET($id, $nome, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstagioCartaoApi->listarEstagiosCartoesUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id do est\u00C3\u00A1gio cart\u00C3\u00A3o | [optional] 
 **nome** | **string**| Nome do est\u00C3\u00A1gio cart\u00C3\u00A3o | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageEstagiosCartoes**](PageEstagiosCartoes.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

