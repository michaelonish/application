<?php
session_start();

// Turn on error reporting
ini_set("display_errors", 0);
error_reporting();
require_once "model/validate.php";

require_once "vendor/autoload.php";
const STATES = array(
    "AL" => "Alabama", "AK" => "Alaska", "AZ" => "Arizona", "AR" => "Arkansas", "CA" => "California", "CO" => "Colorado", "CT" => "Connecticut", "DE" => "Delaware", "FL" => "Florida", "GA" => "Georgia", "HI" => "Hawaii", "ID" => "Idaho", "IL" => "Illinois", "IN" => "Indiana", "IA" => "Iowa", "KS" => "Kansas", "KY" => "Kentucky", "LA" => "Louisiana", "ME" => "Maine", "MD" => "Maryland", "MI" => "Michigan", "MN" => "Minnesota", "MS" => "Mississippi", "MO" => "Missouri", "MT" => "Montana", "NE" => "Nebraska", "NV" => "Nevada", "NH" => "New Hampshire", "NJ" => "New Jersey", "NM" => "New Mexico", "NY" => "New York", "NC" => "North Carolina", "ND" => "North Dakota", "OH" => "Ohio", "OK" => "Oklahoma", "OR" => "Oregon", "PA" => "Pennsylvania", "RI" => "Rhode Island",
    "SC" => "South Carolina", "SD" => "South Dakota", "TN" => "Tennessee", "TX" => "Texas", "UT" => "Utah", "VT" => "Vermont", "VA" => "Virginia", "WA" => "Washington", "WV" => "West Virginia", "WI" => "Wisconsin", "WY" => "Wyoming"
);
const LANAGUAGES = array("JavaScript", "PHP", "Java", "Python", "HTML", "CSS", "ReactJS", "NodeJs");
const VERTICALS = array("SaaS", "Health tech", "Ag-tech", "HR-tech", "Industrial tech", "Cybersecurity");
const FORM_STATES = array("info" => "views/personal.html", "experience" => "views/exper.html", "mailing" => "views/mailing.html", "summary" => "views/summary.html");

// Create an F3 (Fat-Free Framework) object
$f3 = Base::instance();

$f3->route('GET /', function () {
    // Display view page
    $view = new Template();
    echo $view->render('views/home.html');
});

$f3->route('GET|POST /personal', function ($f3) {
    if (!array_key_exists("formState", $_SESSION) || !array_key_exists($_SESSION["formState"], FORM_STATES)) {
        $_SESSION = array();
        $_SESSION["formState"] = "info";
    } else if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $prevFormState = $_SESSION["formState"];

        // Move form data to session and update the form state
        if ($prevFormState == "info") {
            $_SESSION["fname"] = isset($_POST["fname"]) ?$_POST["fname"] : null;
            $_SESSION["lname"] = isset($_POST["lname"]) ? $_POST["lname"] : null;
            $_SESSION["email"] = isset($_POST["email"]) ? $_POST["email"] : null;
            $_SESSION["state"] = isset($_POST["state"]) ?$_POST["state"] : null;
            $_SESSION["phone"] = isset($_POST["phone"])? $_POST["phone"] : null;
            $_SESSION["formState"] = "experience";
        } else if ($prevFormState == "experience") {
            $_SESSION["bio"] = isset($_POST["bio"]) ? $_POST["bio"] : null;
            $_SESSION["github"] = isset($_POST["github"]) ? $_POST["github"] : null;
            $_SESSION["years"] = isset($_POST["years"]) ? $_POST["years"] : null;
            $_SESSION["relocate"] = isset($_POST["relocate"]) ? $_POST["relocate"] : null;
            $_SESSION["formState"] = "mailing";
        } else if ($prevFormState == "mailing") {
            $_SESSION["mailing"] = isset($_POST["mailing"]) ? $_POST["mailing"] : null;
            $_SESSION["formState"] = "summary";
        } else if ($prevFormState == "summary") {
            $_SESSION = array();
            $f3->reroute(".");
        }
    }


    $f3->set("body", FORM_STATES[$_SESSION["formState"]]);
    $f3->set("states", STATES);
    $f3->set("languages", LANAGUAGES);
    $f3->set("verticals", VERTICALS);


    $view = new Template();
    echo $view->render('views/form.html');
});
// Run Fat-Free
$f3->run();





    $validJobs = LANAGUAGES;
    $validVerticals = VERTICALS;

    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email = $_POST['email'];
    $url = $_POST['github'];
    $phone = $_POST['phone'];
    $experience = $_POST['experience'];
    $selectedJobs = $_POST['languages'];
    $selectedVerticals = $_POST['verticals'];

    if (validName($firstName) &&
        validName($lastName) &&
        validEmail($email) &&
        validPhone($phone) &&
        validExperience($experience) &&
        validSelectionsJobs($selectedJobs, $validJobs) &&
        validSelectionsVerticals($selectedVerticals, $validVerticals)) {
        // All fields are valid, perform further actions

    } else {
        // Invalid fields, handle the validation errors
        // ...
    }









