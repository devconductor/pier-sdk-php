# br.com.conductor.pier.api.v2.invoker\GlobaltagdocumentoApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarUsingPUT21**](GlobaltagdocumentoApi.md#alterarUsingPUT21) | **PUT** /api/tipos-templates/{id} | {{{tipo_template_resource_alterar}}}
[**atualizarUsingPUT4**](GlobaltagdocumentoApi.md#atualizarUsingPUT4) | **PUT** /api/templates-documentos/{id} | {{{documento_template_resource_atualizar}}}
[**consultarUsingGET19**](GlobaltagdocumentoApi.md#consultarUsingGET19) | **GET** /api/documentos/{id} | {{{documento_resource_consultar}}}
[**consultarUsingGET20**](GlobaltagdocumentoApi.md#consultarUsingGET20) | **GET** /api/templates-documentos/{id} | {{{documento_template_resource_consultar}}}
[**consultarUsingGET49**](GlobaltagdocumentoApi.md#consultarUsingGET49) | **GET** /api/tipos-templates/{id} | {{{tipo_template_resource_consultar}}}
[**integrarUsingPOST1**](GlobaltagdocumentoApi.md#integrarUsingPOST1) | **POST** /api/documentos/integrar | {{{documento_resource_integrar}}}
[**listarUsingGET22**](GlobaltagdocumentoApi.md#listarUsingGET22) | **GET** /api/documentos | {{{documento_resource_listar}}}
[**listarUsingGET23**](GlobaltagdocumentoApi.md#listarUsingGET23) | **GET** /api/templates-documentos | {{{documento_template_resource_listar}}}
[**listarUsingGET60**](GlobaltagdocumentoApi.md#listarUsingGET60) | **GET** /api/tipos-templates | {{{tipo_template_resource_listar}}}
[**salvarUsingPOST12**](GlobaltagdocumentoApi.md#salvarUsingPOST12) | **POST** /api/documentos | {{{documento_resource_salvar}}}
[**salvarUsingPOST13**](GlobaltagdocumentoApi.md#salvarUsingPOST13) | **POST** /api/templates-documentos | {{{documento_template_resource_salvar}}}
[**salvarUsingPOST32**](GlobaltagdocumentoApi.md#salvarUsingPOST32) | **POST** /api/tipos-templates | {{{tipo_template_resource_salvar}}}


# **alterarUsingPUT21**
> \br.com.conductor.pier.api.v2.model\TipoTemplateResponse alterarUsingPUT21($id, $persist)

{{{tipo_template_resource_alterar}}}

{{{tipo_template_resource_alterar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagdocumentoApi();
$id = 789; // int | {{{tipo_template_resource_alterar_param_id}}}
$persist = new \br.com.conductor.pier.api.v2.model\TipoTemplateRequest(); // \br.com.conductor.pier.api.v2.model\TipoTemplateRequest | persist

try { 
    $result = $api_instance->alterarUsingPUT21($id, $persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagdocumentoApi->alterarUsingPUT21: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{tipo_template_resource_alterar_param_id}}} | 
 **persist** | [**\br.com.conductor.pier.api.v2.model\TipoTemplateRequest**](\br.com.conductor.pier.api.v2.model\TipoTemplateRequest.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TipoTemplateResponse**](TipoTemplateResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **atualizarUsingPUT4**
> \br.com.conductor.pier.api.v2.model\DocumentoTemplateResponse atualizarUsingPUT4($id, $persist)

{{{documento_template_resource_atualizar}}}

{{{documento_template_resource_atualizar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagdocumentoApi();
$id = 789; // int | {{{documento_template_resource_atualizar_param_id}}}
$persist = new \br.com.conductor.pier.api.v2.model\DocumentoTemplatePersist(); // \br.com.conductor.pier.api.v2.model\DocumentoTemplatePersist | persist

try { 
    $result = $api_instance->atualizarUsingPUT4($id, $persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagdocumentoApi->atualizarUsingPUT4: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{documento_template_resource_atualizar_param_id}}} | 
 **persist** | [**\br.com.conductor.pier.api.v2.model\DocumentoTemplatePersist**](\br.com.conductor.pier.api.v2.model\DocumentoTemplatePersist.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\DocumentoTemplateResponse**](DocumentoTemplateResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET19**
> \br.com.conductor.pier.api.v2.model\DocumentoDetalhadoResponse consultarUsingGET19($id)

{{{documento_resource_consultar}}}

{{{documento_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagdocumentoApi();
$id = 789; // int | {{{documento_resource_consultar_param_id}}}

try { 
    $result = $api_instance->consultarUsingGET19($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagdocumentoApi->consultarUsingGET19: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{documento_resource_consultar_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\DocumentoDetalhadoResponse**](DocumentoDetalhadoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET20**
> \br.com.conductor.pier.api.v2.model\DocumentoTemplateResponse consultarUsingGET20($id)

{{{documento_template_resource_consultar}}}

{{{documento_template_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagdocumentoApi();
$id = 789; // int | {{{documento_template_resource_consultar_param_id}}}

try { 
    $result = $api_instance->consultarUsingGET20($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagdocumentoApi->consultarUsingGET20: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{documento_template_resource_consultar_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\DocumentoTemplateResponse**](DocumentoTemplateResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET49**
> \br.com.conductor.pier.api.v2.model\TipoTemplateResponse consultarUsingGET49($id)

{{{tipo_template_resource_consultar}}}

{{{tipo_template_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagdocumentoApi();
$id = 789; // int | {{{tipo_template_resource_consultar_param_id}}}

try { 
    $result = $api_instance->consultarUsingGET49($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagdocumentoApi->consultarUsingGET49: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{tipo_template_resource_consultar_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TipoTemplateResponse**](TipoTemplateResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **integrarUsingPOST1**
> \br.com.conductor.pier.api.v2.model\DocumentoIntegracaoResponse integrarUsingPOST1($integrar_documento_request)

{{{documento_resource_integrar}}}

{{{documento_resource_integrar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagdocumentoApi();
$integrar_documento_request = new \br.com.conductor.pier.api.v2.model\IntegrarDocumentoRequest(); // \br.com.conductor.pier.api.v2.model\IntegrarDocumentoRequest | integrarDocumentoRequest

try { 
    $result = $api_instance->integrarUsingPOST1($integrar_documento_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagdocumentoApi->integrarUsingPOST1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integrar_documento_request** | [**\br.com.conductor.pier.api.v2.model\IntegrarDocumentoRequest**](\br.com.conductor.pier.api.v2.model\IntegrarDocumentoRequest.md)| integrarDocumentoRequest | 

### Return type

[**\br.com.conductor.pier.api.v2.model\DocumentoIntegracaoResponse**](DocumentoIntegracaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET22**
> \br.com.conductor.pier.api.v2.model\PageDocumentoResponse listarUsingGET22($sort, $page, $limit, $id_template_documento, $nome, $extensao)

{{{documento_resource_listar}}}

{{{documento_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagdocumentoApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id_template_documento = 789; // int | {{{documento_request_id_template_documento_value}}}
$nome = "nome_example"; // string | {{{documento_request_nome_value}}}
$extensao = "extensao_example"; // string | {{{documento_request_extensao_value}}}

try { 
    $result = $api_instance->listarUsingGET22($sort, $page, $limit, $id_template_documento, $nome, $extensao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagdocumentoApi->listarUsingGET22: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id_template_documento** | **int**| {{{documento_request_id_template_documento_value}}} | [optional] 
 **nome** | **string**| {{{documento_request_nome_value}}} | [optional] 
 **extensao** | **string**| {{{documento_request_extensao_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageDocumentoResponse**](PageDocumentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET23**
> \br.com.conductor.pier.api.v2.model\PageDocumentoTemplateResponse listarUsingGET23($sort, $page, $limit, $id_tipo_template)

{{{documento_template_resource_listar}}}

{{{documento_template_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagdocumentoApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id_tipo_template = 789; // int | {{{documento_template_request_id_tipo_template_value}}}

try { 
    $result = $api_instance->listarUsingGET23($sort, $page, $limit, $id_tipo_template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagdocumentoApi->listarUsingGET23: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id_tipo_template** | **int**| {{{documento_template_request_id_tipo_template_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageDocumentoTemplateResponse**](PageDocumentoTemplateResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET60**
> \br.com.conductor.pier.api.v2.model\PageTipoTemplateResponse listarUsingGET60($sort, $page, $limit)

{{{tipo_template_resource_listar}}}

{{{tipo_template_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagdocumentoApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}

try { 
    $result = $api_instance->listarUsingGET60($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagdocumentoApi->listarUsingGET60: ', $e->getMessage(), "\n";
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

[**\br.com.conductor.pier.api.v2.model\PageTipoTemplateResponse**](PageTipoTemplateResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST12**
> \br.com.conductor.pier.api.v2.model\DocumentoDetalhadoResponse salvarUsingPOST12($persist)

{{{documento_resource_salvar}}}

{{{documento_resource_salvar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagdocumentoApi();
$persist = new \br.com.conductor.pier.api.v2.model\DocumentoParametrosRequest(); // \br.com.conductor.pier.api.v2.model\DocumentoParametrosRequest | persist

try { 
    $result = $api_instance->salvarUsingPOST12($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagdocumentoApi->salvarUsingPOST12: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **persist** | [**\br.com.conductor.pier.api.v2.model\DocumentoParametrosRequest**](\br.com.conductor.pier.api.v2.model\DocumentoParametrosRequest.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\DocumentoDetalhadoResponse**](DocumentoDetalhadoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST13**
> \br.com.conductor.pier.api.v2.model\DocumentoTemplateResponse salvarUsingPOST13($persist)

{{{documento_template_resource_salvar}}}

{{{documento_template_resource_salvar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagdocumentoApi();
$persist = new \br.com.conductor.pier.api.v2.model\DocumentoTemplatePersist(); // \br.com.conductor.pier.api.v2.model\DocumentoTemplatePersist | persist

try { 
    $result = $api_instance->salvarUsingPOST13($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagdocumentoApi->salvarUsingPOST13: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **persist** | [**\br.com.conductor.pier.api.v2.model\DocumentoTemplatePersist**](\br.com.conductor.pier.api.v2.model\DocumentoTemplatePersist.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\DocumentoTemplateResponse**](DocumentoTemplateResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST32**
> \br.com.conductor.pier.api.v2.model\TipoTemplateResponse salvarUsingPOST32($persist)

{{{tipo_template_resource_salvar}}}

{{{tipo_template_resource_salvar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagdocumentoApi();
$persist = new \br.com.conductor.pier.api.v2.model\TipoTemplateRequest(); // \br.com.conductor.pier.api.v2.model\TipoTemplateRequest | persist

try { 
    $result = $api_instance->salvarUsingPOST32($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagdocumentoApi->salvarUsingPOST32: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **persist** | [**\br.com.conductor.pier.api.v2.model\TipoTemplateRequest**](\br.com.conductor.pier.api.v2.model\TipoTemplateRequest.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TipoTemplateResponse**](TipoTemplateResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

