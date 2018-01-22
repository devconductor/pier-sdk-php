# TransacaoPaySecureRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**data_hora_transacao** | **string** | Data e hora utilizado na gera\u00C3\u00A7\u00C3\u00A3o do criptograma em GMT - 0 | [optional] 
**numero_cartao** | **string** | Numero do cartao (criptografado) | [optional] 
**id_cartao** | **int** | Id do cart\u00C3\u00A3o | [optional] 
**valor** | [**Number**](Number.md) | Valor da transa\u00C3\u00A7\u00C3\u00A3o em moeda local | [optional] 
**nsu_origem** | **string** | N\u00C3\u00BAmero Sequencial \u00C3\u009Anico que identifica a transa\u00C3\u00A7\u00C3\u00A3o no sistema que a originou (critografado). | [optional] 
**nome_portador_cartao** | **string** | Nome do Portador do Cart\u00C3\u00A3o que originou a transa\u00C3\u00A7\u00C3\u00A3o (criptografado). | [optional] 
**origem** | **string** | Origem da transa\u00C3\u00A7\u00C3\u00A3o | [optional] 
**terminal_requisitante** | **string** | Apresenta a identifica\u00C3\u00A7\u00C3\u00A3o do terminal requisitante | 
**codigo_processamento** | **string** | C\u00C3\u00B3digo de Processamento que identifica o Tipo da Transa\u00C3\u00A7\u00C3\u00A3o. | 
**data_validade_cartao** | **string** | Data de Validade do Cart\u00C3\u00A3o. Ex: AAMM | 
**numero_estabelecimento** | **string** | N\u00C3\u00BAmero do Estabelecimento (N\u00C3\u00BAmero+DV). | 
**numero_parcelas** | **int** | N\u00C3\u00BAmero de Parcelas. | 
**codigo_seguranca_cartao** | **string** | C\u00C3\u00B3digo de Seguran\u00C3\u00A7a do Cart\u00C3\u00A3o (criptografado). | 
**sort** | **string[]** | Tipo de ordena\u00C3\u00A7\u00C3\u00A3o dos registros. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


