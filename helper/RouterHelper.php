<?php


class RouterHelper extends GetInstance
{


    public function return_http_method($method)
    {
        if (strcmp($method, 'GET') == 0) {
            return 1;
        }
        if (strcmp($method, 'POST') == 0) {
            return 2;
        }
        if (strcmp($method, 'PUT') == 0) {
            return 3;
        }
        if (strcmp($method, 'DELETE') == 0) {
            return 4;
        }
        return 0;
    }

    public function return_get_action($action)
    {
        $action = explode('/',$action);
        if (strcmp($action[1], 'subscribers') == 0) {
            return 1;
        }
        if (strcmp($action[1], 'subscriber_by_id') == 0) {
            return 2;
        }
        if (strcmp($action[1], 'services') == 0) {
            return 3;
        }
        if (strcmp($action[1], 'service_by_id') == 0) {
            return 4;
        }
        if (strcmp($action[1], 'logs') == 0) {
            return 5;
        }
        $response['header'] = 400;
    }

    public function return_action($action)
    {
        $action = str_replace("/", "", $action);
        if (strcmp($action, 'subscriber') == 0) {
            return 1;
        }
        if (strcmp($action, 'service') == 0) {
            return 2;
        }
        if (strcmp($action, 'add_service_to_subscriber') == 0) {
            return 3;
        }
        if (strcmp($action, 'delete_service_from_subscriber') == 0) {
            return 4;
        }

        return 0;
    }
}