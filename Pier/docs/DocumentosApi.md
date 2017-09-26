# br.com.conductor.pier.api.v2.invoker\DocumentosApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salvarUsingPOST5**](DocumentosApi.md#salvarUsingPOST5) | **POST** /api/documentos | Cadastra documentos
[**salvarUsingPOST6**](DocumentosApi.md#salvarUsingPOST6) | **POST** /api/templates-documentos | Cadastra os templates dos documentos
[**salvarUsingPOST7**](DocumentosApi.md#salvarUsingPOST7) | **POST** /api/tipos-documentos | Cadastra os tipos de documentos


# **salvarUsingPOST5**
> \br.com.conductor.pier.api.v2.model\DocumentoResponse salvarUsingPOST5($persist)

Cadastra documentos

Esse recurso permite cadastrar documentos.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\DocumentosApi();
$persist = new \br.com.conductor.pier.api.v2.model\DocumentoParametrosRequest(); // \br.com.conductor.pier.api.v2.model\DocumentoParametrosRequest | persist

try { 
    $result = $api_instance->salvarUsingPOST5($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentosApi->salvarUsingPOST5: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **persist** | [**\br.com.conductor.pier.api.v2.model\DocumentoParametrosRequest**](\br.com.conductor.pier.api.v2.model\DocumentoParametrosRequest.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\DocumentoResponse**](DocumentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST6**
> \br.com.conductor.pier.api.v2.model\DocumentoTemplateResponse salvarUsingPOST6($persist)

Cadastra os templates dos documentos

Esse recurso permite cadastrar templates dos documentos.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\DocumentosApi();
$persist = new \br.com.conductor.pier.api.v2.model\DocumentoTemplateRequest(); // \br.com.conductor.pier.api.v2.model\DocumentoTemplateRequest | persist

try { 
    $result = $api_instance->salvarUsingPOST6($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentosApi->salvarUsingPOST6: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **persist** | [**\br.com.conductor.pier.api.v2.model\DocumentoTemplateRequest**](\br.com.conductor.pier.api.v2.model\DocumentoTemplateRequest.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\DocumentoTemplateResponse**](DocumentoTemplateResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST7**
> \br.com.conductor.pier.api.v2.model\DocumentoTipoResponse salvarUsingPOST7($persist)

Cadastra os tipos de documentos

Esse recurso permite cadastrar tipos de documentos.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\DocumentosApi();
$persist = new \br.com.conductor.pier.api.v2.model\DocumentoTipoRequest(); // \br.com.conductor.pier.api.v2.model\DocumentoTipoRequest | persist

try { 
    $result = $api_instance->salvarUsingPOST7($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentosApi->salvarUsingPOST7: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **persist** | [**\br.com.conductor.pier.api.v2.model\DocumentoTipoRequest**](\br.com.conductor.pier.api.v2.model\DocumentoTipoRequest.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\DocumentoTipoResponse**](DocumentoTipoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

