<?php
/**
 * ProdutoApi
 * PHP version 5
 *
 * @category Class
 * @package  br.com.conductor.pier.api.v1_1.invoker
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program. 
 * https://github.com/swagger-api/swagger-codegen 
 * Do not edit the class manually.
 */

namespace br.com.conductor.pier.api.v1_1;

use \br.com.conductor.pier.api.v1_1.invoker\Configuration;
use \br.com.conductor.pier.api.v1_1.invoker\ApiClient;
use \br.com.conductor.pier.api.v1_1.invoker\ApiException;
use \br.com.conductor.pier.api.v1_1.invoker\ObjectSerializer;

/**
 * ProdutoApi Class Doc Comment
 *
 * @category Class
 * @package  br.com.conductor.pier.api.v1_1.invoker
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProdutoApi
{

    /**
     * API Client
     * @var \br.com.conductor.pier.api.v1_1.invoker\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \br.com.conductor.pier.api.v1_1.invoker\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://localhost/');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \br.com.conductor.pier.api.v1_1.invoker\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \br.com.conductor.pier.api.v1_1.invoker\ApiClient $apiClient set the API client
     * @return ProdutoApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * consultarProdutoUsingGET
     *
     * Opera\u00C3\u00A7\u00C3\u00A3o utilizada para consultar uma determinada Origem Comercial 
     *
     * @param int $id_produto C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Produto (id) (required)
     * @return \br.com.conductor.pier.api.v1_1.model\OrigemComercial
     * @throws \br.com.conductor.pier.api.v1_1.invoker\ApiException on non-2xx response
     */
    public function consultarProdutoUsingGET($id_produto)
    {
        list($response, $statusCode, $httpHeader) = $this->consultarProdutoUsingGETWithHttpInfo ($id_produto);
        return $response; 
    }


    /**
     * consultarProdutoUsingGETWithHttpInfo
     *
     * Opera\u00C3\u00A7\u00C3\u00A3o utilizada para consultar uma determinada Origem Comercial 
     *
     * @param int $id_produto C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Produto (id) (required)
     * @return Array of \br.com.conductor.pier.api.v1_1.model\OrigemComercial, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v1_1.invoker\ApiException on non-2xx response
     */
    public function consultarProdutoUsingGETWithHttpInfo($id_produto)
    {
        
        // verify the required parameter 'id_produto' is set
        if ($id_produto === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_produto when calling consultarProdutoUsingGET');
        }
  
        // parse inputs
        $resourcePath = "/api/produtos/{id_origem_comercial}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        
        
        // path params
        
        if ($id_produto !== null) {
            $resourcePath = str_replace(
                "{" . "id_produto" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_produto),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $headerParams['access_token'] = $apiKey;
        }
        
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\br.com.conductor.pier.api.v1_1.model\OrigemComercial'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v1_1.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v1_1.model\OrigemComercial', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v1_1.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v1_1.model\OrigemComercial', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * listarProdutosUsingGET
     *
     * Lista os Produtos do Emissor
     *
     * @param int $id_produto C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Produto (id) (optional)
     * @param string $nome Descri\u00C3\u00A7\u00C3\u00A3o do Nome do Produto (optional)
     * @param string $status Status do Produto, onde: (\&quot;0\&quot;: Inativo), (\&quot;1\&quot;: Ativo). (optional)
     * @param int $page P\u00C3\u00A1gina solicitada (Default = 0) (optional)
     * @param int $limit Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) (optional)
     * @return \br.com.conductor.pier.api.v1_1.model\ListaDePessoas
     * @throws \br.com.conductor.pier.api.v1_1.invoker\ApiException on non-2xx response
     */
    public function listarProdutosUsingGET($id_produto = null, $nome = null, $status = null, $page = null, $limit = null)
    {
        list($response, $statusCode, $httpHeader) = $this->listarProdutosUsingGETWithHttpInfo ($id_produto, $nome, $status, $page, $limit);
        return $response; 
    }


    /**
     * listarProdutosUsingGETWithHttpInfo
     *
     * Lista os Produtos do Emissor
     *
     * @param int $id_produto C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Produto (id) (optional)
     * @param string $nome Descri\u00C3\u00A7\u00C3\u00A3o do Nome do Produto (optional)
     * @param string $status Status do Produto, onde: (\&quot;0\&quot;: Inativo), (\&quot;1\&quot;: Ativo). (optional)
     * @param int $page P\u00C3\u00A1gina solicitada (Default = 0) (optional)
     * @param int $limit Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) (optional)
     * @return Array of \br.com.conductor.pier.api.v1_1.model\ListaDePessoas, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v1_1.invoker\ApiException on non-2xx response
     */
    public function listarProdutosUsingGETWithHttpInfo($id_produto = null, $nome = null, $status = null, $page = null, $limit = null)
    {
        
  
        // parse inputs
        $resourcePath = "/api/produtos";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        // query params
        
        if ($id_produto !== null) {
            $queryParams['id_produto'] = $this->apiClient->getSerializer()->toQueryValue($id_produto);
        }// query params
        
        if ($nome !== null) {
            $queryParams['nome'] = $this->apiClient->getSerializer()->toQueryValue($nome);
        }// query params
        
        if ($status !== null) {
            $queryParams['status'] = $this->apiClient->getSerializer()->toQueryValue($status);
        }// query params
        
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }// query params
        
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $headerParams['access_token'] = $apiKey;
        }
        
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\br.com.conductor.pier.api.v1_1.model\ListaDePessoas'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v1_1.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v1_1.model\ListaDePessoas', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v1_1.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v1_1.model\ListaDePessoas', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}
