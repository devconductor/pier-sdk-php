<?php
/**
 * EstGioCartO
 *
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

namespace br.com.conductor.pier.api.v1_1.model;

use \ArrayAccess;
/**
 * EstGioCartO Class Doc Comment
 *
 * @category    Class
 * @description Representa\u00C3\u00A7\u00C3\u00A3o do recurso Est\u00C3\u00A1gio Cart\u00C3\u00A3o
 * @package     br.com.conductor.pier.api.v1_1.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EstGioCartO implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'cancela_conta' => 'string',
        'id' => 'int',
        'id_status_destino_desbloqueio' => 'int',
        'nome' => 'string',
        'permite_desbloqueio' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'cancela_conta' => 'cancelaConta',
        'id' => 'id',
        'id_status_destino_desbloqueio' => 'idStatusDestinoDesbloqueio',
        'nome' => 'nome',
        'permite_desbloqueio' => 'permiteDesbloqueio'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'cancela_conta' => 'setCancelaConta',
        'id' => 'setId',
        'id_status_destino_desbloqueio' => 'setIdStatusDestinoDesbloqueio',
        'nome' => 'setNome',
        'permite_desbloqueio' => 'setPermiteDesbloqueio'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'cancela_conta' => 'getCancelaConta',
        'id' => 'getId',
        'id_status_destino_desbloqueio' => 'getIdStatusDestinoDesbloqueio',
        'nome' => 'getNome',
        'permite_desbloqueio' => 'getPermiteDesbloqueio'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $cancela_conta Indica que Cart\u00C3\u00B5es com este idStatusCartao devem ter a sua conta Cancelada, sendo: (0 = N\u00C3\u00A3o Cancelar) e  (1 = Cancelar Conta).
      * @var string
      */
    protected $cancela_conta;
    
    /**
      * $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Status do Cart\u00C3\u00A3o (id).
      * @var int
      */
    protected $id;
    
    /**
      * $id_status_destino_desbloqueio Indica qual o idStatusCartao que deve ser atribu\u00C3\u00ADdo a um idCartao quando ele for desbloqueado.
      * @var int
      */
    protected $id_status_destino_desbloqueio;
    
    /**
      * $nome Nome atribu\u00C3\u00ADdo ao Status de Entrega do Cart\u00C3\u00A3o.
      * @var string
      */
    protected $nome;
    
    /**
      * $permite_desbloqueio Indica que Cart\u00C3\u00B5es com este idStatusCartao podem ser Desbloqueados, sendo: (0 = N\u00C3\u00A3o Permitido) e  (1 = Permitido).
      * @var string
      */
    protected $permite_desbloqueio;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->cancela_conta = $data["cancela_conta"];
            $this->id = $data["id"];
            $this->id_status_destino_desbloqueio = $data["id_status_destino_desbloqueio"];
            $this->nome = $data["nome"];
            $this->permite_desbloqueio = $data["permite_desbloqueio"];
        }
    }
    
    /**
     * Gets cancela_conta
     * @return string
     */
    public function getCancelaConta()
    {
        return $this->cancela_conta;
    }
  
    /**
     * Sets cancela_conta
     * @param string $cancela_conta Indica que Cart\u00C3\u00B5es com este idStatusCartao devem ter a sua conta Cancelada, sendo: (0 = N\u00C3\u00A3o Cancelar) e  (1 = Cancelar Conta).
     * @return $this
     */
    public function setCancelaConta($cancela_conta)
    {
        
        $this->cancela_conta = $cancela_conta;
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
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Status do Cart\u00C3\u00A3o (id).
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets id_status_destino_desbloqueio
     * @return int
     */
    public function getIdStatusDestinoDesbloqueio()
    {
        return $this->id_status_destino_desbloqueio;
    }
  
    /**
     * Sets id_status_destino_desbloqueio
     * @param int $id_status_destino_desbloqueio Indica qual o idStatusCartao que deve ser atribu\u00C3\u00ADdo a um idCartao quando ele for desbloqueado.
     * @return $this
     */
    public function setIdStatusDestinoDesbloqueio($id_status_destino_desbloqueio)
    {
        
        $this->id_status_destino_desbloqueio = $id_status_destino_desbloqueio;
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
     * @param string $nome Nome atribu\u00C3\u00ADdo ao Status de Entrega do Cart\u00C3\u00A3o.
     * @return $this
     */
    public function setNome($nome)
    {
        
        $this->nome = $nome;
        return $this;
    }
    
    /**
     * Gets permite_desbloqueio
     * @return string
     */
    public function getPermiteDesbloqueio()
    {
        return $this->permite_desbloqueio;
    }
  
    /**
     * Sets permite_desbloqueio
     * @param string $permite_desbloqueio Indica que Cart\u00C3\u00B5es com este idStatusCartao podem ser Desbloqueados, sendo: (0 = N\u00C3\u00A3o Permitido) e  (1 = Permitido).
     * @return $this
     */
    public function setPermiteDesbloqueio($permite_desbloqueio)
    {
        
        $this->permite_desbloqueio = $permite_desbloqueio;
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
            return json_encode(\br.com.conductor.pier.api.v1_1.invoker\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\br.com.conductor.pier.api.v1_1.invoker\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
