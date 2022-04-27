# PriceReductionResponsePriceReductionsV1

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sales_order_id** | **string** | salesOrderId for an item | [optional] 
**total_price_reduction** | [**AllOfPriceReductionResponsePriceReductionsV1TotalPriceReduction**](AllOfPriceReductionResponsePriceReductionsV1TotalPriceReduction.md) | sum of all the price reductions for a positionItemId. | [optional] 
**invoice_price** | [**AllOfPriceReductionResponsePriceReductionsV1InvoicePrice**](AllOfPriceReductionResponsePriceReductionsV1InvoicePrice.md) | the price of the positionItemId as per the invoice generated for the order. | [optional] 
**price_reductions** | [**\cbdesk\otto\Client\Model\PriceReductionDetailPriceReductionsV1[]**](PriceReductionDetailPriceReductionsV1.md) | all price reductions applied for an item | [optional] 
**position_item_id** | **string** | positionItemId for an item | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

