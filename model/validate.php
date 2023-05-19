<?php

function validName($name)
{
    // Check if the string contains only alphabetic characters
    return ctype_alpha($name);
}

function validGithub($url)
{
    // Check if the string is a valid URL
    return filter_var($url, FILTER_VALIDATE_URL) !== false;
}

function validExperience($value)
{
    // Check if the string is a valid "value" property (you can define the validation rules)
    // For example, check if the value is a positive integer
    return filter_var($value, FILTER_VALIDATE_INT, array('options' => array('min_range' => 0))) !== false;
}

function validPhone($phone)
{
    // Check if the phone number contains only numeric values
    return ctype_digit($phone);
}

function validEmail($email)
{
    // Check if the email address is valid
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function validSelectionsJobs($selectedJobs, $validOptions)
{
    // Check each selected jobs checkbox selection against a list of valid options
    // Assuming $selectedJobs is an array of selected job values
    return empty(array_diff($selectedJobs, $validOptions));
}

function validSelectionsVerticals($selectedVerticals, $validOptions)
{
    // Check each selected verticals checkbox selection against a list of valid options
    // Assuming $selectedVerticals is an array of selected vertical values
    return empty(array_diff($selectedVerticals, $validOptions));
}



?>