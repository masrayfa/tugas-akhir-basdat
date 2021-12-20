<?php

if($_POST['password'] == "admin"){
    header('Location: read_data_penitipan_admin.php');
} else {
    echo "
    <script type='text/javascript'>
        alert('Passowrd salah.');
        window.location.replace('../pages/passprotect_page.php')
    </script>";
}
?>
