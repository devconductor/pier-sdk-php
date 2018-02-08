# br.com.conductor.pier.api.v2.invoker\TransferenciaBancariaApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**atualizarUsingPUT1**](TransferenciaBancariaApi.md#atualizarUsingPUT1) | **PUT** /api/contas-bancarias-portador/{id} | Atualiza conta banc\u00C3\u00A1ria portador
[**consultarTransferenciaBancariaUsingGET**](TransferenciaBancariaApi.md#consultarTransferenciaBancariaUsingGET) | **GET** /api/transferencias-creditos-contas-bancarias/{idTransferencia} | Realiza a consulta de uma transfer\u00C3\u00AAncia banc\u00C3\u00A1ria de cr\u00C3\u00A9dito entre contas banc\u00C3\u00A1rias de um portador
[**consultarUsingGET11**](TransferenciaBancariaApi.md#consultarUsingGET11) | **GET** /api/contas-bancarias-portador/{id} | Consulta conta banc\u00C3\u00A1ria portador
[**consultarUsingGET40**](TransferenciaBancariaApi.md#consultarUsingGET40) | **GET** /api/contas/{id}/transferencias-creditos-contas-bancarias/{id_transferencia} | Consultar uma transfer\u00C3\u00AAncia banc\u00C3\u00A1ria para um banco
[**listarTransferenciaBancariaUsingGET**](TransferenciaBancariaApi.md#listarTransferenciaBancariaUsingGET) | **GET** /api/transferencias-creditos-contas-bancarias | Realiza a listagem das transfer\u00C3\u00AAncias banc\u00C3\u00A1rias de cr\u00C3\u00A9dito entre contas banc\u00C3\u00A1rias
[**listarUsingGET14**](TransferenciaBancariaApi.md#listarUsingGET14) | **GET** /api/contas-bancarias-portador | Lista contas banc\u00C3\u00A1rias portador
[**listarUsingGET47**](TransferenciaBancariaApi.md#listarUsingGET47) | **GET** /api/contas/{id}/transferencias-creditos-contas-bancarias | Listar as transfer\u00C3\u00AAncias banc\u00C3\u00A1rias realizadas
[**salvarUsingPOST8**](TransferenciaBancariaApi.md#salvarUsingPOST8) | **POST** /api/contas-bancarias-portador | Cadastra uma conta banc\u00C3\u00A1ria do portador
[**simularTransferenciaBancariaUsingPOST**](TransferenciaBancariaApi.md#simularTransferenciaBancariaUsingPOST) | **POST** /api/simular-transferencias-creditos-contas-bancarias | Realiza a simula\u00C3\u00A7\u00C3\u00A3o dos planos de parcelamentos para uma transfer\u00C3\u00AAncia banc\u00C3\u00A1ria de cr\u00C3\u00A9dito entre contas banc\u00C3\u00A1rias
[**transferenciaCreditoContaBancariaUsingPOST**](TransferenciaBancariaApi.md#transferenciaCreditoContaBancariaUsingPOST) | **POST** /api/transferencias-creditos-contas-bancarias | Realizar transfer\u00C3\u00AAncia banc\u00C3\u00A1ria do cart\u00C3\u00A3o para contas banc\u00C3\u00A1rias
[**transferirUsingPOST**](TransferenciaBancariaApi.md#transferirUsingPOST) | **POST** /api/contas/{id}/transferencias-creditos-contas-bancarias | Realizar transfer\u00C3\u00AAncia banc\u00C3\u00A1ria do cart\u00C3\u00A3o para contas banc\u00C3\u00A1rias


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

# **consultarTransferenciaBancariaUsingGET**
> \br.com.conductor.pier.api.v2.model\TransferenciaCreditoContaBancariaResponse consultarTransferenciaBancariaUsingGET($id_transferencia)

Realiza a consulta de uma transfer\u00C3\u00AAncia banc\u00C3\u00A1ria de cr\u00C3\u00A9dito entre contas banc\u00C3\u00A1rias de um portador

Recurso utilizado para recuperar uma transfer\u00C3\u00AAncia de cr\u00C3\u00A9dito entre contas banc\u00C3\u00A1ria de um portador, utiliza o ID da transfer\u00C3\u00AAncia banc\u00C3\u00A1riae o idConta para realizar a consulta.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\TransferenciaBancariaApi();
$id_transferencia = 789; // int | Id Transfer\u00C3\u00AAncia

try { 
    $result = $api_instance->consultarTransferenciaBancariaUsingGET($id_transferencia);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferenciaBancariaApi->consultarTransferenciaBancariaUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_transferencia** | **int**| Id Transfer\u00C3\u00AAncia | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TransferenciaCreditoContaBancariaResponse**](TransferenciaCreditoContaBancariaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET11**
> \br.com.conductor.pier.api.v2.model\ContaBancariaPortadorResponse consultarUsingGET11($id)

Consulta conta banc\u00C3\u00A1ria portador

Esse recurso permite consultar uma conta banc\u00C3\u00A1ria do portador a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\TransferenciaBancariaApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta banc\u00C3\u00A1ria (id).

try { 
    $result = $api_instance->consultarUsingGET11($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferenciaBancariaApi->consultarUsingGET11: ', $e->getMessage(), "\n";
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

# **consultarUsingGET40**
> \br.com.conductor.pier.api.v2.model\TransferenciaBancariaResponse consultarUsingGET40($id, $id_transferencia, $id_conta_bancaria_destino)

Consultar uma transfer\u00C3\u00AAncia banc\u00C3\u00A1ria para um banco

Este recurso permite consultar os detalhes de uma determinada transfer\u00C3\u00AAncia de cr\u00C3\u00A9dito realizada para uma conta banc\u00C3\u00A1ria. De modo geral, esta opera\u00C3\u00A7\u00C3\u00A3o poder\u00C3\u00A1 ser utilizada para uma consulta simples destes detalhes ou para realizar a montagem de um comprovante de 2\u00C2\u00AA via de transfer\u00C3\u00AAncia entre contas.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\TransferenciaBancariaApi();
$id = 789; // int | Id Conta
$id_transferencia = 789; // int | Id Transfer\u00C3\u00AAncia
$id_conta_bancaria_destino = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta banc\u00C3\u00A1ria de destino (id)

try { 
    $result = $api_instance->consultarUsingGET40($id, $id_transferencia, $id_conta_bancaria_destino);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferenciaBancariaApi->consultarUsingGET40: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id Conta | 
 **id_transferencia** | **int**| Id Transfer\u00C3\u00AAncia | 
 **id_conta_bancaria_destino** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta banc\u00C3\u00A1ria de destino (id) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\TransferenciaBancariaResponse**](TransferenciaBancariaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarTransferenciaBancariaUsingGET**
> \br.com.conductor.pier.api.v2.model\PageTransferenciaCreditoContaBancariaResponse listarTransferenciaBancariaUsingGET($sort, $page, $limit, $id_conta, $data_solicitacao_inicial, $data_solicitacao_final)

Realiza a listagem das transfer\u00C3\u00AAncias banc\u00C3\u00A1rias de cr\u00C3\u00A9dito entre contas banc\u00C3\u00A1rias

Recurso utilizado para listar as transfer\u00C3\u00AAncia de cr\u00C3\u00A9dito entre contas banc\u00C3\u00A1ria de um portador solicitadas.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\TransferenciaBancariaApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id_conta = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da Conta.
$data_solicitacao_inicial = "data_solicitacao_inicial_example"; // string | Data inicial da solicita\u00C3\u00A7\u00C3\u00A3o de transfer\u00C3\u00AAncia.
$data_solicitacao_final = "data_solicitacao_final_example"; // string | Data final da solicita\u00C3\u00A7\u00C3\u00A3o de transfer\u00C3\u00AAncia

try { 
    $result = $api_instance->listarTransferenciaBancariaUsingGET($sort, $page, $limit, $id_conta, $data_solicitacao_inicial, $data_solicitacao_final);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferenciaBancariaApi->listarTransferenciaBancariaUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id_conta** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da Conta. | [optional] 
 **data_solicitacao_inicial** | **string**| Data inicial da solicita\u00C3\u00A7\u00C3\u00A3o de transfer\u00C3\u00AAncia. | [optional] 
 **data_solicitacao_final** | **string**| Data final da solicita\u00C3\u00A7\u00C3\u00A3o de transfer\u00C3\u00AAncia | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTransferenciaCreditoContaBancariaResponse**](PageTransferenciaCreditoContaBancariaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET14**
> \br.com.conductor.pier.api.v2.model\PageContaBancariaPortadorResponse listarUsingGET14($id_conta, $nome_agencia, $numero_agencia, $numero_conta, $flag_conta_origem_doc, $id_pessoa_fisica, $favorecido, $numero_receira_federal, $sort, $page, $limit)

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
    $result = $api_instance->listarUsingGET14($id_conta, $nome_agencia, $numero_agencia, $numero_conta, $flag_conta_origem_doc, $id_pessoa_fisica, $favorecido, $numero_receira_federal, $sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferenciaBancariaApi->listarUsingGET14: ', $e->getMessage(), "\n";
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

# **listarUsingGET47**
> \br.com.conductor.pier.api.v2.model\PageTransferenciaBancariaResponse listarUsingGET47($id, $id_conta_bancaria_destino, $sort, $page, $limit)

Listar as transfer\u00C3\u00AAncias banc\u00C3\u00A1rias realizadas

Este recurso tem como objetivo permitir que o portador de um Cart\u00C3\u00A3o possa consultar uma lista das Transfer\u00C3\u00AAncias Banc\u00C3\u00A1rias para os Favorecidos cadastrados.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\TransferenciaBancariaApi();
$id = 789; // int | Id Conta
$id_conta_bancaria_destino = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta banc\u00C3\u00A1ria de destino (id)
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarUsingGET47($id, $id_conta_bancaria_destino, $sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferenciaBancariaApi->listarUsingGET47: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id Conta | 
 **id_conta_bancaria_destino** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta banc\u00C3\u00A1ria de destino (id) | [optional] 
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTransferenciaBancariaResponse**](PageTransferenciaBancariaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST8**
> \br.com.conductor.pier.api.v2.model\ContaBancariaPortadorResponse salvarUsingPOST8($persist)

Cadastra uma conta banc\u00C3\u00A1ria do portador

Esse recurso permite cadastrar contas banc\u00C3\u00A1rias do portador.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\TransferenciaBancariaApi();
$persist = new \br.com.conductor.pier.api.v2.model\ContaBancariaPortadorPersist(); // \br.com.conductor.pier.api.v2.model\ContaBancariaPortadorPersist | persist

try { 
    $result = $api_instance->salvarUsingPOST8($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferenciaBancariaApi->salvarUsingPOST8: ', $e->getMessage(), "\n";
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

# **simularTransferenciaBancariaUsingPOST**
> \br.com.conductor.pier.api.v2.model\PlanoParcelamentoTransferenciaCreditoContaBancariaResponse simularTransferenciaBancariaUsingPOST($request)

Realiza a simula\u00C3\u00A7\u00C3\u00A3o dos planos de parcelamentos para uma transfer\u00C3\u00AAncia banc\u00C3\u00A1ria de cr\u00C3\u00A9dito entre contas banc\u00C3\u00A1rias

Realiza a simula\u00C3\u00A7\u00C3\u00A3o dos planos de parcelamentos para uma transfer\u00C3\u00AAncia banc\u00C3\u00A1ria de cr\u00C3\u00A9dito entre contas banc\u00C3\u00A1rias.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\TransferenciaBancariaApi();
$request = new \br.com.conductor.pier.api.v2.model\PlanoParcelamentoTransferenciaCreditoContaBancariaRequest(); // \br.com.conductor.pier.api.v2.model\PlanoParcelamentoTransferenciaCreditoContaBancariaRequest | request

try { 
    $result = $api_instance->simularTransferenciaBancariaUsingPOST($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferenciaBancariaApi->simularTransferenciaBancariaUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\br.com.conductor.pier.api.v2.model\PlanoParcelamentoTransferenciaCreditoContaBancariaRequest**](\br.com.conductor.pier.api.v2.model\PlanoParcelamentoTransferenciaCreditoContaBancariaRequest.md)| request | 

### Return type

[**\br.com.conductor.pier.api.v2.model\PlanoParcelamentoTransferenciaCreditoContaBancariaResponse**](PlanoParcelamentoTransferenciaCreditoContaBancariaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **transferenciaCreditoContaBancariaUsingPOST**
> \br.com.conductor.pier.api.v2.model\TransferenciaCreditoContaBancariaResponse transferenciaCreditoContaBancariaUsingPOST($persist)

Realizar transfer\u00C3\u00AAncia banc\u00C3\u00A1ria do cart\u00C3\u00A3o para contas banc\u00C3\u00A1rias

Este recurso tem como objetivo permitir que o portador de um cart\u00C3\u00A3o possa realizar a transfer\u00C3\u00AAncia de cr\u00C3\u00A9dito para uma conta banc\u00C3\u00A1ria. Assim, o valor do cr\u00C3\u00A9dito somado a tarifa para transfer\u00C3\u00AAncia, quando praticada pelo emissor, ser\u00C3\u00A1 debitado da conta de origem, se houver saldo suficiente, e ser\u00C3\u00A1 creditado na conta banc\u00C3\u00A1ria de destino.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\TransferenciaBancariaApi();
$persist = new \br.com.conductor.pier.api.v2.model\TransferenciaCreditoContaBancariaPersist(); // \br.com.conductor.pier.api.v2.model\TransferenciaCreditoContaBancariaPersist | persist

try { 
    $result = $api_instance->transferenciaCreditoContaBancariaUsingPOST($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferenciaBancariaApi->transferenciaCreditoContaBancariaUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **persist** | [**\br.com.conductor.pier.api.v2.model\TransferenciaCreditoContaBancariaPersist**](\br.com.conductor.pier.api.v2.model\TransferenciaCreditoContaBancariaPersist.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TransferenciaCreditoContaBancariaResponse**](TransferenciaCreditoContaBancariaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **transferirUsingPOST**
> \br.com.conductor.pier.api.v2.model\TransferenciaBancariaResponse transferirUsingPOST($id, $transferencia_bancaria_persist)

Realizar transfer\u00C3\u00AAncia banc\u00C3\u00A1ria do cart\u00C3\u00A3o para contas banc\u00C3\u00A1rias

Este recurso tem como objetivo permitir que o portador de um cart\u00C3\u00A3o possa realizar a transfer\u00C3\u00AAncia de cr\u00C3\u00A9dito para uma conta banc\u00C3\u00A1ria. Assim, o valor do cr\u00C3\u00A9dito somado a tarifa para transfer\u00C3\u00AAncia, quando praticada pelo emissor, ser\u00C3\u00A1 debitado da conta de origem, se houver saldo suficiente, e ser\u00C3\u00A1 creditado na conta banc\u00C3\u00A1ria de destino.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\TransferenciaBancariaApi();
$id = 789; // int | Id Conta
$transferencia_bancaria_persist = new \br.com.conductor.pier.api.v2.model\TransferenciaBancariaPersist(); // \br.com.conductor.pier.api.v2.model\TransferenciaBancariaPersist | transferenciaBancariaPersist

try { 
    $result = $api_instance->transferirUsingPOST($id, $transferencia_bancaria_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferenciaBancariaApi->transferirUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id Conta | 
 **transferencia_bancaria_persist** | [**\br.com.conductor.pier.api.v2.model\TransferenciaBancariaPersist**](\br.com.conductor.pier.api.v2.model\TransferenciaBancariaPersist.md)| transferenciaBancariaPersist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TransferenciaBancariaResponse**](TransferenciaBancariaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

