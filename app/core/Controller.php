<?php

class Controller
{

    public function view($name, $data = [])
    {
        if (!empty($data)) {
            extract($data);
        }


        if (file_exists('../app/views/' . $name . '.php')) {

            require '../app/views/' . $name . '.php';
        } else {
            require '../app/views/404.php';
        }
    }

    protected function checkSessionTimeout()
    {
        // Set session timeout to 30 minutes (1800 seconds)
        $session_timeout = 5; // 30 minutes in seconds

        // Set session cookie parameters
        session_set_cookie_params($session_timeout);

        // Track user activity and update last activity timestamp
        if (!isset($_SESSION['last_activity'])) {
            $_SESSION['last_activity'] = time();
        } else {
            $_SESSION['last_activity'] = time(); // Update last activity timestamp
        }

        // Check if the session has expired due to inactivity
        if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $session_timeout)) {
            // Expire session and log out user
            session_unset();    // Unset all session variables
            session_destroy();  // Destroy the session
            redirect("login"); // Redirect to login page with timeout message
            exit();
        }
    }
}
