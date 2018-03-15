# AntecipacaoSimuladaResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**mcc** | **int** |  | [optional] 
**uf** | **string** |  | [optional] 
**id_antecipacao_simulada** | **int** | C\u00F3digo identificador da simula\u00E7\u00E3o de antecipa\u00E7\u00E3o. | [optional] 
**id_conta** | **int** | C\u00F3digo identificador da conta. | [optional] 
**id_compra** | **int** | C\u00F3digo identificador do evento compra. | [optional] 
**id_tipo_transacao** | **int** | C\u00F3digo identificador do tipo do evento compra. | [optional] 
**quantidade_parcelas_antecipaveis** | **int** | Quantidade de parcelas antecip\u00E1veis. | [optional] 
**valor_parcela** | [**Number**](Number.md) | Valor da parcela. | [optional] 
**data_hora_simulacao** | **string** | Data e hora em que a simula\u00E7\u00E3o foi feita. | [optional] 
**taxa_antecipacao_ano** | [**Number**](Number.md) | Taxa de antecipa\u00E7\u00E3o aplicada (ao ano). | [optional] 
**nome_estabelecimento** | **string** | Estabelecimento onde foi realizada a transa\u00E7\u00E3o | [optional] 
**status** | **string** | Descri\u00E7\u00E3o do status da autoriza\u00E7\u00E3o da compra. | [optional] 
**data_compra** | **string** | Data da compra. | [optional] 
**tipo_origem_transacao** | **string** | Tipo de transa\u00E7\u00E3o da compra. | [optional] 
**cidade** | **string** | Cidade onde a compra foi realizada. | [optional] 
**pais** | **string** | Pa\u00EDs onde a compra foi realizada. | [optional] 
**latitude** | **string** | Coordenada latitudinal da localiza\u00E7\u00E3o da compra. | [optional] 
**longitude** | **string** | Coordenada longitudinal da localiza\u00E7\u00E3o da compra. | [optional] 
**id_grupo_mcc** | **int** | C\u00F3digo de Identifica\u00E7\u00E3o do Grupo MCC da compra. | [optional] 
**descricao_grupo_mcc** | **string** | Descri\u00E7\u00E3o do Grupo MCC da compra. | [optional] 
**id_produto** | **int** | C\u00F3digo de Identifica\u00E7\u00E3o do produto da compra. | [optional] 
**descricao_produto** | **string** | Descri\u00E7\u00E3o do produto da compra. | [optional] 
**descricao_estabelecimento** | **string** | Descri\u00E7\u00E3o do estabelecimento da compra. | [optional] 
**nome_fantasia_estabelecimento** | **string** | Nome fantasia do estabelecimento da compra. | [optional] 
**detalhes** | [**\br.com.conductor.pier.api.v2.model\AntecipacaoSimuladaDetalhesResponse[]**](AntecipacaoSimuladaDetalhesResponse.md) | Detalhes da simula\u00E7\u00E3o. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


