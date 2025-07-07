# ItemPartialRefundPositionReceiptsV3

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**partial_refund_details** | [**\Swagger\Client\Model\PartialRefundDetailsReceiptsV3**](PartialRefundDetailsReceiptsV3.md) |  | [optional] 
**line_number** | **int** | Number of line item in which the information is printed on the pdf document of the receipt. &lt;/br&gt;This information is not reliably provided for older receipts | [optional] 
**sku** | **string** | Stock keeping unit of  item. Unique item identifier on partner side | [optional] 
**article_number** | **string** | Unique Identifier of item the customer knows from order process | 
**product_title** | **string** | Product description of item the customer knows from the order process | 
**variation_attributes** | **string** | Additional attributes for unique description of  item, if different variants of the item are possible. (String of comma seperated dimensions)  ATTENTION: In previous version, the information exists as dimensions | [optional] 
**position_item_ids** | **string[]** | List of unique identifiers of specific instances of ordered items. &lt;/br&gt;A (salesOrder)PositionItem is the smallest unit of an item that can be ordered | 
**partial_refund_amount** | [**\Swagger\Client\Model\PriceReceiptsV3**](PriceReceiptsV3.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

