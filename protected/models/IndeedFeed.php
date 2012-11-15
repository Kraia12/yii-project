<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class IndeedFeed extends CFormModel
{
	public $sort;
	const PUBLISHER = 4590579897253855;
	const VERSION = 2;
	const LATITUDELONG = 1;
	const QUERY = 'recepcionista';
//	public $location;
//	public $radius;
//	public $jobType;
//	public $limit;
//	public $country;
//	public $userIp;
//	public $userAgent;


	public function getFeed($city,$state,$country='mx',$jobType='')
	{
		// http://api.indeed.com/ads/apisearch?publisher=4590579897253855&q=java&l=austin%2C+tx&sort=&radius=&st=&jt=&start=&limit=&fromage=&filter=&latlong=1&co=us&chnl=&userip=1.2.3.4&useragent=Mozilla/%2F4.0%28Firefox%29&v=2
		$url  = 'http://api.indeed.com/ads/apisearch';
		$url .=  '?publisher=' . self::PUBLISHER;
		$url .=  '&q=' . self::QUERY;
		$url .=  '&l=' . urlencode($city . ',' . $state);
		$url .=  '&sort=';
		$url .=  '&radius=';
		$url .=  '&st=';
		$url .=  '&jt=' . $jobType;
		$url .=  '&start=';
		$url .=  '&limit=';
		$url .=  '&fromage=';
		$url .=  '&filter=';
		$url .=  '&latlong=' . self::LATITUDELONG;
		$url .=  '&co=' . $country;
		$url .=  '&chnl=';
		$url .=  '&userip=' . Yii::app()->request->userHostAddress;
		$url .=  '&useragent' . urlencode(CHttpRequest::getUserAgent());
		$url .=  '&v=' . self::VERSION;
		$urlData = $this->downloadFeed($url);
		$xml = new SimpleXMLElement($urlData);
		$feed = $this->xmlToArray($xml);
		return $feed;

	}


	public function downloadFeed($path)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$path);
		curl_setopt($ch, CURLOPT_FAILONERROR,1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 15);
		$retValue = curl_exec($ch);
		curl_close($ch);
		return $retValue;
	}

	public function getXML()
	{

	}

	public function xmlToArray($xml)
	{
		$result = array();
		foreach($xml->results->result as $job)
		{
			$result[] = $job;
		}
		return $result;
	}
}
