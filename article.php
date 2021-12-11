<?php

include 'database.php';

if(isset($_GET['id']) && is_numeric($_GET['id']) ) {

$sql = "SELECT *
        FROM  article
        WHERE id = " . $_GET['id'];


$results = mysqli_query($conn, $sql);

/* ERROR HANDLING */
if ($results === false) {
    echo mysqli_error($conn);
} else {
    $article = mysqli_fetch_assoc($results); 
}

} else {
    $article = null;   
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
        if($article === null){
    ?>

        <p>Article was not found.</p>
~
        <?php 
       } else {
     ?>
        <ul>
            <li>
                <article>
                    <h2>
                        <?php 
                            echo $article['title']; 
                        ?>
                    </h2>
                    <?php 
                           echo $article['content'];
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
