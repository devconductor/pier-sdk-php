# br.com.conductor.pier.api.v2.invoker\PermissaoPaisApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**consultarPaisUsingGET**](PermissaoPaisApi.md#consultarPaisUsingGET) | **GET** /api/paises/{id} | Apresenta dados de um determinado pa\u00EDs
[**listarContinentesUsingGET**](PermissaoPaisApi.md#listarContinentesUsingGET) | **GET** /api/continentes | Lista os continentes
[**listarPaisesUsingGET**](PermissaoPaisApi.md#listarPaisesUsingGET) | **GET** /api/paises | Lista os pa\u00EDses


# **consultarPaisUsingGET**
> \br.com.conductor.pier.api.v2.model\PaisResponse consultarPaisUsingGET($id)

Apresenta dados de um determinado pa\u00EDs

Este m\u00E9todo permite consultar dados de um determinado pa\u00EDs a partir de seu codigo de identifica\u00E7\u00E3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\PermissaoPaisApi();
$id = 789; // int | C\u00F3digo de identifica\u00E7\u00E3o do pa\u00EDs (id).

try { 
    $result = $api_instance->consultarPaisUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissaoPaisApi->consultarPaisUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de identifica\u00E7\u00E3o do pa\u00EDs (id). | 

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

Este recurso permite listar os continentes utilizados no recurso de permiss\u00E3o de uso do cart\u00E3o no exterior

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\PermissaoPaisApi();

try { 
    $result = $api_instance->listarContinentesUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissaoPaisApi->listarContinentesUsingGET: ', $e->getMessage(), "\n";
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

Lista os pa\u00EDses

Este recurso permite listar os pa\u00EDses.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\PermissaoPaisApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$codigo = "codigo_example"; // string | C\u00F3digo do pa\u00EDs
$sigla = "sigla_example"; // string | Sigla do pa\u00EDs
$descricao = "descricao_example"; // string | Nome do pa\u00EDs
$continente = "continente_example"; // string | Continente no qual o pa\u00EDs faz parte
$flag_ativo = true; // bool | Atributo que representa se o pa\u00EDs est\u00E1 ativo

try { 
    $result = $api_instance->listarPaisesUsingGET($sort, $page, $limit, $codigo, $sigla, $descricao, $continente, $flag_ativo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissaoPaisApi->listarPaisesUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **codigo** | **string**| C\u00F3digo do pa\u00EDs | [optional] 
 **sigla** | **string**| Sigla do pa\u00EDs | [optional] 
 **descricao** | **string**| Nome do pa\u00EDs | [optional] 
 **continente** | **string**| Continente no qual o pa\u00EDs faz parte | [optional] 
 **flag_ativo** | **bool**| Atributo que representa se o pa\u00EDs est\u00E1 ativo | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PagePaisResponse**](PagePaisResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

