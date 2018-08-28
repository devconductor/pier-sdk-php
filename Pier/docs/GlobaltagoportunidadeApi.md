# br.com.conductor.pier.api.v2.invoker\GlobaltagoportunidadeApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarStatusUsingPUT**](GlobaltagoportunidadeApi.md#alterarStatusUsingPUT) | **PUT** /api/tipos-oportunidades/{id}/status/{idStatus} | {{{tipo_oportunidade_resource_alterar_status}}}
[**alterarUsingPUT12**](GlobaltagoportunidadeApi.md#alterarUsingPUT12) | **PUT** /api/oportunidades/{id} | {{{oportunidade_resource_alterar}}}
[**alterarUsingPUT20**](GlobaltagoportunidadeApi.md#alterarUsingPUT20) | **PUT** /api/tipos-oportunidades/{id} | {{{tipo_oportunidade_resource_alterar}}}
[**consultarStatusUsingGET**](GlobaltagoportunidadeApi.md#consultarStatusUsingGET) | **GET** /api/tipos-oportunidades/{id}/status/{idStatus} | {{{tipo_oportunidade_resource_consultar_status}}}
[**consultarUsingGET28**](GlobaltagoportunidadeApi.md#consultarUsingGET28) | **GET** /api/oportunidades/{id} | {{{oportunidade_resource_consultar}}}
[**consultarUsingGET47**](GlobaltagoportunidadeApi.md#consultarUsingGET47) | **GET** /api/tipos-oportunidades/{id} | {{{tipo_oportunidade_resource_consultar}}}
[**listarAuditoriasStatusUsingGET**](GlobaltagoportunidadeApi.md#listarAuditoriasStatusUsingGET) | **GET** /api/auditorias-status-oportunidades | {{{tipo_oportunidade_resource_listar_auditorias_status}}}
[**listarAuditoriasUsingGET**](GlobaltagoportunidadeApi.md#listarAuditoriasUsingGET) | **GET** /api/auditorias-oportunidades | {{{oportunidade_resource_listar_auditorias}}}
[**listarAuditoriasUsingGET1**](GlobaltagoportunidadeApi.md#listarAuditoriasUsingGET1) | **GET** /api/auditorias-tipos-oportunidades | {{{tipo_oportunidade_resource_listar_auditorias}}}
[**listarStatusUsingGET**](GlobaltagoportunidadeApi.md#listarStatusUsingGET) | **GET** /api/tipos-oportunidades/{id}/status | {{{tipo_oportunidade_resource_listar_status}}}
[**listarUsingGET36**](GlobaltagoportunidadeApi.md#listarUsingGET36) | **GET** /api/oportunidades | {{{oportunidade_resource_listar}}}
[**listarUsingGET58**](GlobaltagoportunidadeApi.md#listarUsingGET58) | **GET** /api/tipos-oportunidades | {{{tipo_oportunidade_resource_listar}}}
[**salvarStatusUsingPOST**](GlobaltagoportunidadeApi.md#salvarStatusUsingPOST) | **POST** /api/tipos-oportunidades/{id}/status | {{{tipo_oportunidade_resource_salvar_status}}}
[**salvarUsingPOST22**](GlobaltagoportunidadeApi.md#salvarUsingPOST22) | **POST** /api/oportunidades | {{{oportunidade_resource_salvar}}}
[**salvarUsingPOST31**](GlobaltagoportunidadeApi.md#salvarUsingPOST31) | **POST** /api/tipos-oportunidades | {{{tipo_oportunidade_resource_salvar}}}


# **alterarStatusUsingPUT**
> \br.com.conductor.pier.api.v2.model\StatusOportunidadeResponse alterarStatusUsingPUT($id, $id_status, $persist)

{{{tipo_oportunidade_resource_alterar_status}}}

{{{tipo_oportunidade_resource_alterar_status_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagoportunidadeApi();
$id = 789; // int | {{{tipo_oportunidade_resource_alterar_status_param_id}}}
$id_status = 789; // int | {{{tipo_oportunidade_resource_alterar_status_param_id_status}}}
$persist = new \br.com.conductor.pier.api.v2.model\StatusOportunidadePersistValue_(); // \br.com.conductor.pier.api.v2.model\StatusOportunidadePersistValue_ | persist

try { 
    $result = $api_instance->alterarStatusUsingPUT($id, $id_status, $persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagoportunidadeApi->alterarStatusUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{tipo_oportunidade_resource_alterar_status_param_id}}} | 
 **id_status** | **int**| {{{tipo_oportunidade_resource_alterar_status_param_id_status}}} | 
 **persist** | [**\br.com.conductor.pier.api.v2.model\StatusOportunidadePersistValue_**](\br.com.conductor.pier.api.v2.model\StatusOportunidadePersistValue_.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\StatusOportunidadeResponse**](StatusOportunidadeResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarUsingPUT12**
> \br.com.conductor.pier.api.v2.model\OportunidadeResponse alterarUsingPUT12($id, $update)

{{{oportunidade_resource_alterar}}}

{{{oportunidade_resource_alterar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagoportunidadeApi();
$id = 789; // int | {{{oportunidade_resource_alterar_param_id}}}
$update = new \br.com.conductor.pier.api.v2.model\OportunidadeUpdateValue_(); // \br.com.conductor.pier.api.v2.model\OportunidadeUpdateValue_ | update

try { 
    $result = $api_instance->alterarUsingPUT12($id, $update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagoportunidadeApi->alterarUsingPUT12: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{oportunidade_resource_alterar_param_id}}} | 
 **update** | [**\br.com.conductor.pier.api.v2.model\OportunidadeUpdateValue_**](\br.com.conductor.pier.api.v2.model\OportunidadeUpdateValue_.md)| update | 

### Return type

[**\br.com.conductor.pier.api.v2.model\OportunidadeResponse**](OportunidadeResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarUsingPUT20**
> \br.com.conductor.pier.api.v2.model\TipoOportunidadeResponse alterarUsingPUT20($id, $persist)

{{{tipo_oportunidade_resource_alterar}}}

{{{tipo_oportunidade_resource_alterar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagoportunidadeApi();
$id = 789; // int | {{{tipo_oportunidade_resource_alterar_param_id}}}
$persist = new \br.com.conductor.pier.api.v2.model\TipoOportunidadePersistValue_(); // \br.com.conductor.pier.api.v2.model\TipoOportunidadePersistValue_ | persist

try { 
    $result = $api_instance->alterarUsingPUT20($id, $persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagoportunidadeApi->alterarUsingPUT20: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{tipo_oportunidade_resource_alterar_param_id}}} | 
 **persist** | [**\br.com.conductor.pier.api.v2.model\TipoOportunidadePersistValue_**](\br.com.conductor.pier.api.v2.model\TipoOportunidadePersistValue_.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TipoOportunidadeResponse**](TipoOportunidadeResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarStatusUsingGET**
> \br.com.conductor.pier.api.v2.model\StatusOportunidadeResponse consultarStatusUsingGET($id, $id_status)

{{{tipo_oportunidade_resource_consultar_status}}}

{{{tipo_oportunidade_resource_consultar_status_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagoportunidadeApi();
$id = 789; // int | {{{tipo_oportunidade_resource_consultar_status_param_id}}}
$id_status = 789; // int | {{{tipo_oportunidade_resource_consultar_status_param_id_status}}}

try { 
    $result = $api_instance->consultarStatusUsingGET($id, $id_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagoportunidadeApi->consultarStatusUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{tipo_oportunidade_resource_consultar_status_param_id}}} | 
 **id_status** | **int**| {{{tipo_oportunidade_resource_consultar_status_param_id_status}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\StatusOportunidadeResponse**](StatusOportunidadeResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET28**
> \br.com.conductor.pier.api.v2.model\OportunidadeResponse consultarUsingGET28($id)

{{{oportunidade_resource_consultar}}}

{{{oportunidade_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagoportunidadeApi();
$id = 789; // int | {{{oportunidade_resource_consultar_param_id}}}

try { 
    $result = $api_instance->consultarUsingGET28($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagoportunidadeApi->consultarUsingGET28: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{oportunidade_resource_consultar_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\OportunidadeResponse**](OportunidadeResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET47**
> \br.com.conductor.pier.api.v2.model\TipoOportunidadeResponse consultarUsingGET47($id)

{{{tipo_oportunidade_resource_consultar}}}

{{{tipo_oportunidade_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagoportunidadeApi();
$id = 789; // int | {{{tipo_oportunidade_resource_consultar_param_id}}}

try { 
    $result = $api_instance->consultarUsingGET47($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagoportunidadeApi->consultarUsingGET47: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{tipo_oportunidade_resource_consultar_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TipoOportunidadeResponse**](TipoOportunidadeResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarAuditoriasStatusUsingGET**
> \br.com.conductor.pier.api.v2.model\PageStatusOportunidadeAUDResponse listarAuditoriasStatusUsingGET($sort, $page, $limit, $rev_type, $rev_date, $id, $id_tipo_oportunidade, $nome, $descricao, $flag_ativo, $rev_user)

{{{tipo_oportunidade_resource_listar_auditorias_status}}}

{{{tipo_oportunidade_resource_listar_auditorias_status_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagoportunidadeApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$rev_type = 789; // int | {{{status_oportunidade_a_u_d_request_rev_type_value}}}
$rev_date = "rev_date_example"; // string | {{{status_oportunidade_a_u_d_request_rev_date_value}}}
$id = 789; // int | {{{status_oportunidade_a_u_d_request_id_value}}}
$id_tipo_oportunidade = 789; // int | {{{status_oportunidade_a_u_d_request_id_tipo_oportunidade_value}}}
$nome = "nome_example"; // string | {{{status_oportunidade_a_u_d_request_nome_value}}}
$descricao = "descricao_example"; // string | {{{status_oportunidade_a_u_d_request_descricao_value}}}
$flag_ativo = true; // bool | {{{status_oportunidade_a_u_d_request_flag_ativo_value}}}
$rev_user = "rev_user_example"; // string | {{{status_oportunidade_a_u_d_request_rev_user_value}}}

try { 
    $result = $api_instance->listarAuditoriasStatusUsingGET($sort, $page, $limit, $rev_type, $rev_date, $id, $id_tipo_oportunidade, $nome, $descricao, $flag_ativo, $rev_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagoportunidadeApi->listarAuditoriasStatusUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **rev_type** | **int**| {{{status_oportunidade_a_u_d_request_rev_type_value}}} | [optional] 
 **rev_date** | **string**| {{{status_oportunidade_a_u_d_request_rev_date_value}}} | [optional] 
 **id** | **int**| {{{status_oportunidade_a_u_d_request_id_value}}} | [optional] 
 **id_tipo_oportunidade** | **int**| {{{status_oportunidade_a_u_d_request_id_tipo_oportunidade_value}}} | [optional] 
 **nome** | **string**| {{{status_oportunidade_a_u_d_request_nome_value}}} | [optional] 
 **descricao** | **string**| {{{status_oportunidade_a_u_d_request_descricao_value}}} | [optional] 
 **flag_ativo** | **bool**| {{{status_oportunidade_a_u_d_request_flag_ativo_value}}} | [optional] 
 **rev_user** | **string**| {{{status_oportunidade_a_u_d_request_rev_user_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageStatusOportunidadeAUDResponse**](PageStatusOportunidadeAUDResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarAuditoriasUsingGET**
> \br.com.conductor.pier.api.v2.model\PageOportunidadeAUDResponse listarAuditoriasUsingGET($sort, $page, $limit, $id_status_oportunidade, $data_cadastro, $data_atualizacao, $numero_receita_federal, $data_inicio_vigencia, $datat_fim_vigencia, $flag_ativo, $rev_date, $rev_type, $rev_user)

{{{oportunidade_resource_listar_auditorias}}}

{{{oportunidade_resource_listar_auditorias_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagoportunidadeApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id_status_oportunidade = 789; // int | {{{oportunidade_a_u_d_request_id_status_oportunidade_value}}}
$data_cadastro = "data_cadastro_example"; // string | {{{oportunidade_a_u_d_request_data_cadastro_value}}}
$data_atualizacao = "data_atualizacao_example"; // string | {{{oportunidade_a_u_d_request_data_atualizacao_value}}}
$numero_receita_federal = "numero_receita_federal_example"; // string | {{{oportunidade_a_u_d_request_numero_receita_federal_value}}}
$data_inicio_vigencia = "data_inicio_vigencia_example"; // string | {{{oportunidade_a_u_d_request_data_inicio_vigencia_value}}}
$datat_fim_vigencia = "datat_fim_vigencia_example"; // string | {{{oportunidade_a_u_d_request_datat_fim_vigencia_value}}}
$flag_ativo = true; // bool | {{{oportunidade_a_u_d_request_flag_ativo_value}}}
$rev_date = "rev_date_example"; // string | {{{oportunidade_a_u_d_request_rev_date_value}}}
$rev_type = "rev_type_example"; // string | {{{oportunidade_a_u_d_request_rev_type_value}}}
$rev_user = "rev_user_example"; // string | {{{oportunidade_a_u_d_request_rev_user_value}}}

try { 
    $result = $api_instance->listarAuditoriasUsingGET($sort, $page, $limit, $id_status_oportunidade, $data_cadastro, $data_atualizacao, $numero_receita_federal, $data_inicio_vigencia, $datat_fim_vigencia, $flag_ativo, $rev_date, $rev_type, $rev_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagoportunidadeApi->listarAuditoriasUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id_status_oportunidade** | **int**| {{{oportunidade_a_u_d_request_id_status_oportunidade_value}}} | [optional] 
 **data_cadastro** | **string**| {{{oportunidade_a_u_d_request_data_cadastro_value}}} | [optional] 
 **data_atualizacao** | **string**| {{{oportunidade_a_u_d_request_data_atualizacao_value}}} | [optional] 
 **numero_receita_federal** | **string**| {{{oportunidade_a_u_d_request_numero_receita_federal_value}}} | [optional] 
 **data_inicio_vigencia** | **string**| {{{oportunidade_a_u_d_request_data_inicio_vigencia_value}}} | [optional] 
 **datat_fim_vigencia** | **string**| {{{oportunidade_a_u_d_request_datat_fim_vigencia_value}}} | [optional] 
 **flag_ativo** | **bool**| {{{oportunidade_a_u_d_request_flag_ativo_value}}} | [optional] 
 **rev_date** | **string**| {{{oportunidade_a_u_d_request_rev_date_value}}} | [optional] 
 **rev_type** | **string**| {{{oportunidade_a_u_d_request_rev_type_value}}} | [optional] 
 **rev_user** | **string**| {{{oportunidade_a_u_d_request_rev_user_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageOportunidadeAUDResponse**](PageOportunidadeAUDResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarAuditoriasUsingGET1**
> \br.com.conductor.pier.api.v2.model\PageTipoOportunidadeAUDResponse listarAuditoriasUsingGET1($sort, $page, $limit, $rev_type, $rev_date, $id, $descricao, $flag_ativo, $rev_user)

{{{tipo_oportunidade_resource_listar_auditorias}}}

{{{tipo_oportunidade_resource_listar_auditorias_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagoportunidadeApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$rev_type = 789; // int | {{{tipo_oportunidade_a_u_d_request_rev_type_value}}}
$rev_date = "rev_date_example"; // string | {{{tipo_oportunidade_a_u_d_request_rev_date_value}}}
$id = 789; // int | {{{tipo_oportunidade_a_u_d_request_id_value}}}
$descricao = "descricao_example"; // string | {{{tipo_oportunidade_a_u_d_request_descricao_value}}}
$flag_ativo = true; // bool | {{{tipo_oportunidade_a_u_d_request_flag_ativo_value}}}
$rev_user = "rev_user_example"; // string | {{{tipo_oportunidade_a_u_d_request_rev_user_value}}}

try { 
    $result = $api_instance->listarAuditoriasUsingGET1($sort, $page, $limit, $rev_type, $rev_date, $id, $descricao, $flag_ativo, $rev_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagoportunidadeApi->listarAuditoriasUsingGET1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **rev_type** | **int**| {{{tipo_oportunidade_a_u_d_request_rev_type_value}}} | [optional] 
 **rev_date** | **string**| {{{tipo_oportunidade_a_u_d_request_rev_date_value}}} | [optional] 
 **id** | **int**| {{{tipo_oportunidade_a_u_d_request_id_value}}} | [optional] 
 **descricao** | **string**| {{{tipo_oportunidade_a_u_d_request_descricao_value}}} | [optional] 
 **flag_ativo** | **bool**| {{{tipo_oportunidade_a_u_d_request_flag_ativo_value}}} | [optional] 
 **rev_user** | **string**| {{{tipo_oportunidade_a_u_d_request_rev_user_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTipoOportunidadeAUDResponse**](PageTipoOportunidadeAUDResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarStatusUsingGET**
> \br.com.conductor.pier.api.v2.model\PageStatusOportunidadeResponse listarStatusUsingGET($id, $sort, $page, $limit, $nome, $descricao, $flag_ativo)

{{{tipo_oportunidade_resource_listar_status}}}

{{{tipo_oportunidade_resource_listar_status_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagoportunidadeApi();
$id = 789; // int | {{{tipo_oportunidade_resource_listar_status_param_id}}}
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$nome = "nome_example"; // string | {{{status_oportunidade_request_nome_value}}}
$descricao = "descricao_example"; // string | {{{status_oportunidade_request_descricao_value}}}
$flag_ativo = true; // bool | {{{status_oportunidade_request_flag_ativo_value}}}

try { 
    $result = $api_instance->listarStatusUsingGET($id, $sort, $page, $limit, $nome, $descricao, $flag_ativo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagoportunidadeApi->listarStatusUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{tipo_oportunidade_resource_listar_status_param_id}}} | 
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **nome** | **string**| {{{status_oportunidade_request_nome_value}}} | [optional] 
 **descricao** | **string**| {{{status_oportunidade_request_descricao_value}}} | [optional] 
 **flag_ativo** | **bool**| {{{status_oportunidade_request_flag_ativo_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageStatusOportunidadeResponse**](PageStatusOportunidadeResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET36**
> \br.com.conductor.pier.api.v2.model\PageOportunidadeResponse listarUsingGET36($sort, $page, $limit, $id_status_oportunidade, $data_cadastro, $data_atualizacao, $numero_receita_federal, $data_inicio_vigencia, $data_fim_vigencia, $flag_ativo)

{{{oportunidade_resource_listar}}}

{{{oportunidade_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagoportunidadeApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id_status_oportunidade = 789; // int | {{{oportunidade_request_id_status_oportunidade_value}}}
$data_cadastro = "data_cadastro_example"; // string | {{{oportunidade_request_data_cadastro_value}}}
$data_atualizacao = "data_atualizacao_example"; // string | {{{oportunidade_request_data_atualizacao_value}}}
$numero_receita_federal = "numero_receita_federal_example"; // string | {{{oportunidade_request_numero_receita_federal_value}}}
$data_inicio_vigencia = "data_inicio_vigencia_example"; // string | {{{oportunidade_request_data_inicio_vigencia_value}}}
$data_fim_vigencia = "data_fim_vigencia_example"; // string | {{{oportunidade_request_data_fim_vigencia_value}}}
$flag_ativo = true; // bool | {{{oportunidade_request_flag_ativo_value}}}

try { 
    $result = $api_instance->listarUsingGET36($sort, $page, $limit, $id_status_oportunidade, $data_cadastro, $data_atualizacao, $numero_receita_federal, $data_inicio_vigencia, $data_fim_vigencia, $flag_ativo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagoportunidadeApi->listarUsingGET36: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id_status_oportunidade** | **int**| {{{oportunidade_request_id_status_oportunidade_value}}} | [optional] 
 **data_cadastro** | **string**| {{{oportunidade_request_data_cadastro_value}}} | [optional] 
 **data_atualizacao** | **string**| {{{oportunidade_request_data_atualizacao_value}}} | [optional] 
 **numero_receita_federal** | **string**| {{{oportunidade_request_numero_receita_federal_value}}} | [optional] 
 **data_inicio_vigencia** | **string**| {{{oportunidade_request_data_inicio_vigencia_value}}} | [optional] 
 **data_fim_vigencia** | **string**| {{{oportunidade_request_data_fim_vigencia_value}}} | [optional] 
 **flag_ativo** | **bool**| {{{oportunidade_request_flag_ativo_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageOportunidadeResponse**](PageOportunidadeResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET58**
> \br.com.conductor.pier.api.v2.model\PageTipoOportunidadeResponse listarUsingGET58($sort, $page, $limit, $descricao, $flag_ativo)

{{{tipo_oportunidade_resource_listar}}}

{{{tipo_oportunidade_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagoportunidadeApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$descricao = "descricao_example"; // string | {{{tipo_oportunidade_request_descricao_value}}}
$flag_ativo = true; // bool | {{{tipo_oportunidade_request_flag_ativo_value}}}

try { 
    $result = $api_instance->listarUsingGET58($sort, $page, $limit, $descricao, $flag_ativo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagoportunidadeApi->listarUsingGET58: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **descricao** | **string**| {{{tipo_oportunidade_request_descricao_value}}} | [optional] 
 **flag_ativo** | **bool**| {{{tipo_oportunidade_request_flag_ativo_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTipoOportunidadeResponse**](PageTipoOportunidadeResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarStatusUsingPOST**
> \br.com.conductor.pier.api.v2.model\StatusOportunidadeResponse salvarStatusUsingPOST($id, $persist)

{{{tipo_oportunidade_resource_salvar_status}}}

{{{tipo_oportunidade_resource_salvar_status_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagoportunidadeApi();
$id = 789; // int | {{{tipo_oportunidade_resource_salvar_status_param_id}}}
$persist = new \br.com.conductor.pier.api.v2.model\StatusOportunidadePersistValue_(); // \br.com.conductor.pier.api.v2.model\StatusOportunidadePersistValue_ | persist

try { 
    $result = $api_instance->salvarStatusUsingPOST($id, $persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagoportunidadeApi->salvarStatusUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{tipo_oportunidade_resource_salvar_status_param_id}}} | 
 **persist** | [**\br.com.conductor.pier.api.v2.model\StatusOportunidadePersistValue_**](\br.com.conductor.pier.api.v2.model\StatusOportunidadePersistValue_.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\StatusOportunidadeResponse**](StatusOportunidadeResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST22**
> \br.com.conductor.pier.api.v2.model\OportunidadeResponse salvarUsingPOST22($persist)

{{{oportunidade_resource_salvar}}}

{{{oportunidade_resource_salvar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagoportunidadeApi();
$persist = new \br.com.conductor.pier.api.v2.model\OportunidadePersistValue_(); // \br.com.conductor.pier.api.v2.model\OportunidadePersistValue_ | persist

try { 
    $result = $api_instance->salvarUsingPOST22($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagoportunidadeApi->salvarUsingPOST22: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **persist** | [**\br.com.conductor.pier.api.v2.model\OportunidadePersistValue_**](\br.com.conductor.pier.api.v2.model\OportunidadePersistValue_.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\OportunidadeResponse**](OportunidadeResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST31**
> \br.com.conductor.pier.api.v2.model\TipoOportunidadeResponse salvarUsingPOST31($persist)

{{{tipo_oportunidade_resource_salvar}}}

{{{tipo_oportunidade_resource_salvar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagoportunidadeApi();
$persist = new \br.com.conductor.pier.api.v2.model\TipoOportunidadePersistValue_(); // \br.com.conductor.pier.api.v2.model\TipoOportunidadePersistValue_ | persist

try { 
    $result = $api_instance->salvarUsingPOST31($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagoportunidadeApi->salvarUsingPOST31: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **persist** | [**\br.com.conductor.pier.api.v2.model\TipoOportunidadePersistValue_**](\br.com.conductor.pier.api.v2.model\TipoOportunidadePersistValue_.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TipoOportunidadeResponse**](TipoOportunidadeResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

