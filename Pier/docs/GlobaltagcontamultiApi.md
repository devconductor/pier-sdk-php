# br.com.conductor.pier.api.v2.invoker\GlobaltagcontamultiApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**criarCartoesMultiAppUsingPOST**](GlobaltagcontamultiApi.md#criarCartoesMultiAppUsingPOST) | **POST** /api/cartoes/gerar-cartoes-multiapp | {{{conta_resource_cadastrar_cartao_multiapp}}}
[**criarContasMultiAppUsingPOST**](GlobaltagcontamultiApi.md#criarContasMultiAppUsingPOST) | **POST** /api/contas/cadastrar-conta-multiapp | {{{conta_resource_cadastrar_conta_multiapp}}}


# **criarCartoesMultiAppUsingPOST**
> \br.com.conductor.pier.api.v2.model\VinculoCartoesResponse criarCartoesMultiAppUsingPOST($cartao_multi_app_persist)

{{{conta_resource_cadastrar_cartao_multiapp}}}

{{{conta_resource_cadastrar_cartao_multiapp_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcontamultiApi();
$cartao_multi_app_persist = new \br.com.conductor.pier.api.v2.model\CartaoMultiAppPersistValue_(); // \br.com.conductor.pier.api.v2.model\CartaoMultiAppPersistValue_ | cartaoMultiAppPersist

try { 
    $result = $api_instance->criarCartoesMultiAppUsingPOST($cartao_multi_app_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcontamultiApi->criarCartoesMultiAppUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartao_multi_app_persist** | [**\br.com.conductor.pier.api.v2.model\CartaoMultiAppPersistValue_**](\br.com.conductor.pier.api.v2.model\CartaoMultiAppPersistValue_.md)| cartaoMultiAppPersist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\VinculoCartoesResponse**](VinculoCartoesResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **criarContasMultiAppUsingPOST**
> \br.com.conductor.pier.api.v2.model\ContaMultiAppResponse criarContasMultiAppUsingPOST($conta_multi_app_persist)

{{{conta_resource_cadastrar_conta_multiapp}}}

{{{conta_resource_cadastrar_conta_multiapp_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcontamultiApi();
$conta_multi_app_persist = new \br.com.conductor.pier.api.v2.model\ContaMultiAppPersistValue_(); // \br.com.conductor.pier.api.v2.model\ContaMultiAppPersistValue_ | contaMultiAppPersist

try { 
    $result = $api_instance->criarContasMultiAppUsingPOST($conta_multi_app_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcontamultiApi->criarContasMultiAppUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conta_multi_app_persist** | [**\br.com.conductor.pier.api.v2.model\ContaMultiAppPersistValue_**](\br.com.conductor.pier.api.v2.model\ContaMultiAppPersistValue_.md)| contaMultiAppPersist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ContaMultiAppResponse**](ContaMultiAppResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

