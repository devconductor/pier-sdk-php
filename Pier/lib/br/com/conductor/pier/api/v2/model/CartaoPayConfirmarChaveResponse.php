<?php
/**
 * CartaoPayConfirmarChaveResponse
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
 * CartaoPayConfirmarChaveResponse Class Doc Comment
 *
 * @category    Class
 * @description {{{cartao_pay_confirmar_chave_response_description}}}
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CartaoPayConfirmarChaveResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'numero_cartao' => 'string',
        'data_validade_cartao' => 'string',
        'nome_impresso' => 'string',
        'id_entidade' => 'int',
        'nome_entidade' => 'string',
        'status' => 'string',
        'data_validade_chave_criptograma' => 'string',
        'chave_criptograma' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'numero_cartao' => 'numeroCartao',
        'data_validade_cartao' => 'dataValidadeCartao',
        'nome_impresso' => 'nomeImpresso',
        'id_entidade' => 'idEntidade',
        'nome_entidade' => 'nomeEntidade',
        'status' => 'status',
        'data_validade_chave_criptograma' => 'dataValidadeChaveCriptograma',
        'chave_criptograma' => 'chaveCriptograma'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'numero_cartao' => 'setNumeroCartao',
        'data_validade_cartao' => 'setDataValidadeCartao',
        'nome_impresso' => 'setNomeImpresso',
        'id_entidade' => 'setIdEntidade',
        'nome_entidade' => 'setNomeEntidade',
        'status' => 'setStatus',
        'data_validade_chave_criptograma' => 'setDataValidadeChaveCriptograma',
        'chave_criptograma' => 'setChaveCriptograma'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'numero_cartao' => 'getNumeroCartao',
        'data_validade_cartao' => 'getDataValidadeCartao',
        'nome_impresso' => 'getNomeImpresso',
        'id_entidade' => 'getIdEntidade',
        'nome_entidade' => 'getNomeEntidade',
        'status' => 'getStatus',
        'data_validade_chave_criptograma' => 'getDataValidadeChaveCriptograma',
        'chave_criptograma' => 'getChaveCriptograma'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id {{{cartao_pay_base_response_id_value}}}
      * @var int
      */
    protected $id;
    
    /**
      * $numero_cartao {{{cartao_pay_base_response_numero_cartao_value}}}
      * @var string
      */
    protected $numero_cartao;
    
    /**
      * $data_validade_cartao {{{cartao_pay_base_response_data_validade_cartao_value}}}
      * @var string
      */
    protected $data_validade_cartao;
    
    /**
      * $nome_impresso {{{cartao_pay_base_response_nome_impresso_value}}}
      * @var string
      */
    protected $nome_impresso;
    
    /**
      * $id_entidade {{{cartao_pay_base_response_id_entidade_value}}}
      * @var int
      */
    protected $id_entidade;
    
    /**
      * $nome_entidade {{{cartao_pay_base_response_nome_entidade_value}}}
      * @var string
      */
    protected $nome_entidade;
    
    /**
      * $status {{{cartao_pay_base_response_status_value}}}
      * @var string
      */
    protected $status;
    
    /**
      * $data_validade_chave_criptograma {{{cartao_pay_response_data_validade_chave_criptograma_value}}}
      * @var string
      */
    protected $data_validade_chave_criptograma;
    
    /**
      * $chave_criptograma {{{cartao_pay_confirmar_chave_response_chave_criptograma_value}}}
      * @var string
      */
    protected $chave_criptograma;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->numero_cartao = $data["numero_cartao"];
            $this->data_validade_cartao = $data["data_validade_cartao"];
            $this->nome_impresso = $data["nome_impresso"];
            $this->id_entidade = $data["id_entidade"];
            $this->nome_entidade = $data["nome_entidade"];
            $this->status = $data["status"];
            $this->data_validade_chave_criptograma = $data["data_validade_chave_criptograma"];
            $this->chave_criptograma = $data["chave_criptograma"];
        }
    }
    
    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param int $id {{{cartao_pay_base_response_id_value}}}
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
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
     * @param string $numero_cartao {{{cartao_pay_base_response_numero_cartao_value}}}
     * @return $this
     */
    public function setNumeroCartao($numero_cartao)
    {
        
        $this->numero_cartao = $numero_cartao;
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
     * @param string $data_validade_cartao {{{cartao_pay_base_response_data_validade_cartao_value}}}
     * @return $this
     */
    public function setDataValidadeCartao($data_validade_cartao)
    {
        
        $this->data_validade_cartao = $data_validade_cartao;
        return $this;
    }
    
    /**
     * Gets nome_impresso
     * @return string
     */
    public function getNomeImpresso()
    {
        return $this->nome_impresso;
    }
  
    /**
     * Sets nome_impresso
     * @param string $nome_impresso {{{cartao_pay_base_response_nome_impresso_value}}}
     * @return $this
     */
    public function setNomeImpresso($nome_impresso)
    {
        
        $this->nome_impresso = $nome_impresso;
        return $this;
    }
    
    /**
     * Gets id_entidade
     * @return int
     */
    public function getIdEntidade()
    {
        return $this->id_entidade;
    }
  
    /**
     * Sets id_entidade
     * @param int $id_entidade {{{cartao_pay_base_response_id_entidade_value}}}
     * @return $this
     */
    public function setIdEntidade($id_entidade)
    {
        
        $this->id_entidade = $id_entidade;
        return $this;
    }
    
    /**
     * Gets nome_entidade
     * @return string
     */
    public function getNomeEntidade()
    {
        return $this->nome_entidade;
    }
  
    /**
     * Sets nome_entidade
     * @param string $nome_entidade {{{cartao_pay_base_response_nome_entidade_value}}}
     * @return $this
     */
    public function setNomeEntidade($nome_entidade)
    {
        
        $this->nome_entidade = $nome_entidade;
        return $this;
    }
    
    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
  
    /**
     * Sets status
     * @param string $status {{{cartao_pay_base_response_status_value}}}
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array("ATIVO", "INATIVO", "BLOQUEADO");
        if (!in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'ATIVO', 'INATIVO', 'BLOQUEADO'");
        }
        $this->status = $status;
        return $this;
    }
    
    /**
     * Gets data_validade_chave_criptograma
     * @return string
     */
    public function getDataValidadeChaveCriptograma()
    {
        return $this->data_validade_chave_criptograma;
    }
  
    /**
     * Sets data_validade_chave_criptograma
     * @param string $data_validade_chave_criptograma {{{cartao_pay_response_data_validade_chave_criptograma_value}}}
     * @return $this
     */
    public function setDataValidadeChaveCriptograma($data_validade_chave_criptograma)
    {
        
        $this->data_validade_chave_criptograma = $data_validade_chave_criptograma;
        return $this;
    }
    
    /**
     * Gets chave_criptograma
     * @return string
     */
    public function getChaveCriptograma()
    {
        return $this->chave_criptograma;
    }
  
    /**
     * Sets chave_criptograma
     * @param string $chave_criptograma {{{cartao_pay_confirmar_chave_response_chave_criptograma_value}}}
     * @return $this
     */
    public function setChaveCriptograma($chave_criptograma)
    {
        
        $this->chave_criptograma = $chave_criptograma;
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
