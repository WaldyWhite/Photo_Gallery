<?php
session_start();
require_once 'app\core\config.php';
$errors = [];
$messages = [];

if (!empty($_POST['comm'])) {
    $_SESSION['gl'] = $_POST['comm'];
    $imageFileName = $_POST['comm'];
} elseif (isset($_SESSION['gl'])) {
    $imageFileName = $_SESSION['gl'];
} else {
    $imageFileName = null;
}

$commentFilePath = COMMENT_DIR . DIRECTORY_SEPARATOR . $imageFileName . '.txt';

// If the comment was sent
if (!empty($_POST['comment'])) {

    $comment = trim($_POST['comment']);

    // Comment Validation
    if ($comment === '') {
        $errors[] = 'You have not entered comment text';
    }

    // If there are no errors, write down a comment
    if (empty($errors)) {

        // Clean the text, change line breaks to <br/>, add the date
        $comment = strip_tags($comment);
        $comment = date('d.m.y H:i') . ': ' . $comment . '<br>' . 'Comment from ' . $_SESSION['login'];

        // Add text to the file (it will be created if it does not already exist)
        file_put_contents($commentFilePath, $comment . "\n", FILE_APPEND);

        $messages[] = 'Comment has been added';
    }
}

// We get a list of comments
$comments = file_exists($commentFilePath)
    ? file($commentFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES)
    : [];
