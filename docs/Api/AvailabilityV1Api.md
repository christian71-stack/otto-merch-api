# Swagger\Client\AvailabilityV1Api

All URIs are relative to *https://api.otto.market*

Method | HTTP request | Description
------------- | ------------- | -------------
[**availabilityV1GetAvailableQuantities**](AvailabilityV1Api.md#availabilityv1getavailablequantities) | **GET** /v1/availability/quantities | Get quantities from a partner (up to 200 per request)
[**availabilityV1GetAvailableQuantityBySku**](AvailabilityV1Api.md#availabilityv1getavailablequantitybysku) | **GET** /v1/availability/quantities/{sku} | Get quantity for a sku
[**availabilityV1GetDeliveryInformationBySKU**](AvailabilityV1Api.md#availabilityv1getdeliveryinformationbysku) | **GET** /v1/availability/product-delivery-information/{sku} | Get product delivery information for a SKU
[**availabilityV1GetProductDeliveryInformation**](AvailabilityV1Api.md#availabilityv1getproductdeliveryinformation) | **GET** /v1/availability/product-delivery-information | Get product delivery information from a partner
[**availabilityV1StoreAvailableQuantitiesUsingPOST**](AvailabilityV1Api.md#availabilityv1storeavailablequantitiesusingpost) | **POST** /v1/availability/quantities | Update quantities
[**availabilityV1StoreProductDeliveryInformationUsingPOST**](AvailabilityV1Api.md#availabilityv1storeproductdeliveryinformationusingpost) | **POST** /v1/availability/product-delivery-information | Update product delivery information

# **availabilityV1GetAvailableQuantities**
> \Swagger\Client\Model\AvailableQuantityResponseAvailabilityV1 availabilityV1GetAvailableQuantities($authorization, $limit, $page, $cursor)

Get quantities from a partner (up to 200 per request)

Retrieve available quantities sorted by sku name in ascending.The maximum number of returned quantities is limited to 200.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\AvailabilityV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Access Token
$limit = 200; // int | The maximum number of available quantities to be returned in each response.
$page = 0; // int | Page number (0..N)
$cursor = "cursor_example"; // string | Cursor for paging requests. If a cursor is provided, the only other request parameter being considered is 'limit'. The cursor value is the last evaluted sku in the request response (Needs to be a valid sku value)

try {
    $result = $apiInstance->availabilityV1GetAvailableQuantities($authorization, $limit, $page, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityV1Api->availabilityV1GetAvailableQuantities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Access Token |
 **limit** | **int**| The maximum number of available quantities to be returned in each response. | [optional] [default to 200]
 **page** | **int**| Page number (0..N) | [optional] [default to 0]
 **cursor** | **string**| Cursor for paging requests. If a cursor is provided, the only other request parameter being considered is &#x27;limit&#x27;. The cursor value is the last evaluted sku in the request response (Needs to be a valid sku value) | [optional]

### Return type

[**\Swagger\Client\Model\AvailableQuantityResponseAvailabilityV1**](../Model/AvailableQuantityResponseAvailabilityV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **availabilityV1GetAvailableQuantityBySku**
> \Swagger\Client\Model\AvailableQuantitySingleResponseDTOAvailabilityV1 availabilityV1GetAvailableQuantityBySku($authorization, $sku)

Get quantity for a sku

Fetch a single available quantity by its unique sku name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\AvailabilityV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Access Token
$sku = "sku_example"; // string | The sku for the available quantity

try {
    $result = $apiInstance->availabilityV1GetAvailableQuantityBySku($authorization, $sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityV1Api->availabilityV1GetAvailableQuantityBySku: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Access Token |
 **sku** | **string**| The sku for the available quantity |

### Return type

[**\Swagger\Client\Model\AvailableQuantitySingleResponseDTOAvailabilityV1**](../Model/AvailableQuantitySingleResponseDTOAvailabilityV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **availabilityV1GetDeliveryInformationBySKU**
> \Swagger\Client\Model\ProductDeliveryInformationResponseDTOAvailabilityV1 availabilityV1GetDeliveryInformationBySKU($authorization, $sku)

Get product delivery information for a SKU

This GET API endpoint is to get a shipping profile id and processing time for given sku

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\AvailabilityV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Access Token
$sku = "sku_example"; // string | the sku in string format

try {
    $result = $apiInstance->availabilityV1GetDeliveryInformationBySKU($authorization, $sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityV1Api->availabilityV1GetDeliveryInformationBySKU: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Access Token |
 **sku** | **string**| the sku in string format |

### Return type

[**\Swagger\Client\Model\ProductDeliveryInformationResponseDTOAvailabilityV1**](../Model/ProductDeliveryInformationResponseDTOAvailabilityV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **availabilityV1GetProductDeliveryInformation**
> \Swagger\Client\Model\GetAllProductDeliveryInfoResponseAvailabilityV1 availabilityV1GetProductDeliveryInformation($authorization, $limit, $cursor)

Get product delivery information from a partner

Retrieve sku and shipping profile mapping.The maximum number of returned items is limited to 200. If there are more items, a cursor field is returned to get the next results.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\AvailabilityV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Access Token
$limit = 200; // int | The maximum number of shipping profile and sku mappings to be returned in each response.
$cursor = "cursor_example"; // string | Cursor for paging requests. If a cursor is provided, the only other request parameter being considered is 'limit'. <br><br> Note:The cursor value must remain unchanged from the previous request.

try {
    $result = $apiInstance->availabilityV1GetProductDeliveryInformation($authorization, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityV1Api->availabilityV1GetProductDeliveryInformation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Access Token |
 **limit** | **int**| The maximum number of shipping profile and sku mappings to be returned in each response. | [optional] [default to 200]
 **cursor** | **string**| Cursor for paging requests. If a cursor is provided, the only other request parameter being considered is &#x27;limit&#x27;. &lt;br&gt;&lt;br&gt; Note:The cursor value must remain unchanged from the previous request. | [optional]

### Return type

[**\Swagger\Client\Model\GetAllProductDeliveryInfoResponseAvailabilityV1**](../Model/GetAllProductDeliveryInfoResponseAvailabilityV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **availabilityV1StoreAvailableQuantitiesUsingPOST**
> object availabilityV1StoreAvailableQuantitiesUsingPOST($body, $authorization)

Update quantities

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\AvailabilityV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\AvailableQuantityRequestDTOAvailabilityV1()); // \Swagger\Client\Model\AvailableQuantityRequestDTOAvailabilityV1[] | 
$authorization = "authorization_example"; // string | Access Token

try {
    $result = $apiInstance->availabilityV1StoreAvailableQuantitiesUsingPOST($body, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityV1Api->availabilityV1StoreAvailableQuantitiesUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AvailableQuantityRequestDTOAvailabilityV1[]**](../Model/AvailableQuantityRequestDTOAvailabilityV1.md)|  |
 **authorization** | **string**| Access Token |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **availabilityV1StoreProductDeliveryInformationUsingPOST**
> \Swagger\Client\Model\InlineResponse202 availabilityV1StoreProductDeliveryInformationUsingPOST($body, $authorization)

Update product delivery information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\AvailabilityV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\ProductDeliveryInformationRequestDTOAvailabilityV1()); // \Swagger\Client\Model\ProductDeliveryInformationRequestDTOAvailabilityV1[] | 
$authorization = "authorization_example"; // string | Access Token

try {
    $result = $apiInstance->availabilityV1StoreProductDeliveryInformationUsingPOST($body, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityV1Api->availabilityV1StoreProductDeliveryInformationUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductDeliveryInformationRequestDTOAvailabilityV1[]**](../Model/ProductDeliveryInformationRequestDTOAvailabilityV1.md)|  |
 **authorization** | **string**| Access Token |

### Return type

[**\Swagger\Client\Model\InlineResponse202**](../Model/InlineResponse202.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

