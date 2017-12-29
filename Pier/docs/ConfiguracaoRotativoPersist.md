# ConfiguracaoRotativoPersist

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id_produto** | **int** | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Produto (idProduto). | [optional] 
**compoe_oferta_valor_rotativo** | **bool** | Quando verdadeiro, indica que o valor do rotativo deve compor a oferta de parcelamento. | [optional] 
**compoe_oferta_valor_nao_financiavel** | **bool** | Quando verdadeiro, indica que o valor n\u00C3\u00A3o financi\u00C3\u00A1vel deve compor a oferta de parcelamento. | [optional] 
**compoe_oferta_valor_novos_lancamentos** | **bool** | Quando verdadeiro, indica que o valor de novos lan\u00C3\u00A7amentos deve compor a oferta de parcelamento | [optional] 
**recalcula_parcelamento_para_entrada_maior** | **bool** | Quando verdadeiro, indica que deve recalcular o parcelamento caso o valor pago de entrada seja maior que o valor esperado | [optional] 
**minimo_parcelas_recalculo_parcelamento** | **bool** | Indica o m\u00C3\u00ADnimo de parcelas que ser\u00C3\u00A1 acatado no rec\u00C3\u00A1lculo do parcelamento. | [optional] 
**recalcula_parcelamento** | **bool** | Quando verdadeiro, indica que o parcelamento deve ser recalculado caso o valor calculado da oferta seja inferior ao valor configurado m\u00C3\u00ADnimo da parcela (valorMinimoParcela) e de percentual aberto | [optional] 
**numero_minimo_ofertas** | **bool** | N\u00C3\u00BAmero m\u00C3\u00ADnimo de parcelas que ser\u00C3\u00A1 acatado no recalculo da oferta. | [optional] 
**aceita_pagamento_maior_que_entrada** | **bool** | Quando verdadeiro, indica que valores pagos entre o valor da entrada e o m\u00C3\u00ADnimo da fatura ser\u00C3\u00A3o acatados para a ades\u00C3\u00A3o ao parcelamento | [optional] 
**antecipa_parcelamentos_abertos** | **bool** | Quando verdadeiro, indica que deve-se incluir o valor presente dos parcelamentos em aberto. | [optional] 
**valor_minimo_parcela** | [**Number**](Number.md) | Valor m\u00C3\u00ADnimo da parcela que deve ser aceito na oferta. | [optional] 
**percentual_limitar_valor_minimo_parcela** | [**Number**](Number.md) | Percentual sobre os valores de parcelamento anteriores em aberto que deve ser considerado para limitar valorMinimoParcela. | [optional] 
**id_regra_campanha** | **int** | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da regra de campanha. | [optional] 
**parcelar_apenas_minimo** | **bool** | Quando verdadeiro, indica que parcelamento ofertado ter\u00C3\u00A1 como valor base o valor m\u00C3\u00ADnimo das transa\u00C3\u00A7\u00C3\u00B5es. | [optional] 
**usuario** | **string** | Nome do usu\u00C3\u00A1rio | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


