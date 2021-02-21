/*
 * I, Michael Mena, 000817498 certify that this material is my original work.  No other person's work has been used without due acknowledgement.
 * 
 * Date: 12/11/2020
 * 
 * This file handles the shopping cart of the website. fills the "shopping cart" page with the appropriate values as soon as the page is opened
 */
window.addEventListener("load", function() {

//Parses the information from the items into html so it can be added to the list
    function listToHtml(listItem){
        let html;
        listItem.itemName
        html = "<li id='shoppingItem'>";
        html += listItem.itemName + ":   $" + Number(listItem.itemPrice) + ".00";
        html += "</li><br><br>";
        console.log(html);
        // add a button to remove objects
        return html;

    }

    //Adds all of the items of the shopping list into the shoppingCart element
    function success(json) {
        
        let span = document.getElementById("shoppingCart");
        span.innerHTML = "";
        let total = 0;
        for (let i = 0; i < json.length; i++) {
            
            span.innerHTML += listToHtml(json[i]);
            total+= Number(json[i].itemPrice)
        }
        document.getElementById("total").innerHTML = "$" + total + ".00";
        

    }


        //Ajax function that is run automatically when opening the page 
        let url = "php/getList.php";

        //Performs the fetch
        fetch(url, { credentials: 'include' })
            .then(response => response.json()) 
            .then(success)


});