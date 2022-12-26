# # BulkNotificationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**notification_group_code** | **string** | The notification group to which this notification belongs. The notification group decides certain characteristics of the notification   (if it&#39;s compulsory or not, if it can be part of the daily digest or not, it&#39;s type, etc.). |
**recipients** | [**\EC\CNS\Client\Model\BulkRecipient[]**](BulkRecipient.md) | List of bulk recipients. At least one recipient is expected and no more than 100; |
**default_content** | [**\EC\CNS\Client\Model\ContentTranslation**](ContentTranslation.md) |  |
**alternative_content_translations** | [**\EC\CNS\Client\Model\ContentTranslation[]**](ContentTranslation.md) | Optionally, the content translated in other languages. | [optional]
**task_deadline** | **\DateTime** | Optional task deadline (applies only to notifications of type task). | [optional]
**planned_date** | **\DateTime** | Optional planned date of delivery. | [optional]
**external_reference** | **string** | Optional value that uniquely identifies the notification in the client system. | [optional]
**business_specific_metadata** | [**\EC\CNS\Client\Model\BusinessSpecificMetadata**](BusinessSpecificMetadata.md) |  | [optional]
**important** | **bool** | Optional flag to set send email as important to indicate that email needs the recipient attention quickly. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
