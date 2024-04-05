<?php
class Home extends Controller
{
    
    public function index()
    {
        $this->view('home');
        $login = new Student();

        if (isset($_POST['login_submit'])) {
            $user = $_POST['login_id'];
            $pass = $_POST['login_pass'];

            // Validate form data
            if (empty($user) || empty($pass)) {
                // Set error message
                
                
                // Store error message in session
                $_SESSION["errors"] = 'Username and Password cannot be empty.';
                
                // Redirect back to the form
                header("Location: home");
                exit();
            } else {
                // No errors, proceed with further processing (e.g., authentication)
                // For example:
                $result = $login->authenticate($user, $pass);
                var_dump($result);
                if ($result) {
                    $_SESSION["userId"] = $user;
                    header("Location: dashboard");
                    exit();
                } else {
                    
                    $_SESSION["errors"] = 'Invalid username or password.';
                    header("Location: home");
                    exit();
                }
            }
        }
    }
}
?>
