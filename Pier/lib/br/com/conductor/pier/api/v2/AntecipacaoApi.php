<?php
/**
 * AntecipacaoApi
 * PHP version 5
 *
 * @category Class
 * @package  br.com.conductor.pier.api.v2.invoker
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

namespace br.com.conductor.pier.api.v2;

use \br.com.conductor.pier.api.v2.invoker\Configuration;
use \br.com.conductor.pier.api.v2.invoker\ApiClient;
use \br.com.conductor.pier.api.v2.invoker\ApiException;
use \br.com.conductor.pier.api.v2.invoker\ObjectSerializer;

/**
 * AntecipacaoApi Class Doc Comment
 *
 * @category Class
 * @package  br.com.conductor.pier.api.v2.invoker
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AntecipacaoApi
{

    /**
     * API Client
     * @var \br.com.conductor.pier.api.v2.invoker\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \br.com.conductor.pier.api.v2.invoker\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('http://localhost/');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \br.com.conductor.pier.api.v2.invoker\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \br.com.conductor.pier.api.v2.invoker\ApiClient $apiClient set the API client
     * @return AntecipacaoApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * configurarTaxaAntecipacaoUsingPOST
     *
     * Configura a Taxa de Antecipa\u00C3\u00A7\u00C3\u00A3o de um Produto
     *
     * @param int $id Id Produto (required)
     * @param \br.com.conductor.pier.api.v2.model\TaxaAntecipacaoRequest $taxa_antecipacao_request taxaAntecipacaoRequest (required)
     * @return \br.com.conductor.pier.api.v2.model\ParametroProdutoResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function configurarTaxaAntecipacaoUsingPOST($id, $taxa_antecipacao_request)
    {
        list($response, $statusCode, $httpHeader) = $this->configurarTaxaAntecipacaoUsingPOSTWithHttpInfo ($id, $taxa_antecipacao_request);
        return $response; 
    }


    /**
     * configurarTaxaAntecipacaoUsingPOSTWithHttpInfo
     *
     * Configura a Taxa de Antecipa\u00C3\u00A7\u00C3\u00A3o de um Produto
     *
     * @param int $id Id Produto (required)
     * @param \br.com.conductor.pier.api.v2.model\TaxaAntecipacaoRequest $taxa_antecipacao_request taxaAntecipacaoRequest (required)
     * @return Array of \br.com.conductor.pier.api.v2.model\ParametroProdutoResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function configurarTaxaAntecipacaoUsingPOSTWithHttpInfo($id, $taxa_antecipacao_request)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling configurarTaxaAntecipacaoUsingPOST');
        }
        // verify the required parameter 'taxa_antecipacao_request' is set
        if ($taxa_antecipacao_request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $taxa_antecipacao_request when calling configurarTaxaAntecipacaoUsingPOST');
        }
  
        // parse inputs
        $resourcePath = "/api/produtos/{id}/configurar-taxa-antecipacao";
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
        
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($taxa_antecipacao_request)) {
            $_tempBody = $taxa_antecipacao_request;
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams, '\br.com.conductor.pier.api.v2.model\ParametroProdutoResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\ParametroProdutoResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\ParametroProdutoResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * consultarTaxaAntecipacaoUsingGET
     *
     * Consulta a Taxa de Antecipa\u00C3\u00A7\u00C3\u00A3o de um Produto
     *
     * @param int $id Id Produto (required)
     * @param string $tipo_transacao Tipo da Transa\u00C3\u00A7\u00C3\u00A3o (ON-US ou OFF-US) (required)
     * @return \br.com.conductor.pier.api.v2.model\ParametroProdutoResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function consultarTaxaAntecipacaoUsingGET($id, $tipo_transacao)
    {
        list($response, $statusCode, $httpHeader) = $this->consultarTaxaAntecipacaoUsingGETWithHttpInfo ($id, $tipo_transacao);
        return $response; 
    }


    /**
     * consultarTaxaAntecipacaoUsingGETWithHttpInfo
     *
     * Consulta a Taxa de Antecipa\u00C3\u00A7\u00C3\u00A3o de um Produto
     *
     * @param int $id Id Produto (required)
     * @param string $tipo_transacao Tipo da Transa\u00C3\u00A7\u00C3\u00A3o (ON-US ou OFF-US) (required)
     * @return Array of \br.com.conductor.pier.api.v2.model\ParametroProdutoResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function consultarTaxaAntecipacaoUsingGETWithHttpInfo($id, $tipo_transacao)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling consultarTaxaAntecipacaoUsingGET');
        }
        // verify the required parameter 'tipo_transacao' is set
        if ($tipo_transacao === null) {
            throw new \InvalidArgumentException('Missing the required parameter $tipo_transacao when calling consultarTaxaAntecipacaoUsingGET');
        }
  
        // parse inputs
        $resourcePath = "/api/produtos/{id}/consultar-taxa-antecipacao";
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
        
        if ($tipo_transacao !== null) {
            $queryParams['tipoTransacao'] = $this->apiClient->getSerializer()->toQueryValue($tipo_transacao);
        }
        
        // path params
        
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
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
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\br.com.conductor.pier.api.v2.model\ParametroProdutoResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\ParametroProdutoResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\ParametroProdutoResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * efetivarAntecipacaoUsingPOST
     *
     * Faz a efetiva\u00C3\u00A7\u00C3\u00A3o da antecipa\u00C3\u00A7\u00C3\u00A3o
     *
     * @param int $id_conta C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Conta. (required)
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do evento. (required)
     * @param int $quantidade_parcelas Quantidade de parcelas para serem antecipadas. (required)
     * @param string $complemento Dados complementares sobre a realiza\u00C3\u00A7\u00C3\u00A3o da transa\u00C3\u00A7\u00C3\u00A3o. (optional)
     * @return \br.com.conductor.pier.api.v2.model\AntecipacaoResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function efetivarAntecipacaoUsingPOST($id_conta, $id, $quantidade_parcelas, $complemento = null)
    {
        list($response, $statusCode, $httpHeader) = $this->efetivarAntecipacaoUsingPOSTWithHttpInfo ($id_conta, $id, $quantidade_parcelas, $complemento);
        return $response; 
    }


    /**
     * efetivarAntecipacaoUsingPOSTWithHttpInfo
     *
     * Faz a efetiva\u00C3\u00A7\u00C3\u00A3o da antecipa\u00C3\u00A7\u00C3\u00A3o
     *
     * @param int $id_conta C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Conta. (required)
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do evento. (required)
     * @param int $quantidade_parcelas Quantidade de parcelas para serem antecipadas. (required)
     * @param string $complemento Dados complementares sobre a realiza\u00C3\u00A7\u00C3\u00A3o da transa\u00C3\u00A7\u00C3\u00A3o. (optional)
     * @return Array of \br.com.conductor.pier.api.v2.model\AntecipacaoResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function efetivarAntecipacaoUsingPOSTWithHttpInfo($id_conta, $id, $quantidade_parcelas, $complemento = null)
    {
        
        // verify the required parameter 'id_conta' is set
        if ($id_conta === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_conta when calling efetivarAntecipacaoUsingPOST');
        }
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling efetivarAntecipacaoUsingPOST');
        }
        // verify the required parameter 'quantidade_parcelas' is set
        if ($quantidade_parcelas === null) {
            throw new \InvalidArgumentException('Missing the required parameter $quantidade_parcelas when calling efetivarAntecipacaoUsingPOST');
        }
  
        // parse inputs
        $resourcePath = "/api/compras-antecipaveis/{id}/efetivar-antecipacao";
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
        
        if ($id_conta !== null) {
            $queryParams['idConta'] = $this->apiClient->getSerializer()->toQueryValue($id_conta);
        }// query params
        
        if ($quantidade_parcelas !== null) {
            $queryParams['quantidadeParcelas'] = $this->apiClient->getSerializer()->toQueryValue($quantidade_parcelas);
        }// query params
        
        if ($complemento !== null) {
            $queryParams['complemento'] = $this->apiClient->getSerializer()->toQueryValue($complemento);
        }
        
        // path params
        
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
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
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams, '\br.com.conductor.pier.api.v2.model\AntecipacaoResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\AntecipacaoResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\AntecipacaoResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * efetivarAntecipacoesUsingPOST
     *
     * Faz a efetiva\u00C3\u00A7\u00C3\u00A3o da antecipa\u00C3\u00A7\u00C3\u00A3o
     *
     * @param int $id_conta C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Conta. (required)
     * @param string $complemento Dados complementares sobre a realiza\u00C3\u00A7\u00C3\u00A3o da transa\u00C3\u00A7\u00C3\u00A3o. (optional)
     * @return \br.com.conductor.pier.api.v2.model\AntecipacaoMockResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function efetivarAntecipacoesUsingPOST($id_conta, $complemento = null)
    {
        list($response, $statusCode, $httpHeader) = $this->efetivarAntecipacoesUsingPOSTWithHttpInfo ($id_conta, $complemento);
        return $response; 
    }


    /**
     * efetivarAntecipacoesUsingPOSTWithHttpInfo
     *
     * Faz a efetiva\u00C3\u00A7\u00C3\u00A3o da antecipa\u00C3\u00A7\u00C3\u00A3o
     *
     * @param int $id_conta C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Conta. (required)
     * @param string $complemento Dados complementares sobre a realiza\u00C3\u00A7\u00C3\u00A3o da transa\u00C3\u00A7\u00C3\u00A3o. (optional)
     * @return Array of \br.com.conductor.pier.api.v2.model\AntecipacaoMockResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function efetivarAntecipacoesUsingPOSTWithHttpInfo($id_conta, $complemento = null)
    {
        
        // verify the required parameter 'id_conta' is set
        if ($id_conta === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_conta when calling efetivarAntecipacoesUsingPOST');
        }
  
        // parse inputs
        $resourcePath = "/api/compras-antecipaveis/efetivar-antecipacao";
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
        
        if ($id_conta !== null) {
            $queryParams['idConta'] = $this->apiClient->getSerializer()->toQueryValue($id_conta);
        }// query params
        
        if ($complemento !== null) {
            $queryParams['complemento'] = $this->apiClient->getSerializer()->toQueryValue($complemento);
        }
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams, '\br.com.conductor.pier.api.v2.model\AntecipacaoMockResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\AntecipacaoMockResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\AntecipacaoMockResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * listarUsingGET8
     *
     * Listar compras com parcelas antecip\u00C3\u00A1veis
     *
     * @param int $id_conta C\u00C3\u00B3digo identificador da conta da Compra. (required)
     * @param string[] $sort Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. (optional)
     * @param int $page P\u00C3\u00A1gina solicitada (Default = 0) (optional)
     * @param int $limit Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) (optional)
     * @param int $id_compra C\u00C3\u00B3digo identificador da Compra. (optional)
     * @param bool $parcelada Indica se a compra \u00C3\u00A9 parcelada. (optional)
     * @param bool $juros Indica se a compra \u00C3\u00A9 com ou sem juros. (optional)
     * @param string $tipo_origem_transacao Indica se a compra \u00C3\u00A9 ON-US ou OFF-US (optional)
     * @return \br.com.conductor.pier.api.v2.model\PageCompraResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function listarUsingGET8($id_conta, $sort = null, $page = null, $limit = null, $id_compra = null, $parcelada = null, $juros = null, $tipo_origem_transacao = null)
    {
        list($response, $statusCode, $httpHeader) = $this->listarUsingGET8WithHttpInfo ($id_conta, $sort, $page, $limit, $id_compra, $parcelada, $juros, $tipo_origem_transacao);
        return $response; 
    }


    /**
     * listarUsingGET8WithHttpInfo
     *
     * Listar compras com parcelas antecip\u00C3\u00A1veis
     *
     * @param int $id_conta C\u00C3\u00B3digo identificador da conta da Compra. (required)
     * @param string[] $sort Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. (optional)
     * @param int $page P\u00C3\u00A1gina solicitada (Default = 0) (optional)
     * @param int $limit Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 50, Max = 50) (optional)
     * @param int $id_compra C\u00C3\u00B3digo identificador da Compra. (optional)
     * @param bool $parcelada Indica se a compra \u00C3\u00A9 parcelada. (optional)
     * @param bool $juros Indica se a compra \u00C3\u00A9 com ou sem juros. (optional)
     * @param string $tipo_origem_transacao Indica se a compra \u00C3\u00A9 ON-US ou OFF-US (optional)
     * @return Array of \br.com.conductor.pier.api.v2.model\PageCompraResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function listarUsingGET8WithHttpInfo($id_conta, $sort = null, $page = null, $limit = null, $id_compra = null, $parcelada = null, $juros = null, $tipo_origem_transacao = null)
    {
        
        // verify the required parameter 'id_conta' is set
        if ($id_conta === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_conta when calling listarUsingGET8');
        }
  
        // parse inputs
        $resourcePath = "/api/compras-antecipaveis";
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
        
        if (is_array($sort)) {
            $sort = $this->apiClient->getSerializer()->serializeCollection($sort, 'multi', true);
        }
        
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
        }// query params
        
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }// query params
        
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }// query params
        
        if ($id_compra !== null) {
            $queryParams['idCompra'] = $this->apiClient->getSerializer()->toQueryValue($id_compra);
        }// query params
        
        if ($id_conta !== null) {
            $queryParams['idConta'] = $this->apiClient->getSerializer()->toQueryValue($id_conta);
        }// query params
        
        if ($parcelada !== null) {
            $queryParams['parcelada'] = $this->apiClient->getSerializer()->toQueryValue($parcelada);
        }// query params
        
        if ($juros !== null) {
            $queryParams['juros'] = $this->apiClient->getSerializer()->toQueryValue($juros);
        }// query params
        
        if ($tipo_origem_transacao !== null) {
            $queryParams['tipoOrigemTransacao'] = $this->apiClient->getSerializer()->toQueryValue($tipo_origem_transacao);
        }
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\br.com.conductor.pier.api.v2.model\PageCompraResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\PageCompraResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\PageCompraResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * simularAntecipacaoUsingGET
     *
     * Simular antecipa\u00C3\u00A7\u00C3\u00A3o de parcelas
     *
     * @param int $id_conta C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta. (required)
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do evento. (required)
     * @param string $complemento Dados complementares sobre a realiza\u00C3\u00A7\u00C3\u00A3o da transa\u00C3\u00A7\u00C3\u00A3o. (optional)
     * @return \br.com.conductor.pier.api.v2.model\AntecipacaoSimuladaResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function simularAntecipacaoUsingGET($id_conta, $id, $complemento = null)
    {
        list($response, $statusCode, $httpHeader) = $this->simularAntecipacaoUsingGETWithHttpInfo ($id_conta, $id, $complemento);
        return $response; 
    }


    /**
     * simularAntecipacaoUsingGETWithHttpInfo
     *
     * Simular antecipa\u00C3\u00A7\u00C3\u00A3o de parcelas
     *
     * @param int $id_conta C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta. (required)
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do evento. (required)
     * @param string $complemento Dados complementares sobre a realiza\u00C3\u00A7\u00C3\u00A3o da transa\u00C3\u00A7\u00C3\u00A3o. (optional)
     * @return Array of \br.com.conductor.pier.api.v2.model\AntecipacaoSimuladaResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function simularAntecipacaoUsingGETWithHttpInfo($id_conta, $id, $complemento = null)
    {
        
        // verify the required parameter 'id_conta' is set
        if ($id_conta === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_conta when calling simularAntecipacaoUsingGET');
        }
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling simularAntecipacaoUsingGET');
        }
  
        // parse inputs
        $resourcePath = "/api/compras-antecipaveis/{id}/simular-antecipacao";
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
        
        if ($id_conta !== null) {
            $queryParams['idConta'] = $this->apiClient->getSerializer()->toQueryValue($id_conta);
        }// query params
        
        if ($complemento !== null) {
            $queryParams['complemento'] = $this->apiClient->getSerializer()->toQueryValue($complemento);
        }
        
        // path params
        
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
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
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\br.com.conductor.pier.api.v2.model\AntecipacaoSimuladaResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\AntecipacaoSimuladaResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\AntecipacaoSimuladaResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * simularAntecipacoesUsingGET
     *
     * Simular antecipa\u00C3\u00A7\u00C3\u00A3o de todas as parcelas antecip\u00C3\u00A1veis
     *
     * @param int $id_conta C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta. (required)
     * @param string $complemento Dados complementares sobre a realiza\u00C3\u00A7\u00C3\u00A3o da transa\u00C3\u00A7\u00C3\u00A3o. (optional)
     * @return \br.com.conductor.pier.api.v2.model\AntecipacaoSimuladaLoteResponse
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function simularAntecipacoesUsingGET($id_conta, $complemento = null)
    {
        list($response, $statusCode, $httpHeader) = $this->simularAntecipacoesUsingGETWithHttpInfo ($id_conta, $complemento);
        return $response; 
    }


    /**
     * simularAntecipacoesUsingGETWithHttpInfo
     *
     * Simular antecipa\u00C3\u00A7\u00C3\u00A3o de todas as parcelas antecip\u00C3\u00A1veis
     *
     * @param int $id_conta C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta. (required)
     * @param string $complemento Dados complementares sobre a realiza\u00C3\u00A7\u00C3\u00A3o da transa\u00C3\u00A7\u00C3\u00A3o. (optional)
     * @return Array of \br.com.conductor.pier.api.v2.model\AntecipacaoSimuladaLoteResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function simularAntecipacoesUsingGETWithHttpInfo($id_conta, $complemento = null)
    {
        
        // verify the required parameter 'id_conta' is set
        if ($id_conta === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_conta when calling simularAntecipacoesUsingGET');
        }
  
        // parse inputs
        $resourcePath = "/api/compras-antecipaveis/simular-antecipacao";
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
        
        if ($id_conta !== null) {
            $queryParams['idConta'] = $this->apiClient->getSerializer()->toQueryValue($id_conta);
        }// query params
        
        if ($complemento !== null) {
            $queryParams['complemento'] = $this->apiClient->getSerializer()->toQueryValue($complemento);
        }
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\br.com.conductor.pier.api.v2.model\AntecipacaoSimuladaLoteResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\AntecipacaoSimuladaLoteResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\AntecipacaoSimuladaLoteResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}
