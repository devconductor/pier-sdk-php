# FaturaConsignadaDetalheResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | C\u00F3digo identificador da fatura. | [optional] 
**id_conta** | **int** | C\u00F3digo identificador da conta (id). | [optional] 
**limite_global** | [**Number**](Number.md) | Apresenta o valor do limite de cr\u00E9dito que o portador do cart\u00E3o possui. | 
**flag_emite_fatura** | **int** | C\u00F3digo identificador da conta a qual a fatura se refere. | [optional] 
**limite_compra** | [**Number**](Number.md) | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00E9dito que o portador possui para uso exclusivo em Compras Nacionais. | 
**data_vencimento_fatura** | **string** | Data de vencimento da fatura. | [optional] 
**limite_parcelado** | [**Number**](Number.md) | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00E9dito que o portador possui para realizar transa\u00E7\u00F5es de compras parceladas. | 
**limite_parcelas** | [**Number**](Number.md) | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00E9dito que portador pode acumular a partir da soma das parcelas das compras que forem realizadas nesta modalidade. | 
**valor_total_fatura** | [**Number**](Number.md) | Valor para pagamento total da fatura. | [optional] 
**valor_fatura_anterior** | [**Number**](Number.md) | Valor total da fatura anterior. | [optional] 
**valor_pagamento_minimo** | [**Number**](Number.md) | Valor m\u00EDnimo para pagamento da fatura. | [optional] 
**valor_pagamento_consignado** | [**Number**](Number.md) | Valor da fatura pago atrav\u00E9s de desconto em folha. | [optional] 
**limite_saque_global** | [**Number**](Number.md) | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00E9dito que o portador pode utilizar para realizar transa\u00E7\u00F5es de Saque Nacional. | 
**valor_pagamento_complementar** | [**Number**](Number.md) | Valor complementar para considerar o pagamento m\u00EDnimo da fatura. | [optional] 
**limite_saque_periodo** | [**Number**](Number.md) | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00E9dito que o portador pode utilizar para realizar transa\u00E7\u00F5es de Saque Nacional dentro de cada ciclo de faturamento. | 
**total_compras_nacionais** | [**Number**](Number.md) | Valor total das compras nacionais lan\u00E7adas na fatura. | [optional] 
**limite_consignado** | [**Number**](Number.md) | Quando utilizado pelo emissor, este campo apresenta o valor da margem de cr\u00E9dito que ele poder\u00E1 utilizar para ser cobrado de forma consignada (desconto em folha) em seu sal\u00E1rio/vencimentos. | 
**total_compras_internacionas** | [**Number**](Number.md) | Valor total das compras internacionais lan\u00E7adas na fatura. | [optional] 
**limite_internacional_compra** | [**Number**](Number.md) | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00E9dito que o portador possui para uso exclusivo em Compras Internacionais. | 
**total_saques_nacionais** | [**Number**](Number.md) | Valor total dos saques nacionais lan\u00E7ados na fatura. | [optional] 
**limite_internacional_parcelado** | [**Number**](Number.md) | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00E9dito que o portador possui para realizar transa\u00E7\u00F5es Internacionais de Compras Parceladas. | 
**total_saques_internacionais** | [**Number**](Number.md) | Valor total dos saques internacionais lan\u00E7ados na fatura. | [optional] 
**limite_internacional_parcelas** | [**Number**](Number.md) | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00E9dito que portador pode acumular a partir da soma das parcelas das compras internacionais que forem realizadas nesta modalidade. | 
**total_debitos_nacionais** | [**Number**](Number.md) | Valor total dos d\u00E9bitos nacionais lan\u00E7ados na fatura. | [optional] 
**limite_internacional_saque_global** | [**Number**](Number.md) | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00E9dito que o portador pode utilizar para realizar transa\u00E7\u00F5es de Saque Internacional. | 
**total_debitos_recorrentes** | [**Number**](Number.md) | Valor total dos d\u00E9bitos recorrentes lan\u00E7ados na fatura. | [optional] 
**limite_internacional_saque_periodo** | [**Number**](Number.md) | Quando utilizado pelo emissor, este campo apresenta o valor do limite de cr\u00E9dito que o portador pode utilizar para realizar transa\u00E7\u00F5es de Saque Internacional dentro de cada ciclo de faturamento. | 
**total_debitos_internacionais** | [**Number**](Number.md) | Valor total dos d\u00E9bitos internacionais lan\u00E7ados na fatura. | [optional] 
**saldo_disponivel_global** | [**Number**](Number.md) | Apresenta o valor de cr\u00E9dito que o portador possui dispon\u00EDvel para realizar transa\u00E7\u00F5es. | 
**total_debitos_diversos_nacionais** | [**Number**](Number.md) | Valor total dos d\u00E9bitos diversos nacionais lan\u00E7ados na fatura. | [optional] 
**saldo_disponivel_compra** | [**Number**](Number.md) | Quando utilizado pelo emissor a modalidade limiteCompra, este campo apresentar\u00E1 o valor de cr\u00E9dito que o portador possui dispon\u00EDvel para realizar transa\u00E7\u00F5es de compra Nacional. | 
**total_debitos_opcionais** | [**Number**](Number.md) | Valor total dos d\u00E9bitos diversos opcionais lan\u00E7ados na fatura. | [optional] 
**saldo_disponivel_parcelado** | [**Number**](Number.md) | Quando utilizado pelo emissor a modalidade limiteParcelado, este campo apresentar\u00E1 o valor de cr\u00E9dito que o portador possui dispon\u00EDvel para realizar transa\u00E7\u00F5es de compra Nacional. | 
**total_pagamentos** | [**Number**](Number.md) | Valor total dos pagamentos lan\u00E7ados na fatura. | [optional] 
**saldo_disponivel_parcelas** | [**Number**](Number.md) | Quando utilizado pelo emissor a modalidade limiteParcelas, este campo apresentar\u00E1 o valor de cr\u00E9dito que o portador possui dispon\u00EDvel para utilizar como valor de parcelas Nacionais em um determinado ciclo de faturamento. | 
**total_creditos_nacionais** | [**Number**](Number.md) | Valor total dos cr\u00E9ditos nacionais lan\u00E7ados na fatura. | [optional] 
**total_ajustes** | [**Number**](Number.md) | Valor total dos ajustes lan\u00E7ados na fatura. | [optional] 
**total_tarifas** | [**Number**](Number.md) | Valor total das tarifas lan\u00E7adas na fatura. | [optional] 
**total_multa** | [**Number**](Number.md) | Valor total da multa lan\u00E7ada na fatura. | [optional] 
**saldo_disponivel_saque** | [**Number**](Number.md) | Quando utilizado pelo emissor a modalidade limiteSaque, este campo apresentar\u00E1 o valor de cr\u00E9dito que o portador possui dispon\u00EDvel para realizar transa\u00E7\u00F5es de Saque Nacional. | 
**total_juros** | [**Number**](Number.md) | Valor total dos juros de mora lan\u00E7ados na fatura. | [optional] 
**saldo_pontos_fidelidade** | [**Number**](Number.md) | Quando utilizado um programa de fidelidade pelo emissor, este campo apresentar\u00E1 o saldo atual de pontos que o portador possui. | 
**taxa_rotativo** | [**Number**](Number.md) | Valor percentual da taxa de juros rotativos. | [optional] 
**saldo_disponivel_compra_internacional** | [**Number**](Number.md) | Quando utilizado pelo emissor a modalidade limiteCompraInternacional, este campo apresentar\u00E1 o valor de cr\u00E9dito que o portador possui dispon\u00EDvel para realizar transa\u00E7\u00F5es de Compra Internacional. | 
**taxa_saque** | [**Number**](Number.md) | Valor percentual da taxa de saque. | [optional] 
**saldo_disponivel_saque_internacional** | [**Number**](Number.md) | Quando utilizado pelo emissor a modalidade limiteSaqueInternacional, este campo apresentar\u00E1 o valor de cr\u00E9dito que o portador possui dispon\u00EDvel para realizar transa\u00E7\u00F5es de Saque Internacional. | 
**taxa_maxima_proximo_periodo** | [**Number**](Number.md) | Valor m\u00E1ximo percentual da taxa de encargos para o pr\u00F3ximo per\u00EDodo. | [optional] 
**total_servicos** | [**Number**](Number.md) | Apresenta a soma de todos os seguros cobrados na fatura do cliente. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


