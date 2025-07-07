# Swagger\Client\ReturnShipmentsV1Api

All URIs are relative to *https://api.otto.market*

Method | HTTP request | Description
------------- | ------------- | -------------
[**returnShipmentsV1ListReturnShipmentsUsingGET**](ReturnShipmentsV1Api.md#returnshipmentsv1listreturnshipmentsusingget) | **GET** /v1/return-shipments | Retrieve returnShipments.
[**returnShipmentsV1ReturnShipmentByCarrierAndTrackingNumberUsingGET**](ReturnShipmentsV1Api.md#returnshipmentsv1returnshipmentbycarrierandtrackingnumberusingget) | **GET** /v1/return-shipments/carriers/{carrier}/trackingnumbers/{trackingNumber} | Retrieve returnShipment by carrier and tracking number.
[**returnShipmentsV1ReturnShipmentUsingGET**](ReturnShipmentsV1Api.md#returnshipmentsv1returnshipmentusingget) | **GET** /v1/return-shipments/{returnShipmentId} | Retrieve returnShipments by returnShipment ID.

# **returnShipmentsV1ListReturnShipmentsUsingGET**
> \Swagger\Client\Model\ReturnShipmentListReturnShipmentsV1 returnShipmentsV1ListReturnShipmentsUsingGET($datefrom, $limit, $next)

Retrieve returnShipments.

This endpoint can be used to retrieve the returned shipments for a given authorized partner.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ReturnShipmentsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$datefrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | ReturnShipments which are announced after this date or had an status update after this date will be returned for the partner which is determined from the authorization token. The date is considered as UTC.
$limit = 25; // int | The maximum number of returnShipments to be returned in each response.
$next = "next_example"; // string | The cursor which points to the next returnShipment that should be queried. It is used to paginate the results.

try {
    $result = $apiInstance->returnShipmentsV1ListReturnShipmentsUsingGET($datefrom, $limit, $next);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnShipmentsV1Api->returnShipmentsV1ListReturnShipmentsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datefrom** | **\DateTime**| ReturnShipments which are announced after this date or had an status update after this date will be returned for the partner which is determined from the authorization token. The date is considered as UTC. |
 **limit** | **int**| The maximum number of returnShipments to be returned in each response. | [optional] [default to 25]
 **next** | **string**| The cursor which points to the next returnShipment that should be queried. It is used to paginate the results. | [optional]

### Return type

[**\Swagger\Client\Model\ReturnShipmentListReturnShipmentsV1**](../Model/ReturnShipmentListReturnShipmentsV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **returnShipmentsV1ReturnShipmentByCarrierAndTrackingNumberUsingGET**
> \Swagger\Client\Model\ReturnShipmentReturnShipmentsV1 returnShipmentsV1ReturnShipmentByCarrierAndTrackingNumberUsingGET($carrier, $tracking_number)

Retrieve returnShipment by carrier and tracking number.

This endpoint can be used to retrieve a returned shipment by carrier and tracking number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ReturnShipmentsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier = "carrier_example"; // string | The carrier of the returnShipment.
$tracking_number = "tracking_number_example"; // string | The tracking number of the returnShipment assigned by the carrier.

try {
    $result = $apiInstance->returnShipmentsV1ReturnShipmentByCarrierAndTrackingNumberUsingGET($carrier, $tracking_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnShipmentsV1Api->returnShipmentsV1ReturnShipmentByCarrierAndTrackingNumberUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier** | **string**| The carrier of the returnShipment. |
 **tracking_number** | **string**| The tracking number of the returnShipment assigned by the carrier. |

### Return type

[**\Swagger\Client\Model\ReturnShipmentReturnShipmentsV1**](../Model/ReturnShipmentReturnShipmentsV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **returnShipmentsV1ReturnShipmentUsingGET**
> \Swagger\Client\Model\ReturnShipmentReturnShipmentsV1 returnShipmentsV1ReturnShipmentUsingGET($return_shipment_id)

Retrieve returnShipments by returnShipment ID.

This endpoint can be used to retrieve a returned shipment by OTTO internal returnShipment ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ReturnShipmentsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_shipment_id = "return_shipment_id_example"; // string | Internal return shipment identifier assigned by OTTO Market.

try {
    $result = $apiInstance->returnShipmentsV1ReturnShipmentUsingGET($return_shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnShipmentsV1Api->returnShipmentsV1ReturnShipmentUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_shipment_id** | **string**| Internal return shipment identifier assigned by OTTO Market. |

### Return type

[**\Swagger\Client\Model\ReturnShipmentReturnShipmentsV1**](../Model/ReturnShipmentReturnShipmentsV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

