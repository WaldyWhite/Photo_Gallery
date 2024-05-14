<?php
include_once 'bootstrap.php';

session_start();

if (isset($_POST['useremail']) ) {
    register($_POST);
}