function validateForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var submit = document.getElementById("submit"); // Replace "yourFormId" with the actual ID of your form


    if (username == "") {
        console.log("Please enter a username");
        // username.classList.add("error")

    } else if (password == "") {
        console.log("Please enter a password");


    }
    else {
        console.log("form submitted");


    }
    // username == "" ? console.log("Please enter a username") : console.log("Please enter a password");
    // password == "" ? console.log("Please enter a pasword") : console.log("Please enter a password");

}

// Call the function to set up form validation
validateForm();
