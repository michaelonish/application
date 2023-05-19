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

?>