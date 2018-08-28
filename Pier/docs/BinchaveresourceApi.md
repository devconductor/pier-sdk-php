# br.com.conductor.pier.api.v2.invoker\BinchaveresourceApi

All URIs are relative to *http://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarBinChaveUsingPUT**](BinchaveresourceApi.md#alterarBinChaveUsingPUT) | **PUT** /api/bins-chaves/{id} | alterarBinChave
[**consultarUsingGET10**](BinchaveresourceApi.md#consultarUsingGET10) | **GET** /api/bins-chaves/{id} | consultar
[**listarBinChaveUsingGET**](BinchaveresourceApi.md#listarBinChaveUsingGET) | **GET** /api/bins-chaves | listarBinChave
[**salvarUsingPOST4**](BinchaveresourceApi.md#salvarUsingPOST4) | **POST** /api/bins-chaves | salvar


# **alterarBinChaveUsingPUT**
> object alterarBinChaveUsingPUT($id, $request, $login)

alterarBinChave

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\BinchaveresourceApi();
$id = 789; // int | id
$request = new \br.com.conductor.pier.api.v2.model\BinChaveUpdate(); // \br.com.conductor.pier.api.v2.model\BinChaveUpdate | request
$login = "login_example"; // string | login

try { 
    $result = $api_instance->alterarBinChaveUsingPUT($id, $request, $login);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BinchaveresourceApi->alterarBinChaveUsingPUT: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id | 
 **request** | [**\br.com.conductor.pier.api.v2.model\BinChaveUpdate**](\br.com.conductor.pier.api.v2.model\BinChaveUpdate.md)| request | 
 **login** | **string**| login | 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **consultarUsingGET10**
> object consultarUsingGET10($id)

consultar

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\BinchaveresourceApi();
$id = 789; // int | id

try { 
    $result = $api_instance->consultarUsingGET10($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BinchaveresourceApi->consultarUsingGET10: ', $e->getMessage(), "\n";
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

# **listarBinChaveUsingGET**
> object listarBinChaveUsingGET($sort, $page, $limit, $id, $id_tipo_chave, $id_bin, $chave, $check_value, $validade, $flag_descriptografado, $label)

listarBinChave

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\BinchaveresourceApi();
$sort = array("sort_example"); // string[] | {{{global_menssagem_sort_sort}}}
$page = 56; // int | {{{global_menssagem_sort_page_value}}}
$limit = 56; // int | {{{global_menssagem_sort_limit}}}
$id = 789; // int | 
$id_tipo_chave = 789; // int | 
$id_bin = 789; // int | 
$chave = "chave_example"; // string | 
$check_value = "check_value_example"; // string | 
$validade = "validade_example"; // string | 
$flag_descriptografado = true; // bool | 
$label = "label_example"; // string | 

try { 
    $result = $api_instance->listarBinChaveUsingGET($sort, $page, $limit, $id, $id_tipo_chave, $id_bin, $chave, $check_value, $validade, $flag_descriptografado, $label);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BinchaveresourceApi->listarBinChaveUsingGET: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**string[]**](string.md)| {{{global_menssagem_sort_sort}}} | [optional] 
 **page** | **int**| {{{global_menssagem_sort_page_value}}} | [optional] 
 **limit** | **int**| {{{global_menssagem_sort_limit}}} | [optional] 
 **id** | **int**|  | [optional] 
 **id_tipo_chave** | **int**|  | [optional] 
 **id_bin** | **int**|  | [optional] 
 **chave** | **string**|  | [optional] 
 **check_value** | **string**|  | [optional] 
 **validade** | **string**|  | [optional] 
 **flag_descriptografado** | **bool**|  | [optional] 
 **label** | **string**|  | [optional] 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **salvarUsingPOST4**
> object salvarUsingPOST4($bin_chave_persist, $login)

salvar

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new br.com.conductor.pier.api.v2.invoker\Api\BinchaveresourceApi();
$bin_chave_persist = new \br.com.conductor.pier.api.v2.model\BinChavePersist(); // \br.com.conductor.pier.api.v2.model\BinChavePersist | binChavePersist
$login = "login_example"; // string | login

try { 
    $result = $api_instance->salvarUsingPOST4($bin_chave_persist, $login);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BinchaveresourceApi->salvarUsingPOST4: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bin_chave_persist** | [**\br.com.conductor.pier.api.v2.model\BinChavePersist**](\br.com.conductor.pier.api.v2.model\BinChavePersist.md)| binChavePersist | 
 **login** | **string**| login | 

### Return type

**object**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

