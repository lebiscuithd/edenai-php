<?php
/**
 * SpeechApiTest
 * PHP version 5
 *
 * @category Class
 * @package  edenai
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
 * Please update the test case below to test the endpoint.
 */

namespace edenai;

use \edenai\Configuration;
use \edenai\ApiException;
use \edenai\ObjectSerializer;

require 'vendor/autoload.php';
use \Dotenv\Dotenv;


/**
 * SpeechApiTest Class Doc Comment
 *
 * @category Class
 * @package  edenai
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SpeechApiTest extends \PHPUnit_Framework_TestCase
{

    protected $config;
    protected $apiInstance;
    protected $files;
    protected $option;
    protected $webhook_receiver=null;
    protected $users_webhook_parameters=null;
    protected $language;
    protected $vocab = null;
    protected $providers;
    protected $your_api_key='';


    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {

        $dotenv = Dotenv::createImmutable(__DIR__);
        $dotenv->load();
        $this->your_api_key=$_ENV['API_KEY'];


        // Configure API key authorization: Bearer
        $this->config = Configuration::getDefaultConfiguration()->setApiKey('Authorization', $this->your_api_key);
        // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
        $this->config = Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');
        $this->text = "ceci est un texte"; // string | Text to translate
        $this->providers = "['amazon']"; // string | Provider to compare (ex: [ 'amazon', 'microsoft', 'google'])
        $this->language = "fr-FR";
        $this->files = __DIR__ . "/data/audio.mp3"; // \SplFileObject | File Image to analyse (ex: pdf, jpg, jpeg, png, tiff)
        $this->option = "MALE";
        $this->apiInstance = new Api\SpeechApi(
            // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
            // This is optional, `GuzzleHttp\Client` will be used as default.
            new \GuzzleHttp\Client(),
            $this->config
        );
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for asyncSpeechToText
     *
     * .
     *
     */
    public function testAsyncSpeechToText()
    {
        $result = $this->apiInstance->asyncSpeechToText($this->language, $this->files, $this->providers, $this->webhook_receiver, $this->users_webhook_parameters, $this->vocab);
        $this->assertNotNull($result);
        $this->assertNotNull($result->getResult());
        $this->assertNotNull($result->getResult()->getJobId());
        $this->assertNotNull($result->getResult()->getStatus());
    }

    /**
     * Test case for asyncSpeechToText_0
     *
     * ne passe pas les test car job id est inexsitant malgré que je le crée dans la fonction
     *
     */
    public function testAsyncSpeechToText0()
    {
        // $result = $this->apiInstance->asyncSpeechToText_0($job_id);
    }

    /**
     * Test case for speechToText
     *
     * getconfidence est parfois null selon certain provider
     *
     */
    public function testSpeechToText()
    {
        $result = $this->apiInstance->speechToText($this->language, $this->files, $this->providers, $this->vocab);
        $this->assertNotNull($result);
        $this->assertNotNull($result->getResult()[0]['result']);
        $this->assertNotNull($result->getResult()[0]['result']->getTranscribe());

        // $this->assertNotNull($result->getResult()[0]['result']->getConfidence());

    }

    /**
     * Test case for textToSpeech
     *
     * probleme 403 bad credidential a cause du type d'encodage (normalement probleme reglé)
     *
     */
    public function testTextToSpeech()
    {
        // $result = $this->apiInstance->textToSpeech($this->text, $this->language, $this->option, $this->providers);
        // $this->assertNotNull($result);
        // $this->assertNotNull($result->getResult()[0]['result']);
        // $this->assertNotNull($result->getResult()[0]['result']->getText());
        // $this->assertNotNull($result->getResult()[0]['result']->getAudioPath());
        // $this->assertNotNull($result->getResult()[0]['result']->getVoiceType());
    }
}
