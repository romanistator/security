<?php
    session_start();
    session_destroy();
    header("location:index.php?message=Vous êtes déconnecté&status=success");
?>