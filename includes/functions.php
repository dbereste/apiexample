<?php
    $db = new Database();
    //Done
    function insert_log($action, $error)
    {
        GLOBAL $db;
        $date = date('Y-m-d H:i:s');
        $db->insert_log($action,$date,$error);
    }

    function select_services()
    {
        GLOBAL $db;
        $result = $db->select_services(); 
        if (strcmp ($db->mysqli->error, '') !== 0) {
            insert_log("select_service", $db->mysqli->error);
            $response['error'] = $db->mysqli->error;
            return $response;
        }
        $i = 0;
        $response['error'] = "No services found!";
        while ($row = $result->fetch_assoc()) {
            $response['error'] = 0;
            $response[$i]['id_services'] =$row['id_services'];
            $response[$i]['isActive'] =$row['isActive'];
            $response[$i]['name'] =$row['name'];
            $response[$i]['price'] =$row['price'];
            $i++;
        }
        insert_log("select_services",$response['error']);
        return ($response);
    }
    //Done
    //Done
    function select_subscriber_by_id($id)
    {
        GLOBAL $db;
        $result = $db->select_subscriber_by_id($id);
        if (strcmp ($db->mysqli->error, '') !== 0) {
            insert_log("select_subscriber_by_id", $db->mysqli->error);
            $response['error'] = $db->mysqli->error;
            return $response;
        }
        $response['error'] = "No ID Found";
        while ($row = $result -> fetch_assoc()) {
            $response['error'] = 0;
            $response['id_subscriber'] = $row['id_subscriber'];
            $response['Name'] = $row['Name'];
            $response['Surname'] = $row['Surname'];
            $response['PhoneNumber'] = $row['PhoneNumber'];
            $response['Email'] = $row['Email'];
            $response['Birthdate'] = $row['Birthdate'];
            $response['isActive'] = $row['isActive'];
            $response['Services'] = $row['Services'];
        }
        insert_log("select_subscriber_by_id",$response['error']);
        return ($response);
    }
    //_______________________________subscribers______________________________
    //Check Services./.
    function add_subscriber($name = -1, $surname = -1, $phonenumber = -1, $email = -1, $birthdate = -1, $isActive = -1, $services = -1)
    {
        GLOBAL $db;
        if (func_num_args() !== 7) {
            $response['error'] = "Not all arguments was transfered";
            return $response;
        }
        $db->add_subscriber($name, $surname, $phonenumber, $email, format_date($birthdate), $isActive, $services) or $response[error] = $db->mysqli->error;
        if (strcmp ($db->mysqli->error, '') !== 0) {
            insert_log("add_subscriber", $db->mysqli->error);
            $response['error'] = $db->mysqli->error;
            return $response;
        }
        $response['error'] = 0;
        $response['id'] = $db->mysqli->insert_id;
        insert_log("add_subscriber",$response['error']);
        return ($response);
    }
    //Done
    function modify_subscriber($id = -1, $name = -1, $surname = -1, $phonenumber = -1, $email = -1, $birthdate = -1, $isActive = -1, $services = -1)
    {
        if (func_num_args() !== 8) {
            $response['error'] = "Not all arguments was transfered";
            return $response;
        }        
        GLOBAL $db;
        $select = select_subscriber_by_id($id);
        if (strcmp ($db->mysqli->error, '') !== 0) {
            insert_log("modify_subscriber", $db->mysqli->error);
            $response['error'] = $db->mysqli->error;
            return $response;
        }
        if ($select['error'] !== 0){
            $response['error'] = "No Subscriber found with this ID";
            insert_log("modify_subscriber",$response['error']);
            return $response;
        }
        GLOBAL $db;
        $db->modify_subscriber($id, $name, $surname, $phonenumber, $email, format_date($birthdate), $isActive, $services);
        if (strcmp ($db->mysqli->error, '') !== 0) {
            insert_log("modify_subscriber", $db->mysqli->error);
            $response['error'] = $db->mysqli->error;
            return $response;
        }
        $response['error'] = 0;
        $response['updated'] = select_subscriber_by_id($id);
        insert_log("modify_subscriber",$response['error']);
        return $response;
    }
    //Done
    function delete_subscriber($id = -1)
    {
        GLOBAL $db;
        if ($id == -1) {
            $response['error'] = "No ID introduced";
            insert_log("delete_subscriber",$response['error']);
            return $response;
        }
        $select = select_subscriber_by_id($id);
        if ($select['error'] == 0) {
            $db->delete_subscriber($id);
            if (strcmp ($db->mysqli->error, '') !== 0) {
                insert_log("delete_subscriber", $db->mysqli->error);
                $response['error'] = $db->mysqli->error;
            }
            return $response;
        }
        $response['error'] = 0;
        $response['message'] = "Successfully deleted";
        if ($select['error'] !== 0) {
            $response['error'] = "No ID found in database";
            unset($response['message']); 
            insert_log("delete_subscriber",$response['error']);
            return $response;
        }
        insert_log("delete_subscriber",$response['error']);
        return $response;
    }
    //Shuld check if service is active
    function add_service_to_subscriber($id = -1, $serv_in = -1)
    {
        GLOBAL $db;
        if (func_num_args() !== 2) {
            $response['error'] = "Not all arguments was transfered";
            insert_log("add_service_to_subscriber",$response['error']);
            return $response;
        }
        $subs = select_subscriber_by_id($id);
        if ($subs['error'] !== 0) {
            $response['error'] = $subs['error'];
            insert_log("add_service_to_subscriber",$response['error']);
            return $response;
        }
        $serv = $subs['Services']; //0.1.2
        $serv = explode (".", $serv);
        $serv_in = explode(".", $serv_in);
        foreach ($serv_in as $value) {
            if (in_array($value, $serv)){
                continue;
            }
            $serv[count($serv)] = $value;
        }
        $serv = implode (".", $serv);
        $response = modify_subscriber($subs['id_subscriber'], $subs['Name'], $subs['Surname'], $subs['PhoneNumber'], $subs['Email'] ,$subs['Birthdate'], $subs['isActive'] , $serv);
        insert_log("add_service_to_subscriber",$response['error']);
        return $response;
    }
    //Shuld check if service exists
    function delete_service($id = -1)
    {
        GLOBAL $db;
        if ($id == -1) {
            $response['error'] = "No ID introduced";
            insert_log("delete_service",$response['error']);
            return $response;
        }
        $db->delete_service($id);
        if (strcmp ($db->mysqli->error, '') !== 0) {
            insert_log("delete_service", $db->mysqli->error);
            $response['error'] = $db->mysqli->error;
        }
        $response['error'] = 0;
        $response['message'] = "Successfully deleted";
        insert_log("delete_service",$response['error']);
        return $response;

    }
    //Done
    function create_service($name = -1, $price = -1, $isActive = -1)
    {
        GLOBAL $db;
        if (func_num_args() !== 3) {
            $response['error'] = "Not all arguments was transfered";
            insert_log("create_service",$response['error']);
            return $response;
        }
        print_r($isActive);
        if (!($isActive == 0) && !($isActive == 1) || $isActive == NULL) {
            $response['error'] = "isActive must be 1 or 0";
            insert_log("create_service",$response['error']);
            return $response;
        }
        if ($price < 0) {
            $response['error'] = "Price shuld be > 0";
            insert_log("create_service",$response['error']);
            return $response;
        }
        $response['error'] = 0;
        $response['id'] = $db->mysqli->insert_id;
        $db->create_service($name, $price, $isActive);
        if (strcmp ($db->mysqli->error, '') !== 0) {
            insert_log("create_service", $db->mysqli->error);
            $response['error'] = $db->mysqli->error;
        }
        return $response;
    }
    function check_log()
    {
        GLOBAL $db;
        $result = $db->check_log(); 
        if (strcmp ($db->mysqli->error, '') !== 0) {
            insert_log("check_log", $db->mysqli->error);
            $response['errors'] = $db->mysqli->error;
            return $response;
        }
        $i = 0;
        $response['errors'] = "No log found!";
        while ($row = $result->fetch_assoc()) {
            $response['errors'] = 0;
            $response[$i]['id'] =$row['id'];
            $response[$i]['action'] =$row['action'];
            $response[$i]['date'] = $row['date'];
            $response[$i]['error'] =$row['error'];
            $i++;
        }
        insert_log("check_log",$response['errors']);
        return ($response);
    }
    //to be continue..
    function check_operation($operation)
    {
        $operation = strtolower($operation);
        if (strcmp ($operation, 'select_services') == 0) {
            $operation = 1;
        }
        if (strcmp ($operation, 'select_subscribers') == 0) {
            $operation = 2;
        }        
        if (strcmp ($operation, 'select_subscriber_by_id') == 0) {
            $operation = 3;
        }
        if (strcmp ($operation, 'add_subscriber') == 0) {
            $operation = 4;
        }
        if (strcmp ($operation, 'modify_subscriber') == 0) {
            $operation = 5;
        }
        if (strcmp ($operation, 'delete_subscriber') == 0) {
            $operation = 6;
        }
        if (strcmp ($operation, 'add_service_to_subscriber') == 0) {
            $operation = 7;
        }
        if (strcmp ($operation, 'delete_service') == 0) {
            $operation = 8;
        }
        if (strcmp ($operation, 'create_service') == 0) {
            $operation = 9;
        }
        if (strcmp ($operation, 'check_log') == 0) {
            $operation = 10;
        }
        if (!is_numeric($operation)) {
            $response['error'] = 'Wrong Operation!';
            return $response;
        }
        return $operation;
    }
    //
    function check_request()
    {
        if (empty($_GET)) {
            $response['errror'] = "No request found!";
            return $response;
        }
        $op = check_operation($_GET['operation']);
        if ($op == 1) {
            $response = select_services();
            return $response;
        }
        if ($op == 2) {
            $response = select_subscribers();
            return $response;
        }
        if ($op == 3) {
            if (!isset($_GET['id'])) {
                $response['error'] = "No id introduced";
                return $response;
            }
            $response = select_subscriber_by_id($_GET['id']);
            return ($response);
        }
        if ($op == 4) {
            if (!isset($_GET['params'])) {
                $response['error'] = "No params introduced";
                return $response;
            }
            $params = $_GET['params'];
            $params = explode("=", $params);
            $param = explode("-", $params[0]);
            //print_r($param);
            if (count($param) !== 7) {
                $response['error'] = "Check syntax!";
                return $response;
            }
            $response = add_subscriber($param[0], $param[1], $param[2], $param[3], $param[4], $param[5], $param[6]);
            return $response;
        }
        if ($op == 5) {
            if (!isset($_GET['params'])) {
                $response['error'] = "No params introduced";
                return $response;
            }
            if (!isset($_GET['id'])) {
                $response['error'] = "No ID introduced";
                return $response; 
            }
            $params = $_GET['params'];
            $params = explode("=", $params);
            $param = explode("-", $params[0]);
            if (count($param) !== 7) {
                $response['error'] = "Check syntax!";
                return $response;
            }
            $response = modify_subscriber($_GET['id'], $param[0], $param[1], $param[2], $param[3], $param[4], $param[5], $param[6]);
            return $response;
        }
        if ($op == 6) {
            if (!isset($_GET['id'])) {
                $response['error'] = "No ID introduced";
                return $response; 
            }
            $response = delete_subscriber($_GET['id']);
            return $response;
        }
        if ($op == 7) {
            if (!isset($_GET['id'])) {
                $response['error'] = "No ID introduced";
                return $response; 
            }
            if (!isset($_GET['serv'])) {
                $response['error'] = "No serv introduced";
                return $response;
            }
            $response = add_service_to_subscriber($_GET['id'], $_GET['serv']);
            return $response;
        }
        if ($op == 8) {
            if (!isset($_GET['id'])) {
                $response['error'] = "No ID introduced";
                return $response; 
            }
            $response = delete_service($_GET['id']);
            return $response;
        }
        if ($op == 9) {
            if (!isset($_GET['params'])) {
                $response['error'] = "No params introduced";
                return $response;
            }
            $params = $_GET['params'];
            $params = explode("=", $params);
            $param = explode("-", $params[0]);
            if (count($param) !== 3) {
                $response['error'] = "Check syntax!";
                return $response;
            }
            $response = create_service($param[0], $param[1], $param[2]);
            return $response;
        }
        if ($op == 10) {
            $response = check_log();
            return $response;
        }
    }

    function format_date($d)
    {
        $d = str_replace("/", "-", $d);
        return date('Y-m-d', strtotime($d));
    }
