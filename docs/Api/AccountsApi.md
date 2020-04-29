# MyobAPI\MyobPHP\AccountsApi

All URIs are relative to *https://api.myob.com/accountright*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccount**](AccountsApi.md#getAccount) | **GET** /{company_file_id}/GeneralLedger/Account/{guid} | Get an account by GUID
[**getAccounts**](AccountsApi.md#getAccounts) | **GET** /{company_file_id}/GeneralLedger/Account | Gets all accounts



## getAccount

> \MyobAPI\MyobPHP\Model\Account getAccount($x_myobapi_key, $company_file_id, $guid, $x_myobapi_version, $accept_encoding)

Get an account by GUID

Get an account by GUID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = MyobAPI\MyobPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyobAPI\MyobPHP\Api\AccountsApi(
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
    $result = $apiInstance->getAccount($x_myobapi_key, $company_file_id, $guid, $x_myobapi_version, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccount: ', $e->getMessage(), PHP_EOL;
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

[**\MyobAPI\MyobPHP\Model\Account**](../Model/Account.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json; charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAccounts

> \MyobAPI\MyobPHP\Model\AccountsList getAccounts($x_myobapi_key, $company_file_id, $x_myobapi_version, $accept_encoding, $if_modified_since, $if_none_match, $order_by, $top, $skip, $filter)

Gets all accounts

Each account is identified by a unique five-digit number. The first digit indicates the account’s classification (for example, accounts starting with 1 are asset accounts). The remaining four digits determine its location within the classification. The accounts list groups accounts into eight classifications—Asset, Liability, Equity, Income, Cost of Sales, Expense, Other Income and Other Expense.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = MyobAPI\MyobPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyobAPI\MyobPHP\Api\AccountsApi(
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
    $result = $apiInstance->getAccounts($x_myobapi_key, $company_file_id, $x_myobapi_version, $accept_encoding, $if_modified_since, $if_none_match, $order_by, $top, $skip, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccounts: ', $e->getMessage(), PHP_EOL;
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

[**\MyobAPI\MyobPHP\Model\AccountsList**](../Model/AccountsList.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json; charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

