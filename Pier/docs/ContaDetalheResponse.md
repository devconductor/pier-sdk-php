# ContaDetalheResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | C\u00F3digo de identifica\u00E7\u00E3o de conta (id). | [optional] 
**id_pessoa** | **int** | C\u00F3digo de Identifica\u00E7\u00E3o da Pessoa Titular da Conta (id). | [optional] 
**nome** | **string** | Apresenta o &#39;Nome Completo da PF&#39; ou o &#39;Nome Completo da Raz\u00E3o Social (Nome Empresarial)&#39;. | [optional] 
**id_produto** | **int** | C\u00F3digo de identifica\u00E7\u00E3o do produto ao qual a conta faz parte. (id). | [optional] 
**id_origem_comercial** | **int** | C\u00F3digo de Identifica\u00E7\u00E3o da Origem Comercial (id) que deu origem a Conta. | [optional] 
**nome_origem_comercial** | **string** | Nome da origem comercial | [optional] 
**id_fantasia_basica** | **int** | C\u00F3digo de Identifica\u00E7\u00E3o da Fantasia Basica (id). | [optional] 
**nome_fantasia_basica** | **string** | Nome da Fantasia Basica | [optional] 
**id_status_conta** | **int** | C\u00F3digo de Identifica\u00E7\u00E3o do status atribuido a conta. | [optional] 
**status_conta** | **string** | Descri\u00E7\u00E3o do status da conta | [optional] 
**dia_vencimento** | **int** | Apresenta o dia de vencimento. | [optional] 
**melhor_dia_compra** | **int** | Apresenta o melhor dia de compra. | [optional] 
**data_status_conta** | **string** | Apresenta a data em que o idStatusConta atual fora atribu\u00EDdo para ela. | [optional] 
**valor_renda** | [**Number**](Number.md) | Valor da renda comprovada. | [optional] 
**data_cadastro** | **string** | Apresenta a data em que o cart\u00E3o foi gerado. | [optional] 
**data_ultima_alteracao_vencimento** | **string** | Apresenta a data da ultima altera\u00E7\u00E3o de vencimento. | [optional] 
**data_hora_ultima_compra** | **string** | Apresenta a data da ultima altera\u00E7\u00E3o de vencimento. | [optional] 
**numero_agencia** | **int** | N\u00FAmero da ag\u00EAncia. | [optional] 
**numero_conta_corrente** | **string** | N\u00FAmero da conta corrente. | [optional] 
**forma_envio_fatura** | **string** | Forma de envio da fatura. | [optional] 
**titular** | **bool** | Apresenta se a pessoa \u00E9 titular da conta. | [optional] 
**limite_global** | [**Number**](Number.md) | Apresenta o valor do limite de cr\u00E9dito que o portador do cart\u00E3o possui. | [optional] 
**limite_saque_global** | [**Number**](Number.md) | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00E9dito que o portador pode utilizar para realizar transa\u00E7\u00F5es de Saque Nacional. | [optional] 
**saldo_disponivel_global** | [**Number**](Number.md) | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00E9dito que o portador possui para uso exclusivo em Compras Nacionais. | [optional] 
**saldo_disponivel_saque** | [**Number**](Number.md) | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00E9dito que o portador pode utilizar para realizar transa\u00E7\u00F5es de Saque Nacional dentro de cada ciclo de faturamento. | [optional] 
**dias_atraso** | **int** | Apresenta a quantidade de dias que a conta esta em atraso | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


