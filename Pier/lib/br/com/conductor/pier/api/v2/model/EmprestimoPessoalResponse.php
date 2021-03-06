<?php
/**
 * EmprestimoPessoalResponse
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
 * EmprestimoPessoalResponse Class Doc Comment
 *
 * @category    Class
 * @description {{{emprestimo_pessoal_response_description}}}
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EmprestimoPessoalResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'planos_parcelamentos' => '\br.com.conductor.pier.api.v2.model\PlanoParcelamentoEmprestimoResponse[]',
        'valor_solicitado' => 'Number',
        'valor_maximo_solicitacao' => 'Number',
        'numero_parcelas' => 'int',
        'valor_maximo_parcela' => 'Number',
        'data_primeira_parcela' => 'string',
        'periodo_taxa' => 'string',
        'sistema_amortizacao' => 'string',
        'taxa_juros' => 'Number'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'planos_parcelamentos' => 'planosParcelamentos',
        'valor_solicitado' => 'valorSolicitado',
        'valor_maximo_solicitacao' => 'valorMaximoSolicitacao',
        'numero_parcelas' => 'numeroParcelas',
        'valor_maximo_parcela' => 'valorMaximoParcela',
        'data_primeira_parcela' => 'dataPrimeiraParcela',
        'periodo_taxa' => 'periodoTaxa',
        'sistema_amortizacao' => 'sistemaAmortizacao',
        'taxa_juros' => 'taxaJuros'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'planos_parcelamentos' => 'setPlanosParcelamentos',
        'valor_solicitado' => 'setValorSolicitado',
        'valor_maximo_solicitacao' => 'setValorMaximoSolicitacao',
        'numero_parcelas' => 'setNumeroParcelas',
        'valor_maximo_parcela' => 'setValorMaximoParcela',
        'data_primeira_parcela' => 'setDataPrimeiraParcela',
        'periodo_taxa' => 'setPeriodoTaxa',
        'sistema_amortizacao' => 'setSistemaAmortizacao',
        'taxa_juros' => 'setTaxaJuros'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'planos_parcelamentos' => 'getPlanosParcelamentos',
        'valor_solicitado' => 'getValorSolicitado',
        'valor_maximo_solicitacao' => 'getValorMaximoSolicitacao',
        'numero_parcelas' => 'getNumeroParcelas',
        'valor_maximo_parcela' => 'getValorMaximoParcela',
        'data_primeira_parcela' => 'getDataPrimeiraParcela',
        'periodo_taxa' => 'getPeriodoTaxa',
        'sistema_amortizacao' => 'getSistemaAmortizacao',
        'taxa_juros' => 'getTaxaJuros'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $planos_parcelamentos 
      * @var \br.com.conductor.pier.api.v2.model\PlanoParcelamentoEmprestimoResponse[]
      */
    protected $planos_parcelamentos;
    
    /**
      * $valor_solicitado {{{emprestimo_pessoal_response_valor_solicitado_value}}}
      * @var Number
      */
    protected $valor_solicitado;
    
    /**
      * $valor_maximo_solicitacao {{{emprestimo_pessoal_response_valor_maximo_solicitacao_value}}}
      * @var Number
      */
    protected $valor_maximo_solicitacao;
    
    /**
      * $numero_parcelas {{{emprestimo_pessoal_response_numero_parcelas_value}}}
      * @var int
      */
    protected $numero_parcelas;
    
    /**
      * $valor_maximo_parcela {{{emprestimo_pessoal_response_valor_maximo_parcela_value}}}
      * @var Number
      */
    protected $valor_maximo_parcela;
    
    /**
      * $data_primeira_parcela {{{emprestimo_pessoal_response_data_primeira_parcela_value}}}
      * @var string
      */
    protected $data_primeira_parcela;
    
    /**
      * $periodo_taxa {{{emprestimo_pessoal_response_periodo_taxa_value}}}
      * @var string
      */
    protected $periodo_taxa;
    
    /**
      * $sistema_amortizacao {{{emprestimo_pessoal_response_sistema_amortizacao_value}}}
      * @var string
      */
    protected $sistema_amortizacao;
    
    /**
      * $taxa_juros {{{emprestimo_pessoal_response_taxa_juros_value}}}
      * @var Number
      */
    protected $taxa_juros;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->planos_parcelamentos = $data["planos_parcelamentos"];
            $this->valor_solicitado = $data["valor_solicitado"];
            $this->valor_maximo_solicitacao = $data["valor_maximo_solicitacao"];
            $this->numero_parcelas = $data["numero_parcelas"];
            $this->valor_maximo_parcela = $data["valor_maximo_parcela"];
            $this->data_primeira_parcela = $data["data_primeira_parcela"];
            $this->periodo_taxa = $data["periodo_taxa"];
            $this->sistema_amortizacao = $data["sistema_amortizacao"];
            $this->taxa_juros = $data["taxa_juros"];
        }
    }
    
    /**
     * Gets planos_parcelamentos
     * @return \br.com.conductor.pier.api.v2.model\PlanoParcelamentoEmprestimoResponse[]
     */
    public function getPlanosParcelamentos()
    {
        return $this->planos_parcelamentos;
    }
  
    /**
     * Sets planos_parcelamentos
     * @param \br.com.conductor.pier.api.v2.model\PlanoParcelamentoEmprestimoResponse[] $planos_parcelamentos 
     * @return $this
     */
    public function setPlanosParcelamentos($planos_parcelamentos)
    {
        
        $this->planos_parcelamentos = $planos_parcelamentos;
        return $this;
    }
    
    /**
     * Gets valor_solicitado
     * @return Number
     */
    public function getValorSolicitado()
    {
        return $this->valor_solicitado;
    }
  
    /**
     * Sets valor_solicitado
     * @param Number $valor_solicitado {{{emprestimo_pessoal_response_valor_solicitado_value}}}
     * @return $this
     */
    public function setValorSolicitado($valor_solicitado)
    {
        
        $this->valor_solicitado = $valor_solicitado;
        return $this;
    }
    
    /**
     * Gets valor_maximo_solicitacao
     * @return Number
     */
    public function getValorMaximoSolicitacao()
    {
        return $this->valor_maximo_solicitacao;
    }
  
    /**
     * Sets valor_maximo_solicitacao
     * @param Number $valor_maximo_solicitacao {{{emprestimo_pessoal_response_valor_maximo_solicitacao_value}}}
     * @return $this
     */
    public function setValorMaximoSolicitacao($valor_maximo_solicitacao)
    {
        
        $this->valor_maximo_solicitacao = $valor_maximo_solicitacao;
        return $this;
    }
    
    /**
     * Gets numero_parcelas
     * @return int
     */
    public function getNumeroParcelas()
    {
        return $this->numero_parcelas;
    }
  
    /**
     * Sets numero_parcelas
     * @param int $numero_parcelas {{{emprestimo_pessoal_response_numero_parcelas_value}}}
     * @return $this
     */
    public function setNumeroParcelas($numero_parcelas)
    {
        
        $this->numero_parcelas = $numero_parcelas;
        return $this;
    }
    
    /**
     * Gets valor_maximo_parcela
     * @return Number
     */
    public function getValorMaximoParcela()
    {
        return $this->valor_maximo_parcela;
    }
  
    /**
     * Sets valor_maximo_parcela
     * @param Number $valor_maximo_parcela {{{emprestimo_pessoal_response_valor_maximo_parcela_value}}}
     * @return $this
     */
    public function setValorMaximoParcela($valor_maximo_parcela)
    {
        
        $this->valor_maximo_parcela = $valor_maximo_parcela;
        return $this;
    }
    
    /**
     * Gets data_primeira_parcela
     * @return string
     */
    public function getDataPrimeiraParcela()
    {
        return $this->data_primeira_parcela;
    }
  
    /**
     * Sets data_primeira_parcela
     * @param string $data_primeira_parcela {{{emprestimo_pessoal_response_data_primeira_parcela_value}}}
     * @return $this
     */
    public function setDataPrimeiraParcela($data_primeira_parcela)
    {
        
        $this->data_primeira_parcela = $data_primeira_parcela;
        return $this;
    }
    
    /**
     * Gets periodo_taxa
     * @return string
     */
    public function getPeriodoTaxa()
    {
        return $this->periodo_taxa;
    }
  
    /**
     * Sets periodo_taxa
     * @param string $periodo_taxa {{{emprestimo_pessoal_response_periodo_taxa_value}}}
     * @return $this
     */
    public function setPeriodoTaxa($periodo_taxa)
    {
        
        $this->periodo_taxa = $periodo_taxa;
        return $this;
    }
    
    /**
     * Gets sistema_amortizacao
     * @return string
     */
    public function getSistemaAmortizacao()
    {
        return $this->sistema_amortizacao;
    }
  
    /**
     * Sets sistema_amortizacao
     * @param string $sistema_amortizacao {{{emprestimo_pessoal_response_sistema_amortizacao_value}}}
     * @return $this
     */
    public function setSistemaAmortizacao($sistema_amortizacao)
    {
        
        $this->sistema_amortizacao = $sistema_amortizacao;
        return $this;
    }
    
    /**
     * Gets taxa_juros
     * @return Number
     */
    public function getTaxaJuros()
    {
        return $this->taxa_juros;
    }
  
    /**
     * Sets taxa_juros
     * @param Number $taxa_juros {{{emprestimo_pessoal_response_taxa_juros_value}}}
     * @return $this
     */
    public function setTaxaJuros($taxa_juros)
    {
        
        $this->taxa_juros = $taxa_juros;
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
