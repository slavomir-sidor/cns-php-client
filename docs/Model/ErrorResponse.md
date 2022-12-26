# # ErrorResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Server side generated UUOD id used to track raised exceptional cases. | [optional]
**code** | **string** | Category of the exception in a long list of supported values (containing TECHNICAL_ERROR, UNAUTHORIZED, INVALID_PARAMETERS etc.) Category expresses general information about the nature of the error. | [optional]
**message** | **string** | User friendly message providing useful information about the cause of the error. | [optional]
**target** | **string** | Target affected by exception | [optional]
**details** | **string[]** | List of details providing additional information about the nature of the error. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
