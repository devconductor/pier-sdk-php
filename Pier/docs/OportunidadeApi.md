# br.com.conductor.pier.api.v2.invoker\OportunidadeApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarStatusUsingPUT**](OportunidadeApi.md#alterarStatusUsingPUT) | **PUT** /api/tipos-oportunidades/{id}/status/{idStatus} | Altera o status do tipo oportunidade
[**alterarUsingPUT12**](OportunidadeApi.md#alterarUsingPUT12) | **PUT** /api/oportunidades/{id} | Altera as oportunidades
[**alterarUsingPUT18**](OportunidadeApi.md#alterarUsingPUT18) | **PUT** /api/tipos-oportunidades/{id} | Altera os tipos oportunidades
[**consultarStatusUsingGET**](OportunidadeApi.md#consultarStatusUsingGET) | **GET** /api/tipos-oportunidades/{id}/status/{idStatus} | Apresenta dados de um determinado status do tipo oportunidade
[**consultarUsingGET23**](OportunidadeApi.md#consultarUsingGET23) | **GET** /api/oportunidades/{id} | Apresenta dados de uma determinada oportunidade
[**consultarUsingGET37**](OportunidadeApi.md#consultarUsingGET37) | **GET** /api/tipos-oportunidades/{id} | Apresenta dados de um determinado tipo oportunidade
[**listarAuditoriasStatusUsingGET**](OportunidadeApi.md#listarAuditoriasStatusUsingGET) | **GET** /api/auditorias-status-oportunidades | Lista as auditorias dos status oportunidades
[**listarAuditoriasUsingGET**](OportunidadeApi.md#listarAuditoriasUsingGET) | **GET** /api/auditorias-oportunidades | Lista as auditorias das oportunidades
[**listarAuditoriasUsingGET1**](OportunidadeApi.md#listarAuditoriasUsingGET1) | **GET** /api/auditorias-tipos-oportunidades | Lista as auditorias dos tipos oportunidades
[**listarStatusUsingGET**](OportunidadeApi.md#listarStatusUsingGET) | **GET** /api/tipos-oportunidades/{id}/status | Lista os status do tipo oportunidades
[**listarUsingGET30**](OportunidadeApi.md#listarUsingGET30) | **GET** /api/oportunidades | Lista as oportunidades
[**listarUsingGET45**](OportunidadeApi.md#listarUsingGET45) | **GET** /api/tipos-oportunidades | Lista os tipos oportunidades
[**salvarStatusUsingPOST**](OportunidadeApi.md#salvarStatusUsingPOST) | **POST** /api/tipos-oportunidades/{id}/status | Cadastra status para o tipo oportunidade
[**salvarUsingPOST18**](OportunidadeApi.md#salvarUsingPOST18) | **POST** /api/oportunidades | Cadastra as oportunidades
[**salvarUsingPOST25**](OportunidadeApi.md#salvarUsingPOST25) | **POST** /api/tipos-oportunidades | Cadastra tipos oportunidades


# **alterarStatusUsingPUT**
> \br.com.conductor.pier.api.v2.model\StatusOportunidadeResponse alterarStatusUsingPUT($id, $id_status, $persist)

Altera o status do tipo oportunidade

Este m\u00E9todo realiza a altera\u00E7\u00E3o do status do tipo oportunidade.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\OportunidadeApi();
$id = 789; // int | C\u00F3digo de identifica\u00E7\u00E3o do tipo oportunidade (id).
$id_status = 789; // int | C\u00F3digo de identifica\u00E7\u00E3o do status do tipo oportunidade (id).
$persist = new \br.com.conductor.pier.api.v2.model\StatusOportunidade(); // \br.com.conductor.pier.api.v2.model\StatusOportunidade | persist

try { 
    $result = $api_instance->alterarStatusUsingPUT($id, $id_status, $persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OportunidadeApi->alterarStatusUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de identifica\u00E7\u00E3o do tipo oportunidade (id). | 
 **id_status** | **int**| C\u00F3digo de identifica\u00E7\u00E3o do status do tipo oportunidade (id). | 
 **persist** | [**\br.com.conductor.pier.api.v2.model\StatusOportunidade**](\br.com.conductor.pier.api.v2.model\StatusOportunidade.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\StatusOportunidadeResponse**](StatusOportunidadeResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarUsingPUT12**
> \br.com.conductor.pier.api.v2.model\OportunidadeResponse alterarUsingPUT12($id, $update)

Altera as oportunidades

Este m\u00E9todo realiza a altera\u00E7\u00E3o das oportunidades.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\OportunidadeApi();
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o da oportunidade (id).
$update = new \br.com.conductor.pier.api.v2.model\OportunidadeUpdate(); // \br.com.conductor.pier.api.v2.model\OportunidadeUpdate | update

try { 
    $result = $api_instance->alterarUsingPUT12($id, $update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OportunidadeApi->alterarUsingPUT12: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o da oportunidade (id). | 
 **update** | [**\br.com.conductor.pier.api.v2.model\OportunidadeUpdate**](\br.com.conductor.pier.api.v2.model\OportunidadeUpdate.md)| update | 

### Return type

[**\br.com.conductor.pier.api.v2.model\OportunidadeResponse**](OportunidadeResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarUsingPUT18**
> \br.com.conductor.pier.api.v2.model\TipoOportunidadeResponse alterarUsingPUT18($id, $persist)

Altera os tipos oportunidades

Este m\u00E9todo realiza a altera\u00E7\u00E3o dos tipos oportunidades.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\OportunidadeApi();
$id = 789; // int | C\u00F3digo de Identifica\u00E7\u00E3o do tipo oportunidade (id).
$persist = new \br.com.conductor.pier.api.v2.model\TipoOportunidade(); // \br.com.conductor.pier.api.v2.model\TipoOportunidade | persist

try { 
    $result = $api_instance->alterarUsingPUT18($id, $persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OportunidadeApi->alterarUsingPUT18: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de Identifica\u00E7\u00E3o do tipo oportunidade (id). | 
 **persist** | [**\br.com.conductor.pier.api.v2.model\TipoOportunidade**](\br.com.conductor.pier.api.v2.model\TipoOportunidade.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TipoOportunidadeResponse**](TipoOportunidadeResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarStatusUsingGET**
> \br.com.conductor.pier.api.v2.model\StatusOportunidadeResponse consultarStatusUsingGET($id, $id_status)

Apresenta dados de um determinado status do tipo oportunidade

Este recurso permite consultar dados de um determinado status do tipo oportunidade a partir de seu codigo de identifica\u00E7\u00E3o (idStatus).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\OportunidadeApi();
$id = 789; // int | C\u00F3digo de identifica\u00E7\u00E3o do tipo oportunidade (id).
$id_status = 789; // int | C\u00F3digo de identifica\u00E7\u00E3o do status (idStatus).

try { 
    $result = $api_instance->consultarStatusUsingGET($id, $id_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OportunidadeApi->consultarStatusUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de identifica\u00E7\u00E3o do tipo oportunidade (id). | 
 **id_status** | **int**| C\u00F3digo de identifica\u00E7\u00E3o do status (idStatus). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\StatusOportunidadeResponse**](StatusOportunidadeResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET23**
> \br.com.conductor.pier.api.v2.model\OportunidadeResponse consultarUsingGET23($id)

Apresenta dados de uma determinada oportunidade

Este recurso permite consultar dados de uma determinada oportunidade a partir de seu codigo de identifica\u00E7\u00E3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\OportunidadeApi();
$id = 789; // int | C\u00F3digo de identifica\u00E7\u00E3o da oportunidade (id).

try { 
    $result = $api_instance->consultarUsingGET23($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OportunidadeApi->consultarUsingGET23: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de identifica\u00E7\u00E3o da oportunidade (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\OportunidadeResponse**](OportunidadeResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET37**
> \br.com.conductor.pier.api.v2.model\TipoOportunidadeResponse consultarUsingGET37($id)

Apresenta dados de um determinado tipo oportunidade

Este recurso permite consultar dados de um determinado tipo oportunidade a partir de seu codigo de identifica\u00E7\u00E3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\OportunidadeApi();
$id = 789; // int | C\u00F3digo de identifica\u00E7\u00E3o do tipo oportunidade (id).

try { 
    $result = $api_instance->consultarUsingGET37($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OportunidadeApi->consultarUsingGET37: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de identifica\u00E7\u00E3o do tipo oportunidade (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TipoOportunidadeResponse**](TipoOportunidadeResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarAuditoriasStatusUsingGET**
> \br.com.conductor.pier.api.v2.model\PageStatusOportunidadeAUDResponse listarAuditoriasStatusUsingGET($sort, $page, $limit, $rev_type, $rev_date, $id, $id_tipo_oportunidade, $nome, $descricao, $flag_ativo, $rev_user)

Lista as auditorias dos status oportunidades

Este recurso permite listar os status oportunidades.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\OportunidadeApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$rev_type = 789; // int | C\u00F3digo que representa o tipo de a\u00E7\u00E3o realizada no recurso de tipos oportunidades
$rev_date = "rev_date_example"; // string | Data da a\u00E7\u00E3o realizada no recurso de tipos oportunidades
$id = 789; // int | C\u00F3digo identificador do status oportunidade
$id_tipo_oportunidade = 789; // int | C\u00F3digo identificador do tipo oportunidade
$nome = "nome_example"; // string | Nome do status oportunidade
$descricao = "descricao_example"; // string | Descri\u00E7\u00E3o do status oportunidade
$flag_ativo = true; // bool | Flag de verifica\u00E7\u00E3o se o status oportunidade est\u00E1 ativo
$rev_user = "rev_user_example"; // string | Usu\u00E1rio da auditoria

try { 
    $result = $api_instance->listarAuditoriasStatusUsingGET($sort, $page, $limit, $rev_type, $rev_date, $id, $id_tipo_oportunidade, $nome, $descricao, $flag_ativo, $rev_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OportunidadeApi->listarAuditoriasStatusUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **rev_type** | **int**| C\u00F3digo que representa o tipo de a\u00E7\u00E3o realizada no recurso de tipos oportunidades | [optional] 
 **rev_date** | **string**| Data da a\u00E7\u00E3o realizada no recurso de tipos oportunidades | [optional] 
 **id** | **int**| C\u00F3digo identificador do status oportunidade | [optional] 
 **id_tipo_oportunidade** | **int**| C\u00F3digo identificador do tipo oportunidade | [optional] 
 **nome** | **string**| Nome do status oportunidade | [optional] 
 **descricao** | **string**| Descri\u00E7\u00E3o do status oportunidade | [optional] 
 **flag_ativo** | **bool**| Flag de verifica\u00E7\u00E3o se o status oportunidade est\u00E1 ativo | [optional] 
 **rev_user** | **string**| Usu\u00E1rio da auditoria | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageStatusOportunidadeAUDResponse**](PageStatusOportunidadeAUDResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarAuditoriasUsingGET**
> \br.com.conductor.pier.api.v2.model\PageOportunidadeAUDResponse listarAuditoriasUsingGET($sort, $page, $limit, $id_status_oportunidade, $data_cadastro, $data_atualizacao, $numero_receita_federal, $data_inicio_vigencia, $datat_fim_vigencia, $flag_ativo, $rev_date, $rev_type, $rev_user)

Lista as auditorias das oportunidades

Este recurso permite listar as auditorias das oportunidades.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\OportunidadeApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$id_status_oportunidade = 789; // int | C\u00F3digo identificador do status oportunidade
$data_cadastro = "data_cadastro_example"; // string | Data do cadastro da oportunidade
$data_atualizacao = "data_atualizacao_example"; // string | Data da atualiza\u00E7\u00E3o da oportunidade
$numero_receita_federal = "numero_receita_federal_example"; // string | N\u00FAmero receita federal do cliente ao qual ser\u00E1 ofertada a oportunidade
$data_inicio_vigencia = "data_inicio_vigencia_example"; // string | In\u00EDcio da vig\u00EAncia da oportunidade
$datat_fim_vigencia = "datat_fim_vigencia_example"; // string | Fim da vig\u00EAncia da oportunidade
$flag_ativo = true; // bool | Flag de verifica\u00E7\u00E3o se a oportunidade est\u00E1 ativa
$rev_date = "rev_date_example"; // string | Data da auditoria
$rev_type = "rev_type_example"; // string | Tipo da auditoria
$rev_user = "rev_user_example"; // string | Usu\u00E1rio da auditoria

try { 
    $result = $api_instance->listarAuditoriasUsingGET($sort, $page, $limit, $id_status_oportunidade, $data_cadastro, $data_atualizacao, $numero_receita_federal, $data_inicio_vigencia, $datat_fim_vigencia, $flag_ativo, $rev_date, $rev_type, $rev_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OportunidadeApi->listarAuditoriasUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **id_status_oportunidade** | **int**| C\u00F3digo identificador do status oportunidade | [optional] 
 **data_cadastro** | **string**| Data do cadastro da oportunidade | [optional] 
 **data_atualizacao** | **string**| Data da atualiza\u00E7\u00E3o da oportunidade | [optional] 
 **numero_receita_federal** | **string**| N\u00FAmero receita federal do cliente ao qual ser\u00E1 ofertada a oportunidade | [optional] 
 **data_inicio_vigencia** | **string**| In\u00EDcio da vig\u00EAncia da oportunidade | [optional] 
 **datat_fim_vigencia** | **string**| Fim da vig\u00EAncia da oportunidade | [optional] 
 **flag_ativo** | **bool**| Flag de verifica\u00E7\u00E3o se a oportunidade est\u00E1 ativa | [optional] 
 **rev_date** | **string**| Data da auditoria | [optional] 
 **rev_type** | **string**| Tipo da auditoria | [optional] 
 **rev_user** | **string**| Usu\u00E1rio da auditoria | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageOportunidadeAUDResponse**](PageOportunidadeAUDResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarAuditoriasUsingGET1**
> \br.com.conductor.pier.api.v2.model\PageTipoOportunidadeAUDResponse listarAuditoriasUsingGET1($sort, $page, $limit, $rev_type, $rev_date, $id, $descricao, $flag_ativo, $rev_user)

Lista as auditorias dos tipos oportunidades

Este recurso permite listar os tipos oportunidades.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\OportunidadeApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$rev_type = 789; // int | C\u00F3digo que representa o tipo de a\u00E7\u00E3o realizada no recurso de tipos oportunidades
$rev_date = "rev_date_example"; // string | Data da a\u00E7\u00E3o realizada no recurso de tipos oportunidades
$id = 789; // int | C\u00F3digo identificador do tipo oportunidade no qual foi realizado a a\u00E7\u00E3o
$descricao = "descricao_example"; // string | Descri\u00E7\u00E3o do tipo oportunidade no qual foi realizado a a\u00E7\u00E3o
$flag_ativo = true; // bool | Atributo que representa se o tipo oportunidade est\u00E1 ativo
$rev_user = "rev_user_example"; // string | Usu\u00E1rio da auditoria

try { 
    $result = $api_instance->listarAuditoriasUsingGET1($sort, $page, $limit, $rev_type, $rev_date, $id, $descricao, $flag_ativo, $rev_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OportunidadeApi->listarAuditoriasUsingGET1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **rev_type** | **int**| C\u00F3digo que representa o tipo de a\u00E7\u00E3o realizada no recurso de tipos oportunidades | [optional] 
 **rev_date** | **string**| Data da a\u00E7\u00E3o realizada no recurso de tipos oportunidades | [optional] 
 **id** | **int**| C\u00F3digo identificador do tipo oportunidade no qual foi realizado a a\u00E7\u00E3o | [optional] 
 **descricao** | **string**| Descri\u00E7\u00E3o do tipo oportunidade no qual foi realizado a a\u00E7\u00E3o | [optional] 
 **flag_ativo** | **bool**| Atributo que representa se o tipo oportunidade est\u00E1 ativo | [optional] 
 **rev_user** | **string**| Usu\u00E1rio da auditoria | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTipoOportunidadeAUDResponse**](PageTipoOportunidadeAUDResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarStatusUsingGET**
> \br.com.conductor.pier.api.v2.model\PageStatusOportunidadeResponse listarStatusUsingGET($id, $sort, $page, $limit, $nome, $descricao, $flag_ativo)

Lista os status do tipo oportunidades

Este recurso permite listar os status do tipo oportunidades.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\OportunidadeApi();
$id = 789; // int | C\u00F3digo de identifica\u00E7\u00E3o do tipo oportunidade (id).
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$nome = "nome_example"; // string | Nome do status oportunidade
$descricao = "descricao_example"; // string | Descri\u00E7\u00E3o do status oportunidade
$flag_ativo = true; // bool | Flag de verifica\u00E7\u00E3o se o status oportunidade est\u00E1 ativo

try { 
    $result = $api_instance->listarStatusUsingGET($id, $sort, $page, $limit, $nome, $descricao, $flag_ativo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OportunidadeApi->listarStatusUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de identifica\u00E7\u00E3o do tipo oportunidade (id). | 
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **nome** | **string**| Nome do status oportunidade | [optional] 
 **descricao** | **string**| Descri\u00E7\u00E3o do status oportunidade | [optional] 
 **flag_ativo** | **bool**| Flag de verifica\u00E7\u00E3o se o status oportunidade est\u00E1 ativo | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageStatusOportunidadeResponse**](PageStatusOportunidadeResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET30**
> \br.com.conductor.pier.api.v2.model\PageOportunidadeResponse listarUsingGET30($sort, $page, $limit, $id_status_oportunidade, $data_cadastro, $data_atualizacao, $numero_receita_federal, $data_inicio_vigencia, $data_fim_vigencia, $flag_ativo)

Lista as oportunidades

Este recurso permite listar as oportunidades.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\OportunidadeApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$id_status_oportunidade = 789; // int | C\u00F3digo identificador do status oportunidade
$data_cadastro = "data_cadastro_example"; // string | Data do cadastro da oportunidade
$data_atualizacao = "data_atualizacao_example"; // string | Data da atualiza\u00E7\u00E3o da oportunidade
$numero_receita_federal = "numero_receita_federal_example"; // string | N\u00FAmero receita federal do cliente ao qual ser\u00E1 ofertada a oportunidade
$data_inicio_vigencia = "data_inicio_vigencia_example"; // string | Data de in\u00EDcio da vig\u00EAncia da oportunidade
$data_fim_vigencia = "data_fim_vigencia_example"; // string | Data do fim da vig\u00EAncia da oportunidade
$flag_ativo = true; // bool | Flag de verifica\u00E7\u00E3o se a oportunidade est\u00E1 ativa

try { 
    $result = $api_instance->listarUsingGET30($sort, $page, $limit, $id_status_oportunidade, $data_cadastro, $data_atualizacao, $numero_receita_federal, $data_inicio_vigencia, $data_fim_vigencia, $flag_ativo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OportunidadeApi->listarUsingGET30: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **id_status_oportunidade** | **int**| C\u00F3digo identificador do status oportunidade | [optional] 
 **data_cadastro** | **string**| Data do cadastro da oportunidade | [optional] 
 **data_atualizacao** | **string**| Data da atualiza\u00E7\u00E3o da oportunidade | [optional] 
 **numero_receita_federal** | **string**| N\u00FAmero receita federal do cliente ao qual ser\u00E1 ofertada a oportunidade | [optional] 
 **data_inicio_vigencia** | **string**| Data de in\u00EDcio da vig\u00EAncia da oportunidade | [optional] 
 **data_fim_vigencia** | **string**| Data do fim da vig\u00EAncia da oportunidade | [optional] 
 **flag_ativo** | **bool**| Flag de verifica\u00E7\u00E3o se a oportunidade est\u00E1 ativa | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageOportunidadeResponse**](PageOportunidadeResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET45**
> \br.com.conductor.pier.api.v2.model\PageTipoOportunidadeResponse listarUsingGET45($sort, $page, $limit, $descricao, $flag_ativo)

Lista os tipos oportunidades

Este recurso permite listar os tipos oportunidades.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\OportunidadeApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00E7\u00E3o dos registros.
$page = 56; // int | P\u00E1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50)
$descricao = "descricao_example"; // string | Descri\u00E7\u00E3o do tipo oportunidade
$flag_ativo = true; // bool | Flag de verifica\u00E7\u00E3o se o tipo oportunidade est\u00E1 ativo

try { 
    $result = $api_instance->listarUsingGET45($sort, $page, $limit, $descricao, $flag_ativo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OportunidadeApi->listarUsingGET45: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 
 **page** | **int**| P\u00E1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00E7\u00E3o (Default = 50, Max = 50) | [optional] 
 **descricao** | **string**| Descri\u00E7\u00E3o do tipo oportunidade | [optional] 
 **flag_ativo** | **bool**| Flag de verifica\u00E7\u00E3o se o tipo oportunidade est\u00E1 ativo | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageTipoOportunidadeResponse**](PageTipoOportunidadeResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarStatusUsingPOST**
> \br.com.conductor.pier.api.v2.model\StatusOportunidadeResponse salvarStatusUsingPOST($id, $persist)

Cadastra status para o tipo oportunidade

Esse recurso permite cadastrar status para o tipo oportunidade.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\OportunidadeApi();
$id = 789; // int | C\u00F3digo de identifica\u00E7\u00E3o do tipo oportunidade (id).
$persist = new \br.com.conductor.pier.api.v2.model\StatusOportunidade(); // \br.com.conductor.pier.api.v2.model\StatusOportunidade | persist

try { 
    $result = $api_instance->salvarStatusUsingPOST($id, $persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OportunidadeApi->salvarStatusUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00F3digo de identifica\u00E7\u00E3o do tipo oportunidade (id). | 
 **persist** | [**\br.com.conductor.pier.api.v2.model\StatusOportunidade**](\br.com.conductor.pier.api.v2.model\StatusOportunidade.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\StatusOportunidadeResponse**](StatusOportunidadeResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST18**
> \br.com.conductor.pier.api.v2.model\OportunidadeResponse salvarUsingPOST18($persist)

Cadastra as oportunidades

Esse recurso permite cadastrar oportunidades.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\OportunidadeApi();
$persist = new \br.com.conductor.pier.api.v2.model\OportunidadePersist(); // \br.com.conductor.pier.api.v2.model\OportunidadePersist | persist

try { 
    $result = $api_instance->salvarUsingPOST18($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OportunidadeApi->salvarUsingPOST18: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **persist** | [**\br.com.conductor.pier.api.v2.model\OportunidadePersist**](\br.com.conductor.pier.api.v2.model\OportunidadePersist.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\OportunidadeResponse**](OportunidadeResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST25**
> \br.com.conductor.pier.api.v2.model\TipoOportunidadeResponse salvarUsingPOST25($persist)

Cadastra tipos oportunidades

Esse recurso permite cadastrar tipos oportunidades.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\OportunidadeApi();
$persist = new \br.com.conductor.pier.api.v2.model\TipoOportunidade(); // \br.com.conductor.pier.api.v2.model\TipoOportunidade | persist

try { 
    $result = $api_instance->salvarUsingPOST25($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OportunidadeApi->salvarUsingPOST25: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **persist** | [**\br.com.conductor.pier.api.v2.model\TipoOportunidade**](\br.com.conductor.pier.api.v2.model\TipoOportunidade.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\TipoOportunidadeResponse**](TipoOportunidadeResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

