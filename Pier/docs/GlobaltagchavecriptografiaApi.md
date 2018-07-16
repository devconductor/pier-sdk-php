# br.com.conductor.pier.api.v2.invoker\GlobaltagchavecriptografiaApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**descriptografarUsingPOST**](GlobaltagchavecriptografiaApi.md#descriptografarUsingPOST) | **POST** /api/chaves-criptografia/descriptografar | {{{chave_criptografia_recurso_descriptografar}}}


# **descriptografarUsingPOST**
> \br.com.conductor.pier.api.v2.model\ChaveCriptografiaResponse descriptografarUsingPOST($chave_criptografia_request)

{{{chave_criptografia_recurso_descriptografar}}}

{{{chave_criptografia_recurso_descriptografar_notas}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagchavecriptografiaApi();
$chave_criptografia_request = new \br.com.conductor.pier.api.v2.model\ChaveCriptografiaRequest(); // \br.com.conductor.pier.api.v2.model\ChaveCriptografiaRequest | chaveCriptografiaRequest

try { 
    $result = $api_instance->descriptografarUsingPOST($chave_criptografia_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagchavecriptografiaApi->descriptografarUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chave_criptografia_request** | [**\br.com.conductor.pier.api.v2.model\ChaveCriptografiaRequest**](\br.com.conductor.pier.api.v2.model\ChaveCriptografiaRequest.md)| chaveCriptografiaRequest | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ChaveCriptografiaResponse**](ChaveCriptografiaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

