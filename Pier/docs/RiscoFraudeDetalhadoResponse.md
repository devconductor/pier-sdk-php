# RiscoFraudeDetalhadoResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | C\u00F3digo de identifica\u00E7\u00E3o do risco de fraude | [optional] 
**id_tipo_resolucao** | **int** | C\u00F3digo de identifica\u00E7\u00E3o do tipo de resolu\u00E7\u00E3o atribu\u00EDdo ao registro | [optional] 
**descricao_tipo_resolucao** | **string** | Descri\u00E7\u00E3o do tipo de resolu\u00E7\u00E3o atribu\u00EDdo ao registro | [optional] 
**flag_alto_risco** | **bool** | Indica que a transa\u00E7\u00E3o possui um alto risco de fraude e que todas as transa\u00E7\u00F5es seguintes a ela ser\u00E3o negadas at\u00E9 que todas as transa\u00E7\u00F5es classificadas com risco de fraude sejam analisadas | [optional] 
**id_conta** | **int** | C\u00F3digo de identifica\u00E7\u00E3o da conta | [optional] 
**id_cartao** | **int** | C\u00F3digo de identifica\u00E7\u00E3o do cart\u00E3o | [optional] 
**id_produto** | **int** | C\u00F3digo de identifica\u00E7\u00E3o do produto | [optional] 
**id_transacao** | **int** | C\u00F3digo de identifica\u00E7\u00E3o da transa\u00E7\u00E3o | [optional] 
**data_transacao** | **string** | Data que a transa\u00E7\u00E3o classificada com risco de fraude foi realizada | [optional] 
**valor_transacao** | [**Number**](Number.md) | Valor da transa\u00E7\u00E3o classificada com risco de fraude | [optional] 
**codigo_moeda_origem** | **string** | C\u00F3digo da moeda de origem utilizada para a transa\u00E7\u00E3o | [optional] 
**valor_origem** | [**Number**](Number.md) | Valor da transa\u00E7\u00E3o na moeda de origem | [optional] 
**codigo_moeda_destino** | **string** | C\u00F3digo da moeda de destino utilizada para a transa\u00E7\u00E3o | [optional] 
**valor_destino** | [**Number**](Number.md) | Valor da transa\u00E7\u00E3o na moeda de destino | [optional] 
**nome_estabelecimento** | **string** | Nome do estabelecimento onde a transa\u00E7\u00E3o  com risco de fraude foi realizada | [optional] 
**id_pais** | **string** | C\u00F3digo de Identifica\u00E7\u00E3o do Pa\u00EDs | [optional] 
**codigo_resposta_autorizador** | **string** | C\u00F3digo de resposta do autorizador para a transa\u00E7\u00E3o | [optional] 
**descricao_resposta_autorizador** | **string** | Descri\u00E7\u00E3o da resposta do autorizador para a transa\u00E7\u00E3o | [optional] 
**codigo_resposta_fraude** | **string** | C\u00F3digo de resposta da ferramenta de Preven\u00E7\u00E3o a Fraude para a transa\u00E7\u00E3o | [optional] 
**descricao_resposta_fraude** | **string** | Descri\u00E7\u00E3o da resposta da ferramenta de Preven\u00E7\u00E3o a Fraude para a transa\u00E7\u00E3o | [optional] 
**origem_transacao** | **string** | Tipo de Terminal que originou a Transa\u00E7\u00E3o (POS, ATM, TEF, etc) | [optional] 
**codigo_modo_entrada_terminal** | **string** | C\u00F3digo de Identifica\u00E7\u00E3o do modo de origem da captura da Transa\u00E7\u00E3o | [optional] 
**descricao_modo_entrada_terminal** | **string** | Descri\u00E7\u00E3o do modo de origem da captura da Transa\u00E7\u00E3o | [optional] 
**cpf** | **string** | N\u00FAmero do CPF da Pessoa portadora do Cart\u00E3o, quando for do tipo Pessoa F\u00EDsica | [optional] 
**cnpj** | **string** | N\u00FAmero do CNPJ da Pessoa portadora do Cart\u00E3o, quanto for do tipo Pessoa Jur\u00EDdica | [optional] 
**email** | **string** | Endere\u00E7o de email da Pessoa portadora do Cart\u00E3o | [optional] 
**telefones** | [**\br.com.conductor.pier.api.v2.model\TelefoneResponse[]**](TelefoneResponse.md) | Lista de telefones associados ao portador do Cart\u00E3o | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


