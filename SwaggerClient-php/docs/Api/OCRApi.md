# edenai\OCRApi

All URIs are relative to *//https://api.edenai.run/v1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ocr**](OCRApi.md#ocr) | **POST** /pretrained/ocr/ocr | 
[**ocrInvoice**](OCRApi.md#ocrinvoice) | **POST** /pretrained/ocr/ocr_invoice | 

# **ocr**
> \edenai\Model\InlineResponse2001 ocr($files, $providers, $language)



Optical Character Recognition or optical character reader (OCR) is the electronic or mechanical conversion of images of typed, handwritten or printed text into machine-encoded text, whether from a scanned document, a photo of a document  **SUPPORTED LANGUAGE**  |Name|Type|Value| |----|----|-----| |**Arabic**|`string`|`ar-XA`| |**Chinese - Simplified**|`string`|`zh-CN`| |**Chinese - Traditional**|`string`|`zh-TW`| |**Czech**|`string`|`cz-CZ`| |**Danish**|`string`|`da-DK`| |**Dutch**|`string`|`nl-NL`| |**English**|`string`|`en-US`| |**Finnish**|`string`|`fn-FN`| |**French**|`string`|`fr-FR`| |**German**|`string`|`de-DE`| |**Greek**|`string`|`gr-GR`| |**Hungarian**|`string`|`hu-HU`| |**Italian**|`string`|`it-IT`| |**Japanese**|`string`|`ja-JP`| |**Korean**|`string`|`ko-KR`| |**Polish**|`string`|`pl-PO`| |**Portuguese**|`string`|`pt-PT`| |**Russian**|`string`|`ru-RU`| |**Swedish**|`string`|`sw-SW`| |**Spanish**|`string`|`es-ES`| |**Turkish**|`string`|`tr-TR`|  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |[**Google Cloud**](https://www.edenai.co/catalog/google-cloud-vision-(ocr))|`google`|`v1`| |[**Microsoft Azure**](https://www.edenai.co/catalog/azure-computer-vision-(ocr))|`microsoft`|`v3.2`| |[**Amazon Web Services**](https://www.edenai.co/catalog/amazon-textract)|`amazon`|`boto3 (v1.15.18)`|

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
$files = "files_example"; // string | 
$providers = "providers_example"; // string | 
$language = "language_example"; // string | 

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
 **files** | **string****string**|  |
 **providers** | **string**|  |
 **language** | **string**|  |

### Return type

[**\edenai\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ocrInvoice**
> \edenai\Model\InlineResponse2002 ocrInvoice($files, $providers, $language)



The OCR Invoice API enables customers to take invoices in a variety of formats and return structured data to automate the invoice processing.  **SUPPORTED LANGUAGE**  |Name|Type|Value| |----|----|-----| |**English(US)**|`string`|`en-US`| |**French**|`string`|`fr-FR`| |**Spanish**|`string`|`es-ES`|  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |[**Mindee**](https://www.edenai.co/catalog/mindee)|`mindee`|`v2`| |[**Microsoft Azure**](https://www.edenai.co/catalog/azure-computer-vision-(ocr))|`microsoft`|`v2.1-preview.3`|

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
$files = "files_example"; // string | 
$providers = "providers_example"; // string | 
$language = "language_example"; // string | 

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
 **files** | **string****string**|  |
 **providers** | **string**|  |
 **language** | **string**|  |

### Return type

[**\edenai\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

