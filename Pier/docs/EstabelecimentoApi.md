# br.com.conductor.pier.api.v2.invoker\EstabelecimentoApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarOrigemComercialUsingPUT**](EstabelecimentoApi.md#alterarOrigemComercialUsingPUT) | **PUT** /api/origens-comerciais/{id} | Alterar Origem Comercial
[**alterarUsingPUT10**](EstabelecimentoApi.md#alterarUsingPUT10) | **PUT** /api/maquinetas/{id} | Altera uma Maquineta
[**alterarUsingPUT11**](EstabelecimentoApi.md#alterarUsingPUT11) | **PUT** /api/regras-operacoes-estabelecimentos/{id} | Altera uma Regra Opera\u00E7\u00E3o
[**alterarUsingPUT15**](EstabelecimentoApi.md#alterarUsingPUT15) | **PUT** /api/telefones-estabelecimentos/{id} | Altera um Telefone do estabelecimento
[**alterarUsingPUT17**](EstabelecimentoApi.md#alterarUsingPUT17) | **PUT** /api/terminais/{id} | Altera um Terminal
[**alterarUsingPUT6**](EstabelecimentoApi.md#alterarUsingPUT6) | **PUT** /api/estabelecimentos/{id} | Alterar um estabelecimento
[**alterarUsingPUT8**](EstabelecimentoApi.md#alterarUsingPUT8) | **PUT** /api/grupos-economicos/{id} | Alterar Grupo Econ\u00F4mico
[**cadastrarOrigemComercialUsingPOST**](EstabelecimentoApi.md#cadastrarOrigemComercialUsingPOST) | **POST** /api/origens-comerciais | Cadastrar Origem Comercial
[**cadastrarUsingPOST2**](EstabelecimentoApi.md#cadastrarUsingPOST2) | **POST** /api/estabelecimentos | Cadastrar um estabelecimento
[**cadastrarUsingPOST3**](EstabelecimentoApi.md#cadastrarUsingPOST3) | **POST** /api/grupos-economicos | Cadastrar Grupo Econ\u00F4mico
[**consultaOperacaoUsingGET**](EstabelecimentoApi.md#consultaOperacaoUsingGET) | **GET** /api/tipos-operacoes-estabelecimentos/{id} | Apresenta dados de um determinado tipo de opera\u00E7\u00E3o
[**consultarOrigemComercialUsingGET**](EstabelecimentoApi.md#consultarOrigemComercialUsingGET) | **GET** /api/origens-comerciais/{id} | Consultar Origem Comercial
[**consultarUsingGET17**](EstabelecimentoApi.md#consultarUsingGET17) | **GET** /api/estabelecimentos/{id} | Consultar estabelecimento por id
[**consultarUsingGET19**](EstabelecimentoApi.md#consultarUsingGET19) | **GET** /api/grupos-economicos/{id} | Consultar grupo econ\u00F4mico
[**consultarUsingGET21**](EstabelecimentoApi.md#consultarUsingGET21) | **GET** /api/maquinetas/{id} | Apresenta os dados de uma determinada maquineta
[**consultarUsingGET22**](EstabelecimentoApi.md#consultarUsingGET22) | **GET** /api/regras-operacoes-estabelecimentos/{id} | Apresenta os dados de uma determinada Regra Opera\u00E7\u00E3o
[**consultarUsingGET30**](EstabelecimentoApi.md#consultarUsingGET30) | **GET** /api/telefones-estabelecimentos/{id} | Apresenta os dados de um determinado telefone de um estabelecimento
[**consultarUsingGET32**](EstabelecimentoApi.md#consultarUsingGET32) | **GET** /api/terminais/{id} | Apresenta os dados de um determinado Terminal
[**consultarUsingGET44**](EstabelecimentoApi.md#consultarUsingGET44) | **GET** /api/adquirentes-estabelecimento/{id} | Apresenta os dados de um determinado V\u00EDnculo
[**desabilitarVinculoUsingPOST**](EstabelecimentoApi.md#desabilitarVinculoUsingPOST) | **POST** /api/adquirentes-estabelecimento/{id}/desabilitar | Desabilitar um V\u00EDnculo
[**desabilitarVinculoUsingPOST1**](EstabelecimentoApi.md#desabilitarVinculoUsingPOST1) | **POST** /api/estabelecimentos/{id}/desabilitar-operacao | Desabilitar um v\u00EDnculo opera\u00E7\u00E3o
[**habilitarVinculoUsingPOST**](EstabelecimentoApi.md#habilitarVinculoUsingPOST) | **POST** /api/adquirentes-estabelecimento/{id}/habilitar | Habilitar um V\u00EDnculo
[**habilitarVinculoUsingPOST1**](EstabelecimentoApi.md#habilitarVinculoUsingPOST1) | **POST** /api/estabelecimentos/{id}/habilitar-operacao | Habilitar um v\u00EDnculo opera\u00E7\u00E3o
[**listaOperacaoUsingGET**](EstabelecimentoApi.md#listaOperacaoUsingGET) | **GET** /api/tipos-operacoes-estabelecimentos | Apresenta dados de opera\u00E7\u00F5es em uma lista
[**listarMCCUsingGET**](EstabelecimentoApi.md#listarMCCUsingGET) | **GET** /api/mcc-estabelecimentos | Lista os MCCs
[**listarOrigensComerciaisUsingGET**](EstabelecimentoApi.md#listarOrigensComerciaisUsingGET) | **GET** /api/origens-comerciais | Listar Origens Comerciais
[**listarTiposAdquirentesUsingGET**](EstabelecimentoApi.md#listarTiposAdquirentesUsingGET) | **GET** /api/tipos-adquirentes | Lista os Tipos de adquirentes
[**listarTiposEstabelecimentosUsingGET**](EstabelecimentoApi.md#listarTiposEstabelecimentosUsingGET) | **GET** /api/tipos-estabelecimentos | Lista os tipos de estabelecimentos
[**listarTiposMaquinetasUsingGET**](EstabelecimentoApi.md#listarTiposMaquinetasUsingGET) | **GET** /api/tipos-maquinetas | Lista os Tipos de  Maquinetas
[**listarTiposOrigensComerciaisUsingGET**](EstabelecimentoApi.md#listarTiposOrigensComerciaisUsingGET) | **GET** /api/tipos-origens-comerciais | Listar tipos de origens comerciais
[**listarTiposTerminaisUsingGET1**](EstabelecimentoApi.md#listarTiposTerminaisUsingGET1) | **GET** /api/tipos-terminais-estabelecimento | Lista os Tipos Terminais
[**listarUsingGET22**](EstabelecimentoApi.md#listarUsingGET22) | **GET** /api/estabelecimentos | Lista Estabelecimentos
[**listarUsingGET24**](EstabelecimentoApi.md#listarUsingGET24) | **GET** /api/grupos-economicos | Listar grupos econ\u00F4micos
[**listarUsingGET25**](EstabelecimentoApi.md#listarUsingGET25) | **GET** /api/grupos-origens-comerciais | Listar grupos de origens comerciais
[**listarUsingGET27**](EstabelecimentoApi.md#listarUsingGET27) | **GET** /api/maquinetas | Lista as Maquinetas
[**listarUsingGET28**](EstabelecimentoApi.md#listarUsingGET28) | **GET** /api/tipos-moedas | Lista os tipos de moedas do emissor 
[**listarUsingGET29**](EstabelecimentoApi.md#listarUsingGET29) | **GET** /api/regras-operacoes-estabelecimentos | Lista as Regras Opera\u00E7\u00F5es
[**listarUsingGET40**](EstabelecimentoApi.md#listarUsingGET40) | **GET** /api/telefones-estabelecimentos | Lista os Telefones Estabelecimentos
[**listarUsingGET42**](EstabelecimentoApi.md#listarUsingGET42) | **GET** /api/terminais | Lista os Terminais cadastrados no Emissor
[**listarUsingGET53**](EstabelecimentoApi.md#listarUsingGET53) | **GET** /api/adquirentes-estabelecimento | Lista os V\u00EDnculos dos estabelecimento com os adquirentes
[**listarUsingGET54**](EstabelecimentoApi.md#listarUsingGET54) | **GET** /api/estabelecimentos/{id}/operacoes | Listar v\u00EDnculos de opera\u00E7\u00F5es do estabelecimento
[**salvarUsingPOST16**](EstabelecimentoApi.md#salvarUsingPOST16) | **POST** /api/maquinetas | Realiza o cadastro de uma nova maquineta para um estabelecimento 
[**salvarUsingPOST17**](EstabelecimentoApi.md#salvarUsingPOST17) | **POST** /api/regras-operacoes-estabelecimentos | Realiza o cadastro de uma nova Regra Opera\u00E7\u00E3o
[**salvarUsingPOST22**](EstabelecimentoApi.md#salvarUsingPOST22) | **POST** /api/telefones-estabelecimentos | Realiza o cadastro de um novo telefone para um estabelecimento 
[**salvarUsingPOST24**](EstabelecimentoApi.md#salvarUsingPOST24) | **POST** /api/terminais | Realiza o cadastro de um novo Terminal
[**salvarUsingPOST29**](EstabelecimentoApi.md#salvarUsingPOST29) | **POST** /api/adquirentes-estabelecimento | Realiza o cadastro de um novo VinculoEstabelecimentoAdquirente


# **alterarOrigemComercialUsingPUT**
> \br.com.conductor.pier.api.v2.model\OrigemComercialResponse alterarOrigemComercialUsingPUT($id, $origem_comercial_update)

Alterar Origem Comercial

Altera uma origem comercial.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00F3digo de identifica\u00E7\u00E3o da origem comercial
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
 **id** | **int**| C\u00F3digo de identifica\u00E7\u00E3o da origem comercial | 
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

Este m\u00E9todo realiza a altera\u00E7\u00E3o das maquinetas dos estabelecimentos.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o da Maquineta (id).
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
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o da Maquineta (id). | 
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

Altera uma Regra Opera\u00E7\u00E3o

Este m\u00E9todo realiza a altera\u00E7\u00E3o de uma regra opera\u00E7\u00E3o.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o da Regra Opera\u00E7\u00E3o (id).
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
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o da Regra Opera\u00E7\u00E3o (id). | 
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
> \br.com.conductor.pier.api.v2.model\TelefoneEstabelecimentoResponse alterarUsingPUT15($id, $telefone_estabelecimento_update)

Altera um Telefone do estabelecimento

Este m\u00E9todo realiza a altera\u00E7\u00E3o dos telefones dos estabelecimentos.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do Telefone Estabelecimento (id).
$telefone_estabelecimento_update = new \br.com.conductor.pier.api.v2.model\TelefoneEstabelecimentoUpdate(); // \br.com.conductor.pier.api.v2.model\TelefoneEstabelecimentoUpdate | telefoneEstabelecimentoUpdate

try { 
    $result = $api_instance->alterarUsingPUT15($id, $telefone_estabelecimento_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->alterarUsingPUT15: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do Telefone Estabelecimento (id). | 
 **telefone_estabelecimento_update** | [**\br.com.conductor.pier.api.v2.model\TelefoneEstabelecimentoUpdate**](\br.com.conductor.pier.api.v2.model\TelefoneEstabelecimentoUpdate.md)| telefoneEstabelecimentoUpdate | 

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

Este m\u00E9todo realiza a altera\u00E7\u00E3o dos Terminais.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do terminal (id).
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
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do terminal (id). | 
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

Alterar Grupo Econ\u00F4mico

Altera um grupo econ\u00F4mico.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00F3digo de identifica\u00E7\u00E3o do grupo econ\u00F4mico
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
 **id** | **int**| C\u00F3digo de identifica\u00E7\u00E3o do grupo econ\u00F4mico | 
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

Cadastrar Grupo Econ\u00F4mico

Cadastra um grupo econ\u00F4mico.

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

Apresenta dados de um determinado tipo de opera\u00E7\u00E3o

Este recurso permite consultar dados de um determinado tipo opera\u00E7\u00E3o a partir do idoperacao

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00F3digo de processamento da opera\u00E7\u00E3o (idOperacao).

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
 **id** | **int**| C\u00F3digo de processamento da opera\u00E7\u00E3o (idOperacao). | 

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

Consulta uma origem comercial atrav\u00E9s do seu identificador.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00F3digo de identifica\u00E7\u00E3o da origem comercial

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
 **id** | **int**| C\u00F3digo de identifica\u00E7\u00E3o da origem comercial | 

### Return type

[**\br.com.conductor.pier.api.v2.model\OrigemComercialResponse**](OrigemComercialResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET17**
> \br.com.conductor.pier.api.v2.model\EstabelecimentoResponse consultarUsingGET17($id)

Consultar estabelecimento por id

Consulta os detalhes de um determinado estabelecimento

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | Id

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
 **id** | **int**| Id | 

### Return type

[**\br.com.conductor.pier.api.v2.model\EstabelecimentoResponse**](EstabelecimentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET19**
> \br.com.conductor.pier.api.v2.model\GrupoEconomicoResponse consultarUsingGET19($id)

Consultar grupo econ\u00F4mico

Consulta um grupo econ\u00F4mico atrav\u00E9s do seu identificador.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00F3digo de identifica\u00E7\u00E3o do grupo econ\u00F4mico

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
 **id** | **int**| C\u00F3digo de identifica\u00E7\u00E3o do grupo econ\u00F4mico | 

### Return type

[**\br.com.conductor.pier.api.v2.model\GrupoEconomicoResponse**](GrupoEconomicoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET21**
> \br.com.conductor.pier.api.v2.model\MaquinetaResponse consultarUsingGET21($id)

Apresenta os dados de uma determinada maquineta

Este m\u00E9todo permite consultar uma determinada maquineta a partir do seu c\u00F3digo de identifica\u00E7\u00E3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o da Maquineta (id).

try { 
    $result = $api_instance->consultarUsingGET21($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->consultarUsingGET21: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o da Maquineta (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\MaquinetaResponse**](MaquinetaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET22**
> \br.com.conductor.pier.api.v2.model\OperacaoCredorResponse consultarUsingGET22($id)

Apresenta os dados de uma determinada Regra Opera\u00E7\u00E3o

Este m\u00E9todo permite consultar uma determinada regra opera\u00E7\u00E3o a partir do seu c\u00F3digo de identifica\u00E7\u00E3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o da Regra Opera\u00E7\u00E3o (id).

try { 
    $result = $api_instance->consultarUsingGET22($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->consultarUsingGET22: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o da Regra Opera\u00E7\u00E3o (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\OperacaoCredorResponse**](OperacaoCredorResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET30**
> \br.com.conductor.pier.api.v2.model\TelefoneEstabelecimentoResponse consultarUsingGET30($id)

Apresenta os dados de um determinado telefone de um estabelecimento

Este m\u00E9todo permite consultar um determinado telefone de um estabelecimento a partir do seu c\u00F3digo de identifica\u00E7\u00E3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do Telefone Estabelecimento (id).

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
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do Telefone Estabelecimento (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TelefoneEstabelecimentoResponse**](TelefoneEstabelecimentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET32**
> \br.com.conductor.pier.api.v2.model\TerminalResponse consultarUsingGET32($id)

Apresenta os dados de um determinado Terminal

Este m\u00E9todo permite consultar um determinado Terminal a partir do seu c\u00F3digo de identifica\u00E7\u00E3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do Terminal (id).

try { 
    $result = $api_instance->consultarUsingGET32($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->consultarUsingGET32: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do Terminal (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TerminalResponse**](TerminalResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET44**
> \br.com.conductor.pier.api.v2.model\VinculoEstabelecimentoAdquirenteResponse consultarUsingGET44($id)

Apresenta os dados de um determinado V\u00EDnculo

Este m\u00E9todo permite consultar um determinado V\u00EDnculo a partir do seu c\u00F3digo de identifica\u00E7\u00E3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do V\u00CDnculo (id).

try { 
    $result = $api_instance->consultarUsingGET44($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->consultarUsingGET44: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do V\u00CDnculo (id). | 

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

Desabilitar um V\u00EDnculo

Este m\u00E9todo realiza a desativa\u00E7\u00E3o de um v\u00EDnculo.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do V\u00EDnculo (id).

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
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do V\u00EDnculo (id). | 

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

Desabilitar um v\u00EDnculo opera\u00E7\u00E3o

Este m\u00E9todo permite desabilitar um v\u00EDnculo.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do estabelecimento (id).
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
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do estabelecimento (id). | 
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

Habilitar um V\u00EDnculo

Este m\u00E9todo realiza a ativa\u00E7\u00E3o de um v\u00EDnculo.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do V\u00EDnculo (id).

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
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do V\u00EDnculo (id). | 

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

Habilitar um v\u00EDnculo opera\u00E7\u00E3o

Este m\u00E9todo permite habilitar um v\u00EDnculo.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do estabelecimento (id).
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
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do estabelecimento (id). | 
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

Apresenta dados de opera\u00E7\u00F5es em uma lista

Este recurso permite listar as opera\u00E7\u00E3o

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$id_operacao = 789; // int | C\u00F3digo que identifica a opera\u00E7\u00E3o
$codigo_processamento = "codigo_processamento_example"; // string | C\u00F3digo de processamento usado em transa\u00E7\u00F5es com o autorizador

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
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **id_operacao** | **int**| C\u00F3digo que identifica a opera\u00E7\u00E3o | [optional] 
 **codigo_processamento** | **string**| C\u00F3digo de processamento usado em transa\u00E7\u00F5es com o autorizador | [optional] 

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

Este m\u00E9todo permite que sejam listados os MCCs existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)

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
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 

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
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$id = 789; // int | Id da origem comercial
$nome = "nome_example"; // string | Nome da origem comercial
$status = 56; // int | Indica o status da origem comercial
$id_estabelecimento = 789; // int | Identificador do estabelecimento
$id_produto = 789; // int | Identificador do produto
$descricao = "descricao_example"; // string | Descri\u00E7\u00E3o da origem comercial
$id_tipo_origem_comercial = 789; // int | Identificador do tipo de origem comercial
$id_grupo_origem_comercial = 789; // int | Identificador do grupo de origem comercial
$flag_pre_aprovado = true; // bool | Indica se permite pr\u00E9 aprova\u00E7\u00E3o
$flag_aprovacao_imediata = true; // bool | Indica se permite aprova\u00E7\u00E3o imediata
$nome_fantasia_plastico = "nome_fantasia_plastico_example"; // string | Nome fantasia impresso no pl\u00E1stico
$flag_cartao_provisorio = true; // bool | Indica se permite cart\u00E3o provis\u00F3rio
$flag_cartao_definitivo = true; // bool | Indica se permite cart\u00E3o definitivo
$usuario = "usuario_example"; // string | Usu\u00E1rio para autentica\u00E7\u00E3o
$senha = "senha_example"; // string | Senha para autentica\u00E7\u00E3o
$flag_origem_externa = true; // bool | Indica se \u00E9 origem externa
$flag_modificado = true; // bool | Indica se h\u00E1 modifica\u00E7\u00E3o
$flag_envia_fatura_usuario = true; // bool | Indica se envia fatura
$flag_credito_faturamento = true; // bool | Indica se permite cr\u00E9dito de faturamento
$flag_concede_limite_provisorio = true; // bool | Indica se concede limite provis\u00F3rio
$flag_digitalizar_doc = true; // bool | Indica se digitaliza documento
$flag_embossing_loja = true; // bool | Indica se realiza embossing em loja
$flag_consulta_previa = true; // bool | Indica se realiza consulta pr\u00E9via
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
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **id** | **int**| Id da origem comercial | [optional] 
 **nome** | **string**| Nome da origem comercial | [optional] 
 **status** | **int**| Indica o status da origem comercial | [optional] 
 **id_estabelecimento** | **int**| Identificador do estabelecimento | [optional] 
 **id_produto** | **int**| Identificador do produto | [optional] 
 **descricao** | **string**| Descri\u00E7\u00E3o da origem comercial | [optional] 
 **id_tipo_origem_comercial** | **int**| Identificador do tipo de origem comercial | [optional] 
 **id_grupo_origem_comercial** | **int**| Identificador do grupo de origem comercial | [optional] 
 **flag_pre_aprovado** | **bool**| Indica se permite pr\u00E9 aprova\u00E7\u00E3o | [optional] 
 **flag_aprovacao_imediata** | **bool**| Indica se permite aprova\u00E7\u00E3o imediata | [optional] 
 **nome_fantasia_plastico** | **string**| Nome fantasia impresso no pl\u00E1stico | [optional] 
 **flag_cartao_provisorio** | **bool**| Indica se permite cart\u00E3o provis\u00F3rio | [optional] 
 **flag_cartao_definitivo** | **bool**| Indica se permite cart\u00E3o definitivo | [optional] 
 **usuario** | **string**| Usu\u00E1rio para autentica\u00E7\u00E3o | [optional] 
 **senha** | **string**| Senha para autentica\u00E7\u00E3o | [optional] 
 **flag_origem_externa** | **bool**| Indica se \u00E9 origem externa | [optional] 
 **flag_modificado** | **bool**| Indica se h\u00E1 modifica\u00E7\u00E3o | [optional] 
 **flag_envia_fatura_usuario** | **bool**| Indica se envia fatura | [optional] 
 **flag_credito_faturamento** | **bool**| Indica se permite cr\u00E9dito de faturamento | [optional] 
 **flag_concede_limite_provisorio** | **bool**| Indica se concede limite provis\u00F3rio | [optional] 
 **flag_digitalizar_doc** | **bool**| Indica se digitaliza documento | [optional] 
 **flag_embossing_loja** | **bool**| Indica se realiza embossing em loja | [optional] 
 **flag_consulta_previa** | **bool**| Indica se realiza consulta pr\u00E9via | [optional] 
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

Este m\u00E9todo permite que sejam listados os tipos de adquirentes.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)

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
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 

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

Lista os tipos de estabelecimentos

Lista os tipos de estabelecimentos

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$descricao = "descricao_example"; // string | Descri\u00E7\u00E3o do tipo de estabelecimento.

try { 
    $result = $api_instance->listarTiposEstabelecimentosUsingGET($sort, $page, $limit, $descricao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->listarTiposEstabelecimentosUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **descricao** | **string**| Descri\u00E7\u00E3o do tipo de estabelecimento. | [optional] 

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

Lista os Tipos de  Maquinetas

Este m\u00E9todo permite que sejam listadas os Tipos de maquinetas existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)

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
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 

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

Listar tipos de origens comerciais

Lista os tipos de origens comerciais

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$nome = "nome_example"; // string | Nome do tipo de origem comercial

try { 
    $result = $api_instance->listarTiposOrigensComerciaisUsingGET($sort, $page, $limit, $nome);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->listarTiposOrigensComerciaisUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **nome** | **string**| Nome do tipo de origem comercial | [optional] 

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

Lista os Tipos Terminais

Este m\u00E9todo permite que sejam listados os tipos de terminais existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)

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
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTipoTerminalResponse**](PageTipoTerminalResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET22**
> \br.com.conductor.pier.api.v2.model\PageEstabelecimentoResponse listarUsingGET22($sort, $page, $limit, $id, $id_grupo_economico, $numero_receita_federal, $nome, $descricao, $nome_fantasia, $cep, $nome_logradouro, $numero_endereco, $complemento, $bairro, $cidade, $uf, $pais, $data_cadastramento, $contato, $email, $flag_arquivo_secr_fazenda, $flag_cartao_digitado, $inativo, $id_pais, $mcc, $id_tipo_estabelecimento, $correspondencia, $id_moeda, $tipo_pagamento, $numero_estabelecimento, $cep2, $nome_logradouro2, $numero_endereco2, $complemento2, $bairro2, $cidade2, $uf2, $flag_matriz)

Lista Estabelecimentos

Lista todos os Estabelecimentos

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$id = 789; // int | C\u00F3digo de identifica\u00E7\u00E3o do estabelecimento (id).
$id_grupo_economico = 789; // int | Apresenta o n\u00FAmero de identifica\u00E7\u00E3o do Grupo Econ\u00F4mico.
$numero_receita_federal = "numero_receita_federal_example"; // string | Apresenta o n\u00FAmero de identifica\u00E7\u00E3o do Estabelecimento na Receita Federal.
$nome = "nome_example"; // string | Nome do Estabelecimento.
$descricao = "descricao_example"; // string | Raz\u00E3o Social do Estabelecimento.
$nome_fantasia = "nome_fantasia_example"; // string | T\u00EDtulo Comercial do Estabelecimento.
$cep = "cep_example"; // string | C\u00F3digo de Endere\u00E7amento Postal (CEP).
$nome_logradouro = "nome_logradouro_example"; // string | Nome do Logradouro.
$numero_endereco = 56; // int | N\u00FAmero do endere\u00E7o.
$complemento = "complemento_example"; // string | Descri\u00E7\u00F5es complementares referente ao endere\u00E7o.
$bairro = "bairro_example"; // string | Nome do bairro do endere\u00E7o.
$cidade = "cidade_example"; // string | Nome da cidade do endere\u00E7o.
$uf = "uf_example"; // string | Sigla de identifica\u00E7\u00E3o da Unidade Federativa do endere\u00E7o.
$pais = "pais_example"; // string | Nome do pa\u00EDs.
$data_cadastramento = "data_cadastramento_example"; // string | Data de Cadastro do Estabelecimento, no formato yyyy-MM-dd.
$contato = "contato_example"; // string | Nome da pessoa para contato com o Estabelecimento.
$email = "email_example"; // string | E-mail da pessoa para contato com o Estabelecimento.
$flag_arquivo_secr_fazenda = 56; // int | Indica se o estabelecimento ser\u00E1 inclu\u00EDdo no arquivo de registro para a Secretaria da Fazenda Estadual.
$flag_cartao_digitado = 56; // int | Indica se o estabelecimento poder\u00E1 originar transa\u00E7\u00F5es sem a leitura da tarja ou do chip do cart\u00E3o.
$inativo = 56; // int | Indica se o estabelecimento est\u00E1 inativo.
$id_pais = 789; // int | Identificador de Pa\u00EDs.
$mcc = 789; // int | C\u00F3digo de Categoria de Mercado
$id_tipo_estabelecimento = 789; // int | C\u00F3digo de identifica\u00E7\u00E3o do tipo de Estabelecimento.
$correspondencia = 56; // int | Indicador para qual endere\u00E7o as correspond\u00EAncias ser\u00E3o enviadas, onde 1 \u00E9 ORIGEM e 2 ENDERE\u00C7O DE CORRESPOND\u00CANCIA.
$id_moeda = 789; // int | C\u00F3digo identificador da moeda.
$tipo_pagamento = "tipo_pagamento_example"; // string | Tipo do regime de pagamento do estabelecimento.
$numero_estabelecimento = "numero_estabelecimento_example"; // string | N\u00FAmero de identifica\u00E7\u00E3o do Estabelecimento na Conductor.
$cep2 = "cep2_example"; // string | C\u00F3digo de Endere\u00E7amento Postal (CEP).
$nome_logradouro2 = "nome_logradouro2_example"; // string | Nome do Logradouro.
$numero_endereco2 = 56; // int | N\u00FAmero do endere\u00E7o.
$complemento2 = "complemento2_example"; // string | Descri\u00E7\u00F5es complementares referente ao endere\u00E7o.
$bairro2 = "bairro2_example"; // string | Nome do bairro do endere\u00E7o.
$cidade2 = "cidade2_example"; // string | Nome da cidade do endere\u00E7o.
$uf2 = "uf2_example"; // string | Sigla de identifica\u00E7\u00E3o da Unidade Federativa do endere\u00E7o.
$flag_matriz = 56; // int | Indica se \u00E9 matriz ou filial.

try { 
    $result = $api_instance->listarUsingGET22($sort, $page, $limit, $id, $id_grupo_economico, $numero_receita_federal, $nome, $descricao, $nome_fantasia, $cep, $nome_logradouro, $numero_endereco, $complemento, $bairro, $cidade, $uf, $pais, $data_cadastramento, $contato, $email, $flag_arquivo_secr_fazenda, $flag_cartao_digitado, $inativo, $id_pais, $mcc, $id_tipo_estabelecimento, $correspondencia, $id_moeda, $tipo_pagamento, $numero_estabelecimento, $cep2, $nome_logradouro2, $numero_endereco2, $complemento2, $bairro2, $cidade2, $uf2, $flag_matriz);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->listarUsingGET22: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **id** | **int**| C\u00F3digo de identifica\u00E7\u00E3o do estabelecimento (id). | [optional] 
 **id_grupo_economico** | **int**| Apresenta o n\u00FAmero de identifica\u00E7\u00E3o do Grupo Econ\u00F4mico. | [optional] 
 **numero_receita_federal** | **string**| Apresenta o n\u00FAmero de identifica\u00E7\u00E3o do Estabelecimento na Receita Federal. | [optional] 
 **nome** | **string**| Nome do Estabelecimento. | [optional] 
 **descricao** | **string**| Raz\u00E3o Social do Estabelecimento. | [optional] 
 **nome_fantasia** | **string**| T\u00EDtulo Comercial do Estabelecimento. | [optional] 
 **cep** | **string**| C\u00F3digo de Endere\u00E7amento Postal (CEP). | [optional] 
 **nome_logradouro** | **string**| Nome do Logradouro. | [optional] 
 **numero_endereco** | **int**| N\u00FAmero do endere\u00E7o. | [optional] 
 **complemento** | **string**| Descri\u00E7\u00F5es complementares referente ao endere\u00E7o. | [optional] 
 **bairro** | **string**| Nome do bairro do endere\u00E7o. | [optional] 
 **cidade** | **string**| Nome da cidade do endere\u00E7o. | [optional] 
 **uf** | **string**| Sigla de identifica\u00E7\u00E3o da Unidade Federativa do endere\u00E7o. | [optional] 
 **pais** | **string**| Nome do pa\u00EDs. | [optional] 
 **data_cadastramento** | **string**| Data de Cadastro do Estabelecimento, no formato yyyy-MM-dd. | [optional] 
 **contato** | **string**| Nome da pessoa para contato com o Estabelecimento. | [optional] 
 **email** | **string**| E-mail da pessoa para contato com o Estabelecimento. | [optional] 
 **flag_arquivo_secr_fazenda** | **int**| Indica se o estabelecimento ser\u00E1 inclu\u00EDdo no arquivo de registro para a Secretaria da Fazenda Estadual. | [optional] 
 **flag_cartao_digitado** | **int**| Indica se o estabelecimento poder\u00E1 originar transa\u00E7\u00F5es sem a leitura da tarja ou do chip do cart\u00E3o. | [optional] 
 **inativo** | **int**| Indica se o estabelecimento est\u00E1 inativo. | [optional] 
 **id_pais** | **int**| Identificador de Pa\u00EDs. | [optional] 
 **mcc** | **int**| C\u00F3digo de Categoria de Mercado | [optional] 
 **id_tipo_estabelecimento** | **int**| C\u00F3digo de identifica\u00E7\u00E3o do tipo de Estabelecimento. | [optional] 
 **correspondencia** | **int**| Indicador para qual endere\u00E7o as correspond\u00EAncias ser\u00E3o enviadas, onde 1 \u00E9 ORIGEM e 2 ENDERE\u00C7O DE CORRESPOND\u00CANCIA. | [optional] 
 **id_moeda** | **int**| C\u00F3digo identificador da moeda. | [optional] 
 **tipo_pagamento** | **string**| Tipo do regime de pagamento do estabelecimento. | [optional] 
 **numero_estabelecimento** | **string**| N\u00FAmero de identifica\u00E7\u00E3o do Estabelecimento na Conductor. | [optional] 
 **cep2** | **string**| C\u00F3digo de Endere\u00E7amento Postal (CEP). | [optional] 
 **nome_logradouro2** | **string**| Nome do Logradouro. | [optional] 
 **numero_endereco2** | **int**| N\u00FAmero do endere\u00E7o. | [optional] 
 **complemento2** | **string**| Descri\u00E7\u00F5es complementares referente ao endere\u00E7o. | [optional] 
 **bairro2** | **string**| Nome do bairro do endere\u00E7o. | [optional] 
 **cidade2** | **string**| Nome da cidade do endere\u00E7o. | [optional] 
 **uf2** | **string**| Sigla de identifica\u00E7\u00E3o da Unidade Federativa do endere\u00E7o. | [optional] 
 **flag_matriz** | **int**| Indica se \u00E9 matriz ou filial. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageEstabelecimentoResponse**](PageEstabelecimentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET24**
> \br.com.conductor.pier.api.v2.model\PageGrupoEconomicoResponse listarUsingGET24($sort, $page, $limit, $razao_social, $nome_credor, $numero_receita_federal, $inscricao_estadual, $contato, $banco, $agencia, $digito_agencia, $conta_corrente, $digito_conta_corrente, $periodicidade, $pagamento_semanal, $pagamento_mensal, $pagamento_decendial_primeiro, $pagamento_decendial_segundo, $pagamento_decendial_terceiro, $pagamento_quinzenal_primeiro, $pagamento_quinzenal_segundo, $percentual_rav, $recebe_rav, $percentual_multiplica, $taxa_adm, $taxa_banco, $limite_rav, $id_credor_rav)

Listar grupos econ\u00F4micos

Lista grupos econ\u00F4micos cadastrados. 

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$razao_social = "razao_social_example"; // string | Raz\u00E3o social da pessoa jur\u00EDdica
$nome_credor = "nome_credor_example"; // string | Nome do credor
$numero_receita_federal = "numero_receita_federal_example"; // string | N\u00FAmero da Receita Federal
$inscricao_estadual = "inscricao_estadual_example"; // string | N\u00FAmero da inscri\u00E7\u00E3o estadual
$contato = "contato_example"; // string | Nome da pessoa para entrar em contato
$banco = 56; // int | C\u00F3digo do banco
$agencia = 56; // int | Raz\u00E3o social da pessoa jur\u00EDdica
$digito_agencia = "digito_agencia_example"; // string | D\u00EDgito Verificador da ag\u00EAncia
$conta_corrente = "conta_corrente_example"; // string | C\u00F3digo da Conta Corrente
$digito_conta_corrente = "digito_conta_corrente_example"; // string | D\u00EDgito Verificador da Conta Corrente
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
$id_credor_rav = 789; // int | C\u00F3digo identificador do credor RAV

try { 
    $result = $api_instance->listarUsingGET24($sort, $page, $limit, $razao_social, $nome_credor, $numero_receita_federal, $inscricao_estadual, $contato, $banco, $agencia, $digito_agencia, $conta_corrente, $digito_conta_corrente, $periodicidade, $pagamento_semanal, $pagamento_mensal, $pagamento_decendial_primeiro, $pagamento_decendial_segundo, $pagamento_decendial_terceiro, $pagamento_quinzenal_primeiro, $pagamento_quinzenal_segundo, $percentual_rav, $recebe_rav, $percentual_multiplica, $taxa_adm, $taxa_banco, $limite_rav, $id_credor_rav);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->listarUsingGET24: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **razao_social** | **string**| Raz\u00E3o social da pessoa jur\u00EDdica | [optional] 
 **nome_credor** | **string**| Nome do credor | [optional] 
 **numero_receita_federal** | **string**| N\u00FAmero da Receita Federal | [optional] 
 **inscricao_estadual** | **string**| N\u00FAmero da inscri\u00E7\u00E3o estadual | [optional] 
 **contato** | **string**| Nome da pessoa para entrar em contato | [optional] 
 **banco** | **int**| C\u00F3digo do banco | [optional] 
 **agencia** | **int**| Raz\u00E3o social da pessoa jur\u00EDdica | [optional] 
 **digito_agencia** | **string**| D\u00EDgito Verificador da ag\u00EAncia | [optional] 
 **conta_corrente** | **string**| C\u00F3digo da Conta Corrente | [optional] 
 **digito_conta_corrente** | **string**| D\u00EDgito Verificador da Conta Corrente | [optional] 
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
 **id_credor_rav** | **int**| C\u00F3digo identificador do credor RAV | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageGrupoEconomicoResponse**](PageGrupoEconomicoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET25**
> \br.com.conductor.pier.api.v2.model\PageGrupoOrigemComercialResponse listarUsingGET25($sort, $page, $limit, $nome)

Listar grupos de origens comerciais

Lista os grupos de origens comerciais

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$nome = "nome_example"; // string | Nome do grupo de origem comercial

try { 
    $result = $api_instance->listarUsingGET25($sort, $page, $limit, $nome);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->listarUsingGET25: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **nome** | **string**| Nome do grupo de origem comercial | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageGrupoOrigemComercialResponse**](PageGrupoOrigemComercialResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET27**
> \br.com.conductor.pier.api.v2.model\PageMaquinetaResponse listarUsingGET27($sort, $page, $limit, $id_estabelecimento)

Lista as Maquinetas

Este m\u00E9todo permite que sejam listadas as maquinetas existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$id_estabelecimento = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do Tipo do Estabelecimento (id).

try { 
    $result = $api_instance->listarUsingGET27($sort, $page, $limit, $id_estabelecimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->listarUsingGET27: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **id_estabelecimento** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do Tipo do Estabelecimento (id). | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageMaquinetaResponse**](PageMaquinetaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET28**
> \br.com.conductor.pier.api.v2.model\PageMoedaResponse listarUsingGET28($sort, $page, $limit, $codigo_moeda, $simbolo, $descricao)

Lista os tipos de moedas do emissor 

Este recurso permite que sejam listados os tipos de moedas existentes na base de dados do emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$codigo_moeda = "codigo_moeda_example"; // string | C\u00F3digo identificador do tipo de moeda.
$simbolo = "simbolo_example"; // string | S\u00EDmbolo da Moeda.
$descricao = "descricao_example"; // string | Descri\u00E7\u00E3o do tipo da moeda.

try { 
    $result = $api_instance->listarUsingGET28($sort, $page, $limit, $codigo_moeda, $simbolo, $descricao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->listarUsingGET28: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **codigo_moeda** | **string**| C\u00F3digo identificador do tipo de moeda. | [optional] 
 **simbolo** | **string**| S\u00EDmbolo da Moeda. | [optional] 
 **descricao** | **string**| Descri\u00E7\u00E3o do tipo da moeda. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageMoedaResponse**](PageMoedaResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET29**
> \br.com.conductor.pier.api.v2.model\PageOperacaoCredorResponse listarUsingGET29($sort, $page, $limit, $id_operacao, $id_credor, $id_produto)

Lista as Regras Opera\u00E7\u00F5es

Este m\u00E9todo permite que sejam listados as Regras opera\u00E7\u00F5es existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$id_operacao = 789; // int | Apresenta o id da Opera\u00E7\u00E3o.
$id_credor = 789; // int | Apresenta o id do Credor.
$id_produto = 789; // int | Apresenta o id do produto que vai ser alterado.

try { 
    $result = $api_instance->listarUsingGET29($sort, $page, $limit, $id_operacao, $id_credor, $id_produto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->listarUsingGET29: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **id_operacao** | **int**| Apresenta o id da Opera\u00E7\u00E3o. | [optional] 
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

# **listarUsingGET40**
> \br.com.conductor.pier.api.v2.model\PageTelefoneEstabelecimentoResponse listarUsingGET40($sort, $page, $limit, $id_estabelecimento)

Lista os Telefones Estabelecimentos

Este m\u00E9todo permite que sejam listados os telefones dos estabelecimentos existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$id_estabelecimento = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do Tipo do Estabelecimento (id).

try { 
    $result = $api_instance->listarUsingGET40($sort, $page, $limit, $id_estabelecimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->listarUsingGET40: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **id_estabelecimento** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do Tipo do Estabelecimento (id). | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTelefoneEstabelecimentoResponse**](PageTelefoneEstabelecimentoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET42**
> \br.com.conductor.pier.api.v2.model\PageTerminalResponse listarUsingGET42($sort, $page, $limit, $id, $terminal, $numero_estabelecimento, $id_estabelecimento)

Lista os Terminais cadastrados no Emissor

Este m\u00E9todo permite que sejam listados os terminais existentes na base de dados do Emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do Terminal (id).
$terminal = "terminal_example"; // string | C\u00F3digo de Identifica\u00E7\u00E3o do terminal.
$numero_estabelecimento = 789; // int | N\u00FAmero do estabelecimento a qual o terminal pertence.
$id_estabelecimento = 789; // int | N\u00FAmero de identifica\u00E7\u00E3o do estabelecimento a qual o terminal pertence.

try { 
    $result = $api_instance->listarUsingGET42($sort, $page, $limit, $id, $terminal, $numero_estabelecimento, $id_estabelecimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->listarUsingGET42: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do Terminal (id). | [optional] 
 **terminal** | **string**| C\u00F3digo de Identifica\u00E7\u00E3o do terminal. | [optional] 
 **numero_estabelecimento** | **int**| N\u00FAmero do estabelecimento a qual o terminal pertence. | [optional] 
 **id_estabelecimento** | **int**| N\u00FAmero de identifica\u00E7\u00E3o do estabelecimento a qual o terminal pertence. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTerminalResponse**](PageTerminalResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET53**
> \br.com.conductor.pier.api.v2.model\PageVinculoEstabelecimentoAdquirenteResponse listarUsingGET53($sort, $page, $limit, $id_adquirente, $id_estabelecimento, $codigo_estabelecimento_adquirente)

Lista os V\u00EDnculos dos estabelecimento com os adquirentes

Este m\u00E9todo permite que sejam listados os V\u00EDnculos dos estabelecimento com os adquirentes.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$id_adquirente = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do adquirente (id).
$id_estabelecimento = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do estabelecimento.
$codigo_estabelecimento_adquirente = "codigo_estabelecimento_adquirente_example"; // string | C\u00F3digo do v\u00EDnculo entre o estabelecimento e o adquirente.

try { 
    $result = $api_instance->listarUsingGET53($sort, $page, $limit, $id_adquirente, $id_estabelecimento, $codigo_estabelecimento_adquirente);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->listarUsingGET53: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **id_adquirente** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do adquirente (id). | [optional] 
 **id_estabelecimento** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do estabelecimento. | [optional] 
 **codigo_estabelecimento_adquirente** | **string**| C\u00F3digo do v\u00EDnculo entre o estabelecimento e o adquirente. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageVinculoEstabelecimentoAdquirenteResponse**](PageVinculoEstabelecimentoAdquirenteResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET54**
> \br.com.conductor.pier.api.v2.model\PageVinculoOperacaoResponse listarUsingGET54($id, $sort, $page, $limit, $id_produto, $id_operacao, $codigo_mcc)

Listar v\u00EDnculos de opera\u00E7\u00F5es do estabelecimento

Lista os v\u00EDnculos de opera\u00E7\u00F5es do estabelecimento. 

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do estabelecimento (id).
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$id_produto = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do Produto (id).
$id_operacao = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o da Opera\u00E7\u00E3o (id).
$codigo_mcc = 56; // int | C\u00F3digo MCC.

try { 
    $result = $api_instance->listarUsingGET54($id, $sort, $page, $limit, $id_produto, $id_operacao, $codigo_mcc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->listarUsingGET54: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do estabelecimento (id). | 
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **id_produto** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do Produto (id). | [optional] 
 **id_operacao** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o da Opera\u00E7\u00E3o (id). | [optional] 
 **codigo_mcc** | **int**| C\u00F3digo MCC. | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageVinculoOperacaoResponse**](PageVinculoOperacaoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST16**
> \br.com.conductor.pier.api.v2.model\MaquinetaResponse salvarUsingPOST16($maquineta_persist)

Realiza o cadastro de uma nova maquineta para um estabelecimento 

Este m\u00E9todo permite que seja cadastrada uma nova maquineta para um estabelecimento.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$maquineta_persist = new \br.com.conductor.pier.api.v2.model\MaquinetaPersist(); // \br.com.conductor.pier.api.v2.model\MaquinetaPersist | maquinetaPersist

try { 
    $result = $api_instance->salvarUsingPOST16($maquineta_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->salvarUsingPOST16: ', $e->getMessage(), "\n";
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

# **salvarUsingPOST17**
> \br.com.conductor.pier.api.v2.model\OperacaoCredorResponse salvarUsingPOST17($oprecao_credor_persist)

Realiza o cadastro de uma nova Regra Opera\u00E7\u00E3o

Este m\u00E9todo permite que seja cadastrada uma nova Regra Opera\u00E7\u00E3o.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$oprecao_credor_persist = new \br.com.conductor.pier.api.v2.model\OperacaoCredorPersist(); // \br.com.conductor.pier.api.v2.model\OperacaoCredorPersist | oprecaoCredorPersist

try { 
    $result = $api_instance->salvarUsingPOST17($oprecao_credor_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->salvarUsingPOST17: ', $e->getMessage(), "\n";
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

# **salvarUsingPOST22**
> \br.com.conductor.pier.api.v2.model\TelefoneEstabelecimentoResponse salvarUsingPOST22($telefone_estabelecimento_persist)

Realiza o cadastro de um novo telefone para um estabelecimento 

Este m\u00E9todo permite que seja cadastrado um novo telefone para um estabelecimento.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$telefone_estabelecimento_persist = new \br.com.conductor.pier.api.v2.model\TelefoneEstabelecimentoPersist(); // \br.com.conductor.pier.api.v2.model\TelefoneEstabelecimentoPersist | telefoneEstabelecimentoPersist

try { 
    $result = $api_instance->salvarUsingPOST22($telefone_estabelecimento_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->salvarUsingPOST22: ', $e->getMessage(), "\n";
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

# **salvarUsingPOST24**
> \br.com.conductor.pier.api.v2.model\TerminalResponse salvarUsingPOST24($terminal_persist)

Realiza o cadastro de um novo Terminal

Este m\u00E9todo permite que seja cadastrado um novo Terminal.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$terminal_persist = new \br.com.conductor.pier.api.v2.model\TerminalPersist(); // \br.com.conductor.pier.api.v2.model\TerminalPersist | terminalPersist

try { 
    $result = $api_instance->salvarUsingPOST24($terminal_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->salvarUsingPOST24: ', $e->getMessage(), "\n";
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

# **salvarUsingPOST29**
> \br.com.conductor.pier.api.v2.model\VinculoEstabelecimentoAdquirenteResponse salvarUsingPOST29($vinculo_estabelecimento_adquirente_persist)

Realiza o cadastro de um novo VinculoEstabelecimentoAdquirente

Este m\u00E9todo permite que seja cadastrado um novo VinculoEstabelecimentoAdquirente.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\EstabelecimentoApi();
$vinculo_estabelecimento_adquirente_persist = new \br.com.conductor.pier.api.v2.model\VinculoEstabelecimentoAdquirentePersist(); // \br.com.conductor.pier.api.v2.model\VinculoEstabelecimentoAdquirentePersist | vinculoEstabelecimentoAdquirentePersist

try { 
    $result = $api_instance->salvarUsingPOST29($vinculo_estabelecimento_adquirente_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstabelecimentoApi->salvarUsingPOST29: ', $e->getMessage(), "\n";
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

