<?php

function show($stuff)
{

    echo '<pre>';
    print_r($stuff);
    echo '</pre>';
    //print_r(explode("/" , trim($_GET['url'], "/")));
}

function redirect($path)
{
    header("Location: " . ROOT . "/" . $path);
}

function showAlert($message, $type = 'info')
{
    // Set the alert type (info, success, warning, danger)
    
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
    return '
<div class="container">
    <div class="alert alert-' . $type . ' alert-dismissible fade show mx-auto" role="alert" style="max-width: 30rem;">
        <i class="' . $iconClass . ' h4"></i> 
        ' . $message . '
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
    </div>
</div>';
}

function showAlertOnce($message, $type = 'info', $alertname) {
    if (!isset($_SESSION[$alertname]) || !$_SESSION[$alertname]) {
        
        return showAlert($message, $type);
    }
    return ''; // Return empty string if alert has already been shown
}


function getErrorMessageIfEmpty($inputs, $fieldNames)
{
    foreach ($inputs as $key => $input) {
        if (empty($input)) {
            $fieldName = isset($fieldNames[$key]) ? ucfirst($fieldNames[$key]) : 'Field';
            return $fieldName . ' cannot be empty.';
        }
    }
    return ''; // No error message
}


function settingUpdate(){
    $set = new Setting();
        $_SESSION['systemname'] = $set->getSetting('set_systemname');
        $_SESSION['theme'] = $set->getSetting('set_theme');
        $_SESSION['logo'] = $set->getSetting('set_logo');
        $_SESSION['schoolname'] = $set->getSetting('set_schoolname');
        $_SESSION['semester'] = $set->getSetting('set_sem');
        $_SESSION['acadyear'] = $set->getSetting('set_acadyear');
}
