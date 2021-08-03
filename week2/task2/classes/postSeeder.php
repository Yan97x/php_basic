<?php
namespace wad;
use wad\Post;
include 'post.php';

class PostSeeder{
    public static function seed(){
        $posts = [];
        $posts[] = new Post("Yan", "Hi!", "01/01/2020");
        $posts[] = new Post("Li", "Nice to meet you!", "02/01/2020");
        $posts[] = new Post("Ye", "Today is a good day!", "01/01/2020");
        return $posts; 
    }
}
?>