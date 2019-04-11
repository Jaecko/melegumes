<?php

class Instagram
{

    private $options = [
        'client_id' => "cd40ff3c2f9148faafc3cf3518d820ed",
        'client_secret' => "5a8f729587ef448e9133d3da0f9115d4",
        'access_token' => ""
    ];

    public function __construct($options)
    {
        $this->options = array_merge($this->options, $options);
    }

    public function getRecentMedia($limit = 10)
    {
        try {
            $endpoint = "https://api.instagram.com/v1/users/self/media/recent/?access_token={$this->options['access_token']}&count=$limit";
            $curl = curl_init($endpoint);
            curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 3);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

            $data = curl_exec($curl);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

        $json = json_decode($data);

        // var_dump($json);
        // die();

        if ($json->meta->code != 200) {
            throw new Exception($json->meta->error_message, $json->meta->code);
        }

        return $json->data;
    }
}

?>