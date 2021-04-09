<?php


class ControllerSubs extends GetInstance
{
    public function parse_select_subscribers($db)
    {
        $response['header'] = 404;
        $i = 0;
        while ($row = $db->fetch_assoc()) {
            $response['error'] = 0;
            $response['header'] = 200;
            $response[$i]['id_subscriber'] =$row['id_subscriber'];
            $response[$i]['Name'] =$row['Name'];
            $response[$i]['Surname'] =$row['Surname'];
            $response[$i]['Birthdate'] =$row['Birthdate'];
            $response[$i]['Email'] =$row['Email'];
            $response[$i]['PhoneNumber'] =$row['PhoneNumber'];
            $response[$i]['isActive'] =$row['isActive'];
            $response[$i]['Services'] =$row['Services'];
            $i++;
        }
        return ($response);
    }

    public function check_input_id($id)
    {
        $id = explode('/',$id);
        if (array_key_exists(2, $id)){
            if (is_numeric($id[2])) {
                return $id[2];
            }
        }
        return 0;
    }

    public function check_data($data)
    {
        $d = json_decode($data,true);
        if ($d == NULL) {
            return 0;
        }
        if (!array_key_exists('Name', $d)){
            return 0;
        }
        if (!array_key_exists('Surname', $d)){
            return 0;
        }
        if (!array_key_exists('Birthdate', $d)){
            return 0;
        }
        if (!array_key_exists('Email', $d)){
            return 0;
        }
        if (!array_key_exists('PhoneNumber', $d)){
            return 0;
        }
        if (!array_key_exists('isActive', $d)){
            return 0;
        }
        if (!array_key_exists('Services', $d)){
            return 0;
        }
        return $d;
    }

    public function check_id_and_serv($data)
    {
        $d = json_decode($data,true);
        if (!array_key_exists('id_subscriber', $d)){
            return 0;
        }
        if (!array_key_exists('id_service', $d)){
            return 0;
        }
        return $d;
    }

    public function add_service($services_now, $service_to_add)
    {
        $services_now = explode (".", $services_now);
        $search = array_search($service_to_add, $services_now);
        if ($search == false){
            $response = $services_now;
            $response[count($services_now)] = $service_to_add;
            $response = implode (".", $response);
            return $response;
        }
        return 0;
    }

    public function delete_service($services_now, $service_to_delete)
    {
        $services_now = explode (".", $services_now);
        $search = array_search($service_to_delete, $services_now);
        if ($search == false){
            return 0;
        }
        $response = $services_now;
        unset($response[$search]);
        $response = implode(".", $response);
        return $response;
    }
}