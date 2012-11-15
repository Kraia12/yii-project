<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>


<?php
/*
	$path ='http://api.indeed.com/ads/apisearch?publisher=4590579897253855&q=recepcionista&l=hermosillo%2Csonora&sort=&radius=&st=&jt=&start=&limit=&fromage=&filter=&latlong=1&co=mx&chnl=&userip=127.0.0.1&useragentMozilla%2F5.0+%28X11%3B+Ubuntu%3B+Linux+x86_64%3B+rv%3A16.0%29+Gecko%2F20100101+Firefox%2F16.0&v=2' ;
	$path2='http://api.indeed.com/ads/apisearch?publisher=4590579897253855&q=recepcionista&l=hermosillo,sonora&sort=&radius=&st=&jt=&start=&limit=&fromage=&filter=&latlong=1&co=mx&chnl=&userip=127.0.0.1&useragentMozilla/5.0%20%28X11;%20Ubuntu;%20Linux%20x86_64;%20rv:16.0%29%20Gecko/20100101%20Firefox/16.0&v=2';
	//echo $path;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$path);
	curl_setopt($ch, CURLOPT_FAILONERROR,1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch, CURLOPT_TIMEOUT, 15);
	$retValue = curl_exec($ch);
	curl_close($ch);

$oXML = new SimpleXMLElement($retValue);

foreach($oXML->results->result as $job){
	echo $job->jobtitle . "<br />";
}
*/
?>