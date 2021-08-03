<?php
namespace wad;

/**
 * This class consist with these following properties: user, message, comments, image, date
 */
class Post{
    protected $user; 
    protected $message;
    protected $comments;
    protected $image;
    protected $date;

    /**
     * Creating the starter default value
     */
    function __construct($user, $message, $date){
        $this->user = $user;
        $this->message = $message;
        $this->date = $date;
        $this->image = 'images/defult.jpg';
        $this->comments = [];
    }

    /**
     * Returens user
     */
    function getUser(){
        return $this->user;
    }

    /**
     * Returens message
     */
    function getMessage(){
        return $this->message;
    }

    /**
     * Returens image
     */
    function getImage(){
        return $this->image;
    }

    /**
     * Returens date
     */
    function getDate(){
        return $this->date;
    }

    /**
     * Returens comment
     */
    function getComment(){
        return $this->comments;
    }

    /**
     * Add a command to this post
     */
    function addcomment($user, $comment){
        $this->comments[] = array("user" => $user, "comment" => $comment);
    }
}
?>