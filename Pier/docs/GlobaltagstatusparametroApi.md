# br.com.conductor.pier.api.v2.invoker\GlobaltagstatusparametroApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**consultarEstagioCartaoUsingGET**](GlobaltagstatusparametroApi.md#consultarEstagioCartaoUsingGET) | **GET** /api/estagios-cartoes/{id} | {{{estagio_cartao_resource_consultar_estagio_cartao}}}
[**consultarStatusCartaoUsingGET**](GlobaltagstatusparametroApi.md#consultarStatusCartaoUsingGET) | **GET** /api/status-cartoes/{id} | {{{status_cartao_resource_consultar_status_cartao}}}
[**consultarUsingGET36**](GlobaltagstatusparametroApi.md#consultarUsingGET36) | **GET** /api/status-contas/{id} | {{{status_conta_resource_consultar}}}
[**consultarUsingGET37**](GlobaltagstatusparametroApi.md#consultarUsingGET37) | **GET** /api/status-impressoes/{id} | {{{status_impressao_resource_consultar}}}
[**listarEstagiosCartoesUsingGET**](GlobaltagstatusparametroApi.md#listarEstagiosCartoesUsingGET) | **GET** /api/estagios-cartoes | {{{estagio_cartao_resource_listar_estagios_cartoes}}}
[**listarStatusCartoesUsingGET**](GlobaltagstatusparametroApi.md#listarStatusCartoesUsingGET) | **GET** /api/status-cartoes | {{{status_cartao_resource_listar_status_cartoes}}}
[**listarTiposEventosTransacoesUsingGET**](GlobaltagstatusparametroApi.md#listarTiposEventosTransacoesUsingGET) | **GET** /api/tipos-eventos-transacoes | {{{enum_resource_listar_tipos_eventos_transacoes}}}
[**listarUsingGET47**](GlobaltagstatusparametroApi.md#listarUsingGET47) | **GET** /api/status-contas | {{{status_conta_resource_listar}}}
[**listarUsingGET48**](GlobaltagstatusparametroApi.md#listarUsingGET48) | **GET** /api/status-impressoes | {{{status_impressao_resource_listar}}}


# **consultarEstagioCartaoUsingGET**
> \br.com.conductor.pier.api.v2.model\EstagioCartaoResponse consultarEstagioCartaoUsingGET($id)

{{{estagio_cartao_resource_consultar_estagio_cartao}}}

{{{estagio_cartao_resource_consultar_estagio_cartao_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagstatusparametroApi();
$id = 789; // int | {{{estagio_cartao_resource_consultar_estagio_cartao_param_id}}}

try { 
    $result = $api_instance->consultarEstagioCartaoUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagstatusparametroApi->consultarEstagioCartaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{estagio_cartao_resource_consultar_estagio_cartao_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\EstagioCartaoResponse**](EstagioCartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarStatusCartaoUsingGET**
> \br.com.conductor.pier.api.v2.model\StatusCartaoResponse consultarStatusCartaoUsingGET($id)

{{{status_cartao_resource_consultar_status_cartao}}}

{{{status_cartao_resource_consultar_status_cartao_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagstatusparametroApi();
$id = 789; // int | {{{status_cartao_resource_consultar_status_cartao_param_id}}}

try { 
    $result = $api_instance->consultarStatusCartaoUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagstatusparametroApi->consultarStatusCartaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{status_cartao_resource_consultar_status_cartao_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\StatusCartaoResponse**](StatusCartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET36**
> \br.com.conductor.pier.api.v2.model\StatusContaResponse consultarUsingGET36($id)

{{{status_conta_resource_consultar}}}

{{{status_conta_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagstatusparametroApi();
$id = 789; // int | {{{status_conta_resource_consultar_param_id}}}

try { 
    $result = $api_instance->consultarUsingGET36($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagstatusparametroApi->consultarUsingGET36: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{status_conta_resource_consultar_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\StatusContaResponse**](StatusContaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET37**
> \br.com.conductor.pier.api.v2.model\StatusImpressaoResponse consultarUsingGET37($id)

{{{status_impressao_resource_consultar}}}

{{{status_impressao_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagstatusparametroApi();
$id = 789; // int | {{{status_impressao_resource_consultar_param_id}}}

try { 
    $result = $api_instance->consultarUsingGET37($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagstatusparametroApi->consultarUsingGET37: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{status_impressao_resource_consultar_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\StatusImpressaoResponse**](StatusImpressaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarEstagiosCartoesUsingGET**
> \br.com.conductor.pier.api.v2.model\PageEstagioCartaoResponse listarEstagiosCartoesUsingGET($sort, $page, $limit, $id, $nome)

{{{estagio_cartao_resource_listar_estagios_cartoes}}}

{{{estagio_cartao_resource_listar_estagios_cartoes_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagstatusparametroApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id = 789; // int | {{{estagio_cartao_request_id_value}}}
$nome = "nome_example"; // string | {{{estagio_cartao_request_nome_value}}}

try { 
    $result = $api_instance->listarEstagiosCartoesUsingGET($sort, $page, $limit, $id, $nome);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagstatusparametroApi->listarEstagiosCartoesUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id** | **int**| {{{estagio_cartao_request_id_value}}} | [optional] 
 **nome** | **string**| {{{estagio_cartao_request_nome_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageEstagioCartaoResponse**](PageEstagioCartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarStatusCartoesUsingGET**
> \br.com.conductor.pier.api.v2.model\PageStatusCartaoResponse listarStatusCartoesUsingGET($sort, $page, $limit, $id, $nome, $permite_desbloquear, $permite_atribuir_como_bloqueio, $permite_atribuir_como_cancelamento, $cobrar_tarifa_ao_emitir_nova_via)

{{{status_cartao_resource_listar_status_cartoes}}}

{{{status_cartao_resource_listar_status_cartoes_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagstatusparametroApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id = 789; // int | {{{status_cartao_request_id_value}}}
$nome = "nome_example"; // string | {{{status_cartao_request_nome_value}}}
$permite_desbloquear = 56; // int | {{{status_cartao_request_permite_desbloquear_value}}}
$permite_atribuir_como_bloqueio = 56; // int | {{{status_cartao_request_permite_atribuir_como_bloqueio_value}}}
$permite_atribuir_como_cancelamento = 56; // int | {{{status_cartao_request_permite_atribuir_como_cancelamento_value}}}
$cobrar_tarifa_ao_emitir_nova_via = 56; // int | {{{status_cartao_request_cobrar_tarifa_ao_emitir_nova_via_value}}}

try { 
    $result = $api_instance->listarStatusCartoesUsingGET($sort, $page, $limit, $id, $nome, $permite_desbloquear, $permite_atribuir_como_bloqueio, $permite_atribuir_como_cancelamento, $cobrar_tarifa_ao_emitir_nova_via);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagstatusparametroApi->listarStatusCartoesUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id** | **int**| {{{status_cartao_request_id_value}}} | [optional] 
 **nome** | **string**| {{{status_cartao_request_nome_value}}} | [optional] 
 **permite_desbloquear** | **int**| {{{status_cartao_request_permite_desbloquear_value}}} | [optional] 
 **permite_atribuir_como_bloqueio** | **int**| {{{status_cartao_request_permite_atribuir_como_bloqueio_value}}} | [optional] 
 **permite_atribuir_como_cancelamento** | **int**| {{{status_cartao_request_permite_atribuir_como_cancelamento_value}}} | [optional] 
 **cobrar_tarifa_ao_emitir_nova_via** | **int**| {{{status_cartao_request_cobrar_tarifa_ao_emitir_nova_via_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageStatusCartaoResponse**](PageStatusCartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarTiposEventosTransacoesUsingGET**
> object[] listarTiposEventosTransacoesUsingGET()

{{{enum_resource_listar_tipos_eventos_transacoes}}}

{{{enum_resource_listar_tipos_eventos_transacoes_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagstatusparametroApi();

try { 
    $result = $api_instance->listarTiposEventosTransacoesUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagstatusparametroApi->listarTiposEventosTransacoesUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object[]**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET47**
> \br.com.conductor.pier.api.v2.model\PageStatusContaResponse listarUsingGET47($sort, $page, $limit, $id, $nome, $permite_alterar_vencimento, $permite_alterar_limite, $permite_emitir_nova_via_cartao, $permite_fazer_transferencia, $permite_receber_transferencia, $permite_criar_acordo_cobranca, $permite_atribuir_como_bloqueio, $permite_desbloquear, $permite_atribuir_como_cancelamento)

{{{status_conta_resource_listar}}}

{{{status_conta_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagstatusparametroApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id = 789; // int | {{{status_conta_request_id_value}}}
$nome = "nome_example"; // string | {{{status_conta_request_nome_value}}}
$permite_alterar_vencimento = 56; // int | {{{status_conta_request_permite_alterar_vencimento_value}}}
$permite_alterar_limite = 56; // int | {{{status_conta_request_permite_alterar_limite_value}}}
$permite_emitir_nova_via_cartao = 56; // int | {{{status_conta_request_permite_emitir_nova_via_cartao_value}}}
$permite_fazer_transferencia = 56; // int | {{{status_conta_request_permite_fazer_transferencia_value}}}
$permite_receber_transferencia = 56; // int | {{{status_conta_request_permite_receber_transferencia_value}}}
$permite_criar_acordo_cobranca = 56; // int | {{{status_conta_request_permite_criar_acordo_cobranca_value}}}
$permite_atribuir_como_bloqueio = 56; // int | {{{status_conta_request_permite_atribuir_como_bloqueio_value}}}
$permite_desbloquear = 56; // int | {{{status_conta_request_permite_desbloquear_value}}}
$permite_atribuir_como_cancelamento = 56; // int | {{{status_conta_request_permite_atribuir_como_cancelamento_value}}}

try { 
    $result = $api_instance->listarUsingGET47($sort, $page, $limit, $id, $nome, $permite_alterar_vencimento, $permite_alterar_limite, $permite_emitir_nova_via_cartao, $permite_fazer_transferencia, $permite_receber_transferencia, $permite_criar_acordo_cobranca, $permite_atribuir_como_bloqueio, $permite_desbloquear, $permite_atribuir_como_cancelamento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagstatusparametroApi->listarUsingGET47: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id** | **int**| {{{status_conta_request_id_value}}} | [optional] 
 **nome** | **string**| {{{status_conta_request_nome_value}}} | [optional] 
 **permite_alterar_vencimento** | **int**| {{{status_conta_request_permite_alterar_vencimento_value}}} | [optional] 
 **permite_alterar_limite** | **int**| {{{status_conta_request_permite_alterar_limite_value}}} | [optional] 
 **permite_emitir_nova_via_cartao** | **int**| {{{status_conta_request_permite_emitir_nova_via_cartao_value}}} | [optional] 
 **permite_fazer_transferencia** | **int**| {{{status_conta_request_permite_fazer_transferencia_value}}} | [optional] 
 **permite_receber_transferencia** | **int**| {{{status_conta_request_permite_receber_transferencia_value}}} | [optional] 
 **permite_criar_acordo_cobranca** | **int**| {{{status_conta_request_permite_criar_acordo_cobranca_value}}} | [optional] 
 **permite_atribuir_como_bloqueio** | **int**| {{{status_conta_request_permite_atribuir_como_bloqueio_value}}} | [optional] 
 **permite_desbloquear** | **int**| {{{status_conta_request_permite_desbloquear_value}}} | [optional] 
 **permite_atribuir_como_cancelamento** | **int**| {{{status_conta_request_permite_atribuir_como_cancelamento_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageStatusContaResponse**](PageStatusContaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET48**
> \br.com.conductor.pier.api.v2.model\PageStatusImpressaoResponse listarUsingGET48($sort, $page, $limit, $id, $nome)

{{{status_impressao_resource_listar}}}

{{{status_impressao_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagstatusparametroApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id = 789; // int | {{{status_impressao_request_id_value}}}
$nome = "nome_example"; // string | {{{status_impressao_request_nome_value}}}

try { 
    $result = $api_instance->listarUsingGET48($sort, $page, $limit, $id, $nome);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagstatusparametroApi->listarUsingGET48: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id** | **int**| {{{status_impressao_request_id_value}}} | [optional] 
 **nome** | **string**| {{{status_impressao_request_nome_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageStatusImpressaoResponse**](PageStatusImpressaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

