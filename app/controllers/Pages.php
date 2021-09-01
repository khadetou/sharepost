<?php
class Pages extends Controller
{
    public function __construct()
    {
    }
    public function index()
    {

        $data = ["title" => "SHAREPOSTS", "description" => "This is the KD post center, post as you wish!"];
        $this->view('pages/index', $data);
    }

    public function about()
    {
        $data = ["title" => "About Us", "description" => "App to share with other users!"];
        $this->view('pages/about', $data);
    }
}
