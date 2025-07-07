# Swagger\Client\ReturnsWarehouseV2Api

All URIs are relative to *https://api.otto.market*

Method | HTTP request | Description
------------- | ------------- | -------------
[**returnsWarehouseV2CreateReturnWarehouseAddress**](ReturnsWarehouseV2Api.md#returnswarehousev2createreturnwarehouseaddress) | **POST** /v2/returns-warehouse/addresses | create returnWarehouse address
[**returnsWarehouseV2CreateReturnsWarehouseCarrier**](ReturnsWarehouseV2Api.md#returnswarehousev2createreturnswarehousecarrier) | **POST** /v2/returns-warehouse/addresses/{returnAddressId}/carriers | create returnCarrier for returnWarehouse address
[**returnsWarehouseV2DeleteParcelReturnCarrier**](ReturnsWarehouseV2Api.md#returnswarehousev2deleteparcelreturncarrier) | **DELETE** /v2/returns-warehouse/addresses/{returnAddressId}/carriers/{returnAddressCarrierId} | delete returnCarrier for returnWarehouse address
[**returnsWarehouseV2DeleteReturnsWarehouseAddressById**](ReturnsWarehouseV2Api.md#returnswarehousev2deletereturnswarehouseaddressbyid) | **DELETE** /v2/returns-warehouse/addresses/{returnAddressId} | delete returnWarehouse address by returnAddressId
[**returnsWarehouseV2GetAllReturnsWarehouseAddresses**](ReturnsWarehouseV2Api.md#returnswarehousev2getallreturnswarehouseaddresses) | **GET** /v2/returns-warehouse/addresses | get all returnWarehouse addresses
[**returnsWarehouseV2GetReturnsWarehouseAddressById**](ReturnsWarehouseV2Api.md#returnswarehousev2getreturnswarehouseaddressbyid) | **GET** /v2/returns-warehouse/addresses/{returnAddressId} | get returnWarehouse address by returnAddressId
[**returnsWarehouseV2GetReturnsWarehouseCarriersByReturnAddressId**](ReturnsWarehouseV2Api.md#returnswarehousev2getreturnswarehousecarriersbyreturnaddressid) | **GET** /v2/returns-warehouse/addresses/{returnAddressId}/carriers | get returnWarehouse Carriers by returnAddressId
[**returnsWarehouseV2GetReturnsWarehouseCarriersByReturnAddressIdAndReturnAddressCarrierId**](ReturnsWarehouseV2Api.md#returnswarehousev2getreturnswarehousecarriersbyreturnaddressidandreturnaddresscarrierid) | **GET** /v2/returns-warehouse/addresses/{returnAddressId}/carriers/{returnAddressCarrierId} | get returnWarehouse Carriers by returnAddressCarrierId
[**returnsWarehouseV2UpdateParcelReturnCarrier**](ReturnsWarehouseV2Api.md#returnswarehousev2updateparcelreturncarrier) | **PUT** /v2/returns-warehouse/addresses/{returnAddressId}/carriers/{returnAddressCarrierId} | update returnCarrier for returnWarehouse address
[**returnsWarehouseV2UpdateReturnWarehouseAddress**](ReturnsWarehouseV2Api.md#returnswarehousev2updatereturnwarehouseaddress) | **PUT** /v2/returns-warehouse/addresses/{returnAddressId} | update returnWarehouse address by returnAddressId

# **returnsWarehouseV2CreateReturnWarehouseAddress**
> \Swagger\Client\Model\ReturnsWarehouseAddressIdResponseReturnsWarehouseV2 returnsWarehouseV2CreateReturnWarehouseAddress($body, $authorization)

create returnWarehouse address

This POST API endpoint is to add a new return warehouse address.  A new return address will always be created after verifying it is not a duplicate.  The address will be validated before being saved.  When the warehouse type is `INTERNATIONAL_CONSOLIDATION_HUB`, address details should not be entered.  The address is automatically set to `Robert-Bosch-Breite 10, 37079 Göttingen, Germany`. `INTERNATIONAL_CONSOLIDATION_HUB` cannot be a misdirected/standard address, you need to first enter standard/misdirected address.  In order to ensure the processing of misdirected returns, we need an address to which these shipments can be delivered.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ReturnsWarehouseV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ReturnsWarehouseAddressRequestReturnsWarehouseV2(); // \Swagger\Client\Model\ReturnsWarehouseAddressRequestReturnsWarehouseV2 | return warehouse address
$authorization = "authorization_example"; // string | Access Token

try {
    $result = $apiInstance->returnsWarehouseV2CreateReturnWarehouseAddress($body, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsWarehouseV2Api->returnsWarehouseV2CreateReturnWarehouseAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ReturnsWarehouseAddressRequestReturnsWarehouseV2**](../Model/ReturnsWarehouseAddressRequestReturnsWarehouseV2.md)| return warehouse address |
 **authorization** | **string**| Access Token |

### Return type

[**\Swagger\Client\Model\ReturnsWarehouseAddressIdResponseReturnsWarehouseV2**](../Model/ReturnsWarehouseAddressIdResponseReturnsWarehouseV2.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **returnsWarehouseV2CreateReturnsWarehouseCarrier**
> \Swagger\Client\Model\ReturnCarrierResponseReturnsWarehouseV2 returnsWarehouseV2CreateReturnsWarehouseCarrier($body, $authorization, $return_address_id)

create returnCarrier for returnWarehouse address

This POST API endpoint is used to add a return carrier and its associated routing codes to a specified return warehouse.  To add a carrier, the return warehouse must be identified by its ID.   Ensure that a return warehouse address has been created before adding a parcel return carrier.  The warehouse address can be created using the `create a parcel return address` (POST ).  The Return Address ID must be provided as a path parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ReturnsWarehouseV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ReturnsWarehouseCarrierRequestReturnsWarehouseV2(); // \Swagger\Client\Model\ReturnsWarehouseCarrierRequestReturnsWarehouseV2 | return warehouse carrier post request
$authorization = "authorization_example"; // string | Access Token
$return_address_id = "return_address_id_example"; // string | Unique identifier of the returnWarehouse

try {
    $result = $apiInstance->returnsWarehouseV2CreateReturnsWarehouseCarrier($body, $authorization, $return_address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsWarehouseV2Api->returnsWarehouseV2CreateReturnsWarehouseCarrier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ReturnsWarehouseCarrierRequestReturnsWarehouseV2**](../Model/ReturnsWarehouseCarrierRequestReturnsWarehouseV2.md)| return warehouse carrier post request |
 **authorization** | **string**| Access Token |
 **return_address_id** | **string**| Unique identifier of the returnWarehouse |

### Return type

[**\Swagger\Client\Model\ReturnCarrierResponseReturnsWarehouseV2**](../Model/ReturnCarrierResponseReturnsWarehouseV2.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **returnsWarehouseV2DeleteParcelReturnCarrier**
> returnsWarehouseV2DeleteParcelReturnCarrier($authorization, $return_address_id, $return_address_carrier_id)

delete returnCarrier for returnWarehouse address

This DELETE API endpoint is to delete a return address carrier by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ReturnsWarehouseV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Access Token
$return_address_id = "return_address_id_example"; // string | Unique identifier of the returnWarehouse
$return_address_carrier_id = "return_address_carrier_id_example"; // string | Unique identifier for each returnCarrier, which is linked with a returnWarehouse

try {
    $apiInstance->returnsWarehouseV2DeleteParcelReturnCarrier($authorization, $return_address_id, $return_address_carrier_id);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsWarehouseV2Api->returnsWarehouseV2DeleteParcelReturnCarrier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Access Token |
 **return_address_id** | **string**| Unique identifier of the returnWarehouse |
 **return_address_carrier_id** | **string**| Unique identifier for each returnCarrier, which is linked with a returnWarehouse |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **returnsWarehouseV2DeleteReturnsWarehouseAddressById**
> returnsWarehouseV2DeleteReturnsWarehouseAddressById($authorization, $return_address_id)

delete returnWarehouse address by returnAddressId

This DELETE API endpoint is to delete a return warehouse address by id.  **Deleting a misdirected address is not allowed.** **Deleting an address which has one or more return carrier(s) is not allowed.**

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ReturnsWarehouseV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Access Token
$return_address_id = "return_address_id_example"; // string | Unique identifier of the returnWarehouse

try {
    $apiInstance->returnsWarehouseV2DeleteReturnsWarehouseAddressById($authorization, $return_address_id);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsWarehouseV2Api->returnsWarehouseV2DeleteReturnsWarehouseAddressById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Access Token |
 **return_address_id** | **string**| Unique identifier of the returnWarehouse |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **returnsWarehouseV2GetAllReturnsWarehouseAddresses**
> \Swagger\Client\Model\ReturnsWarehouseAddressesReturnsWarehouseV2 returnsWarehouseV2GetAllReturnsWarehouseAddresses($authorization, $limit, $page, $return_warehouse_type)

get all returnWarehouse addresses

This GET API endpoint is to fetch all return warehouse addresses. Response is by default paginated with default page size of 50.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ReturnsWarehouseV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Access Token
$limit = 50; // int | Page size to limit the number of items returned in the response. Maximum value for limit can 50
$page = 1; // int | Page number to fetch. This parameter is required to fetch data for specific page number
$return_warehouse_type = "return_warehouse_type_example"; // string | This parameter allows fetching results filtered by the specified returnWarehouseType.

try {
    $result = $apiInstance->returnsWarehouseV2GetAllReturnsWarehouseAddresses($authorization, $limit, $page, $return_warehouse_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsWarehouseV2Api->returnsWarehouseV2GetAllReturnsWarehouseAddresses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Access Token |
 **limit** | **int**| Page size to limit the number of items returned in the response. Maximum value for limit can 50 | [optional] [default to 50]
 **page** | **int**| Page number to fetch. This parameter is required to fetch data for specific page number | [optional] [default to 1]
 **return_warehouse_type** | **string**| This parameter allows fetching results filtered by the specified returnWarehouseType. | [optional]

### Return type

[**\Swagger\Client\Model\ReturnsWarehouseAddressesReturnsWarehouseV2**](../Model/ReturnsWarehouseAddressesReturnsWarehouseV2.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **returnsWarehouseV2GetReturnsWarehouseAddressById**
> \Swagger\Client\Model\ReturnsWarehouseAddressWithIDReturnsWarehouseV2 returnsWarehouseV2GetReturnsWarehouseAddressById($authorization, $return_address_id)

get returnWarehouse address by returnAddressId

This GET API endpoint retrieves the return warehouse address for a partner based on the provided ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ReturnsWarehouseV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Access Token
$return_address_id = "return_address_id_example"; // string | Unique identifier of the returnWarehouse

try {
    $result = $apiInstance->returnsWarehouseV2GetReturnsWarehouseAddressById($authorization, $return_address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsWarehouseV2Api->returnsWarehouseV2GetReturnsWarehouseAddressById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Access Token |
 **return_address_id** | **string**| Unique identifier of the returnWarehouse |

### Return type

[**\Swagger\Client\Model\ReturnsWarehouseAddressWithIDReturnsWarehouseV2**](../Model/ReturnsWarehouseAddressWithIDReturnsWarehouseV2.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **returnsWarehouseV2GetReturnsWarehouseCarriersByReturnAddressId**
> \Swagger\Client\Model\ReturnsWarehouseCarriersReturnsWarehouseV2 returnsWarehouseV2GetReturnsWarehouseCarriersByReturnAddressId($authorization, $return_address_id)

get returnWarehouse Carriers by returnAddressId

This GET API endpoint retrieves the return warehouse carriers associated with a partner for a specific address, identified by the Return Address ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ReturnsWarehouseV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Access Token
$return_address_id = "return_address_id_example"; // string | Unique identifier of the returnWarehouse

try {
    $result = $apiInstance->returnsWarehouseV2GetReturnsWarehouseCarriersByReturnAddressId($authorization, $return_address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsWarehouseV2Api->returnsWarehouseV2GetReturnsWarehouseCarriersByReturnAddressId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Access Token |
 **return_address_id** | **string**| Unique identifier of the returnWarehouse |

### Return type

[**\Swagger\Client\Model\ReturnsWarehouseCarriersReturnsWarehouseV2**](../Model/ReturnsWarehouseCarriersReturnsWarehouseV2.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **returnsWarehouseV2GetReturnsWarehouseCarriersByReturnAddressIdAndReturnAddressCarrierId**
> \Swagger\Client\Model\ReturnsWarehouseCarrierReturnsWarehouseV2 returnsWarehouseV2GetReturnsWarehouseCarriersByReturnAddressIdAndReturnAddressCarrierId($authorization, $return_address_id, $return_address_carrier_id)

get returnWarehouse Carriers by returnAddressCarrierId

This GET API endpoint retrieves a specific return warehouse carrier of a partner using the Return Address ID and Carrier ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ReturnsWarehouseV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Access Token
$return_address_id = "return_address_id_example"; // string | Unique identifier of the returnWarehouse
$return_address_carrier_id = "return_address_carrier_id_example"; // string | Unique identifier for each returnCarrier, which is linked with a returnWarehouse

try {
    $result = $apiInstance->returnsWarehouseV2GetReturnsWarehouseCarriersByReturnAddressIdAndReturnAddressCarrierId($authorization, $return_address_id, $return_address_carrier_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsWarehouseV2Api->returnsWarehouseV2GetReturnsWarehouseCarriersByReturnAddressIdAndReturnAddressCarrierId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Access Token |
 **return_address_id** | **string**| Unique identifier of the returnWarehouse |
 **return_address_carrier_id** | **string**| Unique identifier for each returnCarrier, which is linked with a returnWarehouse |

### Return type

[**\Swagger\Client\Model\ReturnsWarehouseCarrierReturnsWarehouseV2**](../Model/ReturnsWarehouseCarrierReturnsWarehouseV2.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **returnsWarehouseV2UpdateParcelReturnCarrier**
> returnsWarehouseV2UpdateParcelReturnCarrier($body, $authorization, $return_address_id, $return_address_carrier_id)

update returnCarrier for returnWarehouse address

This PUT API endpoint is used to update an existing parcel return carrier by its ID.  The PUT request will only allow updating the carrier codes.  **Note that the HERMES carrier does not have carrier codes, so it cannot be updated.**

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ReturnsWarehouseV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ReturnsWarehouseCarrierRequestReturnsWarehouseV2(); // \Swagger\Client\Model\ReturnsWarehouseCarrierRequestReturnsWarehouseV2 | return warehouse carrier update request
$authorization = "authorization_example"; // string | Access Token
$return_address_id = "return_address_id_example"; // string | Unique identifier of the returnWarehouse
$return_address_carrier_id = "return_address_carrier_id_example"; // string | Unique identifier for each returnCarrier, which is linked with a returnWarehouse

try {
    $apiInstance->returnsWarehouseV2UpdateParcelReturnCarrier($body, $authorization, $return_address_id, $return_address_carrier_id);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsWarehouseV2Api->returnsWarehouseV2UpdateParcelReturnCarrier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ReturnsWarehouseCarrierRequestReturnsWarehouseV2**](../Model/ReturnsWarehouseCarrierRequestReturnsWarehouseV2.md)| return warehouse carrier update request |
 **authorization** | **string**| Access Token |
 **return_address_id** | **string**| Unique identifier of the returnWarehouse |
 **return_address_carrier_id** | **string**| Unique identifier for each returnCarrier, which is linked with a returnWarehouse |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **returnsWarehouseV2UpdateReturnWarehouseAddress**
> returnsWarehouseV2UpdateReturnWarehouseAddress($body, $authorization, $return_address_id)

update returnWarehouse address by returnAddressId

This PUT API endpoint is to update a return warehouse address.  Address will be validated before being saved.  When the warehouse type is `INTERNATIONAL_CONSOLIDATION_HUB`, address details should not be entered.  The address is automatically set to `Robert-Bosch-Breite 10, 37079 Göttingen, Germany`.  The country and warehouse type of the return warehouse address cannot be updated. Zipcode changes are restricted for addresses linked to a DHL carrier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ReturnsWarehouseV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ReturnsWarehouseAddressRequestReturnsWarehouseV2(); // \Swagger\Client\Model\ReturnsWarehouseAddressRequestReturnsWarehouseV2 | return warehouse address update request
$authorization = "authorization_example"; // string | Access Token
$return_address_id = "return_address_id_example"; // string | Unique identifier of the returnWarehouse

try {
    $apiInstance->returnsWarehouseV2UpdateReturnWarehouseAddress($body, $authorization, $return_address_id);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsWarehouseV2Api->returnsWarehouseV2UpdateReturnWarehouseAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ReturnsWarehouseAddressRequestReturnsWarehouseV2**](../Model/ReturnsWarehouseAddressRequestReturnsWarehouseV2.md)| return warehouse address update request |
 **authorization** | **string**| Access Token |
 **return_address_id** | **string**| Unique identifier of the returnWarehouse |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

