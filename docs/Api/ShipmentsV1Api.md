# Swagger\Client\ShipmentsV1Api

All URIs are relative to *https://api.otto.market*

Method | HTTP request | Description
------------- | ------------- | -------------
[**shipmentsV1AppendPositionItemsByCarrierAndTrackingNumberUsingPOST**](ShipmentsV1Api.md#shipmentsv1appendpositionitemsbycarrierandtrackingnumberusingpost) | **POST** /v1/shipments/carriers/{carrier}/trackingnumbers/{trackingNumber}/positionitems | Correct an existing shipment (add sent items) by carrier and tracking number.
[**shipmentsV1AppendPositionItemsUsingPOST**](ShipmentsV1Api.md#shipmentsv1appendpositionitemsusingpost) | **POST** /v1/shipments/{shipmentId}/positionitems | Correct an existing shipment (add sent items) by shipment ID.
[**shipmentsV1CreatedAndSentMultiparcelShipmentUsingPOST**](ShipmentsV1Api.md#shipmentsv1createdandsentmultiparcelshipmentusingpost) | **POST** /v1/multiparcel-shipments | Create a multiparcel shipment and mark the position items as sent.
[**shipmentsV1CreatedAndSentShipmentUsingPOST**](ShipmentsV1Api.md#shipmentsv1createdandsentshipmentusingpost) | **POST** /v1/shipments | Create a shipment and mark the position items as sent.
[**shipmentsV1ListShipmentsUsingGET**](ShipmentsV1Api.md#shipmentsv1listshipmentsusingget) | **GET** /v1/shipments | Retrieve shipments.
[**shipmentsV1ShipmentByCarrierAndTrackingNumberUsingGET**](ShipmentsV1Api.md#shipmentsv1shipmentbycarrierandtrackingnumberusingget) | **GET** /v1/shipments/carriers/{carrier}/trackingnumbers/{trackingNumber} | Retrieve shipment by carrier and tracking number.
[**shipmentsV1ShipmentUsingGET**](ShipmentsV1Api.md#shipmentsv1shipmentusingget) | **GET** /v1/shipments/{shipmentId} | Retrieve shipment by shipment ID.

# **shipmentsV1AppendPositionItemsByCarrierAndTrackingNumberUsingPOST**
> shipmentsV1AppendPositionItemsByCarrierAndTrackingNumberUsingPOST($body, $carrier, $tracking_number)

Correct an existing shipment (add sent items) by carrier and tracking number.

This endpoint allows to update an existing shipment with new position items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ShipmentsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\PositionItemShipmentsV1()); // \Swagger\Client\Model\PositionItemShipmentsV1[] | The position items included in shipment.
$carrier = "carrier_example"; // string | The carrier of the shipment.
$tracking_number = "tracking_number_example"; // string | The tracking number of the shipment assigned by the carrier.

try {
    $apiInstance->shipmentsV1AppendPositionItemsByCarrierAndTrackingNumberUsingPOST($body, $carrier, $tracking_number);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsV1Api->shipmentsV1AppendPositionItemsByCarrierAndTrackingNumberUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PositionItemShipmentsV1[]**](../Model/PositionItemShipmentsV1.md)| The position items included in shipment. |
 **carrier** | **string**| The carrier of the shipment. |
 **tracking_number** | **string**| The tracking number of the shipment assigned by the carrier. |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentsV1AppendPositionItemsUsingPOST**
> shipmentsV1AppendPositionItemsUsingPOST($body, $shipment_id)

Correct an existing shipment (add sent items) by shipment ID.

This endpoint allows to update an existing shipment with new position items. Note that this is just a correction process for shipments where position items are missing. A separate purchase receipt will be generated for the newly added position items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ShipmentsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\PositionItemShipmentsV1()); // \Swagger\Client\Model\PositionItemShipmentsV1[] | positionItems
$shipment_id = "shipment_id_example"; // string | Internal shipment identifier assigned by OTTO Market.

try {
    $apiInstance->shipmentsV1AppendPositionItemsUsingPOST($body, $shipment_id);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsV1Api->shipmentsV1AppendPositionItemsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PositionItemShipmentsV1[]**](../Model/PositionItemShipmentsV1.md)| positionItems |
 **shipment_id** | **string**| Internal shipment identifier assigned by OTTO Market. |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentsV1CreatedAndSentMultiparcelShipmentUsingPOST**
> \Swagger\Client\Model\CreateMultiparcelShipmentResponseShipmentsV1 shipmentsV1CreatedAndSentMultiparcelShipmentUsingPOST($body)

Create a multiparcel shipment and mark the position items as sent.

This endpoint is designed for creating multiparcel shipments when a single article (position item) is sent in multiple shipments, each with its own tracking key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ShipmentsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\MultiparcelCreateShipmentRequestShipmentsV1()); // \Swagger\Client\Model\MultiparcelCreateShipmentRequestShipmentsV1[] | request

try {
    $result = $apiInstance->shipmentsV1CreatedAndSentMultiparcelShipmentUsingPOST($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsV1Api->shipmentsV1CreatedAndSentMultiparcelShipmentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MultiparcelCreateShipmentRequestShipmentsV1[]**](../Model/MultiparcelCreateShipmentRequestShipmentsV1.md)| request |

### Return type

[**\Swagger\Client\Model\CreateMultiparcelShipmentResponseShipmentsV1**](../Model/CreateMultiparcelShipmentResponseShipmentsV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentsV1CreatedAndSentShipmentUsingPOST**
> \Swagger\Client\Model\CreateShipmentResponseShipmentsV1 shipmentsV1CreatedAndSentShipmentUsingPOST($body)

Create a shipment and mark the position items as sent.

This endpoint should be used to create a shipment with a list of position items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ShipmentsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateShipmentRequestShipmentsV1(); // \Swagger\Client\Model\CreateShipmentRequestShipmentsV1 | request

try {
    $result = $apiInstance->shipmentsV1CreatedAndSentShipmentUsingPOST($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsV1Api->shipmentsV1CreatedAndSentShipmentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateShipmentRequestShipmentsV1**](../Model/CreateShipmentRequestShipmentsV1.md)| request |

### Return type

[**\Swagger\Client\Model\CreateShipmentResponseShipmentsV1**](../Model/CreateShipmentResponseShipmentsV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentsV1ListShipmentsUsingGET**
> \Swagger\Client\Model\ShipmentListShipmentsV1 shipmentsV1ListShipmentsUsingGET($datefrom, $limit, $next)

Retrieve shipments.

This endpoint can be used to retrieve the shipments for a given authorized partner.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ShipmentsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$datefrom = "datefrom_example"; // string | Shipments created from this date onwards for the given authorized partner will be returned. Can be specified as either an ISO date (`YYYY-MM-DD`), which will be inferred to be in UTC time, or an ISO date time (`YYYY-MM-DD'T'HH:mm:ss.SSSXXX`).  For example, `2024-01-10` would be interpreted the same as `2024-01-10T00:00:00Z`.
$limit = 25; // int | The maximum number of shipments to be returned in each response.
$next = "next_example"; // string | The cursor which points to the next shipment that should be queried. It is used to paginate the results.

try {
    $result = $apiInstance->shipmentsV1ListShipmentsUsingGET($datefrom, $limit, $next);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsV1Api->shipmentsV1ListShipmentsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datefrom** | **string**| Shipments created from this date onwards for the given authorized partner will be returned. Can be specified as either an ISO date (&#x60;YYYY-MM-DD&#x60;), which will be inferred to be in UTC time, or an ISO date time (&#x60;YYYY-MM-DD&#x27;T&#x27;HH:mm:ss.SSSXXX&#x60;).  For example, &#x60;2024-01-10&#x60; would be interpreted the same as &#x60;2024-01-10T00:00:00Z&#x60;. |
 **limit** | **int**| The maximum number of shipments to be returned in each response. | [optional] [default to 25]
 **next** | **string**| The cursor which points to the next shipment that should be queried. It is used to paginate the results. | [optional]

### Return type

[**\Swagger\Client\Model\ShipmentListShipmentsV1**](../Model/ShipmentListShipmentsV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentsV1ShipmentByCarrierAndTrackingNumberUsingGET**
> \Swagger\Client\Model\ShipmentShipmentsV1 shipmentsV1ShipmentByCarrierAndTrackingNumberUsingGET($carrier, $tracking_number)

Retrieve shipment by carrier and tracking number.

This endpoint can be used to retrieve a shipment by carrier and tracking number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ShipmentsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier = "carrier_example"; // string | The carrier of the shipment.
$tracking_number = "tracking_number_example"; // string | The tracking number of the shipment assigned by the carrier.

try {
    $result = $apiInstance->shipmentsV1ShipmentByCarrierAndTrackingNumberUsingGET($carrier, $tracking_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsV1Api->shipmentsV1ShipmentByCarrierAndTrackingNumberUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier** | **string**| The carrier of the shipment. |
 **tracking_number** | **string**| The tracking number of the shipment assigned by the carrier. |

### Return type

[**\Swagger\Client\Model\ShipmentShipmentsV1**](../Model/ShipmentShipmentsV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentsV1ShipmentUsingGET**
> \Swagger\Client\Model\ShipmentShipmentsV1 shipmentsV1ShipmentUsingGET($shipment_id)

Retrieve shipment by shipment ID.

This endpoint can be used to retrieve a shipment by OTTO internal shipment ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ShipmentsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_id = "shipment_id_example"; // string | Internal shipment identifier assigned by OTTO Market.

try {
    $result = $apiInstance->shipmentsV1ShipmentUsingGET($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsV1Api->shipmentsV1ShipmentUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| Internal shipment identifier assigned by OTTO Market. |

### Return type

[**\Swagger\Client\Model\ShipmentShipmentsV1**](../Model/ShipmentShipmentsV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

