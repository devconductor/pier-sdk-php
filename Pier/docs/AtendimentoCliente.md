# AtendimentoCliente

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id_atendimento** | **int** | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Atendimento (id) | [optional] 
**id_conta** | **int** | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Conta a qual o Atendimento est\u00C3\u00A1 associado | [optional] 
**id_tipo_atendimento** | **int** | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Tipo de Atendimento (id) | [optional] 
**descricao_tipo_atendimento** | **string** | Apresenta a descri\u00C3\u00A7\u00C3\u00A3o do Tipo de Atendimento | [optional] 
**conteudo_atendimento** | **string** | Apresenta as informa\u00C3\u00A7\u00C3\u00B5es que foram utilizadas para consultar, cadastrar ou alterar informa\u00C3\u00A7\u00C3\u00B5es relacionadas ao Atendimento. | [optional] 
**detalhes_atendimento** | **string** | Apresenta os detalhes lan\u00C3\u00A7ados pelo sistema ou pelo Atendente durante relacionados ao Atendimento. | [optional] 
**nome_atendente** | **string** | Apresenta o nome do Atendente que registrou o Atendimento. | [optional] 
**nome_sistema** | **string** | Apresenta o nome do Sistema, Servidor, M\u00C3\u00B3dulo ou M\u00C3\u00A9todo REST que originou o registro do Atendimento. | [optional] 
**data_hora_inicio_atendimento** | [**\DateTime**](\DateTime.md) | Apresenta a data e hora em que o Atendimento foi iniciado. Quando utilizado, serve para medir a performance dos Atendimentos. | [optional] 
**data_hora_fim_atendimento** | [**\DateTime**](\DateTime.md) | Apresenta a data e hora em que o Atendimento foi iniciado. Quando utilizado, serve para medir a performance dos Atendimentos. | [optional] 
**data_atendimento** | [**\DateTime**](\DateTime.md) | Apresenta a data e hora em que o Atendimento foi realizado. | [optional] 
**data_agendamento** | [**\DateTime**](\DateTime.md) | Quando utilizado, de acordo com o Tipo de Atendimento, apresenta a data e hora para processamento ou a data para retorno do Atendimento. | [optional] 
**data_processamento** | [**\DateTime**](\DateTime.md) | Quando utilizado, apresenta a data e hora em que a solicita\u00C3\u00A7\u00C3\u00A3o registrada no Atendimento fora processada. | [optional] 
**flag_processamento** | **int** | Quando aplic\u00C3\u00A1vel, de acordo com o Indica se o Processamento da solicita\u00C3\u00A7\u00C3\u00A3o fora realizado. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


