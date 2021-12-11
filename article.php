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
        WHERE id = " . $_GET['id'];


$results = mysqli_query($conn, $sql);

/* ERROR HANDLING */
if ($results === false) {
    echo mysqli_error($conn);
} else {
    $articles = mysqli_fetch_assoc($results); 
}

 ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYsql</title>
</head>

<body>
    <header>
        <h1>My BLog</h1>
    </header>
    <main>

        <?php 
        if($articles === null){
    ?>

        <p>Article was not found.</p>

        <?php 
       } else {
     ?>
        <ul>
            <li>
                <article>
                    <h2>
                        <?php 
                            echo $articles['title']; 
                        ?>
                    </h2>
                    <?php 
                           echo $articles['content'];
                     ?>
                </article>
            </li>
            <?php
        }
         ?>
        </ul>
    </main>
</body>

</html>
