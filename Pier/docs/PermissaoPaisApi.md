# br.com.conductor.pier.api.v2.invoker\PermissaoPaisApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listarContinentesUsingGET**](PermissaoPaisApi.md#listarContinentesUsingGET) | **GET** /api/continentes | Lista os continentes


# **listarContinentesUsingGET**
> object[] listarContinentesUsingGET()

Lista os continentes

Este recurso permite listar os continentes utilizados no recurso de permiss\u00C3\u00A3o de uso do cart\u00C3\u00A3o no exterior

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\PermissaoPaisApi();

try { 
    $result = $api_instance->listarContinentesUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissaoPaisApi->listarContinentesUsingGET: ', $e->getMessage(), "\n";
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

