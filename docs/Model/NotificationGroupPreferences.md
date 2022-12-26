# # NotificationGroupPreferences

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**notification_group_code** | **string** | Uniquely identifies a notification group. | [optional]
**subscribed** | **bool** | If set to true, the user receives notifications. If set to false, the user does not receive notifications. | [optional]
**subscription_type** | **string** | Subscription type of the selected notification group can be one of the following INSTANT - notifications are sent immediately, DAILY_DIGEST - notifications are added to a daily notification and NO_EMAIL - no email will be sent | [optional]
**custom_metadata** | [**\EC\CNS\Client\Model\CustomMetadata[]**](CustomMetadata.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
