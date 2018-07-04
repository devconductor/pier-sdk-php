# br.com.conductor.pier.api.v2.invoker\GlobaltagplataformamobileApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**atualizarUsingPUT1**](GlobaltagplataformamobileApi.md#atualizarUsingPUT1) | **PUT** /api/plataformas-mobile/{id} | {{{plataforma_mobile_resource_atualizar}}}
[**listarUsingGET40**](GlobaltagplataformamobileApi.md#listarUsingGET40) | **GET** /api/plataformas-mobile | {{{plataforma_mobile_resource_listar}}}
[**salvarUsingPOST26**](GlobaltagplataformamobileApi.md#salvarUsingPOST26) | **POST** /api/plataformas-mobile | {{{plataforma_mobile_resource_salvar}}}


# **atualizarUsingPUT1**
> \br.com.conductor.pier.api.v2.model\PlataformaMobileResponse atualizarUsingPUT1($id, $update)

{{{plataforma_mobile_resource_atualizar}}}

{{{plataforma_mobile_resource_atualizar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagplataformamobileApi();
$id = 789; // int | {{{plataforma_mobile_resource_atualizar_param_id}}}
$update = new \br.com.conductor.pier.api.v2.model\PlataformaMobileUpdateValue_(); // \br.com.conductor.pier.api.v2.model\PlataformaMobileUpdateValue_ | update

try { 
    $result = $api_instance->atualizarUsingPUT1($id, $update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagplataformamobileApi->atualizarUsingPUT1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{plataforma_mobile_resource_atualizar_param_id}}} | 
 **update** | [**\br.com.conductor.pier.api.v2.model\PlataformaMobileUpdateValue_**](\br.com.conductor.pier.api.v2.model\PlataformaMobileUpdateValue_.md)| update | 

### Return type

[**\br.com.conductor.pier.api.v2.model\PlataformaMobileResponse**](PlataformaMobileResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET40**
> \br.com.conductor.pier.api.v2.model\PagePlataformaMobileResponse listarUsingGET40($sort, $page, $limit, $nome)

{{{plataforma_mobile_resource_listar}}}

{{{plataforma_mobile_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagplataformamobileApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$nome = "nome_example"; // string | {{{plataforma_mobile_request_nome_value}}}

try { 
    $result = $api_instance->listarUsingGET40($sort, $page, $limit, $nome);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagplataformamobileApi->listarUsingGET40: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **nome** | **string**| {{{plataforma_mobile_request_nome_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PagePlataformaMobileResponse**](PagePlataformaMobileResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST26**
> \br.com.conductor.pier.api.v2.model\PlataformaMobileResponse salvarUsingPOST26($persist)

{{{plataforma_mobile_resource_salvar}}}

{{{plataforma_mobile_resource_salvar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagplataformamobileApi();
$persist = new \br.com.conductor.pier.api.v2.model\PlataformaMobilePersistValue_(); // \br.com.conductor.pier.api.v2.model\PlataformaMobilePersistValue_ | persist

try { 
    $result = $api_instance->salvarUsingPOST26($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagplataformamobileApi->salvarUsingPOST26: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **persist** | [**\br.com.conductor.pier.api.v2.model\PlataformaMobilePersistValue_**](\br.com.conductor.pier.api.v2.model\PlataformaMobilePersistValue_.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\PlataformaMobileResponse**](PlataformaMobileResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

