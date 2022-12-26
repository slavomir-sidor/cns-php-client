# EC\CNS\Client\NotificationsApi

All URIs are relative to /cns/services/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1NotificationsBulkPost()**](NotificationsApi.md#v1NotificationsBulkPost) | **POST** /v1/notifications/bulk |  |
| [**v1NotificationsBulkStatusReferenceIdGet()**](NotificationsApi.md#v1NotificationsBulkStatusReferenceIdGet) | **GET** /v1/notifications/bulk/status/{referenceId} |  |
| [**v1NotificationsGet()**](NotificationsApi.md#v1NotificationsGet) | **GET** /v1/notifications |  |
| [**v1NotificationsIdGet()**](NotificationsApi.md#v1NotificationsIdGet) | **GET** /v1/notifications/{id} |  |
| [**v1NotificationsIdPost()**](NotificationsApi.md#v1NotificationsIdPost) | **POST** /v1/notifications/{id} |  |
| [**v1NotificationsPost()**](NotificationsApi.md#v1NotificationsPost) | **POST** /v1/notifications |  |


## `v1NotificationsBulkPost()`

```php
v1NotificationsBulkPost($client_system_key, $client_system_password, $notification): \EC\CNS\Client\Model\NotificationId
```



Submits 'Bulk Notification` object. Content of the bulk notification for client system identified by Key and matching Password will be provided in request body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new EC\CNS\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_system_key = 'client_system_key_example'; // string | The unique client system key identifier.
$client_system_password = 'client_system_password_example'; // string | Client System Password.
$notification = new \EC\CNS\Client\Model\BulkNotificationRequest(); // \EC\CNS\Client\Model\BulkNotificationRequest | Submitted notification.

try {
    $result = $apiInstance->v1NotificationsBulkPost($client_system_key, $client_system_password, $notification);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->v1NotificationsBulkPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_system_key** | **string**| The unique client system key identifier. | |
| **client_system_password** | **string**| Client System Password. | |
| **notification** | [**\EC\CNS\Client\Model\BulkNotificationRequest**](../Model/BulkNotificationRequest.md)| Submitted notification. | |

### Return type

[**\EC\CNS\Client\Model\NotificationId**](../Model/NotificationId.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1NotificationsBulkStatusReferenceIdGet()`

```php
v1NotificationsBulkStatusReferenceIdGet($reference_id, $client_system_key, $client_system_password, $include_details, $reference_type): \EC\CNS\Client\Model\BulkNotificationStatus
```



Retrieve the status for a bulk notification sent to CNS. If more details about child notifications are needed, than the \"includeDetails\" parameter should be set on true. In the event that CNS services are temporarily unavailable, the client application is responsible with catching the exception and taking an appropriate action (wait and retry, log error for manually recovery etc.).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new EC\CNS\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$reference_id = 'reference_id_example'; // string | Bulk reference id. Provide the notificationId if it is known (default enabled) Enable retrieval by \"externalReference\" with \"referenceType\" query param
$client_system_key = 'client_system_key_example'; // string | The unique client system key identifier.
$client_system_password = 'client_system_password_example'; // string | Client System Password.
$include_details = True; // bool | Optional. Provide \"true\" if bulk notification details are needed,like all linked notificationIds
$reference_type = 'reference_type_example'; // string | Optional Specify notification retrieval   - by notificationId - referenceType=\"NOTIFICATION_ID\"   - by externalReference - referenceType=\"EXTERNAL_REFERENCE\"

try {
    $result = $apiInstance->v1NotificationsBulkStatusReferenceIdGet($reference_id, $client_system_key, $client_system_password, $include_details, $reference_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->v1NotificationsBulkStatusReferenceIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reference_id** | **string**| Bulk reference id. Provide the notificationId if it is known (default enabled) Enable retrieval by \&quot;externalReference\&quot; with \&quot;referenceType\&quot; query param | |
| **client_system_key** | **string**| The unique client system key identifier. | |
| **client_system_password** | **string**| Client System Password. | |
| **include_details** | **bool**| Optional. Provide \&quot;true\&quot; if bulk notification details are needed,like all linked notificationIds | [optional] |
| **reference_type** | **string**| Optional Specify notification retrieval   - by notificationId - referenceType&#x3D;\&quot;NOTIFICATION_ID\&quot;   - by externalReference - referenceType&#x3D;\&quot;EXTERNAL_REFERENCE\&quot; | [optional] |

### Return type

[**\EC\CNS\Client\Model\BulkNotificationStatus**](../Model/BulkNotificationStatus.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1NotificationsGet()`

```php
v1NotificationsGet($client_system_key, $client_system_password, $authorization, $ecas_ticket, $ecas_environment, $expression, $include_bsm, $include_content_body, $skip, $max, $compute_total_results, $order_by, $order_type): \EC\CNS\Client\Model\NotificationSearchResult
```



Finds the `Notification` objects by expression.  The Queary Language (QL) documentation is available at http://www.cc.cec/wikis/pages/viewpage.action?pageId=32047253

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new EC\CNS\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_system_key = 'client_system_key_example'; // string | The unique client system key identifier.
$client_system_password = 'client_system_password_example'; // string | Client System Password.
$authorization = 'authorization_example'; // string | EuLogin OpenId Acces token sent as \"Bearer AT...\" . Mandatory if ecasTicket is not present.
$ecas_ticket = 'ecas_ticket_example'; // string | The authorization ticket provided from ECAS after authentication. Mandatory if header accessToken is not present.
$ecas_environment = 'ecas_environment_example'; // string | On which ECAS will be ticket validated (accepted values are ACC or PROD).
$expression = 'expression_example'; // string | The QL search expression. If not present or empty, search by email will be performed. A QL expression is a logical expression build from one or more conditions combined together with logical operators (AND, OR, NOT). A condition looks like NAME OPERATOR VALUE, where OPERATOR is one of <, >, >=, <=, =, !=, IS NULL, IS NOT NULL, CONTAINS, BETWEEN, IN, STARTSWITH and ENDSWITH. List of fields that can be ussed in search expression `:` notificationId `:` the notification id clientId `:` the notification client id submissionDate `:` the submission date of notification externalReference  `:` the external reference used when submitting the notification. Type String string1  `:` the business specific metadata string1. Type String string2  `:` the business specific metadata string2. Type String string3  `:` the business specific metadata string3. Type String string4  `:` the business specific metadata string4. Type String string5  `:` the business specific metadata string5. Type String date1    `:` the business specific metadata date1. Type Date date2    `:` the business specific metadata date2. Type Date date3    `:` the business specific metadata date3. Type Date date4    `:` the business specific metadata date4. Type Date date5    `:` the business specific metadata date5. Type Date num1     `:` the business specific metadata num1. Type Number num2     `:` the business specific metadata num2. Type Number num3     `:` the business specific metadata num3. Type Number num4     `:` the business specific metadata num4. Type Number num5     `:` the business specific metadata num5. Type Number boolean1 `:` the business specific metadata boolean1. Type Boolean boolean2 `:` the business specific metadata boolean2. Type Boolean boolean3 `:` the business specific metadata boolean3. Type Boolean boolean4 `:` the business specific metadata boolean4. Type Boolean boolean5 `:` the business specific metadata boolean5. Type Boolean
$include_bsm = True; // bool | Specifies that notification will additionally contain business specific metadata.
$include_content_body = True; // bool | Specifies that notification will contain email body.
$skip = 56; // int | Skip n-1 elements and start retrieving results from n (part of pagination). >- Only values >= 0 are permitted. If value is omited in will be set to 0.
$max = 56; // int | Maximum number of entries to be retrieved by the search. The supported maximum value is 1000 and trying to retrive more then 1000 notifications will result in error. Default value for size is 10.
$compute_total_results = 56; // int | Indicates if the total number of results should be computed and returned or not.
$order_by = 'order_by_example'; // string | Indicates on which field to order results. The same fields as in `expression` can be used, with the addition of a special field called 'score' used for ordering based on fulltext search score (when fulltext search is available).
$order_type = 'order_type_example'; // string | 'ASC' (Default), 'DESC'

try {
    $result = $apiInstance->v1NotificationsGet($client_system_key, $client_system_password, $authorization, $ecas_ticket, $ecas_environment, $expression, $include_bsm, $include_content_body, $skip, $max, $compute_total_results, $order_by, $order_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->v1NotificationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_system_key** | **string**| The unique client system key identifier. | |
| **client_system_password** | **string**| Client System Password. | |
| **authorization** | **string**| EuLogin OpenId Acces token sent as \&quot;Bearer AT...\&quot; . Mandatory if ecasTicket is not present. | [optional] |
| **ecas_ticket** | **string**| The authorization ticket provided from ECAS after authentication. Mandatory if header accessToken is not present. | [optional] |
| **ecas_environment** | **string**| On which ECAS will be ticket validated (accepted values are ACC or PROD). | [optional] |
| **expression** | **string**| The QL search expression. If not present or empty, search by email will be performed. A QL expression is a logical expression build from one or more conditions combined together with logical operators (AND, OR, NOT). A condition looks like NAME OPERATOR VALUE, where OPERATOR is one of &lt;, &gt;, &gt;&#x3D;, &lt;&#x3D;, &#x3D;, !&#x3D;, IS NULL, IS NOT NULL, CONTAINS, BETWEEN, IN, STARTSWITH and ENDSWITH. List of fields that can be ussed in search expression &#x60;:&#x60; notificationId &#x60;:&#x60; the notification id clientId &#x60;:&#x60; the notification client id submissionDate &#x60;:&#x60; the submission date of notification externalReference  &#x60;:&#x60; the external reference used when submitting the notification. Type String string1  &#x60;:&#x60; the business specific metadata string1. Type String string2  &#x60;:&#x60; the business specific metadata string2. Type String string3  &#x60;:&#x60; the business specific metadata string3. Type String string4  &#x60;:&#x60; the business specific metadata string4. Type String string5  &#x60;:&#x60; the business specific metadata string5. Type String date1    &#x60;:&#x60; the business specific metadata date1. Type Date date2    &#x60;:&#x60; the business specific metadata date2. Type Date date3    &#x60;:&#x60; the business specific metadata date3. Type Date date4    &#x60;:&#x60; the business specific metadata date4. Type Date date5    &#x60;:&#x60; the business specific metadata date5. Type Date num1     &#x60;:&#x60; the business specific metadata num1. Type Number num2     &#x60;:&#x60; the business specific metadata num2. Type Number num3     &#x60;:&#x60; the business specific metadata num3. Type Number num4     &#x60;:&#x60; the business specific metadata num4. Type Number num5     &#x60;:&#x60; the business specific metadata num5. Type Number boolean1 &#x60;:&#x60; the business specific metadata boolean1. Type Boolean boolean2 &#x60;:&#x60; the business specific metadata boolean2. Type Boolean boolean3 &#x60;:&#x60; the business specific metadata boolean3. Type Boolean boolean4 &#x60;:&#x60; the business specific metadata boolean4. Type Boolean boolean5 &#x60;:&#x60; the business specific metadata boolean5. Type Boolean | [optional] |
| **include_bsm** | **bool**| Specifies that notification will additionally contain business specific metadata. | [optional] |
| **include_content_body** | **bool**| Specifies that notification will contain email body. | [optional] |
| **skip** | **int**| Skip n-1 elements and start retrieving results from n (part of pagination). &gt;- Only values &gt;&#x3D; 0 are permitted. If value is omited in will be set to 0. | [optional] |
| **max** | **int**| Maximum number of entries to be retrieved by the search. The supported maximum value is 1000 and trying to retrive more then 1000 notifications will result in error. Default value for size is 10. | [optional] |
| **compute_total_results** | **int**| Indicates if the total number of results should be computed and returned or not. | [optional] |
| **order_by** | **string**| Indicates on which field to order results. The same fields as in &#x60;expression&#x60; can be used, with the addition of a special field called &#39;score&#39; used for ordering based on fulltext search score (when fulltext search is available). | [optional] |
| **order_type** | **string**| &#39;ASC&#39; (Default), &#39;DESC&#39; | [optional] |

### Return type

[**\EC\CNS\Client\Model\NotificationSearchResult**](../Model/NotificationSearchResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1NotificationsIdGet()`

```php
v1NotificationsIdGet($id, $client_system_key, $client_system_password): \EC\CNS\Client\Model\Notification
```



Gets the Notification object by `notificationId`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new EC\CNS\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | The unique identifier of the Notification desired.
$client_system_key = 'client_system_key_example'; // string | The unique client system key identifier.
$client_system_password = 'client_system_password_example'; // string | Client System Password.

try {
    $result = $apiInstance->v1NotificationsIdGet($id, $client_system_key, $client_system_password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->v1NotificationsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the Notification desired. | |
| **client_system_key** | **string**| The unique client system key identifier. | |
| **client_system_password** | **string**| Client System Password. | |

### Return type

[**\EC\CNS\Client\Model\Notification**](../Model/Notification.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1NotificationsIdPost()`

```php
v1NotificationsIdPost($id, $client_system_key, $client_system_password, $read, $authorization, $ecas_ticket, $ecas_environment): \EC\CNS\Client\Model\SuccessfulResult
```



Updates the Notification object by `notificationId`. Read flag provided in query will update read status of notification identified by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new EC\CNS\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | The unique identifier of the Notification desired.
$client_system_key = 'client_system_key_example'; // string | The unique client system key identifier.
$client_system_password = 'client_system_password_example'; // string | Client System Password.
$read = True; // bool | Set Read/Unread status.
$authorization = 'authorization_example'; // string | EuLogin OpenId Acces token sent as \"Bearer AT...\" . Mandatory if ecasTicket is not present.
$ecas_ticket = 'ecas_ticket_example'; // string | ECAS Ticket. Mandatory if header accessToken is not present.
$ecas_environment = 'ecas_environment_example'; // string | On which ECAS will be ticket validated (accepted values are ACC or PROD).

try {
    $result = $apiInstance->v1NotificationsIdPost($id, $client_system_key, $client_system_password, $read, $authorization, $ecas_ticket, $ecas_environment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->v1NotificationsIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique identifier of the Notification desired. | |
| **client_system_key** | **string**| The unique client system key identifier. | |
| **client_system_password** | **string**| Client System Password. | |
| **read** | **bool**| Set Read/Unread status. | |
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

## `v1NotificationsPost()`

```php
v1NotificationsPost($client_system_key, $client_system_password, $notification): \EC\CNS\Client\Model\NotificationId
```



Submits `Notification` object. Content of the notification for client system identified by Key and matching Password will be provided in request body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new EC\CNS\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_system_key = 'client_system_key_example'; // string | The unique client system key identifier.
$client_system_password = 'client_system_password_example'; // string | Client System Password.
$notification = new \EC\CNS\Client\Model\Notification(); // \EC\CNS\Client\Model\Notification | Submitted notification.

try {
    $result = $apiInstance->v1NotificationsPost($client_system_key, $client_system_password, $notification);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->v1NotificationsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_system_key** | **string**| The unique client system key identifier. | |
| **client_system_password** | **string**| Client System Password. | |
| **notification** | [**\EC\CNS\Client\Model\Notification**](../Model/Notification.md)| Submitted notification. | |

### Return type

[**\EC\CNS\Client\Model\NotificationId**](../Model/NotificationId.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
