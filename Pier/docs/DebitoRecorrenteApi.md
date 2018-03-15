# br.com.conductor.pier.api.v2.invoker\DebitoRecorrenteApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listarUsingGET16**](DebitoRecorrenteApi.md#listarUsingGET16) | **GET** /api/debitos-recorrentes | Lista os d\u00E9bitos recorrentes de uma Conta
[**listarUsingGET43**](DebitoRecorrenteApi.md#listarUsingGET43) | **GET** /api/tipos-debitos-recorrentes | Listar Tipos Debitos Recorrentes


# **listarUsingGET16**
> \br.com.conductor.pier.api.v2.model\PageTipoDebitoRecorrenteResponse listarUsingGET16($id_conta, $id_tipo_debito_recorrente, $sort, $page, $limit, $data_hora_inicio, $data_hora_fim, $ativo, $data_hora_ultimo_pagamento)

Lista os d\u00E9bitos recorrentes de uma Conta

A entidade D\u00E9bito Recorrente trata dos registros contratados por um determinado cliente (idConta) onde a cobran\u00E7a dele se d\u00E1 de forma cont\u00EDnua, consistindo em uma \u201Cassinatura\u201D ou pagamento de mensalidades. Isso significa que, enquanto o servi\u00E7o continuar a ser prestado, o cliente dever\u00E1 continuar realizando os pagamentos. A determina\u00E7\u00E3o de quanto tempo essa rela\u00E7\u00E3o ir\u00E1 durar \u00E9 feita em contrato. Na maioria das vezes, existe um per\u00EDodo m\u00EDnimo e, caso o servi\u00E7o seja cancelado ou o pagamento n\u00E3o seja realizado, o status do D\u00E9bito Recorrente ter\u00E1 a FlagAtivo com valor false. Assim, este m\u00E9todo lista todas as opera\u00E7\u00F5es de D\u00E9bitos Recorrentes que um determinado idConta j\u00E1 contratou, esteja ele ativo ou n\u00E3o.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\DebitoRecorrenteApi();
$id_conta = 789; // int | C\u00F3digo de identifica\u00E7\u00E3o da Conta (id)
$id_tipo_debito_recorrente = 789; // int | C\u00F3digo de identifica\u00E7\u00E3o do tipo de d\u00E9bito recorrente (id)
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$data_hora_inicio = "data_hora_inicio_example"; // string | Data inicio do d\u00E9bito recorrente.
$data_hora_fim = "data_hora_fim_example"; // string | Data fim do d\u00E9bito recorrente.
$ativo = true; // bool | Identifica se o d\u00E9bito recorrente est\u00E1 ativo.
$data_hora_ultimo_pagamento = "data_hora_ultimo_pagamento_example"; // string | Data do \u00FAltimo pagamento efetuado.

try { 
    $result = $api_instance->listarUsingGET16($id_conta, $id_tipo_debito_recorrente, $sort, $page, $limit, $data_hora_inicio, $data_hora_fim, $ativo, $data_hora_ultimo_pagamento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebitoRecorrenteApi->listarUsingGET16: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_conta** | **int**| C\u00F3digo de identifica\u00E7\u00E3o da Conta (id) | 
 **id_tipo_debito_recorrente** | **int**| C\u00F3digo de identifica\u00E7\u00E3o do tipo de d\u00E9bito recorrente (id) | [optional] 
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **data_hora_inicio** | **string**| Data inicio do d\u00E9bito recorrente. | [optional] 
 **data_hora_fim** | **string**| Data fim do d\u00E9bito recorrente. | [optional] 
 **ativo** | **bool**| Identifica se o d\u00E9bito recorrente est\u00E1 ativo. | [optional] 
 **data_hora_ultimo_pagamento** | **string**| Data do \u00FAltimo pagamento efetuado. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTipoDebitoRecorrenteResponse**](PageTipoDebitoRecorrenteResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET43**
> \br.com.conductor.pier.api.v2.model\PageTipoDebitoRecorrenteResponse listarUsingGET43($sort, $page, $limit, $id, $descricao, $valor, $flag_ativo)

Listar Tipos Debitos Recorrentes

Para os emissores que utilizam a entidade Debitos Recorrentes precisam previamente solicitar a Conductor o cadastro de quais Tipos eles poder\u00E3o comercializar. Por isso, este recurso tem como objetivo apresentar todos os Tipos de D\u00E9bitos Recorrentes que est\u00E3o cadastrados para um determinado Emissor, independente do status dele.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\DebitoRecorrenteApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$id = 789; // int | C\u00F3digo de identifica\u00E7\u00E3o do tipo de d\u00E9bito recorrente (id).
$descricao = "descricao_example"; // string | Descri\u00E7\u00E3o do tipo de d\u00E9bito recorrente.
$valor = new Number(); // Number | Valor do tipo de d\u00E9bito recorrente.
$flag_ativo = true; // bool | Flag que identifica se o tipo d\u00E9bito recorrente est\u00E1 ativo.

try { 
    $result = $api_instance->listarUsingGET43($sort, $page, $limit, $id, $descricao, $valor, $flag_ativo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebitoRecorrenteApi->listarUsingGET43: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **id** | **int**| C\u00F3digo de identifica\u00E7\u00E3o do tipo de d\u00E9bito recorrente (id). | [optional] 
 **descricao** | **string**| Descri\u00E7\u00E3o do tipo de d\u00E9bito recorrente. | [optional] 
 **valor** | [**Number**](.md)| Valor do tipo de d\u00E9bito recorrente. | [optional] 
 **flag_ativo** | **bool**| Flag que identifica se o tipo d\u00E9bito recorrente est\u00E1 ativo. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTipoDebitoRecorrenteResponse**](PageTipoDebitoRecorrenteResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

