# edenai\AutoMLTextDataApi

All URIs are relative to *//https://api.edenai.run/v1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**autoMLTextDataDelete**](AutoMLTextDataApi.md#automltextdatadelete) | **DELETE** /automl/text/project/{project_id}/train/{train_id} | 
[**autoMLTextDataLaunchPrediction**](AutoMLTextDataApi.md#automltextdatalaunchprediction) | **POST** /automl/text/project/{project_id}/train/{train_id}/prediction | 
[**autoMLTextDataPredictionDetail**](AutoMLTextDataApi.md#automltextdatapredictiondetail) | **GET** /automl/text/project/{project_id}/train/{train_id}/prediction/{predict_id} | 
[**autoMLTextDataPredictionResults**](AutoMLTextDataApi.md#automltextdatapredictionresults) | **GET** /automl/text/project/{project_id}/train/{train_id}/prediction/{predict_id}/results | 
[**autoMLTextDataTrain**](AutoMLTextDataApi.md#automltextdatatrain) | **POST** /automl/text/project/{project_id}/train | 
[**autoMLTextDataTrainDetail**](AutoMLTextDataApi.md#automltextdatatraindetail) | **GET** /automl/text/project/{project_id}/train/{train_id} | 
[**autoMLTextProjectCreate**](AutoMLTextDataApi.md#automltextprojectcreate) | **POST** /automl/text/project | 
[**autoMLTextProjectDelete**](AutoMLTextDataApi.md#automltextprojectdelete) | **DELETE** /automl/text/project/{project_id} | 
[**autoMLTextProjectDetail**](AutoMLTextDataApi.md#automltextprojectdetail) | **GET** /automl/text/project/{project_id} | 
[**autoMLTextProjectList**](AutoMLTextDataApi.md#automltextprojectlist) | **GET** /automl/text/project | 
[**autoMLTextProjectUpdate**](AutoMLTextDataApi.md#automltextprojectupdate) | **PUT** /automl/text/project/{project_id} | 

# **autoMLTextDataDelete**
> autoMLTextDataDelete($project_id, $train_id)



AutoML Text Data Delete

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\AutoMLTextDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = "project_id_example"; // string | 
$train_id = "train_id_example"; // string | 

try {
    $apiInstance->autoMLTextDataDelete($project_id, $train_id);
} catch (Exception $e) {
    echo 'Exception when calling AutoMLTextDataApi->autoMLTextDataDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **train_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **autoMLTextDataLaunchPrediction**
> autoMLTextDataLaunchPrediction($files, $project_id, $train_id)



**SUPPORTED FILES**  The API takes a csv file with no header and only one column, where each line contains a document to classify.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\AutoMLTextDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$files = "files_example"; // string | 
$project_id = "project_id_example"; // string | 
$train_id = "train_id_example"; // string | 

try {
    $apiInstance->autoMLTextDataLaunchPrediction($files, $project_id, $train_id);
} catch (Exception $e) {
    echo 'Exception when calling AutoMLTextDataApi->autoMLTextDataLaunchPrediction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | **string****string**|  |
 **project_id** | **string**|  |
 **train_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **autoMLTextDataPredictionDetail**
> autoMLTextDataPredictionDetail($predict_id, $project_id, $train_id)



**SUPPORTED FILES**  The API takes a csv file with no header and only one column, where each line contains a document to classify.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\AutoMLTextDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$predict_id = "predict_id_example"; // string | 
$project_id = "project_id_example"; // string | 
$train_id = "train_id_example"; // string | 

try {
    $apiInstance->autoMLTextDataPredictionDetail($predict_id, $project_id, $train_id);
} catch (Exception $e) {
    echo 'Exception when calling AutoMLTextDataApi->autoMLTextDataPredictionDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **predict_id** | **string**|  |
 **project_id** | **string**|  |
 **train_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **autoMLTextDataPredictionResults**
> autoMLTextDataPredictionResults($predict_id, $project_id, $train_id)



**SUPPORTED FILES**  The API takes a csv file with no header and only one column, where each line contains a document to classify.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\AutoMLTextDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$predict_id = "predict_id_example"; // string | 
$project_id = "project_id_example"; // string | 
$train_id = "train_id_example"; // string | 

try {
    $apiInstance->autoMLTextDataPredictionResults($predict_id, $project_id, $train_id);
} catch (Exception $e) {
    echo 'Exception when calling AutoMLTextDataApi->autoMLTextDataPredictionResults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **predict_id** | **string**|  |
 **project_id** | **string**|  |
 **train_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **autoMLTextDataTrain**
> autoMLTextDataTrain($provider, $training_name, $project_id)



**AVAILABLE PROVIDERS**  |Name|Value| |-------------------------------|---------------| |[**Google Cloud Services**](https://www.edenai.co/catalog/google-cloud-natural-language)|`google`| |[**Amazon Web Services**](https://www.edenai.co/catalog/amazon-comprehend)|`amazon`|

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\AutoMLTextDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$provider = "provider_example"; // string | 
$training_name = "training_name_example"; // string | 
$project_id = "project_id_example"; // string | 

try {
    $apiInstance->autoMLTextDataTrain($provider, $training_name, $project_id);
} catch (Exception $e) {
    echo 'Exception when calling AutoMLTextDataApi->autoMLTextDataTrain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **provider** | **string**|  |
 **training_name** | **string**|  |
 **project_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **autoMLTextDataTrainDetail**
> autoMLTextDataTrainDetail($project_id, $train_id)



AutoML Text Data Train Detail

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\AutoMLTextDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = "project_id_example"; // string | 
$train_id = "train_id_example"; // string | 

try {
    $apiInstance->autoMLTextDataTrainDetail($project_id, $train_id);
} catch (Exception $e) {
    echo 'Exception when calling AutoMLTextDataApi->autoMLTextDataTrainDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **train_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **autoMLTextProjectCreate**
> autoMLTextProjectCreate($project_name, $project_description, $files, $type, $language)



**SUPPORTED FILES**  The API takes csv files separated using ','. The csv must contain a header and exactly two columns, named `docs` and `labels` In case a document might have several labels, please separate your labels using '|'     **SUPPORTED LANGUAGE**  |Name|Type|Value| |---------------------------|-------------------------------|---------------| | **English (US)**|*`string`*|`en`| | **French**      |*`string`*|`fr`| | **German**      |*`string`*|`de`| | **Italian**     |*`string`*|`it`| | **Portuguese**  |*`string`*|`pt`| | **Arabic**      |*`string`*|`ar`| | **Chinese-Simplified**|*`string`*|`zh`| | **Chinese-Traditional**|*`string`*|`zh-TW`| | **Korean**      |*`string`*|`ko`| | **Japanese**    |*`string`*|`ja`| | **Hindi**       |*`string`*|`hi`| | **Spanish**     |*`string`*|`es`|    **AVAILABLE CLASSIFICATION TYPES**  |Type|Value|Description| |---------------------------|-------------------------------|---------------| | **Single Label Classification **|`single_label_classification`|Each document belongs to one category (label)| | **Multi Label Classification**|`multi_label_classification`|Documents might have several labels|

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\AutoMLTextDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_name = "project_name_example"; // string | 
$project_description = "project_description_example"; // string | 
$files = "files_example"; // string | 
$type = "type_example"; // string | 
$language = "language_example"; // string | 

try {
    $apiInstance->autoMLTextProjectCreate($project_name, $project_description, $files, $type, $language);
} catch (Exception $e) {
    echo 'Exception when calling AutoMLTextDataApi->autoMLTextProjectCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_name** | **string**|  |
 **project_description** | **string**|  |
 **files** | **string****string**|  |
 **type** | **string**|  |
 **language** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **autoMLTextProjectDelete**
> autoMLTextProjectDelete($project_id)



AutoML Text Project Delete

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\AutoMLTextDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = "project_id_example"; // string | 

try {
    $apiInstance->autoMLTextProjectDelete($project_id);
} catch (Exception $e) {
    echo 'Exception when calling AutoMLTextDataApi->autoMLTextProjectDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **autoMLTextProjectDetail**
> autoMLTextProjectDetail($project_id)



AutoML Text Project Detail

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\AutoMLTextDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = "project_id_example"; // string | 

try {
    $apiInstance->autoMLTextProjectDetail($project_id);
} catch (Exception $e) {
    echo 'Exception when calling AutoMLTextDataApi->autoMLTextProjectDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **autoMLTextProjectList**
> autoMLTextProjectList()



AutoML Text Project List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\AutoMLTextDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->autoMLTextProjectList();
} catch (Exception $e) {
    echo 'Exception when calling AutoMLTextDataApi->autoMLTextProjectList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **autoMLTextProjectUpdate**
> autoMLTextProjectUpdate($project_name, $project_description, $type, $language, $project_id)



AutoML Text Project Update

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\AutoMLTextDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_name = "project_name_example"; // string | 
$project_description = "project_description_example"; // string | 
$type = "type_example"; // string | 
$language = "language_example"; // string | 
$project_id = "project_id_example"; // string | 

try {
    $apiInstance->autoMLTextProjectUpdate($project_name, $project_description, $type, $language, $project_id);
} catch (Exception $e) {
    echo 'Exception when calling AutoMLTextDataApi->autoMLTextProjectUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_name** | **string**|  |
 **project_description** | **string**|  |
 **type** | **string**|  |
 **language** | **string**|  |
 **project_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

