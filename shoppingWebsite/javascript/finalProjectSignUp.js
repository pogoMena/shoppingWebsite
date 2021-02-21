/*
 * I, Michael Mena, 000817498 certify that this material is my original work.  No other person's work has been used without due acknowledgement.
 * 
 * Date: 12/11/2020
 * 
 * This file handles the signup feature of the website and then saves all of the information 
 * to the appropriate database
 * 
 */
window.addEventListener("load", function() {

//This handles the ajax request that inserts the new account into the database. The response is then either positive or negative based on whether or not there was an issue
    function success(text) {
        
        let span = document.getElementById("list");
        span.innerHTML = text;

    }

    //The rest of the code is the ajax function that sends information to the php file which will send the information to the database
    let button = document.getElementById("submit");
    button.addEventListener("click", function(){
        
        let username = document.getElementById("username").value;
        let password = document.getElementById("password").value;
        let url = "php/addAccount.php?username=" + username + "&password=" + password;
        
        //Performs the fetch
        fetch(url, { credentials: 'include' })
            .then(response => response.text()) 
            .then(success)


    });

    








});