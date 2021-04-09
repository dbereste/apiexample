<?php

//try: use loger.php

class Responder extends GetInstance
{
    private static $log;
    public static $instance;
    public  function respond($response)
    {  
        header('Content-Type: application/json');
        if($response['header'] == 200) {
            header("HTTP/1.1 200 OK");
            $code = 200;
            $response['status'] = "OK";
            unset($response['error']);
        }
        if($response['header'] == 400) {
            header("HTTP/1.1 400 Bad Request");
            $code = 400;
            $response['status'] = "Bad Request";
        }
        if($response['header'] == 404) {
            header("HTTP/1.1 404 Not Found");
            $code = 404;
            $response['status'] = "Not Found";
        }
        unset($response['header']);
        $rsp = json_encode($response);
        print_r($rsp);
        return $code;
    }

    public function respond_modify($response)
    {
        if ($response == true) {
            header("HTTP/1.1 200 OK");
            $code = 200;
        }
        if ($response == false) {
            header("HTTP/1.1 204 No Content");
            $code = 204;
        }
        unset($response['header']);
        return $code; 
    }
    public function respond_create($response)
    {
        if ($response == true) {
            header("HTTP/1.1 201 Created");
            $code = 201;
        }
        if ($response == false) {
            header("HTTP/1.1 400 Bad Request");
            $code = 400;
        }
        unset($response['header']);
        return $code;
    }
}
