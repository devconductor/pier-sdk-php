<?php
/**
 * CartaoImpressaoResponse
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
 * CartaoImpressaoResponse Class Doc Comment
 *
 * @category    Class
 * @description Objeto Cart\u00C3\u00A3o para Impresso
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CartaoImpressaoResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id_conta' => 'int',
        'id_pessoa' => 'int',
        'id_cartao' => 'int',
        'id_bandeira' => 'int',
        'id_tipo_cartao' => 'int',
        'numero_cartao' => 'string',
        'nome_plastico' => 'string',
        'cvv2' => 'string',
        'data_geracao' => 'string',
        'data_validade' => 'string',
        'nome_origem_comercial' => 'string',
        'nome_empresa' => 'string',
        'numero_agencia' => 'int',
        'numero_conta_corente' => 'string',
        'nome_empresa_beneficio' => 'string',
        'cpf' => 'string',
        'tipo_portador' => 'string',
        'nome_empregador' => 'string',
        'trilha1' => 'string',
        'trilha2' => 'string',
        'trilha_cvv1' => 'string',
        'trilha_cvv2' => 'string',
        'flag_virtual' => 'int',
        'numero_cartao_hash' => 'int'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id_conta' => 'idConta',
        'id_pessoa' => 'idPessoa',
        'id_cartao' => 'idCartao',
        'id_bandeira' => 'idBandeira',
        'id_tipo_cartao' => 'idTipoCartao',
        'numero_cartao' => 'numeroCartao',
        'nome_plastico' => 'nomePlastico',
        'cvv2' => 'cvv2',
        'data_geracao' => 'dataGeracao',
        'data_validade' => 'dataValidade',
        'nome_origem_comercial' => 'nomeOrigemComercial',
        'nome_empresa' => 'nomeEmpresa',
        'numero_agencia' => 'numeroAgencia',
        'numero_conta_corente' => 'numeroContaCorente',
        'nome_empresa_beneficio' => 'nomeEmpresaBeneficio',
        'cpf' => 'cpf',
        'tipo_portador' => 'tipoPortador',
        'nome_empregador' => 'nomeEmpregador',
        'trilha1' => 'trilha1',
        'trilha2' => 'trilha2',
        'trilha_cvv1' => 'trilhaCVV1',
        'trilha_cvv2' => 'trilhaCVV2',
        'flag_virtual' => 'flagVirtual',
        'numero_cartao_hash' => 'numeroCartaoHash'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id_conta' => 'setIdConta',
        'id_pessoa' => 'setIdPessoa',
        'id_cartao' => 'setIdCartao',
        'id_bandeira' => 'setIdBandeira',
        'id_tipo_cartao' => 'setIdTipoCartao',
        'numero_cartao' => 'setNumeroCartao',
        'nome_plastico' => 'setNomePlastico',
        'cvv2' => 'setCvv2',
        'data_geracao' => 'setDataGeracao',
        'data_validade' => 'setDataValidade',
        'nome_origem_comercial' => 'setNomeOrigemComercial',
        'nome_empresa' => 'setNomeEmpresa',
        'numero_agencia' => 'setNumeroAgencia',
        'numero_conta_corente' => 'setNumeroContaCorente',
        'nome_empresa_beneficio' => 'setNomeEmpresaBeneficio',
        'cpf' => 'setCpf',
        'tipo_portador' => 'setTipoPortador',
        'nome_empregador' => 'setNomeEmpregador',
        'trilha1' => 'setTrilha1',
        'trilha2' => 'setTrilha2',
        'trilha_cvv1' => 'setTrilhaCvv1',
        'trilha_cvv2' => 'setTrilhaCvv2',
        'flag_virtual' => 'setFlagVirtual',
        'numero_cartao_hash' => 'setNumeroCartaoHash'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id_conta' => 'getIdConta',
        'id_pessoa' => 'getIdPessoa',
        'id_cartao' => 'getIdCartao',
        'id_bandeira' => 'getIdBandeira',
        'id_tipo_cartao' => 'getIdTipoCartao',
        'numero_cartao' => 'getNumeroCartao',
        'nome_plastico' => 'getNomePlastico',
        'cvv2' => 'getCvv2',
        'data_geracao' => 'getDataGeracao',
        'data_validade' => 'getDataValidade',
        'nome_origem_comercial' => 'getNomeOrigemComercial',
        'nome_empresa' => 'getNomeEmpresa',
        'numero_agencia' => 'getNumeroAgencia',
        'numero_conta_corente' => 'getNumeroContaCorente',
        'nome_empresa_beneficio' => 'getNomeEmpresaBeneficio',
        'cpf' => 'getCpf',
        'tipo_portador' => 'getTipoPortador',
        'nome_empregador' => 'getNomeEmpregador',
        'trilha1' => 'getTrilha1',
        'trilha2' => 'getTrilha2',
        'trilha_cvv1' => 'getTrilhaCvv1',
        'trilha_cvv2' => 'getTrilhaCvv2',
        'flag_virtual' => 'getFlagVirtual',
        'numero_cartao_hash' => 'getNumeroCartaoHash'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id_conta Apresenta o C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Conta (id) a qual o cart\u00C3\u00A3o gerado pertence.
      * @var int
      */
    protected $id_conta;
    
    /**
      * $id_pessoa Apresenta o C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Pessoa (id) portadora do cart\u00C3\u00A3o gerado.
      * @var int
      */
    protected $id_pessoa;
    
    /**
      * $id_cartao Apresenta o C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o (id) que foi gerado.
      * @var int
      */
    protected $id_cartao;
    
    /**
      * $id_bandeira Apresenta o C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Bandeira (id) a qual o Cart\u00C3\u00A3o pertence, quando bandeirado.
      * @var int
      */
    protected $id_bandeira;
    
    /**
      * $id_tipo_cartao Apresenta o C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo do Cart\u00C3\u00A3o (id) atribu\u00C3\u00ADdo ao Cart\u00C3\u00A3o.
      * @var int
      */
    protected $id_tipo_cartao;
    
    /**
      * $numero_cartao Apresenta o n\u00C3\u00BAmero do cart\u00C3\u00A3o.
      * @var string
      */
    protected $numero_cartao;
    
    /**
      * $nome_plastico Apresenta o nome do Portador do Cart\u00C3\u00A3o.
      * @var string
      */
    protected $nome_plastico;
    
    /**
      * $cvv2 Apresenta o n\u00C3\u00BAmero do CVV a ser impresso no Cart\u00C3\u00A3o
      * @var string
      */
    protected $cvv2;
    
    /**
      * $data_geracao Apresenta a data de emiss\u00C3\u00A3o do Cart\u00C3\u00A3o.
      * @var string
      */
    protected $data_geracao;
    
    /**
      * $data_validade Apresenta a data de Validade do Cart\u00C3\u00A3o.
      * @var string
      */
    protected $data_validade;
    
    /**
      * $nome_origem_comercial Apresenta o nome da Origem Comercial que realizou o cadastro do Titular da Conta a qual o Cart\u00C3\u00A3o pertence.
      * @var string
      */
    protected $nome_origem_comercial;
    
    /**
      * $nome_empresa Apresenta o nome da Empresa (Pessoa Jur\u00C3\u00ADdica) titular do Cart\u00C3\u00A3o, quando aplic\u00C3\u00A1vel.
      * @var string
      */
    protected $nome_empresa;
    
    /**
      * $numero_agencia Apresenta o n\u00C3\u00BAmero da Ag\u00C3\u00AAncia a ser impresso no Cart\u00C3\u00A3o, quando aplic\u00C3\u00A1vel.
      * @var int
      */
    protected $numero_agencia;
    
    /**
      * $numero_conta_corente Apresenta o n\u00C3\u00BAmero da Conta Corrente a ser impresso no Cart\u00C3\u00A3o, quando aplic\u00C3\u00A1vel.
      * @var string
      */
    protected $numero_conta_corente;
    
    /**
      * $nome_empresa_beneficio Apresenta o nome da Pessoa F\u00C3\u00ADsica ou Jur\u00C3\u00ADdica que contratou servi\u00C3\u00A7os de benef\u00C3\u00ADcio para o portador do cart\u00C3\u00A3o, quando aplic\u00C3\u00A1vel.
      * @var string
      */
    protected $nome_empresa_beneficio;
    
    /**
      * $cpf Apresenta o CPF do Portador do Cart\u00C3\u00A3o.
      * @var string
      */
    protected $cpf;
    
    /**
      * $tipo_portador Apresenta o tipo do Portador do cart\u00C3\u00A3o, sendo: ('T': Titular, 'A': Adicional).
      * @var string
      */
    protected $tipo_portador;
    
    /**
      * $nome_empregador Apresenta o nome da Pessoa F\u00C3\u00ADsica ou Jur\u00C3\u00ADdica a ser impresso no cart\u00C3\u00A3o, quando aplic\u00C3\u00A1vel.
      * @var string
      */
    protected $nome_empregador;
    
    /**
      * $trilha1 Apresenta os dados da Trilha1, seguindo as regras de trilha do emissor.
      * @var string
      */
    protected $trilha1;
    
    /**
      * $trilha2 Apresenta os dados da Trilha2, seguindo as regras de trilha do emissor.
      * @var string
      */
    protected $trilha2;
    
    /**
      * $trilha_cvv1 Apresenta os dados da TrilhaCVV01, seguindo as regras de trilha do emissor.
      * @var string
      */
    protected $trilha_cvv1;
    
    /**
      * $trilha_cvv2 Apresenta os dados da TrilhaCVV02, seguindo as regras de trilha do emissor.
      * @var string
      */
    protected $trilha_cvv2;
    
    /**
      * $flag_virtual Apresenta o status que informa se o cart\u00C3\u00A3o \u00C3\u00A9 virtual 
      * @var int
      */
    protected $flag_virtual;
    
    /**
      * $numero_cartao_hash Apresenta o numero da hash do cart\u00C3\u00A3o 
      * @var int
      */
    protected $numero_cartao_hash;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id_conta = $data["id_conta"];
            $this->id_pessoa = $data["id_pessoa"];
            $this->id_cartao = $data["id_cartao"];
            $this->id_bandeira = $data["id_bandeira"];
            $this->id_tipo_cartao = $data["id_tipo_cartao"];
            $this->numero_cartao = $data["numero_cartao"];
            $this->nome_plastico = $data["nome_plastico"];
            $this->cvv2 = $data["cvv2"];
            $this->data_geracao = $data["data_geracao"];
            $this->data_validade = $data["data_validade"];
            $this->nome_origem_comercial = $data["nome_origem_comercial"];
            $this->nome_empresa = $data["nome_empresa"];
            $this->numero_agencia = $data["numero_agencia"];
            $this->numero_conta_corente = $data["numero_conta_corente"];
            $this->nome_empresa_beneficio = $data["nome_empresa_beneficio"];
            $this->cpf = $data["cpf"];
            $this->tipo_portador = $data["tipo_portador"];
            $this->nome_empregador = $data["nome_empregador"];
            $this->trilha1 = $data["trilha1"];
            $this->trilha2 = $data["trilha2"];
            $this->trilha_cvv1 = $data["trilha_cvv1"];
            $this->trilha_cvv2 = $data["trilha_cvv2"];
            $this->flag_virtual = $data["flag_virtual"];
            $this->numero_cartao_hash = $data["numero_cartao_hash"];
        }
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
     * @param int $id_conta Apresenta o C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Conta (id) a qual o cart\u00C3\u00A3o gerado pertence.
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
     * @param int $id_pessoa Apresenta o C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Pessoa (id) portadora do cart\u00C3\u00A3o gerado.
     * @return $this
     */
    public function setIdPessoa($id_pessoa)
    {
        
        $this->id_pessoa = $id_pessoa;
        return $this;
    }
    
    /**
     * Gets id_cartao
     * @return int
     */
    public function getIdCartao()
    {
        return $this->id_cartao;
    }
  
    /**
     * Sets id_cartao
     * @param int $id_cartao Apresenta o C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o (id) que foi gerado.
     * @return $this
     */
    public function setIdCartao($id_cartao)
    {
        
        $this->id_cartao = $id_cartao;
        return $this;
    }
    
    /**
     * Gets id_bandeira
     * @return int
     */
    public function getIdBandeira()
    {
        return $this->id_bandeira;
    }
  
    /**
     * Sets id_bandeira
     * @param int $id_bandeira Apresenta o C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Bandeira (id) a qual o Cart\u00C3\u00A3o pertence, quando bandeirado.
     * @return $this
     */
    public function setIdBandeira($id_bandeira)
    {
        
        $this->id_bandeira = $id_bandeira;
        return $this;
    }
    
    /**
     * Gets id_tipo_cartao
     * @return int
     */
    public function getIdTipoCartao()
    {
        return $this->id_tipo_cartao;
    }
  
    /**
     * Sets id_tipo_cartao
     * @param int $id_tipo_cartao Apresenta o C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo do Cart\u00C3\u00A3o (id) atribu\u00C3\u00ADdo ao Cart\u00C3\u00A3o.
     * @return $this
     */
    public function setIdTipoCartao($id_tipo_cartao)
    {
        
        $this->id_tipo_cartao = $id_tipo_cartao;
        return $this;
    }
    
    /**
     * Gets numero_cartao
     * @return string
     */
    public function getNumeroCartao()
    {
        return $this->numero_cartao;
    }
  
    /**
     * Sets numero_cartao
     * @param string $numero_cartao Apresenta o n\u00C3\u00BAmero do cart\u00C3\u00A3o.
     * @return $this
     */
    public function setNumeroCartao($numero_cartao)
    {
        
        $this->numero_cartao = $numero_cartao;
        return $this;
    }
    
    /**
     * Gets nome_plastico
     * @return string
     */
    public function getNomePlastico()
    {
        return $this->nome_plastico;
    }
  
    /**
     * Sets nome_plastico
     * @param string $nome_plastico Apresenta o nome do Portador do Cart\u00C3\u00A3o.
     * @return $this
     */
    public function setNomePlastico($nome_plastico)
    {
        
        $this->nome_plastico = $nome_plastico;
        return $this;
    }
    
    /**
     * Gets cvv2
     * @return string
     */
    public function getCvv2()
    {
        return $this->cvv2;
    }
  
    /**
     * Sets cvv2
     * @param string $cvv2 Apresenta o n\u00C3\u00BAmero do CVV a ser impresso no Cart\u00C3\u00A3o
     * @return $this
     */
    public function setCvv2($cvv2)
    {
        
        $this->cvv2 = $cvv2;
        return $this;
    }
    
    /**
     * Gets data_geracao
     * @return string
     */
    public function getDataGeracao()
    {
        return $this->data_geracao;
    }
  
    /**
     * Sets data_geracao
     * @param string $data_geracao Apresenta a data de emiss\u00C3\u00A3o do Cart\u00C3\u00A3o.
     * @return $this
     */
    public function setDataGeracao($data_geracao)
    {
        
        $this->data_geracao = $data_geracao;
        return $this;
    }
    
    /**
     * Gets data_validade
     * @return string
     */
    public function getDataValidade()
    {
        return $this->data_validade;
    }
  
    /**
     * Sets data_validade
     * @param string $data_validade Apresenta a data de Validade do Cart\u00C3\u00A3o.
     * @return $this
     */
    public function setDataValidade($data_validade)
    {
        
        $this->data_validade = $data_validade;
        return $this;
    }
    
    /**
     * Gets nome_origem_comercial
     * @return string
     */
    public function getNomeOrigemComercial()
    {
        return $this->nome_origem_comercial;
    }
  
    /**
     * Sets nome_origem_comercial
     * @param string $nome_origem_comercial Apresenta o nome da Origem Comercial que realizou o cadastro do Titular da Conta a qual o Cart\u00C3\u00A3o pertence.
     * @return $this
     */
    public function setNomeOrigemComercial($nome_origem_comercial)
    {
        
        $this->nome_origem_comercial = $nome_origem_comercial;
        return $this;
    }
    
    /**
     * Gets nome_empresa
     * @return string
     */
    public function getNomeEmpresa()
    {
        return $this->nome_empresa;
    }
  
    /**
     * Sets nome_empresa
     * @param string $nome_empresa Apresenta o nome da Empresa (Pessoa Jur\u00C3\u00ADdica) titular do Cart\u00C3\u00A3o, quando aplic\u00C3\u00A1vel.
     * @return $this
     */
    public function setNomeEmpresa($nome_empresa)
    {
        
        $this->nome_empresa = $nome_empresa;
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
     * @param int $numero_agencia Apresenta o n\u00C3\u00BAmero da Ag\u00C3\u00AAncia a ser impresso no Cart\u00C3\u00A3o, quando aplic\u00C3\u00A1vel.
     * @return $this
     */
    public function setNumeroAgencia($numero_agencia)
    {
        
        $this->numero_agencia = $numero_agencia;
        return $this;
    }
    
    /**
     * Gets numero_conta_corente
     * @return string
     */
    public function getNumeroContaCorente()
    {
        return $this->numero_conta_corente;
    }
  
    /**
     * Sets numero_conta_corente
     * @param string $numero_conta_corente Apresenta o n\u00C3\u00BAmero da Conta Corrente a ser impresso no Cart\u00C3\u00A3o, quando aplic\u00C3\u00A1vel.
     * @return $this
     */
    public function setNumeroContaCorente($numero_conta_corente)
    {
        
        $this->numero_conta_corente = $numero_conta_corente;
        return $this;
    }
    
    /**
     * Gets nome_empresa_beneficio
     * @return string
     */
    public function getNomeEmpresaBeneficio()
    {
        return $this->nome_empresa_beneficio;
    }
  
    /**
     * Sets nome_empresa_beneficio
     * @param string $nome_empresa_beneficio Apresenta o nome da Pessoa F\u00C3\u00ADsica ou Jur\u00C3\u00ADdica que contratou servi\u00C3\u00A7os de benef\u00C3\u00ADcio para o portador do cart\u00C3\u00A3o, quando aplic\u00C3\u00A1vel.
     * @return $this
     */
    public function setNomeEmpresaBeneficio($nome_empresa_beneficio)
    {
        
        $this->nome_empresa_beneficio = $nome_empresa_beneficio;
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
     * @param string $cpf Apresenta o CPF do Portador do Cart\u00C3\u00A3o.
     * @return $this
     */
    public function setCpf($cpf)
    {
        
        $this->cpf = $cpf;
        return $this;
    }
    
    /**
     * Gets tipo_portador
     * @return string
     */
    public function getTipoPortador()
    {
        return $this->tipo_portador;
    }
  
    /**
     * Sets tipo_portador
     * @param string $tipo_portador Apresenta o tipo do Portador do cart\u00C3\u00A3o, sendo: ('T': Titular, 'A': Adicional).
     * @return $this
     */
    public function setTipoPortador($tipo_portador)
    {
        
        $this->tipo_portador = $tipo_portador;
        return $this;
    }
    
    /**
     * Gets nome_empregador
     * @return string
     */
    public function getNomeEmpregador()
    {
        return $this->nome_empregador;
    }
  
    /**
     * Sets nome_empregador
     * @param string $nome_empregador Apresenta o nome da Pessoa F\u00C3\u00ADsica ou Jur\u00C3\u00ADdica a ser impresso no cart\u00C3\u00A3o, quando aplic\u00C3\u00A1vel.
     * @return $this
     */
    public function setNomeEmpregador($nome_empregador)
    {
        
        $this->nome_empregador = $nome_empregador;
        return $this;
    }
    
    /**
     * Gets trilha1
     * @return string
     */
    public function getTrilha1()
    {
        return $this->trilha1;
    }
  
    /**
     * Sets trilha1
     * @param string $trilha1 Apresenta os dados da Trilha1, seguindo as regras de trilha do emissor.
     * @return $this
     */
    public function setTrilha1($trilha1)
    {
        
        $this->trilha1 = $trilha1;
        return $this;
    }
    
    /**
     * Gets trilha2
     * @return string
     */
    public function getTrilha2()
    {
        return $this->trilha2;
    }
  
    /**
     * Sets trilha2
     * @param string $trilha2 Apresenta os dados da Trilha2, seguindo as regras de trilha do emissor.
     * @return $this
     */
    public function setTrilha2($trilha2)
    {
        
        $this->trilha2 = $trilha2;
        return $this;
    }
    
    /**
     * Gets trilha_cvv1
     * @return string
     */
    public function getTrilhaCvv1()
    {
        return $this->trilha_cvv1;
    }
  
    /**
     * Sets trilha_cvv1
     * @param string $trilha_cvv1 Apresenta os dados da TrilhaCVV01, seguindo as regras de trilha do emissor.
     * @return $this
     */
    public function setTrilhaCvv1($trilha_cvv1)
    {
        
        $this->trilha_cvv1 = $trilha_cvv1;
        return $this;
    }
    
    /**
     * Gets trilha_cvv2
     * @return string
     */
    public function getTrilhaCvv2()
    {
        return $this->trilha_cvv2;
    }
  
    /**
     * Sets trilha_cvv2
     * @param string $trilha_cvv2 Apresenta os dados da TrilhaCVV02, seguindo as regras de trilha do emissor.
     * @return $this
     */
    public function setTrilhaCvv2($trilha_cvv2)
    {
        
        $this->trilha_cvv2 = $trilha_cvv2;
        return $this;
    }
    
    /**
     * Gets flag_virtual
     * @return int
     */
    public function getFlagVirtual()
    {
        return $this->flag_virtual;
    }
  
    /**
     * Sets flag_virtual
     * @param int $flag_virtual Apresenta o status que informa se o cart\u00C3\u00A3o \u00C3\u00A9 virtual 
     * @return $this
     */
    public function setFlagVirtual($flag_virtual)
    {
        
        $this->flag_virtual = $flag_virtual;
        return $this;
    }
    
    /**
     * Gets numero_cartao_hash
     * @return int
     */
    public function getNumeroCartaoHash()
    {
        return $this->numero_cartao_hash;
    }
  
    /**
     * Sets numero_cartao_hash
     * @param int $numero_cartao_hash Apresenta o numero da hash do cart\u00C3\u00A3o 
     * @return $this
     */
    public function setNumeroCartaoHash($numero_cartao_hash)
    {
        
        $this->numero_cartao_hash = $numero_cartao_hash;
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
