# Swagger\Client\ReturnsV3Api

All URIs are relative to *https://api.otto.market*

Method | HTTP request | Description
------------- | ------------- | -------------
[**returnsV3GetPositionItemsForUsingGETV3**](ReturnsV3Api.md#returnsv3getpositionitemsforusinggetv3) | **GET** /v3/returns | Get all the items filtered on return status
[**returnsV3ReceiveAcceptedReturnsV3UsingPOSTV3**](ReturnsV3Api.md#returnsv3receiveacceptedreturnsv3usingpostv3) | **POST** /v3/returns/acceptance | Accept the return for a sent position item (up to 200 items per request)
[**returnsV3ReceiveRejectedReturnsV3UsingPOSTV3**](ReturnsV3Api.md#returnsv3receiverejectedreturnsv3usingpostv3) | **POST** /v3/returns/rejection | Reject the return for a sent position item (up to 200 items per request)

# **returnsV3GetPositionItemsForUsingGETV3**
> \Swagger\Client\Model\PositionItemListReturnsV3 returnsV3GetPositionItemsForUsingGETV3($limit, $page, $status)

Get all the items filtered on return status

The items will be sorted on status modified time in reverse chronological order. Additionally we provide cursor based pagination via next link. This endpoint is limited to at max 50 results per page

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ReturnsV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | Page size to limit the number of items returned in the response. Maximum value for limit can 50
$page = 1; // int | Page number to fetch. This parameter is required to fetch data for specific page number
$status = "status_example"; // string | Return status for which items are being queried for (case-insensitive)

try {
    $result = $apiInstance->returnsV3GetPositionItemsForUsingGETV3($limit, $page, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsV3Api->returnsV3GetPositionItemsForUsingGETV3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Page size to limit the number of items returned in the response. Maximum value for limit can 50 | [optional] [default to 10]
 **page** | **int**| Page number to fetch. This parameter is required to fetch data for specific page number | [optional] [default to 1]
 **status** | **string**| Return status for which items are being queried for (case-insensitive) | [optional]

### Return type

[**\Swagger\Client\Model\PositionItemListReturnsV3**](../Model/PositionItemListReturnsV3.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **returnsV3ReceiveAcceptedReturnsV3UsingPOSTV3**
> object returnsV3ReceiveAcceptedReturnsV3UsingPOSTV3($body)

Accept the return for a sent position item (up to 200 items per request)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ReturnsV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\AcceptedPartnerReturnV3ReturnsV3(); // \Swagger\Client\Model\AcceptedPartnerReturnV3ReturnsV3 | acceptedPartnerReturn

try {
    $result = $apiInstance->returnsV3ReceiveAcceptedReturnsV3UsingPOSTV3($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsV3Api->returnsV3ReceiveAcceptedReturnsV3UsingPOSTV3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AcceptedPartnerReturnV3ReturnsV3**](../Model/AcceptedPartnerReturnV3ReturnsV3.md)| acceptedPartnerReturn |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **returnsV3ReceiveRejectedReturnsV3UsingPOSTV3**
> object returnsV3ReceiveRejectedReturnsV3UsingPOSTV3($body)

Reject the return for a sent position item (up to 200 items per request)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ReturnsV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\RejectedPartnerReturnV3ReturnsV3(); // \Swagger\Client\Model\RejectedPartnerReturnV3ReturnsV3 | rejectedPartnerReturn

try {
    $result = $apiInstance->returnsV3ReceiveRejectedReturnsV3UsingPOSTV3($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsV3Api->returnsV3ReceiveRejectedReturnsV3UsingPOSTV3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RejectedPartnerReturnV3ReturnsV3**](../Model/RejectedPartnerReturnV3ReturnsV3.md)| rejectedPartnerReturn |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

