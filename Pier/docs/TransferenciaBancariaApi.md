# br.com.conductor.pier.api.v2.invoker\TransferenciaBancariaApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**atualizarUsingPUT1**](TransferenciaBancariaApi.md#atualizarUsingPUT1) | **PUT** /api/contas-bancarias-portador/{id} | Atualiza conta banc\u00E1ria portador
[**cancelarTransferenciaCreditoContaBancariaUsingPOST**](TransferenciaBancariaApi.md#cancelarTransferenciaCreditoContaBancariaUsingPOST) | **POST** /api/transferencias-creditos-contas-bancarias/{idTransferencia}/cancelar | Realizar o cancelamento de uma transfer\u00EAncia banc\u00E1ria do cart\u00E3o para contas banc\u00E1rias que esteja pendente de confirma\u00E7\u00E3o.
[**confirmarTransferenciaCreditoContaBancariaUsingPOST**](TransferenciaBancariaApi.md#confirmarTransferenciaCreditoContaBancariaUsingPOST) | **POST** /api/transferencias-creditos-contas-bancarias/{idTransferencia}/confirmar | Realizar a confirma\u00E7\u00E3o de uma transfer\u00EAncia banc\u00E1ria do cart\u00E3o para contas banc\u00E1rias que esteja pendente de confirma\u00E7\u00E3o.
[**consultarTransferenciaBancariaUsingGET**](TransferenciaBancariaApi.md#consultarTransferenciaBancariaUsingGET) | **GET** /api/transferencias-creditos-contas-bancarias/{idTransferencia} | Realiza a consulta de uma transfer\u00EAncia banc\u00E1ria de cr\u00E9dito entre contas banc\u00E1rias de um portador
[**consultarUsingGET12**](TransferenciaBancariaApi.md#consultarUsingGET12) | **GET** /api/contas-bancarias-portador/{id} | Consulta conta banc\u00E1ria portador
[**consultarUsingGET41**](TransferenciaBancariaApi.md#consultarUsingGET41) | **GET** /api/contas/{id}/transferencias-creditos-contas-bancarias/{id_transferencia} | Consultar uma transfer\u00EAncia banc\u00E1ria para um banco
[**listarTransferenciaBancariaUsingGET**](TransferenciaBancariaApi.md#listarTransferenciaBancariaUsingGET) | **GET** /api/transferencias-creditos-contas-bancarias | Realiza a listagem das transfer\u00EAncias banc\u00E1rias de cr\u00E9dito entre contas banc\u00E1rias
[**listarUsingGET15**](TransferenciaBancariaApi.md#listarUsingGET15) | **GET** /api/contas-bancarias-portador | Lista contas banc\u00E1rias portador
[**listarUsingGET49**](TransferenciaBancariaApi.md#listarUsingGET49) | **GET** /api/contas/{id}/transferencias-creditos-contas-bancarias | Listar as transfer\u00EAncias banc\u00E1rias realizadas
[**salvarUsingPOST8**](TransferenciaBancariaApi.md#salvarUsingPOST8) | **POST** /api/contas-bancarias-portador | Cadastra uma conta banc\u00E1ria do portador
[**simularTransferenciaBancariaUsingPOST**](TransferenciaBancariaApi.md#simularTransferenciaBancariaUsingPOST) | **POST** /api/simular-transferencias-creditos-contas-bancarias | Realiza a simula\u00E7\u00E3o dos planos de parcelamentos para uma transfer\u00EAncia banc\u00E1ria de cr\u00E9dito entre contas banc\u00E1rias
[**transferenciaCreditoContaBancariaUsingPOST**](TransferenciaBancariaApi.md#transferenciaCreditoContaBancariaUsingPOST) | **POST** /api/transferencias-creditos-contas-bancarias | Realizar transfer\u00EAncia banc\u00E1ria do cart\u00E3o para contas banc\u00E1rias
[**transferirUsingPOST**](TransferenciaBancariaApi.md#transferirUsingPOST) | **POST** /api/contas/{id}/transferencias-creditos-contas-bancarias | Realizar transfer\u00EAncia banc\u00E1ria do cart\u00E3o para contas banc\u00E1rias


# **atualizarUsingPUT1**
> \br.com.conductor.pier.api.v2.model\ContaBancariaPortadorResponse atualizarUsingPUT1($id, $update)

Atualiza conta banc\u00E1ria portador

Esse recurso permite atualizar uma conta banc\u00E1ria do portador.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\TransferenciaBancariaApi();
$id = 789; // int | C\u00F3digo de identifica\u00E7\u00E3o da conta banc\u00E1ria do portador (id).
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
 **id** | **int**| C\u00F3digo de identifica\u00E7\u00E3o da conta banc\u00E1ria do portador (id). | 
 **update** | [**\br.com.conductor.pier.api.v2.model\ContaBancariaPortadorUpdate**](\br.com.conductor.pier.api.v2.model\ContaBancariaPortadorUpdate.md)| update | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ContaBancariaPortadorResponse**](ContaBancariaPortadorResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **cancelarTransferenciaCreditoContaBancariaUsingPOST**
> string cancelarTransferenciaCreditoContaBancariaUsingPOST($id_transferencia)

Realizar o cancelamento de uma transfer\u00EAncia banc\u00E1ria do cart\u00E3o para contas banc\u00E1rias que esteja pendente de confirma\u00E7\u00E3o.

Este recurso tem como objetivo permitir o canelamento de uma transfer\u00EAncia de cr\u00E9dito entre contas.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\TransferenciaBancariaApi();
$id_transferencia = 789; // int | Id Transfer\u00EAncia

try { 
    $result = $api_instance->cancelarTransferenciaCreditoContaBancariaUsingPOST($id_transferencia);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferenciaBancariaApi->cancelarTransferenciaCreditoContaBancariaUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_transferencia** | **int**| Id Transfer\u00EAncia | 

### Return type

**string**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **confirmarTransferenciaCreditoContaBancariaUsingPOST**
> string confirmarTransferenciaCreditoContaBancariaUsingPOST($id_transferencia)

Realizar a confirma\u00E7\u00E3o de uma transfer\u00EAncia banc\u00E1ria do cart\u00E3o para contas banc\u00E1rias que esteja pendente de confirma\u00E7\u00E3o.

Este recurso tem como objetivo permitir a confirma\u00E7\u00E3o da transfer\u00EAncia de cr\u00E9dito entre contas.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\TransferenciaBancariaApi();
$id_transferencia = 789; // int | Id Transfer\u00EAncia

try { 
    $result = $api_instance->confirmarTransferenciaCreditoContaBancariaUsingPOST($id_transferencia);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferenciaBancariaApi->confirmarTransferenciaCreditoContaBancariaUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_transferencia** | **int**| Id Transfer\u00EAncia | 

### Return type

**string**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarTransferenciaBancariaUsingGET**
> \br.com.conductor.pier.api.v2.model\TransferenciaCreditoContaBancariaResponse consultarTransferenciaBancariaUsingGET($id_transferencia)

Realiza a consulta de uma transfer\u00EAncia banc\u00E1ria de cr\u00E9dito entre contas banc\u00E1rias de um portador

Recurso utilizado para recuperar uma transfer\u00EAncia de cr\u00E9dito entre contas banc\u00E1ria de um portador, utiliza o ID da transfer\u00EAncia banc\u00E1riae o idConta para realizar a consulta.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\TransferenciaBancariaApi();
$id_transferencia = 789; // int | Id Transfer\u00EAncia

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
 **id_transferencia** | **int**| Id Transfer\u00EAncia | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TransferenciaCreditoContaBancariaResponse**](TransferenciaCreditoContaBancariaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET12**
> \br.com.conductor.pier.api.v2.model\ContaBancariaPortadorResponse consultarUsingGET12($id)

Consulta conta banc\u00E1ria portador

Esse recurso permite consultar uma conta banc\u00E1ria do portador a partir do seu c\u00F3digo de identifica\u00E7\u00E3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\TransferenciaBancariaApi();
$id = 789; // int | C\u00F3digo de identifica\u00E7\u00E3o da conta banc\u00E1ria (id).

try { 
    $result = $api_instance->consultarUsingGET12($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferenciaBancariaApi->consultarUsingGET12: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de identifica\u00E7\u00E3o da conta banc\u00E1ria (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ContaBancariaPortadorResponse**](ContaBancariaPortadorResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET41**
> \br.com.conductor.pier.api.v2.model\TransferenciaBancariaResponse consultarUsingGET41($id, $id_transferencia, $id_conta_bancaria_destino)

Consultar uma transfer\u00EAncia banc\u00E1ria para um banco

Este recurso permite consultar os detalhes de uma determinada transfer\u00EAncia de cr\u00E9dito realizada para uma conta banc\u00E1ria. De modo geral, esta opera\u00E7\u00E3o poder\u00E1 ser utilizada para uma consulta simples destes detalhes ou para realizar a montagem de um comprovante de 2\u00AA via de transfer\u00EAncia entre contas.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\TransferenciaBancariaApi();
$id = 789; // int | Id Conta
$id_transferencia = 789; // int | Id Transfer\u00EAncia
$id_conta_bancaria_destino = 789; // int | C\u00F3digo de identifica\u00E7\u00E3o da conta banc\u00E1ria de destino (id)

try { 
    $result = $api_instance->consultarUsingGET41($id, $id_transferencia, $id_conta_bancaria_destino);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferenciaBancariaApi->consultarUsingGET41: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id Conta | 
 **id_transferencia** | **int**| Id Transfer\u00EAncia | 
 **id_conta_bancaria_destino** | **int**| C\u00F3digo de identifica\u00E7\u00E3o da conta banc\u00E1ria de destino (id) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\TransferenciaBancariaResponse**](TransferenciaBancariaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarTransferenciaBancariaUsingGET**
> \br.com.conductor.pier.api.v2.model\PageTransferenciaCreditoContaBancariaResponse listarTransferenciaBancariaUsingGET($sort, $page, $limit, $id_conta, $data_solicitacao_inicial, $data_solicitacao_final, $status)

Realiza a listagem das transfer\u00EAncias banc\u00E1rias de cr\u00E9dito entre contas banc\u00E1rias

Recurso utilizado para listar as transfer\u00EAncia de cr\u00E9dito entre contas banc\u00E1ria de um portador solicitadas.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\TransferenciaBancariaApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$id_conta = 789; // int | C\u00F3digo de identifica\u00E7\u00E3o da Conta.
$data_solicitacao_inicial = "data_solicitacao_inicial_example"; // string | Data inicial da solicita\u00E7\u00E3o de transfer\u00EAncia.
$data_solicitacao_final = "data_solicitacao_final_example"; // string | Data final da solicita\u00E7\u00E3o de transfer\u00EAncia
$status = 56; // int | C\u00F3digo do status do processamento

try { 
    $result = $api_instance->listarTransferenciaBancariaUsingGET($sort, $page, $limit, $id_conta, $data_solicitacao_inicial, $data_solicitacao_final, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferenciaBancariaApi->listarTransferenciaBancariaUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **id_conta** | **int**| C\u00F3digo de identifica\u00E7\u00E3o da Conta. | [optional] 
 **data_solicitacao_inicial** | **string**| Data inicial da solicita\u00E7\u00E3o de transfer\u00EAncia. | [optional] 
 **data_solicitacao_final** | **string**| Data final da solicita\u00E7\u00E3o de transfer\u00EAncia | [optional] 
 **status** | **int**| C\u00F3digo do status do processamento | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTransferenciaCreditoContaBancariaResponse**](PageTransferenciaCreditoContaBancariaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET15**
> \br.com.conductor.pier.api.v2.model\PageContaBancariaPortadorResponse listarUsingGET15($id_conta, $nome_agencia, $numero_agencia, $numero_conta, $flag_conta_origem_doc, $id_pessoa_fisica, $favorecido, $numero_receira_federal, $sort, $page, $limit)

Lista contas banc\u00E1rias portador

Esse recurso permite listar contas banc\u00E1rias do portador.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\TransferenciaBancariaApi();
$id_conta = 789; // int | C\u00F3digo identificador da conta cart\u00E3o
$nome_agencia = "nome_agencia_example"; // string | Descri\u00E7\u00E3o da ag\u00EAncia
$numero_agencia = "numero_agencia_example"; // string | N\u00FAmero da ag\u00EAncia
$numero_conta = "numero_conta_example"; // string | N\u00FAmero da conta
$flag_conta_origem_doc = 56; // int | Sinaliza se origem \u00E9 DOC (1: DOC, 0: TED)
$id_pessoa_fisica = 789; // int | C\u00F3digo da pessoa
$favorecido = "favorecido_example"; // string | Nome do favorecido
$numero_receira_federal = "numero_receira_federal_example"; // string | Documento do favorecido
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarUsingGET15($id_conta, $nome_agencia, $numero_agencia, $numero_conta, $flag_conta_origem_doc, $id_pessoa_fisica, $favorecido, $numero_receira_federal, $sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferenciaBancariaApi->listarUsingGET15: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_conta** | **int**| C\u00F3digo identificador da conta cart\u00E3o | [optional] 
 **nome_agencia** | **string**| Descri\u00E7\u00E3o da ag\u00EAncia | [optional] 
 **numero_agencia** | **string**| N\u00FAmero da ag\u00EAncia | [optional] 
 **numero_conta** | **string**| N\u00FAmero da conta | [optional] 
 **flag_conta_origem_doc** | **int**| Sinaliza se origem \u00E9 DOC (1: DOC, 0: TED) | [optional] 
 **id_pessoa_fisica** | **int**| C\u00F3digo da pessoa | [optional] 
 **favorecido** | **string**| Nome do favorecido | [optional] 
 **numero_receira_federal** | **string**| Documento do favorecido | [optional] 
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageContaBancariaPortadorResponse**](PageContaBancariaPortadorResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET49**
> \br.com.conductor.pier.api.v2.model\PageTransferenciaBancariaResponse listarUsingGET49($id, $id_conta_bancaria_destino, $sort, $page, $limit)

Listar as transfer\u00EAncias banc\u00E1rias realizadas

Este recurso tem como objetivo permitir que o portador de um Cart\u00E3o possa consultar uma lista das Transfer\u00EAncias Banc\u00E1rias para os Favorecidos cadastrados.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\TransferenciaBancariaApi();
$id = 789; // int | Id Conta
$id_conta_bancaria_destino = 789; // int | C\u00F3digo de identifica\u00E7\u00E3o da conta banc\u00E1ria de destino (id)
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarUsingGET49($id, $id_conta_bancaria_destino, $sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferenciaBancariaApi->listarUsingGET49: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id Conta | 
 **id_conta_bancaria_destino** | **int**| C\u00F3digo de identifica\u00E7\u00E3o da conta banc\u00E1ria de destino (id) | [optional] 
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 

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

Cadastra uma conta banc\u00E1ria do portador

Esse recurso permite cadastrar contas banc\u00E1rias do portador.

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

Realiza a simula\u00E7\u00E3o dos planos de parcelamentos para uma transfer\u00EAncia banc\u00E1ria de cr\u00E9dito entre contas banc\u00E1rias

Realiza a simula\u00E7\u00E3o dos planos de parcelamentos para uma transfer\u00EAncia banc\u00E1ria de cr\u00E9dito entre contas banc\u00E1rias.

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

Realizar transfer\u00EAncia banc\u00E1ria do cart\u00E3o para contas banc\u00E1rias

Este recurso tem como objetivo permitir que o portador de um cart\u00E3o possa realizar a transfer\u00EAncia de cr\u00E9dito para uma conta banc\u00E1ria. Assim, o valor do cr\u00E9dito somado a tarifa para transfer\u00EAncia, quando praticada pelo emissor, ser\u00E1 debitado da conta de origem, se houver saldo suficiente, e ser\u00E1 creditado na conta banc\u00E1ria de destino.

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

Realizar transfer\u00EAncia banc\u00E1ria do cart\u00E3o para contas banc\u00E1rias

Este recurso tem como objetivo permitir que o portador de um cart\u00E3o possa realizar a transfer\u00EAncia de cr\u00E9dito para uma conta banc\u00E1ria. Assim, o valor do cr\u00E9dito somado a tarifa para transfer\u00EAncia, quando praticada pelo emissor, ser\u00E1 debitado da conta de origem, se houver saldo suficiente, e ser\u00E1 creditado na conta banc\u00E1ria de destino.

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

