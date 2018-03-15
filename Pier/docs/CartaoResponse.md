# CartaoResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | C\u00F3digo de Identifica\u00E7\u00E3o do Cart\u00E3o. | [optional] 
**flag_titular** | **int** | Apresenta o tipo do Portador do cart\u00E3o, sendo: (1: Titular, 0: Adicional). | [optional] 
**id_pessoa** | **int** | C\u00F3digo de Identifica\u00E7\u00E3o da Pessoa a qual o cart\u00E3o pertence | [optional] 
**sequencial_cartao** | **int** | N\u00FAmero sequencial do cart\u00E3o | [optional] 
**id_conta** | **int** | C\u00F3digo de Identifica\u00E7\u00E3o da Conta a qual o cart\u00E3o pertence. | [optional] 
**id_status** | **int** | C\u00F3digo de Identifica\u00E7\u00E3o do Status do Cart\u00E3o. | [optional] 
**data_status** | **string** | Apresenta a data em que o idStatusCartao atual do cart\u00E3o fora aplicado, quando houver. | [optional] 
**id_estagio** | **int** | C\u00F3digo de Identifica\u00E7\u00E3o do Est\u00E1gio de Impress\u00E3o do Cart\u00E3o. | [optional] 
**data_estagio** | **string** | Apresenta a data em que o idEstagio atual do cart\u00E3o fora aplicado, quando houver. | [optional] 
**numero_bin** | **int** | N\u00FAmero do bin do cart\u00E3o. | [optional] 
**numero_cartao** | **string** | Apresenta o n\u00FAmero do cart\u00E3o. | [optional] 
**numero_cartao_hash** | **int** | N\u00FAmero do cart\u00E3o hash. | [optional] 
**numero_cartao_criptografado** | **string** | N\u00FAmero do cart\u00E3o criptografado. | [optional] 
**data_emissao** | **string** | Apresenta a data de emiss\u00E3o do cart\u00E3o. | [optional] 
**data_validade** | **string** | Apresenta a data de validade do cart\u00E3o em formato yyyy-MM, quando houver. | [optional] 
**cartao_virtual** | **int** | Apresenta o status que informa se o cart\u00E3o \u00E9 virtual. Sendo: (1: True, 0: False). | [optional] 
**impressao_avulsa** | **int** | Quando ativa, indica que o cart\u00E3o fora impresso na Origem Comercial. | [optional] 
**data_impressao** | **string** | Apresenta a data em que o cart\u00E3o fora impresso, caso impress\u00E3o em loja, ou a data em que ele fora inclu\u00EDdo no arquivo para impress\u00E3o via gr\u00E1fica. | [optional] 
**nome_arquivo_impressao** | **string** | Apresenta o nome do arquivo onde o cart\u00E3o fora inclu\u00EDdo para impress\u00E3o por uma gr\u00E1fica, quando houver. | [optional] 
**id_produto** | **int** | C\u00F3digo de Identifica\u00E7\u00E3o do Produto a qual o cart\u00E3o pertence. | [optional] 
**nome_impresso** | **string** | Apresenta o nome impresso no cart\u00E3o. | [optional] 
**codigo_desbloqueio** | **string** | Apresenta um c\u00F3digo espec\u00EDfico para ser utilizado como vari\u00E1vel no processo de desbloqueio do cart\u00E3o para emissores que querem usar esta funcionalidade. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


