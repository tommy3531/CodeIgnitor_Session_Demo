// jQuery(function ($) {
//     $(document).ready(function () {
//         jQuery.validator.setDefaults({
//             highlight: function (element, errorClass, validClass) {
//                     $(element).closest('.form-group').removeClass('has-success has-feedback').addClass('has-error has-feedback');
//                     $(element).closest('.form-group').find('i.fa').remove();
//                     $(element).closest('.form-group').append('<i class="fa fa-exclamation fa-lg form-control-feedback"></i>');
            
//             },
//             unhighlight: function (element, errorClass, validClass) {
//                 if (element.type === "radio") {
//                     this.findByName(element.name).removeClass(errorClass).addClass(validClass);
//                 } else {
//                     $(element).closest('.form-group').removeClass('has-error has-feedback').addClass('has-success has-feedback');
//                     $(element).closest('.form-group').find('i.fa').remove();
//                     $(element).closest('.form-group').append('<i class="fa fa-check fa-lg form-control-feedback"></i>');
//                 }
//             }
//         });

//         $("form").validate({
//             rules: {
//                 'firstname': {
//                     required: true,
//                     minlength: 1,
//                     maxlength: 30
//                 },
//                 'lastname': {
//                     required: true,
//                     minlength: 1,
//                     maxlength: 50
//                 },
//                 'username': {
//                     required: true,
//                     minlength: 10,
//                     maxlength: 20
//                 },
//                 password: "required",
//                 'confirmpassword': {
//                     required: true,
//                     maxlength: 20,
//                     passwordMatch: true
//                 },
//                 'email': {
//                     required: true
//                 },
//                 'confirmemail': {
//                 	required: true,
//                     emailMatch: true
//                 },
//             },
//             messages: {
//             	'confirmpassword' : {
//             		maxlength: "Your password must be less than 20",
//             		passwordMatch: "Please enter the same password as above"
//             	},
//             	'confirmemail' : {
//             		emailMatch: "Please enter same email as above"
//             	}
//             }
//         });
//     });
// })