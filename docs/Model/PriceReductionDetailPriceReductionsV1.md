# PriceReductionDetailPriceReductionsV1

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**receipt_number** | **string** | receiptNumber of the receipt generated for the price reduction. The receiptNumber would be null is the status of the price reduction is Initiated | [optional] 
**price_reduction** | [**AllOfPriceReductionDetailPriceReductionsV1PriceReduction**](AllOfPriceReductionDetailPriceReductionsV1PriceReduction.md) | the price reduction amount for a positionItemId. | [optional] 
**creation_date_time** | **string** |  | [optional] 
**status** | **string** | Status of the price reduction. - INITIATED: This status implies that the reduction are pending for receipt generation, and receiptId and receiptNumber would be null for INITIATED reductions. - PROCESSED: This status implies that the reductions for which receipts are generated. - REJECTED: This status implies that the reductions which failed validations and were not processed. eg. reductions applied on the positionItemId after it is marked as returned. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

