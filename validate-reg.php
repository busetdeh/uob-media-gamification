<?php
  //database connector
    require_once("connector.php");

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$errors = [];
$data = [];

if (empty($_POST['name'])) {
    $errors['name'] = 'Name is required.';
}

if (empty($_POST['mobile'])) {
    $errors['mobile'] = 'Mobile is required.';
}
if (empty($_POST['company'])) {
    $errors['company'] = 'Company is required.';
}

if (!empty($errors)) {
    $data['success'] = false;
    $data['errors'] = $errors;
} else {



    $mail   = $_POST['email'];
    $mobile = $_POST['mobile'];

    // $mail      = "khaliqaadiba@gmail.com";
    // $mobile     = "+623344335566";
   //  //check if the user already registered based on email and mobile
  
   // // Prepare and bind
    $result = $conn->query("SELECT * FROM uob_reguser WHERE email= '$mail'");
                     
     if ($result->num_rows > 0) {
         
           $data['success'] = false;
           //Output data of each row
           $errors['email'] = 'Email already registered.';
           $errors['password'] = "Username or Password is invalid";
           $data['errors'] = $errors;

      }else{

            $result2 = $conn->query("SELECT * FROM uob_reguser WHERE phonenum = '$mobile'");
            if ($result2->num_rows > 0) {
                $data['success'] = false;
                $errors['mobile'] = 'Mobile already registered.';
                $data['errors'] = $errors;
            }else{

                $currentDateTime = date('Y-m-d H:i:s');
                $fullName = $_POST['name']; 
                $email = $_POST['email']; 
                $mobile = $_POST['mobile']; 
                $mediaName = $_POST['company']; 
                $created = $currentDateTime;

                $sql = "INSERT INTO uob_reguser (fullname, email, phonenum, medianame, createddate) VALUES ('$fullName','$email', '$mobile', '$mediaName', '$created')";                       

                if ($conn->query($sql) === TRUE) {

                    $result3 = $conn->query("SELECT * FROM uob_reguser WHERE phonenum = $mobile");
                    if ($result3->num_rows > 0) {
                         while($row3 = $result3->fetch_assoc()){
                            $latestID = $row3['uid'];
           
                            $data['success'] = true;
                            $data['message'] = 'Ready to select the Prize?';
                            $data['uid'] = $latestID;
                         }
                    }else{
                        $data['success'] = false;
                        $errors['mobile'] = 'No ID selected.';
                        $data['errors'] = $errors;
                    }


                }else{
                    $data['success'] = false;
                    $errors['mobile'] = 'Can not save data.';
                    $data['errors'] = $errors;
                }

            }
      }

    

    // Close connection
    $conn->close();
    
}

echo json_encode($data);
?>