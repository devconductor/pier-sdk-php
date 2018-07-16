# br.com.conductor.pier.api.v2.invoker\GlobaltagfaturamentoApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarTipoFaturamentoUsingPUT**](GlobaltagfaturamentoApi.md#alterarTipoFaturamentoUsingPUT) | **PUT** /api/tipos-faturamento/{id} | {{{faturamento_resource_alterar_tipo_faturamento}}}
[**cadastrarFaturamentoPorContaUsingPOST**](GlobaltagfaturamentoApi.md#cadastrarFaturamentoPorContaUsingPOST) | **POST** /api/tipos-faturamento-conta | {{{faturamento_resource_cadastrar_faturamento_por_conta}}}
[**cadastrarTipoFaturamentoUsingPOST**](GlobaltagfaturamentoApi.md#cadastrarTipoFaturamentoUsingPOST) | **POST** /api/tipos-faturamento | {{{faturamento_resource_cadastrar_tipo_faturamento}}}
[**consultarTipoFaturamentoUsingGET**](GlobaltagfaturamentoApi.md#consultarTipoFaturamentoUsingGET) | **GET** /api/tipos-faturamento/{id} | {{{faturamento_resource_consultar_tipo_faturamento}}}
[**desativarFaturamentoPorContaUsingPOST**](GlobaltagfaturamentoApi.md#desativarFaturamentoPorContaUsingPOST) | **POST** /api/tipos-faturamento-conta/{id}/desativar | {{{faturamento_resource_desativar_faturamento_por_conta}}}
[**desativarTipoFaturamentoUsingPOST**](GlobaltagfaturamentoApi.md#desativarTipoFaturamentoUsingPOST) | **POST** /api/tipos-faturamento/{id}/desativar | {{{faturamento_resource_desativar_tipo_faturamento}}}
[**listarFaturamentoPorContaUsingGET**](GlobaltagfaturamentoApi.md#listarFaturamentoPorContaUsingGET) | **GET** /api/tipos-faturamento-conta | {{{faturamento_resource_listar_faturamento_por_conta}}}
[**listarTipoFaturamentoUsingGET**](GlobaltagfaturamentoApi.md#listarTipoFaturamentoUsingGET) | **GET** /api/tipos-faturamento | {{{faturamento_resource_listar_tipo_faturamento}}}


# **alterarTipoFaturamentoUsingPUT**
> \br.com.conductor.pier.api.v2.model\TipoFaturamentoResponse alterarTipoFaturamentoUsingPUT($id, $tipo_faturamento_persist)

{{{faturamento_resource_alterar_tipo_faturamento}}}

{{{faturamento_resource_alterar_tipo_faturamento_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagfaturamentoApi();
$id = 789; // int | {{{faturamento_resource_alterar_tipo_faturamento_param_id_tipo_faturamento}}}
$tipo_faturamento_persist = new \br.com.conductor.pier.api.v2.model\TipoFaturamentoPersistValue_(); // \br.com.conductor.pier.api.v2.model\TipoFaturamentoPersistValue_ | tipoFaturamentoPersist

try { 
    $result = $api_instance->alterarTipoFaturamentoUsingPUT($id, $tipo_faturamento_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagfaturamentoApi->alterarTipoFaturamentoUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{faturamento_resource_alterar_tipo_faturamento_param_id_tipo_faturamento}}} | 
 **tipo_faturamento_persist** | [**\br.com.conductor.pier.api.v2.model\TipoFaturamentoPersistValue_**](\br.com.conductor.pier.api.v2.model\TipoFaturamentoPersistValue_.md)| tipoFaturamentoPersist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TipoFaturamentoResponse**](TipoFaturamentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **cadastrarFaturamentoPorContaUsingPOST**
> \br.com.conductor.pier.api.v2.model\TipoFaturamentoPorContaResponse cadastrarFaturamentoPorContaUsingPOST($tipo_faturamento_por_conta_persist)

{{{faturamento_resource_cadastrar_faturamento_por_conta}}}

{{{faturamento_resource_cadastrar_faturamento_por_conta_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagfaturamentoApi();
$tipo_faturamento_por_conta_persist = new \br.com.conductor.pier.api.v2.model\TipoFaturamentoPorContaPersistValue_(); // \br.com.conductor.pier.api.v2.model\TipoFaturamentoPorContaPersistValue_ | tipoFaturamentoPorContaPersist

try { 
    $result = $api_instance->cadastrarFaturamentoPorContaUsingPOST($tipo_faturamento_por_conta_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagfaturamentoApi->cadastrarFaturamentoPorContaUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tipo_faturamento_por_conta_persist** | [**\br.com.conductor.pier.api.v2.model\TipoFaturamentoPorContaPersistValue_**](\br.com.conductor.pier.api.v2.model\TipoFaturamentoPorContaPersistValue_.md)| tipoFaturamentoPorContaPersist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TipoFaturamentoPorContaResponse**](TipoFaturamentoPorContaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **cadastrarTipoFaturamentoUsingPOST**
> \br.com.conductor.pier.api.v2.model\TipoFaturamentoResponse cadastrarTipoFaturamentoUsingPOST($tipo_faturamento_persist)

{{{faturamento_resource_cadastrar_tipo_faturamento}}}

{{{faturamento_resource_cadastrar_tipo_faturamento_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagfaturamentoApi();
$tipo_faturamento_persist = new \br.com.conductor.pier.api.v2.model\TipoFaturamentoPersistValue_(); // \br.com.conductor.pier.api.v2.model\TipoFaturamentoPersistValue_ | tipoFaturamentoPersist

try { 
    $result = $api_instance->cadastrarTipoFaturamentoUsingPOST($tipo_faturamento_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagfaturamentoApi->cadastrarTipoFaturamentoUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tipo_faturamento_persist** | [**\br.com.conductor.pier.api.v2.model\TipoFaturamentoPersistValue_**](\br.com.conductor.pier.api.v2.model\TipoFaturamentoPersistValue_.md)| tipoFaturamentoPersist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TipoFaturamentoResponse**](TipoFaturamentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarTipoFaturamentoUsingGET**
> \br.com.conductor.pier.api.v2.model\TipoFaturamentoResponse consultarTipoFaturamentoUsingGET($id)

{{{faturamento_resource_consultar_tipo_faturamento}}}

{{{faturamento_resource_consultar_tipo_faturamento_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagfaturamentoApi();
$id = 789; // int | {{{faturamento_resource_consultar_tipo_faturamento_param_id_tipo_faturamento}}}

try { 
    $result = $api_instance->consultarTipoFaturamentoUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagfaturamentoApi->consultarTipoFaturamentoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{faturamento_resource_consultar_tipo_faturamento_param_id_tipo_faturamento}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TipoFaturamentoResponse**](TipoFaturamentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **desativarFaturamentoPorContaUsingPOST**
> \br.com.conductor.pier.api.v2.model\TipoFaturamentoPorContaResponse desativarFaturamentoPorContaUsingPOST($id)

{{{faturamento_resource_desativar_faturamento_por_conta}}}

{{{faturamento_resource_desativar_faturamento_por_conta_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagfaturamentoApi();
$id = 789; // int | {{{faturamento_resource_desativar_faturamento_por_conta_param_id}}}

try { 
    $result = $api_instance->desativarFaturamentoPorContaUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagfaturamentoApi->desativarFaturamentoPorContaUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{faturamento_resource_desativar_faturamento_por_conta_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TipoFaturamentoPorContaResponse**](TipoFaturamentoPorContaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **desativarTipoFaturamentoUsingPOST**
> \br.com.conductor.pier.api.v2.model\TipoFaturamentoResponse desativarTipoFaturamentoUsingPOST($id)

{{{faturamento_resource_desativar_tipo_faturamento}}}

{{{faturamento_resource_desativar_tipo_faturamento_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagfaturamentoApi();
$id = 789; // int | {{{faturamento_resource_desativar_tipo_faturamento_param_id_tipo_faturamento}}}

try { 
    $result = $api_instance->desativarTipoFaturamentoUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagfaturamentoApi->desativarTipoFaturamentoUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{faturamento_resource_desativar_tipo_faturamento_param_id_tipo_faturamento}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TipoFaturamentoResponse**](TipoFaturamentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarFaturamentoPorContaUsingGET**
> \br.com.conductor.pier.api.v2.model\PageTipoFaturamentoPorContaResponse listarFaturamentoPorContaUsingGET($sort, $page, $limit, $id_tipo_faturamento_por_conta, $ativo, $id_conta, $id_tipo_faturamento, $data_hora_inclusao, $data_hora_cancelamento, $modificado_por)

{{{faturamento_resource_listar_faturamento_por_conta}}}

{{{faturamento_resource_listar_faturamento_por_conta_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagfaturamentoApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id_tipo_faturamento_por_conta = 789; // int | {{{tipo_faturamento_por_conta_request_id_tipo_faturamento_por_conta_value}}}
$ativo = true; // bool | {{{tipo_faturamento_por_conta_request_status_value}}}
$id_conta = 789; // int | {{{tipo_faturamento_por_conta_request_id_conta_value}}}
$id_tipo_faturamento = 789; // int | {{{tipo_faturamento_por_conta_request_id_tipo_faturamento_value}}}
$data_hora_inclusao = "data_hora_inclusao_example"; // string | {{{tipo_faturamento_por_conta_request_data_hora_inclusao_value}}}
$data_hora_cancelamento = "data_hora_cancelamento_example"; // string | {{{tipo_faturamento_por_conta_request_data_hora_cancelamento_value}}}
$modificado_por = "modificado_por_example"; // string | {{{tipo_faturamento_por_conta_request_modificado_por_value}}}

try { 
    $result = $api_instance->listarFaturamentoPorContaUsingGET($sort, $page, $limit, $id_tipo_faturamento_por_conta, $ativo, $id_conta, $id_tipo_faturamento, $data_hora_inclusao, $data_hora_cancelamento, $modificado_por);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagfaturamentoApi->listarFaturamentoPorContaUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id_tipo_faturamento_por_conta** | **int**| {{{tipo_faturamento_por_conta_request_id_tipo_faturamento_por_conta_value}}} | [optional] 
 **ativo** | **bool**| {{{tipo_faturamento_por_conta_request_status_value}}} | [optional] 
 **id_conta** | **int**| {{{tipo_faturamento_por_conta_request_id_conta_value}}} | [optional] 
 **id_tipo_faturamento** | **int**| {{{tipo_faturamento_por_conta_request_id_tipo_faturamento_value}}} | [optional] 
 **data_hora_inclusao** | **string**| {{{tipo_faturamento_por_conta_request_data_hora_inclusao_value}}} | [optional] 
 **data_hora_cancelamento** | **string**| {{{tipo_faturamento_por_conta_request_data_hora_cancelamento_value}}} | [optional] 
 **modificado_por** | **string**| {{{tipo_faturamento_por_conta_request_modificado_por_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTipoFaturamentoPorContaResponse**](PageTipoFaturamentoPorContaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarTipoFaturamentoUsingGET**
> \br.com.conductor.pier.api.v2.model\PageTipoFaturamentoResponse listarTipoFaturamentoUsingGET($sort, $page, $limit, $id_tipo_faturamento, $descricao, $flag_apenas_demonstrativo, $id_convenio)

{{{faturamento_resource_listar_tipo_faturamento}}}

{{{faturamento_resource_listar_tipo_faturamento_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagfaturamentoApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id_tipo_faturamento = 789; // int | {{{tipo_faturamento_request_id_tipo_faturamento_value}}}
$descricao = "descricao_example"; // string | {{{tipo_faturamento_request_descricao_value}}}
$flag_apenas_demonstrativo = true; // bool | {{{tipo_faturamento_request_flag_apenas_demonstrativo_value}}}
$id_convenio = 789; // int | {{{tipo_faturamento_request_id_convenio_value}}}

try { 
    $result = $api_instance->listarTipoFaturamentoUsingGET($sort, $page, $limit, $id_tipo_faturamento, $descricao, $flag_apenas_demonstrativo, $id_convenio);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagfaturamentoApi->listarTipoFaturamentoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id_tipo_faturamento** | **int**| {{{tipo_faturamento_request_id_tipo_faturamento_value}}} | [optional] 
 **descricao** | **string**| {{{tipo_faturamento_request_descricao_value}}} | [optional] 
 **flag_apenas_demonstrativo** | **bool**| {{{tipo_faturamento_request_flag_apenas_demonstrativo_value}}} | [optional] 
 **id_convenio** | **int**| {{{tipo_faturamento_request_id_convenio_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTipoFaturamentoResponse**](PageTipoFaturamentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

