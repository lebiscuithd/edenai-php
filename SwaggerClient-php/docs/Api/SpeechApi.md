# edenai\SpeechApi

All URIs are relative to *//https://api.edenai.run/v1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**asynchronousSpeechRecognition**](SpeechApi.md#asynchronousspeechrecognition) | **POST** /pretrained/audio/speech_recognition_async | 
[**asynchronousSpeechRecognition_0**](SpeechApi.md#asynchronousspeechrecognition_0) | **GET** /pretrained/audio/speech_recognition_async/{job_id} | 
[**speechRecognition**](SpeechApi.md#speechrecognition) | **POST** /pretrained/audio/speech_recognition | 
[**textToSpeech**](SpeechApi.md#texttospeech) | **POST** /pretrained/audio/text_to_speech | 

# **asynchronousSpeechRecognition**
> asynchronousSpeechRecognition($language, $files, $providers, $webhook_receiver, $users_webhook_parameters)



Speech recognition is technology that can recognize spoken words, which can then be converted to text. This endpoint allows you to launch asynchronous speech recognition jobs.  **SUPPORTED LANGUAGE**  |Name|Type|Value| |----|----|-----| |**English (US)**|`string`|`en-US`| |**English (GB)**|`string`|`en-GB`| |**French**|`string`|`fr-FR`| |**Spanish**|`string`|`es-ES`| |**Dutch (Netherlands)**|`string`|`nl-NL`| |**Japanese**|`string`|`ja-JP`| |**Russian**|`string`|`ru-RU`| |**Arabic**|`string`|`ar-SA`| |**Italian**|`string`|`it-IT`| |**Korean**|`string`|`ko-KR`| |**Portuguese**|`string`|`pt-PT`| |**Turkish**|`string`|`tr-TR`| |**Indonesian**|`string`|`id-ID`| |**Malay**|`string`|`ms-MY`|  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |[**Amazon Web Services**](https://www.edenai.co/catalog/amazon-transcribe)|`amazon`|`boto3 (v1.15.18)`| |[**Assembly**](https://www.edenai.co/catalog/assembly-ai)|`assembly`|`v1`| |[**speechmatics**]()|`Speechmatics`|`v1`|

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\SpeechApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language = "language_example"; // string | 
$files = "files_example"; // string | 
$providers = "providers_example"; // string | 
$webhook_receiver = "webhook_receiver_example"; // string | 
$users_webhook_parameters = "users_webhook_parameters_example"; // string | 

try {
    $apiInstance->asynchronousSpeechRecognition($language, $files, $providers, $webhook_receiver, $users_webhook_parameters);
} catch (Exception $e) {
    echo 'Exception when calling SpeechApi->asynchronousSpeechRecognition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**|  |
 **files** | **string****string**|  |
 **providers** | **string**|  |
 **webhook_receiver** | **string**|  |
 **users_webhook_parameters** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **asynchronousSpeechRecognition_0**
> asynchronousSpeechRecognition_0($job_id)



This endpoint allows you to check the state of  your asynchronous speech recognition job and returns the results if they are ready.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\SpeechApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = "job_id_example"; // string | 

try {
    $apiInstance->asynchronousSpeechRecognition_0($job_id);
} catch (Exception $e) {
    echo 'Exception when calling SpeechApi->asynchronousSpeechRecognition_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **speechRecognition**
> \edenai\Model\InlineResponse201 speechRecognition($language, $files, $providers)



Speech recognition is technology that can recognize spoken words, which can then be converted to text.  **SUPPORTED LANGUAGE**  |Name|Type|Value| |----|----|-----| |**English (US)**|`string`|`en-US`| |**English (GB)**|`string`|`en-GB`| |**French**|`string`|`fr-FR`| |**Spanish**|`string`|`es-ES`| |**Dutch (Netherlands)**|`string`|`nl-NL`| |**Japanese**|`string`|`ja-JP`| |**Russian**|`string`|`ru-RU`| |**Arabic**|`string`|`ar-SA`| |**Italian**|`string`|`it-IT`| |**Korean**|`string`|`ko-KR`| |**Portuguese**|`string`|`pt-PT`| |**Turkish**|`string`|`tr-TR`| |**Indonesian**|`string`|`id-ID`| |**Malay**|`string`|`ms-MY`|  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |[**Microsoft Azure**](https://www.edenai.co/catalog/azure-speech-to-text)|`microsoft`|`v1.0`| |[**Amazon Web Services**](https://www.edenai.co/catalog/amazon-transcribe)|`amazon`|`boto3 (v1.15.18)`| |[**Google Cloud**](https://www.edenai.co/catalog/google-cloud-speech-to-text)|`google`|`v1p1beta1`| |[**Deepgram**](https://www.edenai.co/catalog/deepgram)|`deepgram`|`v1`| |[**Speechmatics**]()|`speechmatics`|`v1`| |[**Assembly**](https://www.edenai.co/catalog/assembly-ai)|`assembly`|`v1`|

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\SpeechApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language = "language_example"; // string | 
$files = "files_example"; // string | 
$providers = "providers_example"; // string | 

try {
    $result = $apiInstance->speechRecognition($language, $files, $providers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpeechApi->speechRecognition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**|  |
 **files** | **string****string**|  |
 **providers** | **string**|  |

### Return type

[**\edenai\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **textToSpeech**
> \edenai\Model\InlineResponse2011 textToSpeech($text, $language, $option, $providers)



Text-to-speech (TTS) system converts normal language text into speech.  **SUPPORTED LANGUAGE**  |Name|Type|Value| |----|----|-----| |**Arabic**|`string`|`ar-XA`| |**Chinese**|`string`|`cmn-CN`| |**Danish**|`string`|`da-DK`| |**Dutch**|`string`|`nl-NL`| |**English (US)**|`string`|`en-US`| |**English (UK)**|`string`|`en-GB`| |**German**|`string`|`de-DE`| |**Italy**|`string`|`it-IT`| |**Japanese**|`string`|`ja-JP`| |**Portuguese (Brazil)**|`string`|`pt-BR`| |**Portuguese (Portugal)**|`string`|`pt-PT`| |**Russian**|`string`|`ru-RU`| |**Spanish**|`string`|`es-ES`|  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |[**Microsoft Azure**](https://www.edenai.co/catalog/azure-text-to-speech)|`microsoft`|`v1.0`| |[**Amazon Web Services**](https://www.edenai.co/catalog/amazon-polly)|`amazon`|`boto3 (v1.15.18)`| |[**Google Cloud**](https://www.edenai.co/catalog/google-cloud-text-to-speech)|`google`|`v1`|

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\SpeechApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$text = "text_example"; // string | 
$language = "language_example"; // string | 
$option = "option_example"; // string | 
$providers = "providers_example"; // string | 

try {
    $result = $apiInstance->textToSpeech($text, $language, $option, $providers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpeechApi->textToSpeech: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **text** | **string**|  |
 **language** | **string**|  |
 **option** | **string**|  |
 **providers** | **string**|  |

### Return type

[**\edenai\Model\InlineResponse2011**](../Model/InlineResponse2011.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

