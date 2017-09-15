# br.com.conductor.pier.api.v2.invoker\JobApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ativarJobUsingPOST**](JobApi.md#ativarJobUsingPOST) | **POST** /api/jobs/{id}/ativar-job | Ativar Job
[**atualizarUsingPUT**](JobApi.md#atualizarUsingPUT) | **PUT** /api/jobs/{id} | Atualizar Job
[**desativarJobUsingPOST**](JobApi.md#desativarJobUsingPOST) | **POST** /api/jobs/{id}/desativar-job | Desativar Job
[**listarUsingGET13**](JobApi.md#listarUsingGET13) | **GET** /api/jobs | Listar Jobs
[**salvarUsingPOST8**](JobApi.md#salvarUsingPOST8) | **POST** /api/jobs | Cadastrar Job


# **ativarJobUsingPOST**
> \br.com.conductor.pier.api.v2.model\JobResponse ativarJobUsingPOST($id)

Ativar Job

Este recurso adiciona o job ao agendador de tarefas.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\JobApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Job (id).

try { 
    $result = $api_instance->ativarJobUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->ativarJobUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Job (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\JobResponse**](JobResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **atualizarUsingPUT**
> \br.com.conductor.pier.api.v2.model\JobResponse atualizarUsingPUT($id, $descricao, $cron, $groovy)

Atualizar Job

Este recurso permite atualizar os dados de um job cadastrado.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\JobApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Job (id).
$descricao = "descricao_example"; // string | descricao.
$cron = "cron_example"; // string | Cron do Job.
$groovy = "groovy_example"; // string | groovy

try { 
    $result = $api_instance->atualizarUsingPUT($id, $descricao, $cron, $groovy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->atualizarUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Job (id). | 
 **descricao** | **string**| descricao. | 
 **cron** | **string**| Cron do Job. | 
 **groovy** | **string**| groovy | 

### Return type

[**\br.com.conductor.pier.api.v2.model\JobResponse**](JobResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: text/plain
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **desativarJobUsingPOST**
> \br.com.conductor.pier.api.v2.model\JobResponse desativarJobUsingPOST($id)

Desativar Job

Este recurso retira o job do agendador de tarefas.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\JobApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Job (id).

try { 
    $result = $api_instance->desativarJobUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->desativarJobUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Job (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\JobResponse**](JobResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET13**
> \br.com.conductor.pier.api.v2.model\PageJobResponse listarUsingGET13($groovy, $descricao, $cron, $status, $page, $limit)

Listar Jobs

Este recurso permite que sejam listados os jobs existentes na base do PIER.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\JobApi();
$groovy = "groovy_example"; // string | Script Groovy do Job
$descricao = "descricao_example"; // string | Descri\u00C3\u00A7\u00C3\u00A3o do Job
$cron = "cron_example"; // string | Cron do Job
$status = "status_example"; // string | Status do Job
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarUsingGET13($groovy, $descricao, $cron, $status, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->listarUsingGET13: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groovy** | **string**| Script Groovy do Job | [optional] 
 **descricao** | **string**| Descri\u00C3\u00A7\u00C3\u00A3o do Job | [optional] 
 **cron** | **string**| Cron do Job | [optional] 
 **status** | **string**| Status do Job | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageJobResponse**](PageJobResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST8**
> \br.com.conductor.pier.api.v2.model\JobResponse salvarUsingPOST8($descricao, $cron, $groovy)

Cadastrar Job

Esse recurso permite cadastrar jobs.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\JobApi();
$descricao = "descricao_example"; // string | descricao.
$cron = "cron_example"; // string | Cron do Job.
$groovy = "groovy_example"; // string | groovy

try { 
    $result = $api_instance->salvarUsingPOST8($descricao, $cron, $groovy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->salvarUsingPOST8: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **descricao** | **string**| descricao. | 
 **cron** | **string**| Cron do Job. | 
 **groovy** | **string**| groovy | 

### Return type

[**\br.com.conductor.pier.api.v2.model\JobResponse**](JobResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: text/plain
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

