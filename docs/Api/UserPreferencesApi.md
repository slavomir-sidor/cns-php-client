# EC\CNS\Client\UserPreferencesApi

All URIs are relative to /cns/services/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getUserPreferences()**](UserPreferencesApi.md#getUserPreferences) | **GET** /v1/users/{email} |  |
| [**savePreferences()**](UserPreferencesApi.md#savePreferences) | **POST** /v1/users/{email} |  |


## `getUserPreferences()`

```php
getUserPreferences($client_system_key, $client_system_password, $email): \EC\CNS\Client\Model\UserPreferences
```



Gets the list of User Preferences for a user identified by email and the client system identified by clientSystemKey ant matching clientSystemPassword. If no specific preferences are registered for user identified by email, defaults are returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new EC\CNS\Client\Api\UserPreferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_system_key = 'client_system_key_example'; // string | The unique client system key identifier.
$client_system_password = 'client_system_password_example'; // string | Client System Password.
$email = 'email_example'; // string | User Email.

try {
    $result = $apiInstance->getUserPreferences($client_system_key, $client_system_password, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserPreferencesApi->getUserPreferences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_system_key** | **string**| The unique client system key identifier. | |
| **client_system_password** | **string**| Client System Password. | |
| **email** | **string**| User Email. | |

### Return type

[**\EC\CNS\Client\Model\UserPreferences**](../Model/UserPreferences.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `savePreferences()`

```php
savePreferences($client_system_key, $client_system_password, $email, $notification_group_preferences, $authorization, $ecas_ticket, $ecas_environment): \EC\CNS\Client\Model\SuccessfulResult
```



Updates the list of notification groups. The updated list of notification group preferences for client system with given key and matching password should be provided in request body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new EC\CNS\Client\Api\UserPreferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_system_key = 'client_system_key_example'; // string | The unique client system key identifier.
$client_system_password = 'client_system_password_example'; // string | Client System Password.
$email = 'email_example'; // string | User Email.
$notification_group_preferences = array(new \EC\CNS\Client\Model\NotificationGroupPreferences()); // \EC\CNS\Client\Model\NotificationGroupPreferences[] | Submitted groups.
$authorization = 'authorization_example'; // string | EuLogin OpenId Acces token sent as \"Bearer AT...\" . Mandatory if ecasTicket is not present.
$ecas_ticket = 'ecas_ticket_example'; // string | ECAS Ticket. Mandatory if header accessToken is not present.
$ecas_environment = 'ecas_environment_example'; // string | On which ECAS will be ticket validated (accepted values are ACC or PROD).

try {
    $result = $apiInstance->savePreferences($client_system_key, $client_system_password, $email, $notification_group_preferences, $authorization, $ecas_ticket, $ecas_environment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserPreferencesApi->savePreferences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_system_key** | **string**| The unique client system key identifier. | |
| **client_system_password** | **string**| Client System Password. | |
| **email** | **string**| User Email. | |
| **notification_group_preferences** | [**\EC\CNS\Client\Model\NotificationGroupPreferences[]**](../Model/NotificationGroupPreferences.md)| Submitted groups. | |
| **authorization** | **string**| EuLogin OpenId Acces token sent as \&quot;Bearer AT...\&quot; . Mandatory if ecasTicket is not present. | [optional] |
| **ecas_ticket** | **string**| ECAS Ticket. Mandatory if header accessToken is not present. | [optional] |
| **ecas_environment** | **string**| On which ECAS will be ticket validated (accepted values are ACC or PROD). | [optional] |

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
