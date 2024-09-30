<?php
/**
 * AvailabilityV1Api
 * PHP version 5
 *
 * @category Class
 * @package  
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * OTTO Market API
 *
 * # Home Welcome to OTTO Market API Documentation. On this page you will find all information on how to use the API for your business. Please scroll to the top if you´re looking for the OpenAPI specification to download.  ## Become an OTTO Market partner (seller) Follow these steps: - Go visit [otto.market](https://www.otto.market) - Inform yourself about our benefits - Register as a partner - Get access to our partner portal \"OTTO Partner Connect (OPC)\" - Provide all necessary documents and data & sign the contract - Request your API user on OPC - Get yourself familiar with the [Developer's Guide](https://api.otto.market/docs#section/OTTO-Market-API-Developer's-Guide) - Have a look at the first [Use-Cases](https://api.otto.market/docs#section/Use-Cases) - Learn how to test our interfaces within the [sandbox section](https://api.otto.market/docs#section/Sandbox) - Make your first API Calls in the production environment  ## Become an OTTO Market service provider (developer) Follow these steps:  - Go visit [servicepartner.otto.market](https://servicepartner.otto.market/) - Inform yourself about the process of integration - Register as a developer - Get access to our partner portal \"OTTO Partner Connect (OPC)\" as developer - Provide all necessary documents and data to get further access - Get yourself familiar with the [Developer Program](https://api.otto.market/docs#section/Developer-Program) - Have a look at the first [Use-Cases](https://api.otto.market/docs#section/Use-Cases) - Learn how to test our interfaces within the [sandbox section](https://api.otto.market/docs#section/Sandbox) - Request [production access](https://api.otto.market/docs#section/Developer-Program/Access-to-Production) within the \"OTTO Partner Connect (OPC)\" - Create your first OTTO Market App and connect your first seller  ## Process Workflow  Given below is the overall process workflow of all services within OTTO Market and calls you should at least implement to organize the business at the OTTO Market.  For more detailed information, please also have a look into our section [Use-Cases](https://api.otto.market/docs#section/Use-Cases).  The first use-case [How to list your first product](https://api.otto.market/docs#section/Use-Cases/How-to-list-your-first-product) will help you to understand the dependencies between the interfaces Products, Shipping-Profiles and Availability. The second use-case [Manage an order from start to finish](https://api.otto.market/docs#section/Use-Cases/Manage-an-order-from-start-to-finish) give more detailed information about the order management process and the dependencies between the interfaces Orders, Shipments, Receipts and Returns. The third use-case [Manage your after-sales action](https://api.otto.market/docs#section/Use-Cases/Manage-your-after-sales-actions) informs about all the touch points with the OTTO customer after the shipment took place. In the use-case the interface Price-Reductions will be handled.  <img src=\"/docs/process_information.png\" alt=\"Process Workflow\"/>  ## General Changelog This changelog will contain information about important changes. Most important things are legal issues, version upgrades and not backward compatible changes. Newest information will be placed on top of the table.  | Date       | Interface                                                                   | Classification | Description                                                                                                                             | |------------|-----------------------------------------------------------------------------|----------------|-----------------------------------------------------------------------------------------------------------------------------------------| | 2024-08-08 | [Shipping Profiles](../docs#tag/ShippingProfiles-V1)                        | New API        | Added ShippingProfiles API                                                                                                             | | 2024-08-08 | [Availability](../docs#tag/Availability-V1)                                 | New API        | Added Availability API. The API replaces the Quantities-V2, which ist supported until 31st of March, 2025 and new functions according to delivery information is added.| | 2024-03-18 | [Returns](../docs#tag/Returns-V3)                                           | New Version    | Version 3 (v3) is now live. We plan to go offline with Version 2 (v2) by 30th September, 2024.                                          | | 2023-07-03 | [OTTO Market Developer Program](https://servicepartner.otto.market/en/home.html) | Published      | The OTTO Market Developer Program is now available to the public                                                                        | | 2023-01-11 | [Receipts](../docs#tag/Receipts-V3)                                         | New Version    | Version 3 is now live. We plan to go offline with Version 2 (v2) by 2023-07-11                                                          | | 2022-09-22 | [Products](../docs#tagProducts-V3)                                          | New Version    | Version 3 is now live. We plan to go offline with Version 2 (v2) by 2023-03-31                                                          | | 2022-05-25 | General                                                                     | Documentation  | Starting 2022-11-01 redundant domains to access OTTO Market API doc will be decomissioned. Please use access docs using api.otto.market | | 2022-03-17 | [Quantities](../docs#tag/Quantities-V2)                                     | Sandbox        | Version 2 of /quantities is now available in the sandbox environment.                                                                   | | 2022-01-19 | [Price reductions](../docs#tag/Price-Reductions-V1)                         | New API        | Added price reduction APIs                                                                                                              | | 2021-11-26 | [Products](../docs#tag/Products-V2)                                         | Sandbox        | Version 2 of /products is now available in the sandbox environment.                                                                     | | 2021-04-30 | [Orders](../docs#tag/Orders-V4)                                             | New Version    | Version 4 is now live. We plan to go offline with Version 3 (v3) by  2021-10-31                                                         | | 2021-04-06 | [Products](../docs#tag/Products-V2)                                         | New Version    | Version 2 is now live. We plan to go offline with Version 1 (v1) earliest by 01.11.2021.                                                | | 2020-04-14 | [Receipts](../docs#tag/Receipts-V2)                                         | New Version    | Version 2 is now live. We plan to go offline with Version 1 (v1) earliest by 14th October,2020.                                         | | 2020-04-20 | [Orders](../docs#tag/Orders-V4)                                             | New Version    | Version 3 is now live. We plan to go offline with Version 2 (v2) earliest by 01.11.2020.                                                | | 2019-09-01 | [Orders](../docs#tag/Orders-V4)                                             | New Version    | Version 1 will be outdated in some time. Please change to version 2, if it is marked as ready.                                          | | 2022-02-28 | [Price Reductions](../docs#tag/Price-Reductions-V1)                         | New Version    | Version 1 is now live.                                                                                                                  |  ## Feedback  We are very interested in learning how to enhance our API-Documentation for you and would love to hear from you! [Send Feedback.](https://account.otto.market/s/feedback?category=Feedback&Unterkategorie=)  ## Get Support If you have any questions, remarks or if you need support, please don't hesitate to contact us and we will get back to you as soon as possible.  - As a **partner** the quickest way to get support is to open a new ticket in [OTTO Partner Connect](https://account.otto.market/s/ticketanlegen) via the Partner Helpdesk choosing the sub-category \"Technische Schnittstellen\". - As a **service provider** please [create a case](https://account.otto.market/s/ticketanlegen?category=Supportrequest&Unterkategorie=technicalInterfaces) to our OTTO Market team.  ## Access to the API  | Environment | Base URL                        | |-------------|---------------------------------| | Sandbox     | https://sandbox.api.otto.market | | Production  | https://api.otto.market         |  # OTTO Market API Developer's Guide The Developer's Guide is targeted at developers and people with technical background who are already a partner (seller) of OTTO Market or are interested in becoming a partner. The aim is to help you as a partner of OTTO Market to connect to and to work with the OTTO Market API. It describes some common implementation patterns and helps you to understand how processes work. Detailed information about the concrete interfaces can be accessed by clicking onto the single tabs.  ## Authentication Options for OTTO Market API  ### Overview  To access the OTTO Market API, you'll first need to determine whether you're accessing it directly for your own use or authorizing access to a service provider to act on your behalf. If you're accessing the API directly, authentication is required, and you'll need to obtain an access token. However, if you're authorizing a service provider, you'll need to install and authorize a service provider app within your OTTO account.  Authentication methods vary depending on your approach. Below, you'll find a brief introduction to the different authentication options for accessing the various API endpoints tailored to these scenarios.  ### Accessing the API on My Own Behalf as a Seller (Partner)  If you have your own IT department capable of developing interfaces for the OTTO Market API, you can create self-apps in the OTTO Partner Connect (OPC) portal and obtain a client ID and client secret for authentication via the client credential flow. This flow should be used by all OTTO Market Partners when establishing a connection with the API hosted by their organization. Refer to the following section for detailed information on creating self-apps and using the client credential flow.  #### Steps to Access API as an OTTO Market Partner using self-apps with the client credential flow  As an OTTO Partner, follow these steps to leverage the OTTO Market API:  1. Log in to [OTTO Partner Connect (OPC)](https://portal.otto.market/) portal. 2. If necessary, please assign yourself the user right “API-Zugriff” in the [user administration](https://portal.otto.market/settings/Nutzerverwaltung) and log in again so that the API access is authorized. 3. Navigate to the [API access (\"API-Zugriff\")](https://portal.otto.market/settings/API) section, where you'll find Sandbox and Live environments. 4. Choose the environment where you want to create an app and click \"Neue App erstellen\" to proceed. 5. Provide a name for your app and select at least one scope that your app will need access to. Click \"App erstellen\" to proceed. 6. Your app has been successfully created, and you'll be redirected to the credentials tab.  **Note:** - There's a limit to the number of apps you can create. If you reach this limit, you must delete an old one before creating a new one. - The client secret for the app is displayed only once. If you miss or forget it, you'll need to rotate the client secret.  **Access Token Generation:**  Implement the Client Credentials Flow to generate an access token, granting you access to the OTTO Market API.  - The Host header should be either `sandbox.api.otto.market` or `api.otto.market`. - The request body should be `application/x-www-form-urlencoded`.  Example cURL command: ```bash curl --request POST \\   --url 'https://api.otto.market/v1/token' \\   --header 'Content-Type: application/x-www-form-urlencoded' \\   --data grant_type=client_credentials \\   --data client_id={CLIENT_ID} \\   --data client_secret={CLIENT_SECRET} \\   --data 'scope=orders products' ```  If your request is **successful**, the API server responds with an **access token** in a JSON object that looks like this:  ``` {   \"access_token\": \"eyJhbGciOiJSUzI1NiISNCXIgiLCJSZWNla[...omitted for brevity...]\",   \"expires_in\": 1800,   \"refresh_expires_in\": 0,   \"token_type\": \"Bearer\",   \"not-before-policy\": 1666271301,   \"scope\": \"orders products\" } ```  **Note**: Please bear in mind that there is no refresh token when obtaining an access token using the client credential grant type. The client needs to use its credentials, i.e., client ID and client secret, to obtain a new token once the access token has expired or is about to expire. <br/>  ### [Deprecated] Accessing the API on My Own Behalf as a Seller (Partner) **Note**: Using this outdated approach to access the OTTO market API is discouraged, and it is advised to avoid its use. This option is going to be sunset in the future, so you should not use it for new development. If you are already using this approach, you should migrate to the new flow. The preferred method is [Accessing the API on My Own Behalf as a Seller (Partner)](#accessing-the-api-on-my-own-behalf-as-a-seller-partner).  #### Fetching an Access Token To access the Otto Market API, you need to authenticate your API user account and obtain an access token. This section describes how to obtain an access token using the password grant type.  #### Requesting an Access Token To request an access token, send a POST request to the /token endpoint of the Otto Market API with the following parameters:  * <b>username</b>: Your API user account username. * <b>password</b>: Your API user account password. Make sure to URL-encode any special characters. * <b>grant_type</b>: Set to \"password\" to indicate that you're using the password grant type to obtain an access token. * <b>client_id</b>: Identifies your application to the API. Set to \"token-otto-api\".  For example, you can use the following cURL command to retrieve your access token:  ``` curl -X POST \\ https://api.otto.market/v1/token \\ -H 'Content-Type: application/x-www-form-urlencoded' \\ -H 'Cache-Control: no-cache' \\ -d 'username=<YourUsername>&password=<YourPassword>&grant_type=password&client_id=token-otto-api' ```  Note that you need to include your own username and password in the cURL command and URL-encode any special characters. For example, if your password is \"my!@password\", you would include it in the command above as \"my%21%40password\".  Alternatively, you can let cURL encode the POST data by using --data-urlencode instead:  ``` curl -X POST \\   https://api.otto.market/v1/token \\   -H 'Content-Type: application/x-www-form-urlencoded' \\   -H 'Cache-Control: no-cache' \\   --data-urlencode username=<YourUsername> \\   --data-urlencode password=<YourPassword> \\   --data-urlencode grant_type=password \\   --data-urlencode client_id=token-otto-api  ``` #### Response  If your request is successful, the API server responds with an access token in a JSON object that looks like this:  ``` {   \"access_token\": \"eyJhbGciOiJSUzI1NiISNCXIgiLCJSZWNla[...omitted for brevity...]\",   \"expires_in\": 1800,   \"refresh_expires_in\": 7200,   \"refresh_token\": \"eyJhbGciOiJIUzI1NiIsInR5cCIgOO[...omitted for brevity...]\",   \"token_type\": \"bearer\",   \"not-before-policy\": 0,   \"session_state\": \"3e0710b2-b57a-4cb0-a51d-6de60a997356\",   \"scope\": \"pumba-roles-app-portal partner email profile\" } ```  The <b>\"access_token\"</b> property contains the access token that you can use to authenticate subsequent requests to the Otto Market API. Make sure to include the access token in the Authorization header of your API requests, using the Bearer token type.   #### Example Here's an example cURL command that retrieves a list of products from the Otto Market API, using the access token obtained in the previous step: ``` curl -X GET \\ https://api.otto.market/v2/products \\ -H 'Authorization: Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9...' \\ -H 'Cache-Control: no-cache' ``` This cURL command sends a GET request to the /v2/products endpoint of the Otto Market API, with the Authorization header set to the access token obtained in the previous step. The -H 'Cache-Control: no-cache' option is included to ensure that the server doesn't return a cached response.  #### Best-practice when renewing a token  Use available tokens as long as possible before fetching a new `access_token`. In general new access_tokens should be fetched by using the `refresh_token`. Expiration date of an access token is indicated by the attribute `expires_in` for access_tokens and `refresh_expires_in` for refresh_tokens. Please bear in mind that a refresh token can only be used once. In other words, once a refresh token is used to obtain a new access token, then the same refresh token cannot be reused even if it has not yet expired.   #### Use refresh token A single refresh token can only be used to obtain a new access token, if  1) The refresh token has not expired, and 2) The refresh token has not been used before.  The refresh token can be extracted from the <code class=\"inline\">refresh_token</code> value. Once the access token has expired or is going to be expired, you should use the refresh token to get a new access token, without using your users credentials again. You can use the following cURL command. Include the refresh token (without leading and trailing < >). ``` curl -X POST \\   https://api.otto.market/v1/token \\   -H 'Content-Type: application/x-www-form-urlencoded' \\   -H 'cache-control: no-cache' \\   -d 'refresh_token=<refresh_token>&grant_type=refresh_token&client_id=token-otto-api' ```  The response of this request will look like the example above, the access token can be extracted from <code class=\"inline\">access_token</code> and the new refresh token from <code class=\"inline\">refresh_token</code>.  <br/>  ### Accessing the API as a Service Provider on Behalf of a Seller (Partner)  #### Installing and Authorizing OTTO Market Apps as a Seller (Partner)  For OTTO Market Partners needing to install and authorize OTTO Market apps created by service providers, follow these steps:  1. Log in to [OTTO Partner Connect (OPC)](https://portal.otto.market) portal. 2. Click on the link provided by the Service Provider or visit their homepage. 3. Grant consent for the app to access the specified scopes displayed in the consent screen. Failure to grant consent will prevent app installation and access to your data.  **Note:** All specified scopes must be granted access; partial access is not permitted. 4. Once consent is granted, the app is installed and can be used. It will also be displayed in the \"Installed Apps\" tab on the [service provider page (\"Dienstleister\")](https://portal.otto.market/settings/Dienstleister).  #### Revoke Consent  To revoke consent, navigate to the overview of your installed apps on the [service provider page (\"Dienstleister\")](https://portal.otto.market/settings/Dienstleister). Hover over the app name and click \"Zugriff entziehen\" to confirm revocation. Uninstalling the app revokes its access to your data. Of course, you can re-install the app if you want to.  <br />   ### Creating and Authorizing OTTO Market Apps as a Service Provider  For information on creating and authorizing OTTO Market apps as a service provider, refer to the [Developer Program](/docs#section/Developer-Program) section.  ## Scopes  Scopes corresponds to [OAuth scopes](https://oauth.net/2/scope/). They are used for providing fine-grained access control to the OTTO Market APIs. Scopes need to be used via the authorization in the client credential flow or the authorization code flow.   ### Scopes for OTTO Market APIs The below table gives mapping of displayed scope names in UI to the scope names to be used for fetching token  | Display Name      | Scope Name (To be used in fetching token) | |-------------------|-------------------------------------------| | Products          | products                                  | | Orders            | orders                                    | | Receipts          | receipts                                  | | Returns           | returns                                   | | Price Reduction   | price-reduction                           | | Shipments         | shipments                                 | | Quantities        | quantities                                | | Shipping Profiles | shipping-profiles                         | | Availability     | availability                              |  ### Content declaration of available scopes  #### Products  The product interfaces allow partners to manage their product data in the OTTO Market, which means to send products for publishing on OTTO.de, to view the sent data, and to manage the visibility of the products on otto.de.  Read more about the technical possibilities [here](https://api.otto.market/docs#tag/Products-V4).  #### Quantities - depcrecated and will be shut down to the end of March 25. Use the Availability Interface for updating quantities.  Once the products have been successfully transmitted using the products scope, only the quantities are missing to make the products available to the end customer on otto.de. For this purpose the Quantity Interface allows partners and service providers to update the available quantity for a specific SKU.  Read more about the technical possibilities [here](https://api.otto.market/docs#tag/Quantities-V2).  #### Shipping Profiles  With this interface you can create, change and manage shipping profiles of the otto market partners.   Read more about the technical possibilities [here](https://api.otto.market/docs#tag/ShippingProfiles-V1).  #### Availability  Once the products have been successfully transmitted using the products scope, your need to send quantities to make the products available to the end customer on otto.de.  As well you need to connect the sku to existing shipping profiles for the delivery information.  For this purpose the Availability Interface allows partners and service providers to update necessary information to make a SKU available on otto.de.  Read more about the technical possibilities [here](https://api.otto.market/docs#tag/Availability-V1).  #### Orders  This interface allows partners and service providers to view orders and associated position items. It also allows to send cancellations on order and position item level.  Read more about the technical possibilities [here](https://api.otto.market/docs#tag/Orders-V4).  #### Shipments  This interface should be used to report that shipments have been handed over to the carrier for final delivery to the customer. You can also get access to Return-Shipments for retrieving track and trace data for returns from the customer to the partner warehouse.  Shipments - Read more about the technical possibilities [here](https://api.otto.market/docs#tag/Shipments-V1). Return-Shipments - Read more about the technical possibilities [here](https://api.otto.market/docs#tag/ReturnShipments-V1).  #### Returns  This scope enables the user to manage returns. This includes retrieving a list of announced returns, accepting and declining returns.  Read more about the technical possibilities [here](https://api.otto.market/docs#tag/Returns-V3).  #### Receipts  OTTO Market provides receipts to the customers to document financial processes. The scopes enables users to download these documents as a PDF or a JSON.  Read more about the technical possibilities [here](https://api.otto.market/docs#tag/Receipts-V2).  #### Price Reduction  This endpoint enables sellers to apply price reductions to shipped products if the customer is unsatisfied and asks for a partial refund instead of returning the product completely.  Read more about the technical possibilities [here](https://api.otto.market/docs#tag/Price-Reductions-V1).   ## Calling an Endpoint All endpoints are secured via authorization. You add the HTTP <code class=\"inline\">Authorization</code> -Header with value <code class=\"inline\">Bearer ey...</code> and will get access. ``` curl -X GET \\   https://api.otto.market/v2/orders \\   -H 'Authorization: Bearer eyJhbGciOiJSUzI1NiIsInR5jdhstdheSldUIiwia2lkIiA6ICI4T1d6MjhuZ01GbHBURDl5TGtxQkRHMThuYXZNVFgyTWtqNVhkY0RITDBZIn0.eyJqdGkiOiI5OTM1NDk3OS1iNDdhLTQ3MzctOWYyMy0yNTMyMmI5MGVmYmMiLCJleHAiOjE1NTM3NjQ4NjMsIm5iZiI6MCwiaWF0IjoxNTUzNzYxMjYzLCJpc3MiOiJodHRwczovL2VzYi13cy5vdHRvLmRlL3NlYy1hcGkvYXV0aC9yZWFsbXMvcGFydG5lci1hcGktdGVzdCIsImF1ZCI6ImFjY291bnQiLCJzdWIiOiI0MWUwNGQ1OS0xMTk0LTRiYjMtODhkYS1hYjRmNTk2NDkwZGUiLCJ0eXAiOiJCZWFyZXIiLCJhenAiOiJwYXJ0bmVyLWFwaSIsImF1dGhfdGltZSI6MCwic2Vzc2lvbl9zdGF0ZSI6IjliNjk1ZDA1LTY5YzQtNDkwZS1hZGIzLTc2YWE5NmJmZjA0YyIsImFjciI6IjEiLCJyZWFsbV9hY2Nlc3MiOnsicm9sZXMiOlsib2ZmbGluZV9hY2Nlc3MiLCJ1bWFfYXV0aG9yaXphdGlvbiJdfSwicmVzb3VyY2VfYWNjZXNzIjp7ImFjY291bnQiOnsicm9sZXMiOlsibWFuYWdlLWFjY291bnQiLCJtYW5hZ2UtYWNjb3VudC1saW5rcyIsInZpZXctcHJvZmlsZSJdfX0sInNjb3BlIjoiZW1haWwgcHJvZmlsZSIsImVtYWlsX3ZlcmlmaWVkIjp0cnVlLCJwYXJ0bmVyIjoiMTAwMDYyNCIsIm5hbWUiOiJTb3VsZXdheSIsInByZWZlcnJlZF91c2VybmFtZSI6IjEwMDA2MjQiLCJnaXZlbl9uYW1lIjoiU291bGV3YXkifQ.SleUexNdapaY5RmrVTbKRMiVpRrbNLjIUi7fILsW1hkpqQbX4IQRaSufSt98Ar0OkEmIvZvYPpGVecmjwYvD3YQzBmlcdU0V544Y0h8y01RyxZAYGZbRXfA1kOsFDucnrClCcj1JIaQMU4629wU9OM_SdQaLvfTA2l5prma94RekdWR3S-6DzXqJDtHrrcYS8BsfohkuLdi1U8vPUjwee9lsY3RTa9YZVekH4hFVWMl0Pbwub8jwum6zRjTu-ZAiLhZSnl8mSaMtrJFmkzRi3-s9eN7k0lnLKWGt7JuqZ_vbiJT8ZhHvPur4eLrY02ehF6-lwSUyjWMCzCi5TjBgYg' ```  The expected result has an HTTP 200 code with a probably empty list.  ## Rate Limiting A high volume of calls on API services at any given time would increase server resource consumption. If the load is due to an unauthorized intrusion it would be a chaos. Thus, rate limiting becomes extremely important.  In general authenticated API calls are limited for each partner to 20 requests per second. Exceeding the rate limit results in a HTTP 429 \"too many requests\" error. For some endpoints the rate limit is lower to ensure the best quality for all API users. Please see below:  |Endpoint path|HTTP method|Max requests per time unit| |:-|:-|:-| |/products|GET|10 per second| |/products|POST|20 per second| |/products/active-status|GET|10 per second| |/products/active-status|POST|3600 per day| |/products/marketplace-status|GET|10 per second| |/products/categories|GET|10 per second| |/products/brands|GET|10 per second| |/v1/token|POST|10 per second for each IP| |other endpoints|POST & GET|20 per second|  ### User Based API Throttling A general method of limiting usage of API resource is to allocate a pre-configured static or dynamic quota for a consumer. The API rate limiting is done on the basis of partner-id. A particular partner-id can make 20 requests per second.  ### Best Practice Please divide your requests over the day and avoid sending all data at once. Make use of the individual limits for the interfaces. This helps preventing our systems from clogging and ensures a flawless experience for everyone.  ## Timeouts and Defaults | Name            | Value | Description                                                                                                     | |-----------------|-------|-----------------------------------------------------------------------------------------------------------------| | request timeout | 10s   | The maximum HTTP request timeout for all interfaces                                                             | | limit           | 128   | The default for limit query parameter. See Paging. The default limit can be overwritten in specific interfaces. |  ## Common Patterns ### Interface Definition Our REST interface definitions are basically using swagger.io. All interface definitions can be automatically used by you to generate necessary API objects and similar in your chosen implementation language. In order to remain technically extensible and up-to-date, individual interfaces may have been described in new or different definition schemes. We are constantly trying to keep all interfaces technically up to date.  ### Versioning The OTTO Market API uses different versions for the single endpoints. The version number is included in the URL path. [Semantic versioning](https://semver.org/) scheme is used, but only the major version. Breaking changes are only introduced in new major versions. API version is required in all urls.  Endpoints may introduce new optional fields at any time in the request and any new fields in the response. The client must skip all unknown fields.  For every endpoint, a changelog exists which displays the latest released changes and the upcoming unreleased changes. Additionally, an overall [Changelog](/) exists with the most exciting changes about the API in general.  ### Supporting old versions The OTTO Partner API continues to support old versions of an API for **6 months** from the time of public announcement for the new version of a given API. It is recommanded to check regularly. This can be be automated by checking HTTP headers for the attribute `SunsetHeader`, which indicates when versions go offline.  #### Best-practice Regurlarly check for the `SunsetHeader` and act as soon as the attribute appears by updating your integration to the new version within the presented time frame.  __example:__ ``` Warning: v2 is deprecated. Please migrate to v3 Sunset: Sun, 01 Nov 2020 00:00:00 GMT Deprecation: Wed, 11 Nov 2018 23:59:59 GMT Link: <https://api.otto.market/v3/orders>; rel=\"successor-version\" ```  ## Header Some common headers should be set by clients:  1. Set the <code class=\"inline\">X-Request-Timestamp</code> header according to the [ISO-8601](https://tools.ietf.org/html/rfc3339#section-5.6) standard. You can use this regex pattern: <code class=\"inline\">^\\d{4}-(0\\d|1[0-2])-([0-2]\\d|3[01])T(2[0-3]|[01]\\d):[0-5]\\d:[0-5]\\d(\\.\\d+)?(\\[+-](2[0-3]|[01]\\d):[0-5]\\d|Z)$</code> 2. Set <code class=\"inline\">Accept</code> to the desired response format e.g. <code class=\"inline\">application/json</code> 3. Set the <code class=\"inline\">Content-Type</code> header to define the used format in the request body, only applicable if you send a request body  ## HTTP Methods The interfaces describe which HTTP methods are allowed and how to use them. Our basic concern is that basically all HTTP Methods are allowed in the [standardized way](https://en.wikipedia.org/wiki/Hypertext_Transfer_Protocol). Note that these methods should behave as specified by their [standardized meaning (idempotency)](http://restcookbook.com/HTTP%20Methods/idempotency/). The following is a description of a few special features, relevant facts or ways to use some of the HTTP methods. <details>   <summary>Click to expand for details</summary>  ### POST POST will update specific fields **and** returns the result like a GET would do (error response is independent).  ### PUT PUT will create or replace the whole entity independent of an existing entity.  ### PATCH PATCH will update specific fields **and** not return data like a GET would do (error response is independent). PATCH body is structured in the same way as PUT and POST (entity body). All fields added into your body will be updated, other fields will not be affected.  __example:__ ``` {   \"username\" : \"myusername\",   \"email\" : null } ``` </details>  ## HTTP Status Codes We are using [standardized HTTP status code](https://www.restapitutorial.com/httpstatuscodes.html) with a body only if needed (it also just can be empty), but details about that you can find at the concrete interface implementation.  | Verb   | Description                                                                                                                                                                                                                                                                                            | |--------|--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------| | HEAD   | Can be issued against any resource to get just the HTTP header info.                                                                                                                                                                                                                                   | | GET    | Used for retrieving resources.                                                                                                                                                                                                                                                                         | | POST   | Used for creating resources.                                                                                                                                                                                                                                                                           | | PATCH  | Used for updating resources with partial JSON data. For instance, an Issue resource has title and body attributes. A PATCH request may accept one or more of the attributes to update the resource. PATCH is a relatively new and uncommon HTTP verb, so resource endpoints also accept POST requests. | | PUT    | Used for replacing resources or collections. For PUT requests with no body attribute, be sure to set the Content-Length header to zero.                                                                                                                                                                | | DELETE | Used for deleting resources.                                                                                                                                                                                                                                                                           |  ## Error Message Style Error messages are returned as content type \"application/json;charset=utf-8\" in the following format: ``` {   \"errors\": [     {       \"path\": \"/orders/1000331\",       \"title\":  \"Invalid Attribute\",       \"code\": \"490\",       \"detail\": \"First name must contain at least three characters.\",       \"detail-structured\": {...},       \"jsonpath\": \"[@.orderid=='12345']/invoiceAddress/firstname\",       \"logref\": \"key to find in the log\"     }   ],   \"warnings\": [       {         \"path\": \"/orders/1000331\",         \"title\":  \"Warning Attribute\",         \"code\": \"WRONG_SPELLING\",         \"detail\": \"Last name should start with big letter.\",         \"detail-structured\": {...},         \"jsonpath\": \"[@.orderid=='12345']/invoiceAddress/lastname\",         \"logref\": \"key to find in the log\"       }     ] } ```  | Field             | Mandatory | Description                                                                                          | |-------------------|-----------|------------------------------------------------------------------------------------------------------| | path              | yes       | called REST path                                                                                     | | title             | yes       | short description of the error                                                                       | | code              | no        | internal error code (number or enum) of your application / domain (do not use the HTTP status codes) | | detail            | no        | long description of the error, perhaps technical details                                             | | detail-structured | no        | technical details in JSON structure                                                                  | | jsonpath          | no        | JSON field in request which caused the error                                                         | | logref            | no        | reference key to find more stuff in the log (as example traceId)                                     |  ## Pagination Interfaces may return a list with resources (orders, shipments...) and a way to navigate these lists. Please pay attention to the response pattern to identify how to handle lists. There are two common ways list handling is implemented. One way to retrieve the next entry of a list is by using links for navigation the entries. The other is by providing list pages to iterate through lists.  For pagination, the basic query parameter \"limit\" (e.g. <code class=\"inline\">?limit=10</code>) can be used to define the maximum amount of resulting entities returned per call. The interface itself can reduce the limit lower than your client limit.  An example entity using links (not pages) to navigate would be: ``` {   resources: [     {       ...data of the entity if all or some information will be provided directly...,       links: [         {           href: \"/v1/orders/1234\",  <--- Link to single partner order           rel: \"self\"         }       ]     }   ],   links: [     {       href: \"/v1/orders?idGt=1234\", <--- Link to next list of ressources. If not present, no more records exist, currently       rel: \"next\"     }   ] } ```  ## Bulk requests Attention: When sending bulk requests to any /products API endpoint, it will be processed asynchronously at the backend.  ### Synchronous Answer Synchronously will be delivered an endpoint to check the asynchronous processing state. ``` HTTP STATUS 202 (Accepted) {     \"task\": {         \"href\": \"/interface/foo/123\",         \"id\": \"123\"     } } ```  ### Check the State of an Endpoint The client can follow the <code class=\"inline\">href</code> to check the state of processing.  #### Best-practice: As long as the `state = pending` the attribute `pingAfter` dictates when to send a new request.  An example entity would be: ``` {   \"state\": \"pending\",   \"message\": \"is running boy\",   \"progress\": \"35\",   \"total\": \"100\",   \"pingAfter\": \"2019-05-01T13:25:12+0200\",   \"links\": [     {       \"rel\": \"self\",       \"href\": \"/foo/bar/123\"     },     {       \"rel\": \"failed\",       \"href\": \"/foo/bar/123/failed\"     },     {       \"rel\": \"succeeded\",       \"href\": \"/foo/bar/123/succeeded\"     }   ] } ```  ### Fetching files like PDF and CSV  Clients don't have to know the filetype that will be returned from a resource. Resources serving files will have the appropriate file extension in the URL as shown in the example below.  **Request Headers** ``` GET /SomeInvoice.pdf HTTP/1.1 Accept: *_/_* ```  Clients can find out the mime-type from the Content-Type header that will be sent in the response (e.g. application/pdf for PDF files and application/csv for CSV files).  **Response Headers**    ``` HTTP/1.1 200 OK Content-Length: 514493 Content-Type: application/pdf ```  ## Common fields Common fields like time, currency, country codes etc need to follow the standard ISO guidelines unless mentioned otherwise. The fields must report the format they are following on the docs.  ### Some standard formats: - Time: Accept in any time zone in ISO-8601 format and always reply in UTC.    Example: `YYYY-MM-DD` and `hh:mm:ss.sss`: `2020-03-12` and `22:33:34.400` - Currency: ISO-4217.    Example: `EUR` for Euros, `GBP` for British Pound Sterling. - Country code: ISO-3166-1 alpha-3    Example: `DEU` for Germany, `NOR` for Norway.   # Best Practices  *In the following you can find some best practices for working with our OTTO Market API which will help you to build up a better connection to our marketplace!*  1. Stay within the rate limits 2. Send data in Batch and fetch data as a list 3. Take action when getting back http 4** errors 4. Consider the two-step validation process for creating products 5. Consider the \"Unchanged\" status during product update or creation 6. Make sure product intentifier stay the same 7. Maintain the most relevant attributes for your products 8. Keep information provided by OTTO up to date 9. Consider the content requirements for product data 10. Utilize the MOIN as an identifier for further processes 11. Use Announced Orders for stock reservation 12. Consider the delivery type in the shipments  ## Stay within the rate limits  Each endpoint of the API has its own rate limits. These limits were set with the aim of ensuring optimal utilization of the server's available resources, maintaining the best quality for all API users, and facilitating the fastest possible processing of requests. Additionally, rate limiting errors can prevent important data from being entered into the system, leading to data discrepancies. Please take into account the rate limits when making your requests and adjust them accordingly if you receive HTTP 429 errors. You can find a complete list of the current rate limits [here](https://api.otto.market/docs#section/OTTO-Market-API-Developer's-Guide/Rate-Limiting).  ## Send data in Batch and fetch data as a list  To manage the load, it is advisable if the relevant endpoint makes it possible to send the data in bulk. Each endpoint has a different limit which must be considered. Please make the best possible use of the limit to reduce the number of requests. Some endpoints will perform your request asynchronously when sending data in bulk - for more information about bulk requests have a look [here](https://api.otto.market/docs#section/OTTO-Market-API-Developer's-Guide/Bulk-requests). If you want to retrieve data from the OTTO Market API, you should favor a list retrieval. Various parameters are available for retrieving the list in order to filter the list and achieve the desired result. Please make sure that you fetch all pages - for more information about the pagination have a look [here](https://api.otto.market/docs#section/OTTO-Market-API-Developer's-Guide/Pagination). In some cases, you can also perform a direct retrieval for individual SKUs. However, you should only do this selectively and always use the list retrieval for regular retrievals.  ## Take action when getting back http 4** errors  For each request you are sending to the OTTO Market API, you will receive a http code. Please make sure that for each client error (http codes 4**) you have a monitoring on your end and take action to reduce the amount of http 4** errors. Each client error is caused by incorrect data in the request or payload and needs to be fixed before a retry will be forced. The best way is to show the error codes on your end and only send the data again, after the data were fixed.   ## Consider the two-step validation process for creating products  Product uploads go through a two-step validation process. Errors from the first validation stage can be viewed through the import error report ([GET /products/update-tasks](https://api.otto.market/docs#tag/Products-V3/operation/Products-V3__progressByProcessId)) and indicate a general product upload issue based on the body request schema. Errors from the second validation stage (otto.de) are embedded in the marketplace status ([GET /products/marketplace-status](https://api.otto.market/docs#tag/Products-V3/operation/Products-V3__getMarketPlaceStatusList)), and resolving these errors directly generates an offer on otto.de.  Please also note that the API is asynchronous and you need to get the results via the /products/update-tasks endpoint. This means that the 202: Accepted response you receive after sending a request indicates that we have received your request, but it does not guarantee that we have processed it.  ## Consider the \"Unchanged\" status during product update or creation  When managing product data, also consider retrieving and taking into account the results for \"unchanged\". Data sets that are found in the unchanged status of the import will be discarded by us. The reason is that exactly the same records have been sent without changes. However, this does not mean that the data sets were processed successfully as data sets that previously had errors and were sent again without any changes will also end up in the \"unchanged\" status. Find more information about the topic [here](https://api.otto.market/docs#tag/Products-V3/operation/Products-V3__unchangedByProcessId).  ## Make sure product identifier stay the same  The combination of **productReference** and **SKU** for one specific EAN cannot be changed once it has been successfully created in OTTO systems. However, if either of the two identifiers needs to be modified, it is necessary to first deactivate either the affected SKU or all SKUs associated with a productReference via the Active-Status endpoint ([POST /products/active-status/](https://api.otto.market/docs#tag/Products-V3/operation/Products-V3__updateActiveStatus) active=false). After deactivating the SKU, the correct product data must be resubmitted. In case you´ve only updated the productReference and the SKU(s) stay the same, it is important to reactivate the affected SKU(s) via the Active-Status endpoint ([POST /products/active-status/](https://api.otto.market/docs#tag/Products-V3/operation/Products-V3__updateActiveStatus) active=true). If the SKUs have changed, they will be treated as new SKUs and will start with active=true status.  ## Maintain the most relevant attributes for your products  The assignment of products to filters and specific shopping paths on otto.de is based on the maintained attributes/features in the product data. For this purpose, the provided category list ([GET /products/categories](https://api.otto.market/docs#tag/Products-V3/operation/Products-V3__getCategoryGroups)) offers indications of the relevance and importance of each attribute/feature. Highly important attributes/features are marked with **relevance=HIGH**. Additionally, the **featureRelevance** indicates the specific use of each attribute (e.g., LEGAL, FILTER, SEARCH, NAVIGATION,...) Please note: All attributes with featureRelevance = LEGAL are mandatory and needs to be maintained. You can also find information about attributes relevant for the variant building on otto.de. The right attributes will be shown withing the **variationThemes**. It is highly recommended to maintain as much attributes with relevance=HIGH to higher your visibility on otto.de.  ## Keep information provided by OTTO up to date  As changes to categories, attributes, and default values can occur, it is important to always have an up-to-date version of the category list ([GET /products/categories](https://api.otto.market/docs#tag/Products-V3/operation/Products-V3__getCategoryGroups)). This ensures that only valid categories, attributes, and allowed values are transmitted. Similarly, the brand list ([GET /products/brands](https://api.otto.market/docs#tag/Products-V3/operation/Products-V3__getBrands)) should be kept up to date. Regularly retrieving these lists, ideally on a daily basis, ensures their accuracy and minimizes the potential for errors.  ## Consider the content requirements for product data  During the product transfer, certain mandatory fields (such as SKU, EAN, category, brandid - see \"required\" in the request body schema of the [POST /products/](https://api.otto.market/docs#tag/Products-V3/operation/Products-V3__createOrUpdateProductVariations) endpoint and attributes marked within the category list with featureRelevance=LEGAL must be provided. Additionally, specific formats for attributes/features must be adhered to. Furthermore, the defined formats for attributes/features and the technical requirements for media data (see below) must be considered. Compliance with the content requirements is essential for successful product upload, and conducting a pre-validation for these attributes/features helps minimize potential errors during the product transfer.  Technical requirements for media data:   • File formats:    ○ Images: JPG, PNG   ○ Documents: PDF  • Minimum dimensions for images: 500x1000 px (including color tiles and energy labels)  • File name: No special characters or umlauts  • Color space: RGB - Color spaces such as CMYK are not supported  • Maximum image side for image: 4500 px         • Main image should be uploaded as a cutout. If not, it has to have a light, neutral background image (example: light gray, white, offwhite, light beige, etc.).  ## Utilize the MOIN as an identifier for further processes  Always verify if the MOIN has been correctly retrieved and stored for each SKU. It should always match the MOIN you´ve get via the [marketplace status](https://api.otto.market/docs#tag/Products-V3/operation/Products-V3__getMarketPlaceStatusList), and this check should be performed regularly. Please use the list retrieval with the **lastModified** parameter to instantly detect any recent changes. This helps to prevent errors in the second validation stage regarding competition-related issues with products. Additionally, the MOIN can also be used as an identifier for inventory updates. When a SKU gets a MOIN in the OTTO systems, the SKU is correctly created and inventory could be sent. Inventory updates for SKUs which are not correctly created will end up in an error. This approach helps minimize the number of requests and optimizes the overall workload.  ## Use Announced Orders for stock reservation  Before an order receives the status **PROCESSABLE** and is therefore ready for processing, the order remains in the status **ANNOUNCED** for approximately 30 minutes after the customer order has been placed. During this time, the customer is able to cancel all or part of their order directly in their customer account. Customer orders with **paymentMethod=Prepayment** can remain in ANNOUNCED status for up to 10 working days. It is therefore advisable to retrieve the ANNOUNCED orders and reserve inventory accordingly in your system. This can prevent overselling and the associated higher cancellation rate.  ## Consider the delivery type in the shipments  Whether or not a **returnTrackingKey** must be provided when submitting a shipment request depends on the attributes maintained for the respective product. Please note that for all products that were created with **deliveryType=PARCEL**, you must also provide a returnTrackingKey when submitting the shipment request.  # Use-Cases  ## How to list your first product  *This sections goal is to guide you through our API docs and help you list your first product on the OTTO Market. You´ll find short introductions to the steps to be taken followed by a link to the technical documentation for that step.*  To list a product you´ll have to do the following:  1. Authenticate 2. Read valid brands 3. Read valid categories 4. Post product 5. Check update-tasks 6. Check marketplace status 7. Create shipping profile 8. Update product delivery information 9. Update quantities  ### Authenticate At first you have to start by authenticating to the OTTO Market Server by posting your credentials to fetch an access token https://api.otto.market/docs#section/OTTO-Market-API-Developer's-Guide/Authentication-Options-for-OTTO-Market-API  ### Read valid brands Next you have to read the valid brands and find your relevant brand. You can only sell brands where the attribute \"usable\" = true. If you cannot find your brand, you have to create a new one by following the brand creation process in the OTTO Partner Connect Portal. https://api.otto.market/docs#tag/Products-V4/operation/Products-V4__getBrands  ### Read valid categories Following that you´ll need to read the valid categories to know which category to list your products in. You are also be able to read from the list which attributes are mandatory (fe when listing in a specific category and which attribute is relevant for increasing the visibility of a product. Here you have to look after **relevance** and **featureRelevance** to get more information about customer relevance the usage of the attribute on otto.de. All attributes with the **featureRelevance=LEGAL** are mandatory for creating a product. https://api.otto.market/docs#tag/Products-V4/operation/Products-V4__getCategoryGroups  ### Post product When you´ve gathered a valid brand and category, know which attributes you want to add and now it´s finally time to post your first product. By reading the documentation mentioned below you´ll learn which values (e.g. EAN, SKU, productDescription, ...) are required. Please note that the title on otto.de is created by OTTO using your information in the product data. The title is composed of individual fields such as \"category\", \"brandId\", \"productLine\"... The structure can be different for each category. An info about the structure you get also in the category list in the field \"title\". You´ll also find an example request for create or update product variants on this page. https://api.otto.market/docs#tag/Products-V4/operation/Products-V4__getPartnerProducts  ### Check update-tasks If you´ve posted your product from the step before, you´ll reveice an http 202 with different links in the response. In the next step you have to check for errors by addressing the \"Update-Tasks\". To get further information you have to proceed a get request with the \"self\" link. When the process state changed from \"pending\" to \"done\", you can fetch further information with the \"failed\", \"succeeded\" or \"unchanged\" link. In the response of the \"self\" link you also can see how much SKU can be found under which link. If there were errors you´ll have to solve these and post your updated product listing again. Don´t forget to check the update-tasks another time before carrying on. **Attention!** Posting the exact same data a second time is a bad idea since our server is configured to ignore duplicate listings. If a product data would have been ignored, you´ll find the information within the \"unchanged\" link. https://api.otto.market/docs#tag/Products-V4/operation/Products-V4__progressByProcessId  ### Check marketplace status Last validation step for your product is to check the marketplace status of your SKU. Through Update-Tasks you´ll see if there are technical errors you´ll have to solve. In the marketplace status you´ll see if there are non-technical errors you´ll have to solve. As well the \"moin\" will be shown in the marketplace status at first. We recommend to fetch the marketplace status for each SKU as a list with the parameter \"fromDate\" in a regularer basis to see \"errors\" and get the current \"moin\". https://api.otto.market/docs#tag/Products-V4/operation/Products-V4__getMarketPlaceStatusList  ### Create shipping profile After your product data is correct and could go live, you need to make sure that the SKU gets all transaction data to go visible for OTTO customer. You can either create your shipping profiles manually in the OTTO Partner Connect Portal or using the API. Besides the transportation and default processing time, you need to give information about the deliveryType, Cut-Off-Time and the working days. If you will offer products with different deliveryTypes, you would need to create more than one shipping profiles. Each shipping profile will get a shippingProfileId which should be used in the next step. You´ll also find an example request for create, update and get a shipping profile on this page. https://api.otto.market/docs#tag/ShippingProfiles-V1  ### Update product delivery information If you´ve created shipping profiles and successfully created your first SKUs, you can now add product delivery information to the correct SKUs. You can either work with the default processingTime configured in the shipping profile or update the processingTime for a specific SKU via the POST Request. To reduce error messages, just sent over product delivery information for SKU wherefore you have gotten a \"moin\" via the marketplace status. https://api.otto.market/docs#tag/Availability-V1/operation/Availability-V1__storeProductDeliveryInformationUsingPOST  ### Update quantities Lastly you´ll have to set the quantities of your product so customers can finally see and buy your product. To reduce error messages, just sent over quantities for SKU wherefore you have gotten a \"moin\" via the marketplace status. https://api.otto.market/docs#tag/Availability-V1/operation/Availability-V1__storeAvailableQuantitiesUsingPOST  **Congratulations!** You´ve successfully listed your first product on the OTTO Market. The next step is to regularly check for new orders. In the following case you can learn all about the order process and what you have to know about some specifics. [Click here to learn how to do that.](https://api.otto.market/docs#section/Use-Cases/Manage-an-order-from-start-to-finish) ## Manage an order from start to finish  *This sections goal is to guide you through our API docs and help you fulfilling your first order including subsequent activities on the OTTO Market. You´ll find short introductions to the steps to be taken followed by a link to the technical documentation for that step.*  To fulfill your first order and manage subsequent activities you´ll have to do the following:  1. Authenticate 2. Regularly check for new orders 3. Report order as shipped 4. Fetch purchase receipt 5. Regularly screen for return announcements 6. Process returns 7. Fetch refund receipt  ### Authenticate You´ll have to start by authenticating to the OTTO Market Server by posting your credentials to fetch an access token https://api.otto.market/docs#section/OTTO-Market-API-Developer's-Guide/Authorization-(OAuth2)  ### Regularly check for new orders Next you´ll have to regurlarly check for new orders to fulfill. We recommend checking several times a day. You´ll find the different fulfillment states orders can have, their descriptions and common use-cases listed at [this page](https://api.otto.market/docs#tag/Orders-V4). We also recommend to fetch orders in the **state=ANNOUNCED** for the reservation of quantity on your end. After the order switched to the **state=PROCESSABLE** (usually after 35 Minutes except for the paymentMethod=prepayment) the customer information will be visible in the order. To carry on with fulfilling your first order the state has to be = PROCESSABLE. https://api.otto.market/docs#tag/Orders-V4/operation/Orders-V4__findPartnerOrders  ### Report order as shipped Packaging the ordered items is next before you can hand them to your carrier and mark the order as shipped. We´ll call it a shipment from this point onward. Every shipment needs a **tracking key** and unless it´s a forwarder shipment you´ll also have to provide a **returnTrackingKey** upfront. If a returnTrackingKey is mandatory for a shipment is dependent on the deliveryType of the sku needed to fulfill in the shipment. You can manage the deliveryType for each sku within the productdata update process. Please read the following endpoint for all technical information: https://api.otto.market/docs#tag/Shipments-V1/operation/Shipments-V1__createdAndSentShipmentUsingPOST  If you want to fulfill a sku with more than one package, you´ll need to split the shipment and use [this endpoint](https://api.otto.market/docs#tag/Shipments-V1/operation/Shipments-V1__createdAndSentMultiparcelShipmentUsingPOST).  ### Fetch purchase receipt After the shipment was successfully created, a purchase receipts will be created on our end. These receipt will be shown to the customer in ther customer account. You can get the purchase receipt by using the receipts endpoint with the **receiptTypes=PURCHASE** as JSON. You also can fetch the receipt as PDF by using the **receiptNumber**. We recommend to use the parameter **receiptTypes** and the parameter **from** and **to**. You also can fetch receipts specifically for one order by using the parameter **salesOrderId**. For further information have a look in the description of the receipts api listed at [this page](https://api.otto.market/docs#tag/Receipts-V3) Please read the following endpoint for all technical information: https://api.otto.market/docs#tag/Receipts-V3/operation/Receipts-V3__getReceiptsUsingGET_5  ### Regularly screen for return announcements Customers may want to return their order wholly or partially. Return labels will be created through their customer interface and the return status will change to announced. The status misdirected is also displayed to inform you that a customer has mistakenly returned the product to otto. It is recommended to regularly check for announced and misdirected returns using the following endpoint: https://api.otto.market/docs#tag/Returns-V3/operation/Returns-V3__getPositionItemsForUsingGETV3  ### Process returns Received returns have to be checked by your warehouse and either accepted or rejected depending on the condition of the return. Accepting a return will lead to a customer repayment. You can accept returns using this endpoint: https://api.otto.market/docs#tag/Returns-V3/operation/Returns-V3__receiveAcceptedReturnsV3UsingPOSTV3  If the condition of the return is unacceptable you´re able to reject the return. If you do so you have to submit a reason for the rejection: https://api.otto.market/docs#tag/Returns-V3/operation/Returns-V3__receiveRejectedReturnsV3UsingPOSTV3  ### Fetch refund receipt After the return was successfully created, a refund receipts will be created on our end. These receipt will be also shown to the customer in ther customer account. You can get the refund receipt by using the receipts endpoint with the **receiptTypes=REFUND** as JSON. Our recommendations in fetching the return receipts are same as they are in fetching the purchase receipt. Use different parameter to filter your request and get your relevant information. For further information have a look in the description of the receipts api listed at [this page](https://api.otto.market/docs#tag/Receipts-V3) Please read the following endpoint for all technical information: https://api.otto.market/docs#tag/Receipts-V3/operation/Receipts-V3__getReceiptsUsingGET_5  **Congratulation!** You´ve successfully gone through the whole order processing process on the OTTO Market. You should know which request are necessary for you and which specifics you have to note. In the next step, we want to give you more information about after-sales processes. [Click here to learn how to do that.](https://api.otto.market/docs#section/Use-Cases/Manage-your-after-sales-actions)  ## Manage your after sales actions  *This sections goal is to guide you through our API docs and help you with your after sales actions. You will learn what kind of actions you can handle via the OTTO Market API and what you have to consider doing that. You´ll find short introductions to the steps to be taken followed by a link to the technical documentation for that step.*  To manage your after sales activities you´ll have to do the following:  1. Authenticate 2. Get in touch with customer 3. Get customer messages 4. Give subsequent discounts (price-reductions)  ### Authenticate You´ll have to start by authenticating to the OTTO Market Server by posting your credentials to fetch an access token https://api.otto.market/docs#section/OTTO-Market-API-Developer's-Guide/Authorization-(OAuth2)  ### Get in touch with customer After the customer ordered a product from you, you will receive an encrypted e-mail address in the order. The encrypted e-mail address is part of the invoice address and should be used only in certain cases for the execution of the shipment or return. These cases can take place before and after the shipment is done. i.e. if you have some detailed questions about the delivery address, changes of the trackingNumber, reason why you rejected the return and to clarify the remainder of the goods and so on. **Attention!** You must use as sender e-mail address the one that has been stored in the seller information for customer communication.  There could be also an e-mail address within the delivery address when a customer ordered a product which needs to be fulfilled via a forwarder agency. In this cases the correct e-mail address and phone number of the customer will be shown. **Attention!** You may only use this contact information to pass it on to the shipping company so that they can contact the customer to clarify the delivery date.  ### Get customer messages Customer are able to contact you in specific cases to the shipment, order or for product relevant questions directly through the customer portal. You will receive the e-mail in the OTTO Partner Connect section \"Customer Communication\" and are able to send your answer directly in the portal. You´ll also have the option to get all customer messages directly to the e-mail adress you´ve stores in the seller information in the OTTO Partner Connect. You can reply directly to incoming mails.  ### Give subsequent discounts (price-reductions) If a customer is unsatisfied with the condition of the item he or she will usually return it. Depending on the product and the condition the customer might be interested in keeping the product if a discount is given. Customers usually contact you or OTTO to discuss such an option. You can either grant discounts within the OTTO Partner Connect or via the API within the \"price-reduction\" endpoint. The following endpoint documentation describes how you´re able to provide such a \"price-reduction\": https://api.otto.market/docs#tag/Price-Reductions-V1/operation/Price-Reductions-V1__applyPriceReduction   # Sandbox  ### General **Sandbox is the test environment,** used for testing an API connection. It provides all the functionalities of the live OTTO Market Interface. All actions and orders there are simulated for testing purposes.  The login session and the API key in the sandbox environment are completely separated from the production environment.  REST API: **https://sandbox.api.otto.market**  ## Getting started Follow these steps to start testing on our sandbox environment:  1.  Make yourself familiar with sandbox functionalities. 2.  Request a sandbox API user:     As a **partner (seller)** you first have to make sure that your user have the role \"API-Zugriff\". You can then navigate to the [API-Zugriff](https://portal.otto.market/settings/API). There you can create a Sandbox App for yourself.     As a **service provider** please register in our [OTTO Market Service Partner Program](https://servicepartner.otto.market/). Follow all necessary steps and request the \"Sandbox Apps\" Permission to get access to create Sandbox Apps.  3.  Authenticate to our sandbox environment. As Partner have a look at the [Developer's Guide](https://api.otto.market/docs#section/OTTO-Market-API-Developer's-Guide/Authentication-Options-for-OTTO-Market-API) and as service provider have a look at the specific information in [Developer Program](https://api.otto.market/docs#section/Developer-Program/Access-to-Sandbox). 4.  Make yourself familiar with our [Best-Practice test cases](https://api.otto.market/docs#section/Sandbox/Best-Practice-test-cases) and download the testcase file 5.  Use our Order Generator to create fictional orders. See [Order Generator](https://api.otto.market/docs#section/Sandbox/Order-Generator)  below to know, which orders are created. 6.  Test the API functionality of your application.  ## Technical Advice Please note the following information: ### Authorization For the endpoint like all the other endpoints a valid authorization token has to be sent. If you need further information, please consult the [Developer's Guide](https://api.otto.market/docs#section/OTTO-Market-API-Developer's-Guide/Authentication-Options-for-OTTO-Market-API).  ### Sandbox Reset To prevent data overload, our sandbox and its orders are reset monthly at first Sunday from 6 p.m. to 10 p.m.\\ Any dynamic data (shipments, returns) is deleted. Old shipments will not be available anymore.\\ Therefore, you have to create new orders every month.  ### Customer-Interactions in Sandbox Since there are no real costumers, all interfaces which work with customer data will either mock customer data or reduce the functionalities i.e. returns cannot be announced. Hence, the GET endpoint of returns is retrieving an empty string.  ### Product validation Submitted product data is validated in two steps, which will be explainded further on:  **Attention:** Since the sandbox is missing a direct shop integration the second validation is simulated. For more details on how to test these functionalities, please have a look into our [Best-Practise test cases](https://api.otto.market/docs#section/Sandbox/Best-Practice-test-cases), where you can find specific EANs for testing purposes.  **1. Technical validation**  The first technical validation (syntax and required attributes) takes place after you´ve sent product data using a POST request. Read more about uploading products [here](https://api.otto.market/docs#tag/Products-V3/operation/Products-V3__createOrUpdateProductVariations). If your http request was successful (http response state 202), you´ll be provided with four different links (pending, succeeded, failed, unchanged). Following the links you´ll be able to check which products have been successfully listed, failed, unchanged or are still being processed.  |Status|Explanation| |:-|:-| |Pending|The product listing is still being processed| |Succeeded|The shown products listing was successful| |Failed|Listing of all shown products has failed| |Unchanged|The request for the listed products is unchanged to the last request|  **2. Shop validation**  The second step is the shop validation. Results of the shop validation are retrievable using the **marketplace-status endpoint**. Please read the following [documentation](https://api.otto.market/docs#tag/Products-V3/operation/Products-V3__getMarketPlaceStatusList) on how to use the marketplace status endpoint. Submitted product data always has one of the following four marketplace statuses:  | Status     | Explanation                                                                                                                                                                       | |------------|-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------| | Pending    | Submitted product data is currently proceeded.                                                                                                                                    | | Online     | The SKU is displayed at otto.de. You can find the SKU using the shop link. <br />In some cases, additional information will be shown on how to improve the visibility on otto.de. | | Restricted | The SKU is not displayed at otto.de because of an error shown within the error’s container.                                                                                       | | Inactive   | The SKU was set inactive via the active-status endpoint and could be reactivated via the active-status endpoint.                                                                  |  **Attention:** Since the sandbox is missing a direct shop integration the second validation is simulated. For more details on how to test these functionalities, please have a look into our [Best-Practise test cases](https://api.otto.market/docs#section/Sandbox/Best-Practice-test-cases), where you can find specific EANs for testing purposes.  ## Order Generator To test your API implementation you can generate test orders only on the sandbox environment by sending an empty POST request to the following generation endpoint:  [https://sandbox.api.otto.market/v4/orders/testorders]()  This will run 8 predefined scenarios on our sandbox. After the POST request, you will receive 6 orders in \"PROCESSABLE\" status with different combinations of positions and items (e.g. standard and freight delivery). You will also receive 1 prepayment order in \"ANNOUNCED\" and 1 order in \"CANCELLED_BY_MARKETPLACE\" status.  The generated orders will contain one or more position items with the following products:  | Product Title                       | EAN           | SKU                   | |-------------------------------------|---------------|-----------------------| | Smartphone »CallMe 1000«            | 1245780164732 | SmartCM1000-schwarz-1 | | Fancy Shirt »Flower«                | 4851278936452 | FancyFlower-m-pi      | | Rasenmaeher »Turbo V1«              | 9821393948573 | 0440-Rasen-T-V1       | | Spedition Wohnlandschaft 3.tlg.     | 8263748321943 | Sped-Wohn-3-98735     | | Spedition Kühlschrank »COOL EXTREM« | 7263000981290 | Sped-Kühl084-kombi    |  Scenarios:  | Scenarios        | Status                   | Comment                                                                                                              | |------------------|--------------------------|----------------------------------------------------------------------------------------------------------------------| | 1, 2, 3, 4, 7, 8 | PROCESSABLE              | Scenario 4 inclusive discount                                                                                        | | 5                | ANNOUNCED                | Order with payment method PREPAYMENT awaiting customer's payment<br>Order includes weeePickup on position item level | | 6                | CANCELLED_BY_MARKETPLACE | Order with payment method PREPAYMENT which has been cancelled since the customer didn't pay                          |  Please use the generated orders to test the interaction with Orders, Shipments and Returns.  If you want to create a single scenario you can do that by sending an empty POST to:  [https://sandbox.api.otto.market/v4/orders/testorders/scenario\\{scenarionumber\\}]()  e.g. [https://sandbox.api.otto.market/v4/orders/testorders/scenario1]()  ## Best-Practice test cases  We´ve come up with mulitple test cases to help you test the basic functionalities needed for each endpoint when offering your service to an OTTO Market Seller. The test cases should be tested within the sandbox environment. If you´re interested in feedback from our service provider management you can send screenshots of the test results [here](https://account.otto.market/s/ticketanlegen?category=Supportrequest&Unterkategorie=technicalInterfaces&Interface__c=api&Subject=%5BOTTO+Market+API%5D+Service+Partner+Test+Cases).  The Best-Practice testcases should help you as a developer to understand the behavior and the interdependencies between different APIs. With the test cases you can get hints for testing the interfaces and to reproduce the [Use-Cases](https://api.otto.market/docs#section/Use-Cases) within the sandbox-environment.  We´re referring to the test orders created using the *test order generator* within the sandbox environment. Please read the section [Order Generator](https://api.otto.market/docs#section/Sandbox/Order-Generator) on how to create test orders.  You can download a file where you can find the Best-Practice test cases [here](https://live.divae.developer.otto.market/_Resources/Persistent/1/d/1/7/1d17e046750554dbdb01d15aba7a53aa989d0e4e/Best-Practice-Testcases.xlsx).   # Developer Program This section describes how a service provider can integrate with OTTO Market API. The developer program aims at equipping the service providers with authentication and authorization for accessing the OTTO Market API `on behalf of the partner`.  ## Target Group The Developer Program is intended primarily for service providers who want to exchange data for OTTO Market Partners and offer their service to other sellers. OTTO Market Partners who would like to develop their own OTTO Market API connection use their own API user and can find more information [here](https://api.otto.market/docs#section/OTTO-Market-API-Developer's-Guide/Authentication-Options-for-OTTO-Market-API).  ## Registration as Service Provider If you want to register as a service provider who needs to access Partner data, please follow the steps at [servicepartner.otto.market](https://servicepartner.otto.market/register). You'll receive email notifications for any approval / denial of registration requests.  After submitting your registration you will get access to the basic functionalities of our portal. To tailor your experience and unlock additional features, head over to the Permission Management Section. To start the journey you have to request your first permission for creating Sandbox Apps. With our confirmation, you will receive 30 days' test access to the sandbox environment for getting to know the inferfaces and estimate your effort without completing the registration process. If you decide to integrate, complete the registration by filling out the self-disclosure form. You will receive the form at the end of the 30-day test access period. We will grant you unlimited sandbox access afterwards.  At the point when you decide to go live and roll-out your service, you can request the permission for creating private production apps in the permission management. You need to start working with the production environment in private access first for test and learn with pilot integrations. Afterwards you can request public production access by request the right permission.  For more information about the registration and integration process, please have a look at [servicepartner.otto.market](https://servicepartner.otto.market).  ## Private and Public Access for Service Provider  Once you´ve done with testing, requested the permission **private production apps** and we cofirmed the permission, you can now create private apps in the Production environemnt.  (Read more about the difference between private and public apps [here](/docs#section/Developer-Program/Private-and-Public-Apps).)  ### Getting Public Access  If you want to get public access follow the steps below:  1. Login to OTTO Partner Connect portal and navigate to the Permission Management 2. Request the permission \"Public Production Apps\" 3. Select necessary scopes for your public access 4. Done! Your request will be reviewed by OTTO Market. You'll receive email notifications for approval / denial of your request.  *Please note: OTTO Market will perform a quality check for each selected scope. You only can go public after passed the quality check and finished an OTTO Market Training. The colleagues will give you more information during the integration process.*  ## Private and Public Apps  #### Private Apps  Private apps can be created by developer with the permission \"Private Production Apps\". If a OTTO Market partner wants to install a private app, an unique app invitation link (\"Einladungslink\") is required.  **Generate an app invitation link** You can generate an unique app invitation link for an app by following the steps below:  1. Login to the [OTTO Partner Connect](https://portal.otto.market/profile/Dienstleisterprofil) portal. 2. Navigate to the [OTTO Market Apps](https://portal.otto.market/app-management/service-provider/apps) and [Sandbox Apps](https://portal.otto.market/app-management/sp-sandbox-apps/apps) page for production and sandbox apps respectively. 3. Click on the three dots (…) right to the app name for which you want to create an invitation link. 4. In the dropdown menu select \"Einladungslink generieren\". 5. A popup window will be displayed. Copy the link from this window - it will not show up again. 6. Done! You can now share the app invitation link with a OTTO Market partner.  `Note:` You should be aware of the following: - After closing the popup window with the invitation link you won't be able to see this exact invitation link again. - You can create as much invitation links as you want to. - There is no possibility to show all invitation links created for a specific app. - Every app invitation link is only valid for 24 hours and can be used only once. (When it is used or expired the link will become invalid and you have to create a new one.) - If a partner clicks on the link but don't grant consent the link remains valid (until it is either expired or consent is granted).  #### Public Apps  Public apps can only be created developer with the permission \"Public Production Apps\". (For getting public access refer to [Getting Public Access](https://api.otto.market/docs#section/Developer-Program/Access-to-Production).) In order to install a public app, an universally valid installation link (\"Installationslink\") is required. After creating a public app this link is displayed in the app details page. You can share this link whereever you want. You can also add an optional parameter \"state\" to this installation link, which preserves the state of your application page and returns user back to that state after they install. If this optional parameter exists, the user will be redirected to app's callback URL along with the optional state. But be aware that it is universally valid meaning you cannot control which partner will install your app.  ## Scopes  Scopes corresponds to [OAuth scopes](https://oauth.net/2/scope/). They are used for providing fine-grained access control to the OTTO Market APIs. Scopes need to be used via the authorization in the client credential flow or the authorization code flow.   ### Scopes for OTTO Market APIs The below table gives mapping of displayed scope names in UI to the scope names to be used for fetching token  | Display Name      | Scope Name (To be used in fetching token) | |-------------------|-------------------------------------------| | Installation      | installation                              | | PartnerId         | partnerId                                 | | Developer         | developer                                 | | Products          | products                                  | | Orders            | orders                                    | | Receipts          | receipts                                  | | Returns           | returns                                   | | Price Reduction   | price-reduction                           | | Shipments         | shipments                                 | | Quantities        | quantities                                | | Shipping Profiles | shipping-profiles                         | | Availability     | availability                              |  ### Content declaration of available scopes  #### Installation The installation interface allows a service provider to get the installation details of a Partner  #### PartnerId The partnerId interface allows a service provider, access to the partner's partner id.  #### Developer The developer interface allows a service provider to fetch an installation token  #### Products  The product interfaces allow partners to manage their product data in the OTTO Market, which means to send products for publishing on OTTO.de, to view the sent data, and to manage the visibility of the products on otto.de.  Read more about the technical possibilities [here](https://api.otto.market/docs#tag/Products-V4).  #### Quantities - depcrecated and will be shut down to the end of March 25. Use the Availability Interface for updating quantities.  Once the products have been successfully transmitted using the products scope, only the quantities are missing to make the products available to the end customer on otto.de. For this purpose the Quantity Interface allows partners and service providers to update the available quantity for a specific SKU.  Read more about the technical possibilities [here](https://api.otto.market/docs#tag/Quantities-V2).  #### Shipping Profiles  With this interface you can create, change and manage shipping profiles of the otto market partners.   Read more about the technical possibilities [here](https://api.otto.market/docs#tag/ShippingProfiles-V1).  #### Availability  Once the products have been successfully transmitted using the products scope, your need to send quantities to make the products available to the end customer on otto.de.  As well you need to connect the sku to existing shipping profiles for the delivery information.  For this purpose the Availability Interface allows partners and service providers to update necessary information to make a SKU available on otto.de.  Read more about the technical possibilities [here](https://api.otto.market/docs#tag/Availability-V1).  #### Orders  This interface allows partners and service providers to view orders and associated position items. It also allows to send cancellations on order and position item level.  Read more about the technical possibilities [here](https://api.otto.market/docs#tag/Orders-V4).  #### Shipments  This interface should be used to report that shipments have been handed over to the carrier for final delivery to the customer. You can also get access to Return-Shipments for retrieving track and trace data for returns from the customer to the partner warehouse.  Shipments - Read more about the technical possibilities [here](https://api.otto.market/docs#tag/Shipments-V1). Return-Shipments - Read more about the technical possibilities [here](https://api.otto.market/docs#tag/ReturnShipments-V1).  #### Returns  This scope enables the user to manage returns. This includes retrieving a list of announced returns, accepting and declining returns.  Read more about the technical possibilities [here](https://api.otto.market/docs#tag/Returns-V3).  #### Receipts  OTTO Market provides receipts to the customers to document financial processes. The scopes enables users to download these documents as a PDF or a JSON.  Read more about the technical possibilities [here](https://api.otto.market/docs#tag/Receipts-V2).  #### Price Reduction  This endpoint enables sellers to apply price reductions to shipped products if the customer is unsatisfied and asks for a partial refund instead of returning the product completely.  Read more about the technical possibilities [here](https://api.otto.market/docs#tag/Price-Reductions-V1).  ## Sandbox vs Production Sandbox apps are used to test your API in sandbox environment, when you are approved for the permission \"Sandbox Apps\" by the OTTO Market team. These apps have unrestricted scopes access, so you can create sandbox apps for any scope even if you don´t need them in the production environment. For creating and testing with sandbox apps, please see [Access to Sandbox](https://api.otto.market/docs#section/Developer-Program/Access-to-Sandbox).  As the name states, production apps are for production environment. This can be created after you have an approval from OTTO Market team for the permission \"Private Production Apps\". Once you have the approval, you can request for \"Public Production Apps\", to create public apps. An OTTO Market Partner has to provide consent, in order for you to access their production data. The detailed flow is described in the [Access to Production](https://api.otto.market/docs#section/Developer-Program/Access-to-Production) section below.   ## Access to Sandbox Once your permission request for \"Sandbox Apps\" is approved, you can start using [Sandbox Apps](https://portal.otto.market/app-management/sp-sandbox-apps/apps).  ### Creating sandbox test users In [Usermanagement UI](https://portal.otto.market/settings/Nutzerverwaltung) Service Providers can create their own test users for sandbox. This test user can be used for authenticating against sandbox apps  Valid email is required for sandbox users. Upon creation of user, a password setting mail will be sent to the given sandbox user emailId  **Please note:** Sandbox users are considered as part of the service provider count itself. You can create a max of 10 users (service providers + sandbox) by default.  Please also have a look in the [Download section](https://servicepartner.otto.market/en/downloads/downloads.html) of servicepartner.otto.market. There you can find a Step-by-Step Sandbox guide for testing the integration ([here](https://live.divae.servicepartner.otto.market/_Resources/Persistent/1/7/6/b/176bc5208c1cf57e27bf58b98c10752306920a50/Sandbox%20guide%20for%20testing%20the%20integration%20of%20a%20retailer.pdf)).  ### Creating sandbox apps In create apps UI, you need to provide the following details, - unique name - homepage URL - authorization callback URL - Refer below section for more info - [scopes](docs#section/Developer-Program/Scopes) - All scopes will be listed in sandbox. - app type - Refer [Private and Public Apps](docs#section/Developer-Program/Private-and-Public-Apps) for more info  #### Post Installation Redirect URL Test Partner will be redirected to your post installation redirect URL after successfully installing your app.  #### Authorization callback URL 1. Post successful redirection, you will initiate authorization code flow. Test Partner logs in with their credential. On verifying identity, partner will be redirected to your app's authorization callback URL with auth code. 2. If you intend to incorporate query parameters in your REDIRECT_URI, ensure to suffix the url with an asterisk (*)  #### App ID A unique app ID which will be used for identifying a service provider app. When a partner installs this app, this app ID will be used for fetching the installation details.  #### Installation Link This unique, publicly accessible link will be used by OTTO Market partners for installation. An optional parameter \"state\" can be added to the link to preserve the state of application page. If the parameter exists, the user will be redirected to app's callback URL along with this parameter. You can simply use this link as a hyperlink into your website.  #### Client ID & Client Secret Credentials to be used for authenticating & authorising your app with OTTO authorisation server for fetching installation details of partner  #### Version Denotes the version of the app  #### Version End Date This version will remain functional until the specified date. Any changes must be scheduled at least 4 weeks in advance(Note:- Once an app version end date is set, it cannot be modified. Please contact the helpdesk if an update is required.)  #### Activation Date Date when communication with partners begins for a new version release.  ## Access to Production Once you are satisfied with everything you have tested in the sandbox, you can request the permission \"Public Production Apps\" in the permission management in the OTTO Partner Connect Portal. When approved, you can start creating production apps using [OTTO Market Apps](https://portal.otto.market/app-management/service-provider/apps) in OTTO Partner Connect.  ### Creating apps In create apps UI, you need to provide the following details, - unique name - homepage URL - authorization callback URL - Refer below section for more info - [scopes](docs#section/Developer-Program/Scopes) - Only scopes approved for you will be shown - app type (only if the service provider has public access)  #### Post Installation Redirect URL Partner will be redirected to your post installation redirect URL after successfully installing your app.  #### Authorization callback URL 1. Post successful redirection, you will initiate authorization code flow. Partner logs in with their credential. On verifying identity, partner will be redirected to your app's authorization callback URL with auth code. 2. If you intend to incorporate query parameters in your REDIRECT_URI, ensure to suffix the url with an asterisk (*)  #### App ID A unique app ID which will be used for identifying a service provider app. When a partner installs this app, this app ID will be used for fetching the installation details.  #### Installation Link This unique, publicly accessible link will be used by OTTO Market partners for installation. An optional parameter \"state\" can be added to the link to preserve the state of application page. If the parameter exists, the user will be redirected to app's callback URL along with this parameter. You can simply use this link as a hyperlink into your website.  #### Client ID & Client Secret Credentials to be used for authenticating & authorising your app with OTTO authorisation server for fetching installation details of partner  #### Version Denotes the version of the app  #### Version End Date This version will remain functional until the specified date. Any changes must be scheduled at least 4 weeks in advance.(Note:- Once an app version end date is set, it cannot be modified. Please contact the helpdesk if an update is required.)  #### Activation Date Date when communication with partners begins for a new version release.  ### Extend scopes on an existing App If you want to add more scopes to an existing app, use the \"extend scopes\" functionality to select the additional scopes you wish to access. When you extend the scopes, a new version of the app will be created, replicating the previous app and retaining its values. Please note that the appName cannot be edited, but all other configurations can be modified if needed. ### Why extend scopes instead of creating a new app? - You should create a new app if you have a completely new use case or functionality that you want to exclude from your general service I.e. you are implementing a completely new API interface with new functions on your site and you are expanding the range of the service that you are offering on the OTTO Market. - However, if you only need to access new scopes while retaining the existing app configurations, extending the scopes is the preferred option. - When you extend the scopes, a new version of the app is created, as mentioned earlier. Partners who installed the previous version will be automatically notified once the activation date is reached that a new version is available. They can then choose whether or not to install the new version. - The main advantage of extending the scope of an existing app is the automated and simplified communication by OTTO. OTTO Market Partners will be notified via email and banners in the OTTO Partner Connect portal. This greatly reduces the communication effort required to migrate partners on your side. ## Installation of app by an OTTO Partner (Sandbox | Production)  <img src=\"/docs/app_installation_flow.jpg\" alt=\"App Installation\"/>   1. **Share the Installation Link with a `state` Parameter (Optional)**      The application's installation link can be shared with your partners in the following ways. If needed, include a \"state\" parameter for tracking the installer:    - Through your platform or portal.   - Via an email sent to your partners.   - Through OPC for a versioned app (when upgrading via OPC, adding a `state` param might not be possible).     Your partner then navigates to the installation link and installs the app.     **Security Notes:**   - If you include a `state` parameter, ensure it does not expose any sensitive data such as `userId` or similar information. Instead, consider using a secure, random, unguessable value that is only understandable by your system. This value should be valid for a limited time (e.g., 2 minutes) and should be tied to the specific installer session.   - One way to achieve this is by generating a random token that can be mapped to the installer’s identity within your system. This token should be designed to be unguessable and resistant to attacks, such as using UUIDs or secure random generators.  2. **Redirect to Post-Installation URL and Authenticate the Installer**      After installation, your partner is redirected to your app’s post-installation URL. If a `state` parameter was included, it will be appended to this URL. At this point, you must authenticate the installer using your IDP.    - Upon landing at the post-installation URL, authenticate the installer using your IDP.   - Once authenticated, store the installer’s identity (e.g., unique installer ID) for linking purposes.   3. **Authenticate the User Against OTTO’s IDP Using OAuth2 Authorization Code Flow**      After authenticating the user with your IDP, initiate the OAuth2 Authorization Code Flow with OTTO’s IDP. During this process:    - Pass the installer’s identity (or a relevant identifier) as a custom query parameter in the `redirect_uri` (e.g., `installer_id` or similar). This is for the purpose of linking the `installationId` obtained from OTTO to the corresponding installer ID in your system.   - You can use any query parameter name (e.g., `installer_id`) in the `redirect_uri` that suits your needs, as long as your system understands it.     **Security Recommendation for Installer Identity:**   - Instead of passing the raw `installerId`, consider passing an encrypted or random, unguessable token that is valid for a short time. For example, generate a token that combines a timestamp (for time-based validity) and a secure random value (e.g., `encrypt(randomToken + currentTime)`). This value should only be understandable by your system and be mapped to the installer’s identity.     3.1 **Redirect the User to OTTO’s Authorization Endpoint:**      Use the scopes `installation` and `partnerId` to initiate the flow. For example:     ```     https://sandbox.api.otto.market/oauth2/auth?response_type=code&client_id={CLIENT_ID}&redirect_uri={YOUR_REDIRECT_URI}&scope=installation%20partnerId    ```     3.2 **User Logs in and Authorizes the App:**      The user logs in and verifies their identity through OTTO’s login page.     3.3 **Receive Authorization Code:**      Upon successful authorization, your app will receive the authorization code at the specified redirect URI.     3.4 **Exchange the Authorization Code for an Access Token:**      Make a POST request to the token endpoint to get an access token:     ```plaintext    POST /oauth2/token HTTP/1.1    Host: sandbox.api.otto.market or api.otto.market    Content-Type: application/x-www-form-urlencoded     grant_type=authorization_code&client_id={yourClientId}&client_secret={yourClientSecret}&code={yourAuthorizationCode}&redirect_uri={https://yourApp/callback}    ```  For more information on implementing the OAuth2 Authorization Code Flow, please refer to the [OAuth 2.0 Authorization Code](https://tools.ietf.org/html/rfc6749#section-4.1) section of the OAuth2 standard documentation. You can retrieve the necessary endpoints from the OpenID Connect well-known configuration:  - Sandbox Well-Known Endpoint: [Sandbox Well-Known Endpoint](https://sandbox.api.otto.market/sec-api/auth/realms/deepsea-sandbox/.well-known/openid-configuration) - Production Well-Known Endpoint: [Production Well-Known Endpoint](https://api.otto.market/sec-api/auth/realms/otto-partner/.well-known/openid-configuration)  **Note:**   If your app’s post-installation URL is the same as the OAuth2 callback URL, passing the installer’s ID in the `redirect_uri` is unnecessary, as you’ve already retained it.  4. **Retrieve and Link the Installation ID with the Installer’s Identity**      Once you have authenticated the user against OTTO’s IDP, retrieve the installation ID:     ```plaintext    GET /v1/apps/{appId}/installation HTTP/1.1    Host: sandbox.api.otto.market or api.otto.market    Authorization: Bearer {access_token}    ```     **Response:**     ```json    {      \"installationId\": \"string\",      \"appVersion\": \"V3\",      \"existingInstallations\": [        {          \"installationId\": \"string\",          \"state\": \"ENABLED\",          \"appVersion\": \"V1\"        }      ]    }    ```     **Note:**      For first-time installations, no values will appear under `existingInstallations`. Store the installation ID alongside the installer’s identity in your system.  5. **Fetch a Developer Access Token Using Client Credentials Flow**      To fetch a developer access token, implement the Client Credentials Flow:     ```plaintext    POST /oauth2/token HTTP/1.1    Host: sandbox.api.otto.market or api.otto.market    Content-Type: application/x-www-form-urlencoded     grant_type=client_credentials&client_id={CLIENT_ID}&client_secret={CLIENT_SECRET}&scope=developer    ```     Replace `{CLIENT_ID}` and `{CLIENT_SECRET}` with your client details.  6. **Retrieve an Installation Access Token and Access OTTO Market APIs**      With the developer access token, obtain an installation access token by making a POST request:     ```plaintext    POST /v1/apps/{appId}/installations/{installationId}/accessToken HTTP/1.1    Host: sandbox.api.otto.market or api.otto.market    Authorization: Bearer {access_token}    Content-Type: application/x-www-form-urlencoded     scope={SCOPE_VALUES}    ```     **Response:**     ```json    {      \"access_token\": \"token\",      \"expires_in\": 1800    }    ```  Please note that in step 6, the Host header should be either `sandbox.api.otto.market` or `api.otto.market`. Additionally, the Authorization header should include the value `Bearer {access_token}` obtained in step 5.  You can now use this installation access token to authenticate your requests when accessing OTTO Market APIs. Include the access token in the Authorization header with the value Bearer {access_token} for subsequent API calls. Please note that once the access token expires, repeat steps 5 and 6 to obtain a new access token and installation access token respectively. Use the updated tokens for continued access to OTTO Market APIs.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.62
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace cbdesk\otto\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use cbdesk\otto\Client\ApiException;
use cbdesk\otto\Client\Configuration;
use cbdesk\otto\Client\HeaderSelector;
use cbdesk\otto\Client\ObjectSerializer;

/**
 * AvailabilityV1Api Class Doc Comment
 *
 * @category Class
 * @package  
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AvailabilityV1Api
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation availabilityV1GetAvailableQuantities
     *
     * get quantities from a partner (up to 200 per request).
     *
     * @param  string $authorization Access Token (required)
     * @param  int $limit The maximum number of available quantities to be returned in each response. (optional, default to 200)
     * @param  int $page Page number (0..N) (optional, default to 0)
     * @param  string $cursor Cursor for paging requests. If a cursor is provided, the only other request parameter being considered is &#x27;limit&#x27;. The cursor value is the last evaluted sku in the request response (Needs to be a valid sku value) (optional)
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\cbdesk\otto\Client\Model\AvailableQuantityResponseAvailabilityV1
     */
    public function availabilityV1GetAvailableQuantities($authorization, $limit = '200', $page = '0', $cursor = null)
    {
        list($response) = $this->availabilityV1GetAvailableQuantitiesWithHttpInfo($authorization, $limit, $page, $cursor);
        return $response;
    }

    /**
     * Operation availabilityV1GetAvailableQuantitiesWithHttpInfo
     *
     * get quantities from a partner (up to 200 per request).
     *
     * @param  string $authorization Access Token (required)
     * @param  int $limit The maximum number of available quantities to be returned in each response. (optional, default to 200)
     * @param  int $page Page number (0..N) (optional, default to 0)
     * @param  string $cursor Cursor for paging requests. If a cursor is provided, the only other request parameter being considered is &#x27;limit&#x27;. The cursor value is the last evaluted sku in the request response (Needs to be a valid sku value) (optional)
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \\cbdesk\otto\Client\Model\AvailableQuantityResponseAvailabilityV1, HTTP status code, HTTP response headers (array of strings)
     */
    public function availabilityV1GetAvailableQuantitiesWithHttpInfo($authorization, $limit = '200', $page = '0', $cursor = null)
    {
        $returnType = '\\cbdesk\otto\Client\Model\AvailableQuantityResponseAvailabilityV1';
        $request = $this->availabilityV1GetAvailableQuantitiesRequest($authorization, $limit, $page, $cursor);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\\cbdesk\otto\Client\Model\AvailableQuantityResponseAvailabilityV1',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation availabilityV1GetAvailableQuantitiesAsync
     *
     * get quantities from a partner (up to 200 per request).
     *
     * @param  string $authorization Access Token (required)
     * @param  int $limit The maximum number of available quantities to be returned in each response. (optional, default to 200)
     * @param  int $page Page number (0..N) (optional, default to 0)
     * @param  string $cursor Cursor for paging requests. If a cursor is provided, the only other request parameter being considered is &#x27;limit&#x27;. The cursor value is the last evaluted sku in the request response (Needs to be a valid sku value) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function availabilityV1GetAvailableQuantitiesAsync($authorization, $limit = '200', $page = '0', $cursor = null)
    {
        return $this->availabilityV1GetAvailableQuantitiesAsyncWithHttpInfo($authorization, $limit, $page, $cursor)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation availabilityV1GetAvailableQuantitiesAsyncWithHttpInfo
     *
     * get quantities from a partner (up to 200 per request).
     *
     * @param  string $authorization Access Token (required)
     * @param  int $limit The maximum number of available quantities to be returned in each response. (optional, default to 200)
     * @param  int $page Page number (0..N) (optional, default to 0)
     * @param  string $cursor Cursor for paging requests. If a cursor is provided, the only other request parameter being considered is &#x27;limit&#x27;. The cursor value is the last evaluted sku in the request response (Needs to be a valid sku value) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function availabilityV1GetAvailableQuantitiesAsyncWithHttpInfo($authorization, $limit = '200', $page = '0', $cursor = null)
    {
        $returnType = '\\cbdesk\otto\Client\Model\AvailableQuantityResponseAvailabilityV1';
        $request = $this->availabilityV1GetAvailableQuantitiesRequest($authorization, $limit, $page, $cursor);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'availabilityV1GetAvailableQuantities'
     *
     * @param  string $authorization Access Token (required)
     * @param  int $limit The maximum number of available quantities to be returned in each response. (optional, default to 200)
     * @param  int $page Page number (0..N) (optional, default to 0)
     * @param  string $cursor Cursor for paging requests. If a cursor is provided, the only other request parameter being considered is &#x27;limit&#x27;. The cursor value is the last evaluted sku in the request response (Needs to be a valid sku value) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function availabilityV1GetAvailableQuantitiesRequest($authorization, $limit = '200', $page = '0', $cursor = null)
    {
        // verify the required parameter 'authorization' is set
        if ($authorization === null || (is_array($authorization) && count($authorization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $authorization when calling availabilityV1GetAvailableQuantities'
            );
        }

        $resourcePath = '/v1/availability/quantities';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit, 'int32');
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page, 'int32');
        }
        // query params
        if ($cursor !== null) {
            $queryParams['cursor'] = ObjectSerializer::toQueryValue($cursor, null);
        }
        // header params
        if ($authorization !== null) {
            $headerParams['Authorization'] = ObjectSerializer::toHeaderValue($authorization);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

            // // this endpoint requires Bearer token
            if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
            }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation availabilityV1GetAvailableQuantityBySku
     *
     * get quantity for a sku
     *
     * @param  string $authorization Access Token (required)
     * @param  string $sku The sku for the available quantity (required)
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\cbdesk\otto\Client\Model\AvailableQuantitySingleResponseDTOAvailabilityV1
     */
    public function availabilityV1GetAvailableQuantityBySku($authorization, $sku)
    {
        list($response) = $this->availabilityV1GetAvailableQuantityBySkuWithHttpInfo($authorization, $sku);
        return $response;
    }

    /**
     * Operation availabilityV1GetAvailableQuantityBySkuWithHttpInfo
     *
     * get quantity for a sku
     *
     * @param  string $authorization Access Token (required)
     * @param  string $sku The sku for the available quantity (required)
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \\cbdesk\otto\Client\Model\AvailableQuantitySingleResponseDTOAvailabilityV1, HTTP status code, HTTP response headers (array of strings)
     */
    public function availabilityV1GetAvailableQuantityBySkuWithHttpInfo($authorization, $sku)
    {
        $returnType = '\\cbdesk\otto\Client\Model\AvailableQuantitySingleResponseDTOAvailabilityV1';
        $request = $this->availabilityV1GetAvailableQuantityBySkuRequest($authorization, $sku);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\\cbdesk\otto\Client\Model\AvailableQuantitySingleResponseDTOAvailabilityV1',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation availabilityV1GetAvailableQuantityBySkuAsync
     *
     * get quantity for a sku
     *
     * @param  string $authorization Access Token (required)
     * @param  string $sku The sku for the available quantity (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function availabilityV1GetAvailableQuantityBySkuAsync($authorization, $sku)
    {
        return $this->availabilityV1GetAvailableQuantityBySkuAsyncWithHttpInfo($authorization, $sku)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation availabilityV1GetAvailableQuantityBySkuAsyncWithHttpInfo
     *
     * get quantity for a sku
     *
     * @param  string $authorization Access Token (required)
     * @param  string $sku The sku for the available quantity (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function availabilityV1GetAvailableQuantityBySkuAsyncWithHttpInfo($authorization, $sku)
    {
        $returnType = '\\cbdesk\otto\Client\Model\AvailableQuantitySingleResponseDTOAvailabilityV1';
        $request = $this->availabilityV1GetAvailableQuantityBySkuRequest($authorization, $sku);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'availabilityV1GetAvailableQuantityBySku'
     *
     * @param  string $authorization Access Token (required)
     * @param  string $sku The sku for the available quantity (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function availabilityV1GetAvailableQuantityBySkuRequest($authorization, $sku)
    {
        // verify the required parameter 'authorization' is set
        if ($authorization === null || (is_array($authorization) && count($authorization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $authorization when calling availabilityV1GetAvailableQuantityBySku'
            );
        }
        // verify the required parameter 'sku' is set
        if ($sku === null || (is_array($sku) && count($sku) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sku when calling availabilityV1GetAvailableQuantityBySku'
            );
        }

        $resourcePath = '/v1/availability/quantities/{sku}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($authorization !== null) {
            $headerParams['Authorization'] = ObjectSerializer::toHeaderValue($authorization);
        }

        // path params
        if ($sku !== null) {
            $resourcePath = str_replace(
                '{' . 'sku' . '}',
                ObjectSerializer::toPathValue($sku),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

            // // this endpoint requires Bearer token
            if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
            }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation availabilityV1GetDeliveryInformationBySKU
     *
     * get product delivery information for a SKU
     *
     * @param  string $authorization Access Token (required)
     * @param  string $sku the sku in string format (required)
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\cbdesk\otto\Client\Model\ProductDeliveryInformationResponseDTOAvailabilityV1
     */
    public function availabilityV1GetDeliveryInformationBySKU($authorization, $sku)
    {
        list($response) = $this->availabilityV1GetDeliveryInformationBySKUWithHttpInfo($authorization, $sku);
        return $response;
    }

    /**
     * Operation availabilityV1GetDeliveryInformationBySKUWithHttpInfo
     *
     * get product delivery information for a SKU
     *
     * @param  string $authorization Access Token (required)
     * @param  string $sku the sku in string format (required)
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \\cbdesk\otto\Client\Model\ProductDeliveryInformationResponseDTOAvailabilityV1, HTTP status code, HTTP response headers (array of strings)
     */
    public function availabilityV1GetDeliveryInformationBySKUWithHttpInfo($authorization, $sku)
    {
        $returnType = '\\cbdesk\otto\Client\Model\ProductDeliveryInformationResponseDTOAvailabilityV1';
        $request = $this->availabilityV1GetDeliveryInformationBySKURequest($authorization, $sku);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\\cbdesk\otto\Client\Model\ProductDeliveryInformationResponseDTOAvailabilityV1',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\\cbdesk\otto\Client\Model\APIErrorResponseForNotFoundAvailabilityV1',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\\cbdesk\otto\Client\Model\APIErrorResponseForInternalServerAvailabilityV1',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation availabilityV1GetDeliveryInformationBySKUAsync
     *
     * get product delivery information for a SKU
     *
     * @param  string $authorization Access Token (required)
     * @param  string $sku the sku in string format (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function availabilityV1GetDeliveryInformationBySKUAsync($authorization, $sku)
    {
        return $this->availabilityV1GetDeliveryInformationBySKUAsyncWithHttpInfo($authorization, $sku)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation availabilityV1GetDeliveryInformationBySKUAsyncWithHttpInfo
     *
     * get product delivery information for a SKU
     *
     * @param  string $authorization Access Token (required)
     * @param  string $sku the sku in string format (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function availabilityV1GetDeliveryInformationBySKUAsyncWithHttpInfo($authorization, $sku)
    {
        $returnType = '\\cbdesk\otto\Client\Model\ProductDeliveryInformationResponseDTOAvailabilityV1';
        $request = $this->availabilityV1GetDeliveryInformationBySKURequest($authorization, $sku);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'availabilityV1GetDeliveryInformationBySKU'
     *
     * @param  string $authorization Access Token (required)
     * @param  string $sku the sku in string format (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function availabilityV1GetDeliveryInformationBySKURequest($authorization, $sku)
    {
        // verify the required parameter 'authorization' is set
        if ($authorization === null || (is_array($authorization) && count($authorization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $authorization when calling availabilityV1GetDeliveryInformationBySKU'
            );
        }
        // verify the required parameter 'sku' is set
        if ($sku === null || (is_array($sku) && count($sku) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sku when calling availabilityV1GetDeliveryInformationBySKU'
            );
        }

        $resourcePath = '/v1/availability/product-delivery-information/{sku}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($authorization !== null) {
            $headerParams['Authorization'] = ObjectSerializer::toHeaderValue($authorization);
        }

        // path params
        if ($sku !== null) {
            $resourcePath = str_replace(
                '{' . 'sku' . '}',
                ObjectSerializer::toPathValue($sku),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

            // // this endpoint requires Bearer token
            if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
            }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation availabilityV1GetProductDeliveryInformation
     *
     * get product delivery information from a partner (up to 200 per request).
     *
     * @param  string $authorization Access Token (required)
     * @param  int $limit The maximum number of shipping profile and sku mappings to be returned in each response. (optional, default to 200)
     * @param  string $cursor Cursor for paging requests. If a cursor is provided, the only other request parameter being considered is &#x27;limit&#x27;. &lt;br&gt;&lt;br&gt; Note:The cursor value must remain unchanged from the previous request. (optional)
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\cbdesk\otto\Client\Model\GetAllProductDeliveryInfoResponseAvailabilityV1
     */
    public function availabilityV1GetProductDeliveryInformation($authorization, $limit = '200', $cursor = null)
    {
        list($response) = $this->availabilityV1GetProductDeliveryInformationWithHttpInfo($authorization, $limit, $cursor);
        return $response;
    }

    /**
     * Operation availabilityV1GetProductDeliveryInformationWithHttpInfo
     *
     * get product delivery information from a partner (up to 200 per request).
     *
     * @param  string $authorization Access Token (required)
     * @param  int $limit The maximum number of shipping profile and sku mappings to be returned in each response. (optional, default to 200)
     * @param  string $cursor Cursor for paging requests. If a cursor is provided, the only other request parameter being considered is &#x27;limit&#x27;. &lt;br&gt;&lt;br&gt; Note:The cursor value must remain unchanged from the previous request. (optional)
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \\cbdesk\otto\Client\Model\GetAllProductDeliveryInfoResponseAvailabilityV1, HTTP status code, HTTP response headers (array of strings)
     */
    public function availabilityV1GetProductDeliveryInformationWithHttpInfo($authorization, $limit = '200', $cursor = null)
    {
        $returnType = '\\cbdesk\otto\Client\Model\GetAllProductDeliveryInfoResponseAvailabilityV1';
        $request = $this->availabilityV1GetProductDeliveryInformationRequest($authorization, $limit, $cursor);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\\cbdesk\otto\Client\Model\GetAllProductDeliveryInfoResponseAvailabilityV1',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\\cbdesk\otto\Client\Model\APIErrorResponseForInternalServerAvailabilityV1',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation availabilityV1GetProductDeliveryInformationAsync
     *
     * get product delivery information from a partner (up to 200 per request).
     *
     * @param  string $authorization Access Token (required)
     * @param  int $limit The maximum number of shipping profile and sku mappings to be returned in each response. (optional, default to 200)
     * @param  string $cursor Cursor for paging requests. If a cursor is provided, the only other request parameter being considered is &#x27;limit&#x27;. &lt;br&gt;&lt;br&gt; Note:The cursor value must remain unchanged from the previous request. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function availabilityV1GetProductDeliveryInformationAsync($authorization, $limit = '200', $cursor = null)
    {
        return $this->availabilityV1GetProductDeliveryInformationAsyncWithHttpInfo($authorization, $limit, $cursor)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation availabilityV1GetProductDeliveryInformationAsyncWithHttpInfo
     *
     * get product delivery information from a partner (up to 200 per request).
     *
     * @param  string $authorization Access Token (required)
     * @param  int $limit The maximum number of shipping profile and sku mappings to be returned in each response. (optional, default to 200)
     * @param  string $cursor Cursor for paging requests. If a cursor is provided, the only other request parameter being considered is &#x27;limit&#x27;. &lt;br&gt;&lt;br&gt; Note:The cursor value must remain unchanged from the previous request. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function availabilityV1GetProductDeliveryInformationAsyncWithHttpInfo($authorization, $limit = '200', $cursor = null)
    {
        $returnType = '\\cbdesk\otto\Client\Model\GetAllProductDeliveryInfoResponseAvailabilityV1';
        $request = $this->availabilityV1GetProductDeliveryInformationRequest($authorization, $limit, $cursor);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'availabilityV1GetProductDeliveryInformation'
     *
     * @param  string $authorization Access Token (required)
     * @param  int $limit The maximum number of shipping profile and sku mappings to be returned in each response. (optional, default to 200)
     * @param  string $cursor Cursor for paging requests. If a cursor is provided, the only other request parameter being considered is &#x27;limit&#x27;. &lt;br&gt;&lt;br&gt; Note:The cursor value must remain unchanged from the previous request. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function availabilityV1GetProductDeliveryInformationRequest($authorization, $limit = '200', $cursor = null)
    {
        // verify the required parameter 'authorization' is set
        if ($authorization === null || (is_array($authorization) && count($authorization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $authorization when calling availabilityV1GetProductDeliveryInformation'
            );
        }

        $resourcePath = '/v1/availability/product-delivery-information';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit, 'int32');
        }
        // query params
        if ($cursor !== null) {
            $queryParams['cursor'] = ObjectSerializer::toQueryValue($cursor, null);
        }
        // header params
        if ($authorization !== null) {
            $headerParams['Authorization'] = ObjectSerializer::toHeaderValue($authorization);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

            // // this endpoint requires Bearer token
            if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
            }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation availabilityV1StoreAvailableQuantitiesUsingPOST
     *
     * update quantities (up to 200 SKUs per request)
     *
     * @param  \\cbdesk\otto\Client\Model\AvailableQuantityRequestDTOAvailabilityV1[] $body availableQuantityRequestDTO (required)
     * @param  string $authorization Access Token (required)
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function availabilityV1StoreAvailableQuantitiesUsingPOST($body, $authorization)
    {
        list($response) = $this->availabilityV1StoreAvailableQuantitiesUsingPOSTWithHttpInfo($body, $authorization);
        return $response;
    }

    /**
     * Operation availabilityV1StoreAvailableQuantitiesUsingPOSTWithHttpInfo
     *
     * update quantities (up to 200 SKUs per request)
     *
     * @param  \\cbdesk\otto\Client\Model\AvailableQuantityRequestDTOAvailabilityV1[] $body availableQuantityRequestDTO (required)
     * @param  string $authorization Access Token (required)
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function availabilityV1StoreAvailableQuantitiesUsingPOSTWithHttpInfo($body, $authorization)
    {
        $returnType = 'object';
        $request = $this->availabilityV1StoreAvailableQuantitiesUsingPOSTRequest($body, $authorization);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 207:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\\cbdesk\otto\Client\Model\UpdateQuantityMultiStatusResponseAvailabilityV1',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 413:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\\cbdesk\otto\Client\Model\PayloadTooLargeApiErrorResponseForQuantitiesAvailabilityV1',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\\cbdesk\otto\Client\Model\ApiErrorResponseAvailabilityV1',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation availabilityV1StoreAvailableQuantitiesUsingPOSTAsync
     *
     * update quantities (up to 200 SKUs per request)
     *
     * @param  \\cbdesk\otto\Client\Model\AvailableQuantityRequestDTOAvailabilityV1[] $body availableQuantityRequestDTO (required)
     * @param  string $authorization Access Token (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function availabilityV1StoreAvailableQuantitiesUsingPOSTAsync($body, $authorization)
    {
        return $this->availabilityV1StoreAvailableQuantitiesUsingPOSTAsyncWithHttpInfo($body, $authorization)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation availabilityV1StoreAvailableQuantitiesUsingPOSTAsyncWithHttpInfo
     *
     * update quantities (up to 200 SKUs per request)
     *
     * @param  \\cbdesk\otto\Client\Model\AvailableQuantityRequestDTOAvailabilityV1[] $body availableQuantityRequestDTO (required)
     * @param  string $authorization Access Token (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function availabilityV1StoreAvailableQuantitiesUsingPOSTAsyncWithHttpInfo($body, $authorization)
    {
        $returnType = 'object';
        $request = $this->availabilityV1StoreAvailableQuantitiesUsingPOSTRequest($body, $authorization);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'availabilityV1StoreAvailableQuantitiesUsingPOST'
     *
     * @param  \\cbdesk\otto\Client\Model\AvailableQuantityRequestDTOAvailabilityV1[] $body availableQuantityRequestDTO (required)
     * @param  string $authorization Access Token (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function availabilityV1StoreAvailableQuantitiesUsingPOSTRequest($body, $authorization)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling availabilityV1StoreAvailableQuantitiesUsingPOST'
            );
        }
        // verify the required parameter 'authorization' is set
        if ($authorization === null || (is_array($authorization) && count($authorization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $authorization when calling availabilityV1StoreAvailableQuantitiesUsingPOST'
            );
        }

        $resourcePath = '/v1/availability/quantities';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($authorization !== null) {
            $headerParams['Authorization'] = ObjectSerializer::toHeaderValue($authorization);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

            // // this endpoint requires Bearer token
            if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
            }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation availabilityV1StoreProductDeliveryInformationUsingPOST
     *
     * update product delivery information (up to 200 SKUs per request)
     *
     * @param  \\cbdesk\otto\Client\Model\ProductDeliveryInformationRequestDTOAvailabilityV1[] $body productDeliveryInformationRequestDTO (required)
     * @param  string $authorization Access Token (required)
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \\cbdesk\otto\Client\Model\InlineResponse202
     */
    public function availabilityV1StoreProductDeliveryInformationUsingPOST($body, $authorization)
    {
        list($response) = $this->availabilityV1StoreProductDeliveryInformationUsingPOSTWithHttpInfo($body, $authorization);
        return $response;
    }

    /**
     * Operation availabilityV1StoreProductDeliveryInformationUsingPOSTWithHttpInfo
     *
     * update product delivery information (up to 200 SKUs per request)
     *
     * @param  \\cbdesk\otto\Client\Model\ProductDeliveryInformationRequestDTOAvailabilityV1[] $body productDeliveryInformationRequestDTO (required)
     * @param  string $authorization Access Token (required)
     *
     * @throws \\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \\cbdesk\otto\Client\Model\InlineResponse202, HTTP status code, HTTP response headers (array of strings)
     */
    public function availabilityV1StoreProductDeliveryInformationUsingPOSTWithHttpInfo($body, $authorization)
    {
        $returnType = '\\cbdesk\otto\Client\Model\InlineResponse202';
        $request = $this->availabilityV1StoreProductDeliveryInformationUsingPOSTRequest($body, $authorization);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 202:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\\cbdesk\otto\Client\Model\InlineResponse202',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 207:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\\cbdesk\otto\Client\Model\ProductDeliveryInformationMultiStatusResponseAvailabilityV1',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\\cbdesk\otto\Client\Model\APIErrorResponseForBadRequestAvailabilityV1',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 413:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\\cbdesk\otto\Client\Model\ApiErrorResponseForPayloadTooLargeAvailabilityV1',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\\cbdesk\otto\Client\Model\APIErrorResponseForInternalServerAvailabilityV1',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation availabilityV1StoreProductDeliveryInformationUsingPOSTAsync
     *
     * update product delivery information (up to 200 SKUs per request)
     *
     * @param  \\cbdesk\otto\Client\Model\ProductDeliveryInformationRequestDTOAvailabilityV1[] $body productDeliveryInformationRequestDTO (required)
     * @param  string $authorization Access Token (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function availabilityV1StoreProductDeliveryInformationUsingPOSTAsync($body, $authorization)
    {
        return $this->availabilityV1StoreProductDeliveryInformationUsingPOSTAsyncWithHttpInfo($body, $authorization)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation availabilityV1StoreProductDeliveryInformationUsingPOSTAsyncWithHttpInfo
     *
     * update product delivery information (up to 200 SKUs per request)
     *
     * @param  \\cbdesk\otto\Client\Model\ProductDeliveryInformationRequestDTOAvailabilityV1[] $body productDeliveryInformationRequestDTO (required)
     * @param  string $authorization Access Token (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function availabilityV1StoreProductDeliveryInformationUsingPOSTAsyncWithHttpInfo($body, $authorization)
    {
        $returnType = '\\cbdesk\otto\Client\Model\InlineResponse202';
        $request = $this->availabilityV1StoreProductDeliveryInformationUsingPOSTRequest($body, $authorization);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'availabilityV1StoreProductDeliveryInformationUsingPOST'
     *
     * @param  \\cbdesk\otto\Client\Model\ProductDeliveryInformationRequestDTOAvailabilityV1[] $body productDeliveryInformationRequestDTO (required)
     * @param  string $authorization Access Token (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function availabilityV1StoreProductDeliveryInformationUsingPOSTRequest($body, $authorization)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling availabilityV1StoreProductDeliveryInformationUsingPOST'
            );
        }
        // verify the required parameter 'authorization' is set
        if ($authorization === null || (is_array($authorization) && count($authorization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $authorization when calling availabilityV1StoreProductDeliveryInformationUsingPOST'
            );
        }

        $resourcePath = '/v1/availability/product-delivery-information';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($authorization !== null) {
            $headerParams['Authorization'] = ObjectSerializer::toHeaderValue($authorization);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

            // // this endpoint requires Bearer token
            if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
            }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
