<?php
/**
 * SocioAprovadoResponse
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
 * SocioAprovadoResponse Class Doc Comment
 *
 * @category    Class
 * @description PessoaPersist
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SocioAprovadoResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'nome' => 'string',
        'cpf' => 'string',
        'data_nascimento' => 'string',
        'sexo' => 'string',
        'numero_identidade' => 'string',
        'orgao_expedidor_identidade' => 'string',
        'unidade_federativa_identidade' => 'string',
        'data_emissao_identidade' => 'string',
        'estado_civil' => 'string',
        'profissao' => 'string',
        'nacionalidade' => 'string',
        'email' => 'string',
        'telefones' => '\br.com.conductor.pier.api.v2.model\TelefonePessoaAprovadaResponse[]'
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
        'cpf' => 'cpf',
        'data_nascimento' => 'dataNascimento',
        'sexo' => 'sexo',
        'numero_identidade' => 'numeroIdentidade',
        'orgao_expedidor_identidade' => 'orgaoExpedidorIdentidade',
        'unidade_federativa_identidade' => 'unidadeFederativaIdentidade',
        'data_emissao_identidade' => 'dataEmissaoIdentidade',
        'estado_civil' => 'estadoCivil',
        'profissao' => 'profissao',
        'nacionalidade' => 'nacionalidade',
        'email' => 'email',
        'telefones' => 'telefones'
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
        'cpf' => 'setCpf',
        'data_nascimento' => 'setDataNascimento',
        'sexo' => 'setSexo',
        'numero_identidade' => 'setNumeroIdentidade',
        'orgao_expedidor_identidade' => 'setOrgaoExpedidorIdentidade',
        'unidade_federativa_identidade' => 'setUnidadeFederativaIdentidade',
        'data_emissao_identidade' => 'setDataEmissaoIdentidade',
        'estado_civil' => 'setEstadoCivil',
        'profissao' => 'setProfissao',
        'nacionalidade' => 'setNacionalidade',
        'email' => 'setEmail',
        'telefones' => 'setTelefones'
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
        'cpf' => 'getCpf',
        'data_nascimento' => 'getDataNascimento',
        'sexo' => 'getSexo',
        'numero_identidade' => 'getNumeroIdentidade',
        'orgao_expedidor_identidade' => 'getOrgaoExpedidorIdentidade',
        'unidade_federativa_identidade' => 'getUnidadeFederativaIdentidade',
        'data_emissao_identidade' => 'getDataEmissaoIdentidade',
        'estado_civil' => 'getEstadoCivil',
        'profissao' => 'getProfissao',
        'nacionalidade' => 'getNacionalidade',
        'email' => 'getEmail',
        'telefones' => 'getTelefones'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do S\u00C3\u00B3cio (id)
      * @var int
      */
    protected $id;
    
    /**
      * $nome Apresenta o Nome do Socio
      * @var string
      */
    protected $nome;
    
    /**
      * $cpf N\u00C3\u00BAmero do CPF, quando PF.
      * @var string
      */
    protected $cpf;
    
    /**
      * $data_nascimento Data de Nascimento da Pessoa, quando PF, ou a Data de Abertura da Empresa, quando PJ. Essa data deve ser informada no formato aaaa-MM-dd.
      * @var string
      */
    protected $data_nascimento;
    
    /**
      * $sexo C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do sexo da Pessoa, quando PF, sendo: (\"M\": Masculino), (\"F\": Feminino), (\"O\": Outro), (\"N\": N\u00C3\u00A3o Especificado).
      * @var string
      */
    protected $sexo;
    
    /**
      * $numero_identidade N\u00C3\u00BAmero da Identidade.
      * @var string
      */
    protected $numero_identidade;
    
    /**
      * $orgao_expedidor_identidade Org\u00C3\u00A3o expedidor do RG.
      * @var string
      */
    protected $orgao_expedidor_identidade;
    
    /**
      * $unidade_federativa_identidade Sigla da Unidade Federativa de onde foi expedido a Identidade
      * @var string
      */
    protected $unidade_federativa_identidade;
    
    /**
      * $data_emissao_identidade Data emiss\u00C3\u00A3o da Identidade
      * @var string
      */
    protected $data_emissao_identidade;
    
    /**
      * $estado_civil Estado civil do s\u00C3\u00B3cio
      * @var string
      */
    protected $estado_civil;
    
    /**
      * $profissao Profiss\u00C3\u00A3o do s\u00C3\u00B3cio
      * @var string
      */
    protected $profissao;
    
    /**
      * $nacionalidade Nacionalidade do s\u00C3\u00B3cio
      * @var string
      */
    protected $nacionalidade;
    
    /**
      * $email Email do s\u00C3\u00B3cio
      * @var string
      */
    protected $email;
    
    /**
      * $telefones Informa os telefones do s\u00C3\u00B3cio
      * @var \br.com.conductor.pier.api.v2.model\TelefonePessoaAprovadaResponse[]
      */
    protected $telefones;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->nome = $data["nome"];
            $this->cpf = $data["cpf"];
            $this->data_nascimento = $data["data_nascimento"];
            $this->sexo = $data["sexo"];
            $this->numero_identidade = $data["numero_identidade"];
            $this->orgao_expedidor_identidade = $data["orgao_expedidor_identidade"];
            $this->unidade_federativa_identidade = $data["unidade_federativa_identidade"];
            $this->data_emissao_identidade = $data["data_emissao_identidade"];
            $this->estado_civil = $data["estado_civil"];
            $this->profissao = $data["profissao"];
            $this->nacionalidade = $data["nacionalidade"];
            $this->email = $data["email"];
            $this->telefones = $data["telefones"];
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
     * @param int $id C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do S\u00C3\u00B3cio (id)
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
     * @param string $nome Apresenta o Nome do Socio
     * @return $this
     */
    public function setNome($nome)
    {
        
        $this->nome = $nome;
        return $this;
    }
    
    /**
     * Gets cpf
     * @return string
     */
    public function getCpf()
    {
        return $this->cpf;
    }
  
    /**
     * Sets cpf
     * @param string $cpf N\u00C3\u00BAmero do CPF, quando PF.
     * @return $this
     */
    public function setCpf($cpf)
    {
        
        $this->cpf = $cpf;
        return $this;
    }
    
    /**
     * Gets data_nascimento
     * @return string
     */
    public function getDataNascimento()
    {
        return $this->data_nascimento;
    }
  
    /**
     * Sets data_nascimento
     * @param string $data_nascimento Data de Nascimento da Pessoa, quando PF, ou a Data de Abertura da Empresa, quando PJ. Essa data deve ser informada no formato aaaa-MM-dd.
     * @return $this
     */
    public function setDataNascimento($data_nascimento)
    {
        
        $this->data_nascimento = $data_nascimento;
        return $this;
    }
    
    /**
     * Gets sexo
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }
  
    /**
     * Sets sexo
     * @param string $sexo C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do sexo da Pessoa, quando PF, sendo: (\"M\": Masculino), (\"F\": Feminino), (\"O\": Outro), (\"N\": N\u00C3\u00A3o Especificado).
     * @return $this
     */
    public function setSexo($sexo)
    {
        
        $this->sexo = $sexo;
        return $this;
    }
    
    /**
     * Gets numero_identidade
     * @return string
     */
    public function getNumeroIdentidade()
    {
        return $this->numero_identidade;
    }
  
    /**
     * Sets numero_identidade
     * @param string $numero_identidade N\u00C3\u00BAmero da Identidade.
     * @return $this
     */
    public function setNumeroIdentidade($numero_identidade)
    {
        
        $this->numero_identidade = $numero_identidade;
        return $this;
    }
    
    /**
     * Gets orgao_expedidor_identidade
     * @return string
     */
    public function getOrgaoExpedidorIdentidade()
    {
        return $this->orgao_expedidor_identidade;
    }
  
    /**
     * Sets orgao_expedidor_identidade
     * @param string $orgao_expedidor_identidade Org\u00C3\u00A3o expedidor do RG.
     * @return $this
     */
    public function setOrgaoExpedidorIdentidade($orgao_expedidor_identidade)
    {
        
        $this->orgao_expedidor_identidade = $orgao_expedidor_identidade;
        return $this;
    }
    
    /**
     * Gets unidade_federativa_identidade
     * @return string
     */
    public function getUnidadeFederativaIdentidade()
    {
        return $this->unidade_federativa_identidade;
    }
  
    /**
     * Sets unidade_federativa_identidade
     * @param string $unidade_federativa_identidade Sigla da Unidade Federativa de onde foi expedido a Identidade
     * @return $this
     */
    public function setUnidadeFederativaIdentidade($unidade_federativa_identidade)
    {
        
        $this->unidade_federativa_identidade = $unidade_federativa_identidade;
        return $this;
    }
    
    /**
     * Gets data_emissao_identidade
     * @return string
     */
    public function getDataEmissaoIdentidade()
    {
        return $this->data_emissao_identidade;
    }
  
    /**
     * Sets data_emissao_identidade
     * @param string $data_emissao_identidade Data emiss\u00C3\u00A3o da Identidade
     * @return $this
     */
    public function setDataEmissaoIdentidade($data_emissao_identidade)
    {
        
        $this->data_emissao_identidade = $data_emissao_identidade;
        return $this;
    }
    
    /**
     * Gets estado_civil
     * @return string
     */
    public function getEstadoCivil()
    {
        return $this->estado_civil;
    }
  
    /**
     * Sets estado_civil
     * @param string $estado_civil Estado civil do s\u00C3\u00B3cio
     * @return $this
     */
    public function setEstadoCivil($estado_civil)
    {
        
        $this->estado_civil = $estado_civil;
        return $this;
    }
    
    /**
     * Gets profissao
     * @return string
     */
    public function getProfissao()
    {
        return $this->profissao;
    }
  
    /**
     * Sets profissao
     * @param string $profissao Profiss\u00C3\u00A3o do s\u00C3\u00B3cio
     * @return $this
     */
    public function setProfissao($profissao)
    {
        
        $this->profissao = $profissao;
        return $this;
    }
    
    /**
     * Gets nacionalidade
     * @return string
     */
    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }
  
    /**
     * Sets nacionalidade
     * @param string $nacionalidade Nacionalidade do s\u00C3\u00B3cio
     * @return $this
     */
    public function setNacionalidade($nacionalidade)
    {
        
        $this->nacionalidade = $nacionalidade;
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
     * @param string $email Email do s\u00C3\u00B3cio
     * @return $this
     */
    public function setEmail($email)
    {
        
        $this->email = $email;
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
     * @param \br.com.conductor.pier.api.v2.model\TelefonePessoaAprovadaResponse[] $telefones Informa os telefones do s\u00C3\u00B3cio
     * @return $this
     */
    public function setTelefones($telefones)
    {
        
        $this->telefones = $telefones;
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
