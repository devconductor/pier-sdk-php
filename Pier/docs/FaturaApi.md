# br.com.conductor.pier.api.v2.invoker\FaturaApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**consultarLancamentosFuturosFaturaUsingGET1**](FaturaApi.md#consultarLancamentosFuturosFaturaUsingGET1) | **GET** /api/contas/{id}/faturas/planos-parcelamento | Listar planos de parcelamento


# **consultarLancamentosFuturosFaturaUsingGET1**
> \br.com.conductor.pier.api.v2.model\PagePlanoParcelamentoResponse consultarLancamentosFuturosFaturaUsingGET1($id, $data_vencimento_padrao, $sort, $page, $limit)

Listar planos de parcelamento

Lista os planos de parcelamento da fatura de uma conta.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\FaturaApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).
$data_vencimento_padrao = "data_vencimento_padrao_example"; // string | Indica a data de vencimento padr\u00C3\u00A3o das faturas
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->consultarLancamentosFuturosFaturaUsingGET1($id, $data_vencimento_padrao, $sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaturaApi->consultarLancamentosFuturosFaturaUsingGET1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | 
 **data_vencimento_padrao** | **string**| Indica a data de vencimento padr\u00C3\u00A3o das faturas | 
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PagePlanoParcelamentoResponse**](PagePlanoParcelamentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

