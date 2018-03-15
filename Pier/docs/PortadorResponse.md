# PortadorResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id_conta** | **int** | C\u00F3digo de Identifica\u00E7\u00E3o da Conta (id). | [optional] 
**id_produto** | **int** | C\u00F3digo de Identifica\u00E7\u00E3o do Produto (id). | [optional] 
**id_pessoa** | **int** | C\u00F3digo de Identifica\u00E7\u00E3o da Pessoa (id). | [optional] 
**id_parentesco** | **int** | C\u00F3digo de Identifica\u00E7\u00E3o do Parentesco (id) | [optional] 
**tipo_portador** | **string** | Apresenta o tipo do Portador do cart\u00E3o, sendo: (&#39;T&#39;: Titular, &#39;A&#39;: Adicional). | [optional] 
**nome_impresso** | **string** | Apresenta o nome a ser impresso no cart\u00E3o. | [optional] 
**id_tipo_cartao** | **int** | Apresenta o c\u00F3digo de identifica\u00E7\u00E3o do tipo do cart\u00E3o (id), que ser\u00E1 utilizado para gerar os cart\u00F5es deste portador, vinculados a sua respectiva conta atrav\u00E9s do campo idConta. | [optional] 
**flag_ativo** | **int** | Quanto ativa, indica que o cadastro do Portador est\u00E1 ativo, em emissores que realizam este tipo de gest\u00E3o. | [optional] 
**data_cadastro_portador** | **string** | Apresenta a data em que o Portador fora cadastrado, quando possuir esta informa\u00E7\u00E3o. | [optional] 
**data_cancelamento_portador** | **string** | Apresenta a data em que o Portador fora cancelado, quando possuir esta informa\u00E7\u00E3o. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


