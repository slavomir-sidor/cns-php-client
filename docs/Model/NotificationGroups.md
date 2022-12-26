# # NotificationGroups

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**notification_group_code** | **string** |  | [optional]
**notification_group_name** | **string** | Its a user friendly name. This name is also shown on CNS preferences page when selecting any client system. | [optional]
**default_subscribed** | **bool** | A flag that indicates if any user is subscribed by default to this notification group. | [optional]
**allow_user_unsubscribed** | **bool** | If checked then user can unsubscribe from this notification group on CNS preferences page. | [optional]
**support_attachments** | **bool** | If checked this notification group will allow attachments to be included with notification and sent via email. | [optional]
**support_multiple_recipients** | **bool** | If checked this notification group will allow more users to be added to a notification. Otherwise client system must submit notification for each user separatelly. | [optional]
**support_daily_digest** | **bool** | This will allow for user to select between receiving notifications once per day as daily digest or as separate notifications. User will always receive daily digest with all notifications together in one email from the notification groups set as daily digest. | [optional]
**support_translations** | **bool** | If checked this notification group will allow more then one content (each content is added for different language). When notification is sent to the user then content is selected that matches the user&#39;s selected language (set on CNS preferences page). | [optional]
**notification_type** | **string** | The type of the notifications is - MESSAGE (plain message) - TASK (planned, with deadline) - REPORT | [optional]
**subscription_type** | **string** | Defines the subscription type which can be either INSTANT or DAILY DIGEST. This is the initial setup and user can change this on CNS preferences page. | [optional]
**custom_metadata** | [**\EC\CNS\Client\Model\CustomMetadataDefinition[]**](CustomMetadataDefinition.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
