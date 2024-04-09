<?php
session_start();

class Adminpage extends Controller
{
    public function index()
    {
        
        // Define the user types
        $userTypes = ['Admin', 'Student', 'Faculty'];

        // Loop through each user type
        foreach ($userTypes as $userType) {
            // Create an instance of the corresponding class
            $user = new $userType();

            // Find all users of the current type
            $totalUsers = $user->findAll();

            // Count the total users and store the count in a session variable
            $_SESSION['total' . $userType] = count($totalUsers);
        }



        $setting = new Setting();

        if(isset($_POST['btn_settings'])){
            $arr['set_systemname'] = $_POST['systemname'];
            $arr['set_theme'] = $_POST['themeColor'];
            $arr['set_logo'] = $_POST['photo'];
            $arr['set_schoolname'] = $_POST['schoolname'];
            $arr['set_sem'] = $_POST['semester'];
            $arr['set_acadyear'] = $_POST['acadyear'];

            $setting->update1('1', $arr);
            //redirect('/user');
        }
        settingUpdate();
        $_SESSION['currentPage'] =  'dashboard';
        $this->view('admin/dashboard');
    }


    public function settings()
    {
        
        $this->view('admin/settings');
    }
}
