# br.com.conductor.pier.api.v2.invoker\GlobaltagservicocontaApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ativarAnuidadeUsingPOST**](GlobaltagservicocontaApi.md#ativarAnuidadeUsingPOST) | **POST** /api/contas/{id}/atribuir-anuidade | {{{conta_resource_ativar_anuidade}}}
[**ativarEnvioFaturaEmailUsingPOST**](GlobaltagservicocontaApi.md#ativarEnvioFaturaEmailUsingPOST) | **POST** /api/contas/{id}/ativar-fatura-email | {{{conta_resource_ativar_envio_fatura_email}}}
[**desativarEnvioFaturaEmailUsingPOST**](GlobaltagservicocontaApi.md#desativarEnvioFaturaEmailUsingPOST) | **POST** /api/contas/{id}/desativar-fatura-email | {{{conta_resource_desativar_envio_fatura_email}}}
[**listarAnuidadesUsingGET**](GlobaltagservicocontaApi.md#listarAnuidadesUsingGET) | **GET** /api/anuidades | {{{anuidade_resource_listar_anuidades}}}
[**listarOperadorasTelefonicasUsingGET**](GlobaltagservicocontaApi.md#listarOperadorasTelefonicasUsingGET) | **GET** /api/operadoras-telefonicas | {{{operadora_resource_listar_operadoras_telefonicas}}}


# **ativarAnuidadeUsingPOST**
> object ativarAnuidadeUsingPOST($id, $id_anuidade, $sort, $page, $limit, $ddd, $celular, $id_operadora, $id_origem_comercial)

{{{conta_resource_ativar_anuidade}}}

{{{conta_resource_ativar_anuidade_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagservicocontaApi();
$id = 789; // int | {{{conta_resource_ativar_anuidade_param_id}}}
$id_anuidade = 789; // int | {{{anuidade_request_id_anuidade_value}}}
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$ddd = "ddd_example"; // string | {{{anuidade_request_d_d_d_value}}}
$celular = "celular_example"; // string | {{{anuidade_request_celular_value}}}
$id_operadora = 789; // int | {{{anuidade_request_id_operadora_value}}}
$id_origem_comercial = 789; // int | {{{anuidade_request_id_origem_comercial_value}}}

try { 
    $result = $api_instance->ativarAnuidadeUsingPOST($id, $id_anuidade, $sort, $page, $limit, $ddd, $celular, $id_operadora, $id_origem_comercial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagservicocontaApi->ativarAnuidadeUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{conta_resource_ativar_anuidade_param_id}}} | 
 **id_anuidade** | **int**| {{{anuidade_request_id_anuidade_value}}} | 
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **ddd** | **string**| {{{anuidade_request_d_d_d_value}}} | [optional] 
 **celular** | **string**| {{{anuidade_request_celular_value}}} | [optional] 
 **id_operadora** | **int**| {{{anuidade_request_id_operadora_value}}} | [optional] 
 **id_origem_comercial** | **int**| {{{anuidade_request_id_origem_comercial_value}}} | [optional] 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **ativarEnvioFaturaEmailUsingPOST**
> object ativarEnvioFaturaEmailUsingPOST($id)

{{{conta_resource_ativar_envio_fatura_email}}}

{{{conta_resource_ativar_envio_fatura_email_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagservicocontaApi();
$id = 789; // int | {{{conta_resource_ativar_envio_fatura_email_param_id}}}

try { 
    $result = $api_instance->ativarEnvioFaturaEmailUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagservicocontaApi->ativarEnvioFaturaEmailUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{conta_resource_ativar_envio_fatura_email_param_id}}} | 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **desativarEnvioFaturaEmailUsingPOST**
> object desativarEnvioFaturaEmailUsingPOST($id)

{{{conta_resource_desativar_envio_fatura_email}}}

{{{conta_resource_desativar_envio_fatura_email_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagservicocontaApi();
$id = 789; // int | {{{conta_resource_desativar_envio_fatura_email_param_id}}}

try { 
    $result = $api_instance->desativarEnvioFaturaEmailUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagservicocontaApi->desativarEnvioFaturaEmailUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{conta_resource_desativar_envio_fatura_email_param_id}}} | 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarAnuidadesUsingGET**
> \br.com.conductor.pier.api.v2.model\PageAnuidadeResponse listarAnuidadesUsingGET($sort, $page, $limit)

{{{anuidade_resource_listar_anuidades}}}

{{{anuidade_resource_listar_anuidades_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagservicocontaApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}

try { 
    $result = $api_instance->listarAnuidadesUsingGET($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagservicocontaApi->listarAnuidadesUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageAnuidadeResponse**](PageAnuidadeResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarOperadorasTelefonicasUsingGET**
> \br.com.conductor.pier.api.v2.model\PageOperadoraResponse listarOperadorasTelefonicasUsingGET($sort, $page, $limit)

{{{operadora_resource_listar_operadoras_telefonicas}}}

{{{operadora_resource_listar_operadoras_telefonicas_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagservicocontaApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}

try { 
    $result = $api_instance->listarOperadorasTelefonicasUsingGET($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagservicocontaApi->listarOperadorasTelefonicasUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageOperadoraResponse**](PageOperadoraResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

