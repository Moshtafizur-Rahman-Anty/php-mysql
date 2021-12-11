<?php

require 'database.php';

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

<?php require 'header.php'; ?>

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
        
<?php require 'footer.php'; ?>