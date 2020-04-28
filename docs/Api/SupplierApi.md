# MyobAPI\MyobPHP\SupplierApi

All URIs are relative to *https://api.myob.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSupplier**](SupplierApi.md#createSupplier) | **POST** /{company_file_id}/Contact/Supplier | Create a new supplier
[**deleteSupplier**](SupplierApi.md#deleteSupplier) | **DELETE** /{company_file_id}/Contact/Supplier/{guid} | Delete a supplier
[**editSupplier**](SupplierApi.md#editSupplier) | **PUT** /{company_file_id}/Contact/Supplier/{guid} | Edit a supplier
[**getSupplier**](SupplierApi.md#getSupplier) | **GET** /{company_file_id}/Contact/Supplier/{guid} | Get a supplier by GUID
[**getSuppliers**](SupplierApi.md#getSuppliers) | **GET** /{company_file_id}/Contact/Supplier | Fetch a list of all Suppliers



## createSupplier

> object createSupplier($x_myobapi_key, $company_file_id, $create_supplier_request, $x_myobapi_version, $accept_encoding)

Create a new supplier

### Add a new supplier to the company file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = MyobAPI\MyobPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyobAPI\MyobPHP\Api\SupplierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_myobapi_key = {{client_id}}; // string | The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx
$company_file_id = 'company_file_id_example'; // string | The ID of the company in use
$create_supplier_request = new \MyobAPI\MyobPHP\Model\CreateSupplierRequest(); // \MyobAPI\MyobPHP\Model\CreateSupplierRequest | 
$x_myobapi_version = v2; // string | The version of the API, v2 is the current version
$accept_encoding = gzip,deflate; // string | 

try {
    $result = $apiInstance->createSupplier($x_myobapi_key, $company_file_id, $create_supplier_request, $x_myobapi_version, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierApi->createSupplier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_myobapi_key** | **string**| The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx |
 **company_file_id** | **string**| The ID of the company in use |
 **create_supplier_request** | [**\MyobAPI\MyobPHP\Model\CreateSupplierRequest**](../Model/CreateSupplierRequest.md)|  |
 **x_myobapi_version** | **string**| The version of the API, v2 is the current version | [optional] [default to &#39;v2&#39;]
 **accept_encoding** | **string**|  | [optional] [default to &#39;gzip,deflate&#39;]

### Return type

**object**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteSupplier

> deleteSupplier($x_myobapi_key, $company_file_id, $guid, $delete_supplier_request, $x_myobapi_version, $accept_encoding)

Delete a supplier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = MyobAPI\MyobPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyobAPI\MyobPHP\Api\SupplierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_myobapi_key = {{client_id}}; // string | The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx
$company_file_id = 'company_file_id_example'; // string | The ID of the company in use
$guid = 'guid_example'; // string | The GUID of the resource being created
$delete_supplier_request = {"UID":"ee1c61ed-98f0-4e0e-a0d5-712149206b69"}; // \MyobAPI\MyobPHP\Model\DeleteSupplierRequest | 
$x_myobapi_version = v2; // string | The version of the API, v2 is the current version
$accept_encoding = gzip,deflate; // string | 

try {
    $apiInstance->deleteSupplier($x_myobapi_key, $company_file_id, $guid, $delete_supplier_request, $x_myobapi_version, $accept_encoding);
} catch (Exception $e) {
    echo 'Exception when calling SupplierApi->deleteSupplier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_myobapi_key** | **string**| The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx |
 **company_file_id** | **string**| The ID of the company in use |
 **guid** | **string**| The GUID of the resource being created |
 **delete_supplier_request** | [**\MyobAPI\MyobPHP\Model\DeleteSupplierRequest**](../Model/DeleteSupplierRequest.md)|  |
 **x_myobapi_version** | **string**| The version of the API, v2 is the current version | [optional] [default to &#39;v2&#39;]
 **accept_encoding** | **string**|  | [optional] [default to &#39;gzip,deflate&#39;]

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## editSupplier

> object editSupplier($x_myobapi_key, $company_file_id, $guid, $edit_supplier_request, $x_myobapi_version, $accept_encoding)

Edit a supplier

### Editing a supplier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = MyobAPI\MyobPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyobAPI\MyobPHP\Api\SupplierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_myobapi_key = {{client_id}}; // string | The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx
$company_file_id = 'company_file_id_example'; // string | The ID of the company in use
$guid = 'guid_example'; // string | The GUID of the resource being created
$edit_supplier_request = new \MyobAPI\MyobPHP\Model\EditSupplierRequest(); // \MyobAPI\MyobPHP\Model\EditSupplierRequest | 
$x_myobapi_version = v2; // string | The version of the API, v2 is the current version
$accept_encoding = gzip,deflate; // string | 

try {
    $result = $apiInstance->editSupplier($x_myobapi_key, $company_file_id, $guid, $edit_supplier_request, $x_myobapi_version, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierApi->editSupplier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_myobapi_key** | **string**| The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx |
 **company_file_id** | **string**| The ID of the company in use |
 **guid** | **string**| The GUID of the resource being created |
 **edit_supplier_request** | [**\MyobAPI\MyobPHP\Model\EditSupplierRequest**](../Model/EditSupplierRequest.md)|  |
 **x_myobapi_version** | **string**| The version of the API, v2 is the current version | [optional] [default to &#39;v2&#39;]
 **accept_encoding** | **string**|  | [optional] [default to &#39;gzip,deflate&#39;]

### Return type

**object**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getSupplier

> \MyobAPI\MyobPHP\Model\Suppliers getSupplier($x_myobapi_key, $company_file_id, $guid, $x_myobapi_version, $accept_encoding)

Get a supplier by GUID

Get a supplier by GUID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = MyobAPI\MyobPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyobAPI\MyobPHP\Api\SupplierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_myobapi_key = {{client_id}}; // string | The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx
$company_file_id = 'company_file_id_example'; // string | The ID of the company in use
$guid = 'guid_example'; // string | The GUID of the resource being created
$x_myobapi_version = v2; // string | The version of the API, v2 is the current version
$accept_encoding = gzip,deflate; // string | 

try {
    $result = $apiInstance->getSupplier($x_myobapi_key, $company_file_id, $guid, $x_myobapi_version, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierApi->getSupplier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_myobapi_key** | **string**| The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx |
 **company_file_id** | **string**| The ID of the company in use |
 **guid** | **string**| The GUID of the resource being created |
 **x_myobapi_version** | **string**| The version of the API, v2 is the current version | [optional] [default to &#39;v2&#39;]
 **accept_encoding** | **string**|  | [optional] [default to &#39;gzip,deflate&#39;]

### Return type

[**\MyobAPI\MyobPHP\Model\Suppliers**](../Model/Suppliers.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json; charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getSuppliers

> \MyobAPI\MyobPHP\Model\ListOfSuppliers getSuppliers($x_myobapi_key, $company_file_id, $x_myobapi_version, $accept_encoding, $if_modified_since, $if_none_match, $order_by, $top, $skip, $filter)

Fetch a list of all Suppliers

### Get a full list of all suppliers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = MyobAPI\MyobPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyobAPI\MyobPHP\Api\SupplierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_myobapi_key = {{client_id}}; // string | The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx
$company_file_id = 'company_file_id_example'; // string | The ID of the company in use
$x_myobapi_version = v2; // string | The version of the API, v2 is the current version
$accept_encoding = gzip,deflate; // string | 
$if_modified_since = Fri, 21 Mar 2014 02:51:32 GMT; // string | Only records created or modified since this timestamp will be returned
$if_none_match = -1674987083; // string | If the collection or individual resource hasn't been modified based on the request made, 304 Not Modified with an empty body is returned, if the resource has been modified 200 success code along with the resource is returned.
$order_by = $orderby=Number asc; // string | Order results in ascending or descending order, by a specified field.
$top = $top=5; // string | Retrieve the first x records in a list.
$skip = $skip=5; // string | Retrieve all records in a list, except for the first x records
$filter = $filter=5; // string | Retrieve all records matching a specified expression.

try {
    $result = $apiInstance->getSuppliers($x_myobapi_key, $company_file_id, $x_myobapi_version, $accept_encoding, $if_modified_since, $if_none_match, $order_by, $top, $skip, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierApi->getSuppliers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_myobapi_key** | **string**| The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx |
 **company_file_id** | **string**| The ID of the company in use |
 **x_myobapi_version** | **string**| The version of the API, v2 is the current version | [optional] [default to &#39;v2&#39;]
 **accept_encoding** | **string**|  | [optional] [default to &#39;gzip,deflate&#39;]
 **if_modified_since** | **string**| Only records created or modified since this timestamp will be returned | [optional]
 **if_none_match** | **string**| If the collection or individual resource hasn&#39;t been modified based on the request made, 304 Not Modified with an empty body is returned, if the resource has been modified 200 success code along with the resource is returned. | [optional]
 **order_by** | **string**| Order results in ascending or descending order, by a specified field. | [optional]
 **top** | **string**| Retrieve the first x records in a list. | [optional]
 **skip** | **string**| Retrieve all records in a list, except for the first x records | [optional]
 **filter** | **string**| Retrieve all records matching a specified expression. | [optional]

### Return type

[**\MyobAPI\MyobPHP\Model\ListOfSuppliers**](../Model/ListOfSuppliers.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json; charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

