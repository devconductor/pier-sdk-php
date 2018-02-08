# br.com.conductor.pier.api.v2.invoker\ArquivoApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**consultarUsingGET2**](ArquivoApi.md#consultarUsingGET2) | **GET** /api/arquivos/{id} | Consulta de arquivo no PIER Cloud
[**integrarUsingPOST**](ArquivoApi.md#integrarUsingPOST) | **POST** /api/arquivos/integrar | Integrar Arquivos
[**listarUsingGET3**](ArquivoApi.md#listarUsingGET3) | **GET** /api/arquivos/{id}/auditorias | Lista as auditorias do arquivo
[**listarUsingGET4**](ArquivoApi.md#listarUsingGET4) | **GET** /api/arquivos | Listar arquivos do Pier Cloud
[**salvarUsingPOST1**](ArquivoApi.md#salvarUsingPOST1) | **POST** /api/arquivos | Permite armazenar arquivos no PIER Cloud


# **consultarUsingGET2**
> \br.com.conductor.pier.api.v2.model\ArquivoDetalheResponse consultarUsingGET2($id)

Consulta de arquivo no PIER Cloud

Este recurso permite consultar um determinado arquivo armazenado no PIER Cloud.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ArquivoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do arquivo

try { 
    $result = $api_instance->consultarUsingGET2($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArquivoApi->consultarUsingGET2: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do arquivo | 

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

Este recurso foi desenvolvido para realizar a integra\u00C3\u00A7\u00C3\u00A3o de arquivos do PIER Cloud junto a reposit\u00C3\u00B3rios externos pr\u00C3\u00A9-configurado.

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

# **listarUsingGET3**
> \br.com.conductor.pier.api.v2.model\PageArquivoAUDResponse listarUsingGET3($id, $page, $limit)

Lista as auditorias do arquivo

Este recurso permite listar as auditorias de um determinado arquivo a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ArquivoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do arquivo
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarUsingGET3($id, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArquivoApi->listarUsingGET3: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do arquivo | 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageArquivoAUDResponse**](PageArquivoAUDResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET4**
> \br.com.conductor.pier.api.v2.model\PageArquivoResponse listarUsingGET4($sort, $page, $limit, $nome, $id_tipo_arquivo, $id_status_arquivo, $extensao)

Listar arquivos do Pier Cloud

Este recurso permite a listagem de todos os arquivos dispon\u00C3\u00ADveis no Pier Cloud.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ArquivoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$nome = "nome_example"; // string | Nome do arquivo
$id_tipo_arquivo = 789; // int | Tipo do arquivo
$id_status_arquivo = 789; // int | Identificador do status do arquivo
$extensao = "extensao_example"; // string | Extens\u00C3\u00A3o do arquivo

try { 
    $result = $api_instance->listarUsingGET4($sort, $page, $limit, $nome, $id_tipo_arquivo, $id_status_arquivo, $extensao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArquivoApi->listarUsingGET4: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **nome** | **string**| Nome do arquivo | [optional] 
 **id_tipo_arquivo** | **int**| Tipo do arquivo | [optional] 
 **id_status_arquivo** | **int**| Identificador do status do arquivo | [optional] 
 **extensao** | **string**| Extens\u00C3\u00A3o do arquivo | [optional] 

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

