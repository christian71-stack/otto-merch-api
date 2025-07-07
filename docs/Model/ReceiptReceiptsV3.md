# ReceiptReceiptsV3

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**receipt_type** | **string** | Categorisation that classifies the receipts according to the main characteristics  ATTENTION: In previous version the information was called type | 
**is_real_receipt** | **bool** | Counterpart to the sentence \&quot;Dies ist kein Beleg/keine Rechnung im Sinne des Umsatzsteuergesetzes und berechtigt nicht zum Vorsteuerabzug.\&quot; on pdf document.    * Set to **true** since real customer invoices/refunds for shipments to locations in domestic tax territory are created.    * Set to **false** for technical receipts not visible to customer or on receipts with delivery addresses on Helgoland or in Büsingen | 
**receipt_number** | **string** | Human readable identifier of a receipt known by customer. &lt;/br&gt; Guaranteed to be unique per partner | 
**creation_date** | [**\DateTime**](\DateTime.md) | Date when receipt is created by system (UTC in ISO-8601 format) | 
**fulfillment_date** | [**\DateTime**](\DateTime.md) | Date when service fulfilled. | [optional] 
**sales_order_id** | **string** | Technical identifier of corresponding sales order | 
**order_number** | **string** | Order number of corresponding sales order | 
**order_date** | [**\DateTime**](\DateTime.md) | Order date of corresponding sales order (UTC in ISO-8601 format) | 
**shipment_date** | [**\DateTime**](\DateTime.md) | Date when physical items of this receipt were handed over to the carrier to be delivered to the customer (UTC in ISO-8601 format).&lt;/br&gt;Only available on receipts of receiptType PURCHASE. | [optional] 
**shipment** | [**\Swagger\Client\Model\ShipmentReceiptsV3**](ShipmentReceiptsV3.md) |  | [optional] 
**linked_receipt_number** | **string** | Human-readable identifier of linked receipt.&lt;/br&gt; In case of receiptType PARTIAL_REFUND or REFUND it is the receiptINumber of purchase receipt.  ATTENTION: In previous version the information was called originalReceiptNumber | [optional] 
**linked_creation_date** | [**\DateTime**](\DateTime.md) | Creation date of linked receipt (UTC in ISO-8601 format).&lt;/br&gt;Only available if there is a linked receipt.  ATTENTION: In previous version the information was called originalCreatedDate | [optional] 
**payment** | [**\Swagger\Client\Model\PaymentReceiptsV3**](PaymentReceiptsV3.md) |  | 
**partner** | [**\Swagger\Client\Model\PartnerReceiptsV3**](PartnerReceiptsV3.md) |  | 
**customer** | [**\Swagger\Client\Model\CustomerReceiptsV3**](CustomerReceiptsV3.md) |  | 
**delivery_address** | [**\Swagger\Client\Model\AddressReceiptsV3**](AddressReceiptsV3.md) |  | [optional] 
**line_items** | [**\Swagger\Client\Model\LineItemsReceiptsV3**](LineItemsReceiptsV3.md) |  | 
**totals** | [**\Swagger\Client\Model\PriceReceiptsV3[]**](PriceReceiptsV3.md) | Total amounts of receipt per tax type and tax rate | 
**refund_type** | **string** | Field describes the business case of a refund in more detail.    &lt;br/&gt;Only available on receipts of receiptType REFUND and not reliable provided on older partial refund receipts.    The following refundTypes are possible:   * **RETURN** - Refund due to a return of an item   * **CANCELLATION** - Refund of delivery fees due to a cancellation   * **SERVICE_FULL_REFUND_CANCELLED_BY_SDU** - Refund of a service without item   * **SERVICE_FULL_REFUND_PRODUCT_RETURNED** - Refund a service parallel to an item return | [optional] 
**partial_refund_type** | **string** | Business case of partial refund chosen by partner. Has an impact on the business flow and the PDF.                                                                                              &lt;/br&gt;Only available on receipts of receiptType PARTIAL_REFUND and not reliable provides on older partial refunds receipts.  Possible values: * **REFUND_COMPLAINT_ITEM** - Refund because of justified customer complaint on item * **REFUND_PAYPAL_DISPUTE** - Partial or full amount of item price was refunded due to a dispute in Paypal payment * **REFUND_ESCALATION** - Partial amount of item price was refunded due to an escalation * **REFUND_PARTIAL_AMOUNT_AFTER_SERVICE_CANCELLATION** - Lowering of service price after service was not fulfilled completely * **REFUND_CREDIT_CARD_DISPUTE** - Partial or full amount of item price was refunded due to a dispute in CREDIT_CARD payment | [optional] 
**amount_due** | [**AllOfReceiptReceiptsV3AmountDue**](AllOfReceiptReceiptsV3AmountDue.md) | The amountDue documents the gross amount a customer still has to pay or will be refunded respectively owes less (the latter decision depends on the chosen payment method) with this receipt. &lt;/br&gt;As in case of receiptType PURCHASE and a prepaid payment method we know for sure that the customer has already paid in advance, so the amount is 0 € otherwise the content is identically with totalsGrossAmount | 
**totals_gross_amount** | [**AllOfReceiptReceiptsV3TotalsGrossAmount**](AllOfReceiptReceiptsV3TotalsGrossAmount.md) | Gross amounts of totals summed up over all prices. Only available on receipts of receiptType PURCHASE | [optional] 
**totals_reductions** | [**\Swagger\Client\Model\TotalsReductionReceiptsV3[]**](TotalsReductionReceiptsV3.md) | Reduction amounts on total value of receipts (currently it includes voucher reduction) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

