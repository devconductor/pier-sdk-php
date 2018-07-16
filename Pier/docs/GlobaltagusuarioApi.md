# br.com.conductor.pier.api.v2.invoker\GlobaltagusuarioApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarSenhaLoginUsingPOST**](GlobaltagusuarioApi.md#alterarSenhaLoginUsingPOST) | **POST** /api/usuarios/{login}/alterar-senha | {{{usuario_resource_alterar_senha_login}}}
[**alterarSenhaUsingPUT**](GlobaltagusuarioApi.md#alterarSenhaUsingPUT) | **PUT** /api/usuarios/{id}/alterar-senha | {{{usuario_resource_alterar_senha}}}
[**alterarUsingPUT23**](GlobaltagusuarioApi.md#alterarUsingPUT23) | **PUT** /api/usuarios/{id} | {{{usuario_resource_alterar}}}
[**ativarUsuarioUsingPOST1**](GlobaltagusuarioApi.md#ativarUsuarioUsingPOST1) | **POST** /api/usuarios/{id}/ativar-usuario | {{{usuario_resource_ativar_usuario}}}
[**atualizarUsingPUT2**](GlobaltagusuarioApi.md#atualizarUsingPUT2) | **PUT** /api/controles-seguranca-dispositivos | {{{controle_seguranca_dispositivo_atualizar}}}
[**consultarContasVinculadasUsingGET**](GlobaltagusuarioApi.md#consultarContasVinculadasUsingGET) | **GET** /api/usuarios/{id}/vincular-contas | {{{usuario_recurso_listar_por_id_usuario}}}
[**consultarUsingGET15**](GlobaltagusuarioApi.md#consultarUsingGET15) | **GET** /api/controles-seguranca-dispositivos | {{{controle_seguranca_dispositivo_consultar}}}
[**consultarUsingGET51**](GlobaltagusuarioApi.md#consultarUsingGET51) | **GET** /api/usuarios/{id} | {{{usuario_resource_consultar}}}
[**desativarUsuarioUsingPOST1**](GlobaltagusuarioApi.md#desativarUsuarioUsingPOST1) | **POST** /api/usuarios/{id}/desativar-usuario | {{{usuario_resource_desativar_usuario}}}
[**listarUsingGET62**](GlobaltagusuarioApi.md#listarUsingGET62) | **GET** /api/usuarios | {{{usuario_resource_listar}}}
[**recuperarSenhaUsingPOST**](GlobaltagusuarioApi.md#recuperarSenhaUsingPOST) | **POST** /api/usuarios/{id}/recuperar-senha | {{{usuario_resource_recuperar_senha}}}
[**salvarUsingPOST33**](GlobaltagusuarioApi.md#salvarUsingPOST33) | **POST** /api/usuarios | {{{usuario_resource_salvar}}}
[**salvarUsingPOST9**](GlobaltagusuarioApi.md#salvarUsingPOST9) | **POST** /api/controles-seguranca-dispositivos | {{{controle_seguranca_dispositivo_salvar}}}
[**validarSenhaForteUsingPOST**](GlobaltagusuarioApi.md#validarSenhaForteUsingPOST) | **POST** /api/usuarios/validar-senha-forte | {{{usuario_resource_validar_senha_forte}}}
[**validarSenhaLoginUsingPOST**](GlobaltagusuarioApi.md#validarSenhaLoginUsingPOST) | **POST** /api/usuarios/{login}/validar-senha | {{{usuario_resource_validar_senha_login}}}
[**validarSenhaUsingGET1**](GlobaltagusuarioApi.md#validarSenhaUsingGET1) | **GET** /api/usuarios/{id}/validar-senha | {{{usuario_resource_validar_senha}}}
[**vincularContasUsingPOST**](GlobaltagusuarioApi.md#vincularContasUsingPOST) | **POST** /api/usuarios/{id}/vincular-usuarios | {{{usuario_recurso_vincular_usuarios}}}


# **alterarSenhaLoginUsingPOST**
> string alterarSenhaLoginUsingPOST($login, $senha_nova)

{{{usuario_resource_alterar_senha_login}}}

{{{usuario_resource_alterar_senha_login_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagusuarioApi();
$login = "login_example"; // string | {{{usuario_resource_alterar_senha_login_param_login}}}
$senha_nova = "senha_nova_example"; // string | {{{usuario_resource_alterar_senha_login_param_senha_nova}}}

try { 
    $result = $api_instance->alterarSenhaLoginUsingPOST($login, $senha_nova);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagusuarioApi->alterarSenhaLoginUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **login** | **string**| {{{usuario_resource_alterar_senha_login_param_login}}} | 
 **senha_nova** | **string**| {{{usuario_resource_alterar_senha_login_param_senha_nova}}} | 

### Return type

**string**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarSenhaUsingPUT**
> string alterarSenhaUsingPUT($id, $senha_atual, $senha_nova)

{{{usuario_resource_alterar_senha}}}

{{{usuario_resource_alterar_senha_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagusuarioApi();
$id = 789; // int | {{{usuario_resource_alterar_senha_param_id}}}
$senha_atual = "senha_atual_example"; // string | {{{usuario_resource_alterar_senha_param_senha_atual}}}
$senha_nova = "senha_nova_example"; // string | {{{usuario_resource_alterar_senha_param_senha_nova}}}

try { 
    $result = $api_instance->alterarSenhaUsingPUT($id, $senha_atual, $senha_nova);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagusuarioApi->alterarSenhaUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{usuario_resource_alterar_senha_param_id}}} | 
 **senha_atual** | **string**| {{{usuario_resource_alterar_senha_param_senha_atual}}} | 
 **senha_nova** | **string**| {{{usuario_resource_alterar_senha_param_senha_nova}}} | 

### Return type

**string**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarUsingPUT23**
> \br.com.conductor.pier.api.v2.model\UsuarioResponse alterarUsingPUT23($id, $update)

{{{usuario_resource_alterar}}}

{{{usuario_resource_alterar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagusuarioApi();
$id = 789; // int | {{{usuario_resource_alterar_param_id}}}
$update = new \br.com.conductor.pier.api.v2.model\UsuarioUpdateValue_(); // \br.com.conductor.pier.api.v2.model\UsuarioUpdateValue_ | update

try { 
    $result = $api_instance->alterarUsingPUT23($id, $update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagusuarioApi->alterarUsingPUT23: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{usuario_resource_alterar_param_id}}} | 
 **update** | [**\br.com.conductor.pier.api.v2.model\UsuarioUpdateValue_**](\br.com.conductor.pier.api.v2.model\UsuarioUpdateValue_.md)| update | 

### Return type

[**\br.com.conductor.pier.api.v2.model\UsuarioResponse**](UsuarioResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **ativarUsuarioUsingPOST1**
> \br.com.conductor.pier.api.v2.model\UsuarioResponse ativarUsuarioUsingPOST1($id)

{{{usuario_resource_ativar_usuario}}}

{{{usuario_resource_ativar_usuario_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagusuarioApi();
$id = 789; // int | {{{usuario_resource_ativar_usuario_param_id}}}

try { 
    $result = $api_instance->ativarUsuarioUsingPOST1($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagusuarioApi->ativarUsuarioUsingPOST1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{usuario_resource_ativar_usuario_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\UsuarioResponse**](UsuarioResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **atualizarUsingPUT2**
> \br.com.conductor.pier.api.v2.model\ControleSegurancaDispositivoResponse atualizarUsingPUT2($update)

{{{controle_seguranca_dispositivo_atualizar}}}

{{{controle_seguranca_dispositivo_atualizar_notas}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagusuarioApi();
$update = new \br.com.conductor.pier.api.v2.model\ControleSegurancaDispositivoUpdateValor_(); // \br.com.conductor.pier.api.v2.model\ControleSegurancaDispositivoUpdateValor_ | update

try { 
    $result = $api_instance->atualizarUsingPUT2($update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagusuarioApi->atualizarUsingPUT2: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update** | [**\br.com.conductor.pier.api.v2.model\ControleSegurancaDispositivoUpdateValor_**](\br.com.conductor.pier.api.v2.model\ControleSegurancaDispositivoUpdateValor_.md)| update | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ControleSegurancaDispositivoResponse**](ControleSegurancaDispositivoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarContasVinculadasUsingGET**
> \br.com.conductor.pier.api.v2.model\PageUsuarioContasResponse consultarContasVinculadasUsingGET($id, $sort, $page, $limit)

{{{usuario_recurso_listar_por_id_usuario}}}

{{{usuario_recurso_listar_por_id_usuario_notas}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagusuarioApi();
$id = 789; // int | {{{usuario_recurso_listar_por_id_param_id_usuario}}}
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}

try { 
    $result = $api_instance->consultarContasVinculadasUsingGET($id, $sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagusuarioApi->consultarContasVinculadasUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{usuario_recurso_listar_por_id_param_id_usuario}}} | 
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageUsuarioContasResponse**](PageUsuarioContasResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET15**
> \br.com.conductor.pier.api.v2.model\PageControleSegurancaDispositivoResponse consultarUsingGET15($id_usuario, $sort, $page, $limit)

{{{controle_seguranca_dispositivo_consultar}}}

{{{controle_seguranca_dispositivo_consultar_notas}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagusuarioApi();
$id_usuario = 789; // int | {{{usuario_resource_consultar_param_idUsuario}}}
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}

try { 
    $result = $api_instance->consultarUsingGET15($id_usuario, $sort, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagusuarioApi->consultarUsingGET15: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_usuario** | **int**| {{{usuario_resource_consultar_param_idUsuario}}} | 
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageControleSegurancaDispositivoResponse**](PageControleSegurancaDispositivoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET51**
> \br.com.conductor.pier.api.v2.model\UsuarioResponse consultarUsingGET51($id)

{{{usuario_resource_consultar}}}

{{{usuario_resource_consultar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagusuarioApi();
$id = 789; // int | {{{usuario_resource_consultar_param_id}}}

try { 
    $result = $api_instance->consultarUsingGET51($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagusuarioApi->consultarUsingGET51: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{usuario_resource_consultar_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\UsuarioResponse**](UsuarioResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **desativarUsuarioUsingPOST1**
> \br.com.conductor.pier.api.v2.model\UsuarioResponse desativarUsuarioUsingPOST1($id)

{{{usuario_resource_desativar_usuario}}}

{{{usuario_resource_desativar_usuario_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagusuarioApi();
$id = 789; // int | {{{usuario_resource_desativar_usuario_param_id}}}

try { 
    $result = $api_instance->desativarUsuarioUsingPOST1($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagusuarioApi->desativarUsuarioUsingPOST1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{usuario_resource_desativar_usuario_param_id}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\UsuarioResponse**](UsuarioResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET62**
> \br.com.conductor.pier.api.v2.model\PageUsuarioResponse listarUsingGET62($sort, $page, $limit, $nome, $cpf, $email, $status)

{{{usuario_resource_listar}}}

{{{usuario_resource_listar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagusuarioApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$nome = "nome_example"; // string | {{{usuario_request_nome_value}}}
$cpf = "cpf_example"; // string | {{{usuario_request_cpf_value}}}
$email = "email_example"; // string | {{{usuario_request_email_value}}}
$status = "status_example"; // string | {{{usuario_request_status_value}}}

try { 
    $result = $api_instance->listarUsingGET62($sort, $page, $limit, $nome, $cpf, $email, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagusuarioApi->listarUsingGET62: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **nome** | **string**| {{{usuario_request_nome_value}}} | [optional] 
 **cpf** | **string**| {{{usuario_request_cpf_value}}} | [optional] 
 **email** | **string**| {{{usuario_request_email_value}}} | [optional] 
 **status** | **string**| {{{usuario_request_status_value}}} | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageUsuarioResponse**](PageUsuarioResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **recuperarSenhaUsingPOST**
> string recuperarSenhaUsingPOST($id)

{{{usuario_resource_recuperar_senha}}}

{{{usuario_resource_recuperar_senha_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagusuarioApi();
$id = 789; // int | {{{usuario_resource_recuperar_senha_param_id}}}

try { 
    $result = $api_instance->recuperarSenhaUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagusuarioApi->recuperarSenhaUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{usuario_resource_recuperar_senha_param_id}}} | 

### Return type

**string**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST33**
> \br.com.conductor.pier.api.v2.model\UsuarioResponse salvarUsingPOST33($persist)

{{{usuario_resource_salvar}}}

{{{usuario_resource_salvar_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagusuarioApi();
$persist = new \br.com.conductor.pier.api.v2.model\UsuarioPersistencia_(); // \br.com.conductor.pier.api.v2.model\UsuarioPersistencia_ | persist

try { 
    $result = $api_instance->salvarUsingPOST33($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagusuarioApi->salvarUsingPOST33: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **persist** | [**\br.com.conductor.pier.api.v2.model\UsuarioPersistencia_**](\br.com.conductor.pier.api.v2.model\UsuarioPersistencia_.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\UsuarioResponse**](UsuarioResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST9**
> \br.com.conductor.pier.api.v2.model\ControleSegurancaDispositivoResponse salvarUsingPOST9($persist)

{{{controle_seguranca_dispositivo_salvar}}}

{{{controle_seguranca_dispositivo_salvar_notas}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagusuarioApi();
$persist = new \br.com.conductor.pier.api.v2.model\ControleSegurancaDispositivoPersistencia_(); // \br.com.conductor.pier.api.v2.model\ControleSegurancaDispositivoPersistencia_ | persist

try { 
    $result = $api_instance->salvarUsingPOST9($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagusuarioApi->salvarUsingPOST9: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **persist** | [**\br.com.conductor.pier.api.v2.model\ControleSegurancaDispositivoPersistencia_**](\br.com.conductor.pier.api.v2.model\ControleSegurancaDispositivoPersistencia_.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ControleSegurancaDispositivoResponse**](ControleSegurancaDispositivoResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **validarSenhaForteUsingPOST**
> string validarSenhaForteUsingPOST($senha, $usuario_senha_forte_persist)

{{{usuario_resource_validar_senha_forte}}}

{{{usuario_resource_validar_senha_forte_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagusuarioApi();
$senha = "senha_example"; // string | {{{usuario_resource_validar_senha_forte_param_senha}}}
$usuario_senha_forte_persist = new \br.com.conductor.pier.api.v2.model\UsuarioSenhaFortePersistencia_(); // \br.com.conductor.pier.api.v2.model\UsuarioSenhaFortePersistencia_ | {{{usuario_resource_validar_senha_forte_param_id_plataforma}}}

try { 
    $result = $api_instance->validarSenhaForteUsingPOST($senha, $usuario_senha_forte_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagusuarioApi->validarSenhaForteUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **senha** | **string**| {{{usuario_resource_validar_senha_forte_param_senha}}} | 
 **usuario_senha_forte_persist** | [**\br.com.conductor.pier.api.v2.model\UsuarioSenhaFortePersistencia_**](\br.com.conductor.pier.api.v2.model\UsuarioSenhaFortePersistencia_.md)| {{{usuario_resource_validar_senha_forte_param_id_plataforma}}} | 

### Return type

**string**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **validarSenhaLoginUsingPOST**
> object validarSenhaLoginUsingPOST($login, $senha)

{{{usuario_resource_validar_senha_login}}}

{{{usuario_resource_validar_senha_login_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagusuarioApi();
$login = "login_example"; // string | {{{usuario_resource_validar_senha_login_param_login}}}
$senha = "senha_example"; // string | {{{usuario_resource_validar_senha_login_param_senha}}}

try { 
    $result = $api_instance->validarSenhaLoginUsingPOST($login, $senha);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagusuarioApi->validarSenhaLoginUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **login** | **string**| {{{usuario_resource_validar_senha_login_param_login}}} | 
 **senha** | **string**| {{{usuario_resource_validar_senha_login_param_senha}}} | 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **validarSenhaUsingGET1**
> string validarSenhaUsingGET1($senha, $id)

{{{usuario_resource_validar_senha}}}

{{{usuario_resource_validar_senha_notes}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagusuarioApi();
$senha = "senha_example"; // string | {{{usuario_resource_validar_senha_param_senha}}}
$id = 789; // int | {{{usuario_resource_validar_senha_param_id}}}

try { 
    $result = $api_instance->validarSenhaUsingGET1($senha, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagusuarioApi->validarSenhaUsingGET1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **senha** | **string**| {{{usuario_resource_validar_senha_param_senha}}} | 
 **id** | **int**| {{{usuario_resource_validar_senha_param_id}}} | 

### Return type

**string**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **vincularContasUsingPOST**
> string vincularContasUsingPOST($id)

{{{usuario_recurso_vincular_usuarios}}}

{{{usuario_recurso_vincular_usuarios_notas}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagusuarioApi();
$id = 789; // int | {{{usuario_recurso_vincular_usuarios_param_id}}}

try { 
    $result = $api_instance->vincularContasUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagusuarioApi->vincularContasUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| {{{usuario_recurso_vincular_usuarios_param_id}}} | 

### Return type

**string**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

