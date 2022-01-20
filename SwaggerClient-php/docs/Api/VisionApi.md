# edenai\VisionApi

All URIs are relative to *//https://api.edenai.run/v1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**explicitContentDetection**](VisionApi.md#explicitcontentdetection) | **POST** /pretrained/vision/explicit_content_detection | 
[**faceDetection**](VisionApi.md#facedetection) | **POST** /pretrained/vision/face_detection | 
[**objectDetection**](VisionApi.md#objectdetection) | **POST** /pretrained/vision/object_detection | 

# **explicitContentDetection**
> \edenai\Model\InlineResponse2009 explicitContentDetection($files, $providers)



Explicit Content Detection detects adult only content in videos, who is generally inappropriate for people under the age of 18 and includes nudity, sexual activity and pornography ...  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |[**Microsoft Azure**](https://www.edenai.co/catalog/azure-computer-vision)|`microsoft`|`v3.2`| |[**Amazon Web Services**](https://www.edenai.co/catalog/amazon-rekognition)|`amazon`|`boto3 (v1.15.18)`| |[**Google Cloud**](https://www.edenai.co/catalog/google-cloud-vision)|`google`|`v1`|

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\VisionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$files = "files_example"; // string | 
$providers = "providers_example"; // string | 

try {
    $result = $apiInstance->explicitContentDetection($files, $providers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VisionApi->explicitContentDetection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | **string****string**|  |
 **providers** | **string**|  |

### Return type

[**\edenai\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **faceDetection**
> \edenai\Model\InlineResponse20010 faceDetection($files, $providers)



Face Detection is a computer technology being used in a variety of applicationsthat identifies human faces in digital images.  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |[**Microsoft Azure**](https://www.edenai.co/catalog/azure-computer-vision)|`microsoft`|`v3.2`| |[**Amazon Web Services**](https://www.edenai.co/catalog/amazon-rekognition)|`amazon`|`boto3 (v1.15.18)`| |[**Google Cloud**](https://www.edenai.co/catalog/google-cloud-vision)|`google`|`v1`|

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\VisionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$files = "files_example"; // string | 
$providers = "providers_example"; // string | 

try {
    $result = $apiInstance->faceDetection($files, $providers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VisionApi->faceDetection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | **string****string**|  |
 **providers** | **string**|  |

### Return type

[**\edenai\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **objectDetection**
> \edenai\Model\InlineResponse20011 objectDetection($files, $providers)



Object Detection is a computer vision technique that allows us to identify and locate objects in an image or video  **AVAILABLE PROVIDERS**   |Name|Value|Version| |----|-----|-------| |[**Microsoft Azure**](https://www.edenai.co/catalog/azure-computer-vision)|`microsoft`|`v3.2`| |[**Amazon Web Services**](https://www.edenai.co/catalog/amazon-rekognition)|`amazon`|`boto3 (v1.15.18)`| |[**Google Cloud**](https://www.edenai.co/catalog/google-cloud-vision)|`google`|`v1`|

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\VisionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$files = "files_example"; // string | 
$providers = "providers_example"; // string | 

try {
    $result = $apiInstance->objectDetection($files, $providers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VisionApi->objectDetection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | **string****string**|  |
 **providers** | **string**|  |

### Return type

[**\edenai\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

