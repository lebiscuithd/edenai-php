# edenai\TranslationApi

All URIs are relative to *//https://api.edenai.run/v1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**automaticTranslation**](TranslationApi.md#automatictranslation) | **POST** /pretrained/translation/automatic_translation | 
[**langiageDetection**](TranslationApi.md#langiagedetection) | **POST** /pretrained/translation/language_detection | 

# **automaticTranslation**
> \edenai\Model\InlineResponse2007 automaticTranslation($text2, $source_language2, $target_language2, $providers2, $text, $source_language, $target_language, $providers)



Machine translation refers to the translation of a text into another language using rules, statics or ml technics.  **SUPPORTED LANGUAGE**  |Name|Type|Value| |----|----|-----| |**Afrikaans**|`string`|`af-AF`| |**Albanian**|`string`|`sq-SQ`| |**Amharic**|`string`|`am-AM`| |**Arabic**|`string`|`ar-XA`| |**Armenian**|`string`|`hy-HY`| |**Azerbaijani**|`string`|`az-AZ`| |**Basque**|`string`|`eu-BA`| |**Belarusian**|`string`|`be-BE`| |**Bengali**|`string`|`bn-BN`| |**Bosnian**|`string`|`bs-BS`| |**Bulgarian**|`string`|`bg-BG`| |**Catalan**|`string`|`ca-ES`| |**Cebuano**|`string`|`ceb-CB`| |**Chinese-Simplified**|`string`|`zh-CN`| |**Chinese-Traditional**|`string`|`zh-TW`| |**Corsican**|`string`|`co-CO`| |**Croatian**|`string`|`hr-HR`| |**Czech**|`string`|`cz-CZ`| |**Danish**|`string`|`da-DK`| |**Dutch**|`string`|`nl-NL`| |**English**|`string`|`en-US`| |**Esperanto**|`string`|`eo-EO`| |**Estonian**|`string`|`et-ET`| |**Finnish**|`string`|`fn-FN`| |**French**|`string`|`fr-FR`| |**French-Canadian**|`string`|`fr-CA`| |**Frisian**|`string`|`fy-FY`| |**Galician**|`string`|`gl-GL`| |**Georgian**|`string`|`ka-KA`| |**German**|`string`|`de-DE`| |**Greek**|`string`|`gr-GR`| |**Gujarati**|`string`|`gu-GU`| |**Haitian-Creole**|`string`|`ht-HT`| |**Hausa**|`string`|`ha-HA`| |**Hawaiian**|`string`|`haw-HA`| |**Hebrew**|`string`|`he-HE`| |**Hindi**|`string`|`hi-HI`| |**Hmong**|`string`|`hmn_HM`| |**Hungarian**|`string`|`hu-HU`| |**Icelandic**|`string`|`is-IS`| |**Igbo**|`string`|`ig-IG`| |**Indonesian**|`string`|`id-ID`| |**Irish**|`string`|`ga-IR`| |**Italian**|`string`|`it-IT`| |**Japanese**|`string`|`ja-JP`| |**Javanese**|`string`|`jv-JV`| |**Kannada**|`string`|`kn-KN`| |**Kazakh**|`string`|`kk-KK`| |**Khmer**|`string`|`km-KM`| |**Korean**|`string`|`ko-KR`| |**Kurdish**|`string`|`ku-KU`| |**Kyrgyz**|`string`|`ky-KY`| |**Lao**|`string`|`lo-LO`| |**Latin**|`string`|`la-LA`| |**Latvian**|`string`|`lv-LV`| |**Lithuanian**|`string`|`lt-LT`| |**Luxembourgish**|`string`|`lb-LB`| |**Macedonian**|`string`|`mk-MK`| |**Malagasy**|`string`|`mg-MG`| |**Malay**|`string`|`ms-MY`| |**Malayalam**|`string`|`ml-ML`| |**Maltese**|`string`|`mt-MT`| |**Maori**|`string`|`mi-MI`| |**Marathi**|`string`|`mr-MR`| |**Mongolian**|`string`|`mn-MN`| |**Myanmar-Burmese**|`string`|`my-MY`| |**Nepali**|`string`|`ne-NE`| |**Norwegian**|`string`|`no-NO`| |**Nyanja Chichewa**|`string`|`ny-NY`| |**Pashto**|`string`|`ps-PS`| |**Persian**|`string`|`fa-FA`| |**Polish**|`string`|`pl-PO`| |**Portuguese**|`string`|`pt-PT`| |**Punjabi**|`string`|`pa-PA`| |**Romanian**|`string`|`ro-RO`| |**Russian**|`string`|`ru-RU`| |**Samoan**|`string`|`sm-SM`| |**Scots Gaelic**|`string`|`gd-GD`| |**Serbian**|`string`|`sr-SR`| |**Sesotho**|`string`|`st-ST`| |**Shona**|`string`|`sn-SN`| |**Sindhi**|`string`|`sd-SD`| |**Sinhala-Sinhalese**|`string`|`si-SI`| |**Slovak**|`string`|`sk-SK`| |**Slovenian**|`string`|`sl-SL`| |**Somali**|`string`|`so-SO`| |**Spanish**|`string`|`es-ES`| |**Sundanese**|`string`|`su-SU`| |**Swahili**|`string`|`sh-SH`| |**Swedish**|`string`|`sw-SW`| |**Tagalog-Filipino**|`string`|`tl-TL`| |**Tajik**|`string`|`tg-TG`| |**Tamil**|`string`|`ta-TA`| |**Telugu**|`string`|`te-TE`| |**Thai**|`string`|`th-TH`| |**Turkish**|`string`|`tr-TR`| |**Ukrainian**|`string`|`uk-UK`| |**Urdu**|`string`|`ur-UR`| |**Uzbek**|`string`|`uz-UZ`| |**Vietnamese**|`string`|`vi-VI`| |**Welsh**|`string`|`cy-CY`| |**Xhosa**|`string`|`xh-XH`| |**Yiddish**|`string`|`yi-YI`| |**Yoruba**|`string`|`yo-YO`|  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |[**Microsoft Azure**](https://www.edenai.co/catalog/azure-translator)|`microsoft`|`v3.0`| |[**Amazon Web Services**](https://www.edenai.co/catalog/amazon-translate)|`amazon`|`boto3 (v1.15.18)`| |[**Google Cloud**](https://www.edenai.co/catalog/google-cloud-translation)|`google`|`v3`|

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\TranslationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$text2 = "text_example"; // string | 
$source_language2 = "source_language_example"; // string | 
$target_language2 = "target_language_example"; // string | 
$providers2 = "providers_example"; // string | 
$text = "text_example"; // string | 
$source_language = "source_language_example"; // string | 
$target_language = "target_language_example"; // string | 
$providers = "providers_example"; // string | 

try {
    $result = $apiInstance->automaticTranslation($text2, $source_language2, $target_language2, $providers2, $text, $source_language, $target_language, $providers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationApi->automaticTranslation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **text2** | **string**|  |
 **source_language2** | **string**|  |
 **target_language2** | **string**|  |
 **providers2** | **string**|  |
 **text** | **string**|  |
 **source_language** | **string**|  |
 **target_language** | **string**|  |
 **providers** | **string**|  |

### Return type

[**\edenai\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **automaticTranslation**
> \edenai\Model\InlineResponse2007 automaticTranslation($text2, $source_language2, $target_language2, $providers2, $text, $source_language, $target_language, $providers)



Machine translation refers to the translation of a text into another language using rules, statics or ml technics.  **SUPPORTED LANGUAGE**  |Name|Type|Value| |----|----|-----| |**Afrikaans**|`string`|`af-AF`| |**Albanian**|`string`|`sq-SQ`| |**Amharic**|`string`|`am-AM`| |**Arabic**|`string`|`ar-XA`| |**Armenian**|`string`|`hy-HY`| |**Azerbaijani**|`string`|`az-AZ`| |**Basque**|`string`|`eu-BA`| |**Belarusian**|`string`|`be-BE`| |**Bengali**|`string`|`bn-BN`| |**Bosnian**|`string`|`bs-BS`| |**Bulgarian**|`string`|`bg-BG`| |**Catalan**|`string`|`ca-ES`| |**Cebuano**|`string`|`ceb-CB`| |**Chinese-Simplified**|`string`|`zh-CN`| |**Chinese-Traditional**|`string`|`zh-TW`| |**Corsican**|`string`|`co-CO`| |**Croatian**|`string`|`hr-HR`| |**Czech**|`string`|`cz-CZ`| |**Danish**|`string`|`da-DK`| |**Dutch**|`string`|`nl-NL`| |**English**|`string`|`en-US`| |**Esperanto**|`string`|`eo-EO`| |**Estonian**|`string`|`et-ET`| |**Finnish**|`string`|`fn-FN`| |**French**|`string`|`fr-FR`| |**French-Canadian**|`string`|`fr-CA`| |**Frisian**|`string`|`fy-FY`| |**Galician**|`string`|`gl-GL`| |**Georgian**|`string`|`ka-KA`| |**German**|`string`|`de-DE`| |**Greek**|`string`|`gr-GR`| |**Gujarati**|`string`|`gu-GU`| |**Haitian-Creole**|`string`|`ht-HT`| |**Hausa**|`string`|`ha-HA`| |**Hawaiian**|`string`|`haw-HA`| |**Hebrew**|`string`|`he-HE`| |**Hindi**|`string`|`hi-HI`| |**Hmong**|`string`|`hmn_HM`| |**Hungarian**|`string`|`hu-HU`| |**Icelandic**|`string`|`is-IS`| |**Igbo**|`string`|`ig-IG`| |**Indonesian**|`string`|`id-ID`| |**Irish**|`string`|`ga-IR`| |**Italian**|`string`|`it-IT`| |**Japanese**|`string`|`ja-JP`| |**Javanese**|`string`|`jv-JV`| |**Kannada**|`string`|`kn-KN`| |**Kazakh**|`string`|`kk-KK`| |**Khmer**|`string`|`km-KM`| |**Korean**|`string`|`ko-KR`| |**Kurdish**|`string`|`ku-KU`| |**Kyrgyz**|`string`|`ky-KY`| |**Lao**|`string`|`lo-LO`| |**Latin**|`string`|`la-LA`| |**Latvian**|`string`|`lv-LV`| |**Lithuanian**|`string`|`lt-LT`| |**Luxembourgish**|`string`|`lb-LB`| |**Macedonian**|`string`|`mk-MK`| |**Malagasy**|`string`|`mg-MG`| |**Malay**|`string`|`ms-MY`| |**Malayalam**|`string`|`ml-ML`| |**Maltese**|`string`|`mt-MT`| |**Maori**|`string`|`mi-MI`| |**Marathi**|`string`|`mr-MR`| |**Mongolian**|`string`|`mn-MN`| |**Myanmar-Burmese**|`string`|`my-MY`| |**Nepali**|`string`|`ne-NE`| |**Norwegian**|`string`|`no-NO`| |**Nyanja Chichewa**|`string`|`ny-NY`| |**Pashto**|`string`|`ps-PS`| |**Persian**|`string`|`fa-FA`| |**Polish**|`string`|`pl-PO`| |**Portuguese**|`string`|`pt-PT`| |**Punjabi**|`string`|`pa-PA`| |**Romanian**|`string`|`ro-RO`| |**Russian**|`string`|`ru-RU`| |**Samoan**|`string`|`sm-SM`| |**Scots Gaelic**|`string`|`gd-GD`| |**Serbian**|`string`|`sr-SR`| |**Sesotho**|`string`|`st-ST`| |**Shona**|`string`|`sn-SN`| |**Sindhi**|`string`|`sd-SD`| |**Sinhala-Sinhalese**|`string`|`si-SI`| |**Slovak**|`string`|`sk-SK`| |**Slovenian**|`string`|`sl-SL`| |**Somali**|`string`|`so-SO`| |**Spanish**|`string`|`es-ES`| |**Sundanese**|`string`|`su-SU`| |**Swahili**|`string`|`sh-SH`| |**Swedish**|`string`|`sw-SW`| |**Tagalog-Filipino**|`string`|`tl-TL`| |**Tajik**|`string`|`tg-TG`| |**Tamil**|`string`|`ta-TA`| |**Telugu**|`string`|`te-TE`| |**Thai**|`string`|`th-TH`| |**Turkish**|`string`|`tr-TR`| |**Ukrainian**|`string`|`uk-UK`| |**Urdu**|`string`|`ur-UR`| |**Uzbek**|`string`|`uz-UZ`| |**Vietnamese**|`string`|`vi-VI`| |**Welsh**|`string`|`cy-CY`| |**Xhosa**|`string`|`xh-XH`| |**Yiddish**|`string`|`yi-YI`| |**Yoruba**|`string`|`yo-YO`|  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |[**Microsoft Azure**](https://www.edenai.co/catalog/azure-translator)|`microsoft`|`v3.0`| |[**Amazon Web Services**](https://www.edenai.co/catalog/amazon-translate)|`amazon`|`boto3 (v1.15.18)`| |[**Google Cloud**](https://www.edenai.co/catalog/google-cloud-translation)|`google`|`v3`|

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\TranslationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$text2 = "text_example"; // string | 
$source_language2 = "source_language_example"; // string | 
$target_language2 = "target_language_example"; // string | 
$providers2 = "providers_example"; // string | 
$text = "text_example"; // string | 
$source_language = "source_language_example"; // string | 
$target_language = "target_language_example"; // string | 
$providers = "providers_example"; // string | 

try {
    $result = $apiInstance->automaticTranslation($text2, $source_language2, $target_language2, $providers2, $text, $source_language, $target_language, $providers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationApi->automaticTranslation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **text2** | **string**|  |
 **source_language2** | **string**|  |
 **target_language2** | **string**|  |
 **providers2** | **string**|  |
 **text** | **string**|  |
 **source_language** | **string**|  |
 **target_language** | **string**|  |
 **providers** | **string**|  |

### Return type

[**\edenai\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **langiageDetection**
> \edenai\Model\InlineResponse2008 langiageDetection($text2, $providers2, $text, $providers)



Language Detection or language guessing is the algorithm of determining which natural language given content is in.  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |[**Microsoft Azure**](https://www.edenai.co/catalog/azure-translator)|`microsoft`|`v3.1`| |[**Amazon Web Services**](https://www.edenai.co/catalog/amazon-translate)|`amazon`|`boto3 (v1.15.18)`| |[**Google Cloud**](https://www.edenai.co/catalog/google-cloud-translation)|`google`|`v1`| |[**Lettria**](https://www.edenai.co/catalog/Lettria)|`lettria`|`v5.5.2`|

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\TranslationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$text2 = "text_example"; // string | 
$providers2 = "providers_example"; // string | 
$text = "text_example"; // string | 
$providers = "providers_example"; // string | 

try {
    $result = $apiInstance->langiageDetection($text2, $providers2, $text, $providers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationApi->langiageDetection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **text2** | **string**|  |
 **providers2** | **string**|  |
 **text** | **string**|  |
 **providers** | **string**|  |

### Return type

[**\edenai\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **langiageDetection**
> \edenai\Model\InlineResponse2008 langiageDetection($text2, $providers2, $text, $providers)



Language Detection or language guessing is the algorithm of determining which natural language given content is in.  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |[**Microsoft Azure**](https://www.edenai.co/catalog/azure-translator)|`microsoft`|`v3.1`| |[**Amazon Web Services**](https://www.edenai.co/catalog/amazon-translate)|`amazon`|`boto3 (v1.15.18)`| |[**Google Cloud**](https://www.edenai.co/catalog/google-cloud-translation)|`google`|`v1`| |[**Lettria**](https://www.edenai.co/catalog/Lettria)|`lettria`|`v5.5.2`|

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\TranslationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$text2 = "text_example"; // string | 
$providers2 = "providers_example"; // string | 
$text = "text_example"; // string | 
$providers = "providers_example"; // string | 

try {
    $result = $apiInstance->langiageDetection($text2, $providers2, $text, $providers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationApi->langiageDetection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **text2** | **string**|  |
 **providers2** | **string**|  |
 **text** | **string**|  |
 **providers** | **string**|  |

### Return type

[**\edenai\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

