# ReceiptReceiptsV3

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**receipt_type** | **string** | Categorisation that classifies the receipts according to the main characteristics | 
**is_real_receipt** | **bool** | Counterpart to the sentence \&quot;Dies ist kein Beleg/keine Rechnung im Sinne des Umsatzsteuergesetzes und berechtigt nicht zum Vorsteuerabzug.\&quot; on pdf document. Set to true since real customer invoices/refunds for shipments to locations in domestic tax territory are created. Set to false for technical receipts not visible to customer or on receipts with delivery addresses on Helgoland or in Büsingen | 
**receipt_number** | **string** | Human readable identifier of a receipt known by customer. Guaranteed to be unique per partner | 
**creation_date** | [**\DateTime**](\DateTime.md) | Date when receipt is created by system | 
**sales_order_id** | **string** | Technical identifier of corresponding sales order | 
**order_number** | **string** | Order number of corresponding sales order | 
**order_date** | [**\DateTime**](\DateTime.md) | Order date of corresponding sales order (UTC in ISO-8601 format) | 
**shipment_date** | [**\DateTime**](\DateTime.md) | Date when physical items of this receipt were handed over to the carrier to be delivered to the customer (UTC in ISO-8601 format). Only available on receipts of receiptType PURCHASE. | [optional] 
**linked_receipt_number** | **string** | Human-readable identifier of linked receipt. In case of receiptType PARTIAL_REFUND or REFUND it is the receiptINumber of purchase receipt.  ATTENTION: In previous version the information was called originalReceiptNumber | [optional] 
**linked_creation_date** | [**\DateTime**](\DateTime.md) | Creation date of linked receipt (UTC in ISO-8601 format). Only available if there is a linked receipt.  ATTENTION: In previous version the information was called originalCreatedDate | [optional] 
**payment** | [**\Swagger\Client\Model\PaymentReceiptsV3**](PaymentReceiptsV3.md) |  | 
**partner** | [**\Swagger\Client\Model\PartnerReceiptsV3**](PartnerReceiptsV3.md) |  | 
**customer** | [**\Swagger\Client\Model\CustomerReceiptsV3**](CustomerReceiptsV3.md) |  | 
**delivery_address** | [**\Swagger\Client\Model\AddressReceiptsV3**](AddressReceiptsV3.md) |  | [optional] 
**line_items** | [**\Swagger\Client\Model\LineItemsReceiptsV3**](LineItemsReceiptsV3.md) |  | 
**totals** | [**\Swagger\Client\Model\PriceReceiptsV3[]**](PriceReceiptsV3.md) | Total amounts of receipt per tax type and tax rate | 
**amount_due** | [**AllOfReceiptReceiptsV3AmountDue**](AllOfReceiptReceiptsV3AmountDue.md) | The amountDue documents the gross amount a customer still has to pay or will be refunded respectively owes less (the latter decision depends on the chosen payment method) with this receipt. As in case of receiptType PURCHASE and payment method PREPAYMENT we know for sure that the customer has already paid in advance, so the amount is 0 € otherwise the content is identically with totalsGrossAmount | 
**totals_gross_amount** | [**AllOfReceiptReceiptsV3TotalsGrossAmount**](AllOfReceiptReceiptsV3TotalsGrossAmount.md) | Gross amounts of totals summed up over all prices. Only available on receipts of receiptType PURCHASE | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

