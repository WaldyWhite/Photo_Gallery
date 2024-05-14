<?php

function register(array $data)
{
    $values = [
        $data['username'],
        $data['useremail'],
        password_hash($data['userpassword'], PASSWORD_ARGON2ID),
        (new DateTime())->format('Y-m-d H:i:s')
    ];
    insert($values);
    verivlogin($data);
}

function isEmailAlreadyExists(string $email)
{
    if (getUserByEmail($email)) {
        return true;
    }
    return false;
}

function verivlogin(array $data)
{
    $getuser = getUserByEmail($data['useremail']);
    if ($getuser['useremail'] == $data['useremail'] && password_verify($data['userpassword'], $getuser['userpassword'])) {
        $_SESSION['auth'] = true;
        $_SESSION['login'] = $getuser['username'];
    }
}

function logout()
{
    unset($_SESSION['auth']);
    unset($_SESSION['login']);

}
