# br.com.conductor.pier.api.v2.invoker\FAQApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adicionarUsingPOST**](FAQApi.md#adicionarUsingPOST) | **POST** /api/faqs | Adiciona uma nova FAQ
[**alterarUsingPUT7**](FAQApi.md#alterarUsingPUT7) | **PUT** /api/faqs/{id} | Alterar FAQ
[**consultarUsingGET18**](FAQApi.md#consultarUsingGET18) | **GET** /api/faqs/{id} | Consultar FAQ por id
[**listarUsingGET23**](FAQApi.md#listarUsingGET23) | **GET** /api/faqs | Lista FAQs


# **adicionarUsingPOST**
> \br.com.conductor.pier.api.v2.model\FaqResponse adicionarUsingPOST($pergunta, $resposta, $relevancia, $plataforma, $categoria, $status)

Adiciona uma nova FAQ

Adiciona uma nova FAQ

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\FAQApi();
$pergunta = "pergunta_example"; // string | Conte\u00FAdo da pergunta.
$resposta = "resposta_example"; // string | Conte\u00FAdo da resposta.
$relevancia = 56; // int | N\u00EDvel de relev\u00E2ncia da pergunta.
$plataforma = "plataforma_example"; // string | Plataforma em que a FAQ se encaixa.
$categoria = "categoria_example"; // string | Categoria de assunto do qual a FAQ se trata.
$status = "status_example"; // string | Status descrevendo a situa\u00E7\u00E3o atual da FAQ.

try { 
    $result = $api_instance->adicionarUsingPOST($pergunta, $resposta, $relevancia, $plataforma, $categoria, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FAQApi->adicionarUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pergunta** | **string**| Conte\u00FAdo da pergunta. | 
 **resposta** | **string**| Conte\u00FAdo da resposta. | 
 **relevancia** | **int**| N\u00EDvel de relev\u00E2ncia da pergunta. | [optional] 
 **plataforma** | **string**| Plataforma em que a FAQ se encaixa. | [optional] 
 **categoria** | **string**| Categoria de assunto do qual a FAQ se trata. | [optional] 
 **status** | **string**| Status descrevendo a situa\u00E7\u00E3o atual da FAQ. | [optional] 

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

Alterar FAQ

Alterar FAQ

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\FAQApi();
$id = 789; // int | Id
$pergunta = "pergunta_example"; // string | Conte\u00FAdo da pergunta.
$resposta = "resposta_example"; // string | Conte\u00FAdo da resposta.
$relevancia = 56; // int | N\u00EDvel de relev\u00E2ncia da pergunta.
$plataforma = "plataforma_example"; // string | Plataforma em que a FAQ se encaixa.
$categoria = "categoria_example"; // string | Categoria de assunto do qual a FAQ se trata.
$status = "status_example"; // string | Status descrevendo a situa\u00E7\u00E3o atual da FAQ.

try { 
    $result = $api_instance->alterarUsingPUT7($id, $pergunta, $resposta, $relevancia, $plataforma, $categoria, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FAQApi->alterarUsingPUT7: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id | 
 **pergunta** | **string**| Conte\u00FAdo da pergunta. | 
 **resposta** | **string**| Conte\u00FAdo da resposta. | 
 **relevancia** | **int**| N\u00EDvel de relev\u00E2ncia da pergunta. | [optional] 
 **plataforma** | **string**| Plataforma em que a FAQ se encaixa. | [optional] 
 **categoria** | **string**| Categoria de assunto do qual a FAQ se trata. | [optional] 
 **status** | **string**| Status descrevendo a situa\u00E7\u00E3o atual da FAQ. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\FaqResponse**](FaqResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET18**
> \br.com.conductor.pier.api.v2.model\FaqResponse consultarUsingGET18($id)

Consultar FAQ por id

Consulta os detalhes de uma determinada FAQ

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\FAQApi();
$id = 789; // int | Id

try { 
    $result = $api_instance->consultarUsingGET18($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FAQApi->consultarUsingGET18: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id | 

### Return type

[**\br.com.conductor.pier.api.v2.model\FaqResponse**](FaqResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET23**
> \br.com.conductor.pier.api.v2.model\PageFaqResponse listarUsingGET23($sort, $page, $limit, $id_faq, $pergunta, $resposta, $relevancia, $plataforma, $categoria, $status)

Lista FAQs

Lista todas as FAQs

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\FAQApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$id_faq = 789; // int | C\u00F3digo de identifica\u00E7\u00E3o da FAQ (id).
$pergunta = "pergunta_example"; // string | Conte\u00FAdo da pergunta.
$resposta = "resposta_example"; // string | Conte\u00FAdo da resposta.
$relevancia = 56; // int | N\u00EDvel de relev\u00E2ncia da pergunta.
$plataforma = "plataforma_example"; // string | Plataforma em que a FAQ se encaixa.
$categoria = "categoria_example"; // string | Categoria de assunto do qual a FAQ se trata.
$status = "status_example"; // string | Status descrevendo a situa\u00E7\u00E3o atual da FAQ.

try { 
    $result = $api_instance->listarUsingGET23($sort, $page, $limit, $id_faq, $pergunta, $resposta, $relevancia, $plataforma, $categoria, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FAQApi->listarUsingGET23: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **id_faq** | **int**| C\u00F3digo de identifica\u00E7\u00E3o da FAQ (id). | [optional] 
 **pergunta** | **string**| Conte\u00FAdo da pergunta. | [optional] 
 **resposta** | **string**| Conte\u00FAdo da resposta. | [optional] 
 **relevancia** | **int**| N\u00EDvel de relev\u00E2ncia da pergunta. | [optional] 
 **plataforma** | **string**| Plataforma em que a FAQ se encaixa. | [optional] 
 **categoria** | **string**| Categoria de assunto do qual a FAQ se trata. | [optional] 
 **status** | **string**| Status descrevendo a situa\u00E7\u00E3o atual da FAQ. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageFaqResponse**](PageFaqResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

