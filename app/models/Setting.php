<?php

class Setting extends Model {
    public function getSetting($setting) {
        // Assuming $setting is the field name in your database table
        $result = $this->findAll(); // Assuming findAll() retrieves all settings

        if ($result && count($result) > 0) {
            $get = $result[0]; // Assuming you only want the first setting
            return $get->$setting; // Return the value of the specified field
        }

        return null; // Or you can return a default value if no setting found
    }
}