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
                $iconClass = 'fa fa-check-circle';
                break;
            case 'warning':
                $iconClass = 'fa fa-exclamation-triangle';
                break;
            case 'danger':
                $iconClass = 'fa fa-times-circle';
                break;
            default:
                $iconClass = 'fa fa-info-circle';
                break;
        }

        // Display the alert message
        echo '
<div class="container">
    <div class="alert alert-' . $type . ' alert-dismissible fade show mx-auto" role="alert" style="max-width: 30rem;">
        <i class="' . $iconClass . ' h4"></i> 
        ' . $message . '
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
    </div>
</div>';
        
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
