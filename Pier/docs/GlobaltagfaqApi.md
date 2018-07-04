# br.com.conductor.pier.api.v2.invoker\GlobaltagfaqApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adicionarUsingPOST**](GlobaltagfaqApi.md#adicionarUsingPOST) | **POST** /api/faqs | {{{faq_resource_adicionar}}}
[**alterarUsingPUT7**](GlobaltagfaqApi.md#alterarUsingPUT7) | **PUT** /api/faqs/{id} | {{{faq_resource_alterar}}}
[**consultarUsingGET20**](GlobaltagfaqApi.md#consultarUsingGET20) | **GET** /api/faqs/{id} | {{{faq_resource_consultar}}}
[**listarUsingGET26**](GlobaltagfaqApi.md#listarUsingGET26) | **GET** /api/faqs | {{{faq_resource_listar}}}


# **adicionarUsingPOST**
> \br.com.conductor.pier.api.v2.model\FaqResponse adicionarUsingPOST($pergunta, $resposta, $relevancia, $plataforma, $categoria, $status)

{{{faq_resource_adicionar}}}

{{{faq_resource_adicionar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagfaqApi();
$pergunta = "pergunta_example"; // string | {{{faq_persist_pergunta_value}}}
$resposta = "resposta_example"; // string | {{{faq_persist_resposta_value}}}
$relevancia = 56; // int | {{{faq_persist_relevancia_value}}}
$plataforma = "plataforma_example"; // string | {{{faq_persist_plataforma_value}}}
$categoria = "categoria_example"; // string | {{{faq_persist_categoria_value}}}
$status = "status_example"; // string | {{{faq_persist_status_value}}}

try { 
    $result = $api_instance->adicionarUsingPOST($pergunta, $resposta, $relevancia, $plataforma, $categoria, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagfaqApi->adicionarUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pergunta** | **string**| {{{faq_persist_pergunta_value}}} | 
 **resposta** | **string**| {{{faq_persist_resposta_value}}} | 
 **relevancia** | **int**| {{{faq_persist_relevancia_value}}} | [optional] 
 **plataforma** | **string**| {{{faq_persist_plataforma_value}}} | [optional] 
 **categoria** | **string**| {{{faq_persist_categoria_value}}} | [optional] 
 **status** | **string**| {{{faq_persist_status_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\FaqResponse**](FaqResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarUsingPUT7**
> \br.com.conductor.pier.api.v2.model\FaqResponse alterarUsingPUT7($id, $pergunta, $resposta, $relevancia, $plataforma, $categoria, $status)

{{{faq_resource_alterar}}}

{{{faq_resource_alterar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagfaqApi();
$id = 789; // int | {{{faq_resource_alterar_param_id_faq}}}
$pergunta = "pergunta_example"; // string | {{{faq_persist_pergunta_value}}}
$resposta = "resposta_example"; // string | {{{faq_persist_resposta_value}}}
$relevancia = 56; // int | {{{faq_persist_relevancia_value}}}
$plataforma = "plataforma_example"; // string | {{{faq_persist_plataforma_value}}}
$categoria = "categoria_example"; // string | {{{faq_persist_categoria_value}}}
$status = "status_example"; // string | {{{faq_persist_status_value}}}

try { 
    $result = $api_instance->alterarUsingPUT7($id, $pergunta, $resposta, $relevancia, $plataforma, $categoria, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagfaqApi->alterarUsingPUT7: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{faq_resource_alterar_param_id_faq}}} | 
 **pergunta** | **string**| {{{faq_persist_pergunta_value}}} | 
 **resposta** | **string**| {{{faq_persist_resposta_value}}} | 
 **relevancia** | **int**| {{{faq_persist_relevancia_value}}} | [optional] 
 **plataforma** | **string**| {{{faq_persist_plataforma_value}}} | [optional] 
 **categoria** | **string**| {{{faq_persist_categoria_value}}} | [optional] 
 **status** | **string**| {{{faq_persist_status_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\FaqResponse**](FaqResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET20**
> \br.com.conductor.pier.api.v2.model\FaqResponse consultarUsingGET20($id)

{{{faq_resource_consultar}}}

{{{faq_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagfaqApi();
$id = 789; // int | {{{faq_resource_consultar_param_id_faq}}}

try { 
    $result = $api_instance->consultarUsingGET20($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagfaqApi->consultarUsingGET20: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{faq_resource_consultar_param_id_faq}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\FaqResponse**](FaqResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET26**
> \br.com.conductor.pier.api.v2.model\PageFaqResponse listarUsingGET26($sort, $page, $limit, $id_faq, $pergunta, $resposta, $relevancia, $plataforma, $categoria, $status)

{{{faq_resource_listar}}}

{{{faq_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagfaqApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id_faq = 789; // int | {{{faq_request_id_faq_value}}}
$pergunta = "pergunta_example"; // string | {{{faq_request_pergunta_value}}}
$resposta = "resposta_example"; // string | {{{faq_request_resposta_value}}}
$relevancia = 56; // int | {{{faq_request_relevancia_value}}}
$plataforma = "plataforma_example"; // string | {{{faq_request_plataforma_value}}}
$categoria = "categoria_example"; // string | {{{faq_request_categoria_value}}}
$status = "status_example"; // string | {{{faq_request_status_value}}}

try { 
    $result = $api_instance->listarUsingGET26($sort, $page, $limit, $id_faq, $pergunta, $resposta, $relevancia, $plataforma, $categoria, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagfaqApi->listarUsingGET26: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id_faq** | **int**| {{{faq_request_id_faq_value}}} | [optional] 
 **pergunta** | **string**| {{{faq_request_pergunta_value}}} | [optional] 
 **resposta** | **string**| {{{faq_request_resposta_value}}} | [optional] 
 **relevancia** | **int**| {{{faq_request_relevancia_value}}} | [optional] 
 **plataforma** | **string**| {{{faq_request_plataforma_value}}} | [optional] 
 **categoria** | **string**| {{{faq_request_categoria_value}}} | [optional] 
 **status** | **string**| {{{faq_request_status_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageFaqResponse**](PageFaqResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

