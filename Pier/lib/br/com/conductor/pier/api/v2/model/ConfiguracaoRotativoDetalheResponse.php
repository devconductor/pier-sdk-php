<?php
/**
 * ConfiguracaoRotativoDetalheResponse
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
 * ConfiguracaoRotativoDetalheResponse Class Doc Comment
 *
 * @category    Class
 * @description Objeto conta
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ConfiguracaoRotativoDetalheResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'id_produto' => 'int',
        'compoe_oferta_valor_rotativo' => 'bool',
        'compoe_oferta_valor_nao_financiavel' => 'bool',
        'compoe_oferta_valor_novos_lancamentos' => 'bool',
        'recalcula_parcelamento_para_entrada_maior' => 'bool',
        'minimo_parcelas_recalculo_parcelamento' => 'bool',
        'recalcula_parcelamento' => 'bool',
        'numero_minimo_ofertas' => 'bool',
        'aceita_pagamento_maior_que_entrada' => 'bool',
        'antecipa_parcelamentos_abertos' => 'bool',
        'valor_minimo_parcela' => 'Number',
        'percentual_limitar_valor_minimo_parcela' => 'Number',
        'id_regra_campanha' => 'int',
        'parcelar_apenas_minimo' => 'bool',
        'usuario' => 'string'
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
        'id_produto' => 'idProduto',
        'compoe_oferta_valor_rotativo' => 'compoeOfertaValorRotativo',
        'compoe_oferta_valor_nao_financiavel' => 'compoeOfertaValorNaoFinanciavel',
        'compoe_oferta_valor_novos_lancamentos' => 'compoeOfertaValorNovosLancamentos',
        'recalcula_parcelamento_para_entrada_maior' => 'recalculaParcelamentoParaEntradaMaior',
        'minimo_parcelas_recalculo_parcelamento' => 'minimoParcelasRecalculoParcelamento',
        'recalcula_parcelamento' => 'recalculaParcelamento',
        'numero_minimo_ofertas' => 'numeroMinimoOfertas',
        'aceita_pagamento_maior_que_entrada' => 'aceitaPagamentoMaiorQueEntrada',
        'antecipa_parcelamentos_abertos' => 'antecipaParcelamentosAbertos',
        'valor_minimo_parcela' => 'valorMinimoParcela',
        'percentual_limitar_valor_minimo_parcela' => 'percentualLimitarValorMinimoParcela',
        'id_regra_campanha' => 'idRegraCampanha',
        'parcelar_apenas_minimo' => 'parcelarApenasMinimo',
        'usuario' => 'usuario'
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
        'id_produto' => 'setIdProduto',
        'compoe_oferta_valor_rotativo' => 'setCompoeOfertaValorRotativo',
        'compoe_oferta_valor_nao_financiavel' => 'setCompoeOfertaValorNaoFinanciavel',
        'compoe_oferta_valor_novos_lancamentos' => 'setCompoeOfertaValorNovosLancamentos',
        'recalcula_parcelamento_para_entrada_maior' => 'setRecalculaParcelamentoParaEntradaMaior',
        'minimo_parcelas_recalculo_parcelamento' => 'setMinimoParcelasRecalculoParcelamento',
        'recalcula_parcelamento' => 'setRecalculaParcelamento',
        'numero_minimo_ofertas' => 'setNumeroMinimoOfertas',
        'aceita_pagamento_maior_que_entrada' => 'setAceitaPagamentoMaiorQueEntrada',
        'antecipa_parcelamentos_abertos' => 'setAntecipaParcelamentosAbertos',
        'valor_minimo_parcela' => 'setValorMinimoParcela',
        'percentual_limitar_valor_minimo_parcela' => 'setPercentualLimitarValorMinimoParcela',
        'id_regra_campanha' => 'setIdRegraCampanha',
        'parcelar_apenas_minimo' => 'setParcelarApenasMinimo',
        'usuario' => 'setUsuario'
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
        'id_produto' => 'getIdProduto',
        'compoe_oferta_valor_rotativo' => 'getCompoeOfertaValorRotativo',
        'compoe_oferta_valor_nao_financiavel' => 'getCompoeOfertaValorNaoFinanciavel',
        'compoe_oferta_valor_novos_lancamentos' => 'getCompoeOfertaValorNovosLancamentos',
        'recalcula_parcelamento_para_entrada_maior' => 'getRecalculaParcelamentoParaEntradaMaior',
        'minimo_parcelas_recalculo_parcelamento' => 'getMinimoParcelasRecalculoParcelamento',
        'recalcula_parcelamento' => 'getRecalculaParcelamento',
        'numero_minimo_ofertas' => 'getNumeroMinimoOfertas',
        'aceita_pagamento_maior_que_entrada' => 'getAceitaPagamentoMaiorQueEntrada',
        'antecipa_parcelamentos_abertos' => 'getAntecipaParcelamentosAbertos',
        'valor_minimo_parcela' => 'getValorMinimoParcela',
        'percentual_limitar_valor_minimo_parcela' => 'getPercentualLimitarValorMinimoParcela',
        'id_regra_campanha' => 'getIdRegraCampanha',
        'parcelar_apenas_minimo' => 'getParcelarApenasMinimo',
        'usuario' => 'getUsuario'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o de ConfiguracaoRotativo (id).
      * @var int
      */
    protected $id;
    
    /**
      * $id_produto C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Produto (idProduto).
      * @var int
      */
    protected $id_produto;
    
    /**
      * $compoe_oferta_valor_rotativo Quando verdadeiro, indica que o valor do rotativo deve compor a oferta de parcelamento.
      * @var bool
      */
    protected $compoe_oferta_valor_rotativo;
    
    /**
      * $compoe_oferta_valor_nao_financiavel Quando verdadeiro, indica que o valor n\u00C3\u00A3o financi\u00C3\u00A1vel deve compor a oferta de parcelamento.
      * @var bool
      */
    protected $compoe_oferta_valor_nao_financiavel;
    
    /**
      * $compoe_oferta_valor_novos_lancamentos Quando verdadeiro, indica que o valor de novos lan\u00C3\u00A7amentos deve compor a oferta de parcelamento
      * @var bool
      */
    protected $compoe_oferta_valor_novos_lancamentos;
    
    /**
      * $recalcula_parcelamento_para_entrada_maior Quando verdadeiro, indica que deve recalcular o parcelamento caso o valor pago de entrada seja maior que o valor esperado
      * @var bool
      */
    protected $recalcula_parcelamento_para_entrada_maior;
    
    /**
      * $minimo_parcelas_recalculo_parcelamento Indica o m\u00C3\u00ADnimo de parcelas que ser\u00C3\u00A1 acatado no rec\u00C3\u00A1lculo do parcelamento.
      * @var bool
      */
    protected $minimo_parcelas_recalculo_parcelamento;
    
    /**
      * $recalcula_parcelamento Quando verdadeiro, indica que o parcelamento deve ser recalculado caso o valor calculado da oferta seja inferior ao valor configurado m\u00C3\u00ADnimo da parcela (valorMinimoParcela) e de percentual aberto
      * @var bool
      */
    protected $recalcula_parcelamento;
    
    /**
      * $numero_minimo_ofertas N\u00C3\u00BAmero m\u00C3\u00ADnimo de parcelas que ser\u00C3\u00A1 acatado no recalculo da oferta.
      * @var bool
      */
    protected $numero_minimo_ofertas;
    
    /**
      * $aceita_pagamento_maior_que_entrada Quando verdadeiro, indica que valores pagos entre o valor da entrada e o m\u00C3\u00ADnimo da fatura ser\u00C3\u00A3o acatados para a ades\u00C3\u00A3o ao parcelamento
      * @var bool
      */
    protected $aceita_pagamento_maior_que_entrada;
    
    /**
      * $antecipa_parcelamentos_abertos Quando verdadeiro, indica que deve-se incluir o valor presente dos parcelamentos em aberto.
      * @var bool
      */
    protected $antecipa_parcelamentos_abertos;
    
    /**
      * $valor_minimo_parcela Valor m\u00C3\u00ADnimo da parcela que deve ser aceito na oferta.
      * @var Number
      */
    protected $valor_minimo_parcela;
    
    /**
      * $percentual_limitar_valor_minimo_parcela Percentual sobre os valores de parcelamento anteriores em aberto que deve ser considerado para limitar valorMinimoParcela.
      * @var Number
      */
    protected $percentual_limitar_valor_minimo_parcela;
    
    /**
      * $id_regra_campanha C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da regra de campanha.
      * @var int
      */
    protected $id_regra_campanha;
    
    /**
      * $parcelar_apenas_minimo Quando verdadeiro, indica que parcelamento ofertado ter\u00C3\u00A1 como valor base o valor m\u00C3\u00ADnimo das transa\u00C3\u00A7\u00C3\u00B5es.
      * @var bool
      */
    protected $parcelar_apenas_minimo;
    
    /**
      * $usuario Nome do usu\u00C3\u00A1rio.
      * @var string
      */
    protected $usuario;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->id_produto = $data["id_produto"];
            $this->compoe_oferta_valor_rotativo = $data["compoe_oferta_valor_rotativo"];
            $this->compoe_oferta_valor_nao_financiavel = $data["compoe_oferta_valor_nao_financiavel"];
            $this->compoe_oferta_valor_novos_lancamentos = $data["compoe_oferta_valor_novos_lancamentos"];
            $this->recalcula_parcelamento_para_entrada_maior = $data["recalcula_parcelamento_para_entrada_maior"];
            $this->minimo_parcelas_recalculo_parcelamento = $data["minimo_parcelas_recalculo_parcelamento"];
            $this->recalcula_parcelamento = $data["recalcula_parcelamento"];
            $this->numero_minimo_ofertas = $data["numero_minimo_ofertas"];
            $this->aceita_pagamento_maior_que_entrada = $data["aceita_pagamento_maior_que_entrada"];
            $this->antecipa_parcelamentos_abertos = $data["antecipa_parcelamentos_abertos"];
            $this->valor_minimo_parcela = $data["valor_minimo_parcela"];
            $this->percentual_limitar_valor_minimo_parcela = $data["percentual_limitar_valor_minimo_parcela"];
            $this->id_regra_campanha = $data["id_regra_campanha"];
            $this->parcelar_apenas_minimo = $data["parcelar_apenas_minimo"];
            $this->usuario = $data["usuario"];
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
     * @param int $id C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o de ConfiguracaoRotativo (id).
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
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
     * @param int $id_produto C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Produto (idProduto).
     * @return $this
     */
    public function setIdProduto($id_produto)
    {
        
        $this->id_produto = $id_produto;
        return $this;
    }
    
    /**
     * Gets compoe_oferta_valor_rotativo
     * @return bool
     */
    public function getCompoeOfertaValorRotativo()
    {
        return $this->compoe_oferta_valor_rotativo;
    }
  
    /**
     * Sets compoe_oferta_valor_rotativo
     * @param bool $compoe_oferta_valor_rotativo Quando verdadeiro, indica que o valor do rotativo deve compor a oferta de parcelamento.
     * @return $this
     */
    public function setCompoeOfertaValorRotativo($compoe_oferta_valor_rotativo)
    {
        
        $this->compoe_oferta_valor_rotativo = $compoe_oferta_valor_rotativo;
        return $this;
    }
    
    /**
     * Gets compoe_oferta_valor_nao_financiavel
     * @return bool
     */
    public function getCompoeOfertaValorNaoFinanciavel()
    {
        return $this->compoe_oferta_valor_nao_financiavel;
    }
  
    /**
     * Sets compoe_oferta_valor_nao_financiavel
     * @param bool $compoe_oferta_valor_nao_financiavel Quando verdadeiro, indica que o valor n\u00C3\u00A3o financi\u00C3\u00A1vel deve compor a oferta de parcelamento.
     * @return $this
     */
    public function setCompoeOfertaValorNaoFinanciavel($compoe_oferta_valor_nao_financiavel)
    {
        
        $this->compoe_oferta_valor_nao_financiavel = $compoe_oferta_valor_nao_financiavel;
        return $this;
    }
    
    /**
     * Gets compoe_oferta_valor_novos_lancamentos
     * @return bool
     */
    public function getCompoeOfertaValorNovosLancamentos()
    {
        return $this->compoe_oferta_valor_novos_lancamentos;
    }
  
    /**
     * Sets compoe_oferta_valor_novos_lancamentos
     * @param bool $compoe_oferta_valor_novos_lancamentos Quando verdadeiro, indica que o valor de novos lan\u00C3\u00A7amentos deve compor a oferta de parcelamento
     * @return $this
     */
    public function setCompoeOfertaValorNovosLancamentos($compoe_oferta_valor_novos_lancamentos)
    {
        
        $this->compoe_oferta_valor_novos_lancamentos = $compoe_oferta_valor_novos_lancamentos;
        return $this;
    }
    
    /**
     * Gets recalcula_parcelamento_para_entrada_maior
     * @return bool
     */
    public function getRecalculaParcelamentoParaEntradaMaior()
    {
        return $this->recalcula_parcelamento_para_entrada_maior;
    }
  
    /**
     * Sets recalcula_parcelamento_para_entrada_maior
     * @param bool $recalcula_parcelamento_para_entrada_maior Quando verdadeiro, indica que deve recalcular o parcelamento caso o valor pago de entrada seja maior que o valor esperado
     * @return $this
     */
    public function setRecalculaParcelamentoParaEntradaMaior($recalcula_parcelamento_para_entrada_maior)
    {
        
        $this->recalcula_parcelamento_para_entrada_maior = $recalcula_parcelamento_para_entrada_maior;
        return $this;
    }
    
    /**
     * Gets minimo_parcelas_recalculo_parcelamento
     * @return bool
     */
    public function getMinimoParcelasRecalculoParcelamento()
    {
        return $this->minimo_parcelas_recalculo_parcelamento;
    }
  
    /**
     * Sets minimo_parcelas_recalculo_parcelamento
     * @param bool $minimo_parcelas_recalculo_parcelamento Indica o m\u00C3\u00ADnimo de parcelas que ser\u00C3\u00A1 acatado no rec\u00C3\u00A1lculo do parcelamento.
     * @return $this
     */
    public function setMinimoParcelasRecalculoParcelamento($minimo_parcelas_recalculo_parcelamento)
    {
        
        $this->minimo_parcelas_recalculo_parcelamento = $minimo_parcelas_recalculo_parcelamento;
        return $this;
    }
    
    /**
     * Gets recalcula_parcelamento
     * @return bool
     */
    public function getRecalculaParcelamento()
    {
        return $this->recalcula_parcelamento;
    }
  
    /**
     * Sets recalcula_parcelamento
     * @param bool $recalcula_parcelamento Quando verdadeiro, indica que o parcelamento deve ser recalculado caso o valor calculado da oferta seja inferior ao valor configurado m\u00C3\u00ADnimo da parcela (valorMinimoParcela) e de percentual aberto
     * @return $this
     */
    public function setRecalculaParcelamento($recalcula_parcelamento)
    {
        
        $this->recalcula_parcelamento = $recalcula_parcelamento;
        return $this;
    }
    
    /**
     * Gets numero_minimo_ofertas
     * @return bool
     */
    public function getNumeroMinimoOfertas()
    {
        return $this->numero_minimo_ofertas;
    }
  
    /**
     * Sets numero_minimo_ofertas
     * @param bool $numero_minimo_ofertas N\u00C3\u00BAmero m\u00C3\u00ADnimo de parcelas que ser\u00C3\u00A1 acatado no recalculo da oferta.
     * @return $this
     */
    public function setNumeroMinimoOfertas($numero_minimo_ofertas)
    {
        
        $this->numero_minimo_ofertas = $numero_minimo_ofertas;
        return $this;
    }
    
    /**
     * Gets aceita_pagamento_maior_que_entrada
     * @return bool
     */
    public function getAceitaPagamentoMaiorQueEntrada()
    {
        return $this->aceita_pagamento_maior_que_entrada;
    }
  
    /**
     * Sets aceita_pagamento_maior_que_entrada
     * @param bool $aceita_pagamento_maior_que_entrada Quando verdadeiro, indica que valores pagos entre o valor da entrada e o m\u00C3\u00ADnimo da fatura ser\u00C3\u00A3o acatados para a ades\u00C3\u00A3o ao parcelamento
     * @return $this
     */
    public function setAceitaPagamentoMaiorQueEntrada($aceita_pagamento_maior_que_entrada)
    {
        
        $this->aceita_pagamento_maior_que_entrada = $aceita_pagamento_maior_que_entrada;
        return $this;
    }
    
    /**
     * Gets antecipa_parcelamentos_abertos
     * @return bool
     */
    public function getAntecipaParcelamentosAbertos()
    {
        return $this->antecipa_parcelamentos_abertos;
    }
  
    /**
     * Sets antecipa_parcelamentos_abertos
     * @param bool $antecipa_parcelamentos_abertos Quando verdadeiro, indica que deve-se incluir o valor presente dos parcelamentos em aberto.
     * @return $this
     */
    public function setAntecipaParcelamentosAbertos($antecipa_parcelamentos_abertos)
    {
        
        $this->antecipa_parcelamentos_abertos = $antecipa_parcelamentos_abertos;
        return $this;
    }
    
    /**
     * Gets valor_minimo_parcela
     * @return Number
     */
    public function getValorMinimoParcela()
    {
        return $this->valor_minimo_parcela;
    }
  
    /**
     * Sets valor_minimo_parcela
     * @param Number $valor_minimo_parcela Valor m\u00C3\u00ADnimo da parcela que deve ser aceito na oferta.
     * @return $this
     */
    public function setValorMinimoParcela($valor_minimo_parcela)
    {
        
        $this->valor_minimo_parcela = $valor_minimo_parcela;
        return $this;
    }
    
    /**
     * Gets percentual_limitar_valor_minimo_parcela
     * @return Number
     */
    public function getPercentualLimitarValorMinimoParcela()
    {
        return $this->percentual_limitar_valor_minimo_parcela;
    }
  
    /**
     * Sets percentual_limitar_valor_minimo_parcela
     * @param Number $percentual_limitar_valor_minimo_parcela Percentual sobre os valores de parcelamento anteriores em aberto que deve ser considerado para limitar valorMinimoParcela.
     * @return $this
     */
    public function setPercentualLimitarValorMinimoParcela($percentual_limitar_valor_minimo_parcela)
    {
        
        $this->percentual_limitar_valor_minimo_parcela = $percentual_limitar_valor_minimo_parcela;
        return $this;
    }
    
    /**
     * Gets id_regra_campanha
     * @return int
     */
    public function getIdRegraCampanha()
    {
        return $this->id_regra_campanha;
    }
  
    /**
     * Sets id_regra_campanha
     * @param int $id_regra_campanha C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da regra de campanha.
     * @return $this
     */
    public function setIdRegraCampanha($id_regra_campanha)
    {
        
        $this->id_regra_campanha = $id_regra_campanha;
        return $this;
    }
    
    /**
     * Gets parcelar_apenas_minimo
     * @return bool
     */
    public function getParcelarApenasMinimo()
    {
        return $this->parcelar_apenas_minimo;
    }
  
    /**
     * Sets parcelar_apenas_minimo
     * @param bool $parcelar_apenas_minimo Quando verdadeiro, indica que parcelamento ofertado ter\u00C3\u00A1 como valor base o valor m\u00C3\u00ADnimo das transa\u00C3\u00A7\u00C3\u00B5es.
     * @return $this
     */
    public function setParcelarApenasMinimo($parcelar_apenas_minimo)
    {
        
        $this->parcelar_apenas_minimo = $parcelar_apenas_minimo;
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
     * @param string $usuario Nome do usu\u00C3\u00A1rio.
     * @return $this
     */
    public function setUsuario($usuario)
    {
        
        $this->usuario = $usuario;
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
