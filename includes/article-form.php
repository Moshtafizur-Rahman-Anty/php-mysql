<?php

if (!empty($errors)) {?>


<ul>
    <?php
foreach ($errors as $error) {
    ?>
        <li><?php echo $error; ?></li>
    <?php
}
    ?>
</ul>
<?php
}
?>


<form method="post">

    <div>
        <label for="title">Title</label>
        <input name="title" id="title" placeholder="Article title" value="<?php echo htmlspecialchars($title); ?>">
    </div>


    <div>
        <label for="content">Content</label>
        <textarea name="content" id="contant" cols="40" rows="4" placeholder="Article content"  ><?php echo htmlspecialchars($content); ?> </textarea>
    </div>


    <div>
        <label for="published_at">Publishication date and time</label>
        <input type="datetime-local" name="published_at" id="published_at" value="<?php echo htmlspecialchars($published_at); ?>">
    </div>

    <button>Save</button>


</form>


<?php require 'includes/footer.php';?>