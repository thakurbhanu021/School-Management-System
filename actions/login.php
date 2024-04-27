<?php 
if(isset($_POST['login'])) {
    $email = $_POST['email2'];
    $pass = $_POST['password'];

    if($email == 'admin@example.com' && $pass == 'admin@smp') {
        session_start();
        $_SESSION['login'] = true;
        header('Location: ../admin/dashboard.php');
    }
}
else {
    echo'Invalid Credentials';
}
?>