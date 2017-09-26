<?php

require_once 'app/init.php';

$auth->build();
?>

<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
        <title>Index</title>
    </head>
    <body>
        <?php if($auth->check()): ?>
        <p>U r signed in. <a href="sign_out.php">Sign Out</a></p>
        <?php else: ?>
        <p>U rn't signed in! <a href="sign_up.php">Sign Up</a> or <a href="sign_in.php">Sign In</a></p>        
        <?php endif; ?>
    </body>
</html>