<script>
    $(document).ready(function() {

        var input = document.querySelector('#PhoneNumber'),
            errorMsg = document.querySelector('#error-msg'),
            validMsg = document.querySelector('#valid-msg');

        $.validator.addMethod("usernameRegex", function(value, element) {
            return this.optional(element) || /^[a-zA-Z0-9]*$/i.test(value);
        }, "Username must contain only letters, numbers");

        $(".next-form").click(function() {
            var form = $("#msform");
            form.validate({
                errorPlacement: function(label, element) {
                    label.addClass('mt-2 text-danger');
                    if (element[0].id === 'profile-img') {
                        let parentElement = element.parent().parent()
                        label.insertAfter(parentElement);
                    } else {
                        label.insertAfter(element);
                    }
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).closest('.form-control').not('.form-control.PhoneNumber').addClass("is-invalid");
                    $(element).closest('.form-select').addClass("is-invalid");
                    $(element).closest('.form-control-img').addClass("is-invalid");
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).closest('.form-control').not('.form-control.PhoneNumber').removeClass("is-invalid");
                    $(element).closest('.form-control').not('.form-control.PhoneNumber').addClass("is-valid");
                    $(element).closest('.form-select').removeClass("is-invalid");
                    $(element).closest('.form-select').addClass("is-valid");
                    $(element).closest('.form-control-img').removeClass("is-invalid");
                    $(element).closest('.form-control-img').addClass("is-valid");
                },
                rules: {
                    CompanyLogo: {
                        required: true,
                    },
                    FirstName: {
                        required: true,
                    },
                    LastName: {
                        required: true,
                    },
                    Gender: {
                        required: true,
                    },
                    UserEmail: {
                        required: true,
                        email: true
                    },
                    UserPassword: {
                        required: true,
                        minlength: 5
                    },
                    ConfirmPassword: {
                        required: true,
                        minlength: 5,
                        equalTo: "#Password"
                    },
                    IDCountry: {
                        required: true,
                    },
                    IDCity: {
                        required: true,
                    }
                },
                messages: {
                    CompanyLogo: {
                        required: "<?php echo trans('validation.ImgRequired') ?>"
                    },
                    FirstName: {
                        required: "<?php echo trans('validation.NameRequired') ?>"
                    },
                    LastName: {
                        required: "<?php echo trans('validation.NameRequired') ?>"
                    },
                    Gender: {
                        required: "<?php echo trans('validation.Gender') ?>",

                    },
                    UserPassword: {
                        required: "<?php echo trans('validation.PasswordRequired') ?>",
                        minlength: "<?php echo trans('validation.PasswordLimit') ?>",
                    },
                    ConfirmPassword: {
                        required: "<?php echo trans('validation.ConfirmPasswordRequired') ?>",
                        equalTo: "<?php echo trans('validation.ConfirmPassword') ?>",
                        minlength: "<?php echo trans('validation.PasswordLimit') ?>",
                    },
                    UserEmail: {
                        required: "<?php echo trans('validation.EmailRequired') ?>",
                        email: "<?php echo trans('validation.EmailError') ?>",
                    },
                    IDCountry: {
                        required: "<?php echo trans('validation.SelectCountry') ?>",

                    },
                    IDCity: {
                        required: "<?php echo trans('validation.SelectCity') ?>",
                    },
                },
            });

            if (input.value == "" || errorMsg.innerHTML != "" || validMsg.innerHTML != "valid") {
                input.classList.add('inValidPhone');
                input.classList.remove('validPhone');
            } else if (validMsg.innerHTML == "valid" && errorMsg.innerHTML == "") {
                input.classList.remove('inValidPhone');
                input.classList.add('validPhone');
            }

            if (form.valid() === true) {
                if ($('#account_information').is(":visible")) {
                    current_fs = $('#account_information');
                    next_fs = $('#company_information');
                } else if ($('#company_information').is(":visible")) {
                    if (input.classList.contains('validPhone')) {
                        current_fs = $('#company_information');
                        next_fs = $('#personal_information');
                    }
                } else if ($('#personal_information').is(":visible")) {
                    current_fs = $('#personal_information');
                    next_fs = $('#payment_information');
                }
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                next_fs.show();
                $(next_fs).css("display", "flex")
                current_fs.hide();
            }
        });

        $('.previous').click(function() {
            if ($('#company_information').is(":visible")) {
                current_fs = $('#company_information');
                next_fs = $('#account_information');
                if (input.value == "" || errorMsg.innerHTML != "" || validMsg.innerHTML != "valid") {
                    input.classList.add('inValidPhone');
                    input.classList.remove('validPhone');
                } else if (validMsg.innerHTML == "valid" && errorMsg.innerHTML == "") {
                    input.classList.remove('inValidPhone');
                    input.classList.add('validPhone');
                }
            } else if ($('#personal_information').is(":visible")) {
                current_fs = $('#personal_information');
                next_fs = $('#company_information');
            } else if ($('#payment_information').is(":visible")) {
                current_fs = $('#payment_information');
                next_fs = $('#personal_information');
            }
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
            next_fs.show();
            $(next_fs).css("display", "flex")
            current_fs.hide();
        });
    });
</script>
