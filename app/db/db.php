<?php
/**
 * @return PDO
 */

function get_connection()
{
    return new PDO('mysql:host=127.0.0.1;dbname=photogallery', 'root', '');
}

function insert(array $data)
{
    $query = 'INSERT INTO users (username, useremail, userpassword, created_at) VALUES(?, ?, ?, ?)';
    $db = get_connection();
    $stmt = $db->prepare($query);
    $stmt->execute($data);
}

function getUserByEmail(string $email)
{
    $query = 'SELECT * FROM users WHERE useremail = ?';
    $db = get_connection();
    $stmt = $db->prepare($query);
    $stmt->execute([$email]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result) {
        return $result;
    }
    return false;
}
