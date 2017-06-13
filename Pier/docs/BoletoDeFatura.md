# BoletoDeFatura

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**data_processamento** | **string** | Data do processamento (emiss\u00C3\u00A3o ou faturamento) do boleto | [optional] 
**data_documento** | **string** | Data do documento (impress\u00C3\u00A3o) | [optional] 
**data_vencimento** | **string** | Data do vencimento | [optional] 
**valor_boleto** | [**Number**](Number.md) | Valor do Boleto. | [optional] 
**numero_do_documento** | **string** | N\u00C3\u00BAmero do documento \u00C3\u00A9 o c\u00C3\u00B3digo informado pelo banco para identifica\u00C3\u00A7\u00C3\u00A3o do cliente | [optional] 
**nome_beneficiario** | **string** | Benefici\u00C3\u00A1rio \u00C3\u00A9 a pessoa/empresa que gera o boleto | [optional] 
**agencia** | **string** | Ag\u00C3\u00AAncia. | [optional] 
**codigo_beneficiario** | **string** | C\u00C3\u00B3digo do benefici\u00C3\u00A1rio | [optional] 
**digito_codigo_beneficiario** | **string** | D\u00C3\u00ADgito do c\u00C3\u00B3digo do benefici\u00C3\u00A1rio | [optional] 
**numero_convenio** | **string** | N\u00C3\u00BAmero do conv\u00C3\u00AAnio fornecido pelo banco \u00C3\u00A9 o c\u00C3\u00B3digo que identifica um emissor junto ao seu banco para associar seus boletos. | [optional] 
**carteira** | **string** | Carteira \u00C3\u00A9 o c\u00C3\u00B3digo informado pelo banco pra identifica\u00C3\u00A7\u00C3\u00A3o do tipo do boleto | [optional] 
**nosso_numero** | **string** | Nosso n\u00C3\u00BAmero \u00C3\u00A9 o c\u00C3\u00B3digo que o benefici\u00C3\u00A1rio escolhe para manter controle sobre seus boletos. Esse valor serve para o cedente identificar quais boletos foram pagos ou n\u00C3\u00A3o. Recomenda-se o uso de n\u00C3\u00BAmeros sequ\u00C3\u00AAnciais, na gera\u00C3\u00A7\u00C3\u00A3o de diversos boletos, para facilitar a identifica\u00C3\u00A7\u00C3\u00A3o dos boletos pagos | [optional] 
**banco** | **string** | Banco | [optional] 
**digito_nosso_numero** | **string** | D\u00C3\u00ADgito do nosso n\u00C3\u00BAmero | [optional] 
**aceite** | **bool** | Aceite informa ao banco se deve aceitar o boleto ap\u00C3\u00B3s a data de vencimento (padr\u00C3\u00A3o: \&quot;N\&quot;) | [optional] 
**especie_do_documento** | **string** | Esp\u00C3\u00A9cie do documento \u00C3\u00A9 o identificador do tipo de boleto (padr\u00C3\u00A3o: \&quot;DV\&quot;) | [optional] 
**especie** | **string** | Esp\u00C3\u00A9cie \u00C3\u00A9 o identificador da moeda do boleto (padr\u00C3\u00A3o: \&quot;R$\&quot;) | [optional] 
**instrucoes** | **string[]** | Instru\u00C3\u00A7\u00C3\u00B5es para o benefici\u00C3\u00A1rio | [optional] 
**locais_de_pagamento** | **string[]** | Locais de pagamento | [optional] 
**nome_pagador** | **string** | Pagador \u00C3\u00A9 a pessoa/empresa que deve pagar o boleto | [optional] 
**documento_beneficiario** | **string** | Documento do Beneficiario. | [optional] 
**documento_pagador** | **string** | Documento do pagador (CPF ou CNPJ) | [optional] 
**logradouro_pagador** | **string** | Logradouro do pagador | [optional] 
**bairro_pagador** | **string** | Bairro do pagador | [optional] 
**cep_pagador** | **string** | CEP do pagador | [optional] 
**cidade_pagador** | **string** | Cidade do pagador | [optional] 
**uf_pagador** | **string** | Unidade federativa do pagador | [optional] 
**codigo_de_barras** | **string** | Valor num\u00C3\u00A9rico do c\u00C3\u00B3digo de barras | [optional] 
**linha_digitavel** | **string** | Linha digit\u00C3\u00A1vel formatada | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


