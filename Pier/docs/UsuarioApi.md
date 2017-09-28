# br.com.conductor.pier.api.v2.invoker\UsuarioApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarSenhaLoginUsingPOST**](UsuarioApi.md#alterarSenhaLoginUsingPOST) | **POST** /api/usuarios/{login}/alterar-senha | Alterar senha do usu\u00C3\u00A1rio.
[**alterarSenhaUsingPUT**](UsuarioApi.md#alterarSenhaUsingPUT) | **PUT** /api/usuarios/{id}/alterar-senha | Alterar senha do usu\u00C3\u00A1rio na base do PIER ou WS.
[**alterarUsingPUT10**](UsuarioApi.md#alterarUsingPUT10) | **PUT** /api/usuarios/{id} | Altera os usu\u00C3\u00A1rios cadastrados na base.
[**ativarUsuarioUsingPOST**](UsuarioApi.md#ativarUsuarioUsingPOST) | **POST** /api/usuarios/{id}/ativar-usuario | Ativa os usu\u00C3\u00A1rios cadastrados na base do PIER ou WS.
[**consultarUsingGET29**](UsuarioApi.md#consultarUsingGET29) | **GET** /api/usuarios/{id} | Apresenta os dados de um determinado Usu\u00C3\u00A1rio na base do PIER ou WS.
[**desativarUsuarioUsingPOST**](UsuarioApi.md#desativarUsuarioUsingPOST) | **POST** /api/usuarios/{id}/desativar-usuario | Desativa os usu\u00C3\u00A1rios cadastrados na base do PIER ou WS.
[**listarUsingGET33**](UsuarioApi.md#listarUsingGET33) | **GET** /api/usuarios | Lista os Usu\u00C3\u00A1rios cadastrados na base do PIER ou WS.
[**recuperarSenhaUsingPOST**](UsuarioApi.md#recuperarSenhaUsingPOST) | **POST** /api/usuarios/{id}/recuperar-senha | Recuperar senha do usu\u00C3\u00A1rio na base do PIER ou WS.
[**salvarUsingPOST19**](UsuarioApi.md#salvarUsingPOST19) | **POST** /api/usuarios | Cadastra Usu\u00C3\u00A1rio na base.
[**validarSenhaLoginUsingPOST**](UsuarioApi.md#validarSenhaLoginUsingPOST) | **POST** /api/usuarios/{login}/validar-senha | Realiza login com valida\u00C3\u00A7\u00C3\u00A3o de senha dos usu\u00C3\u00A1rios cadastrados na base do PIER ou WS.
[**validarSenhaUsingGET1**](UsuarioApi.md#validarSenhaUsingGET1) | **GET** /api/usuarios/{id}/validar-senha | Validar a senha do usu\u00C3\u00A1rio na base do PIER ou WS.


# **alterarSenhaLoginUsingPOST**
> string alterarSenhaLoginUsingPOST($login, $senha_nova)

Alterar senha do usu\u00C3\u00A1rio.

Este m\u00C3\u00A9todo realiza a altera\u00C3\u00A7\u00C3\u00A3o da senha do usu\u00C3\u00A1rio.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\UsuarioApi();
$login = "login_example"; // string | Login do usu\u00C3\u00A1rio.
$senha_nova = "senha_nova_example"; // string | Senha Nova

try { 
    $result = $api_instance->alterarSenhaLoginUsingPOST($login, $senha_nova);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsuarioApi->alterarSenhaLoginUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **login** | **string**| Login do usu\u00C3\u00A1rio. | 
 **senha_nova** | **string**| Senha Nova | 

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

Alterar senha do usu\u00C3\u00A1rio na base do PIER ou WS.

Este m\u00C3\u00A9todo realiza a altera\u00C3\u00A7\u00C3\u00A3o da senha do usu\u00C3\u00A1rio.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\UsuarioApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Usu\u00C3\u00A1rio (id).
$senha_atual = "senha_atual_example"; // string | Senha Atual
$senha_nova = "senha_nova_example"; // string | Senha Nova

try { 
    $result = $api_instance->alterarSenhaUsingPUT($id, $senha_atual, $senha_nova);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsuarioApi->alterarSenhaUsingPUT: ', $e->getMessage(), "\n";
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

# **alterarUsingPUT10**
> \br.com.conductor.pier.api.v2.model\UsuarioResponse alterarUsingPUT10($id, $update)

Altera os usu\u00C3\u00A1rios cadastrados na base.

Este m\u00C3\u00A9todo realiza a altera\u00C3\u00A7\u00C3\u00A3o dos usu\u00C3\u00A1rios.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\UsuarioApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Usu\u00C3\u00A1rio (id).
$update = new \br.com.conductor.pier.api.v2.model\UsuarioUpdate(); // \br.com.conductor.pier.api.v2.model\UsuarioUpdate | update

try { 
    $result = $api_instance->alterarUsingPUT10($id, $update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsuarioApi->alterarUsingPUT10: ', $e->getMessage(), "\n";
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

Ativa os usu\u00C3\u00A1rios cadastrados na base do PIER ou WS.

Este m\u00C3\u00A9todo realiza a ativa\u00C3\u00A7\u00C3\u00A3o dos usu\u00C3\u00A1rios.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\UsuarioApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Usu\u00C3\u00A1rio (id).

try { 
    $result = $api_instance->ativarUsuarioUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsuarioApi->ativarUsuarioUsingPOST: ', $e->getMessage(), "\n";
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

# **consultarUsingGET29**
> \br.com.conductor.pier.api.v2.model\UsuarioResponse consultarUsingGET29($id)

Apresenta os dados de um determinado Usu\u00C3\u00A1rio na base do PIER ou WS.

Este m\u00C3\u00A9todo permite consultar as informa\u00C3\u00A7\u00C3\u00B5es de um determinado Usu\u00C3\u00A1rio a partir do seu c\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o (id).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\UsuarioApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Usu\u00C3\u00A1rio (id).

try { 
    $result = $api_instance->consultarUsingGET29($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsuarioApi->consultarUsingGET29: ', $e->getMessage(), "\n";
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

Desativa os usu\u00C3\u00A1rios cadastrados na base do PIER ou WS.

Este m\u00C3\u00A9todo realiza a desativa\u00C3\u00A7\u00C3\u00A3o dos usu\u00C3\u00A1rios.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\UsuarioApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Usu\u00C3\u00A1rio (id).

try { 
    $result = $api_instance->desativarUsuarioUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsuarioApi->desativarUsuarioUsingPOST: ', $e->getMessage(), "\n";
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

# **listarUsingGET33**
> \br.com.conductor.pier.api.v2.model\PageUsuarioResponse listarUsingGET33($sort, $page, $limit, $nome, $cpf, $email, $status)

Lista os Usu\u00C3\u00A1rios cadastrados na base do PIER ou WS.

Este m\u00C3\u00A9todo permite que sejam listados os usu\u00C3\u00A1rios existentes na base do PIER.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\UsuarioApi();
$sort = array("sort_example"); // string[] | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50)
$nome = "nome_example"; // string | Nome do Usuario
$cpf = "cpf_example"; // string | CPF do Usuario
$email = "email_example"; // string | Email do Usuario
$status = "status_example"; // string | Status do Usuario

try { 
    $result = $api_instance->listarUsingGET33($sort, $page, $limit, $nome, $cpf, $email, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsuarioApi->listarUsingGET33: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 
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

Recuperar senha do usu\u00C3\u00A1rio na base do PIER ou WS.

Esse recurso permite recuperar a senha do usu\u00C3\u00A1rio.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\UsuarioApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Usu\u00C3\u00A1rio (id).

try { 
    $result = $api_instance->recuperarSenhaUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsuarioApi->recuperarSenhaUsingPOST: ', $e->getMessage(), "\n";
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

# **salvarUsingPOST19**
> \br.com.conductor.pier.api.v2.model\UsuarioResponse salvarUsingPOST19($persist)

Cadastra Usu\u00C3\u00A1rio na base.

Esse recurso permite cadastrar usu\u00C3\u00A1rios.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\UsuarioApi();
$persist = new \br.com.conductor.pier.api.v2.model\UsuarioPersist(); // \br.com.conductor.pier.api.v2.model\UsuarioPersist | persist

try { 
    $result = $api_instance->salvarUsingPOST19($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsuarioApi->salvarUsingPOST19: ', $e->getMessage(), "\n";
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

# **validarSenhaLoginUsingPOST**
> object validarSenhaLoginUsingPOST($login, $senha)

Realiza login com valida\u00C3\u00A7\u00C3\u00A3o de senha dos usu\u00C3\u00A1rios cadastrados na base do PIER ou WS.

O recurso permite fazer login do usu\u00C3\u00A1rio atrav\u00C3\u00A9s da senha definida pelo emissor.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\UsuarioApi();
$login = "login_example"; // string | Login identificador do usu\u00C3\u00A1rio (login).
$senha = "senha_example"; // string | Senha do usu\u00C3\u00A1rio

try { 
    $result = $api_instance->validarSenhaLoginUsingPOST($login, $senha);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsuarioApi->validarSenhaLoginUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **login** | **string**| Login identificador do usu\u00C3\u00A1rio (login). | 
 **senha** | **string**| Senha do usu\u00C3\u00A1rio | 

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

Validar a senha do usu\u00C3\u00A1rio na base do PIER ou WS.

Este m\u00C3\u00A9todo permite validar a senha do usu\u00C3\u00A1rio).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\UsuarioApi();
$senha = "senha_example"; // string | Senha do usu\u00C3\u00A1rio
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Usu\u00C3\u00A1rio (id).

try { 
    $result = $api_instance->validarSenhaUsingGET1($senha, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsuarioApi->validarSenhaUsingGET1: ', $e->getMessage(), "\n";
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

