<?php
    include 'classes/postSeeder.php';
    $posts = wad\PostSeeder::seed();
    $posts[0]->addcomment("David", "Good");
    $posts[0]->addcomment("Yan", "Thanks");
    $posts[1]->addcomment("Anonymous", "GOD");
    $posts[2]->addcomment("William", "HAHAHA");
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
                <div id = "post" class="shadow">
                    <img class="profile" src="<?=$post->getImage() ?>"/>
                    <p><?= $post->getUser() ?></p>
                    <p><?= $post->getDate() ?></p>
                    <p><?= $post->getMessage() ?></p>
                    <?php $comments = $post->getComment();
                    foreach($comments as $comment) { ?>
                        <hr>
                        <p><?=$comment['user']; ?></p>
                        <p><?=$comment['comment']; ?></p>
                        <hr>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </body>
</html>