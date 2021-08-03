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
    function __construct(string $user, string $message, string $date){
        $this->user = $user;
        $this->message = $message;
        $this->date = $date;
        $this->image = 'images/defult.jpg';
    }

    /**
     * Returens user
     */
    function getUser():string {
        return $this->user;
    }

    /**
     * Returens message
     */
    function getMessage():string {
        return $this->message;
    }

    /**
     * Returens image
     */
    function getImage():string {
        return $this->image;
    }

    /**
     * Returens date
     */
    function getDate():string {
        return $this->date;
    }
}
?>