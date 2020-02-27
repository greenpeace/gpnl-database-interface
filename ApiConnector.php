<?php
/**
 * User: oscar
 * Date: 08-01-20
 * Time: 16:31
 */

namespace P4NL_DATABASE_INTERFACE;

use Dotenv\Dotenv;

/**
 * Class ApiConnector
 * @package P4NL_DATABASE_INTERFACE
 * @subpackage P4NL_DATABASE_INTERFACE\Api
 * @author  Oscar Keur <oscar.keur@greenpeace.org>
 */
class ApiConnector {

	/**
	 * @var array
	 */
	protected $methods;
	/**
	 * @var string
	 */
	protected $api_key;
	/**
	 * @var Configuration
	 */
	protected $config;
	/**
	 * @var array
	 */
	protected $endpoints;

	protected $host;

	/**
	 * ApiConnector constructor.
	 *
	 * When used in production, api_key is fetched from the CMS and no argument is needed.
	 * For testing a dummy api_key is provided when the $debug argument is true
	 *
	 * @param bool $debug
	 */
	public function __construct( $debug = false )
    {
	    require_once('vendor/autoload.php');
		//	Load API_key & path
    	$dotenv = Dotenv::createImmutable(__DIR__);
		$dotenv->load();

    	$this->methods = $this->getConfig();
		$this->endpoints = array_keys($this->methods);

		if( $debug ){
			$this->api_key = $_ENV['gpnl_database_api_key'];
			$this->host = $_ENV['gpnl_database_api_host'];
		}
		else {
			$this->api_key  = get_option( 'planet4nl_options' )['gpnl_api_key'];
			$this->host     = get_option( 'planet4nl_options' )['gpnl_api_host'];
		}
		$this->config = Configuration::getDefaultConfiguration()->setApiKey('api_key', $this->api_key);
		$this->config = Configuration::getDefaultConfiguration()->setHost($this->host);

	}

	/**
	 * Call to the requested resource, with optional method and data
	 *
	 * This function calls the requested resource and just passes on the data and the response.
	 * At this time no checks are performed on the data. For more information about the possible methods, see the docs.
	 * @example /src/docs/Api/*.md
	 *
	 * @param $api string Must be one of: Contact,Machtiging,Payment,Register,Validation
	 * @param $method string Must be one of the method defined in the appropriate Api
	 * @param $data array|string Data as it should be submitted
	 * @return array
	 */
	public function call($api, $method = 'info', $data = []) {
		$class = __NAMESPACE__ .'\\'.$api.'Api';
		$apiInstance = new $class(null,$this->config);


		try {
			$result = $apiInstance->{$method}($data);
		} catch (Exception $e) {
			return ['error' => 'Exception when calling ContactApi->getContactByGuid: '. $e->getMessage(). PHP_EOL];
		}

		$response = [
			'output' => $result ?: null,
		];
		return $response;
	}
	/**
	 * @return array
	 */
	public function debug(){
		$test = [
    		'api_key' => $this->api_key,
			'endpoints'=> $this->endpoints,
			'methods'=> $this->methods,
			];
    	return $test;
	}


	/**
	 * @return array
	 */
	private function getConfig(){
		if ( !file_exists(__DIR__ . "/apimethods.json")){
            $contents      = file_get_contents('schema.json');
            $results       = json_decode( utf8_encode($contents), true);
            $paths = $results['paths'];
            $tags = [];
            foreach ($paths as $path) {
                $keys = array_keys($path);
                $data =$path[$keys[0]];
                // Get the name of the API-endpoint
                $tag = $data['tags'][0];
                if ( $tag === "TransactionState") continue;
                $function = $data['operationId'];
                // Remove unneeded prefix
                $function = lcfirst(str_replace($tag."_", "", $function));
                if ( array_key_exists($tag, $tags) ){
                    array_push($tags[$tag], $function);
                }
                else {
                    $tags[$tag] = [$function];
                }
            }
            file_put_contents("apimethods.json", json_encode($tags) );
        }
        else {
			$contents = file_get_contents(__DIR__ . "/apimethods.json");
            $tags  = json_decode( utf8_encode($contents), true);
        }
        return $tags;

    }

}
