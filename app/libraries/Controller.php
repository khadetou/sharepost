<?php

/**
 * This is the base controller
 * Loads the models and views
 */

class Controller
{
    //Load Model
    public function model($model)
    {
        //Require model File
        require_once '../app/models/' . $model . '.php';

        //Instaciate model
        return new $model();
    }

    //Load view file
    public function view($view, $data = [])
    {
        //check if view exist 
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once '../app/views/' . $view . '.php';
        } else {
            //View does not exist 
            die("View does not exist");
        }
    }
}
