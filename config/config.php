<?php

if ($_SERVER['HTTP_HOST'] == 'localhost') {
    define("BASE_URL", "http://localhost/lms/");
    define("DIR_URL", $_SERVER['DOCUMENT_ROOT'] . "/lms");
} else {
    define("BASE_URL", "https://lms.com");
    define("DIR_URL", $_SERVER['DOCUMENT_ROOT']);
}
