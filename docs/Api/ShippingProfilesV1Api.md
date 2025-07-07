# Swagger\Client\ShippingProfilesV1Api

All URIs are relative to *https://api.otto.market*

Method | HTTP request | Description
------------- | ------------- | -------------
[**shippingProfilesV1CreateShippingProfile**](ShippingProfilesV1Api.md#shippingprofilesv1createshippingprofile) | **POST** /v1/shipping-profiles | Create shipping profile
[**shippingProfilesV1DeleteShippingProfile**](ShippingProfilesV1Api.md#shippingprofilesv1deleteshippingprofile) | **DELETE** /v1/shipping-profiles/{shippingProfileId} | Delete shipping profile
[**shippingProfilesV1GetShippingProfileById**](ShippingProfilesV1Api.md#shippingprofilesv1getshippingprofilebyid) | **GET** /v1/shipping-profiles/{shippingProfileId} | Get shipping profile by shipping profile id
[**shippingProfilesV1GetShippingProfiles**](ShippingProfilesV1Api.md#shippingprofilesv1getshippingprofiles) | **GET** /v1/shipping-profiles | Get all shipping profiles from a partner
[**shippingProfilesV1UpdateShippingProfile**](ShippingProfilesV1Api.md#shippingprofilesv1updateshippingprofile) | **PUT** /v1/shipping-profiles/{shippingProfileId} | Update shipping profile

# **shippingProfilesV1CreateShippingProfile**
> \Swagger\Client\Model\CreateShippingProfileResponseShippingProfilesV1 shippingProfilesV1CreateShippingProfile($body, $authorization)

Create shipping profile

This POST API endpoint is to create shipping profile API POST will always create a new shipping profile after ensuring it is not a duplicate for a partner.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ShippingProfilesV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateShippingProfileRequestShippingProfilesV1(); // \Swagger\Client\Model\CreateShippingProfileRequestShippingProfilesV1 | create shipping profile
$authorization = "authorization_example"; // string | Access Token

try {
    $result = $apiInstance->shippingProfilesV1CreateShippingProfile($body, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingProfilesV1Api->shippingProfilesV1CreateShippingProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateShippingProfileRequestShippingProfilesV1**](../Model/CreateShippingProfileRequestShippingProfilesV1.md)| create shipping profile |
 **authorization** | **string**| Access Token |

### Return type

[**\Swagger\Client\Model\CreateShippingProfileResponseShippingProfilesV1**](../Model/CreateShippingProfileResponseShippingProfilesV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shippingProfilesV1DeleteShippingProfile**
> shippingProfilesV1DeleteShippingProfile($authorization, $shipping_profile_id)

Delete shipping profile

This DELETE API endpoint is to delete a shipping profile by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ShippingProfilesV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Access Token
$shipping_profile_id = "shipping_profile_id_example"; // string | The id of the shipping profile in uuid4 format and the primaryKey for mapping a Profile to a SKU

try {
    $apiInstance->shippingProfilesV1DeleteShippingProfile($authorization, $shipping_profile_id);
} catch (Exception $e) {
    echo 'Exception when calling ShippingProfilesV1Api->shippingProfilesV1DeleteShippingProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Access Token |
 **shipping_profile_id** | **string**| The id of the shipping profile in uuid4 format and the primaryKey for mapping a Profile to a SKU |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shippingProfilesV1GetShippingProfileById**
> \Swagger\Client\Model\GetShippingProfileResponseShippingProfilesV1 shippingProfilesV1GetShippingProfileById($authorization, $shipping_profile_id)

Get shipping profile by shipping profile id

This GET API endpoint is to get a shipping profile of the partner by shipping profile id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ShippingProfilesV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Access Token
$shipping_profile_id = "shipping_profile_id_example"; // string | The id of the shipping profile in uuid4 format and the primaryKey for mapping a Profile to a SKU

try {
    $result = $apiInstance->shippingProfilesV1GetShippingProfileById($authorization, $shipping_profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingProfilesV1Api->shippingProfilesV1GetShippingProfileById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Access Token |
 **shipping_profile_id** | **string**| The id of the shipping profile in uuid4 format and the primaryKey for mapping a Profile to a SKU |

### Return type

[**\Swagger\Client\Model\GetShippingProfileResponseShippingProfilesV1**](../Model/GetShippingProfileResponseShippingProfilesV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shippingProfilesV1GetShippingProfiles**
> \Swagger\Client\Model\GetAllShippingProfilesResponseShippingProfilesV1 shippingProfilesV1GetShippingProfiles($authorization, $cursor)

Get all shipping profiles from a partner

This GET API endpoint is to get all shipping profiles for a partner. Response is by default paginated with default page size of 300.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ShippingProfilesV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Access Token
$cursor = "cursor_example"; // string | Page number to fetch. This parameter is required to fetch data for specific page number

try {
    $result = $apiInstance->shippingProfilesV1GetShippingProfiles($authorization, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingProfilesV1Api->shippingProfilesV1GetShippingProfiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Access Token |
 **cursor** | **string**| Page number to fetch. This parameter is required to fetch data for specific page number | [optional]

### Return type

[**\Swagger\Client\Model\GetAllShippingProfilesResponseShippingProfilesV1**](../Model/GetAllShippingProfilesResponseShippingProfilesV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shippingProfilesV1UpdateShippingProfile**
> shippingProfilesV1UpdateShippingProfile($body, $authorization, $shipping_profile_id)

Update shipping profile

This PUT API endpoint is to update a shipping profile PUT will always take an shipping profile and update it.  deliveryType field cannot be updated

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new cbdesk\otto\Client\Api\ShippingProfilesV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateShippingProfileRequestShippingProfilesV1(); // \Swagger\Client\Model\CreateShippingProfileRequestShippingProfilesV1 | shipping profile request
$authorization = "authorization_example"; // string | Access Token
$shipping_profile_id = "shipping_profile_id_example"; // string | The id of the shipping profile in uuid4 format and the primaryKey for mapping a Profile to a SKU

try {
    $apiInstance->shippingProfilesV1UpdateShippingProfile($body, $authorization, $shipping_profile_id);
} catch (Exception $e) {
    echo 'Exception when calling ShippingProfilesV1Api->shippingProfilesV1UpdateShippingProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateShippingProfileRequestShippingProfilesV1**](../Model/CreateShippingProfileRequestShippingProfilesV1.md)| shipping profile request |
 **authorization** | **string**| Access Token |
 **shipping_profile_id** | **string**| The id of the shipping profile in uuid4 format and the primaryKey for mapping a Profile to a SKU |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

