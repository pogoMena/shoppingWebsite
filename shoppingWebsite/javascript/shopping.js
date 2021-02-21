/*
 * I, Michael Mena, 000817498 certify that this material is my original work.  No other person's work has been used without due acknowledgement.
 * 
 * Date: 12/11/2020
 * 
 * This file Handles the selection of the items from the "shopping" page
 */
window.addEventListener("load", function() {

    //recieves the text from the php file after handling the ajax request
    function success(text) {
        
        if (text = "You need to be logged in"){
        let span = document.getElementById("idk");
        span.innerHTML = text;
        }
        

    }
    //The add to cart function defines the prices of the items and names to be parsed to the database
    function addToCart(buttonID) {
        let itemName;
        let price;

        switch(buttonID){
            case "cShoes":
                itemName = "childrenShoes";
                price = 100.00;
                break;
            case "aShoes":
                itemName = "antiqueClownShoes";
                price = 75.00;
                break;
            case "bSkeleton":
                itemName = "birdSkeleton";
                price = 55.00;
                break;
            case "bDrill":
                itemName = "boneDrill";
                price = 250.00;
                break;
            case "cSkulls":
                itemName = "conjoinedSkulls";
                price = 750.00;
                break;
            case "oPipe":
                itemName = "opiumPipe";
                price = 125.00;
                break;
            case "vCleaner":
                itemName = "vaccumCleaner";
                price = 650.00;
                break;


        }
        
    

        

        
        //Ajax function that adds the selected items to the "Shopping list" database
        let url = "php/addToList.php?itemName=" + itemName + "&price=" + price;

        console.log(url); //debug 

        //Performs the fetch

        fetch(url, { credentials: 'include' })
            .then(response => response.text()) 
            .then(success)

        
          

    }



    //The rest of the script is what handles all of the clickable buttons on the page
    let cShoesButton = document.getElementById("cShoes");
    cShoesButton.addEventListener("click", function(){
        addToCart("cShoes");
    });

    let aShoesButton = document.getElementById("aShoes");
    aShoesButton.addEventListener("click", function(){
        addToCart("aShoes");
    });

    let bSkeletonButton = document.getElementById("bSkeleton");
    bSkeletonButton.addEventListener("click", function(){
        addToCart("bSkeleton");
    });

    let bDrillButton = document.getElementById("bDrill");
    bDrillButton.addEventListener("click", function(){
        addToCart("bDrill");
    });

    let cSkullsButton = document.getElementById("cSkulls");
    cSkullsButton.addEventListener("click", function(){
        addToCart("cSkulls");
    });

    let oPipeButton = document.getElementById("oPipe");
    oPipeButton.addEventListener("click", function(){
        addToCart("oPipe");
    });

    let vCleanerButton = document.getElementById("vCleaner");
    vCleanerButton.addEventListener("click", function(){
        addToCart("vCleaner");
    });
           
        

    });
    