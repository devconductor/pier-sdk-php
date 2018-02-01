# br.com.conductor.pier.api.v2.invoker\FaturamentoApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarTipoFaturamentoUsingPUT**](FaturamentoApi.md#alterarTipoFaturamentoUsingPUT) | **PUT** /api/tipos-faturamento/{id} | Alterar Faturamento
[**cadastrarFaturamentoPorContaUsingPOST**](FaturamentoApi.md#cadastrarFaturamentoPorContaUsingPOST) | **POST** /api/tipos-faturamento-conta | Adiciona uma nova configura\u00C3\u00A7\u00C3\u00A3o de faturamento para uma conta
[**cadastrarTipoFaturamentoUsingPOST**](FaturamentoApi.md#cadastrarTipoFaturamentoUsingPOST) | **POST** /api/tipos-faturamento | Adiciona um novo faturamento
[**consultarTipoFaturamentoUsingGET**](FaturamentoApi.md#consultarTipoFaturamentoUsingGET) | **GET** /api/tipos-faturamento/{id} | Consultar Faturamento por id
[**desativarFaturamentoPorContaUsingPOST**](FaturamentoApi.md#desativarFaturamentoPorContaUsingPOST) | **POST** /api/tipos-faturamento-conta/{id}/desativar | Desativar uma configura\u00C3\u00A7\u00C3\u00A3o de tipo de faturamento por conta atrav\u00C3\u00A9s do id
[**desativarTipoFaturamentoUsingPOST**](FaturamentoApi.md#desativarTipoFaturamentoUsingPOST) | **POST** /api/tipos-faturamento/{id}/desativar | Desativar uma configura\u00C3\u00A7\u00C3\u00A3o de tipo de faturamento atrav\u00C3\u00A9s do id
[**listarFaturamentoPorContaUsingGET**](FaturamentoApi.md#listarFaturamentoPorContaUsingGET) | **GET** /api/tipos-faturamento-conta | Lista as configura\u00C3\u00A7\u00C3\u00B5es de tipos de faturamento por conta
[**listarTipoFaturamentoUsingGET**](FaturamentoApi.md#listarTipoFaturamentoUsingGET) | **GET** /api/tipos-faturamento | Lista Tipos de Faturamento


# **alterarTipoFaturamentoUsingPUT**
> \br.com.conductor.pier.api.v2.model\TipoFaturamentoResponse alterarTipoFaturamentoUsingPUT($id, $tipo_faturamento_persist)

Alterar Faturamento

Alterar as configura\u00C3\u00A7\u00C3\u00B5es de um determinado tipo de faturamento

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\FaturamentoApi();
$id = 789; // int | Id
$tipo_faturamento_persist = new \br.com.conductor.pier.api.v2.model\TipoFaturamentoPersist(); // \br.com.conductor.pier.api.v2.model\TipoFaturamentoPersist | tipoFaturamentoPersist

try { 
    $result = $api_instance->alterarTipoFaturamentoUsingPUT($id, $tipo_faturamento_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaturamentoApi->alterarTipoFaturamentoUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id | 
 **tipo_faturamento_persist** | [**\br.com.conductor.pier.api.v2.model\TipoFaturamentoPersist**](\br.com.conductor.pier.api.v2.model\TipoFaturamentoPersist.md)| tipoFaturamentoPersist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TipoFaturamentoResponse**](TipoFaturamentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **cadastrarFaturamentoPorContaUsingPOST**
> \br.com.conductor.pier.api.v2.model\TipoFaturamentoPorContaResponse cadastrarFaturamentoPorContaUsingPOST($tipo_faturamento_por_conta_persist)

Adiciona uma nova configura\u00C3\u00A7\u00C3\u00A3o de faturamento para uma conta

Este m\u00C3\u00A9todo permite adicionar uma nova configura\u00C3\u00A7\u00C3\u00A3o de tipo de faturamento para um conta espec\u00C3\u00ADfica.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\FaturamentoApi();
$tipo_faturamento_por_conta_persist = new \br.com.conductor.pier.api.v2.model\TipoFaturamentoPorContaPersist(); // \br.com.conductor.pier.api.v2.model\TipoFaturamentoPorContaPersist | tipoFaturamentoPorContaPersist

try { 
    $result = $api_instance->cadastrarFaturamentoPorContaUsingPOST($tipo_faturamento_por_conta_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaturamentoApi->cadastrarFaturamentoPorContaUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tipo_faturamento_por_conta_persist** | [**\br.com.conductor.pier.api.v2.model\TipoFaturamentoPorContaPersist**](\br.com.conductor.pier.api.v2.model\TipoFaturamentoPorContaPersist.md)| tipoFaturamentoPorContaPersist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TipoFaturamentoPorContaResponse**](TipoFaturamentoPorContaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **cadastrarTipoFaturamentoUsingPOST**
> \br.com.conductor.pier.api.v2.model\TipoFaturamentoResponse cadastrarTipoFaturamentoUsingPOST($tipo_faturamento_persist)

Adiciona um novo faturamento

Adiciona uma nova configura\u00C3\u00A7\u00C3\u00A3o de tipo de faturamento

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\FaturamentoApi();
$tipo_faturamento_persist = new \br.com.conductor.pier.api.v2.model\TipoFaturamentoPersist(); // \br.com.conductor.pier.api.v2.model\TipoFaturamentoPersist | tipoFaturamentoPersist

try { 
    $result = $api_instance->cadastrarTipoFaturamentoUsingPOST($tipo_faturamento_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaturamentoApi->cadastrarTipoFaturamentoUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tipo_faturamento_persist** | [**\br.com.conductor.pier.api.v2.model\TipoFaturamentoPersist**](\br.com.conductor.pier.api.v2.model\TipoFaturamentoPersist.md)| tipoFaturamentoPersist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TipoFaturamentoResponse**](TipoFaturamentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarTipoFaturamentoUsingGET**
> \br.com.conductor.pier.api.v2.model\TipoFaturamentoResponse consultarTipoFaturamentoUsingGET($id)

Consultar Faturamento por id

Consulta os detalhes de uma determinada Faturamento

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\FaturamentoApi();
$id = 789; // int | Id

try { 
    $result = $api_instance->consultarTipoFaturamentoUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaturamentoApi->consultarTipoFaturamentoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TipoFaturamentoResponse**](TipoFaturamentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **desativarFaturamentoPorContaUsingPOST**
> \br.com.conductor.pier.api.v2.model\TipoFaturamentoPorContaResponse desativarFaturamentoPorContaUsingPOST($id, $modificado_por)

Desativar uma configura\u00C3\u00A7\u00C3\u00A3o de tipo de faturamento por conta atrav\u00C3\u00A9s do id

Desativa uma configura\u00C3\u00A7\u00C3\u00A3o de tipo de faturamento de uma determinada conta.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\FaturamentoApi();
$id = 789; // int | Id
$modificado_por = "modificado_por_example"; // string | modificadoPor

try { 
    $result = $api_instance->desativarFaturamentoPorContaUsingPOST($id, $modificado_por);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaturamentoApi->desativarFaturamentoPorContaUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id | 
 **modificado_por** | **string**| modificadoPor | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TipoFaturamentoPorContaResponse**](TipoFaturamentoPorContaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **desativarTipoFaturamentoUsingPOST**
> \br.com.conductor.pier.api.v2.model\TipoFaturamentoResponse desativarTipoFaturamentoUsingPOST($id)

Desativar uma configura\u00C3\u00A7\u00C3\u00A3o de tipo de faturamento atrav\u00C3\u00A9s do id

Desativa uma configura\u00C3\u00A7\u00C3\u00A3o de tipo de faturamento.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\FaturamentoApi();
$id = 789; // int | Id

try { 
    $result = $api_instance->desativarTipoFaturamentoUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaturamentoApi->desativarTipoFaturamentoUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TipoFaturamentoResponse**](TipoFaturamentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarFaturamentoPorContaUsingGET**
> \br.com.conductor.pier.api.v2.model\PageTipoFaturamentoPorContaResponse listarFaturamentoPorContaUsingGET($sort, $page, $limit, $id_tipo_faturamento_por_conta, $status, $id_conta, $id_tipo_faturamento, $data_hora_inclusao, $data_hora_cancelamento, $modificado_por)

Lista as configura\u00C3\u00A7\u00C3\u00B5es de tipos de faturamento por conta

Este m\u00C3\u00A9todo permite listar as configura\u00C3\u00A7\u00C3\u00B5es de tipos de faturamento registrados a uma conta.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\FaturamentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id_tipo_faturamento_por_conta = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do tipo de faturamento por conta (id).
$status = true; // bool | Representa se a configura\u00C3\u00A7\u00C3\u00A3o est\u00C3\u00A1 ativada ou desativada para a conta.
$id_conta = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do tipo de faturamento por conta (id).
$id_tipo_faturamento = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do tipo de faturamento relacionada (id).
$data_hora_inclusao = "data_hora_inclusao_example"; // string | Data da inclus\u00C3\u00A3o da configura\u00C3\u00A7\u00C3\u00A3o, deve ser informada no formato yyyy-MM-dd'T'HH:mm:ss.SSS'Z'.
$data_hora_cancelamento = "data_hora_cancelamento_example"; // string | Data do cancelamento da configura\u00C3\u00A7\u00C3\u00A3o, deve ser informada no formato yyyy-MM-dd'T'HH:mm:ss.SSS'Z'.
$modificado_por = "modificado_por_example"; // string | Identificador do respons\u00C3\u00A1vel pela modifica\u00C3\u00A7\u00C3\u00A3o do registro.

try { 
    $result = $api_instance->listarFaturamentoPorContaUsingGET($sort, $page, $limit, $id_tipo_faturamento_por_conta, $status, $id_conta, $id_tipo_faturamento, $data_hora_inclusao, $data_hora_cancelamento, $modificado_por);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaturamentoApi->listarFaturamentoPorContaUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id_tipo_faturamento_por_conta** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do tipo de faturamento por conta (id). | [optional] 
 **status** | **bool**| Representa se a configura\u00C3\u00A7\u00C3\u00A3o est\u00C3\u00A1 ativada ou desativada para a conta. | [optional] 
 **id_conta** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do tipo de faturamento por conta (id). | [optional] 
 **id_tipo_faturamento** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do tipo de faturamento relacionada (id). | [optional] 
 **data_hora_inclusao** | **string**| Data da inclus\u00C3\u00A3o da configura\u00C3\u00A7\u00C3\u00A3o, deve ser informada no formato yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSS&#39;Z&#39;. | [optional] 
 **data_hora_cancelamento** | **string**| Data do cancelamento da configura\u00C3\u00A7\u00C3\u00A3o, deve ser informada no formato yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSS&#39;Z&#39;. | [optional] 
 **modificado_por** | **string**| Identificador do respons\u00C3\u00A1vel pela modifica\u00C3\u00A7\u00C3\u00A3o do registro. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTipoFaturamentoPorContaResponse**](PageTipoFaturamentoPorContaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarTipoFaturamentoUsingGET**
> \br.com.conductor.pier.api.v2.model\PageTipoFaturamentoResponse listarTipoFaturamentoUsingGET($sort, $page, $limit, $id_tipo_faturamento, $descricao, $flag_apenas_demonstrativo, $id_convenio)

Lista Tipos de Faturamento

Lista todas as configura\u00C3\u00A7\u00C3\u00B5es dos tipos de faturamento

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\FaturamentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id_tipo_faturamento = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do tipo de faturamento (id).
$descricao = "descricao_example"; // string | Descri\u00C3\u00A7\u00C3\u00A3o do tipo de faturamento.
$flag_apenas_demonstrativo = true; // bool | Flag que representa que o faturamento ser\u00C3\u00A1 apenas demonstrativo.
$id_convenio = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do conv\u00C3\u00AAnio relacionado ao tipo de faturamento.

try { 
    $result = $api_instance->listarTipoFaturamentoUsingGET($sort, $page, $limit, $id_tipo_faturamento, $descricao, $flag_apenas_demonstrativo, $id_convenio);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaturamentoApi->listarTipoFaturamentoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id_tipo_faturamento** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do tipo de faturamento (id). | [optional] 
 **descricao** | **string**| Descri\u00C3\u00A7\u00C3\u00A3o do tipo de faturamento. | [optional] 
 **flag_apenas_demonstrativo** | **bool**| Flag que representa que o faturamento ser\u00C3\u00A1 apenas demonstrativo. | [optional] 
 **id_convenio** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do conv\u00C3\u00AAnio relacionado ao tipo de faturamento. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTipoFaturamentoResponse**](PageTipoFaturamentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

