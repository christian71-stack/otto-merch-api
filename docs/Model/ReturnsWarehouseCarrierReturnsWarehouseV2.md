# ReturnsWarehouseCarrierReturnsWarehouseV2

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**return_address_id** | **string** | Unique identifier of the returnWarehouse | 
**return_address_carrier_id** | **string** | Unique identifier for each returnCarrier, which is linked with a returnWarehouse | 
**return_carrier** | **string** | Name of the returnCarrier used in the returnWarehouse. Only the carrier DHL is allowed for returnWarehouse types INTERNATIONAL and INTERNATIONAL_CONSOLIDATION_HUB. | 
**return_carrier_codes** | **OneOfReturnsWarehouseCarrierReturnsWarehouseV2ReturnCarrierCodes** | GLSReturnCarrierCodes__ReturnsWarehouse-V2 (object) or DHLReturnCarrierCodes__ReturnsWarehouse-V2 (object) No return carrier codes when carrier in path is HERMES | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

