<?php
    #initialize instance of classes
    RouterHelper::getInstance();
    Responder::getInstance();
    SubscribersDB::getInstance();
    ControllerSubs::getInstance();
    ServicesDB::getInstance();
    ControllerSubs::getInstance();
    Loger::getInstance();
    ModifyServices::getInstance();
    #check method
    $method = RouterHelper::return_http_method($_SERVER['REQUEST_METHOD']);
    if ($method == 1) {
        $action = RouterHelper::return_get_action($_SERVER["REQUEST_URI"]);
    }
    #Check requested action
    if ($method == 2 || $method == 3 || $method == 4) {
        $action = RouterHelper::return_action($_SERVER["REQUEST_URI"]);
    }
    #Show Subscribers
    if ($method == 1 && $action == 1) {
        $code = Responder::respond(ControllerSubs::parse_select_subscribers(SubscribersDB::select_subscribers()));
        Loger::log('Show Subscribers', $code);
        die();
    }
    #Show subscriber by id
    if ($method == 1 && $action == 2) {
        $id = ControllerSubs::check_input_id($_SERVER["REQUEST_URI"]);
        if ($id == 0) {
            $r['header'] = 404;
            $code = Responder::respond($r);
            Loger::log('Show Subscriber by id', $code);
            die();
        }
        $code = Responder::respond(ControllerSubs::parse_select_subscribers(SubscribersDB::select_subscriber_by_id($id)));
        Loger::log('Show subscriber by id', $code);
        die();
    }
    if ($method == 1 && $action == 3) {#Show Services
        Responder::respond(ControllerServ::parse_select_services(ServicesDB::select_services()));
        Loger::log('Show Services', $code);
        die();
    }
    #Show Service by id
    if ($method == 1 && $action == 4) {
        $id = ControllerSubs::check_input_id($_SERVER["REQUEST_URI"]);
        if ($id == 0) {
            $r['header'] = 404;
            $code = Responder::respond($r);
            Loger::log('Show Service by id', $code);
            die();
        }
        $code = Responder::respond(ControllerServ::parse_select_services(ServicesDB::select_service_by_id($id)));
        Loger::log('Show Service by id', $code);
        die();
    }
    #Show Logs
    if ($method ==1 && $action == 5) {
        $code = Responder::respond(ControllerLogs::parse_logs(Loger::check_log()));
        Loger::log('Show Logs', $code);
        die();
    }
    #ADD subscriber
    if ($method == 2 && $action == 1) {
        $data = ControllerSubs::check_data(file_get_contents('php://input'));
        if ($data == 0) {
            $code = Responder::respond_create(false);
            Loger::log('Add Subscriber', $code);
            die();
        }
        $code = Responder::respond_create(SubscribersDB::add_Subscriber($data['Name'], $data['Surname'], date('Y-m-d', strtotime($data['Birthdate'])), $data['Email'], $data['PhoneNumber'], $data['isActive'], $data['Services']));
        Loger::log('Add Subscriber', $code);
        die();
    }
    #ADD service
    if ($method ==2 && $action == 2) {
        $data = ControllerServ::check_data(file_get_contents('php://input'));
        if ($data == 0) {
            $code = Responder::respond_create(false);
            Loger::log('Add Service', $code);
            die();
        }
        $code = Responder::respond_create(ServicesDB::create_service($data['name'], $data['price'], $data['isActive']));
        Loger::log('Add Service', $code);
        die();
    }
    #modify subscriber
    if ($method == 3 & $action == 1) {
        $data = ControllerSubs::check_data(file_get_contents('php://input'));
        if (!array_key_exists('id_subscriber', $data)){
            $code = Responder::respond_modify(false);
            Loger::log('Modify subscriber', $code);
            die();
        }
        $code = Responder::respond_modify(SubscribersDB::modify_subscriber($data['id_subscriber'], $data['Name'], $data['Surname'], date('Y-m-d', strtotime($data['Birthdate'])), $data['Email'], $data['PhoneNumber'], $data['isActive'], $data['Services']));
        Loger::log('Modify subscriber', $code);
        die();
    }
    #modify service
    if ($method == 3 && $action == 2) {
        $data = ControllerServ::check_data(file_get_contents('php://input'));
        if (!array_key_exists('id_service', $data)){
            $code = Responder::respond_modify(false);
            Loger::log('Modify Service', $code);
            die();
        }
        $code = Responder::respond_modify(ServicesDB::modify_service($data['id_service'], $data['name'], $data['price'], $data['isActive']));
        Loger::log('Modify Service', $code);
        die();
    }
    #add_service_to_subscriber
    if ($method == 3 && $action == 3) { 
        $data = ControllerSubs::check_id_and_serv(file_get_contents('php://input'));
        $sub_data = ControllerSubs::parse_select_subscribers(SubscribersDB::select_subscriber_by_id($data['id_subscriber']));
        $sub_data = $sub_data[0];
        $entry = ControllerSubs::add_service($sub_data['Services'], $data['id_service']);
        if ($entry == 0) {
            $code = Responder::respond_modify(false);
            Loger::log('Add service to Subscriber', $code);
            die();
        }
        $code = Responder::respond_modify(ModifyServices::modify_service_to_subscriber($data['id_subscriber'], $entry));
        Loger::log('Add service to Subscriber', $code);
        die();
    }
    #delete_service_from_subscriber
    if ($method == 3 && $action == 4) {
        $data = ControllerSubs::check_id_and_serv(file_get_contents('php://input'));
        $sub_data = ControllerSubs::parse_select_subscribers(SubscribersDB::select_subscriber_by_id($data['id_subscriber']));
        $sub_data = $sub_data[0];
        $entry = ControllerSubs::delete_service($sub_data['Services'], $data['id_service']);
        if ($entry == 0) {
            $code = Responder::respond_modify(false);
            Loger::log('Delete service from Subscriber', $code);
            die();
        }
        $code = Responder::respond_modify(ModifyServices::modify_service_to_subscriber($data['id_subscriber'], $entry));
        Loger::log('Delete service from Subscriber', $code);
        die();
    }
    #delete subscriber
    if ($method == 4 & $action == 1) {
        $id = ControllerServ::check_delete_id(file_get_contents('php://input'));
        $sub_id = ControllerSubs::parse_select_subscribers(SubscribersDB::select_subscriber_by_id($id));
        print_r($sub_id);
        if ($id == 0 || $sub_id['header'] == 404) {
            $code = Responder::respond_modify(false);
            Loger::log('Delete subscriber', $code);
            die();
        }

        $code = Responder::respond_modify(SubscribersDB::delete_subscriber($id));
        Loger::log('Delete subscriber', $code);
        die();
    }
    #delete service
    if ($method == 4 & $action == 2) {
        $id = ControllerServ::check_delete_id(file_get_contents('php://input'));
        $sub_id = ControllerServ::parse_select_services(ServicesDB::select_service_by_id($id));
        print_r($sub_id);
        if ($id == 0 || $sub_id['header'] == 204) {
            $code = Responder::respond_modify(false);
            Loger::log('Delete Service', $code);
            die();
        }
        $code = Responder::respond_modify(ServicesDB::delete_service($id));
        Loger::log('Delte Service', $code);
        die();
    }
    #unknown:
    $response['header'] = 400;
    $code = Responder::respond($response);
    Loger::log($_SERVER["REQUEST_URI"], $code);
