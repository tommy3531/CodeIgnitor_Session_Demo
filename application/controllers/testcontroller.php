<?php

require(APPPATH.'/libraries/REST_Controller.php');
//require(APPPATH.'vendor/autoload.php');
require_once('vendor/autoload.php');
use GuzzleHttp\Client;
use GuzzleHttp\Subscriber\Log\LogSubscriber;
use GuzzleHttp\Subscriber\Log\Formatter;
// require_once 'SplClassLoader.php';

class Testcontroller extends REST_Controller {

// ----------------------------------------------------------------------------------------------------------------

	public function test()
	{


		// Instantiate the SplClassLoader with the location directory of the source files.

		    session_start();
		    require 'api/google_oauth.php';
		    $key = '*************'; //TODO: This should be the key given to you by google
		    $secret = '**************'; //TODO: This should be the secret given to you by google
		    $auth = new \API\google_oauth($key, $secret);
		    //TODO: Be sure to alter the callback url below to reflect your environment
		    $data = $auth->get_request_token('http://localhost/youtube_api/authorize.php');
		    // Store the returned token_secret in memory some where so
		    // that it can be recalled during the authorization step.
		    $_SESSION['token_secret'] = $data['token_secret'];

		<!DOCTYPE html>
		<html lang="en">
		<head>
		    <meta charset="utf-8">
		    <title>YouTube API Test</title>
		</head>
		<body>
		    <h1>Authorize with YouTube</h1>
		    <br/>
		    <a href="<?php echo $data['redirect']; ?>">
		        By Clicking This Link
		    </a>

	}
}

// ----------------------------------------------------------------------------------------------------------------
