# br.com.conductor.pier.api.v2.invoker\GlobaltagboletoApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**consultarUsingGET36**](GlobaltagboletoApi.md#consultarUsingGET36) | **GET** /api/boletos/{id} | {{{boleto_resource_consultar}}}
[**enviarBoletoEmailUsingPOST**](GlobaltagboletoApi.md#enviarBoletoEmailUsingPOST) | **POST** /api/boletos/{id}/enviar-email | {{{boleto_resource_enviar_boleto_email}}}
[**gerarBoletoUsingPOST**](GlobaltagboletoApi.md#gerarBoletoUsingPOST) | **POST** /api/boletos | {{{boleto_resource_gerar_boleto}}}
[**listarUsingGET47**](GlobaltagboletoApi.md#listarUsingGET47) | **GET** /api/boletos | {{{boleto_resource_listar}}}
[**registrarBoletoUsingPOST**](GlobaltagboletoApi.md#registrarBoletoUsingPOST) | **POST** /api/boletos/{id}/registrar | {{{registro_cobranca_resource_registrar_boleto}}}
[**visualizarBoletoUsingGET**](GlobaltagboletoApi.md#visualizarBoletoUsingGET) | **GET** /api/boletos/{id}/arquivo.pdf | {{{boleto_resource_visualizar_boleto}}}


# **consultarUsingGET36**
> \br.com.conductor.pier.api.v2.model\BoletoResponse consultarUsingGET36($id, $zera_valor_codigo_barras)

{{{boleto_resource_consultar}}}

{{{boleto_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagboletoApi();
$id = 789; // int | {{{boleto_resource_consultar_param_id}}}
$zera_valor_codigo_barras = true; // bool | {{{boleto_resource_consultar_param_zera_valor_codigo_barras}}}

try { 
    $result = $api_instance->consultarUsingGET36($id, $zera_valor_codigo_barras);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagboletoApi->consultarUsingGET36: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{boleto_resource_consultar_param_id}}} | 
 **zera_valor_codigo_barras** | **bool**| {{{boleto_resource_consultar_param_zera_valor_codigo_barras}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\BoletoResponse**](BoletoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **enviarBoletoEmailUsingPOST**
> object enviarBoletoEmailUsingPOST($id, $request)

{{{boleto_resource_enviar_boleto_email}}}

{{{boleto_resource_enviar_boleto_email_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagboletoApi();
$id = 789; // int | {{{boleto_resource_enviar_boleto_param_id}}}
$request = new \br.com.conductor.pier.api.v2.model\BoletoEmailRequest(); // \br.com.conductor.pier.api.v2.model\BoletoEmailRequest | request

try { 
    $result = $api_instance->enviarBoletoEmailUsingPOST($id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagboletoApi->enviarBoletoEmailUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{boleto_resource_enviar_boleto_param_id}}} | 
 **request** | [**\br.com.conductor.pier.api.v2.model\BoletoEmailRequest**](\br.com.conductor.pier.api.v2.model\BoletoEmailRequest.md)| request | 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **gerarBoletoUsingPOST**
> \br.com.conductor.pier.api.v2.model\BoletoResponse gerarBoletoUsingPOST($boleto_request)

{{{boleto_resource_gerar_boleto}}}

{{{boleto_resource_gerar_boleto_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagboletoApi();
$boleto_request = new \br.com.conductor.pier.api.v2.model\BoletoRequest(); // \br.com.conductor.pier.api.v2.model\BoletoRequest | boletoRequest

try { 
    $result = $api_instance->gerarBoletoUsingPOST($boleto_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagboletoApi->gerarBoletoUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **boleto_request** | [**\br.com.conductor.pier.api.v2.model\BoletoRequest**](\br.com.conductor.pier.api.v2.model\BoletoRequest.md)| boletoRequest | 

### Return type

[**\br.com.conductor.pier.api.v2.model\BoletoResponse**](BoletoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET47**
> \br.com.conductor.pier.api.v2.model\PageBoletoListarResponse listarUsingGET47($sort, $page, $limit, $id_conta, $data_vencimento, $valor_boleto, $id_tipo_boleto)

{{{boleto_resource_listar}}}

{{{boleto_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagboletoApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id_conta = 789; // int | {{{boleto_listar_request_id_conta_value}}}
$data_vencimento = "data_vencimento_example"; // string | {{{boleto_listar_request_data_vencimento_value}}}
$valor_boleto = new Number(); // Number | {{{boleto_listar_request_valor_value}}}
$id_tipo_boleto = 789; // int | {{{boleto_listar_request_id_tipo_boleto_value}}}

try { 
    $result = $api_instance->listarUsingGET47($sort, $page, $limit, $id_conta, $data_vencimento, $valor_boleto, $id_tipo_boleto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagboletoApi->listarUsingGET47: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id_conta** | **int**| {{{boleto_listar_request_id_conta_value}}} | [optional] 
 **data_vencimento** | **string**| {{{boleto_listar_request_data_vencimento_value}}} | [optional] 
 **valor_boleto** | [**Number**](.md)| {{{boleto_listar_request_valor_value}}} | [optional] 
 **id_tipo_boleto** | **int**| {{{boleto_listar_request_id_tipo_boleto_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageBoletoListarResponse**](PageBoletoListarResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **registrarBoletoUsingPOST**
> \br.com.conductor.pier.api.v2.model\BoletoResponse registrarBoletoUsingPOST($id)

{{{registro_cobranca_resource_registrar_boleto}}}

{{{registro_cobranca_resource_registrar_boleto_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagboletoApi();
$id = 789; // int | {{{registro_cobranca_resource_registrar_boleto_param_id_boleto}}}

try { 
    $result = $api_instance->registrarBoletoUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagboletoApi->registrarBoletoUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{registro_cobranca_resource_registrar_boleto_param_id_boleto}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\BoletoResponse**](BoletoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **visualizarBoletoUsingGET**
> object visualizarBoletoUsingGET($id)

{{{boleto_resource_visualizar_boleto}}}

{{{boleto_resource_visualizar_boleto_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagboletoApi();
$id = 789; // int | {{{boleto_resource_visualizar_boleto_param_id}}}

try { 
    $result = $api_instance->visualizarBoletoUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagboletoApi->visualizarBoletoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{boleto_resource_visualizar_boleto_param_id}}} | 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

