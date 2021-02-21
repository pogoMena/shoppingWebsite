<?php
/* I, Michael Mena, student number 000817498 certify that this code was not shared with anybody and no other code has been created by anyone else without due credit
 * Michael Mena
 * 000817498
 * 12/4/2020
 */

/*
This class creates the listItem object which will fill the shopping list
*/
    class items implements JsonSerializable
    {
        
        private $itemName;
        private $itemPrice;

        //Constructs the object
        function __construct($itemName, $itemPrice){
            
            $this -> $itemName = $itemName;
            $this -> $itemPrice = (float)$itemPrice;
        }

        //Returns the object
        public function jsonSerialize()
        {
        return  get_object_vars($this);
        }






    }
?>