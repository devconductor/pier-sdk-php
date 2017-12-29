<?php
/**
 * NotificacaoSMSBody
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
 * NotificacaoSMSBody Class Doc Comment
 *
 * @category    Class
 * @description Objeto Notifica\u00C3\u00A7\u00C3\u00A3o
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class NotificacaoSMSBody implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'nsu' => 'int',
        'id_pessoa' => 'int',
        'id_conta' => 'int',
        'celular' => 'string',
        'conteudo' => 'string',
        'data_agendamento' => 'string',
        'tipo_evento' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'nsu' => 'nsu',
        'id_pessoa' => 'idPessoa',
        'id_conta' => 'idConta',
        'celular' => 'celular',
        'conteudo' => 'conteudo',
        'data_agendamento' => 'dataAgendamento',
        'tipo_evento' => 'tipoEvento'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'nsu' => 'setNsu',
        'id_pessoa' => 'setIdPessoa',
        'id_conta' => 'setIdConta',
        'celular' => 'setCelular',
        'conteudo' => 'setConteudo',
        'data_agendamento' => 'setDataAgendamento',
        'tipo_evento' => 'setTipoEvento'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'nsu' => 'getNsu',
        'id_pessoa' => 'getIdPessoa',
        'id_conta' => 'getIdConta',
        'celular' => 'getCelular',
        'conteudo' => 'getConteudo',
        'data_agendamento' => 'getDataAgendamento',
        'tipo_evento' => 'getTipoEvento'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $nsu N\u00C3\u00BAmero sequencial \u00C3\u00BAnico
      * @var int
      */
    protected $nsu;
    
    /**
      * $id_pessoa C\u00C3\u00B3digo identificado da pessoa
      * @var int
      */
    protected $id_pessoa;
    
    /**
      * $id_conta C\u00C3\u00B3digo identificador da conta
      * @var int
      */
    protected $id_conta;
    
    /**
      * $celular Apresenta o celular a ser eviado o SMS no formato 5588999999999 ou 5588999999999.
      * @var string
      */
    protected $celular;
    
    /**
      * $conteudo Apresenta o texto do SMS a ser enviado
      * @var string
      */
    protected $conteudo;
    
    /**
      * $data_agendamento Apresenta a data e hora em que ser\u00C3\u00A1 enviado a notifica\u00C3\u00A7\u00C3\u00A3o
      * @var string
      */
    protected $data_agendamento;
    
    /**
      * $tipo_evento Apresenta o tipoEvento a qual pertence a notifica\u00C3\u00A7\u00C3\u00A3o
      * @var string
      */
    protected $tipo_evento;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->nsu = $data["nsu"];
            $this->id_pessoa = $data["id_pessoa"];
            $this->id_conta = $data["id_conta"];
            $this->celular = $data["celular"];
            $this->conteudo = $data["conteudo"];
            $this->data_agendamento = $data["data_agendamento"];
            $this->tipo_evento = $data["tipo_evento"];
        }
    }
    
    /**
     * Gets nsu
     * @return int
     */
    public function getNsu()
    {
        return $this->nsu;
    }
  
    /**
     * Sets nsu
     * @param int $nsu N\u00C3\u00BAmero sequencial \u00C3\u00BAnico
     * @return $this
     */
    public function setNsu($nsu)
    {
        
        $this->nsu = $nsu;
        return $this;
    }
    
    /**
     * Gets id_pessoa
     * @return int
     */
    public function getIdPessoa()
    {
        return $this->id_pessoa;
    }
  
    /**
     * Sets id_pessoa
     * @param int $id_pessoa C\u00C3\u00B3digo identificado da pessoa
     * @return $this
     */
    public function setIdPessoa($id_pessoa)
    {
        
        $this->id_pessoa = $id_pessoa;
        return $this;
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
     * @param int $id_conta C\u00C3\u00B3digo identificador da conta
     * @return $this
     */
    public function setIdConta($id_conta)
    {
        
        $this->id_conta = $id_conta;
        return $this;
    }
    
    /**
     * Gets celular
     * @return string
     */
    public function getCelular()
    {
        return $this->celular;
    }
  
    /**
     * Sets celular
     * @param string $celular Apresenta o celular a ser eviado o SMS no formato 5588999999999 ou 5588999999999.
     * @return $this
     */
    public function setCelular($celular)
    {
        
        $this->celular = $celular;
        return $this;
    }
    
    /**
     * Gets conteudo
     * @return string
     */
    public function getConteudo()
    {
        return $this->conteudo;
    }
  
    /**
     * Sets conteudo
     * @param string $conteudo Apresenta o texto do SMS a ser enviado
     * @return $this
     */
    public function setConteudo($conteudo)
    {
        
        $this->conteudo = $conteudo;
        return $this;
    }
    
    /**
     * Gets data_agendamento
     * @return string
     */
    public function getDataAgendamento()
    {
        return $this->data_agendamento;
    }
  
    /**
     * Sets data_agendamento
     * @param string $data_agendamento Apresenta a data e hora em que ser\u00C3\u00A1 enviado a notifica\u00C3\u00A7\u00C3\u00A3o
     * @return $this
     */
    public function setDataAgendamento($data_agendamento)
    {
        
        $this->data_agendamento = $data_agendamento;
        return $this;
    }
    
    /**
     * Gets tipo_evento
     * @return string
     */
    public function getTipoEvento()
    {
        return $this->tipo_evento;
    }
  
    /**
     * Sets tipo_evento
     * @param string $tipo_evento Apresenta o tipoEvento a qual pertence a notifica\u00C3\u00A7\u00C3\u00A3o
     * @return $this
     */
    public function setTipoEvento($tipo_evento)
    {
        $allowed_values = array("RISCO_FRAUDE", "CODIGO_SEGURANCA", "OUTROS");
        if (!in_array($tipo_evento, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'tipo_evento', must be one of 'RISCO_FRAUDE', 'CODIGO_SEGURANCA', 'OUTROS'");
        }
        $this->tipo_evento = $tipo_evento;
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
