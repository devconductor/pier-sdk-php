<?php
/**
 * TransacaoPaySecureRequest
 *
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

namespace br.com.conductor.pier.api.v2.model;

use \ArrayAccess;
/**
 * TransacaoPaySecureRequest Class Doc Comment
 *
 * @category    Class
 * @description Representa\u00C3\u00A7\u00C3\u00A3o da requisi\u00C3\u00A7\u00C3\u00A3o do recurso de transa\u00C3\u00A7\u00C3\u00A3o segura conductorPay
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TransacaoPaySecureRequest implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'data_hora_transacao' => 'string',
        'numero_cartao' => 'string',
        'id_cartao' => 'int',
        'valor' => 'Number',
        'nsu_origem' => 'string',
        'nome_portador_cartao' => 'string',
        'origem' => 'string',
        'terminal_requisitante' => 'string',
        'codigo_processamento' => 'string',
        'data_validade_cartao' => 'string',
        'numero_estabelecimento' => 'string',
        'numero_parcelas' => 'int',
        'codigo_seguranca_cartao' => 'string',
        'sort' => 'string[]'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'data_hora_transacao' => 'dataHoraTransacao',
        'numero_cartao' => 'numeroCartao',
        'id_cartao' => 'idCartao',
        'valor' => 'valor',
        'nsu_origem' => 'nsuOrigem',
        'nome_portador_cartao' => 'nomePortadorCartao',
        'origem' => 'origem',
        'terminal_requisitante' => 'terminalRequisitante',
        'codigo_processamento' => 'codigoProcessamento',
        'data_validade_cartao' => 'dataValidadeCartao',
        'numero_estabelecimento' => 'numeroEstabelecimento',
        'numero_parcelas' => 'numeroParcelas',
        'codigo_seguranca_cartao' => 'codigoSegurancaCartao',
        'sort' => 'sort'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'data_hora_transacao' => 'setDataHoraTransacao',
        'numero_cartao' => 'setNumeroCartao',
        'id_cartao' => 'setIdCartao',
        'valor' => 'setValor',
        'nsu_origem' => 'setNsuOrigem',
        'nome_portador_cartao' => 'setNomePortadorCartao',
        'origem' => 'setOrigem',
        'terminal_requisitante' => 'setTerminalRequisitante',
        'codigo_processamento' => 'setCodigoProcessamento',
        'data_validade_cartao' => 'setDataValidadeCartao',
        'numero_estabelecimento' => 'setNumeroEstabelecimento',
        'numero_parcelas' => 'setNumeroParcelas',
        'codigo_seguranca_cartao' => 'setCodigoSegurancaCartao',
        'sort' => 'setSort'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'data_hora_transacao' => 'getDataHoraTransacao',
        'numero_cartao' => 'getNumeroCartao',
        'id_cartao' => 'getIdCartao',
        'valor' => 'getValor',
        'nsu_origem' => 'getNsuOrigem',
        'nome_portador_cartao' => 'getNomePortadorCartao',
        'origem' => 'getOrigem',
        'terminal_requisitante' => 'getTerminalRequisitante',
        'codigo_processamento' => 'getCodigoProcessamento',
        'data_validade_cartao' => 'getDataValidadeCartao',
        'numero_estabelecimento' => 'getNumeroEstabelecimento',
        'numero_parcelas' => 'getNumeroParcelas',
        'codigo_seguranca_cartao' => 'getCodigoSegurancaCartao',
        'sort' => 'getSort'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $data_hora_transacao Data e hora utilizado na gera\u00C3\u00A7\u00C3\u00A3o do criptograma em GMT - 0
      * @var string
      */
    protected $data_hora_transacao;
    
    /**
      * $numero_cartao Numero do cartao (criptografado)
      * @var string
      */
    protected $numero_cartao;
    
    /**
      * $id_cartao Id do cart\u00C3\u00A3o
      * @var int
      */
    protected $id_cartao;
    
    /**
      * $valor Valor da transa\u00C3\u00A7\u00C3\u00A3o em moeda local
      * @var Number
      */
    protected $valor;
    
    /**
      * $nsu_origem N\u00C3\u00BAmero Sequencial \u00C3\u009Anico que identifica a transa\u00C3\u00A7\u00C3\u00A3o no sistema que a originou (critografado).
      * @var string
      */
    protected $nsu_origem;
    
    /**
      * $nome_portador_cartao Nome do Portador do Cart\u00C3\u00A3o que originou a transa\u00C3\u00A7\u00C3\u00A3o (criptografado).
      * @var string
      */
    protected $nome_portador_cartao;
    
    /**
      * $origem Origem da transa\u00C3\u00A7\u00C3\u00A3o
      * @var string
      */
    protected $origem;
    
    /**
      * $terminal_requisitante Apresenta a identifica\u00C3\u00A7\u00C3\u00A3o do terminal requisitante
      * @var string
      */
    protected $terminal_requisitante;
    
    /**
      * $codigo_processamento C\u00C3\u00B3digo de Processamento que identifica o Tipo da Transa\u00C3\u00A7\u00C3\u00A3o.
      * @var string
      */
    protected $codigo_processamento;
    
    /**
      * $data_validade_cartao Data de Validade do Cart\u00C3\u00A3o. Ex: AAMM
      * @var string
      */
    protected $data_validade_cartao;
    
    /**
      * $numero_estabelecimento N\u00C3\u00BAmero do Estabelecimento (N\u00C3\u00BAmero+DV).
      * @var string
      */
    protected $numero_estabelecimento;
    
    /**
      * $numero_parcelas N\u00C3\u00BAmero de Parcelas.
      * @var int
      */
    protected $numero_parcelas;
    
    /**
      * $codigo_seguranca_cartao C\u00C3\u00B3digo de Seguran\u00C3\u00A7a do Cart\u00C3\u00A3o (criptografado).
      * @var string
      */
    protected $codigo_seguranca_cartao;
    
    /**
      * $sort Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
      * @var string[]
      */
    protected $sort;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->data_hora_transacao = $data["data_hora_transacao"];
            $this->numero_cartao = $data["numero_cartao"];
            $this->id_cartao = $data["id_cartao"];
            $this->valor = $data["valor"];
            $this->nsu_origem = $data["nsu_origem"];
            $this->nome_portador_cartao = $data["nome_portador_cartao"];
            $this->origem = $data["origem"];
            $this->terminal_requisitante = $data["terminal_requisitante"];
            $this->codigo_processamento = $data["codigo_processamento"];
            $this->data_validade_cartao = $data["data_validade_cartao"];
            $this->numero_estabelecimento = $data["numero_estabelecimento"];
            $this->numero_parcelas = $data["numero_parcelas"];
            $this->codigo_seguranca_cartao = $data["codigo_seguranca_cartao"];
            $this->sort = $data["sort"];
        }
    }
    
    /**
     * Gets data_hora_transacao
     * @return string
     */
    public function getDataHoraTransacao()
    {
        return $this->data_hora_transacao;
    }
  
    /**
     * Sets data_hora_transacao
     * @param string $data_hora_transacao Data e hora utilizado na gera\u00C3\u00A7\u00C3\u00A3o do criptograma em GMT - 0
     * @return $this
     */
    public function setDataHoraTransacao($data_hora_transacao)
    {
        
        $this->data_hora_transacao = $data_hora_transacao;
        return $this;
    }
    
    /**
     * Gets numero_cartao
     * @return string
     */
    public function getNumeroCartao()
    {
        return $this->numero_cartao;
    }
  
    /**
     * Sets numero_cartao
     * @param string $numero_cartao Numero do cartao (criptografado)
     * @return $this
     */
    public function setNumeroCartao($numero_cartao)
    {
        
        $this->numero_cartao = $numero_cartao;
        return $this;
    }
    
    /**
     * Gets id_cartao
     * @return int
     */
    public function getIdCartao()
    {
        return $this->id_cartao;
    }
  
    /**
     * Sets id_cartao
     * @param int $id_cartao Id do cart\u00C3\u00A3o
     * @return $this
     */
    public function setIdCartao($id_cartao)
    {
        
        $this->id_cartao = $id_cartao;
        return $this;
    }
    
    /**
     * Gets valor
     * @return Number
     */
    public function getValor()
    {
        return $this->valor;
    }
  
    /**
     * Sets valor
     * @param Number $valor Valor da transa\u00C3\u00A7\u00C3\u00A3o em moeda local
     * @return $this
     */
    public function setValor($valor)
    {
        
        $this->valor = $valor;
        return $this;
    }
    
    /**
     * Gets nsu_origem
     * @return string
     */
    public function getNsuOrigem()
    {
        return $this->nsu_origem;
    }
  
    /**
     * Sets nsu_origem
     * @param string $nsu_origem N\u00C3\u00BAmero Sequencial \u00C3\u009Anico que identifica a transa\u00C3\u00A7\u00C3\u00A3o no sistema que a originou (critografado).
     * @return $this
     */
    public function setNsuOrigem($nsu_origem)
    {
        
        $this->nsu_origem = $nsu_origem;
        return $this;
    }
    
    /**
     * Gets nome_portador_cartao
     * @return string
     */
    public function getNomePortadorCartao()
    {
        return $this->nome_portador_cartao;
    }
  
    /**
     * Sets nome_portador_cartao
     * @param string $nome_portador_cartao Nome do Portador do Cart\u00C3\u00A3o que originou a transa\u00C3\u00A7\u00C3\u00A3o (criptografado).
     * @return $this
     */
    public function setNomePortadorCartao($nome_portador_cartao)
    {
        
        $this->nome_portador_cartao = $nome_portador_cartao;
        return $this;
    }
    
    /**
     * Gets origem
     * @return string
     */
    public function getOrigem()
    {
        return $this->origem;
    }
  
    /**
     * Sets origem
     * @param string $origem Origem da transa\u00C3\u00A7\u00C3\u00A3o
     * @return $this
     */
    public function setOrigem($origem)
    {
        
        $this->origem = $origem;
        return $this;
    }
    
    /**
     * Gets terminal_requisitante
     * @return string
     */
    public function getTerminalRequisitante()
    {
        return $this->terminal_requisitante;
    }
  
    /**
     * Sets terminal_requisitante
     * @param string $terminal_requisitante Apresenta a identifica\u00C3\u00A7\u00C3\u00A3o do terminal requisitante
     * @return $this
     */
    public function setTerminalRequisitante($terminal_requisitante)
    {
        
        $this->terminal_requisitante = $terminal_requisitante;
        return $this;
    }
    
    /**
     * Gets codigo_processamento
     * @return string
     */
    public function getCodigoProcessamento()
    {
        return $this->codigo_processamento;
    }
  
    /**
     * Sets codigo_processamento
     * @param string $codigo_processamento C\u00C3\u00B3digo de Processamento que identifica o Tipo da Transa\u00C3\u00A7\u00C3\u00A3o.
     * @return $this
     */
    public function setCodigoProcessamento($codigo_processamento)
    {
        
        $this->codigo_processamento = $codigo_processamento;
        return $this;
    }
    
    /**
     * Gets data_validade_cartao
     * @return string
     */
    public function getDataValidadeCartao()
    {
        return $this->data_validade_cartao;
    }
  
    /**
     * Sets data_validade_cartao
     * @param string $data_validade_cartao Data de Validade do Cart\u00C3\u00A3o. Ex: AAMM
     * @return $this
     */
    public function setDataValidadeCartao($data_validade_cartao)
    {
        
        $this->data_validade_cartao = $data_validade_cartao;
        return $this;
    }
    
    /**
     * Gets numero_estabelecimento
     * @return string
     */
    public function getNumeroEstabelecimento()
    {
        return $this->numero_estabelecimento;
    }
  
    /**
     * Sets numero_estabelecimento
     * @param string $numero_estabelecimento N\u00C3\u00BAmero do Estabelecimento (N\u00C3\u00BAmero+DV).
     * @return $this
     */
    public function setNumeroEstabelecimento($numero_estabelecimento)
    {
        
        $this->numero_estabelecimento = $numero_estabelecimento;
        return $this;
    }
    
    /**
     * Gets numero_parcelas
     * @return int
     */
    public function getNumeroParcelas()
    {
        return $this->numero_parcelas;
    }
  
    /**
     * Sets numero_parcelas
     * @param int $numero_parcelas N\u00C3\u00BAmero de Parcelas.
     * @return $this
     */
    public function setNumeroParcelas($numero_parcelas)
    {
        
        $this->numero_parcelas = $numero_parcelas;
        return $this;
    }
    
    /**
     * Gets codigo_seguranca_cartao
     * @return string
     */
    public function getCodigoSegurancaCartao()
    {
        return $this->codigo_seguranca_cartao;
    }
  
    /**
     * Sets codigo_seguranca_cartao
     * @param string $codigo_seguranca_cartao C\u00C3\u00B3digo de Seguran\u00C3\u00A7a do Cart\u00C3\u00A3o (criptografado).
     * @return $this
     */
    public function setCodigoSegurancaCartao($codigo_seguranca_cartao)
    {
        
        $this->codigo_seguranca_cartao = $codigo_seguranca_cartao;
        return $this;
    }
    
    /**
     * Gets sort
     * @return string[]
     */
    public function getSort()
    {
        return $this->sort;
    }
  
    /**
     * Sets sort
     * @param string[] $sort Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros.
     * @return $this
     */
    public function setSort($sort)
    {
        
        $this->sort = $sort;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}