<?php
/**
 * GrupoEconomicoDTO
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
 * GrupoEconomicoDTO Class Doc Comment
 *
 * @category    Class
 * @description {{{grupo_economico_d_t_o_description}}}
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GrupoEconomicoDTO implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'razao_social' => 'string',
        'nome_credor' => 'string',
        'numero_receita_federal' => 'string',
        'inscricao_estadual' => 'string',
        'contato' => 'string',
        'banco' => 'int',
        'agencia' => 'int',
        'digito_agencia' => 'string',
        'conta_corrente' => 'string',
        'digito_conta_corrente' => 'string',
        'periodicidade' => 'string',
        'pagamento_semanal' => 'string',
        'pagamento_mensal' => 'int',
        'pagamento_decendial_primeiro' => 'int',
        'pagamento_decendial_segundo' => 'int',
        'pagamento_decendial_terceiro' => 'int',
        'pagamento_quinzenal_primeiro' => 'int',
        'pagamento_quinzenal_segundo' => 'int',
        'id_credor_rav' => 'int',
        'percentual_rav' => 'Number',
        'recebe_rav' => 'string',
        'percentual_multiplica' => 'Number',
        'taxa_adm' => 'Number',
        'taxa_banco' => 'Number',
        'limite_rav' => 'Number'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'razao_social' => 'razaoSocial',
        'nome_credor' => 'nomeCredor',
        'numero_receita_federal' => 'numeroReceitaFederal',
        'inscricao_estadual' => 'inscricaoEstadual',
        'contato' => 'contato',
        'banco' => 'banco',
        'agencia' => 'agencia',
        'digito_agencia' => 'digitoAgencia',
        'conta_corrente' => 'contaCorrente',
        'digito_conta_corrente' => 'digitoContaCorrente',
        'periodicidade' => 'periodicidade',
        'pagamento_semanal' => 'pagamentoSemanal',
        'pagamento_mensal' => 'pagamentoMensal',
        'pagamento_decendial_primeiro' => 'pagamentoDecendialPrimeiro',
        'pagamento_decendial_segundo' => 'pagamentoDecendialSegundo',
        'pagamento_decendial_terceiro' => 'pagamentoDecendialTerceiro',
        'pagamento_quinzenal_primeiro' => 'pagamentoQuinzenalPrimeiro',
        'pagamento_quinzenal_segundo' => 'pagamentoQuinzenalSegundo',
        'id_credor_rav' => 'idCredorRAV',
        'percentual_rav' => 'percentualRAV',
        'recebe_rav' => 'recebeRAV',
        'percentual_multiplica' => 'percentualMultiplica',
        'taxa_adm' => 'taxaAdm',
        'taxa_banco' => 'taxaBanco',
        'limite_rav' => 'limiteRAV'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'razao_social' => 'setRazaoSocial',
        'nome_credor' => 'setNomeCredor',
        'numero_receita_federal' => 'setNumeroReceitaFederal',
        'inscricao_estadual' => 'setInscricaoEstadual',
        'contato' => 'setContato',
        'banco' => 'setBanco',
        'agencia' => 'setAgencia',
        'digito_agencia' => 'setDigitoAgencia',
        'conta_corrente' => 'setContaCorrente',
        'digito_conta_corrente' => 'setDigitoContaCorrente',
        'periodicidade' => 'setPeriodicidade',
        'pagamento_semanal' => 'setPagamentoSemanal',
        'pagamento_mensal' => 'setPagamentoMensal',
        'pagamento_decendial_primeiro' => 'setPagamentoDecendialPrimeiro',
        'pagamento_decendial_segundo' => 'setPagamentoDecendialSegundo',
        'pagamento_decendial_terceiro' => 'setPagamentoDecendialTerceiro',
        'pagamento_quinzenal_primeiro' => 'setPagamentoQuinzenalPrimeiro',
        'pagamento_quinzenal_segundo' => 'setPagamentoQuinzenalSegundo',
        'id_credor_rav' => 'setIdCredorRav',
        'percentual_rav' => 'setPercentualRav',
        'recebe_rav' => 'setRecebeRav',
        'percentual_multiplica' => 'setPercentualMultiplica',
        'taxa_adm' => 'setTaxaAdm',
        'taxa_banco' => 'setTaxaBanco',
        'limite_rav' => 'setLimiteRav'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'razao_social' => 'getRazaoSocial',
        'nome_credor' => 'getNomeCredor',
        'numero_receita_federal' => 'getNumeroReceitaFederal',
        'inscricao_estadual' => 'getInscricaoEstadual',
        'contato' => 'getContato',
        'banco' => 'getBanco',
        'agencia' => 'getAgencia',
        'digito_agencia' => 'getDigitoAgencia',
        'conta_corrente' => 'getContaCorrente',
        'digito_conta_corrente' => 'getDigitoContaCorrente',
        'periodicidade' => 'getPeriodicidade',
        'pagamento_semanal' => 'getPagamentoSemanal',
        'pagamento_mensal' => 'getPagamentoMensal',
        'pagamento_decendial_primeiro' => 'getPagamentoDecendialPrimeiro',
        'pagamento_decendial_segundo' => 'getPagamentoDecendialSegundo',
        'pagamento_decendial_terceiro' => 'getPagamentoDecendialTerceiro',
        'pagamento_quinzenal_primeiro' => 'getPagamentoQuinzenalPrimeiro',
        'pagamento_quinzenal_segundo' => 'getPagamentoQuinzenalSegundo',
        'id_credor_rav' => 'getIdCredorRav',
        'percentual_rav' => 'getPercentualRav',
        'recebe_rav' => 'getRecebeRav',
        'percentual_multiplica' => 'getPercentualMultiplica',
        'taxa_adm' => 'getTaxaAdm',
        'taxa_banco' => 'getTaxaBanco',
        'limite_rav' => 'getLimiteRav'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $razao_social {{{grupo_economico_d_t_o_razao_social_value}}}
      * @var string
      */
    protected $razao_social;
    
    /**
      * $nome_credor {{{grupo_economico_d_t_o_nome_credor_value}}}
      * @var string
      */
    protected $nome_credor;
    
    /**
      * $numero_receita_federal {{{grupo_economico_d_t_o_numero_receita_federal_value}}}
      * @var string
      */
    protected $numero_receita_federal;
    
    /**
      * $inscricao_estadual {{{grupo_economico_d_t_o_inscricao_estadual_value}}}
      * @var string
      */
    protected $inscricao_estadual;
    
    /**
      * $contato {{{grupo_economico_d_t_o_contato_value}}}
      * @var string
      */
    protected $contato;
    
    /**
      * $banco {{{grupo_economico_d_t_o_banco_value}}}
      * @var int
      */
    protected $banco;
    
    /**
      * $agencia {{{grupo_economico_d_t_o_agencia_value}}}
      * @var int
      */
    protected $agencia;
    
    /**
      * $digito_agencia {{{grupo_economico_d_t_o_digito_agencia_value}}}
      * @var string
      */
    protected $digito_agencia;
    
    /**
      * $conta_corrente {{{grupo_economico_d_t_o_conta_corrente_value}}}
      * @var string
      */
    protected $conta_corrente;
    
    /**
      * $digito_conta_corrente {{{grupo_economico_d_t_o_digito_conta_corrente_value}}}
      * @var string
      */
    protected $digito_conta_corrente;
    
    /**
      * $periodicidade {{{grupo_economico_d_t_o_periodicidade_value}}}
      * @var string
      */
    protected $periodicidade;
    
    /**
      * $pagamento_semanal {{{grupo_economico_d_t_o_pagamento_semanal_value}}}
      * @var string
      */
    protected $pagamento_semanal;
    
    /**
      * $pagamento_mensal {{{grupo_economico_d_t_o_pagamento_mensal_value}}}
      * @var int
      */
    protected $pagamento_mensal;
    
    /**
      * $pagamento_decendial_primeiro {{{grupo_economico_d_t_o_pagamento_decendial_primeiro_value}}}
      * @var int
      */
    protected $pagamento_decendial_primeiro;
    
    /**
      * $pagamento_decendial_segundo {{{grupo_economico_d_t_o_pagamento_decendial_segundo_value}}}
      * @var int
      */
    protected $pagamento_decendial_segundo;
    
    /**
      * $pagamento_decendial_terceiro {{{grupo_economico_d_t_o_pagamento_decendial_terceiro_value}}}
      * @var int
      */
    protected $pagamento_decendial_terceiro;
    
    /**
      * $pagamento_quinzenal_primeiro {{{grupo_economico_d_t_o_pagamento_quinzenal_primeiro_value}}}
      * @var int
      */
    protected $pagamento_quinzenal_primeiro;
    
    /**
      * $pagamento_quinzenal_segundo {{{grupo_economico_d_t_o_pagamento_quinzenal_segundo_value}}}
      * @var int
      */
    protected $pagamento_quinzenal_segundo;
    
    /**
      * $id_credor_rav {{{grupo_economico_d_t_o_id_credor_r_a_v_value}}}
      * @var int
      */
    protected $id_credor_rav;
    
    /**
      * $percentual_rav {{{grupo_economico_d_t_o_percentual_r_a_v_value}}}
      * @var Number
      */
    protected $percentual_rav;
    
    /**
      * $recebe_rav {{{grupo_economico_d_t_o_recebe_r_a_v_value}}}
      * @var string
      */
    protected $recebe_rav;
    
    /**
      * $percentual_multiplica {{{grupo_economico_d_t_o_percentual_multiplica_value}}}
      * @var Number
      */
    protected $percentual_multiplica;
    
    /**
      * $taxa_adm {{{grupo_economico_d_t_o_taxa_adm_value}}}
      * @var Number
      */
    protected $taxa_adm;
    
    /**
      * $taxa_banco {{{grupo_economico_d_t_o_taxa_banco_value}}}
      * @var Number
      */
    protected $taxa_banco;
    
    /**
      * $limite_rav {{{grupo_economico_d_t_o_limite_r_a_v_value}}}
      * @var Number
      */
    protected $limite_rav;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->razao_social = $data["razao_social"];
            $this->nome_credor = $data["nome_credor"];
            $this->numero_receita_federal = $data["numero_receita_federal"];
            $this->inscricao_estadual = $data["inscricao_estadual"];
            $this->contato = $data["contato"];
            $this->banco = $data["banco"];
            $this->agencia = $data["agencia"];
            $this->digito_agencia = $data["digito_agencia"];
            $this->conta_corrente = $data["conta_corrente"];
            $this->digito_conta_corrente = $data["digito_conta_corrente"];
            $this->periodicidade = $data["periodicidade"];
            $this->pagamento_semanal = $data["pagamento_semanal"];
            $this->pagamento_mensal = $data["pagamento_mensal"];
            $this->pagamento_decendial_primeiro = $data["pagamento_decendial_primeiro"];
            $this->pagamento_decendial_segundo = $data["pagamento_decendial_segundo"];
            $this->pagamento_decendial_terceiro = $data["pagamento_decendial_terceiro"];
            $this->pagamento_quinzenal_primeiro = $data["pagamento_quinzenal_primeiro"];
            $this->pagamento_quinzenal_segundo = $data["pagamento_quinzenal_segundo"];
            $this->id_credor_rav = $data["id_credor_rav"];
            $this->percentual_rav = $data["percentual_rav"];
            $this->recebe_rav = $data["recebe_rav"];
            $this->percentual_multiplica = $data["percentual_multiplica"];
            $this->taxa_adm = $data["taxa_adm"];
            $this->taxa_banco = $data["taxa_banco"];
            $this->limite_rav = $data["limite_rav"];
        }
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
     * @param string $razao_social {{{grupo_economico_d_t_o_razao_social_value}}}
     * @return $this
     */
    public function setRazaoSocial($razao_social)
    {
        
        $this->razao_social = $razao_social;
        return $this;
    }
    
    /**
     * Gets nome_credor
     * @return string
     */
    public function getNomeCredor()
    {
        return $this->nome_credor;
    }
  
    /**
     * Sets nome_credor
     * @param string $nome_credor {{{grupo_economico_d_t_o_nome_credor_value}}}
     * @return $this
     */
    public function setNomeCredor($nome_credor)
    {
        
        $this->nome_credor = $nome_credor;
        return $this;
    }
    
    /**
     * Gets numero_receita_federal
     * @return string
     */
    public function getNumeroReceitaFederal()
    {
        return $this->numero_receita_federal;
    }
  
    /**
     * Sets numero_receita_federal
     * @param string $numero_receita_federal {{{grupo_economico_d_t_o_numero_receita_federal_value}}}
     * @return $this
     */
    public function setNumeroReceitaFederal($numero_receita_federal)
    {
        
        $this->numero_receita_federal = $numero_receita_federal;
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
     * @param string $inscricao_estadual {{{grupo_economico_d_t_o_inscricao_estadual_value}}}
     * @return $this
     */
    public function setInscricaoEstadual($inscricao_estadual)
    {
        
        $this->inscricao_estadual = $inscricao_estadual;
        return $this;
    }
    
    /**
     * Gets contato
     * @return string
     */
    public function getContato()
    {
        return $this->contato;
    }
  
    /**
     * Sets contato
     * @param string $contato {{{grupo_economico_d_t_o_contato_value}}}
     * @return $this
     */
    public function setContato($contato)
    {
        
        $this->contato = $contato;
        return $this;
    }
    
    /**
     * Gets banco
     * @return int
     */
    public function getBanco()
    {
        return $this->banco;
    }
  
    /**
     * Sets banco
     * @param int $banco {{{grupo_economico_d_t_o_banco_value}}}
     * @return $this
     */
    public function setBanco($banco)
    {
        
        $this->banco = $banco;
        return $this;
    }
    
    /**
     * Gets agencia
     * @return int
     */
    public function getAgencia()
    {
        return $this->agencia;
    }
  
    /**
     * Sets agencia
     * @param int $agencia {{{grupo_economico_d_t_o_agencia_value}}}
     * @return $this
     */
    public function setAgencia($agencia)
    {
        
        $this->agencia = $agencia;
        return $this;
    }
    
    /**
     * Gets digito_agencia
     * @return string
     */
    public function getDigitoAgencia()
    {
        return $this->digito_agencia;
    }
  
    /**
     * Sets digito_agencia
     * @param string $digito_agencia {{{grupo_economico_d_t_o_digito_agencia_value}}}
     * @return $this
     */
    public function setDigitoAgencia($digito_agencia)
    {
        
        $this->digito_agencia = $digito_agencia;
        return $this;
    }
    
    /**
     * Gets conta_corrente
     * @return string
     */
    public function getContaCorrente()
    {
        return $this->conta_corrente;
    }
  
    /**
     * Sets conta_corrente
     * @param string $conta_corrente {{{grupo_economico_d_t_o_conta_corrente_value}}}
     * @return $this
     */
    public function setContaCorrente($conta_corrente)
    {
        
        $this->conta_corrente = $conta_corrente;
        return $this;
    }
    
    /**
     * Gets digito_conta_corrente
     * @return string
     */
    public function getDigitoContaCorrente()
    {
        return $this->digito_conta_corrente;
    }
  
    /**
     * Sets digito_conta_corrente
     * @param string $digito_conta_corrente {{{grupo_economico_d_t_o_digito_conta_corrente_value}}}
     * @return $this
     */
    public function setDigitoContaCorrente($digito_conta_corrente)
    {
        
        $this->digito_conta_corrente = $digito_conta_corrente;
        return $this;
    }
    
    /**
     * Gets periodicidade
     * @return string
     */
    public function getPeriodicidade()
    {
        return $this->periodicidade;
    }
  
    /**
     * Sets periodicidade
     * @param string $periodicidade {{{grupo_economico_d_t_o_periodicidade_value}}}
     * @return $this
     */
    public function setPeriodicidade($periodicidade)
    {
        $allowed_values = array("DIARIO", "SEMANAL", "MENSAL", "DECENDIAL", "QUINZENAL");
        if (!in_array($periodicidade, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'periodicidade', must be one of 'DIARIO', 'SEMANAL', 'MENSAL', 'DECENDIAL', 'QUINZENAL'");
        }
        $this->periodicidade = $periodicidade;
        return $this;
    }
    
    /**
     * Gets pagamento_semanal
     * @return string
     */
    public function getPagamentoSemanal()
    {
        return $this->pagamento_semanal;
    }
  
    /**
     * Sets pagamento_semanal
     * @param string $pagamento_semanal {{{grupo_economico_d_t_o_pagamento_semanal_value}}}
     * @return $this
     */
    public function setPagamentoSemanal($pagamento_semanal)
    {
        $allowed_values = array("SEGUNDA", "TERCA", "QUARTA", "QUINTA", "SEXTA", "SABADO", "DOMINGO");
        if (!in_array($pagamento_semanal, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'pagamento_semanal', must be one of 'SEGUNDA', 'TERCA', 'QUARTA', 'QUINTA', 'SEXTA', 'SABADO', 'DOMINGO'");
        }
        $this->pagamento_semanal = $pagamento_semanal;
        return $this;
    }
    
    /**
     * Gets pagamento_mensal
     * @return int
     */
    public function getPagamentoMensal()
    {
        return $this->pagamento_mensal;
    }
  
    /**
     * Sets pagamento_mensal
     * @param int $pagamento_mensal {{{grupo_economico_d_t_o_pagamento_mensal_value}}}
     * @return $this
     */
    public function setPagamentoMensal($pagamento_mensal)
    {
        
        $this->pagamento_mensal = $pagamento_mensal;
        return $this;
    }
    
    /**
     * Gets pagamento_decendial_primeiro
     * @return int
     */
    public function getPagamentoDecendialPrimeiro()
    {
        return $this->pagamento_decendial_primeiro;
    }
  
    /**
     * Sets pagamento_decendial_primeiro
     * @param int $pagamento_decendial_primeiro {{{grupo_economico_d_t_o_pagamento_decendial_primeiro_value}}}
     * @return $this
     */
    public function setPagamentoDecendialPrimeiro($pagamento_decendial_primeiro)
    {
        
        $this->pagamento_decendial_primeiro = $pagamento_decendial_primeiro;
        return $this;
    }
    
    /**
     * Gets pagamento_decendial_segundo
     * @return int
     */
    public function getPagamentoDecendialSegundo()
    {
        return $this->pagamento_decendial_segundo;
    }
  
    /**
     * Sets pagamento_decendial_segundo
     * @param int $pagamento_decendial_segundo {{{grupo_economico_d_t_o_pagamento_decendial_segundo_value}}}
     * @return $this
     */
    public function setPagamentoDecendialSegundo($pagamento_decendial_segundo)
    {
        
        $this->pagamento_decendial_segundo = $pagamento_decendial_segundo;
        return $this;
    }
    
    /**
     * Gets pagamento_decendial_terceiro
     * @return int
     */
    public function getPagamentoDecendialTerceiro()
    {
        return $this->pagamento_decendial_terceiro;
    }
  
    /**
     * Sets pagamento_decendial_terceiro
     * @param int $pagamento_decendial_terceiro {{{grupo_economico_d_t_o_pagamento_decendial_terceiro_value}}}
     * @return $this
     */
    public function setPagamentoDecendialTerceiro($pagamento_decendial_terceiro)
    {
        
        $this->pagamento_decendial_terceiro = $pagamento_decendial_terceiro;
        return $this;
    }
    
    /**
     * Gets pagamento_quinzenal_primeiro
     * @return int
     */
    public function getPagamentoQuinzenalPrimeiro()
    {
        return $this->pagamento_quinzenal_primeiro;
    }
  
    /**
     * Sets pagamento_quinzenal_primeiro
     * @param int $pagamento_quinzenal_primeiro {{{grupo_economico_d_t_o_pagamento_quinzenal_primeiro_value}}}
     * @return $this
     */
    public function setPagamentoQuinzenalPrimeiro($pagamento_quinzenal_primeiro)
    {
        
        $this->pagamento_quinzenal_primeiro = $pagamento_quinzenal_primeiro;
        return $this;
    }
    
    /**
     * Gets pagamento_quinzenal_segundo
     * @return int
     */
    public function getPagamentoQuinzenalSegundo()
    {
        return $this->pagamento_quinzenal_segundo;
    }
  
    /**
     * Sets pagamento_quinzenal_segundo
     * @param int $pagamento_quinzenal_segundo {{{grupo_economico_d_t_o_pagamento_quinzenal_segundo_value}}}
     * @return $this
     */
    public function setPagamentoQuinzenalSegundo($pagamento_quinzenal_segundo)
    {
        
        $this->pagamento_quinzenal_segundo = $pagamento_quinzenal_segundo;
        return $this;
    }
    
    /**
     * Gets id_credor_rav
     * @return int
     */
    public function getIdCredorRav()
    {
        return $this->id_credor_rav;
    }
  
    /**
     * Sets id_credor_rav
     * @param int $id_credor_rav {{{grupo_economico_d_t_o_id_credor_r_a_v_value}}}
     * @return $this
     */
    public function setIdCredorRav($id_credor_rav)
    {
        
        $this->id_credor_rav = $id_credor_rav;
        return $this;
    }
    
    /**
     * Gets percentual_rav
     * @return Number
     */
    public function getPercentualRav()
    {
        return $this->percentual_rav;
    }
  
    /**
     * Sets percentual_rav
     * @param Number $percentual_rav {{{grupo_economico_d_t_o_percentual_r_a_v_value}}}
     * @return $this
     */
    public function setPercentualRav($percentual_rav)
    {
        
        $this->percentual_rav = $percentual_rav;
        return $this;
    }
    
    /**
     * Gets recebe_rav
     * @return string
     */
    public function getRecebeRav()
    {
        return $this->recebe_rav;
    }
  
    /**
     * Sets recebe_rav
     * @param string $recebe_rav {{{grupo_economico_d_t_o_recebe_r_a_v_value}}}
     * @return $this
     */
    public function setRecebeRav($recebe_rav)
    {
        $allowed_values = array("NAO_TEM_PERMISSAO_RAV", "CREDITO_RAV", "DEBITO_RAV");
        if (!in_array($recebe_rav, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'recebe_rav', must be one of 'NAO_TEM_PERMISSAO_RAV', 'CREDITO_RAV', 'DEBITO_RAV'");
        }
        $this->recebe_rav = $recebe_rav;
        return $this;
    }
    
    /**
     * Gets percentual_multiplica
     * @return Number
     */
    public function getPercentualMultiplica()
    {
        return $this->percentual_multiplica;
    }
  
    /**
     * Sets percentual_multiplica
     * @param Number $percentual_multiplica {{{grupo_economico_d_t_o_percentual_multiplica_value}}}
     * @return $this
     */
    public function setPercentualMultiplica($percentual_multiplica)
    {
        
        $this->percentual_multiplica = $percentual_multiplica;
        return $this;
    }
    
    /**
     * Gets taxa_adm
     * @return Number
     */
    public function getTaxaAdm()
    {
        return $this->taxa_adm;
    }
  
    /**
     * Sets taxa_adm
     * @param Number $taxa_adm {{{grupo_economico_d_t_o_taxa_adm_value}}}
     * @return $this
     */
    public function setTaxaAdm($taxa_adm)
    {
        
        $this->taxa_adm = $taxa_adm;
        return $this;
    }
    
    /**
     * Gets taxa_banco
     * @return Number
     */
    public function getTaxaBanco()
    {
        return $this->taxa_banco;
    }
  
    /**
     * Sets taxa_banco
     * @param Number $taxa_banco {{{grupo_economico_d_t_o_taxa_banco_value}}}
     * @return $this
     */
    public function setTaxaBanco($taxa_banco)
    {
        
        $this->taxa_banco = $taxa_banco;
        return $this;
    }
    
    /**
     * Gets limite_rav
     * @return Number
     */
    public function getLimiteRav()
    {
        return $this->limite_rav;
    }
  
    /**
     * Sets limite_rav
     * @param Number $limite_rav {{{grupo_economico_d_t_o_limite_r_a_v_value}}}
     * @return $this
     */
    public function setLimiteRav($limite_rav)
    {
        
        $this->limite_rav = $limite_rav;
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
