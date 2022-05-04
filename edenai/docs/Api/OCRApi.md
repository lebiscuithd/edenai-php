# edenai\OCRApi

All URIs are relative to *https://api.edenai.run/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ocr**](OCRApi.md#ocr) | **POST** /pretrained/ocr/ocr | 
[**ocrInvoice**](OCRApi.md#ocrInvoice) | **POST** /pretrained/ocr/ocr_invoice | 
[**ocrTables**](OCRApi.md#ocrTables) | **POST** /pretrained/ocr/ocr_tables | 


# **ocr**
> \edenai\Model\InlineResponse2003 ocr($files, $providers, $language)



Optical Character Recognition or optical character reader (OCR) is the electronic or mechanical conversion of images of typed, handwritten or printed text into machine-encoded text, whether from a scanned document, a photo of a document  **SUPPORTED LANGUAGE**  |Name|Type|Value| |----|----|-----| |**Arabic**|`string`|`ar-XA`| |**Chinese - Simplified**|`string`|`zh-CN`| |**Chinese - Traditional**|`string`|`zh-TW`| |**Czech**|`string`|`cz-CZ`| |**Danish**|`string`|`da-DK`| |**Dutch**|`string`|`nl-NL`| |**English**|`string`|`en-US`| |**Finnish**|`string`|`fn-FN`| |**French**|`string`|`fr-FR`| |**German**|`string`|`de-DE`| |**Greek**|`string`|`gr-GR`| |**Hungarian**|`string`|`hu-HU`| |**Italian**|`string`|`it-IT`| |**Japanese**|`string`|`ja-JP`| |**Korean**|`string`|`ko-KR`| |**Polish**|`string`|`pl-PO`| |**Portuguese**|`string`|`pt-PT`| |**Russian**|`string`|`ru-RU`| |**Swedish**|`string`|`sw-SW`| |**Spanish**|`string`|`es-ES`| |**Turkish**|`string`|`tr-TR`|  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------|

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\OCRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$files = "/path/to/file.txt"; // \SplFileObject | File to analyse (ex: pdf, jpg, jpeg, png, tiff)
$providers = "providers_example"; // string | Providers to compare (ex: [ 'amazon', 'microsoft', 'ibm', 'google'])
$language = "language_example"; // string | Language code expected (ex: fr-FR)

try {
    $result = $apiInstance->ocr($files, $providers, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OCRApi->ocr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | **\SplFileObject**| File to analyse (ex: pdf, jpg, jpeg, png, tiff) |
 **providers** | **string**| Providers to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;ibm&#39;, &#39;google&#39;]) |
 **language** | **string**| Language code expected (ex: fr-FR) |

### Return type

[**\edenai\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ocrInvoice**
> \edenai\Model\InlineResponse2004 ocrInvoice($files, $providers, $language)



The OCR Invoice API enables customers to take invoices in a variety of formats and return structured data to automate the invoice processing.  **SUPPORTED LANGUAGE**  |Name|Type|Value| |----|----|-----| |**English(US)**|`string`|`en-US`| |**French**|`string`|`fr-FR`| |**Spanish**|`string`|`es-ES`|  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------|

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\OCRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$files = "/path/to/file.txt"; // \SplFileObject | File Image to analyse (ex: pdf, jpg, jpeg, png)
$providers = "providers_example"; // string | Provider to compare (ex: [ 'mindee', 'microsoft'])
$language = "language_example"; // string | Language code of invoice (ex: fr-FR (French), en-US (English), es-ES (Spanish))

try {
    $result = $apiInstance->ocrInvoice($files, $providers, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OCRApi->ocrInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | **\SplFileObject**| File Image to analyse (ex: pdf, jpg, jpeg, png) |
 **providers** | **string**| Provider to compare (ex: [ &#39;mindee&#39;, &#39;microsoft&#39;]) |
 **language** | **string**| Language code of invoice (ex: fr-FR (French), en-US (English), es-ES (Spanish)) |

### Return type

[**\edenai\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ocrTables**
> \edenai\Model\InlineResponse2004 ocrTables($files, $providers, $language)



The OCR Table API allows customers to analyze documents containing tables and return structured representation of said tables in the form of a Json object  **SUPPORTED LANGUAGE**  |Name|Type|Value| |----|----|-----| |**English(US)**|`string`|`en-US`| |**French**|`string`|`fr-FR`| |**Spanish**|`string`|`es-ES`| |**German**|`string`|`de-DE`| |**Italian**|`string`|`it-IT`| |**Portuguese**|`string`|`pt-PT`|  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------|

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\OCRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$files = "/path/to/file.txt"; // \SplFileObject | File to analyse (ex: pdf, jpg, jpeg, png, tiff)
$providers = "providers_example"; // string | Providers to compare (ex: [ 'amazon', 'microsoft', 'google'])
$language = "language_example"; // string | Language code expected (ex: fr-FR)

try {
    $result = $apiInstance->ocrTables($files, $providers, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OCRApi->ocrTables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | **\SplFileObject**| File to analyse (ex: pdf, jpg, jpeg, png, tiff) |
 **providers** | **string**| Providers to compare (ex: [ &#39;amazon&#39;, &#39;microsoft&#39;, &#39;google&#39;]) |
 **language** | **string**| Language code expected (ex: fr-FR) |

### Return type

[**\edenai\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

