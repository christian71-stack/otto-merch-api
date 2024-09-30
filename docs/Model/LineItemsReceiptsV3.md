# LineItemsReceiptsV3

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_positions** | [**\Swagger\Client\Model\ItemPositionsReceiptsV3[]**](ItemPositionsReceiptsV3.md) | List of billed items, if exists.  This list is only used in context of receiptType PURCHASE or REFUND. If there are no entries the lists is displayed as empty | 
**item_partial_refund_positions** | [**\Swagger\Client\Model\ItemPartialRefundPositionsReceiptsV3[]**](ItemPartialRefundPositionsReceiptsV3.md) | List of billed partial refunds of items.  This list is only used in context of receiptType PARTIAL_REFUND. If there are no entries the lists is displayed as empty | 
**service_positions** | [**\Swagger\Client\Model\ServicePositionReceiptsV3[]**](ServicePositionReceiptsV3.md) | List of billed B2C services, if exists for this receipt.  This list is only used in context of receiptType PURCHASE or REFUND. If there are no entries the lists is displayed as empty | 
**delivery_costs** | [**\Swagger\Client\Model\DeliveryCostsReceiptsV3[]**](DeliveryCostsReceiptsV3.md) | List of billed logistic costs, if exists for this receipt.  This list is only used in context of receiptType PURCHASE or REFUND. If there are no entries the lists is displayed as empty | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

