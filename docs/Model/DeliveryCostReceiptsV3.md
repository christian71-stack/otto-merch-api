# DeliveryCostReceiptsV3

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**line_number** | **int** | Number of line item in which the information is printed on the pdf document of the receipt. &lt;/br&gt;This information is not reliably provided for older receipts | [optional] 
**delivery_cost_type** | **string** | Type of delivery costs for the shipment of physical goods. &lt;/br&gt; Possible values: * **DELIVERY_FEE_STANDARD** - basic shipping costs * **DELIVERY_FEE_FREIGHT_SURCHARGE** - additional freight surcharge for bulky goods | 
**unit_price** | [**\Swagger\Client\Model\PriceReceiptsV3**](PriceReceiptsV3.md) |  | 
**position_sum** | [**\Swagger\Client\Model\PriceReceiptsV3**](PriceReceiptsV3.md) |  | 
**price_modifications** | [**\Swagger\Client\Model\PriceModificationReceiptsV3[]**](PriceModificationReceiptsV3.md) | List of additional fees and reductions represented as price modifications. &lt;/br&gt;If there are no price modifications, an empty list is displayed | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

