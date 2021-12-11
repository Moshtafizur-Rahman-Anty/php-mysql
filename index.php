<?php

include 'database.php';

$sql = "SELECT *
        FROM  article"; 

$results = mysqli_query($conn, $sql);

/* ERROR HANDLING */
if ($results === false) {
    echo mysqli_error($conn);
} else {
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC); 
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
        if(empty($articles)){
    ?>

        <p>No articles found.</p>

        <?php 
       } else {
     ?>
        <ul>
            <?php 
            foreach ($articles as  $article) {
        ?>
            <li>
                <article>
                    <h2><a href="article.php?id=<?php echo $article['id']; ?>"><?php echo $article['title']; ?></a>
                    </h2>
                    <?php 
                           echo $article['content'];
                     ?>
                </article>
            </li>
            <?php
            }
        }
         ?>
        </ul>
    </main>
</body>

</html>
