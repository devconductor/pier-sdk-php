# br.com.conductor.pier.api.v2.invoker\GlobaltagantecipacaoApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**configurarTaxaAntecipacaoUsingPOST**](GlobaltagantecipacaoApi.md#configurarTaxaAntecipacaoUsingPOST) | **POST** /api/produtos/{id}/configurar-taxa-antecipacao | {{{produto_resource_configurar_taxa_antecipacao}}}
[**consultarTaxaAntecipacaoUsingGET**](GlobaltagantecipacaoApi.md#consultarTaxaAntecipacaoUsingGET) | **GET** /api/produtos/{id}/consultar-taxa-antecipacao | {{{produto_resource_consultar_taxa_antecipacao}}}
[**efetivarAntecipacaoUsingPOST**](GlobaltagantecipacaoApi.md#efetivarAntecipacaoUsingPOST) | **POST** /api/compras-antecipaveis/{id}/efetivar-antecipacao | {{{compra_antecipavel_resource_efetivar_antecipacao}}}
[**efetivarAntecipacoesUsingPOST**](GlobaltagantecipacaoApi.md#efetivarAntecipacoesUsingPOST) | **POST** /api/compras-antecipaveis/efetivar-antecipacao | {{{compra_antecipavel_resource_efetivar_antecipacoes}}}
[**listarUsingGET13**](GlobaltagantecipacaoApi.md#listarUsingGET13) | **GET** /api/compras-antecipaveis | {{{compra_antecipavel_resource_listar}}}
[**simularAntecipacaoUsingGET**](GlobaltagantecipacaoApi.md#simularAntecipacaoUsingGET) | **GET** /api/compras-antecipaveis/{id}/simular-antecipacao | {{{compra_antecipavel_resource_simular_antecipacao}}}
[**simularAntecipacoesUsingGET**](GlobaltagantecipacaoApi.md#simularAntecipacoesUsingGET) | **GET** /api/compras-antecipaveis/simular-antecipacao | {{{compra_antecipavel_resource_simular_antecipacoes}}}


# **configurarTaxaAntecipacaoUsingPOST**
> \br.com.conductor.pier.api.v2.model\ParametroProdutoResponse configurarTaxaAntecipacaoUsingPOST($id, $taxa_antecipacao_request)

{{{produto_resource_configurar_taxa_antecipacao}}}

{{{produto_resource_configurar_taxa_antecipacao_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagantecipacaoApi();
$id = 789; // int | {{{produto_resource_configurar_taxa_antecipacao_param_id}}}
$taxa_antecipacao_request = new \br.com.conductor.pier.api.v2.model\TaxaAntecipacaoRequest(); // \br.com.conductor.pier.api.v2.model\TaxaAntecipacaoRequest | taxaAntecipacaoRequest

try { 
    $result = $api_instance->configurarTaxaAntecipacaoUsingPOST($id, $taxa_antecipacao_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagantecipacaoApi->configurarTaxaAntecipacaoUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{produto_resource_configurar_taxa_antecipacao_param_id}}} | 
 **taxa_antecipacao_request** | [**\br.com.conductor.pier.api.v2.model\TaxaAntecipacaoRequest**](\br.com.conductor.pier.api.v2.model\TaxaAntecipacaoRequest.md)| taxaAntecipacaoRequest | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ParametroProdutoResponse**](ParametroProdutoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarTaxaAntecipacaoUsingGET**
> \br.com.conductor.pier.api.v2.model\ParametroProdutoResponse consultarTaxaAntecipacaoUsingGET($id, $tipo_transacao)

{{{produto_resource_consultar_taxa_antecipacao}}}

{{{produto_resource_consultar_taxa_antecipacao_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagantecipacaoApi();
$id = 789; // int | {{{produto_resource_consultar_taxa_antecipacao_param_id}}}
$tipo_transacao = "tipo_transacao_example"; // string | {{{produto_resource_consultar_taxa_antecipacao_param_tipo_transacao}}}

try { 
    $result = $api_instance->consultarTaxaAntecipacaoUsingGET($id, $tipo_transacao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagantecipacaoApi->consultarTaxaAntecipacaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{produto_resource_consultar_taxa_antecipacao_param_id}}} | 
 **tipo_transacao** | **string**| {{{produto_resource_consultar_taxa_antecipacao_param_tipo_transacao}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ParametroProdutoResponse**](ParametroProdutoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **efetivarAntecipacaoUsingPOST**
> \br.com.conductor.pier.api.v2.model\AntecipacaoResponse efetivarAntecipacaoUsingPOST($id_conta, $id, $quantidade_parcelas, $complemento)

{{{compra_antecipavel_resource_efetivar_antecipacao}}}

{{{compra_antecipavel_resource_efetivar_antecipacao_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagantecipacaoApi();
$id_conta = 789; // int | {{{compra_antecipavel_resource_efetivar_antecipacao_param_id_conta}}}
$id = 789; // int | {{{compra_antecipavel_resource_efetivar_antecipacao_param_id_compra}}}
$quantidade_parcelas = 789; // int | {{{compra_antecipavel_resource_efetivar_antecipacao_param_quantidade_parcelas}}}
$complemento = "complemento_example"; // string | {{{compra_antecipavel_resource_efetivar_antecipacao_param_complemento}}}

try { 
    $result = $api_instance->efetivarAntecipacaoUsingPOST($id_conta, $id, $quantidade_parcelas, $complemento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagantecipacaoApi->efetivarAntecipacaoUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_conta** | **int**| {{{compra_antecipavel_resource_efetivar_antecipacao_param_id_conta}}} | 
 **id** | **int**| {{{compra_antecipavel_resource_efetivar_antecipacao_param_id_compra}}} | 
 **quantidade_parcelas** | **int**| {{{compra_antecipavel_resource_efetivar_antecipacao_param_quantidade_parcelas}}} | 
 **complemento** | **string**| {{{compra_antecipavel_resource_efetivar_antecipacao_param_complemento}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\AntecipacaoResponse**](AntecipacaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **efetivarAntecipacoesUsingPOST**
> \br.com.conductor.pier.api.v2.model\AntecipacaoResponse efetivarAntecipacoesUsingPOST($id_conta, $complemento)

{{{compra_antecipavel_resource_efetivar_antecipacoes}}}

{{{compra_antecipavel_resource_efetivar_antecipacoes_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagantecipacaoApi();
$id_conta = 789; // int | {{{compra_antecipavel_resource_efetivar_antecipacoes_param_id_conta}}}
$complemento = "complemento_example"; // string | {{{compra_antecipavel_resource_efetivar_antecipacoes_param_complemento}}}

try { 
    $result = $api_instance->efetivarAntecipacoesUsingPOST($id_conta, $complemento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagantecipacaoApi->efetivarAntecipacoesUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_conta** | **int**| {{{compra_antecipavel_resource_efetivar_antecipacoes_param_id_conta}}} | 
 **complemento** | **string**| {{{compra_antecipavel_resource_efetivar_antecipacoes_param_complemento}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\AntecipacaoResponse**](AntecipacaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET13**
> \br.com.conductor.pier.api.v2.model\PageCompraResponse listarUsingGET13($id_conta, $sort, $page, $limit, $id_compra, $parcelada, $juros, $tipo_origem_transacao)

{{{compra_antecipavel_resource_listar}}}

{{{compra_antecipavel_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagantecipacaoApi();
$id_conta = 789; // int | {{{compra_d_t_o_id_conta_value}}}
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id_compra = 789; // int | {{{compra_d_t_o_id_compra_value}}}
$parcelada = true; // bool | {{{compra_d_t_o_parcelada_value}}}
$juros = true; // bool | {{{compra_d_t_o_juros_value}}}
$tipo_origem_transacao = "tipo_origem_transacao_example"; // string | {{{compra_d_t_o_tipo_origem_transacao_value}}}

try { 
    $result = $api_instance->listarUsingGET13($id_conta, $sort, $page, $limit, $id_compra, $parcelada, $juros, $tipo_origem_transacao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagantecipacaoApi->listarUsingGET13: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_conta** | **int**| {{{compra_d_t_o_id_conta_value}}} | 
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id_compra** | **int**| {{{compra_d_t_o_id_compra_value}}} | [optional] 
 **parcelada** | **bool**| {{{compra_d_t_o_parcelada_value}}} | [optional] 
 **juros** | **bool**| {{{compra_d_t_o_juros_value}}} | [optional] 
 **tipo_origem_transacao** | **string**| {{{compra_d_t_o_tipo_origem_transacao_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageCompraResponse**](PageCompraResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **simularAntecipacaoUsingGET**
> \br.com.conductor.pier.api.v2.model\AntecipacaoSimuladaResponse simularAntecipacaoUsingGET($id_conta, $id, $complemento)

{{{compra_antecipavel_resource_simular_antecipacao}}}

{{{compra_antecipavel_resource_simular_antecipacao_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagantecipacaoApi();
$id_conta = 789; // int | {{{compra_antecipavel_resource_simular_antecipacao_param_id_conta}}}
$id = 789; // int | {{{compra_antecipavel_resource_simular_antecipacao_param_id_evento}}}
$complemento = "complemento_example"; // string | {{{compra_antecipavel_resource_simular_antecipacao_param_complemento}}}

try { 
    $result = $api_instance->simularAntecipacaoUsingGET($id_conta, $id, $complemento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagantecipacaoApi->simularAntecipacaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_conta** | **int**| {{{compra_antecipavel_resource_simular_antecipacao_param_id_conta}}} | 
 **id** | **int**| {{{compra_antecipavel_resource_simular_antecipacao_param_id_evento}}} | 
 **complemento** | **string**| {{{compra_antecipavel_resource_simular_antecipacao_param_complemento}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\AntecipacaoSimuladaResponse**](AntecipacaoSimuladaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **simularAntecipacoesUsingGET**
> \br.com.conductor.pier.api.v2.model\AntecipacaoSimuladaLoteResponse simularAntecipacoesUsingGET($id_conta, $complemento)

{{{compra_antecipavel_resource_simular_antecipacoes}}}

{{{compra_antecipavel_resource_simular_antecipacoes_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagantecipacaoApi();
$id_conta = 789; // int | {{{compra_antecipavel_resource_simular_antecipacoes_param_id_conta}}}
$complemento = "complemento_example"; // string | {{{compra_antecipavel_resource_simular_antecipacoes_param_complemento}}}

try { 
    $result = $api_instance->simularAntecipacoesUsingGET($id_conta, $complemento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagantecipacaoApi->simularAntecipacoesUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_conta** | **int**| {{{compra_antecipavel_resource_simular_antecipacoes_param_id_conta}}} | 
 **complemento** | **string**| {{{compra_antecipavel_resource_simular_antecipacoes_param_complemento}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\AntecipacaoSimuladaLoteResponse**](AntecipacaoSimuladaLoteResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

