# br.com.conductor.pier.api.v2.invoker\MockApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarProdutoUsingPOST**](MockApi.md#alterarProdutoUsingPOST) | **POST** /api/contas/{id}/alterar-produto | Altera o produto associado \u00C3\u00A0 conta.


# **alterarProdutoUsingPOST**
> object alterarProdutoUsingPOST($id, $request)

Altera o produto associado \u00C3\u00A0 conta.

O recurso permite fazer modifica\u00C3\u00A7\u00C3\u00A3o do produto associado \u00C3\u00A0 conta.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\MockApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).
$request = new \br.com.conductor.pier.api.v2.model\AlterarProdutoRequest(); // \br.com.conductor.pier.api.v2.model\AlterarProdutoRequest | request

try { 
    $result = $api_instance->alterarProdutoUsingPOST($id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MockApi->alterarProdutoUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | 
 **request** | [**\br.com.conductor.pier.api.v2.model\AlterarProdutoRequest**](\br.com.conductor.pier.api.v2.model\AlterarProdutoRequest.md)| request | 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

