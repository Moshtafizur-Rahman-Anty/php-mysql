<?php

require 'database.php';

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



<?php require 'header.php'; ?>

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
 
<?php  require 'footer.php';  ?>