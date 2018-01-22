# CancelamentoTransacaoPorIdCartaoRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**nsu_origem** | **string** | N\u00C3\u00BAmero Sequencial \u00C3\u009Anico que identifica a transa\u00C3\u00A7\u00C3\u00A3o no sistema que a originou. | 
**nsu_origem_transacao_cancelada** | **string** | N\u00C3\u00BAmero Sequencial \u00C3\u009Anico que identifica a transa\u00C3\u00A7\u00C3\u00A3o no sistema a ser cancelada. | 
**codigo_processamento** | **string** | C\u00C3\u00B3digo de Processamento que identifica o Tipo da Transa\u00C3\u00A7\u00C3\u00A3o. | 
**data_hora_transacao_cancelada** | **string** | Apresenta a data e hora local da transa\u00C3\u00A7\u00C3\u00A3o a ser cancelada yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ. Ex: 2000-10-31T01:30:00.000-05:00 | 
**nsu_autorizacao_transacao_cancelada** | **string** | N\u00C3\u00BAmero Sequencial \u00C3\u009Anico do HOST que identifica a transa\u00C3\u00A7\u00C3\u00A3o no sistema que autorizou. | 
**valor_transacao** | [**Number**](Number.md) | Valor da transa\u00C3\u00A7\u00C3\u00A3o com duas casas decimais para os centavos. | 
**numero_estabelecimento** | **int** | N\u00C3\u00BAmero do Estabelecimento (N\u00C3\u00BAmero+DV). | 
**data_hora_terminal** | **string** | Apresenta a data e hora local da consulta yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ. Ex: 2000-10-31T01:30:00.000-05:00 | 
**terminal_requisitante** | **string** | Apresenta a identifica\u00C3\u00A7\u00C3\u00A3o do terminal requisitante | 
**numero_parcelas** | **int** | N\u00C3\u00BAmero de Parcelas. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


