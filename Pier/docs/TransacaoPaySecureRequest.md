# TransacaoPaySecureRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**data_hora_transacao** | **string** | Data e hora utilizado na gera\u00E7\u00E3o do criptograma em GMT - 0 | [optional] 
**numero_cartao** | **string** | Numero do cartao (criptografado) | [optional] 
**id_cartao** | **int** | Id do cart\u00E3o | [optional] 
**valor** | [**Number**](Number.md) | Valor da transa\u00E7\u00E3o em moeda local | [optional] 
**nsu_origem** | **string** | N\u00FAmero Sequencial \u00DAnico que identifica a transa\u00E7\u00E3o no sistema que a originou (critografado). | [optional] 
**nome_portador_cartao** | **string** | Nome do Portador do Cart\u00E3o que originou a transa\u00E7\u00E3o (criptografado). | [optional] 
**origem** | **string** | Origem da transa\u00E7\u00E3o | [optional] 
**terminal_requisitante** | **string** | Apresenta a identifica\u00E7\u00E3o do terminal requisitante | 
**codigo_processamento** | **string** | C\u00F3digo de Processamento que identifica o Tipo da Transa\u00E7\u00E3o. | 
**data_validade_cartao** | **string** | Data de Validade do Cart\u00E3o. Ex: AAMM | 
**numero_estabelecimento** | **string** | N\u00FAmero do Estabelecimento (N\u00FAmero+DV). | 
**numero_parcelas** | **int** | N\u00FAmero de Parcelas. | 
**codigo_seguranca_cartao** | **string** | C\u00F3digo de Seguran\u00E7a do Cart\u00E3o (criptografado). | 
**sort** | **string[]** | Tipo de ordena\u00E7\u00E3o dos registros. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


