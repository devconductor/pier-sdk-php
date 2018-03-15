# br.com.conductor.pier.api.v2.invoker\AvisoViagemApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**consultarUsingGET5**](AvisoViagemApi.md#consultarUsingGET5) | **GET** /api/avisos-viagens/{id} | Consultar um aviso viagem de acordo com o id passado
[**desabilitarUsingPOST**](AvisoViagemApi.md#desabilitarUsingPOST) | **POST** /api/avisos-viagens/{id}/desabilitar | Desabilitar um aviso viagem de acordo com o id passado
[**habilitarUsingPOST**](AvisoViagemApi.md#habilitarUsingPOST) | **POST** /api/avisos-viagens/{id}/habilitar | Habilitar um aviso viagem de acordo com o id passado
[**listarUsingGET7**](AvisoViagemApi.md#listarUsingGET7) | **GET** /api/avisos-viagens | Lista os avisos viagens gerados pelo Emissor
[**salvarUsingPOST3**](AvisoViagemApi.md#salvarUsingPOST3) | **POST** /api/avisos-viagens | Realiza o cadastro de um novo Aviso Viagem


# **consultarUsingGET5**
> \br.com.conductor.pier.api.v2.model\AvisoViagemResponse consultarUsingGET5($id)

Consultar um aviso viagem de acordo com o id passado

Este m\u00E9todo permite que seja consultado um aviso viagen existente na base do emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\AvisoViagemApi();
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do Aviso Viagem (id).

try { 
    $result = $api_instance->consultarUsingGET5($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvisoViagemApi->consultarUsingGET5: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do Aviso Viagem (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\AvisoViagemResponse**](AvisoViagemResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **desabilitarUsingPOST**
> \br.com.conductor.pier.api.v2.model\AvisoViagemResponse desabilitarUsingPOST($id)

Desabilitar um aviso viagem de acordo com o id passado

Este m\u00E9todo permite que seja desabilitado um aviso viagen existente na base do emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\AvisoViagemApi();
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do Aviso Viagem (id).

try { 
    $result = $api_instance->desabilitarUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvisoViagemApi->desabilitarUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do Aviso Viagem (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\AvisoViagemResponse**](AvisoViagemResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **habilitarUsingPOST**
> \br.com.conductor.pier.api.v2.model\AvisoViagemResponse habilitarUsingPOST($id)

Habilitar um aviso viagem de acordo com o id passado

Este m\u00E9todo permite que seja habilitado um aviso viagen existente na base do emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\AvisoViagemApi();
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do Aviso Viagem (id).

try { 
    $result = $api_instance->habilitarUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvisoViagemApi->habilitarUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do Aviso Viagem (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\AvisoViagemResponse**](AvisoViagemResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET7**
> \br.com.conductor.pier.api.v2.model\PageAvisoViagemResponse listarUsingGET7($sort, $page, $limit, $id_cartao, $codigo_pais, $data_inicio, $data_fim, $flag_ativo)

Lista os avisos viagens gerados pelo Emissor

Este m\u00E9todo permite que sejam listados os avisos viagens existentes na base do emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\AvisoViagemApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$id_cartao = 789; // int | C\u00F3digo Identificador do cart\u00E3o na base (id)
$codigo_pais = "codigo_pais_example"; // string | Codigo identificador do pa\u00EDs na base (id)
$data_inicio = "data_inicio_example"; // string | Data inicio do aviso viagem
$data_fim = "data_fim_example"; // string | Data fim do aviso viagem
$flag_ativo = 56; // int | Identifica se o aviso viagem esta ativo ou n\u00E3o

try { 
    $result = $api_instance->listarUsingGET7($sort, $page, $limit, $id_cartao, $codigo_pais, $data_inicio, $data_fim, $flag_ativo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvisoViagemApi->listarUsingGET7: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **id_cartao** | **int**| C\u00F3digo Identificador do cart\u00E3o na base (id) | [optional] 
 **codigo_pais** | **string**| Codigo identificador do pa\u00EDs na base (id) | [optional] 
 **data_inicio** | **string**| Data inicio do aviso viagem | [optional] 
 **data_fim** | **string**| Data fim do aviso viagem | [optional] 
 **flag_ativo** | **int**| Identifica se o aviso viagem esta ativo ou n\u00E3o | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageAvisoViagemResponse**](PageAvisoViagemResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST3**
> \br.com.conductor.pier.api.v2.model\AvisoViagemResponse salvarUsingPOST3($id_cartao, $codigo_pais, $data_inicio, $data_fim)

Realiza o cadastro de um novo Aviso Viagem

Este m\u00E9todo permite que seja cadastrado um novo Aviso Viagem na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\AvisoViagemApi();
$id_cartao = 789; // int | C\u00F3digo Identificador do cart\u00E3o na base (id)
$codigo_pais = "codigo_pais_example"; // string | Codigo identificador do pa\u00EDs na base (id)
$data_inicio = "data_inicio_example"; // string | Data inicio do aviso viagem
$data_fim = "data_fim_example"; // string | Data fim do aviso viagem

try { 
    $result = $api_instance->salvarUsingPOST3($id_cartao, $codigo_pais, $data_inicio, $data_fim);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvisoViagemApi->salvarUsingPOST3: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_cartao** | **int**| C\u00F3digo Identificador do cart\u00E3o na base (id) | 
 **codigo_pais** | **string**| Codigo identificador do pa\u00EDs na base (id) | 
 **data_inicio** | **string**| Data inicio do aviso viagem | 
 **data_fim** | **string**| Data fim do aviso viagem | 

### Return type

[**\br.com.conductor.pier.api.v2.model\AvisoViagemResponse**](AvisoViagemResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

