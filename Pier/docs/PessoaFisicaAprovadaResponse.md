# PessoaFisicaAprovadaResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o do Endere\u00C3\u00A7o (id) | [optional] 
**nome** | **string** | Apresenta o nome completo da pessoa fisica. | 
**nome_mae** | **string** | Apresenta o nome da m\u00C3\u00A3e da pessoa fisica | [optional] 
**data_nascimento** | [**\DateTime**](Date.md) | Data de Nascimento da Pessoa. Essa data deve ser informada no formato aaaa-MM-dd. | [optional] 
**sexo** | **string** | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do sexo da Pessoa, quando PF, sendo: (\&quot;M\&quot;: Masculino), (\&quot;F\&quot;: Feminino). | [optional] 
**cpf** | **string** | N\u00C3\u00BAmero do Cadastro de Pessoa Fisica (CPF) | 
**numero_identidade** | **string** | N\u00C3\u00BAmero da identidade. | [optional] 
**orgao_expedidor_identidade** | **string** | Org\u00C3\u00A3o expedidor da Identidade. | [optional] 
**unidade_federativa_identidade** | **string** | Sigla da Unidade Federativa de onde foi expedido a Identidade | [optional] 
**data_emissao_identidade** | [**\DateTime**](Date.md) | Data emiss\u00C3\u00A3o da Identidade no formato aaaa-MM-dd | [optional] 
**id_estado_civil** | **int** | Id Estado civil da pessoa fisica | [optional] 
**profissao** | **string** | Profiss\u00C3\u00A3o da pessoa fisica | [optional] 
**id_natureza_ocupacao** | **int** | Id Natureza Ocupa\u00C3\u00A7\u00C3\u00A3o da pessoa fisica | [optional] 
**id_nacionalidade** | **int** | Id Nacionalidade da pessoa fisica | [optional] 
**id_origem_comercial** | **int** | Id da origem comercial | 
**id_produto** | **int** | Id do produto | 
**numero_agencia** | **int** | N\u00C3\u00BAmero da ag\u00C3\u00AAncia. | [optional] 
**numero_conta_corrente** | **string** | N\u00C3\u00BAmero da conta corrente. | [optional] 
**email** | **string** | Email da pessoa fisica | [optional] 
**dia_vencimento** | **int** | Dia vencimento | 
**nome_impresso** | **string** | Nome que deve ser impresso no cart\u00C3\u00A3o | [optional] 
**nome_empresa** | **string** | Nome que deve ser impresso no cart\u00C3\u00A3o | [optional] 
**telefones** | [**\br.com.conductor.pier.api.v2.model\TelefonePessoaAprovadaResponse[]**](TelefonePessoaAprovadaResponse.md) | Apresenta os telefones da empresa | [optional] 
**enderecos** | [**\br.com.conductor.pier.api.v2.model\EnderecoAprovadoResponse[]**](EnderecoAprovadoResponse.md) | Pode ser informado os seguintes tipos de endere\u00C3\u00A7o: Residencial, Comercial, e Outros | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


