<?php

class Home extends Controller{
    public function index(){
<<<<<<< HEAD
    $this->view('home');
        
        $user = new User();
        $data = $user->where($arr);
=======
<<<<<<< HEAD
    $this->view('home');
=======
        
        $model = new Model();
        $arr['firstname'] = "dio";
>>>>>>> 4f5970aca5df9f19422e36477f0e5a10c8a4ee03

        $data = $model->where($arr);
>>>>>>> 0f98373683a41ec2806dcd056a2370cb5cd9a08d
        show($data);
        
        
        $arr['firstname'] = 'Nice';
        $rows = $user->insert($arr);
        $this->view('home');
        
        
    }

    

}