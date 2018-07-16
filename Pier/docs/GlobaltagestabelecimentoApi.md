# br.com.conductor.pier.api.v2.invoker\GlobaltagestabelecimentoApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarOrigemComercialUsingPUT**](GlobaltagestabelecimentoApi.md#alterarOrigemComercialUsingPUT) | **PUT** /api/origens-comerciais/{id} | {{{origem_comercial_resource_alterar_origem_comercial}}}
[**alterarUsingPUT10**](GlobaltagestabelecimentoApi.md#alterarUsingPUT10) | **PUT** /api/maquinetas/{id} | {{{maquineta_resource_alterar}}}
[**alterarUsingPUT11**](GlobaltagestabelecimentoApi.md#alterarUsingPUT11) | **PUT** /api/regras-operacoes-estabelecimentos/{id} | {{{operacao_credor_resource_alterar}}}
[**alterarUsingPUT17**](GlobaltagestabelecimentoApi.md#alterarUsingPUT17) | **PUT** /api/telefones-estabelecimentos/{id} | {{{telefone_estabelecimento_resource_alterar}}}
[**alterarUsingPUT19**](GlobaltagestabelecimentoApi.md#alterarUsingPUT19) | **PUT** /api/terminais/{id} | {{{terminal_resource_alterar}}}
[**alterarUsingPUT6**](GlobaltagestabelecimentoApi.md#alterarUsingPUT6) | **PUT** /api/estabelecimentos/{id} | {{{estabelecimento_resource_alterar}}}
[**alterarUsingPUT8**](GlobaltagestabelecimentoApi.md#alterarUsingPUT8) | **PUT** /api/grupos-economicos/{id} | {{{grupo_economico_resource_alterar}}}
[**cadastrarOrigemComercialUsingPOST**](GlobaltagestabelecimentoApi.md#cadastrarOrigemComercialUsingPOST) | **POST** /api/origens-comerciais | {{{origem_comercial_resource_cadastrar_origem_comercial}}}
[**cadastrarUsingPOST3**](GlobaltagestabelecimentoApi.md#cadastrarUsingPOST3) | **POST** /api/estabelecimentos | {{{estabelecimento_resource_cadastrar}}}
[**cadastrarUsingPOST4**](GlobaltagestabelecimentoApi.md#cadastrarUsingPOST4) | **POST** /api/grupos-economicos | {{{grupo_economico_resource_cadastrar}}}
[**consultaOperacaoUsingGET**](GlobaltagestabelecimentoApi.md#consultaOperacaoUsingGET) | **GET** /api/tipos-operacoes-estabelecimentos/{id} | {{{operacao_resource_consulta_operacao}}}
[**consultarOrigemComercialUsingGET**](GlobaltagestabelecimentoApi.md#consultarOrigemComercialUsingGET) | **GET** /api/origens-comerciais/{id} | {{{origem_comercial_resource_consultar_origem_comercial}}}
[**consultarUsingGET20**](GlobaltagestabelecimentoApi.md#consultarUsingGET20) | **GET** /api/estabelecimentos/{id} | {{{estabelecimento_resource_consultar}}}
[**consultarUsingGET22**](GlobaltagestabelecimentoApi.md#consultarUsingGET22) | **GET** /api/grupos-economicos/{id} | {{{grupo_economico_resource_consultar}}}
[**consultarUsingGET24**](GlobaltagestabelecimentoApi.md#consultarUsingGET24) | **GET** /api/maquinetas/{id} | {{{maquineta_resource_consultar}}}
[**consultarUsingGET25**](GlobaltagestabelecimentoApi.md#consultarUsingGET25) | **GET** /api/regras-operacoes-estabelecimentos/{id} | {{{operacao_credor_resource_consultar}}}
[**consultarUsingGET38**](GlobaltagestabelecimentoApi.md#consultarUsingGET38) | **GET** /api/telefones-estabelecimentos/{id} | {{{telefone_estabelecimento_resource_consultar}}}
[**consultarUsingGET40**](GlobaltagestabelecimentoApi.md#consultarUsingGET40) | **GET** /api/terminais/{id} | {{{terminal_resource_consultar}}}
[**consultarUsingGET52**](GlobaltagestabelecimentoApi.md#consultarUsingGET52) | **GET** /api/adquirentes-estabelecimento/{id} | {{{vinculo_estabelecimento_adquirente_resource_consultar}}}
[**desabilitarVinculoUsingPOST**](GlobaltagestabelecimentoApi.md#desabilitarVinculoUsingPOST) | **POST** /api/adquirentes-estabelecimento/{id}/desabilitar | {{{vinculo_estabelecimento_adquirente_resource_desabilitar_vinculo}}}
[**desabilitarVinculoUsingPOST1**](GlobaltagestabelecimentoApi.md#desabilitarVinculoUsingPOST1) | **POST** /api/estabelecimentos/{id}/desabilitar-operacao | {{{vinculo_operacao_resource_desabilitar_vinculo}}}
[**habilitarVinculoUsingPOST**](GlobaltagestabelecimentoApi.md#habilitarVinculoUsingPOST) | **POST** /api/adquirentes-estabelecimento/{id}/habilitar | {{{vinculo_estabelecimento_adquirente_resource_habilitar_vinculo}}}
[**habilitarVinculoUsingPOST1**](GlobaltagestabelecimentoApi.md#habilitarVinculoUsingPOST1) | **POST** /api/estabelecimentos/{id}/habilitar-operacao | {{{vinculo_operacao_resource_habilitar_vinculo}}}
[**listaOperacaoUsingGET**](GlobaltagestabelecimentoApi.md#listaOperacaoUsingGET) | **GET** /api/tipos-operacoes-estabelecimentos | {{{operacao_resource_lista_operacao}}}
[**listarMCCUsingGET**](GlobaltagestabelecimentoApi.md#listarMCCUsingGET) | **GET** /api/mcc-estabelecimentos | {{{m_c_c_resource_listar_m_c_c}}}
[**listarOrigensComerciaisUsingGET**](GlobaltagestabelecimentoApi.md#listarOrigensComerciaisUsingGET) | **GET** /api/origens-comerciais | {{{origem_comercial_resource_listar_origens_comerciais}}}
[**listarTiposAdquirentesUsingGET**](GlobaltagestabelecimentoApi.md#listarTiposAdquirentesUsingGET) | **GET** /api/tipos-adquirentes | {{{vinculo_estabelecimento_adquirente_resource_listar_tipos_adquirentes}}}
[**listarTiposEstabelecimentosUsingGET**](GlobaltagestabelecimentoApi.md#listarTiposEstabelecimentosUsingGET) | **GET** /api/tipos-estabelecimentos | {{{tipo_estabelecimento_resource_listar_tipos_estabelecimentos}}}
[**listarTiposMaquinetasUsingGET**](GlobaltagestabelecimentoApi.md#listarTiposMaquinetasUsingGET) | **GET** /api/tipos-maquinetas | {{{maquineta_resource_listar_tipos_maquinetas}}}
[**listarTiposOrigensComerciaisUsingGET**](GlobaltagestabelecimentoApi.md#listarTiposOrigensComerciaisUsingGET) | **GET** /api/tipos-origens-comerciais | {{{tipo_origem_comercial_resource_listar_tipos_origens_comerciais}}}
[**listarTiposTerminaisUsingGET1**](GlobaltagestabelecimentoApi.md#listarTiposTerminaisUsingGET1) | **GET** /api/tipos-terminais-estabelecimento | {{{terminal_resource_listar_tipos_terminais}}}
[**listarUsingGET25**](GlobaltagestabelecimentoApi.md#listarUsingGET25) | **GET** /api/estabelecimentos | {{{estabelecimento_resource_listar}}}
[**listarUsingGET28**](GlobaltagestabelecimentoApi.md#listarUsingGET28) | **GET** /api/grupos-economicos | {{{grupo_economico_resource_listar}}}
[**listarUsingGET29**](GlobaltagestabelecimentoApi.md#listarUsingGET29) | **GET** /api/grupos-origens-comerciais | {{{grupo_origem_comercial_resource_listar}}}
[**listarUsingGET32**](GlobaltagestabelecimentoApi.md#listarUsingGET32) | **GET** /api/maquinetas | {{{maquineta_resource_listar}}}
[**listarUsingGET33**](GlobaltagestabelecimentoApi.md#listarUsingGET33) | **GET** /api/tipos-moedas | {{{moeda_resource_listar}}}
[**listarUsingGET34**](GlobaltagestabelecimentoApi.md#listarUsingGET34) | **GET** /api/regras-operacoes-estabelecimentos | {{{operacao_credor_resource_listar}}}
[**listarUsingGET49**](GlobaltagestabelecimentoApi.md#listarUsingGET49) | **GET** /api/telefones-estabelecimentos | {{{telefone_estabelecimento_resource_listar}}}
[**listarUsingGET51**](GlobaltagestabelecimentoApi.md#listarUsingGET51) | **GET** /api/terminais | {{{terminal_resource_listar}}}
[**listarUsingGET64**](GlobaltagestabelecimentoApi.md#listarUsingGET64) | **GET** /api/adquirentes-estabelecimento | {{{vinculo_estabelecimento_adquirente_resource_listar}}}
[**listarUsingGET65**](GlobaltagestabelecimentoApi.md#listarUsingGET65) | **GET** /api/estabelecimentos/{id}/operacoes | {{{vinculo_operacao_resource_listar}}}
[**salvarUsingPOST19**](GlobaltagestabelecimentoApi.md#salvarUsingPOST19) | **POST** /api/maquinetas | {{{maquineta_resource_salvar}}}
[**salvarUsingPOST20**](GlobaltagestabelecimentoApi.md#salvarUsingPOST20) | **POST** /api/regras-operacoes-estabelecimentos | {{{operacao_credor_resource_salvar}}}
[**salvarUsingPOST27**](GlobaltagestabelecimentoApi.md#salvarUsingPOST27) | **POST** /api/telefones-estabelecimentos | {{{telefone_estabelecimento_resource_salvar}}}
[**salvarUsingPOST29**](GlobaltagestabelecimentoApi.md#salvarUsingPOST29) | **POST** /api/terminais | {{{terminal_resource_salvar}}}
[**salvarUsingPOST34**](GlobaltagestabelecimentoApi.md#salvarUsingPOST34) | **POST** /api/adquirentes-estabelecimento | {{{vinculo_estabelecimento_adquirente_resource_salvar}}}


# **alterarOrigemComercialUsingPUT**
> \br.com.conductor.pier.api.v2.model\OrigemComercialResponse alterarOrigemComercialUsingPUT($id, $origem_comercial_update)

{{{origem_comercial_resource_alterar_origem_comercial}}}

{{{origem_comercial_resource_alterar_origem_comercial_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$id = 789; // int | {{{origem_comercial_resource_alterar_origem_comercial_param_id}}}
$origem_comercial_update = new \br.com.conductor.pier.api.v2.model\OrigemComercialUpdate(); // \br.com.conductor.pier.api.v2.model\OrigemComercialUpdate | origemComercialUpdate

try { 
    $result = $api_instance->alterarOrigemComercialUsingPUT($id, $origem_comercial_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->alterarOrigemComercialUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{origem_comercial_resource_alterar_origem_comercial_param_id}}} | 
 **origem_comercial_update** | [**\br.com.conductor.pier.api.v2.model\OrigemComercialUpdate**](\br.com.conductor.pier.api.v2.model\OrigemComercialUpdate.md)| origemComercialUpdate | 

### Return type

[**\br.com.conductor.pier.api.v2.model\OrigemComercialResponse**](OrigemComercialResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarUsingPUT10**
> \br.com.conductor.pier.api.v2.model\MaquinetaResponse alterarUsingPUT10($id, $maquineta_update)

{{{maquineta_resource_alterar}}}

{{{maquineta_resource_alterar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$id = 789; // int | {{{maquineta_resource_alterar_param_id}}}
$maquineta_update = new \br.com.conductor.pier.api.v2.model\MaquinetaUpdate(); // \br.com.conductor.pier.api.v2.model\MaquinetaUpdate | maquinetaUpdate

try { 
    $result = $api_instance->alterarUsingPUT10($id, $maquineta_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->alterarUsingPUT10: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{maquineta_resource_alterar_param_id}}} | 
 **maquineta_update** | [**\br.com.conductor.pier.api.v2.model\MaquinetaUpdate**](\br.com.conductor.pier.api.v2.model\MaquinetaUpdate.md)| maquinetaUpdate | 

### Return type

[**\br.com.conductor.pier.api.v2.model\MaquinetaResponse**](MaquinetaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarUsingPUT11**
> \br.com.conductor.pier.api.v2.model\OperacaoCredorResponse alterarUsingPUT11($id, $operacao_credor_update)

{{{operacao_credor_resource_alterar}}}

{{{operacao_credor_resource_alterar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$id = 789; // int | {{{operacao_credor_resource_alterar_param_id}}}
$operacao_credor_update = new \br.com.conductor.pier.api.v2.model\OperacaoCredorUpdate(); // \br.com.conductor.pier.api.v2.model\OperacaoCredorUpdate | operacaoCredorUpdate

try { 
    $result = $api_instance->alterarUsingPUT11($id, $operacao_credor_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->alterarUsingPUT11: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{operacao_credor_resource_alterar_param_id}}} | 
 **operacao_credor_update** | [**\br.com.conductor.pier.api.v2.model\OperacaoCredorUpdate**](\br.com.conductor.pier.api.v2.model\OperacaoCredorUpdate.md)| operacaoCredorUpdate | 

### Return type

[**\br.com.conductor.pier.api.v2.model\OperacaoCredorResponse**](OperacaoCredorResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarUsingPUT17**
> \br.com.conductor.pier.api.v2.model\TelefoneEstabelecimentoResponse alterarUsingPUT17($id, $telefone_estabelecimento_update)

{{{telefone_estabelecimento_resource_alterar}}}

{{{telefone_estabelecimento_resource_alterar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$id = 789; // int | {{{telefone_estabelecimento_resource_alterar_param_id}}}
$telefone_estabelecimento_update = new \br.com.conductor.pier.api.v2.model\TelefoneEstabelecimentoUpdate(); // \br.com.conductor.pier.api.v2.model\TelefoneEstabelecimentoUpdate | telefoneEstabelecimentoUpdate

try { 
    $result = $api_instance->alterarUsingPUT17($id, $telefone_estabelecimento_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->alterarUsingPUT17: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{telefone_estabelecimento_resource_alterar_param_id}}} | 
 **telefone_estabelecimento_update** | [**\br.com.conductor.pier.api.v2.model\TelefoneEstabelecimentoUpdate**](\br.com.conductor.pier.api.v2.model\TelefoneEstabelecimentoUpdate.md)| telefoneEstabelecimentoUpdate | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TelefoneEstabelecimentoResponse**](TelefoneEstabelecimentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarUsingPUT19**
> \br.com.conductor.pier.api.v2.model\TerminalResponse alterarUsingPUT19($id, $terminal_update)

{{{terminal_resource_alterar}}}

{{{terminal_resource_alterar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$id = 789; // int | {{{terminal_resource_alterar_param_id}}}
$terminal_update = new \br.com.conductor.pier.api.v2.model\TerminalUpdateValue_(); // \br.com.conductor.pier.api.v2.model\TerminalUpdateValue_ | terminalUpdate

try { 
    $result = $api_instance->alterarUsingPUT19($id, $terminal_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->alterarUsingPUT19: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{terminal_resource_alterar_param_id}}} | 
 **terminal_update** | [**\br.com.conductor.pier.api.v2.model\TerminalUpdateValue_**](\br.com.conductor.pier.api.v2.model\TerminalUpdateValue_.md)| terminalUpdate | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TerminalResponse**](TerminalResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarUsingPUT6**
> \br.com.conductor.pier.api.v2.model\EstabelecimentoResponse alterarUsingPUT6($id, $update)

{{{estabelecimento_resource_alterar}}}

{{{estabelecimento_resource_alterar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$id = 789; // int | {{{estabelecimento_resource_alterar_param_id_estabelecimento}}}
$update = new \br.com.conductor.pier.api.v2.model\EstabelecimentoUpdate(); // \br.com.conductor.pier.api.v2.model\EstabelecimentoUpdate | update

try { 
    $result = $api_instance->alterarUsingPUT6($id, $update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->alterarUsingPUT6: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{estabelecimento_resource_alterar_param_id_estabelecimento}}} | 
 **update** | [**\br.com.conductor.pier.api.v2.model\EstabelecimentoUpdate**](\br.com.conductor.pier.api.v2.model\EstabelecimentoUpdate.md)| update | 

### Return type

[**\br.com.conductor.pier.api.v2.model\EstabelecimentoResponse**](EstabelecimentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarUsingPUT8**
> \br.com.conductor.pier.api.v2.model\GrupoEconomicoResponse alterarUsingPUT8($id, $grupo_economico_dto)

{{{grupo_economico_resource_alterar}}}

{{{grupo_economico_resource_alterar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$id = 789; // int | {{{grupo_economico_resource_alterar_param_id}}}
$grupo_economico_dto = new \br.com.conductor.pier.api.v2.model\GrupoEconomicoDTO(); // \br.com.conductor.pier.api.v2.model\GrupoEconomicoDTO | grupoEconomicoDTO

try { 
    $result = $api_instance->alterarUsingPUT8($id, $grupo_economico_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->alterarUsingPUT8: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{grupo_economico_resource_alterar_param_id}}} | 
 **grupo_economico_dto** | [**\br.com.conductor.pier.api.v2.model\GrupoEconomicoDTO**](\br.com.conductor.pier.api.v2.model\GrupoEconomicoDTO.md)| grupoEconomicoDTO | 

### Return type

[**\br.com.conductor.pier.api.v2.model\GrupoEconomicoResponse**](GrupoEconomicoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **cadastrarOrigemComercialUsingPOST**
> \br.com.conductor.pier.api.v2.model\OrigemComercialResponse cadastrarOrigemComercialUsingPOST($origem_comercial_persist)

{{{origem_comercial_resource_cadastrar_origem_comercial}}}

{{{origem_comercial_resource_cadastrar_origem_comercial_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$origem_comercial_persist = new \br.com.conductor.pier.api.v2.model\OrigemComercialPersist(); // \br.com.conductor.pier.api.v2.model\OrigemComercialPersist | origemComercialPersist

try { 
    $result = $api_instance->cadastrarOrigemComercialUsingPOST($origem_comercial_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->cadastrarOrigemComercialUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **origem_comercial_persist** | [**\br.com.conductor.pier.api.v2.model\OrigemComercialPersist**](\br.com.conductor.pier.api.v2.model\OrigemComercialPersist.md)| origemComercialPersist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\OrigemComercialResponse**](OrigemComercialResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **cadastrarUsingPOST3**
> \br.com.conductor.pier.api.v2.model\EstabelecimentoResponse cadastrarUsingPOST3($persist)

{{{estabelecimento_resource_cadastrar}}}

{{{estabelecimento_resource_cadastrar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$persist = new \br.com.conductor.pier.api.v2.model\EstabelecimentoPersist(); // \br.com.conductor.pier.api.v2.model\EstabelecimentoPersist | persist

try { 
    $result = $api_instance->cadastrarUsingPOST3($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->cadastrarUsingPOST3: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **persist** | [**\br.com.conductor.pier.api.v2.model\EstabelecimentoPersist**](\br.com.conductor.pier.api.v2.model\EstabelecimentoPersist.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\EstabelecimentoResponse**](EstabelecimentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **cadastrarUsingPOST4**
> \br.com.conductor.pier.api.v2.model\GrupoEconomicoResponse cadastrarUsingPOST4($grupo_economico_dto)

{{{grupo_economico_resource_cadastrar}}}

{{{grupo_economico_resource_cadastrar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$grupo_economico_dto = new \br.com.conductor.pier.api.v2.model\GrupoEconomicoDTO(); // \br.com.conductor.pier.api.v2.model\GrupoEconomicoDTO | GrupoEconomicoDTO

try { 
    $result = $api_instance->cadastrarUsingPOST4($grupo_economico_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->cadastrarUsingPOST4: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grupo_economico_dto** | [**\br.com.conductor.pier.api.v2.model\GrupoEconomicoDTO**](\br.com.conductor.pier.api.v2.model\GrupoEconomicoDTO.md)| GrupoEconomicoDTO | 

### Return type

[**\br.com.conductor.pier.api.v2.model\GrupoEconomicoResponse**](GrupoEconomicoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultaOperacaoUsingGET**
> \br.com.conductor.pier.api.v2.model\DetalheOperacaoResponse consultaOperacaoUsingGET($id)

{{{operacao_resource_consulta_operacao}}}

{{{operacao_resource_consulta_operacao_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$id = 789; // int | {{{operacao_resource_consulta_operacao_param_id_operacao}}}

try { 
    $result = $api_instance->consultaOperacaoUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->consultaOperacaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{operacao_resource_consulta_operacao_param_id_operacao}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\DetalheOperacaoResponse**](DetalheOperacaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarOrigemComercialUsingGET**
> \br.com.conductor.pier.api.v2.model\OrigemComercialResponse consultarOrigemComercialUsingGET($id)

{{{origem_comercial_resource_consultar_origem_comercial}}}

{{{origem_comercial_resource_consultar_origem_comercial_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$id = 789; // int | {{{origem_comercial_resource_consultar_origem_comercial_param_id}}}

try { 
    $result = $api_instance->consultarOrigemComercialUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->consultarOrigemComercialUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{origem_comercial_resource_consultar_origem_comercial_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\OrigemComercialResponse**](OrigemComercialResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET20**
> \br.com.conductor.pier.api.v2.model\EstabelecimentoResponse consultarUsingGET20($id)

{{{estabelecimento_resource_consultar}}}

{{{estabelecimento_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$id = 789; // int | {{{estabelecimento_resource_consultar_param_id_estabelecimento}}}

try { 
    $result = $api_instance->consultarUsingGET20($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->consultarUsingGET20: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{estabelecimento_resource_consultar_param_id_estabelecimento}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\EstabelecimentoResponse**](EstabelecimentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET22**
> \br.com.conductor.pier.api.v2.model\GrupoEconomicoResponse consultarUsingGET22($id)

{{{grupo_economico_resource_consultar}}}

{{{grupo_economico_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$id = 789; // int | {{{grupo_economico_resource_consultar_param_id}}}

try { 
    $result = $api_instance->consultarUsingGET22($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->consultarUsingGET22: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{grupo_economico_resource_consultar_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\GrupoEconomicoResponse**](GrupoEconomicoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET24**
> \br.com.conductor.pier.api.v2.model\MaquinetaResponse consultarUsingGET24($id)

{{{maquineta_resource_consultar}}}

{{{maquineta_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$id = 789; // int | {{{maquineta_resource_consultar_param_id}}}

try { 
    $result = $api_instance->consultarUsingGET24($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->consultarUsingGET24: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{maquineta_resource_consultar_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\MaquinetaResponse**](MaquinetaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET25**
> \br.com.conductor.pier.api.v2.model\OperacaoCredorResponse consultarUsingGET25($id)

{{{operacao_credor_resource_consultar}}}

{{{operacao_credor_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$id = 789; // int | {{{operacao_credor_resource_consultar_param_id}}}

try { 
    $result = $api_instance->consultarUsingGET25($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->consultarUsingGET25: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{operacao_credor_resource_consultar_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\OperacaoCredorResponse**](OperacaoCredorResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET38**
> \br.com.conductor.pier.api.v2.model\TelefoneEstabelecimentoResponse consultarUsingGET38($id)

{{{telefone_estabelecimento_resource_consultar}}}

{{{telefone_estabelecimento_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$id = 789; // int | {{{telefone_estabelecimento_resource_consultar_param_id}}}

try { 
    $result = $api_instance->consultarUsingGET38($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->consultarUsingGET38: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{telefone_estabelecimento_resource_consultar_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TelefoneEstabelecimentoResponse**](TelefoneEstabelecimentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET40**
> \br.com.conductor.pier.api.v2.model\TerminalResponse consultarUsingGET40($id)

{{{terminal_resource_consultar}}}

{{{terminal_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$id = 789; // int | {{{terminal_resource_consultar_param_id}}}

try { 
    $result = $api_instance->consultarUsingGET40($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->consultarUsingGET40: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{terminal_resource_consultar_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TerminalResponse**](TerminalResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET52**
> \br.com.conductor.pier.api.v2.model\VinculoEstabelecimentoAdquirenteResponse consultarUsingGET52($id)

{{{vinculo_estabelecimento_adquirente_resource_consultar}}}

{{{vinculo_estabelecimento_adquirente_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$id = 789; // int | {{{vinculo_estabelecimento_adquirente_resource_consultar_param_id}}}

try { 
    $result = $api_instance->consultarUsingGET52($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->consultarUsingGET52: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{vinculo_estabelecimento_adquirente_resource_consultar_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\VinculoEstabelecimentoAdquirenteResponse**](VinculoEstabelecimentoAdquirenteResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **desabilitarVinculoUsingPOST**
> object desabilitarVinculoUsingPOST($id)

{{{vinculo_estabelecimento_adquirente_resource_desabilitar_vinculo}}}

{{{vinculo_estabelecimento_adquirente_resource_desabilitar_vinculo_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$id = 789; // int | {{{vinculo_estabelecimento_adquirente_resource_desabilitar_vinculo_param_id}}}

try { 
    $result = $api_instance->desabilitarVinculoUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->desabilitarVinculoUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{vinculo_estabelecimento_adquirente_resource_desabilitar_vinculo_param_id}}} | 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **desabilitarVinculoUsingPOST1**
> object desabilitarVinculoUsingPOST1($id, $vinculo_operacao_persist)

{{{vinculo_operacao_resource_desabilitar_vinculo}}}

{{{vinculo_operacao_resource_desabilitar_vinculo_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$id = 789; // int | {{{vinculo_operacao_resource_desabilitar_vinculo_param_id}}}
$vinculo_operacao_persist = new \br.com.conductor.pier.api.v2.model\VinculoOperacaoPersist(); // \br.com.conductor.pier.api.v2.model\VinculoOperacaoPersist | vinculoOperacaoPersist

try { 
    $result = $api_instance->desabilitarVinculoUsingPOST1($id, $vinculo_operacao_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->desabilitarVinculoUsingPOST1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{vinculo_operacao_resource_desabilitar_vinculo_param_id}}} | 
 **vinculo_operacao_persist** | [**\br.com.conductor.pier.api.v2.model\VinculoOperacaoPersist**](\br.com.conductor.pier.api.v2.model\VinculoOperacaoPersist.md)| vinculoOperacaoPersist | 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **habilitarVinculoUsingPOST**
> object habilitarVinculoUsingPOST($id)

{{{vinculo_estabelecimento_adquirente_resource_habilitar_vinculo}}}

{{{vinculo_estabelecimento_adquirente_resource_habilitar_vinculo_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$id = 789; // int | {{{vinculo_estabelecimento_adquirente_resource_habilitar_vinculo_param_id}}}

try { 
    $result = $api_instance->habilitarVinculoUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->habilitarVinculoUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{vinculo_estabelecimento_adquirente_resource_habilitar_vinculo_param_id}}} | 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **habilitarVinculoUsingPOST1**
> object habilitarVinculoUsingPOST1($id, $vinculo_operacao_persist)

{{{vinculo_operacao_resource_habilitar_vinculo}}}

{{{vinculo_operacao_resource_habilitar_vinculo_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$id = 789; // int | {{{vinculo_operacao_resource_habilitar_vinculo_param_id}}}
$vinculo_operacao_persist = new \br.com.conductor.pier.api.v2.model\VinculoOperacaoPersist(); // \br.com.conductor.pier.api.v2.model\VinculoOperacaoPersist | vinculoOperacaoPersist

try { 
    $result = $api_instance->habilitarVinculoUsingPOST1($id, $vinculo_operacao_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->habilitarVinculoUsingPOST1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{vinculo_operacao_resource_habilitar_vinculo_param_id}}} | 
 **vinculo_operacao_persist** | [**\br.com.conductor.pier.api.v2.model\VinculoOperacaoPersist**](\br.com.conductor.pier.api.v2.model\VinculoOperacaoPersist.md)| vinculoOperacaoPersist | 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listaOperacaoUsingGET**
> \br.com.conductor.pier.api.v2.model\PageOperacaoResponse listaOperacaoUsingGET($sort, $page, $limit, $id_operacao, $codigo_processamento)

{{{operacao_resource_lista_operacao}}}

{{{operacao_resource_lista_operacao_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id_operacao = 789; // int | {{{operacao_request_id_operacao_value}}}
$codigo_processamento = "codigo_processamento_example"; // string | {{{operacao_request_codigo_processamento_value}}}

try { 
    $result = $api_instance->listaOperacaoUsingGET($sort, $page, $limit, $id_operacao, $codigo_processamento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->listaOperacaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id_operacao** | **int**| {{{operacao_request_id_operacao_value}}} | [optional] 
 **codigo_processamento** | **string**| {{{operacao_request_codigo_processamento_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageOperacaoResponse**](PageOperacaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarMCCUsingGET**
> \br.com.conductor.pier.api.v2.model\PageMCCResponse listarMCCUsingGET($sort, $page, $limit)

{{{m_c_c_resource_listar_m_c_c}}}

{{{m_c_c_resource_listar_m_c_c_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}

try { 
    $result = $api_instance->listarMCCUsingGET($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->listarMCCUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageMCCResponse**](PageMCCResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarOrigensComerciaisUsingGET**
> \br.com.conductor.pier.api.v2.model\PageOrigemComercialResponse listarOrigensComerciaisUsingGET($sort, $page, $limit, $id, $nome, $status, $id_estabelecimento, $id_produto, $descricao, $id_tipo_origem_comercial, $id_grupo_origem_comercial, $flag_pre_aprovado, $flag_aprovacao_imediata, $nome_fantasia_plastico, $flag_cartao_provisorio, $flag_cartao_definitivo, $usuario, $senha, $flag_origem_externa, $flag_modificado, $flag_envia_fatura_usuario, $flag_credito_faturamento, $flag_concede_limite_provisorio, $flag_digitalizar_doc, $flag_embossing_loja, $flag_consulta_previa, $tipo_pessoa)

{{{origem_comercial_resource_listar_origens_comerciais}}}

{{{origem_comercial_resource_listar_origens_comerciais_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id = 789; // int | {{{origem_comercial_request_id_value}}}
$nome = "nome_example"; // string | {{{origem_comercial_request_nome_value}}}
$status = 56; // int | {{{origem_comercial_request_status_value}}}
$id_estabelecimento = 789; // int | {{{origem_comercial_request_id_estabelecimento_value}}}
$id_produto = 789; // int | {{{origem_comercial_request_id_produto_value}}}
$descricao = "descricao_example"; // string | {{{origem_comercial_request_descricao_value}}}
$id_tipo_origem_comercial = 789; // int | {{{origem_comercial_request_id_tipo_origem_comercial_value}}}
$id_grupo_origem_comercial = 789; // int | {{{origem_comercial_request_id_grupo_origem_comercial_value}}}
$flag_pre_aprovado = true; // bool | {{{origem_comercial_request_flag_pre_aprovado_value}}}
$flag_aprovacao_imediata = true; // bool | {{{origem_comercial_request_flag_aprovacao_imediata_value}}}
$nome_fantasia_plastico = "nome_fantasia_plastico_example"; // string | {{{origem_comercial_request_nome_fantasia_plastico_value}}}
$flag_cartao_provisorio = true; // bool | {{{origem_comercial_request_flag_cartao_provisorio_value}}}
$flag_cartao_definitivo = true; // bool | {{{origem_comercial_request_flag_cartao_definitivo_value}}}
$usuario = "usuario_example"; // string | {{{origem_comercial_request_usuario_value}}}
$senha = "senha_example"; // string | {{{origem_comercial_request_senha_value}}}
$flag_origem_externa = true; // bool | {{{origem_comercial_request_flag_origem_externa_value}}}
$flag_modificado = true; // bool | {{{origem_comercial_request_flag_modificado_value}}}
$flag_envia_fatura_usuario = true; // bool | {{{origem_comercial_request_flag_envia_fatura_usuario_value}}}
$flag_credito_faturamento = true; // bool | {{{origem_comercial_request_flag_credito_faturamento_value}}}
$flag_concede_limite_provisorio = true; // bool | {{{origem_comercial_request_flag_concede_limite_provisorio_value}}}
$flag_digitalizar_doc = true; // bool | {{{origem_comercial_request_flag_digitalizar_doc_value}}}
$flag_embossing_loja = true; // bool | {{{origem_comercial_request_flag_embossing_loja_value}}}
$flag_consulta_previa = true; // bool | {{{origem_comercial_request_flag_consulta_previa_value}}}
$tipo_pessoa = "tipo_pessoa_example"; // string | {{{origem_comercial_request_tipo_pessoa_value}}}

try { 
    $result = $api_instance->listarOrigensComerciaisUsingGET($sort, $page, $limit, $id, $nome, $status, $id_estabelecimento, $id_produto, $descricao, $id_tipo_origem_comercial, $id_grupo_origem_comercial, $flag_pre_aprovado, $flag_aprovacao_imediata, $nome_fantasia_plastico, $flag_cartao_provisorio, $flag_cartao_definitivo, $usuario, $senha, $flag_origem_externa, $flag_modificado, $flag_envia_fatura_usuario, $flag_credito_faturamento, $flag_concede_limite_provisorio, $flag_digitalizar_doc, $flag_embossing_loja, $flag_consulta_previa, $tipo_pessoa);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->listarOrigensComerciaisUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id** | **int**| {{{origem_comercial_request_id_value}}} | [optional] 
 **nome** | **string**| {{{origem_comercial_request_nome_value}}} | [optional] 
 **status** | **int**| {{{origem_comercial_request_status_value}}} | [optional] 
 **id_estabelecimento** | **int**| {{{origem_comercial_request_id_estabelecimento_value}}} | [optional] 
 **id_produto** | **int**| {{{origem_comercial_request_id_produto_value}}} | [optional] 
 **descricao** | **string**| {{{origem_comercial_request_descricao_value}}} | [optional] 
 **id_tipo_origem_comercial** | **int**| {{{origem_comercial_request_id_tipo_origem_comercial_value}}} | [optional] 
 **id_grupo_origem_comercial** | **int**| {{{origem_comercial_request_id_grupo_origem_comercial_value}}} | [optional] 
 **flag_pre_aprovado** | **bool**| {{{origem_comercial_request_flag_pre_aprovado_value}}} | [optional] 
 **flag_aprovacao_imediata** | **bool**| {{{origem_comercial_request_flag_aprovacao_imediata_value}}} | [optional] 
 **nome_fantasia_plastico** | **string**| {{{origem_comercial_request_nome_fantasia_plastico_value}}} | [optional] 
 **flag_cartao_provisorio** | **bool**| {{{origem_comercial_request_flag_cartao_provisorio_value}}} | [optional] 
 **flag_cartao_definitivo** | **bool**| {{{origem_comercial_request_flag_cartao_definitivo_value}}} | [optional] 
 **usuario** | **string**| {{{origem_comercial_request_usuario_value}}} | [optional] 
 **senha** | **string**| {{{origem_comercial_request_senha_value}}} | [optional] 
 **flag_origem_externa** | **bool**| {{{origem_comercial_request_flag_origem_externa_value}}} | [optional] 
 **flag_modificado** | **bool**| {{{origem_comercial_request_flag_modificado_value}}} | [optional] 
 **flag_envia_fatura_usuario** | **bool**| {{{origem_comercial_request_flag_envia_fatura_usuario_value}}} | [optional] 
 **flag_credito_faturamento** | **bool**| {{{origem_comercial_request_flag_credito_faturamento_value}}} | [optional] 
 **flag_concede_limite_provisorio** | **bool**| {{{origem_comercial_request_flag_concede_limite_provisorio_value}}} | [optional] 
 **flag_digitalizar_doc** | **bool**| {{{origem_comercial_request_flag_digitalizar_doc_value}}} | [optional] 
 **flag_embossing_loja** | **bool**| {{{origem_comercial_request_flag_embossing_loja_value}}} | [optional] 
 **flag_consulta_previa** | **bool**| {{{origem_comercial_request_flag_consulta_previa_value}}} | [optional] 
 **tipo_pessoa** | **string**| {{{origem_comercial_request_tipo_pessoa_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageOrigemComercialResponse**](PageOrigemComercialResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarTiposAdquirentesUsingGET**
> \br.com.conductor.pier.api.v2.model\PageEntidadeResponse listarTiposAdquirentesUsingGET($sort, $page, $limit)

{{{vinculo_estabelecimento_adquirente_resource_listar_tipos_adquirentes}}}

{{{vinculo_estabelecimento_adquirente_resource_listar_tipos_adquirentes_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}

try { 
    $result = $api_instance->listarTiposAdquirentesUsingGET($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->listarTiposAdquirentesUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageEntidadeResponse**](PageEntidadeResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarTiposEstabelecimentosUsingGET**
> \br.com.conductor.pier.api.v2.model\PageTipoEstabelecimentoResponse listarTiposEstabelecimentosUsingGET($sort, $page, $limit, $descricao)

{{{tipo_estabelecimento_resource_listar_tipos_estabelecimentos}}}

{{{tipo_estabelecimento_resource_listar_tipos_estabelecimentos_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$descricao = "descricao_example"; // string | {{{tipo_estabelecimento_request_descricao_value}}}

try { 
    $result = $api_instance->listarTiposEstabelecimentosUsingGET($sort, $page, $limit, $descricao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->listarTiposEstabelecimentosUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **descricao** | **string**| {{{tipo_estabelecimento_request_descricao_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTipoEstabelecimentoResponse**](PageTipoEstabelecimentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarTiposMaquinetasUsingGET**
> \br.com.conductor.pier.api.v2.model\PageCampoCodificadoDescricaoResponse listarTiposMaquinetasUsingGET($sort, $page, $limit)

{{{maquineta_resource_listar_tipos_maquinetas}}}

{{{maquineta_resource_listar_tipos_maquinetas_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}

try { 
    $result = $api_instance->listarTiposMaquinetasUsingGET($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->listarTiposMaquinetasUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageCampoCodificadoDescricaoResponse**](PageCampoCodificadoDescricaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarTiposOrigensComerciaisUsingGET**
> \br.com.conductor.pier.api.v2.model\PageTipoOrigemComercialResponse listarTiposOrigensComerciaisUsingGET($sort, $page, $limit, $nome)

{{{tipo_origem_comercial_resource_listar_tipos_origens_comerciais}}}

{{{tipo_origem_comercial_resource_listar_tipos_origens_comerciais_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$nome = "nome_example"; // string | {{{tipo_origem_comercial_request_nome_value}}}

try { 
    $result = $api_instance->listarTiposOrigensComerciaisUsingGET($sort, $page, $limit, $nome);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->listarTiposOrigensComerciaisUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **nome** | **string**| {{{tipo_origem_comercial_request_nome_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTipoOrigemComercialResponse**](PageTipoOrigemComercialResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarTiposTerminaisUsingGET1**
> \br.com.conductor.pier.api.v2.model\PageTipoTerminalResponse listarTiposTerminaisUsingGET1($sort, $page, $limit)

{{{terminal_resource_listar_tipos_terminais}}}

{{{terminal_resource_listar_tipos_terminais_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}

try { 
    $result = $api_instance->listarTiposTerminaisUsingGET1($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->listarTiposTerminaisUsingGET1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTipoTerminalResponse**](PageTipoTerminalResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET25**
> \br.com.conductor.pier.api.v2.model\PageEstabelecimentoResponse listarUsingGET25($sort, $page, $limit, $id, $id_grupo_economico, $numero_receita_federal, $nome, $descricao, $nome_fantasia, $cep, $nome_logradouro, $numero_endereco, $complemento, $bairro, $cidade, $uf, $pais, $data_cadastramento, $contato, $email, $flag_arquivo_secr_fazenda, $flag_cartao_digitado, $inativo, $id_pais, $mcc, $id_tipo_estabelecimento, $correspondencia, $id_moeda, $tipo_pagamento, $numero_estabelecimento, $cep2, $nome_logradouro2, $numero_endereco2, $complemento2, $bairro2, $cidade2, $uf2, $flag_matriz)

{{{estabelecimento_resource_listar}}}

{{{estabelecimento_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id = 789; // int | {{{estabelecimento_request_id_value}}}
$id_grupo_economico = 789; // int | {{{estabelecimento_request_id_grupo_economico_value}}}
$numero_receita_federal = "numero_receita_federal_example"; // string | {{{estabelecimento_request_numero_receita_federal_value}}}
$nome = "nome_example"; // string | {{{estabelecimento_request_nome_value}}}
$descricao = "descricao_example"; // string | {{{estabelecimento_request_descricao_value}}}
$nome_fantasia = "nome_fantasia_example"; // string | {{{estabelecimento_request_nome_fantasia_value}}}
$cep = "cep_example"; // string | {{{estabelecimento_request_cep_value}}}
$nome_logradouro = "nome_logradouro_example"; // string | {{{estabelecimento_request_nome_logradouro_value}}}
$numero_endereco = 56; // int | {{{estabelecimento_request_numero_endereco_value}}}
$complemento = "complemento_example"; // string | {{{estabelecimento_request_complemento_value}}}
$bairro = "bairro_example"; // string | {{{estabelecimento_request_bairro_value}}}
$cidade = "cidade_example"; // string | {{{estabelecimento_request_cidade_value}}}
$uf = "uf_example"; // string | {{{estabelecimento_request_uf_value}}}
$pais = "pais_example"; // string | {{{estabelecimento_request_pais_value}}}
$data_cadastramento = "data_cadastramento_example"; // string | {{{estabelecimento_request_data_cadastramento_value}}}
$contato = "contato_example"; // string | {{{estabelecimento_request_contato_value}}}
$email = "email_example"; // string | {{{estabelecimento_request_email_value}}}
$flag_arquivo_secr_fazenda = 56; // int | {{{estabelecimento_request_flag_arquivo_secr_fazenda_value}}}
$flag_cartao_digitado = 56; // int | {{{estabelecimento_request_flag_cartao_digitado_value}}}
$inativo = 56; // int | {{{estabelecimento_request_inativo_value}}}
$id_pais = 789; // int | {{{estabelecimento_request_id_pais_value}}}
$mcc = 789; // int | {{{estabelecimento_request_mcc_value}}}
$id_tipo_estabelecimento = 789; // int | {{{estabelecimento_request_id_tipo_estabelecimento_value}}}
$correspondencia = 56; // int | {{{estabelecimento_request_correspondencia_value}}}
$id_moeda = 789; // int | {{{estabelecimento_request_id_moeda_value}}}
$tipo_pagamento = "tipo_pagamento_example"; // string | {{{estabelecimento_request_tipo_pagamento_value}}}
$numero_estabelecimento = "numero_estabelecimento_example"; // string | {{{estabelecimento_request_numero_estabelecimento_value}}}
$cep2 = "cep2_example"; // string | {{{estabelecimento_request_cep2_value}}}
$nome_logradouro2 = "nome_logradouro2_example"; // string | {{{estabelecimento_request_nome_logradouro2_value}}}
$numero_endereco2 = 56; // int | {{{estabelecimento_request_numero_endereco2_value}}}
$complemento2 = "complemento2_example"; // string | {{{estabelecimento_request_complemento2_value}}}
$bairro2 = "bairro2_example"; // string | {{{estabelecimento_request_bairro2_value}}}
$cidade2 = "cidade2_example"; // string | {{{estabelecimento_request_cidade2_value}}}
$uf2 = "uf2_example"; // string | {{{estabelecimento_request_uf2_value}}}
$flag_matriz = 56; // int | {{{estabelecimento_request_flag_matriz_value}}}

try { 
    $result = $api_instance->listarUsingGET25($sort, $page, $limit, $id, $id_grupo_economico, $numero_receita_federal, $nome, $descricao, $nome_fantasia, $cep, $nome_logradouro, $numero_endereco, $complemento, $bairro, $cidade, $uf, $pais, $data_cadastramento, $contato, $email, $flag_arquivo_secr_fazenda, $flag_cartao_digitado, $inativo, $id_pais, $mcc, $id_tipo_estabelecimento, $correspondencia, $id_moeda, $tipo_pagamento, $numero_estabelecimento, $cep2, $nome_logradouro2, $numero_endereco2, $complemento2, $bairro2, $cidade2, $uf2, $flag_matriz);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->listarUsingGET25: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id** | **int**| {{{estabelecimento_request_id_value}}} | [optional] 
 **id_grupo_economico** | **int**| {{{estabelecimento_request_id_grupo_economico_value}}} | [optional] 
 **numero_receita_federal** | **string**| {{{estabelecimento_request_numero_receita_federal_value}}} | [optional] 
 **nome** | **string**| {{{estabelecimento_request_nome_value}}} | [optional] 
 **descricao** | **string**| {{{estabelecimento_request_descricao_value}}} | [optional] 
 **nome_fantasia** | **string**| {{{estabelecimento_request_nome_fantasia_value}}} | [optional] 
 **cep** | **string**| {{{estabelecimento_request_cep_value}}} | [optional] 
 **nome_logradouro** | **string**| {{{estabelecimento_request_nome_logradouro_value}}} | [optional] 
 **numero_endereco** | **int**| {{{estabelecimento_request_numero_endereco_value}}} | [optional] 
 **complemento** | **string**| {{{estabelecimento_request_complemento_value}}} | [optional] 
 **bairro** | **string**| {{{estabelecimento_request_bairro_value}}} | [optional] 
 **cidade** | **string**| {{{estabelecimento_request_cidade_value}}} | [optional] 
 **uf** | **string**| {{{estabelecimento_request_uf_value}}} | [optional] 
 **pais** | **string**| {{{estabelecimento_request_pais_value}}} | [optional] 
 **data_cadastramento** | **string**| {{{estabelecimento_request_data_cadastramento_value}}} | [optional] 
 **contato** | **string**| {{{estabelecimento_request_contato_value}}} | [optional] 
 **email** | **string**| {{{estabelecimento_request_email_value}}} | [optional] 
 **flag_arquivo_secr_fazenda** | **int**| {{{estabelecimento_request_flag_arquivo_secr_fazenda_value}}} | [optional] 
 **flag_cartao_digitado** | **int**| {{{estabelecimento_request_flag_cartao_digitado_value}}} | [optional] 
 **inativo** | **int**| {{{estabelecimento_request_inativo_value}}} | [optional] 
 **id_pais** | **int**| {{{estabelecimento_request_id_pais_value}}} | [optional] 
 **mcc** | **int**| {{{estabelecimento_request_mcc_value}}} | [optional] 
 **id_tipo_estabelecimento** | **int**| {{{estabelecimento_request_id_tipo_estabelecimento_value}}} | [optional] 
 **correspondencia** | **int**| {{{estabelecimento_request_correspondencia_value}}} | [optional] 
 **id_moeda** | **int**| {{{estabelecimento_request_id_moeda_value}}} | [optional] 
 **tipo_pagamento** | **string**| {{{estabelecimento_request_tipo_pagamento_value}}} | [optional] 
 **numero_estabelecimento** | **string**| {{{estabelecimento_request_numero_estabelecimento_value}}} | [optional] 
 **cep2** | **string**| {{{estabelecimento_request_cep2_value}}} | [optional] 
 **nome_logradouro2** | **string**| {{{estabelecimento_request_nome_logradouro2_value}}} | [optional] 
 **numero_endereco2** | **int**| {{{estabelecimento_request_numero_endereco2_value}}} | [optional] 
 **complemento2** | **string**| {{{estabelecimento_request_complemento2_value}}} | [optional] 
 **bairro2** | **string**| {{{estabelecimento_request_bairro2_value}}} | [optional] 
 **cidade2** | **string**| {{{estabelecimento_request_cidade2_value}}} | [optional] 
 **uf2** | **string**| {{{estabelecimento_request_uf2_value}}} | [optional] 
 **flag_matriz** | **int**| {{{estabelecimento_request_flag_matriz_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageEstabelecimentoResponse**](PageEstabelecimentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET28**
> \br.com.conductor.pier.api.v2.model\PageGrupoEconomicoResponse listarUsingGET28($sort, $page, $limit, $razao_social, $nome_credor, $numero_receita_federal, $inscricao_estadual, $contato, $banco, $agencia, $digito_agencia, $conta_corrente, $digito_conta_corrente, $periodicidade, $pagamento_semanal, $pagamento_mensal, $pagamento_decendial_primeiro, $pagamento_decendial_segundo, $pagamento_decendial_terceiro, $pagamento_quinzenal_primeiro, $pagamento_quinzenal_segundo, $percentual_rav, $recebe_rav, $percentual_multiplica, $taxa_adm, $taxa_banco, $limite_rav, $id_credor_rav)

{{{grupo_economico_resource_listar}}}

{{{grupo_economico_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$razao_social = "razao_social_example"; // string | {{{grupo_economico_request_razao_social_value}}}
$nome_credor = "nome_credor_example"; // string | {{{grupo_economico_request_nome_credor_value}}}
$numero_receita_federal = "numero_receita_federal_example"; // string | {{{grupo_economico_request_numero_receita_federal_value}}}
$inscricao_estadual = "inscricao_estadual_example"; // string | {{{grupo_economico_request_inscricao_estadual_value}}}
$contato = "contato_example"; // string | {{{grupo_economico_request_contato_value}}}
$banco = 56; // int | {{{grupo_economico_request_banco_value}}}
$agencia = 56; // int | {{{grupo_economico_request_agencia_value}}}
$digito_agencia = "digito_agencia_example"; // string | {{{grupo_economico_request_digito_agencia_value}}}
$conta_corrente = "conta_corrente_example"; // string | {{{grupo_economico_request_conta_corrente_value}}}
$digito_conta_corrente = "digito_conta_corrente_example"; // string | {{{grupo_economico_request_digito_conta_corrente_value}}}
$periodicidade = "periodicidade_example"; // string | {{{grupo_economico_request_periodicidade_value}}}
$pagamento_semanal = "pagamento_semanal_example"; // string | {{{grupo_economico_request_pagamento_semanal_value}}}
$pagamento_mensal = 56; // int | {{{grupo_economico_request_pagamento_mensal_value}}}
$pagamento_decendial_primeiro = 56; // int | {{{grupo_economico_request_pagamento_decendial_primeiro_value}}}
$pagamento_decendial_segundo = 56; // int | {{{grupo_economico_request_pagamento_decendial_segundo_value}}}
$pagamento_decendial_terceiro = 56; // int | {{{grupo_economico_request_pagamento_decendial_terceiro_value}}}
$pagamento_quinzenal_primeiro = 56; // int | {{{grupo_economico_request_pagamento_quinzenal_primeiro_value}}}
$pagamento_quinzenal_segundo = 56; // int | {{{grupo_economico_request_pagamento_quinzenal_segundo_value}}}
$percentual_rav = new Number(); // Number | {{{grupo_economico_request_percentual_r_a_v_value}}}
$recebe_rav = "recebe_rav_example"; // string | {{{grupo_economico_request_recebe_r_a_v_value}}}
$percentual_multiplica = new Number(); // Number | {{{grupo_economico_request_percentual_multiplica_value}}}
$taxa_adm = new Number(); // Number | {{{grupo_economico_request_taxa_adm_value}}}
$taxa_banco = new Number(); // Number | {{{grupo_economico_request_taxa_banco_value}}}
$limite_rav = new Number(); // Number | {{{grupo_economico_request_limite_r_a_v_value}}}
$id_credor_rav = 789; // int | {{{grupo_economico_request_id_credor_r_a_v_value}}}

try { 
    $result = $api_instance->listarUsingGET28($sort, $page, $limit, $razao_social, $nome_credor, $numero_receita_federal, $inscricao_estadual, $contato, $banco, $agencia, $digito_agencia, $conta_corrente, $digito_conta_corrente, $periodicidade, $pagamento_semanal, $pagamento_mensal, $pagamento_decendial_primeiro, $pagamento_decendial_segundo, $pagamento_decendial_terceiro, $pagamento_quinzenal_primeiro, $pagamento_quinzenal_segundo, $percentual_rav, $recebe_rav, $percentual_multiplica, $taxa_adm, $taxa_banco, $limite_rav, $id_credor_rav);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->listarUsingGET28: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **razao_social** | **string**| {{{grupo_economico_request_razao_social_value}}} | [optional] 
 **nome_credor** | **string**| {{{grupo_economico_request_nome_credor_value}}} | [optional] 
 **numero_receita_federal** | **string**| {{{grupo_economico_request_numero_receita_federal_value}}} | [optional] 
 **inscricao_estadual** | **string**| {{{grupo_economico_request_inscricao_estadual_value}}} | [optional] 
 **contato** | **string**| {{{grupo_economico_request_contato_value}}} | [optional] 
 **banco** | **int**| {{{grupo_economico_request_banco_value}}} | [optional] 
 **agencia** | **int**| {{{grupo_economico_request_agencia_value}}} | [optional] 
 **digito_agencia** | **string**| {{{grupo_economico_request_digito_agencia_value}}} | [optional] 
 **conta_corrente** | **string**| {{{grupo_economico_request_conta_corrente_value}}} | [optional] 
 **digito_conta_corrente** | **string**| {{{grupo_economico_request_digito_conta_corrente_value}}} | [optional] 
 **periodicidade** | **string**| {{{grupo_economico_request_periodicidade_value}}} | [optional] 
 **pagamento_semanal** | **string**| {{{grupo_economico_request_pagamento_semanal_value}}} | [optional] 
 **pagamento_mensal** | **int**| {{{grupo_economico_request_pagamento_mensal_value}}} | [optional] 
 **pagamento_decendial_primeiro** | **int**| {{{grupo_economico_request_pagamento_decendial_primeiro_value}}} | [optional] 
 **pagamento_decendial_segundo** | **int**| {{{grupo_economico_request_pagamento_decendial_segundo_value}}} | [optional] 
 **pagamento_decendial_terceiro** | **int**| {{{grupo_economico_request_pagamento_decendial_terceiro_value}}} | [optional] 
 **pagamento_quinzenal_primeiro** | **int**| {{{grupo_economico_request_pagamento_quinzenal_primeiro_value}}} | [optional] 
 **pagamento_quinzenal_segundo** | **int**| {{{grupo_economico_request_pagamento_quinzenal_segundo_value}}} | [optional] 
 **percentual_rav** | [**Number**](.md)| {{{grupo_economico_request_percentual_r_a_v_value}}} | [optional] 
 **recebe_rav** | **string**| {{{grupo_economico_request_recebe_r_a_v_value}}} | [optional] 
 **percentual_multiplica** | [**Number**](.md)| {{{grupo_economico_request_percentual_multiplica_value}}} | [optional] 
 **taxa_adm** | [**Number**](.md)| {{{grupo_economico_request_taxa_adm_value}}} | [optional] 
 **taxa_banco** | [**Number**](.md)| {{{grupo_economico_request_taxa_banco_value}}} | [optional] 
 **limite_rav** | [**Number**](.md)| {{{grupo_economico_request_limite_r_a_v_value}}} | [optional] 
 **id_credor_rav** | **int**| {{{grupo_economico_request_id_credor_r_a_v_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageGrupoEconomicoResponse**](PageGrupoEconomicoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET29**
> \br.com.conductor.pier.api.v2.model\PageGrupoOrigemComercialResponse listarUsingGET29($sort, $page, $limit, $nome)

{{{grupo_origem_comercial_resource_listar}}}

{{{grupo_origem_comercial_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$nome = "nome_example"; // string | {{{grupo_origem_comercial_request_nome_value}}}

try { 
    $result = $api_instance->listarUsingGET29($sort, $page, $limit, $nome);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->listarUsingGET29: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **nome** | **string**| {{{grupo_origem_comercial_request_nome_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageGrupoOrigemComercialResponse**](PageGrupoOrigemComercialResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET32**
> \br.com.conductor.pier.api.v2.model\PageMaquinetaResponse listarUsingGET32($sort, $page, $limit, $id_estabelecimento)

{{{maquineta_resource_listar}}}

{{{maquineta_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id_estabelecimento = 789; // int | {{{maquineta_request_id_estabelecimento_value}}}

try { 
    $result = $api_instance->listarUsingGET32($sort, $page, $limit, $id_estabelecimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->listarUsingGET32: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id_estabelecimento** | **int**| {{{maquineta_request_id_estabelecimento_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageMaquinetaResponse**](PageMaquinetaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET33**
> \br.com.conductor.pier.api.v2.model\PageMoedaResponse listarUsingGET33($sort, $page, $limit, $codigo_moeda, $simbolo, $descricao)

{{{moeda_resource_listar}}}

{{{moeda_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$codigo_moeda = "codigo_moeda_example"; // string | {{{moeda_request_codigo_moeda_value}}}
$simbolo = "simbolo_example"; // string | {{{moeda_request_simbolo_value}}}
$descricao = "descricao_example"; // string | {{{moeda_request_descricao_value}}}

try { 
    $result = $api_instance->listarUsingGET33($sort, $page, $limit, $codigo_moeda, $simbolo, $descricao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->listarUsingGET33: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **codigo_moeda** | **string**| {{{moeda_request_codigo_moeda_value}}} | [optional] 
 **simbolo** | **string**| {{{moeda_request_simbolo_value}}} | [optional] 
 **descricao** | **string**| {{{moeda_request_descricao_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageMoedaResponse**](PageMoedaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET34**
> \br.com.conductor.pier.api.v2.model\PageOperacaoCredorResponse listarUsingGET34($sort, $page, $limit, $id_operacao, $id_credor, $id_produto)

{{{operacao_credor_resource_listar}}}

{{{operacao_credor_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id_operacao = 789; // int | {{{operacao_credor_request_id_operacao_value}}}
$id_credor = 789; // int | {{{operacao_credor_request_id_credor_value}}}
$id_produto = 789; // int | {{{operacao_credor_request_id_produto_value}}}

try { 
    $result = $api_instance->listarUsingGET34($sort, $page, $limit, $id_operacao, $id_credor, $id_produto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->listarUsingGET34: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id_operacao** | **int**| {{{operacao_credor_request_id_operacao_value}}} | [optional] 
 **id_credor** | **int**| {{{operacao_credor_request_id_credor_value}}} | [optional] 
 **id_produto** | **int**| {{{operacao_credor_request_id_produto_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageOperacaoCredorResponse**](PageOperacaoCredorResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET49**
> \br.com.conductor.pier.api.v2.model\PageTelefoneEstabelecimentoResponse listarUsingGET49($sort, $page, $limit, $id_estabelecimento)

{{{telefone_estabelecimento_resource_listar}}}

{{{telefone_estabelecimento_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id_estabelecimento = 789; // int | {{{telefone_estabelecimento_request_id_estabelecimento_value}}}

try { 
    $result = $api_instance->listarUsingGET49($sort, $page, $limit, $id_estabelecimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->listarUsingGET49: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id_estabelecimento** | **int**| {{{telefone_estabelecimento_request_id_estabelecimento_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTelefoneEstabelecimentoResponse**](PageTelefoneEstabelecimentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET51**
> \br.com.conductor.pier.api.v2.model\PageTerminalResponse listarUsingGET51($sort, $page, $limit, $id, $terminal, $numero_estabelecimento, $id_estabelecimento)

{{{terminal_resource_listar}}}

{{{terminal_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id = 789; // int | {{{terminal_request_id_value}}}
$terminal = "terminal_example"; // string | {{{terminal_request_terminal_value}}}
$numero_estabelecimento = 789; // int | {{{terminal_request_numero_estabelecimento_value}}}
$id_estabelecimento = 789; // int | {{{terminal_request_id_estabelecimento_value}}}

try { 
    $result = $api_instance->listarUsingGET51($sort, $page, $limit, $id, $terminal, $numero_estabelecimento, $id_estabelecimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->listarUsingGET51: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id** | **int**| {{{terminal_request_id_value}}} | [optional] 
 **terminal** | **string**| {{{terminal_request_terminal_value}}} | [optional] 
 **numero_estabelecimento** | **int**| {{{terminal_request_numero_estabelecimento_value}}} | [optional] 
 **id_estabelecimento** | **int**| {{{terminal_request_id_estabelecimento_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTerminalResponse**](PageTerminalResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET64**
> \br.com.conductor.pier.api.v2.model\PageVinculoEstabelecimentoAdquirenteResponse listarUsingGET64($sort, $page, $limit, $id_adquirente, $id_estabelecimento, $codigo_estabelecimento_adquirente)

{{{vinculo_estabelecimento_adquirente_resource_listar}}}

{{{vinculo_estabelecimento_adquirente_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id_adquirente = 789; // int | {{{vinculo_estabelecimento_adquirente_request_id_adquirente_value}}}
$id_estabelecimento = 789; // int | {{{vinculo_estabelecimento_adquirente_request_id_estabelecimento_value}}}
$codigo_estabelecimento_adquirente = "codigo_estabelecimento_adquirente_example"; // string | {{{vinculo_estabelecimento_adquirente_request_codigo_estabelecimento_adquirente_value}}}

try { 
    $result = $api_instance->listarUsingGET64($sort, $page, $limit, $id_adquirente, $id_estabelecimento, $codigo_estabelecimento_adquirente);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->listarUsingGET64: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id_adquirente** | **int**| {{{vinculo_estabelecimento_adquirente_request_id_adquirente_value}}} | [optional] 
 **id_estabelecimento** | **int**| {{{vinculo_estabelecimento_adquirente_request_id_estabelecimento_value}}} | [optional] 
 **codigo_estabelecimento_adquirente** | **string**| {{{vinculo_estabelecimento_adquirente_request_codigo_estabelecimento_adquirente_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageVinculoEstabelecimentoAdquirenteResponse**](PageVinculoEstabelecimentoAdquirenteResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET65**
> \br.com.conductor.pier.api.v2.model\PageVinculoOperacaoResponse listarUsingGET65($id, $sort, $page, $limit, $id_produto, $id_operacao, $codigo_mcc)

{{{vinculo_operacao_resource_listar}}}

{{{vinculo_operacao_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$id = 789; // int | {{{vinculo_operacao_resource_listar_param_id}}}
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id_produto = 789; // int | {{{vinculo_operacao_request_id_produto_value}}}
$id_operacao = 789; // int | {{{vinculo_operacao_request_id_operacao_value}}}
$codigo_mcc = 56; // int | {{{vinculo_operacao_request_codigo_m_c_c_value}}}

try { 
    $result = $api_instance->listarUsingGET65($id, $sort, $page, $limit, $id_produto, $id_operacao, $codigo_mcc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->listarUsingGET65: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{vinculo_operacao_resource_listar_param_id}}} | 
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id_produto** | **int**| {{{vinculo_operacao_request_id_produto_value}}} | [optional] 
 **id_operacao** | **int**| {{{vinculo_operacao_request_id_operacao_value}}} | [optional] 
 **codigo_mcc** | **int**| {{{vinculo_operacao_request_codigo_m_c_c_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageVinculoOperacaoResponse**](PageVinculoOperacaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST19**
> \br.com.conductor.pier.api.v2.model\MaquinetaResponse salvarUsingPOST19($maquineta_persist)

{{{maquineta_resource_salvar}}}

{{{maquineta_resource_salvar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$maquineta_persist = new \br.com.conductor.pier.api.v2.model\MaquinetaPersist(); // \br.com.conductor.pier.api.v2.model\MaquinetaPersist | maquinetaPersist

try { 
    $result = $api_instance->salvarUsingPOST19($maquineta_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->salvarUsingPOST19: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **maquineta_persist** | [**\br.com.conductor.pier.api.v2.model\MaquinetaPersist**](\br.com.conductor.pier.api.v2.model\MaquinetaPersist.md)| maquinetaPersist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\MaquinetaResponse**](MaquinetaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST20**
> \br.com.conductor.pier.api.v2.model\OperacaoCredorResponse salvarUsingPOST20($operacao_credor_persist)

{{{operacao_credor_resource_salvar}}}

{{{operacao_credor_resource_salvar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$operacao_credor_persist = new \br.com.conductor.pier.api.v2.model\OperacaoCredorPersist(); // \br.com.conductor.pier.api.v2.model\OperacaoCredorPersist | operacaoCredorPersist

try { 
    $result = $api_instance->salvarUsingPOST20($operacao_credor_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->salvarUsingPOST20: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **operacao_credor_persist** | [**\br.com.conductor.pier.api.v2.model\OperacaoCredorPersist**](\br.com.conductor.pier.api.v2.model\OperacaoCredorPersist.md)| operacaoCredorPersist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\OperacaoCredorResponse**](OperacaoCredorResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST27**
> \br.com.conductor.pier.api.v2.model\TelefoneEstabelecimentoResponse salvarUsingPOST27($telefone_estabelecimento_persist)

{{{telefone_estabelecimento_resource_salvar}}}

{{{telefone_estabelecimento_resource_salvar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$telefone_estabelecimento_persist = new \br.com.conductor.pier.api.v2.model\TelefoneEstabelecimentoPersist(); // \br.com.conductor.pier.api.v2.model\TelefoneEstabelecimentoPersist | telefoneEstabelecimentoPersist

try { 
    $result = $api_instance->salvarUsingPOST27($telefone_estabelecimento_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->salvarUsingPOST27: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **telefone_estabelecimento_persist** | [**\br.com.conductor.pier.api.v2.model\TelefoneEstabelecimentoPersist**](\br.com.conductor.pier.api.v2.model\TelefoneEstabelecimentoPersist.md)| telefoneEstabelecimentoPersist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TelefoneEstabelecimentoResponse**](TelefoneEstabelecimentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST29**
> \br.com.conductor.pier.api.v2.model\TerminalResponse salvarUsingPOST29($terminal_persist)

{{{terminal_resource_salvar}}}

{{{terminal_resource_salvar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$terminal_persist = new \br.com.conductor.pier.api.v2.model\TerminalPersist(); // \br.com.conductor.pier.api.v2.model\TerminalPersist | terminalPersist

try { 
    $result = $api_instance->salvarUsingPOST29($terminal_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->salvarUsingPOST29: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **terminal_persist** | [**\br.com.conductor.pier.api.v2.model\TerminalPersist**](\br.com.conductor.pier.api.v2.model\TerminalPersist.md)| terminalPersist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TerminalResponse**](TerminalResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST34**
> \br.com.conductor.pier.api.v2.model\VinculoEstabelecimentoAdquirenteResponse salvarUsingPOST34($vinculo_estabelecimento_adquirente_persist)

{{{vinculo_estabelecimento_adquirente_resource_salvar}}}

{{{vinculo_estabelecimento_adquirente_resource_salvar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagestabelecimentoApi();
$vinculo_estabelecimento_adquirente_persist = new \br.com.conductor.pier.api.v2.model\VinculoEstabelecimentoAdquirentePersist(); // \br.com.conductor.pier.api.v2.model\VinculoEstabelecimentoAdquirentePersist | vinculoEstabelecimentoAdquirentePersist

try { 
    $result = $api_instance->salvarUsingPOST34($vinculo_estabelecimento_adquirente_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagestabelecimentoApi->salvarUsingPOST34: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vinculo_estabelecimento_adquirente_persist** | [**\br.com.conductor.pier.api.v2.model\VinculoEstabelecimentoAdquirentePersist**](\br.com.conductor.pier.api.v2.model\VinculoEstabelecimentoAdquirentePersist.md)| vinculoEstabelecimentoAdquirentePersist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\VinculoEstabelecimentoAdquirenteResponse**](VinculoEstabelecimentoAdquirenteResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

