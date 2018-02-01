<?php
/**
 * OperacaoCredorUpdate
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
 * OperacaoCredorUpdate Class Doc Comment
 *
 * @category    Class
 * @description Objeto OperacaoCredor
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OperacaoCredorUpdate implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id_operacao' => 'int',
        'id_credor' => 'int',
        'id_produto' => 'int',
        'remuneracao_percentual' => 'Number',
        'remuneracao_fixa' => 'Number',
        'periodicidade' => 'string',
        'vencimento_primeira_parcela' => 'int',
        'dias_afastamento' => 'int',
        'fator_multiplicador' => 'string',
        'flag_taxa_fixada' => 'bool',
        'plano_minimo' => 'int',
        'plano_maximo' => 'int'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id_operacao' => 'idOperacao',
        'id_credor' => 'idCredor',
        'id_produto' => 'idProduto',
        'remuneracao_percentual' => 'remuneracaoPercentual',
        'remuneracao_fixa' => 'remuneracaoFixa',
        'periodicidade' => 'periodicidade',
        'vencimento_primeira_parcela' => 'vencimentoPrimeiraParcela',
        'dias_afastamento' => 'diasAfastamento',
        'fator_multiplicador' => 'fatorMultiplicador',
        'flag_taxa_fixada' => 'flagTaxaFixada',
        'plano_minimo' => 'planoMinimo',
        'plano_maximo' => 'planoMaximo'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id_operacao' => 'setIdOperacao',
        'id_credor' => 'setIdCredor',
        'id_produto' => 'setIdProduto',
        'remuneracao_percentual' => 'setRemuneracaoPercentual',
        'remuneracao_fixa' => 'setRemuneracaoFixa',
        'periodicidade' => 'setPeriodicidade',
        'vencimento_primeira_parcela' => 'setVencimentoPrimeiraParcela',
        'dias_afastamento' => 'setDiasAfastamento',
        'fator_multiplicador' => 'setFatorMultiplicador',
        'flag_taxa_fixada' => 'setFlagTaxaFixada',
        'plano_minimo' => 'setPlanoMinimo',
        'plano_maximo' => 'setPlanoMaximo'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id_operacao' => 'getIdOperacao',
        'id_credor' => 'getIdCredor',
        'id_produto' => 'getIdProduto',
        'remuneracao_percentual' => 'getRemuneracaoPercentual',
        'remuneracao_fixa' => 'getRemuneracaoFixa',
        'periodicidade' => 'getPeriodicidade',
        'vencimento_primeira_parcela' => 'getVencimentoPrimeiraParcela',
        'dias_afastamento' => 'getDiasAfastamento',
        'fator_multiplicador' => 'getFatorMultiplicador',
        'flag_taxa_fixada' => 'getFlagTaxaFixada',
        'plano_minimo' => 'getPlanoMinimo',
        'plano_maximo' => 'getPlanoMaximo'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id_operacao Apresenta o id da Opera\u00C3\u00A7\u00C3\u00A3o.
      * @var int
      */
    protected $id_operacao;
    
    /**
      * $id_credor Apresenta o id do Credor.
      * @var int
      */
    protected $id_credor;
    
    /**
      * $id_produto Apresenta o id do produto que vai ser alterado.
      * @var int
      */
    protected $id_produto;
    
    /**
      * $remuneracao_percentual Remunera\u00C3\u00A7\u00C3\u00A3o Percentual.
      * @var Number
      */
    protected $remuneracao_percentual;
    
    /**
      * $remuneracao_fixa Remunera\u00C3\u00A7\u00C3\u00A3o Fixa.
      * @var Number
      */
    protected $remuneracao_fixa;
    
    /**
      * $periodicidade Periodicidade (DIARIO(1), SEMANAL(2), MENSAL(3), DECENDIAL(4), QUINZENAL(5)).
      * @var string
      */
    protected $periodicidade;
    
    /**
      * $vencimento_primeira_parcela Vencimento da primeira parcela.
      * @var int
      */
    protected $vencimento_primeira_parcela;
    
    /**
      * $dias_afastamento Dias afastamento.
      * @var int
      */
    protected $dias_afastamento;
    
    /**
      * $fator_multiplicador Fator multiplicador (FORA_AGENDA(0), AGENDA(1)).
      * @var string
      */
    protected $fator_multiplicador;
    
    /**
      * $flag_taxa_fixada Flag taxa fixada.
      * @var bool
      */
    protected $flag_taxa_fixada;
    
    /**
      * $plano_minimo Plano m\u00C3\u00ADnimo da regra.
      * @var int
      */
    protected $plano_minimo;
    
    /**
      * $plano_maximo Plano m\u00C3\u00A1ximo da regra.
      * @var int
      */
    protected $plano_maximo;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id_operacao = $data["id_operacao"];
            $this->id_credor = $data["id_credor"];
            $this->id_produto = $data["id_produto"];
            $this->remuneracao_percentual = $data["remuneracao_percentual"];
            $this->remuneracao_fixa = $data["remuneracao_fixa"];
            $this->periodicidade = $data["periodicidade"];
            $this->vencimento_primeira_parcela = $data["vencimento_primeira_parcela"];
            $this->dias_afastamento = $data["dias_afastamento"];
            $this->fator_multiplicador = $data["fator_multiplicador"];
            $this->flag_taxa_fixada = $data["flag_taxa_fixada"];
            $this->plano_minimo = $data["plano_minimo"];
            $this->plano_maximo = $data["plano_maximo"];
        }
    }
    
    /**
     * Gets id_operacao
     * @return int
     */
    public function getIdOperacao()
    {
        return $this->id_operacao;
    }
  
    /**
     * Sets id_operacao
     * @param int $id_operacao Apresenta o id da Opera\u00C3\u00A7\u00C3\u00A3o.
     * @return $this
     */
    public function setIdOperacao($id_operacao)
    {
        
        $this->id_operacao = $id_operacao;
        return $this;
    }
    
    /**
     * Gets id_credor
     * @return int
     */
    public function getIdCredor()
    {
        return $this->id_credor;
    }
  
    /**
     * Sets id_credor
     * @param int $id_credor Apresenta o id do Credor.
     * @return $this
     */
    public function setIdCredor($id_credor)
    {
        
        $this->id_credor = $id_credor;
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
     * @param int $id_produto Apresenta o id do produto que vai ser alterado.
     * @return $this
     */
    public function setIdProduto($id_produto)
    {
        
        $this->id_produto = $id_produto;
        return $this;
    }
    
    /**
     * Gets remuneracao_percentual
     * @return Number
     */
    public function getRemuneracaoPercentual()
    {
        return $this->remuneracao_percentual;
    }
  
    /**
     * Sets remuneracao_percentual
     * @param Number $remuneracao_percentual Remunera\u00C3\u00A7\u00C3\u00A3o Percentual.
     * @return $this
     */
    public function setRemuneracaoPercentual($remuneracao_percentual)
    {
        
        $this->remuneracao_percentual = $remuneracao_percentual;
        return $this;
    }
    
    /**
     * Gets remuneracao_fixa
     * @return Number
     */
    public function getRemuneracaoFixa()
    {
        return $this->remuneracao_fixa;
    }
  
    /**
     * Sets remuneracao_fixa
     * @param Number $remuneracao_fixa Remunera\u00C3\u00A7\u00C3\u00A3o Fixa.
     * @return $this
     */
    public function setRemuneracaoFixa($remuneracao_fixa)
    {
        
        $this->remuneracao_fixa = $remuneracao_fixa;
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
     * @param string $periodicidade Periodicidade (DIARIO(1), SEMANAL(2), MENSAL(3), DECENDIAL(4), QUINZENAL(5)).
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
     * Gets vencimento_primeira_parcela
     * @return int
     */
    public function getVencimentoPrimeiraParcela()
    {
        return $this->vencimento_primeira_parcela;
    }
  
    /**
     * Sets vencimento_primeira_parcela
     * @param int $vencimento_primeira_parcela Vencimento da primeira parcela.
     * @return $this
     */
    public function setVencimentoPrimeiraParcela($vencimento_primeira_parcela)
    {
        
        $this->vencimento_primeira_parcela = $vencimento_primeira_parcela;
        return $this;
    }
    
    /**
     * Gets dias_afastamento
     * @return int
     */
    public function getDiasAfastamento()
    {
        return $this->dias_afastamento;
    }
  
    /**
     * Sets dias_afastamento
     * @param int $dias_afastamento Dias afastamento.
     * @return $this
     */
    public function setDiasAfastamento($dias_afastamento)
    {
        
        $this->dias_afastamento = $dias_afastamento;
        return $this;
    }
    
    /**
     * Gets fator_multiplicador
     * @return string
     */
    public function getFatorMultiplicador()
    {
        return $this->fator_multiplicador;
    }
  
    /**
     * Sets fator_multiplicador
     * @param string $fator_multiplicador Fator multiplicador (FORA_AGENDA(0), AGENDA(1)).
     * @return $this
     */
    public function setFatorMultiplicador($fator_multiplicador)
    {
        $allowed_values = array("FORA_AGENDA", "AGENDA", "AGENDA_NEGATIVA");
        if (!in_array($fator_multiplicador, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'fator_multiplicador', must be one of 'FORA_AGENDA', 'AGENDA', 'AGENDA_NEGATIVA'");
        }
        $this->fator_multiplicador = $fator_multiplicador;
        return $this;
    }
    
    /**
     * Gets flag_taxa_fixada
     * @return bool
     */
    public function getFlagTaxaFixada()
    {
        return $this->flag_taxa_fixada;
    }
  
    /**
     * Sets flag_taxa_fixada
     * @param bool $flag_taxa_fixada Flag taxa fixada.
     * @return $this
     */
    public function setFlagTaxaFixada($flag_taxa_fixada)
    {
        
        $this->flag_taxa_fixada = $flag_taxa_fixada;
        return $this;
    }
    
    /**
     * Gets plano_minimo
     * @return int
     */
    public function getPlanoMinimo()
    {
        return $this->plano_minimo;
    }
  
    /**
     * Sets plano_minimo
     * @param int $plano_minimo Plano m\u00C3\u00ADnimo da regra.
     * @return $this
     */
    public function setPlanoMinimo($plano_minimo)
    {
        
        $this->plano_minimo = $plano_minimo;
        return $this;
    }
    
    /**
     * Gets plano_maximo
     * @return int
     */
    public function getPlanoMaximo()
    {
        return $this->plano_maximo;
    }
  
    /**
     * Sets plano_maximo
     * @param int $plano_maximo Plano m\u00C3\u00A1ximo da regra.
     * @return $this
     */
    public function setPlanoMaximo($plano_maximo)
    {
        
        $this->plano_maximo = $plano_maximo;
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
