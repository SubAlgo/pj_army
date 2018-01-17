<?php
    include 'db.php';

    $user_id = trim((string)$_POST['userid']);
    $user_password = trim((string)$_POST['password']);
    $user_password2 = trim((string)$_POST['password2']);
    $user_name = trim((string)$_POST['username']);
    $user_surname = trim((string)$_POST['usersurname']);
    $user_permission = trim((string)$_POST['permis']);

    echo "$user_id <br>";
    echo "$user_password <br>";
    echo "$user_password2 <br>";
    echo "$user_name <br>";
    echo "$user_surname <br>";
    echo "$user_permission <br>";

    if($user_password != $user_password2) {
        echo "password ไม่ถูกต้อง";
        header( "refresh:2; url=./user_add_form.php" ); 
        exit(1);
    }

    if($user_id == "" || $user_password == "" || $user_name == "" || $user_surname == "" || $user_permission == "") {
        echo "กรอกข้อมูลไม่ครบ!!";
        header( "refresh:2; url=./user_add_form.php" ); 
        exit(1);
    }

    $sql = "INSERT INTO users (`user_id`, `user_password`, `user_name`, `user_surname`, `permission_id`) 
            VALUES ('$user_id',
                    '$user_password',
                    '$user_name',
                    '$user_surname',
                    '$user_permission');";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


?>