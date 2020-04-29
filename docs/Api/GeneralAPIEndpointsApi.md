# MyobAPI\MyobPHP\GeneralAPIEndpointsApi

All URIs are relative to *https://api.myob.com/accountright*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCompanyFile**](GeneralAPIEndpointsApi.md#getCompanyFile) | **GET** /{company_file_id} | Get the details of one specific company file
[**getCompanyFiles**](GeneralAPIEndpointsApi.md#getCompanyFiles) | **GET** / | List all company files in the users account



## getCompanyFile

> \MyobAPI\MyobPHP\Model\GetCompanyFile getCompanyFile($x_myobapi_key, $company_file_id, $x_myobapi_version, $accept_encoding)

Get the details of one specific company file

### Exploring a company file  This endpoint will return to you a set of information pertaining to the specific company file, from the ID and Name, it's product Version and Level along with the serial number for this file. A key element of information here is the **country** as that will determine if this is an AUD or NZD file.  It will also give a complete list of all API Resources available for this file, making it very quick and easy to find any/all specific resource endpoints for this file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = MyobAPI\MyobPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyobAPI\MyobPHP\Api\GeneralAPIEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_myobapi_key = {{client_id}}; // string | The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx
$company_file_id = 'company_file_id_example'; // string | The ID of the company in use
$x_myobapi_version = v2; // string | The version of the API, v2 is the current version
$accept_encoding = gzip,deflate; // string | 

try {
    $result = $apiInstance->getCompanyFile($x_myobapi_key, $company_file_id, $x_myobapi_version, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralAPIEndpointsApi->getCompanyFile: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\MyobAPI\MyobPHP\Model\GetCompanyFile**](../Model/GetCompanyFile.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json; charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCompanyFiles

> \MyobAPI\MyobPHP\Model\ListCompanyFile[] getCompanyFiles($x_myobapi_key, $x_myobapi_version, $accept_encoding)

List all company files in the users account

The default endpoint for the MYOB AccountRight API.  The first thing you are going to want to do is get a list of the company files. This really couldn't be simpler as there is no specific end point for this, just call the base API url.  As soon as you request the API (provided you have authenticated and passed the right headers, you will be presented with a list of the company files on the computer or that the user has in the cloud.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = MyobAPI\MyobPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MyobAPI\MyobPHP\Api\GeneralAPIEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_myobapi_key = {{client_id}}; // string | The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx
$x_myobapi_version = v2; // string | The version of the API, v2 is the current version
$accept_encoding = gzip,deflate; // string | 

try {
    $result = $apiInstance->getCompanyFiles($x_myobapi_key, $x_myobapi_version, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralAPIEndpointsApi->getCompanyFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_myobapi_key** | **string**| The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx |
 **x_myobapi_version** | **string**| The version of the API, v2 is the current version | [optional] [default to &#39;v2&#39;]
 **accept_encoding** | **string**|  | [optional] [default to &#39;gzip,deflate&#39;]

### Return type

[**\MyobAPI\MyobPHP\Model\ListCompanyFile[]**](../Model/ListCompanyFile.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json; charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

