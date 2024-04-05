<?php

class Students extends Controller{
    public function index(){
        $student = new Student();

        if(isset($_POST['btn_submit'])){
            $arr['stud_code'] = $_POST['id'];
            $arr['stud_fname'] = $_POST['firstname'];
            $arr['stud_mname'] = $_POST['middlename'];
            $arr['stud_lname'] = $_POST['lastname'];
            $arr['stud_email'] = $_POST['email'];
            $arr['stud_pass'] = $_POST['password'];

            $data = $student->insert($arr);
            //redirect('/user');
        }


    $this->view('student');
    }
}