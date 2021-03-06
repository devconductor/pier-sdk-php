<?php
/**
 * HistoricoPagamentoResponse
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
 * HistoricoPagamentoResponse Class Doc Comment
 *
 * @category    Class
 * @description {{{historico_pagamento_response_description}}}
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class HistoricoPagamentoResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id_conta' => 'int',
        'id_pagamento' => 'int',
        'id_estabelecimento' => 'int',
        'id_banco' => 'int',
        'id_cartao' => 'int',
        'valor_pagamento' => 'Number',
        'data_hora_pagamento' => 'string',
        'data_hora_entrada_pagamento' => 'string',
        'status' => 'int'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id_conta' => 'idConta',
        'id_pagamento' => 'idPagamento',
        'id_estabelecimento' => 'idEstabelecimento',
        'id_banco' => 'idBanco',
        'id_cartao' => 'idCartao',
        'valor_pagamento' => 'valorPagamento',
        'data_hora_pagamento' => 'dataHoraPagamento',
        'data_hora_entrada_pagamento' => 'dataHoraEntradaPagamento',
        'status' => 'status'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id_conta' => 'setIdConta',
        'id_pagamento' => 'setIdPagamento',
        'id_estabelecimento' => 'setIdEstabelecimento',
        'id_banco' => 'setIdBanco',
        'id_cartao' => 'setIdCartao',
        'valor_pagamento' => 'setValorPagamento',
        'data_hora_pagamento' => 'setDataHoraPagamento',
        'data_hora_entrada_pagamento' => 'setDataHoraEntradaPagamento',
        'status' => 'setStatus'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id_conta' => 'getIdConta',
        'id_pagamento' => 'getIdPagamento',
        'id_estabelecimento' => 'getIdEstabelecimento',
        'id_banco' => 'getIdBanco',
        'id_cartao' => 'getIdCartao',
        'valor_pagamento' => 'getValorPagamento',
        'data_hora_pagamento' => 'getDataHoraPagamento',
        'data_hora_entrada_pagamento' => 'getDataHoraEntradaPagamento',
        'status' => 'getStatus'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id_conta {{{historico_pagamento_response_id_conta_value}}}
      * @var int
      */
    protected $id_conta;
    
    /**
      * $id_pagamento {{{historico_pagamento_response_id_pagamento_value}}}
      * @var int
      */
    protected $id_pagamento;
    
    /**
      * $id_estabelecimento {{{historico_pagamento_response_id_estabelecimento_value}}}
      * @var int
      */
    protected $id_estabelecimento;
    
    /**
      * $id_banco {{{historico_pagamento_response_id_banco_value}}}
      * @var int
      */
    protected $id_banco;
    
    /**
      * $id_cartao {{{historico_pagamento_response_id_cartao_value}}}
      * @var int
      */
    protected $id_cartao;
    
    /**
      * $valor_pagamento {{{historico_pagamento_response_valor_pagamento_value}}}
      * @var Number
      */
    protected $valor_pagamento;
    
    /**
      * $data_hora_pagamento {{{historico_pagamento_response_data_hora_pagamento_value}}}
      * @var string
      */
    protected $data_hora_pagamento;
    
    /**
      * $data_hora_entrada_pagamento {{{historico_pagamento_response_data_hora_entrada_pagamento_value}}}
      * @var string
      */
    protected $data_hora_entrada_pagamento;
    
    /**
      * $status {{{historico_pagamento_response_status_value}}}
      * @var int
      */
    protected $status;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id_conta = $data["id_conta"];
            $this->id_pagamento = $data["id_pagamento"];
            $this->id_estabelecimento = $data["id_estabelecimento"];
            $this->id_banco = $data["id_banco"];
            $this->id_cartao = $data["id_cartao"];
            $this->valor_pagamento = $data["valor_pagamento"];
            $this->data_hora_pagamento = $data["data_hora_pagamento"];
            $this->data_hora_entrada_pagamento = $data["data_hora_entrada_pagamento"];
            $this->status = $data["status"];
        }
    }
    
    /**
     * Gets id_conta
     * @return int
     */
    public function getIdConta()
    {
        return $this->id_conta;
    }
  
    /**
     * Sets id_conta
     * @param int $id_conta {{{historico_pagamento_response_id_conta_value}}}
     * @return $this
     */
    public function setIdConta($id_conta)
    {
        
        $this->id_conta = $id_conta;
        return $this;
    }
    
    /**
     * Gets id_pagamento
     * @return int
     */
    public function getIdPagamento()
    {
        return $this->id_pagamento;
    }
  
    /**
     * Sets id_pagamento
     * @param int $id_pagamento {{{historico_pagamento_response_id_pagamento_value}}}
     * @return $this
     */
    public function setIdPagamento($id_pagamento)
    {
        
        $this->id_pagamento = $id_pagamento;
        return $this;
    }
    
    /**
     * Gets id_estabelecimento
     * @return int
     */
    public function getIdEstabelecimento()
    {
        return $this->id_estabelecimento;
    }
  
    /**
     * Sets id_estabelecimento
     * @param int $id_estabelecimento {{{historico_pagamento_response_id_estabelecimento_value}}}
     * @return $this
     */
    public function setIdEstabelecimento($id_estabelecimento)
    {
        
        $this->id_estabelecimento = $id_estabelecimento;
        return $this;
    }
    
    /**
     * Gets id_banco
     * @return int
     */
    public function getIdBanco()
    {
        return $this->id_banco;
    }
  
    /**
     * Sets id_banco
     * @param int $id_banco {{{historico_pagamento_response_id_banco_value}}}
     * @return $this
     */
    public function setIdBanco($id_banco)
    {
        
        $this->id_banco = $id_banco;
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
     * @param int $id_cartao {{{historico_pagamento_response_id_cartao_value}}}
     * @return $this
     */
    public function setIdCartao($id_cartao)
    {
        
        $this->id_cartao = $id_cartao;
        return $this;
    }
    
    /**
     * Gets valor_pagamento
     * @return Number
     */
    public function getValorPagamento()
    {
        return $this->valor_pagamento;
    }
  
    /**
     * Sets valor_pagamento
     * @param Number $valor_pagamento {{{historico_pagamento_response_valor_pagamento_value}}}
     * @return $this
     */
    public function setValorPagamento($valor_pagamento)
    {
        
        $this->valor_pagamento = $valor_pagamento;
        return $this;
    }
    
    /**
     * Gets data_hora_pagamento
     * @return string
     */
    public function getDataHoraPagamento()
    {
        return $this->data_hora_pagamento;
    }
  
    /**
     * Sets data_hora_pagamento
     * @param string $data_hora_pagamento {{{historico_pagamento_response_data_hora_pagamento_value}}}
     * @return $this
     */
    public function setDataHoraPagamento($data_hora_pagamento)
    {
        
        $this->data_hora_pagamento = $data_hora_pagamento;
        return $this;
    }
    
    /**
     * Gets data_hora_entrada_pagamento
     * @return string
     */
    public function getDataHoraEntradaPagamento()
    {
        return $this->data_hora_entrada_pagamento;
    }
  
    /**
     * Sets data_hora_entrada_pagamento
     * @param string $data_hora_entrada_pagamento {{{historico_pagamento_response_data_hora_entrada_pagamento_value}}}
     * @return $this
     */
    public function setDataHoraEntradaPagamento($data_hora_entrada_pagamento)
    {
        
        $this->data_hora_entrada_pagamento = $data_hora_entrada_pagamento;
        return $this;
    }
    
    /**
     * Gets status
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }
  
    /**
     * Sets status
     * @param int $status {{{historico_pagamento_response_status_value}}}
     * @return $this
     */
    public function setStatus($status)
    {
        
        $this->status = $status;
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
