<?php
    if(isset($_POST['username'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(empty($username) && empty($password)){
            echo "heslo nebo uživatelské jméno nebylo zadané";
        }else{
            $conn = oci_connect('ST61021', 'Flynn177', 'fei-sql1.upceucebny.cz/IDAS');
            if (!$conn) {
                $e = oci_error();
                trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
            }

        }
    }

?>

<form method="POST">
    <input type="text" name="username" placeholder="Username"><br/>
    <input type="password" name="password" placeholder="Password"><br/>
    <button type="submit">Login</button>
</form>
