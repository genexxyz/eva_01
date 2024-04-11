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



        $this->settingChange();
        $_SESSION['currentPage'] =  'dashboard';
        $this->view('admin/dashboard');
    }


    public function settings()
    {
        $this->settingChange();
        $this->view('admin/settings');
    }


    public function settingChange(){
        $setting = new Setting();
        
        if(isset($_POST['btn_settings'])){
            $arr['set_systemname'] = $_POST['systemname'];
            $arr['set_theme'] = $_POST['themeColor'];
            //$arr['set_logo'] = $_POST['photo'];
            $arr['set_schoolname'] = $_POST['schoolname'];
            $arr['set_sem'] = $_POST['semester'];
            $arr['set_acadyear'] = $_POST['acadyear'];


// Check if file is uploaded
if (!empty($_FILES['photo']['tmp_name'])) {
    $uploadDir = ROOT . "/" . 'resources/';
    $uploadFile = $uploadDir . 'logo.' . pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
    $logoName = 'logo.' . pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
    $existingLogoFile = $uploadDir . $_SESSION['logo'];

    // Delete existing logo file if it exists
    if (file_exists($existingLogoFile)) {
        unlink($existingLogoFile);
    }
    
    // Move uploaded file to destination folder
    if (move_uploaded_file($_FILES['photo']['tmp_name'], '../public/resources/' . 'logo.' . pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION))) {
        // Update logo in database
        $arr['set_logo'] = $logoName;
        $setting->update1('1', $arr);

        // Update session with new logo path
        //$_SESSION['logo'] = "logo";
    } else {
        echo 'Error uploading file.';
    }
}


            //$setting->update1('1', $arr);
            settingUpdate();
            //redirect('/user');
        }
    }
}
