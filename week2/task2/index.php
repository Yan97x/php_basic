<?php
    include 'classes/postSeeder.php';
    $posts = PostSeeder::seed();
    var_dump($posts);
    exit;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Social Media</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div id = "content">
            <h1>Social Media</h1>
            <br/>
            <?php foreach($posts as $post) { ?>
                <div id = "post">
                <img src="<?= $post['image'] ?>" width="60" height="60" alt="user image">
                <?= $post['name'] ?>
                <?= $post['message'] ?>
                <?= $post['date'] ?>
                </div>
            <?php } ?>
        </div>
    </body>
</html>