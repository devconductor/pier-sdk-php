# br.com.conductor.pier.api.v2.invoker\PagamentoApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**consultarUsingGET**](PagamentoApi.md#consultarUsingGET) | **GET** /api/acordos/{id} | Consulta os dados de um determinado acordo
[**listarPagamentosUsingGET1**](PagamentoApi.md#listarPagamentosUsingGET1) | **GET** /api/pagamentos | Lista hist\u00F3rico de pagamentos
[**listarUsingGET**](PagamentoApi.md#listarUsingGET) | **GET** /api/acordos | Lista os acordos existentes na base


# **consultarUsingGET**
> \br.com.conductor.pier.api.v2.model\AcordoDetalheResponse consultarUsingGET($id)

Consulta os dados de um determinado acordo

Este m\u00E9todo permite consultar dados de um determinado acordo a partir de seu codigo de identifica\u00E7\u00E3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\PagamentoApi();
$id = 789; // int | C\u00F3digo de identifica\u00E7\u00E3o do acordo (id).

try { 
    $result = $api_instance->consultarUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PagamentoApi->consultarUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de identifica\u00E7\u00E3o do acordo (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\AcordoDetalheResponse**](AcordoDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarPagamentosUsingGET1**
> \br.com.conductor.pier.api.v2.model\PageHistoricoPagamentoResponse listarPagamentosUsingGET1($sort, $page, $limit, $id_conta, $id_pagamento, $id_estabelecimento, $id_banco, $id_cartao, $data_hora_pagamento, $status)

Lista hist\u00F3rico de pagamentos

Este recurso permite listar todos os Pagamentos realizados independente do seu Status de Processamento.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\PagamentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$id_conta = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o da Conta
$id_pagamento = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do Pagamento
$id_estabelecimento = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do Estabelecimento onde o Pagamento foi realizado, quando este for o local de pagamento
$id_banco = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o da Institui\u00E7\u00E3o Banc\u00E1ria onde o Pagamento foi realizado, quando este for o local de pagamento
$id_cartao = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do Cart\u00E3o
$data_hora_pagamento = "data_hora_pagamento_example"; // string | Data e Hora da realiza\u00E7\u00E3o do Pagamento. Quando feito em Institui\u00E7\u00E3o Banc\u00E1ria, o hor\u00E1rio do pagamento \u00E9 exibido com valor zero
$status = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do Status do Pagamento

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
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **id_conta** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o da Conta | [optional] 
 **id_pagamento** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do Pagamento | [optional] 
 **id_estabelecimento** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do Estabelecimento onde o Pagamento foi realizado, quando este for o local de pagamento | [optional] 
 **id_banco** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o da Institui\u00E7\u00E3o Banc\u00E1ria onde o Pagamento foi realizado, quando este for o local de pagamento | [optional] 
 **id_cartao** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do Cart\u00E3o | [optional] 
 **data_hora_pagamento** | **string**| Data e Hora da realiza\u00E7\u00E3o do Pagamento. Quando feito em Institui\u00E7\u00E3o Banc\u00E1ria, o hor\u00E1rio do pagamento \u00E9 exibido com valor zero | [optional] 
 **status** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do Status do Pagamento | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageHistoricoPagamentoResponse**](PageHistoricoPagamentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET**
> \br.com.conductor.pier.api.v2.model\PageAcordoResponse listarUsingGET($sort, $page, $limit, $id_conta, $status_acordo, $data_acordo, $quantidade_parcelas)

Lista os acordos existentes na base

Este m\u00E9todo permite que sejam listados todos os acordos existentes na base do emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\PagamentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$id_conta = 789; // int | C\u00F3digo Identificador da conta na base (id)
$status_acordo = 789; // int | Status do acordo na base
$data_acordo = "data_acordo_example"; // string | Data do acordo
$quantidade_parcelas = 56; // int | Quantidade de parcelas

try { 
    $result = $api_instance->listarUsingGET($sort, $page, $limit, $id_conta, $status_acordo, $data_acordo, $quantidade_parcelas);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PagamentoApi->listarUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **id_conta** | **int**| C\u00F3digo Identificador da conta na base (id) | [optional] 
 **status_acordo** | **int**| Status do acordo na base | [optional] 
 **data_acordo** | **string**| Data do acordo | [optional] 
 **quantidade_parcelas** | **int**| Quantidade de parcelas | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageAcordoResponse**](PageAcordoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

