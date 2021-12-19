<?php

if($_POST['password'] == "admin"){
    header('Location: read_data_penitipan.php');
} else {
    echo "Password Salah!";
    header('Location: ../pages/passprotect_page.php');
}
?>
