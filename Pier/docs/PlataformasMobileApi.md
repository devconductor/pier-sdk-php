# br.com.conductor.pier.api.v2.invoker\PlataformasMobileApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**atualizarUsingPUT1**](PlataformasMobileApi.md#atualizarUsingPUT1) | **PUT** /api/plataformas-mobile/{id} | Atualiza Plataforma Mobile
[**listarUsingGET17**](PlataformasMobileApi.md#listarUsingGET17) | **GET** /api/plataformas-mobile | Lista as plataformas mobile cadastradas
[**salvarUsingPOST12**](PlataformasMobileApi.md#salvarUsingPOST12) | **POST** /api/plataformas-mobile | Cadastra Plataforma Mobile


# **atualizarUsingPUT1**
> \br.com.conductor.pier.api.v2.model\PlataformaMobileResponse atualizarUsingPUT1($id, $update)

Atualiza Plataforma Mobile

Esse recurso permite atualizar plataforma mobile.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\PlataformasMobileApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Plataforma (id).
$update = new \br.com.conductor.pier.api.v2.model\PlataformaMobileUpdate(); // \br.com.conductor.pier.api.v2.model\PlataformaMobileUpdate | update

try { 
    $result = $api_instance->atualizarUsingPUT1($id, $update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlataformasMobileApi->atualizarUsingPUT1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Plataforma (id). | 
 **update** | [**\br.com.conductor.pier.api.v2.model\PlataformaMobileUpdate**](\br.com.conductor.pier.api.v2.model\PlataformaMobileUpdate.md)| update | 

### Return type

[**\br.com.conductor.pier.api.v2.model\PlataformaMobileResponse**](PlataformaMobileResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET17**
> \br.com.conductor.pier.api.v2.model\PagePlataformaMobileResponse listarUsingGET17($sort, $page, $limit, $nome)

Lista as plataformas mobile cadastradas

Este m\u00C3\u00A9todo permite que sejam listadas as plataformas mobile existentes na base do PIER.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\PlataformasMobileApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$nome = "nome_example"; // string | Nome da Plataforma Mobile

try { 
    $result = $api_instance->listarUsingGET17($sort, $page, $limit, $nome);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlataformasMobileApi->listarUsingGET17: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **nome** | **string**| Nome da Plataforma Mobile | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PagePlataformaMobileResponse**](PagePlataformaMobileResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST12**
> \br.com.conductor.pier.api.v2.model\PlataformaMobileResponse salvarUsingPOST12($persist)

Cadastra Plataforma Mobile

Esse recurso permite cadastrar plataformas mobile.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\PlataformasMobileApi();
$persist = new \br.com.conductor.pier.api.v2.model\PlataformaMobilePersist(); // \br.com.conductor.pier.api.v2.model\PlataformaMobilePersist | persist

try { 
    $result = $api_instance->salvarUsingPOST12($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlataformasMobileApi->salvarUsingPOST12: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **persist** | [**\br.com.conductor.pier.api.v2.model\PlataformaMobilePersist**](\br.com.conductor.pier.api.v2.model\PlataformaMobilePersist.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\PlataformaMobileResponse**](PlataformaMobileResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

