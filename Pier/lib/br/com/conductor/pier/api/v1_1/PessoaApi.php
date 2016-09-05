<?php
/**
 * PessoaApi
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
 * PessoaApi Class Doc Comment
 *
 * @category Class
 * @package  br.com.conductor.pier.api.v1_1.invoker
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PessoaApi
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
     * @return PessoaApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * consultarUsingGET1
     *
     * Opera\u00C3\u00A7\u00C3\u00A3o utilizada para consultar uma determinada Origem Comercial 
     *
     * @param int $id_origem_comercial ID da Origem Comercial (required)
     * @return \br.com.conductor.pier.api.v1_1.model\OrigemComercial
     * @throws \br.com.conductor.pier.api.v1_1.invoker\ApiException on non-2xx response
     */
    public function consultarUsingGET1($id_origem_comercial)
    {
        list($response, $statusCode, $httpHeader) = $this->consultarUsingGET1WithHttpInfo ($id_origem_comercial);
        return $response; 
    }


    /**
     * consultarUsingGET1WithHttpInfo
     *
     * Opera\u00C3\u00A7\u00C3\u00A3o utilizada para consultar uma determinada Origem Comercial 
     *
     * @param int $id_origem_comercial ID da Origem Comercial (required)
     * @return Array of \br.com.conductor.pier.api.v1_1.model\OrigemComercial, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v1_1.invoker\ApiException on non-2xx response
     */
    public function consultarUsingGET1WithHttpInfo($id_origem_comercial)
    {
        
        // verify the required parameter 'id_origem_comercial' is set
        if ($id_origem_comercial === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_origem_comercial when calling consultarUsingGET1');
        }
  
        // parse inputs
        $resourcePath = "/api/pessoas/{id_origem_comercial}";
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
        
        if ($id_origem_comercial !== null) {
            $resourcePath = str_replace(
                "{" . "id_origem_comercial" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_origem_comercial),
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
     * listarUsingGET1
     *
     * Lista as Pessoas cadastradas no Emissor
     *
     * @param int $id_pessoa C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Pessoa (id). (optional)
     * @param string $nome Apresenta o &#39;Nome Completo da PF&#39; ou o &#39;Nome Completo da Raz\u00C3\u00A3o Social (Nome Empresarial)&#39;. (optional)
     * @param string $tipo C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do tipo da Pessoa, sendo: (\&quot;PF\&quot;: Pessoa F\u00C3\u00ADsica), (\&quot;PJ\&quot;: Pessoa Jur\u00C3\u00ADdica). (optional)
     * @param string $cpf N\u00C3\u00BAmero do CPF, quando PF. (optional)
     * @param string $cnpj N\u00C3\u00BAmero do CNPJ, quando PJ. (optional)
     * @param \DateTime $data_nascimento Data de Nascimento da Pessoa, quando PF, ou a Data de Abertura da Empresa, quando PJ. (optional)
     * @param string $cnpj2 N\u00C3\u00BAmero do CNPJ, quando PJ. (optional)
     * @param int $page P\u00C3\u00A1gina solicitada (Default = 0) (optional)
     * @param int $limit Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) (optional)
     * @return \br.com.conductor.pier.api.v1_1.model\PagePessoas
     * @throws \br.com.conductor.pier.api.v1_1.invoker\ApiException on non-2xx response
     */
    public function listarUsingGET1($id_pessoa = null, $nome = null, $tipo = null, $cpf = null, $cnpj = null, $data_nascimento = null, $cnpj2 = null, $page = null, $limit = null)
    {
        list($response, $statusCode, $httpHeader) = $this->listarUsingGET1WithHttpInfo ($id_pessoa, $nome, $tipo, $cpf, $cnpj, $data_nascimento, $cnpj2, $page, $limit);
        return $response; 
    }


    /**
     * listarUsingGET1WithHttpInfo
     *
     * Lista as Pessoas cadastradas no Emissor
     *
     * @param int $id_pessoa C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Pessoa (id). (optional)
     * @param string $nome Apresenta o &#39;Nome Completo da PF&#39; ou o &#39;Nome Completo da Raz\u00C3\u00A3o Social (Nome Empresarial)&#39;. (optional)
     * @param string $tipo C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do tipo da Pessoa, sendo: (\&quot;PF\&quot;: Pessoa F\u00C3\u00ADsica), (\&quot;PJ\&quot;: Pessoa Jur\u00C3\u00ADdica). (optional)
     * @param string $cpf N\u00C3\u00BAmero do CPF, quando PF. (optional)
     * @param string $cnpj N\u00C3\u00BAmero do CNPJ, quando PJ. (optional)
     * @param \DateTime $data_nascimento Data de Nascimento da Pessoa, quando PF, ou a Data de Abertura da Empresa, quando PJ. (optional)
     * @param string $cnpj2 N\u00C3\u00BAmero do CNPJ, quando PJ. (optional)
     * @param int $page P\u00C3\u00A1gina solicitada (Default = 0) (optional)
     * @param int $limit Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) (optional)
     * @return Array of \br.com.conductor.pier.api.v1_1.model\PagePessoas, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v1_1.invoker\ApiException on non-2xx response
     */
    public function listarUsingGET1WithHttpInfo($id_pessoa = null, $nome = null, $tipo = null, $cpf = null, $cnpj = null, $data_nascimento = null, $cnpj2 = null, $page = null, $limit = null)
    {
        
  
        // parse inputs
        $resourcePath = "/api/pessoas";
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
        
        if ($id_pessoa !== null) {
            $queryParams['id_pessoa'] = $this->apiClient->getSerializer()->toQueryValue($id_pessoa);
        }// query params
        
        if ($nome !== null) {
            $queryParams['nome'] = $this->apiClient->getSerializer()->toQueryValue($nome);
        }// query params
        
        if ($tipo !== null) {
            $queryParams['tipo'] = $this->apiClient->getSerializer()->toQueryValue($tipo);
        }// query params
        
        if ($cpf !== null) {
            $queryParams['cpf'] = $this->apiClient->getSerializer()->toQueryValue($cpf);
        }// query params
        
        if ($cnpj !== null) {
            $queryParams['cnpj'] = $this->apiClient->getSerializer()->toQueryValue($cnpj);
        }// query params
        
        if ($data_nascimento !== null) {
            $queryParams['data_nascimento'] = $this->apiClient->getSerializer()->toQueryValue($data_nascimento);
        }// query params
        
        if ($cnpj2 !== null) {
            $queryParams['cnpj'] = $this->apiClient->getSerializer()->toQueryValue($cnpj2);
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
                $headerParams, '\br.com.conductor.pier.api.v1_1.model\PagePessoas'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v1_1.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v1_1.model\PagePessoas', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v1_1.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v1_1.model\PagePessoas', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}
