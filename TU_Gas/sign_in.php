<?php

require_once 'app/init.php';


if(!empty($_POST))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $signin = $auth->signin([
        'username' => $username,
        'password' => $password
    ]);
    
    if($signin)
    {
        header('Location: index.php');
    }
}
?>

<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
        <title>Sign In</title>
    </head>
    <body>
        <form action="" method="post">
            <fieldset>
                <legend>Sign In</legend>
                <label>
                    Username
                        <input type="text" name="username">
                </label>
                <label>
                    Password
                        <input type="password" name="password">
                </label>
            </fieldset>
            <input type="submit" name="sambit" value="Sign In">
        </form>
    </body>
</html>