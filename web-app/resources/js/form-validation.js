$(function () {
    $("form[name='password-generate']").validate({
        highlight: function (element) {
            $(element)
                .addClass('border border-red-500');
        },
        unhighlight: function (element) {
            $(element)
                .removeClass('border border-red-500');
        },
        // Specify validation rules
        rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
            maxNumber: {
                required: true,
                digits: true,
                min: 10
            },
            maxPasswordLength: {
                required: true,
                digits: true,
                min: 4
            },
        },
        // Specify validation error messages
        messages: {
            maxNumber: {
                required: "This field is required",
                digits: "Please enter only digits",
                min: "Please enter a value greater than or equal to 10",
            },
            maxPasswordLength: {
                required: "This field is required",
                digits: "Please enter only digits",
                min: "Please enter a value greater than or equal to 4",
            },
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function (form) {
            form.submit();
        }
    });
});