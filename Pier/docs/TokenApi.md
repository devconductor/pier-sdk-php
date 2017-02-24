# br.com.conductor.pier.api.v2.invoker\TokenApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarUsingPUT5**](TokenApi.md#alterarUsingPUT5) | **PUT** /api/tokens | Alterar token
[**callbackUsingPOST**](TokenApi.md#callbackUsingPOST) | **POST** /api/tokens/callback | /api/tokens/callback
[**consultarUsingGET14**](TokenApi.md#consultarUsingGET14) | **GET** /api/tokens/{id} | Consultar token
[**listarUsingGET14**](TokenApi.md#listarUsingGET14) | **GET** /api/tokens | Listar tokens
[**salvarUsingPOST5**](TokenApi.md#salvarUsingPOST5) | **POST** /api/tokens | Salvar token
[**validarUsingPOST**](TokenApi.md#validarUsingPOST) | **POST** /api/tokens/validar | /api/tokens/validar


# **alterarUsingPUT5**
> \br.com.conductor.pier.api.v2.model\Token alterarUsingPUT5($id, $token, $base, $owner, $status, $criado_por, $alterado_por)

Alterar token

Este recurso permite que seja modificado um token j\u00C3\u00A1 cadastrado

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\TokenApi();
$id = 789; // int | C\u00C3\u00B3digo identificador do token
$token = "token_example"; // string | Token
$base = 789; // int | C\u00C3\u00B3digo identificador da base
$owner = "owner_example"; // string | Owner do token
$status = "status_example"; // string | Status do token
$criado_por = "criado_por_example"; // string | Descri\u00C3\u00A7\u00C3\u00A3o de quem criou o token
$alterado_por = "alterado_por_example"; // string | Descri\u00C3\u00A7\u00C3\u00A3o de quem alterou o token

try { 
    $result = $api_instance->alterarUsingPUT5($id, $token, $base, $owner, $status, $criado_por, $alterado_por);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->alterarUsingPUT5: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo identificador do token | 
 **token** | **string**| Token | [optional] 
 **base** | **int**| C\u00C3\u00B3digo identificador da base | [optional] 
 **owner** | **string**| Owner do token | [optional] 
 **status** | **string**| Status do token | [optional] 
 **criado_por** | **string**| Descri\u00C3\u00A7\u00C3\u00A3o de quem criou o token | [optional] 
 **alterado_por** | **string**| Descri\u00C3\u00A7\u00C3\u00A3o de quem alterou o token | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\Token**](Token.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **callbackUsingPOST**
> \br.com.conductor.pier.api.v2.model\BodyAccessToken callbackUsingPOST($body_access_token)

/api/tokens/callback

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\TokenApi();
$body_access_token = new \br.com.conductor.pier.api.v2.model\BodyAccessToken(); // \br.com.conductor.pier.api.v2.model\BodyAccessToken | bodyAccessToken

try { 
    $result = $api_instance->callbackUsingPOST($body_access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->callbackUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body_access_token** | [**\br.com.conductor.pier.api.v2.model\BodyAccessToken**](\br.com.conductor.pier.api.v2.model\BodyAccessToken.md)| bodyAccessToken | 

### Return type

[**\br.com.conductor.pier.api.v2.model\BodyAccessToken**](BodyAccessToken.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET14**
> \br.com.conductor.pier.api.v2.model\Token consultarUsingGET14($id)

Consultar token

Este recurso permite que seja consultado um token do emissor atrav\u00C3\u00A9s de um id especifico

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\TokenApi();
$id = 789; // int | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do token (id).

try { 
    $result = $api_instance->consultarUsingGET14($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->consultarUsingGET14: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do token (id). | 

### Return type

[**\br.com.conductor.pier.api.v2.model\Token**](Token.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET14**
> \br.com.conductor.pier.api.v2.model\PageBases listarUsingGET14($page, $limit, $id, $token, $base, $owner, $status, $criado_por, $data_criacao, $alterado_por, $data_modificacao)

Listar tokens

Este recurso permite que sejam listados os tokens existentes

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\TokenApi();
$page = 56; // int | P\u00C3\u00A1gina solicitada (Default = 0)
$limit = 56; // int | Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100)
$id = 789; // int | C\u00C3\u00B3digo identificador do token
$token = "token_example"; // string | Token
$base = 789; // int | C\u00C3\u00B3digo identificador da base
$owner = "owner_example"; // string | Owner do token
$status = "status_example"; // string | Status do token
$criado_por = "criado_por_example"; // string | Descri\u00C3\u00A7\u00C3\u00A3o de quem criou o token
$data_criacao = new \DateTime(); // \DateTime | Data de cria\u00C3\u00A7\u00C3\u00A3o do token
$alterado_por = "alterado_por_example"; // string | Descri\u00C3\u00A7\u00C3\u00A3o de quem alterou o token
$data_modificacao = new \DateTime(); // \DateTime | Data de modifica\u00C3\u00A7\u00C3\u00A3o do token

try { 
    $result = $api_instance->listarUsingGET14($page, $limit, $id, $token, $base, $owner, $status, $criado_por, $data_criacao, $alterado_por, $data_modificacao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->listarUsingGET14: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| P\u00C3\u00A1gina solicitada (Default = 0) | [optional] 
 **limit** | **int**| Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) | [optional] 
 **id** | **int**| C\u00C3\u00B3digo identificador do token | [optional] 
 **token** | **string**| Token | [optional] 
 **base** | **int**| C\u00C3\u00B3digo identificador da base | [optional] 
 **owner** | **string**| Owner do token | [optional] 
 **status** | **string**| Status do token | [optional] 
 **criado_por** | **string**| Descri\u00C3\u00A7\u00C3\u00A3o de quem criou o token | [optional] 
 **data_criacao** | **\DateTime**| Data de cria\u00C3\u00A7\u00C3\u00A3o do token | [optional] 
 **alterado_por** | **string**| Descri\u00C3\u00A7\u00C3\u00A3o de quem alterou o token | [optional] 
 **data_modificacao** | **\DateTime**| Data de modifica\u00C3\u00A7\u00C3\u00A3o do token | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\PageBases**](PageBases.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST5**
> \br.com.conductor.pier.api.v2.model\Token salvarUsingPOST5($token, $base, $owner, $status, $criado_por, $alterado_por)

Salvar token

Este recurso permite que seja adicionado um novo token

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\TokenApi();
$token = "token_example"; // string | Token
$base = 789; // int | C\u00C3\u00B3digo identificador da base
$owner = "owner_example"; // string | Owner do token
$status = "status_example"; // string | Status do token
$criado_por = "criado_por_example"; // string | Descri\u00C3\u00A7\u00C3\u00A3o de quem criou o token
$alterado_por = "alterado_por_example"; // string | Descri\u00C3\u00A7\u00C3\u00A3o de quem alterou o token

try { 
    $result = $api_instance->salvarUsingPOST5($token, $base, $owner, $status, $criado_por, $alterado_por);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->salvarUsingPOST5: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Token | [optional] 
 **base** | **int**| C\u00C3\u00B3digo identificador da base | [optional] 
 **owner** | **string**| Owner do token | [optional] 
 **status** | **string**| Status do token | [optional] 
 **criado_por** | **string**| Descri\u00C3\u00A7\u00C3\u00A3o de quem criou o token | [optional] 
 **alterado_por** | **string**| Descri\u00C3\u00A7\u00C3\u00A3o de quem alterou o token | [optional] 

### Return type

[**\br.com.conductor.pier.api.v2.model\Token**](Token.md)

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **validarUsingPOST**
> object validarUsingPOST($body_access_token)

/api/tokens/validar

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// br.com.conductor.pier.api.v2.invoker\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'BEARER');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\TokenApi();
$body_access_token = new \br.com.conductor.pier.api.v2.model\BodyAccessToken(); // \br.com.conductor.pier.api.v2.model\BodyAccessToken | bodyAccessToken

try { 
    $result = $api_instance->validarUsingPOST($body_access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->validarUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body_access_token** | [**\br.com.conductor.pier.api.v2.model\BodyAccessToken**](\br.com.conductor.pier.api.v2.model\BodyAccessToken.md)| bodyAccessToken | 

### Return type

**object**

### Authorization

[access_token](../README.md#access_token)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

