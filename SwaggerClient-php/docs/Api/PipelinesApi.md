# edenai\PipelinesApi

All URIs are relative to *//https://api.edenai.run/v1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pipelines**](PipelinesApi.md#pipelines) | **POST** /pipelines | 

# **pipelines**
> \edenai\Model\InlineResponse200 pipelines($description, $text, $files, $return_only_last)



Pipelines let you combine different AI APIs from different providers into a single ready to use pipeline that you can run on your data.   **AVAILABLE FEATURES**   |Feature                   |Value|Can be first|Can be followed by| |--------------------------|-----------------------|------------|------------------| |**OCR**                     |`ocr`                  |`True`      |Sentiment Analysis, Syntax Analysis, Keyword Analysis, Named Entity Recognition, Text to speech, Translation,  Language Detection  | |**Translation**             |`automatic_translation`|`True`      |Sentiment Analysis, Syntax Analysis, Keyword Analysis, Named Entity Recognition, Text to speech                                    | |**Speech recognition**      |`speech_to_text`       |`True`      |Sentiment Analysis, Syntax Analysis, Keyword Analysis, Named Entity Recognition, Text to speech, Translation,  Language Detection  | |**Sentiment Analysis**      |`sentiment_analysis`   |`False`     |None                                                                                                                               | |**Syntax Analysis**         |`syntax_analysis`      |`False`     |None                                                                                                                               | |**Keyword Analysis**        |`keyword_extraction`   |`False`     |None                                                                                                                               | |**Named Entity Recognition**|`language_detection`   |`False`-    |None                                                                                                                               | |**Language Detection**      |`language_detection`   |`False`     |None                                                                                                                               | |**Text to speech**          |`text_to_speech`       |`False`     |None                                                                                                                               |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\PipelinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$description = "description_example"; // string | 
$text = "text_example"; // string | 
$files = "files_example"; // string | 
$return_only_last = true; // bool | 

try {
    $result = $apiInstance->pipelines($description, $text, $files, $return_only_last);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PipelinesApi->pipelines: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **description** | **string**|  |
 **text** | **string**|  |
 **files** | **string****string**|  |
 **return_only_last** | **bool**|  |

### Return type

[**\edenai\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

