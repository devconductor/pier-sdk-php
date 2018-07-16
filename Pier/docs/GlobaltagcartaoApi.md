# br.com.conductor.pier.api.v2.invoker\GlobaltagcartaoApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarAlterarSenhaUsingPUT**](GlobaltagcartaoApi.md#alterarAlterarSenhaUsingPUT) | **PUT** /api/cartoes/{id}/alterar-senha | {{{cartao_resource_alterar_alterar_senha}}}
[**alterarEstagioUsingPOST**](GlobaltagcartaoApi.md#alterarEstagioUsingPOST) | **POST** /api/cartoes/{id}/alterar-estagio | {{{cartao_resource_alterar_estagio}}}
[**alterarStatusImpressaoUsingPUT**](GlobaltagcartaoApi.md#alterarStatusImpressaoUsingPUT) | **PUT** /api/cartoes/{id}/alterar-status-impressao | {{{cartao_resource_alterar_status_impressao}}}
[**atribuirPessoaUsingPUT**](GlobaltagcartaoApi.md#atribuirPessoaUsingPUT) | **PUT** /api/cartoes/{id}/atribuir-titular | {{{cartao_resource_atribuir_pessoa}}}
[**bloquearUsingPOST**](GlobaltagcartaoApi.md#bloquearUsingPOST) | **POST** /api/cartoes/{id}/bloquear | {{{cartao_resource_bloquear}}}
[**cadastrarAlterarSenhaUsingPOST**](GlobaltagcartaoApi.md#cadastrarAlterarSenhaUsingPOST) | **POST** /api/cartoes/{id}/cadastrar-senha | {{{cartao_resource_cadastrar_alterar_senha}}}
[**cancelarUsingPOST**](GlobaltagcartaoApi.md#cancelarUsingPOST) | **POST** /api/cartoes/{id}/cancelar | {{{cartao_resource_cancelar}}}
[**consultarCartaoImpressaoUsingGET**](GlobaltagcartaoApi.md#consultarCartaoImpressaoUsingGET) | **GET** /api/cartoes/{id}/consultar-dados-impressao | {{{cartao_resource_consultar_cartao_impressao}}}
[**consultarDadosReaisCartaoUsingGET**](GlobaltagcartaoApi.md#consultarDadosReaisCartaoUsingGET) | **GET** /api/cartoes/{id}/consultar-dados-reais | {{{cartao_resource_consultar_dados_reais_cartao}}}
[**consultarLimiteDisponibilidadeUsingGET**](GlobaltagcartaoApi.md#consultarLimiteDisponibilidadeUsingGET) | **GET** /api/cartoes/{id}/limites-disponibilidades | {{{cartao_resource_consultar_limite_disponibilidade}}}
[**consultarLotesCartoesPrePagosUsingGET**](GlobaltagcartaoApi.md#consultarLotesCartoesPrePagosUsingGET) | **GET** /api/cartoes/lotes-cartoes-pre-pagos/{id} | {{{cartao_resource_consultar_lotes_cartoes_pre_pagos}}}
[**consultarPortadorUsingGET**](GlobaltagcartaoApi.md#consultarPortadorUsingGET) | **GET** /api/cartoes/{id}/portadores | {{{cartao_resource_consultar_portador}}}
[**consultarUsingGET10**](GlobaltagcartaoApi.md#consultarUsingGET10) | **GET** /api/cartoes/{id} | {{{cartao_resource_consultar}}}
[**desbloquearSenhaIncorretaUsingPOST**](GlobaltagcartaoApi.md#desbloquearSenhaIncorretaUsingPOST) | **POST** /api/cartoes/{id}/desbloquear-senha-incorreta | {{{cartao_resource_desbloquear_senha_incorreta}}}
[**desbloquearUsingPOST**](GlobaltagcartaoApi.md#desbloquearUsingPOST) | **POST** /api/cartoes/{id}/desbloquear | {{{cartao_resource_desbloquear}}}
[**gerarLotesCartoesPrePagosUsingPOST**](GlobaltagcartaoApi.md#gerarLotesCartoesPrePagosUsingPOST) | **POST** /api/cartoes/lotes-cartoes-pre-pagos | {{{cartao_resource_gerar_lotes_cartoes_pre_pagos}}}
[**gerarNovaViaCartaoMultiAppUsingPOST**](GlobaltagcartaoApi.md#gerarNovaViaCartaoMultiAppUsingPOST) | **POST** /api/cartoes/{id}/gerar-nova-via-multiplo | {{{cartao_resource_gerar_nova_via_multiplo}}}
[**gerarNovaViaUsingPOST**](GlobaltagcartaoApi.md#gerarNovaViaUsingPOST) | **POST** /api/cartoes/{id}/gerar-nova-via | {{{cartao_resource_gerar_nova_via}}}
[**lancarTarifaSegundaViaUsingPOST**](GlobaltagcartaoApi.md#lancarTarifaSegundaViaUsingPOST) | **POST** /api/cartoes/{id}/lancar-tarifa-reemissao | {{{cartao_resource_lancar_tarifa_segunda_via}}}
[**listarLotesCartoesPrePagosUsingGET**](GlobaltagcartaoApi.md#listarLotesCartoesPrePagosUsingGET) | **GET** /api/cartoes/lotes-cartoes-pre-pagos | {{{cartao_resource_listar_lotes_cartoes_pre_pagos}}}
[**listarUsingGET11**](GlobaltagcartaoApi.md#listarUsingGET11) | **GET** /api/cartoes | {{{cartao_resource_listar}}}
[**reativarUsingPOST**](GlobaltagcartaoApi.md#reativarUsingPOST) | **POST** /api/cartoes/{id}/reativar | {{{cartao_resource_reativar}}}
[**validarCVVUsingPOST**](GlobaltagcartaoApi.md#validarCVVUsingPOST) | **POST** /api/cartoes/{id}/validar-cvv | {{{cartao_resource_validar_c_v_v}}}
[**validarDadosImpressosBandeiradoUsingGET**](GlobaltagcartaoApi.md#validarDadosImpressosBandeiradoUsingGET) | **GET** /api/cartoes/validar-dados-impressos-bandeirados | {{{cartao_resource_validar_dados_impressos_bandeirado}}}
[**validarDadosImpressosNaoBandeiradoUsingGET**](GlobaltagcartaoApi.md#validarDadosImpressosNaoBandeiradoUsingGET) | **GET** /api/cartoes/validar-dados-impressos-nao-bandeirados | {{{cartao_resource_validar_dados_impressos_nao_bandeirado}}}
[**validarDe55CartaoMastercardUsingGET**](GlobaltagcartaoApi.md#validarDe55CartaoMastercardUsingGET) | **GET** /api/cartoes/validar-de55-mastercard | {{{cartao_resource_validar_de55_cartao_mastercard}}}
[**validarSenhaUsingGET**](GlobaltagcartaoApi.md#validarSenhaUsingGET) | **GET** /api/cartoes/{id}/validar-senha | {{{cartao_resource_validar_senha}}}
[**validarTarjaUsingGET**](GlobaltagcartaoApi.md#validarTarjaUsingGET) | **GET** /api/cartoes/validar-tarja | {{{cartao_resource_validar_tarja}}}


# **alterarAlterarSenhaUsingPUT**
> string alterarAlterarSenhaUsingPUT($id, $senha, $authorization)

{{{cartao_resource_alterar_alterar_senha}}}

{{{cartao_resource_alterar_alterar_senha_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcartaoApi();
$id = 789; // int | {{{cartao_resource_alterar_alterar_senha_param_id}}}
$senha = "senha_example"; // string | {{{cartao_resource_alterar_alterar_senha_param_nova_senha}}}
$authorization = "authorization_example"; // string | Authorization

try { 
    $result = $api_instance->alterarAlterarSenhaUsingPUT($id, $senha, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcartaoApi->alterarAlterarSenhaUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{cartao_resource_alterar_alterar_senha_param_id}}} | 
 **senha** | **string**| {{{cartao_resource_alterar_alterar_senha_param_nova_senha}}} | 
 **authorization** | **string**| Authorization | [optional] 

### Return type

**string**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarEstagioUsingPOST**
> \br.com.conductor.pier.api.v2.model\CartaoResponse alterarEstagioUsingPOST($id, $update, $authorization)

{{{cartao_resource_alterar_estagio}}}

{{{cartao_resource_alterar_estagio_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcartaoApi();
$id = 789; // int | {{{cartao_resource_alterar_estagio_param_id}}}
$update = new \br.com.conductor.pier.api.v2.model\EstagioCartaoUpdate_(); // \br.com.conductor.pier.api.v2.model\EstagioCartaoUpdate_ | {{{cartao_resource_alterar_estagio_param_id_estagio_cartao}}}
$authorization = "authorization_example"; // string | Authorization

try { 
    $result = $api_instance->alterarEstagioUsingPOST($id, $update, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcartaoApi->alterarEstagioUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{cartao_resource_alterar_estagio_param_id}}} | 
 **update** | [**\br.com.conductor.pier.api.v2.model\EstagioCartaoUpdate_**](\br.com.conductor.pier.api.v2.model\EstagioCartaoUpdate_.md)| {{{cartao_resource_alterar_estagio_param_id_estagio_cartao}}} | 
 **authorization** | **string**| Authorization | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\CartaoResponse**](CartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarStatusImpressaoUsingPUT**
> \br.com.conductor.pier.api.v2.model\HistoricoImpressaoCartaoResponse alterarStatusImpressaoUsingPUT($id, $id_status_impressao, $authorization)

{{{cartao_resource_alterar_status_impressao}}}

{{{cartao_resource_alterar_status_impressao_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcartaoApi();
$id = 789; // int | {{{cartao_resource_alterar_status_impressao_param_id}}}
$id_status_impressao = 789; // int | {{{cartao_resource_alterar_status_impressao_param_id_status_impressao}}}
$authorization = "authorization_example"; // string | Authorization

try { 
    $result = $api_instance->alterarStatusImpressaoUsingPUT($id, $id_status_impressao, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcartaoApi->alterarStatusImpressaoUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{cartao_resource_alterar_status_impressao_param_id}}} | 
 **id_status_impressao** | **int**| {{{cartao_resource_alterar_status_impressao_param_id_status_impressao}}} | 
 **authorization** | **string**| Authorization | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\HistoricoImpressaoCartaoResponse**](HistoricoImpressaoCartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **atribuirPessoaUsingPUT**
> \br.com.conductor.pier.api.v2.model\CartaoResponse atribuirPessoaUsingPUT($id, $id_pessoa, $authorization)

{{{cartao_resource_atribuir_pessoa}}}

{{{cartao_resource_atribuir_pessoa_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcartaoApi();
$id = 789; // int | {{{cartao_resource_atribuir_pessoa_param_id_cartao}}}
$id_pessoa = 789; // int | {{{cartao_resource_atribuir_pessoa_param_id_pessoa}}}
$authorization = "authorization_example"; // string | Authorization

try { 
    $result = $api_instance->atribuirPessoaUsingPUT($id, $id_pessoa, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcartaoApi->atribuirPessoaUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{cartao_resource_atribuir_pessoa_param_id_cartao}}} | 
 **id_pessoa** | **int**| {{{cartao_resource_atribuir_pessoa_param_id_pessoa}}} | 
 **authorization** | **string**| Authorization | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\CartaoResponse**](CartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **bloquearUsingPOST**
> \br.com.conductor.pier.api.v2.model\CartaoResponse bloquearUsingPOST($id, $id_status, $observacao, $authorization)

{{{cartao_resource_bloquear}}}

{{{cartao_resource_bloquear_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcartaoApi();
$id = 789; // int | {{{cartao_resource_bloquear_param_id}}}
$id_status = 789; // int | {{{cartao_resource_bloquear_param_id_status}}}
$observacao = "observacao_example"; // string | {{{cartao_resource_bloquear_param_observacao}}}
$authorization = "authorization_example"; // string | Authorization

try { 
    $result = $api_instance->bloquearUsingPOST($id, $id_status, $observacao, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcartaoApi->bloquearUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{cartao_resource_bloquear_param_id}}} | 
 **id_status** | **int**| {{{cartao_resource_bloquear_param_id_status}}} | 
 **observacao** | **string**| {{{cartao_resource_bloquear_param_observacao}}} | 
 **authorization** | **string**| Authorization | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\CartaoResponse**](CartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **cadastrarAlterarSenhaUsingPOST**
> string cadastrarAlterarSenhaUsingPOST($id, $senha, $authorization)

{{{cartao_resource_cadastrar_alterar_senha}}}

{{{cartao_resource_cadastrar_alterar_senha_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcartaoApi();
$id = 789; // int | {{{cartao_resource_cadastrar_alterar_senha_param_id}}}
$senha = "senha_example"; // string | {{{cartao_resource_cadastrar_alterar_senha_param_nova_senha}}}
$authorization = "authorization_example"; // string | Authorization

try { 
    $result = $api_instance->cadastrarAlterarSenhaUsingPOST($id, $senha, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcartaoApi->cadastrarAlterarSenhaUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{cartao_resource_cadastrar_alterar_senha_param_id}}} | 
 **senha** | **string**| {{{cartao_resource_cadastrar_alterar_senha_param_nova_senha}}} | 
 **authorization** | **string**| Authorization | [optional] 

### Return type

**string**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **cancelarUsingPOST**
> \br.com.conductor.pier.api.v2.model\CartaoResponse cancelarUsingPOST($id, $id_status, $observacao, $authorization)

{{{cartao_resource_cancelar}}}

{{{cartao_resource_cancelar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcartaoApi();
$id = 789; // int | {{{cartao_resource_cancelar_param_id}}}
$id_status = 789; // int | {{{cartao_resource_cancelar_param_id_status}}}
$observacao = "observacao_example"; // string | {{{cartao_resource_cancelar_param_observacao}}}
$authorization = "authorization_example"; // string | Authorization

try { 
    $result = $api_instance->cancelarUsingPOST($id, $id_status, $observacao, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcartaoApi->cancelarUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{cartao_resource_cancelar_param_id}}} | 
 **id_status** | **int**| {{{cartao_resource_cancelar_param_id_status}}} | 
 **observacao** | **string**| {{{cartao_resource_cancelar_param_observacao}}} | 
 **authorization** | **string**| Authorization | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\CartaoResponse**](CartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarCartaoImpressaoUsingGET**
> \br.com.conductor.pier.api.v2.model\DadosCartaoImpressaoResponse consultarCartaoImpressaoUsingGET($id, $authorization)

{{{cartao_resource_consultar_cartao_impressao}}}

{{{cartao_resource_consultar_cartao_impressao_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcartaoApi();
$id = 789; // int | {{{cartao_resource_consultar_cartao_impressao_param_id}}}
$authorization = "authorization_example"; // string | Authorization

try { 
    $result = $api_instance->consultarCartaoImpressaoUsingGET($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcartaoApi->consultarCartaoImpressaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{cartao_resource_consultar_cartao_impressao_param_id}}} | 
 **authorization** | **string**| Authorization | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\DadosCartaoImpressaoResponse**](DadosCartaoImpressaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarDadosReaisCartaoUsingGET**
> \br.com.conductor.pier.api.v2.model\DadosCartaoResponse consultarDadosReaisCartaoUsingGET($id, $authorization)

{{{cartao_resource_consultar_dados_reais_cartao}}}

{{{cartao_resource_consultar_dados_reais_cartao_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcartaoApi();
$id = 789; // int | id
$authorization = "authorization_example"; // string | Authorization

try { 
    $result = $api_instance->consultarDadosReaisCartaoUsingGET($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcartaoApi->consultarDadosReaisCartaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id | 
 **authorization** | **string**| Authorization | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\DadosCartaoResponse**](DadosCartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarLimiteDisponibilidadeUsingGET**
> \br.com.conductor.pier.api.v2.model\LimiteDisponibilidadeResponse consultarLimiteDisponibilidadeUsingGET($id, $authorization)

{{{cartao_resource_consultar_limite_disponibilidade}}}

{{{cartao_resource_consultar_limite_disponibilidade_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcartaoApi();
$id = 789; // int | {{{cartao_resource_consultar_limite_disponibilidade_param_id}}}
$authorization = "authorization_example"; // string | Authorization

try { 
    $result = $api_instance->consultarLimiteDisponibilidadeUsingGET($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcartaoApi->consultarLimiteDisponibilidadeUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{cartao_resource_consultar_limite_disponibilidade_param_id}}} | 
 **authorization** | **string**| Authorization | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\LimiteDisponibilidadeResponse**](LimiteDisponibilidadeResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarLotesCartoesPrePagosUsingGET**
> \br.com.conductor.pier.api.v2.model\LoteCartoesPrePagosResponse consultarLotesCartoesPrePagosUsingGET($id, $authorization)

{{{cartao_resource_consultar_lotes_cartoes_pre_pagos}}}

{{{cartao_resource_consultar_lotes_cartoes_pre_pagos_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcartaoApi();
$id = 789; // int | {{{cartao_resource_consultar_lotes_cartoes_pre_pagos_param_id_lote}}}
$authorization = "authorization_example"; // string | Authorization

try { 
    $result = $api_instance->consultarLotesCartoesPrePagosUsingGET($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcartaoApi->consultarLotesCartoesPrePagosUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{cartao_resource_consultar_lotes_cartoes_pre_pagos_param_id_lote}}} | 
 **authorization** | **string**| Authorization | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\LoteCartoesPrePagosResponse**](LoteCartoesPrePagosResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarPortadorUsingGET**
> \br.com.conductor.pier.api.v2.model\PortadorResponse consultarPortadorUsingGET($id, $authorization)

{{{cartao_resource_consultar_portador}}}

{{{cartao_resource_consultar_portador_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcartaoApi();
$id = 789; // int | {{{cartao_resource_consultar_portador_param_id}}}
$authorization = "authorization_example"; // string | Authorization

try { 
    $result = $api_instance->consultarPortadorUsingGET($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcartaoApi->consultarPortadorUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{cartao_resource_consultar_portador_param_id}}} | 
 **authorization** | **string**| Authorization | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PortadorResponse**](PortadorResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET10**
> \br.com.conductor.pier.api.v2.model\CartaoDetalheResponse consultarUsingGET10($id, $authorization)

{{{cartao_resource_consultar}}}

{{{cartao_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcartaoApi();
$id = 789; // int | {{{cartao_resource_consultar_param_id}}}
$authorization = "authorization_example"; // string | Authorization

try { 
    $result = $api_instance->consultarUsingGET10($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcartaoApi->consultarUsingGET10: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{cartao_resource_consultar_param_id}}} | 
 **authorization** | **string**| Authorization | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\CartaoDetalheResponse**](CartaoDetalheResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **desbloquearSenhaIncorretaUsingPOST**
> \br.com.conductor.pier.api.v2.model\CartaoResponse desbloquearSenhaIncorretaUsingPOST($id, $authorization)

{{{cartao_resource_desbloquear_senha_incorreta}}}

{{{cartao_resource_desbloquear_senha_incorreta_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcartaoApi();
$id = 789; // int | {{{cartao_resource_desbloquear_senha_incorreta_param_id}}}
$authorization = "authorization_example"; // string | Authorization

try { 
    $result = $api_instance->desbloquearSenhaIncorretaUsingPOST($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcartaoApi->desbloquearSenhaIncorretaUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{cartao_resource_desbloquear_senha_incorreta_param_id}}} | 
 **authorization** | **string**| Authorization | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\CartaoResponse**](CartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **desbloquearUsingPOST**
> \br.com.conductor.pier.api.v2.model\CartaoResponse desbloquearUsingPOST($id, $authorization)

{{{cartao_resource_desbloquear}}}

{{{cartao_resource_desbloquear_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcartaoApi();
$id = 789; // int | {{{cartao_resource_desbloquear_param_id}}}
$authorization = "authorization_example"; // string | Authorization

try { 
    $result = $api_instance->desbloquearUsingPOST($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcartaoApi->desbloquearUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{cartao_resource_desbloquear_param_id}}} | 
 **authorization** | **string**| Authorization | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\CartaoResponse**](CartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **gerarLotesCartoesPrePagosUsingPOST**
> \br.com.conductor.pier.api.v2.model\LoteCartoesPrePagosResponse gerarLotesCartoesPrePagosUsingPOST($authorization, $id_origem_comercial, $id_produto, $id_tipo_cartao, $id_imagem, $id_endereco, $quantidade_cartoes, $identificador_externo)

{{{cartao_resource_gerar_lotes_cartoes_pre_pagos}}}

{{{cartao_resource_gerar_lotes_cartoes_pre_pagos_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcartaoApi();
$authorization = "authorization_example"; // string | Authorization
$id_origem_comercial = 789; // int | {{{lote_cartoes_pre_pagos_persist_id_origem_comercial_value}}}
$id_produto = 789; // int | {{{lote_cartoes_pre_pagos_persist_id_produto_value}}}
$id_tipo_cartao = 789; // int | {{{lote_cartoes_pre_pagos_persist_id_tipo_cartao_value}}}
$id_imagem = 789; // int | {{{lote_cartoes_pre_pagos_persist_id_imagem_value}}}
$id_endereco = 789; // int | {{{lote_cartoes_pre_pagos_persist_id_endereco_value}}}
$quantidade_cartoes = 56; // int | {{{lote_cartoes_pre_pagos_persist_quantidade_cartoes_value}}}
$identificador_externo = "identificador_externo_example"; // string | {{{lote_cartoes_pre_pagos_persist_identificador_externo_value}}}

try { 
    $result = $api_instance->gerarLotesCartoesPrePagosUsingPOST($authorization, $id_origem_comercial, $id_produto, $id_tipo_cartao, $id_imagem, $id_endereco, $quantidade_cartoes, $identificador_externo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcartaoApi->gerarLotesCartoesPrePagosUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization | [optional] 
 **id_origem_comercial** | **int**| {{{lote_cartoes_pre_pagos_persist_id_origem_comercial_value}}} | [optional] 
 **id_produto** | **int**| {{{lote_cartoes_pre_pagos_persist_id_produto_value}}} | [optional] 
 **id_tipo_cartao** | **int**| {{{lote_cartoes_pre_pagos_persist_id_tipo_cartao_value}}} | [optional] 
 **id_imagem** | **int**| {{{lote_cartoes_pre_pagos_persist_id_imagem_value}}} | [optional] 
 **id_endereco** | **int**| {{{lote_cartoes_pre_pagos_persist_id_endereco_value}}} | [optional] 
 **quantidade_cartoes** | **int**| {{{lote_cartoes_pre_pagos_persist_quantidade_cartoes_value}}} | [optional] 
 **identificador_externo** | **string**| {{{lote_cartoes_pre_pagos_persist_identificador_externo_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\LoteCartoesPrePagosResponse**](LoteCartoesPrePagosResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **gerarNovaViaCartaoMultiAppUsingPOST**
> \br.com.conductor.pier.api.v2.model\CartaoMultiAppImpressaoResponse gerarNovaViaCartaoMultiAppUsingPOST($id, $authorization)

{{{cartao_resource_gerar_nova_via_multiplo}}}

{{{cartao_resource_gerar_nova_via_multiplo_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcartaoApi();
$id = 789; // int | {{{cartao_resource_gerar_nova_via_param_id_cartao}}}
$authorization = "authorization_example"; // string | Authorization

try { 
    $result = $api_instance->gerarNovaViaCartaoMultiAppUsingPOST($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcartaoApi->gerarNovaViaCartaoMultiAppUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{cartao_resource_gerar_nova_via_param_id_cartao}}} | 
 **authorization** | **string**| Authorization | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\CartaoMultiAppImpressaoResponse**](CartaoMultiAppImpressaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **gerarNovaViaUsingPOST**
> \br.com.conductor.pier.api.v2.model\CartaoResponse gerarNovaViaUsingPOST($id, $authorization)

{{{cartao_resource_gerar_nova_via}}}

{{{cartao_resource_gerar_nova_via_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcartaoApi();
$id = 789; // int | {{{cartao_resource_gerar_nova_via_param_id_cartao}}}
$authorization = "authorization_example"; // string | Authorization

try { 
    $result = $api_instance->gerarNovaViaUsingPOST($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcartaoApi->gerarNovaViaUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{cartao_resource_gerar_nova_via_param_id_cartao}}} | 
 **authorization** | **string**| Authorization | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\CartaoResponse**](CartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **lancarTarifaSegundaViaUsingPOST**
> object lancarTarifaSegundaViaUsingPOST($id, $authorization)

{{{cartao_resource_lancar_tarifa_segunda_via}}}

{{{cartao_resource_lancar_tarifa_segunda_via_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcartaoApi();
$id = 789; // int | {{{cartao_resource_lancar_tarifa_segunda_via_param_id}}}
$authorization = "authorization_example"; // string | Authorization

try { 
    $result = $api_instance->lancarTarifaSegundaViaUsingPOST($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcartaoApi->lancarTarifaSegundaViaUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{cartao_resource_lancar_tarifa_segunda_via_param_id}}} | 
 **authorization** | **string**| Authorization | [optional] 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarLotesCartoesPrePagosUsingGET**
> \br.com.conductor.pier.api.v2.model\PageLoteCartoesPrePagosResponse listarLotesCartoesPrePagosUsingGET($authorization, $sort, $page, $limit, $id_origem_comercial, $id_produto, $id_tipo_cartao, $id_imagem, $id_endereco, $quantidade_cartoes, $data_cadastro, $usuario_cadastro, $status_processamento, $identificador_externo)

{{{cartao_resource_listar_lotes_cartoes_pre_pagos}}}

{{{cartao_resource_listar_lotes_cartoes_pre_pagos_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcartaoApi();
$authorization = "authorization_example"; // string | Authorization
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id_origem_comercial = 789; // int | {{{lote_cartoes_pre_pagos_request_id_origem_comercial_value}}}
$id_produto = 789; // int | {{{lote_cartoes_pre_pagos_request_id_produto_value}}}
$id_tipo_cartao = 789; // int | {{{lote_cartoes_pre_pagos_request_id_tipo_cartao_value}}}
$id_imagem = 789; // int | {{{lote_cartoes_pre_pagos_request_id_imagem_value}}}
$id_endereco = 789; // int | {{{lote_cartoes_pre_pagos_request_id_endereco_value}}}
$quantidade_cartoes = 56; // int | {{{lote_cartoes_pre_pagos_request_quantidade_cartoes_value}}}
$data_cadastro = "data_cadastro_example"; // string | {{{lote_cartoes_pre_pagos_request_data_cadastro_value}}}
$usuario_cadastro = "usuario_cadastro_example"; // string | {{{lote_cartoes_pre_pagos_request_usuario_cadastro_value}}}
$status_processamento = 56; // int | {{{lote_cartoes_pre_pagos_request_status_processamento_value}}}
$identificador_externo = "identificador_externo_example"; // string | {{{lote_cartoes_pre_pagos_request_identificador_externo_value}}}

try { 
    $result = $api_instance->listarLotesCartoesPrePagosUsingGET($authorization, $sort, $page, $limit, $id_origem_comercial, $id_produto, $id_tipo_cartao, $id_imagem, $id_endereco, $quantidade_cartoes, $data_cadastro, $usuario_cadastro, $status_processamento, $identificador_externo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcartaoApi->listarLotesCartoesPrePagosUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization | [optional] 
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id_origem_comercial** | **int**| {{{lote_cartoes_pre_pagos_request_id_origem_comercial_value}}} | [optional] 
 **id_produto** | **int**| {{{lote_cartoes_pre_pagos_request_id_produto_value}}} | [optional] 
 **id_tipo_cartao** | **int**| {{{lote_cartoes_pre_pagos_request_id_tipo_cartao_value}}} | [optional] 
 **id_imagem** | **int**| {{{lote_cartoes_pre_pagos_request_id_imagem_value}}} | [optional] 
 **id_endereco** | **int**| {{{lote_cartoes_pre_pagos_request_id_endereco_value}}} | [optional] 
 **quantidade_cartoes** | **int**| {{{lote_cartoes_pre_pagos_request_quantidade_cartoes_value}}} | [optional] 
 **data_cadastro** | **string**| {{{lote_cartoes_pre_pagos_request_data_cadastro_value}}} | [optional] 
 **usuario_cadastro** | **string**| {{{lote_cartoes_pre_pagos_request_usuario_cadastro_value}}} | [optional] 
 **status_processamento** | **int**| {{{lote_cartoes_pre_pagos_request_status_processamento_value}}} | [optional] 
 **identificador_externo** | **string**| {{{lote_cartoes_pre_pagos_request_identificador_externo_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageLoteCartoesPrePagosResponse**](PageLoteCartoesPrePagosResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET11**
> \br.com.conductor.pier.api.v2.model\PageCartaoResponse listarUsingGET11($authorization, $sort, $page, $limit, $id_status_cartao, $id_estagio_cartao, $id_conta, $id_pessoa, $id_produto, $tipo_portador, $numero_cartao, $nome_impresso, $data_geracao, $data_status_cartao, $data_estagio_cartao, $data_validade, $data_impressao, $arquivo_impressao, $flag_impressao_origem_comercial, $flag_provisorio, $codigo_desbloqueio, $sequencial_cartao)

{{{cartao_resource_listar}}}

{{{cartao_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcartaoApi();
$authorization = "authorization_example"; // string | Authorization
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id_status_cartao = 789; // int | {{{cartao_request_id_status_cartao_value}}}
$id_estagio_cartao = 789; // int | {{{cartao_request_id_estagio_cartao_value}}}
$id_conta = 789; // int | {{{cartao_request_id_conta_value}}}
$id_pessoa = 789; // int | {{{cartao_request_id_pessoa_value}}}
$id_produto = 789; // int | {{{cartao_request_id_produto_value}}}
$tipo_portador = "tipo_portador_example"; // string | {{{cartao_request_tipo_portador_value}}}
$numero_cartao = "numero_cartao_example"; // string | {{{cartao_request_numero_cartao_value}}}
$nome_impresso = "nome_impresso_example"; // string | {{{cartao_request_nome_impresso_value}}}
$data_geracao = "data_geracao_example"; // string | {{{cartao_request_data_geracao_value}}}
$data_status_cartao = "data_status_cartao_example"; // string | {{{cartao_request_data_status_cartao_value}}}
$data_estagio_cartao = "data_estagio_cartao_example"; // string | {{{cartao_request_data_estagio_cartao_value}}}
$data_validade = "data_validade_example"; // string | {{{cartao_request_data_validade_value}}}
$data_impressao = "data_impressao_example"; // string | {{{cartao_request_data_impressao_value}}}
$arquivo_impressao = "arquivo_impressao_example"; // string | {{{cartao_request_arquivo_impressao_value}}}
$flag_impressao_origem_comercial = 56; // int | {{{cartao_request_flag_impressao_origem_comercial_value}}}
$flag_provisorio = 56; // int | {{{cartao_request_flag_provisorio_value}}}
$codigo_desbloqueio = "codigo_desbloqueio_example"; // string | {{{cartao_request_codigo_desbloqueio_value}}}
$sequencial_cartao = 56; // int | {{{cartao_request_sequencial_cartao_value}}}

try { 
    $result = $api_instance->listarUsingGET11($authorization, $sort, $page, $limit, $id_status_cartao, $id_estagio_cartao, $id_conta, $id_pessoa, $id_produto, $tipo_portador, $numero_cartao, $nome_impresso, $data_geracao, $data_status_cartao, $data_estagio_cartao, $data_validade, $data_impressao, $arquivo_impressao, $flag_impressao_origem_comercial, $flag_provisorio, $codigo_desbloqueio, $sequencial_cartao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcartaoApi->listarUsingGET11: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization | [optional] 
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id_status_cartao** | **int**| {{{cartao_request_id_status_cartao_value}}} | [optional] 
 **id_estagio_cartao** | **int**| {{{cartao_request_id_estagio_cartao_value}}} | [optional] 
 **id_conta** | **int**| {{{cartao_request_id_conta_value}}} | [optional] 
 **id_pessoa** | **int**| {{{cartao_request_id_pessoa_value}}} | [optional] 
 **id_produto** | **int**| {{{cartao_request_id_produto_value}}} | [optional] 
 **tipo_portador** | **string**| {{{cartao_request_tipo_portador_value}}} | [optional] 
 **numero_cartao** | **string**| {{{cartao_request_numero_cartao_value}}} | [optional] 
 **nome_impresso** | **string**| {{{cartao_request_nome_impresso_value}}} | [optional] 
 **data_geracao** | **string**| {{{cartao_request_data_geracao_value}}} | [optional] 
 **data_status_cartao** | **string**| {{{cartao_request_data_status_cartao_value}}} | [optional] 
 **data_estagio_cartao** | **string**| {{{cartao_request_data_estagio_cartao_value}}} | [optional] 
 **data_validade** | **string**| {{{cartao_request_data_validade_value}}} | [optional] 
 **data_impressao** | **string**| {{{cartao_request_data_impressao_value}}} | [optional] 
 **arquivo_impressao** | **string**| {{{cartao_request_arquivo_impressao_value}}} | [optional] 
 **flag_impressao_origem_comercial** | **int**| {{{cartao_request_flag_impressao_origem_comercial_value}}} | [optional] 
 **flag_provisorio** | **int**| {{{cartao_request_flag_provisorio_value}}} | [optional] 
 **codigo_desbloqueio** | **string**| {{{cartao_request_codigo_desbloqueio_value}}} | [optional] 
 **sequencial_cartao** | **int**| {{{cartao_request_sequencial_cartao_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageCartaoResponse**](PageCartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **reativarUsingPOST**
> \br.com.conductor.pier.api.v2.model\CartaoResponse reativarUsingPOST($id, $authorization)

{{{cartao_resource_reativar}}}

{{{cartao_resource_reativar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcartaoApi();
$id = 789; // int | {{{cartao_resource_reativar_param_id}}}
$authorization = "authorization_example"; // string | Authorization

try { 
    $result = $api_instance->reativarUsingPOST($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcartaoApi->reativarUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{cartao_resource_reativar_param_id}}} | 
 **authorization** | **string**| Authorization | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\CartaoResponse**](CartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **validarCVVUsingPOST**
> string validarCVVUsingPOST($id, $valida_cvv, $authorization)

{{{cartao_resource_validar_c_v_v}}}

{{{cartao_resource_validar_c_v_v_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcartaoApi();
$id = 789; // int | {{{cartao_resource_validar_c_v_v_param_id}}}
$valida_cvv = new \br.com.conductor.pier.api.v2.model\ValidaCVVRequest(); // \br.com.conductor.pier.api.v2.model\ValidaCVVRequest | validaCVV
$authorization = "authorization_example"; // string | Authorization

try { 
    $result = $api_instance->validarCVVUsingPOST($id, $valida_cvv, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcartaoApi->validarCVVUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{cartao_resource_validar_c_v_v_param_id}}} | 
 **valida_cvv** | [**\br.com.conductor.pier.api.v2.model\ValidaCVVRequest**](\br.com.conductor.pier.api.v2.model\ValidaCVVRequest.md)| validaCVV | 
 **authorization** | **string**| Authorization | [optional] 

### Return type

**string**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **validarDadosImpressosBandeiradoUsingGET**
> \br.com.conductor.pier.api.v2.model\ValidaCartaoResponse validarDadosImpressosBandeiradoUsingGET($numero_cartao, $nome_portador, $data_validade, $codigo_seguranca, $authorization)

{{{cartao_resource_validar_dados_impressos_bandeirado}}}

{{{cartao_resource_validar_dados_impressos_bandeirado_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcartaoApi();
$numero_cartao = "numero_cartao_example"; // string | {{{cartao_resource_validar_dados_impressos_bandeirado_param_numero_cartao}}}
$nome_portador = "nome_portador_example"; // string | {{{cartao_resource_validar_dados_impressos_bandeirado_param_nome_portador}}}
$data_validade = "data_validade_example"; // string | {{{cartao_resource_validar_dados_impressos_bandeirado_param_data_validade}}}
$codigo_seguranca = "codigo_seguranca_example"; // string | {{{cartao_resource_validar_dados_impressos_bandeirado_param_codigo_seguranca}}}
$authorization = "authorization_example"; // string | Authorization

try { 
    $result = $api_instance->validarDadosImpressosBandeiradoUsingGET($numero_cartao, $nome_portador, $data_validade, $codigo_seguranca, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcartaoApi->validarDadosImpressosBandeiradoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **numero_cartao** | **string**| {{{cartao_resource_validar_dados_impressos_bandeirado_param_numero_cartao}}} | 
 **nome_portador** | **string**| {{{cartao_resource_validar_dados_impressos_bandeirado_param_nome_portador}}} | 
 **data_validade** | **string**| {{{cartao_resource_validar_dados_impressos_bandeirado_param_data_validade}}} | 
 **codigo_seguranca** | **string**| {{{cartao_resource_validar_dados_impressos_bandeirado_param_codigo_seguranca}}} | 
 **authorization** | **string**| Authorization | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\ValidaCartaoResponse**](ValidaCartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **validarDadosImpressosNaoBandeiradoUsingGET**
> \br.com.conductor.pier.api.v2.model\ValidaCartaoResponse validarDadosImpressosNaoBandeiradoUsingGET($numero_cartao, $nome_portador, $data_validade, $codigo_seguranca, $authorization)

{{{cartao_resource_validar_dados_impressos_nao_bandeirado}}}

{{{cartao_resource_validar_dados_impressos_nao_bandeirado_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcartaoApi();
$numero_cartao = "numero_cartao_example"; // string | {{{cartao_resource_validar_dados_impressos_nao_bandeirado_param_numero_cartao}}}
$nome_portador = "nome_portador_example"; // string | {{{cartao_resource_validar_dados_impressos_nao_bandeirado_param_nome_portador}}}
$data_validade = "data_validade_example"; // string | {{{cartao_resource_validar_dados_impressos_nao_bandeirado_param_data_validade}}}
$codigo_seguranca = "codigo_seguranca_example"; // string | {{{cartao_resource_validar_dados_impressos_nao_bandeirado_param_codigo_seguranca}}}
$authorization = "authorization_example"; // string | Authorization

try { 
    $result = $api_instance->validarDadosImpressosNaoBandeiradoUsingGET($numero_cartao, $nome_portador, $data_validade, $codigo_seguranca, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcartaoApi->validarDadosImpressosNaoBandeiradoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **numero_cartao** | **string**| {{{cartao_resource_validar_dados_impressos_nao_bandeirado_param_numero_cartao}}} | 
 **nome_portador** | **string**| {{{cartao_resource_validar_dados_impressos_nao_bandeirado_param_nome_portador}}} | 
 **data_validade** | **string**| {{{cartao_resource_validar_dados_impressos_nao_bandeirado_param_data_validade}}} | 
 **codigo_seguranca** | **string**| {{{cartao_resource_validar_dados_impressos_nao_bandeirado_param_codigo_seguranca}}} | 
 **authorization** | **string**| Authorization | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\ValidaCartaoResponse**](ValidaCartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **validarDe55CartaoMastercardUsingGET**
> \br.com.conductor.pier.api.v2.model\ValidaCartaoResponse validarDe55CartaoMastercardUsingGET($numero_cartao, $criptograma, $authorization)

{{{cartao_resource_validar_de55_cartao_mastercard}}}

{{{cartao_resource_validar_de55_cartao_mastercard_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcartaoApi();
$numero_cartao = "numero_cartao_example"; // string | {{{cartao_resource_validar_de55_cartao_mastercard_param_numero_cartao}}}
$criptograma = "criptograma_example"; // string | {{{cartao_resource_validar_de55_cartao_mastercard_param_criptograma}}}
$authorization = "authorization_example"; // string | Authorization

try { 
    $result = $api_instance->validarDe55CartaoMastercardUsingGET($numero_cartao, $criptograma, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcartaoApi->validarDe55CartaoMastercardUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **numero_cartao** | **string**| {{{cartao_resource_validar_de55_cartao_mastercard_param_numero_cartao}}} | 
 **criptograma** | **string**| {{{cartao_resource_validar_de55_cartao_mastercard_param_criptograma}}} | 
 **authorization** | **string**| Authorization | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\ValidaCartaoResponse**](ValidaCartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **validarSenhaUsingGET**
> \br.com.conductor.pier.api.v2.model\ValidaSenhaCartaoResponse validarSenhaUsingGET($id, $senha, $authorization)

{{{cartao_resource_validar_senha}}}

{{{cartao_resource_validar_senha_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcartaoApi();
$id = 789; // int | {{{cartao_resource_validar_senha_param_id}}}
$senha = "senha_example"; // string | {{{cartao_resource_validar_senha_param_senha}}}
$authorization = "authorization_example"; // string | Authorization

try { 
    $result = $api_instance->validarSenhaUsingGET($id, $senha, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcartaoApi->validarSenhaUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{cartao_resource_validar_senha_param_id}}} | 
 **senha** | **string**| {{{cartao_resource_validar_senha_param_senha}}} | 
 **authorization** | **string**| Authorization | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\ValidaSenhaCartaoResponse**](ValidaSenhaCartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **validarTarjaUsingGET**
> \br.com.conductor.pier.api.v2.model\ValidaCartaoResponse validarTarjaUsingGET($numero_cartao, $trilha1, $trilha2, $authorization)

{{{cartao_resource_validar_tarja}}}

{{{cartao_resource_validar_tarja_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagcartaoApi();
$numero_cartao = "numero_cartao_example"; // string | {{{cartao_resource_validar_tarja_param_numero_cartao}}}
$trilha1 = "trilha1_example"; // string | {{{cartao_resource_validar_tarja_param_trilha1}}}
$trilha2 = "trilha2_example"; // string | {{{cartao_resource_validar_tarja_param_trilha2}}}
$authorization = "authorization_example"; // string | Authorization

try { 
    $result = $api_instance->validarTarjaUsingGET($numero_cartao, $trilha1, $trilha2, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagcartaoApi->validarTarjaUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **numero_cartao** | **string**| {{{cartao_resource_validar_tarja_param_numero_cartao}}} | 
 **trilha1** | **string**| {{{cartao_resource_validar_tarja_param_trilha1}}} | 
 **trilha2** | **string**| {{{cartao_resource_validar_tarja_param_trilha2}}} | 
 **authorization** | **string**| Authorization | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\ValidaCartaoResponse**](ValidaCartaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

