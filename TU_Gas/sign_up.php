<?php

require_once 'app/init.php';


if(!empty($_POST))
{
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $validator = new Validator($database, $errorHandler);

    $validation = $validator->check($_POST, [
        'email' => [
            'required' => TRUE,
            'maxlength' => 200,
            'unique' =>'users',
            'email' => TRUE
        ],
        'username' => [
            'required' => TRUE,
            'minlength' => 3,
            'maxlenght' =>20,
            'unique' => 'users'
        ],
        'password' => [
            'required' => TRUE,
            'minlength' => 5,
        ]
    ]);

    if($validation->fails())
    {
       echo '<pre>', print_r($validation->errors()->all(), true), '</pre>' ;
    }else{
        $created = $auth->create([
            'email' => $email,
            'username' => $username,
            'password' => $password
        ]);
    
        if($created)
        {
            header('Location: index.php');
        }
        
    }


}
?>

<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
        <title>Sign Up</title>
    </head>
    <body>
        <form action="" method="post">
            <fieldset>
                <legend>Sign Up</legend
                <label>
                    Email
                        <input type="email" name="email">
                </label>
                <label>
                    Username
                        <input type="text" name="username">
                </label>
                <label>
                    Password
                        <input type="password" name="password">
                </label>
            </fieldset>
            <input type="submit" name="sambit" value="Sign Up">
        </form>
    </body>
</html>