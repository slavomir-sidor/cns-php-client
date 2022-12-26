# OpenAPIClient-php

Version v1.2.0 of Corporate Notification System (CNS) REST API.



## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to */cns/services/rest*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ClientSystemsApi* | [**addWhiteList**](docs/Api/ClientSystemsApi.md#addwhitelist) | **POST** /v1/clientSystems/whiteList/add | 
*ClientSystemsApi* | [**removeWhiteList**](docs/Api/ClientSystemsApi.md#removewhitelist) | **POST** /v1/clientSystems/whiteList/remove | 
*ClientSystemsApi* | [**v1ClientSystemsDetailsGet**](docs/Api/ClientSystemsApi.md#v1clientsystemsdetailsget) | **GET** /v1/clientSystems/details | 
*ClientSystemsApi* | [**v1ClientSystemsGet**](docs/Api/ClientSystemsApi.md#v1clientsystemsget) | **GET** /v1/clientSystems | 
*ClientSystemsApi* | [**v1ClientSystemsIdGet**](docs/Api/ClientSystemsApi.md#v1clientsystemsidget) | **GET** /v1/clientSystems/{id} | 
*ClientSystemsApi* | [**v1ClientSystemsWhiteListGet**](docs/Api/ClientSystemsApi.md#v1clientsystemswhitelistget) | **GET** /v1/clientSystems/whiteList | 
*NotificationsApi* | [**v1NotificationsBulkPost**](docs/Api/NotificationsApi.md#v1notificationsbulkpost) | **POST** /v1/notifications/bulk | 
*NotificationsApi* | [**v1NotificationsBulkStatusReferenceIdGet**](docs/Api/NotificationsApi.md#v1notificationsbulkstatusreferenceidget) | **GET** /v1/notifications/bulk/status/{referenceId} | 
*NotificationsApi* | [**v1NotificationsGet**](docs/Api/NotificationsApi.md#v1notificationsget) | **GET** /v1/notifications | 
*NotificationsApi* | [**v1NotificationsIdGet**](docs/Api/NotificationsApi.md#v1notificationsidget) | **GET** /v1/notifications/{id} | 
*NotificationsApi* | [**v1NotificationsIdPost**](docs/Api/NotificationsApi.md#v1notificationsidpost) | **POST** /v1/notifications/{id} | 
*NotificationsApi* | [**v1NotificationsPost**](docs/Api/NotificationsApi.md#v1notificationspost) | **POST** /v1/notifications | 
*UserPreferencesApi* | [**getUserPreferences**](docs/Api/UserPreferencesApi.md#getuserpreferences) | **GET** /v1/users/{email} | 
*UserPreferencesApi* | [**savePreferences**](docs/Api/UserPreferencesApi.md#savepreferences) | **POST** /v1/users/{email} | 

## Models

- [AllowedValue](docs/Model/AllowedValue.md)
- [Attachment](docs/Model/Attachment.md)
- [BulkNotificationDetail](docs/Model/BulkNotificationDetail.md)
- [BulkNotificationRequest](docs/Model/BulkNotificationRequest.md)
- [BulkNotificationStatus](docs/Model/BulkNotificationStatus.md)
- [BulkRecipient](docs/Model/BulkRecipient.md)
- [BusinessSpecificMetadata](docs/Model/BusinessSpecificMetadata.md)
- [ClientSystem](docs/Model/ClientSystem.md)
- [ClientSystemSearchResult](docs/Model/ClientSystemSearchResult.md)
- [ClientSystemWithDetails](docs/Model/ClientSystemWithDetails.md)
- [ContentTranslation](docs/Model/ContentTranslation.md)
- [CustomMetadata](docs/Model/CustomMetadata.md)
- [CustomMetadataDefinition](docs/Model/CustomMetadataDefinition.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [ExtraUserDetails](docs/Model/ExtraUserDetails.md)
- [Link](docs/Model/Link.md)
- [Notification](docs/Model/Notification.md)
- [NotificationGroupPreferences](docs/Model/NotificationGroupPreferences.md)
- [NotificationGroups](docs/Model/NotificationGroups.md)
- [NotificationId](docs/Model/NotificationId.md)
- [NotificationSearchResult](docs/Model/NotificationSearchResult.md)
- [Recipient](docs/Model/Recipient.md)
- [SuccessfulResult](docs/Model/SuccessfulResult.md)
- [UserPreferences](docs/Model/UserPreferences.md)
- [WhiteListRequest](docs/Model/WhiteListRequest.md)
- [WhiteListResponse](docs/Model/WhiteListResponse.md)

## Authorization
All endpoints do not require authorization.
## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

DIGIT-CNS-SUPPORT@ec.europa.eu

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1.2.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
