# br.com.conductor.pier.api.v2.invoker\DocumentoApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarUsingPUT19**](DocumentoApi.md#alterarUsingPUT19) | **PUT** /api/tipos-templates/{id} | Altera o tipo de template
[**atualizarUsingPUT2**](DocumentoApi.md#atualizarUsingPUT2) | **PUT** /api/templates-documentos/{id} | Atualizar templates dos documentos
[**consultarUsingGET14**](DocumentoApi.md#consultarUsingGET14) | **GET** /api/documentos/{id} | Consulta documentos
[**consultarUsingGET15**](DocumentoApi.md#consultarUsingGET15) | **GET** /api/templates-documentos/{id} | Consultar templates dos documentos
[**consultarUsingGET39**](DocumentoApi.md#consultarUsingGET39) | **GET** /api/tipos-templates/{id} | Consultar tipo de template
[**integrarUsingPOST1**](DocumentoApi.md#integrarUsingPOST1) | **POST** /api/documentos/integrar | Integra um arquivo a reposit\u00F3rios remotos.
[**listarUsingGET19**](DocumentoApi.md#listarUsingGET19) | **GET** /api/documentos | Lista documentos
[**listarUsingGET20**](DocumentoApi.md#listarUsingGET20) | **GET** /api/templates-documentos | Lista os templates dos documentos
[**listarUsingGET47**](DocumentoApi.md#listarUsingGET47) | **GET** /api/tipos-templates | Lista os tipos de templates
[**salvarUsingPOST10**](DocumentoApi.md#salvarUsingPOST10) | **POST** /api/documentos | Cadastra documentos
[**salvarUsingPOST11**](DocumentoApi.md#salvarUsingPOST11) | **POST** /api/templates-documentos | Cadastra os templates dos documentos
[**salvarUsingPOST26**](DocumentoApi.md#salvarUsingPOST26) | **POST** /api/tipos-templates | Cadastra os tipos de templates


# **alterarUsingPUT19**
> \br.com.conductor.pier.api.v2.model\TipoTemplateResponse alterarUsingPUT19($id, $persist)

Altera o tipo de template

Esse recurso permite alterar os dados do tipo de template.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\DocumentoApi();
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do tipo de template (id).
$persist = new \br.com.conductor.pier.api.v2.model\TipoTemplateRequest(); // \br.com.conductor.pier.api.v2.model\TipoTemplateRequest | persist

try { 
    $result = $api_instance->alterarUsingPUT19($id, $persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentoApi->alterarUsingPUT19: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do tipo de template (id). | 
 **persist** | [**\br.com.conductor.pier.api.v2.model\TipoTemplateRequest**](\br.com.conductor.pier.api.v2.model\TipoTemplateRequest.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TipoTemplateResponse**](TipoTemplateResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **atualizarUsingPUT2**
> \br.com.conductor.pier.api.v2.model\DocumentoTemplateResponse atualizarUsingPUT2($id, $persist)

Atualizar templates dos documentos

Esse recurso permite atualizar templates dos documentos.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\DocumentoApi();
$id = 789; // int | C\u00F3digo de identifica\u00E7\u00E3o do documento template (id).
$persist = new \br.com.conductor.pier.api.v2.model\DocumentoTemplatePersist(); // \br.com.conductor.pier.api.v2.model\DocumentoTemplatePersist | persist

try { 
    $result = $api_instance->atualizarUsingPUT2($id, $persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentoApi->atualizarUsingPUT2: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de identifica\u00E7\u00E3o do documento template (id). | 
 **persist** | [**\br.com.conductor.pier.api.v2.model\DocumentoTemplatePersist**](\br.com.conductor.pier.api.v2.model\DocumentoTemplatePersist.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\DocumentoTemplateResponse**](DocumentoTemplateResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET14**
> \br.com.conductor.pier.api.v2.model\DocumentoDetalhadoResponse consultarUsingGET14($id)

Consulta documentos

Esse recurso permite consultar um documento espec\u00EDfico a partir do seu c\u00F3digo de identifica\u00E7\u00E3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\DocumentoApi();
$id = 789; // int | C\u00F3digo de identifica\u00E7\u00E3o do documento (id).

try { 
    $result = $api_instance->consultarUsingGET14($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentoApi->consultarUsingGET14: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de identifica\u00E7\u00E3o do documento (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\DocumentoDetalhadoResponse**](DocumentoDetalhadoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET15**
> \br.com.conductor.pier.api.v2.model\DocumentoTemplateResponse consultarUsingGET15($id)

Consultar templates dos documentos

Esse recurso permite consultar templates dos documentos.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\DocumentoApi();
$id = 789; // int | C\u00F3digo de identifica\u00E7\u00E3o do documento template (id).

try { 
    $result = $api_instance->consultarUsingGET15($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentoApi->consultarUsingGET15: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de identifica\u00E7\u00E3o do documento template (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\DocumentoTemplateResponse**](DocumentoTemplateResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET39**
> \br.com.conductor.pier.api.v2.model\TipoTemplateResponse consultarUsingGET39($id)

Consultar tipo de template

Esse recurso permite consultar um determinado tipo de template a partir do id recebido e do id do emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\DocumentoApi();
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do tipo de template (id).

try { 
    $result = $api_instance->consultarUsingGET39($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentoApi->consultarUsingGET39: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do tipo de template (id). | 

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

Integra um arquivo a reposit\u00F3rios remotos.

Este recurso permite integrar um documento ao reposit\u00F3rio pre-configurado.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\DocumentoApi();
$integrar_documento_request = new \br.com.conductor.pier.api.v2.model\IntegrarDocumentoRequest(); // \br.com.conductor.pier.api.v2.model\IntegrarDocumentoRequest | integrarDocumentoRequest

try { 
    $result = $api_instance->integrarUsingPOST1($integrar_documento_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentoApi->integrarUsingPOST1: ', $e->getMessage(), "\n";
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

# **listarUsingGET19**
> \br.com.conductor.pier.api.v2.model\PageDocumentoResponse listarUsingGET19($sort, $page, $limit, $id_template_documento, $nome, $extensao)

Lista documentos

Esse recurso permite listar documentos.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\DocumentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$id_template_documento = 789; // int | C\u00F3digo de identifica\u00E7\u00E3o do template do documento.
$nome = "nome_example"; // string | Nome do documento.
$extensao = "extensao_example"; // string | Extensao do documento.

try { 
    $result = $api_instance->listarUsingGET19($sort, $page, $limit, $id_template_documento, $nome, $extensao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentoApi->listarUsingGET19: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **id_template_documento** | **int**| C\u00F3digo de identifica\u00E7\u00E3o do template do documento. | [optional] 
 **nome** | **string**| Nome do documento. | [optional] 
 **extensao** | **string**| Extensao do documento. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageDocumentoResponse**](PageDocumentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET20**
> \br.com.conductor.pier.api.v2.model\PageDocumentoTemplateResponse listarUsingGET20($sort, $page, $limit, $id_tipo_template)

Lista os templates dos documentos

Esse recurso permite listar os templates dos documentos.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\DocumentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$id_tipo_template = 789; // int | C\u00F3digo de identifica\u00E7\u00E3o do tipo do template.

try { 
    $result = $api_instance->listarUsingGET20($sort, $page, $limit, $id_tipo_template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentoApi->listarUsingGET20: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **id_tipo_template** | **int**| C\u00F3digo de identifica\u00E7\u00E3o do tipo do template. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageDocumentoTemplateResponse**](PageDocumentoTemplateResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET47**
> \br.com.conductor.pier.api.v2.model\PageTipoTemplateResponse listarUsingGET47($sort, $page, $limit)

Lista os tipos de templates

Esse recurso permite listar os tipos de templates associados ao emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\DocumentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarUsingGET47($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentoApi->listarUsingGET47: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTipoTemplateResponse**](PageTipoTemplateResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST10**
> \br.com.conductor.pier.api.v2.model\DocumentoDetalhadoResponse salvarUsingPOST10($persist)

Cadastra documentos

Esse recurso permite cadastrar documentos.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\DocumentoApi();
$persist = new \br.com.conductor.pier.api.v2.model\DocumentoParametrosRequest(); // \br.com.conductor.pier.api.v2.model\DocumentoParametrosRequest | persist

try { 
    $result = $api_instance->salvarUsingPOST10($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentoApi->salvarUsingPOST10: ', $e->getMessage(), "\n";
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

# **salvarUsingPOST11**
> \br.com.conductor.pier.api.v2.model\DocumentoTemplateResponse salvarUsingPOST11($persist)

Cadastra os templates dos documentos

Esse recurso permite cadastrar templates dos documentos.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\DocumentoApi();
$persist = new \br.com.conductor.pier.api.v2.model\DocumentoTemplatePersist(); // \br.com.conductor.pier.api.v2.model\DocumentoTemplatePersist | persist

try { 
    $result = $api_instance->salvarUsingPOST11($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentoApi->salvarUsingPOST11: ', $e->getMessage(), "\n";
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

# **salvarUsingPOST26**
> \br.com.conductor.pier.api.v2.model\TipoTemplateResponse salvarUsingPOST26($persist)

Cadastra os tipos de templates

Esse recurso permite cadastrar tipos de templates.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\DocumentoApi();
$persist = new \br.com.conductor.pier.api.v2.model\TipoTemplateRequest(); // \br.com.conductor.pier.api.v2.model\TipoTemplateRequest | persist

try { 
    $result = $api_instance->salvarUsingPOST26($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentoApi->salvarUsingPOST26: ', $e->getMessage(), "\n";
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

