# br.com.conductor.pier.api.v2.invoker\ArquivoApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**consultarUsingGET3**](ArquivoApi.md#consultarUsingGET3) | **GET** /api/arquivos/{id} | Consulta de arquivo no PIER Cloud
[**integrarUsingPOST**](ArquivoApi.md#integrarUsingPOST) | **POST** /api/arquivos/integrar | Integrar Arquivos
[**listarPorNumeroReceitaFederalUsingGET**](ArquivoApi.md#listarPorNumeroReceitaFederalUsingGET) | **GET** /api/arquivos-auditorias | Lista as auditorias de arquivos vinculadas a um N\u00FAmero da Receita Federal
[**listarStatusArquivosUsingGET**](ArquivoApi.md#listarStatusArquivosUsingGET) | **GET** /api/status-arquivos | Listar Status de Arquivo
[**listarTiposArquivosUsingGET**](ArquivoApi.md#listarTiposArquivosUsingGET) | **GET** /api/tipos-arquivos | Listar Tipos de Arquivo
[**listarUsingGET4**](ArquivoApi.md#listarUsingGET4) | **GET** /api/arquivos/{id}/auditorias | Lista as auditorias do arquivo
[**listarUsingGET5**](ArquivoApi.md#listarUsingGET5) | **GET** /api/arquivos | Listar arquivos do Pier Cloud
[**salvarUsingPOST1**](ArquivoApi.md#salvarUsingPOST1) | **POST** /api/arquivos | Permite armazenar arquivos no PIER Cloud


# **consultarUsingGET3**
> \br.com.conductor.pier.api.v2.model\ArquivoDetalheResponse consultarUsingGET3($id)

Consulta de arquivo no PIER Cloud

Este recurso permite consultar um determinado arquivo armazenado no PIER Cloud.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ArquivoApi();
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do arquivo

try { 
    $result = $api_instance->consultarUsingGET3($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArquivoApi->consultarUsingGET3: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do arquivo | 

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

Integrar Arquivos

Este recurso foi desenvolvido para realizar a integra\u00E7\u00E3o de arquivos do PIER Cloud junto a reposit\u00F3rios externos pr\u00E9-configurado.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ArquivoApi();
$integrar_arquivo_request = new \br.com.conductor.pier.api.v2.model\IntegrarArquivoRequest(); // \br.com.conductor.pier.api.v2.model\IntegrarArquivoRequest | integrarArquivoRequest

try { 
    $result = $api_instance->integrarUsingPOST($integrar_arquivo_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArquivoApi->integrarUsingPOST: ', $e->getMessage(), "\n";
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

Lista as auditorias de arquivos vinculadas a um N\u00FAmero da Receita Federal

Este recurso permite listar as auditorias de arquivos vinculadas a um N\u00FAmero da Receita Federal que ser\u00E1 passado como par\u00E2metro.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ArquivoApi();
$numero_receita_federal = "numero_receita_federal_example"; // string | Par\u00E2metro vinculado a um arquivo no ato de seu cadastro
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarPorNumeroReceitaFederalUsingGET($numero_receita_federal, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArquivoApi->listarPorNumeroReceitaFederalUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **numero_receita_federal** | **string**| Par\u00E2metro vinculado a um arquivo no ato de seu cadastro | 
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

Listar Status de Arquivo

Este recurso permite a listagem de todos os Status de Arquivo.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ArquivoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$nome = "nome_example"; // string | Nome do status de arquivo
$descricao = "descricao_example"; // string | Descri\u00E7\u00E3o do status de arquivo

try { 
    $result = $api_instance->listarStatusArquivosUsingGET($sort, $page, $limit, $nome, $descricao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArquivoApi->listarStatusArquivosUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **nome** | **string**| Nome do status de arquivo | [optional] 
 **descricao** | **string**| Descri\u00E7\u00E3o do status de arquivo | [optional] 

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

Listar Tipos de Arquivo

Este recurso permite a listagem de todos os Tipos de Arquivo.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ArquivoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$nome = "nome_example"; // string | Nome do tipo de arquivo
$descricao = "descricao_example"; // string | Descri\u00E7\u00E3o do tipo de arquivo

try { 
    $result = $api_instance->listarTiposArquivosUsingGET($sort, $page, $limit, $nome, $descricao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArquivoApi->listarTiposArquivosUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **nome** | **string**| Nome do tipo de arquivo | [optional] 
 **descricao** | **string**| Descri\u00E7\u00E3o do tipo de arquivo | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTipoArquivoResponse**](PageTipoArquivoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET4**
> \br.com.conductor.pier.api.v2.model\PageArquivoAUDResponse listarUsingGET4($id, $page, $limit)

Lista as auditorias do arquivo

Este recurso permite listar as auditorias de um determinado arquivo a partir do seu c\u00F3digo de identifica\u00E7\u00E3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ArquivoApi();
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do arquivo
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarUsingGET4($id, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArquivoApi->listarUsingGET4: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do arquivo | 
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

# **listarUsingGET5**
> \br.com.conductor.pier.api.v2.model\PageArquivoResponse listarUsingGET5($sort, $page, $limit, $nome, $id_tipo_arquivo, $id_status_arquivo, $extensao)

Listar arquivos do Pier Cloud

Este recurso permite a listagem de todos os arquivos dispon\u00EDveis no Pier Cloud.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ArquivoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$nome = "nome_example"; // string | Nome do arquivo
$id_tipo_arquivo = 789; // int | Tipo do arquivo
$id_status_arquivo = 789; // int | Identificador do status do arquivo
$extensao = "extensao_example"; // string | Extens\u00E3o do arquivo

try { 
    $result = $api_instance->listarUsingGET5($sort, $page, $limit, $nome, $id_tipo_arquivo, $id_status_arquivo, $extensao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArquivoApi->listarUsingGET5: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **nome** | **string**| Nome do arquivo | [optional] 
 **id_tipo_arquivo** | **int**| Tipo do arquivo | [optional] 
 **id_status_arquivo** | **int**| Identificador do status do arquivo | [optional] 
 **extensao** | **string**| Extens\u00E3o do arquivo | [optional] 

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

Permite armazenar arquivos no PIER Cloud

Este recurso permite o armazenamento de arquivos no PIER Cloud.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ArquivoApi();
$arquivo_persist = new \br.com.conductor.pier.api.v2.model\ArquivoPersist(); // \br.com.conductor.pier.api.v2.model\ArquivoPersist | arquivoPersist

try { 
    $result = $api_instance->salvarUsingPOST1($arquivo_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArquivoApi->salvarUsingPOST1: ', $e->getMessage(), "\n";
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

