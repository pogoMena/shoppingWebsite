

<?php
/*
 * I, Michael Mena, 000817498 certify that this material is my original work.  No other person's work has been used without due acknowledgement.
 * 
 * Date: 12/11/2020
 * 
 * This file is holds the "account" class and is used to create accounts as necessary
 */
class account implements JsonSerializable{
        private $username;
        private $password;
        private $email;
        
        //Constuctor
        function __construct($username, $password, $email){
            //$this -> $id = (int)$id;
            $this -> $username = $username;
            $this -> $password = $password;
            $this -> $email = $email;
        }

        //Returns the information
        public function jsonSerialize()
        {
        return  get_object_vars($this);
        }


}