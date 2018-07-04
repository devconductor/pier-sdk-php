# br.com.conductor.pier.api.v2.invoker\GlobaltagusuariotokenApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**incrementarTentativaUsingPUT**](GlobaltagusuariotokenApi.md#incrementarTentativaUsingPUT) | **PUT** /api/usuarios-tokens/incrementar-tentativas | {{{usuario_token_recurso_controle_tentativa_cadastro_incrementar}}}
[**verificarTentativaUsingGET**](GlobaltagusuariotokenApi.md#verificarTentativaUsingGET) | **GET** /api/usuarios-tokens/verificar-tentativas | {{{usuario_token_recurso_controle_tentativa_cadastro_verificar}}}


# **incrementarTentativaUsingPUT**
> \br.com.conductor.pier.api.v2.model\ControleTentativaCadastroResponse incrementarTentativaUsingPUT($cpf)

{{{usuario_token_recurso_controle_tentativa_cadastro_incrementar}}}

{{{usuario_token_recurso_controle_tentativa_cadastro_incrementar_notas}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagusuariotokenApi();
$cpf = "cpf_example"; // string | {{{usuario_token_recurso_controle_tentativa_cadastro_incrementar_param_cpf}}}

try { 
    $result = $api_instance->incrementarTentativaUsingPUT($cpf);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagusuariotokenApi->incrementarTentativaUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cpf** | **string**| {{{usuario_token_recurso_controle_tentativa_cadastro_incrementar_param_cpf}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ControleTentativaCadastroResponse**](ControleTentativaCadastroResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **verificarTentativaUsingGET**
> \br.com.conductor.pier.api.v2.model\ControleTentativaCadastroResponse verificarTentativaUsingGET($cpf)

{{{usuario_token_recurso_controle_tentativa_cadastro_verificar}}}

{{{usuario_token_recurso_controle_tentativa_cadastro_verificar_notas}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltagusuariotokenApi();
$cpf = "cpf_example"; // string | {{{usuario_token_recurso_controle_tentativa_cadastro_verificar_param_cpf}}}

try { 
    $result = $api_instance->verificarTentativaUsingGET($cpf);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltagusuariotokenApi->verificarTentativaUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cpf** | **string**| {{{usuario_token_recurso_controle_tentativa_cadastro_verificar_param_cpf}}} | 

### Return type

[**\br.com.conductor.pier.api.v2.model\ControleTentativaCadastroResponse**](ControleTentativaCadastroResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

