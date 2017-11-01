// Wait for the DOM to be ready
$(function() {
    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $("form[name='register-form']").validate({
        // Specify validation rules
        rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
            reg_first_name: "required",
            reg_last_name: "required",
            reg_email: {
                required: true,
                // Specify that email should be validated
                // by the built-in "email" rule
                email: true
            },
            reg_password: {
                required: true,
                minlength: 5
            }
        },
        // Specify validation error messages
        messages: {
            reg_first_name: "Please enter your firstname",
            reg_last_name: "Please enter your lastname",
            reg_password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            reg_email: "Please enter a valid email address"
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
            form.submit();
        }
    });
});