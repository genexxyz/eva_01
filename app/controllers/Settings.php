<?php

class Settings extends Controller{
function index(){
    $setting = new Setting();

        if(isset($_POST['btn_settings'])){
            $arr['set_systemname'] = "nice"; //$_POST['systemname'];
            //$arr['set_theme'] = $_POST['themeColor'];
            //$arr['set_logo'] = $_POST['photo'];
            //$arr['set_schoolname'] = $_POST['schoolname'];
            //$arr['set_sem'] = $_POST['semester'];
            //$arr['set_acadyear'] = $_POST['acadyear'];

            $setting->update(1, $arr);
            redirect('adminpage');
        }
}

    
}