# br.com.conductor.pier.api.v2.invoker\TransferenciaBancariaApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**atualizarUsingPUT1**](TransferenciaBancariaApi.md#atualizarUsingPUT1) | **PUT** /api/contas-bancarias-portador/{id} | Atualiza conta banc\u00C3\u00A1ria portador
[**consultarUsingGET9**](TransferenciaBancariaApi.md#consultarUsingGET9) | **GET** /api/contas-bancarias-portador/{id} | Consulta conta banc\u00C3\u00A1ria portador
[**listarUsingGET11**](TransferenciaBancariaApi.md#listarUsingGET11) | **GET** /api/contas-bancarias-portador | Lista contas banc\u00C3\u00A1rias portador
[**salvarUsingPOST7**](TransferenciaBancariaApi.md#salvarUsingPOST7) | **POST** /api/contas-bancarias-portador | Cadastra uma conta banc\u00C3\u00A1ria do portador


# **atualizarUsingPUT1**
> \br.com.conductor.pier.api.v2.model\ContaBancariaPortadorResponse atualizarUsingPUT1($id, $update)

Atualiza conta banc\u00C3\u00A1ria portador

Esse recurso permite atualizar uma conta banc\u00C3\u00A1ria do portador.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\TransferenciaBancariaApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta banc\u00C3\u00A1ria do portador (id).
$update = new \br.com.conductor.pier.api.v2.model\ContaBancariaPortadorUpdate(); // \br.com.conductor.pier.api.v2.model\ContaBancariaPortadorUpdate | update

try { 
    $result = $api_instance->atualizarUsingPUT1($id, $update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferenciaBancariaApi->atualizarUsingPUT1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta banc\u00C3\u00A1ria do portador (id). | 
 **update** | [**\br.com.conductor.pier.api.v2.model\ContaBancariaPortadorUpdate**](\br.com.conductor.pier.api.v2.model\ContaBancariaPortadorUpdate.md)| update | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ContaBancariaPortadorResponse**](ContaBancariaPortadorResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET9**
> \br.com.conductor.pier.api.v2.model\ContaBancariaPortadorResponse consultarUsingGET9($id)

Consulta conta banc\u00C3\u00A1ria portador

Esse recurso permite consultar uma conta banc\u00C3\u00A1ria do portador a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\TransferenciaBancariaApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta banc\u00C3\u00A1ria (id).

try { 
    $result = $api_instance->consultarUsingGET9($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferenciaBancariaApi->consultarUsingGET9: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta banc\u00C3\u00A1ria (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ContaBancariaPortadorResponse**](ContaBancariaPortadorResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET11**
> \br.com.conductor.pier.api.v2.model\PageContaBancariaPortadorResponse listarUsingGET11($id_conta, $nome_agencia, $numero_agencia, $numero_conta, $flag_conta_origem_doc, $id_pessoa_fisica, $favorecido, $numero_receira_federal, $sort, $page, $limit)

Lista contas banc\u00C3\u00A1rias portador

Esse recurso permite listar contas banc\u00C3\u00A1rias do portador.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\TransferenciaBancariaApi();
$id_conta = 789; // int | C\u00C3\u00B3digo identificador da conta cart\u00C3\u00A3o
$nome_agencia = "nome_agencia_example"; // string | Descri\u00C3\u00A7\u00C3\u00A3o da ag\u00C3\u00AAncia
$numero_agencia = "numero_agencia_example"; // string | N\u00C3\u00BAmero da ag\u00C3\u00AAncia
$numero_conta = "numero_conta_example"; // string | N\u00C3\u00BAmero da conta
$flag_conta_origem_doc = 56; // int | Sinaliza se origem \u00C3\u00A9 DOC (1: DOC, 0: TED)
$id_pessoa_fisica = 789; // int | C\u00C3\u00B3digo da pessoa
$favorecido = "favorecido_example"; // string | Nome do favorecido
$numero_receira_federal = "numero_receira_federal_example"; // string | Documento do favorecido
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarUsingGET11($id_conta, $nome_agencia, $numero_agencia, $numero_conta, $flag_conta_origem_doc, $id_pessoa_fisica, $favorecido, $numero_receira_federal, $sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferenciaBancariaApi->listarUsingGET11: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_conta** | **int**| C\u00C3\u00B3digo identificador da conta cart\u00C3\u00A3o | [optional] 
 **nome_agencia** | **string**| Descri\u00C3\u00A7\u00C3\u00A3o da ag\u00C3\u00AAncia | [optional] 
 **numero_agencia** | **string**| N\u00C3\u00BAmero da ag\u00C3\u00AAncia | [optional] 
 **numero_conta** | **string**| N\u00C3\u00BAmero da conta | [optional] 
 **flag_conta_origem_doc** | **int**| Sinaliza se origem \u00C3\u00A9 DOC (1: DOC, 0: TED) | [optional] 
 **id_pessoa_fisica** | **int**| C\u00C3\u00B3digo da pessoa | [optional] 
 **favorecido** | **string**| Nome do favorecido | [optional] 
 **numero_receira_federal** | **string**| Documento do favorecido | [optional] 
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageContaBancariaPortadorResponse**](PageContaBancariaPortadorResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST7**
> \br.com.conductor.pier.api.v2.model\ContaBancariaPortadorResponse salvarUsingPOST7($persist)

Cadastra uma conta banc\u00C3\u00A1ria do portador

Esse recurso permite cadastrar contas banc\u00C3\u00A1rias do portador.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\TransferenciaBancariaApi();
$persist = new \br.com.conductor.pier.api.v2.model\ContaBancariaPortadorPersist(); // \br.com.conductor.pier.api.v2.model\ContaBancariaPortadorPersist | persist

try { 
    $result = $api_instance->salvarUsingPOST7($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferenciaBancariaApi->salvarUsingPOST7: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **persist** | [**\br.com.conductor.pier.api.v2.model\ContaBancariaPortadorPersist**](\br.com.conductor.pier.api.v2.model\ContaBancariaPortadorPersist.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ContaBancariaPortadorResponse**](ContaBancariaPortadorResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

