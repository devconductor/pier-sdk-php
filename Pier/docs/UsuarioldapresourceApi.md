# br.com.conductor.pier.api.v2.invoker\UsuarioldapresourceApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarUsingPUT22**](UsuarioldapresourceApi.md#alterarUsingPUT22) | **PUT** /api/usuarios-ldap/{id} | alterar
[**ativarUsuarioUsingPOST**](UsuarioldapresourceApi.md#ativarUsuarioUsingPOST) | **POST** /api/usuarios-ldap/{id}/ativar-usuario | ativarUsuario
[**consultarUsingGET52**](UsuarioldapresourceApi.md#consultarUsingGET52) | **GET** /api/usuarios-ldap/{id} | consultar
[**desativarUsuarioUsingPOST**](UsuarioldapresourceApi.md#desativarUsuarioUsingPOST) | **POST** /api/usuarios-ldap/{id}/desativar-usuario | desativarUsuario
[**listarUsingGET64**](UsuarioldapresourceApi.md#listarUsingGET64) | **GET** /api/usuarios-ldap | listar
[**perfisUsingGET**](UsuarioldapresourceApi.md#perfisUsingGET) | **GET** /api/usuarios-ldap/{id}/perfis | perfis
[**salvarUsingPOST33**](UsuarioldapresourceApi.md#salvarUsingPOST33) | **POST** /api/usuarios-ldap | salvar


# **alterarUsingPUT22**
> object alterarUsingPUT22($id, $update)

alterar

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\UsuarioldapresourceApi();
$id = 789; // int | id
$update = new \br.com.conductor.pier.api.v2.model\UsuarioLdapUpdate(); // \br.com.conductor.pier.api.v2.model\UsuarioLdapUpdate | update

try { 
    $result = $api_instance->alterarUsingPUT22($id, $update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsuarioldapresourceApi->alterarUsingPUT22: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id | 
 **update** | [**\br.com.conductor.pier.api.v2.model\UsuarioLdapUpdate**](\br.com.conductor.pier.api.v2.model\UsuarioLdapUpdate.md)| update | 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **ativarUsuarioUsingPOST**
> object ativarUsuarioUsingPOST($id)

ativarUsuario

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\UsuarioldapresourceApi();
$id = 789; // int | id

try { 
    $result = $api_instance->ativarUsuarioUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsuarioldapresourceApi->ativarUsuarioUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id | 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET52**
> object consultarUsingGET52($id)

consultar

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\UsuarioldapresourceApi();
$id = 789; // int | id

try { 
    $result = $api_instance->consultarUsingGET52($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsuarioldapresourceApi->consultarUsingGET52: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id | 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **desativarUsuarioUsingPOST**
> object desativarUsuarioUsingPOST($id)

desativarUsuario

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\UsuarioldapresourceApi();
$id = 789; // int | id

try { 
    $result = $api_instance->desativarUsuarioUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsuarioldapresourceApi->desativarUsuarioUsingPOST: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id | 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listarUsingGET64**
> object listarUsingGET64($sort, $page, $limit, $nome, $cpf, $email, $status, $id_emissor)

listar

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\UsuarioldapresourceApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$nome = "nome_example"; // string | 
$cpf = "cpf_example"; // string | 
$email = "email_example"; // string | 
$status = "status_example"; // string | 
$id_emissor = 789; // int | 

try { 
    $result = $api_instance->listarUsingGET64($sort, $page, $limit, $nome, $cpf, $email, $status, $id_emissor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsuarioldapresourceApi->listarUsingGET64: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **nome** | **string**|  | [optional] 
 **cpf** | **string**|  | [optional] 
 **email** | **string**|  | [optional] 
 **status** | **string**|  | [optional] 
 **id_emissor** | **int**|  | [optional] 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **perfisUsingGET**
> object perfisUsingGET($id)

perfis

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\UsuarioldapresourceApi();
$id = 789; // int | id

try { 
    $result = $api_instance->perfisUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsuarioldapresourceApi->perfisUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id | 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST33**
> object salvarUsingPOST33($persist)

salvar

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\UsuarioldapresourceApi();
$persist = new \br.com.conductor.pier.api.v2.model\UsuarioLdapPersist(); // \br.com.conductor.pier.api.v2.model\UsuarioLdapPersist | persist

try { 
    $result = $api_instance->salvarUsingPOST33($persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsuarioldapresourceApi->salvarUsingPOST33: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **persist** | [**\br.com.conductor.pier.api.v2.model\UsuarioLdapPersist**](\br.com.conductor.pier.api.v2.model\UsuarioLdapPersist.md)| persist | 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

