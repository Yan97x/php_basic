<?php
namespace wad;

/**
 * This class consist with these following properties: user, message, image, date
 */
class Comment{
    protected $user; 
    protected $message;
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
}
?>