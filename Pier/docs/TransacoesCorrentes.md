# TransacoesCorrentes

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da transfer\u00C3\u00AAncia (id). | [optional] 
**tipo_transacao** | **string** | Descri\u00C3\u00A7\u00C3\u00A3o do Tipo da Transa\u00C3\u00A7\u00C3\u00A3o. | [optional] 
**status_transacao** | **string** | Status de Processamento da Transa\u00C3\u00A7\u00C3\u00A3o. | [optional] 
**id_evento** | **int** | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Evento que originou a Transa\u00C3\u00A7\u00C3\u00A3o (id). | [optional] 
**tipo_evento** | **string** | Descri\u00C3\u00A7\u00C3\u00A3o do Evento que representa a Transa\u00C3\u00A7\u00C3\u00A3o. | [optional] 
**id_conta** | **int** | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Conta (id). | [optional] 
**cartao_mascarado** | **string** | N\u00C3\u00BAmero do Cart\u00C3\u00A3o em Formato 0000XXXXXXXX0000. | [optional] 
**nome_portador** | **string** | Nome completo do Portador do Cart\u00C3\u00A3o. | [optional] 
**data_transacao_utc** | **string** | Data em que a Transa\u00C3\u00A7\u00C3\u00A3o foi realizada sob o padr\u00C3\u00A3o de Tempo Universal Coordenado (UTC). | [optional] 
**data_faturamento** | [**\DateTime**](\DateTime.md) | Data de Faturamento da Transa\u00C3\u00A7\u00C3\u00A3o. | [optional] 
**data_vencimento** | **string** | Data de Vencimento da Fatura. | [optional] 
**modo_entrada_transacao** | **string** | Descreve o modo utilizado para realizar a leitura dos dados do cart\u00C3\u00A3o para realizar a Transa\u00C3\u00A7\u00C3\u00A3o. | [optional] 
**valor_taxa_embarque** | [**Number**](Number.md) | Valor da Taxa de Embarque em Real (BRL) quando a transa\u00C3\u00A7\u00C3\u00A3o for relacionada a Compra de Passagens A\u00C3\u00A9reas. | [optional] 
**valor_entrada** | [**Number**](Number.md) | Valor da Entrada em Real (BRL) quando a transa\u00C3\u00A7\u00C3\u00A3o for do tipo Parcelada com o pagamento de um valor de Entrada. | [optional] 
**valor_brl** | [**Number**](Number.md) | Valor da Transa\u00C3\u00A7\u00C3\u00A3o em Real (BRL). | [optional] 
**cotacao_usd** | [**Number**](Number.md) | Valor do D\u00C3\u00B3lar Americano (USD) convertido em Real (BRL). | [optional] 
**valor_usd** | [**Number**](Number.md) | Valor da Transa\u00C3\u00A7\u00C3\u00A3o em D\u00C3\u00B3lar Americano (USD). | [optional] 
**data_cotacao_usd** | [**\DateTime**](\DateTime.md) | Data de Fechamento da Cota\u00C3\u00A7\u00C3\u00A3o do D\u00C3\u00B3lar Americano (USD). | [optional] 
**codigo_moeda_origem** | **string** | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Moeda utilizada na Transa\u00C3\u00A7\u00C3\u00A3o, seguindo padr\u00C3\u00A3o ISO 4217. | [optional] 
**codigo_moeda_destino** | **string** | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Moeda da Transa\u00C3\u00A7\u00C3\u00A3o ap\u00C3\u00B3s a convers\u00C3\u00A3o, seguindo padr\u00C3\u00A3o ISO 4217. | [optional] 
**codigo_autorizacao** | **string** | C\u00C3\u00B3digo de Autoriza\u00C3\u00A7\u00C3\u00A3o da Transa\u00C3\u00A7\u00C3\u00A3o. | [optional] 
**codigo_referencia** | **string** | C\u00C3\u00B3digo de Refer\u00C3\u00AAncia da Transa\u00C3\u00A7\u00C3\u00A3o quando utilizado Cart\u00C3\u00A3o Bandeirado. | [optional] 
**codigo_terminal** | **string** | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da origem da captura da Transa\u00C3\u00A7\u00C3\u00A3o. | [optional] 
**codigo_mcc** | **int** | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da categoria do Estabelecimento. | [optional] 
**id_estabelecimento** | **int** | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Estabelecimento (id). | [optional] 
**nome_estabelecimento** | **string** | Nome do Estabelecimento. | [optional] 
**localidade_estabelecimento** | **string** | Localidade do Estabelecimento. | [optional] 
**plano_parcelamento** | **int** | Quando a Transa\u00C3\u00A7\u00C3\u00A3o for do tipo Parcelada, apresenta o n\u00C3\u00BAmero total de Parcelas. | [optional] 
**numero_parcela** | **int** | Quando a Transa\u00C3\u00A7\u00C3\u00A3o for do tipo Parcelada, apresenta o n\u00C3\u00BAmero da Parcela. | [optional] 
**detalhes_transacao** | **string** | Detalhes complementares a respeito da Transa\u00C3\u00A7\u00C3\u00A3o. | [optional] 
**flag_credito** | **int** | Quando ativa, indica que a Transa\u00C3\u00A7\u00C3\u00A3o \u00C3\u00A9 do Tipo &#39;Cr\u00C3\u00A9dito&#39;. | [optional] 
**flag_faturado** | **int** | Quando ativa, indica que a Transa\u00C3\u00A7\u00C3\u00A3o foi consolidada em uma Fatura. | [optional] 
**flag_estorno** | **int** | Quando ativa, indica que a Transa\u00C3\u00A7\u00C3\u00A3o foi estornada. | [optional] 
**id_transacao_estorno** | **int** | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Transa\u00C3\u00A7\u00C3\u00A3o (id) que gerou o estorno. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


