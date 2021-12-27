<?php  

/**
 * Return the user authentication status
 *  
 * */ 

function isLoggedIn() {
    return isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'];
}