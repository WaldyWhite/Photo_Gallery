<?php
include_once 'bootstrap.php';

session_destroy();

if (isset($_POST['logout'])) {
    logout();
}
