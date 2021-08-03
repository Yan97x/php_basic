<?php
    include 'classes/postSeeder.php';
    $posts = wad\PostSeeder::seed();
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
            <?php foreach($posts as $post) { ?>
                <div style="border: 1px solid #000;">
                <?= $post->getUser() ?>
                <?= $post->getMessage() ?>
                </div>
            <?php } ?>
        </div>
    </body>
</html>