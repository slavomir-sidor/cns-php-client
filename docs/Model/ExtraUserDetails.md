# # ExtraUserDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uid** | **string** | The user&#39;s unique ID, also known as the name or username. It may be distinct from the domainUsername which is the username internal to the domain. The uid is guaranteed to be unique amongst all users and all domains. | [optional]
**domain_user_name** | **string** | The domain username. It is the name of the user in his/her specific domain. For instance, inter-institutional users keep the username they have in their institution. Self-registered users can choose their username when they register. This concept is also called the \&quot;moniker\&quot; in some documentations. The domain username can be different from the uid (user id). The domain username is only unique per domain whereas the uid is unique for the whole Commission. | [optional]
**domain** | **string** | Returns the domain. Domains constitutes population of users such as internal users, inter-institutional users or self-registered users (as ec.europa.eu). See the ECAS documentation (eu.cec.digit.ecas.client.constants.Domain) for a complete list of possible values. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
