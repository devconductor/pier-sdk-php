<?php
/**
 * FaturaFechadaResponse
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
 * FaturaFechadaResponse Class Doc Comment
 *
 * @category    Class
 * @description Fatura
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class FaturaFechadaResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'id_conta' => 'int',
        'flag_emite_fatura' => 'int',
        'data_vencimento_fatura' => 'string',
        'valor_total_fatura' => 'Number',
        'valor_fatura_anterior' => 'Number',
        'valor_pagamento_minimo' => 'Number',
        'total_compras_nacionais' => 'Number',
        'total_compras_internacionas' => 'Number',
        'total_saques_nacionais' => 'Number',
        'total_saques_internacionais' => 'Number',
        'total_debitos_nacionais' => 'Number',
        'total_debitos_recorrentes' => 'Number',
        'total_debitos_internacionais' => 'Number',
        'total_debitos_diversos_nacionais' => 'Number',
        'total_debitos_opcionais' => 'Number',
        'total_pagamentos' => 'Number',
        'total_creditos_nacionais' => 'Number',
        'total_ajustes' => 'Number',
        'total_tarifas' => 'Number',
        'total_multa' => 'Number',
        'total_juros' => 'Number',
        'taxa_rotativo' => 'Number',
        'taxa_saque' => 'Number',
        'taxa_maxima_proximo_periodo' => 'Number',
        'total_servicos' => 'Number',
        'total_parcelado_nacionais' => 'Number',
        'total_parcelado_internacionais' => 'Number'
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
        'id_conta' => 'idConta',
        'flag_emite_fatura' => 'flagEmiteFatura',
        'data_vencimento_fatura' => 'dataVencimentoFatura',
        'valor_total_fatura' => 'valorTotalFatura',
        'valor_fatura_anterior' => 'valorFaturaAnterior',
        'valor_pagamento_minimo' => 'valorPagamentoMinimo',
        'total_compras_nacionais' => 'totalComprasNacionais',
        'total_compras_internacionas' => 'totalComprasInternacionas',
        'total_saques_nacionais' => 'totalSaquesNacionais',
        'total_saques_internacionais' => 'totalSaquesInternacionais',
        'total_debitos_nacionais' => 'totalDebitosNacionais',
        'total_debitos_recorrentes' => 'totalDebitosRecorrentes',
        'total_debitos_internacionais' => 'totalDebitosInternacionais',
        'total_debitos_diversos_nacionais' => 'totalDebitosDiversosNacionais',
        'total_debitos_opcionais' => 'totalDebitosOpcionais',
        'total_pagamentos' => 'totalPagamentos',
        'total_creditos_nacionais' => 'totalCreditosNacionais',
        'total_ajustes' => 'totalAjustes',
        'total_tarifas' => 'totalTarifas',
        'total_multa' => 'totalMulta',
        'total_juros' => 'totalJuros',
        'taxa_rotativo' => 'taxaRotativo',
        'taxa_saque' => 'taxaSaque',
        'taxa_maxima_proximo_periodo' => 'taxaMaximaProximoPeriodo',
        'total_servicos' => 'totalServicos',
        'total_parcelado_nacionais' => 'totalParceladoNacionais',
        'total_parcelado_internacionais' => 'totalParceladoInternacionais'
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
        'id_conta' => 'setIdConta',
        'flag_emite_fatura' => 'setFlagEmiteFatura',
        'data_vencimento_fatura' => 'setDataVencimentoFatura',
        'valor_total_fatura' => 'setValorTotalFatura',
        'valor_fatura_anterior' => 'setValorFaturaAnterior',
        'valor_pagamento_minimo' => 'setValorPagamentoMinimo',
        'total_compras_nacionais' => 'setTotalComprasNacionais',
        'total_compras_internacionas' => 'setTotalComprasInternacionas',
        'total_saques_nacionais' => 'setTotalSaquesNacionais',
        'total_saques_internacionais' => 'setTotalSaquesInternacionais',
        'total_debitos_nacionais' => 'setTotalDebitosNacionais',
        'total_debitos_recorrentes' => 'setTotalDebitosRecorrentes',
        'total_debitos_internacionais' => 'setTotalDebitosInternacionais',
        'total_debitos_diversos_nacionais' => 'setTotalDebitosDiversosNacionais',
        'total_debitos_opcionais' => 'setTotalDebitosOpcionais',
        'total_pagamentos' => 'setTotalPagamentos',
        'total_creditos_nacionais' => 'setTotalCreditosNacionais',
        'total_ajustes' => 'setTotalAjustes',
        'total_tarifas' => 'setTotalTarifas',
        'total_multa' => 'setTotalMulta',
        'total_juros' => 'setTotalJuros',
        'taxa_rotativo' => 'setTaxaRotativo',
        'taxa_saque' => 'setTaxaSaque',
        'taxa_maxima_proximo_periodo' => 'setTaxaMaximaProximoPeriodo',
        'total_servicos' => 'setTotalServicos',
        'total_parcelado_nacionais' => 'setTotalParceladoNacionais',
        'total_parcelado_internacionais' => 'setTotalParceladoInternacionais'
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
        'id_conta' => 'getIdConta',
        'flag_emite_fatura' => 'getFlagEmiteFatura',
        'data_vencimento_fatura' => 'getDataVencimentoFatura',
        'valor_total_fatura' => 'getValorTotalFatura',
        'valor_fatura_anterior' => 'getValorFaturaAnterior',
        'valor_pagamento_minimo' => 'getValorPagamentoMinimo',
        'total_compras_nacionais' => 'getTotalComprasNacionais',
        'total_compras_internacionas' => 'getTotalComprasInternacionas',
        'total_saques_nacionais' => 'getTotalSaquesNacionais',
        'total_saques_internacionais' => 'getTotalSaquesInternacionais',
        'total_debitos_nacionais' => 'getTotalDebitosNacionais',
        'total_debitos_recorrentes' => 'getTotalDebitosRecorrentes',
        'total_debitos_internacionais' => 'getTotalDebitosInternacionais',
        'total_debitos_diversos_nacionais' => 'getTotalDebitosDiversosNacionais',
        'total_debitos_opcionais' => 'getTotalDebitosOpcionais',
        'total_pagamentos' => 'getTotalPagamentos',
        'total_creditos_nacionais' => 'getTotalCreditosNacionais',
        'total_ajustes' => 'getTotalAjustes',
        'total_tarifas' => 'getTotalTarifas',
        'total_multa' => 'getTotalMulta',
        'total_juros' => 'getTotalJuros',
        'taxa_rotativo' => 'getTaxaRotativo',
        'taxa_saque' => 'getTaxaSaque',
        'taxa_maxima_proximo_periodo' => 'getTaxaMaximaProximoPeriodo',
        'total_servicos' => 'getTotalServicos',
        'total_parcelado_nacionais' => 'getTotalParceladoNacionais',
        'total_parcelado_internacionais' => 'getTotalParceladoInternacionais'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id C\u00C3\u00B3digo identificador da fatura.
      * @var int
      */
    protected $id;
    
    /**
      * $id_conta C\u00C3\u00B3digo identificador da conta.
      * @var int
      */
    protected $id_conta;
    
    /**
      * $flag_emite_fatura C\u00C3\u00B3digo identificador da conta a qual a fatura se refere.
      * @var int
      */
    protected $flag_emite_fatura;
    
    /**
      * $data_vencimento_fatura Data de vencimento da fatura.
      * @var string
      */
    protected $data_vencimento_fatura;
    
    /**
      * $valor_total_fatura Valor para pagamento total da fatura.
      * @var Number
      */
    protected $valor_total_fatura;
    
    /**
      * $valor_fatura_anterior Valor total da fatura anterior.
      * @var Number
      */
    protected $valor_fatura_anterior;
    
    /**
      * $valor_pagamento_minimo Valor m\u00C3\u00ADnimo para pagamento da fatura.
      * @var Number
      */
    protected $valor_pagamento_minimo;
    
    /**
      * $total_compras_nacionais Valor total das compras nacionais lan\u00C3\u00A7adas na fatura.
      * @var Number
      */
    protected $total_compras_nacionais;
    
    /**
      * $total_compras_internacionas Valor total das compras internacionais lan\u00C3\u00A7adas na fatura.
      * @var Number
      */
    protected $total_compras_internacionas;
    
    /**
      * $total_saques_nacionais Valor total dos saques nacionais lan\u00C3\u00A7ados na fatura.
      * @var Number
      */
    protected $total_saques_nacionais;
    
    /**
      * $total_saques_internacionais Valor total dos saques internacionais lan\u00C3\u00A7ados na fatura.
      * @var Number
      */
    protected $total_saques_internacionais;
    
    /**
      * $total_debitos_nacionais Valor total dos d\u00C3\u00A9bitos nacionais lan\u00C3\u00A7ados na fatura.
      * @var Number
      */
    protected $total_debitos_nacionais;
    
    /**
      * $total_debitos_recorrentes Valor total dos d\u00C3\u00A9bitos recorrentes lan\u00C3\u00A7ados na fatura.
      * @var Number
      */
    protected $total_debitos_recorrentes;
    
    /**
      * $total_debitos_internacionais Valor total dos d\u00C3\u00A9bitos internacionais lan\u00C3\u00A7ados na fatura.
      * @var Number
      */
    protected $total_debitos_internacionais;
    
    /**
      * $total_debitos_diversos_nacionais Valor total dos d\u00C3\u00A9bitos diversos nacionais lan\u00C3\u00A7ados na fatura.
      * @var Number
      */
    protected $total_debitos_diversos_nacionais;
    
    /**
      * $total_debitos_opcionais Valor total dos d\u00C3\u00A9bitos diversos opcionais lan\u00C3\u00A7ados na fatura.
      * @var Number
      */
    protected $total_debitos_opcionais;
    
    /**
      * $total_pagamentos Valor total dos pagamentos lan\u00C3\u00A7ados na fatura.
      * @var Number
      */
    protected $total_pagamentos;
    
    /**
      * $total_creditos_nacionais Valor total dos cr\u00C3\u00A9ditos nacionais lan\u00C3\u00A7ados na fatura.
      * @var Number
      */
    protected $total_creditos_nacionais;
    
    /**
      * $total_ajustes Valor total dos ajustes lan\u00C3\u00A7ados na fatura.
      * @var Number
      */
    protected $total_ajustes;
    
    /**
      * $total_tarifas Valor total das tarifas lan\u00C3\u00A7adas na fatura.
      * @var Number
      */
    protected $total_tarifas;
    
    /**
      * $total_multa Valor total da multa lan\u00C3\u00A7ada na fatura.
      * @var Number
      */
    protected $total_multa;
    
    /**
      * $total_juros Valor total dos juros de mora lan\u00C3\u00A7ados na fatura.
      * @var Number
      */
    protected $total_juros;
    
    /**
      * $taxa_rotativo Valor percentual da taxa de juros rotativos.
      * @var Number
      */
    protected $taxa_rotativo;
    
    /**
      * $taxa_saque Valor percentual da taxa de saque.
      * @var Number
      */
    protected $taxa_saque;
    
    /**
      * $taxa_maxima_proximo_periodo Valor m\u00C3\u00A1ximo percentual da taxa de encargos para o pr\u00C3\u00B3ximo per\u00C3\u00ADodo.
      * @var Number
      */
    protected $taxa_maxima_proximo_periodo;
    
    /**
      * $total_servicos Apresenta a soma de todos os seguros cobrados na fatura do cliente.
      * @var Number
      */
    protected $total_servicos;
    
    /**
      * $total_parcelado_nacionais Apresenta a soma de todos os valores parcelados + compras nacionais.
      * @var Number
      */
    protected $total_parcelado_nacionais;
    
    /**
      * $total_parcelado_internacionais Apresenta a soma de todos os valores parcelados + compras internacionais.
      * @var Number
      */
    protected $total_parcelado_internacionais;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->id_conta = $data["id_conta"];
            $this->flag_emite_fatura = $data["flag_emite_fatura"];
            $this->data_vencimento_fatura = $data["data_vencimento_fatura"];
            $this->valor_total_fatura = $data["valor_total_fatura"];
            $this->valor_fatura_anterior = $data["valor_fatura_anterior"];
            $this->valor_pagamento_minimo = $data["valor_pagamento_minimo"];
            $this->total_compras_nacionais = $data["total_compras_nacionais"];
            $this->total_compras_internacionas = $data["total_compras_internacionas"];
            $this->total_saques_nacionais = $data["total_saques_nacionais"];
            $this->total_saques_internacionais = $data["total_saques_internacionais"];
            $this->total_debitos_nacionais = $data["total_debitos_nacionais"];
            $this->total_debitos_recorrentes = $data["total_debitos_recorrentes"];
            $this->total_debitos_internacionais = $data["total_debitos_internacionais"];
            $this->total_debitos_diversos_nacionais = $data["total_debitos_diversos_nacionais"];
            $this->total_debitos_opcionais = $data["total_debitos_opcionais"];
            $this->total_pagamentos = $data["total_pagamentos"];
            $this->total_creditos_nacionais = $data["total_creditos_nacionais"];
            $this->total_ajustes = $data["total_ajustes"];
            $this->total_tarifas = $data["total_tarifas"];
            $this->total_multa = $data["total_multa"];
            $this->total_juros = $data["total_juros"];
            $this->taxa_rotativo = $data["taxa_rotativo"];
            $this->taxa_saque = $data["taxa_saque"];
            $this->taxa_maxima_proximo_periodo = $data["taxa_maxima_proximo_periodo"];
            $this->total_servicos = $data["total_servicos"];
            $this->total_parcelado_nacionais = $data["total_parcelado_nacionais"];
            $this->total_parcelado_internacionais = $data["total_parcelado_internacionais"];
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
     * @param int $id C\u00C3\u00B3digo identificador da fatura.
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
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
     * @param int $id_conta C\u00C3\u00B3digo identificador da conta.
     * @return $this
     */
    public function setIdConta($id_conta)
    {
        
        $this->id_conta = $id_conta;
        return $this;
    }
    
    /**
     * Gets flag_emite_fatura
     * @return int
     */
    public function getFlagEmiteFatura()
    {
        return $this->flag_emite_fatura;
    }
  
    /**
     * Sets flag_emite_fatura
     * @param int $flag_emite_fatura C\u00C3\u00B3digo identificador da conta a qual a fatura se refere.
     * @return $this
     */
    public function setFlagEmiteFatura($flag_emite_fatura)
    {
        
        $this->flag_emite_fatura = $flag_emite_fatura;
        return $this;
    }
    
    /**
     * Gets data_vencimento_fatura
     * @return string
     */
    public function getDataVencimentoFatura()
    {
        return $this->data_vencimento_fatura;
    }
  
    /**
     * Sets data_vencimento_fatura
     * @param string $data_vencimento_fatura Data de vencimento da fatura.
     * @return $this
     */
    public function setDataVencimentoFatura($data_vencimento_fatura)
    {
        
        $this->data_vencimento_fatura = $data_vencimento_fatura;
        return $this;
    }
    
    /**
     * Gets valor_total_fatura
     * @return Number
     */
    public function getValorTotalFatura()
    {
        return $this->valor_total_fatura;
    }
  
    /**
     * Sets valor_total_fatura
     * @param Number $valor_total_fatura Valor para pagamento total da fatura.
     * @return $this
     */
    public function setValorTotalFatura($valor_total_fatura)
    {
        
        $this->valor_total_fatura = $valor_total_fatura;
        return $this;
    }
    
    /**
     * Gets valor_fatura_anterior
     * @return Number
     */
    public function getValorFaturaAnterior()
    {
        return $this->valor_fatura_anterior;
    }
  
    /**
     * Sets valor_fatura_anterior
     * @param Number $valor_fatura_anterior Valor total da fatura anterior.
     * @return $this
     */
    public function setValorFaturaAnterior($valor_fatura_anterior)
    {
        
        $this->valor_fatura_anterior = $valor_fatura_anterior;
        return $this;
    }
    
    /**
     * Gets valor_pagamento_minimo
     * @return Number
     */
    public function getValorPagamentoMinimo()
    {
        return $this->valor_pagamento_minimo;
    }
  
    /**
     * Sets valor_pagamento_minimo
     * @param Number $valor_pagamento_minimo Valor m\u00C3\u00ADnimo para pagamento da fatura.
     * @return $this
     */
    public function setValorPagamentoMinimo($valor_pagamento_minimo)
    {
        
        $this->valor_pagamento_minimo = $valor_pagamento_minimo;
        return $this;
    }
    
    /**
     * Gets total_compras_nacionais
     * @return Number
     */
    public function getTotalComprasNacionais()
    {
        return $this->total_compras_nacionais;
    }
  
    /**
     * Sets total_compras_nacionais
     * @param Number $total_compras_nacionais Valor total das compras nacionais lan\u00C3\u00A7adas na fatura.
     * @return $this
     */
    public function setTotalComprasNacionais($total_compras_nacionais)
    {
        
        $this->total_compras_nacionais = $total_compras_nacionais;
        return $this;
    }
    
    /**
     * Gets total_compras_internacionas
     * @return Number
     */
    public function getTotalComprasInternacionas()
    {
        return $this->total_compras_internacionas;
    }
  
    /**
     * Sets total_compras_internacionas
     * @param Number $total_compras_internacionas Valor total das compras internacionais lan\u00C3\u00A7adas na fatura.
     * @return $this
     */
    public function setTotalComprasInternacionas($total_compras_internacionas)
    {
        
        $this->total_compras_internacionas = $total_compras_internacionas;
        return $this;
    }
    
    /**
     * Gets total_saques_nacionais
     * @return Number
     */
    public function getTotalSaquesNacionais()
    {
        return $this->total_saques_nacionais;
    }
  
    /**
     * Sets total_saques_nacionais
     * @param Number $total_saques_nacionais Valor total dos saques nacionais lan\u00C3\u00A7ados na fatura.
     * @return $this
     */
    public function setTotalSaquesNacionais($total_saques_nacionais)
    {
        
        $this->total_saques_nacionais = $total_saques_nacionais;
        return $this;
    }
    
    /**
     * Gets total_saques_internacionais
     * @return Number
     */
    public function getTotalSaquesInternacionais()
    {
        return $this->total_saques_internacionais;
    }
  
    /**
     * Sets total_saques_internacionais
     * @param Number $total_saques_internacionais Valor total dos saques internacionais lan\u00C3\u00A7ados na fatura.
     * @return $this
     */
    public function setTotalSaquesInternacionais($total_saques_internacionais)
    {
        
        $this->total_saques_internacionais = $total_saques_internacionais;
        return $this;
    }
    
    /**
     * Gets total_debitos_nacionais
     * @return Number
     */
    public function getTotalDebitosNacionais()
    {
        return $this->total_debitos_nacionais;
    }
  
    /**
     * Sets total_debitos_nacionais
     * @param Number $total_debitos_nacionais Valor total dos d\u00C3\u00A9bitos nacionais lan\u00C3\u00A7ados na fatura.
     * @return $this
     */
    public function setTotalDebitosNacionais($total_debitos_nacionais)
    {
        
        $this->total_debitos_nacionais = $total_debitos_nacionais;
        return $this;
    }
    
    /**
     * Gets total_debitos_recorrentes
     * @return Number
     */
    public function getTotalDebitosRecorrentes()
    {
        return $this->total_debitos_recorrentes;
    }
  
    /**
     * Sets total_debitos_recorrentes
     * @param Number $total_debitos_recorrentes Valor total dos d\u00C3\u00A9bitos recorrentes lan\u00C3\u00A7ados na fatura.
     * @return $this
     */
    public function setTotalDebitosRecorrentes($total_debitos_recorrentes)
    {
        
        $this->total_debitos_recorrentes = $total_debitos_recorrentes;
        return $this;
    }
    
    /**
     * Gets total_debitos_internacionais
     * @return Number
     */
    public function getTotalDebitosInternacionais()
    {
        return $this->total_debitos_internacionais;
    }
  
    /**
     * Sets total_debitos_internacionais
     * @param Number $total_debitos_internacionais Valor total dos d\u00C3\u00A9bitos internacionais lan\u00C3\u00A7ados na fatura.
     * @return $this
     */
    public function setTotalDebitosInternacionais($total_debitos_internacionais)
    {
        
        $this->total_debitos_internacionais = $total_debitos_internacionais;
        return $this;
    }
    
    /**
     * Gets total_debitos_diversos_nacionais
     * @return Number
     */
    public function getTotalDebitosDiversosNacionais()
    {
        return $this->total_debitos_diversos_nacionais;
    }
  
    /**
     * Sets total_debitos_diversos_nacionais
     * @param Number $total_debitos_diversos_nacionais Valor total dos d\u00C3\u00A9bitos diversos nacionais lan\u00C3\u00A7ados na fatura.
     * @return $this
     */
    public function setTotalDebitosDiversosNacionais($total_debitos_diversos_nacionais)
    {
        
        $this->total_debitos_diversos_nacionais = $total_debitos_diversos_nacionais;
        return $this;
    }
    
    /**
     * Gets total_debitos_opcionais
     * @return Number
     */
    public function getTotalDebitosOpcionais()
    {
        return $this->total_debitos_opcionais;
    }
  
    /**
     * Sets total_debitos_opcionais
     * @param Number $total_debitos_opcionais Valor total dos d\u00C3\u00A9bitos diversos opcionais lan\u00C3\u00A7ados na fatura.
     * @return $this
     */
    public function setTotalDebitosOpcionais($total_debitos_opcionais)
    {
        
        $this->total_debitos_opcionais = $total_debitos_opcionais;
        return $this;
    }
    
    /**
     * Gets total_pagamentos
     * @return Number
     */
    public function getTotalPagamentos()
    {
        return $this->total_pagamentos;
    }
  
    /**
     * Sets total_pagamentos
     * @param Number $total_pagamentos Valor total dos pagamentos lan\u00C3\u00A7ados na fatura.
     * @return $this
     */
    public function setTotalPagamentos($total_pagamentos)
    {
        
        $this->total_pagamentos = $total_pagamentos;
        return $this;
    }
    
    /**
     * Gets total_creditos_nacionais
     * @return Number
     */
    public function getTotalCreditosNacionais()
    {
        return $this->total_creditos_nacionais;
    }
  
    /**
     * Sets total_creditos_nacionais
     * @param Number $total_creditos_nacionais Valor total dos cr\u00C3\u00A9ditos nacionais lan\u00C3\u00A7ados na fatura.
     * @return $this
     */
    public function setTotalCreditosNacionais($total_creditos_nacionais)
    {
        
        $this->total_creditos_nacionais = $total_creditos_nacionais;
        return $this;
    }
    
    /**
     * Gets total_ajustes
     * @return Number
     */
    public function getTotalAjustes()
    {
        return $this->total_ajustes;
    }
  
    /**
     * Sets total_ajustes
     * @param Number $total_ajustes Valor total dos ajustes lan\u00C3\u00A7ados na fatura.
     * @return $this
     */
    public function setTotalAjustes($total_ajustes)
    {
        
        $this->total_ajustes = $total_ajustes;
        return $this;
    }
    
    /**
     * Gets total_tarifas
     * @return Number
     */
    public function getTotalTarifas()
    {
        return $this->total_tarifas;
    }
  
    /**
     * Sets total_tarifas
     * @param Number $total_tarifas Valor total das tarifas lan\u00C3\u00A7adas na fatura.
     * @return $this
     */
    public function setTotalTarifas($total_tarifas)
    {
        
        $this->total_tarifas = $total_tarifas;
        return $this;
    }
    
    /**
     * Gets total_multa
     * @return Number
     */
    public function getTotalMulta()
    {
        return $this->total_multa;
    }
  
    /**
     * Sets total_multa
     * @param Number $total_multa Valor total da multa lan\u00C3\u00A7ada na fatura.
     * @return $this
     */
    public function setTotalMulta($total_multa)
    {
        
        $this->total_multa = $total_multa;
        return $this;
    }
    
    /**
     * Gets total_juros
     * @return Number
     */
    public function getTotalJuros()
    {
        return $this->total_juros;
    }
  
    /**
     * Sets total_juros
     * @param Number $total_juros Valor total dos juros de mora lan\u00C3\u00A7ados na fatura.
     * @return $this
     */
    public function setTotalJuros($total_juros)
    {
        
        $this->total_juros = $total_juros;
        return $this;
    }
    
    /**
     * Gets taxa_rotativo
     * @return Number
     */
    public function getTaxaRotativo()
    {
        return $this->taxa_rotativo;
    }
  
    /**
     * Sets taxa_rotativo
     * @param Number $taxa_rotativo Valor percentual da taxa de juros rotativos.
     * @return $this
     */
    public function setTaxaRotativo($taxa_rotativo)
    {
        
        $this->taxa_rotativo = $taxa_rotativo;
        return $this;
    }
    
    /**
     * Gets taxa_saque
     * @return Number
     */
    public function getTaxaSaque()
    {
        return $this->taxa_saque;
    }
  
    /**
     * Sets taxa_saque
     * @param Number $taxa_saque Valor percentual da taxa de saque.
     * @return $this
     */
    public function setTaxaSaque($taxa_saque)
    {
        
        $this->taxa_saque = $taxa_saque;
        return $this;
    }
    
    /**
     * Gets taxa_maxima_proximo_periodo
     * @return Number
     */
    public function getTaxaMaximaProximoPeriodo()
    {
        return $this->taxa_maxima_proximo_periodo;
    }
  
    /**
     * Sets taxa_maxima_proximo_periodo
     * @param Number $taxa_maxima_proximo_periodo Valor m\u00C3\u00A1ximo percentual da taxa de encargos para o pr\u00C3\u00B3ximo per\u00C3\u00ADodo.
     * @return $this
     */
    public function setTaxaMaximaProximoPeriodo($taxa_maxima_proximo_periodo)
    {
        
        $this->taxa_maxima_proximo_periodo = $taxa_maxima_proximo_periodo;
        return $this;
    }
    
    /**
     * Gets total_servicos
     * @return Number
     */
    public function getTotalServicos()
    {
        return $this->total_servicos;
    }
  
    /**
     * Sets total_servicos
     * @param Number $total_servicos Apresenta a soma de todos os seguros cobrados na fatura do cliente.
     * @return $this
     */
    public function setTotalServicos($total_servicos)
    {
        
        $this->total_servicos = $total_servicos;
        return $this;
    }
    
    /**
     * Gets total_parcelado_nacionais
     * @return Number
     */
    public function getTotalParceladoNacionais()
    {
        return $this->total_parcelado_nacionais;
    }
  
    /**
     * Sets total_parcelado_nacionais
     * @param Number $total_parcelado_nacionais Apresenta a soma de todos os valores parcelados + compras nacionais.
     * @return $this
     */
    public function setTotalParceladoNacionais($total_parcelado_nacionais)
    {
        
        $this->total_parcelado_nacionais = $total_parcelado_nacionais;
        return $this;
    }
    
    /**
     * Gets total_parcelado_internacionais
     * @return Number
     */
    public function getTotalParceladoInternacionais()
    {
        return $this->total_parcelado_internacionais;
    }
  
    /**
     * Sets total_parcelado_internacionais
     * @param Number $total_parcelado_internacionais Apresenta a soma de todos os valores parcelados + compras internacionais.
     * @return $this
     */
    public function setTotalParceladoInternacionais($total_parcelado_internacionais)
    {
        
        $this->total_parcelado_internacionais = $total_parcelado_internacionais;
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
