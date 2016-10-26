<?php
/**
 * Endereco
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
 * Endereco Class Doc Comment
 *
 * @category    Class
 * @description Objeto Endere\u00C3\u00A7o
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Endereco implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'bairro' => 'string',
        'cep' => 'string',
        'cidade' => 'string',
        'complemento' => 'string',
        'data_inclusao' => '\DateTime',
        'data_ultima_atualizacao' => '\DateTime',
        'id' => 'int',
        'id_pessoa' => 'int',
        'id_tipo_endereco' => 'int',
        'logradouro' => 'string',
        'numero' => 'string',
        'pais' => 'string',
        'ponto_referencia' => 'string',
        'uf' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'bairro' => 'bairro',
        'cep' => 'cep',
        'cidade' => 'cidade',
        'complemento' => 'complemento',
        'data_inclusao' => 'dataInclusao',
        'data_ultima_atualizacao' => 'dataUltimaAtualizacao',
        'id' => 'id',
        'id_pessoa' => 'idPessoa',
        'id_tipo_endereco' => 'idTipoEndereco',
        'logradouro' => 'logradouro',
        'numero' => 'numero',
        'pais' => 'pais',
        'ponto_referencia' => 'pontoReferencia',
        'uf' => 'uf'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'bairro' => 'setBairro',
        'cep' => 'setCep',
        'cidade' => 'setCidade',
        'complemento' => 'setComplemento',
        'data_inclusao' => 'setDataInclusao',
        'data_ultima_atualizacao' => 'setDataUltimaAtualizacao',
        'id' => 'setId',
        'id_pessoa' => 'setIdPessoa',
        'id_tipo_endereco' => 'setIdTipoEndereco',
        'logradouro' => 'setLogradouro',
        'numero' => 'setNumero',
        'pais' => 'setPais',
        'ponto_referencia' => 'setPontoReferencia',
        'uf' => 'setUf'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'bairro' => 'getBairro',
        'cep' => 'getCep',
        'cidade' => 'getCidade',
        'complemento' => 'getComplemento',
        'data_inclusao' => 'getDataInclusao',
        'data_ultima_atualizacao' => 'getDataUltimaAtualizacao',
        'id' => 'getId',
        'id_pessoa' => 'getIdPessoa',
        'id_tipo_endereco' => 'getIdTipoEndereco',
        'logradouro' => 'getLogradouro',
        'numero' => 'getNumero',
        'pais' => 'getPais',
        'ponto_referencia' => 'getPontoReferencia',
        'uf' => 'getUf'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $bairro Apresenta nome do bairro
      * @var string
      */
    protected $bairro;
    
    /**
      * $cep Apresenta o C\u00C3\u00B3digo de Endere\u00C3\u00A7amento Postal (CEP)
      * @var string
      */
    protected $cep;
    
    /**
      * $cidade Apresenta nome da cidade
      * @var string
      */
    protected $cidade;
    
    /**
      * $complemento Apresenta descri\u00C3\u00A7oes complementares referente ao endere\u00C3\u00A7o
      * @var string
      */
    protected $complemento;
    
    /**
      * $data_inclusao Apresenta a data em que fora cadastrado o Endere\u00C3\u00A7o
      * @var \DateTime
      */
    protected $data_inclusao;
    
    /**
      * $data_ultima_atualizacao Data em que fora realizada a \u00C3\u00BAltima mudan\u00C3\u00A7a neste registro de endere\u00C3\u00A7o. Quando n\u00C3\u00A3o tiver ocorrido mudan\u00C3\u00A7a, conter\u00C3\u00A1 a mesma informa\u00C3\u00A7\u00C3\u00A3o que o campo dataInclusao
      * @var \DateTime
      */
    protected $data_ultima_atualizacao;
    
    /**
      * $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Endere\u00C3\u00A7o (id).
      * @var int
      */
    protected $id;
    
    /**
      * $id_pessoa C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Pessoa a qual o endere\u00C3\u00A7o pertence (id)
      * @var int
      */
    protected $id_pessoa;
    
    /**
      * $id_tipo_endereco C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Tipo Endere\u00C3\u00A7o (id)
      * @var int
      */
    protected $id_tipo_endereco;
    
    /**
      * $logradouro Apresenta o nome do Logradouro
      * @var string
      */
    protected $logradouro;
    
    /**
      * $numero Apresenta o n\u00C3\u00BAmero do endere\u00C3\u00A7o
      * @var string
      */
    protected $numero;
    
    /**
      * $pais Apresenta nome do Pais
      * @var string
      */
    protected $pais;
    
    /**
      * $ponto_referencia Apresenta a descri\u00C3\u00A7\u00C3\u00A3o de ponto de refer\u00C3\u00AAncia do endere\u00C3\u00A7o
      * @var string
      */
    protected $ponto_referencia;
    
    /**
      * $uf Apresenta sigla da Unidade Federativa
      * @var string
      */
    protected $uf;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->bairro = $data["bairro"];
            $this->cep = $data["cep"];
            $this->cidade = $data["cidade"];
            $this->complemento = $data["complemento"];
            $this->data_inclusao = $data["data_inclusao"];
            $this->data_ultima_atualizacao = $data["data_ultima_atualizacao"];
            $this->id = $data["id"];
            $this->id_pessoa = $data["id_pessoa"];
            $this->id_tipo_endereco = $data["id_tipo_endereco"];
            $this->logradouro = $data["logradouro"];
            $this->numero = $data["numero"];
            $this->pais = $data["pais"];
            $this->ponto_referencia = $data["ponto_referencia"];
            $this->uf = $data["uf"];
        }
    }
    
    /**
     * Gets bairro
     * @return string
     */
    public function getBairro()
    {
        return $this->bairro;
    }
  
    /**
     * Sets bairro
     * @param string $bairro Apresenta nome do bairro
     * @return $this
     */
    public function setBairro($bairro)
    {
        
        $this->bairro = $bairro;
        return $this;
    }
    
    /**
     * Gets cep
     * @return string
     */
    public function getCep()
    {
        return $this->cep;
    }
  
    /**
     * Sets cep
     * @param string $cep Apresenta o C\u00C3\u00B3digo de Endere\u00C3\u00A7amento Postal (CEP)
     * @return $this
     */
    public function setCep($cep)
    {
        
        $this->cep = $cep;
        return $this;
    }
    
    /**
     * Gets cidade
     * @return string
     */
    public function getCidade()
    {
        return $this->cidade;
    }
  
    /**
     * Sets cidade
     * @param string $cidade Apresenta nome da cidade
     * @return $this
     */
    public function setCidade($cidade)
    {
        
        $this->cidade = $cidade;
        return $this;
    }
    
    /**
     * Gets complemento
     * @return string
     */
    public function getComplemento()
    {
        return $this->complemento;
    }
  
    /**
     * Sets complemento
     * @param string $complemento Apresenta descri\u00C3\u00A7oes complementares referente ao endere\u00C3\u00A7o
     * @return $this
     */
    public function setComplemento($complemento)
    {
        
        $this->complemento = $complemento;
        return $this;
    }
    
    /**
     * Gets data_inclusao
     * @return \DateTime
     */
    public function getDataInclusao()
    {
        return $this->data_inclusao;
    }
  
    /**
     * Sets data_inclusao
     * @param \DateTime $data_inclusao Apresenta a data em que fora cadastrado o Endere\u00C3\u00A7o
     * @return $this
     */
    public function setDataInclusao($data_inclusao)
    {
        
        $this->data_inclusao = $data_inclusao;
        return $this;
    }
    
    /**
     * Gets data_ultima_atualizacao
     * @return \DateTime
     */
    public function getDataUltimaAtualizacao()
    {
        return $this->data_ultima_atualizacao;
    }
  
    /**
     * Sets data_ultima_atualizacao
     * @param \DateTime $data_ultima_atualizacao Data em que fora realizada a \u00C3\u00BAltima mudan\u00C3\u00A7a neste registro de endere\u00C3\u00A7o. Quando n\u00C3\u00A3o tiver ocorrido mudan\u00C3\u00A7a, conter\u00C3\u00A1 a mesma informa\u00C3\u00A7\u00C3\u00A3o que o campo dataInclusao
     * @return $this
     */
    public function setDataUltimaAtualizacao($data_ultima_atualizacao)
    {
        
        $this->data_ultima_atualizacao = $data_ultima_atualizacao;
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
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Endere\u00C3\u00A7o (id).
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
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
     * @param int $id_pessoa C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Pessoa a qual o endere\u00C3\u00A7o pertence (id)
     * @return $this
     */
    public function setIdPessoa($id_pessoa)
    {
        
        $this->id_pessoa = $id_pessoa;
        return $this;
    }
    
    /**
     * Gets id_tipo_endereco
     * @return int
     */
    public function getIdTipoEndereco()
    {
        return $this->id_tipo_endereco;
    }
  
    /**
     * Sets id_tipo_endereco
     * @param int $id_tipo_endereco C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Tipo Endere\u00C3\u00A7o (id)
     * @return $this
     */
    public function setIdTipoEndereco($id_tipo_endereco)
    {
        
        $this->id_tipo_endereco = $id_tipo_endereco;
        return $this;
    }
    
    /**
     * Gets logradouro
     * @return string
     */
    public function getLogradouro()
    {
        return $this->logradouro;
    }
  
    /**
     * Sets logradouro
     * @param string $logradouro Apresenta o nome do Logradouro
     * @return $this
     */
    public function setLogradouro($logradouro)
    {
        
        $this->logradouro = $logradouro;
        return $this;
    }
    
    /**
     * Gets numero
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }
  
    /**
     * Sets numero
     * @param string $numero Apresenta o n\u00C3\u00BAmero do endere\u00C3\u00A7o
     * @return $this
     */
    public function setNumero($numero)
    {
        
        $this->numero = $numero;
        return $this;
    }
    
    /**
     * Gets pais
     * @return string
     */
    public function getPais()
    {
        return $this->pais;
    }
  
    /**
     * Sets pais
     * @param string $pais Apresenta nome do Pais
     * @return $this
     */
    public function setPais($pais)
    {
        
        $this->pais = $pais;
        return $this;
    }
    
    /**
     * Gets ponto_referencia
     * @return string
     */
    public function getPontoReferencia()
    {
        return $this->ponto_referencia;
    }
  
    /**
     * Sets ponto_referencia
     * @param string $ponto_referencia Apresenta a descri\u00C3\u00A7\u00C3\u00A3o de ponto de refer\u00C3\u00AAncia do endere\u00C3\u00A7o
     * @return $this
     */
    public function setPontoReferencia($ponto_referencia)
    {
        
        $this->ponto_referencia = $ponto_referencia;
        return $this;
    }
    
    /**
     * Gets uf
     * @return string
     */
    public function getUf()
    {
        return $this->uf;
    }
  
    /**
     * Sets uf
     * @param string $uf Apresenta sigla da Unidade Federativa
     * @return $this
     */
    public function setUf($uf)
    {
        
        $this->uf = $uf;
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
