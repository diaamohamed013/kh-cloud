<script>
    $(document).ready(function() {
        $(".next").click(function() {
            var form = $("#msform");
            form.validate({
                errorPlacement: function(label, element) {
                    label.addClass('mt-2 text-danger');
                    label.insertAfter(element);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).closest('.form-control').not('.form-control.PhoneNumber').addClass("is-invalid");
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).closest('.form-control').not('.form-control.PhoneNumber').removeClass("is-invalid");
                    $(element).closest('.form-control').not('.form-control.PhoneNumber').addClass("is-valid");
                },
                rules: {
                    UserEmail: {
                        required: true,
                        email: true
                    },
                    UserPassword: {
                        required: true,
                        minlength: 5
                    },
                },
                messages: {
                    UserPassword: {
                        required: "<?php echo trans('validation.PasswordRequired') ?>",
                        minlength: "<?php echo trans('validation.PasswordLimit') ?>",
                    },
                    UserEmail: {
                        required: "<?php echo trans('validation.EmailRequired') ?>",
                        email: "<?php echo trans('validation.EmailError') ?>",
                    },
                },
            });
        });
    });
</script>
