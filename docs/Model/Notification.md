# # Notification

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**notification_id** | **int** | The unique notification identifier. | [optional]
**notification_group_code** | **string** | The notification group to which this notification belongs. | [optional]
**recipients** | [**\EC\CNS\Client\Model\Recipient[]**](Recipient.md) | List of recipients. At least one recipient is expected. Maximum supported number of recipients of any kind is 100. | [optional]
**default_content** | [**\EC\CNS\Client\Model\ContentTranslation**](ContentTranslation.md) |  | [optional]
**alternative_content_translations** | [**\EC\CNS\Client\Model\ContentTranslation[]**](ContentTranslation.md) | Optionally, the content translated in other languages. | [optional]
**task_deadline** | **\DateTime** | Optional task deadline (applies only to notifications of type task). | [optional]
**planned_date** | **\DateTime** | Optional planned date of delivery. | [optional]
**external_reference** | **string** | Optional value that uniquely identifies the notification in the client system. | [optional]
**business_specific_metadata** | [**\EC\CNS\Client\Model\BusinessSpecificMetadata**](BusinessSpecificMetadata.md) |  | [optional]
**important** | **bool** | Optional flag to set send email as important to indicate that email needs the recipient attention quickly. | [optional]
**read** | **bool** | Flag to indicate if notification was read. | [optional]
**status** | **string** | Status of the notification. List of supported statuses: DAILY_DIGEST, INCLUDED_IN_DAILY_DIGEST, READY_FOR_DELIVERY, ACCEPTED_FOR_DELIVERY, PROCESSING_ERROR, PLANNED, CANCELED, DISCARDED. | [optional]
**submission_date** | **\DateTime** | Date and time when the notification was submitted. | [optional]
**last_modification_date** | **\DateTime** | Date and time when the notification was last modified (e.g. its status was updated). | [optional]
**client_system_id** | **int** | The unique client system identifier. | [optional]
**client_system_name** | **string** | The client system name. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
