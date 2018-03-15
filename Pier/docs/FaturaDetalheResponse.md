# FaturaDetalheResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id_conta** | **int** | C\u00F3digo de identifica\u00E7\u00E3o da conta. | [optional] 
**situacao_processamento** | **string** | Situa\u00E7\u00E3o de Processamento da fatura. | [optional] 
**pagamento_efetuado** | **bool** | Status de pagamento efetuado. | [optional] 
**data_vencimento_fatura** | **string** | Data de vencimento da fatura. | [optional] 
**data_vencimento_real** | **string** | Data de vencimento real da fatura. | [optional] 
**data_fechamento** | **string** | Data de fechamento da fatura. | [optional] 
**valor_total** | [**Number**](Number.md) | Valor total da fatura. | [optional] 
**valor_pagamento_minimo** | [**Number**](Number.md) | Valor do pagamento m\u00EDnimo. | [optional] 
**lancamentos_fatura_response** | [**\br.com.conductor.pier.api.v2.model\LancamentoFaturaResponse[]**](LancamentoFaturaResponse.md) | Lista de lan\u00E7amentos da fatura. | [optional] 
**saldo_anterior** | [**Number**](Number.md) | Valor do saldo anterior. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


