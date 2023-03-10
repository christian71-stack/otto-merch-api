# Swagger\Client\DeveloperV1Api

All URIs are relative to *https://api.otto.market*

Method | HTTP request | Description
------------- | ------------- | -------------
[**developerV1CreateAccessToken**](DeveloperV1Api.md#developerv1createaccesstoken) | **POST** /v1/token | Obtain access token from client ID &amp; client Secret
[**developerV1CreateInstallationAccessToken**](DeveloperV1Api.md#developerv1createinstallationaccesstoken) | **POST** /v1/apps/{appId}/installations/{installationId}/accessToken | Obtain installation access token
[**developerV1GetInstallation**](DeveloperV1Api.md#developerv1getinstallation) | **GET** /v1/apps/{appId}/installation | Get installation for a service provider app

# **developerV1CreateAccessToken**
> \Swagger\Client\Model\ClientCredentialResponseDeveloperV1 developerV1CreateAccessToken($client_id, $client_secret, $grant_type, $scope)

Obtain access token from client ID & client Secret

Generates an access token for the client_id and client_secret using client_credentials flow. This token is valid for 30 minutes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: onBehalfOfPartner
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DeveloperV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = "client_id_example"; // string | 
$client_secret = "client_secret_example"; // string | 
$grant_type = "grant_type_example"; // string | 
$scope = "scope_example"; // string | 

try {
    $result = $apiInstance->developerV1CreateAccessToken($client_id, $client_secret, $grant_type, $scope);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperV1Api->developerV1CreateAccessToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**|  | [optional]
 **client_secret** | **string**|  | [optional]
 **grant_type** | **string**|  | [optional]
 **scope** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ClientCredentialResponseDeveloperV1**](../Model/ClientCredentialResponseDeveloperV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth), [onBehalfOfPartner](../../README.md#onBehalfOfPartner)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **developerV1CreateInstallationAccessToken**
> \Swagger\Client\Model\AppInstallationAccessTokenResponseDeveloperV1 developerV1CreateInstallationAccessToken($app_id, $installation_id, $scope)

Obtain installation access token

Generates an installation access token for a specific partner's installation of a service provider app. This token is valid for 30 minutes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DeveloperV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | unique id used to identify service provider app
$installation_id = "installation_id_example"; // string | unique id used to identify installation of app by partner
$scope = "scope_example"; // string | 

try {
    $result = $apiInstance->developerV1CreateInstallationAccessToken($app_id, $installation_id, $scope);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperV1Api->developerV1CreateInstallationAccessToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| unique id used to identify service provider app |
 **installation_id** | **string**| unique id used to identify installation of app by partner |
 **scope** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\AppInstallationAccessTokenResponseDeveloperV1**](../Model/AppInstallationAccessTokenResponseDeveloperV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **developerV1GetInstallation**
> \Swagger\Client\Model\AppInstallationResponseDeveloperV1 developerV1GetInstallation($app_id)

Get installation for a service provider app

Gets the installation for a specific partner's installation of a service provider app.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: onBehalfOfPartner
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DeveloperV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | unique id used to identify service provider app

try {
    $result = $apiInstance->developerV1GetInstallation($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperV1Api->developerV1GetInstallation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| unique id used to identify service provider app |

### Return type

[**\Swagger\Client\Model\AppInstallationResponseDeveloperV1**](../Model/AppInstallationResponseDeveloperV1.md)

### Authorization

[onBehalfOfPartner](../../README.md#onBehalfOfPartner)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

