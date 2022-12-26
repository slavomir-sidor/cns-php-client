# # ContentTranslation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**subject** | **string** | The notification&#39;s subject. | [optional]
**summary** | **string** | A summary of the notification. | [optional]
**body** | **string** | The text of the notification. | [optional]
**language** | **string** | The language of the content. Can be one of EN, FR or DE. | [optional]
**links** | [**\EC\CNS\Client\Model\Link[]**](Link.md) | Optional list of URLs. | [optional]
**category_label** | **string** | Optional category for a notification (free text). | [optional]
**attachments** | [**\EC\CNS\Client\Model\Attachment[]**](Attachment.md) | Optional list of attachments. Total length of all attachments is limited to 30MB. If maximum value is excedeed, an error is reported. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
