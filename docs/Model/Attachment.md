# # Attachment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attachment_id** | **int** | The unique attachment identifier. Ignored when submitting a notification, present when retrieving a notification. | [optional]
**name** | **string** | Attachment file name | [optional]
**length** | **int** | The attachment&#39;s size. Currently, the maximum allowed size is 10MB. | [optional]
**mime_type** | **string** | The content&#39;s mime type, such as application/pdf. | [optional]
**inline** | **bool** | Whether the attachment is inline (e.g. inline image) or not. | [optional]
**content** | **string** | The attachment&#39;s content. Used when submitting a string attachment (it will not be included when retrieving notifications). This field is deprecated and the contentBase64 should be used instead (by encoding any provided data in Base64). | [optional]
**content_base64** | **string** | The attachment&#39;s content encoded as base64 (for a non-text content). It&#39;s mandatory when submitting a binary attachment (it will not be included when retrieving notifications). To add string to the attachment use: contentBase64 &#x3D; base64.encode(original_string). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
