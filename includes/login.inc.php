<?php

include_once 'dbh.inc.php';
if(isset($_POST['login'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $trigger = false;
        //Create a template
        $sql = "SELECT * FROM users WHERE username=? AND password=?;";
        //Create a prepared statement
        $stmt = mysqli_stmt_init($conn);
        //Prepare the prepared statement
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                          <strong>Sql error!</strong>
                          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                          </button>
                  </div>";
        }
        else {
            mysqli_stmt_bind_param($stmt, "ss", $username, $password);
            //Run parameters inside database
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            while ($row = mysqli_fetch_assoc($result)) {
                $trigger = true;
            }
        }
        if($trigger) {
            
            setcookie('login', $username, time() + 604800);
            $_SESSION['login'] = $username;
            header("Location: index.php?action=success");
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                          <strong>Very nice!</strong>
                          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                          </button>
                        </div>";

        } else {
            echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                          <strong>Arr may gurr it's not workinggg</strong>
                          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                          </button>
                        </div>";
        }
}
