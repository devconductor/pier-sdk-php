# PessoaJuridicaAprovadaPersist

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**razao_social** | **string** | Apresenta o nome completo da raz\u00C3\u00A3o social (nome empresarial)&#39;. | 
**nome_fantasia** | **string** | Apresenta o nome fantasia da empresa. | [optional] 
**cnpj** | **string** | N\u00C3\u00BAmero do Cadastro Nacional de Pessoa Juridica (CNPJ) | 
**inscricao_estadual** | **string** | N\u00C3\u00BAmero da Inscri\u00C3\u00A7\u00C3\u00A3o Estadual (IE). | [optional] 
**data_abertura_empresa** | **string** | Data de abertura da empresa, essa data deve ser informada no formato: aaaa-MM-dd. | 
**id_origem_comercial** | **int** | Id da origem comercial | 
**id_produto** | **int** | Id do produto | 
**numero_agencia** | **int** | N\u00C3\u00BAmero da ag\u00C3\u00AAncia. | [optional] 
**numero_conta_corrente** | **string** | N\u00C3\u00BAmero da conta corrente. | [optional] 
**email** | **string** | Email da empresa | [optional] 
**dia_vencimento** | **int** | Dia vencimento | 
**nome_impresso** | **string** | Nome que deve ser impresso no cart\u00C3\u00A3o | [optional] 
**valor_renda** | [**Number**](Number.md) | Apresenta o valor da renda compravada | [optional] 
**canal_entrada** | **string** | Indica o canal pelo qual o cadastro do cliente foi realizado | [optional] 
**valor_pontuacao** | **int** | Indica o valor da pontua\u00C3\u00A7\u00C3\u00A3o atribuido ao cliente (caso n\u00C3\u00A3o informado ser\u00C3\u00A1 atribuido o valor = 0) | [optional] 
**telefones** | [**\br.com.conductor.pier.api.v2.model\TelefonePessoaAprovadaPersist[]**](TelefonePessoaAprovadaPersist.md) | Apresenta os telefones da empresa | [optional] 
**enderecos** | [**\br.com.conductor.pier.api.v2.model\EnderecoAprovadoPersist[]**](EnderecoAprovadoPersist.md) | Pode ser informado os seguintes tipos de endere\u00C3\u00A7o: Residencial, Comercial, e Outros | 
**limite_global** | [**Number**](Number.md) | Valor do Limite Global | 
**socios** | [**\br.com.conductor.pier.api.v2.model\PessoaPersist[]**](PessoaPersist.md) | Apresenta os dados dos s\u00C3\u00B3cios da empresa, caso exista | [optional] 
**limite_maximo** | [**Number**](Number.md) | Valor m\u00C3\u00A1ximo do limite de cr\u00C3\u00A9dito para realizar transa\u00C3\u00A7\u00C3\u00B5es | 
**limite_parcelas** | [**Number**](Number.md) | Valor do limite de cr\u00C3\u00A9dito acumulado da soma das parcelas das compras | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


