# br.com.conductor.pier.api.v2.invoker\GlobaltagcompracontestadaApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**contestarUsingPOST**](GlobaltagcompracontestadaApi.md#contestarUsingPOST) | **POST** /api/cartoes-com-contestacoes/{idCartao}/contestar | {{{compra_contestada_transacoes_resource_contestar}}}
[**detalheCartaoUsingGET**](GlobaltagcompracontestadaApi.md#detalheCartaoUsingGET) | **GET** /api/cartoes-com-contestacoes/{idCartao} | {{{compra_contestada_detalhe_cartao_resource_listar}}}
[**listarUsingGET13**](GlobaltagcompracontestadaApi.md#listarUsingGET13) | **GET** /api/cartoes-com-contestacoes | {{{cartao_com_compra_contestada_resource_listar}}}
[**transacaoUsingGET**](GlobaltagcompracontestadaApi.md#transacaoUsingGET) | **GET** /api/cartoes-com-contestacoes/{idCartao}/transacoes | {{{compra_contestada_transacoes_resource_listar}}}


# **contestarUsingPOST**
> object contestarUsingPOST($id_cartao, $request, $login)

{{{compra_contestada_transacoes_resource_contestar}}}

{{{compra_contestada_transacoes_resource_contestar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcompracontestadaApi();
$id_cartao = 789; // int | idCartao
$request = new \br.com.conductor.pier.api.v2.model\ContestarCompraRequest(); // \br.com.conductor.pier.api.v2.model\ContestarCompraRequest | request
$login = "login_example"; // string | login

try { 
    $result = $api_instance->contestarUsingPOST($id_cartao, $request, $login);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcompracontestadaApi->contestarUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_cartao** | **int**| idCartao | 
 **request** | [**\br.com.conductor.pier.api.v2.model\ContestarCompraRequest**](\br.com.conductor.pier.api.v2.model\ContestarCompraRequest.md)| request | 
 **login** | **string**| login | [optional] 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **detalheCartaoUsingGET**
> \br.com.conductor.pier.api.v2.model\PageGrupoChargebackResponse detalheCartaoUsingGET($id_cartao)

{{{compra_contestada_detalhe_cartao_resource_listar}}}

{{{compra_contestada_detalhe_cartao_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcompracontestadaApi();
$id_cartao = 789; // int | idCartao

try { 
    $result = $api_instance->detalheCartaoUsingGET($id_cartao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcompracontestadaApi->detalheCartaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_cartao** | **int**| idCartao | 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageGrupoChargebackResponse**](PageGrupoChargebackResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET13**
> \br.com.conductor.pier.api.v2.model\PageGrupoChargebackResponse listarUsingGET13($sort, $page, $limit, $aging_contestacao, $nome, $bandeira, $cartao, $cpf, $conta, $status_cartao, $status_contestacao, $data_contestacao, $data_alteracao, $data_reapresentacao, $dias_contestacao, $dias_compra, $modo_entrada, $motivo, $valor_compra)

{{{cartao_com_compra_contestada_resource_listar}}}

{{{cartao_com_compra_contestada_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcompracontestadaApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$aging_contestacao = 789; // int | 
$nome = "nome_example"; // string | 
$bandeira = "bandeira_example"; // string | 
$cartao = "cartao_example"; // string | 
$cpf = "cpf_example"; // string | 
$conta = "conta_example"; // string | 
$status_cartao = 789; // int | 
$status_contestacao = 789; // int | 
$data_contestacao = "data_contestacao_example"; // string | 
$data_alteracao = "data_alteracao_example"; // string | 
$data_reapresentacao = "data_reapresentacao_example"; // string | 
$dias_contestacao = 789; // int | 
$dias_compra = 789; // int | 
$modo_entrada = "modo_entrada_example"; // string | 
$motivo = "motivo_example"; // string | 
$valor_compra = new Number(); // Number | 

try { 
    $result = $api_instance->listarUsingGET13($sort, $page, $limit, $aging_contestacao, $nome, $bandeira, $cartao, $cpf, $conta, $status_cartao, $status_contestacao, $data_contestacao, $data_alteracao, $data_reapresentacao, $dias_contestacao, $dias_compra, $modo_entrada, $motivo, $valor_compra);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcompracontestadaApi->listarUsingGET13: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **aging_contestacao** | **int**|  | [optional] 
 **nome** | **string**|  | [optional] 
 **bandeira** | **string**|  | [optional] 
 **cartao** | **string**|  | [optional] 
 **cpf** | **string**|  | [optional] 
 **conta** | **string**|  | [optional] 
 **status_cartao** | **int**|  | [optional] 
 **status_contestacao** | **int**|  | [optional] 
 **data_contestacao** | **string**|  | [optional] 
 **data_alteracao** | **string**|  | [optional] 
 **data_reapresentacao** | **string**|  | [optional] 
 **dias_contestacao** | **int**|  | [optional] 
 **dias_compra** | **int**|  | [optional] 
 **modo_entrada** | **string**|  | [optional] 
 **motivo** | **string**|  | [optional] 
 **valor_compra** | [**Number**](.md)|  | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageGrupoChargebackResponse**](PageGrupoChargebackResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **transacaoUsingGET**
> \br.com.conductor.pier.api.v2.model\PageGrupoChargebackResponse transacaoUsingGET($id_cartao, $sort, $page, $limit, $aging_contestacao, $nome, $bandeira, $cartao, $cpf, $conta, $status_cartao, $status_contestacao, $data_contestacao, $data_alteracao, $data_reapresentacao, $dias_contestacao, $dias_compra, $modo_entrada, $motivo, $valor_compra)

{{{compra_contestada_transacoes_resource_listar}}}

{{{compra_contestada_transacoes_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcompracontestadaApi();
$id_cartao = 789; // int | idCartao
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$aging_contestacao = 789; // int | 
$nome = "nome_example"; // string | 
$bandeira = "bandeira_example"; // string | 
$cartao = "cartao_example"; // string | 
$cpf = "cpf_example"; // string | 
$conta = "conta_example"; // string | 
$status_cartao = 789; // int | 
$status_contestacao = 789; // int | 
$data_contestacao = "data_contestacao_example"; // string | 
$data_alteracao = "data_alteracao_example"; // string | 
$data_reapresentacao = "data_reapresentacao_example"; // string | 
$dias_contestacao = 789; // int | 
$dias_compra = 789; // int | 
$modo_entrada = "modo_entrada_example"; // string | 
$motivo = "motivo_example"; // string | 
$valor_compra = new Number(); // Number | 

try { 
    $result = $api_instance->transacaoUsingGET($id_cartao, $sort, $page, $limit, $aging_contestacao, $nome, $bandeira, $cartao, $cpf, $conta, $status_cartao, $status_contestacao, $data_contestacao, $data_alteracao, $data_reapresentacao, $dias_contestacao, $dias_compra, $modo_entrada, $motivo, $valor_compra);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcompracontestadaApi->transacaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_cartao** | **int**| idCartao | 
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **aging_contestacao** | **int**|  | [optional] 
 **nome** | **string**|  | [optional] 
 **bandeira** | **string**|  | [optional] 
 **cartao** | **string**|  | [optional] 
 **cpf** | **string**|  | [optional] 
 **conta** | **string**|  | [optional] 
 **status_cartao** | **int**|  | [optional] 
 **status_contestacao** | **int**|  | [optional] 
 **data_contestacao** | **string**|  | [optional] 
 **data_alteracao** | **string**|  | [optional] 
 **data_reapresentacao** | **string**|  | [optional] 
 **dias_contestacao** | **int**|  | [optional] 
 **dias_compra** | **int**|  | [optional] 
 **modo_entrada** | **string**|  | [optional] 
 **motivo** | **string**|  | [optional] 
 **valor_compra** | [**Number**](.md)|  | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageGrupoChargebackResponse**](PageGrupoChargebackResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

