# br.com.conductor.pier.api.v2.invoker\GlobaltagfaturaApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**consultarFaturaUsingGET1**](GlobaltagfaturaApi.md#consultarFaturaUsingGET1) | **GET** /api/faturas/{dataVencimento} | {{{fatura_resource_consultar_fatura}}}
[**consultarLancamentosFuturosFaturaUsingGET1**](GlobaltagfaturaApi.md#consultarLancamentosFuturosFaturaUsingGET1) | **GET** /api/contas/{id}/faturas/planos-parcelamento | {{{fatura_conta_resource_consultar_lancamentos_futuros_fatura}}}
[**enviarFaturaEmailUsingPOST**](GlobaltagfaturaApi.md#enviarFaturaEmailUsingPOST) | **POST** /api/contas/{id}/faturas/{dataVencimento}/enviar-email | {{{fatura_conta_resource_enviar_fatura_email}}}
[**listarFaturasUsingGET1**](GlobaltagfaturaApi.md#listarFaturasUsingGET1) | **GET** /api/faturas | {{{fatura_resource_listar_faturas}}}
[**visualizarDocumentoUsingGET**](GlobaltagfaturaApi.md#visualizarDocumentoUsingGET) | **GET** /api/contas/{id}/faturas/{dataVencimento}/arquivo.pdf | {{{fatura_conta_resource_visualizar_documento}}}


# **consultarFaturaUsingGET1**
> \br.com.conductor.pier.api.v2.model\FaturaDetalheResponse consultarFaturaUsingGET1($data_vencimento, $id_conta)

{{{fatura_resource_consultar_fatura}}}

{{{fatura_resource_consultar_fatura_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagfaturaApi();
$data_vencimento = "data_vencimento_example"; // string | {{{fatura_resource_consultar_fatura_param_data_vencimento}}}
$id_conta = 789; // int | {{{fatura_resource_consultar_fatura_param_id_conta}}}

try { 
    $result = $api_instance->consultarFaturaUsingGET1($data_vencimento, $id_conta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagfaturaApi->consultarFaturaUsingGET1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_vencimento** | **string**| {{{fatura_resource_consultar_fatura_param_data_vencimento}}} | 
 **id_conta** | **int**| {{{fatura_resource_consultar_fatura_param_id_conta}}} | 

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

{{{fatura_conta_resource_consultar_lancamentos_futuros_fatura}}}

{{{fatura_conta_resource_consultar_lancamentos_futuros_fatura_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagfaturaApi();
$id = 789; // int | {{{fatura_conta_resource_consultar_lancamentos_futuros_fatura_param_id_conta}}}
$data_vencimento_padrao = "data_vencimento_padrao_example"; // string | {{{plano_parcelamento_request_data_vencimento_padrao_value}}}
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}

try { 
    $result = $api_instance->consultarLancamentosFuturosFaturaUsingGET1($id, $data_vencimento_padrao, $sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagfaturaApi->consultarLancamentosFuturosFaturaUsingGET1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{fatura_conta_resource_consultar_lancamentos_futuros_fatura_param_id_conta}}} | 
 **data_vencimento_padrao** | **string**| {{{plano_parcelamento_request_data_vencimento_padrao_value}}} | 
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 

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

{{{fatura_conta_resource_enviar_fatura_email}}}

{{{fatura_conta_resource_enviar_fatura_email_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagfaturaApi();
$id = 789; // int | {{{fatura_conta_resource_enviar_fatura_email_param_id_conta}}}
$data_vencimento = "data_vencimento_example"; // string | {{{fatura_conta_resource_enviar_fatura_email_param_data_vencimento}}}
$email = "email_example"; // string | {{{fatura_conta_resource_enviar_fatura_email_param_email}}}

try { 
    $result = $api_instance->enviarFaturaEmailUsingPOST($id, $data_vencimento, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagfaturaApi->enviarFaturaEmailUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{fatura_conta_resource_enviar_fatura_email_param_id_conta}}} | 
 **data_vencimento** | **string**| {{{fatura_conta_resource_enviar_fatura_email_param_data_vencimento}}} | 
 **email** | **string**| {{{fatura_conta_resource_enviar_fatura_email_param_email}}} | [optional] 

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

{{{fatura_resource_listar_faturas}}}

{{{fatura_resource_listar_faturas_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagfaturaApi();
$id_conta = 789; // int | {{{fatura_resource_listar_faturas_param_id_conta}}}
$situacao_processamento = "TODAS"; // string | {{{fatura_resource_listar_faturas_param_situacao_processamento}}}
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}

try { 
    $result = $api_instance->listarFaturasUsingGET1($id_conta, $situacao_processamento, $sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagfaturaApi->listarFaturasUsingGET1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_conta** | **int**| {{{fatura_resource_listar_faturas_param_id_conta}}} | 
 **situacao_processamento** | **string**| {{{fatura_resource_listar_faturas_param_situacao_processamento}}} | [optional] [default to TODAS]
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageFaturaResponse**](PageFaturaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **visualizarDocumentoUsingGET**
> object visualizarDocumentoUsingGET($id, $data_vencimento, $flag_apenas_demostrativo, $flag_registra_boleto)

{{{fatura_conta_resource_visualizar_documento}}}

{{{fatura_conta_resource_visualizar_documento_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagfaturaApi();
$id = 789; // int | {{{fatura_conta_resource_visualizar_documento_param_id_conta}}}
$data_vencimento = "data_vencimento_example"; // string | {{{fatura_conta_resource_visualizar_documento_param_data_vencimento}}}
$flag_apenas_demostrativo = true; // bool | {{{fatura_conta_resource_enviar_fatura_email_param_flag_apenas_demostrativo}}}
$flag_registra_boleto = true; // bool | {{{fatura_conta_resource_enviar_fatura_email_param_flag_registra_boleto}}}

try { 
    $result = $api_instance->visualizarDocumentoUsingGET($id, $data_vencimento, $flag_apenas_demostrativo, $flag_registra_boleto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagfaturaApi->visualizarDocumentoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{fatura_conta_resource_visualizar_documento_param_id_conta}}} | 
 **data_vencimento** | **string**| {{{fatura_conta_resource_visualizar_documento_param_data_vencimento}}} | 
 **flag_apenas_demostrativo** | **bool**| {{{fatura_conta_resource_enviar_fatura_email_param_flag_apenas_demostrativo}}} | [optional] 
 **flag_registra_boleto** | **bool**| {{{fatura_conta_resource_enviar_fatura_email_param_flag_registra_boleto}}} | [optional] 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

