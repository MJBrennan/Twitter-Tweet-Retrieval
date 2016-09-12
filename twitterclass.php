<?php

	require_once("twitter-api-php-master/TwitterAPIExchange.php");
	
	class TwitterClass{
		
		//Required for connecting to Twitter API
		
	public $settings = array(
		
		'oauth_access_token' => "",
		'oauth_access_token_secret' => "",
		'consumer_key' => "#",
		'consumer_secret' => "#"
		
		);
		
		public function __construct(){
			$this->getDetails();
		}
		
		public function getDetails(){
			
			$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
			$getfield = '?screen_name=#&count=20';
			$requestMethod = 'GET';
			$twitter = new TwitterAPIExchange($this->settings);
			echo ($twitter->setGetfield($getfield)
						 ->buildOauth($url,$requestMethod)
						 ->performRequest()
						 );
		}
		
	}

	$tweets = new TwitterClass();

	echo $tweets;