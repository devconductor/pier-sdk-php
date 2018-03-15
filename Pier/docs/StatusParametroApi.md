# br.com.conductor.pier.api.v2.invoker\StatusParametroApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**consultarEstagioCartaoUsingGET**](StatusParametroApi.md#consultarEstagioCartaoUsingGET) | **GET** /api/estagios-cartoes/{id} | Apresenta os dados de um determinado Estagio Cart\u00E3o
[**consultarStatusCartaoUsingGET**](StatusParametroApi.md#consultarStatusCartaoUsingGET) | **GET** /api/status-cartoes/{id} | Apresenta os dados de um determinado Status Cart\u00E3o
[**consultarUsingGET28**](StatusParametroApi.md#consultarUsingGET28) | **GET** /api/status-contas/{id} | Apresenta os dados de um determinado Status Conta
[**consultarUsingGET29**](StatusParametroApi.md#consultarUsingGET29) | **GET** /api/status-impressoes/{id} | Apresenta os dados de um determinado Status Impress\u00E3o
[**listarEstagiosCartoesUsingGET**](StatusParametroApi.md#listarEstagiosCartoesUsingGET) | **GET** /api/estagios-cartoes | Lista as op\u00E7\u00F5es de Est\u00E1gios do Cart\u00E3o
[**listarStatusCartoesUsingGET**](StatusParametroApi.md#listarStatusCartoesUsingGET) | **GET** /api/status-cartoes | Lista as op\u00E7\u00F5es de Status do Cart\u00E3o
[**listarTiposEventosTransacoesUsingGET**](StatusParametroApi.md#listarTiposEventosTransacoesUsingGET) | **GET** /api/tipos-eventos-transacoes | Lista os tipos de transa\u00E7\u00F5es
[**listarUsingGET38**](StatusParametroApi.md#listarUsingGET38) | **GET** /api/status-contas | Lista os Status Contas cadastrados para o Emissor
[**listarUsingGET39**](StatusParametroApi.md#listarUsingGET39) | **GET** /api/status-impressoes | Lista as op\u00E7\u00F5es de Status Impress\u00E3o


# **consultarEstagioCartaoUsingGET**
> \br.com.conductor.pier.api.v2.model\EstagioCartaoResponse consultarEstagioCartaoUsingGET($id)

Apresenta os dados de um determinado Estagio Cart\u00E3o

Este m\u00E9todo permite consultar os par\u00E2metros de um determinado Est\u00E1gio de Entrega do Cart\u00E3o a partir do seu c\u00F3digo de identifica\u00E7\u00E3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\StatusParametroApi();
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do Est\u00E1gio de Entrega do Cart\u00E3o (id).

try { 
    $result = $api_instance->consultarEstagioCartaoUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusParametroApi->consultarEstagioCartaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do Est\u00E1gio de Entrega do Cart\u00E3o (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\EstagioCartaoResponse**](EstagioCartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarStatusCartaoUsingGET**
> \br.com.conductor.pier.api.v2.model\StatusCartaoResponse consultarStatusCartaoUsingGET($id)

Apresenta os dados de um determinado Status Cart\u00E3o

Este m\u00E9todo permite consultar os par\u00E2metros de um determinado Status de Cart\u00E3o a partir do seu c\u00F3digo de identifica\u00E7\u00E3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\StatusParametroApi();
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do Est\u00E1gio de Entrega do Cart\u00E3o (id).

try { 
    $result = $api_instance->consultarStatusCartaoUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusParametroApi->consultarStatusCartaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do Est\u00E1gio de Entrega do Cart\u00E3o (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\StatusCartaoResponse**](StatusCartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET28**
> \br.com.conductor.pier.api.v2.model\StatusContaResponse consultarUsingGET28($id)

Apresenta os dados de um determinado Status Conta

Este m\u00E9todo permite consultar os par\u00E2metros de um determinado Status Conta a partir do seu c\u00F3digo de identifica\u00E7\u00E3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\StatusParametroApi();
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do Status da Conta (id).

try { 
    $result = $api_instance->consultarUsingGET28($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusParametroApi->consultarUsingGET28: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do Status da Conta (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\StatusContaResponse**](StatusContaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET29**
> \br.com.conductor.pier.api.v2.model\StatusImpressaoResponse consultarUsingGET29($id)

Apresenta os dados de um determinado Status Impress\u00E3o

Este m\u00E9todo permite consultar os par\u00E2metros de um determinado Status de Impress\u00E3o do Cart\u00E3o a partir do seu c\u00F3digo de identifica\u00E7\u00E3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\StatusParametroApi();
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do Status de Impress\u00E3o do Cart\u00E3o (id).

try { 
    $result = $api_instance->consultarUsingGET29($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusParametroApi->consultarUsingGET29: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do Status de Impress\u00E3o do Cart\u00E3o (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\StatusImpressaoResponse**](StatusImpressaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarEstagiosCartoesUsingGET**
> \br.com.conductor.pier.api.v2.model\PageEstagioCartaoResponse listarEstagiosCartoesUsingGET($sort, $page, $limit, $id, $nome)

Lista as op\u00E7\u00F5es de Est\u00E1gios do Cart\u00E3o

Este m\u00E9todo permite que sejam listadas as op\u00E7\u00F5es de Est\u00E1gio de Entrega que podem ser atribu\u00EDdas aos Cart\u00F5es.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\StatusParametroApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$id = 789; // int | Id do est\u00E1gio cart\u00E3o
$nome = "nome_example"; // string | Nome do est\u00E1gio cart\u00E3o

try { 
    $result = $api_instance->listarEstagiosCartoesUsingGET($sort, $page, $limit, $id, $nome);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusParametroApi->listarEstagiosCartoesUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **id** | **int**| Id do est\u00E1gio cart\u00E3o | [optional] 
 **nome** | **string**| Nome do est\u00E1gio cart\u00E3o | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageEstagioCartaoResponse**](PageEstagioCartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarStatusCartoesUsingGET**
> \br.com.conductor.pier.api.v2.model\PageStatusCartaoResponse listarStatusCartoesUsingGET($sort, $page, $limit, $id, $nome, $permite_desbloquear, $permite_atribuir_como_bloqueio, $permite_atribuir_como_cancelamento, $cobrar_tarifa_ao_emitir_nova_via)

Lista as op\u00E7\u00F5es de Status do Cart\u00E3o

Este m\u00E9todo permite que sejam listadas as possibilidades de Status que podem ser atribu\u00EDdas aos Cart\u00F5es.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\StatusParametroApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do Status do Cart\u00E3o (id) 
$nome = "nome_example"; // string | Nome atribu\u00EDdo ao Status de Entrega do Cart\u00E3o.
$permite_desbloquear = 56; // int | Par\u00E2metro que define se o status do cart\u00E3o permite a reativa\u00E7\u00E3o do cart\u00E3o, sendo: 0: Inativo e 1: Ativo.
$permite_atribuir_como_bloqueio = 56; // int | Par\u00E2metro que define se o status do cart\u00E3o permite a reativa\u00E7\u00E3o do cart\u00E3o, sendo: 0: Inativo e 1: Ativo.
$permite_atribuir_como_cancelamento = 56; // int | Par\u00E2metro que define se o status do cart\u00E3o permite a reativa\u00E7\u00E3o do cart\u00E3o, sendo: 0: Inativo e 1: Ativo.
$cobrar_tarifa_ao_emitir_nova_via = 56; // int | Par\u00E2metro que define se o status do cart\u00E3o permite a reativa\u00E7\u00E3o do cart\u00E3o, sendo: 0: Inativo e 1: Ativo.

try { 
    $result = $api_instance->listarStatusCartoesUsingGET($sort, $page, $limit, $id, $nome, $permite_desbloquear, $permite_atribuir_como_bloqueio, $permite_atribuir_como_cancelamento, $cobrar_tarifa_ao_emitir_nova_via);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusParametroApi->listarStatusCartoesUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do Status do Cart\u00E3o (id)  | [optional] 
 **nome** | **string**| Nome atribu\u00EDdo ao Status de Entrega do Cart\u00E3o. | [optional] 
 **permite_desbloquear** | **int**| Par\u00E2metro que define se o status do cart\u00E3o permite a reativa\u00E7\u00E3o do cart\u00E3o, sendo: 0: Inativo e 1: Ativo. | [optional] 
 **permite_atribuir_como_bloqueio** | **int**| Par\u00E2metro que define se o status do cart\u00E3o permite a reativa\u00E7\u00E3o do cart\u00E3o, sendo: 0: Inativo e 1: Ativo. | [optional] 
 **permite_atribuir_como_cancelamento** | **int**| Par\u00E2metro que define se o status do cart\u00E3o permite a reativa\u00E7\u00E3o do cart\u00E3o, sendo: 0: Inativo e 1: Ativo. | [optional] 
 **cobrar_tarifa_ao_emitir_nova_via** | **int**| Par\u00E2metro que define se o status do cart\u00E3o permite a reativa\u00E7\u00E3o do cart\u00E3o, sendo: 0: Inativo e 1: Ativo. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageStatusCartaoResponse**](PageStatusCartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarTiposEventosTransacoesUsingGET**
> object[] listarTiposEventosTransacoesUsingGET()

Lista os tipos de transa\u00E7\u00F5es

Esse recurso permite listar os tipos de transa\u00E7\u00F5es dispon\u00EDveis.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\StatusParametroApi();

try { 
    $result = $api_instance->listarTiposEventosTransacoesUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusParametroApi->listarTiposEventosTransacoesUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object[]**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET38**
> \br.com.conductor.pier.api.v2.model\PageStatusContaResponse listarUsingGET38($sort, $page, $limit, $id, $nome, $permite_alterar_vencimento, $permite_alterar_limite, $permite_emitir_nova_via_cartao, $permite_fazer_transferencia, $permite_receber_transferencia, $permite_criar_acordo_cobranca, $permite_atribuir_como_bloqueio, $permite_desbloquear, $permite_atribuir_como_cancelamento)

Lista os Status Contas cadastrados para o Emissor

Este m\u00E9todo permite que sejam listados os Status Contas existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\StatusParametroApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do Status da Conta (id).
$nome = "nome_example"; // string | Nome atribu\u00EDdo ao Status da Conta.
$permite_alterar_vencimento = 56; // int | Par\u00E2metro que define se o Status da conta permite a solicita\u00E7\u00E3o da altera\u00E7\u00E3o do Dia para Vencimento das Faturas, sendo: 0: Inativo e 1: Ativo.
$permite_alterar_limite = 56; // int | Par\u00E2metro que define se o Status da conta permite altera\u00E7\u00E3o de Limites, sendo: 0: Inativo e 1: Ativo.
$permite_emitir_nova_via_cartao = 56; // int | Par\u00E2metro que define se o Status da conta permite solicitar uma nova via de Cart\u00E3o, sendo: 0: Inativo e 1: Ativo.
$permite_fazer_transferencia = 56; // int | Par\u00E2metro que define se o Status da conta permite originar Transfer\u00EAncias de Cr\u00E9dito para outras Contas do mesmo Emissor ou para uma Conta Banc\u00E1ria, sendo: 0: Inativo e 1: Ativo.
$permite_receber_transferencia = 56; // int | Par\u00E2metro que define se o Status da conta permite  receber Transfer\u00EAncias de Cr\u00E9dito originadas de outras Contas do mesmo emissor, sendo: 0: Inativo e 1: Ativo.
$permite_criar_acordo_cobranca = 56; // int | Par\u00E2metro que define se o Status da conta permite ter um Acordo de Cobran\u00E7a de D\u00EDvida criado para ela, sendo: 0: Inativo e 1: Ativo.
$permite_atribuir_como_bloqueio = 56; // int | Par\u00E2metro que define se o Status da conta permite ser atribu\u00EDdo para Bloquear temporariamente uma Conta, sendo: 0: Inativo e 1: Ativo.
$permite_desbloquear = 56; // int | Par\u00E2metro que define se o Status da conta permite ser desbloqueada, sendo: 0: Inativo e 1: Ativo.
$permite_atribuir_como_cancelamento = 56; // int | Par\u00E2metro que define se o Status da conta permite ser atribu\u00EDdo para realizar o cancelamento definitivo de uma conta, sendo: 0: Inativo e 1: Ativo.

try { 
    $result = $api_instance->listarUsingGET38($sort, $page, $limit, $id, $nome, $permite_alterar_vencimento, $permite_alterar_limite, $permite_emitir_nova_via_cartao, $permite_fazer_transferencia, $permite_receber_transferencia, $permite_criar_acordo_cobranca, $permite_atribuir_como_bloqueio, $permite_desbloquear, $permite_atribuir_como_cancelamento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusParametroApi->listarUsingGET38: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do Status da Conta (id). | [optional] 
 **nome** | **string**| Nome atribu\u00EDdo ao Status da Conta. | [optional] 
 **permite_alterar_vencimento** | **int**| Par\u00E2metro que define se o Status da conta permite a solicita\u00E7\u00E3o da altera\u00E7\u00E3o do Dia para Vencimento das Faturas, sendo: 0: Inativo e 1: Ativo. | [optional] 
 **permite_alterar_limite** | **int**| Par\u00E2metro que define se o Status da conta permite altera\u00E7\u00E3o de Limites, sendo: 0: Inativo e 1: Ativo. | [optional] 
 **permite_emitir_nova_via_cartao** | **int**| Par\u00E2metro que define se o Status da conta permite solicitar uma nova via de Cart\u00E3o, sendo: 0: Inativo e 1: Ativo. | [optional] 
 **permite_fazer_transferencia** | **int**| Par\u00E2metro que define se o Status da conta permite originar Transfer\u00EAncias de Cr\u00E9dito para outras Contas do mesmo Emissor ou para uma Conta Banc\u00E1ria, sendo: 0: Inativo e 1: Ativo. | [optional] 
 **permite_receber_transferencia** | **int**| Par\u00E2metro que define se o Status da conta permite  receber Transfer\u00EAncias de Cr\u00E9dito originadas de outras Contas do mesmo emissor, sendo: 0: Inativo e 1: Ativo. | [optional] 
 **permite_criar_acordo_cobranca** | **int**| Par\u00E2metro que define se o Status da conta permite ter um Acordo de Cobran\u00E7a de D\u00EDvida criado para ela, sendo: 0: Inativo e 1: Ativo. | [optional] 
 **permite_atribuir_como_bloqueio** | **int**| Par\u00E2metro que define se o Status da conta permite ser atribu\u00EDdo para Bloquear temporariamente uma Conta, sendo: 0: Inativo e 1: Ativo. | [optional] 
 **permite_desbloquear** | **int**| Par\u00E2metro que define se o Status da conta permite ser desbloqueada, sendo: 0: Inativo e 1: Ativo. | [optional] 
 **permite_atribuir_como_cancelamento** | **int**| Par\u00E2metro que define se o Status da conta permite ser atribu\u00EDdo para realizar o cancelamento definitivo de uma conta, sendo: 0: Inativo e 1: Ativo. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageStatusContaResponse**](PageStatusContaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET39**
> \br.com.conductor.pier.api.v2.model\PageStatusImpressaoResponse listarUsingGET39($sort, $page, $limit, $id, $nome)

Lista as op\u00E7\u00F5es de Status Impress\u00E3o

Este m\u00E9todo permite que sejam listadas as op\u00E7\u00F5es de Status Impress\u00E3o que podem ser atribu\u00EDdas aos Cart\u00F5es.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\StatusParametroApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$id = 789; // int | Id do est\u00E1gio cart\u00E3o
$nome = "nome_example"; // string | Nome do status impress\u00E3o

try { 
    $result = $api_instance->listarUsingGET39($sort, $page, $limit, $id, $nome);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusParametroApi->listarUsingGET39: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **id** | **int**| Id do est\u00E1gio cart\u00E3o | [optional] 
 **nome** | **string**| Nome do status impress\u00E3o | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageStatusImpressaoResponse**](PageStatusImpressaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

