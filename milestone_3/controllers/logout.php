<?php
 echo "renu";
    session_start();
    
    // Unset all session variables
    $_SESSION = array();
    
    // Destroy the session
    session_destroy();
    
    echo '<script>window.location.href = "/DGL_123/milestone_3/signin";</script>';

    
?>