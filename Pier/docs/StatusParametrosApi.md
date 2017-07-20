# br.com.conductor.pier.api.v2.invoker\StatusParametrosApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**consultarEstagioCartaoUsingGET**](StatusParametrosApi.md#consultarEstagioCartaoUsingGET) | **GET** /api/estagios-cartoes/{id} | Apresenta os dados de um determinado Estagio Cart\u00C3\u00A3o
[**consultarStatusCartaoUsingGET**](StatusParametrosApi.md#consultarStatusCartaoUsingGET) | **GET** /api/status-cartoes/{id} | Apresenta os dados de um determinado Status Cart\u00C3\u00A3o
[**consultarUsingGET14**](StatusParametrosApi.md#consultarUsingGET14) | **GET** /api/status-contas/{id} | Apresenta os dados de um determinado Status Conta
[**consultarUsingGET15**](StatusParametrosApi.md#consultarUsingGET15) | **GET** /api/status-impressoes/{id} | Apresenta os dados de um determinado Status Impress\u00C3\u00A3o
[**listarEstagiosCartoesUsingGET**](StatusParametrosApi.md#listarEstagiosCartoesUsingGET) | **GET** /api/estagios-cartoes | Lista as op\u00C3\u00A7\u00C3\u00B5es de Est\u00C3\u00A1gios do Cart\u00C3\u00A3o
[**listarStatusCartoesUsingGET**](StatusParametrosApi.md#listarStatusCartoesUsingGET) | **GET** /api/status-cartoes | Lista as op\u00C3\u00A7\u00C3\u00B5es de Status do Cart\u00C3\u00A3o
[**listarUsingGET20**](StatusParametrosApi.md#listarUsingGET20) | **GET** /api/status-contas | Lista os Status Contas cadastrados para o Emissor
[**listarUsingGET21**](StatusParametrosApi.md#listarUsingGET21) | **GET** /api/status-impressoes | Lista as op\u00C3\u00A7\u00C3\u00B5es de Status Impress\u00C3\u00A3o


# **consultarEstagioCartaoUsingGET**
> \br.com.conductor.pier.api.v2.model\EstagioCartaoResponse consultarEstagioCartaoUsingGET($id)

Apresenta os dados de um determinado Estagio Cart\u00C3\u00A3o

Este m\u00C3\u00A9todo permite consultar os par\u00C3\u00A2metros de um determinado Est\u00C3\u00A1gio de Entrega do Cart\u00C3\u00A3o a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\StatusParametrosApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Est\u00C3\u00A1gio de Entrega do Cart\u00C3\u00A3o (id).

try { 
    $result = $api_instance->consultarEstagioCartaoUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusParametrosApi->consultarEstagioCartaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Est\u00C3\u00A1gio de Entrega do Cart\u00C3\u00A3o (id). | 

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

Apresenta os dados de um determinado Status Cart\u00C3\u00A3o

Este m\u00C3\u00A9todo permite consultar os par\u00C3\u00A2metros de um determinado Status de Cart\u00C3\u00A3o a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\StatusParametrosApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Est\u00C3\u00A1gio de Entrega do Cart\u00C3\u00A3o (id).

try { 
    $result = $api_instance->consultarStatusCartaoUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusParametrosApi->consultarStatusCartaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Est\u00C3\u00A1gio de Entrega do Cart\u00C3\u00A3o (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\StatusCartaoResponse**](StatusCartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET14**
> \br.com.conductor.pier.api.v2.model\StatusContaResponse consultarUsingGET14($id)

Apresenta os dados de um determinado Status Conta

Este m\u00C3\u00A9todo permite consultar os par\u00C3\u00A2metros de um determinado Status Conta a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\StatusParametrosApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Status da Conta (id).

try { 
    $result = $api_instance->consultarUsingGET14($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusParametrosApi->consultarUsingGET14: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Status da Conta (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\StatusContaResponse**](StatusContaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET15**
> \br.com.conductor.pier.api.v2.model\StatusImpressaoResponse consultarUsingGET15($id)

Apresenta os dados de um determinado Status Impress\u00C3\u00A3o

Este m\u00C3\u00A9todo permite consultar os par\u00C3\u00A2metros de um determinado Status de Impress\u00C3\u00A3o do Cart\u00C3\u00A3o a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\StatusParametrosApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Status de Impress\u00C3\u00A3o do Cart\u00C3\u00A3o (id).

try { 
    $result = $api_instance->consultarUsingGET15($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusParametrosApi->consultarUsingGET15: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Status de Impress\u00C3\u00A3o do Cart\u00C3\u00A3o (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\StatusImpressaoResponse**](StatusImpressaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarEstagiosCartoesUsingGET**
> \br.com.conductor.pier.api.v2.model\PageEstagioCartaoResponse listarEstagiosCartoesUsingGET($page, $limit, $id, $nome)

Lista as op\u00C3\u00A7\u00C3\u00B5es de Est\u00C3\u00A1gios do Cart\u00C3\u00A3o

Este m\u00C3\u00A9todo permite que sejam listadas as op\u00C3\u00A7\u00C3\u00B5es de Est\u00C3\u00A1gio de Entrega que podem ser atribu\u00C3\u00ADdas aos Cart\u00C3\u00B5es.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\StatusParametrosApi();
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id = 789; // int | Id do est\u00C3\u00A1gio cart\u00C3\u00A3o
$nome = "nome_example"; // string | Nome do est\u00C3\u00A1gio cart\u00C3\u00A3o

try { 
    $result = $api_instance->listarEstagiosCartoesUsingGET($page, $limit, $id, $nome);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusParametrosApi->listarEstagiosCartoesUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id** | **int**| Id do est\u00C3\u00A1gio cart\u00C3\u00A3o | [optional] 
 **nome** | **string**| Nome do est\u00C3\u00A1gio cart\u00C3\u00A3o | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageEstagioCartaoResponse**](PageEstagioCartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarStatusCartoesUsingGET**
> \br.com.conductor.pier.api.v2.model\PageStatusCartaoResponse listarStatusCartoesUsingGET($page, $limit, $id, $nome, $flag_cancela_cartao, $flag_cancela_no_desbloqueio, $id_status_destino_desbloqueio, $id_status_destino_conta, $flag_cobra_tarifa, $flag_permite_nova_via_cartao, $flag_permite_desbloqueio, $flag_cancelamento, $flag_permite_bloqueio, $flag_reativar)

Lista as op\u00C3\u00A7\u00C3\u00B5es de Status do Cart\u00C3\u00A3o

Este m\u00C3\u00A9todo permite que sejam listadas as possibilidades de Status que podem ser atribu\u00C3\u00ADdas aos Cart\u00C3\u00B5es.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\StatusParametrosApi();
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Status do Cart\u00C3\u00A3o (id) 
$nome = "nome_example"; // string | Nome atribu\u00C3\u00ADdo ao Status de Entrega do Cart\u00C3\u00A3o.
$flag_cancela_cartao = 56; // int | Quando ativa, indica que ao ser atribu\u00C3\u00ADdo um idStatusCartao com essa caracter\u00C3\u00ADstica, o cart\u00C3\u00A3o ter\u00C3\u00A1 o seu idStatusCartao alterado para o que fora escolhido. Caso contr\u00C3\u00A1rio, o idStatusCartao s\u00C3\u00B3 ser\u00C3\u00A1 alterado ap\u00C3\u00B3s o desbloqueio de um novo cart\u00C3\u00A3o do mesmo Portador e Conta.
$flag_cancela_no_desbloqueio = 56; // int | Quando ativa, indica que o cart\u00C3\u00A3o ativo que o portador possuir na mesma conta do cart\u00C3\u00A3o a ser desbloqueado, e que o status dele possua essa caracter\u00C3\u00ADstica, dever\u00C3\u00A1 ser cancelado quando um novo cart\u00C3\u00A3o for desbloqueado.
$id_status_destino_desbloqueio = 789; // int | Indica qual o idStatusCartao que ser\u00C3\u00A1 atribu\u00C3\u00ADdo aos cart\u00C3\u00B5es que forem cancelados devido ao desbloqueio de um novo cart\u00C3\u00A3o.
$id_status_destino_conta = 789; // int | Indica qual o idStatusCartao que ser\u00C3\u00A1 atribu\u00C3\u00ADdo a conta, caso ela seja cancelada devido ao bloqueio de um cart\u00C3\u00A3o quando for utilizado um idStatusCartao no processo de Bloqueio que possua essa caracter\u00C3\u00ADstica.
$flag_cobra_tarifa = 56; // int | Quando ativa, indica que cart\u00C3\u00B5es que tiverem um idStatusCartao atribu\u00C3\u00ADdo com essa caracter\u00C3\u00ADstica, incluir\u00C3\u00A3o a cobran\u00C3\u00A7a de uma tarifa para a conta de acordo com os valores definidos nos par\u00C3\u00A2metros do emissor.
$flag_permite_nova_via_cartao = 56; // int | Par\u00C3\u00A2metro que define se o status do cart\u00C3\u00A3o permite a solicita\u00C3\u00A7\u00C3\u00A3o de uma nova via, sendo: 0: Inativo e 1: Ativo.
$flag_permite_desbloqueio = 56; // int | Par\u00C3\u00A2metro que define se o status do cart\u00C3\u00A3o permite o desbloqueio, sendo: 0: Inativo e 1: Ativo.
$flag_cancelamento = 56; // int | Par\u00C3\u00A2metro que define se o status do cart\u00C3\u00A3o permite o cancelamento, sendo: 0: Inativo e 1: Ativo.
$flag_permite_bloqueio = 56; // int | Par\u00C3\u00A2metro que define se o status do cart\u00C3\u00A3o permite o Bloqueio, sendo: 0: Inativo e 1: Ativo.
$flag_reativar = 56; // int | Par\u00C3\u00A2metro que define se o status do cart\u00C3\u00A3o permite a reativa\u00C3\u00A7\u00C3\u00A3o do cart\u00C3\u00A3o, sendo: 0: Inativo e 1: Ativo.

try { 
    $result = $api_instance->listarStatusCartoesUsingGET($page, $limit, $id, $nome, $flag_cancela_cartao, $flag_cancela_no_desbloqueio, $id_status_destino_desbloqueio, $id_status_destino_conta, $flag_cobra_tarifa, $flag_permite_nova_via_cartao, $flag_permite_desbloqueio, $flag_cancelamento, $flag_permite_bloqueio, $flag_reativar);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusParametrosApi->listarStatusCartoesUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Status do Cart\u00C3\u00A3o (id)  | [optional] 
 **nome** | **string**| Nome atribu\u00C3\u00ADdo ao Status de Entrega do Cart\u00C3\u00A3o. | [optional] 
 **flag_cancela_cartao** | **int**| Quando ativa, indica que ao ser atribu\u00C3\u00ADdo um idStatusCartao com essa caracter\u00C3\u00ADstica, o cart\u00C3\u00A3o ter\u00C3\u00A1 o seu idStatusCartao alterado para o que fora escolhido. Caso contr\u00C3\u00A1rio, o idStatusCartao s\u00C3\u00B3 ser\u00C3\u00A1 alterado ap\u00C3\u00B3s o desbloqueio de um novo cart\u00C3\u00A3o do mesmo Portador e Conta. | [optional] 
 **flag_cancela_no_desbloqueio** | **int**| Quando ativa, indica que o cart\u00C3\u00A3o ativo que o portador possuir na mesma conta do cart\u00C3\u00A3o a ser desbloqueado, e que o status dele possua essa caracter\u00C3\u00ADstica, dever\u00C3\u00A1 ser cancelado quando um novo cart\u00C3\u00A3o for desbloqueado. | [optional] 
 **id_status_destino_desbloqueio** | **int**| Indica qual o idStatusCartao que ser\u00C3\u00A1 atribu\u00C3\u00ADdo aos cart\u00C3\u00B5es que forem cancelados devido ao desbloqueio de um novo cart\u00C3\u00A3o. | [optional] 
 **id_status_destino_conta** | **int**| Indica qual o idStatusCartao que ser\u00C3\u00A1 atribu\u00C3\u00ADdo a conta, caso ela seja cancelada devido ao bloqueio de um cart\u00C3\u00A3o quando for utilizado um idStatusCartao no processo de Bloqueio que possua essa caracter\u00C3\u00ADstica. | [optional] 
 **flag_cobra_tarifa** | **int**| Quando ativa, indica que cart\u00C3\u00B5es que tiverem um idStatusCartao atribu\u00C3\u00ADdo com essa caracter\u00C3\u00ADstica, incluir\u00C3\u00A3o a cobran\u00C3\u00A7a de uma tarifa para a conta de acordo com os valores definidos nos par\u00C3\u00A2metros do emissor. | [optional] 
 **flag_permite_nova_via_cartao** | **int**| Par\u00C3\u00A2metro que define se o status do cart\u00C3\u00A3o permite a solicita\u00C3\u00A7\u00C3\u00A3o de uma nova via, sendo: 0: Inativo e 1: Ativo. | [optional] 
 **flag_permite_desbloqueio** | **int**| Par\u00C3\u00A2metro que define se o status do cart\u00C3\u00A3o permite o desbloqueio, sendo: 0: Inativo e 1: Ativo. | [optional] 
 **flag_cancelamento** | **int**| Par\u00C3\u00A2metro que define se o status do cart\u00C3\u00A3o permite o cancelamento, sendo: 0: Inativo e 1: Ativo. | [optional] 
 **flag_permite_bloqueio** | **int**| Par\u00C3\u00A2metro que define se o status do cart\u00C3\u00A3o permite o Bloqueio, sendo: 0: Inativo e 1: Ativo. | [optional] 
 **flag_reativar** | **int**| Par\u00C3\u00A2metro que define se o status do cart\u00C3\u00A3o permite a reativa\u00C3\u00A7\u00C3\u00A3o do cart\u00C3\u00A3o, sendo: 0: Inativo e 1: Ativo. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageStatusCartaoResponse**](PageStatusCartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET20**
> \br.com.conductor.pier.api.v2.model\PageStatusContaResponse listarUsingGET20($page, $limit, $id, $nome, $flag_altera_limite, $mensagem_consulta_negada, $flag_permite_nova_via_cartao, $flag_faz_transferencia, $flag_recebe_transferencia, $flag_permite_bloqueio, $flag_permite_desbloqueio, $flag_cancela_conta)

Lista os Status Contas cadastrados para o Emissor

Este m\u00C3\u00A9todo permite que sejam listados os Status Contas existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\StatusParametrosApi();
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Status da Conta (id).
$nome = "nome_example"; // string | Nome atribu\u00C3\u00ADdo ao Status da Conta.
$flag_altera_limite = 56; // int | Par\u00C3\u00A2metro que define se o Status da Conta permite realizar a Altera\u00C3\u00A7\u00C3\u00A3o de Limites do Portador, sendo: 0: Inativo e 1: Ativo.
$mensagem_consulta_negada = "mensagem_consulta_negada_example"; // string | Apresenta o texto com o motivo que ser\u00C3\u00A1 apresentado na resposta as opera\u00C3\u00A7\u00C3\u00B5es de Listar e Consultar LimitesDisponibilidades.
$flag_permite_nova_via_cartao = 56; // int | Par\u00C3\u00A2metro que define se o Status da conta permite a solicita\u00C3\u00A7\u00C3\u00A3o de um novo cart\u00C3\u00A3o, sendo: 0: Inativo e 1: Ativo.
$flag_faz_transferencia = 56; // int | Par\u00C3\u00A2metro que define se o Status da conta permite fazer transferencia, sendo: 0: Inativo e 1: Ativo.
$flag_recebe_transferencia = 56; // int | Par\u00C3\u00A2metro que define se o Status da conta permite receber transferencia, sendo: 0: Inativo e 1: Ativo.
$flag_permite_bloqueio = 56; // int | Par\u00C3\u00A2metro que define se o Status da conta permite receber bloqueio, sendo: 0: Inativo e 1: Ativo.
$flag_permite_desbloqueio = 56; // int | Par\u00C3\u00A2metro que define se o Status da conta permite receber desbloqueio, sendo: 0: Inativo e 1: Ativo.
$flag_cancela_conta = 56; // int | Par\u00C3\u00A2metro que define se o Status da conta permite receber cancelamento, sendo: 0: Inativo e 1: Ativo.

try { 
    $result = $api_instance->listarUsingGET20($page, $limit, $id, $nome, $flag_altera_limite, $mensagem_consulta_negada, $flag_permite_nova_via_cartao, $flag_faz_transferencia, $flag_recebe_transferencia, $flag_permite_bloqueio, $flag_permite_desbloqueio, $flag_cancela_conta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusParametrosApi->listarUsingGET20: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Status da Conta (id). | [optional] 
 **nome** | **string**| Nome atribu\u00C3\u00ADdo ao Status da Conta. | [optional] 
 **flag_altera_limite** | **int**| Par\u00C3\u00A2metro que define se o Status da Conta permite realizar a Altera\u00C3\u00A7\u00C3\u00A3o de Limites do Portador, sendo: 0: Inativo e 1: Ativo. | [optional] 
 **mensagem_consulta_negada** | **string**| Apresenta o texto com o motivo que ser\u00C3\u00A1 apresentado na resposta as opera\u00C3\u00A7\u00C3\u00B5es de Listar e Consultar LimitesDisponibilidades. | [optional] 
 **flag_permite_nova_via_cartao** | **int**| Par\u00C3\u00A2metro que define se o Status da conta permite a solicita\u00C3\u00A7\u00C3\u00A3o de um novo cart\u00C3\u00A3o, sendo: 0: Inativo e 1: Ativo. | [optional] 
 **flag_faz_transferencia** | **int**| Par\u00C3\u00A2metro que define se o Status da conta permite fazer transferencia, sendo: 0: Inativo e 1: Ativo. | [optional] 
 **flag_recebe_transferencia** | **int**| Par\u00C3\u00A2metro que define se o Status da conta permite receber transferencia, sendo: 0: Inativo e 1: Ativo. | [optional] 
 **flag_permite_bloqueio** | **int**| Par\u00C3\u00A2metro que define se o Status da conta permite receber bloqueio, sendo: 0: Inativo e 1: Ativo. | [optional] 
 **flag_permite_desbloqueio** | **int**| Par\u00C3\u00A2metro que define se o Status da conta permite receber desbloqueio, sendo: 0: Inativo e 1: Ativo. | [optional] 
 **flag_cancela_conta** | **int**| Par\u00C3\u00A2metro que define se o Status da conta permite receber cancelamento, sendo: 0: Inativo e 1: Ativo. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageStatusContaResponse**](PageStatusContaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET21**
> \br.com.conductor.pier.api.v2.model\PageStatusImpressaoResponse listarUsingGET21($page, $limit, $id, $nome)

Lista as op\u00C3\u00A7\u00C3\u00B5es de Status Impress\u00C3\u00A3o

Este m\u00C3\u00A9todo permite que sejam listadas as op\u00C3\u00A7\u00C3\u00B5es de Status Impress\u00C3\u00A3o que podem ser atribu\u00C3\u00ADdas aos Cart\u00C3\u00B5es.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\StatusParametrosApi();
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id = 789; // int | Id do est\u00C3\u00A1gio cart\u00C3\u00A3o
$nome = "nome_example"; // string | Nome do status impress\u00C3\u00A3o

try { 
    $result = $api_instance->listarUsingGET21($page, $limit, $id, $nome);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusParametrosApi->listarUsingGET21: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id** | **int**| Id do est\u00C3\u00A1gio cart\u00C3\u00A3o | [optional] 
 **nome** | **string**| Nome do status impress\u00C3\u00A3o | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageStatusImpressaoResponse**](PageStatusImpressaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

