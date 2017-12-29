<?php
/**
 * CampanhaResponse
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
 * CampanhaResponse Class Doc Comment
 *
 * @category    Class
 * @description Representa\u00C3\u00A7\u00C3\u00A3o da resposta do recurso de campanha
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CampanhaResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'nome' => 'string',
        'id_tipo_campanha' => 'int',
        'planos_campanhas' => '\br.com.conductor.pier.api.v2.model\PlanoCampanhaResponse[]'
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
        'nome' => 'nome',
        'id_tipo_campanha' => 'idTipoCampanha',
        'planos_campanhas' => 'planosCampanhas'
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
        'nome' => 'setNome',
        'id_tipo_campanha' => 'setIdTipoCampanha',
        'planos_campanhas' => 'setPlanosCampanhas'
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
        'nome' => 'getNome',
        'id_tipo_campanha' => 'getIdTipoCampanha',
        'planos_campanhas' => 'getPlanosCampanhas'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id Identificador da campanha
      * @var int
      */
    protected $id;
    
    /**
      * $nome Nome da campanha
      * @var string
      */
    protected $nome;
    
    /**
      * $id_tipo_campanha C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do tipo de campanha a qual a a Campanha pertence
      * @var int
      */
    protected $id_tipo_campanha;
    
    /**
      * $planos_campanhas Lista de planos associados a Campanha
      * @var \br.com.conductor.pier.api.v2.model\PlanoCampanhaResponse[]
      */
    protected $planos_campanhas;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->nome = $data["nome"];
            $this->id_tipo_campanha = $data["id_tipo_campanha"];
            $this->planos_campanhas = $data["planos_campanhas"];
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
     * @param int $id Identificador da campanha
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets nome
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }
  
    /**
     * Sets nome
     * @param string $nome Nome da campanha
     * @return $this
     */
    public function setNome($nome)
    {
        
        $this->nome = $nome;
        return $this;
    }
    
    /**
     * Gets id_tipo_campanha
     * @return int
     */
    public function getIdTipoCampanha()
    {
        return $this->id_tipo_campanha;
    }
  
    /**
     * Sets id_tipo_campanha
     * @param int $id_tipo_campanha C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do tipo de campanha a qual a a Campanha pertence
     * @return $this
     */
    public function setIdTipoCampanha($id_tipo_campanha)
    {
        
        $this->id_tipo_campanha = $id_tipo_campanha;
        return $this;
    }
    
    /**
     * Gets planos_campanhas
     * @return \br.com.conductor.pier.api.v2.model\PlanoCampanhaResponse[]
     */
    public function getPlanosCampanhas()
    {
        return $this->planos_campanhas;
    }
  
    /**
     * Sets planos_campanhas
     * @param \br.com.conductor.pier.api.v2.model\PlanoCampanhaResponse[] $planos_campanhas Lista de planos associados a Campanha
     * @return $this
     */
    public function setPlanosCampanhas($planos_campanhas)
    {
        
        $this->planos_campanhas = $planos_campanhas;
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
