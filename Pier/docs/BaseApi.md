# br.com.conductor.pier.api.v2.invoker\BaseApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarUsingPUT**](BaseApi.md#alterarUsingPUT) | **PUT** /api/bases | Alterar base
[**clearUsingGET**](BaseApi.md#clearUsingGET) | **GET** /api/bases/clear | Limpar mapa de bases
[**consultarUsingGET1**](BaseApi.md#consultarUsingGET1) | **GET** /api/bases/{id} | Consultar base
[**listarUsingGET1**](BaseApi.md#listarUsingGET1) | **GET** /api/bases | Listar bases
[**salvarUsingPOST1**](BaseApi.md#salvarUsingPOST1) | **POST** /api/bases | Salvar base


# **alterarUsingPUT**
> \br.com.conductor.pier.api.v2.model\Base alterarUsingPUT($id, $servidor, $usuario, $senha, $nome_base, $senha_criptografada, $domain, $nome_base_controle_acesso, $servidor_controle_acesso, $id_emissor)

Alterar base

Este recurso permite que seja modificado uma base j\u00C3\u00A1 cadastrada

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\BaseApi();
$id = 789; // int | C\u00C3\u00B3digo identificador da base
$servidor = "servidor_example"; // string | IP do servidor
$usuario = "usuario_example"; // string | Nome do usu\u00C3\u00A1rio
$senha = "senha_example"; // string | Senha
$nome_base = "nome_base_example"; // string | Nome da base
$senha_criptografada = true; // bool | senha Criptografada
$domain = "domain_example"; // string | Dom\u00C3\u00ADnio da base
$nome_base_controle_acesso = "nome_base_controle_acesso_example"; // string | Nome da base de controle acesso
$servidor_controle_acesso = "servidor_controle_acesso_example"; // string | Servidor do controle de acesso
$id_emissor = 789; // int | C\u00C3\u00B3digo do identificador do emissor

try { 
    $result = $api_instance->alterarUsingPUT($id, $servidor, $usuario, $senha, $nome_base, $senha_criptografada, $domain, $nome_base_controle_acesso, $servidor_controle_acesso, $id_emissor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BaseApi->alterarUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo identificador da base | 
 **servidor** | **string**| IP do servidor | 
 **usuario** | **string**| Nome do usu\u00C3\u00A1rio | 
 **senha** | **string**| Senha | 
 **nome_base** | **string**| Nome da base | 
 **senha_criptografada** | **bool**| senha Criptografada | 
 **domain** | **string**| Dom\u00C3\u00ADnio da base | 
 **nome_base_controle_acesso** | **string**| Nome da base de controle acesso | 
 **servidor_controle_acesso** | **string**| Servidor do controle de acesso | 
 **id_emissor** | **int**| C\u00C3\u00B3digo do identificador do emissor | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\Base**](Base.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **clearUsingGET**
> \br.com.conductor.pier.api.v2.model\BodyAccessToken clearUsingGET()

Limpar mapa de bases

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\BaseApi();

try { 
    $result = $api_instance->clearUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BaseApi->clearUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\br.com.conductor.pier.api.v2.model\BodyAccessToken**](BodyAccessToken.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET1**
> \br.com.conductor.pier.api.v2.model\Base consultarUsingGET1($id)

Consultar base

Este recurso permite que seja consultada uma base do emissor atrav\u00C3\u00A9s de um id especifico

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\BaseApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da base (id).

try { 
    $result = $api_instance->consultarUsingGET1($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BaseApi->consultarUsingGET1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da base (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\Base**](Base.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET1**
> \br.com.conductor.pier.api.v2.model\PageBases listarUsingGET1($page, $limit, $id, $servidor, $usuario, $senha, $nome_base, $senha_criptografada, $domain, $nome_base_controle_acesso, $id_emissor, $servidor_controle_acesso)

Listar bases

Este recurso permite que sejam listadas as bases existentes

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\BaseApi();
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100)
$id = 789; // int | C\u00C3\u00B3digo identificador da base
$servidor = "servidor_example"; // string | IP do servidor
$usuario = "usuario_example"; // string | Nome do usu\u00C3\u00A1rio
$senha = "senha_example"; // string | Senha
$nome_base = "nome_base_example"; // string | Nome da base
$senha_criptografada = true; // bool | senha Criptografada
$domain = "domain_example"; // string | Dom\u00C3\u00ADnio da base
$nome_base_controle_acesso = "nome_base_controle_acesso_example"; // string | Nome da base de controle acesso
$id_emissor = 789; // int | C\u00C3\u00B3digo do identificador do emissor
$servidor_controle_acesso = "servidor_controle_acesso_example"; // string | Servidor do controle de acesso

try { 
    $result = $api_instance->listarUsingGET1($page, $limit, $id, $servidor, $usuario, $senha, $nome_base, $senha_criptografada, $domain, $nome_base_controle_acesso, $id_emissor, $servidor_controle_acesso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BaseApi->listarUsingGET1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) | [optional] 
 **id** | **int**| C\u00C3\u00B3digo identificador da base | [optional] 
 **servidor** | **string**| IP do servidor | [optional] 
 **usuario** | **string**| Nome do usu\u00C3\u00A1rio | [optional] 
 **senha** | **string**| Senha | [optional] 
 **nome_base** | **string**| Nome da base | [optional] 
 **senha_criptografada** | **bool**| senha Criptografada | [optional] 
 **domain** | **string**| Dom\u00C3\u00ADnio da base | [optional] 
 **nome_base_controle_acesso** | **string**| Nome da base de controle acesso | [optional] 
 **id_emissor** | **int**| C\u00C3\u00B3digo do identificador do emissor | [optional] 
 **servidor_controle_acesso** | **string**| Servidor do controle de acesso | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageBases**](PageBases.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST1**
> \br.com.conductor.pier.api.v2.model\Base salvarUsingPOST1($servidor, $usuario, $senha, $nome_base, $senha_criptografada, $domain, $nome_base_controle_acesso, $servidor_controle_acesso, $id_emissor)

Salvar base

Este recurso permite que seja adicionado uma nova base

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\BaseApi();
$servidor = "servidor_example"; // string | IP do servidor
$usuario = "usuario_example"; // string | Nome do usu\u00C3\u00A1rio
$senha = "senha_example"; // string | Senha
$nome_base = "nome_base_example"; // string | Nome da base
$senha_criptografada = true; // bool | senha Criptografada
$domain = "domain_example"; // string | Dom\u00C3\u00ADnio da base
$nome_base_controle_acesso = "nome_base_controle_acesso_example"; // string | Nome da base de controle acesso
$servidor_controle_acesso = "servidor_controle_acesso_example"; // string | Servidor do controle de acesso
$id_emissor = 789; // int | C\u00C3\u00B3digo do identificador do emissor

try { 
    $result = $api_instance->salvarUsingPOST1($servidor, $usuario, $senha, $nome_base, $senha_criptografada, $domain, $nome_base_controle_acesso, $servidor_controle_acesso, $id_emissor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BaseApi->salvarUsingPOST1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **servidor** | **string**| IP do servidor | 
 **usuario** | **string**| Nome do usu\u00C3\u00A1rio | 
 **senha** | **string**| Senha | 
 **nome_base** | **string**| Nome da base | 
 **senha_criptografada** | **bool**| senha Criptografada | 
 **domain** | **string**| Dom\u00C3\u00ADnio da base | 
 **nome_base_controle_acesso** | **string**| Nome da base de controle acesso | 
 **servidor_controle_acesso** | **string**| Servidor do controle de acesso | 
 **id_emissor** | **int**| C\u00C3\u00B3digo do identificador do emissor | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\Base**](Base.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

