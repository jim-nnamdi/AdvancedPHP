<?php 

require("vendor/autoload.php");
use Symfony\Component\HttpClient\HttpClient;

function postRequest($data){
    $http_request = new HttpClient();
    $response = $http_request->request('POST', 'apilink', [$data]);
    $content = $response->getContent();
    return $content;
}