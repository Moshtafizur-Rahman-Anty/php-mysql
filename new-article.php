<?php 

if($_SERVER["REQUEST_METHOD"] == "POST") {

    

}


?>


<?php require 'includes/header.php';?>

<h2>New article</h2>


<form method="post">

    <div>
        <label for="title">Title</label>
        <input name="title" id="title" placeholder="Article title">
    </div>


    <div>
        <label for="content">Content</label>
        <textarea name="content" id="contant" cols="40" rows="4" placeholder="Article content"></textarea>
    </div>


    <div>
        <label for="published_at">Publishication date and time</label>
        <input type="datetime-local" name="pubished_at" id="published_at">
    </div>

    <button>Add</button>


</form>


<?php require 'includes/footer.php';?>