# ContaDetalheResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o de conta (id). | [optional] 
**id_pessoa** | **int** | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Pessoa Titular da Conta (id). | [optional] 
**nome** | **string** | Apresenta o &#39;Nome Completo da PF&#39; ou o &#39;Nome Completo da Raz\u00C3\u00A3o Social (Nome Empresarial)&#39;. | 
**id_produto** | **int** | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do produto ao qual a conta faz parte. (id). | [optional] 
**id_origem_comercial** | **int** | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Origem Comercial (id) que deu origem a Conta. | [optional] 
**nome_origem_comercial** | **string** | Nome da origem comercial | 
**id_fantasia_basica** | **int** | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Fantasia Basica (id). | [optional] 
**nome_fantasia_basica** | **string** | Nome da Fantasia Basica | 
**id_status_conta** | **int** | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Produto a qual o cart\u00C3\u00A3o pertence (id). | [optional] 
**status_conta** | **string** | Descri\u00C3\u00A7\u00C3\u00A3o do status da conta | [optional] 
**dia_vencimento** | **int** | Apresenta o dia de vencimento. | [optional] 
**melhor_dia_compra** | **int** | Apresenta o melhor dia de compra. | [optional] 
**data_status_conta** | [**\DateTime**](\DateTime.md) | Apresenta a data em que o idStatusConta atual fora atribu\u00C3\u00ADdo para ela. | [optional] 
**valor_renda** | [**Number**](Number.md) | Valor da renda comprovada. | [optional] 
**data_cadastro** | [**\DateTime**](\DateTime.md) | Apresenta a data em que o cart\u00C3\u00A3o foi gerado. | [optional] 
**data_ultima_alteracao_vencimento** | [**\DateTime**](\DateTime.md) | Apresenta a data da ultima altera\u00C3\u00A7\u00C3\u00A3o de vencimento. | [optional] 
**data_hora_ultima_compra** | [**\DateTime**](\DateTime.md) | Apresenta a data da ultima altera\u00C3\u00A7\u00C3\u00A3o de vencimento. | [optional] 
**numero_agencia** | **int** | N\u00C3\u00BAmero da ag\u00C3\u00AAncia. | [optional] 
**numero_conta_corrente** | **string** | N\u00C3\u00BAmero da conta corrente. | [optional] 
**forma_envio_fatura** | **string** | Forma de envio da fatura. | [optional] 
**titular** | **bool** | Apresenta se a pessoa \u00C3\u00A9 titular da conta. | [optional] 
**limite_global** | [**Number**](Number.md) | Apresenta o valor do limite de cr\u00C3\u00A9dito que o portador do cart\u00C3\u00A3o possui. | 
**limite_saque_global** | [**Number**](Number.md) | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador pode utilizar para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Nacional. | 
**saldo_disponivel_global** | [**Number**](Number.md) | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador possui para uso exclusivo em Compras Nacionais. | 
**saldo_disponivel_saque** | [**Number**](Number.md) | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00C3\u00A9dito que o portador pode utilizar para realizar transa\u00C3\u00A7\u00C3\u00B5es de Saque Nacional dentro de cada ciclo de faturamento. | 
**dias_atraso** | **int** | Apresenta a quantidade de dias que a conta esta em atraso | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


