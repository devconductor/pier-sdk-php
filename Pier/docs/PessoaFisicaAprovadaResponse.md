# PessoaFisicaAprovadaResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da pessoa fisica (id) | [optional] 
**nome** | **string** | Apresenta o nome completo da pessoa fisica. | 
**nome_mae** | **string** | Apresenta o nome da m\u00C3\u00A3e da pessoa fisica | [optional] 
**data_nascimento** | **string** | Data de Nascimento da Pessoa. Essa data deve ser informada no formato aaaa-MM-dd. | [optional] 
**sexo** | **string** | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do sexo da Pessoa, quando PF, sendo: (\&quot;M\&quot;: Masculino), (\&quot;F\&quot;: Feminino). | [optional] 
**cpf** | **string** | N\u00C3\u00BAmero do Cadastro de Pessoa Fisica (CPF) | 
**numero_identidade** | **string** | N\u00C3\u00BAmero da identidade. | [optional] 
**orgao_expedidor_identidade** | **string** | Org\u00C3\u00A3o expedidor da Identidade. | [optional] 
**unidade_federativa_identidade** | **string** | Sigla da Unidade Federativa de onde foi expedido a Identidade | [optional] 
**data_emissao_identidade** | **string** | Data emiss\u00C3\u00A3o da Identidade no formato aaaa-MM-dd | [optional] 
**id_estado_civil** | **int** | Id Estado civil da pessoa fisica | [optional] 
**id_profissao** | **int** | Profiss\u00C3\u00A3o da pessoa fisica | [optional] 
**id_natureza_ocupacao** | **int** | Id Natureza Ocupa\u00C3\u00A7\u00C3\u00A3o da pessoa fisica | [optional] 
**id_nacionalidade** | **int** | Id Nacionalidade da pessoa fisica | [optional] 
**id_origem_comercial** | **int** | Id da origem comercial | 
**id_produto** | **int** | Id do produto | 
**numero_agencia** | **int** | N\u00C3\u00BAmero da ag\u00C3\u00AAncia. | [optional] 
**numero_conta_corrente** | **string** | N\u00C3\u00BAmero da conta corrente. | [optional] 
**email** | **string** | Email da pessoa fisica | [optional] 
**dia_vencimento** | **int** | Dia vencimento | 
**nome_impresso** | **string** | Nome que deve ser impresso no cart\u00C3\u00A3o | [optional] 
**nome_empresa** | **string** | Nome da empresa | [optional] 
**id_conta** | **int** | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da conta cadastrada | [optional] 
**id_proposta** | **int** | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o da proposta | [optional] 
**canal_entrada** | **string** | Indica o canal pelo qual o cadastro do cliente foi realizado | [optional] 
**valor_pontuacao** | **int** | Indica o valor da pontua\u00C3\u00A7\u00C3\u00A3o atribuido ao cliente (caso n\u00C3\u00A3o informado ser\u00C3\u00A1 atribuido o valor = 0) | [optional] 
**telefones** | [**\br.com.conductor.pier.api.v2.model\TelefonePessoaAprovadaResponse[]**](TelefonePessoaAprovadaResponse.md) | Apresenta os telefones da empresa | [optional] 
**enderecos** | [**\br.com.conductor.pier.api.v2.model\EnderecoAprovadoResponse[]**](EnderecoAprovadoResponse.md) | Pode ser informado os seguintes tipos de endere\u00C3\u00A7o: Residencial, Comercial, e Outros | 
**limite_global** | [**Number**](Number.md) | Valor do Limite Global | 
**limite_maximo** | [**Number**](Number.md) | Valor m\u00C3\u00A1ximo do limite de cr\u00C3\u00A9dito para realizar transa\u00C3\u00A7\u00C3\u00B5es | 
**limite_parcelas** | [**Number**](Number.md) | Valor do limite de cr\u00C3\u00A9dito acumulado da soma das parcelas das compras | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


