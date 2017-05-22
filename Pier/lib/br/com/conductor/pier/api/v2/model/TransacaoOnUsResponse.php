<?php
/**
 * TransacaoOnUsResponse
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
 * TransacaoOnUsResponse Class Doc Comment
 *
 * @category    Class
 * @description Objeto de Resposta de Autoriza\u00C3\u00A7\u00C3\u00A3o
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TransacaoOnUsResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'nsu_origem' => 'string',
        'nsu_autorizacao' => 'string',
        'plano_de_parcelamento' => '\br.com.conductor.pier.api.v2.model\MapOfstringAndstring[]',
        'codigo_autorizacao' => 'string',
        'numero_mascarado_cartao' => 'string',
        'nome_portador_cartao' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'nsu_origem' => 'nsuOrigem',
        'nsu_autorizacao' => 'nsuAutorizacao',
        'plano_de_parcelamento' => 'planoDeParcelamento',
        'codigo_autorizacao' => 'codigoAutorizacao',
        'numero_mascarado_cartao' => 'numeroMascaradoCartao',
        'nome_portador_cartao' => 'nomePortadorCartao'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'nsu_origem' => 'setNsuOrigem',
        'nsu_autorizacao' => 'setNsuAutorizacao',
        'plano_de_parcelamento' => 'setPlanoDeParcelamento',
        'codigo_autorizacao' => 'setCodigoAutorizacao',
        'numero_mascarado_cartao' => 'setNumeroMascaradoCartao',
        'nome_portador_cartao' => 'setNomePortadorCartao'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'nsu_origem' => 'getNsuOrigem',
        'nsu_autorizacao' => 'getNsuAutorizacao',
        'plano_de_parcelamento' => 'getPlanoDeParcelamento',
        'codigo_autorizacao' => 'getCodigoAutorizacao',
        'numero_mascarado_cartao' => 'getNumeroMascaradoCartao',
        'nome_portador_cartao' => 'getNomePortadorCartao'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $nsu_origem N\u00C3\u00BAmero Sequencial \u00C3\u009Anico que identifica a transa\u00C3\u00A7\u00C3\u00A3o no sistema que a originou.
      * @var string
      */
    protected $nsu_origem;
    
    /**
      * $nsu_autorizacao N\u00C3\u00BAmero Sequencial \u00C3\u009Anico gerado pelo Autorizador a cada Transa\u00C3\u00A7\u00C3\u00A3o.
      * @var string
      */
    protected $nsu_autorizacao;
    
    /**
      * $plano_de_parcelamento Descri\u00C3\u00A7\u00C3\u00A3o do Plano de Parcelamento atribu\u00C3\u00ADdo a Transa\u00C3\u00A7\u00C3\u00A3o.
      * @var \br.com.conductor.pier.api.v2.model\MapOfstringAndstring[]
      */
    protected $plano_de_parcelamento;
    
    /**
      * $codigo_autorizacao C\u00C3\u00B3digo de Autoriza\u00C3\u00A7\u00C3\u00A3o gerado pelo Autorizador.
      * @var string
      */
    protected $codigo_autorizacao;
    
    /**
      * $numero_mascarado_cartao N\u00C3\u00BAmero do Cart\u00C3\u00A3o que originou a transa\u00C3\u00A7\u00C3\u00A3o em formato mascarado.
      * @var string
      */
    protected $numero_mascarado_cartao;
    
    /**
      * $nome_portador_cartao Nome do Portador do Cart\u00C3\u00A3o que originou a transa\u00C3\u00A7\u00C3\u00A3o.
      * @var string
      */
    protected $nome_portador_cartao;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->nsu_origem = $data["nsu_origem"];
            $this->nsu_autorizacao = $data["nsu_autorizacao"];
            $this->plano_de_parcelamento = $data["plano_de_parcelamento"];
            $this->codigo_autorizacao = $data["codigo_autorizacao"];
            $this->numero_mascarado_cartao = $data["numero_mascarado_cartao"];
            $this->nome_portador_cartao = $data["nome_portador_cartao"];
        }
    }
    
    /**
     * Gets nsu_origem
     * @return string
     */
    public function getNsuOrigem()
    {
        return $this->nsu_origem;
    }
  
    /**
     * Sets nsu_origem
     * @param string $nsu_origem N\u00C3\u00BAmero Sequencial \u00C3\u009Anico que identifica a transa\u00C3\u00A7\u00C3\u00A3o no sistema que a originou.
     * @return $this
     */
    public function setNsuOrigem($nsu_origem)
    {
        
        $this->nsu_origem = $nsu_origem;
        return $this;
    }
    
    /**
     * Gets nsu_autorizacao
     * @return string
     */
    public function getNsuAutorizacao()
    {
        return $this->nsu_autorizacao;
    }
  
    /**
     * Sets nsu_autorizacao
     * @param string $nsu_autorizacao N\u00C3\u00BAmero Sequencial \u00C3\u009Anico gerado pelo Autorizador a cada Transa\u00C3\u00A7\u00C3\u00A3o.
     * @return $this
     */
    public function setNsuAutorizacao($nsu_autorizacao)
    {
        
        $this->nsu_autorizacao = $nsu_autorizacao;
        return $this;
    }
    
    /**
     * Gets plano_de_parcelamento
     * @return \br.com.conductor.pier.api.v2.model\MapOfstringAndstring[]
     */
    public function getPlanoDeParcelamento()
    {
        return $this->plano_de_parcelamento;
    }
  
    /**
     * Sets plano_de_parcelamento
     * @param \br.com.conductor.pier.api.v2.model\MapOfstringAndstring[] $plano_de_parcelamento Descri\u00C3\u00A7\u00C3\u00A3o do Plano de Parcelamento atribu\u00C3\u00ADdo a Transa\u00C3\u00A7\u00C3\u00A3o.
     * @return $this
     */
    public function setPlanoDeParcelamento($plano_de_parcelamento)
    {
        
        $this->plano_de_parcelamento = $plano_de_parcelamento;
        return $this;
    }
    
    /**
     * Gets codigo_autorizacao
     * @return string
     */
    public function getCodigoAutorizacao()
    {
        return $this->codigo_autorizacao;
    }
  
    /**
     * Sets codigo_autorizacao
     * @param string $codigo_autorizacao C\u00C3\u00B3digo de Autoriza\u00C3\u00A7\u00C3\u00A3o gerado pelo Autorizador.
     * @return $this
     */
    public function setCodigoAutorizacao($codigo_autorizacao)
    {
        
        $this->codigo_autorizacao = $codigo_autorizacao;
        return $this;
    }
    
    /**
     * Gets numero_mascarado_cartao
     * @return string
     */
    public function getNumeroMascaradoCartao()
    {
        return $this->numero_mascarado_cartao;
    }
  
    /**
     * Sets numero_mascarado_cartao
     * @param string $numero_mascarado_cartao N\u00C3\u00BAmero do Cart\u00C3\u00A3o que originou a transa\u00C3\u00A7\u00C3\u00A3o em formato mascarado.
     * @return $this
     */
    public function setNumeroMascaradoCartao($numero_mascarado_cartao)
    {
        
        $this->numero_mascarado_cartao = $numero_mascarado_cartao;
        return $this;
    }
    
    /**
     * Gets nome_portador_cartao
     * @return string
     */
    public function getNomePortadorCartao()
    {
        return $this->nome_portador_cartao;
    }
  
    /**
     * Sets nome_portador_cartao
     * @param string $nome_portador_cartao Nome do Portador do Cart\u00C3\u00A3o que originou a transa\u00C3\u00A7\u00C3\u00A3o.
     * @return $this
     */
    public function setNomePortadorCartao($nome_portador_cartao)
    {
        
        $this->nome_portador_cartao = $nome_portador_cartao;
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