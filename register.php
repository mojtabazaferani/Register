<?php

$errors = ['username' => '', 'password' => '', 'passwordrep' => ''];

if(isset($_POST['submit'])) {

    if(empty($_POST['username'])) {

        $errors['username'] = 'Empty Username';

    }else {

        $userName = htmlspecialchars($_POST['username']);

        if(! filter_var($userName, FILTER_VALIDATE_EMAIL)) {

            $errors['username'] = 'Email Is Not Valid!!';

        }else {

            echo 'Validate';

        }
    }

    if(empty($_POST['password'])) {

        $errors['password'] = 'Empty Password';

    }else {

        $password = md5($_POST['password']);

    }

    if(empty($_POST['passwordrep'])) {

        $errors['passwordrep'] = 'Empty Password Rep';

    }else {

        $passwordRep = htmlspecialchars($_POST['passwordrep']);

        if($passwordRep !== $password) {

            $errors['passwordrep'] = 'Sorry, Password Not Match';
            
        }else {
            // echo '????'
        }
    }
}

?>