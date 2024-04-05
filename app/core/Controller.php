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

    // Function to display an alert message
    public function showAlert($message, $type = 'info')
    {
        // Set the alert type (info, success, warning, danger)
        $alertMessage = '';
        switch ($type) {
            case 'success':
                $iconClass = 'bi bi-check-circle-fill';
                break;
            case 'warning':
                $iconClass = 'bi bi-exclamation-triangle-fill';
                break;
            case 'danger':
                $iconClass = 'bi bi-x-circle-fill';
                break;
            default:
                $iconClass = 'bi bi-info-circle-fill';
                break;
        }

        // Display the alert message

        echo '<div class="alert alert-' . $type . ' alert-dismissible fade show" role="alert">';
        echo '<i class="' . $iconClass . ' h4 mx-2"></i> ';
        echo $message;
        echo '<button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">';
        echo '<span aria-hidden="true"></span>';
        echo '</button>';
        echo '</div>';
    }


    public function getErrorMessageIfEmpty($inputs, $fieldNames)
    {
        foreach ($inputs as $key => $input) {
            if (empty($input)) {
                $fieldName = isset($fieldNames[$key]) ? ucfirst($fieldNames[$key]) : 'Field';
                return $fieldName . ' cannot be empty.';
            }
        }
        return ''; // No error message
    }
}
