# edenai\TextApi

All URIs are relative to *//https://api.edenai.run/v1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**keywordExtraction**](TextApi.md#keywordextraction) | **POST** /pretrained/text/keyword_extraction | 
[**namedEntityRecognition**](TextApi.md#namedentityrecognition) | **POST** /pretrained/text/named_entity_recognition | 
[**sentimentAnalysis**](TextApi.md#sentimentanalysis) | **POST** /pretrained/text/sentiment_analysis | 
[**syntaxAnalysis**](TextApi.md#syntaxanalysis) | **POST** /pretrained/text/syntax_analysis | 

# **keywordExtraction**
> \edenai\Model\InlineResponse2003 keywordExtraction($language2, $text2, $providers2, $language, $text, $providers)



Keyword extraction (also known as keyword detection or keyword analysis) is a text analysis technique that consists of automatically extracting the mostimportant words and expressions in a text.  **SUPPORTED LANGUAGE**  |Name|Type|Value| |----|----|-----| |**English(US)**|`string`|`en-US`| |**French**|`string`|`fr-FR`| |**Spanish**|`string`|`es-ES`|  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |[**Microsoft Azure**](https://www.edenai.co/catalog/azure-text-analytics)|`microsoft`|`v3.1`| |[**Amazon Web Services**](https://www.edenai.co/catalog/amazon-comprehend)|`amazon`|`boto3 (v1.15.18)`| |[**IBM Watson**](https://www.edenai.co/catalog/watson-natural-language-understanding)|`ibm`|`v1 (2021-08-01)`|

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\TextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language2 = "language_example"; // string | 
$text2 = "text_example"; // string | 
$providers2 = "providers_example"; // string | 
$language = "language_example"; // string | 
$text = "text_example"; // string | 
$providers = "providers_example"; // string | 

try {
    $result = $apiInstance->keywordExtraction($language2, $text2, $providers2, $language, $text, $providers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextApi->keywordExtraction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language2** | **string**|  |
 **text2** | **string**|  |
 **providers2** | **string**|  |
 **language** | **string**|  |
 **text** | **string**|  |
 **providers** | **string**|  |

### Return type

[**\edenai\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **keywordExtraction**
> \edenai\Model\InlineResponse2003 keywordExtraction($language2, $text2, $providers2, $language, $text, $providers)



Keyword extraction (also known as keyword detection or keyword analysis) is a text analysis technique that consists of automatically extracting the mostimportant words and expressions in a text.  **SUPPORTED LANGUAGE**  |Name|Type|Value| |----|----|-----| |**English(US)**|`string`|`en-US`| |**French**|`string`|`fr-FR`| |**Spanish**|`string`|`es-ES`|  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |[**Microsoft Azure**](https://www.edenai.co/catalog/azure-text-analytics)|`microsoft`|`v3.1`| |[**Amazon Web Services**](https://www.edenai.co/catalog/amazon-comprehend)|`amazon`|`boto3 (v1.15.18)`| |[**IBM Watson**](https://www.edenai.co/catalog/watson-natural-language-understanding)|`ibm`|`v1 (2021-08-01)`|

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\TextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language2 = "language_example"; // string | 
$text2 = "text_example"; // string | 
$providers2 = "providers_example"; // string | 
$language = "language_example"; // string | 
$text = "text_example"; // string | 
$providers = "providers_example"; // string | 

try {
    $result = $apiInstance->keywordExtraction($language2, $text2, $providers2, $language, $text, $providers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextApi->keywordExtraction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language2** | **string**|  |
 **text2** | **string**|  |
 **providers2** | **string**|  |
 **language** | **string**|  |
 **text** | **string**|  |
 **providers** | **string**|  |

### Return type

[**\edenai\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **namedEntityRecognition**
> \edenai\Model\InlineResponse2004 namedEntityRecognition($language2, $text2, $providers2, $language, $text, $providers)



Named Entity Recognition (also called entity identification or entity extraction) is an information extraction technique that automatically identifies named entities in a text and classifies them into predefined categories.  **SUPPORTED LANGUAGE**  |Name|Type|Value| |----|----|-----| |**English(US)**|`string`|`en-US`| |**French**|`string`|`fr-FR`| |**Spanish**|`string`|`es-ES`|  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |[**Microsoft Azure**](https://www.edenai.co/catalog/azure-text-analytics)|`microsoft`|`v3.1`| |[**Amazon Web Services**](https://www.edenai.co/catalog/amazon-comprehend)|`amazon`|`boto3 (v1.15.18)`| |[**IBM Watson**](https://www.edenai.co/catalog/watson-natural-language-understanding)|`ibm`|`v1 (2021-08-01)`| |[**Google Cloud**](https://www.edenai.co/catalog/google-cloud-natural-language)|`google`|`v1`|

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\TextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language2 = "language_example"; // string | 
$text2 = "text_example"; // string | 
$providers2 = "providers_example"; // string | 
$language = "language_example"; // string | 
$text = "text_example"; // string | 
$providers = "providers_example"; // string | 

try {
    $result = $apiInstance->namedEntityRecognition($language2, $text2, $providers2, $language, $text, $providers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextApi->namedEntityRecognition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language2** | **string**|  |
 **text2** | **string**|  |
 **providers2** | **string**|  |
 **language** | **string**|  |
 **text** | **string**|  |
 **providers** | **string**|  |

### Return type

[**\edenai\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **namedEntityRecognition**
> \edenai\Model\InlineResponse2004 namedEntityRecognition($language2, $text2, $providers2, $language, $text, $providers)



Named Entity Recognition (also called entity identification or entity extraction) is an information extraction technique that automatically identifies named entities in a text and classifies them into predefined categories.  **SUPPORTED LANGUAGE**  |Name|Type|Value| |----|----|-----| |**English(US)**|`string`|`en-US`| |**French**|`string`|`fr-FR`| |**Spanish**|`string`|`es-ES`|  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |[**Microsoft Azure**](https://www.edenai.co/catalog/azure-text-analytics)|`microsoft`|`v3.1`| |[**Amazon Web Services**](https://www.edenai.co/catalog/amazon-comprehend)|`amazon`|`boto3 (v1.15.18)`| |[**IBM Watson**](https://www.edenai.co/catalog/watson-natural-language-understanding)|`ibm`|`v1 (2021-08-01)`| |[**Google Cloud**](https://www.edenai.co/catalog/google-cloud-natural-language)|`google`|`v1`|

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\TextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language2 = "language_example"; // string | 
$text2 = "text_example"; // string | 
$providers2 = "providers_example"; // string | 
$language = "language_example"; // string | 
$text = "text_example"; // string | 
$providers = "providers_example"; // string | 

try {
    $result = $apiInstance->namedEntityRecognition($language2, $text2, $providers2, $language, $text, $providers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextApi->namedEntityRecognition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language2** | **string**|  |
 **text2** | **string**|  |
 **providers2** | **string**|  |
 **language** | **string**|  |
 **text** | **string**|  |
 **providers** | **string**|  |

### Return type

[**\edenai\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sentimentAnalysis**
> \edenai\Model\InlineResponse2005 sentimentAnalysis($language2, $text2, $providers2, $language, $text, $providers)



Sentiment analysis API extracts sentiment in a given string of text.Sentiment analysis, also called 'opinion mining',uses natural language processing, text analysis and computational linguistics to identify and detect subjective information from the input text.  **SUPPORTED LANGUAGE**  |Name|Type|Value| |----|----|-----| |**English(US)**|`string`|`en-US`| |**French**|`string`|`fr-FR`| |**Spanish**|`string`|`es-ES`| |**Dutch**|`string`|`nl-NL`|  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |[**Microsoft Azure**](https://www.edenai.co/catalog/azure-text-analytics)|`microsoft`|`v3.1`| |[**Amazon Web Services**](https://www.edenai.co/catalog/amazon-comprehend)|`amazon`|`boto3 (v1.15.18)`| |[**IBM Watson**](https://www.edenai.co/catalog/watson-natural-language-understanding)|`ibm`|`v1 (2021-08-01)`| |[**Google Cloud**](https://www.edenai.co/catalog/google-cloud-natural-language)|`google`|`v1`| |[**Lettria**](https://www.edenai.co/catalog/Lettria)|`lettria`|`v5.5.2`|

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\TextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language2 = "language_example"; // string | 
$text2 = "text_example"; // string | 
$providers2 = "providers_example"; // string | 
$language = "language_example"; // string | 
$text = "text_example"; // string | 
$providers = "providers_example"; // string | 

try {
    $result = $apiInstance->sentimentAnalysis($language2, $text2, $providers2, $language, $text, $providers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextApi->sentimentAnalysis: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language2** | **string**|  |
 **text2** | **string**|  |
 **providers2** | **string**|  |
 **language** | **string**|  |
 **text** | **string**|  |
 **providers** | **string**|  |

### Return type

[**\edenai\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sentimentAnalysis**
> \edenai\Model\InlineResponse2005 sentimentAnalysis($language2, $text2, $providers2, $language, $text, $providers)



Sentiment analysis API extracts sentiment in a given string of text.Sentiment analysis, also called 'opinion mining',uses natural language processing, text analysis and computational linguistics to identify and detect subjective information from the input text.  **SUPPORTED LANGUAGE**  |Name|Type|Value| |----|----|-----| |**English(US)**|`string`|`en-US`| |**French**|`string`|`fr-FR`| |**Spanish**|`string`|`es-ES`| |**Dutch**|`string`|`nl-NL`|  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |[**Microsoft Azure**](https://www.edenai.co/catalog/azure-text-analytics)|`microsoft`|`v3.1`| |[**Amazon Web Services**](https://www.edenai.co/catalog/amazon-comprehend)|`amazon`|`boto3 (v1.15.18)`| |[**IBM Watson**](https://www.edenai.co/catalog/watson-natural-language-understanding)|`ibm`|`v1 (2021-08-01)`| |[**Google Cloud**](https://www.edenai.co/catalog/google-cloud-natural-language)|`google`|`v1`| |[**Lettria**](https://www.edenai.co/catalog/Lettria)|`lettria`|`v5.5.2`|

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\TextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language2 = "language_example"; // string | 
$text2 = "text_example"; // string | 
$providers2 = "providers_example"; // string | 
$language = "language_example"; // string | 
$text = "text_example"; // string | 
$providers = "providers_example"; // string | 

try {
    $result = $apiInstance->sentimentAnalysis($language2, $text2, $providers2, $language, $text, $providers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextApi->sentimentAnalysis: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language2** | **string**|  |
 **text2** | **string**|  |
 **providers2** | **string**|  |
 **language** | **string**|  |
 **text** | **string**|  |
 **providers** | **string**|  |

### Return type

[**\edenai\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **syntaxAnalysis**
> \edenai\Model\InlineResponse2006 syntaxAnalysis($language2, $text2, $providers2, $language, $text, $providers)



Syntax analysis consists principaly in highlighting the structure of a text.  **SUPPORTED LANGUAGE**  |Name|Type|Value| |----|----|-----| |**English(US)**|`string`|`en-US`| |**French**|`string`|`fr-FR`| |**Spanish**|`string`|`es-ES`|  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |[**Microsoft Azure**](https://www.edenai.co/catalog/azure-text-analytics)|`microsoft`|`v3.1`| |[**Amazon Web Services**](https://www.edenai.co/catalog/amazon-comprehend)|`amazon`|`boto3 (v1.15.18)`| |[**IBM Watson**](https://www.edenai.co/catalog/watson-natural-language-understanding)|`ibm`|`v1 (2021-08-01)`| |[**Lettria**](https://www.edenai.co/catalog/Lettria)|`lettria`|`v5.5.2`| |[**Google Cloud**](https://www.edenai.co/catalog/google-cloud-natural-language)|`google`|`v1`|

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\TextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language2 = "language_example"; // string | 
$text2 = "text_example"; // string | 
$providers2 = "providers_example"; // string | 
$language = "language_example"; // string | 
$text = "text_example"; // string | 
$providers = "providers_example"; // string | 

try {
    $result = $apiInstance->syntaxAnalysis($language2, $text2, $providers2, $language, $text, $providers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextApi->syntaxAnalysis: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language2** | **string**|  |
 **text2** | **string**|  |
 **providers2** | **string**|  |
 **language** | **string**|  |
 **text** | **string**|  |
 **providers** | **string**|  |

### Return type

[**\edenai\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **syntaxAnalysis**
> \edenai\Model\InlineResponse2006 syntaxAnalysis($language2, $text2, $providers2, $language, $text, $providers)



Syntax analysis consists principaly in highlighting the structure of a text.  **SUPPORTED LANGUAGE**  |Name|Type|Value| |----|----|-----| |**English(US)**|`string`|`en-US`| |**French**|`string`|`fr-FR`| |**Spanish**|`string`|`es-ES`|  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |[**Microsoft Azure**](https://www.edenai.co/catalog/azure-text-analytics)|`microsoft`|`v3.1`| |[**Amazon Web Services**](https://www.edenai.co/catalog/amazon-comprehend)|`amazon`|`boto3 (v1.15.18)`| |[**IBM Watson**](https://www.edenai.co/catalog/watson-natural-language-understanding)|`ibm`|`v1 (2021-08-01)`| |[**Lettria**](https://www.edenai.co/catalog/Lettria)|`lettria`|`v5.5.2`| |[**Google Cloud**](https://www.edenai.co/catalog/google-cloud-natural-language)|`google`|`v1`|

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\TextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language2 = "language_example"; // string | 
$text2 = "text_example"; // string | 
$providers2 = "providers_example"; // string | 
$language = "language_example"; // string | 
$text = "text_example"; // string | 
$providers = "providers_example"; // string | 

try {
    $result = $apiInstance->syntaxAnalysis($language2, $text2, $providers2, $language, $text, $providers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextApi->syntaxAnalysis: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language2** | **string**|  |
 **text2** | **string**|  |
 **providers2** | **string**|  |
 **language** | **string**|  |
 **text** | **string**|  |
 **providers** | **string**|  |

### Return type

[**\edenai\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

