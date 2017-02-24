<?php
/**
 * FAQApi
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
 * FAQApi Class Doc Comment
 *
 * @category Class
 * @package  br.com.conductor.pier.api.v2.invoker
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FAQApi
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
            $apiClient->getConfig()->setHost('https://localhost/');
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
     * @return FAQApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * adicionarUsingPOST
     *
     * Adiciona uma nova FAQ
     *
     * @param string $pergunta Conte\u00C3\u00BAdo da pergunta. (required)
     * @param string $resposta Conte\u00C3\u00BAdo da resposta. (required)
     * @param int $relevancia N\u00C3\u00ADvel de relev\u00C3\u00A2ncia da pergunta. (optional)
     * @param string $plataforma Plataforma em que a FAQ se encaixa. (optional)
     * @param string $categoria Categoria de assunto do qual a FAQ se trata. (optional)
     * @param string $status Status descrevendo a situa\u00C3\u00A7\u00C3\u00A3o atual da FAQ. (optional)
     * @return \br.com.conductor.pier.api.v2.model\FAQ
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function adicionarUsingPOST($pergunta, $resposta, $relevancia = null, $plataforma = null, $categoria = null, $status = null)
    {
        list($response, $statusCode, $httpHeader) = $this->adicionarUsingPOSTWithHttpInfo ($pergunta, $resposta, $relevancia, $plataforma, $categoria, $status);
        return $response; 
    }


    /**
     * adicionarUsingPOSTWithHttpInfo
     *
     * Adiciona uma nova FAQ
     *
     * @param string $pergunta Conte\u00C3\u00BAdo da pergunta. (required)
     * @param string $resposta Conte\u00C3\u00BAdo da resposta. (required)
     * @param int $relevancia N\u00C3\u00ADvel de relev\u00C3\u00A2ncia da pergunta. (optional)
     * @param string $plataforma Plataforma em que a FAQ se encaixa. (optional)
     * @param string $categoria Categoria de assunto do qual a FAQ se trata. (optional)
     * @param string $status Status descrevendo a situa\u00C3\u00A7\u00C3\u00A3o atual da FAQ. (optional)
     * @return Array of \br.com.conductor.pier.api.v2.model\FAQ, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function adicionarUsingPOSTWithHttpInfo($pergunta, $resposta, $relevancia = null, $plataforma = null, $categoria = null, $status = null)
    {
        
        // verify the required parameter 'pergunta' is set
        if ($pergunta === null) {
            throw new \InvalidArgumentException('Missing the required parameter $pergunta when calling adicionarUsingPOST');
        }
        // verify the required parameter 'resposta' is set
        if ($resposta === null) {
            throw new \InvalidArgumentException('Missing the required parameter $resposta when calling adicionarUsingPOST');
        }
  
        // parse inputs
        $resourcePath = "/api/faqs";
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
        
        if ($pergunta !== null) {
            $queryParams['pergunta'] = $this->apiClient->getSerializer()->toQueryValue($pergunta);
        }// query params
        
        if ($resposta !== null) {
            $queryParams['resposta'] = $this->apiClient->getSerializer()->toQueryValue($resposta);
        }// query params
        
        if ($relevancia !== null) {
            $queryParams['relevancia'] = $this->apiClient->getSerializer()->toQueryValue($relevancia);
        }// query params
        
        if ($plataforma !== null) {
            $queryParams['plataforma'] = $this->apiClient->getSerializer()->toQueryValue($plataforma);
        }// query params
        
        if ($categoria !== null) {
            $queryParams['categoria'] = $this->apiClient->getSerializer()->toQueryValue($categoria);
        }// query params
        
        if ($status !== null) {
            $queryParams['status'] = $this->apiClient->getSerializer()->toQueryValue($status);
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
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams, '\br.com.conductor.pier.api.v2.model\FAQ'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\FAQ', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\FAQ', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * alterarUsingPUT2
     *
     * Alterar FAQ
     *
     * @param int $id Id (required)
     * @param string $pergunta Conte\u00C3\u00BAdo da pergunta. (required)
     * @param string $resposta Conte\u00C3\u00BAdo da resposta. (required)
     * @param int $relevancia N\u00C3\u00ADvel de relev\u00C3\u00A2ncia da pergunta. (optional)
     * @param string $plataforma Plataforma em que a FAQ se encaixa. (optional)
     * @param string $categoria Categoria de assunto do qual a FAQ se trata. (optional)
     * @param string $status Status descrevendo a situa\u00C3\u00A7\u00C3\u00A3o atual da FAQ. (optional)
     * @return \br.com.conductor.pier.api.v2.model\FAQ
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function alterarUsingPUT2($id, $pergunta, $resposta, $relevancia = null, $plataforma = null, $categoria = null, $status = null)
    {
        list($response, $statusCode, $httpHeader) = $this->alterarUsingPUT2WithHttpInfo ($id, $pergunta, $resposta, $relevancia, $plataforma, $categoria, $status);
        return $response; 
    }


    /**
     * alterarUsingPUT2WithHttpInfo
     *
     * Alterar FAQ
     *
     * @param int $id Id (required)
     * @param string $pergunta Conte\u00C3\u00BAdo da pergunta. (required)
     * @param string $resposta Conte\u00C3\u00BAdo da resposta. (required)
     * @param int $relevancia N\u00C3\u00ADvel de relev\u00C3\u00A2ncia da pergunta. (optional)
     * @param string $plataforma Plataforma em que a FAQ se encaixa. (optional)
     * @param string $categoria Categoria de assunto do qual a FAQ se trata. (optional)
     * @param string $status Status descrevendo a situa\u00C3\u00A7\u00C3\u00A3o atual da FAQ. (optional)
     * @return Array of \br.com.conductor.pier.api.v2.model\FAQ, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function alterarUsingPUT2WithHttpInfo($id, $pergunta, $resposta, $relevancia = null, $plataforma = null, $categoria = null, $status = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling alterarUsingPUT2');
        }
        // verify the required parameter 'pergunta' is set
        if ($pergunta === null) {
            throw new \InvalidArgumentException('Missing the required parameter $pergunta when calling alterarUsingPUT2');
        }
        // verify the required parameter 'resposta' is set
        if ($resposta === null) {
            throw new \InvalidArgumentException('Missing the required parameter $resposta when calling alterarUsingPUT2');
        }
  
        // parse inputs
        $resourcePath = "/api/faqs/{id}";
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
        
        if ($pergunta !== null) {
            $queryParams['pergunta'] = $this->apiClient->getSerializer()->toQueryValue($pergunta);
        }// query params
        
        if ($resposta !== null) {
            $queryParams['resposta'] = $this->apiClient->getSerializer()->toQueryValue($resposta);
        }// query params
        
        if ($relevancia !== null) {
            $queryParams['relevancia'] = $this->apiClient->getSerializer()->toQueryValue($relevancia);
        }// query params
        
        if ($plataforma !== null) {
            $queryParams['plataforma'] = $this->apiClient->getSerializer()->toQueryValue($plataforma);
        }// query params
        
        if ($categoria !== null) {
            $queryParams['categoria'] = $this->apiClient->getSerializer()->toQueryValue($categoria);
        }// query params
        
        if ($status !== null) {
            $queryParams['status'] = $this->apiClient->getSerializer()->toQueryValue($status);
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
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $headerParams['access_token'] = $apiKey;
        }
        
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'PUT',
                $queryParams, $httpBody,
                $headerParams, '\br.com.conductor.pier.api.v2.model\FAQ'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\FAQ', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\FAQ', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * consultarUsingGET5
     *
     * Consultar FAQ por id
     *
     * @param int $id Id (required)
     * @return \br.com.conductor.pier.api.v2.model\FAQ
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function consultarUsingGET5($id)
    {
        list($response, $statusCode, $httpHeader) = $this->consultarUsingGET5WithHttpInfo ($id);
        return $response; 
    }


    /**
     * consultarUsingGET5WithHttpInfo
     *
     * Consultar FAQ por id
     *
     * @param int $id Id (required)
     * @return Array of \br.com.conductor.pier.api.v2.model\FAQ, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function consultarUsingGET5WithHttpInfo($id)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling consultarUsingGET5');
        }
  
        // parse inputs
        $resourcePath = "/api/faqs/{id}";
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\FAQ'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\FAQ', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\FAQ', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * listarUsingGET5
     *
     * Lista FAQs
     *
     * @param int $page P\u00C3\u00A1gina solicitada (Default = 0) (optional)
     * @param int $limit Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) (optional)
     * @param int $id_faq C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da FAQ (id). (optional)
     * @param string $pergunta Conte\u00C3\u00BAdo da pergunta. (optional)
     * @param string $resposta Conte\u00C3\u00BAdo da resposta. (optional)
     * @param int $relevancia N\u00C3\u00ADvel de relev\u00C3\u00A2ncia da pergunta. (optional)
     * @param string $plataforma Plataforma em que a FAQ se encaixa. (optional)
     * @param string $categoria Categoria de assunto do qual a FAQ se trata. (optional)
     * @param string $status Status descrevendo a situa\u00C3\u00A7\u00C3\u00A3o atual da FAQ. (optional)
     * @return \br.com.conductor.pier.api.v2.model\PageFaqs
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function listarUsingGET5($page = null, $limit = null, $id_faq = null, $pergunta = null, $resposta = null, $relevancia = null, $plataforma = null, $categoria = null, $status = null)
    {
        list($response, $statusCode, $httpHeader) = $this->listarUsingGET5WithHttpInfo ($page, $limit, $id_faq, $pergunta, $resposta, $relevancia, $plataforma, $categoria, $status);
        return $response; 
    }


    /**
     * listarUsingGET5WithHttpInfo
     *
     * Lista FAQs
     *
     * @param int $page P\u00C3\u00A1gina solicitada (Default = 0) (optional)
     * @param int $limit Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) (optional)
     * @param int $id_faq C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da FAQ (id). (optional)
     * @param string $pergunta Conte\u00C3\u00BAdo da pergunta. (optional)
     * @param string $resposta Conte\u00C3\u00BAdo da resposta. (optional)
     * @param int $relevancia N\u00C3\u00ADvel de relev\u00C3\u00A2ncia da pergunta. (optional)
     * @param string $plataforma Plataforma em que a FAQ se encaixa. (optional)
     * @param string $categoria Categoria de assunto do qual a FAQ se trata. (optional)
     * @param string $status Status descrevendo a situa\u00C3\u00A7\u00C3\u00A3o atual da FAQ. (optional)
     * @return Array of \br.com.conductor.pier.api.v2.model\PageFaqs, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v2.invoker\ApiException on non-2xx response
     */
    public function listarUsingGET5WithHttpInfo($page = null, $limit = null, $id_faq = null, $pergunta = null, $resposta = null, $relevancia = null, $plataforma = null, $categoria = null, $status = null)
    {
        
  
        // parse inputs
        $resourcePath = "/api/faqs";
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
        
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }// query params
        
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }// query params
        
        if ($id_faq !== null) {
            $queryParams['idFaq'] = $this->apiClient->getSerializer()->toQueryValue($id_faq);
        }// query params
        
        if ($pergunta !== null) {
            $queryParams['pergunta'] = $this->apiClient->getSerializer()->toQueryValue($pergunta);
        }// query params
        
        if ($resposta !== null) {
            $queryParams['resposta'] = $this->apiClient->getSerializer()->toQueryValue($resposta);
        }// query params
        
        if ($relevancia !== null) {
            $queryParams['relevancia'] = $this->apiClient->getSerializer()->toQueryValue($relevancia);
        }// query params
        
        if ($plataforma !== null) {
            $queryParams['plataforma'] = $this->apiClient->getSerializer()->toQueryValue($plataforma);
        }// query params
        
        if ($categoria !== null) {
            $queryParams['categoria'] = $this->apiClient->getSerializer()->toQueryValue($categoria);
        }// query params
        
        if ($status !== null) {
            $queryParams['status'] = $this->apiClient->getSerializer()->toQueryValue($status);
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
                $headerParams, '\br.com.conductor.pier.api.v2.model\PageFaqs'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v2.model\PageFaqs', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v2.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v2.model\PageFaqs', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}