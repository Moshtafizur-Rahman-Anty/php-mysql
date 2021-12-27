<?php

require 'includes/database.php';
require 'includes/auth.php';

session_start();

$conn = getDB();

$sql = "SELECT *
        FROM article;";

$results = mysqli_query($conn, $sql);

if ($results === false) {
    echo mysqli_error($conn);
} else {
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
}

?>
<?php require 'includes/header.php';?>


<?php if (isLoggedIn()) {?>

    <p>You are logged in. <a href="logout.php">Log Out</a> </p>
    <a href="new-article.php">New artilce</a>

    <?php } else {?>

     <p>You are logged out. <a href="login.php">Log In</a></p>

<?php }?>


<?php if (empty($articles))

: ?>
<p>No articles found.</p>

<?php else: ?>

<ul>
    <?php foreach ($articles as $article): ?>

    <li>
        <article>
            <h2><a href="article.php?id=<?=$article['id'];?>"><?=htmlspecialchars($article['title']);?></a></h2>
            <p><?=htmlspecialchars($article['content']);?></p>
        </article>


    </li>
    <?php endforeach;?>
</ul>

<?php endif;?>

<?php require 'includes/footer.php';?>