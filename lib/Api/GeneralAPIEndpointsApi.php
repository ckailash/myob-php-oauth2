<?php
/**
 * GeneralAPIEndpointsApi
 * PHP version 5
 *
 * @category Class
 * @package  MyobAPI\MyobPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * MYOB AccountRight
 *
 * MYOB AccountRight API file
 *
 * The version of the OpenAPI document: 1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MyobAPI\MyobPHP\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use MyobAPI\MyobPHP\ApiException;
use MyobAPI\MyobPHP\Configuration;
use MyobAPI\MyobPHP\HeaderSelector;
use MyobAPI\MyobPHP\ObjectSerializer;

/**
 * GeneralAPIEndpointsApi Class Doc Comment
 *
 * @category Class
 * @package  MyobAPI\MyobPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GeneralAPIEndpointsApi
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
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getCompanyFile
     *
     * Get the details of one specific company file
     *
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (required)
     * @param  string $company_file_id The ID of the company in use (required)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional, default to 'v2')
     * @param  string $accept_encoding accept_encoding (optional, default to 'gzip,deflate')
     *
     * @throws \MyobAPI\MyobPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \MyobAPI\MyobPHP\Model\GetCompanyFile
     */
    public function getCompanyFile($x_myobapi_key, $company_file_id, $x_myobapi_version = 'v2', $accept_encoding = 'gzip,deflate')
    {
        list($response) = $this->getCompanyFileWithHttpInfo($x_myobapi_key, $company_file_id, $x_myobapi_version, $accept_encoding);
        return $response;
    }

    /**
     * Operation getCompanyFileWithHttpInfo
     *
     * Get the details of one specific company file
     *
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (required)
     * @param  string $company_file_id The ID of the company in use (required)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional, default to 'v2')
     * @param  string $accept_encoding (optional, default to 'gzip,deflate')
     *
     * @throws \MyobAPI\MyobPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \MyobAPI\MyobPHP\Model\GetCompanyFile, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCompanyFileWithHttpInfo($x_myobapi_key, $company_file_id, $x_myobapi_version = 'v2', $accept_encoding = 'gzip,deflate')
    {
        $request = $this->getCompanyFileRequest($x_myobapi_key, $company_file_id, $x_myobapi_version, $accept_encoding);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
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
            switch($statusCode) {
                case 200:
                    if ('\MyobAPI\MyobPHP\Model\GetCompanyFile' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\MyobAPI\MyobPHP\Model\GetCompanyFile', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\MyobAPI\MyobPHP\Model\GetCompanyFile';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        '\MyobAPI\MyobPHP\Model\GetCompanyFile',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getCompanyFileAsync
     *
     * Get the details of one specific company file
     *
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (required)
     * @param  string $company_file_id The ID of the company in use (required)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional, default to 'v2')
     * @param  string $accept_encoding (optional, default to 'gzip,deflate')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCompanyFileAsync($x_myobapi_key, $company_file_id, $x_myobapi_version = 'v2', $accept_encoding = 'gzip,deflate')
    {
        return $this->getCompanyFileAsyncWithHttpInfo($x_myobapi_key, $company_file_id, $x_myobapi_version, $accept_encoding)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCompanyFileAsyncWithHttpInfo
     *
     * Get the details of one specific company file
     *
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (required)
     * @param  string $company_file_id The ID of the company in use (required)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional, default to 'v2')
     * @param  string $accept_encoding (optional, default to 'gzip,deflate')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCompanyFileAsyncWithHttpInfo($x_myobapi_key, $company_file_id, $x_myobapi_version = 'v2', $accept_encoding = 'gzip,deflate')
    {
        $returnType = '\MyobAPI\MyobPHP\Model\GetCompanyFile';
        $request = $this->getCompanyFileRequest($x_myobapi_key, $company_file_id, $x_myobapi_version, $accept_encoding);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
     * Create request for operation 'getCompanyFile'
     *
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (required)
     * @param  string $company_file_id The ID of the company in use (required)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional, default to 'v2')
     * @param  string $accept_encoding (optional, default to 'gzip,deflate')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getCompanyFileRequest($x_myobapi_key, $company_file_id, $x_myobapi_version = 'v2', $accept_encoding = 'gzip,deflate')
    {
        // verify the required parameter 'x_myobapi_key' is set
        if ($x_myobapi_key === null || (is_array($x_myobapi_key) && count($x_myobapi_key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_myobapi_key when calling getCompanyFile'
            );
        }
        // verify the required parameter 'company_file_id' is set
        if ($company_file_id === null || (is_array($company_file_id) && count($company_file_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_file_id when calling getCompanyFile'
            );
        }

        $resourcePath = '/accountright/{company_file_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($x_myobapi_key !== null) {
            $headerParams['x-myobapi-key'] = ObjectSerializer::toHeaderValue($x_myobapi_key);
        }
        // header params
        if ($x_myobapi_version !== null) {
            $headerParams['x-myobapi-version'] = ObjectSerializer::toHeaderValue($x_myobapi_version);
        }
        // header params
        if ($accept_encoding !== null) {
            $headerParams['Accept-Encoding'] = ObjectSerializer::toHeaderValue($accept_encoding);
        }

        // path params
        if ($company_file_id !== null) {
            $resourcePath = str_replace(
                '{' . 'company_file_id' . '}',
                ObjectSerializer::toPathValue($company_file_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json; charset=utf-8'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getCompanyFiles
     *
     * List all company files in the users account
     *
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (required)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional, default to 'v2')
     * @param  string $accept_encoding accept_encoding (optional, default to 'gzip,deflate')
     *
     * @throws \MyobAPI\MyobPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \MyobAPI\MyobPHP\Model\ListCompanyFile[]
     */
    public function getCompanyFiles($x_myobapi_key, $x_myobapi_version = 'v2', $accept_encoding = 'gzip,deflate')
    {
        list($response) = $this->getCompanyFilesWithHttpInfo($x_myobapi_key, $x_myobapi_version, $accept_encoding);
        return $response;
    }

    /**
     * Operation getCompanyFilesWithHttpInfo
     *
     * List all company files in the users account
     *
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (required)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional, default to 'v2')
     * @param  string $accept_encoding (optional, default to 'gzip,deflate')
     *
     * @throws \MyobAPI\MyobPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \MyobAPI\MyobPHP\Model\ListCompanyFile[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getCompanyFilesWithHttpInfo($x_myobapi_key, $x_myobapi_version = 'v2', $accept_encoding = 'gzip,deflate')
    {
        $request = $this->getCompanyFilesRequest($x_myobapi_key, $x_myobapi_version, $accept_encoding);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
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
            switch($statusCode) {
                case 200:
                    if ('\MyobAPI\MyobPHP\Model\ListCompanyFile[]' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\MyobAPI\MyobPHP\Model\ListCompanyFile[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\MyobAPI\MyobPHP\Model\ListCompanyFile[]';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        '\MyobAPI\MyobPHP\Model\ListCompanyFile[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getCompanyFilesAsync
     *
     * List all company files in the users account
     *
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (required)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional, default to 'v2')
     * @param  string $accept_encoding (optional, default to 'gzip,deflate')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCompanyFilesAsync($x_myobapi_key, $x_myobapi_version = 'v2', $accept_encoding = 'gzip,deflate')
    {
        return $this->getCompanyFilesAsyncWithHttpInfo($x_myobapi_key, $x_myobapi_version, $accept_encoding)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCompanyFilesAsyncWithHttpInfo
     *
     * List all company files in the users account
     *
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (required)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional, default to 'v2')
     * @param  string $accept_encoding (optional, default to 'gzip,deflate')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCompanyFilesAsyncWithHttpInfo($x_myobapi_key, $x_myobapi_version = 'v2', $accept_encoding = 'gzip,deflate')
    {
        $returnType = '\MyobAPI\MyobPHP\Model\ListCompanyFile[]';
        $request = $this->getCompanyFilesRequest($x_myobapi_key, $x_myobapi_version, $accept_encoding);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
     * Create request for operation 'getCompanyFiles'
     *
     * @param  string $x_myobapi_key The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx (required)
     * @param  string $x_myobapi_version The version of the API, v2 is the current version (optional, default to 'v2')
     * @param  string $accept_encoding (optional, default to 'gzip,deflate')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getCompanyFilesRequest($x_myobapi_key, $x_myobapi_version = 'v2', $accept_encoding = 'gzip,deflate')
    {
        // verify the required parameter 'x_myobapi_key' is set
        if ($x_myobapi_key === null || (is_array($x_myobapi_key) && count($x_myobapi_key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_myobapi_key when calling getCompanyFiles'
            );
        }

        $resourcePath = '/accountright';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($x_myobapi_key !== null) {
            $headerParams['x-myobapi-key'] = ObjectSerializer::toHeaderValue($x_myobapi_key);
        }
        // header params
        if ($x_myobapi_version !== null) {
            $headerParams['x-myobapi-version'] = ObjectSerializer::toHeaderValue($x_myobapi_version);
        }
        // header params
        if ($accept_encoding !== null) {
            $headerParams['Accept-Encoding'] = ObjectSerializer::toHeaderValue($accept_encoding);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json; charset=utf-8'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
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
