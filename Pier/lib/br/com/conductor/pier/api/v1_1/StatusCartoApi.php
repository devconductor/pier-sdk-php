<?php
/**
 * StatusCartoApi
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
 * StatusCartoApi Class Doc Comment
 *
 * @category Class
 * @package  br.com.conductor.pier.api.v1_1.invoker
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StatusCartoApi
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
     * @return StatusCartoApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * consultarStatusCartaoUsingGET
     *
     * Apresenta os dados de um determinado Status Cart\u00C3\u00A3o 
     *
     * @param int $id_status_cartao C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Est\u00C3\u00A1gio de Entrega do Cart\u00C3\u00A3o (id). (required)
     * @return \br.com.conductor.pier.api.v1_1.model\StatusCartao
     * @throws \br.com.conductor.pier.api.v1_1.invoker\ApiException on non-2xx response
     */
    public function consultarStatusCartaoUsingGET($id_status_cartao)
    {
        list($response, $statusCode, $httpHeader) = $this->consultarStatusCartaoUsingGETWithHttpInfo ($id_status_cartao);
        return $response; 
    }


    /**
     * consultarStatusCartaoUsingGETWithHttpInfo
     *
     * Apresenta os dados de um determinado Status Cart\u00C3\u00A3o 
     *
     * @param int $id_status_cartao C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Est\u00C3\u00A1gio de Entrega do Cart\u00C3\u00A3o (id). (required)
     * @return Array of \br.com.conductor.pier.api.v1_1.model\StatusCartao, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v1_1.invoker\ApiException on non-2xx response
     */
    public function consultarStatusCartaoUsingGETWithHttpInfo($id_status_cartao)
    {
        
        // verify the required parameter 'id_status_cartao' is set
        if ($id_status_cartao === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_status_cartao when calling consultarStatusCartaoUsingGET');
        }
  
        // parse inputs
        $resourcePath = "/api/status-cartoes/{id_status_cartao}";
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
        
        if ($id_status_cartao !== null) {
            $resourcePath = str_replace(
                "{" . "id_status_cartao" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_status_cartao),
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
                $headerParams, '\br.com.conductor.pier.api.v1_1.model\StatusCartao'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v1_1.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v1_1.model\StatusCartao', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v1_1.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v1_1.model\StatusCartao', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * listarStatusCartoesUsingGET
     *
     * Lista as op\u00C3\u00A7\u00C3\u00B5es de Status do Cart\u00C3\u00A3o 
     *
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Status do Cart\u00C3\u00A3o (id)  (optional)
     * @param string $nome Nome atribu\u00C3\u00ADdo ao Status de Entrega do Cart\u00C3\u00A3o. (optional)
     * @param int $flag_altera_status Quando ativa, indica que ao ser atribu\u00C3\u00ADdo um idStatusCartao com essa caracter\u00C3\u00ADstica, o cart\u00C3\u00A3o ter\u00C3\u00A1 o seu idStatusCartao alterado para o que fora escolhido. Caso contr\u00C3\u00A1rio, o idStatusCartao s\u00C3\u00B3 ser\u00C3\u00A1 alterado ap\u00C3\u00B3s o desbloqueio de um novo cart\u00C3\u00A3o do mesmo Portador e Conta. (optional)
     * @param int $flag_cancela_no_desbloqueio Quando ativa, indica que o cart\u00C3\u00A3o ativo que o portador possuir na mesma conta do cart\u00C3\u00A3o a ser desbloqueado, e que o status dele possua essa caracter\u00C3\u00ADstica, dever\u00C3\u00A1 ser cancelado quando um novo cart\u00C3\u00A3o for desbloqueado. (optional)
     * @param int $id_status_destino_desbloqueio Indica qual o idStatusCartao que que ser\u00C3\u00A1 atribu\u00C3\u00ADdo aos cart\u00C3\u00B5es que forem cancelados devido ao desbloqueio de um novo cart\u00C3\u00A3o. (optional)
     * @param int $flag_cancela_conta Quando ativa, indica que cart\u00C3\u00B5es que tiverem um idStatusCartao atribu\u00C3\u00ADdo com essa caracter\u00C3\u00ADstica, e tal cart\u00C3\u00A3o seja de um titular (portador = 1), ter\u00C3\u00A3o a conta a qual o cart\u00C3\u00A3o pertence cancelada. (optional)
     * @param int $id_status_destino_conta Indica qual o idStatusCartao que ser\u00C3\u00A1 atribu\u00C3\u00ADdo a conta, caso ela seja cancelada devido ao bloqueio de um cart\u00C3\u00A3o quando for utilizado um idStatusCartao no processo de Bloqueio que possua essa caracter\u00C3\u00ADstica. (optional)
     * @param int $flag_cobra_tarifa Quando ativa, indica que cart\u00C3\u00B5es que tiverem um idStatusCartao atribu\u00C3\u00ADdo com essa caracter\u00C3\u00ADstica, incluir\u00C3\u00A3o a cobran\u00C3\u00A7a de uma tarifa para a conta de acordo com os valores definidos nos par\u00C3\u00A2metros do emissor. (optional)
     * @param int $flag_reemite_cartao Quando ativa, indica que cart\u00C3\u00B5es que tiverem este status atribu\u00C3\u00ADdo ter\u00C3\u00A3o um novo cart\u00C3\u00A3o gerado para o portador, para a mesma conta, automaticamente. (optional)
     * @param int $flag_emite_provisorio Quando ativa, indica que poder\u00C3\u00A1 ser criado um novo cart\u00C3\u00A3o provis\u00C3\u00B3rio para o portador. (optional)
     * @param int $flag_cadastro_nova_senha Quando ativa, indica que a senha cadastrada ser\u00C3\u00A1 exclu\u00C3\u00ADda no momento do Bloqueio do cart\u00C3\u00A3o com um idStatusCartao que possua essa caracter\u00C3\u00ADstica, sendo ent\u00C3\u00A3o necess\u00C3\u00A1rio o cadastro de uma nova senha. (optional)
     * @param int $flag_origem_transferencia Quando ativa, indica que Cart\u00C3\u00B5es com este idStatusCartao podem realizar a transfer\u00C3\u00AAncia de cr\u00C3\u00A9ditos/d\u00C3\u00A9bitos para outros cart\u00C3\u00B5es. (optional)
     * @param int $flag_destino_transferencia Quando ativa, indica que Cart\u00C3\u00B5es com este idStatusCartao podem receber transfer\u00C3\u00AAncias de cr\u00C3\u00A9ditos/d\u00C3\u00A9bitos oriundos de outros cart\u00C3\u00B5es. (optional)
     * @param int $flag_excecao_bandeira Quando ativa, indica que os Cart\u00C3\u00B5es que tiverem este idStatusCartao atribu\u00C3\u00ADdo dever\u00C3\u00A3o ter a respectiva informa\u00C3\u00A7\u00C3\u00A3o de mudan\u00C3\u00A7a de status inclu\u00C3\u00ADda no arquivo de exce\u00C3\u00A7\u00C3\u00A3o da Bandeira, a fim de manter atualizado o cadastro do cart\u00C3\u00A3o nela para nortear o que fazer com as transa\u00C3\u00A7\u00C3\u00B5es quando o autorizador estiver indispon\u00C3\u00ADvel. (optional)
     * @param int $page P\u00C3\u00A1gina solicitada (Default = 0) (optional)
     * @param int $limit Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) (optional)
     * @return \br.com.conductor.pier.api.v1_1.model\ListaStatusCartoes
     * @throws \br.com.conductor.pier.api.v1_1.invoker\ApiException on non-2xx response
     */
    public function listarStatusCartoesUsingGET($id = null, $nome = null, $flag_altera_status = null, $flag_cancela_no_desbloqueio = null, $id_status_destino_desbloqueio = null, $flag_cancela_conta = null, $id_status_destino_conta = null, $flag_cobra_tarifa = null, $flag_reemite_cartao = null, $flag_emite_provisorio = null, $flag_cadastro_nova_senha = null, $flag_origem_transferencia = null, $flag_destino_transferencia = null, $flag_excecao_bandeira = null, $page = null, $limit = null)
    {
        list($response, $statusCode, $httpHeader) = $this->listarStatusCartoesUsingGETWithHttpInfo ($id, $nome, $flag_altera_status, $flag_cancela_no_desbloqueio, $id_status_destino_desbloqueio, $flag_cancela_conta, $id_status_destino_conta, $flag_cobra_tarifa, $flag_reemite_cartao, $flag_emite_provisorio, $flag_cadastro_nova_senha, $flag_origem_transferencia, $flag_destino_transferencia, $flag_excecao_bandeira, $page, $limit);
        return $response; 
    }


    /**
     * listarStatusCartoesUsingGETWithHttpInfo
     *
     * Lista as op\u00C3\u00A7\u00C3\u00B5es de Status do Cart\u00C3\u00A3o 
     *
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Status do Cart\u00C3\u00A3o (id)  (optional)
     * @param string $nome Nome atribu\u00C3\u00ADdo ao Status de Entrega do Cart\u00C3\u00A3o. (optional)
     * @param int $flag_altera_status Quando ativa, indica que ao ser atribu\u00C3\u00ADdo um idStatusCartao com essa caracter\u00C3\u00ADstica, o cart\u00C3\u00A3o ter\u00C3\u00A1 o seu idStatusCartao alterado para o que fora escolhido. Caso contr\u00C3\u00A1rio, o idStatusCartao s\u00C3\u00B3 ser\u00C3\u00A1 alterado ap\u00C3\u00B3s o desbloqueio de um novo cart\u00C3\u00A3o do mesmo Portador e Conta. (optional)
     * @param int $flag_cancela_no_desbloqueio Quando ativa, indica que o cart\u00C3\u00A3o ativo que o portador possuir na mesma conta do cart\u00C3\u00A3o a ser desbloqueado, e que o status dele possua essa caracter\u00C3\u00ADstica, dever\u00C3\u00A1 ser cancelado quando um novo cart\u00C3\u00A3o for desbloqueado. (optional)
     * @param int $id_status_destino_desbloqueio Indica qual o idStatusCartao que que ser\u00C3\u00A1 atribu\u00C3\u00ADdo aos cart\u00C3\u00B5es que forem cancelados devido ao desbloqueio de um novo cart\u00C3\u00A3o. (optional)
     * @param int $flag_cancela_conta Quando ativa, indica que cart\u00C3\u00B5es que tiverem um idStatusCartao atribu\u00C3\u00ADdo com essa caracter\u00C3\u00ADstica, e tal cart\u00C3\u00A3o seja de um titular (portador = 1), ter\u00C3\u00A3o a conta a qual o cart\u00C3\u00A3o pertence cancelada. (optional)
     * @param int $id_status_destino_conta Indica qual o idStatusCartao que ser\u00C3\u00A1 atribu\u00C3\u00ADdo a conta, caso ela seja cancelada devido ao bloqueio de um cart\u00C3\u00A3o quando for utilizado um idStatusCartao no processo de Bloqueio que possua essa caracter\u00C3\u00ADstica. (optional)
     * @param int $flag_cobra_tarifa Quando ativa, indica que cart\u00C3\u00B5es que tiverem um idStatusCartao atribu\u00C3\u00ADdo com essa caracter\u00C3\u00ADstica, incluir\u00C3\u00A3o a cobran\u00C3\u00A7a de uma tarifa para a conta de acordo com os valores definidos nos par\u00C3\u00A2metros do emissor. (optional)
     * @param int $flag_reemite_cartao Quando ativa, indica que cart\u00C3\u00B5es que tiverem este status atribu\u00C3\u00ADdo ter\u00C3\u00A3o um novo cart\u00C3\u00A3o gerado para o portador, para a mesma conta, automaticamente. (optional)
     * @param int $flag_emite_provisorio Quando ativa, indica que poder\u00C3\u00A1 ser criado um novo cart\u00C3\u00A3o provis\u00C3\u00B3rio para o portador. (optional)
     * @param int $flag_cadastro_nova_senha Quando ativa, indica que a senha cadastrada ser\u00C3\u00A1 exclu\u00C3\u00ADda no momento do Bloqueio do cart\u00C3\u00A3o com um idStatusCartao que possua essa caracter\u00C3\u00ADstica, sendo ent\u00C3\u00A3o necess\u00C3\u00A1rio o cadastro de uma nova senha. (optional)
     * @param int $flag_origem_transferencia Quando ativa, indica que Cart\u00C3\u00B5es com este idStatusCartao podem realizar a transfer\u00C3\u00AAncia de cr\u00C3\u00A9ditos/d\u00C3\u00A9bitos para outros cart\u00C3\u00B5es. (optional)
     * @param int $flag_destino_transferencia Quando ativa, indica que Cart\u00C3\u00B5es com este idStatusCartao podem receber transfer\u00C3\u00AAncias de cr\u00C3\u00A9ditos/d\u00C3\u00A9bitos oriundos de outros cart\u00C3\u00B5es. (optional)
     * @param int $flag_excecao_bandeira Quando ativa, indica que os Cart\u00C3\u00B5es que tiverem este idStatusCartao atribu\u00C3\u00ADdo dever\u00C3\u00A3o ter a respectiva informa\u00C3\u00A7\u00C3\u00A3o de mudan\u00C3\u00A7a de status inclu\u00C3\u00ADda no arquivo de exce\u00C3\u00A7\u00C3\u00A3o da Bandeira, a fim de manter atualizado o cadastro do cart\u00C3\u00A3o nela para nortear o que fazer com as transa\u00C3\u00A7\u00C3\u00B5es quando o autorizador estiver indispon\u00C3\u00ADvel. (optional)
     * @param int $page P\u00C3\u00A1gina solicitada (Default = 0) (optional)
     * @param int $limit Limite de elementos por solicita\u00C3\u00A7\u00C3\u00A3o (Default = 100, Max = 100) (optional)
     * @return Array of \br.com.conductor.pier.api.v1_1.model\ListaStatusCartoes, HTTP status code, HTTP response headers (array of strings)
     * @throws \br.com.conductor.pier.api.v1_1.invoker\ApiException on non-2xx response
     */
    public function listarStatusCartoesUsingGETWithHttpInfo($id = null, $nome = null, $flag_altera_status = null, $flag_cancela_no_desbloqueio = null, $id_status_destino_desbloqueio = null, $flag_cancela_conta = null, $id_status_destino_conta = null, $flag_cobra_tarifa = null, $flag_reemite_cartao = null, $flag_emite_provisorio = null, $flag_cadastro_nova_senha = null, $flag_origem_transferencia = null, $flag_destino_transferencia = null, $flag_excecao_bandeira = null, $page = null, $limit = null)
    {
        
  
        // parse inputs
        $resourcePath = "/api/status-cartoes";
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
        
        if ($id !== null) {
            $queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($id);
        }// query params
        
        if ($nome !== null) {
            $queryParams['nome'] = $this->apiClient->getSerializer()->toQueryValue($nome);
        }// query params
        
        if ($flag_altera_status !== null) {
            $queryParams['flagAlteraStatus'] = $this->apiClient->getSerializer()->toQueryValue($flag_altera_status);
        }// query params
        
        if ($flag_cancela_no_desbloqueio !== null) {
            $queryParams['flagCancelaNoDesbloqueio'] = $this->apiClient->getSerializer()->toQueryValue($flag_cancela_no_desbloqueio);
        }// query params
        
        if ($id_status_destino_desbloqueio !== null) {
            $queryParams['idStatusDestinoDesbloqueio'] = $this->apiClient->getSerializer()->toQueryValue($id_status_destino_desbloqueio);
        }// query params
        
        if ($flag_cancela_conta !== null) {
            $queryParams['flagCancelaConta'] = $this->apiClient->getSerializer()->toQueryValue($flag_cancela_conta);
        }// query params
        
        if ($id_status_destino_conta !== null) {
            $queryParams['idStatusDestinoConta'] = $this->apiClient->getSerializer()->toQueryValue($id_status_destino_conta);
        }// query params
        
        if ($flag_cobra_tarifa !== null) {
            $queryParams['flagCobraTarifa'] = $this->apiClient->getSerializer()->toQueryValue($flag_cobra_tarifa);
        }// query params
        
        if ($flag_reemite_cartao !== null) {
            $queryParams['flagReemiteCartao'] = $this->apiClient->getSerializer()->toQueryValue($flag_reemite_cartao);
        }// query params
        
        if ($flag_emite_provisorio !== null) {
            $queryParams['flagEmiteProvisorio'] = $this->apiClient->getSerializer()->toQueryValue($flag_emite_provisorio);
        }// query params
        
        if ($flag_cadastro_nova_senha !== null) {
            $queryParams['flagCadastroNovaSenha'] = $this->apiClient->getSerializer()->toQueryValue($flag_cadastro_nova_senha);
        }// query params
        
        if ($flag_origem_transferencia !== null) {
            $queryParams['flagOrigemTransferencia'] = $this->apiClient->getSerializer()->toQueryValue($flag_origem_transferencia);
        }// query params
        
        if ($flag_destino_transferencia !== null) {
            $queryParams['flagDestinoTransferencia'] = $this->apiClient->getSerializer()->toQueryValue($flag_destino_transferencia);
        }// query params
        
        if ($flag_excecao_bandeira !== null) {
            $queryParams['flagExcecaoBandeira'] = $this->apiClient->getSerializer()->toQueryValue($flag_excecao_bandeira);
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
                $headerParams, '\br.com.conductor.pier.api.v1_1.model\ListaStatusCartoes'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\br.com.conductor.pier.api.v1_1.invoker\ObjectSerializer::deserialize($response, '\br.com.conductor.pier.api.v1_1.model\ListaStatusCartoes', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \br.com.conductor.pier.api.v1_1.invoker\ObjectSerializer::deserialize($e->getResponseBody(), '\br.com.conductor.pier.api.v1_1.model\ListaStatusCartoes', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}
