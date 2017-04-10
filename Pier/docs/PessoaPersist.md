# PessoaPersist

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cpf** | **string** | N\u00C3\u00BAmero do CPF, quando PF. | [optional] 
**data_emissao_identidade** | [**\DateTime**](Date.md) | Data emiss\u00C3\u00A3o da Identidade | [optional] 
**data_nascimento** | [**\DateTime**](Date.md) | Data de Nascimento da Pessoa, quando PF, ou a Data de Abertura da Empresa, quando PJ. Essa data deve ser informada no formato aaaa-MM-dd. | [optional] 
**email** | **string** | Email do s\u00C3\u00B3cio | [optional] 
**estado_civil** | **string** | Estado civil do s\u00C3\u00B3cio | [optional] 
**nacionalidade** | **string** | Nacionalidade do s\u00C3\u00B3cio | [optional] 
**nome** | **string** | Apresenta o Nome do Socio | 
**numero_identidade** | **string** | N\u00C3\u00BAmero da Identidade. | [optional] 
**orgao_expedidor_identidade** | **string** | Org\u00C3\u00A3o expedidor da Identidade. | [optional] 
**profissao** | **string** | Profiss\u00C3\u00A3o do s\u00C3\u00B3cio | [optional] 
**sexo** | **string** | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do sexo da Pessoa, quando PF, sendo: (\&quot;M\&quot;: Masculino), (\&quot;F\&quot;: Feminino). | [optional] 
**telefones** | [**\br.com.conductor.pier.api.v2.model\TelefonePessoaAprovadaPersist[]**](TelefonePessoaAprovadaPersist.md) | Informa os telefones do s\u00C3\u00B3cio | [optional] 
**unidade_federativa_identidade** | **string** | Sigla da Unidade Federativa de onde foi expedido a Identidade | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


