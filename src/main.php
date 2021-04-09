<?php
    include_once(BASE_PATH.'/includes/database.php');
    include_once(BASE_PATH.'/includes/functions.php');

    print_r(json_encode(check_request()));
    //print_r(check_request());
