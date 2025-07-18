# ProductDescriptionProductsV5

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category** | **string** | Denotes the assortment type of the product, like &#x27;bag&#x27; or &#x27;shirt&#x27;. Mandatory. Must be identical for all variants of a product. Must be present in the Category service offered via Category endpoint | 
**brand_id** | **string** | Denotes the brand ID of a product. Brands and the mapping of their names to brand Ids should be done using the brand endpoint. Must be present in the Brand service offered via Brand endpoint. Must be identical for all variants of a product. | 
**product_line** | **string** | Denotes the proper name of a product, like &#x27;501&#x27;. May contain a maximum of 70 characters. If provided, it must be identical for all variants of a product. | [optional] 
**production_date** | [**\DateTime**](\DateTime.md) | Denotes the ISO8601 date of manufacture of a product variant. | [optional] 
**multi_pack** | **bool** | If the product variant is part of a set: &#x27;true&#x27;; otherwise &#x27;false&#x27; | [optional] 
**bundle** | **bool** | If the product variant is part of a bundle: &#x27;true&#x27;; otherwise &#x27;false&#x27; | [optional] 
**fsc_certified** | **bool** | If the product variant is certified by the Forest Stewardship Council: &#x27;true&#x27;; otherwise &#x27;false&#x27; | [optional] 
**disposal** | **bool** | If true, otto.de will present information about the disposal of the product (or parts of it). | [optional] 
**product_url** | **string** | Refers to a representation of the product variant in a shop of the partner. Should be a valid URL. | [optional] 
**description** | **string** | Represents a textual description of a product variant. May contain HTML elements. Should contain less than 2000 characters. Relevant for SEO. | [optional] 
**bullet_points** | **string[]** | May contain a minimum of 3 and a maximum of 180 characters. | [optional] 
**attributes** | [**\Swagger\Client\Model\AttributeProductsV5[]**](AttributeProductsV5.md) | Lists all the descriptive information about a product variant a partner can provide. Must be provided in the form of a key values pair. Will be validated against the AttributeDefinitions from Category endpoint provided by Otto market. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

