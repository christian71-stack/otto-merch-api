# Swagger\Client\ProductsV4Api

All URIs are relative to *https://api.otto.market*

Method | HTTP request | Description
------------- | ------------- | -------------
[**productsV4CreateOrUpdateProductVariations**](ProductsV4Api.md#productsv4createorupdateproductvariations) | **POST** /v4/products | Create or update product variations
[**productsV4FailedByProcessId**](ProductsV4Api.md#productsv4failedbyprocessid) | **GET** /v4/products/update-tasks/{processUuid}/failed | List failed products of a product data delivery
[**productsV4GetActiveStatus**](ProductsV4Api.md#productsv4getactivestatus) | **GET** /v4/products/active-status | Read active status
[**productsV4GetBrands**](ProductsV4Api.md#productsv4getbrands) | **GET** /v4/products/brands | List of allowed brands
[**productsV4GetCategoryGroups**](ProductsV4Api.md#productsv4getcategorygroups) | **GET** /v4/products/categories | Read product categories
[**productsV4GetContentChanges**](ProductsV4Api.md#productsv4getcontentchanges) | **GET** /v4/products/{sku}/content-changes | Read content changes for a single product variation
[**productsV4GetContentChanges2**](ProductsV4Api.md#productsv4getcontentchanges2) | **GET** /v4/products/content-changes | Read content changes within time period
[**productsV4GetMarketPlaceStatus**](ProductsV4Api.md#productsv4getmarketplacestatus) | **GET** /v4/products/{sku}/marketplace-status | Read marketplace status for a single product variation
[**productsV4GetMarketPlaceStatusList**](ProductsV4Api.md#productsv4getmarketplacestatuslist) | **GET** /v4/products/marketplace-status | Read marketplace status of product variations
[**productsV4GetPartnerProducts**](ProductsV4Api.md#productsv4getpartnerproducts) | **GET** /v4/products | Read product variations
[**productsV4GetProductVariation**](ProductsV4Api.md#productsv4getproductvariation) | **GET** /v4/products/{sku} | Read a single product variation
[**productsV4GetProductVariationPrice**](ProductsV4Api.md#productsv4getproductvariationprice) | **GET** /v4/products/{sku}/prices | Read a single product variation price
[**productsV4GetProductVariationPrices**](ProductsV4Api.md#productsv4getproductvariationprices) | **GET** /v4/products/prices | Read product variations prices
[**productsV4GetVariationActiveStatus**](ProductsV4Api.md#productsv4getvariationactivestatus) | **GET** /v4/products/{sku}/active-status | Read the active status of a single product variation
[**productsV4ProgressByProcessId**](ProductsV4Api.md#productsv4progressbyprocessid) | **GET** /v4/products/update-tasks/{processUuid} | Request the results of a product data delivery
[**productsV4SucceededByProcessId**](ProductsV4Api.md#productsv4succeededbyprocessid) | **GET** /v4/products/update-tasks/{processUuid}/succeeded | List succeeded products of a product data delivery
[**productsV4UnchangedByProcessId**](ProductsV4Api.md#productsv4unchangedbyprocessid) | **GET** /v4/products/update-tasks/{processUuid}/unchanged | List unchanged products of a product data delivery
[**productsV4UpdateActiveStatus**](ProductsV4Api.md#productsv4updateactivestatus) | **POST** /v4/products/active-status | Update active status
[**productsV4UpdateProductVariationPrices**](ProductsV4Api.md#productsv4updateproductvariationprices) | **POST** /v4/products/prices | Update product variation prices

# **productsV4CreateOrUpdateProductVariations**
> \Swagger\Client\Model\ProductProcessProgressProductsV4 productsV4CreateOrUpdateProductVariations($body, $x_request_timestamp)

Create or update product variations

Returns a process-id to query results. The limit for the number of product variations in one request is 500.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ProductsV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\ProductVariationProductsV4()); // \Swagger\Client\Model\ProductVariationProductsV4[] | 
$x_request_timestamp = "x_request_timestamp_example"; // string | Holds the optional client side update request timestamp, in ISO DateTime format

try {
    $result = $apiInstance->productsV4CreateOrUpdateProductVariations($body, $x_request_timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV4Api->productsV4CreateOrUpdateProductVariations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductVariationProductsV4[]**](../Model/ProductVariationProductsV4.md)|  | [optional]
 **x_request_timestamp** | **string**| Holds the optional client side update request timestamp, in ISO DateTime format | [optional]

### Return type

[**\Swagger\Client\Model\ProductProcessProgressProductsV4**](../Model/ProductProcessProgressProductsV4.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsV4FailedByProcessId**
> \Swagger\Client\Model\ProductProcessResultProductsV4 productsV4FailedByProcessId($process_uuid)

List failed products of a product data delivery

Request the failed products of the product data delivery with the linked processUuid. The response will contain a list of failed products with associated error details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ProductsV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_uuid = "process_uuid_example"; // string | search for the failed products of a product data delivery identified by its processUuid.

try {
    $result = $apiInstance->productsV4FailedByProcessId($process_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV4Api->productsV4FailedByProcessId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_uuid** | **string**| search for the failed products of a product data delivery identified by its processUuid. |

### Return type

[**\Swagger\Client\Model\ProductProcessResultProductsV4**](../Model/ProductProcessResultProductsV4.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsV4GetActiveStatus**
> \Swagger\Client\Model\ActiveStatusListResponseProductsV4 productsV4GetActiveStatus($sku, $product_reference, $category, $brand_id, $page, $limit)

Read active status

The total number of results could be limited by specifying query parameters. Generally the resulting active status values will be paginated. The default page length is 100 active status entries per response, also the page size limit. The links specified in the result can be used to page through the total result space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ProductsV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | search for product variations by their sku value. Use this if your sku values contain slash ('/') or dot ('.') characters.
$product_reference = "product_reference_example"; // string | search for product variations by their productReference value
$category = "category_example"; // string | search for product variations by their category value
$brand_id = "brand_id_example"; // string | search for product variations by their brand ID value
$page = 56; // int | 
$limit = 56; // int | proposed limit for the number of active status values per response page (at most 100)

try {
    $result = $apiInstance->productsV4GetActiveStatus($sku, $product_reference, $category, $brand_id, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV4Api->productsV4GetActiveStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**| search for product variations by their sku value. Use this if your sku values contain slash (&#x27;/&#x27;) or dot (&#x27;.&#x27;) characters. | [optional]
 **product_reference** | **string**| search for product variations by their productReference value | [optional]
 **category** | **string**| search for product variations by their category value | [optional]
 **brand_id** | **string**| search for product variations by their brand ID value | [optional]
 **page** | **int**|  | [optional]
 **limit** | **int**| proposed limit for the number of active status values per response page (at most 100) | [optional]

### Return type

[**\Swagger\Client\Model\ActiveStatusListResponseProductsV4**](../Model/ActiveStatusListResponseProductsV4.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsV4GetBrands**
> \Swagger\Client\Model\BrandListResponseProductsV4 productsV4GetBrands($if_match, $if_none_match, $if_modified_since, $if_unmodified_since, $page, $limit)

List of allowed brands

Read the list of brands that are known on the Otto market place. The list of brands will be paginated. Brands consist of a name, a brand Id, a (link to a) logo and a boolean useable that lets you know wheter you are allowed to set up variants with this brand on the Otto Marketplace. The default page length is 100 entries per response, the page size upper limit is 1000. The links specified in the result can be used to page through the total result space. Note that there will be no prev link on the first page and no next link on the last page.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ProductsV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$if_match = "if_match_example"; // string | The RFC7232 If-Match header field in a request requires the server to only operate on the resource that matches at least one of the provided entity-tags. This allows clients express a precondition that prevent the method from being applied if there have been any changes to the resource (see [RFC 7232 Section 3.1](https://tools.ietf.org/html/rfc7232#section-3.1).
$if_none_match = "if_none_match_example"; // string | The RFC7232 If-None-Match header field in a request requires the server to only operate on the resource if it does not match any of the provided entity-tags. If the provided entity-tag is `*`, it is required that the resource does not exist at all (see [RFC 7232 Section 3.2](https://tools.ietf.org/html/rfc7232#section-3.2)
$if_modified_since = "if_modified_since_example"; // string | The RFC7232 If-Modified-Since header field makes a GET or HEAD request method conditional on the selected representation's modification date being more recent than the date provided in the field-value. Transfer of the selected representation's data is avoided if that data has not changed.
$if_unmodified_since = "if_unmodified_since_example"; // string | The RFC7232 If-Unmodified-Since header field makes the request method conditional on the selected representation's last modification date being earlier than or equal to the date provided in the field-value. This field accomplishes the same purpose as If-Match for cases where the user agent does not have an entity-tag for the representation.
$page = 56; // int | 
$limit = 56; // int | 

try {
    $result = $apiInstance->productsV4GetBrands($if_match, $if_none_match, $if_modified_since, $if_unmodified_since, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV4Api->productsV4GetBrands: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_match** | **string**| The RFC7232 If-Match header field in a request requires the server to only operate on the resource that matches at least one of the provided entity-tags. This allows clients express a precondition that prevent the method from being applied if there have been any changes to the resource (see [RFC 7232 Section 3.1](https://tools.ietf.org/html/rfc7232#section-3.1). | [optional]
 **if_none_match** | **string**| The RFC7232 If-None-Match header field in a request requires the server to only operate on the resource if it does not match any of the provided entity-tags. If the provided entity-tag is &#x60;*&#x60;, it is required that the resource does not exist at all (see [RFC 7232 Section 3.2](https://tools.ietf.org/html/rfc7232#section-3.2) | [optional]
 **if_modified_since** | **string**| The RFC7232 If-Modified-Since header field makes a GET or HEAD request method conditional on the selected representation&#x27;s modification date being more recent than the date provided in the field-value. Transfer of the selected representation&#x27;s data is avoided if that data has not changed. | [optional]
 **if_unmodified_since** | **string**| The RFC7232 If-Unmodified-Since header field makes the request method conditional on the selected representation&#x27;s last modification date being earlier than or equal to the date provided in the field-value. This field accomplishes the same purpose as If-Match for cases where the user agent does not have an entity-tag for the representation. | [optional]
 **page** | **int**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\BrandListResponseProductsV4**](../Model/BrandListResponseProductsV4.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsV4GetCategoryGroups**
> \Swagger\Client\Model\CategoryGroupsProductsV4 productsV4GetCategoryGroups($page, $limit, $category)

Read product categories

Returns product categories and associated attributes of the OTTO market place. The total number of results could be limited by specifying query parameters. Generally the resulting product categories values will be paginated. The default page length is 100 product categories per response, the page size limit is 2000. The links specified in the result can be used to page through the total result space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ProductsV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | the number (starting with 0) of the page, that should be delivered.
$limit = 56; // int | proposed limit for the number of product categories per response page  (at most 2000)
$category = "category_example"; // string | read a single category

try {
    $result = $apiInstance->productsV4GetCategoryGroups($page, $limit, $category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV4Api->productsV4GetCategoryGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| the number (starting with 0) of the page, that should be delivered. | [optional]
 **limit** | **int**| proposed limit for the number of product categories per response page  (at most 2000) | [optional]
 **category** | **string**| read a single category | [optional]

### Return type

[**\Swagger\Client\Model\CategoryGroupsProductsV4**](../Model/CategoryGroupsProductsV4.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsV4GetContentChanges**
> \Swagger\Client\Model\ContentChangesApiResultProductsV4 productsV4GetContentChanges($sku, $from_date, $page, $limit)

Read content changes for a single product variation

Returns the content changes info for a single product variation within a specific time period. The resulting content changes will be paginated. The default page length is 100 entries per response, also the page size limit. The links specified in the result can be used to page through the total result space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ProductsV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | search for a product variation by its SKU value
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | search for content changes from this ISO8601 date on. The maxmimum and default value is 28 days before now. Future values can be specified, but lead to an empty result.
$page = 56; // int | 
$limit = 56; // int | proposed limit for the number of entries per response page (at most 100)

try {
    $result = $apiInstance->productsV4GetContentChanges($sku, $from_date, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV4Api->productsV4GetContentChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**| search for a product variation by its SKU value |
 **from_date** | **\DateTime**| search for content changes from this ISO8601 date on. The maxmimum and default value is 28 days before now. Future values can be specified, but lead to an empty result. | [optional]
 **page** | **int**|  | [optional]
 **limit** | **int**| proposed limit for the number of entries per response page (at most 100) | [optional]

### Return type

[**\Swagger\Client\Model\ContentChangesApiResultProductsV4**](../Model/ContentChangesApiResultProductsV4.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsV4GetContentChanges2**
> \Swagger\Client\Model\ContentChangesApiResultProductsV4 productsV4GetContentChanges2($sku, $from_date, $page, $limit)

Read content changes within time period

Read the content changes for all your product variations within a specific time period. You can also use this endpoint to read the content changes for more than one variation or if the sku value contains slash ('/') or dot ('.') characters, so that you cannot use the other endpoint with one dedicated sku value in the path. The resulting content changes will be paginated. The default page length is 100 entries per response, which also is the page size upper limit. The links specified in the result can be used to page through the total result space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ProductsV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = array("sku_example"); // string[] | search for product variations by their sku value. Use this to query for multiple variations or if your sku values contain slash ('/') or dot ('.') characters. You may separate multiple sku values by comma or state each one with a &sku= in front of the value. Please note that if you like to query for a single variation whose value contains a comma you have to add one empty &sku= at the end of the query string or use the other endpoint.
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | search for content changes from this time on. The maxmimum and default value is 28 days before now. Future values can be specified, but lead to an empty result.
$page = 56; // int | 
$limit = 56; // int | proposed limit for the number of content changes per response page (at most 100)

try {
    $result = $apiInstance->productsV4GetContentChanges2($sku, $from_date, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV4Api->productsV4GetContentChanges2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | [**string[]**](../Model/string.md)| search for product variations by their sku value. Use this to query for multiple variations or if your sku values contain slash (&#x27;/&#x27;) or dot (&#x27;.&#x27;) characters. You may separate multiple sku values by comma or state each one with a &amp;sku&#x3D; in front of the value. Please note that if you like to query for a single variation whose value contains a comma you have to add one empty &amp;sku&#x3D; at the end of the query string or use the other endpoint. | [optional]
 **from_date** | **\DateTime**| search for content changes from this time on. The maxmimum and default value is 28 days before now. Future values can be specified, but lead to an empty result. | [optional]
 **page** | **int**|  | [optional]
 **limit** | **int**| proposed limit for the number of content changes per response page (at most 100) | [optional]

### Return type

[**\Swagger\Client\Model\ContentChangesApiResultProductsV4**](../Model/ContentChangesApiResultProductsV4.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsV4GetMarketPlaceStatus**
> \Swagger\Client\Model\MarketPlaceStatusProductsV4 productsV4GetMarketPlaceStatus($sku)

Read marketplace status for a single product variation

Returns marketplace status for a single product variation by SKU.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ProductsV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | search for a marketplace status by its SKU value

try {
    $result = $apiInstance->productsV4GetMarketPlaceStatus($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV4Api->productsV4GetMarketPlaceStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**| search for a marketplace status by its SKU value |

### Return type

[**\Swagger\Client\Model\MarketPlaceStatusProductsV4**](../Model/MarketPlaceStatusProductsV4.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsV4GetMarketPlaceStatusList**
> \Swagger\Client\Model\MarketPlaceStatusApiResultProductsV4 productsV4GetMarketPlaceStatusList($sku, $product_reference, $category, $brand_id, $from_date, $page, $limit, $market_place_status, $sort_order)

Read marketplace status of product variations

The total number of results could be limited by specifying query parameters. Generally the resulting marketplace status will be paginated. The default page length is 100 product variations per response, also the page size limit. The links specified in the result can be used to page through the total result space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ProductsV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | search for product variations by their sku value. Use this if your sku values contain slash ('/') or dot ('.') characters.
$product_reference = "product_reference_example"; // string | search marketplace status by the productReference value of the related product variations
$category = "category_example"; // string | search marketplace status by the category value of the related product variations
$brand_id = "brand_id_example"; // string | search marketplace status by the brand ID value of the related product variations
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | search marketplace status for a time range starting with the given date (in ISO8601, like '2021-10-09T07:52:19.820Z' or '2021-10-09T07:52:19.820+01:00')
$page = 56; // int | page to load
$limit = 56; // int | proposed limit for the number of marketplace status per response page (at most 1000)
$market_place_status = array("market_place_status_example"); // string[] | only include items that match any of the provided status
$sort_order = "sort_order_example"; // string | Define the sort order of the resulting entries. Available values are 'desc' for 'newest lastModified first' and 'asc' for 'oldest lastModified first' - default is 'desc'

try {
    $result = $apiInstance->productsV4GetMarketPlaceStatusList($sku, $product_reference, $category, $brand_id, $from_date, $page, $limit, $market_place_status, $sort_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV4Api->productsV4GetMarketPlaceStatusList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**| search for product variations by their sku value. Use this if your sku values contain slash (&#x27;/&#x27;) or dot (&#x27;.&#x27;) characters. | [optional]
 **product_reference** | **string**| search marketplace status by the productReference value of the related product variations | [optional]
 **category** | **string**| search marketplace status by the category value of the related product variations | [optional]
 **brand_id** | **string**| search marketplace status by the brand ID value of the related product variations | [optional]
 **from_date** | **\DateTime**| search marketplace status for a time range starting with the given date (in ISO8601, like &#x27;2021-10-09T07:52:19.820Z&#x27; or &#x27;2021-10-09T07:52:19.820+01:00&#x27;) | [optional]
 **page** | **int**| page to load | [optional]
 **limit** | **int**| proposed limit for the number of marketplace status per response page (at most 1000) | [optional]
 **market_place_status** | [**string[]**](../Model/string.md)| only include items that match any of the provided status | [optional]
 **sort_order** | **string**| Define the sort order of the resulting entries. Available values are &#x27;desc&#x27; for &#x27;newest lastModified first&#x27; and &#x27;asc&#x27; for &#x27;oldest lastModified first&#x27; - default is &#x27;desc&#x27; | [optional]

### Return type

[**\Swagger\Client\Model\MarketPlaceStatusApiResultProductsV4**](../Model/MarketPlaceStatusApiResultProductsV4.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsV4GetPartnerProducts**
> \Swagger\Client\Model\ProductVariationApiResultProductsV4 productsV4GetPartnerProducts($sku, $product_reference, $category, $brand_id, $page, $limit)

Read product variations

The total number of results could be limited by specifying query parameters. Generally the resulting product variations will be paginated. The default page length is 100 product variations per response, also the page size limit. The links specified in the result can be used to page through the total result space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ProductsV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | search for product variations by their sku value. Use this if your sku values contain slash ('/') or dot ('.') characters.
$product_reference = "product_reference_example"; // string | search for product variations by their productReference value
$category = "category_example"; // string | search for product variations by their category value
$brand_id = "brand_id_example"; // string | search for product variations by their brandId value
$page = 56; // int | 
$limit = 56; // int | proposed limit for the number of products per response page (at most 100)

try {
    $result = $apiInstance->productsV4GetPartnerProducts($sku, $product_reference, $category, $brand_id, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV4Api->productsV4GetPartnerProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**| search for product variations by their sku value. Use this if your sku values contain slash (&#x27;/&#x27;) or dot (&#x27;.&#x27;) characters. | [optional]
 **product_reference** | **string**| search for product variations by their productReference value | [optional]
 **category** | **string**| search for product variations by their category value | [optional]
 **brand_id** | **string**| search for product variations by their brandId value | [optional]
 **page** | **int**|  | [optional]
 **limit** | **int**| proposed limit for the number of products per response page (at most 100) | [optional]

### Return type

[**\Swagger\Client\Model\ProductVariationApiResultProductsV4**](../Model/ProductVariationApiResultProductsV4.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsV4GetProductVariation**
> \Swagger\Client\Model\ProductVariationProductsV4 productsV4GetProductVariation($sku)

Read a single product variation

Returns a single product variation by SKU.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ProductsV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | search for a product variation by its SKU value

try {
    $result = $apiInstance->productsV4GetProductVariation($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV4Api->productsV4GetProductVariation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**| search for a product variation by its SKU value |

### Return type

[**\Swagger\Client\Model\ProductVariationProductsV4**](../Model/ProductVariationProductsV4.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsV4GetProductVariationPrice**
> \Swagger\Client\Model\SkuPricingProductsV4 productsV4GetProductVariationPrice($sku)

Read a single product variation price

Read the price data of a single product variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ProductsV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | search for a product variation by its SKU value

try {
    $result = $apiInstance->productsV4GetProductVariationPrice($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV4Api->productsV4GetProductVariationPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**| search for a product variation by its SKU value |

### Return type

[**\Swagger\Client\Model\SkuPricingProductsV4**](../Model/SkuPricingProductsV4.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsV4GetProductVariationPrices**
> \Swagger\Client\Model\PriceApiResultProductsV4 productsV4GetProductVariationPrices($sku, $product_reference, $category, $brand_id, $page, $limit)

Read product variations prices

Read your product variations prices. The total number of results could be limited by specifying query parameters. Generally the resulting product variations will be paginated. The default page length is 100 product variations per response, also the page size limit. The links specified in the result can be used to page through the total result space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ProductsV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | search for product variations by their sku value. Use this if your sku values contain slash ('/') or dot ('.') characters.
$product_reference = "product_reference_example"; // string | search for product variations by their productReference value
$category = "category_example"; // string | search for product variations by their category value
$brand_id = "brand_id_example"; // string | search for product variations by their ID value
$page = 56; // int | 
$limit = 56; // int | proposed limit for the number of products per response page (at most 100)

try {
    $result = $apiInstance->productsV4GetProductVariationPrices($sku, $product_reference, $category, $brand_id, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV4Api->productsV4GetProductVariationPrices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**| search for product variations by their sku value. Use this if your sku values contain slash (&#x27;/&#x27;) or dot (&#x27;.&#x27;) characters. | [optional]
 **product_reference** | **string**| search for product variations by their productReference value | [optional]
 **category** | **string**| search for product variations by their category value | [optional]
 **brand_id** | **string**| search for product variations by their ID value | [optional]
 **page** | **int**|  | [optional]
 **limit** | **int**| proposed limit for the number of products per response page (at most 100) | [optional]

### Return type

[**\Swagger\Client\Model\PriceApiResultProductsV4**](../Model/PriceApiResultProductsV4.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsV4GetVariationActiveStatus**
> \Swagger\Client\Model\ActiveStatusProductsV4 productsV4GetVariationActiveStatus($sku)

Read the active status of a single product variation

Returns active status of the requested product variation by SKU.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ProductsV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | search for a product variation by its SKU value

try {
    $result = $apiInstance->productsV4GetVariationActiveStatus($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV4Api->productsV4GetVariationActiveStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**| search for a product variation by its SKU value |

### Return type

[**\Swagger\Client\Model\ActiveStatusProductsV4**](../Model/ActiveStatusProductsV4.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsV4ProgressByProcessId**
> \Swagger\Client\Model\ProductProcessProgressProductsV4 productsV4ProgressByProcessId($process_uuid)

Request the results of a product data delivery

The response will contain the links for the different parts of the result: products successfully created or updated, products with failures, products which did not contain any changes compared to the last sent version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ProductsV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_uuid = "process_uuid_example"; // string | search for a product data delivery result by its processUuid.

try {
    $result = $apiInstance->productsV4ProgressByProcessId($process_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV4Api->productsV4ProgressByProcessId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_uuid** | **string**| search for a product data delivery result by its processUuid. |

### Return type

[**\Swagger\Client\Model\ProductProcessProgressProductsV4**](../Model/ProductProcessProgressProductsV4.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsV4SucceededByProcessId**
> \Swagger\Client\Model\ProductProcessResultProductsV4 productsV4SucceededByProcessId($process_uuid)

List succeeded products of a product data delivery

Request the succeeded products of the product data delivery with the linked processUuid. The response will contain a list of successfully delivered products.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ProductsV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_uuid = "process_uuid_example"; // string | search for the succeeded products of a product data delivery identified by its processUuid.

try {
    $result = $apiInstance->productsV4SucceededByProcessId($process_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV4Api->productsV4SucceededByProcessId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_uuid** | **string**| search for the succeeded products of a product data delivery identified by its processUuid. |

### Return type

[**\Swagger\Client\Model\ProductProcessResultProductsV4**](../Model/ProductProcessResultProductsV4.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsV4UnchangedByProcessId**
> \Swagger\Client\Model\ProductProcessResultProductsV4 productsV4UnchangedByProcessId($process_uuid)

List unchanged products of a product data delivery

Request the unchanged products of the product data delivery with the linked processUuid. The response will contain a list of unchanged products.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ProductsV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_uuid = "process_uuid_example"; // string | search for the unchanged products of a product data delivery identified by its processUuid.

try {
    $result = $apiInstance->productsV4UnchangedByProcessId($process_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV4Api->productsV4UnchangedByProcessId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_uuid** | **string**| search for the unchanged products of a product data delivery identified by its processUuid. |

### Return type

[**\Swagger\Client\Model\ProductProcessResultProductsV4**](../Model/ProductProcessResultProductsV4.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsV4UpdateActiveStatus**
> \Swagger\Client\Model\ProductProcessProgressProductsV4 productsV4UpdateActiveStatus($body, $x_request_timestamp)

Update active status

Returns a process-id to query results. The limit for the number of product active statuses in one request is 500.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ProductsV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ActiveStatusListRequestProductsV4(); // \Swagger\Client\Model\ActiveStatusListRequestProductsV4 | 
$x_request_timestamp = "x_request_timestamp_example"; // string | Holds the optional client side update request timestamp, in ISO DateTime format

try {
    $result = $apiInstance->productsV4UpdateActiveStatus($body, $x_request_timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV4Api->productsV4UpdateActiveStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ActiveStatusListRequestProductsV4**](../Model/ActiveStatusListRequestProductsV4.md)|  | [optional]
 **x_request_timestamp** | **string**| Holds the optional client side update request timestamp, in ISO DateTime format | [optional]

### Return type

[**\Swagger\Client\Model\ProductProcessProgressProductsV4**](../Model/ProductProcessProgressProductsV4.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsV4UpdateProductVariationPrices**
> \Swagger\Client\Model\ProductProcessProgressProductsV4 productsV4UpdateProductVariationPrices($body, $x_request_timestamp)

Update product variation prices

Update your product variation prices and get a process-id to query results. The limit for the number of product variation prices in one request is 500.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ProductsV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\SkuPricingProductsV4()); // \Swagger\Client\Model\SkuPricingProductsV4[] | 
$x_request_timestamp = "x_request_timestamp_example"; // string | Holds the optional client side update request timestamp, in ISO DateTime format

try {
    $result = $apiInstance->productsV4UpdateProductVariationPrices($body, $x_request_timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV4Api->productsV4UpdateProductVariationPrices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SkuPricingProductsV4[]**](../Model/SkuPricingProductsV4.md)|  | [optional]
 **x_request_timestamp** | **string**| Holds the optional client side update request timestamp, in ISO DateTime format | [optional]

### Return type

[**\Swagger\Client\Model\ProductProcessProgressProductsV4**](../Model/ProductProcessProgressProductsV4.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

