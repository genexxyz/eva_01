<?php
session_start();
class Login extends Controller
{
    public function index()
    {
        $this->view('login');
        
        if (isset($_POST['login_submit'])) {
            $user = $_POST['login_id'];
            $pass = $_POST['login_pass'];

            // Validate form data
            if (empty($user) || empty($pass)) {
                // Set error message
                $_SESSION["errors"] = 'Username and Password cannot be empty.';
                
                // Redirect back to the form
                header("Location: login");
                exit();
            } else {
                // No errors, proceed with authentication
                $student = new Student();
                $studentResult = $student->authenticate($user, $pass);

                if ($studentResult) {
                    $_SESSION["userId"] = $user;
                    header("Location: dashboard");
                    exit();
                } else {
                    $admin = new Admin();
                    $adminResult = $admin->authenticate($user, $pass);

                    if ($adminResult) {
                        $_SESSION["userId"] = $user;
                        header("Location: dashboard");
                        exit();
                    } else {
                        $_SESSION["errors"] = 'Invalid username or password.';
                        header("Location: login");
                        exit();
                    }
                }
            }
        }
    }
}
?>
