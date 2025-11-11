<?php
use Core\Database;
use Core\App;
use Core\Validator;

$email = $_POST["email"];
$password = $_POST["password"];

// Validate the form input
$errors = [];

if (! Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address.';
}

if (! Validator::string($password, 7, 255)) {
    $errors['password'] = 'Please provide a valid password atleast seven character.';
}

if (! empty($errors))
{
return view('registration/create.view.php', [
    'errors' => $errors
]);
}
$db = App::resolve(DATABASE::class);
// Check if the account already exist
$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();

if ($user){
    // then someone with that email already exists and has an account
    // if yes, redirect to a login page.
    header('/laracast/');
}else{ 
// if Not, save one to the database, and then log user in, and redirect
$db->query(
    "INSERT INTO users (email, password) VALUES (:email, :password)",
    [
        'email' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT)
    ]
);

    // Mark that the user has logged in
    $_SESSION['user'] = [
        'email' => $email
    ];

    header('location: /laracast/');
    exit();
}