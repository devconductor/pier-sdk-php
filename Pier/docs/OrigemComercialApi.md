# br.com.conductor.pier.api.v2.invoker\OrigemComercialApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**consultarOrigemComercialUsingGET**](OrigemComercialApi.md#consultarOrigemComercialUsingGET) | **GET** /api/origens-comerciais/{id_origem_comercial} | Opera\u00C3\u00A7\u00C3\u00A3o utilizada para consultar uma determinada Origem Comercial
[**listarOrigensComerciaisUsingGET**](OrigemComercialApi.md#listarOrigensComerciaisUsingGET) | **GET** /api/origens-comerciais | Opera\u00C3\u00A7\u00C3\u00A3o utilizada para listar Origens Comerciais


# **consultarOrigemComercialUsingGET**
> \br.com.conductor.pier.api.v2.model\OrigemComercial consultarOrigemComercialUsingGET($id_origem_comercial)

Opera\u00C3\u00A7\u00C3\u00A3o utilizada para consultar uma determinada Origem Comercial

Este m\u00C3\u00A9todo permite que sejam listados os registros de uma determinada Origem Comercial existente na base do emissor. Para isso, \u00C3\u00A9 preciso informar o seu respectivo c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\OrigemComercialApi();
$id_origem_comercial = 789; // int | ID da Origem Comercial

try { 
    $result = $api_instance->consultarOrigemComercialUsingGET($id_origem_comercial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrigemComercialApi->consultarOrigemComercialUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_origem_comercial** | **int**| ID da Origem Comercial | 

### Return type

[**\br.com.conductor.pier.api.v2.model\OrigemComercial**](OrigemComercial.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarOrigensComerciaisUsingGET**
> \br.com.conductor.pier.api.v2.model\PageOrigensComerciais listarOrigensComerciaisUsingGET($id, $nome, $status, $page, $limit)

Opera\u00C3\u00A7\u00C3\u00A3o utilizada para listar Origens Comerciais

Este m\u00C3\u00A9todo permite que sejam listadas as Origens Comerciais existentes na base do emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\OrigemComercialApi();
$id = 789; // int | Id da origem comercial
$nome = "nome_example"; // string | Nome da origem comercial
$status = 56; // int | Status da origem comercial
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100)

try { 
    $result = $api_instance->listarOrigensComerciaisUsingGET($id, $nome, $status, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrigemComercialApi->listarOrigensComerciaisUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id da origem comercial | [optional] 
 **nome** | **string**| Nome da origem comercial | [optional] 
 **status** | **int**| Status da origem comercial | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageOrigensComerciais**](PageOrigensComerciais.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

