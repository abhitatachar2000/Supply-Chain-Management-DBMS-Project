<?php
    session_start();
    unset($_SESSION['userids']);
    unset($_session['adminid']);
    header('Location:./index.php')
?>