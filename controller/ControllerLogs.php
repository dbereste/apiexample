<?php

class ControllerLogs extends GetInstance
{
    public function parse_logs($db)
    {
        $response['header'] = 204;
        $i = 0;
        $response['error'] = "No logs found!";
        while ($row = $db->fetch_assoc()) {
            $response['error'] = 0;
            $response['header'] = 200;
            $response[$i]['id'] =$row['id'];
            $response[$i]['action'] =$row['action'];
            $response[$i]['date'] = $row['date'];
            $response[$i]['HTTP_response'] =$row['HTTP_response'];
            $i++;
        }
        return ($response);
    }
    public function prepare_log($data, $status)
    {
        $response['action'] = $data;
        $response['date'] = date('Y-m-d H:i:s');
        $response['status'] = $status;
        return $response;
    }
}