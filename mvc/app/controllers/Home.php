<?php

class Home extends Controller{
    public function index(){
<<<<<<< HEAD
    $this->view('home');
=======
        
        $model = new Model();
        $arr['firstname'] = "dio";
>>>>>>> 4f5970aca5df9f19422e36477f0e5a10c8a4ee03

        $data = $model->where($arr);
        show($data);
        $this->view('home');
    }

    

}