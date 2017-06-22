# PessoaResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | C\u00C3\u00B3digo de Identifica\u00C3\u00A7\u00C3\u00A3o da Pessoa (id). | 
**nome** | **string** | Apresenta o &#39;Nome Completo da PF&#39; ou o &#39;Nome Completo da Raz\u00C3\u00A3o Social (Nome Empresarial)&#39;. | 
**tipo** | **string** | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do tipo da Pessoa, sendo: (\&quot;PF\&quot;: Pessoa F\u00C3\u00ADsica), (\&quot;PJ\&quot;: Pessoa Jur\u00C3\u00ADdica). | 
**cpf** | **string** | N\u00C3\u00BAmero do CPF, quando PF. | [optional] 
**cnpj** | **string** | N\u00C3\u00BAmero do CNPJ, quando PJ. | [optional] 
**data_nascimento** | **string** | Data de Nascimento da Pessoa, quando PF, ou a Data de Abertura da Empresa, quando PJ. | [optional] 
**numero_identidade** | **string** | N\u00C3\u00BAmero da Identidade | [optional] 
**orgao_expedidor_identidade** | **string** | Org\u00C3\u00A3o expedidor do RG. | [optional] 
**sexo** | **string** | C\u00C3\u00B3digo de identifica\u00C3\u00A7\u00C3\u00A3o do sexo da Pessoa, quando PF, sendo: (\&quot;M\&quot;: Masculino), (\&quot;F\&quot;: Feminino), (\&quot;O\&quot;: Outro), (\&quot;N\&quot;: N\u00C3\u00A3o Especificado). | [optional] 
**unidade_federativa_identidade** | **string** | Sigla da Unidade Federativa de onde foi expedido a Identidade | [optional] 
**data_emissao_identidade** | **string** | Data emiss\u00C3\u00A3o da identidade no formato aaaa-MM-dd | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


