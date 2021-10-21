$(function() {
    $('#loader').hide();
    // console.log('dom');
    jQuery.validator.addMethod("noSpace", function(value, element) {
        return value == '' || value.trim().length != 0;
    }, "No space please and don't leave it empty");
    $('#contact_us').validate({
        rules: {
            name: {
                required: true,
                noSpace: true,
            },
            email: {
                required: true,
                noSpace: true,
                email: true,
            },
            contact: {
                required: true,
                noSpace: true,
                digits: true,
                minlength: 10,
                maxlength: 13,
            },
            services: {
                required: true,
                noSpace: true,
            },
            message: {
                required: true,
                noSpace: true,
            },
        },
        messages: {
            name: {
                required: 'Required',
                noSpace: "No space please and don't leave it empty",
            },
            email: {
                required: 'Required',
                noSpace: "No space please and don't leave it empty",
                email: 'Please enter valid email address',
            },
            contact: {
                required: 'Required',
                noSpace: "No space please and don't leave it empty",
                digits: 'Please enter valid contact number',
                minlength: 'Please enter valid contact number',
                maxlength: 'Please enter valid contact number',
            },
            services: {
                required: 'Required',
                noSpace: "No space please and don't leave it empty",
            },
            message: {
                required: 'Required',
                noSpace: "No space please and don't leave it empty",
            },
        }
    });
    $('#contact_us_btn').click(function() {
        is_valid = $('#contact_us').valid();
        if (is_valid) {
            $('#contact_us_btn').prop('disabled', true);
            // console.log('success');
            name = $('#name').val().trim();
            email = $('#email').val().trim();
            contact = $('#contact').val().trim();
            services = $('#services').val().trim();
            message = $('#message').val().trim();
            data = {
                name: name,
                email: email,
                contact: contact,
                services: services,
                message: message,
                submit: 'submit',
            };
            // console.log(data);
            $.ajax({
                method: "POST",
                dataType: 'JSON',
                url: 'inquiry.php',
                data: data,
                beforeSend: function(response) {
                    $('#loader').show();
                },
                success: function(response) {
                    if (response.status = 'success') {
                        Swal.fire({
                            title: 'Success',
                            text: 'We will get back to you as soon as possible',
                            icon: 'success',
                            timer: 3000,
                        });
                        $('#loader').hide();
                        $('#contact_us').trigger('reset').change();
                        funtiontype = typeof closeContactUsModal;
                        if (funtiontype) {
                            closeContactUsModal();
                        }
                    } else if (response.status = 'error') {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Sorry for the inconvenience! Please try again',
                            icon: 'error',
                            timer: 3000,
                        });
                        $('#loader').hide();
                        $('#contact_us_btn').prop('disabled', false);

                    } else {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Sorry for the inconvenience! Please try again',
                            icon: 'error',
                            timer: 3000,
                        });
                        $('#loader').hide();
                        $('#contact_us_btn').prop('disabled', false);

                    }
                },
                error: function(errorRespose) {
                    Swal.fire({
                        title: 'Error!',
                        text: 'Sorry for the inconvenience! Please try again',
                        icon: 'error',
                        timer: 3000,
                    });
                    $('#loader').hide();
                    $('#contact_us_btn').prop('disabled', false);
                }
            });
        } else {
            Swal.fire({
                title: 'Error!',
                text: 'Please fill all required fields',
                icon: 'error',
                timer: 1500,
            });
        }
    });
});