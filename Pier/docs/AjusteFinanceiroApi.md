# br.com.conductor.pier.api.v2.invoker\AjusteFinanceiroApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ajustarContaUsingPOST**](AjusteFinanceiroApi.md#ajustarContaUsingPOST) | **POST** /api/ajustes-financeiros | Lan\u00E7a um ajuste para a conta informada
[**consultarUsingGET2**](AjusteFinanceiroApi.md#consultarUsingGET2) | **GET** /api/ajustes-financeiros/{id} | Apresenta dados de um determinado ajuste financeiro
[**listarUsingGET2**](AjusteFinanceiroApi.md#listarUsingGET2) | **GET** /api/ajustes-financeiros | Lista ajustes existentes na base de dados do Emissor


# **ajustarContaUsingPOST**
> \br.com.conductor.pier.api.v2.model\AjusteFinanceiroResponse ajustarContaUsingPOST($id_tipo_ajuste, $data_ajuste, $valor_ajuste, $id_conta, $identificador_externo)

Lan\u00E7a um ajuste para a conta informada

Este recurso insere um ajuste para a conta do id informado

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\AjusteFinanceiroApi();
$id_tipo_ajuste = 789; // int | C\u00F3digo identificador do tipo de ajuste.
$data_ajuste = "data_ajuste_example"; // string | Data do ajuste no formato yyyy-MM-dd'T'HH:mm:ss.SSSZ.
$valor_ajuste = new Number(); // Number | Valor do ajuste
$id_conta = 789; // int | C\u00F3digo identificador da conta.
$identificador_externo = "identificador_externo_example"; // string | Codigo Hexadecimal

try { 
    $result = $api_instance->ajustarContaUsingPOST($id_tipo_ajuste, $data_ajuste, $valor_ajuste, $id_conta, $identificador_externo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AjusteFinanceiroApi->ajustarContaUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_tipo_ajuste** | **int**| C\u00F3digo identificador do tipo de ajuste. | 
 **data_ajuste** | **string**| Data do ajuste no formato yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ. | 
 **valor_ajuste** | [**Number**](.md)| Valor do ajuste | 
 **id_conta** | **int**| C\u00F3digo identificador da conta. | 
 **identificador_externo** | **string**| Codigo Hexadecimal | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\AjusteFinanceiroResponse**](AjusteFinanceiroResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET2**
> \br.com.conductor.pier.api.v2.model\AjusteFinanceiroResponse consultarUsingGET2($id)

Apresenta dados de um determinado ajuste financeiro

Este m\u00E9todo permite consultar dados de um determinado ajuste a partir de seu codigo de identifica\u00E7\u00E3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\AjusteFinanceiroApi();
$id = 789; // int | C\u00F3digo de identifica\u00E7\u00E3o do ajuste (id).

try { 
    $result = $api_instance->consultarUsingGET2($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AjusteFinanceiroApi->consultarUsingGET2: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de identifica\u00E7\u00E3o do ajuste (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\AjusteFinanceiroResponse**](AjusteFinanceiroResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET2**
> \br.com.conductor.pier.api.v2.model\PageAjusteResponse listarUsingGET2($sort, $page, $limit, $id_tipo_ajuste, $data_ajuste, $valor_ajuste, $identificador_externo, $id_conta)

Lista ajustes existentes na base de dados do Emissor

Este recurso permite listar ajustes existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\AjusteFinanceiroApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$id_tipo_ajuste = 789; // int | C\u00F3digo identificador do tipo de ajuste.
$data_ajuste = "data_ajuste_example"; // string | Data do ajuste no formato yyyy-MM-dd'T'HH:mm:ss.SSSZ.
$valor_ajuste = new Number(); // Number | Valor do ajuste
$identificador_externo = "identificador_externo_example"; // string | Codigo Hexadecimal
$id_conta = 789; // int | C\u00F3digo identificador da conta.

try { 
    $result = $api_instance->listarUsingGET2($sort, $page, $limit, $id_tipo_ajuste, $data_ajuste, $valor_ajuste, $identificador_externo, $id_conta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AjusteFinanceiroApi->listarUsingGET2: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **id_tipo_ajuste** | **int**| C\u00F3digo identificador do tipo de ajuste. | [optional] 
 **data_ajuste** | **string**| Data do ajuste no formato yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ. | [optional] 
 **valor_ajuste** | [**Number**](.md)| Valor do ajuste | [optional] 
 **identificador_externo** | **string**| Codigo Hexadecimal | [optional] 
 **id_conta** | **int**| C\u00F3digo identificador da conta. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageAjusteResponse**](PageAjusteResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

