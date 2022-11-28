<?php
/**
 * CourierApi
 * PHP version 7.3
 *
 * @category Class
 * @package  Ory\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Ory APIs
 *
 * Documentation for all public and administrative Ory APIs. Administrative APIs can only be accessed with a valid Personal Access Token. Public APIs are mostly used in browsers.
 *
 * The version of the OpenAPI document: v1.0.0
 * Contact: support@ory.sh
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Ory\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Ory\Client\ApiException;
use Ory\Client\Configuration;
use Ory\Client\HeaderSelector;
use Ory\Client\ObjectSerializer;

/**
 * CourierApi Class Doc Comment
 *
 * @category Class
 * @package  Ory\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CourierApi
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
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
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
     * Operation listCourierMessages
     *
     * List Messages
     *
     * @param  int $perPage Items per Page  This is the number of items per page. (optional, default to 250)
     * @param  int $page Pagination Page  This value is currently an integer, but it is not sequential. The value is not the page number, but a reference. The next page can be any number and some numbers might return an empty list.  For example, page 2 might not follow after page 1. And even if page 3 and 5 exist, but page 4 might not exist. (optional, default to 1)
     * @param  \Ory\Client\Model\CourierMessageStatus $status Status filters out messages based on status. If no value is provided, it doesn&#39;t take effect on filter. (optional)
     * @param  string $recipient Recipient filters out messages based on recipient. If no value is provided, it doesn&#39;t take effect on filter. (optional)
     *
     * @throws \Ory\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Ory\Client\Model\Message[]|\Ory\Client\Model\ErrorGeneric|\Ory\Client\Model\ErrorGeneric
     */
    public function listCourierMessages($perPage = 250, $page = 1, $status = null, $recipient = null)
    {
        list($response) = $this->listCourierMessagesWithHttpInfo($perPage, $page, $status, $recipient);
        return $response;
    }

    /**
     * Operation listCourierMessagesWithHttpInfo
     *
     * List Messages
     *
     * @param  int $perPage Items per Page  This is the number of items per page. (optional, default to 250)
     * @param  int $page Pagination Page  This value is currently an integer, but it is not sequential. The value is not the page number, but a reference. The next page can be any number and some numbers might return an empty list.  For example, page 2 might not follow after page 1. And even if page 3 and 5 exist, but page 4 might not exist. (optional, default to 1)
     * @param  \Ory\Client\Model\CourierMessageStatus $status Status filters out messages based on status. If no value is provided, it doesn&#39;t take effect on filter. (optional)
     * @param  string $recipient Recipient filters out messages based on recipient. If no value is provided, it doesn&#39;t take effect on filter. (optional)
     *
     * @throws \Ory\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Ory\Client\Model\Message[]|\Ory\Client\Model\ErrorGeneric|\Ory\Client\Model\ErrorGeneric, HTTP status code, HTTP response headers (array of strings)
     */
    public function listCourierMessagesWithHttpInfo($perPage = 250, $page = 1, $status = null, $recipient = null)
    {
        $request = $this->listCourierMessagesRequest($perPage, $page, $status, $recipient);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Ory\Client\Model\Message[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Ory\Client\Model\Message[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Ory\Client\Model\ErrorGeneric' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Ory\Client\Model\ErrorGeneric', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\Ory\Client\Model\ErrorGeneric' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Ory\Client\Model\ErrorGeneric', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Ory\Client\Model\Message[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\Ory\Client\Model\Message[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Ory\Client\Model\ErrorGeneric',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Ory\Client\Model\ErrorGeneric',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listCourierMessagesAsync
     *
     * List Messages
     *
     * @param  int $perPage Items per Page  This is the number of items per page. (optional, default to 250)
     * @param  int $page Pagination Page  This value is currently an integer, but it is not sequential. The value is not the page number, but a reference. The next page can be any number and some numbers might return an empty list.  For example, page 2 might not follow after page 1. And even if page 3 and 5 exist, but page 4 might not exist. (optional, default to 1)
     * @param  \Ory\Client\Model\CourierMessageStatus $status Status filters out messages based on status. If no value is provided, it doesn&#39;t take effect on filter. (optional)
     * @param  string $recipient Recipient filters out messages based on recipient. If no value is provided, it doesn&#39;t take effect on filter. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listCourierMessagesAsync($perPage = 250, $page = 1, $status = null, $recipient = null)
    {
        return $this->listCourierMessagesAsyncWithHttpInfo($perPage, $page, $status, $recipient)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listCourierMessagesAsyncWithHttpInfo
     *
     * List Messages
     *
     * @param  int $perPage Items per Page  This is the number of items per page. (optional, default to 250)
     * @param  int $page Pagination Page  This value is currently an integer, but it is not sequential. The value is not the page number, but a reference. The next page can be any number and some numbers might return an empty list.  For example, page 2 might not follow after page 1. And even if page 3 and 5 exist, but page 4 might not exist. (optional, default to 1)
     * @param  \Ory\Client\Model\CourierMessageStatus $status Status filters out messages based on status. If no value is provided, it doesn&#39;t take effect on filter. (optional)
     * @param  string $recipient Recipient filters out messages based on recipient. If no value is provided, it doesn&#39;t take effect on filter. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listCourierMessagesAsyncWithHttpInfo($perPage = 250, $page = 1, $status = null, $recipient = null)
    {
        $returnType = '\Ory\Client\Model\Message[]';
        $request = $this->listCourierMessagesRequest($perPage, $page, $status, $recipient);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'listCourierMessages'
     *
     * @param  int $perPage Items per Page  This is the number of items per page. (optional, default to 250)
     * @param  int $page Pagination Page  This value is currently an integer, but it is not sequential. The value is not the page number, but a reference. The next page can be any number and some numbers might return an empty list.  For example, page 2 might not follow after page 1. And even if page 3 and 5 exist, but page 4 might not exist. (optional, default to 1)
     * @param  \Ory\Client\Model\CourierMessageStatus $status Status filters out messages based on status. If no value is provided, it doesn&#39;t take effect on filter. (optional)
     * @param  string $recipient Recipient filters out messages based on recipient. If no value is provided, it doesn&#39;t take effect on filter. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listCourierMessagesRequest($perPage = 250, $page = 1, $status = null, $recipient = null)
    {
        if ($perPage !== null && $perPage > 1000) {
            throw new \InvalidArgumentException('invalid value for "$perPage" when calling CourierApi.listCourierMessages, must be smaller than or equal to 1000.');
        }
        if ($perPage !== null && $perPage < 1) {
            throw new \InvalidArgumentException('invalid value for "$perPage" when calling CourierApi.listCourierMessages, must be bigger than or equal to 1.');
        }

        if ($page !== null && $page < 1) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling CourierApi.listCourierMessages, must be bigger than or equal to 1.');
        }


        $resourcePath = '/admin/courier/messages';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($perPage !== null) {
            if('form' === 'form' && is_array($perPage)) {
                foreach($perPage as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['per_page'] = $perPage;
            }
        }
        // query params
        if ($page !== null) {
            if('form' === 'form' && is_array($page)) {
                foreach($page as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['page'] = $page;
            }
        }
        // query params
        if ($status !== null) {
            if('form' === 'form' && is_array($status)) {
                foreach($status as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['status'] = $status;
            }
        }
        // query params
        if ($recipient !== null) {
            if('form' === 'form' && is_array($recipient)) {
                foreach($recipient as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['recipient'] = $recipient;
            }
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires Bearer authentication (access token)
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
