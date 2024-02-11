$(document).ready(() => {
    // Wrap your script inside the document ready function
    $("#signin-form").submit((e) => {
        let email = $("#email").val().trim();
        let password = $("#password").val().trim();

        if (email === "" || password === "") {
            $("#error").html("Email and password must not be empty");
            $("#error").css("color", "red");
            e.preventDefault();
        } else {
            // If the conditions are not met, the form submission will proceed
            // Add any additional logic or actions here if needed
        }
    });
});
