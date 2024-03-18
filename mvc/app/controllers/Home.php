<?php

class Home extends Controller{
    public function index(){
        
        $user = new User();
        $data = $user->where($arr);
        show($data);
        
        
        $arr['firstname'] = 'Nice';
        $rows = $user->insert($arr);
        $this->view('home');
        
        
    }

    

}