# br.com.conductor.pier.api.v2.invoker\GlobaltagaplicacaomobileApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**atualizarUsingPUT**](GlobaltagaplicacaomobileApi.md#atualizarUsingPUT) | **PUT** /api/aplicacoes-mobile/{id} | {{{aplicacao_mobile_resource_atualizar}}}
[**listarUsingGET3**](GlobaltagaplicacaomobileApi.md#listarUsingGET3) | **GET** /api/aplicacoes-mobile | {{{aplicacao_mobile_resource_listar}}}
[**salvarUsingPOST**](GlobaltagaplicacaomobileApi.md#salvarUsingPOST) | **POST** /api/aplicacoes-mobile | {{{aplicacao_mobile_resource_salvar}}}


# **atualizarUsingPUT**
> \br.com.conductor.pier.api.v2.model\AplicacaoMobileResponse atualizarUsingPUT($id, $update)

{{{aplicacao_mobile_resource_atualizar}}}

{{{aplicacao_mobile_resource_atualizar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagaplicacaomobileApi();
$id = 789; // int | {{{aplicacao_mobile_resource_atualizar_param_id}}}
$update = new \br.com.conductor.pier.api.v2.model\AplicacaoMobileUpdateValue_(); // \br.com.conductor.pier.api.v2.model\AplicacaoMobileUpdateValue_ | update

try { 
    $result = $api_instance->atualizarUsingPUT($id, $update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagaplicacaomobileApi->atualizarUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{aplicacao_mobile_resource_atualizar_param_id}}} | 
 **update** | [**\br.com.conductor.pier.api.v2.model\AplicacaoMobileUpdateValue_**](\br.com.conductor.pier.api.v2.model\AplicacaoMobileUpdateValue_.md)| update | 

### Return type

[**\br.com.conductor.pier.api.v2.model\AplicacaoMobileResponse**](AplicacaoMobileResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET3**
> \br.com.conductor.pier.api.v2.model\PageAplicacaoMobileResponse listarUsingGET3($sort, $page, $limit, $id, $id_plataforma_mobile)

{{{aplicacao_mobile_resource_listar}}}

{{{aplicacao_mobile_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagaplicacaomobileApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id = "id_example"; // string | {{{aplicacao_mobile_request_id_value}}}
$id_plataforma_mobile = 789; // int | {{{aplicacao_mobile_request_id_plataforma_mobile_value}}}

try { 
    $result = $api_instance->listarUsingGET3($sort, $page, $limit, $id, $id_plataforma_mobile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagaplicacaomobileApi->listarUsingGET3: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id** | **string**| {{{aplicacao_mobile_request_id_value}}} | [optional] 
 **id_plataforma_mobile** | **int**| {{{aplicacao_mobile_request_id_plataforma_mobile_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageAplicacaoMobileResponse**](PageAplicacaoMobileResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST**
> \br.com.conductor.pier.api.v2.model\AplicacaoMobileResponse salvarUsingPOST($persist)

{{{aplicacao_mobile_resource_salvar}}}

{{{aplicacao_mobile_resource_salvar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagaplicacaomobileApi();
$persist = new \br.com.conductor.pier.api.v2.model\AplicacaoMobilePersistValue_(); // \br.com.conductor.pier.api.v2.model\AplicacaoMobilePersistValue_ | persist

try { 
    $result = $api_instance->salvarUsingPOST($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagaplicacaomobileApi->salvarUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **persist** | [**\br.com.conductor.pier.api.v2.model\AplicacaoMobilePersistValue_**](\br.com.conductor.pier.api.v2.model\AplicacaoMobilePersistValue_.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\AplicacaoMobileResponse**](AplicacaoMobileResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

