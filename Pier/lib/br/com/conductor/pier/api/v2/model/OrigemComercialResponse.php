<?php
/**
 * OrigemComercialResponse
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
 * OrigemComercialResponse Class Doc Comment
 *
 * @category    Class
 * @description Origem Comercial
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrigemComercialResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'nome' => 'string',
        'descricao' => 'string',
        'produtos_origem' => '\br.com.conductor.pier.api.v2.model\ProdutoOrigemResponse[]',
        'id_estabelecimento' => 'int',
        'id_tipo_origem_comercial' => 'int',
        'nome_tipo_origem_comercial' => 'string',
        'id_grupo_origem_comercial' => 'int',
        'nome_grupo_origem_comercial' => 'string',
        'status' => 'bool'
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
        'descricao' => 'descricao',
        'produtos_origem' => 'produtosOrigem',
        'id_estabelecimento' => 'idEstabelecimento',
        'id_tipo_origem_comercial' => 'idTipoOrigemComercial',
        'nome_tipo_origem_comercial' => 'nomeTipoOrigemComercial',
        'id_grupo_origem_comercial' => 'idGrupoOrigemComercial',
        'nome_grupo_origem_comercial' => 'nomeGrupoOrigemComercial',
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
        'id' => 'setId',
        'nome' => 'setNome',
        'descricao' => 'setDescricao',
        'produtos_origem' => 'setProdutosOrigem',
        'id_estabelecimento' => 'setIdEstabelecimento',
        'id_tipo_origem_comercial' => 'setIdTipoOrigemComercial',
        'nome_tipo_origem_comercial' => 'setNomeTipoOrigemComercial',
        'id_grupo_origem_comercial' => 'setIdGrupoOrigemComercial',
        'nome_grupo_origem_comercial' => 'setNomeGrupoOrigemComercial',
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
        'id' => 'getId',
        'nome' => 'getNome',
        'descricao' => 'getDescricao',
        'produtos_origem' => 'getProdutosOrigem',
        'id_estabelecimento' => 'getIdEstabelecimento',
        'id_tipo_origem_comercial' => 'getIdTipoOrigemComercial',
        'nome_tipo_origem_comercial' => 'getNomeTipoOrigemComercial',
        'id_grupo_origem_comercial' => 'getIdGrupoOrigemComercial',
        'nome_grupo_origem_comercial' => 'getNomeGrupoOrigemComercial',
        'status' => 'getStatus'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da Origem Comercial
      * @var int
      */
    protected $id;
    
    /**
      * $nome Nome da origem comercial
      * @var string
      */
    protected $nome;
    
    /**
      * $descricao Descri\u00C3\u00A7\u00C3\u00A3o completa do nome da Origem Comercial
      * @var string
      */
    protected $descricao;
    
    /**
      * $produtos_origem Lista de  ProdutosOrigem associados \u00C3\u00A0 Origem comercial
      * @var \br.com.conductor.pier.api.v2.model\ProdutoOrigemResponse[]
      */
    protected $produtos_origem;
    
    /**
      * $id_estabelecimento C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do Estabelecimento
      * @var int
      */
    protected $id_estabelecimento;
    
    /**
      * $id_tipo_origem_comercial C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do Tipo da Origem Comercial
      * @var int
      */
    protected $id_tipo_origem_comercial;
    
    /**
      * $nome_tipo_origem_comercial Nome do Tipo da Origem Comercial
      * @var string
      */
    protected $nome_tipo_origem_comercial;
    
    /**
      * $id_grupo_origem_comercial C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do Grupo a qual a Origem Comercial pertence
      * @var int
      */
    protected $id_grupo_origem_comercial;
    
    /**
      * $nome_grupo_origem_comercial Nome do Grupo a qual a Origem Comercial pertence
      * @var string
      */
    protected $nome_grupo_origem_comercial;
    
    /**
      * $status Status da origem comercial
      * @var bool
      */
    protected $status;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->nome = $data["nome"];
            $this->descricao = $data["descricao"];
            $this->produtos_origem = $data["produtos_origem"];
            $this->id_estabelecimento = $data["id_estabelecimento"];
            $this->id_tipo_origem_comercial = $data["id_tipo_origem_comercial"];
            $this->nome_tipo_origem_comercial = $data["nome_tipo_origem_comercial"];
            $this->id_grupo_origem_comercial = $data["id_grupo_origem_comercial"];
            $this->nome_grupo_origem_comercial = $data["nome_grupo_origem_comercial"];
            $this->status = $data["status"];
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
     * @param int $id C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da Origem Comercial
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
     * @param string $nome Nome da origem comercial
     * @return $this
     */
    public function setNome($nome)
    {
        
        $this->nome = $nome;
        return $this;
    }
    
    /**
     * Gets descricao
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }
  
    /**
     * Sets descricao
     * @param string $descricao Descri\u00C3\u00A7\u00C3\u00A3o completa do nome da Origem Comercial
     * @return $this
     */
    public function setDescricao($descricao)
    {
        
        $this->descricao = $descricao;
        return $this;
    }
    
    /**
     * Gets produtos_origem
     * @return \br.com.conductor.pier.api.v2.model\ProdutoOrigemResponse[]
     */
    public function getProdutosOrigem()
    {
        return $this->produtos_origem;
    }
  
    /**
     * Sets produtos_origem
     * @param \br.com.conductor.pier.api.v2.model\ProdutoOrigemResponse[] $produtos_origem Lista de  ProdutosOrigem associados \u00C3\u00A0 Origem comercial
     * @return $this
     */
    public function setProdutosOrigem($produtos_origem)
    {
        
        $this->produtos_origem = $produtos_origem;
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
     * @param int $id_estabelecimento C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do Estabelecimento
     * @return $this
     */
    public function setIdEstabelecimento($id_estabelecimento)
    {
        
        $this->id_estabelecimento = $id_estabelecimento;
        return $this;
    }
    
    /**
     * Gets id_tipo_origem_comercial
     * @return int
     */
    public function getIdTipoOrigemComercial()
    {
        return $this->id_tipo_origem_comercial;
    }
  
    /**
     * Sets id_tipo_origem_comercial
     * @param int $id_tipo_origem_comercial C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do Tipo da Origem Comercial
     * @return $this
     */
    public function setIdTipoOrigemComercial($id_tipo_origem_comercial)
    {
        
        $this->id_tipo_origem_comercial = $id_tipo_origem_comercial;
        return $this;
    }
    
    /**
     * Gets nome_tipo_origem_comercial
     * @return string
     */
    public function getNomeTipoOrigemComercial()
    {
        return $this->nome_tipo_origem_comercial;
    }
  
    /**
     * Sets nome_tipo_origem_comercial
     * @param string $nome_tipo_origem_comercial Nome do Tipo da Origem Comercial
     * @return $this
     */
    public function setNomeTipoOrigemComercial($nome_tipo_origem_comercial)
    {
        
        $this->nome_tipo_origem_comercial = $nome_tipo_origem_comercial;
        return $this;
    }
    
    /**
     * Gets id_grupo_origem_comercial
     * @return int
     */
    public function getIdGrupoOrigemComercial()
    {
        return $this->id_grupo_origem_comercial;
    }
  
    /**
     * Sets id_grupo_origem_comercial
     * @param int $id_grupo_origem_comercial C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do Grupo a qual a Origem Comercial pertence
     * @return $this
     */
    public function setIdGrupoOrigemComercial($id_grupo_origem_comercial)
    {
        
        $this->id_grupo_origem_comercial = $id_grupo_origem_comercial;
        return $this;
    }
    
    /**
     * Gets nome_grupo_origem_comercial
     * @return string
     */
    public function getNomeGrupoOrigemComercial()
    {
        return $this->nome_grupo_origem_comercial;
    }
  
    /**
     * Sets nome_grupo_origem_comercial
     * @param string $nome_grupo_origem_comercial Nome do Grupo a qual a Origem Comercial pertence
     * @return $this
     */
    public function setNomeGrupoOrigemComercial($nome_grupo_origem_comercial)
    {
        
        $this->nome_grupo_origem_comercial = $nome_grupo_origem_comercial;
        return $this;
    }
    
    /**
     * Gets status
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }
  
    /**
     * Sets status
     * @param bool $status Status da origem comercial
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