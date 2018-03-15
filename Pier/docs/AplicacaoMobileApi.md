# br.com.conductor.pier.api.v2.invoker\AplicacaoMobileApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**atualizarUsingPUT**](AplicacaoMobileApi.md#atualizarUsingPUT) | **PUT** /api/aplicacoes-mobile/{id} | Atualiza Aplicacao Mobile
[**listarUsingGET3**](AplicacaoMobileApi.md#listarUsingGET3) | **GET** /api/aplicacoes-mobile | Lista os aplicacoes mobile cadastradas
[**salvarUsingPOST**](AplicacaoMobileApi.md#salvarUsingPOST) | **POST** /api/aplicacoes-mobile | Cadastra Aplicacao Mobile


# **atualizarUsingPUT**
> \br.com.conductor.pier.api.v2.model\AplicacaoMobileResponse atualizarUsingPUT($id, $update)

Atualiza Aplicacao Mobile

Esse recurso permite atualizar aplicacao mobile.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\AplicacaoMobileApi();
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o da Aplicacao (id).
$update = new \br.com.conductor.pier.api.v2.model\AplicacaoMobileUpdate(); // \br.com.conductor.pier.api.v2.model\AplicacaoMobileUpdate | update

try { 
    $result = $api_instance->atualizarUsingPUT($id, $update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AplicacaoMobileApi->atualizarUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o da Aplicacao (id). | 
 **update** | [**\br.com.conductor.pier.api.v2.model\AplicacaoMobileUpdate**](\br.com.conductor.pier.api.v2.model\AplicacaoMobileUpdate.md)| update | 

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

Lista os aplicacoes mobile cadastradas

Este m\u00E9todo permite que sejam listadas as aplicacoes mobile existentes na base do PIER.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\AplicacaoMobileApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$id = "id_example"; // string | Identificador da Aplicacao Mobile
$id_plataforma_mobile = 789; // int | Identificador da Plataforma Mobile

try { 
    $result = $api_instance->listarUsingGET3($sort, $page, $limit, $id, $id_plataforma_mobile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AplicacaoMobileApi->listarUsingGET3: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **id** | **string**| Identificador da Aplicacao Mobile | [optional] 
 **id_plataforma_mobile** | **int**| Identificador da Plataforma Mobile | [optional] 

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

Cadastra Aplicacao Mobile

Esse recurso permite cadastrar aplicacoes mobile.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\AplicacaoMobileApi();
$persist = new \br.com.conductor.pier.api.v2.model\AplicacaoMobilePersist(); // \br.com.conductor.pier.api.v2.model\AplicacaoMobilePersist | persist

try { 
    $result = $api_instance->salvarUsingPOST($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AplicacaoMobileApi->salvarUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **persist** | [**\br.com.conductor.pier.api.v2.model\AplicacaoMobilePersist**](\br.com.conductor.pier.api.v2.model\AplicacaoMobilePersist.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\AplicacaoMobileResponse**](AplicacaoMobileResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

