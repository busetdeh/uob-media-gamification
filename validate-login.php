<?php
  //database connector
    require_once("connector.php");


$errors = [];
$data = [];

if (empty($_POST['username'])) {
    $errors['uname'] = 'Username is required.';
}

if (empty($_POST['pass'])) {
    $errors['password'] = 'Password is wrong.';
}


if (!empty($errors)) {
    $data['success'] = false;
    $data['errors'] = $errors;
} else {

            $uname = $_POST['username'];
            $pass  = md5($_POST['pass']);

             $result = $conn->query("SELECT * FROM uob_admin WHERE username= '$uname' AND password ='$pass'");
                     
            if ($result->num_rows > 0) {
                    
                     while($row = $result->fetch_array()){
                        // Start the session
                        session_start();

                        $_SESSION['adm'] = $row['username'];
                        $data['success'] = true;
                        $data['message'] = 'Welcome Admin';
                     }

            }else{
                $data['success'] = false;
                $errors['password'] = "Username or Password is invalid";
                $data['errors'] = $errors;
            }
            $conn->close();
    
}

echo json_encode($data);
?>