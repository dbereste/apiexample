<?php
    function check_data($name, $surname, $phonenumber, $email, $birthdate, $isActive, $services)
    {
        $check = -1;
        if ($name == -1) {
            $check = "Name is not set";
            //echo "name";
        }
        if ($surname == -1) {
            $check = "Surname is not set";
           //echo "surname";
        }
        if ($phonenumber == -1) {
            $check = "Phone number is not set";
            //echo "phonenumber";
        }
        if ($email == -1) {
            $check = "Email is not set";
            //echo "email";
        }
        if ($birthdate == -1) {
            $check = "Birthdate is not set";
            //echo "birthdate";
        }
        if ($isActive == -1) {
            $check = "isActive is not set";
            //echo "isActive";
        }
        if ($services == -1) {
            $check = "Services are not setted. Use 0 for no services.";
            //echo "services";
        }
        return $check;
    }