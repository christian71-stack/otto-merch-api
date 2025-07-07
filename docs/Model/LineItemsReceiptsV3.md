# LineItemsReceiptsV3

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_positions** | [**\Swagger\Client\Model\ItemPositionReceiptsV3[]**](ItemPositionReceiptsV3.md) | List of billed items, if exists. &lt;/br&gt;This list is only used in context of receiptType PURCHASE or REFUND. &lt;/br&gt;If there are no entries the lists is displayed as empty | 
**item_partial_refund_positions** | [**\Swagger\Client\Model\ItemPartialRefundPositionReceiptsV3[]**](ItemPartialRefundPositionReceiptsV3.md) | List of billed partial refunds of items. &lt;/br&gt;This list is only used in context of receiptType PARTIAL_REFUND. &lt;/br&gt;If there are no entries the lists is displayed as empty | 
**service_positions** | [**\Swagger\Client\Model\ServicePositionReceiptsV3[]**](ServicePositionReceiptsV3.md) | List of billed B2C services, if exists for this receipt. &lt;/br&gt;This list is only used in context of receiptType PURCHASE or REFUND. &lt;/br&gt;If there are no entries the lists is displayed as empty | 
**service_partial_refund_positions** | [**\Swagger\Client\Model\ServicePartialRefundPositionReceiptsV3[]**](ServicePartialRefundPositionReceiptsV3.md) | List of billed partial refunds of services. | 
**delivery_costs** | [**\Swagger\Client\Model\DeliveryCostReceiptsV3[]**](DeliveryCostReceiptsV3.md) | List of billed logistic costs, if exists for this receipt. &lt;/br&gt;This list is only used in context of receiptType PURCHASE or REFUND. &lt;/br&gt;If there are no entries the lists is displayed as empty | 
**delivery_fee_partial_refund_positions** | [**\Swagger\Client\Model\DeliveryCostPartialRefundPositionReceiptsV3[]**](DeliveryCostPartialRefundPositionReceiptsV3.md) | This information is currently not available, will be an empty array. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

