# DetalheOperacaoResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id_operacao** | **int** | C\u00C3\u00B3digo que identifica a opera\u00C3\u00A7\u00C3\u00A3o | [optional] 
**codigo_processamento** | **string** | C\u00C3\u00B3digo de processamento usado em transa\u00C3\u00A7\u00C3\u00B5es com o autorizador | [optional] 
**codigo_processamento_cancelamento** | **string** | C\u00C3\u00B3digo de processamento usado para cancelar transa\u00C3\u00A7\u00C3\u00B5es no autorizador | [optional] 
**nome_operacao** | **string** | Nome da opera\u00C3\u00A7\u00C3\u00A3o | [optional] 
**descricao_operacao** | **string** | Descri\u00C3\u00A7\u00C3\u00A3o da opera\u00C3\u00A7\u00C3\u00A3o | [optional] 
**plano_minimo** | **int** | Quantidade m\u00C3\u00ADnima de meses permitido para opera\u00C3\u00A7\u00C3\u00A3o | [optional] 
**plano_maximo** | **int** | Quantidade M\u00C3\u00A1ximo de meses permitido para opera\u00C3\u00A7\u00C3\u00A3o | [optional] 
**valor_minimo** | [**Number**](Number.md) |  Valor m\u00C3\u00ADnimo permitido permitido para opera\u00C3\u00A7\u00C3\u00A3o | [optional] 
**valor_maximo** | [**Number**](Number.md) |  Valor m\u00C3\u00A1ximo permitido permitido para opera\u00C3\u00A7\u00C3\u00A3o | [optional] 
**flag_cobra_juros** | **bool** | Flag indicativa para crobran\u00C3\u00A7a de juros | [optional] 
**taxa_juros** | [**Number**](Number.md) | Valor do juros a ser cobrado, caso opera\u00C3\u00A7\u00C3\u00A3o cobre juros | [optional] 
**flag_cobra_tarifa** | **bool** | Flag indicativa para crobran\u00C3\u00A7a de tarifas | [optional] 
**taxa_tarifa** | [**Number**](Number.md) | Valor da tarifa a ser cobrado, caso opera\u00C3\u00A7\u00C3\u00A3o cobre tarifas | [optional] 
**valor_tac** | [**Number**](Number.md) | Valor da taxa de abertura de conta | [optional] 
**percentual_tac** | [**Number**](Number.md) | Percentual da taxa de abertura de conta | [optional] 
**valor_operacao** | [**Number**](Number.md) | Valor da opera\u00C3\u00A7\u00C3\u00A3o | [optional] 
**carencia** | **int** | Quantidade de meses para car\u00C3\u00AAncia | [optional] 
**excedente_permitido** | [**Number**](Number.md) | Valor excedente permitido para opera\u00C3\u00A7\u00C3\u00A3o | [optional] 
**flag_permitir_parcelamento** | **bool** | Permitir transa\u00C3\u00A7\u00C3\u00B5es parceladas | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

