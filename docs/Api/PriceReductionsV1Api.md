# cbdesk\otto\Client\PriceReductionsV1Api

All URIs are relative to *https://api.otto.market*

Method | HTTP request | Description
------------- | ------------- | -------------
[**priceReductionsV1ApplyPriceReduction**](PriceReductionsV1Api.md#pricereductionsv1applypricereduction) | **POST** /v1/price-reductions | Apply price reduction for a positionItemId
[**priceReductionsV1GetAllReductionsForPartner**](PriceReductionsV1Api.md#pricereductionsv1getallreductionsforpartner) | **GET** /v1/price-reductions | Get all priceReductions

# **priceReductionsV1ApplyPriceReduction**
> \cbdesk\otto\Client\Model\AcceptedPriceReductionResponsePriceReductionsV1 priceReductionsV1ApplyPriceReduction($body)

Apply price reduction for a positionItemId

Apply price reduction on a positionItemId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = cbdesk\otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\PriceReductionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \cbdesk\otto\Client\Model\PartnerPriceReductionRequestPriceReductionsV1(); // \cbdesk\otto\Client\Model\PartnerPriceReductionRequestPriceReductionsV1 | 

try {
    $result = $apiInstance->priceReductionsV1ApplyPriceReduction($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceReductionsV1Api->priceReductionsV1ApplyPriceReduction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\cbdesk\otto\Client\Model\PartnerPriceReductionRequestPriceReductionsV1**](../Model/PartnerPriceReductionRequestPriceReductionsV1.md)|  |

### Return type

[**\cbdesk\otto\Client\Model\AcceptedPriceReductionResponsePriceReductionsV1**](../Model/AcceptedPriceReductionResponsePriceReductionsV1.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **priceReductionsV1GetAllReductionsForPartner**
> \cbdesk\otto\Client\Model\PriceReductionResponsePriceReductionsV1 priceReductionsV1GetAllReductionsForPartner($position_item_id, $page, $limit)

Get all priceReductions

This API can be used to fetch the price reduction for a single positionItemId by providing positionId as a query parameter in the request. If the positionItemId is not specified, then this api would list the price reductions for all your products.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = cbdesk\otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\PriceReductionsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$position_item_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | positionItemId for which price reductions are to be fetched
$page = 1; // int | Page number to be fetched. Page number should not be less than 1
$limit = 10; // int | Number of positionItemIds to be fetched per page. Limit should not exceed 128

try {
    $result = $apiInstance->priceReductionsV1GetAllReductionsForPartner($position_item_id, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceReductionsV1Api->priceReductionsV1GetAllReductionsForPartner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **position_item_id** | [**string**](../Model/.md)| positionItemId for which price reductions are to be fetched | [optional]
 **page** | **int**| Page number to be fetched. Page number should not be less than 1 | [optional] [default to 1]
 **limit** | **int**| Number of positionItemIds to be fetched per page. Limit should not exceed 128 | [optional] [default to 10]

### Return type

[**\cbdesk\otto\Client\Model\PriceReductionResponsePriceReductionsV1**](../Model/PriceReductionResponsePriceReductionsV1.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

