# br.com.conductor.pier.api.v2.invoker\PermissaoPaisesApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**consultarPaisUsingGET**](PermissaoPaisesApi.md#consultarPaisUsingGET) | **GET** /api/paises/{id} | Apresenta dados de um determinado pa\u00C3\u00ADs
[**listarContinentesUsingGET**](PermissaoPaisesApi.md#listarContinentesUsingGET) | **GET** /api/continentes | Lista os continentes
[**listarPaisesUsingGET**](PermissaoPaisesApi.md#listarPaisesUsingGET) | **GET** /api/paises | Lista os pa\u00C3\u00ADses


# **consultarPaisUsingGET**
> \br.com.conductor.pier.api.v2.model\PaisResponse consultarPaisUsingGET($id)

Apresenta dados de um determinado pa\u00C3\u00ADs

Este m\u00C3\u00A9todo permite consultar dados de um determinado pa\u00C3\u00ADs a partir de seu codigo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\PermissaoPaisesApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do pa\u00C3\u00ADs (id).

try { 
    $result = $api_instance->consultarPaisUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissaoPaisesApi->consultarPaisUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do pa\u00C3\u00ADs (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\PaisResponse**](PaisResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarContinentesUsingGET**
> object[] listarContinentesUsingGET()

Lista os continentes

Este recurso permite listar os continentes utilizados no recurso de permiss\u00C3\u00A3o de uso do cart\u00C3\u00A3o no exterior

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\PermissaoPaisesApi();

try { 
    $result = $api_instance->listarContinentesUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissaoPaisesApi->listarContinentesUsingGET: ', $e->getMessage(), "\n";
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

# **listarPaisesUsingGET**
> \br.com.conductor.pier.api.v2.model\PagePaisResponse listarPaisesUsingGET($sort, $page, $limit, $codigo, $sigla, $descricao, $continente, $flag_ativo)

Lista os pa\u00C3\u00ADses

Este recurso permite listar os pa\u00C3\u00ADses.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\PermissaoPaisesApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$codigo = "codigo_example"; // string | C\u00C3\u00B3digo do pa\u00C3\u00ADs
$sigla = "sigla_example"; // string | Sigla do pa\u00C3\u00ADs
$descricao = "descricao_example"; // string | Nome do pa\u00C3\u00ADs
$continente = "continente_example"; // string | Continente no qual o pa\u00C3\u00ADs faz parte
$flag_ativo = true; // bool | Atributo que representa se o pa\u00C3\u00ADs est\u00C3\u00A1 ativo

try { 
    $result = $api_instance->listarPaisesUsingGET($sort, $page, $limit, $codigo, $sigla, $descricao, $continente, $flag_ativo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissaoPaisesApi->listarPaisesUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **codigo** | **string**| C\u00C3\u00B3digo do pa\u00C3\u00ADs | [optional] 
 **sigla** | **string**| Sigla do pa\u00C3\u00ADs | [optional] 
 **descricao** | **string**| Nome do pa\u00C3\u00ADs | [optional] 
 **continente** | **string**| Continente no qual o pa\u00C3\u00ADs faz parte | [optional] 
 **flag_ativo** | **bool**| Atributo que representa se o pa\u00C3\u00ADs est\u00C3\u00A1 ativo | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PagePaisResponse**](PagePaisResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

