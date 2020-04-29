# MyobAPI\MyobPHP\PurchaseBillItemsApi

All URIs are relative to *https://api.myob.com/accountright*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createItemBill**](PurchaseBillItemsApi.md#createItemBill) | **POST** /{company_file_id}/Purchase/Bill/Item | Create a new item bill
[**deleteItemBill**](PurchaseBillItemsApi.md#deleteItemBill) | **DELETE** /{company_file_id}/Purchase/Bill/Item/{guid} | Delete an bill of item type
[**editItemBill**](PurchaseBillItemsApi.md#editItemBill) | **PUT** /{company_file_id}/Purchase/Bill/Item/{guid} | Update a new item type bill
[**getItemBill**](PurchaseBillItemsApi.md#getItemBill) | **GET** /{company_file_id}/Purchase/Bill/Item/{guid} | Get one Bill Item by GUID
[**getItemBills**](PurchaseBillItemsApi.md#getItemBills) | **GET** /{company_file_id}/Purchase/Bill/Item | List all the Item bills



## createItemBill

> createItemBill($x_myobapi_key, $company_file_id, $create_item_bill, $x_myobapi_version, $accept_encoding)

Create a new item bill

Create a new bill of type item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = MyobAPI\MyobPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyobAPI\MyobPHP\Api\PurchaseBillItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_myobapi_key = {{client_id}}; // string | The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx
$company_file_id = 'company_file_id_example'; // string | The ID of the company in use
$create_item_bill = new \MyobAPI\MyobPHP\Model\CreateItemBill(); // \MyobAPI\MyobPHP\Model\CreateItemBill | 
$x_myobapi_version = v2; // string | The version of the API, v2 is the current version
$accept_encoding = gzip,deflate; // string | 

try {
    $apiInstance->createItemBill($x_myobapi_key, $company_file_id, $create_item_bill, $x_myobapi_version, $accept_encoding);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseBillItemsApi->createItemBill: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_myobapi_key** | **string**| The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx |
 **company_file_id** | **string**| The ID of the company in use |
 **create_item_bill** | [**\MyobAPI\MyobPHP\Model\CreateItemBill**](../Model/CreateItemBill.md)|  |
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


## deleteItemBill

> deleteItemBill($x_myobapi_key, $company_file_id, $guid, $delete_item_bill, $x_myobapi_version, $accept_encoding)

Delete an bill of item type

Delete a new bill of type item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = MyobAPI\MyobPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyobAPI\MyobPHP\Api\PurchaseBillItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_myobapi_key = {{client_id}}; // string | The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx
$company_file_id = 'company_file_id_example'; // string | The ID of the company in use
$guid = 'guid_example'; // string | The GUID of the resource being created
$delete_item_bill = new \MyobAPI\MyobPHP\Model\DeleteItemBill(); // \MyobAPI\MyobPHP\Model\DeleteItemBill | 
$x_myobapi_version = v2; // string | The version of the API, v2 is the current version
$accept_encoding = gzip,deflate; // string | 

try {
    $apiInstance->deleteItemBill($x_myobapi_key, $company_file_id, $guid, $delete_item_bill, $x_myobapi_version, $accept_encoding);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseBillItemsApi->deleteItemBill: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_myobapi_key** | **string**| The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx |
 **company_file_id** | **string**| The ID of the company in use |
 **guid** | **string**| The GUID of the resource being created |
 **delete_item_bill** | [**\MyobAPI\MyobPHP\Model\DeleteItemBill**](../Model/DeleteItemBill.md)|  |
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


## editItemBill

> editItemBill($x_myobapi_key, $company_file_id, $guid, $edit_item_bill, $x_myobapi_version, $accept_encoding)

Update a new item type bill

Update a new item type bill

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = MyobAPI\MyobPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyobAPI\MyobPHP\Api\PurchaseBillItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_myobapi_key = {{client_id}}; // string | The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx
$company_file_id = 'company_file_id_example'; // string | The ID of the company in use
$guid = 'guid_example'; // string | The GUID of the resource being created
$edit_item_bill = new \MyobAPI\MyobPHP\Model\EditItemBill(); // \MyobAPI\MyobPHP\Model\EditItemBill | 
$x_myobapi_version = v2; // string | The version of the API, v2 is the current version
$accept_encoding = gzip,deflate; // string | 

try {
    $apiInstance->editItemBill($x_myobapi_key, $company_file_id, $guid, $edit_item_bill, $x_myobapi_version, $accept_encoding);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseBillItemsApi->editItemBill: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_myobapi_key** | **string**| The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx |
 **company_file_id** | **string**| The ID of the company in use |
 **guid** | **string**| The GUID of the resource being created |
 **edit_item_bill** | [**\MyobAPI\MyobPHP\Model\EditItemBill**](../Model/EditItemBill.md)|  |
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


## getItemBill

> \MyobAPI\MyobPHP\Model\ItemBill getItemBill($x_myobapi_key, $company_file_id, $guid, $x_myobapi_version, $accept_encoding)

Get one Bill Item by GUID

Get one Bill Item by GUID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = MyobAPI\MyobPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyobAPI\MyobPHP\Api\PurchaseBillItemsApi(
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
    $result = $apiInstance->getItemBill($x_myobapi_key, $company_file_id, $guid, $x_myobapi_version, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseBillItemsApi->getItemBill: ', $e->getMessage(), PHP_EOL;
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

[**\MyobAPI\MyobPHP\Model\ItemBill**](../Model/ItemBill.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json; charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getItemBills

> \MyobAPI\MyobPHP\Model\GetItemBills getItemBills($x_myobapi_key, $company_file_id, $x_myobapi_version, $accept_encoding, $if_modified_since, $if_none_match, $order_by, $top, $skip, $filter)

List all the Item bills

Get a list of all item type bills

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = MyobAPI\MyobPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyobAPI\MyobPHP\Api\PurchaseBillItemsApi(
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
    $result = $apiInstance->getItemBills($x_myobapi_key, $company_file_id, $x_myobapi_version, $accept_encoding, $if_modified_since, $if_none_match, $order_by, $top, $skip, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseBillItemsApi->getItemBills: ', $e->getMessage(), PHP_EOL;
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

[**\MyobAPI\MyobPHP\Model\GetItemBills**](../Model/GetItemBills.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

