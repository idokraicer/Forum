<?php
if(isset($_GET['signout']))
{
    if(isset($_SESSION['login'])) {
        header("Location: index.php?logout=error");
    } else {
        $_SESSION['login'] = "";
        header("Location: index.php?logout=success");
    }
}
    