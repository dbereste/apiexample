<?php

class ControllerServ extends GetInstance
{
    public function parse_select_services($db)
    {
        $response['header'] = 204;
        $i = 0;
        $response['error'] = "No services found!";
        while ($row = $db->fetch_assoc()) {
            $response['error'] = 0;
            $response['header'] = 200;
            $response[$i]['id_services'] =$row['id_services'];
            $response[$i]['isActive'] =$row['isActive'];
            $response[$i]['name'] =$row['name'];
            $response[$i]['price'] =$row['price'];
            $i++;
        }
        return ($response);
    }

    public function check_data($data)
    {   
        $d = json_decode($data,true);
        if ($d == NULL) {
            return 0;
        }
        if (!array_key_exists('isActive', $d)){
            return 0;
        }
        if (!array_key_exists('name', $d)){
            return 0;
        }
        if (!array_key_exists('price', $d)){
            return 0;
        }
        return $d;
    }

    public function check_delete_id($data)
    {
        $d = json_decode($data, true);
        if (array_key_exists('id', $d)) {
            return $d['id'];
        }
        return 0;
    }
}
