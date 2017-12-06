# br.com.conductor.pier.api.v2.invoker\DispositivoApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ativarUsingPOST**](DispositivoApi.md#ativarUsingPOST) | **POST** /api/dispositivos/{id}/ativar-dispositivo | Ativa Dispositivo
[**desativarUsingPOST**](DispositivoApi.md#desativarUsingPOST) | **POST** /api/dispositivos/{id}/desativar-dispositivo | Desativa Dispositivo
[**listarUsingGET15**](DispositivoApi.md#listarUsingGET15) | **GET** /api/dispositivos | Lista os dispositivos cadastrados
[**salvarUsingPOST8**](DispositivoApi.md#salvarUsingPOST8) | **POST** /api/dispositivos | Cadastra Dispositivo


# **ativarUsingPOST**
> \br.com.conductor.pier.api.v2.model\DispositivoResponse ativarUsingPOST($id)

Ativa Dispositivo

Esse recurso permite ativar dispositivo.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\DispositivoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Plataforma (id).

try { 
    $result = $api_instance->ativarUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispositivoApi->ativarUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Plataforma (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\DispositivoResponse**](DispositivoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **desativarUsingPOST**
> \br.com.conductor.pier.api.v2.model\DispositivoResponse desativarUsingPOST($id)

Desativa Dispositivo

Esse recurso permite desativar dispositivo.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\DispositivoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Plataforma (id).

try { 
    $result = $api_instance->desativarUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispositivoApi->desativarUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Plataforma (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\DispositivoResponse**](DispositivoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET15**
> \br.com.conductor.pier.api.v2.model\PageDispositivoResponse listarUsingGET15($sort, $page, $limit, $token, $id_usuario, $id_aplicacao_mobile, $data_criacao, $data_desativacao)

Lista os dispositivos cadastrados

Este m\u00C3\u00A9todo permite que sejam listados os dispositivos existentes na base do PIER.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\DispositivoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$token = "token_example"; // string | Token do Dispositivo
$id_usuario = 789; // int | Identificador do Usu\u00C3\u00A1rio
$id_aplicacao_mobile = 789; // int | Identificador da aplica\u00C3\u00A7\u00C3\u00A3o
$data_criacao = "data_criacao_example"; // string | Apresenta a data e em que o registro foi criado.
$data_desativacao = "data_desativacao_example"; // string | Apresenta a data e em que o registro foi desativado.

try { 
    $result = $api_instance->listarUsingGET15($sort, $page, $limit, $token, $id_usuario, $id_aplicacao_mobile, $data_criacao, $data_desativacao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispositivoApi->listarUsingGET15: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **token** | **string**| Token do Dispositivo | [optional] 
 **id_usuario** | **int**| Identificador do Usu\u00C3\u00A1rio | [optional] 
 **id_aplicacao_mobile** | **int**| Identificador da aplica\u00C3\u00A7\u00C3\u00A3o | [optional] 
 **data_criacao** | **string**| Apresenta a data e em que o registro foi criado. | [optional] 
 **data_desativacao** | **string**| Apresenta a data e em que o registro foi desativado. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageDispositivoResponse**](PageDispositivoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST8**
> \br.com.conductor.pier.api.v2.model\DispositivoResponse salvarUsingPOST8($persist)

Cadastra Dispositivo

Esse recurso permite cadastrar dispositivos.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\DispositivoApi();
$persist = new \br.com.conductor.pier.api.v2.model\DispositivoPersist(); // \br.com.conductor.pier.api.v2.model\DispositivoPersist | persist

try { 
    $result = $api_instance->salvarUsingPOST8($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispositivoApi->salvarUsingPOST8: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **persist** | [**\br.com.conductor.pier.api.v2.model\DispositivoPersist**](\br.com.conductor.pier.api.v2.model\DispositivoPersist.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\DispositivoResponse**](DispositivoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

