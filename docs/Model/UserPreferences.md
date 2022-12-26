# # UserPreferences

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email_address** | **string** | Email SMTP  address of the client for whom the preferences are set. Uniquely identifies the user in the system. | [optional]
**preferred_language** | **string** | The preferred language for receiving notifications (EN, FR, DE). When receiving a notification, if the content is available in the preferred language, then that language is used. If the content is not available in the preferred language, then the default language is used. | [optional]
**extra_user_details** | [**\EC\CNS\Client\Model\ExtraUserDetails**](ExtraUserDetails.md) |  | [optional]
**details** | [**\EC\CNS\Client\Model\NotificationGroupPreferences[]**](NotificationGroupPreferences.md) | The user&#39;s preferences for each notification group, if requested. These notification groups can be configured by the user through the CNS UI. If the user doesn&#39;t configure preferences, then the defaults will be returned. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
