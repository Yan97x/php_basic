<?php
namespace wad;
use wad\Post;
use wad\Comment;
include 'post.php';
include 'comment.php';

/**
 * This class contains a function to mock up some posts 
 */
class PostSeeder{
    /**
     * This function returns an array of prepopulated posts
     */
    public static function seed(){
        $posts = [];
        
        /* Setting posts */
        $posts[0] = new Post("Yan", "Hi!", "01/01/2020");
        $posts[1] = new Post("Li", "Nice to meet you!", "02/01/2020");
        $posts[2] = new Post("Ye", "Today is a good day!", "01/01/2020");

        /* Setting comments */
        $posts[0]->addcomment(new Comment("David", "Good", "02/01/2020"));
        $posts[0]->addcomment(new Comment("Yan", "Thanks", "02/01/2020"));
        $posts[1]->addcomment(new Comment("Anonymous", "GOD", "02/01/2020"));
        $posts[2]->addcomment(new Comment("William", "HAHAHA", "02/01/2020"));

        return $posts; 
        
    }
}
?>