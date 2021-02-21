/*
 * I, Michael Mena, 000817498 certify that this material is my original work.  No other person's work has been used without due acknowledgement.
 * 
 * Date: 12/11/2020
 * 
 * This javascript file handles the login function of the website
 */

window.addEventListener("load", function() {

// This success function handles the response of the ajax and then fills the "loginStatus"
//with either a positive or negative response
    function success(text) {
        
        let span = document.getElementById("loginStatus");
        span.innerHTML = text;

    }



    //AJAX thatHandles user logins
    let logInButton = document.getElementById("loginButton");
    logInButton.addEventListener("click", function(){
        
        let username = document.getElementById("logInUserName").value;
        let password = document.getElementById("logInPassword").value;
        let url = "php/login.php?username=" + username + "&password=" + password;

        console.log(url); //debug 

        //Performs the fetch

        fetch(url, { credentials: 'include' })
            .then(response => response.text()) 
            .then(success)
            
        

    });

});