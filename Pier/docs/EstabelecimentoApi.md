# br.com.conductor.pier.api.v2.invoker\EstabelecimentoApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarOrigemComercialUsingPUT**](EstabelecimentoApi.md#alterarOrigemComercialUsingPUT) | **PUT** /api/origens-comerciais/{id} | Alterar Origem Comercial
[**alterarUsingPUT10**](EstabelecimentoApi.md#alterarUsingPUT10) | **PUT** /api/maquinetas/{id} | Altera uma Maquineta
[**alterarUsingPUT11**](EstabelecimentoApi.md#alterarUsingPUT11) | **PUT** /api/regras-operacoes-estabelecimentos/{id} | Altera uma Regra Opera\u00C3\u00A7\u00C3\u00A3o
[**alterarUsingPUT15**](EstabelecimentoApi.md#alterarUsingPUT15) | **PUT** /api/telefones-estabelecimentos/{id} | Altera um Telefone do estabelecimento
[**alterarUsingPUT17**](EstabelecimentoApi.md#alterarUsingPUT17) | **PUT** /api/terminais/{id} | Altera um Terminal
[**alterarUsingPUT6**](EstabelecimentoApi.md#alterarUsingPUT6) | **PUT** /api/estabelecimentos/{id} | Alterar um estabelecimento
[**alterarUsingPUT8**](EstabelecimentoApi.md#alterarUsingPUT8) | **PUT** /api/grupos-economicos/{id} | Alterar Grupo Econ\u00C3\u00B4mico
[**cadastrarOrigemComercialUsingPOST**](EstabelecimentoApi.md#cadastrarOrigemComercialUsingPOST) | **POST** /api/origens-comerciais | Cadastrar Origem Comercial
[**cadastrarUsingPOST2**](EstabelecimentoApi.md#cadastrarUsingPOST2) | **POST** /api/estabelecimentos | Cadastrar um estabelecimento
[**cadastrarUsingPOST3**](EstabelecimentoApi.md#cadastrarUsingPOST3) | **POST** /api/grupos-economicos | Cadastrar Grupo Econ\u00C3\u00B4mico
[**consultaOperacaoUsingGET**](EstabelecimentoApi.md#consultaOperacaoUsingGET) | **GET** /api/tipos-operacoes-estabelecimentos/{id} | Apresenta dados de um determinado tipo de opera\u00C3\u00A7\u00C3\u00A3o
[**consultarOrigemComercialUsingGET**](EstabelecimentoApi.md#consultarOrigemComercialUsingGET) | **GET** /api/origens-comerciais/{id} | Consultar Origem Comercial
[**consultarUsingGET15**](EstabelecimentoApi.md#consultarUsingGET15) | **GET** /api/estabelecimentos/{id} | Consultar estabelecimento por id
[**consultarUsingGET17**](EstabelecimentoApi.md#consultarUsingGET17) | **GET** /api/grupos-economicos/{id} | Consultar grupo econ\u00C3\u00B4mico
[**consultarUsingGET19**](EstabelecimentoApi.md#consultarUsingGET19) | **GET** /api/maquinetas/{id} | Apresenta os dados de uma determinada maquineta
[**consultarUsingGET20**](EstabelecimentoApi.md#consultarUsingGET20) | **GET** /api/regras-operacoes-estabelecimentos/{id} | Apresenta os dados de uma determinada Regra Opera\u00C3\u00A7\u00C3\u00A3o
[**consultarUsingGET28**](EstabelecimentoApi.md#consultarUsingGET28) | **GET** /api/telefones-estabelecimentos/{id} | Apresenta os dados de um determinado telefone de um estabelecimento
[**consultarUsingGET30**](EstabelecimentoApi.md#consultarUsingGET30) | **GET** /api/terminais/{id} | Apresenta os dados de um determinado Terminal
[**consultarUsingGET42**](EstabelecimentoApi.md#consultarUsingGET42) | **GET** /api/adquirentes-estabelecimento/{id} | Apresenta os dados de um determinado V\u00C3\u00ADnculo
[**desabilitarVinculoUsingPOST**](EstabelecimentoApi.md#desabilitarVinculoUsingPOST) | **POST** /api/adquirentes-estabelecimento/{id}/desabilitar | Desabilitar um V\u00C3\u00ADnculo
[**desabilitarVinculoUsingPOST1**](EstabelecimentoApi.md#desabilitarVinculoUsingPOST1) | **POST** /api/estabelecimentos/{id}/desabilitar-operacao | Desabilitar um v\u00C3\u00ADnculo opera\u00C3\u00A7\u00C3\u00A3o
[**habilitarVinculoUsingPOST**](EstabelecimentoApi.md#habilitarVinculoUsingPOST) | **POST** /api/adquirentes-estabelecimento/{id}/habilitar | Habilitar um V\u00C3\u00ADnculo
[**habilitarVinculoUsingPOST1**](EstabelecimentoApi.md#habilitarVinculoUsingPOST1) | **POST** /api/estabelecimentos/{id}/habilitar-operacao | Habilitar um v\u00C3\u00ADnculo opera\u00C3\u00A7\u00C3\u00A3o
[**listaOperacaoUsingGET**](EstabelecimentoApi.md#listaOperacaoUsingGET) | **GET** /api/tipos-operacoes-estabelecimentos | Apresenta dados de opera\u00C3\u00A7\u00C3\u00B5es em uma lista
[**listarMCCUsingGET**](EstabelecimentoApi.md#listarMCCUsingGET) | **GET** /api/mcc-estabelecimentos | Lista os MCCs
[**listarOrigensComerciaisUsingGET**](EstabelecimentoApi.md#listarOrigensComerciaisUsingGET) | **GET** /api/origens-comerciais | Listar Origens Comerciais
[**listarTiposAdquirentesUsingGET**](EstabelecimentoApi.md#listarTiposAdquirentesUsingGET) | **GET** /api/tipos-adquirentes | Lista os Tipos de adquirentes
[**listarTiposMaquinetasUsingGET**](EstabelecimentoApi.md#listarTiposMaquinetasUsingGET) | **GET** /api/tipos-maquinetas | Lista os Tipos de  Maquinetas
[**listarTiposTerminaisUsingGET1**](EstabelecimentoApi.md#listarTiposTerminaisUsingGET1) | **GET** /api/tipos-terminais-estabelecimento | Lista os Tipos Terminais
[**listarUsingGET19**](EstabelecimentoApi.md#listarUsingGET19) | **GET** /api/estabelecimentos | Lista Estabelecimentos
[**listarUsingGET21**](EstabelecimentoApi.md#listarUsingGET21) | **GET** /api/grupos-economicos | Listar grupos econ\u00C3\u00B4micos
[**listarUsingGET23**](EstabelecimentoApi.md#listarUsingGET23) | **GET** /api/maquinetas | Lista as Maquinetas
[**listarUsingGET24**](EstabelecimentoApi.md#listarUsingGET24) | **GET** /api/tipos-moedas | Lista os tipos de moedas do emissor 
[**listarUsingGET25**](EstabelecimentoApi.md#listarUsingGET25) | **GET** /api/regras-operacoes-estabelecimentos | Lista as Regras Opera\u00C3\u00A7\u00C3\u00B5es
[**listarUsingGET36**](EstabelecimentoApi.md#listarUsingGET36) | **GET** /api/telefones-estabelecimentos | Lista os Telefones Estabelecimentos
[**listarUsingGET38**](EstabelecimentoApi.md#listarUsingGET38) | **GET** /api/terminais | Lista os Terminais cadastrados no Emissor
[**listarUsingGET49**](EstabelecimentoApi.md#listarUsingGET49) | **GET** /api/adquirentes-estabelecimento | Lista os V\u00C3\u00ADnculos dos estabelecimento com os adquirentes
[**listarUsingGET50**](EstabelecimentoApi.md#listarUsingGET50) | **GET** /api/estabelecimentos/{id}/operacoes | Lista os v\u00C3\u00ADnculos cadastrados no Emissor
[**salvarUsingPOST15**](EstabelecimentoApi.md#salvarUsingPOST15) | **POST** /api/maquinetas | Realiza o cadastro de uma nova maquineta para um estabelecimento 
[**salvarUsingPOST16**](EstabelecimentoApi.md#salvarUsingPOST16) | **POST** /api/regras-operacoes-estabelecimentos | Realiza o cadastro de uma nova Regra Opera\u00C3\u00A7\u00C3\u00A3o
[**salvarUsingPOST21**](EstabelecimentoApi.md#salvarUsingPOST21) | **POST** /api/telefones-estabelecimentos | Realiza o cadastro de um novo telefone para um estabelecimento 
[**salvarUsingPOST23**](EstabelecimentoApi.md#salvarUsingPOST23) | **POST** /api/terminais | Realiza o cadastro de um novo Terminal
[**salvarUsingPOST28**](EstabelecimentoApi.md#salvarUsingPOST28) | **POST** /api/adquirentes-estabelecimento | Realiza o cadastro de um novo VinculoEstabelecimentoAdquirente


# **alterarOrigemComercialUsingPUT**
> \br.com.conductor.pier.api.v2.model\OrigemComercialResponse alterarOrigemComercialUsingPUT($id, $origem_comercial_update)

Alterar Origem Comercial

Altera uma origem comercial.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da origem comercial
$origem_comercial_update = new \br.com.conductor.pier.api.v2.model\OrigemComercialUpdate(); // \br.com.conductor.pier.api.v2.model\OrigemComercialUpdate | origemComercialUpdate

try { 
    $result = $api_instance->alterarOrigemComercialUsingPUT($id, $origem_comercial_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->alterarOrigemComercialUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da origem comercial | 
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

Altera uma Maquineta

Este m\u00C3\u00A9todo realiza a altera\u00C3\u00A7\u00C3\u00A3o das maquinetas dos estabelecimentos.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Maquineta (id).
$maquineta_update = new \br.com.conductor.pier.api.v2.model\MaquinetaUpdate(); // \br.com.conductor.pier.api.v2.model\MaquinetaUpdate | maquinetaUpdate

try { 
    $result = $api_instance->alterarUsingPUT10($id, $maquineta_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->alterarUsingPUT10: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Maquineta (id). | 
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

Altera uma Regra Opera\u00C3\u00A7\u00C3\u00A3o

Este m\u00C3\u00A9todo realiza a altera\u00C3\u00A7\u00C3\u00A3o de uma regra opera\u00C3\u00A7\u00C3\u00A3o.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Regra Opera\u00C3\u00A7\u00C3\u00A3o (id).
$operacao_credor_update = new \br.com.conductor.pier.api.v2.model\OperacaoCredorUpdate(); // \br.com.conductor.pier.api.v2.model\OperacaoCredorUpdate | operacaoCredorUpdate

try { 
    $result = $api_instance->alterarUsingPUT11($id, $operacao_credor_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->alterarUsingPUT11: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Regra Opera\u00C3\u00A7\u00C3\u00A3o (id). | 
 **operacao_credor_update** | [**\br.com.conductor.pier.api.v2.model\OperacaoCredorUpdate**](\br.com.conductor.pier.api.v2.model\OperacaoCredorUpdate.md)| operacaoCredorUpdate | 

### Return type

[**\br.com.conductor.pier.api.v2.model\OperacaoCredorResponse**](OperacaoCredorResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarUsingPUT15**
> \br.com.conductor.pier.api.v2.model\TelefoneEstabelecimentoResponse alterarUsingPUT15($id, $ddd, $telefone, $ramal)

Altera um Telefone do estabelecimento

Este m\u00C3\u00A9todo realiza a altera\u00C3\u00A7\u00C3\u00A3o dos telefones dos estabelecimentos.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Telefone Estabelecimento (id).
$ddd = "ddd_example"; // string | C\u00C3\u00B3digo DDD do telefone (id).
$telefone = "telefone_example"; // string | N\u00C3\u00BAmero do telefone.
$ramal = "ramal_example"; // string | N\u00C3\u00BAmero do ramal.

try { 
    $result = $api_instance->alterarUsingPUT15($id, $ddd, $telefone, $ramal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->alterarUsingPUT15: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Telefone Estabelecimento (id). | 
 **ddd** | **string**| C\u00C3\u00B3digo DDD do telefone (id). | 
 **telefone** | **string**| N\u00C3\u00BAmero do telefone. | 
 **ramal** | **string**| N\u00C3\u00BAmero do ramal. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\TelefoneEstabelecimentoResponse**](TelefoneEstabelecimentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarUsingPUT17**
> \br.com.conductor.pier.api.v2.model\TerminalResponse alterarUsingPUT17($id, $terminal_update)

Altera um Terminal

Este m\u00C3\u00A9todo realiza a altera\u00C3\u00A7\u00C3\u00A3o dos Terminais.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do terminal (id).
$terminal_update = new \br.com.conductor.pier.api.v2.model\TerminalUpdate(); // \br.com.conductor.pier.api.v2.model\TerminalUpdate | terminalUpdate

try { 
    $result = $api_instance->alterarUsingPUT17($id, $terminal_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->alterarUsingPUT17: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do terminal (id). | 
 **terminal_update** | [**\br.com.conductor.pier.api.v2.model\TerminalUpdate**](\br.com.conductor.pier.api.v2.model\TerminalUpdate.md)| terminalUpdate | 

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

Alterar um estabelecimento

Altera um estabelecimento

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | Id
$update = new \br.com.conductor.pier.api.v2.model\EstabelecimentoUpdate(); // \br.com.conductor.pier.api.v2.model\EstabelecimentoUpdate | update

try { 
    $result = $api_instance->alterarUsingPUT6($id, $update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->alterarUsingPUT6: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id | 
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

Alterar Grupo Econ\u00C3\u00B4mico

Altera um grupo econ\u00C3\u00B4mico.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do grupo econ\u00C3\u00B4mico
$grupo_economico_dto = new \br.com.conductor.pier.api.v2.model\GrupoEconomicoDTO(); // \br.com.conductor.pier.api.v2.model\GrupoEconomicoDTO | grupoEconomicoDTO

try { 
    $result = $api_instance->alterarUsingPUT8($id, $grupo_economico_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->alterarUsingPUT8: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do grupo econ\u00C3\u00B4mico | 
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

Cadastrar Origem Comercial

Cadastra uma origem comercial.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$origem_comercial_persist = new \br.com.conductor.pier.api.v2.model\OrigemComercialPersist(); // \br.com.conductor.pier.api.v2.model\OrigemComercialPersist | origemComercialPersist

try { 
    $result = $api_instance->cadastrarOrigemComercialUsingPOST($origem_comercial_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->cadastrarOrigemComercialUsingPOST: ', $e->getMessage(), "\n";
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

# **cadastrarUsingPOST2**
> \br.com.conductor.pier.api.v2.model\EstabelecimentoResponse cadastrarUsingPOST2($persist)

Cadastrar um estabelecimento

Cadastra um novo estabelecimento

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$persist = new \br.com.conductor.pier.api.v2.model\EstabelecimentoPersist(); // \br.com.conductor.pier.api.v2.model\EstabelecimentoPersist | persist

try { 
    $result = $api_instance->cadastrarUsingPOST2($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->cadastrarUsingPOST2: ', $e->getMessage(), "\n";
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

# **cadastrarUsingPOST3**
> \br.com.conductor.pier.api.v2.model\GrupoEconomicoResponse cadastrarUsingPOST3($grupo_economico_dto)

Cadastrar Grupo Econ\u00C3\u00B4mico

Cadastra um grupo econ\u00C3\u00B4mico.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$grupo_economico_dto = new \br.com.conductor.pier.api.v2.model\GrupoEconomicoDTO(); // \br.com.conductor.pier.api.v2.model\GrupoEconomicoDTO | GrupoEconomicoDTO

try { 
    $result = $api_instance->cadastrarUsingPOST3($grupo_economico_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->cadastrarUsingPOST3: ', $e->getMessage(), "\n";
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

Apresenta dados de um determinado tipo de opera\u00C3\u00A7\u00C3\u00A3o

Este recurso permite consultar dados de um determinado tipo opera\u00C3\u00A7\u00C3\u00A3o a partir do idoperacao

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00C3\u00B3digo de processamento da opera\u00C3\u00A7\u00C3\u00A3o (idOperacao).

try { 
    $result = $api_instance->consultaOperacaoUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->consultaOperacaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de processamento da opera\u00C3\u00A7\u00C3\u00A3o (idOperacao). | 

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

Consultar Origem Comercial

Consulta uma origem comercial atrav\u00C3\u00A9s do seu identificador.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da origem comercial

try { 
    $result = $api_instance->consultarOrigemComercialUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->consultarOrigemComercialUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da origem comercial | 

### Return type

[**\br.com.conductor.pier.api.v2.model\OrigemComercialResponse**](OrigemComercialResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET15**
> \br.com.conductor.pier.api.v2.model\EstabelecimentoResponse consultarUsingGET15($id)

Consultar estabelecimento por id

Consulta os detalhes de um determinado estabelecimento

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | Id

try { 
    $result = $api_instance->consultarUsingGET15($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->consultarUsingGET15: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id | 

### Return type

[**\br.com.conductor.pier.api.v2.model\EstabelecimentoResponse**](EstabelecimentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET17**
> \br.com.conductor.pier.api.v2.model\GrupoEconomicoResponse consultarUsingGET17($id)

Consultar grupo econ\u00C3\u00B4mico

Consulta um grupo econ\u00C3\u00B4mico atrav\u00C3\u00A9s do seu identificador.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do grupo econ\u00C3\u00B4mico

try { 
    $result = $api_instance->consultarUsingGET17($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->consultarUsingGET17: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do grupo econ\u00C3\u00B4mico | 

### Return type

[**\br.com.conductor.pier.api.v2.model\GrupoEconomicoResponse**](GrupoEconomicoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET19**
> \br.com.conductor.pier.api.v2.model\MaquinetaResponse consultarUsingGET19($id)

Apresenta os dados de uma determinada maquineta

Este m\u00C3\u00A9todo permite consultar uma determinada maquineta a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Maquineta (id).

try { 
    $result = $api_instance->consultarUsingGET19($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->consultarUsingGET19: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Maquineta (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\MaquinetaResponse**](MaquinetaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET20**
> \br.com.conductor.pier.api.v2.model\OperacaoCredorResponse consultarUsingGET20($id)

Apresenta os dados de uma determinada Regra Opera\u00C3\u00A7\u00C3\u00A3o

Este m\u00C3\u00A9todo permite consultar uma determinada regra opera\u00C3\u00A7\u00C3\u00A3o a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Regra Opera\u00C3\u00A7\u00C3\u00A3o (id).

try { 
    $result = $api_instance->consultarUsingGET20($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->consultarUsingGET20: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Regra Opera\u00C3\u00A7\u00C3\u00A3o (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\OperacaoCredorResponse**](OperacaoCredorResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET28**
> \br.com.conductor.pier.api.v2.model\TelefoneEstabelecimentoResponse consultarUsingGET28($id)

Apresenta os dados de um determinado telefone de um estabelecimento

Este m\u00C3\u00A9todo permite consultar um determinado telefone de um estabelecimento a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Telefone Estabelecimento (id).

try { 
    $result = $api_instance->consultarUsingGET28($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->consultarUsingGET28: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Telefone Estabelecimento (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TelefoneEstabelecimentoResponse**](TelefoneEstabelecimentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET30**
> \br.com.conductor.pier.api.v2.model\TerminalResponse consultarUsingGET30($id)

Apresenta os dados de um determinado Terminal

Este m\u00C3\u00A9todo permite consultar um determinado Terminal a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Terminal (id).

try { 
    $result = $api_instance->consultarUsingGET30($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->consultarUsingGET30: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Terminal (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TerminalResponse**](TerminalResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET42**
> \br.com.conductor.pier.api.v2.model\VinculoEstabelecimentoAdquirenteResponse consultarUsingGET42($id)

Apresenta os dados de um determinado V\u00C3\u00ADnculo

Este m\u00C3\u00A9todo permite consultar um determinado V\u00C3\u00ADnculo a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do V\u00C3\u008Dnculo (id).

try { 
    $result = $api_instance->consultarUsingGET42($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->consultarUsingGET42: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do V\u00C3\u008Dnculo (id). | 

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

Desabilitar um V\u00C3\u00ADnculo

Este m\u00C3\u00A9todo realiza a desativa\u00C3\u00A7\u00C3\u00A3o de um v\u00C3\u00ADnculo.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do V\u00C3\u00ADnculo (id).

try { 
    $result = $api_instance->desabilitarVinculoUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->desabilitarVinculoUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do V\u00C3\u00ADnculo (id). | 

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

Desabilitar um v\u00C3\u00ADnculo opera\u00C3\u00A7\u00C3\u00A3o

Este m\u00C3\u00A9todo permite desabilitar um v\u00C3\u00ADnculo.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do estabelecimento (id).
$vinculo_operacao_persist = new \br.com.conductor.pier.api.v2.model\VinculoOperacaoPersist(); // \br.com.conductor.pier.api.v2.model\VinculoOperacaoPersist | vinculoOperacaoPersist

try { 
    $result = $api_instance->desabilitarVinculoUsingPOST1($id, $vinculo_operacao_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->desabilitarVinculoUsingPOST1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do estabelecimento (id). | 
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

Habilitar um V\u00C3\u00ADnculo

Este m\u00C3\u00A9todo realiza a ativa\u00C3\u00A7\u00C3\u00A3o de um v\u00C3\u00ADnculo.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do V\u00C3\u00ADnculo (id).

try { 
    $result = $api_instance->habilitarVinculoUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->habilitarVinculoUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do V\u00C3\u00ADnculo (id). | 

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

Habilitar um v\u00C3\u00ADnculo opera\u00C3\u00A7\u00C3\u00A3o

Este m\u00C3\u00A9todo permite habilitar um v\u00C3\u00ADnculo.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do estabelecimento (id).
$vinculo_operacao_persist = new \br.com.conductor.pier.api.v2.model\VinculoOperacaoPersist(); // \br.com.conductor.pier.api.v2.model\VinculoOperacaoPersist | vinculoOperacaoPersist

try { 
    $result = $api_instance->habilitarVinculoUsingPOST1($id, $vinculo_operacao_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->habilitarVinculoUsingPOST1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do estabelecimento (id). | 
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

Apresenta dados de opera\u00C3\u00A7\u00C3\u00B5es em uma lista

Este recurso permite listar as opera\u00C3\u00A7\u00C3\u00A3o

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id_operacao = 789; // int | C\u00C3\u00B3digo que identifica a opera\u00C3\u00A7\u00C3\u00A3o
$codigo_processamento = "codigo_processamento_example"; // string | C\u00C3\u00B3digo de processamento usado em transa\u00C3\u00A7\u00C3\u00B5es com o autorizador

try { 
    $result = $api_instance->listaOperacaoUsingGET($sort, $page, $limit, $id_operacao, $codigo_processamento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->listaOperacaoUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id_operacao** | **int**| C\u00C3\u00B3digo que identifica a opera\u00C3\u00A7\u00C3\u00A3o | [optional] 
 **codigo_processamento** | **string**| C\u00C3\u00B3digo de processamento usado em transa\u00C3\u00A7\u00C3\u00B5es com o autorizador | [optional] 

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

Lista os MCCs

Este m\u00C3\u00A9todo permite que sejam listados os MCCs existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarMCCUsingGET($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->listarMCCUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 

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

Listar Origens Comerciais

Lista origens comerciais cadastradas.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id = 789; // int | Id da origem comercial
$nome = "nome_example"; // string | Nome da origem comercial
$status = 56; // int | Indica o status da origem comercial
$id_estabelecimento = 789; // int | Identificador do estabelecimento
$id_produto = 789; // int | Identificador do produto
$descricao = "descricao_example"; // string | Descri\u00C3\u00A7\u00C3\u00A3o da origem comercial
$id_tipo_origem_comercial = 789; // int | Identificador do tipo de origem comercial
$id_grupo_origem_comercial = 789; // int | Identificador do grupo de origem comercial
$flag_pre_aprovado = true; // bool | Indica se permite pr\u00C3\u00A9 aprova\u00C3\u00A7\u00C3\u00A3o
$flag_aprovacao_imediata = true; // bool | Indica se permite aprova\u00C3\u00A7\u00C3\u00A3o imediata
$nome_fantasia_plastico = "nome_fantasia_plastico_example"; // string | Nome fantasia impresso no pl\u00C3\u00A1stico
$flag_cartao_provisorio = true; // bool | Indica se permite cart\u00C3\u00A3o provis\u00C3\u00B3rio
$flag_cartao_definitivo = true; // bool | Indica se permite cart\u00C3\u00A3o definitivo
$usuario = "usuario_example"; // string | Usu\u00C3\u00A1rio para autentica\u00C3\u00A7\u00C3\u00A3o
$senha = "senha_example"; // string | Senha para autentica\u00C3\u00A7\u00C3\u00A3o
$flag_origem_externa = true; // bool | Indica se \u00C3\u00A9 origem externa
$flag_modificado = true; // bool | Indica se h\u00C3\u00A1 modifica\u00C3\u00A7\u00C3\u00A3o
$flag_envia_fatura_usuario = true; // bool | Indica se envia fatura
$flag_credito_faturamento = true; // bool | Indica se permite cr\u00C3\u00A9dito de faturamento
$flag_concede_limite_provisorio = true; // bool | Indica se concede limite provis\u00C3\u00B3rio
$flag_digitalizar_doc = true; // bool | Indica se digitaliza documento
$flag_embossing_loja = true; // bool | Indica se realiza embossing em loja
$flag_consulta_previa = true; // bool | Indica se realiza consulta pr\u00C3\u00A9via
$tipo_pessoa = "tipo_pessoa_example"; // string | Tipo de pessoa

try { 
    $result = $api_instance->listarOrigensComerciaisUsingGET($sort, $page, $limit, $id, $nome, $status, $id_estabelecimento, $id_produto, $descricao, $id_tipo_origem_comercial, $id_grupo_origem_comercial, $flag_pre_aprovado, $flag_aprovacao_imediata, $nome_fantasia_plastico, $flag_cartao_provisorio, $flag_cartao_definitivo, $usuario, $senha, $flag_origem_externa, $flag_modificado, $flag_envia_fatura_usuario, $flag_credito_faturamento, $flag_concede_limite_provisorio, $flag_digitalizar_doc, $flag_embossing_loja, $flag_consulta_previa, $tipo_pessoa);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->listarOrigensComerciaisUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id** | **int**| Id da origem comercial | [optional] 
 **nome** | **string**| Nome da origem comercial | [optional] 
 **status** | **int**| Indica o status da origem comercial | [optional] 
 **id_estabelecimento** | **int**| Identificador do estabelecimento | [optional] 
 **id_produto** | **int**| Identificador do produto | [optional] 
 **descricao** | **string**| Descri\u00C3\u00A7\u00C3\u00A3o da origem comercial | [optional] 
 **id_tipo_origem_comercial** | **int**| Identificador do tipo de origem comercial | [optional] 
 **id_grupo_origem_comercial** | **int**| Identificador do grupo de origem comercial | [optional] 
 **flag_pre_aprovado** | **bool**| Indica se permite pr\u00C3\u00A9 aprova\u00C3\u00A7\u00C3\u00A3o | [optional] 
 **flag_aprovacao_imediata** | **bool**| Indica se permite aprova\u00C3\u00A7\u00C3\u00A3o imediata | [optional] 
 **nome_fantasia_plastico** | **string**| Nome fantasia impresso no pl\u00C3\u00A1stico | [optional] 
 **flag_cartao_provisorio** | **bool**| Indica se permite cart\u00C3\u00A3o provis\u00C3\u00B3rio | [optional] 
 **flag_cartao_definitivo** | **bool**| Indica se permite cart\u00C3\u00A3o definitivo | [optional] 
 **usuario** | **string**| Usu\u00C3\u00A1rio para autentica\u00C3\u00A7\u00C3\u00A3o | [optional] 
 **senha** | **string**| Senha para autentica\u00C3\u00A7\u00C3\u00A3o | [optional] 
 **flag_origem_externa** | **bool**| Indica se \u00C3\u00A9 origem externa | [optional] 
 **flag_modificado** | **bool**| Indica se h\u00C3\u00A1 modifica\u00C3\u00A7\u00C3\u00A3o | [optional] 
 **flag_envia_fatura_usuario** | **bool**| Indica se envia fatura | [optional] 
 **flag_credito_faturamento** | **bool**| Indica se permite cr\u00C3\u00A9dito de faturamento | [optional] 
 **flag_concede_limite_provisorio** | **bool**| Indica se concede limite provis\u00C3\u00B3rio | [optional] 
 **flag_digitalizar_doc** | **bool**| Indica se digitaliza documento | [optional] 
 **flag_embossing_loja** | **bool**| Indica se realiza embossing em loja | [optional] 
 **flag_consulta_previa** | **bool**| Indica se realiza consulta pr\u00C3\u00A9via | [optional] 
 **tipo_pessoa** | **string**| Tipo de pessoa | [optional] 

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

Lista os Tipos de adquirentes

Este m\u00C3\u00A9todo permite que sejam listados os tipos de adquirentes.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarTiposAdquirentesUsingGET($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->listarTiposAdquirentesUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageEntidadeResponse**](PageEntidadeResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarTiposMaquinetasUsingGET**
> \br.com.conductor.pier.api.v2.model\PageCampoCodificadoDescricaoResponse listarTiposMaquinetasUsingGET($sort, $page, $limit)

Lista os Tipos de  Maquinetas

Este m\u00C3\u00A9todo permite que sejam listadas os Tipos de maquinetas existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarTiposMaquinetasUsingGET($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->listarTiposMaquinetasUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageCampoCodificadoDescricaoResponse**](PageCampoCodificadoDescricaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarTiposTerminaisUsingGET1**
> \br.com.conductor.pier.api.v2.model\PageTipoTerminalResponse listarTiposTerminaisUsingGET1($sort, $page, $limit)

Lista os Tipos Terminais

Este m\u00C3\u00A9todo permite que sejam listados os tipos de terminais existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)

try { 
    $result = $api_instance->listarTiposTerminaisUsingGET1($sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->listarTiposTerminaisUsingGET1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTipoTerminalResponse**](PageTipoTerminalResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET19**
> \br.com.conductor.pier.api.v2.model\PageEstabelecimentoResponse listarUsingGET19($sort, $page, $limit, $id, $id_credor, $numero_receita_federal, $nome, $descricao, $nome_fantasia, $cep, $nome_logradouro, $numero_endereco, $complemento, $bairro, $cidade, $uf, $pais, $data_cadastramento, $contato, $email, $flag_arquivo_secr_fazenda, $flag_cartao_digitado, $inativo, $id_pais, $mcc, $id_tipo_estabelecimento, $id_moeda, $tipo_pagamento, $numero_estabelecimento, $cep2, $nome_logradouro2, $numero_endereco2, $complemento2, $bairro2, $cidade2, $uf2, $flag_matriz)

Lista Estabelecimentos

Lista todas os Estabelecimentos

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do estabelecimento (id).
$id_credor = 789; // int | Apresenta o n\u00C3\u00BAmero de identifica\u00C3\u00A7\u00C3\u00A3o do Credor.
$numero_receita_federal = "numero_receita_federal_example"; // string | Apresenta o n\u00C3\u00BAmero de identifica\u00C3\u00A7\u00C3\u00A3o do Estabelecimento na Receita Federal.
$nome = "nome_example"; // string | Nome do Estabelecimento.
$descricao = "descricao_example"; // string | Raz\u00C3\u00A3o Social do Estabelecimento.
$nome_fantasia = "nome_fantasia_example"; // string | T\u00C3\u00ADtulo Comercial do Estabelecimento.
$cep = "cep_example"; // string | C\u00C3\u00B3digo de Endere\u00C3\u00A7amento Postal (CEP).
$nome_logradouro = "nome_logradouro_example"; // string | Nome do Logradouro.
$numero_endereco = 56; // int | N\u00C3\u00BAmero do endere\u00C3\u00A7o.
$complemento = "complemento_example"; // string | Descri\u00C3\u00A7\u00C3\u00B5es complementares referente ao endere\u00C3\u00A7o.
$bairro = "bairro_example"; // string | Nome do bairro do endere\u00C3\u00A7o.
$cidade = "cidade_example"; // string | Nome da cidade do endere\u00C3\u00A7o.
$uf = "uf_example"; // string | Sigla de identifica\u00C3\u00A7\u00C3\u00A3o da Unidade Federativa do endere\u00C3\u00A7o.
$pais = "pais_example"; // string | Nome do pa\u00C3\u00ADs.
$data_cadastramento = "data_cadastramento_example"; // string | Data de Cadastro do Estabelecimento, no formato yyyy-MM-dd.
$contato = "contato_example"; // string | Nome da pessoa para contato com o Estabelecimento.
$email = "email_example"; // string | E-mail da pessoa para contato com o Estabelecimento.
$flag_arquivo_secr_fazenda = 56; // int | Indica se o estabelecimento ser\u00C3\u00A1 inclu\u00C3\u00ADdo no arquivo de registro para a Secretaria da Fazenda Estadual.
$flag_cartao_digitado = 56; // int | Indica se o estabelecimento poder\u00C3\u00A1 originar transa\u00C3\u00A7\u00C3\u00B5es sem a leitura da tarja ou do chip do cart\u00C3\u00A3o.
$inativo = 56; // int | Indica se o estabelecimento est\u00C3\u00A1 inativo.
$id_pais = 789; // int | Identificador de Pa\u00C3\u00ADs.
$mcc = 789; // int | C\u00C3\u00B3digo de Categoria de Mercado
$id_tipo_estabelecimento = 789; // int | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do Estabelecimento.
$id_moeda = 789; // int | C\u00C3\u00B3digo identificador da moeda.
$tipo_pagamento = "tipo_pagamento_example"; // string | Tipo do regime de pagamento do estabelecimento.
$numero_estabelecimento = "numero_estabelecimento_example"; // string | N\u00C3\u00BAmero de identifica\u00C3\u00A7\u00C3\u00A3o do Estabelecimento na Conductor.
$cep2 = "cep2_example"; // string | C\u00C3\u00B3digo de Endere\u00C3\u00A7amento Postal (CEP).
$nome_logradouro2 = "nome_logradouro2_example"; // string | Nome do Logradouro.
$numero_endereco2 = 56; // int | N\u00C3\u00BAmero do endere\u00C3\u00A7o.
$complemento2 = "complemento2_example"; // string | Descri\u00C3\u00A7\u00C3\u00B5es complementares referente ao endere\u00C3\u00A7o.
$bairro2 = "bairro2_example"; // string | Nome do bairro do endere\u00C3\u00A7o.
$cidade2 = "cidade2_example"; // string | Nome da cidade do endere\u00C3\u00A7o.
$uf2 = "uf2_example"; // string | Sigla de identifica\u00C3\u00A7\u00C3\u00A3o da Unidade Federativa do endere\u00C3\u00A7o.
$flag_matriz = 56; // int | Indica se \u00C3\u00A9 matriz ou filial.

try { 
    $result = $api_instance->listarUsingGET19($sort, $page, $limit, $id, $id_credor, $numero_receita_federal, $nome, $descricao, $nome_fantasia, $cep, $nome_logradouro, $numero_endereco, $complemento, $bairro, $cidade, $uf, $pais, $data_cadastramento, $contato, $email, $flag_arquivo_secr_fazenda, $flag_cartao_digitado, $inativo, $id_pais, $mcc, $id_tipo_estabelecimento, $id_moeda, $tipo_pagamento, $numero_estabelecimento, $cep2, $nome_logradouro2, $numero_endereco2, $complemento2, $bairro2, $cidade2, $uf2, $flag_matriz);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->listarUsingGET19: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do estabelecimento (id). | [optional] 
 **id_credor** | **int**| Apresenta o n\u00C3\u00BAmero de identifica\u00C3\u00A7\u00C3\u00A3o do Credor. | [optional] 
 **numero_receita_federal** | **string**| Apresenta o n\u00C3\u00BAmero de identifica\u00C3\u00A7\u00C3\u00A3o do Estabelecimento na Receita Federal. | [optional] 
 **nome** | **string**| Nome do Estabelecimento. | [optional] 
 **descricao** | **string**| Raz\u00C3\u00A3o Social do Estabelecimento. | [optional] 
 **nome_fantasia** | **string**| T\u00C3\u00ADtulo Comercial do Estabelecimento. | [optional] 
 **cep** | **string**| C\u00C3\u00B3digo de Endere\u00C3\u00A7amento Postal (CEP). | [optional] 
 **nome_logradouro** | **string**| Nome do Logradouro. | [optional] 
 **numero_endereco** | **int**| N\u00C3\u00BAmero do endere\u00C3\u00A7o. | [optional] 
 **complemento** | **string**| Descri\u00C3\u00A7\u00C3\u00B5es complementares referente ao endere\u00C3\u00A7o. | [optional] 
 **bairro** | **string**| Nome do bairro do endere\u00C3\u00A7o. | [optional] 
 **cidade** | **string**| Nome da cidade do endere\u00C3\u00A7o. | [optional] 
 **uf** | **string**| Sigla de identifica\u00C3\u00A7\u00C3\u00A3o da Unidade Federativa do endere\u00C3\u00A7o. | [optional] 
 **pais** | **string**| Nome do pa\u00C3\u00ADs. | [optional] 
 **data_cadastramento** | **string**| Data de Cadastro do Estabelecimento, no formato yyyy-MM-dd. | [optional] 
 **contato** | **string**| Nome da pessoa para contato com o Estabelecimento. | [optional] 
 **email** | **string**| E-mail da pessoa para contato com o Estabelecimento. | [optional] 
 **flag_arquivo_secr_fazenda** | **int**| Indica se o estabelecimento ser\u00C3\u00A1 inclu\u00C3\u00ADdo no arquivo de registro para a Secretaria da Fazenda Estadual. | [optional] 
 **flag_cartao_digitado** | **int**| Indica se o estabelecimento poder\u00C3\u00A1 originar transa\u00C3\u00A7\u00C3\u00B5es sem a leitura da tarja ou do chip do cart\u00C3\u00A3o. | [optional] 
 **inativo** | **int**| Indica se o estabelecimento est\u00C3\u00A1 inativo. | [optional] 
 **id_pais** | **int**| Identificador de Pa\u00C3\u00ADs. | [optional] 
 **mcc** | **int**| C\u00C3\u00B3digo de Categoria de Mercado | [optional] 
 **id_tipo_estabelecimento** | **int**| C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do Estabelecimento. | [optional] 
 **id_moeda** | **int**| C\u00C3\u00B3digo identificador da moeda. | [optional] 
 **tipo_pagamento** | **string**| Tipo do regime de pagamento do estabelecimento. | [optional] 
 **numero_estabelecimento** | **string**| N\u00C3\u00BAmero de identifica\u00C3\u00A7\u00C3\u00A3o do Estabelecimento na Conductor. | [optional] 
 **cep2** | **string**| C\u00C3\u00B3digo de Endere\u00C3\u00A7amento Postal (CEP). | [optional] 
 **nome_logradouro2** | **string**| Nome do Logradouro. | [optional] 
 **numero_endereco2** | **int**| N\u00C3\u00BAmero do endere\u00C3\u00A7o. | [optional] 
 **complemento2** | **string**| Descri\u00C3\u00A7\u00C3\u00B5es complementares referente ao endere\u00C3\u00A7o. | [optional] 
 **bairro2** | **string**| Nome do bairro do endere\u00C3\u00A7o. | [optional] 
 **cidade2** | **string**| Nome da cidade do endere\u00C3\u00A7o. | [optional] 
 **uf2** | **string**| Sigla de identifica\u00C3\u00A7\u00C3\u00A3o da Unidade Federativa do endere\u00C3\u00A7o. | [optional] 
 **flag_matriz** | **int**| Indica se \u00C3\u00A9 matriz ou filial. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageEstabelecimentoResponse**](PageEstabelecimentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET21**
> \br.com.conductor.pier.api.v2.model\PageGrupoEconomicoResponse listarUsingGET21($sort, $page, $limit, $razao_social, $nome_credor, $numero_receita_federal, $inscricao_estadual, $contato, $banco, $agencia, $digito_agencia, $conta_corrente, $digito_conta_corrente, $periodicidade, $pagamento_semanal, $pagamento_mensal, $pagamento_decendial_primeiro, $pagamento_decendial_segundo, $pagamento_decendial_terceiro, $pagamento_quinzenal_primeiro, $pagamento_quinzenal_segundo, $percentual_rav, $recebe_rav, $percentual_multiplica, $taxa_adm, $taxa_banco, $limite_rav, $id_credor_rav)

Listar grupos econ\u00C3\u00B4micos

Lista grupos econ\u00C3\u00B4micos cadastrados. 

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$razao_social = "razao_social_example"; // string | Raz\u00C3\u00A3o social da pessoa jur\u00C3\u00ADdica
$nome_credor = "nome_credor_example"; // string | Nome do credor
$numero_receita_federal = "numero_receita_federal_example"; // string | N\u00C3\u00BAmero da Receita Federal
$inscricao_estadual = "inscricao_estadual_example"; // string | N\u00C3\u00BAmero da inscri\u00C3\u00A7\u00C3\u00A3o estadual
$contato = "contato_example"; // string | Nome da pessoa para entrar em contato
$banco = 56; // int | C\u00C3\u00B3digo do banco
$agencia = 56; // int | Raz\u00C3\u00A3o social da pessoa jur\u00C3\u00ADdica
$digito_agencia = "digito_agencia_example"; // string | D\u00C3\u00ADgito Verificador da ag\u00C3\u00AAncia
$conta_corrente = "conta_corrente_example"; // string | C\u00C3\u00B3digo da Conta Corrente
$digito_conta_corrente = "digito_conta_corrente_example"; // string | D\u00C3\u00ADgito Verificador da Conta Corrente
$periodicidade = "periodicidade_example"; // string | Periodicidade do pagamento
$pagamento_semanal = "pagamento_semanal_example"; // string | Dia para pagamento semanal
$pagamento_mensal = 56; // int | Dia da data para o pagamento mensal
$pagamento_decendial_primeiro = 56; // int | Dia da data para o primeiro pagamento decendial
$pagamento_decendial_segundo = 56; // int | Dia da data para o segundo pagamento decendial
$pagamento_decendial_terceiro = 56; // int | Dia da data para o terceiro pagamento decendial
$pagamento_quinzenal_primeiro = 56; // int | Dia da data para o primeiro pagamento quinzenal
$pagamento_quinzenal_segundo = 56; // int | Dia da data para o segundo pagamento quinzenal
$percentual_rav = new Number(); // Number | Valor percentual do RAV do credor
$recebe_rav = "recebe_rav_example"; // string | Indica se o credor recebe RAV e o tipo
$percentual_multiplica = new Number(); // Number | Percentual Multiplica
$taxa_adm = new Number(); // Number | Taxa Administrativa
$taxa_banco = new Number(); // Number | Taxa do Banco
$limite_rav = new Number(); // Number | Valor limite do RAV
$id_credor_rav = 789; // int | C\u00C3\u00B3digo identificador do credor RAV

try { 
    $result = $api_instance->listarUsingGET21($sort, $page, $limit, $razao_social, $nome_credor, $numero_receita_federal, $inscricao_estadual, $contato, $banco, $agencia, $digito_agencia, $conta_corrente, $digito_conta_corrente, $periodicidade, $pagamento_semanal, $pagamento_mensal, $pagamento_decendial_primeiro, $pagamento_decendial_segundo, $pagamento_decendial_terceiro, $pagamento_quinzenal_primeiro, $pagamento_quinzenal_segundo, $percentual_rav, $recebe_rav, $percentual_multiplica, $taxa_adm, $taxa_banco, $limite_rav, $id_credor_rav);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->listarUsingGET21: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **razao_social** | **string**| Raz\u00C3\u00A3o social da pessoa jur\u00C3\u00ADdica | [optional] 
 **nome_credor** | **string**| Nome do credor | [optional] 
 **numero_receita_federal** | **string**| N\u00C3\u00BAmero da Receita Federal | [optional] 
 **inscricao_estadual** | **string**| N\u00C3\u00BAmero da inscri\u00C3\u00A7\u00C3\u00A3o estadual | [optional] 
 **contato** | **string**| Nome da pessoa para entrar em contato | [optional] 
 **banco** | **int**| C\u00C3\u00B3digo do banco | [optional] 
 **agencia** | **int**| Raz\u00C3\u00A3o social da pessoa jur\u00C3\u00ADdica | [optional] 
 **digito_agencia** | **string**| D\u00C3\u00ADgito Verificador da ag\u00C3\u00AAncia | [optional] 
 **conta_corrente** | **string**| C\u00C3\u00B3digo da Conta Corrente | [optional] 
 **digito_conta_corrente** | **string**| D\u00C3\u00ADgito Verificador da Conta Corrente | [optional] 
 **periodicidade** | **string**| Periodicidade do pagamento | [optional] 
 **pagamento_semanal** | **string**| Dia para pagamento semanal | [optional] 
 **pagamento_mensal** | **int**| Dia da data para o pagamento mensal | [optional] 
 **pagamento_decendial_primeiro** | **int**| Dia da data para o primeiro pagamento decendial | [optional] 
 **pagamento_decendial_segundo** | **int**| Dia da data para o segundo pagamento decendial | [optional] 
 **pagamento_decendial_terceiro** | **int**| Dia da data para o terceiro pagamento decendial | [optional] 
 **pagamento_quinzenal_primeiro** | **int**| Dia da data para o primeiro pagamento quinzenal | [optional] 
 **pagamento_quinzenal_segundo** | **int**| Dia da data para o segundo pagamento quinzenal | [optional] 
 **percentual_rav** | [**Number**](.md)| Valor percentual do RAV do credor | [optional] 
 **recebe_rav** | **string**| Indica se o credor recebe RAV e o tipo | [optional] 
 **percentual_multiplica** | [**Number**](.md)| Percentual Multiplica | [optional] 
 **taxa_adm** | [**Number**](.md)| Taxa Administrativa | [optional] 
 **taxa_banco** | [**Number**](.md)| Taxa do Banco | [optional] 
 **limite_rav** | [**Number**](.md)| Valor limite do RAV | [optional] 
 **id_credor_rav** | **int**| C\u00C3\u00B3digo identificador do credor RAV | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageGrupoEconomicoResponse**](PageGrupoEconomicoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET23**
> \br.com.conductor.pier.api.v2.model\PageMaquinetaResponse listarUsingGET23($sort, $page, $limit, $id_estabelecimento)

Lista as Maquinetas

Este m\u00C3\u00A9todo permite que sejam listadas as maquinetas existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id_estabelecimento = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo do Estabelecimento (id).

try { 
    $result = $api_instance->listarUsingGET23($sort, $page, $limit, $id_estabelecimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->listarUsingGET23: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id_estabelecimento** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo do Estabelecimento (id). | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageMaquinetaResponse**](PageMaquinetaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET24**
> \br.com.conductor.pier.api.v2.model\PageMoedaResponse listarUsingGET24($sort, $page, $limit, $codigo_moeda, $simbolo, $descricao)

Lista os tipos de moedas do emissor 

Este recurso permite que sejam listados os tipos de moedas existentes na base de dados do emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$codigo_moeda = "codigo_moeda_example"; // string | C\u00C3\u00B3digo identificador do tipo de moeda.
$simbolo = "simbolo_example"; // string | S\u00C3\u00ADmbolo da Moeda.
$descricao = "descricao_example"; // string | Descri\u00C3\u00A7\u00C3\u00A3o do tipo da moeda.

try { 
    $result = $api_instance->listarUsingGET24($sort, $page, $limit, $codigo_moeda, $simbolo, $descricao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->listarUsingGET24: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **codigo_moeda** | **string**| C\u00C3\u00B3digo identificador do tipo de moeda. | [optional] 
 **simbolo** | **string**| S\u00C3\u00ADmbolo da Moeda. | [optional] 
 **descricao** | **string**| Descri\u00C3\u00A7\u00C3\u00A3o do tipo da moeda. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageMoedaResponse**](PageMoedaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET25**
> \br.com.conductor.pier.api.v2.model\PageOperacaoCredorResponse listarUsingGET25($sort, $page, $limit, $id_operacao, $id_credor, $id_produto)

Lista as Regras Opera\u00C3\u00A7\u00C3\u00B5es

Este m\u00C3\u00A9todo permite que sejam listados as Regras opera\u00C3\u00A7\u00C3\u00B5es existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id_operacao = 789; // int | Apresenta o id da Opera\u00C3\u00A7\u00C3\u00A3o.
$id_credor = 789; // int | Apresenta o id do Credor.
$id_produto = 789; // int | Apresenta o id do produto que vai ser alterado.

try { 
    $result = $api_instance->listarUsingGET25($sort, $page, $limit, $id_operacao, $id_credor, $id_produto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->listarUsingGET25: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id_operacao** | **int**| Apresenta o id da Opera\u00C3\u00A7\u00C3\u00A3o. | [optional] 
 **id_credor** | **int**| Apresenta o id do Credor. | [optional] 
 **id_produto** | **int**| Apresenta o id do produto que vai ser alterado. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageOperacaoCredorResponse**](PageOperacaoCredorResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET36**
> \br.com.conductor.pier.api.v2.model\PageTelefoneEstabelecimentoResponse listarUsingGET36($sort, $page, $limit, $id_estabelecimento)

Lista os Telefones Estabelecimentos

Este m\u00C3\u00A9todo permite que sejam listados os telefones dos estabelecimentos existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id_estabelecimento = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo do Estabelecimento (id).

try { 
    $result = $api_instance->listarUsingGET36($sort, $page, $limit, $id_estabelecimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->listarUsingGET36: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id_estabelecimento** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo do Estabelecimento (id). | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTelefoneEstabelecimentoResponse**](PageTelefoneEstabelecimentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET38**
> \br.com.conductor.pier.api.v2.model\PageTerminalResponse listarUsingGET38($sort, $page, $limit, $id, $terminal, $numero_estabelecimento, $id_estabelecimento)

Lista os Terminais cadastrados no Emissor

Este m\u00C3\u00A9todo permite que sejam listados os terminais existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Terminal (id).
$terminal = "terminal_example"; // string | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do terminal.
$numero_estabelecimento = 789; // int | N\u00C3\u00BAmero do estabelecimento a qual o terminal pertence.
$id_estabelecimento = 789; // int | N\u00C3\u00BAmero de identifica\u00C3\u00A7\u00C3\u00A3o do estabelecimento a qual o terminal pertence.

try { 
    $result = $api_instance->listarUsingGET38($sort, $page, $limit, $id, $terminal, $numero_estabelecimento, $id_estabelecimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->listarUsingGET38: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Terminal (id). | [optional] 
 **terminal** | **string**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do terminal. | [optional] 
 **numero_estabelecimento** | **int**| N\u00C3\u00BAmero do estabelecimento a qual o terminal pertence. | [optional] 
 **id_estabelecimento** | **int**| N\u00C3\u00BAmero de identifica\u00C3\u00A7\u00C3\u00A3o do estabelecimento a qual o terminal pertence. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTerminalResponse**](PageTerminalResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET49**
> \br.com.conductor.pier.api.v2.model\PageVinculoEstabelecimentoAdquirenteResponse listarUsingGET49($sort, $page, $limit, $id_adquirente, $id_estabelecimento, $codigo_estabelecimento_adquirente)

Lista os V\u00C3\u00ADnculos dos estabelecimento com os adquirentes

Este m\u00C3\u00A9todo permite que sejam listados os V\u00C3\u00ADnculos dos estabelecimento com os adquirentes.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id_adquirente = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do adquirente (id).
$id_estabelecimento = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do estabelecimento.
$codigo_estabelecimento_adquirente = "codigo_estabelecimento_adquirente_example"; // string | C\u00C3\u00B3digo do v\u00C3\u00ADnculo entre o estabelecimento e o adquirente.

try { 
    $result = $api_instance->listarUsingGET49($sort, $page, $limit, $id_adquirente, $id_estabelecimento, $codigo_estabelecimento_adquirente);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->listarUsingGET49: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id_adquirente** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do adquirente (id). | [optional] 
 **id_estabelecimento** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do estabelecimento. | [optional] 
 **codigo_estabelecimento_adquirente** | **string**| C\u00C3\u00B3digo do v\u00C3\u00ADnculo entre o estabelecimento e o adquirente. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageVinculoEstabelecimentoAdquirenteResponse**](PageVinculoEstabelecimentoAdquirenteResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET50**
> \br.com.conductor.pier.api.v2.model\PageVinculoOperacaoResponse listarUsingGET50($id, $sort, $page, $limit, $id_produto, $id_operacao, $codigo_mcc)

Lista os v\u00C3\u00ADnculos cadastrados no Emissor

Este m\u00C3\u00A9todo permite que sejam listados os v\u00C3\u00ADnculos opera\u00C3\u00A7\u00C3\u00B5es existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do estabelecimento (id).
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$id_produto = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Produto (id).
$id_operacao = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Opera\u00C3\u00A7\u00C3\u00A3o (id).
$codigo_mcc = 56; // int | C\u00C3\u00B3digo MCC.

try { 
    $result = $api_instance->listarUsingGET50($id, $sort, $page, $limit, $id_produto, $id_operacao, $codigo_mcc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->listarUsingGET50: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do estabelecimento (id). | 
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **id_produto** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Produto (id). | [optional] 
 **id_operacao** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Opera\u00C3\u00A7\u00C3\u00A3o (id). | [optional] 
 **codigo_mcc** | **int**| C\u00C3\u00B3digo MCC. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageVinculoOperacaoResponse**](PageVinculoOperacaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST15**
> \br.com.conductor.pier.api.v2.model\MaquinetaResponse salvarUsingPOST15($maquineta_persist)

Realiza o cadastro de uma nova maquineta para um estabelecimento 

Este m\u00C3\u00A9todo permite que seja cadastrada uma nova maquineta para um estabelecimento.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$maquineta_persist = new \br.com.conductor.pier.api.v2.model\MaquinetaPersist(); // \br.com.conductor.pier.api.v2.model\MaquinetaPersist | maquinetaPersist

try { 
    $result = $api_instance->salvarUsingPOST15($maquineta_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->salvarUsingPOST15: ', $e->getMessage(), "\n";
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

# **salvarUsingPOST16**
> \br.com.conductor.pier.api.v2.model\OperacaoCredorResponse salvarUsingPOST16($oprecao_credor_persist)

Realiza o cadastro de uma nova Regra Opera\u00C3\u00A7\u00C3\u00A3o

Este m\u00C3\u00A9todo permite que seja cadastrada uma nova Regra Opera\u00C3\u00A7\u00C3\u00A3o.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$oprecao_credor_persist = new \br.com.conductor.pier.api.v2.model\OperacaoCredorPersist(); // \br.com.conductor.pier.api.v2.model\OperacaoCredorPersist | oprecaoCredorPersist

try { 
    $result = $api_instance->salvarUsingPOST16($oprecao_credor_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->salvarUsingPOST16: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oprecao_credor_persist** | [**\br.com.conductor.pier.api.v2.model\OperacaoCredorPersist**](\br.com.conductor.pier.api.v2.model\OperacaoCredorPersist.md)| oprecaoCredorPersist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\OperacaoCredorResponse**](OperacaoCredorResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST21**
> \br.com.conductor.pier.api.v2.model\TelefoneEstabelecimentoResponse salvarUsingPOST21($id_estabelecimento, $ddd, $telefone, $ramal)

Realiza o cadastro de um novo telefone para um estabelecimento 

Este m\u00C3\u00A9todo permite que seja cadastrado um novo telefone para um estabelecimento.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id_estabelecimento = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Estabelecimento (id).
$ddd = "ddd_example"; // string | C\u00C3\u00B3digo DDD do telefone (id).
$telefone = "telefone_example"; // string | N\u00C3\u00BAmero do telefone.
$ramal = "ramal_example"; // string | N\u00C3\u00BAmero do ramal.

try { 
    $result = $api_instance->salvarUsingPOST21($id_estabelecimento, $ddd, $telefone, $ramal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->salvarUsingPOST21: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_estabelecimento** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Estabelecimento (id). | 
 **ddd** | **string**| C\u00C3\u00B3digo DDD do telefone (id). | 
 **telefone** | **string**| N\u00C3\u00BAmero do telefone. | 
 **ramal** | **string**| N\u00C3\u00BAmero do ramal. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\TelefoneEstabelecimentoResponse**](TelefoneEstabelecimentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST23**
> \br.com.conductor.pier.api.v2.model\TerminalResponse salvarUsingPOST23($terminal_persist)

Realiza o cadastro de um novo Terminal

Este m\u00C3\u00A9todo permite que seja cadastrado um novo Terminal.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$terminal_persist = new \br.com.conductor.pier.api.v2.model\TerminalPersist(); // \br.com.conductor.pier.api.v2.model\TerminalPersist | terminalPersist

try { 
    $result = $api_instance->salvarUsingPOST23($terminal_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->salvarUsingPOST23: ', $e->getMessage(), "\n";
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

# **salvarUsingPOST28**
> \br.com.conductor.pier.api.v2.model\VinculoEstabelecimentoAdquirenteResponse salvarUsingPOST28($vinculo_estabelecimento_adquirente_persist)

Realiza o cadastro de um novo VinculoEstabelecimentoAdquirente

Este m\u00C3\u00A9todo permite que seja cadastrado um novo VinculoEstabelecimentoAdquirente.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$vinculo_estabelecimento_adquirente_persist = new \br.com.conductor.pier.api.v2.model\VinculoEstabelecimentoAdquirentePersist(); // \br.com.conductor.pier.api.v2.model\VinculoEstabelecimentoAdquirentePersist | vinculoEstabelecimentoAdquirentePersist

try { 
    $result = $api_instance->salvarUsingPOST28($vinculo_estabelecimento_adquirente_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->salvarUsingPOST28: ', $e->getMessage(), "\n";
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

