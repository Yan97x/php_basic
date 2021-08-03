<?php
namespace wad;
class Post{
    protected $user;
    protected $message;
    protected $comments;
    protected $image;
    protected $date;

    function __construct($user, $message, $date){
        $this->user = $user;
        $this->message = $message;
        $this->date = $date;
        $this->image = '../images/defult.jpg';
        $this->comments = [];
    }

    function getUser(){
        return $this->user;
    }

    function getMessage(){
        return $this->message;
    }

    function getImage(){
        return $this->image;
    }

    function getDate(){
        return $this->date;
    }

    function getComment(){
        return $this->comments;
    }

    function addcomment($user, $comment){
        $this->comments[] = array("user" => $user, "comment" => $comment);
    }
}
?>