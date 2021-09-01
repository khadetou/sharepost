<?php

class Users extends Controller
{
    public function __construct()
    {
    }

    public function register()
    {

        //Check for post
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //Process form

        } else {
            //Init data
            $data = [
                "name" => "",
                "email" => "",
                "password" => "",
                "confirm_password" => "",
                "email_err" => "",
                "name_err" => "",
                "password_err" => "",
                "confirm_password_err" => ""
            ];

            //Load view
            $this->view("users/register", $data);
        }
    }
    public function login()
    {

        //Check for post
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //Process form

        } else {
            //Init data
            $data = [
                "email" => "",
                "email_err" => "",
                "password" => "",
                "password_err" => "",
            ];

            //Load view
            $this->view("users/login", $data);
        }
    }
}
