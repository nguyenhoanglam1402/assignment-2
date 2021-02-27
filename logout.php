<?php
    if(isset($_POST['logout-button'])){
        session_destroy();
        header('Location: /index.php');
    }
?>