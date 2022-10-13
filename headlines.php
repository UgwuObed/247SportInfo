<?php  
use jcobhams\NewsApi\NewsApi;
require_once('');
$newsapi = new NewsApi('c8d0a6e46b054d63a5f49ee0e9021571');

$data = $sources = $newsapi->getSources($category, $language, $country);

?>