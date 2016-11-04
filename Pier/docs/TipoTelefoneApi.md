# br.com.conductor.pier.api.v2.invoker\TipoTelefoneApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**consultarUsingGET8**](TipoTelefoneApi.md#consultarUsingGET8) | **GET** /api/tipos-telefones/{id_tipo_telefone} | Apresenta os dados de um determinado Tipo de Telefone
[**listarUsingGET9**](TipoTelefoneApi.md#listarUsingGET9) | **GET** /api/tipos-telefones | Lista os Tipos de Telefones


# **consultarUsingGET8**
> \br.com.conductor.pier.api.v2.model\TipoTelefone consultarUsingGET8($id_tipo_telefone)

Apresenta os dados de um determinado Tipo de Telefone

Este m\u00C3\u00A9todo permite consultar um determinado Tipo de Telefone a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\TipoTelefoneApi();
$id_tipo_telefone = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo do Telefone (id)

try { 
    $result = $api_instance->consultarUsingGET8($id_tipo_telefone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TipoTelefoneApi->consultarUsingGET8: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_tipo_telefone** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo do Telefone (id) | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TipoTelefone**](TipoTelefone.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET9**
> \br.com.conductor.pier.api.v2.model\PageTipoTelefones listarUsingGET9($id, $nome, $page, $limit)

Lista os Tipos de Telefones

Este m\u00C3\u00A9todo permite que sejam listados os Tipos de Telefones existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\TipoTelefoneApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo do Telefone (id).
$nome = "nome_example"; // string | Nome do Tipo do Telefone
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100)

try { 
    $result = $api_instance->listarUsingGET9($id, $nome, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TipoTelefoneApi->listarUsingGET9: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo do Telefone (id). | [optional] 
 **nome** | **string**| Nome do Tipo do Telefone | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTipoTelefones**](PageTipoTelefones.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

