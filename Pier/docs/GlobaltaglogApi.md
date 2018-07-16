# br.com.conductor.pier.api.v2.invoker\GlobaltaglogApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salvarUsingPOST18**](GlobaltaglogApi.md#salvarUsingPOST18) | **POST** /api/logs/log-acessos-usuario | {{{log_acesso_usuario_recurso_salvar}}}


# **salvarUsingPOST18**
> \br.com.conductor.pier.api.v2.model\LogAcessoUsuarioResposta_ salvarUsingPOST18($log_acesso_usuario_persist)

{{{log_acesso_usuario_recurso_salvar}}}

{{{log_acesso_usuario_recurso_salvar_notas}}}

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\GlobaltaglogApi();
$log_acesso_usuario_persist = new \br.com.conductor.pier.api.v2.model\LogAcessoUsuarioPersistencia_(); // \br.com.conductor.pier.api.v2.model\LogAcessoUsuarioPersistencia_ | logAcessoUsuarioPersist

try { 
    $result = $api_instance->salvarUsingPOST18($log_acesso_usuario_persist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobaltaglogApi->salvarUsingPOST18: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **log_acesso_usuario_persist** | [**\br.com.conductor.pier.api.v2.model\LogAcessoUsuarioPersistencia_**](\br.com.conductor.pier.api.v2.model\LogAcessoUsuarioPersistencia_.md)| logAcessoUsuarioPersist | 

### Return type

[**\br.com.conductor.pier.api.v2.model\LogAcessoUsuarioResposta_**](LogAcessoUsuarioResposta_.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

