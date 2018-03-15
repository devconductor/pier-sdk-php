# TransacaoNaoProcessadaResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id_tipo_transacao_nao_processada** | **int** | C\u00F3digo de Identifica\u00E7\u00E3o do Tipo da Transa\u00E7\u00E3o. | [optional] 
**descricao_tipo_transacao_nao_processada** | **string** | Descri\u00E7\u00E3o do Tipo da Transa\u00E7\u00E3o n\u00E3o Processada. | [optional] 
**descricao_abreviada** | **string** | Descri\u00E7\u00E3o Abreviada da Transa\u00E7\u00E3o. | [optional] 
**id_conta** | **int** | C\u00F3digo de Identifica\u00E7\u00E3o da Conta (id). | [optional] 
**cartao_mascarado** | **string** | N\u00FAmero do Cart\u00E3o em Formato 0000XXXXXXXX0000. | [optional] 
**nome_portador** | **string** | Nome completo do Portador do Cart\u00E3o. | [optional] 
**data_origem** | **string** | Data em que a Transa\u00E7\u00E3o foi realizada. | [optional] 
**data_faturamento** | **string** | Data de Faturamento da Transa\u00E7\u00E3o. | [optional] 
**data_vencimento** | **string** | Data de Vencimento da Fatura. | [optional] 
**modo_entrada_transacao** | **string** | Descreve o modo utilizado para realizar a leitura dos dados do cart\u00E3o para realizar a Transa\u00E7\u00E3o. | [optional] 
**valor_taxa_embarque** | [**Number**](Number.md) | Valor da Taxa de Embarque em Real (BRL) quando a transa\u00E7\u00E3o for relacionada a Compra de Passagens A\u00E9reas. | [optional] 
**valor_entrada** | [**Number**](Number.md) | Valor da Entrada em Real (BRL) quando a transa\u00E7\u00E3o for do tipo Parcelada com o pagamento de um valor de Entrada. | [optional] 
**valor_brl** | [**Number**](Number.md) | Valor da Transa\u00E7\u00E3o em Real (BRL). | [optional] 
**valor_usd** | [**Number**](Number.md) | Valor da Transa\u00E7\u00E3o em D\u00F3lar Americano (USD). | [optional] 
**cotacao_usd** | [**Number**](Number.md) | Valor do D\u00F3lar Americano (USD) convertido em Real (BRL). | [optional] 
**data_cotacao_usd** | **string** | Data de Fechamento da Cota\u00E7\u00E3o do D\u00F3lar Americano (USD). | [optional] 
**codigo_moeda_origem** | **string** | C\u00F3digo de Identifica\u00E7\u00E3o da Moeda utilizada na Transa\u00E7\u00E3o, seguindo padr\u00E3o ISO 4217. | [optional] 
**codigo_moeda_destino** | **string** | C\u00F3digo de Identifica\u00E7\u00E3o da Moeda da Transa\u00E7\u00E3o ap\u00F3s a convers\u00E3o, seguindo padr\u00E3o ISO 4217. | [optional] 
**codigo_autorizacao** | **string** | C\u00F3digo de Autoriza\u00E7\u00E3o da Transa\u00E7\u00E3o. | [optional] 
**codigo_referencia** | **string** | C\u00F3digo de Refer\u00EAncia da Transa\u00E7\u00E3o quando utilizado Cart\u00E3o Bandeirado. | [optional] 
**codigo_terminal** | **string** | C\u00F3digo de Identifica\u00E7\u00E3o da origem da captura da Transa\u00E7\u00E3o. | [optional] 
**codigo_mcc** | **int** | C\u00F3digo de identifica\u00E7\u00E3o da categoria do Estabelecimento. | [optional] 
**grupo_mcc** | **int** | C\u00F3digo de identifica\u00E7\u00E3o do grupo do Estabelecimento. | [optional] 
**grupo_descricao_mcc** | **string** | Descri\u00E7\u00E3o do grupo do Estabelecimento. | [optional] 
**id_estabelecimento** | **int** | C\u00F3digo de Identifica\u00E7\u00E3o do Estabelecimento (id). | [optional] 
**nome_estabelecimento** | **string** | Nome do Estabelecimento. | [optional] 
**nome_fantasia_estabelecimento** | **string** | Nome Fantasia do Estabelecimento. | [optional] 
**localidade_estabelecimento** | **string** | Localidade do Estabelecimento. | [optional] 
**plano_parcelamento** | **int** | Quando a Transa\u00E7\u00E3o for do tipo Parcelada, apresenta o n\u00FAmero total de Parcelas. | [optional] 
**numero_parcela** | **int** | Quando a Transa\u00E7\u00E3o for do tipo Parcelada, apresenta o n\u00FAmero da Parcela. | [optional] 
**detalhes_transacao** | **string** | Detalhes complementares a respeito da Transa\u00E7\u00E3o. | [optional] 
**flag_credito** | **int** | Quando ativa, indica que a Transa\u00E7\u00E3o \u00E9 do Tipo &#39;Cr\u00E9dito&#39;. | [optional] 
**flag_faturado** | **int** | Quando ativa, indica que a Transa\u00E7\u00E3o foi consolidada em uma Fatura. | [optional] 
**flag_estorno** | **int** | Quando ativa, indica que a Transa\u00E7\u00E3o foi estornada. | [optional] 
**id_transacao_estorno** | **int** | C\u00F3digo de Identifica\u00E7\u00E3o da Transa\u00E7\u00E3o (id) que gerou o estorno. | [optional] 
**status** | **int** | Atributo que representa o c\u00F3digo identificador do status da transa\u00E7\u00E3o. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


