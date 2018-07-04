# br.com.conductor.pier.api.v2.invoker\GlobaltagpermissaopaisApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**consultarPaisUsingGET**](GlobaltagpermissaopaisApi.md#consultarPaisUsingGET) | **GET** /api/paises/{id} | {{{permissao_pais_resource_consultar_pais}}}
[**listarContinentesUsingGET**](GlobaltagpermissaopaisApi.md#listarContinentesUsingGET) | **GET** /api/continentes | {{{enum_resource_listar_continentes}}}
[**listarPaisesUsingGET**](GlobaltagpermissaopaisApi.md#listarPaisesUsingGET) | **GET** /api/paises | {{{permissao_pais_resource_listar_paises}}}


# **consultarPaisUsingGET**
> \br.com.conductor.pier.api.v2.model\PaisResponse consultarPaisUsingGET($id)

{{{permissao_pais_resource_consultar_pais}}}

{{{permissao_pais_resource_consultar_pais_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagpermissaopaisApi();
$id = 789; // int | {{{permissao_pais_resource_consultar_pais_param_id}}}

try { 
    $result = $api_instance->consultarPaisUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagpermissaopaisApi->consultarPaisUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{permissao_pais_resource_consultar_pais_param_id}}} | 

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

{{{enum_resource_listar_continentes}}}

{{{enum_resource_listar_continentes_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagpermissaopaisApi();

try { 
    $result = $api_instance->listarContinentesUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagpermissaopaisApi->listarContinentesUsingGET: ', $e->getMessage(), "\n";
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

{{{permissao_pais_resource_listar_paises}}}

{{{permissao_pais_resource_listar_paises_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagpermissaopaisApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$codigo = "codigo_example"; // string | {{{pais_request_codigo_value}}}
$sigla = "sigla_example"; // string | {{{pais_request_sigla_value}}}
$descricao = "descricao_example"; // string | {{{pais_request_descricao_value}}}
$continente = "continente_example"; // string | {{{pais_request_continente_value}}}
$flag_ativo = true; // bool | {{{pais_request_flag_ativo_value}}}

try { 
    $result = $api_instance->listarPaisesUsingGET($sort, $page, $limit, $codigo, $sigla, $descricao, $continente, $flag_ativo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagpermissaopaisApi->listarPaisesUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **codigo** | **string**| {{{pais_request_codigo_value}}} | [optional] 
 **sigla** | **string**| {{{pais_request_sigla_value}}} | [optional] 
 **descricao** | **string**| {{{pais_request_descricao_value}}} | [optional] 
 **continente** | **string**| {{{pais_request_continente_value}}} | [optional] 
 **flag_ativo** | **bool**| {{{pais_request_flag_ativo_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PagePaisResponse**](PagePaisResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

