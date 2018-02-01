<?php
/**
 * OrigemComercialUpdate
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
 * OrigemComercialUpdate Class Doc Comment
 *
 * @category    Class
 * @description Par\u00C3\u00A2metros de requisi\u00C3\u00A7\u00C3\u00A3o para alterar origem comercial
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrigemComercialUpdate implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'nome' => 'string',
        'descricao' => 'string',
        'id_estabelecimento' => 'int',
        'id_tipo_origem_comercial' => 'int',
        'id_grupo_origem_comercial' => 'int',
        'status' => 'int',
        'flag_pre_aprovado' => 'bool',
        'flag_aprovacao_imediata' => 'bool',
        'nome_fantasia_plastico' => 'string',
        'flag_cartao_provisorio' => 'bool',
        'flag_cartao_definitivo' => 'bool',
        'usuario' => 'string',
        'senha' => 'string',
        'flag_origem_externa' => 'bool',
        'flag_modificado' => 'bool',
        'flag_envia_fatura_usuario' => 'bool',
        'flag_credito_faturamento' => 'bool',
        'flag_concede_limite_provisorio' => 'bool',
        'flag_digitalizar_doc' => 'bool',
        'flag_embossing_loja' => 'bool',
        'flag_consulta_previa' => 'bool',
        'tipo_pessoa' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'nome' => 'nome',
        'descricao' => 'descricao',
        'id_estabelecimento' => 'idEstabelecimento',
        'id_tipo_origem_comercial' => 'idTipoOrigemComercial',
        'id_grupo_origem_comercial' => 'idGrupoOrigemComercial',
        'status' => 'status',
        'flag_pre_aprovado' => 'flagPreAprovado',
        'flag_aprovacao_imediata' => 'flagAprovacaoImediata',
        'nome_fantasia_plastico' => 'nomeFantasiaPlastico',
        'flag_cartao_provisorio' => 'flagCartaoProvisorio',
        'flag_cartao_definitivo' => 'flagCartaoDefinitivo',
        'usuario' => 'usuario',
        'senha' => 'senha',
        'flag_origem_externa' => 'flagOrigemExterna',
        'flag_modificado' => 'flagModificado',
        'flag_envia_fatura_usuario' => 'flagEnviaFaturaUsuario',
        'flag_credito_faturamento' => 'flagCreditoFaturamento',
        'flag_concede_limite_provisorio' => 'flagConcedeLimiteProvisorio',
        'flag_digitalizar_doc' => 'flagDigitalizarDoc',
        'flag_embossing_loja' => 'flagEmbossingLoja',
        'flag_consulta_previa' => 'flagConsultaPrevia',
        'tipo_pessoa' => 'tipoPessoa'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'nome' => 'setNome',
        'descricao' => 'setDescricao',
        'id_estabelecimento' => 'setIdEstabelecimento',
        'id_tipo_origem_comercial' => 'setIdTipoOrigemComercial',
        'id_grupo_origem_comercial' => 'setIdGrupoOrigemComercial',
        'status' => 'setStatus',
        'flag_pre_aprovado' => 'setFlagPreAprovado',
        'flag_aprovacao_imediata' => 'setFlagAprovacaoImediata',
        'nome_fantasia_plastico' => 'setNomeFantasiaPlastico',
        'flag_cartao_provisorio' => 'setFlagCartaoProvisorio',
        'flag_cartao_definitivo' => 'setFlagCartaoDefinitivo',
        'usuario' => 'setUsuario',
        'senha' => 'setSenha',
        'flag_origem_externa' => 'setFlagOrigemExterna',
        'flag_modificado' => 'setFlagModificado',
        'flag_envia_fatura_usuario' => 'setFlagEnviaFaturaUsuario',
        'flag_credito_faturamento' => 'setFlagCreditoFaturamento',
        'flag_concede_limite_provisorio' => 'setFlagConcedeLimiteProvisorio',
        'flag_digitalizar_doc' => 'setFlagDigitalizarDoc',
        'flag_embossing_loja' => 'setFlagEmbossingLoja',
        'flag_consulta_previa' => 'setFlagConsultaPrevia',
        'tipo_pessoa' => 'setTipoPessoa'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'nome' => 'getNome',
        'descricao' => 'getDescricao',
        'id_estabelecimento' => 'getIdEstabelecimento',
        'id_tipo_origem_comercial' => 'getIdTipoOrigemComercial',
        'id_grupo_origem_comercial' => 'getIdGrupoOrigemComercial',
        'status' => 'getStatus',
        'flag_pre_aprovado' => 'getFlagPreAprovado',
        'flag_aprovacao_imediata' => 'getFlagAprovacaoImediata',
        'nome_fantasia_plastico' => 'getNomeFantasiaPlastico',
        'flag_cartao_provisorio' => 'getFlagCartaoProvisorio',
        'flag_cartao_definitivo' => 'getFlagCartaoDefinitivo',
        'usuario' => 'getUsuario',
        'senha' => 'getSenha',
        'flag_origem_externa' => 'getFlagOrigemExterna',
        'flag_modificado' => 'getFlagModificado',
        'flag_envia_fatura_usuario' => 'getFlagEnviaFaturaUsuario',
        'flag_credito_faturamento' => 'getFlagCreditoFaturamento',
        'flag_concede_limite_provisorio' => 'getFlagConcedeLimiteProvisorio',
        'flag_digitalizar_doc' => 'getFlagDigitalizarDoc',
        'flag_embossing_loja' => 'getFlagEmbossingLoja',
        'flag_consulta_previa' => 'getFlagConsultaPrevia',
        'tipo_pessoa' => 'getTipoPessoa'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $nome Nome da origem comercial
      * @var string
      */
    protected $nome;
    
    /**
      * $descricao Descri\u00C3\u00A7\u00C3\u00A3o da origem comercial
      * @var string
      */
    protected $descricao;
    
    /**
      * $id_estabelecimento Identificador do estabelecimento
      * @var int
      */
    protected $id_estabelecimento;
    
    /**
      * $id_tipo_origem_comercial Identificador do tipo de origem comercial
      * @var int
      */
    protected $id_tipo_origem_comercial;
    
    /**
      * $id_grupo_origem_comercial Identificador do grupo de origem comercial
      * @var int
      */
    protected $id_grupo_origem_comercial;
    
    /**
      * $status Indica o status da origem comercial
      * @var int
      */
    protected $status;
    
    /**
      * $flag_pre_aprovado Indica se permite pr\u00C3\u00A9 aprova\u00C3\u00A7\u00C3\u00A3o
      * @var bool
      */
    protected $flag_pre_aprovado;
    
    /**
      * $flag_aprovacao_imediata Indica se permite aprova\u00C3\u00A7\u00C3\u00A3o imediata
      * @var bool
      */
    protected $flag_aprovacao_imediata;
    
    /**
      * $nome_fantasia_plastico Nome fantasia impresso no pl\u00C3\u00A1stico
      * @var string
      */
    protected $nome_fantasia_plastico;
    
    /**
      * $flag_cartao_provisorio Indica se permite cart\u00C3\u00A3o provis\u00C3\u00B3rio
      * @var bool
      */
    protected $flag_cartao_provisorio;
    
    /**
      * $flag_cartao_definitivo Indica se permite cart\u00C3\u00A3o definitivo
      * @var bool
      */
    protected $flag_cartao_definitivo;
    
    /**
      * $usuario Usu\u00C3\u00A1rio para autentica\u00C3\u00A7\u00C3\u00A3o
      * @var string
      */
    protected $usuario;
    
    /**
      * $senha Senha para autentica\u00C3\u00A7\u00C3\u00A3o
      * @var string
      */
    protected $senha;
    
    /**
      * $flag_origem_externa Indica se \u00C3\u00A9 origem externa
      * @var bool
      */
    protected $flag_origem_externa;
    
    /**
      * $flag_modificado Indica se h\u00C3\u00A1 modifica\u00C3\u00A7\u00C3\u00A3o
      * @var bool
      */
    protected $flag_modificado;
    
    /**
      * $flag_envia_fatura_usuario Indica se envia fatura
      * @var bool
      */
    protected $flag_envia_fatura_usuario;
    
    /**
      * $flag_credito_faturamento Indica se permite cr\u00C3\u00A9dito de faturamento
      * @var bool
      */
    protected $flag_credito_faturamento;
    
    /**
      * $flag_concede_limite_provisorio Indica se concede limite provis\u00C3\u00B3rio
      * @var bool
      */
    protected $flag_concede_limite_provisorio;
    
    /**
      * $flag_digitalizar_doc Indica se digitaliza documento
      * @var bool
      */
    protected $flag_digitalizar_doc;
    
    /**
      * $flag_embossing_loja Indica se realiza embossing em loja
      * @var bool
      */
    protected $flag_embossing_loja;
    
    /**
      * $flag_consulta_previa Indica se realiza consulta pr\u00C3\u00A9via
      * @var bool
      */
    protected $flag_consulta_previa;
    
    /**
      * $tipo_pessoa Tipo de pessoa
      * @var string
      */
    protected $tipo_pessoa;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->nome = $data["nome"];
            $this->descricao = $data["descricao"];
            $this->id_estabelecimento = $data["id_estabelecimento"];
            $this->id_tipo_origem_comercial = $data["id_tipo_origem_comercial"];
            $this->id_grupo_origem_comercial = $data["id_grupo_origem_comercial"];
            $this->status = $data["status"];
            $this->flag_pre_aprovado = $data["flag_pre_aprovado"];
            $this->flag_aprovacao_imediata = $data["flag_aprovacao_imediata"];
            $this->nome_fantasia_plastico = $data["nome_fantasia_plastico"];
            $this->flag_cartao_provisorio = $data["flag_cartao_provisorio"];
            $this->flag_cartao_definitivo = $data["flag_cartao_definitivo"];
            $this->usuario = $data["usuario"];
            $this->senha = $data["senha"];
            $this->flag_origem_externa = $data["flag_origem_externa"];
            $this->flag_modificado = $data["flag_modificado"];
            $this->flag_envia_fatura_usuario = $data["flag_envia_fatura_usuario"];
            $this->flag_credito_faturamento = $data["flag_credito_faturamento"];
            $this->flag_concede_limite_provisorio = $data["flag_concede_limite_provisorio"];
            $this->flag_digitalizar_doc = $data["flag_digitalizar_doc"];
            $this->flag_embossing_loja = $data["flag_embossing_loja"];
            $this->flag_consulta_previa = $data["flag_consulta_previa"];
            $this->tipo_pessoa = $data["tipo_pessoa"];
        }
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
     * @param string $descricao Descri\u00C3\u00A7\u00C3\u00A3o da origem comercial
     * @return $this
     */
    public function setDescricao($descricao)
    {
        
        $this->descricao = $descricao;
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
     * @param int $id_estabelecimento Identificador do estabelecimento
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
     * @param int $id_tipo_origem_comercial Identificador do tipo de origem comercial
     * @return $this
     */
    public function setIdTipoOrigemComercial($id_tipo_origem_comercial)
    {
        
        $this->id_tipo_origem_comercial = $id_tipo_origem_comercial;
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
     * @param int $id_grupo_origem_comercial Identificador do grupo de origem comercial
     * @return $this
     */
    public function setIdGrupoOrigemComercial($id_grupo_origem_comercial)
    {
        
        $this->id_grupo_origem_comercial = $id_grupo_origem_comercial;
        return $this;
    }
    
    /**
     * Gets status
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }
  
    /**
     * Sets status
     * @param int $status Indica o status da origem comercial
     * @return $this
     */
    public function setStatus($status)
    {
        
        $this->status = $status;
        return $this;
    }
    
    /**
     * Gets flag_pre_aprovado
     * @return bool
     */
    public function getFlagPreAprovado()
    {
        return $this->flag_pre_aprovado;
    }
  
    /**
     * Sets flag_pre_aprovado
     * @param bool $flag_pre_aprovado Indica se permite pr\u00C3\u00A9 aprova\u00C3\u00A7\u00C3\u00A3o
     * @return $this
     */
    public function setFlagPreAprovado($flag_pre_aprovado)
    {
        
        $this->flag_pre_aprovado = $flag_pre_aprovado;
        return $this;
    }
    
    /**
     * Gets flag_aprovacao_imediata
     * @return bool
     */
    public function getFlagAprovacaoImediata()
    {
        return $this->flag_aprovacao_imediata;
    }
  
    /**
     * Sets flag_aprovacao_imediata
     * @param bool $flag_aprovacao_imediata Indica se permite aprova\u00C3\u00A7\u00C3\u00A3o imediata
     * @return $this
     */
    public function setFlagAprovacaoImediata($flag_aprovacao_imediata)
    {
        
        $this->flag_aprovacao_imediata = $flag_aprovacao_imediata;
        return $this;
    }
    
    /**
     * Gets nome_fantasia_plastico
     * @return string
     */
    public function getNomeFantasiaPlastico()
    {
        return $this->nome_fantasia_plastico;
    }
  
    /**
     * Sets nome_fantasia_plastico
     * @param string $nome_fantasia_plastico Nome fantasia impresso no pl\u00C3\u00A1stico
     * @return $this
     */
    public function setNomeFantasiaPlastico($nome_fantasia_plastico)
    {
        
        $this->nome_fantasia_plastico = $nome_fantasia_plastico;
        return $this;
    }
    
    /**
     * Gets flag_cartao_provisorio
     * @return bool
     */
    public function getFlagCartaoProvisorio()
    {
        return $this->flag_cartao_provisorio;
    }
  
    /**
     * Sets flag_cartao_provisorio
     * @param bool $flag_cartao_provisorio Indica se permite cart\u00C3\u00A3o provis\u00C3\u00B3rio
     * @return $this
     */
    public function setFlagCartaoProvisorio($flag_cartao_provisorio)
    {
        
        $this->flag_cartao_provisorio = $flag_cartao_provisorio;
        return $this;
    }
    
    /**
     * Gets flag_cartao_definitivo
     * @return bool
     */
    public function getFlagCartaoDefinitivo()
    {
        return $this->flag_cartao_definitivo;
    }
  
    /**
     * Sets flag_cartao_definitivo
     * @param bool $flag_cartao_definitivo Indica se permite cart\u00C3\u00A3o definitivo
     * @return $this
     */
    public function setFlagCartaoDefinitivo($flag_cartao_definitivo)
    {
        
        $this->flag_cartao_definitivo = $flag_cartao_definitivo;
        return $this;
    }
    
    /**
     * Gets usuario
     * @return string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
  
    /**
     * Sets usuario
     * @param string $usuario Usu\u00C3\u00A1rio para autentica\u00C3\u00A7\u00C3\u00A3o
     * @return $this
     */
    public function setUsuario($usuario)
    {
        
        $this->usuario = $usuario;
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
     * @param string $senha Senha para autentica\u00C3\u00A7\u00C3\u00A3o
     * @return $this
     */
    public function setSenha($senha)
    {
        
        $this->senha = $senha;
        return $this;
    }
    
    /**
     * Gets flag_origem_externa
     * @return bool
     */
    public function getFlagOrigemExterna()
    {
        return $this->flag_origem_externa;
    }
  
    /**
     * Sets flag_origem_externa
     * @param bool $flag_origem_externa Indica se \u00C3\u00A9 origem externa
     * @return $this
     */
    public function setFlagOrigemExterna($flag_origem_externa)
    {
        
        $this->flag_origem_externa = $flag_origem_externa;
        return $this;
    }
    
    /**
     * Gets flag_modificado
     * @return bool
     */
    public function getFlagModificado()
    {
        return $this->flag_modificado;
    }
  
    /**
     * Sets flag_modificado
     * @param bool $flag_modificado Indica se h\u00C3\u00A1 modifica\u00C3\u00A7\u00C3\u00A3o
     * @return $this
     */
    public function setFlagModificado($flag_modificado)
    {
        
        $this->flag_modificado = $flag_modificado;
        return $this;
    }
    
    /**
     * Gets flag_envia_fatura_usuario
     * @return bool
     */
    public function getFlagEnviaFaturaUsuario()
    {
        return $this->flag_envia_fatura_usuario;
    }
  
    /**
     * Sets flag_envia_fatura_usuario
     * @param bool $flag_envia_fatura_usuario Indica se envia fatura
     * @return $this
     */
    public function setFlagEnviaFaturaUsuario($flag_envia_fatura_usuario)
    {
        
        $this->flag_envia_fatura_usuario = $flag_envia_fatura_usuario;
        return $this;
    }
    
    /**
     * Gets flag_credito_faturamento
     * @return bool
     */
    public function getFlagCreditoFaturamento()
    {
        return $this->flag_credito_faturamento;
    }
  
    /**
     * Sets flag_credito_faturamento
     * @param bool $flag_credito_faturamento Indica se permite cr\u00C3\u00A9dito de faturamento
     * @return $this
     */
    public function setFlagCreditoFaturamento($flag_credito_faturamento)
    {
        
        $this->flag_credito_faturamento = $flag_credito_faturamento;
        return $this;
    }
    
    /**
     * Gets flag_concede_limite_provisorio
     * @return bool
     */
    public function getFlagConcedeLimiteProvisorio()
    {
        return $this->flag_concede_limite_provisorio;
    }
  
    /**
     * Sets flag_concede_limite_provisorio
     * @param bool $flag_concede_limite_provisorio Indica se concede limite provis\u00C3\u00B3rio
     * @return $this
     */
    public function setFlagConcedeLimiteProvisorio($flag_concede_limite_provisorio)
    {
        
        $this->flag_concede_limite_provisorio = $flag_concede_limite_provisorio;
        return $this;
    }
    
    /**
     * Gets flag_digitalizar_doc
     * @return bool
     */
    public function getFlagDigitalizarDoc()
    {
        return $this->flag_digitalizar_doc;
    }
  
    /**
     * Sets flag_digitalizar_doc
     * @param bool $flag_digitalizar_doc Indica se digitaliza documento
     * @return $this
     */
    public function setFlagDigitalizarDoc($flag_digitalizar_doc)
    {
        
        $this->flag_digitalizar_doc = $flag_digitalizar_doc;
        return $this;
    }
    
    /**
     * Gets flag_embossing_loja
     * @return bool
     */
    public function getFlagEmbossingLoja()
    {
        return $this->flag_embossing_loja;
    }
  
    /**
     * Sets flag_embossing_loja
     * @param bool $flag_embossing_loja Indica se realiza embossing em loja
     * @return $this
     */
    public function setFlagEmbossingLoja($flag_embossing_loja)
    {
        
        $this->flag_embossing_loja = $flag_embossing_loja;
        return $this;
    }
    
    /**
     * Gets flag_consulta_previa
     * @return bool
     */
    public function getFlagConsultaPrevia()
    {
        return $this->flag_consulta_previa;
    }
  
    /**
     * Sets flag_consulta_previa
     * @param bool $flag_consulta_previa Indica se realiza consulta pr\u00C3\u00A9via
     * @return $this
     */
    public function setFlagConsultaPrevia($flag_consulta_previa)
    {
        
        $this->flag_consulta_previa = $flag_consulta_previa;
        return $this;
    }
    
    /**
     * Gets tipo_pessoa
     * @return string
     */
    public function getTipoPessoa()
    {
        return $this->tipo_pessoa;
    }
  
    /**
     * Sets tipo_pessoa
     * @param string $tipo_pessoa Tipo de pessoa
     * @return $this
     */
    public function setTipoPessoa($tipo_pessoa)
    {
        $allowed_values = array("PESSOA_FISICA", "PESSOA_JURIDICA");
        if (!in_array($tipo_pessoa, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'tipo_pessoa', must be one of 'PESSOA_FISICA', 'PESSOA_JURIDICA'");
        }
        $this->tipo_pessoa = $tipo_pessoa;
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
