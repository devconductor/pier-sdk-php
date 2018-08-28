# br.com.conductor.pier.api.v2.invoker\GlobaltaginscricaoapnApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**desativarUsingPUT**](GlobaltaginscricaoapnApi.md#desativarUsingPUT) | **PUT** /api/inscricoes-apn/{id}/desativar | {{{inscricao_apn_recurso_desativar}}}
[**listarUsingGET31**](GlobaltaginscricaoapnApi.md#listarUsingGET31) | **GET** /api/inscricoes-apn | {{{inscricao_apn_recurso_listar}}}
[**salvarUsingPOST15**](GlobaltaginscricaoapnApi.md#salvarUsingPOST15) | **POST** /api/inscricoes-apn | {{{inscricao_apn_recurso_salvar}}}


# **desativarUsingPUT**
> \br.com.conductor.pier.api.v2.model\InscricaoAPNResponse desativarUsingPUT($id)

{{{inscricao_apn_recurso_desativar}}}

{{{inscricao_apn_recurso_desativar_notas}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltaginscricaoapnApi();
$id = 789; // int | id

try { 
    $result = $api_instance->desativarUsingPUT($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltaginscricaoapnApi->desativarUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id | 

### Return type

[**\br.com.conductor.pier.api.v2.model\InscricaoAPNResponse**](InscricaoAPNResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET31**
> \br.com.conductor.pier.api.v2.model\PageInscricaoAPNResponse listarUsingGET31($sort, $id_cartoes, $page, $limit, $device_token, $data_criacao, $data_desativacao, $ativo, $id_aplicacao_mobile)

{{{inscricao_apn_recurso_listar}}}

{{{inscricao_apn_recurso_listar_notas}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltaginscricaoapnApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$id_cartoes = array(56); // int[] | {{{inscricao_apn_requisicao_id_cartoes_descricao}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$device_token = "device_token_example"; // string | {{{inscricao_apn_requisicao_device_token_descricao}}}
$data_criacao = "data_criacao_example"; // string | {{{inscricao_apn_requisicao_data_criacao_descricao}}}
$data_desativacao = "data_desativacao_example"; // string | {{{inscricao_apn_requisicao_data_desativacao_descricao}}}
$ativo = true; // bool | {{{inscricao_apn_requisicao_ativo_descricao}}}
$id_aplicacao_mobile = 789; // int | {{{inscricao_apn_requisicao_id_aplicacao_mobile_descricao}}}

try { 
    $result = $api_instance->listarUsingGET31($sort, $id_cartoes, $page, $limit, $device_token, $data_criacao, $data_desativacao, $ativo, $id_aplicacao_mobile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltaginscricaoapnApi->listarUsingGET31: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **id_cartoes** | [**int[]**](int.md)| {{{inscricao_apn_requisicao_id_cartoes_descricao}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **device_token** | **string**| {{{inscricao_apn_requisicao_device_token_descricao}}} | [optional] 
 **data_criacao** | **string**| {{{inscricao_apn_requisicao_data_criacao_descricao}}} | [optional] 
 **data_desativacao** | **string**| {{{inscricao_apn_requisicao_data_desativacao_descricao}}} | [optional] 
 **ativo** | **bool**| {{{inscricao_apn_requisicao_ativo_descricao}}} | [optional] 
 **id_aplicacao_mobile** | **int**| {{{inscricao_apn_requisicao_id_aplicacao_mobile_descricao}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageInscricaoAPNResponse**](PageInscricaoAPNResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST15**
> \br.com.conductor.pier.api.v2.model\InscricaoAPNResponse[] salvarUsingPOST15($inscricao_persist)

{{{inscricao_apn_recurso_salvar}}}

{{{inscricao_apn_recurso_salvar_notas}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltaginscricaoapnApi();
$inscricao_persist = new \br.com.conductor.pier.api.v2.model\InscricaoApnPersistencia_(); // \br.com.conductor.pier.api.v2.model\InscricaoApnPersistencia_ | inscricaoPersist

try { 
    $result = $api_instance->salvarUsingPOST15($inscricao_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltaginscricaoapnApi->salvarUsingPOST15: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inscricao_persist** | [**\br.com.conductor.pier.api.v2.model\InscricaoApnPersistencia_**](\br.com.conductor.pier.api.v2.model\InscricaoApnPersistencia_.md)| inscricaoPersist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\InscricaoAPNResponse[]**](InscricaoAPNResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

