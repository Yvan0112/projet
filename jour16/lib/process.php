<?php

$username = $_REQUEST['username'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

if (!empty($username) && !empty($email) && !empty($password)) {
    $user = [
        'name' => $username,
        'email' => $email,
    ];

    echo json_encode([
        'status' => 'Success',
        'message' => 'Utilisateur inscrit en BDD',
        'user' => $user,
    ]);
} else {
    echo json_encode([
        'status' => 'Fail',
        'message' => 'Erreur inscription',
    ]);
}
