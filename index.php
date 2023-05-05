<?php
/*
    Michael Onishchenko
    4/19/23
    328/application/index.php
    controller for application project

 */
session_start();

// Turn on error reporting
ini_set("display_errors", 1);
error_reporting(E_ALL);

require_once "vendor/autoload.php";

const STATES = array(
    "AL" => "Alabama",
    "AK" => "Alaska",
    "AZ" => "Arizona",
    "AR" => "Arkansas",
    "CA" => "California",
    "CO" => "Colorado",
    "CT" => "Connecticut",
    "DE" => "Delaware",
    "FL" => "Florida",
    "GA" => "Georgia",
    "HI" => "Hawaii",
    "ID" => "Idaho",
    "IL" => "Illinois",
    "IN" => "Indiana",
    "IA" => "Iowa",
    "KS" => "Kansas",
    "KY" => "Kentucky",
    "LA" => "Louisiana",
    "ME" => "Maine",
    "MD" => "Maryland",
    "MA" => "Massachusetts",
    "MI" => "Michigan",
    "MN" => "Minnesota",
    "MS" => "Mississippi",
    "MO" => "Missouri",
    "MT" => "Montana",
    "NE" => "Nebraska",
    "NV" => "Nevada",
    "NH" => "New Hampshire",
    "NJ" => "New Jersey",
    "NM" => "New Mexico",
    "NY" => "New York",
    "NC" => "North Carolina",
    "ND" => "North Dakota",
    "OH" => "Ohio",
    "OK" => "Oklahoma",
    "OR" => "Oregon",
    "PA" => "Pennsylvania",
    "RI" => "Rhode Island",
    "SC" => "South Carolina",
    "SD" => "South Dakota",
    "TN" => "Tennessee",
    "TX" => "Texas",
    "UT" => "Utah",
    "VT" => "Vermont",
    "VA" => "Virginia",
    "WA" => "Washington",
    "WV" => "West Virginia",
    "WI" => "Wisconsin",
    "WY" => "Wyoming"
);

const MAILING_LIST_LANGUAGES = array(
    "JavaScript", "PHP", "Java", "Python", "HTML", "CSS", "C", "C++"
);
const MAILING_LIST_VERTICALS = array(
    "SaaS", "Healthcare", "Ag tech", "HR tech", "Industrial tech", "Cybersecurity"
);

const FORM_STATES = array(
    "info" => "views/form_body_info.html",
    "experience" => "views/form_body_experience.html",
    "mailingList" => "views/form_body_mailing_lists.html",
    "summary" => "views/form_body_summary.html"
);

// Create an F3 (Fat-Free Framework) object
$f3 = Base::instance();

$f3->route('GET /', function () {
    // Display view page
    $view = new Template();
    echo $view->render('views/home.html');
});

$f3->route('GET|POST /apply', function ($f3) {
    if (!isset($_SESSION["formState"]) || !array_key_exists($_SESSION["formState"], FORM_STATES)) {
        // Beginning a new session
        $_SESSION = array();
        $_SESSION["formState"] = "info";
    } else if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Continuing an existing session
        $prevFormState = $_SESSION["formState"];

        // Move form data to session and update the form state
        switch ($prevFormState) {
            case "info":
                $_SESSION["fname"] = $_POST["fname"];
                $_SESSION["lname"] = $_POST["lname"];
                $_SESSION["email"] = $_POST["email"];
                $_SESSION["state"] = $_POST["state"];
                $_SESSION["phone"] = $_POST["phone"];

                $_SESSION["formState"] = "experience";
                break;
            case "experience":
                $_SESSION["bio"] = $_POST["bio"];
                $_SESSION["github"] = $_POST["github"];
                $_SESSION["years"] = $_POST["years"];
                $_SESSION["relocate"] = $_POST["relocate"];

                $_SESSION["formState"] = "mailingList";
                break;
            case "mailingList":
                if (isset($_POST["mailinglist"]))
                    $_SESSION["mailinglist"] = $_POST["mailinglist"];

                $_SESSION["formState"] = "summary";
                break;
            case "summary":
                // For now, reset the session and reroute to home when the user clicks submit on the final summary page
                $_SESSION = array();
                $f3->reroute("/");
                break;
        }
    }

    // Render the form page according to the current form state
    $f3->set("formBody", FORM_STATES[$_SESSION["formState"]]);

    $f3->set("states", STATES);

    $f3->set("languages", MAILING_LIST_LANGUAGES);
    $f3->set("verticals", MAILING_LIST_VERTICALS);

    $view = new Template();
    echo $view->render('views/form_base.html');
});

// Run Fat-Free
$f3->run();



