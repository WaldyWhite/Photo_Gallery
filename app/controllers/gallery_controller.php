<?php
require_once 'app\core\config.php';

$errors = [];
$messages = [];

// If the file has been sent
if (!empty($_FILES)) {

    // We go through the files in a loop
    for ($i = 0; $i < count($_FILES['files']['name']); $i++) {

        $fileName = $_FILES['files']['name'][$i];

        // Checking the size
        if ($_FILES['files']['size'][$i] > UPLOAD_MAX_SIZE) {
            $errors[] = 'Недопостимый размер файла ' . $fileName;
            continue;
        }

        // Checking the format
        if (!in_array($_FILES['files']['type'][$i], ALLOWED_TYPES)) {
            $errors[] = 'Недопустимый формат файла ' . $fileName;
            continue;
        }

        $filePath = UPLOAD_DIR . DIRECTORY_SEPARATOR . basename($fileName);

        // Trying to download a file
        if (!move_uploaded_file($_FILES['files']['tmp_name'][$i], $filePath)) {
            $errors[] = 'Ошибка загрузки файла ' . $fileName;
            continue;
        }
    }

    if (empty($errors)) {
        $messages[] = 'Файлы были загружены';
    }

}

// If the file was deleted
if (!empty($_POST['name'])) {

    $filePath = UPLOAD_DIR . DIRECTORY_SEPARATOR . $_POST['name'];
    $commentPath = COMMENT_DIR . DIRECTORY_SEPARATOR . $_POST['name'] . '.txt';

    // Deleting the image
    unlink($filePath);

    // Delete the comment file if it exists
    if (file_exists($commentPath)) {
        unlink($commentPath);
    }

    $messages[] = 'The file has been deleted';
}

// Get a list of files, exclude system files
$files = scandir(UPLOAD_DIR);
$files = array_filter($files, function ($file) {
    return !in_array($file, ['.', '..', '.gitkeep']);
});

