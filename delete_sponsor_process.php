<?php
session_start();

if(!$_SESSION['login']) {
    header('Location:login.php');
} else {
    $id_login = $_SESSION['id'];
}

    if(isset($_POST['submitSponsor'])) {
        $id = $_POST['id'];

        $queryDelete = mysqli_query($conn, "delete from sponsorship where id = $id");
        $resultDelete = mysqli_fetch_assoc($queryDelete);

        if($resultDelete) {
            header("Location: settings.php");
        }
    }
?>