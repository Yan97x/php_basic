<?php
    $posts = array();
    $posts[] = array(
        'name' => 'Yan',
        'message' => 'Hello!',
        'image' => 'images/defult.jpg',
        'date' => '1/1/11'
    );
    $posts[] = array(
        'name' => 'Li',
        'message' => "Nice to meet you",
        'image' => 'images/defult.jpg',
        'date' => '1/2/11'
    );
    $posts[] = array(
        'name' => 'Ye',
        'message' => 'Today is a good day',
        'image' => 'images/defult.jpg',
        'date' => '2/1/11'
    );
    //  var_dump($posts)
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