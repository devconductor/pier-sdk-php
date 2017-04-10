<?php
/**
 * PessoaJuridicaAprovadaResponse
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
 * PessoaJuridicaAprovadaResponse Class Doc Comment
 *
 * @category    Class
 * @description PessoaJuridicaAprovadaPersist
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PessoaJuridicaAprovadaResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'razao_social' => 'string',
        'nome_fantasia' => 'string',
        'cnpj' => 'string',
        'inscricao_estadual' => 'string',
        'data_abertura_empresa' => '\DateTime',
        'id_origem_comercial' => 'int',
        'id_produto' => 'int',
        'numero_agencia' => 'int',
        'numero_conta_corrente' => 'string',
        'email' => 'string',
        'dia_vencimento' => 'int',
        'nome_impresso' => 'string',
        'telefones' => '\br.com.conductor.pier.api.v2.model\TelefonePessoaAprovadaResponse[]',
        'enderecos' => '\br.com.conductor.pier.api.v2.model\EnderecoAprovadoResponse[]',
        'socios' => '\br.com.conductor.pier.api.v2.model\SocioAprovadoResponse[]'
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
        'razao_social' => 'razaoSocial',
        'nome_fantasia' => 'nomeFantasia',
        'cnpj' => 'cnpj',
        'inscricao_estadual' => 'inscricaoEstadual',
        'data_abertura_empresa' => 'dataAberturaEmpresa',
        'id_origem_comercial' => 'idOrigemComercial',
        'id_produto' => 'idProduto',
        'numero_agencia' => 'numeroAgencia',
        'numero_conta_corrente' => 'numeroContaCorrente',
        'email' => 'email',
        'dia_vencimento' => 'diaVencimento',
        'nome_impresso' => 'nomeImpresso',
        'telefones' => 'telefones',
        'enderecos' => 'enderecos',
        'socios' => 'socios'
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
        'razao_social' => 'setRazaoSocial',
        'nome_fantasia' => 'setNomeFantasia',
        'cnpj' => 'setCnpj',
        'inscricao_estadual' => 'setInscricaoEstadual',
        'data_abertura_empresa' => 'setDataAberturaEmpresa',
        'id_origem_comercial' => 'setIdOrigemComercial',
        'id_produto' => 'setIdProduto',
        'numero_agencia' => 'setNumeroAgencia',
        'numero_conta_corrente' => 'setNumeroContaCorrente',
        'email' => 'setEmail',
        'dia_vencimento' => 'setDiaVencimento',
        'nome_impresso' => 'setNomeImpresso',
        'telefones' => 'setTelefones',
        'enderecos' => 'setEnderecos',
        'socios' => 'setSocios'
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
        'razao_social' => 'getRazaoSocial',
        'nome_fantasia' => 'getNomeFantasia',
        'cnpj' => 'getCnpj',
        'inscricao_estadual' => 'getInscricaoEstadual',
        'data_abertura_empresa' => 'getDataAberturaEmpresa',
        'id_origem_comercial' => 'getIdOrigemComercial',
        'id_produto' => 'getIdProduto',
        'numero_agencia' => 'getNumeroAgencia',
        'numero_conta_corrente' => 'getNumeroContaCorrente',
        'email' => 'getEmail',
        'dia_vencimento' => 'getDiaVencimento',
        'nome_impresso' => 'getNomeImpresso',
        'telefones' => 'getTelefones',
        'enderecos' => 'getEnderecos',
        'socios' => 'getSocios'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Endere\u00C3\u00A7o (id)
      * @var int
      */
    protected $id;
    
    /**
      * $razao_social Apresenta o nome completo da raz\u00C3\u00A3o social (nome empresarial)'.
      * @var string
      */
    protected $razao_social;
    
    /**
      * $nome_fantasia Apresenta o nome fantasia da empresa.
      * @var string
      */
    protected $nome_fantasia;
    
    /**
      * $cnpj N\u00C3\u00BAmero do Cadastro Nacional de Pessoa Juridica (CNPJ)
      * @var string
      */
    protected $cnpj;
    
    /**
      * $inscricao_estadual N\u00C3\u00BAmero da Inscri\u00C3\u00A7\u00C3\u00A3o Estadual (IE).
      * @var string
      */
    protected $inscricao_estadual;
    
    /**
      * $data_abertura_empresa Data de abertura da empresa, essa data deve ser informada no formato: aaaa-MM-dd.
      * @var \DateTime
      */
    protected $data_abertura_empresa;
    
    /**
      * $id_origem_comercial Id da origem comercial
      * @var int
      */
    protected $id_origem_comercial;
    
    /**
      * $id_produto Id do produto
      * @var int
      */
    protected $id_produto;
    
    /**
      * $numero_agencia N\u00C3\u00BAmero da ag\u00C3\u00AAncia.
      * @var int
      */
    protected $numero_agencia;
    
    /**
      * $numero_conta_corrente N\u00C3\u00BAmero da conta corrente.
      * @var string
      */
    protected $numero_conta_corrente;
    
    /**
      * $email Email da empresa
      * @var string
      */
    protected $email;
    
    /**
      * $dia_vencimento Dia vencimento
      * @var int
      */
    protected $dia_vencimento;
    
    /**
      * $nome_impresso Nome que deve ser impresso no cart\u00C3\u00A3o
      * @var string
      */
    protected $nome_impresso;
    
    /**
      * $telefones Apresenta os telefones da empresa
      * @var \br.com.conductor.pier.api.v2.model\TelefonePessoaAprovadaResponse[]
      */
    protected $telefones;
    
    /**
      * $enderecos Pode ser informado os seguintes tipos de endere\u00C3\u00A7o: Residencial, Comercial, e Outros
      * @var \br.com.conductor.pier.api.v2.model\EnderecoAprovadoResponse[]
      */
    protected $enderecos;
    
    /**
      * $socios Apresenta os dados dos s\u00C3\u00B3cios da empresa, caso exista
      * @var \br.com.conductor.pier.api.v2.model\SocioAprovadoResponse[]
      */
    protected $socios;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->razao_social = $data["razao_social"];
            $this->nome_fantasia = $data["nome_fantasia"];
            $this->cnpj = $data["cnpj"];
            $this->inscricao_estadual = $data["inscricao_estadual"];
            $this->data_abertura_empresa = $data["data_abertura_empresa"];
            $this->id_origem_comercial = $data["id_origem_comercial"];
            $this->id_produto = $data["id_produto"];
            $this->numero_agencia = $data["numero_agencia"];
            $this->numero_conta_corrente = $data["numero_conta_corrente"];
            $this->email = $data["email"];
            $this->dia_vencimento = $data["dia_vencimento"];
            $this->nome_impresso = $data["nome_impresso"];
            $this->telefones = $data["telefones"];
            $this->enderecos = $data["enderecos"];
            $this->socios = $data["socios"];
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
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Endere\u00C3\u00A7o (id)
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets razao_social
     * @return string
     */
    public function getRazaoSocial()
    {
        return $this->razao_social;
    }
  
    /**
     * Sets razao_social
     * @param string $razao_social Apresenta o nome completo da raz\u00C3\u00A3o social (nome empresarial)'.
     * @return $this
     */
    public function setRazaoSocial($razao_social)
    {
        
        $this->razao_social = $razao_social;
        return $this;
    }
    
    /**
     * Gets nome_fantasia
     * @return string
     */
    public function getNomeFantasia()
    {
        return $this->nome_fantasia;
    }
  
    /**
     * Sets nome_fantasia
     * @param string $nome_fantasia Apresenta o nome fantasia da empresa.
     * @return $this
     */
    public function setNomeFantasia($nome_fantasia)
    {
        
        $this->nome_fantasia = $nome_fantasia;
        return $this;
    }
    
    /**
     * Gets cnpj
     * @return string
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }
  
    /**
     * Sets cnpj
     * @param string $cnpj N\u00C3\u00BAmero do Cadastro Nacional de Pessoa Juridica (CNPJ)
     * @return $this
     */
    public function setCnpj($cnpj)
    {
        
        $this->cnpj = $cnpj;
        return $this;
    }
    
    /**
     * Gets inscricao_estadual
     * @return string
     */
    public function getInscricaoEstadual()
    {
        return $this->inscricao_estadual;
    }
  
    /**
     * Sets inscricao_estadual
     * @param string $inscricao_estadual N\u00C3\u00BAmero da Inscri\u00C3\u00A7\u00C3\u00A3o Estadual (IE).
     * @return $this
     */
    public function setInscricaoEstadual($inscricao_estadual)
    {
        
        $this->inscricao_estadual = $inscricao_estadual;
        return $this;
    }
    
    /**
     * Gets data_abertura_empresa
     * @return \DateTime
     */
    public function getDataAberturaEmpresa()
    {
        return $this->data_abertura_empresa;
    }
  
    /**
     * Sets data_abertura_empresa
     * @param \DateTime $data_abertura_empresa Data de abertura da empresa, essa data deve ser informada no formato: aaaa-MM-dd.
     * @return $this
     */
    public function setDataAberturaEmpresa($data_abertura_empresa)
    {
        
        $this->data_abertura_empresa = $data_abertura_empresa;
        return $this;
    }
    
    /**
     * Gets id_origem_comercial
     * @return int
     */
    public function getIdOrigemComercial()
    {
        return $this->id_origem_comercial;
    }
  
    /**
     * Sets id_origem_comercial
     * @param int $id_origem_comercial Id da origem comercial
     * @return $this
     */
    public function setIdOrigemComercial($id_origem_comercial)
    {
        
        $this->id_origem_comercial = $id_origem_comercial;
        return $this;
    }
    
    /**
     * Gets id_produto
     * @return int
     */
    public function getIdProduto()
    {
        return $this->id_produto;
    }
  
    /**
     * Sets id_produto
     * @param int $id_produto Id do produto
     * @return $this
     */
    public function setIdProduto($id_produto)
    {
        
        $this->id_produto = $id_produto;
        return $this;
    }
    
    /**
     * Gets numero_agencia
     * @return int
     */
    public function getNumeroAgencia()
    {
        return $this->numero_agencia;
    }
  
    /**
     * Sets numero_agencia
     * @param int $numero_agencia N\u00C3\u00BAmero da ag\u00C3\u00AAncia.
     * @return $this
     */
    public function setNumeroAgencia($numero_agencia)
    {
        
        $this->numero_agencia = $numero_agencia;
        return $this;
    }
    
    /**
     * Gets numero_conta_corrente
     * @return string
     */
    public function getNumeroContaCorrente()
    {
        return $this->numero_conta_corrente;
    }
  
    /**
     * Sets numero_conta_corrente
     * @param string $numero_conta_corrente N\u00C3\u00BAmero da conta corrente.
     * @return $this
     */
    public function setNumeroContaCorrente($numero_conta_corrente)
    {
        
        $this->numero_conta_corrente = $numero_conta_corrente;
        return $this;
    }
    
    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
  
    /**
     * Sets email
     * @param string $email Email da empresa
     * @return $this
     */
    public function setEmail($email)
    {
        
        $this->email = $email;
        return $this;
    }
    
    /**
     * Gets dia_vencimento
     * @return int
     */
    public function getDiaVencimento()
    {
        return $this->dia_vencimento;
    }
  
    /**
     * Sets dia_vencimento
     * @param int $dia_vencimento Dia vencimento
     * @return $this
     */
    public function setDiaVencimento($dia_vencimento)
    {
        
        $this->dia_vencimento = $dia_vencimento;
        return $this;
    }
    
    /**
     * Gets nome_impresso
     * @return string
     */
    public function getNomeImpresso()
    {
        return $this->nome_impresso;
    }
  
    /**
     * Sets nome_impresso
     * @param string $nome_impresso Nome que deve ser impresso no cart\u00C3\u00A3o
     * @return $this
     */
    public function setNomeImpresso($nome_impresso)
    {
        
        $this->nome_impresso = $nome_impresso;
        return $this;
    }
    
    /**
     * Gets telefones
     * @return \br.com.conductor.pier.api.v2.model\TelefonePessoaAprovadaResponse[]
     */
    public function getTelefones()
    {
        return $this->telefones;
    }
  
    /**
     * Sets telefones
     * @param \br.com.conductor.pier.api.v2.model\TelefonePessoaAprovadaResponse[] $telefones Apresenta os telefones da empresa
     * @return $this
     */
    public function setTelefones($telefones)
    {
        
        $this->telefones = $telefones;
        return $this;
    }
    
    /**
     * Gets enderecos
     * @return \br.com.conductor.pier.api.v2.model\EnderecoAprovadoResponse[]
     */
    public function getEnderecos()
    {
        return $this->enderecos;
    }
  
    /**
     * Sets enderecos
     * @param \br.com.conductor.pier.api.v2.model\EnderecoAprovadoResponse[] $enderecos Pode ser informado os seguintes tipos de endere\u00C3\u00A7o: Residencial, Comercial, e Outros
     * @return $this
     */
    public function setEnderecos($enderecos)
    {
        
        $this->enderecos = $enderecos;
        return $this;
    }
    
    /**
     * Gets socios
     * @return \br.com.conductor.pier.api.v2.model\SocioAprovadoResponse[]
     */
    public function getSocios()
    {
        return $this->socios;
    }
  
    /**
     * Sets socios
     * @param \br.com.conductor.pier.api.v2.model\SocioAprovadoResponse[] $socios Apresenta os dados dos s\u00C3\u00B3cios da empresa, caso exista
     * @return $this
     */
    public function setSocios($socios)
    {
        
        $this->socios = $socios;
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