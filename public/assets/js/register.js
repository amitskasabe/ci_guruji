$(document).ready(() => {
    // Wrap your script inside the document ready function
    $("#signup-form").submit((e) => {
        let email = $("#email").val().trim();
        let fname = $("#firstname").val().trim();
        let lname = $("#lastname").val().trim();
        let cpassword = $("#c_password").val().trim();
        let password = $("#password").val().trim();
        if (email === "" || password === "" || cpassword === "" || fname === "" || lname === "") {
            $("#error").html("All Fields must be filled");
            $("#error").css("color", "red");
            e.preventDefault();
        } else if (password !== cpassword){
            $("#error").html("Password does not match");
            $("#error").css("color", "red");
            e.preventDefault();
        }
    });
});
