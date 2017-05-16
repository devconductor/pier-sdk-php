# br.com.conductor.pier.api.v2.invoker\AplicacoesMobileApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**atualizarUsingPUT**](AplicacoesMobileApi.md#atualizarUsingPUT) | **PUT** /api/aplicacoes-mobile/{id} | Atualiza Aplicacao Mobile
[**listarUsingGET**](AplicacoesMobileApi.md#listarUsingGET) | **GET** /api/aplicacoes-mobile | Lista os aplicacoes mobile cadastradas
[**salvarUsingPOST**](AplicacoesMobileApi.md#salvarUsingPOST) | **POST** /api/aplicacoes-mobile | Cadastra Aplicacao Mobile


# **atualizarUsingPUT**
> \br.com.conductor.pier.api.v2.model\AplicacaoMobile atualizarUsingPUT($id, $update)

Atualiza Aplicacao Mobile

Esse recurso permite atualizar aplicacao mobile.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\AplicacoesMobileApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Aplicacao (id).
$update = new \br.com.conductor.pier.api.v2.model\AplicacaoMobileUpdate(); // \br.com.conductor.pier.api.v2.model\AplicacaoMobileUpdate | update

try { 
    $result = $api_instance->atualizarUsingPUT($id, $update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AplicacoesMobileApi->atualizarUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Aplicacao (id). | 
 **update** | [**\br.com.conductor.pier.api.v2.model\AplicacaoMobileUpdate**](\br.com.conductor.pier.api.v2.model\AplicacaoMobileUpdate.md)| update | 

### Return type

[**\br.com.conductor.pier.api.v2.model\AplicacaoMobile**](AplicacaoMobile.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET**
> \br.com.conductor.pier.api.v2.model\PageAplicacoesMobile listarUsingGET($page, $limit, $id, $id_plataforma_mobile, $id_emissor)

Lista os aplicacoes mobile cadastradas

Este m\u00C3\u00A9todo permite que sejam listadas as aplicacoes mobile existentes na base do PIER.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\AplicacoesMobileApi();
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100)
$id = "id_example"; // string | Identificador da Aplicacao Mobile
$id_plataforma_mobile = 789; // int | Identificador da Plataforma Mobile
$id_emissor = 789; // int | Identificador do Emissor

try { 
    $result = $api_instance->listarUsingGET($page, $limit, $id, $id_plataforma_mobile, $id_emissor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AplicacoesMobileApi->listarUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) | [optional] 
 **id** | **string**| Identificador da Aplicacao Mobile | [optional] 
 **id_plataforma_mobile** | **int**| Identificador da Plataforma Mobile | [optional] 
 **id_emissor** | **int**| Identificador do Emissor | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageAplicacoesMobile**](PageAplicacoesMobile.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST**
> \br.com.conductor.pier.api.v2.model\AplicacaoMobile salvarUsingPOST($persist)

Cadastra Aplicacao Mobile

Esse recurso permite cadastrar aplicacoes mobile.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\AplicacoesMobileApi();
$persist = new \br.com.conductor.pier.api.v2.model\AplicacaoMobilePersist(); // \br.com.conductor.pier.api.v2.model\AplicacaoMobilePersist | persist

try { 
    $result = $api_instance->salvarUsingPOST($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AplicacoesMobileApi->salvarUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **persist** | [**\br.com.conductor.pier.api.v2.model\AplicacaoMobilePersist**](\br.com.conductor.pier.api.v2.model\AplicacaoMobilePersist.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\AplicacaoMobile**](AplicacaoMobile.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

