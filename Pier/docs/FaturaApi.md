# br.com.conductor.pier.api.v2.invoker\FaturaApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**consultarFaturaUsingGET1**](FaturaApi.md#consultarFaturaUsingGET1) | **GET** /api/faturas/{dataVencimento} | Consulta fatura de um cliente
[**consultarLancamentosFuturosFaturaUsingGET1**](FaturaApi.md#consultarLancamentosFuturosFaturaUsingGET1) | **GET** /api/contas/{id}/faturas/planos-parcelamento | Listar planos de parcelamento
[**enviarFaturaEmailUsingPOST**](FaturaApi.md#enviarFaturaEmailUsingPOST) | **POST** /api/contas/{id}/faturas/{dataVencimento}/enviar-email | Envia 2\u00C2\u00AA via de fatura por E-mail
[**listarFaturasUsingGET1**](FaturaApi.md#listarFaturasUsingGET1) | **GET** /api/faturas | Listar faturas de um cliente.
[**visualizarDocumentoUsingGET**](FaturaApi.md#visualizarDocumentoUsingGET) | **GET** /api/contas/{id}/faturas/{dataVencimento}/arquivo.pdf | Permite visualizar o extrato da fatura em formato PDF


# **consultarFaturaUsingGET1**
> \br.com.conductor.pier.api.v2.model\FaturaDetalheResponse consultarFaturaUsingGET1($data_vencimento, $id_conta)

Consulta fatura de um cliente

Consulta fatura de um cliente pela data de vencimento.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\FaturaApi();
$data_vencimento = "data_vencimento_example"; // string | Data Vencimento
$id_conta = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).

try { 
    $result = $api_instance->consultarFaturaUsingGET1($data_vencimento, $id_conta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaturaApi->consultarFaturaUsingGET1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_vencimento** | **string**| Data Vencimento | 
 **id_conta** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\FaturaDetalheResponse**](FaturaDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

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

# **enviarFaturaEmailUsingPOST**
> object enviarFaturaEmailUsingPOST($id, $data_vencimento, $email)

Envia 2\u00C2\u00AA via de fatura por E-mail

Envia a segunda via da fatura para o e-mail informado/cadastrado.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\FaturaApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).
$data_vencimento = "data_vencimento_example"; // string | Data de Vencimento da fatura (yyyy-MM-dd).
$email = "email_example"; // string | E-mail para envio da 2\u00C2\u00AA via da fatura, caso n\u00C3\u00A3o seja informado ser\u00C3\u00A1 usado o e-mail cadastrado.

try { 
    $result = $api_instance->enviarFaturaEmailUsingPOST($id, $data_vencimento, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaturaApi->enviarFaturaEmailUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | 
 **data_vencimento** | **string**| Data de Vencimento da fatura (yyyy-MM-dd). | 
 **email** | **string**| E-mail para envio da 2\u00C2\u00AA via da fatura, caso n\u00C3\u00A3o seja informado ser\u00C3\u00A1 usado o e-mail cadastrado. | [optional] 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarFaturasUsingGET1**
> \br.com.conductor.pier.api.v2.model\PageFaturaResponse listarFaturasUsingGET1($id_conta, $situacao_processamento, $sort, $page, $limit)

Listar faturas de um cliente.

Lista faturas de um cliente.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\FaturaApi();
$id_conta = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).
$situacao_processamento = "TODAS"; // string | Status do processamento das faturas. Valores possiveis [ABERTA, FECHADA, TODAS].
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarFaturasUsingGET1($id_conta, $situacao_processamento, $sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaturaApi->listarFaturasUsingGET1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_conta** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | 
 **situacao_processamento** | **string**| Status do processamento das faturas. Valores possiveis [ABERTA, FECHADA, TODAS]. | [optional] [default to TODAS]
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageFaturaResponse**](PageFaturaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **visualizarDocumentoUsingGET**
> object visualizarDocumentoUsingGET($id, $data_vencimento)

Permite visualizar o extrato da fatura em formato PDF

Esta opera\u00C3\u00A7\u00C3\u00A3o permite visualizar o extrato da fatura de uma determinada conta, em formato PDF. Quando ela for a fatura ativa, ou seja, a do m\u00C3\u00AAs corrente, o pdf ser\u00C3\u00A1 composto pelo extrato de lan\u00C3\u00A7amentos e pela ficha de compensa\u00C3\u00A7\u00C3\u00A3o banc\u00C3\u00A1ria. Quando for de uma fatura do hist\u00C3\u00B3rico do cliente, o PDF ser\u00C3\u00A1 composto apenas pelo extrato de transa\u00C3\u00A7\u00C3\u00B5es.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\FaturaApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).
$data_vencimento = "data_vencimento_example"; // string | Data de Vencimento da fatura.

try { 
    $result = $api_instance->visualizarDocumentoUsingGET($id, $data_vencimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaturaApi->visualizarDocumentoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | 
 **data_vencimento** | **string**| Data de Vencimento da fatura. | 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

