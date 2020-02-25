# TransactionStatus

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** |  | [optional] 
**invoice** | **string** |  | [optional] 
**service_code** | **string** |  | [optional] 
**status** | [**\P4NL_DATABASE_INTERFACE\Model\Status**](Status.md) |  | [optional] 
**is_test** | **bool** |  | [optional] 
**order** | **string** |  | [optional] 
**currency** | **string** |  | [optional] 
**amount_debit** | **double** |  | [optional] 
**amount_credit** | **double** |  | [optional] 
**transaction_type** | **string** |  | [optional] 
**services** | [**\P4NL_DATABASE_INTERFACE\Model\Service[]**](Service.md) |  | [optional] 
**custom_parameters** | [**\P4NL_DATABASE_INTERFACE\Model\CustomParameter[]**](CustomParameter.md) |  | [optional] 
**additional_parameters** | [**\P4NL_DATABASE_INTERFACE\Model\TransactionStatusResponseAdditionalParameter**](TransactionStatusResponseAdditionalParameter.md) |  | [optional] 
**mutation_type** | **int** |  | [optional] 
**related_transactions** | [**\P4NL_DATABASE_INTERFACE\Model\RelatedTransaction[]**](RelatedTransaction.md) |  | [optional] 
**is_cancelable** | **bool** |  | [optional] 
**issuing_country** | **string** |  | [optional] 
**start_recurrent** | **bool** |  | [optional] 
**recurring** | **bool** |  | [optional] 
**customer_name** | **string** |  | [optional] 
**payer_hash** | **string** |  | [optional] 
**payment_key** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


