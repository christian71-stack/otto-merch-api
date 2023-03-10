# PriceReceiptsV3

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tax_type** | **string** | The fields indicates what kind of tax the price object includes | 
**tax_rate** | **string** | Applied tax rate, if there is any. Currently the entry can only be a decimal numbers. In future it&#x27;s maybe also possible to have an expression such as \&quot;NON_TAXABLE\&quot;, so we decided for a representation as string | 
**gross** | [**AllOfPriceReceiptsV3Gross**](AllOfPriceReceiptsV3Gross.md) | Calculated gross value | 
**net** | [**AllOfPriceReceiptsV3Net**](AllOfPriceReceiptsV3Net.md) | Calculated net value | [optional] 
**tax** | [**AllOfPriceReceiptsV3Tax**](AllOfPriceReceiptsV3Tax.md) | Calculated tax value | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

