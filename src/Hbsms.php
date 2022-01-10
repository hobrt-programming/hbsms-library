<?php

namespace hobrt;

use \GuzzleHttp\Client;

class Hbsms {

    private $api_link = "https://hbsms.net/api/";

    private $client;

    private $headers = [];

    public function __construct(String $token = null)
    {
        if(is_null($token))
            throw new Exception('Please set a valid token');

        $this->headers = [
            'Accept' => "application/json",
            'Authorization' => "Bearer $token"
        ];

        $this->client = new Client(['base_uri' => $this->api_link]);
    }

    public function _send(array $sms)
    {
        return $this->client->request("post", 'sms/create', ['headers' => $this->headers, 'form_params' => $sms]);
    }

    public function newSms(String $msg, String $phone, int $device_id)
    {
        if(empty($msg) || empty($phone) || empty($device_id))
            throw new Exception('Please set a valid data');

        $sms = [
            "message" => $msg,
            "device_id" => $device_id,
            "phone" => $phone
        ];

        return $this->_send($sms);
    }
}
