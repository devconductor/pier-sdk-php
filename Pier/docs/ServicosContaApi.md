# br.com.conductor.pier.api.v2.invoker\ServicosContaApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ativarAnuidadeUsingPOST**](ServicosContaApi.md#ativarAnuidadeUsingPOST) | **POST** /api/contas/{id}/atribuir-anuidade | Atribuir Anuidade
[**ativarEnvioFaturaEmailUsingPOST**](ServicosContaApi.md#ativarEnvioFaturaEmailUsingPOST) | **POST** /api/contas/{id}/ativar-fatura-email |  Ativa o servi\u00C3\u00A7o de envio de fatura por email
[**desativarEnvioFaturaEmailUsingPOST**](ServicosContaApi.md#desativarEnvioFaturaEmailUsingPOST) | **POST** /api/contas/{id}/desativar-fatura-email | Desativa o servi\u00C3\u00A7o de envio de fatura por email
[**listarAnuidadesUsingGET**](ServicosContaApi.md#listarAnuidadesUsingGET) | **GET** /api/api/anuidades | Listar Anuidades
[**listarOperadorasTelefonicasUsingGET**](ServicosContaApi.md#listarOperadorasTelefonicasUsingGET) | **GET** /api/operadoras-telefonicas | Listar Operadoras


# **ativarAnuidadeUsingPOST**
> object ativarAnuidadeUsingPOST($id, $id_anuidade, $page, $limit, $ddd, $celular, $id_operadora, $id_origem_comercial)

Atribuir Anuidade

Esse recurso permite configurar qual a regra de Anuidade que ser\u00C3\u00A1 atribu\u00C3\u00ADda a uma determinada Conta.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ServicosContaApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).
$id_anuidade = 789; // int | Identificador da anuidade
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$ddd = "ddd_example"; // string | DDD do celular
$celular = "celular_example"; // string | N\u00C3\u00BAmero do celular
$id_operadora = 789; // int | Identificador da operadora do celular
$id_origem_comercial = 789; // int | Identificador da origem comercial

try { 
    $result = $api_instance->ativarAnuidadeUsingPOST($id, $id_anuidade, $page, $limit, $ddd, $celular, $id_operadora, $id_origem_comercial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicosContaApi->ativarAnuidadeUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | 
 **id_anuidade** | **int**| Identificador da anuidade | 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **ddd** | **string**| DDD do celular | [optional] 
 **celular** | **string**| N\u00C3\u00BAmero do celular | [optional] 
 **id_operadora** | **int**| Identificador da operadora do celular | [optional] 
 **id_origem_comercial** | **int**| Identificador da origem comercial | [optional] 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **ativarEnvioFaturaEmailUsingPOST**
> object ativarEnvioFaturaEmailUsingPOST($id)

 Ativa o servi\u00C3\u00A7o de envio de fatura por email

Este recurso ativa o servi\u00C3\u00A7o de envio de fatura por email

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ServicosContaApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).

try { 
    $result = $api_instance->ativarEnvioFaturaEmailUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicosContaApi->ativarEnvioFaturaEmailUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **desativarEnvioFaturaEmailUsingPOST**
> object desativarEnvioFaturaEmailUsingPOST($id)

Desativa o servi\u00C3\u00A7o de envio de fatura por email

Este recurso desativa o servi\u00C3\u00A7o de envio de fatura por email

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ServicosContaApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id).

try { 
    $result = $api_instance->desativarEnvioFaturaEmailUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicosContaApi->desativarEnvioFaturaEmailUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta (id). | 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarAnuidadesUsingGET**
> \br.com.conductor.pier.api.v2.model\PageAnuidadeResponse listarAnuidadesUsingGET($page, $limit)

Listar Anuidades

Lista as anuidades

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ServicosContaApi();
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarAnuidadesUsingGET($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicosContaApi->listarAnuidadesUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageAnuidadeResponse**](PageAnuidadeResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarOperadorasTelefonicasUsingGET**
> \br.com.conductor.pier.api.v2.model\PageOperadoraResponse listarOperadorasTelefonicasUsingGET($page, $limit)

Listar Operadoras

Lista as operadoras.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\ServicosContaApi();
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarOperadorasTelefonicasUsingGET($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicosContaApi->listarOperadorasTelefonicasUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageOperadoraResponse**](PageOperadoraResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

