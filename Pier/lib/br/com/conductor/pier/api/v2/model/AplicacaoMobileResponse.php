<?php
/**
 * AplicacaoMobileResponse
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
 * AplicacaoMobileResponse Class Doc Comment
 *
 * @category    Class
 * @description {{{aplicacao_mobile_response_description}}}
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AplicacaoMobileResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'id_plataforma_mobile' => 'int',
        'token' => 'string',
        'cor' => 'string',
        'som' => 'string',
        'icone' => 'string',
        'certificado_base64' => 'string',
        'senha' => 'string'
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
        'id_plataforma_mobile' => 'idPlataformaMobile',
        'token' => 'token',
        'cor' => 'cor',
        'som' => 'som',
        'icone' => 'icone',
        'certificado_base64' => 'certificadoBase64',
        'senha' => 'senha'
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
        'id_plataforma_mobile' => 'setIdPlataformaMobile',
        'token' => 'setToken',
        'cor' => 'setCor',
        'som' => 'setSom',
        'icone' => 'setIcone',
        'certificado_base64' => 'setCertificadoBase64',
        'senha' => 'setSenha'
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
        'id_plataforma_mobile' => 'getIdPlataformaMobile',
        'token' => 'getToken',
        'cor' => 'getCor',
        'som' => 'getSom',
        'icone' => 'getIcone',
        'certificado_base64' => 'getCertificadoBase64',
        'senha' => 'getSenha'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id {{{aplicacao_mobile_response_id_value}}}
      * @var int
      */
    protected $id;
    
    /**
      * $id_plataforma_mobile {{{aplicacao_mobile_response_id_plataforma_mobile_value}}}
      * @var int
      */
    protected $id_plataforma_mobile;
    
    /**
      * $token {{{aplicacao_mobile_response_token_value}}}
      * @var string
      */
    protected $token;
    
    /**
      * $cor {{{aplicacao_mobile_response_cor_value}}}
      * @var string
      */
    protected $cor;
    
    /**
      * $som {{{aplicacao_mobile_response_som_value}}}
      * @var string
      */
    protected $som;
    
    /**
      * $icone {{{aplicacao_mobile_response_icone_value}}}
      * @var string
      */
    protected $icone;
    
    /**
      * $certificado_base64 {{{aplicacao_mobile_response_certificado_base64_value}}}
      * @var string
      */
    protected $certificado_base64;
    
    /**
      * $senha {{{aplicacao_mobile_response_senha_value}}}
      * @var string
      */
    protected $senha;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->id_plataforma_mobile = $data["id_plataforma_mobile"];
            $this->token = $data["token"];
            $this->cor = $data["cor"];
            $this->som = $data["som"];
            $this->icone = $data["icone"];
            $this->certificado_base64 = $data["certificado_base64"];
            $this->senha = $data["senha"];
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
     * @param int $id {{{aplicacao_mobile_response_id_value}}}
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets id_plataforma_mobile
     * @return int
     */
    public function getIdPlataformaMobile()
    {
        return $this->id_plataforma_mobile;
    }
  
    /**
     * Sets id_plataforma_mobile
     * @param int $id_plataforma_mobile {{{aplicacao_mobile_response_id_plataforma_mobile_value}}}
     * @return $this
     */
    public function setIdPlataformaMobile($id_plataforma_mobile)
    {
        
        $this->id_plataforma_mobile = $id_plataforma_mobile;
        return $this;
    }
    
    /**
     * Gets token
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }
  
    /**
     * Sets token
     * @param string $token {{{aplicacao_mobile_response_token_value}}}
     * @return $this
     */
    public function setToken($token)
    {
        
        $this->token = $token;
        return $this;
    }
    
    /**
     * Gets cor
     * @return string
     */
    public function getCor()
    {
        return $this->cor;
    }
  
    /**
     * Sets cor
     * @param string $cor {{{aplicacao_mobile_response_cor_value}}}
     * @return $this
     */
    public function setCor($cor)
    {
        
        $this->cor = $cor;
        return $this;
    }
    
    /**
     * Gets som
     * @return string
     */
    public function getSom()
    {
        return $this->som;
    }
  
    /**
     * Sets som
     * @param string $som {{{aplicacao_mobile_response_som_value}}}
     * @return $this
     */
    public function setSom($som)
    {
        
        $this->som = $som;
        return $this;
    }
    
    /**
     * Gets icone
     * @return string
     */
    public function getIcone()
    {
        return $this->icone;
    }
  
    /**
     * Sets icone
     * @param string $icone {{{aplicacao_mobile_response_icone_value}}}
     * @return $this
     */
    public function setIcone($icone)
    {
        
        $this->icone = $icone;
        return $this;
    }
    
    /**
     * Gets certificado_base64
     * @return string
     */
    public function getCertificadoBase64()
    {
        return $this->certificado_base64;
    }
  
    /**
     * Sets certificado_base64
     * @param string $certificado_base64 {{{aplicacao_mobile_response_certificado_base64_value}}}
     * @return $this
     */
    public function setCertificadoBase64($certificado_base64)
    {
        
        $this->certificado_base64 = $certificado_base64;
        return $this;
    }
    
    /**
     * Gets senha
     * @return string
     */
    public function getSenha()
    {
        return $this->senha;
    }
  
    /**
     * Sets senha
     * @param string $senha {{{aplicacao_mobile_response_senha_value}}}
     * @return $this
     */
    public function setSenha($senha)
    {
        
        $this->senha = $senha;
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
