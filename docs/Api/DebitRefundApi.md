# MyobAPI\MyobPHP\DebitRefundApi

All URIs are relative to *https://api.myob.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDebitRefund**](DebitRefundApi.md#createDebitRefund) | **POST** /{company_file_id}/Sale/DebitRefund | Create a debit refund
[**deleteanbillofitemtype**](DebitRefundApi.md#deleteanbillofitemtype) | **DELETE** /{company_file_id}/Sale/DebitRefund/{guid} | Delete a debit refund
[**getDebitRefunds**](DebitRefundApi.md#getDebitRefunds) | **GET** /{company_file_id}/Sale/DebitRefund | Get debit refunds



## createDebitRefund

> createDebitRefund($x_myobapi_key, $company_file_id, $x_myobapi_version, $accept_encoding, $create_debit_refund)

Create a debit refund

Create a debit refund

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = MyobAPI\MyobPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyobAPI\MyobPHP\Api\DebitRefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_myobapi_key = {{client_id}}; // string | The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx
$company_file_id = 'company_file_id_example'; // string | The ID of the company in use
$x_myobapi_version = v2; // string | The version of the API, v2 is the current version
$accept_encoding = gzip,deflate; // string | 
$create_debit_refund = new \MyobAPI\MyobPHP\Model\CreateDebitRefund(); // \MyobAPI\MyobPHP\Model\CreateDebitRefund | 

try {
    $apiInstance->createDebitRefund($x_myobapi_key, $company_file_id, $x_myobapi_version, $accept_encoding, $create_debit_refund);
} catch (Exception $e) {
    echo 'Exception when calling DebitRefundApi->createDebitRefund: ', $e->getMessage(), PHP_EOL;
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
 **create_debit_refund** | [**\MyobAPI\MyobPHP\Model\CreateDebitRefund**](../Model/CreateDebitRefund.md)|  | [optional]

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


## deleteanbillofitemtype

> deleteanbillofitemtype($x_myobapi_key, $company_file_id, $guid, $x_myobapi_version, $accept_encoding, $delete_debit_refund)

Delete a debit refund

Delete a debit refund

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = MyobAPI\MyobPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyobAPI\MyobPHP\Api\DebitRefundApi(
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
$delete_debit_refund = new \MyobAPI\MyobPHP\Model\DeleteDebitRefund(); // \MyobAPI\MyobPHP\Model\DeleteDebitRefund | 

try {
    $apiInstance->deleteanbillofitemtype($x_myobapi_key, $company_file_id, $guid, $x_myobapi_version, $accept_encoding, $delete_debit_refund);
} catch (Exception $e) {
    echo 'Exception when calling DebitRefundApi->deleteanbillofitemtype: ', $e->getMessage(), PHP_EOL;
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
 **delete_debit_refund** | [**\MyobAPI\MyobPHP\Model\DeleteDebitRefund**](../Model/DeleteDebitRefund.md)|  | [optional]

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


## getDebitRefunds

> \MyobAPI\MyobPHP\Model\GetDebitRefunds getDebitRefunds($x_myobapi_key, $company_file_id, $x_myobapi_version, $accept_encoding, $if_modified_since, $if_none_match, $order_by, $top, $skip, $filter)

Get debit refunds

Get debit refunds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = MyobAPI\MyobPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyobAPI\MyobPHP\Api\DebitRefundApi(
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
    $result = $apiInstance->getDebitRefunds($x_myobapi_key, $company_file_id, $x_myobapi_version, $accept_encoding, $if_modified_since, $if_none_match, $order_by, $top, $skip, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebitRefundApi->getDebitRefunds: ', $e->getMessage(), PHP_EOL;
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

[**\MyobAPI\MyobPHP\Model\GetDebitRefunds**](../Model/GetDebitRefunds.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

