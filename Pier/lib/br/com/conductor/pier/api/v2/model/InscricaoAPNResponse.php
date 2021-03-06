<?php
/**
 * InscricaoAPNResponse
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
 * InscricaoAPNResponse Class Doc Comment
 *
 * @category    Class
 * @description {{{inscricao_apn_resposta_descricao}}}
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InscricaoAPNResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'aplicacao_mobile' => '\br.com.conductor.pier.api.v2.model\AplicacaoMobileEmissorResponse',
        'ativo' => 'bool',
        'cartao' => '\br.com.conductor.pier.api.v2.model\CartaoEmissorResponse',
        'data_criacao' => 'string',
        'data_desativacao' => 'string',
        'device_token' => 'string',
        'id' => 'int'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'aplicacao_mobile' => 'aplicacaoMobile',
        'ativo' => 'ativo',
        'cartao' => 'cartao',
        'data_criacao' => 'dataCriacao',
        'data_desativacao' => 'dataDesativacao',
        'device_token' => 'deviceToken',
        'id' => 'id'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'aplicacao_mobile' => 'setAplicacaoMobile',
        'ativo' => 'setAtivo',
        'cartao' => 'setCartao',
        'data_criacao' => 'setDataCriacao',
        'data_desativacao' => 'setDataDesativacao',
        'device_token' => 'setDeviceToken',
        'id' => 'setId'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'aplicacao_mobile' => 'getAplicacaoMobile',
        'ativo' => 'getAtivo',
        'cartao' => 'getCartao',
        'data_criacao' => 'getDataCriacao',
        'data_desativacao' => 'getDataDesativacao',
        'device_token' => 'getDeviceToken',
        'id' => 'getId'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $aplicacao_mobile {{{inscricao_apn_resposta_aplicacao_mobile_descricao}}}
      * @var \br.com.conductor.pier.api.v2.model\AplicacaoMobileEmissorResponse
      */
    protected $aplicacao_mobile;
    
    /**
      * $ativo {{{inscricao_apn_resposta_ativo_descricao}}}
      * @var bool
      */
    protected $ativo;
    
    /**
      * $cartao {{{inscricao_apn_resposta_cartao_descricao}}}
      * @var \br.com.conductor.pier.api.v2.model\CartaoEmissorResponse
      */
    protected $cartao;
    
    /**
      * $data_criacao {{{inscricao_apn_resposta_data_criacao_descricao}}}
      * @var string
      */
    protected $data_criacao;
    
    /**
      * $data_desativacao {{{inscricao_apn_resposta_data_desativacao_descricao}}}
      * @var string
      */
    protected $data_desativacao;
    
    /**
      * $device_token {{{inscricao_apn_resposta_device_token_descricao}}}
      * @var string
      */
    protected $device_token;
    
    /**
      * $id {{{inscricao_apn_resposta_id_descricao}}}
      * @var int
      */
    protected $id;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->aplicacao_mobile = $data["aplicacao_mobile"];
            $this->ativo = $data["ativo"];
            $this->cartao = $data["cartao"];
            $this->data_criacao = $data["data_criacao"];
            $this->data_desativacao = $data["data_desativacao"];
            $this->device_token = $data["device_token"];
            $this->id = $data["id"];
        }
    }
    
    /**
     * Gets aplicacao_mobile
     * @return \br.com.conductor.pier.api.v2.model\AplicacaoMobileEmissorResponse
     */
    public function getAplicacaoMobile()
    {
        return $this->aplicacao_mobile;
    }
  
    /**
     * Sets aplicacao_mobile
     * @param \br.com.conductor.pier.api.v2.model\AplicacaoMobileEmissorResponse $aplicacao_mobile {{{inscricao_apn_resposta_aplicacao_mobile_descricao}}}
     * @return $this
     */
    public function setAplicacaoMobile($aplicacao_mobile)
    {
        
        $this->aplicacao_mobile = $aplicacao_mobile;
        return $this;
    }
    
    /**
     * Gets ativo
     * @return bool
     */
    public function getAtivo()
    {
        return $this->ativo;
    }
  
    /**
     * Sets ativo
     * @param bool $ativo {{{inscricao_apn_resposta_ativo_descricao}}}
     * @return $this
     */
    public function setAtivo($ativo)
    {
        
        $this->ativo = $ativo;
        return $this;
    }
    
    /**
     * Gets cartao
     * @return \br.com.conductor.pier.api.v2.model\CartaoEmissorResponse
     */
    public function getCartao()
    {
        return $this->cartao;
    }
  
    /**
     * Sets cartao
     * @param \br.com.conductor.pier.api.v2.model\CartaoEmissorResponse $cartao {{{inscricao_apn_resposta_cartao_descricao}}}
     * @return $this
     */
    public function setCartao($cartao)
    {
        
        $this->cartao = $cartao;
        return $this;
    }
    
    /**
     * Gets data_criacao
     * @return string
     */
    public function getDataCriacao()
    {
        return $this->data_criacao;
    }
  
    /**
     * Sets data_criacao
     * @param string $data_criacao {{{inscricao_apn_resposta_data_criacao_descricao}}}
     * @return $this
     */
    public function setDataCriacao($data_criacao)
    {
        
        $this->data_criacao = $data_criacao;
        return $this;
    }
    
    /**
     * Gets data_desativacao
     * @return string
     */
    public function getDataDesativacao()
    {
        return $this->data_desativacao;
    }
  
    /**
     * Sets data_desativacao
     * @param string $data_desativacao {{{inscricao_apn_resposta_data_desativacao_descricao}}}
     * @return $this
     */
    public function setDataDesativacao($data_desativacao)
    {
        
        $this->data_desativacao = $data_desativacao;
        return $this;
    }
    
    /**
     * Gets device_token
     * @return string
     */
    public function getDeviceToken()
    {
        return $this->device_token;
    }
  
    /**
     * Sets device_token
     * @param string $device_token {{{inscricao_apn_resposta_device_token_descricao}}}
     * @return $this
     */
    public function setDeviceToken($device_token)
    {
        
        $this->device_token = $device_token;
        return $this;
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
     * @param int $id {{{inscricao_apn_resposta_id_descricao}}}
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
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
