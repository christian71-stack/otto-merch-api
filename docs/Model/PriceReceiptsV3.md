# PriceReceiptsV3

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tax_type** | **string** | The fields indicates what kind of tax the price object includes.&lt;/br&gt; Currently prices of the following taxTypes are possible. * **VAT** - vat rate * **INSURANCE** - insurance tax | 
**tax_rate** | **string** | Applied tax rate, if there is any.&lt;/br&gt; Currently the entry can only be a decimal number. | 
**gross** | [**AllOfPriceReceiptsV3Gross**](AllOfPriceReceiptsV3Gross.md) | Calculated gross value | 
**net** | [**AllOfPriceReceiptsV3Net**](AllOfPriceReceiptsV3Net.md) | Calculated net value &lt;/br&gt; This information is not reliably provided for older receipts.This information is not reliably provided for older receipts for all Price objects.. In the beginning we only provides this value for receipt.totals.  &lt;/br&gt;In receipts generated after the 01-01-2023 data should always be set in all Price objects. | [optional] 
**tax** | [**AllOfPriceReceiptsV3Tax**](AllOfPriceReceiptsV3Tax.md) | Calculated tax value &lt;/br&gt;   This information is not reliably provided for older receipts.This information is not reliably provided for older receipts for all Price objects.. In the beginning we only provides this value for receipt.totals.    &lt;/br&gt;In receipts generated after the 01-01-2023 data should always be set in all Price objects. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

