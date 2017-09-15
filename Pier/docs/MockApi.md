# br.com.conductor.pier.api.v2.invoker\MockApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarProdutoUsingPOST**](MockApi.md#alterarProdutoUsingPOST) | **POST** /api/contas/{id}/alterar-produto | Altera o produto associado \u00C3\u00A0 conta.
[**enviarFaturaEmailUsingPOST**](MockApi.md#enviarFaturaEmailUsingPOST) | **POST** /api/contas/{id}/faturas/{dataVencimento}/enviar-email | Envia 2\u00C2\u00AA via de fatura por E-mail
[**simularEmprestimoFinanciamentoUsingPOST**](MockApi.md#simularEmprestimoFinanciamentoUsingPOST) | **POST** /api/simular-emprestimos-financiamentos | Simula valores de presta\u00C3\u00A7\u00C3\u00B5es de empr\u00C3\u00A9stimos/financiamentos
[**visualizarDocumentoUsingPOST**](MockApi.md#visualizarDocumentoUsingPOST) | **POST** /api/contas/{id}/faturas/{dataVencimento}/arquivo.pdf | Permite visualizar o extrato da fatura em formato PDF


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

# **enviarFaturaEmailUsingPOST**
> object enviarFaturaEmailUsingPOST($id, $data_vencimento, $email)

Envia 2\u00C2\u00AA via de fatura por E-mail

Envia a segunda via da fatura para o e-mail informado/cadastrado.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\MockApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).
$data_vencimento = "data_vencimento_example"; // string | Data de Vencimento da fatura.
$email = "email_example"; // string | E-mail para envio da 2\u00C2\u00AA via da fatura, caso n\u00C3\u00A3o seja informado ser\u00C3\u00A1 usado o e-mail cadastrado.

try { 
    $result = $api_instance->enviarFaturaEmailUsingPOST($id, $data_vencimento, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MockApi->enviarFaturaEmailUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | 
 **data_vencimento** | **string**| Data de Vencimento da fatura. | 
 **email** | **string**| E-mail para envio da 2\u00C2\u00AA via da fatura, caso n\u00C3\u00A3o seja informado ser\u00C3\u00A1 usado o e-mail cadastrado. | [optional] 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **simularEmprestimoFinanciamentoUsingPOST**
> \br.com.conductor.pier.api.v2.model\EmprestimoPessoalResponse simularEmprestimoFinanciamentoUsingPOST($request)

Simula valores de presta\u00C3\u00A7\u00C3\u00B5es de empr\u00C3\u00A9stimos/financiamentos

Esta opera\u00C3\u00A7\u00C3\u00A3o pode ser utilizada para simular opera\u00C3\u00A7\u00C3\u00B5es financeiras a partir de informa\u00C3\u00A7\u00C3\u00B5es fornecidas pelo usu\u00C3\u00A1rio. Os c\u00C3\u00A1lculos gerados devem ser considerados apenas como refer\u00C3\u00AAncia para as situa\u00C3\u00A7\u00C3\u00B5es reais e n\u00C3\u00A3o como valores oficiais.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\MockApi();
$request = new \br.com.conductor.pier.api.v2.model\EmprestimoPessoalRequest(); // \br.com.conductor.pier.api.v2.model\EmprestimoPessoalRequest | request

try { 
    $result = $api_instance->simularEmprestimoFinanciamentoUsingPOST($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MockApi->simularEmprestimoFinanciamentoUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\br.com.conductor.pier.api.v2.model\EmprestimoPessoalRequest**](\br.com.conductor.pier.api.v2.model\EmprestimoPessoalRequest.md)| request | 

### Return type

[**\br.com.conductor.pier.api.v2.model\EmprestimoPessoalResponse**](EmprestimoPessoalResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **visualizarDocumentoUsingPOST**
> ByteArray[] visualizarDocumentoUsingPOST($id, $data_vencimento)

Permite visualizar o extrato da fatura em formato PDF

Esta opera\u00C3\u00A7\u00C3\u00A3o permite visualizar o extrato da fatura de uma determinada conta, em formato PDF. Quando ela for a fatura ativa, ou seja, a do m\u00C3\u00AAs corrente, o pdf ser\u00C3\u00A1 composto pelo extrato de lan\u00C3\u00A7amentos e pela ficha de compensa\u00C3\u00A7\u00C3\u00A3o banc\u00C3\u00A1ria. Quando for de uma fatura do hist\u00C3\u00B3rico do cliente, o PDF ser\u00C3\u00A1 composto apenas pelo extrato de transa\u00C3\u00A7\u00C3\u00B5es.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\MockApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).
$data_vencimento = "data_vencimento_example"; // string | Data de Vencimento da fatura.

try { 
    $result = $api_instance->visualizarDocumentoUsingPOST($id, $data_vencimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MockApi->visualizarDocumentoUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | 
 **data_vencimento** | **string**| Data de Vencimento da fatura. | 

### Return type

[**ByteArray[]**](ByteArray.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/pdf, */*

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

