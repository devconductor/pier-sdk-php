# br.com.conductor.pier.api.v1_1.invoker\StatusCartoApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**consultarStatusCartaoUsingGET**](StatusCartoApi.md#consultarStatusCartaoUsingGET) | **GET** /api/status-cartoes/{id_status_cartao} | Apresenta os dados de um determinado Status Cart\u00C3\u00A3o 
[**listarStatusCartoesUsingGET**](StatusCartoApi.md#listarStatusCartoesUsingGET) | **GET** /api/status-cartoes | Lista as op\u00C3\u00A7\u00C3\u00B5es de Status do Cart\u00C3\u00A3o 


# **consultarStatusCartaoUsingGET**
> \br.com.conductor.pier.api.v1_1.model\StatusCartO consultarStatusCartaoUsingGET($id_status_cartao)

Apresenta os dados de um determinado Status Cart\u00C3\u00A3o 

Este m\u00C3\u00A9todo permite consultar os par\u00C3\u00A2metros de um determinado Status de Cart\u00C3\u00A3o a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).  

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v1_1.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v1_1.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v1_1.invoker\Api\StatusCartoApi();
$id_status_cartao = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Est\u00C3\u00A1gio de Entrega do Cart\u00C3\u00A3o (id).

try { 
    $result = $api_instance->consultarStatusCartaoUsingGET($id_status_cartao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusCartoApi->consultarStatusCartaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_status_cartao** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Est\u00C3\u00A1gio de Entrega do Cart\u00C3\u00A3o (id). | 

### Return type

[**\br.com.conductor.pier.api.v1_1.model\StatusCartO**](StatusCartO.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarStatusCartoesUsingGET**
> \br.com.conductor.pier.api.v1_1.model\ListaDeStatusCartEs listarStatusCartoesUsingGET($id_status_cartao, $nome, $flag_altera_status, $flag_desbloqueio, $flag_reversao_desbloqueio, $id_status_destino_desbloqueio, $flag_cancela_cartao, $flag_reversao_cancelamento, $flag_emite_provisorio, $flag_cancela_conta, $id_status_destino_conta, $flag_reemite_cartao, $flag_cobra_tarifa, $flag_origem_transferencia, $flag_destino_transferencia, $flag_cadastro_senha, $flag_cadastro_nova_senha, $flag_excecao_bandeira, $page, $limit)

Lista as op\u00C3\u00A7\u00C3\u00B5es de Status do Cart\u00C3\u00A3o 

Este m\u00C3\u00A9todo permite que sejam listadas as possibilidades de Status que podem ser atribu\u00C3\u00ADdas aos Cart\u00C3\u00B5es.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v1_1.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v1_1.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v1_1.invoker\Api\StatusCartoApi();
$id_status_cartao = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Status do Cart\u00C3\u00A3o (id).
$nome = "nome_example"; // string | Nome atribu\u00C3\u00ADdo ao Status de Entrega do Cart\u00C3\u00A3o.
$flag_altera_status = "flag_altera_status_example"; // string | Quanto ativa, indica que Cart\u00C3\u00B5es que tiverem este idStatusCartao atribu\u00C3\u00ADdo n\u00C3\u00A3o ter\u00C3\u00A3o seu idStatusCartao Alterado, fazendo com que o Cart\u00C3\u00A3o atual possa continuar sendo utilizado at\u00C3\u00A9 o desbloqueio de um novo cart\u00C3\u00A3o.
$flag_desbloqueio = "flag_desbloqueio_example"; // string | Quando ativa, indica que Cart\u00C3\u00B5es com este idStatusCartao poder\u00C3\u00A3o ser Desbloqueados.
$flag_reversao_desbloqueio = "flag_reversao_desbloqueio_example"; // string | Quando ativa, indica que o cart\u00C3\u00A3o, mesmo tendo sido bloqueado, poder\u00C3\u00A1 ter o processo desfeito.
$id_status_destino_desbloqueio = 789; // int | Indica qual o idStatusCartao que deve ser atribu\u00C3\u00ADdo a um idCartao quando ele for desbloqueado.
$flag_cancela_cartao = "flag_cancela_cartao_example"; // string | Quando ativa, indica que Cart\u00C3\u00B5es que tiverem este idStatusCartao atribu\u00C3\u00ADdo ter\u00C3\u00A3o o cart\u00C3\u00A3o Cancelado. 
$flag_reversao_cancelamento = "flag_reversao_cancelamento_example"; // string | Quando ativa, indica que o cart\u00C3\u00A3o, mesmo tendo sido cancelado, poder\u00C3\u00A1 ter o processo desfeito.
$flag_emite_provisorio = "flag_emite_provisorio_example"; // string | Quando ativa, indica que os portadores que tiverem seus cart\u00C3\u00B5es associados a idStatusCartao com esta flag poder\u00C3\u00A3o solicitar a emiss\u00C3\u00A3o de um cart\u00C3\u00A3o provis\u00C3\u00B3rio at\u00C3\u00A9 que um novo cart\u00C3\u00A3o definitivo seja recebido. 
$flag_cancela_conta = "flag_cancela_conta_example"; // string | Quando ativa, indica que Cart\u00C3\u00B5es que tiverem este idStatusCartao atribu\u00C3\u00ADdo ter\u00C3\u00A3o a conta Cancelada.
$id_status_destino_conta = 789; // int | Indica qual o idStatusConta que ser\u00C3\u00A1 atribu\u00C3\u00ADdo ao idConta que tiver o Cartao do titular da mesma cancelado por um idStatusCartao que recomenda o cancelamento da conta.
$flag_reemite_cartao = "flag_reemite_cartao_example"; // string | Quando ativa, indica que Cart\u00C3\u00B5es que tiverem este idStatusCartao atribu\u00C3\u00ADdo ter\u00C3\u00A3o um novo cart\u00C3\u00A3o automaticamente gerado.
$flag_cobra_tarifa = "flag_cobra_tarifa_example"; // string | Quando ativa, indica que Cart\u00C3\u00B5es que tiverem este idStatusCartao atribu\u00C3\u00ADdo ter\u00C3\u00A3o a cobran\u00C3\u00A7a de tarifa lan\u00C3\u00A7ada junto a gera\u00C3\u00A7\u00C3\u00A3o do novo cart\u00C3\u00A3o, desde que o Produto ao qual o cart\u00C3\u00A3o pertence possua o respectivo par\u00C3\u00A2metro configurado.
$flag_origem_transferencia = "flag_origem_transferencia_example"; // string | Quando ativa, indica que Cart\u00C3\u00B5es com este idStatusCartao podem realizar a transfer\u00C3\u00AAncia de cr\u00C3\u00A9ditos/d\u00C3\u00A9bitos para outros cart\u00C3\u00B5es.
$flag_destino_transferencia = "flag_destino_transferencia_example"; // string | Quando ativa, indica que Cart\u00C3\u00B5es com este idStatusCartao podem receber transfer\u00C3\u00AAncias de cr\u00C3\u00A9ditos/d\u00C3\u00A9bitos oriundos de outros cart\u00C3\u00B5es.
$flag_cadastro_senha = "flag_cadastro_senha_example"; // string | Quando ativa, indica se poder\u00C3\u00A1 ser realizado o cadastro de uma senha para o Cart\u00C3\u00A3o.
$flag_cadastro_nova_senha = "flag_cadastro_nova_senha_example"; // string | Quando ativa, indica que os Cart\u00C3\u00B5es que tiverem este idStatusCartao atribu\u00C3\u00ADdo ter\u00C3\u00A3o a senha atual exclu\u00C3\u00ADda.
$flag_excecao_bandeira = "flag_excecao_bandeira_example"; // string | Quando ativa, indica que os Cart\u00C3\u00B5es que tiverem este idStatusCartao atribu\u00C3\u00ADdo dever\u00C3\u00A3o ter a respectiva informa\u00C3\u00A7\u00C3\u00A3o de mudan\u00C3\u00A7a de status inclu\u00C3\u00ADda no arquivo de exce\u00C3\u00A7\u00C3\u00A3o da Bandeira, a fim de manter atualizado o cadastro do cart\u00C3\u00A3o nela para nortear o que fazer com as transa\u00C3\u00A7\u00C3\u00B5es quando o autorizador estiver indispon\u00C3\u00ADvel.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100)

try { 
    $result = $api_instance->listarStatusCartoesUsingGET($id_status_cartao, $nome, $flag_altera_status, $flag_desbloqueio, $flag_reversao_desbloqueio, $id_status_destino_desbloqueio, $flag_cancela_cartao, $flag_reversao_cancelamento, $flag_emite_provisorio, $flag_cancela_conta, $id_status_destino_conta, $flag_reemite_cartao, $flag_cobra_tarifa, $flag_origem_transferencia, $flag_destino_transferencia, $flag_cadastro_senha, $flag_cadastro_nova_senha, $flag_excecao_bandeira, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusCartoApi->listarStatusCartoesUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_status_cartao** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Status do Cart\u00C3\u00A3o (id). | [optional] 
 **nome** | **string**| Nome atribu\u00C3\u00ADdo ao Status de Entrega do Cart\u00C3\u00A3o. | [optional] 
 **flag_altera_status** | **string**| Quanto ativa, indica que Cart\u00C3\u00B5es que tiverem este idStatusCartao atribu\u00C3\u00ADdo n\u00C3\u00A3o ter\u00C3\u00A3o seu idStatusCartao Alterado, fazendo com que o Cart\u00C3\u00A3o atual possa continuar sendo utilizado at\u00C3\u00A9 o desbloqueio de um novo cart\u00C3\u00A3o. | [optional] 
 **flag_desbloqueio** | **string**| Quando ativa, indica que Cart\u00C3\u00B5es com este idStatusCartao poder\u00C3\u00A3o ser Desbloqueados. | [optional] 
 **flag_reversao_desbloqueio** | **string**| Quando ativa, indica que o cart\u00C3\u00A3o, mesmo tendo sido bloqueado, poder\u00C3\u00A1 ter o processo desfeito. | [optional] 
 **id_status_destino_desbloqueio** | **int**| Indica qual o idStatusCartao que deve ser atribu\u00C3\u00ADdo a um idCartao quando ele for desbloqueado. | [optional] 
 **flag_cancela_cartao** | **string**| Quando ativa, indica que Cart\u00C3\u00B5es que tiverem este idStatusCartao atribu\u00C3\u00ADdo ter\u00C3\u00A3o o cart\u00C3\u00A3o Cancelado.  | [optional] 
 **flag_reversao_cancelamento** | **string**| Quando ativa, indica que o cart\u00C3\u00A3o, mesmo tendo sido cancelado, poder\u00C3\u00A1 ter o processo desfeito. | [optional] 
 **flag_emite_provisorio** | **string**| Quando ativa, indica que os portadores que tiverem seus cart\u00C3\u00B5es associados a idStatusCartao com esta flag poder\u00C3\u00A3o solicitar a emiss\u00C3\u00A3o de um cart\u00C3\u00A3o provis\u00C3\u00B3rio at\u00C3\u00A9 que um novo cart\u00C3\u00A3o definitivo seja recebido.  | [optional] 
 **flag_cancela_conta** | **string**| Quando ativa, indica que Cart\u00C3\u00B5es que tiverem este idStatusCartao atribu\u00C3\u00ADdo ter\u00C3\u00A3o a conta Cancelada. | [optional] 
 **id_status_destino_conta** | **int**| Indica qual o idStatusConta que ser\u00C3\u00A1 atribu\u00C3\u00ADdo ao idConta que tiver o Cartao do titular da mesma cancelado por um idStatusCartao que recomenda o cancelamento da conta. | [optional] 
 **flag_reemite_cartao** | **string**| Quando ativa, indica que Cart\u00C3\u00B5es que tiverem este idStatusCartao atribu\u00C3\u00ADdo ter\u00C3\u00A3o um novo cart\u00C3\u00A3o automaticamente gerado. | [optional] 
 **flag_cobra_tarifa** | **string**| Quando ativa, indica que Cart\u00C3\u00B5es que tiverem este idStatusCartao atribu\u00C3\u00ADdo ter\u00C3\u00A3o a cobran\u00C3\u00A7a de tarifa lan\u00C3\u00A7ada junto a gera\u00C3\u00A7\u00C3\u00A3o do novo cart\u00C3\u00A3o, desde que o Produto ao qual o cart\u00C3\u00A3o pertence possua o respectivo par\u00C3\u00A2metro configurado. | [optional] 
 **flag_origem_transferencia** | **string**| Quando ativa, indica que Cart\u00C3\u00B5es com este idStatusCartao podem realizar a transfer\u00C3\u00AAncia de cr\u00C3\u00A9ditos/d\u00C3\u00A9bitos para outros cart\u00C3\u00B5es. | [optional] 
 **flag_destino_transferencia** | **string**| Quando ativa, indica que Cart\u00C3\u00B5es com este idStatusCartao podem receber transfer\u00C3\u00AAncias de cr\u00C3\u00A9ditos/d\u00C3\u00A9bitos oriundos de outros cart\u00C3\u00B5es. | [optional] 
 **flag_cadastro_senha** | **string**| Quando ativa, indica se poder\u00C3\u00A1 ser realizado o cadastro de uma senha para o Cart\u00C3\u00A3o. | [optional] 
 **flag_cadastro_nova_senha** | **string**| Quando ativa, indica que os Cart\u00C3\u00B5es que tiverem este idStatusCartao atribu\u00C3\u00ADdo ter\u00C3\u00A3o a senha atual exclu\u00C3\u00ADda. | [optional] 
 **flag_excecao_bandeira** | **string**| Quando ativa, indica que os Cart\u00C3\u00B5es que tiverem este idStatusCartao atribu\u00C3\u00ADdo dever\u00C3\u00A3o ter a respectiva informa\u00C3\u00A7\u00C3\u00A3o de mudan\u00C3\u00A7a de status inclu\u00C3\u00ADda no arquivo de exce\u00C3\u00A7\u00C3\u00A3o da Bandeira, a fim de manter atualizado o cadastro do cart\u00C3\u00A3o nela para nortear o que fazer com as transa\u00C3\u00A7\u00C3\u00B5es quando o autorizador estiver indispon\u00C3\u00ADvel. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v1_1.model\ListaDeStatusCartEs**](ListaDeStatusCartEs.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

