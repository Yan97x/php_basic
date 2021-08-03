<?php
namespace wad;
class Post{
    protected $user;
    protected $message;
    protected $comments;

    function __construct($user, $message){
        $this->user = $user;
        $this->message = $message;
        $this->comments = [];
    }

    function getUser(){
        return $this->user;
    }

    function getMessage(){
        return $this->message;
    }

    function getComment(){
        return $this->comments;
    }

    function addcomment($user, $comment){
        $this->$comments[] = array("user" => $user, "comment" => $comment);
    }
}
?>