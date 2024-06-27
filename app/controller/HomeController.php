<?php

class HomeController extends Controller {
    public function index() {

        $data = [
            'title' => 'Home | AlpaTech',
            'name' => $this->model('User_model')->getUser()
        ];
        $this->view('home/index', $data);
    }
}

