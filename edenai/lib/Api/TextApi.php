<?php
/**
 * TextApi
 * PHP version 5
 *
 * @category Class
 * @package  edenai\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Eden AI API Documentation
 *
 * <a href=\"https://app.edenai.run/user/login\" target=\"_blank\"><img src=\"/static/images/welcome.png\"></a>. # Welcome  Eden AI simplifies the use and integration of AI technologies by providing a unique API connected to the best AI engines and combined with a powerful management platform. The platform covers a wide range of AI technologies: * Vision:  <a href=\"https://www.edenai.co/vision\" target=\"_blank\">www.edenai.co/vision</a>. * Text & NLP: <a href=\"https://www.edenai.co/text\" target=\"_blank\">www.edenai.co/text</a>. * Speech & Audio: <a href=\"https://www.edenai.co/speech\" target=\"_blank\">www.edenai.co/speech</a>. * OCR: <a href=\"https://www.edenai.co/ocr\" target=\"_blank\">www.edenai.co/ocr</a>. * Machine Translation: <a href=\"https://www.edenai.co/translation\" target=\"_blank\">www.edenai.co/translation</a>. * Prediction: <a href=\"https://www.edenai.co/prediction\" target=\"_blank\">www.edenai.co/prediction</a>.  For all the proposed technologies, we provide a single endpoint:  the service provider is only a parameter that can be changed very easily. All the engines available on Eden AI are listed here: www.edenai.co/catalog  # Support & community  ### 1- Support If you have any problems, please contact us at this email address: contact@edenai.co. We will be happy to help you in the use of Eden AI.   ### 2- Community  You can interact personally with other people actively using and working with Eden AI and join our  <a href=\"https://join.slack.com/t/edenai/shared_invite/zt-t68c2pr9-4lDKQ_qEqmLiWNptQzB_6w\" target=\"_blank\">Slack community</a>.  We are always updating our docs, so a good way to always stay up to date is to watch our documentation repo on Github: <a href=\"https://github.com/edenai\" target=\"_blank\">https://github.com/edenai</a>.  ### 3- Blog  We also regularly publish various articles with Eden AI news and technical articles on the different AI engines that exist. You can find these articles here: <a href=\"https://www.edenai.co/blog\" target=\"_blank\">https://www.edenai.co/blog</a>.   # Authentication  ## Create account ![Register](/static/images/register.png)  To create an account, please go to this link: <a href=\"https://app.edenai.run/user/login\" target=\"_blank\">app.edenai.run/user/login</a>. You can create an account with your email address or by using your account on available platforms (Gmail, Github, etc.).   By creating an account with your email address, you will receive a confirmation email with a link to click. Check your spam if needed and contact us if you have any problem: contact@edenai.co  ![Login](/static/images/login.png) ## API key  By going to your account page on the platform: <a href=\"https://app.edenai.run/admin/account\" target=\"_blank\">https://app.edenai.run/admin/account</a>, you will have access to your API key to start using the different AI engines offered by Eden AI.   ![api_key](/static/images/api_key.png)  ## Sandbox API key  By going to your account page on the platform: <a href=\"https://app.edenai.run/admin/account\" target=\"_blank\">https://app.edenai.run/admin/account</a>, you will also have access to your **Sandbox** API key that will allow you to make free calls and get dummy responses in order to implement and debug Eden AI without consuming credits.   ![api_key](/static/images/sandbox_api_key.png)  # Portal Guide  Eden AI provides a web portal that allows you to do several tasks:  ![portal](/static/images/portal.png)  ### 1- Benchmark and test The platform allows you to easily compare competing engines without having to code. By uploading your data, you have access to the prediction results of the different engines. This gives you a first overview of the performance of AI engines.   ![benchmark](/static/images/benchmark.png)  ### 2- Cost management The <a href=\"https://app.edenai.run/admin/cost-management\" target=\"_blank\">cost management page</a> also allows you to centralize the costs associated with the different engines with various filters to simplify the analysis.   This page also allows you to define monthly budget limits not to be exceeded to secure the use of different AI engines.   ![cost-management](/static/images/cost_management.png) ### 3- Account The <a href=\"https://app.edenai.run/admin/account\" target=\"_blank\">account page</a> allows you to change your information and password. It also gives you access to your API key that you can renew if needed.   This page also allows you to add a credit card and to buy with credits to use all the engines offered by Eden AI.   ![account](/static/images/account.png)   # API Guide  Eden AI API has different endpoints that refer to different AI services. The connected providers are thus parameters that the user can easily change.
 *
 * OpenAPI spec version: v1
 * Contact: contact@edenai.co
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.24
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace edenai\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use edenai\Client\ApiException;
use edenai\Client\Configuration;
use edenai\Client\HeaderSelector;
use edenai\Client\ObjectSerializer;

/**
 * TextApi Class Doc Comment
 *
 * @category Class
 * @package  edenai\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TextApi
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
     * Operation keywordExtraction
     *
     * @param  string $language Language code of text (ex: fr-FR (French), en-US (English), es-ES (Spanish)) (required)
     * @param  string $text Text to analyze (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;]) (required)
     *
     * @throws \edenai\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \edenai\Client\Model\InlineResponse2005
     */
    public function keywordExtraction($language, $text, $providers)
    {
        list($response) = $this->keywordExtractionWithHttpInfo($language, $text, $providers);
        return $response;
    }

    /**
     * Operation keywordExtractionWithHttpInfo
     *
     * @param  string $language Language code of text (ex: fr-FR (French), en-US (English), es-ES (Spanish)) (required)
     * @param  string $text Text to analyze (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;]) (required)
     *
     * @throws \edenai\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \edenai\Client\Model\InlineResponse2005, HTTP status code, HTTP response headers (array of strings)
     */
    public function keywordExtractionWithHttpInfo($language, $text, $providers)
    {
        $returnType = '\edenai\Client\Model\InlineResponse2005';
        $request = $this->keywordExtractionRequest($language, $text, $providers);

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
                if ($returnType !== 'string') {
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
                        '\edenai\Client\Model\InlineResponse2005',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation keywordExtractionAsync
     *
     * 
     *
     * @param  string $language Language code of text (ex: fr-FR (French), en-US (English), es-ES (Spanish)) (required)
     * @param  string $text Text to analyze (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;]) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function keywordExtractionAsync($language, $text, $providers)
    {
        return $this->keywordExtractionAsyncWithHttpInfo($language, $text, $providers)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation keywordExtractionAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $language Language code of text (ex: fr-FR (French), en-US (English), es-ES (Spanish)) (required)
     * @param  string $text Text to analyze (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;]) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function keywordExtractionAsyncWithHttpInfo($language, $text, $providers)
    {
        $returnType = '\edenai\Client\Model\InlineResponse2005';
        $request = $this->keywordExtractionRequest($language, $text, $providers);

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
     * Create request for operation 'keywordExtraction'
     *
     * @param  string $language Language code of text (ex: fr-FR (French), en-US (English), es-ES (Spanish)) (required)
     * @param  string $text Text to analyze (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;]) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function keywordExtractionRequest($language, $text, $providers)
    {
        // verify the required parameter 'language' is set
        if ($language === null || (is_array($language) && count($language) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $language when calling keywordExtraction'
            );
        }
        if (strlen($language) < 1) {
            throw new \InvalidArgumentException('invalid length for "$language" when calling TextApi.keywordExtraction, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'text' is set
        if ($text === null || (is_array($text) && count($text) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $text when calling keywordExtraction'
            );
        }
        if (strlen($text) < 1) {
            throw new \InvalidArgumentException('invalid length for "$text" when calling TextApi.keywordExtraction, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'providers' is set
        if ($providers === null || (is_array($providers) && count($providers) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $providers when calling keywordExtraction'
            );
        }
        if (strlen($providers) < 1) {
            throw new \InvalidArgumentException('invalid length for "$providers" when calling TextApi.keywordExtraction, must be bigger than or equal to 1.');
        }


        $resourcePath = '/pretrained/text/keyword_extraction';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // form params
        if ($language !== null) {
            $formParams['language'] = ObjectSerializer::toFormValue($language);
        }
        // form params
        if ($text !== null) {
            $formParams['text'] = ObjectSerializer::toFormValue($text);
        }
        // form params
        if ($providers !== null) {
            $formParams['providers'] = ObjectSerializer::toFormValue($providers);
        }
        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/x-www-form-urlencoded']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
     * Operation namedEntityRecognition
     *
     * @param  string $language Language code of text (ex: fr-FR (French), en-US (English), es-ES (Spanish)) (required)
     * @param  string $text Text to analyze (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;,&#39;google&#39;]) (required)
     *
     * @throws \edenai\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \edenai\Client\Model\InlineResponse2006
     */
    public function namedEntityRecognition($language, $text, $providers)
    {
        list($response) = $this->namedEntityRecognitionWithHttpInfo($language, $text, $providers);
        return $response;
    }

    /**
     * Operation namedEntityRecognitionWithHttpInfo
     *
     * @param  string $language Language code of text (ex: fr-FR (French), en-US (English), es-ES (Spanish)) (required)
     * @param  string $text Text to analyze (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;,&#39;google&#39;]) (required)
     *
     * @throws \edenai\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \edenai\Client\Model\InlineResponse2006, HTTP status code, HTTP response headers (array of strings)
     */
    public function namedEntityRecognitionWithHttpInfo($language, $text, $providers)
    {
        $returnType = '\edenai\Client\Model\InlineResponse2006';
        $request = $this->namedEntityRecognitionRequest($language, $text, $providers);

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
                if ($returnType !== 'string') {
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
                        '\edenai\Client\Model\InlineResponse2006',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation namedEntityRecognitionAsync
     *
     * 
     *
     * @param  string $language Language code of text (ex: fr-FR (French), en-US (English), es-ES (Spanish)) (required)
     * @param  string $text Text to analyze (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;,&#39;google&#39;]) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function namedEntityRecognitionAsync($language, $text, $providers)
    {
        return $this->namedEntityRecognitionAsyncWithHttpInfo($language, $text, $providers)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation namedEntityRecognitionAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $language Language code of text (ex: fr-FR (French), en-US (English), es-ES (Spanish)) (required)
     * @param  string $text Text to analyze (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;,&#39;google&#39;]) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function namedEntityRecognitionAsyncWithHttpInfo($language, $text, $providers)
    {
        $returnType = '\edenai\Client\Model\InlineResponse2006';
        $request = $this->namedEntityRecognitionRequest($language, $text, $providers);

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
     * Create request for operation 'namedEntityRecognition'
     *
     * @param  string $language Language code of text (ex: fr-FR (French), en-US (English), es-ES (Spanish)) (required)
     * @param  string $text Text to analyze (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;,&#39;google&#39;]) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function namedEntityRecognitionRequest($language, $text, $providers)
    {
        // verify the required parameter 'language' is set
        if ($language === null || (is_array($language) && count($language) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $language when calling namedEntityRecognition'
            );
        }
        if (strlen($language) < 1) {
            throw new \InvalidArgumentException('invalid length for "$language" when calling TextApi.namedEntityRecognition, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'text' is set
        if ($text === null || (is_array($text) && count($text) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $text when calling namedEntityRecognition'
            );
        }
        if (strlen($text) < 1) {
            throw new \InvalidArgumentException('invalid length for "$text" when calling TextApi.namedEntityRecognition, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'providers' is set
        if ($providers === null || (is_array($providers) && count($providers) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $providers when calling namedEntityRecognition'
            );
        }
        if (strlen($providers) < 1) {
            throw new \InvalidArgumentException('invalid length for "$providers" when calling TextApi.namedEntityRecognition, must be bigger than or equal to 1.');
        }


        $resourcePath = '/pretrained/text/named_entity_recognition';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // form params
        if ($language !== null) {
            $formParams['language'] = ObjectSerializer::toFormValue($language);
        }
        // form params
        if ($text !== null) {
            $formParams['text'] = ObjectSerializer::toFormValue($text);
        }
        // form params
        if ($providers !== null) {
            $formParams['providers'] = ObjectSerializer::toFormValue($providers);
        }
        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/x-www-form-urlencoded']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
     * Operation sentimentAnalysis
     *
     * @param  string $language Language code of text (ex: fr-FR (French), en-US (English), es-ES (Spanish)) (required)
     * @param  string $text Text to analyze (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;, &#39;google&#39;]) (required)
     *
     * @throws \edenai\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \edenai\Client\Model\InlineResponse2007
     */
    public function sentimentAnalysis($language, $text, $providers)
    {
        list($response) = $this->sentimentAnalysisWithHttpInfo($language, $text, $providers);
        return $response;
    }

    /**
     * Operation sentimentAnalysisWithHttpInfo
     *
     * @param  string $language Language code of text (ex: fr-FR (French), en-US (English), es-ES (Spanish)) (required)
     * @param  string $text Text to analyze (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;, &#39;google&#39;]) (required)
     *
     * @throws \edenai\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \edenai\Client\Model\InlineResponse2007, HTTP status code, HTTP response headers (array of strings)
     */
    public function sentimentAnalysisWithHttpInfo($language, $text, $providers)
    {
        $returnType = '\edenai\Client\Model\InlineResponse2007';
        $request = $this->sentimentAnalysisRequest($language, $text, $providers);

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
                if ($returnType !== 'string') {
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
                        '\edenai\Client\Model\InlineResponse2007',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation sentimentAnalysisAsync
     *
     * 
     *
     * @param  string $language Language code of text (ex: fr-FR (French), en-US (English), es-ES (Spanish)) (required)
     * @param  string $text Text to analyze (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;, &#39;google&#39;]) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sentimentAnalysisAsync($language, $text, $providers)
    {
        return $this->sentimentAnalysisAsyncWithHttpInfo($language, $text, $providers)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation sentimentAnalysisAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $language Language code of text (ex: fr-FR (French), en-US (English), es-ES (Spanish)) (required)
     * @param  string $text Text to analyze (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;, &#39;google&#39;]) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sentimentAnalysisAsyncWithHttpInfo($language, $text, $providers)
    {
        $returnType = '\edenai\Client\Model\InlineResponse2007';
        $request = $this->sentimentAnalysisRequest($language, $text, $providers);

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
     * Create request for operation 'sentimentAnalysis'
     *
     * @param  string $language Language code of text (ex: fr-FR (French), en-US (English), es-ES (Spanish)) (required)
     * @param  string $text Text to analyze (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;, &#39;google&#39;]) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function sentimentAnalysisRequest($language, $text, $providers)
    {
        // verify the required parameter 'language' is set
        if ($language === null || (is_array($language) && count($language) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $language when calling sentimentAnalysis'
            );
        }
        if (strlen($language) < 1) {
            throw new \InvalidArgumentException('invalid length for "$language" when calling TextApi.sentimentAnalysis, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'text' is set
        if ($text === null || (is_array($text) && count($text) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $text when calling sentimentAnalysis'
            );
        }
        if (strlen($text) < 1) {
            throw new \InvalidArgumentException('invalid length for "$text" when calling TextApi.sentimentAnalysis, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'providers' is set
        if ($providers === null || (is_array($providers) && count($providers) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $providers when calling sentimentAnalysis'
            );
        }
        if (strlen($providers) < 1) {
            throw new \InvalidArgumentException('invalid length for "$providers" when calling TextApi.sentimentAnalysis, must be bigger than or equal to 1.');
        }


        $resourcePath = '/pretrained/text/sentiment_analysis';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // form params
        if ($language !== null) {
            $formParams['language'] = ObjectSerializer::toFormValue($language);
        }
        // form params
        if ($text !== null) {
            $formParams['text'] = ObjectSerializer::toFormValue($text);
        }
        // form params
        if ($providers !== null) {
            $formParams['providers'] = ObjectSerializer::toFormValue($providers);
        }
        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/x-www-form-urlencoded']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
     * Operation syntaxAnalysis
     *
     * @param  string $language Language code of text (ex: fr-FR (French), en-US (English), es-ES (Spanish)) (required)
     * @param  string $text Text to analyze (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;,&#39;google&#39;]) (required)
     *
     * @throws \edenai\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \edenai\Client\Model\InlineResponse2008
     */
    public function syntaxAnalysis($language, $text, $providers)
    {
        list($response) = $this->syntaxAnalysisWithHttpInfo($language, $text, $providers);
        return $response;
    }

    /**
     * Operation syntaxAnalysisWithHttpInfo
     *
     * @param  string $language Language code of text (ex: fr-FR (French), en-US (English), es-ES (Spanish)) (required)
     * @param  string $text Text to analyze (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;,&#39;google&#39;]) (required)
     *
     * @throws \edenai\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \edenai\Client\Model\InlineResponse2008, HTTP status code, HTTP response headers (array of strings)
     */
    public function syntaxAnalysisWithHttpInfo($language, $text, $providers)
    {
        $returnType = '\edenai\Client\Model\InlineResponse2008';
        $request = $this->syntaxAnalysisRequest($language, $text, $providers);

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
                if ($returnType !== 'string') {
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
                        '\edenai\Client\Model\InlineResponse2008',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation syntaxAnalysisAsync
     *
     * 
     *
     * @param  string $language Language code of text (ex: fr-FR (French), en-US (English), es-ES (Spanish)) (required)
     * @param  string $text Text to analyze (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;,&#39;google&#39;]) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function syntaxAnalysisAsync($language, $text, $providers)
    {
        return $this->syntaxAnalysisAsyncWithHttpInfo($language, $text, $providers)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation syntaxAnalysisAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $language Language code of text (ex: fr-FR (French), en-US (English), es-ES (Spanish)) (required)
     * @param  string $text Text to analyze (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;,&#39;google&#39;]) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function syntaxAnalysisAsyncWithHttpInfo($language, $text, $providers)
    {
        $returnType = '\edenai\Client\Model\InlineResponse2008';
        $request = $this->syntaxAnalysisRequest($language, $text, $providers);

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
     * Create request for operation 'syntaxAnalysis'
     *
     * @param  string $language Language code of text (ex: fr-FR (French), en-US (English), es-ES (Spanish)) (required)
     * @param  string $text Text to analyze (required)
     * @param  string $providers Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;,&#39;google&#39;]) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function syntaxAnalysisRequest($language, $text, $providers)
    {
        // verify the required parameter 'language' is set
        if ($language === null || (is_array($language) && count($language) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $language when calling syntaxAnalysis'
            );
        }
        if (strlen($language) < 1) {
            throw new \InvalidArgumentException('invalid length for "$language" when calling TextApi.syntaxAnalysis, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'text' is set
        if ($text === null || (is_array($text) && count($text) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $text when calling syntaxAnalysis'
            );
        }
        if (strlen($text) < 1) {
            throw new \InvalidArgumentException('invalid length for "$text" when calling TextApi.syntaxAnalysis, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'providers' is set
        if ($providers === null || (is_array($providers) && count($providers) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $providers when calling syntaxAnalysis'
            );
        }
        if (strlen($providers) < 1) {
            throw new \InvalidArgumentException('invalid length for "$providers" when calling TextApi.syntaxAnalysis, must be bigger than or equal to 1.');
        }


        $resourcePath = '/pretrained/text/syntax_analysis';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // form params
        if ($language !== null) {
            $formParams['language'] = ObjectSerializer::toFormValue($language);
        }
        // form params
        if ($text !== null) {
            $formParams['text'] = ObjectSerializer::toFormValue($text);
        }
        // form params
        if ($providers !== null) {
            $formParams['providers'] = ObjectSerializer::toFormValue($providers);
        }
        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/x-www-form-urlencoded']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
