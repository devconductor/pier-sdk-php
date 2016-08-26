# CartaoResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**arquivo_impressao** | **string** | Apresenta o nome do arquivo onde o cart\u00C3\u00A3o fora inclu\u00C3\u00ADdo para impress\u00C3\u00A3o por uma gr\u00C3\u00A1fica, quando houver. | 
**codigo_desbloqueio** | **string** | Apresenta um c\u00C3\u00B3digo espec\u00C3\u00ADfico para ser utilizado como vari\u00C3\u00A1vel no processo de desbloqueio do cart\u00C3\u00A3o para emissores que querem usar esta funcionalidade. | 
**data_estagio_cartao** | [**\br.com.conductor.pier.api.v1_1.model\LocalDateTime**](LocalDateTime.md) | Apresenta a data em que o idEstagioCartao atual do cart\u00C3\u00A3o fora aplicado, quando houver. | 
**data_geracao** | [**\br.com.conductor.pier.api.v1_1.model\LocalDateTime**](LocalDateTime.md) | Apresenta a data em que o cart\u00C3\u00A3o foi gerado. | 
**data_impressao** | [**\br.com.conductor.pier.api.v1_1.model\LocalDateTime**](LocalDateTime.md) | Apresenta a data em que o cart\u00C3\u00A3o fora impresso, caso impress\u00C3\u00A3o em loja, ou a data em que ele fora inclu\u00C3\u00ADdo no arquivo para impress\u00C3\u00A3o via gr\u00C3\u00A1fica. | 
**data_status_cartao** | [**\br.com.conductor.pier.api.v1_1.model\LocalDateTime**](LocalDateTime.md) | Apresenta a data em que o idStatusCartao atual do cart\u00C3\u00A3o fora aplicado, quando houver. | 
**data_validade** | [**\br.com.conductor.pier.api.v1_1.model\LocalDateTime**](LocalDateTime.md) | Apresenta a data de validade do cart\u00C3\u00A3o em formato MMAAAA, quando houver. | 
**flag_impressao_origem_comercial** | **int** | Quando ativa, indica que o cart\u00C3\u00A3o fora impresso na Origem Comercial. | 
**flag_provisorio** | **int** | Quando ativa, indica que o cart\u00C3\u00A3o \u00C3\u00A9 provis\u00C3\u00B3rio. Ou seja, \u00C3\u00A9 um cart\u00C3\u00A3o para uso tempor\u00C3\u00A1rio quando se deseja permitir que o cliente transacione sem que ele tenha recebido um cart\u00C3\u00A3o definitivo. | 
**id** | **int** | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Cart\u00C3\u00A3o (id). | 
**id_conta** | **int** | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Conta a qual o cart\u00C3\u00A3o pertence (id). | 
**id_estagio_cartao** | **int** | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Est\u00C3\u00A1gio de Impress\u00C3\u00A3o do Cart\u00C3\u00A3o (id). | 
**id_pessoa** | **int** | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Pessoa a qual o cart\u00C3\u00A3o pertence (id) | 
**id_status_cartao** | **int** | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Status do Cart\u00C3\u00A3o (id). | 
**numero_cartao** | **string** | Apresenta o n\u00C3\u00BAmero do cart\u00C3\u00A3o. | 
**portador** | **int** | Indica qual \u00C3\u00A9 a rela\u00C3\u00A7\u00C3\u00A3o do portador do cart\u00C3\u00A3o com a conta. Quando \u00E2\u0080\u00981\u00E2\u0080\u0099, corresponde ao seu titular. Quando diferente disso, corresponde a um cart\u00C3\u00A3o adicional. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


