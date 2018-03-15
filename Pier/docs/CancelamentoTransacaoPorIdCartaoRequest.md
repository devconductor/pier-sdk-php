# CancelamentoTransacaoPorIdCartaoRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**nsu_origem** | **string** | N\u00FAmero Sequencial \u00DAnico que identifica a transa\u00E7\u00E3o no sistema que a originou. | 
**nsu_origem_transacao_cancelada** | **string** | N\u00FAmero Sequencial \u00DAnico que identifica a transa\u00E7\u00E3o no sistema a ser cancelada. | 
**codigo_processamento** | **string** | C\u00F3digo de Processamento que identifica o Tipo da Transa\u00E7\u00E3o. | 
**data_hora_transacao_cancelada** | **string** | Apresenta a data e hora local da transa\u00E7\u00E3o a ser cancelada yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ. Ex: 2000-10-31T01:30:00.000-05:00 | 
**nsu_autorizacao_transacao_cancelada** | **string** | N\u00FAmero Sequencial \u00DAnico do HOST que identifica a transa\u00E7\u00E3o no sistema que autorizou. | 
**valor_transacao** | [**Number**](Number.md) | Valor da transa\u00E7\u00E3o com duas casas decimais para os centavos. | 
**numero_estabelecimento** | **int** | N\u00FAmero do Estabelecimento (N\u00FAmero+DV). | 
**data_hora_terminal** | **string** | Apresenta a data e hora local da consulta yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ. Ex: 2000-10-31T01:30:00.000-05:00 | 
**terminal_requisitante** | **string** | Apresenta a identifica\u00E7\u00E3o do terminal requisitante | 
**numero_parcelas** | **int** | N\u00FAmero de Parcelas. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


