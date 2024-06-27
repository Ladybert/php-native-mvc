<?php 

class AboutController extends Controller {

    public function index(){

        $data = [
            'title' => 'Index | About'
        ];
        $this->view('about/index', $data);
    }
    public function page(){

        $data = [
            'title' => 'Page | About'
        ];
        $this->view('about/page', $data);
    }
    
}

