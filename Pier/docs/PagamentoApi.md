# br.com.conductor.pier.api.v2.invoker\PagamentoApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listarPagamentosUsingGET1**](PagamentoApi.md#listarPagamentosUsingGET1) | **GET** /api/pagamentos | Lista hist\u00C3\u00B3rico de pagamentos


# **listarPagamentosUsingGET1**
> \br.com.conductor.pier.api.v2.model\PageHistoricoPagamentoResponse listarPagamentosUsingGET1($sort, $page, $limit, $id_conta, $id_pagamento, $id_estabelecimento, $id_banco, $id_cartao, $data_hora_pagamento, $status)

Lista hist\u00C3\u00B3rico de pagamentos

Este recurso permite listar todos os Pagamentos realizados independente do seu Status de Processamento.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\PagamentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id_conta = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Conta
$id_pagamento = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Pagamento
$id_estabelecimento = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Estabelecimento onde o Pagamento foi realizado, quando este for o local de pagamento
$id_banco = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Institui\u00C3\u00A7\u00C3\u00A3o Banc\u00C3\u00A1ria onde o Pagamento foi realizado, quando este for o local de pagamento
$id_cartao = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o
$data_hora_pagamento = "data_hora_pagamento_example"; // string | Data e Hora da realiza\u00C3\u00A7\u00C3\u00A3o do Pagamento. Quando feito em Institui\u00C3\u00A7\u00C3\u00A3o Banc\u00C3\u00A1ria, o hor\u00C3\u00A1rio do pagamento \u00C3\u00A9 exibido com valor zero
$status = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Status do Pagamento

try { 
    $result = $api_instance->listarPagamentosUsingGET1($sort, $page, $limit, $id_conta, $id_pagamento, $id_estabelecimento, $id_banco, $id_cartao, $data_hora_pagamento, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PagamentoApi->listarPagamentosUsingGET1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id_conta** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Conta | [optional] 
 **id_pagamento** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Pagamento | [optional] 
 **id_estabelecimento** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Estabelecimento onde o Pagamento foi realizado, quando este for o local de pagamento | [optional] 
 **id_banco** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Institui\u00C3\u00A7\u00C3\u00A3o Banc\u00C3\u00A1ria onde o Pagamento foi realizado, quando este for o local de pagamento | [optional] 
 **id_cartao** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o | [optional] 
 **data_hora_pagamento** | **string**| Data e Hora da realiza\u00C3\u00A7\u00C3\u00A3o do Pagamento. Quando feito em Institui\u00C3\u00A7\u00C3\u00A3o Banc\u00C3\u00A1ria, o hor\u00C3\u00A1rio do pagamento \u00C3\u00A9 exibido com valor zero | [optional] 
 **status** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Status do Pagamento | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageHistoricoPagamentoResponse**](PageHistoricoPagamentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

