# ProductDeliveryInformationResponseDTOAvailabilityV1

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipping_profile_id** | **string** | The ShippingProfileId is provided in the ShippingProfiles-API and is the PrimaryKey which is used to  map a specific Profile to a SKU | 
**processing_time** | **string** | The processingTime of a specific SKU, which can be any value between 1 and 99 or &#x27;DEFAULT&#x27;. &lt;br&gt; When it is set to DEFAULT the defaultProcessingTime used in the shipping profile will be considered &lt;br&gt; Otherwise the defaultProcessingTime is overwritten and is not reset even if the shipping profile is changed. &lt;br&gt; It describes the time the partner needs to prepare the order for a shipment. | 
**sku** | **string** | StockKeepingUnit given by partner configuration. e.g. &#x27;shirt-red-M&#x27;, external identifier of article variation. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

