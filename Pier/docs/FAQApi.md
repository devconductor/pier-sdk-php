# br.com.conductor.pier.api.v2.invoker\FAQApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adicionarUsingPOST**](FAQApi.md#adicionarUsingPOST) | **POST** /api/faqs | Adiciona uma nova FAQ
[**alterarUsingPUT2**](FAQApi.md#alterarUsingPUT2) | **PUT** /api/faqs/{id} | Alterar FAQ
[**consultarUsingGET5**](FAQApi.md#consultarUsingGET5) | **GET** /api/faqs/{id} | Consultar FAQ por id
[**listarUsingGET5**](FAQApi.md#listarUsingGET5) | **GET** /api/faqs | Lista FAQs


# **adicionarUsingPOST**
> \br.com.conductor.pier.api.v2.model\FAQ adicionarUsingPOST($pergunta, $resposta, $relevancia, $plataforma, $categoria, $status)

Adiciona uma nova FAQ

Adiciona uma nova FAQ

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\FAQApi();
$pergunta = "pergunta_example"; // string | Conte\u00C3\u00BAdo da pergunta.
$resposta = "resposta_example"; // string | Conte\u00C3\u00BAdo da resposta.
$relevancia = 56; // int | N\u00C3\u00ADvel de relev\u00C3\u00A2ncia da pergunta.
$plataforma = "plataforma_example"; // string | Plataforma em que a FAQ se encaixa.
$categoria = "categoria_example"; // string | Categoria de assunto do qual a FAQ se trata.
$status = "status_example"; // string | Status descrevendo a situa\u00C3\u00A7\u00C3\u00A3o atual da FAQ.

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
 **pergunta** | **string**| Conte\u00C3\u00BAdo da pergunta. | 
 **resposta** | **string**| Conte\u00C3\u00BAdo da resposta. | 
 **relevancia** | **int**| N\u00C3\u00ADvel de relev\u00C3\u00A2ncia da pergunta. | [optional] 
 **plataforma** | **string**| Plataforma em que a FAQ se encaixa. | [optional] 
 **categoria** | **string**| Categoria de assunto do qual a FAQ se trata. | [optional] 
 **status** | **string**| Status descrevendo a situa\u00C3\u00A7\u00C3\u00A3o atual da FAQ. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\FAQ**](FAQ.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarUsingPUT2**
> \br.com.conductor.pier.api.v2.model\FAQ alterarUsingPUT2($id, $pergunta, $resposta, $relevancia, $plataforma, $categoria, $status)

Alterar FAQ

Alterar FAQ

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\FAQApi();
$id = 789; // int | Id
$pergunta = "pergunta_example"; // string | Conte\u00C3\u00BAdo da pergunta.
$resposta = "resposta_example"; // string | Conte\u00C3\u00BAdo da resposta.
$relevancia = 56; // int | N\u00C3\u00ADvel de relev\u00C3\u00A2ncia da pergunta.
$plataforma = "plataforma_example"; // string | Plataforma em que a FAQ se encaixa.
$categoria = "categoria_example"; // string | Categoria de assunto do qual a FAQ se trata.
$status = "status_example"; // string | Status descrevendo a situa\u00C3\u00A7\u00C3\u00A3o atual da FAQ.

try { 
    $result = $api_instance->alterarUsingPUT2($id, $pergunta, $resposta, $relevancia, $plataforma, $categoria, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FAQApi->alterarUsingPUT2: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id | 
 **pergunta** | **string**| Conte\u00C3\u00BAdo da pergunta. | 
 **resposta** | **string**| Conte\u00C3\u00BAdo da resposta. | 
 **relevancia** | **int**| N\u00C3\u00ADvel de relev\u00C3\u00A2ncia da pergunta. | [optional] 
 **plataforma** | **string**| Plataforma em que a FAQ se encaixa. | [optional] 
 **categoria** | **string**| Categoria de assunto do qual a FAQ se trata. | [optional] 
 **status** | **string**| Status descrevendo a situa\u00C3\u00A7\u00C3\u00A3o atual da FAQ. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\FAQ**](FAQ.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET5**
> \br.com.conductor.pier.api.v2.model\FAQ consultarUsingGET5($id)

Consultar FAQ por id

Consulta os detalhes de uma determinada FAQ

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\FAQApi();
$id = 789; // int | Id

try { 
    $result = $api_instance->consultarUsingGET5($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FAQApi->consultarUsingGET5: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id | 

### Return type

[**\br.com.conductor.pier.api.v2.model\FAQ**](FAQ.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET5**
> \br.com.conductor.pier.api.v2.model\PageFaqs listarUsingGET5($page, $limit, $id_faq, $pergunta, $resposta, $relevancia, $plataforma, $categoria, $status)

Lista FAQs

Lista todas as FAQs

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\FAQApi();
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100)
$id_faq = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da FAQ (id).
$pergunta = "pergunta_example"; // string | Conte\u00C3\u00BAdo da pergunta.
$resposta = "resposta_example"; // string | Conte\u00C3\u00BAdo da resposta.
$relevancia = 56; // int | N\u00C3\u00ADvel de relev\u00C3\u00A2ncia da pergunta.
$plataforma = "plataforma_example"; // string | Plataforma em que a FAQ se encaixa.
$categoria = "categoria_example"; // string | Categoria de assunto do qual a FAQ se trata.
$status = "status_example"; // string | Status descrevendo a situa\u00C3\u00A7\u00C3\u00A3o atual da FAQ.

try { 
    $result = $api_instance->listarUsingGET5($page, $limit, $id_faq, $pergunta, $resposta, $relevancia, $plataforma, $categoria, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FAQApi->listarUsingGET5: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) | [optional] 
 **id_faq** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da FAQ (id). | [optional] 
 **pergunta** | **string**| Conte\u00C3\u00BAdo da pergunta. | [optional] 
 **resposta** | **string**| Conte\u00C3\u00BAdo da resposta. | [optional] 
 **relevancia** | **int**| N\u00C3\u00ADvel de relev\u00C3\u00A2ncia da pergunta. | [optional] 
 **plataforma** | **string**| Plataforma em que a FAQ se encaixa. | [optional] 
 **categoria** | **string**| Categoria de assunto do qual a FAQ se trata. | [optional] 
 **status** | **string**| Status descrevendo a situa\u00C3\u00A7\u00C3\u00A3o atual da FAQ. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageFaqs**](PageFaqs.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

