# br.com.conductor.pier.api.v2.invoker\UsuariosApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarSenhaUsingPUT**](UsuariosApi.md#alterarSenhaUsingPUT) | **PUT** /api/usuarios/{id}/alterar-senha | Alterar senha do usu\u00C3\u00A1rio
[**alterarUsingPUT9**](UsuariosApi.md#alterarUsingPUT9) | **PUT** /api/usuarios/{id} | Altera os usu\u00C3\u00A1rios cadastrados
[**ativarUsuarioUsingPOST**](UsuariosApi.md#ativarUsuarioUsingPOST) | **POST** /api/usuarios/{id}/ativar-usuario | Ativa os usu\u00C3\u00A1rios cadastrados
[**consultarUsingGET25**](UsuariosApi.md#consultarUsingGET25) | **GET** /api/usuarios/{id} | Apresenta os dados de um determinado Usu\u00C3\u00A1rio
[**desativarUsuarioUsingPOST**](UsuariosApi.md#desativarUsuarioUsingPOST) | **POST** /api/usuarios/{id}/desativar-usuario | Desativa os usu\u00C3\u00A1rios cadastrados
[**listarUsingGET30**](UsuariosApi.md#listarUsingGET30) | **GET** /api/usuarios | Lista os Usu\u00C3\u00A1rios cadastrados
[**recuperarSenhaUsingPOST**](UsuariosApi.md#recuperarSenhaUsingPOST) | **POST** /api/usuarios/{id}/recuperar-senha | Recuperar senha do usu\u00C3\u00A1rio
[**salvarUsingPOST13**](UsuariosApi.md#salvarUsingPOST13) | **POST** /api/usuarios | Cadastra Usu\u00C3\u00A1rio
[**validarSenhaUsingGET1**](UsuariosApi.md#validarSenhaUsingGET1) | **GET** /api/usuarios/{id}/validar-senha | Validar a senha do usu\u00C3\u00A1rio


# **alterarSenhaUsingPUT**
> string alterarSenhaUsingPUT($id, $senha_atual, $senha_nova)

Alterar senha do usu\u00C3\u00A1rio

Este m\u00C3\u00A9todo realiza a altera\u00C3\u00A7\u00C3\u00A3o da senha do usu\u00C3\u00A1rio.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\UsuariosApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Usu\u00C3\u00A1rio (id).
$senha_atual = "senha_atual_example"; // string | Senha Atual
$senha_nova = "senha_nova_example"; // string | Senha Nova

try { 
    $result = $api_instance->alterarSenhaUsingPUT($id, $senha_atual, $senha_nova);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsuariosApi->alterarSenhaUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Usu\u00C3\u00A1rio (id). | 
 **senha_atual** | **string**| Senha Atual | 
 **senha_nova** | **string**| Senha Nova | 

### Return type

**string**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **alterarUsingPUT9**
> \br.com.conductor.pier.api.v2.model\UsuarioResponse alterarUsingPUT9($id, $update)

Altera os usu\u00C3\u00A1rios cadastrados

Este m\u00C3\u00A9todo realiza a altera\u00C3\u00A7\u00C3\u00A3o dos usu\u00C3\u00A1rios.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\UsuariosApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Usu\u00C3\u00A1rio (id).
$update = new \br.com.conductor.pier.api.v2.model\UsuarioUpdate(); // \br.com.conductor.pier.api.v2.model\UsuarioUpdate | update

try { 
    $result = $api_instance->alterarUsingPUT9($id, $update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsuariosApi->alterarUsingPUT9: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Usu\u00C3\u00A1rio (id). | 
 **update** | [**\br.com.conductor.pier.api.v2.model\UsuarioUpdate**](\br.com.conductor.pier.api.v2.model\UsuarioUpdate.md)| update | 

### Return type

[**\br.com.conductor.pier.api.v2.model\UsuarioResponse**](UsuarioResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **ativarUsuarioUsingPOST**
> \br.com.conductor.pier.api.v2.model\UsuarioResponse ativarUsuarioUsingPOST($id)

Ativa os usu\u00C3\u00A1rios cadastrados

Este m\u00C3\u00A9todo realiza a ativa\u00C3\u00A7\u00C3\u00A3o dos usu\u00C3\u00A1rios.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\UsuariosApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Usu\u00C3\u00A1rio (id).

try { 
    $result = $api_instance->ativarUsuarioUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsuariosApi->ativarUsuarioUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Usu\u00C3\u00A1rio (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\UsuarioResponse**](UsuarioResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET25**
> \br.com.conductor.pier.api.v2.model\UsuarioResponse consultarUsingGET25($id)

Apresenta os dados de um determinado Usu\u00C3\u00A1rio

Este m\u00C3\u00A9todo permite consultar as informa\u00C3\u00A7\u00C3\u00B5es de um determinado Usu\u00C3\u00A1rio a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\UsuariosApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Usu\u00C3\u00A1rio (id).

try { 
    $result = $api_instance->consultarUsingGET25($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsuariosApi->consultarUsingGET25: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Usu\u00C3\u00A1rio (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\UsuarioResponse**](UsuarioResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **desativarUsuarioUsingPOST**
> \br.com.conductor.pier.api.v2.model\UsuarioResponse desativarUsuarioUsingPOST($id)

Desativa os usu\u00C3\u00A1rios cadastrados

Este m\u00C3\u00A9todo realiza a desativa\u00C3\u00A7\u00C3\u00A3o dos usu\u00C3\u00A1rios.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\UsuariosApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Usu\u00C3\u00A1rio (id).

try { 
    $result = $api_instance->desativarUsuarioUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsuariosApi->desativarUsuarioUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Usu\u00C3\u00A1rio (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\UsuarioResponse**](UsuarioResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET30**
> \br.com.conductor.pier.api.v2.model\PageUsuarioResponse listarUsingGET30($page, $limit, $nome, $cpf, $email, $status)

Lista os Usu\u00C3\u00A1rios cadastrados

Este m\u00C3\u00A9todo permite que sejam listados os usu\u00C3\u00A1rios existentes na base do PIER.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\UsuariosApi();
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$nome = "nome_example"; // string | Nome do Usuario
$cpf = "cpf_example"; // string | CPF do Usuario
$email = "email_example"; // string | Email do Usuario
$status = "status_example"; // string | Status do Usuario

try { 
    $result = $api_instance->listarUsingGET30($page, $limit, $nome, $cpf, $email, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsuariosApi->listarUsingGET30: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) | [optional] 
 **nome** | **string**| Nome do Usuario | [optional] 
 **cpf** | **string**| CPF do Usuario | [optional] 
 **email** | **string**| Email do Usuario | [optional] 
 **status** | **string**| Status do Usuario | [optional] 

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

Recuperar senha do usu\u00C3\u00A1rio

Esse recurso permite recuperar a senha do usu\u00C3\u00A1rio.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\UsuariosApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Usu\u00C3\u00A1rio (id).

try { 
    $result = $api_instance->recuperarSenhaUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsuariosApi->recuperarSenhaUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Usu\u00C3\u00A1rio (id). | 

### Return type

**string**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST13**
> \br.com.conductor.pier.api.v2.model\UsuarioResponse salvarUsingPOST13($persist)

Cadastra Usu\u00C3\u00A1rio

Esse recurso permite cadastrar usu\u00C3\u00A1rios.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\UsuariosApi();
$persist = new \br.com.conductor.pier.api.v2.model\UsuarioPersist(); // \br.com.conductor.pier.api.v2.model\UsuarioPersist | persist

try { 
    $result = $api_instance->salvarUsingPOST13($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsuariosApi->salvarUsingPOST13: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **persist** | [**\br.com.conductor.pier.api.v2.model\UsuarioPersist**](\br.com.conductor.pier.api.v2.model\UsuarioPersist.md)| persist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\UsuarioResponse**](UsuarioResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **validarSenhaUsingGET1**
> string validarSenhaUsingGET1($senha, $id)

Validar a senha do usu\u00C3\u00A1rio

Este m\u00C3\u00A9todo permite validar a senha do usu\u00C3\u00A1rio).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\UsuariosApi();
$senha = "senha_example"; // string | Senha do usu\u00C3\u00A1rio
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Usu\u00C3\u00A1rio (id).

try { 
    $result = $api_instance->validarSenhaUsingGET1($senha, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsuariosApi->validarSenhaUsingGET1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **senha** | **string**| Senha do usu\u00C3\u00A1rio | 
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Usu\u00C3\u00A1rio (id). | 

### Return type

**string**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

