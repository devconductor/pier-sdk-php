# br.com.conductor.pier.api.v2.invoker\GlobaltagpayApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**atualizarChaveUsingPOST**](GlobaltagpayApi.md#atualizarChaveUsingPOST) | **POST** /api/cartoes-tokenizados/{id}/atualizar-chave | {{{cartao_pay_resource_atualizar_chave}}}
[**atualizarUsingPUT1**](GlobaltagpayApi.md#atualizarUsingPUT1) | **PUT** /api/cartoes-tokenizados/{id} | {{{cartao_pay_resource_atualizar}}}
[**confirmaAtualizacaoChaveUsingPOST**](GlobaltagpayApi.md#confirmaAtualizacaoChaveUsingPOST) | **POST** /api/cartoes-tokenizados/{id}/confirmar-chave | {{{cartao_pay_resource_confirma_atualizacao_chave}}}
[**consultarUsingGET11**](GlobaltagpayApi.md#consultarUsingGET11) | **GET** /api/cartoes-tokenizados/{id} | {{{cartao_pay_resource_consultar}}}
[**listarCodigosRespostaUsingGET**](GlobaltagpayApi.md#listarCodigosRespostaUsingGET) | **GET** /api/codigos-resposta | {{{enum_pay_resource_listar_codigos_resposta}}}
[**listarModosEntradaUsingGET**](GlobaltagpayApi.md#listarModosEntradaUsingGET) | **GET** /api/modos-entrada | {{{enum_pay_resource_listar_modos_entrada}}}
[**listarOperacoesUsingGET**](GlobaltagpayApi.md#listarOperacoesUsingGET) | **GET** /api/operacoes | {{{enum_pay_resource_listar_operacoes}}}
[**listarTiposTerminaisUsingGET**](GlobaltagpayApi.md#listarTiposTerminaisUsingGET) | **GET** /api/tipos-terminais | {{{enum_pay_resource_listar_tipos_terminais}}}
[**listarTiposTransacoesUsingGET**](GlobaltagpayApi.md#listarTiposTransacoesUsingGET) | **GET** /api/tipos-transacoes | {{{enum_pay_resource_listar_tipos_transacoes}}}
[**listarUsingGET11**](GlobaltagpayApi.md#listarUsingGET11) | **GET** /api/cartoes-tokenizados | {{{cartao_pay_resource_listar}}}
[**salvarUsingPOST6**](GlobaltagpayApi.md#salvarUsingPOST6) | **POST** /api/cartoes-tokenizados | {{{cartao_pay_resource_salvar}}}


# **atualizarChaveUsingPOST**
> \br.com.conductor.pier.api.v2.model\CartaoPayAtualizarChaveResponse atualizarChaveUsingPOST($device_id, $id)

{{{cartao_pay_resource_atualizar_chave}}}

{{{cartao_pay_resource_atualizar_chave_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagpayApi();
$device_id = "device_id_example"; // string | {{{cartao_pay_resource_atualizar_chave_param_device_id}}}
$id = 789; // int | {{{cartao_pay_resource_atualizar_chave_param_id}}}

try { 
    $result = $api_instance->atualizarChaveUsingPOST($device_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagpayApi->atualizarChaveUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| {{{cartao_pay_resource_atualizar_chave_param_device_id}}} | 
 **id** | **int**| {{{cartao_pay_resource_atualizar_chave_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\CartaoPayAtualizarChaveResponse**](CartaoPayAtualizarChaveResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **atualizarUsingPUT1**
> \br.com.conductor.pier.api.v2.model\CartaoPayResponse atualizarUsingPUT1($device_id, $id, $update)

{{{cartao_pay_resource_atualizar}}}

{{{cartao_pay_resource_atualizar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagpayApi();
$device_id = "device_id_example"; // string | {{{cartao_pay_resource_atualizar_param_device_id}}}
$id = 789; // int | {{{cartao_pay_resource_atualizar_param_id}}}
$update = new \br.com.conductor.pier.api.v2.model\CartaoPayUpdate(); // \br.com.conductor.pier.api.v2.model\CartaoPayUpdate | update

try { 
    $result = $api_instance->atualizarUsingPUT1($device_id, $id, $update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagpayApi->atualizarUsingPUT1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| {{{cartao_pay_resource_atualizar_param_device_id}}} | 
 **id** | **int**| {{{cartao_pay_resource_atualizar_param_id}}} | 
 **update** | [**\br.com.conductor.pier.api.v2.model\CartaoPayUpdate**](\br.com.conductor.pier.api.v2.model\CartaoPayUpdate.md)| update | 

### Return type

[**\br.com.conductor.pier.api.v2.model\CartaoPayResponse**](CartaoPayResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **confirmaAtualizacaoChaveUsingPOST**
> \br.com.conductor.pier.api.v2.model\CartaoPayConfirmarChaveResponse confirmaAtualizacaoChaveUsingPOST($device_id, $id, $update)

{{{cartao_pay_resource_confirma_atualizacao_chave}}}

{{{cartao_pay_resource_confirma_atualizacao_chave_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagpayApi();
$device_id = "device_id_example"; // string | {{{cartao_pay_resource_confirma_atualizacao_chave_param_device_id}}}
$id = 789; // int | {{{cartao_pay_resource_confirma_atualizacao_chave_param_id}}}
$update = new \br.com.conductor.pier.api.v2.model\CartaoPayKeyUpdate(); // \br.com.conductor.pier.api.v2.model\CartaoPayKeyUpdate | update

try { 
    $result = $api_instance->confirmaAtualizacaoChaveUsingPOST($device_id, $id, $update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagpayApi->confirmaAtualizacaoChaveUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| {{{cartao_pay_resource_confirma_atualizacao_chave_param_device_id}}} | 
 **id** | **int**| {{{cartao_pay_resource_confirma_atualizacao_chave_param_id}}} | 
 **update** | [**\br.com.conductor.pier.api.v2.model\CartaoPayKeyUpdate**](\br.com.conductor.pier.api.v2.model\CartaoPayKeyUpdate.md)| update | 

### Return type

[**\br.com.conductor.pier.api.v2.model\CartaoPayConfirmarChaveResponse**](CartaoPayConfirmarChaveResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET11**
> \br.com.conductor.pier.api.v2.model\CartaoPayDetalheResponse consultarUsingGET11($device_id, $id)

{{{cartao_pay_resource_consultar}}}

{{{cartao_pay_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagpayApi();
$device_id = "device_id_example"; // string | {{{cartao_pay_resource_consultar_param_device_id}}}
$id = 789; // int | {{{cartao_pay_resource_consultar_param_id}}}

try { 
    $result = $api_instance->consultarUsingGET11($device_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagpayApi->consultarUsingGET11: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| {{{cartao_pay_resource_consultar_param_device_id}}} | 
 **id** | **int**| {{{cartao_pay_resource_consultar_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\CartaoPayDetalheResponse**](CartaoPayDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarCodigosRespostaUsingGET**
> object[] listarCodigosRespostaUsingGET()

{{{enum_pay_resource_listar_codigos_resposta}}}

{{{enum_pay_resource_listar_codigos_resposta_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagpayApi();

try { 
    $result = $api_instance->listarCodigosRespostaUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagpayApi->listarCodigosRespostaUsingGET: ', $e->getMessage(), "\n";
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

# **listarModosEntradaUsingGET**
> object[] listarModosEntradaUsingGET()

{{{enum_pay_resource_listar_modos_entrada}}}

{{{enum_pay_resource_listar_modos_entrada_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagpayApi();

try { 
    $result = $api_instance->listarModosEntradaUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagpayApi->listarModosEntradaUsingGET: ', $e->getMessage(), "\n";
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

# **listarOperacoesUsingGET**
> object[] listarOperacoesUsingGET()

{{{enum_pay_resource_listar_operacoes}}}

{{{enum_pay_resource_listar_operacoes_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagpayApi();

try { 
    $result = $api_instance->listarOperacoesUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagpayApi->listarOperacoesUsingGET: ', $e->getMessage(), "\n";
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

# **listarTiposTerminaisUsingGET**
> object[] listarTiposTerminaisUsingGET()

{{{enum_pay_resource_listar_tipos_terminais}}}

{{{enum_pay_resource_listar_tipos_terminais_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagpayApi();

try { 
    $result = $api_instance->listarTiposTerminaisUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagpayApi->listarTiposTerminaisUsingGET: ', $e->getMessage(), "\n";
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

# **listarTiposTransacoesUsingGET**
> object[] listarTiposTransacoesUsingGET()

{{{enum_pay_resource_listar_tipos_transacoes}}}

{{{enum_pay_resource_listar_tipos_transacoes_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagpayApi();

try { 
    $result = $api_instance->listarTiposTransacoesUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagpayApi->listarTiposTransacoesUsingGET: ', $e->getMessage(), "\n";
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

# **listarUsingGET11**
> \br.com.conductor.pier.api.v2.model\PageCartaoPayResponse listarUsingGET11($device_id, $sort, $page, $limit, $status, $numero_cartao)

{{{cartao_pay_resource_listar}}}

{{{cartao_pay_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagpayApi();
$device_id = "device_id_example"; // string | {{{cartao_pay_resource_listar_param_device_id}}}
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$status = "status_example"; // string | {{{cartao_pay_request_status_value}}}
$numero_cartao = "numero_cartao_example"; // string | {{{cartao_pay_request_numero_cartao_value}}}

try { 
    $result = $api_instance->listarUsingGET11($device_id, $sort, $page, $limit, $status, $numero_cartao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagpayApi->listarUsingGET11: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| {{{cartao_pay_resource_listar_param_device_id}}} | [optional] 
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **status** | **string**| {{{cartao_pay_request_status_value}}} | [optional] 
 **numero_cartao** | **string**| {{{cartao_pay_request_numero_cartao_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageCartaoPayResponse**](PageCartaoPayResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST6**
> \br.com.conductor.pier.api.v2.model\CartaoPayCadastroResponse salvarUsingPOST6($device_id, $persist)

{{{cartao_pay_resource_salvar}}}

{{{cartao_pay_resource_salvar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagpayApi();
$device_id = "device_id_example"; // string | {{{cartao_pay_resource_salvar_param_device_id}}}
$persist = new \br.com.conductor.pier.api.v2.model\CartaoPayPersist(); // \br.com.conductor.pier.api.v2.model\CartaoPayPersist | persist

try { 
    $result = $api_instance->salvarUsingPOST6($device_id, $persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagpayApi->salvarUsingPOST6: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| {{{cartao_pay_resource_salvar_param_device_id}}} | 
 **persist** | [**\br.com.conductor.pier.api.v2.model\CartaoPayPersist**](\br.com.conductor.pier.api.v2.model\CartaoPayPersist.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\CartaoPayCadastroResponse**](CartaoPayCadastroResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

