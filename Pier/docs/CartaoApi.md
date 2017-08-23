# br.com.conductor.pier.api.v2.invoker\CartaoApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarAlterarSenhaUsingPUT**](CartaoApi.md#alterarAlterarSenhaUsingPUT) | **PUT** /api/cartoes/{id}/alterar-senha | Realiza a altera\u00C3\u00A7\u00C3\u00A3o da senha de um Cart\u00C3\u00A3o
[**alterarStatusImpressaoUsingPUT**](CartaoApi.md#alterarStatusImpressaoUsingPUT) | **PUT** /api/cartoes/{id}/alterar-status-impressao | Realiza a altera\u00C3\u00A7\u00C3\u00A3o do Status de Impress\u00C3\u00A3o do Cart\u00C3\u00A3o
[**atribuirPessoaUsingPUT**](CartaoApi.md#atribuirPessoaUsingPUT) | **PUT** /api/cartoes/{id}/atribuir-titular | Realiza a atribui\u00C3\u00A7\u00C3\u00A3o de um cart\u00C3\u00A3o pr\u00C3\u00A9-pago a uma pessoa
[**bloquearUsingPOST**](CartaoApi.md#bloquearUsingPOST) | **POST** /api/cartoes/{id}/bloquear | Realiza o bloqueio de um determinado Cart\u00C3\u00A3o
[**cadastrarAlterarSenhaUsingPOST**](CartaoApi.md#cadastrarAlterarSenhaUsingPOST) | **POST** /api/cartoes/{id}/cadastrar-senha | Realiza o cadastro da senha de um Cart\u00C3\u00A3o
[**cancelarUsingPOST**](CartaoApi.md#cancelarUsingPOST) | **POST** /api/cartoes/{id}/cancelar | Realiza o cancelamento de um determinado Cart\u00C3\u00A3o
[**consultarDadosReaisCartaoUsingGET**](CartaoApi.md#consultarDadosReaisCartaoUsingGET) | **GET** /api/cartoes/{id}/consultar-dados-reais | Consultar Detalhes do Cart\u00C3\u00A3o
[**consultarLimiteDisponibilidadeUsingGET**](CartaoApi.md#consultarLimiteDisponibilidadeUsingGET) | **GET** /api/cartoes/{id}/limites-disponibilidades | Apresenta os limites do Portador do Cart\u00C3\u00A3o
[**consultarLotesCartoesPrePagosUsingGET**](CartaoApi.md#consultarLotesCartoesPrePagosUsingGET) | **GET** /api/cartoes/lotes-cartoes-pre-pagos/{id} | Permite consultar um determinado Lote de Cart\u00C3\u00B5es Pr\u00C3\u00A9-Pago
[**consultarPortadorUsingGET**](CartaoApi.md#consultarPortadorUsingGET) | **GET** /api/cartoes/{id}/portadores | Apresenta os dados do Portador do Cart\u00C3\u00A3o
[**consultarUsingGET4**](CartaoApi.md#consultarUsingGET4) | **GET** /api/cartoes/{id} | Apresenta os dados de um determinado Cart\u00C3\u00A3o
[**desbloquearSenhaIncorretaUsingPOST**](CartaoApi.md#desbloquearSenhaIncorretaUsingPOST) | **POST** /api/cartoes/{id}/desbloquear-senha-incorreta | Realiza o desbloqueio de um cart\u00C3\u00A3o bloqueado por tentativas de senha incorretas
[**desbloquearUsingPOST**](CartaoApi.md#desbloquearUsingPOST) | **POST** /api/cartoes/{id}/desbloquear | Realiza o desbloqueio de um determinado Cart\u00C3\u00A3o
[**gerarLotesCartoesPrePagosUsingPOST**](CartaoApi.md#gerarLotesCartoesPrePagosUsingPOST) | **POST** /api/cartoes/lotes-cartoes-pre-pagos | Permite gerar um novo Lote de Cart\u00C3\u00B5es Pr\u00C3\u00A9-Pago
[**gerarNovaViaUsingPOST**](CartaoApi.md#gerarNovaViaUsingPOST) | **POST** /api/cartoes/{id}/gerar-nova-via | Gerar uma nova via de Cart\u00C3\u00A3o
[**lancarTarifaSegundaViaUsingPOST**](CartaoApi.md#lancarTarifaSegundaViaUsingPOST) | **POST** /api/cartoes/{id}/lancar-tarifa-reemissao | Adiciona tarifa de ajuste da segunda via do cart\u00C3\u00A3o
[**listarLotesCartoesPrePagosUsingGET**](CartaoApi.md#listarLotesCartoesPrePagosUsingGET) | **GET** /api/cartoes/lotes-cartoes-pre-pagos | Permite listar os Lotes de Cart\u00C3\u00B5es Pr\u00C3\u00A9-Pago
[**listarUsingGET6**](CartaoApi.md#listarUsingGET6) | **GET** /api/cartoes | Lista os Cart\u00C3\u00B5es gerados pelo Emissor
[**reativarUsingPOST**](CartaoApi.md#reativarUsingPOST) | **POST** /api/cartoes/{id}/reativar | Realiza a reativa\u00C3\u00A7\u00C3\u00A3o de um determinado Cart\u00C3\u00A3o
[**validarDadosImpressosBandeiradoUsingGET**](CartaoApi.md#validarDadosImpressosBandeiradoUsingGET) | **GET** /api/cartoes/validar-dados-impressos-bandeirados | Permite validar os dados impressos em um cart\u00C3\u00A3o bandeirado
[**validarDadosImpressosNaoBandeiradoUsingGET**](CartaoApi.md#validarDadosImpressosNaoBandeiradoUsingGET) | **GET** /api/cartoes/validar-dados-impressos-nao-bandeirados | Permite validar os dados impressos de um cartao n\u00C3\u00A3o bandeirado
[**validarDe55CartaoMastercardUsingGET**](CartaoApi.md#validarDe55CartaoMastercardUsingGET) | **GET** /api/cartoes/validar-de55-mastercard | Permite validar um Cart\u00C3\u00A3o com bandeira Mastercard a partir do de55
[**validarSenhaUsingGET**](CartaoApi.md#validarSenhaUsingGET) | **GET** /api/cartoes/{id}/validar-senha | Permite validar a senha de um Cart\u00C3\u00A3o
[**validarTarjaUsingGET**](CartaoApi.md#validarTarjaUsingGET) | **GET** /api/cartoes/validar-tarja | Permite validar um Cart\u00C3\u00A3o Bandeirado a partir da Tarja


# **alterarAlterarSenhaUsingPUT**
> string alterarAlterarSenhaUsingPUT($id, $senha)

Realiza a altera\u00C3\u00A7\u00C3\u00A3o da senha de um Cart\u00C3\u00A3o

Esta opera\u00C3\u00A7\u00C3\u00A3o tem como objetivo permitir que o portador de um determinado cart\u00C3\u00A3o possa definir uma senha a sua escolha.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CartaoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o (id).
$senha = "senha_example"; // string | Senha para ser cadastrada ou alterada.

try { 
    $result = $api_instance->alterarAlterarSenhaUsingPUT($id, $senha);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartaoApi->alterarAlterarSenhaUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o (id). | 
 **senha** | **string**| Senha para ser cadastrada ou alterada. | 

### Return type

**string**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarStatusImpressaoUsingPUT**
> \br.com.conductor.pier.api.v2.model\HistoricoImpressaoCartaoResponse alterarStatusImpressaoUsingPUT($id, $id_status_impressao)

Realiza a altera\u00C3\u00A7\u00C3\u00A3o do Status de Impress\u00C3\u00A3o do Cart\u00C3\u00A3o

Este m\u00C3\u00A9todo permite que uma Aplica\u00C3\u00A7\u00C3\u00A3o que realize a impress\u00C3\u00A3o de cart\u00C3\u00B5es possa indicar que um determinado idCartao fora impresso ou est\u00C3\u00A1 em processo de impress\u00C3\u00A3o. Para isso, basta informar o respectivo c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do cart\u00C3\u00A3o (id) que deseja ter seu um determinado id_status_impressao atribu\u00C3\u00ADdo a ele. Por padr\u00C3\u00A3o, cart\u00C3\u00B5es provis\u00C3\u00B3rios ou que j\u00C3\u00A1 tenham sido inclu\u00C3\u00ADdos em um arquivo para impress\u00C3\u00A3o via gr\u00C3\u00A1fica ter\u00C3\u00A3o esta requisi\u00C3\u00A7\u00C3\u00A3o negada, se utilizada.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CartaoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o (id).
$id_status_impressao = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Status Impress\u00C3\u00A3o (Id).

try { 
    $result = $api_instance->alterarStatusImpressaoUsingPUT($id, $id_status_impressao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartaoApi->alterarStatusImpressaoUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o (id). | 
 **id_status_impressao** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Status Impress\u00C3\u00A3o (Id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\HistoricoImpressaoCartaoResponse**](HistoricoImpressaoCartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **atribuirPessoaUsingPUT**
> \br.com.conductor.pier.api.v2.model\CartaoResponse atribuirPessoaUsingPUT($id, $id_pessoa)

Realiza a atribui\u00C3\u00A7\u00C3\u00A3o de um cart\u00C3\u00A3o pr\u00C3\u00A9-pago a uma pessoa

Esta m\u00C3\u00A9todo permite que um cart\u00C3\u00A3o pr\u00C3\u00A9-pago impresso de forma avulsa e an\u00C3\u00B4nimo seja atribu\u00C3\u00ADdo a uma pessoa para que esta passe a ser a portadora titular dele.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CartaoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o (id)
$id_pessoa = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o de uma Pessoa (id).

try { 
    $result = $api_instance->atribuirPessoaUsingPUT($id, $id_pessoa);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartaoApi->atribuirPessoaUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o (id) | 
 **id_pessoa** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o de uma Pessoa (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\CartaoResponse**](CartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **bloquearUsingPOST**
> \br.com.conductor.pier.api.v2.model\CartaoResponse bloquearUsingPOST($id, $id_status, $observacao)

Realiza o bloqueio de um determinado Cart\u00C3\u00A3o

Este m\u00C3\u00A9todo permite a realiza\u00C3\u00A7\u00C3\u00A3o do bloqueio (tempor\u00C3\u00A1rio) ou do cancelamento (definitivo) de um determinado cart\u00C3\u00A3o a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id). Para isso, \u00C3\u00A9 preciso informar qual o motivo deste bloqueio que nada mais \u00C3\u00A9 do que atribuir um novo StatusCartao para ele dentre as op\u00C3\u00A7\u00C3\u00B5es praticadas pelo emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CartaoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o (id).
$id_status = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Novo Status Cart\u00C3\u00A3o.
$observacao = "observacao_example"; // string | Texto informando uma observa\u00C3\u00A7\u00C3\u00A3o sobre o bloqueio.

try { 
    $result = $api_instance->bloquearUsingPOST($id, $id_status, $observacao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartaoApi->bloquearUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o (id). | 
 **id_status** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Novo Status Cart\u00C3\u00A3o. | 
 **observacao** | **string**| Texto informando uma observa\u00C3\u00A7\u00C3\u00A3o sobre o bloqueio. | 

### Return type

[**\br.com.conductor.pier.api.v2.model\CartaoResponse**](CartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **cadastrarAlterarSenhaUsingPOST**
> string cadastrarAlterarSenhaUsingPOST($id, $senha)

Realiza o cadastro da senha de um Cart\u00C3\u00A3o

Esta opera\u00C3\u00A7\u00C3\u00A3o tem como objetivo permitir que o portador de um determinado cart\u00C3\u00A3o possa definir uma senha a sua escolha.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CartaoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o (id).
$senha = "senha_example"; // string | Senha para ser cadastrada ou alterada.

try { 
    $result = $api_instance->cadastrarAlterarSenhaUsingPOST($id, $senha);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartaoApi->cadastrarAlterarSenhaUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o (id). | 
 **senha** | **string**| Senha para ser cadastrada ou alterada. | 

### Return type

**string**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **cancelarUsingPOST**
> \br.com.conductor.pier.api.v2.model\CartaoResponse cancelarUsingPOST($id, $id_status, $observacao)

Realiza o cancelamento de um determinado Cart\u00C3\u00A3o

Este m\u00C3\u00A9todo permite a realiza\u00C3\u00A7\u00C3\u00A3o cancelamento de um determinado cart\u00C3\u00A3o a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id). Para isso, \u00C3\u00A9 preciso informar qual o motivo deste bloqueio que nada mais \u00C3\u00A9 do que atribuir um novo StatusCartao para ele dentre as op\u00C3\u00A7\u00C3\u00B5es praticadas pelo emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CartaoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o (id).
$id_status = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Novo Status Cart\u00C3\u00A3o.
$observacao = "observacao_example"; // string | Texto informando uma observa\u00C3\u00A7\u00C3\u00A3o sobre o cancelamento.

try { 
    $result = $api_instance->cancelarUsingPOST($id, $id_status, $observacao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartaoApi->cancelarUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o (id). | 
 **id_status** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Novo Status Cart\u00C3\u00A3o. | 
 **observacao** | **string**| Texto informando uma observa\u00C3\u00A7\u00C3\u00A3o sobre o cancelamento. | 

### Return type

[**\br.com.conductor.pier.api.v2.model\CartaoResponse**](CartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarDadosReaisCartaoUsingGET**
> \br.com.conductor.pier.api.v2.model\DadosCartaoResponse consultarDadosReaisCartaoUsingGET($id)

Consultar Detalhes do Cart\u00C3\u00A3o

Este m\u00C3\u00A9todo permite que seja consultado os dados necessarios de um cart\u00C3\u00A3o para executar servi\u00C3\u00A7os de autoriza\u00C3\u00A7\u00C3\u00A3o.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CartaoApi();
$id = 789; // int | id

try { 
    $result = $api_instance->consultarDadosReaisCartaoUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartaoApi->consultarDadosReaisCartaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id | 

### Return type

[**\br.com.conductor.pier.api.v2.model\DadosCartaoResponse**](DadosCartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarLimiteDisponibilidadeUsingGET**
> \br.com.conductor.pier.api.v2.model\LimiteDisponibilidadeResponse consultarLimiteDisponibilidadeUsingGET($id)

Apresenta os limites do Portador do Cart\u00C3\u00A3o

Este m\u00C3\u00A9todo permite consultar os Limites configurados para o Portador de um determinado Cart\u00C3\u00A3o, seja ele o titular da conta ou um adicional, a partir do c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CartaoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o (id).

try { 
    $result = $api_instance->consultarLimiteDisponibilidadeUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartaoApi->consultarLimiteDisponibilidadeUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\LimiteDisponibilidadeResponse**](LimiteDisponibilidadeResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarLotesCartoesPrePagosUsingGET**
> \br.com.conductor.pier.api.v2.model\LoteCartoesPrePagosResponse consultarLotesCartoesPrePagosUsingGET($id)

Permite consultar um determinado Lote de Cart\u00C3\u00B5es Pr\u00C3\u00A9-Pago

Este m\u00C3\u00A9todo permite consultar os cart\u00C3\u00B5es pr\u00C3\u00A9-pagos existentes na base do emissor atrav\u00C3\u00A9s do id do lote.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CartaoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do lote de cart\u00C3\u00B5es (id)

try { 
    $result = $api_instance->consultarLotesCartoesPrePagosUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartaoApi->consultarLotesCartoesPrePagosUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do lote de cart\u00C3\u00B5es (id) | 

### Return type

[**\br.com.conductor.pier.api.v2.model\LoteCartoesPrePagosResponse**](LoteCartoesPrePagosResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarPortadorUsingGET**
> \br.com.conductor.pier.api.v2.model\PortadorResponse consultarPortadorUsingGET($id)

Apresenta os dados do Portador do Cart\u00C3\u00A3o

Este m\u00C3\u00A9todo permite consultar as informa\u00C3\u00A7\u00C3\u00B5es do Portador de um determinado Cart\u00C3\u00A3o a partir do c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CartaoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o (id).

try { 
    $result = $api_instance->consultarPortadorUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartaoApi->consultarPortadorUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\PortadorResponse**](PortadorResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET4**
> \br.com.conductor.pier.api.v2.model\CartaoDetalheResponse consultarUsingGET4($id)

Apresenta os dados de um determinado Cart\u00C3\u00A3o

Este m\u00C3\u00A9todo permite consultar as informa\u00C3\u00A7\u00C3\u00B5es b\u00C3\u00A1sicas de um determinado Cart\u00C3\u00A3o a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CartaoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o (id).

try { 
    $result = $api_instance->consultarUsingGET4($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartaoApi->consultarUsingGET4: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\CartaoDetalheResponse**](CartaoDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **desbloquearSenhaIncorretaUsingPOST**
> \br.com.conductor.pier.api.v2.model\CartaoResponse desbloquearSenhaIncorretaUsingPOST($id)

Realiza o desbloqueio de um cart\u00C3\u00A3o bloqueado por tentativas de senha incorretas

Este m\u00C3\u00A9todo permite que seja desbloqueado um determinado cart\u00C3\u00A3o que foi bloqueado por tentativas de senha incorretas, a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CartaoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o (id).

try { 
    $result = $api_instance->desbloquearSenhaIncorretaUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartaoApi->desbloquearSenhaIncorretaUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\CartaoResponse**](CartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **desbloquearUsingPOST**
> \br.com.conductor.pier.api.v2.model\CartaoResponse desbloquearUsingPOST($id)

Realiza o desbloqueio de um determinado Cart\u00C3\u00A3o

Este m\u00C3\u00A9todo permite que seja desbloqueado um determinado cart\u00C3\u00A3o a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CartaoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o (id).

try { 
    $result = $api_instance->desbloquearUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartaoApi->desbloquearUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\CartaoResponse**](CartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **gerarLotesCartoesPrePagosUsingPOST**
> \br.com.conductor.pier.api.v2.model\LoteCartoesPrePagosResponse gerarLotesCartoesPrePagosUsingPOST($id_origem_comercial, $id_produto, $id_tipo_cartao, $id_imagem, $id_endereco, $quantidade_cartoes)

Permite gerar um novo Lote de Cart\u00C3\u00B5es Pr\u00C3\u00A9-Pago

Esta opera\u00C3\u00A7\u00C3\u00A3o tem como objetivo permitir que os Emissores gerem uma determinada quantidade de Cart\u00C3\u00B5es Pr\u00C3\u00A9-Pagos, de forma n\u00C3\u00A3o nominal, os quais poder\u00C3\u00A3o ser comercializados e posteriormente vinculados a um cliente que o adquirir. Para isso, al\u00C3\u00A9m de definir quantos cart\u00C3\u00B5es dever\u00C3\u00A3o ser gerados, ser\u00C3\u00A1 poss\u00C3\u00ADvel definir qual a Origem Comercial, o Produto, o Tipo do Cart\u00C3\u00A3o, a Imagem e o Endere\u00C3\u00A7o para entrega dos Cart\u00C3\u00B5es presentes no lote gerado. Por padr\u00C3\u00A3o, todos os cart\u00C3\u00B5es ser\u00C3\u00A3o associados a um idPessoa fict\u00C3\u00ADcio e receber\u00C3\u00A1 um idConta \u00C3\u00BAnico para cada um deles. Feito isso, os Cart\u00C3\u00B5es gerados por esta opera\u00C3\u00A7\u00C3\u00A3o seguir\u00C3\u00A3o os mesmos processos de impress\u00C3\u00A3o via gr\u00C3\u00A1fica previamente definidos entre o Emissor e a Conductor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CartaoApi();
$id_origem_comercial = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Origem Comercial (id).
$id_produto = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Produto (id).
$id_tipo_cartao = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo do Cart\u00C3\u00A3o (id).
$id_imagem = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Imagem (id).
$id_endereco = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Endere\u00C3\u00A7o (id).
$quantidade_cartoes = 56; // int | N\u00C3\u00BAmero de cart\u00C3\u00B5es existentes no Lote.

try { 
    $result = $api_instance->gerarLotesCartoesPrePagosUsingPOST($id_origem_comercial, $id_produto, $id_tipo_cartao, $id_imagem, $id_endereco, $quantidade_cartoes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartaoApi->gerarLotesCartoesPrePagosUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_origem_comercial** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Origem Comercial (id). | [optional] 
 **id_produto** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Produto (id). | [optional] 
 **id_tipo_cartao** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo do Cart\u00C3\u00A3o (id). | [optional] 
 **id_imagem** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Imagem (id). | [optional] 
 **id_endereco** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Endere\u00C3\u00A7o (id). | [optional] 
 **quantidade_cartoes** | **int**| N\u00C3\u00BAmero de cart\u00C3\u00B5es existentes no Lote. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\LoteCartoesPrePagosResponse**](LoteCartoesPrePagosResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **gerarNovaViaUsingPOST**
> \br.com.conductor.pier.api.v2.model\CartaoResponse gerarNovaViaUsingPOST($id)

Gerar uma nova via de Cart\u00C3\u00A3o

Esta opera\u00C3\u00A7\u00C3\u00A3o tem como objetivo permitir que os Emissores ou seus clientes possam solicitar a gera\u00C3\u00A7\u00C3\u00A3o de uma nova via de Cart\u00C3\u00A3o que ser\u00C3\u00A1 encaminhando para impress\u00C3\u00A3o e postagem de acordo com os fluxos padr\u00C3\u00B5es j\u00C3\u00A1 definidos pelo emissor. Para isso, \u00C3\u00A9 preciso que o cliente j\u00C3\u00A1 possua um cart\u00C3\u00A3o gerado e informar o C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o deste (idCartao) para que ele possa utilizar esta opera\u00C3\u00A7\u00C3\u00A3o. Assim, esta funcionalidade se aplica apenas para a gera\u00C3\u00A7\u00C3\u00A3o de cart\u00C3\u00B5es f\u00C3\u00ADsicos.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CartaoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o (id)

try { 
    $result = $api_instance->gerarNovaViaUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartaoApi->gerarNovaViaUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o (id) | 

### Return type

[**\br.com.conductor.pier.api.v2.model\CartaoResponse**](CartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **lancarTarifaSegundaViaUsingPOST**
> object lancarTarifaSegundaViaUsingPOST($id)

Adiciona tarifa de ajuste da segunda via do cart\u00C3\u00A3o

Esse recurso permite adicionar tar\u00C3\u00ADfa de ajuste pela emiss\u00C3\u00A3o da segunda via do cart\u00C3\u00A3o.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CartaoApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do cart\u00C3\u00A3o (id).

try { 
    $result = $api_instance->lancarTarifaSegundaViaUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartaoApi->lancarTarifaSegundaViaUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do cart\u00C3\u00A3o (id). | 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarLotesCartoesPrePagosUsingGET**
> \br.com.conductor.pier.api.v2.model\PageLoteCartoesPrePagosResponse listarLotesCartoesPrePagosUsingGET($sort, $page, $limit, $id_origem_comercial, $id_produto, $id_tipo_cartao, $id_imagem, $id_endereco, $quantidade_cartoes, $data_cadastro, $usuario_cadastro, $status_processamento)

Permite listar os Lotes de Cart\u00C3\u00B5es Pr\u00C3\u00A9-Pago

Este m\u00C3\u00A9todo permite que sejam listados os cart\u00C3\u00B5es pr\u00C3\u00A9-pagos existentes na base do emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CartaoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id_origem_comercial = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Origem Comercial (id).
$id_produto = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Produto (id).
$id_tipo_cartao = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo do Cart\u00C3\u00A3o (id).
$id_imagem = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Imagem (id).
$id_endereco = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Endere\u00C3\u00A7o (id).
$quantidade_cartoes = 56; // int | N\u00C3\u00BAmero de cart\u00C3\u00B5es existentes no Lote.
$data_cadastro = "data_cadastro_example"; // string | Data de Cadastro do Lote de Cart\u00C3\u00B5es N\u00C3\u00A3o Nominais.
$usuario_cadastro = "usuario_cadastro_example"; // string | Nome do Usu\u00C3\u00A1rio que criou o Lote.
$status_processamento = 56; // int | Indica o Status de Processamento do Lote.

try { 
    $result = $api_instance->listarLotesCartoesPrePagosUsingGET($sort, $page, $limit, $id_origem_comercial, $id_produto, $id_tipo_cartao, $id_imagem, $id_endereco, $quantidade_cartoes, $data_cadastro, $usuario_cadastro, $status_processamento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartaoApi->listarLotesCartoesPrePagosUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id_origem_comercial** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Origem Comercial (id). | [optional] 
 **id_produto** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Produto (id). | [optional] 
 **id_tipo_cartao** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo do Cart\u00C3\u00A3o (id). | [optional] 
 **id_imagem** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Imagem (id). | [optional] 
 **id_endereco** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Endere\u00C3\u00A7o (id). | [optional] 
 **quantidade_cartoes** | **int**| N\u00C3\u00BAmero de cart\u00C3\u00B5es existentes no Lote. | [optional] 
 **data_cadastro** | **string**| Data de Cadastro do Lote de Cart\u00C3\u00B5es N\u00C3\u00A3o Nominais. | [optional] 
 **usuario_cadastro** | **string**| Nome do Usu\u00C3\u00A1rio que criou o Lote. | [optional] 
 **status_processamento** | **int**| Indica o Status de Processamento do Lote. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageLoteCartoesPrePagosResponse**](PageLoteCartoesPrePagosResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET6**
> \br.com.conductor.pier.api.v2.model\PageCartaoResponse listarUsingGET6($sort, $page, $limit, $id_status_cartao, $id_estagio_cartao, $id_conta, $id_pessoa, $id_produto, $tipo_portador, $numero_cartao, $nome_impresso, $data_geracao, $data_status_cartao, $data_estagio_cartao, $data_validade, $data_impressao, $arquivo_impressao, $flag_impressao_origem_comercial, $flag_provisorio, $codigo_desbloqueio, $sequencial_cartao)

Lista os Cart\u00C3\u00B5es gerados pelo Emissor

Este m\u00C3\u00A9todo permite que sejam listados os cart\u00C3\u00B5es existentes na base do emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CartaoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id_status_cartao = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Status do Cart\u00C3\u00A3o (id).
$id_estagio_cartao = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Est\u00C3\u00A1gio de Impress\u00C3\u00A3o do Cart\u00C3\u00A3o (id).
$id_conta = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Conta a qual o cart\u00C3\u00A3o pertence (id).
$id_pessoa = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Pessoa a qual o cart\u00C3\u00A3o pertence (id)
$id_produto = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Produto a qual o cart\u00C3\u00A3o pertence (id).
$tipo_portador = "tipo_portador_example"; // string | Apresenta o tipo do Portador do cart\u00C3\u00A3o, sendo: ('T': Titular, 'A': Adicional).
$numero_cartao = "numero_cartao_example"; // string | Apresenta o n\u00C3\u00BAmero do cart\u00C3\u00A3o.
$nome_impresso = "nome_impresso_example"; // string | Apresenta o nome impresso no cart\u00C3\u00A3o.
$data_geracao = "data_geracao_example"; // string | Apresenta a data em que o cart\u00C3\u00A3o foi gerado.
$data_status_cartao = "data_status_cartao_example"; // string | Apresenta a data em que o idStatusCartao atual do cart\u00C3\u00A3o fora aplicado, quando houver.
$data_estagio_cartao = "data_estagio_cartao_example"; // string | Apresenta a data em que o idEstagioCartao atual do cart\u00C3\u00A3o fora aplicado, quando houver.
$data_validade = "data_validade_example"; // string | Apresenta a data de validade do cart\u00C3\u00A3o em formato yyyy-MM, quando houver.
$data_impressao = "data_impressao_example"; // string | Apresenta a data em que o cart\u00C3\u00A3o fora impresso, caso impress\u00C3\u00A3o em loja, ou a data em que ele fora inclu\u00C3\u00ADdo no arquivo para impress\u00C3\u00A3o via gr\u00C3\u00A1fica.
$arquivo_impressao = "arquivo_impressao_example"; // string | Apresenta o nome do arquivo onde o cart\u00C3\u00A3o fora inclu\u00C3\u00ADdo para impress\u00C3\u00A3o por uma gr\u00C3\u00A1fica, quando houver.
$flag_impressao_origem_comercial = 56; // int | Quando ativa, indica que o cart\u00C3\u00A3o fora impresso na Origem Comercial.
$flag_provisorio = 56; // int | Quando ativa, indica que o cart\u00C3\u00A3o \u00C3\u00A9 provis\u00C3\u00B3rio. Ou seja, \u00C3\u00A9 um cart\u00C3\u00A3o para uso tempor\u00C3\u00A1rio quando se deseja permitir que o cliente transacione sem que ele tenha recebido um cart\u00C3\u00A3o definitivo.
$codigo_desbloqueio = "codigo_desbloqueio_example"; // string | Apresenta um c\u00C3\u00B3digo espec\u00C3\u00ADfico para ser utilizado como vari\u00C3\u00A1vel no processo de desbloqueio do cart\u00C3\u00A3o para emissores que querem usar esta funcionalidade.
$sequencial_cartao = 56; // int | N\u00C3\u00BAmero sequencial do cart\u00C3\u00A3o

try { 
    $result = $api_instance->listarUsingGET6($sort, $page, $limit, $id_status_cartao, $id_estagio_cartao, $id_conta, $id_pessoa, $id_produto, $tipo_portador, $numero_cartao, $nome_impresso, $data_geracao, $data_status_cartao, $data_estagio_cartao, $data_validade, $data_impressao, $arquivo_impressao, $flag_impressao_origem_comercial, $flag_provisorio, $codigo_desbloqueio, $sequencial_cartao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartaoApi->listarUsingGET6: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id_status_cartao** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Status do Cart\u00C3\u00A3o (id). | [optional] 
 **id_estagio_cartao** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Est\u00C3\u00A1gio de Impress\u00C3\u00A3o do Cart\u00C3\u00A3o (id). | [optional] 
 **id_conta** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Conta a qual o cart\u00C3\u00A3o pertence (id). | [optional] 
 **id_pessoa** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Pessoa a qual o cart\u00C3\u00A3o pertence (id) | [optional] 
 **id_produto** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Produto a qual o cart\u00C3\u00A3o pertence (id). | [optional] 
 **tipo_portador** | **string**| Apresenta o tipo do Portador do cart\u00C3\u00A3o, sendo: (&#39;T&#39;: Titular, &#39;A&#39;: Adicional). | [optional] 
 **numero_cartao** | **string**| Apresenta o n\u00C3\u00BAmero do cart\u00C3\u00A3o. | [optional] 
 **nome_impresso** | **string**| Apresenta o nome impresso no cart\u00C3\u00A3o. | [optional] 
 **data_geracao** | **string**| Apresenta a data em que o cart\u00C3\u00A3o foi gerado. | [optional] 
 **data_status_cartao** | **string**| Apresenta a data em que o idStatusCartao atual do cart\u00C3\u00A3o fora aplicado, quando houver. | [optional] 
 **data_estagio_cartao** | **string**| Apresenta a data em que o idEstagioCartao atual do cart\u00C3\u00A3o fora aplicado, quando houver. | [optional] 
 **data_validade** | **string**| Apresenta a data de validade do cart\u00C3\u00A3o em formato yyyy-MM, quando houver. | [optional] 
 **data_impressao** | **string**| Apresenta a data em que o cart\u00C3\u00A3o fora impresso, caso impress\u00C3\u00A3o em loja, ou a data em que ele fora inclu\u00C3\u00ADdo no arquivo para impress\u00C3\u00A3o via gr\u00C3\u00A1fica. | [optional] 
 **arquivo_impressao** | **string**| Apresenta o nome do arquivo onde o cart\u00C3\u00A3o fora inclu\u00C3\u00ADdo para impress\u00C3\u00A3o por uma gr\u00C3\u00A1fica, quando houver. | [optional] 
 **flag_impressao_origem_comercial** | **int**| Quando ativa, indica que o cart\u00C3\u00A3o fora impresso na Origem Comercial. | [optional] 
 **flag_provisorio** | **int**| Quando ativa, indica que o cart\u00C3\u00A3o \u00C3\u00A9 provis\u00C3\u00B3rio. Ou seja, \u00C3\u00A9 um cart\u00C3\u00A3o para uso tempor\u00C3\u00A1rio quando se deseja permitir que o cliente transacione sem que ele tenha recebido um cart\u00C3\u00A3o definitivo. | [optional] 
 **codigo_desbloqueio** | **string**| Apresenta um c\u00C3\u00B3digo espec\u00C3\u00ADfico para ser utilizado como vari\u00C3\u00A1vel no processo de desbloqueio do cart\u00C3\u00A3o para emissores que querem usar esta funcionalidade. | [optional] 
 **sequencial_cartao** | **int**| N\u00C3\u00BAmero sequencial do cart\u00C3\u00A3o | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageCartaoResponse**](PageCartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **reativarUsingPOST**
> \br.com.conductor.pier.api.v2.model\CartaoResponse reativarUsingPOST($id)

Realiza a reativa\u00C3\u00A7\u00C3\u00A3o de um determinado Cart\u00C3\u00A3o

Este m\u00C3\u00A9todo permite a realiza\u00C3\u00A7\u00C3\u00A3o da reativa\u00C3\u00A7\u00C3\u00A3o de um determinado cart\u00C3\u00A3o a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CartaoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o (id).

try { 
    $result = $api_instance->reativarUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartaoApi->reativarUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\CartaoResponse**](CartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **validarDadosImpressosBandeiradoUsingGET**
> \br.com.conductor.pier.api.v2.model\ValidaCartaoResponse validarDadosImpressosBandeiradoUsingGET($numero_cartao, $nome_portador, $data_validade, $codigo_seguranca)

Permite validar os dados impressos em um cart\u00C3\u00A3o bandeirado

Esta opera\u00C3\u00A7\u00C3\u00A3o tem como objetivo permitir que os Emissores validem a autenticidade de um determinado Cart\u00C3\u00A3o a partir do envio dos dados sens\u00C3\u00ADveis impressos nele. A utiliza\u00C3\u00A7\u00C3\u00A3o desde m\u00C3\u00A9todo tem diversas aplica\u00C3\u00A7\u00C3\u00B5es, sendo a principal delas a de Identifica\u00C3\u00A7\u00C3\u00A3o Positiva do Cart\u00C3\u00A3o para a realiza\u00C3\u00A7\u00C3\u00A3o de transa\u00C3\u00A7\u00C3\u00B5es e-commerce ou por meio de Centrais de Atendimento Eletr\u00C3\u00B4nico (URA), dentre outras.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CartaoApi();
$numero_cartao = "numero_cartao_example"; // string | N\u00C3\u00BAmero do cart\u00C3\u00A3o a ser validado.
$nome_portador = "nome_portador_example"; // string | Nome do portador do cart\u00C3\u00A3o
$data_validade = "data_validade_example"; // string | Data de validade do cart\u00C3\u00A3o no formato yyyy-MM
$codigo_seguranca = "codigo_seguranca_example"; // string | C\u00C3\u00B3digo de seguran\u00C3\u00A7a do cart\u00C3\u00A3o com tr\u00C3\u00AAs n\u00C3\u00BAmeros

try { 
    $result = $api_instance->validarDadosImpressosBandeiradoUsingGET($numero_cartao, $nome_portador, $data_validade, $codigo_seguranca);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartaoApi->validarDadosImpressosBandeiradoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **numero_cartao** | **string**| N\u00C3\u00BAmero do cart\u00C3\u00A3o a ser validado. | 
 **nome_portador** | **string**| Nome do portador do cart\u00C3\u00A3o | 
 **data_validade** | **string**| Data de validade do cart\u00C3\u00A3o no formato yyyy-MM | 
 **codigo_seguranca** | **string**| C\u00C3\u00B3digo de seguran\u00C3\u00A7a do cart\u00C3\u00A3o com tr\u00C3\u00AAs n\u00C3\u00BAmeros | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ValidaCartaoResponse**](ValidaCartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **validarDadosImpressosNaoBandeiradoUsingGET**
> \br.com.conductor.pier.api.v2.model\ValidaCartaoResponse validarDadosImpressosNaoBandeiradoUsingGET($numero_cartao, $nome_portador, $data_validade, $codigo_seguranca)

Permite validar os dados impressos de um cartao n\u00C3\u00A3o bandeirado

Esta opera\u00C3\u00A7\u00C3\u00A3o tem como objetivo permitir que os Emissores validem a autenticidade de um determinado Cart\u00C3\u00A3o a partir do envio dos dados sens\u00C3\u00ADveis impressos nele. A utiliza\u00C3\u00A7\u00C3\u00A3o desde m\u00C3\u00A9todo tem diversas aplica\u00C3\u00A7\u00C3\u00B5es, sendo a principal delas a de Identifica\u00C3\u00A7\u00C3\u00A3o Positiva do Cart\u00C3\u00A3o para a realiza\u00C3\u00A7\u00C3\u00A3o de transa\u00C3\u00A7\u00C3\u00B5es e-commerce ou por meio de Centrais de Atendimento Eletr\u00C3\u00B4nico (URA), dentre outras.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CartaoApi();
$numero_cartao = "numero_cartao_example"; // string | N\u00C3\u00BAmero do cart\u00C3\u00A3o a ser validado.
$nome_portador = "nome_portador_example"; // string | Nome do portador do cart\u00C3\u00A3o
$data_validade = "data_validade_example"; // string | Data de validade do cart\u00C3\u00A3o no formato yyyy-MM
$codigo_seguranca = "codigo_seguranca_example"; // string | C\u00C3\u00B3digo de seguran\u00C3\u00A7a do cart\u00C3\u00A3o com tr\u00C3\u00AAs n\u00C3\u00BAmeros

try { 
    $result = $api_instance->validarDadosImpressosNaoBandeiradoUsingGET($numero_cartao, $nome_portador, $data_validade, $codigo_seguranca);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartaoApi->validarDadosImpressosNaoBandeiradoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **numero_cartao** | **string**| N\u00C3\u00BAmero do cart\u00C3\u00A3o a ser validado. | 
 **nome_portador** | **string**| Nome do portador do cart\u00C3\u00A3o | 
 **data_validade** | **string**| Data de validade do cart\u00C3\u00A3o no formato yyyy-MM | 
 **codigo_seguranca** | **string**| C\u00C3\u00B3digo de seguran\u00C3\u00A7a do cart\u00C3\u00A3o com tr\u00C3\u00AAs n\u00C3\u00BAmeros | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ValidaCartaoResponse**](ValidaCartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **validarDe55CartaoMastercardUsingGET**
> \br.com.conductor.pier.api.v2.model\ValidaCartaoResponse validarDe55CartaoMastercardUsingGET($numero_cartao, $criptograma)

Permite validar um Cart\u00C3\u00A3o com bandeira Mastercard a partir do de55

Esta opera\u00C3\u00A7\u00C3\u00A3o tem como objetivo permitir que os Emissores validem o DE55 gerado a partir da leitura de um chip EMV de um Cart\u00C3\u00A3o com bandeira Mastercard a fim de verificar a sua autenticidade. A utiliza\u00C3\u00A7\u00C3\u00A3o desde m\u00C3\u00A9todo tem diversas aplica\u00C3\u00A7\u00C3\u00B5es, sendo a principal delas a de Identifica\u00C3\u00A7\u00C3\u00A3o Positiva do Cart\u00C3\u00A3o antes de permitir que o portador realize transa\u00C3\u00A7\u00C3\u00B5es diversas, como as de compra e saque na modalidade d\u00C3\u00A9bito em conta corrente, dentre outras.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CartaoApi();
$numero_cartao = "numero_cartao_example"; // string | N\u00C3\u00BAmero do cart\u00C3\u00A3o a ser validado.
$criptograma = "criptograma_example"; // string | Criptograma do cart\u00C3\u00A3o no formato de55

try { 
    $result = $api_instance->validarDe55CartaoMastercardUsingGET($numero_cartao, $criptograma);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartaoApi->validarDe55CartaoMastercardUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **numero_cartao** | **string**| N\u00C3\u00BAmero do cart\u00C3\u00A3o a ser validado. | 
 **criptograma** | **string**| Criptograma do cart\u00C3\u00A3o no formato de55 | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ValidaCartaoResponse**](ValidaCartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **validarSenhaUsingGET**
> \br.com.conductor.pier.api.v2.model\ValidaSenhaCartaoResponse validarSenhaUsingGET($id, $senha)

Permite validar a senha de um Cart\u00C3\u00A3o

Esta opera\u00C3\u00A7\u00C3\u00A3o tem como objetivo permitir validar que a senha informada pelo portador de um determinado cart\u00C3\u00A3o est\u00C3\u00A1 correta.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CartaoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o (id).
$senha = "senha_example"; // string | Senha para ser validada.

try { 
    $result = $api_instance->validarSenhaUsingGET($id, $senha);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartaoApi->validarSenhaUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o (id). | 
 **senha** | **string**| Senha para ser validada. | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ValidaSenhaCartaoResponse**](ValidaSenhaCartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **validarTarjaUsingGET**
> \br.com.conductor.pier.api.v2.model\ValidaCartaoResponse validarTarjaUsingGET($numero_cartao, $trilha1, $trilha2)

Permite validar um Cart\u00C3\u00A3o Bandeirado a partir da Tarja

Esta opera\u00C3\u00A7\u00C3\u00A3o tem como objetivo permitir que os Emissores validem a autenticidade de um determinado Cart\u00C3\u00A3o a partir da leitura da tarja magn\u00C3\u00A9tica do mesmo. A utiliza\u00C3\u00A7\u00C3\u00A3o desde m\u00C3\u00A9todo tem diversas aplica\u00C3\u00A7\u00C3\u00B5es, sendo a principal delas a de Identifica\u00C3\u00A7\u00C3\u00A3o Positiva do Cart\u00C3\u00A3o antes de permitir que o portador realize transa\u00C3\u00A7\u00C3\u00B5es diversas, como as de compra e saque na modalidade d\u00C3\u00A9bito em conta corrente, dentre outras.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\CartaoApi();
$numero_cartao = "numero_cartao_example"; // string | N\u00C3\u00BAmero do cart\u00C3\u00A3o a ser validado.
$trilha1 = "trilha1_example"; // string | Trilha 1 do cart\u00C3\u00A3o a ser validado
$trilha2 = "trilha2_example"; // string | Trilha 2 do cart\u00C3\u00A3o a ser validado

try { 
    $result = $api_instance->validarTarjaUsingGET($numero_cartao, $trilha1, $trilha2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartaoApi->validarTarjaUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **numero_cartao** | **string**| N\u00C3\u00BAmero do cart\u00C3\u00A3o a ser validado. | 
 **trilha1** | **string**| Trilha 1 do cart\u00C3\u00A3o a ser validado | 
 **trilha2** | **string**| Trilha 2 do cart\u00C3\u00A3o a ser validado | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ValidaCartaoResponse**](ValidaCartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

