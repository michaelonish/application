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



?>