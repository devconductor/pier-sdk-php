# br.com.conductor.pier.api.v2.invoker\GlobaltagarquivoApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**consultarUsingGET6**](GlobaltagarquivoApi.md#consultarUsingGET6) | **GET** /api/arquivos/{id} | {{{arquivo_resource_consultar}}}
[**integrarUsingPOST**](GlobaltagarquivoApi.md#integrarUsingPOST) | **POST** /api/arquivos/integrar | {{{arquivo_resource_integrar}}}
[**listarPorNumeroReceitaFederalUsingGET**](GlobaltagarquivoApi.md#listarPorNumeroReceitaFederalUsingGET) | **GET** /api/arquivos-auditorias | {{{arquivo_a_u_d_resource_listar_por_numero_receita_federal}}}
[**listarStatusArquivosUsingGET**](GlobaltagarquivoApi.md#listarStatusArquivosUsingGET) | **GET** /api/status-arquivos | {{{arquivo_resource_listar_status_arquivos}}}
[**listarTiposArquivosUsingGET**](GlobaltagarquivoApi.md#listarTiposArquivosUsingGET) | **GET** /api/tipos-arquivos | {{{arquivo_resource_listar_tipos_arquivos}}}
[**listarUsingGET6**](GlobaltagarquivoApi.md#listarUsingGET6) | **GET** /api/arquivos/{id}/auditorias | {{{arquivo_a_u_d_resource_listar}}}
[**listarUsingGET7**](GlobaltagarquivoApi.md#listarUsingGET7) | **GET** /api/arquivos | {{{arquivo_resource_listar}}}
[**salvarUsingPOST1**](GlobaltagarquivoApi.md#salvarUsingPOST1) | **POST** /api/arquivos | {{{arquivo_resource_salvar}}}


# **consultarUsingGET6**
> \br.com.conductor.pier.api.v2.model\ArquivoDetalheResponse consultarUsingGET6($id)

{{{arquivo_resource_consultar}}}

{{{arquivo_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagarquivoApi();
$id = 789; // int | {{{arquivo_resource_consultar_param_id}}}

try { 
    $result = $api_instance->consultarUsingGET6($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagarquivoApi->consultarUsingGET6: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{arquivo_resource_consultar_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ArquivoDetalheResponse**](ArquivoDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **integrarUsingPOST**
> object integrarUsingPOST($integrar_arquivo_request)

{{{arquivo_resource_integrar}}}

{{{arquivo_resource_integrar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagarquivoApi();
$integrar_arquivo_request = new \br.com.conductor.pier.api.v2.model\IntegrarArquivoRequest(); // \br.com.conductor.pier.api.v2.model\IntegrarArquivoRequest | integrarArquivoRequest

try { 
    $result = $api_instance->integrarUsingPOST($integrar_arquivo_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagarquivoApi->integrarUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integrar_arquivo_request** | [**\br.com.conductor.pier.api.v2.model\IntegrarArquivoRequest**](\br.com.conductor.pier.api.v2.model\IntegrarArquivoRequest.md)| integrarArquivoRequest | 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarPorNumeroReceitaFederalUsingGET**
> \br.com.conductor.pier.api.v2.model\PageArquivoAUDResponse listarPorNumeroReceitaFederalUsingGET($numero_receita_federal, $page, $limit)

{{{arquivo_a_u_d_resource_listar_por_numero_receita_federal}}}

{{{arquivo_a_u_d_resource_listar_por_numero_receita_federal_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagarquivoApi();
$numero_receita_federal = "numero_receita_federal_example"; // string | {{{arquivo_a_u_d_resource_listar_por_numero_receita_federal_param_numero_receita_federal}}}
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarPorNumeroReceitaFederalUsingGET($numero_receita_federal, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagarquivoApi->listarPorNumeroReceitaFederalUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **numero_receita_federal** | **string**| {{{arquivo_a_u_d_resource_listar_por_numero_receita_federal_param_numero_receita_federal}}} | 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageArquivoAUDResponse**](PageArquivoAUDResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarStatusArquivosUsingGET**
> \br.com.conductor.pier.api.v2.model\PageStatusArquivoResponse listarStatusArquivosUsingGET($sort, $page, $limit, $nome, $descricao)

{{{arquivo_resource_listar_status_arquivos}}}

{{{arquivo_resource_listar_status_arquivos_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagarquivoApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$nome = "nome_example"; // string | {{{status_arquivo_request_nome_value}}}
$descricao = "descricao_example"; // string | {{{status_arquivo_request_descricao_value}}}

try { 
    $result = $api_instance->listarStatusArquivosUsingGET($sort, $page, $limit, $nome, $descricao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagarquivoApi->listarStatusArquivosUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **nome** | **string**| {{{status_arquivo_request_nome_value}}} | [optional] 
 **descricao** | **string**| {{{status_arquivo_request_descricao_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageStatusArquivoResponse**](PageStatusArquivoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarTiposArquivosUsingGET**
> \br.com.conductor.pier.api.v2.model\PageTipoArquivoResponse listarTiposArquivosUsingGET($sort, $page, $limit, $nome, $descricao)

{{{arquivo_resource_listar_tipos_arquivos}}}

{{{arquivo_resource_listar_tipos_arquivos_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagarquivoApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$nome = "nome_example"; // string | {{{tipo_arquivo_request_nome_value}}}
$descricao = "descricao_example"; // string | {{{tipo_arquivo_request_descricao_value}}}

try { 
    $result = $api_instance->listarTiposArquivosUsingGET($sort, $page, $limit, $nome, $descricao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagarquivoApi->listarTiposArquivosUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **nome** | **string**| {{{tipo_arquivo_request_nome_value}}} | [optional] 
 **descricao** | **string**| {{{tipo_arquivo_request_descricao_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTipoArquivoResponse**](PageTipoArquivoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET6**
> \br.com.conductor.pier.api.v2.model\PageArquivoAUDResponse listarUsingGET6($id, $page, $limit)

{{{arquivo_a_u_d_resource_listar}}}

{{{arquivo_a_u_d_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagarquivoApi();
$id = 789; // int | {{{arquivo_a_u_d_resource_listar_param_id}}}
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarUsingGET6($id, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagarquivoApi->listarUsingGET6: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{arquivo_a_u_d_resource_listar_param_id}}} | 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageArquivoAUDResponse**](PageArquivoAUDResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET7**
> \br.com.conductor.pier.api.v2.model\PageArquivoResponse listarUsingGET7($sort, $page, $limit, $nome, $id_tipo_arquivo, $id_status_arquivo, $extensao)

{{{arquivo_resource_listar}}}

{{{arquivo_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagarquivoApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$nome = "nome_example"; // string | {{{arquivo_request_nome_value}}}
$id_tipo_arquivo = 789; // int | {{{arquivo_request_id_tipo_arquivo_value}}}
$id_status_arquivo = 789; // int | {{{arquivo_request_id_status_arquivo_value}}}
$extensao = "extensao_example"; // string | {{{arquivo_request_extensao_value}}}

try { 
    $result = $api_instance->listarUsingGET7($sort, $page, $limit, $nome, $id_tipo_arquivo, $id_status_arquivo, $extensao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagarquivoApi->listarUsingGET7: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **nome** | **string**| {{{arquivo_request_nome_value}}} | [optional] 
 **id_tipo_arquivo** | **int**| {{{arquivo_request_id_tipo_arquivo_value}}} | [optional] 
 **id_status_arquivo** | **int**| {{{arquivo_request_id_status_arquivo_value}}} | [optional] 
 **extensao** | **string**| {{{arquivo_request_extensao_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageArquivoResponse**](PageArquivoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST1**
> \br.com.conductor.pier.api.v2.model\ArquivoDetalheResponse salvarUsingPOST1($arquivo_persist)

{{{arquivo_resource_salvar}}}

{{{arquivo_resource_salvar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagarquivoApi();
$arquivo_persist = new \br.com.conductor.pier.api.v2.model\ArquivoPersist(); // \br.com.conductor.pier.api.v2.model\ArquivoPersist | arquivoPersist

try { 
    $result = $api_instance->salvarUsingPOST1($arquivo_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagarquivoApi->salvarUsingPOST1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arquivo_persist** | [**\br.com.conductor.pier.api.v2.model\ArquivoPersist**](\br.com.conductor.pier.api.v2.model\ArquivoPersist.md)| arquivoPersist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ArquivoDetalheResponse**](ArquivoDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

