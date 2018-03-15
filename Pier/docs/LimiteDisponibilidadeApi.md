# br.com.conductor.pier.api.v2.invoker\LimiteDisponibilidadeApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarUsingPUT9**](LimiteDisponibilidadeApi.md#alterarUsingPUT9) | **PUT** /api/limites-disponibilidades | Realiza a altera\u00E7\u00E3o dos limites da conta
[**consultarUsingGET20**](LimiteDisponibilidadeApi.md#consultarUsingGET20) | **GET** /api/limites-disponibilidades | Apresenta os limites da conta


# **alterarUsingPUT9**
> \br.com.conductor.pier.api.v2.model\LimiteDisponibilidadeResponse alterarUsingPUT9($id_conta, $limite_global, $limite_compra, $limite_parcelado, $limite_parcelas, $limite_saque_global, $limite_saque_periodo, $limite_consignado, $limite_internacional_compra, $limite_internacional_parcelado, $limite_internacional_parcelas, $limite_internacional_saque_global, $limite_internacional_saque_periodo, $limite_maximo)

Realiza a altera\u00E7\u00E3o dos limites da conta

Esse recurso permite realizar a altera\u00E7\u00E3o dos Limites de uma determinada Conta.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\LimiteDisponibilidadeApi();
$id_conta = 789; // int | C\u00F3digo de identifica\u00E7\u00E3o da Conta.
$limite_global = new Number(); // Number | Apresenta o valor do limite de cr\u00E9dito que o portador do cart\u00E3o possui.
$limite_compra = new Number(); // Number | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00E9dito que o portador possui para uso exclusivo em Compras Nacionais.
$limite_parcelado = new Number(); // Number | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00E9dito que o portador possui para realizar transa\u00E7\u00F5es de compras parceladas.
$limite_parcelas = new Number(); // Number | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00E9dito que portador pode acumular a partir da soma das parcelas das compras que forem realizadas nesta modalidade.
$limite_saque_global = new Number(); // Number | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00E9dito que o portador pode utilizar para realizar transa\u00E7\u00F5es de Saque Nacional.
$limite_saque_periodo = new Number(); // Number | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00E9dito que o portador pode utilizar para realizar transa\u00E7\u00F5es de Saque Nacional dentro de cada ciclo de faturamento.
$limite_consignado = new Number(); // Number | Quando utilizado pelo emissor, este campo apresenta o valor da margem de cr\u00E9dito que ele poder\u00E1 utilizar para ser cobrado de forma consignada (desconto em folha) em seu sal\u00E1rio/vencimentos.
$limite_internacional_compra = new Number(); // Number | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00E9dito que o portador possui para uso exclusivo em Compras Internacionais.
$limite_internacional_parcelado = new Number(); // Number | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00E9dito que o portador possui para realizar transa\u00E7\u00F5es Internacionais de Compras Parceladas.
$limite_internacional_parcelas = new Number(); // Number | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00E9dito que portador pode acumular a partir da soma das parcelas das compras internacionais que forem realizadas nesta modalidade.
$limite_internacional_saque_global = new Number(); // Number | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00E9dito que o portador pode utilizar para realizar transa\u00E7\u00F5es de Saque Internacional.
$limite_internacional_saque_periodo = new Number(); // Number | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00E9dito que o portador pode utilizar para realizar transa\u00E7\u00F5es de Saque Internacional dentro de cada ciclo de faturamento.
$limite_maximo = new Number(); // Number | Valor m\u00E1ximo do limite de cr\u00E9dito para realizar transa\u00E7\u00F5es.

try { 
    $result = $api_instance->alterarUsingPUT9($id_conta, $limite_global, $limite_compra, $limite_parcelado, $limite_parcelas, $limite_saque_global, $limite_saque_periodo, $limite_consignado, $limite_internacional_compra, $limite_internacional_parcelado, $limite_internacional_parcelas, $limite_internacional_saque_global, $limite_internacional_saque_periodo, $limite_maximo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LimiteDisponibilidadeApi->alterarUsingPUT9: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_conta** | **int**| C\u00F3digo de identifica\u00E7\u00E3o da Conta. | 
 **limite_global** | [**Number**](.md)| Apresenta o valor do limite de cr\u00E9dito que o portador do cart\u00E3o possui. | [optional] 
 **limite_compra** | [**Number**](.md)| Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00E9dito que o portador possui para uso exclusivo em Compras Nacionais. | [optional] 
 **limite_parcelado** | [**Number**](.md)| Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00E9dito que o portador possui para realizar transa\u00E7\u00F5es de compras parceladas. | [optional] 
 **limite_parcelas** | [**Number**](.md)| Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00E9dito que portador pode acumular a partir da soma das parcelas das compras que forem realizadas nesta modalidade. | [optional] 
 **limite_saque_global** | [**Number**](.md)| Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00E9dito que o portador pode utilizar para realizar transa\u00E7\u00F5es de Saque Nacional. | [optional] 
 **limite_saque_periodo** | [**Number**](.md)| Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00E9dito que o portador pode utilizar para realizar transa\u00E7\u00F5es de Saque Nacional dentro de cada ciclo de faturamento. | [optional] 
 **limite_consignado** | [**Number**](.md)| Quando utilizado pelo emissor, este campo apresenta o valor da margem de cr\u00E9dito que ele poder\u00E1 utilizar para ser cobrado de forma consignada (desconto em folha) em seu sal\u00E1rio/vencimentos. | [optional] 
 **limite_internacional_compra** | [**Number**](.md)| Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00E9dito que o portador possui para uso exclusivo em Compras Internacionais. | [optional] 
 **limite_internacional_parcelado** | [**Number**](.md)| Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00E9dito que o portador possui para realizar transa\u00E7\u00F5es Internacionais de Compras Parceladas. | [optional] 
 **limite_internacional_parcelas** | [**Number**](.md)| Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00E9dito que portador pode acumular a partir da soma das parcelas das compras internacionais que forem realizadas nesta modalidade. | [optional] 
 **limite_internacional_saque_global** | [**Number**](.md)| Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00E9dito que o portador pode utilizar para realizar transa\u00E7\u00F5es de Saque Internacional. | [optional] 
 **limite_internacional_saque_periodo** | [**Number**](.md)| Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00E9dito que o portador pode utilizar para realizar transa\u00E7\u00F5es de Saque Internacional dentro de cada ciclo de faturamento. | [optional] 
 **limite_maximo** | [**Number**](.md)| Valor m\u00E1ximo do limite de cr\u00E9dito para realizar transa\u00E7\u00F5es. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\LimiteDisponibilidadeResponse**](LimiteDisponibilidadeResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET20**
> \br.com.conductor.pier.api.v2.model\LimiteDisponibilidadeResponse consultarUsingGET20($id_conta)

Apresenta os limites da conta

Este m\u00E9todo permite consultar os Limites configurados para uma determinada Conta, a partir do c\u00F3digo de identifica\u00E7\u00E3o da conta (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\LimiteDisponibilidadeApi();
$id_conta = 789; // int | Id Conta

try { 
    $result = $api_instance->consultarUsingGET20($id_conta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LimiteDisponibilidadeApi->consultarUsingGET20: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_conta** | **int**| Id Conta | 

### Return type

[**\br.com.conductor.pier.api.v2.model\LimiteDisponibilidadeResponse**](LimiteDisponibilidadeResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

