# br.com.conductor.pier.api.v2.invoker\DocumentoApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarUsingPUT9**](DocumentoApi.md#alterarUsingPUT9) | **PUT** /api/tipos-templates/{id} | Altera o tipo de template
[**atualizarUsingPUT**](DocumentoApi.md#atualizarUsingPUT) | **PUT** /api/templates-documentos/{id} | Atualizar templates dos documentos
[**consultarUsingGET27**](DocumentoApi.md#consultarUsingGET27) | **GET** /api/tipos-templates/{id} | Consultar tipo de template
[**consultarUsingGET7**](DocumentoApi.md#consultarUsingGET7) | **GET** /api/documentos/{id} | Consulta documentos
[**consultarUsingGET8**](DocumentoApi.md#consultarUsingGET8) | **GET** /api/templates-documentos/{id} | Consultar templates dos documentos
[**integrarUsingPOST**](DocumentoApi.md#integrarUsingPOST) | **POST** /api/documentos/integrar | Integra um arquivo a reposit\u00C3\u00B3rios remotos.
[**listarUsingGET10**](DocumentoApi.md#listarUsingGET10) | **GET** /api/documentos | Lista documentos
[**listarUsingGET11**](DocumentoApi.md#listarUsingGET11) | **GET** /api/templates-documentos | Lista os templates dos documentos
[**listarUsingGET31**](DocumentoApi.md#listarUsingGET31) | **GET** /api/tipos-templates | Lista os tipos de templates
[**salvarUsingPOST17**](DocumentoApi.md#salvarUsingPOST17) | **POST** /api/tipos-templates | Cadastra os tipos de templates
[**salvarUsingPOST5**](DocumentoApi.md#salvarUsingPOST5) | **POST** /api/documentos | Cadastra documentos
[**salvarUsingPOST6**](DocumentoApi.md#salvarUsingPOST6) | **POST** /api/templates-documentos | Cadastra os templates dos documentos


# **alterarUsingPUT9**
> \br.com.conductor.pier.api.v2.model\TipoTemplateResponse alterarUsingPUT9($id, $persist)

Altera o tipo de template

Esse recurso permite alterar os dados do tipo de template.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\DocumentoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do tipo de template (id).
$persist = new \br.com.conductor.pier.api.v2.model\TipoTemplateRequest(); // \br.com.conductor.pier.api.v2.model\TipoTemplateRequest | persist

try { 
    $result = $api_instance->alterarUsingPUT9($id, $persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentoApi->alterarUsingPUT9: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do tipo de template (id). | 
 **persist** | [**\br.com.conductor.pier.api.v2.model\TipoTemplateRequest**](\br.com.conductor.pier.api.v2.model\TipoTemplateRequest.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TipoTemplateResponse**](TipoTemplateResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **atualizarUsingPUT**
> \br.com.conductor.pier.api.v2.model\DocumentoTemplateResponse atualizarUsingPUT($id, $persist)

Atualizar templates dos documentos

Esse recurso permite atualizar templates dos documentos.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\DocumentoApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do documento template (id).
$persist = new \br.com.conductor.pier.api.v2.model\DocumentoTemplatePersist(); // \br.com.conductor.pier.api.v2.model\DocumentoTemplatePersist | persist

try { 
    $result = $api_instance->atualizarUsingPUT($id, $persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentoApi->atualizarUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do documento template (id). | 
 **persist** | [**\br.com.conductor.pier.api.v2.model\DocumentoTemplatePersist**](\br.com.conductor.pier.api.v2.model\DocumentoTemplatePersist.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\DocumentoTemplateResponse**](DocumentoTemplateResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET27**
> \br.com.conductor.pier.api.v2.model\TipoTemplateResponse consultarUsingGET27($id)

Consultar tipo de template

Esse recurso permite consultar um determinado tipo de template a partir do id recebido e do id do emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\DocumentoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do tipo de template (id).

try { 
    $result = $api_instance->consultarUsingGET27($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentoApi->consultarUsingGET27: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do tipo de template (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TipoTemplateResponse**](TipoTemplateResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET7**
> \br.com.conductor.pier.api.v2.model\DocumentoDetalhadoResponse consultarUsingGET7($id)

Consulta documentos

Esse recurso permite consultar um documento espec\u00C3\u00ADfico a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\DocumentoApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do documento (id).

try { 
    $result = $api_instance->consultarUsingGET7($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentoApi->consultarUsingGET7: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do documento (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\DocumentoDetalhadoResponse**](DocumentoDetalhadoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET8**
> \br.com.conductor.pier.api.v2.model\DocumentoTemplateResponse consultarUsingGET8($id)

Consultar templates dos documentos

Esse recurso permite consultar templates dos documentos.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\DocumentoApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do documento template (id).

try { 
    $result = $api_instance->consultarUsingGET8($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentoApi->consultarUsingGET8: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do documento template (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\DocumentoTemplateResponse**](DocumentoTemplateResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **integrarUsingPOST**
> string integrarUsingPOST($integrar_documento_request)

Integra um arquivo a reposit\u00C3\u00B3rios remotos.

Este recurso permite integrar um documento ao reposit\u00C3\u00B3rio pre-configurado.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\DocumentoApi();
$integrar_documento_request = new \br.com.conductor.pier.api.v2.model\IntegrarDocumentoRequest(); // \br.com.conductor.pier.api.v2.model\IntegrarDocumentoRequest | integrarDocumentoRequest

try { 
    $result = $api_instance->integrarUsingPOST($integrar_documento_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentoApi->integrarUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integrar_documento_request** | [**\br.com.conductor.pier.api.v2.model\IntegrarDocumentoRequest**](\br.com.conductor.pier.api.v2.model\IntegrarDocumentoRequest.md)| integrarDocumentoRequest | 

### Return type

**string**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET10**
> \br.com.conductor.pier.api.v2.model\PageDocumentoResponse listarUsingGET10($sort, $page, $limit, $id_template_documento, $nome, $extensao)

Lista documentos

Esse recurso permite listar documentos.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\DocumentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id_template_documento = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do template do documento.
$nome = "nome_example"; // string | Nome do documento.
$extensao = "extensao_example"; // string | Extensao do documento.

try { 
    $result = $api_instance->listarUsingGET10($sort, $page, $limit, $id_template_documento, $nome, $extensao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentoApi->listarUsingGET10: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id_template_documento** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do template do documento. | [optional] 
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

# **listarUsingGET11**
> \br.com.conductor.pier.api.v2.model\PageDocumentoTemplateResponse listarUsingGET11($sort, $page, $limit, $id_tipo_template)

Lista os templates dos documentos

Esse recurso permite listar os templates dos documentos.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\DocumentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id_tipo_template = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do tipo do template.

try { 
    $result = $api_instance->listarUsingGET11($sort, $page, $limit, $id_tipo_template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentoApi->listarUsingGET11: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id_tipo_template** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do tipo do template. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageDocumentoTemplateResponse**](PageDocumentoTemplateResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET31**
> \br.com.conductor.pier.api.v2.model\PageTipoTemplateResponse listarUsingGET31($sort, $page, $limit)

Lista os tipos de templates

Esse recurso permite listar os tipos de templates associados ao emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\DocumentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarUsingGET31($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentoApi->listarUsingGET31: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTipoTemplateResponse**](PageTipoTemplateResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST17**
> \br.com.conductor.pier.api.v2.model\TipoTemplateResponse salvarUsingPOST17($persist)

Cadastra os tipos de templates

Esse recurso permite cadastrar tipos de templates.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\DocumentoApi();
$persist = new \br.com.conductor.pier.api.v2.model\TipoTemplateRequest(); // \br.com.conductor.pier.api.v2.model\TipoTemplateRequest | persist

try { 
    $result = $api_instance->salvarUsingPOST17($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentoApi->salvarUsingPOST17: ', $e->getMessage(), "\n";
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

# **salvarUsingPOST5**
> \br.com.conductor.pier.api.v2.model\DocumentoDetalhadoResponse salvarUsingPOST5($persist)

Cadastra documentos

Esse recurso permite cadastrar documentos.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\DocumentoApi();
$persist = new \br.com.conductor.pier.api.v2.model\DocumentoParametrosRequest(); // \br.com.conductor.pier.api.v2.model\DocumentoParametrosRequest | persist

try { 
    $result = $api_instance->salvarUsingPOST5($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentoApi->salvarUsingPOST5: ', $e->getMessage(), "\n";
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

# **salvarUsingPOST6**
> \br.com.conductor.pier.api.v2.model\DocumentoTemplateResponse salvarUsingPOST6($persist)

Cadastra os templates dos documentos

Esse recurso permite cadastrar templates dos documentos.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\DocumentoApi();
$persist = new \br.com.conductor.pier.api.v2.model\DocumentoTemplatePersist(); // \br.com.conductor.pier.api.v2.model\DocumentoTemplatePersist | persist

try { 
    $result = $api_instance->salvarUsingPOST6($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentoApi->salvarUsingPOST6: ', $e->getMessage(), "\n";
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

