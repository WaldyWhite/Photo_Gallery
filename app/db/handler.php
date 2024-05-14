<?php
include_once 'bootstrap.php';

session_start();

if (isEmailAlreadyExists($_POST['useremail'])) {
    verivlogin($_POST);
}









