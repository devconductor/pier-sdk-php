<?php
/**
 * UsuarioContasResponse
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
 * UsuarioContasResponse Class Doc Comment
 *
 * @category    Class
 * @description {{{usuario_conta_resposta_descricao}}}
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UsuarioContasResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'id_conta' => 'int',
        'id_pessoa' => 'int',
        'id_usuario' => 'int',
        'nivel_acesso' => 'int'
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
        'id_conta' => 'idConta',
        'id_pessoa' => 'idPessoa',
        'id_usuario' => 'idUsuario',
        'nivel_acesso' => 'nivelAcesso'
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
        'id_conta' => 'setIdConta',
        'id_pessoa' => 'setIdPessoa',
        'id_usuario' => 'setIdUsuario',
        'nivel_acesso' => 'setNivelAcesso'
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
        'id_conta' => 'getIdConta',
        'id_pessoa' => 'getIdPessoa',
        'id_usuario' => 'getIdUsuario',
        'nivel_acesso' => 'getNivelAcesso'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id {{{usuario_conta_resposta_id_descricao}}}
      * @var int
      */
    protected $id;
    
    /**
      * $id_conta {{{usuario_conta_resposta_id_conta_descricao}}}
      * @var int
      */
    protected $id_conta;
    
    /**
      * $id_pessoa {{{usuario_conta_resposta_id_pessoa_descricao}}}
      * @var int
      */
    protected $id_pessoa;
    
    /**
      * $id_usuario {{{usuario_conta_resposta_id_usuario_descricao}}}
      * @var int
      */
    protected $id_usuario;
    
    /**
      * $nivel_acesso {{{usuario_conta_resposta_nivel_acesso_descricao}}}
      * @var int
      */
    protected $nivel_acesso;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->id_conta = $data["id_conta"];
            $this->id_pessoa = $data["id_pessoa"];
            $this->id_usuario = $data["id_usuario"];
            $this->nivel_acesso = $data["nivel_acesso"];
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
     * @param int $id {{{usuario_conta_resposta_id_descricao}}}
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
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
     * @param int $id_conta {{{usuario_conta_resposta_id_conta_descricao}}}
     * @return $this
     */
    public function setIdConta($id_conta)
    {
        
        $this->id_conta = $id_conta;
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
     * @param int $id_pessoa {{{usuario_conta_resposta_id_pessoa_descricao}}}
     * @return $this
     */
    public function setIdPessoa($id_pessoa)
    {
        
        $this->id_pessoa = $id_pessoa;
        return $this;
    }
    
    /**
     * Gets id_usuario
     * @return int
     */
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }
  
    /**
     * Sets id_usuario
     * @param int $id_usuario {{{usuario_conta_resposta_id_usuario_descricao}}}
     * @return $this
     */
    public function setIdUsuario($id_usuario)
    {
        
        $this->id_usuario = $id_usuario;
        return $this;
    }
    
    /**
     * Gets nivel_acesso
     * @return int
     */
    public function getNivelAcesso()
    {
        return $this->nivel_acesso;
    }
  
    /**
     * Sets nivel_acesso
     * @param int $nivel_acesso {{{usuario_conta_resposta_nivel_acesso_descricao}}}
     * @return $this
     */
    public function setNivelAcesso($nivel_acesso)
    {
        
        $this->nivel_acesso = $nivel_acesso;
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
