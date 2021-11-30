<?php

if($_POST['pass'] == ""){
    header('Location: data_penitipan.php');
} else {
    echo "Password Salah!";
    header('Location: pass_page.php');
}
?>
