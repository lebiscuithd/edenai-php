# edenai\Client\TextApi

All URIs are relative to *https://api.edenai.run/v1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**keywordExtraction**](TextApi.md#keywordExtraction) | **POST** /pretrained/text/keyword_extraction | 
[**namedEntityRecognition**](TextApi.md#namedEntityRecognition) | **POST** /pretrained/text/named_entity_recognition | 
[**sentimentAnalysis**](TextApi.md#sentimentAnalysis) | **POST** /pretrained/text/sentiment_analysis | 
[**syntaxAnalysis**](TextApi.md#syntaxAnalysis) | **POST** /pretrained/text/syntax_analysis | 


# **keywordExtraction**
> \edenai\Client\Model\InlineResponse2005 keywordExtraction($language, $text, $providers)



Keyword extraction (also known as keyword detection or keyword analysis) is a text analysis technique that consists of automatically extracting the mostimportant words and expressions in a text.  **SUPPORTED LANGUAGE**  |Name|Type|Value| |----|----|-----| |**English(US)**|`string`|`en-US`| |**French**|`string`|`fr-FR`| |**Spanish**|`string`|`es-ES`|  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |**Microsoft Azure**|`microsoft`| `v3.1`  |**Amazon Web Services**|`amazon`| `boto3 (v1.15.18)`  |**IBM Watson**|`ibm`| `v1 (2021-08-01)`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Client\Api\TextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language = "language_example"; // string | Language code of text (ex: fr-FR (French), en-US (English), es-ES (Spanish))
$text = "text_example"; // string | Text to analyze
$providers = "providers_example"; // string | Provider to compare (ex: [ 'amazon', 'microsoft', 'ibm'])

try {
    $result = $apiInstance->keywordExtraction($language, $text, $providers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextApi->keywordExtraction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**| Language code of text (ex: fr-FR (French), en-US (English), es-ES (Spanish)) |
 **text** | **string**| Text to analyze |
 **providers** | **string**| Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;]) |

### Return type

[**\edenai\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **namedEntityRecognition**
> \edenai\Client\Model\InlineResponse2006 namedEntityRecognition($language, $text, $providers)



Named Entity Recognition (also called entity identification or entity extraction) is an information extraction technique that automatically identifies named entities in a text and classifies them into predefined categories.  **SUPPORTED LANGUAGE**  |Name|Type|Value| |----|----|-----| |**English(US)**|`string`|`en-US`| |**French**|`string`|`fr-FR`| |**Spanish**|`string`|`es-ES`|  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |**Microsoft Azure**|`microsoft`| `v3.1`  |**Amazon Web Services**|`amazon`| `boto3 (v1.15.18)`  |**IBM Watson**|`ibm`| `v1 (2021-08-01)`  |**Google Cloud**|`google`| `v1`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Client\Api\TextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language = "language_example"; // string | Language code of text (ex: fr-FR (French), en-US (English), es-ES (Spanish))
$text = "text_example"; // string | Text to analyze
$providers = "providers_example"; // string | Provider to compare (ex: [ 'amazon', 'microsoft', 'ibm','google'])

try {
    $result = $apiInstance->namedEntityRecognition($language, $text, $providers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextApi->namedEntityRecognition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**| Language code of text (ex: fr-FR (French), en-US (English), es-ES (Spanish)) |
 **text** | **string**| Text to analyze |
 **providers** | **string**| Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;,&#39;google&#39;]) |

### Return type

[**\edenai\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sentimentAnalysis**
> \edenai\Client\Model\InlineResponse2007 sentimentAnalysis($language, $text, $providers)



Sentiment analysis API extracts sentiment in a given string of text.Sentiment analysis, also called 'opinion mining',uses natural language processing, text analysis and computational linguistics to identify and detect subjective information from the input text.  **SUPPORTED LANGUAGE**  |Name|Type|Value| |----|----|-----| |**English(US)**|`string`|`en-US`| |**French**|`string`|`fr-FR`| |**Spanish**|`string`|`es-ES`| |**Dutch**|`string`|`nl-NL`|  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |**Microsoft Azure**|`microsoft`| `v3.1`  |**Amazon Web Services**|`amazon`| `boto3 (v1.15.18)`  |**IBM Watson**|`ibm`| `v1 (2021-08-01)`  |**Google Cloud**|`google`| `v1`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Client\Api\TextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language = "language_example"; // string | Language code of text (ex: fr-FR (French), en-US (English), es-ES (Spanish))
$text = "text_example"; // string | Text to analyze
$providers = "providers_example"; // string | Provider to compare (ex: [ 'amazon', 'microsoft', 'ibm', 'google'])

try {
    $result = $apiInstance->sentimentAnalysis($language, $text, $providers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextApi->sentimentAnalysis: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**| Language code of text (ex: fr-FR (French), en-US (English), es-ES (Spanish)) |
 **text** | **string**| Text to analyze |
 **providers** | **string**| Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;, &#39;google&#39;]) |

### Return type

[**\edenai\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **syntaxAnalysis**
> \edenai\Client\Model\InlineResponse2008 syntaxAnalysis($language, $text, $providers)



Syntax analysis consists principaly in highlighting the structure of a text.  **SUPPORTED LANGUAGE**  |Name|Type|Value| |----|----|-----| |**English(US)**|`string`|`en-US`| |**French**|`string`|`fr-FR`| |**Spanish**|`string`|`es-ES`|  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |**Amazon Web Services**|`amazon`| `boto3 (v1.15.18)`  |**IBM Watson**|`ibm`| `v1 (2021-08-01)`  |**Google Cloud**|`google`| `v1`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Client\Api\TextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language = "language_example"; // string | Language code of text (ex: fr-FR (French), en-US (English), es-ES (Spanish))
$text = "text_example"; // string | Text to analyze
$providers = "providers_example"; // string | Provider to compare (ex: [ 'amazon', 'microsoft', 'ibm','google'])

try {
    $result = $apiInstance->syntaxAnalysis($language, $text, $providers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextApi->syntaxAnalysis: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**| Language code of text (ex: fr-FR (French), en-US (English), es-ES (Spanish)) |
 **text** | **string**| Text to analyze |
 **providers** | **string**| Provider to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;,&#39;google&#39;]) |

### Return type

[**\edenai\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

