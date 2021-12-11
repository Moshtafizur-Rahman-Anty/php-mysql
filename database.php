<?php

$db_host = "localhost";
$db_name = "cms";
$db_user = "cms_www";
$db_pass = "iamravs100";

$conn = mysqli_connect( $db_host, $db_user, $db_pass, $db_name );

if(mysqli_connect_error()) {

    echo mysqli_connect_error();
    exit;

}

$sql = "SELECT *
        FROM  article
        ORDER BY pblished_at;";


$results = mysqli_query($conn, $sql);

/* ERROR HANDLING */
if ($results === false) {
    echo mysqli_error($conn);
} else {
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC); 
    var_dump($articles);
}


