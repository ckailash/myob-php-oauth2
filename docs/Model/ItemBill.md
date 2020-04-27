# # ItemBill

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uid** | **string** |  | [optional] 
**number** | **string** |  | [optional] 
**date** | **string** |  | [optional] 
**supplier_invoice_number** | **string** |  | [optional] 
**supplier** | [**\MyobAPI\MyobPHP\Model\Supplier**](Supplier.md) |  | [optional] 
**ship_to_address** | **string** |  | [optional] 
**terms** | [**\MyobAPI\MyobPHP\Model\ItemBillTerms**](ItemBillTerms.md) |  | [optional] 
**is_tax_inclusive** | **bool** |  | [optional] 
**is_reportable** | **bool** |  | [optional] 
**lines** | [**\MyobAPI\MyobPHP\Model\ItemBillLine[]**](ItemBillLine.md) |  | [optional] 
**subtotal** | **float** |  | [optional] 
**subtotal_foreign** | **float** |  | [optional] 
**freight** | **float** |  | [optional] 
**freight_tax_code** | [**\MyobAPI\MyobPHP\Model\FreightTaxCode**](FreightTaxCode.md) |  | [optional] 
**total_tax** | **float** |  | [optional] 
**total_tax_foreign** | **float** |  | [optional] 
**total_amount** | **float** |  | [optional] 
**total_amount_foreign** | **float** |  | [optional] 
**category** | [**\MyobAPI\MyobPHP\Model\ItemBillCategory**](ItemBillCategory.md) |  | [optional] 
**comment** | **string** |  | [optional] 
**shipping_method** | **string** |  | [optional] 
**promised_date** | **string** |  | [optional] 
**journal_memo** | **string** |  | [optional] 
**bill_delivery_status** | **string** |  | [optional] 
**applied_to_date** | **float** |  | [optional] 
**applied_to_date_foreign** | **float** |  | [optional] 
**balance_due_amount** | **float** |  | [optional] 
**balance_due_amount_foreign** | **float** |  | [optional] 
**status** | **string** |  | [optional] 
**last_payment_date** | **string** |  | [optional] 
**order** | [**\MyobAPI\MyobPHP\Model\ItemBillOrder**](ItemBillOrder.md) |  | [optional] 
**foreign_currency** | [**\MyobAPI\MyobPHP\Model\ForeignCurrency**](ForeignCurrency.md) |  | [optional] 
**currency_exchange_rate** | **float** |  | [optional] 
**uri** | **string** |  | [optional] 
**row_version** | **string** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


