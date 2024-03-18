<?php

class Home extends Controller{
    public function index(){
    $this->view('home');

        $data = $model->where($arr);
        show($data);
        $this->view('home');
    }

    

}