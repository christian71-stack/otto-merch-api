# PositionItemOrdersV4

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cancellation_date** | [**\DateTime**](\DateTime.md) | Date the position item was cancelled | [optional] 
**cancellation_reason** | **string** | Reason why a position was cancelled | [optional] 
**deal_id** | **string** | The unique id of the deal related to the position item | [optional] 
**deal_name** | **string** | The name of the deal related to the position item | [optional] 
**expected_delivery_date** | [**\DateTime**](\DateTime.md) | The date the position item should be delivered | [optional] 
**fulfillment_status** | **string** | The fulfillment status of the position item | 
**item_value_discount** | [**\Swagger\Client\Model\AmountOrdersV4**](AmountOrdersV4.md) |  | [optional] 
**item_value_gross_price** | [**\Swagger\Client\Model\AmountOrdersV4**](AmountOrdersV4.md) |  | 
**item_value_reduced_gross_price** | [**\Swagger\Client\Model\AmountOrdersV4**](AmountOrdersV4.md) |  | [optional] 
**position_item_id** | **string** | The unique id of the position item | 
**processable_date** | [**\DateTime**](\DateTime.md) | Date the position item has reached PROCESSABLE fulfillment status | [optional] 
**product** | [**\Swagger\Client\Model\ProductOrdersV4**](ProductOrdersV4.md) |  | 
**return_accepted_by_marketplace** | **bool** | Flag to indicate that the return has been accepted by the marketplace | [optional] 
**returned_date** | [**\DateTime**](\DateTime.md) | Date the position item was returned | [optional] 
**sent_date** | [**\DateTime**](\DateTime.md) | Date the position item was sent | [optional] 
**tracking_info** | [**\Swagger\Client\Model\TrackingInfoOrdersV4**](TrackingInfoOrdersV4.md) |  | [optional] 
**weee_pickup** | **bool** | Position item has electrical and electronic equipment disposal service (WEEE) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

