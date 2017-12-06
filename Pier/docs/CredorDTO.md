# CredorDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id_pessoa_juridica** | **int** | Identificador da pessoa jur\u00C3\u00ADdica do credor | 
**nome** | **string** | Nome do credor | [optional] 
**periodicidade** | **string** | Periodicidade do pagamento | 
**pagamento_semanal** | **string** | Dia para pagamento semanal | [optional] 
**pagamento_mensal** | **int** | Dia da data para o pagamento mensal | [optional] 
**pagamento_decendial_primeiro** | **int** | Dia da data para o primeiro pagamento decendial | [optional] 
**pagamento_decendial_segundo** | **int** | Dia da data para o segundo pagamento decendial | [optional] 
**pagamento_decendial_terceiro** | **int** | Dia da data para o terceiro pagamento decendial | [optional] 
**pagamento_quinzenal_primeiro** | **int** | Dia da data para o primeiro pagamento quinzenal | [optional] 
**pagamento_quinzenal_segundo** | **int** | Dia da data para o segundo pagamento quinzenal | [optional] 
**credor_banco** | **bool** | Indica se este credor pode ser um Credor RAV de outros credores | [optional] 
**percentual_rav** | [**Number**](Number.md) | Valor percentual do RAV do credor | 
**recebe_rav** | **string** | Indica se o credor recebe RAV e o tipo | [optional] 
**percentual_multiplica** | [**Number**](Number.md) | Percentual Multiplica | [optional] 
**taxa_adm** | [**Number**](Number.md) | Taxa Administrativa | [optional] 
**taxa_banco** | [**Number**](Number.md) | Taxa do Banco | [optional] 
**limite_rav** | [**Number**](Number.md) | Valor limite do RAV | [optional] 
**id_credor_rav** | **int** | C\u00C3\u00B3digo identificador do credor RAV | [optional] 
**banco** | **int** | C\u00C3\u00B3digo do banco | [optional] 
**agencia** | **int** | Raz\u00C3\u00A3o social da pessoa jur\u00C3\u00ADdica | [optional] 
**digito_verificador_agencia** | **string** | D\u00C3\u00ADgito Verificador da ag\u00C3\u00AAncia | [optional] 
**conta_corrente** | **string** | C\u00C3\u00B3digo da Conta Corrente | [optional] 
**digito_verificador_conta_corrente** | **string** | D\u00C3\u00ADgito Verificador da Conta Corrente | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


