<?php
namespace wad;
use wad\Post;
include 'post.php';

class PostSeeder{
    public static function seed(){
        $posts = [];
        $posts[] = new Post("Yan", "Hi!");
        $posts[] = new Post("Li", "Nice to meet you!");
        $posts[] = new Post("Ye", "Today is a good day!");
        return $posts; 
    }
}
?>