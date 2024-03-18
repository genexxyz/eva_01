<?php

class Home extends Controller{
    public function index(){
    $this->view('home');
<<<<<<< HEAD
=======
        
        $model = new Model();
        $arr['firstname'] = "dio";
>>>>>>> a7e8e9df4563908e54ae1293d83b52c14a1e4749

        $data = $model->where($arr);
        show($data);
        $this->view('home');
    }

    

}