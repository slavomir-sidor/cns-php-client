# EC\CNS\Client\ClientSystemsApi

All URIs are relative to /cns/services/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addWhiteList()**](ClientSystemsApi.md#addWhiteList) | **POST** /v1/clientSystems/whiteList/add |  |
| [**removeWhiteList()**](ClientSystemsApi.md#removeWhiteList) | **POST** /v1/clientSystems/whiteList/remove |  |
| [**v1ClientSystemsDetailsGet()**](ClientSystemsApi.md#v1ClientSystemsDetailsGet) | **GET** /v1/clientSystems/details |  |
| [**v1ClientSystemsGet()**](ClientSystemsApi.md#v1ClientSystemsGet) | **GET** /v1/clientSystems |  |
| [**v1ClientSystemsIdGet()**](ClientSystemsApi.md#v1ClientSystemsIdGet) | **GET** /v1/clientSystems/{id} |  |
| [**v1ClientSystemsWhiteListGet()**](ClientSystemsApi.md#v1ClientSystemsWhiteListGet) | **GET** /v1/clientSystems/whiteList |  |


## `addWhiteList()`

```php
addWhiteList($client_system_key, $client_system_password, $white_list_request): \EC\CNS\Client\Model\SuccessfulResult
```



Add smtp addresses to the Client system's white list. Available only in ACCEPTANCE environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new EC\CNS\Client\Api\ClientSystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_system_key = 'client_system_key_example'; // string | The unique client system key identifier.
$client_system_password = 'client_system_password_example'; // string | Client System Password.
$white_list_request = new \EC\CNS\Client\Model\WhiteListRequest(); // \EC\CNS\Client\Model\WhiteListRequest | Smtp addresses list for a Client System.

try {
    $result = $apiInstance->addWhiteList($client_system_key, $client_system_password, $white_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientSystemsApi->addWhiteList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_system_key** | **string**| The unique client system key identifier. | |
| **client_system_password** | **string**| Client System Password. | |
| **white_list_request** | [**\EC\CNS\Client\Model\WhiteListRequest**](../Model/WhiteListRequest.md)| Smtp addresses list for a Client System. | |

### Return type

[**\EC\CNS\Client\Model\SuccessfulResult**](../Model/SuccessfulResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeWhiteList()`

```php
removeWhiteList($client_system_key, $client_system_password, $white_list_request): \EC\CNS\Client\Model\SuccessfulResult
```



Remove smtp addresses from the Client system's white list. Available only in ACCEPTANCE environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new EC\CNS\Client\Api\ClientSystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_system_key = 'client_system_key_example'; // string | The unique client system key identifier.
$client_system_password = 'client_system_password_example'; // string | Client System Password.
$white_list_request = new \EC\CNS\Client\Model\WhiteListRequest(); // \EC\CNS\Client\Model\WhiteListRequest | Smtp addresses list for a Client System.

try {
    $result = $apiInstance->removeWhiteList($client_system_key, $client_system_password, $white_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientSystemsApi->removeWhiteList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_system_key** | **string**| The unique client system key identifier. | |
| **client_system_password** | **string**| Client System Password. | |
| **white_list_request** | [**\EC\CNS\Client\Model\WhiteListRequest**](../Model/WhiteListRequest.md)| Smtp addresses list for a Client System. | |

### Return type

[**\EC\CNS\Client\Model\SuccessfulResult**](../Model/SuccessfulResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ClientSystemsDetailsGet()`

```php
v1ClientSystemsDetailsGet($client_system_key, $client_system_password): \EC\CNS\Client\Model\ClientSystemWithDetails
```



Gets the ClientSystem details with notificationGroups.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new EC\CNS\Client\Api\ClientSystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_system_key = 'client_system_key_example'; // string | The unique client system key identifier.
$client_system_password = 'client_system_password_example'; // string | Client System Password.

try {
    $result = $apiInstance->v1ClientSystemsDetailsGet($client_system_key, $client_system_password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientSystemsApi->v1ClientSystemsDetailsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_system_key** | **string**| The unique client system key identifier. | |
| **client_system_password** | **string**| Client System Password. | |

### Return type

[**\EC\CNS\Client\Model\ClientSystemWithDetails**](../Model/ClientSystemWithDetails.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ClientSystemsGet()`

```php
v1ClientSystemsGet($client_system_key, $client_system_password): \EC\CNS\Client\Model\ClientSystemSearchResult
```



Gets the list of all ClientSystems.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new EC\CNS\Client\Api\ClientSystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_system_key = 'client_system_key_example'; // string | The unique client system key identifier.
$client_system_password = 'client_system_password_example'; // string | Client System Password.

try {
    $result = $apiInstance->v1ClientSystemsGet($client_system_key, $client_system_password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientSystemsApi->v1ClientSystemsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_system_key** | **string**| The unique client system key identifier. | |
| **client_system_password** | **string**| Client System Password. | |

### Return type

[**\EC\CNS\Client\Model\ClientSystemSearchResult**](../Model/ClientSystemSearchResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ClientSystemsIdGet()`

```php
v1ClientSystemsIdGet($id, $client_system_key, $client_system_password): \EC\CNS\Client\Model\ClientSystem
```



Gets the ClientSystem object by `clientSystemId`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new EC\CNS\Client\Api\ClientSystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | The unique identifier of the ClientSystem desired.
$client_system_key = 'client_system_key_example'; // string | The unique client system key identifier.
$client_system_password = 'client_system_password_example'; // string | Client System Password.

try {
    $result = $apiInstance->v1ClientSystemsIdGet($id, $client_system_key, $client_system_password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientSystemsApi->v1ClientSystemsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the ClientSystem desired. | |
| **client_system_key** | **string**| The unique client system key identifier. | |
| **client_system_password** | **string**| Client System Password. | |

### Return type

[**\EC\CNS\Client\Model\ClientSystem**](../Model/ClientSystem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ClientSystemsWhiteListGet()`

```php
v1ClientSystemsWhiteListGet($client_system_key, $client_system_password): \EC\CNS\Client\Model\WhiteListResponse
```



Get the client system white list. Available only in ACCEPTANCE environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new EC\CNS\Client\Api\ClientSystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_system_key = 'client_system_key_example'; // string | The unique client system key identifier.
$client_system_password = 'client_system_password_example'; // string | Client System Password.

try {
    $result = $apiInstance->v1ClientSystemsWhiteListGet($client_system_key, $client_system_password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientSystemsApi->v1ClientSystemsWhiteListGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_system_key** | **string**| The unique client system key identifier. | |
| **client_system_password** | **string**| Client System Password. | |

### Return type

[**\EC\CNS\Client\Model\WhiteListResponse**](../Model/WhiteListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
