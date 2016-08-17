<?php
    session_start();
    
    function clean_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    foreach ($_POST as $key => $value) {
        // clean_input($value);
        $_SESSION[$key] = $value;
    }
    print "<p>".$value." hi!</p>";
?>