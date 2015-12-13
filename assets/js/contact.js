$(document).ready(function() {
	
	$('#contact_form').submit(function(evt){
	//evt.preventDefault();
	
		$.post($('#contact_form').attr('action'), $('#contact_form').serialize(), function( data ) {

			if(data.result === 0)
			{
				
				$('#error').html(data.email_form_validation_errors);

			} else {

				$('#error').html(data.send_email_error);
			}
					
			if(data.result == 1)
			{
				$('#success').html(data.email_form_validation_success);
			}
			else {

				$('#success').html(data.send_email_success);
			}
					
		}, 'json');
   });
});


// AJAX post
// $(document).ready(function() {
// 	$("contact_form").click(function(evt){
// 		evt.preventDefault();

// 		var username    = $("#name").val(); 
// 		var useremail   = $("#email").val(); 
// 		var usersubject = $("#subject").val(); 
// 		var usermessage = $("#message").val();
// 		var email_success = "Message has been sent";

// 		$.ajax({
// 			type: "POST",
// 			url: "<?php echo base_url(); ?>" + "contact/process",
// 			dataType: 'json',
// 			data: {name: username, email: useremail, subject: usersubject, message: usermessage, success: email_success },
// 			success: function(res){
// 				if(res){
// 					$('#success').show();
// 					$('#success_message').html(res.email_success);
// 				}
// 			},
// 			error: function(res){
// 				if(res){
// 					$('#error').show();
// 					$('#error').html(res.result_msg)
// 				}
// 			}
// 		}); 
// 	});
// });

// $('#contact_form').click('click',function(){

//     $("#error_message").fadeIn(500).html("<img src='images/loaders/loader2.gif' alt='loading' />"); // debug message area

//     //var login_name  = $("#login").val();
//     //var pass        = $("#pass").val();

//     var data        = {
//         name        : $("#name").val(),
//         email       : $("#email").val(),
//         ajax        : 1
//     }

//     $.ajax({
//         url: "contact/process", // my home controller function "login_validation:
//         type: 'POST',
//         dataType: 'json',
//         data: data,
//         success: function (data) {

//             if(data.status){
//               alert(response.data.status);
//             } 
//         },
//         error: function (e) {
//             console.log(e.status);
//         }
//     });

//  });



// function makeAjaxCall(){
//   $.ajax({
//     type: 'POST',
//     url: 'website/contact/process',
//     cache: false,
//     data: $('#contact_form').serialize(),
//     success: function(json){

//       alert(response.json.status);
//     }
//   });
// }

// $(document).ready(function() {
//   $('#contact_form')
//     .formValidation({
//         fields: {
//             name: {
//                 validators: {
//                     remote: {
//                         type: 'POST',
//                         url: "<?php echo site_url('contact/checkusername');?>",
//                         message: 'The username is not available'
//                     }
//                 }
//             }
//         }
//     })
//     .on('status.field.fv', function(e, data) {
//         if (data.field == 'name') {        // Change “username” to your field name
//             (data.status == 'VALIDATING')
//                 ? $('#progressBar').show()      // Show the progress bar while we are validating
//                 : $('#progressBar').hide();     // Otherwise, hide it
//         }
//     });
//   });


// $(document).ready(function() {
//     $('#contact_form').formValidation({
//         framework: 'bootstrap',
//         icon: {
//             valid: 'glyphicon glyphicon-ok',
//             invalid: 'glyphicon glyphicon-remove',
//             validating: 'glyphicon glyphicon-refresh'
//         },
//         fields: {
//             name: {
//                 validators: {
//                     notEmpty: {
//                         message: 'The name is required'
//                     },
//                     regexp: {
//                         regexp: /^[a-zA-Z0-9_]+$/,
//                         message: 'The username can only consist of alphabetical, number and underscore'
//                     }
//                 }
//             },
//             subject: {
//                 validators: {
//                     notEmpty: {
//                         message: 'The subject is required'
//                     }
//                 }
//             }
//         }
//     })
//     $('contact_form').submit(function(event) {
//     // .on('success.form.fv', function(e){
//     //   e.preventDefault();

//       var formdata = {
//         'name' : $('#name').val(),
//         'email' : $('#subject').val(),
//         'subject' : $('#subject').val();
//         'message' : $('#message').val();
//       }
//       $.ajax({
//         url: "/website/contact/process",
//         type: 'POST',
//         data: formdata,
//         dataType : 'json',
//         success: function(data){
        	
//         	$('#success').html(data.success_msg);	
        
//         },

//         error: function(data){

//         	$('#error').html(data.error_msg);
//         }

//       });
//     });
// });



// $(document).ready(function() {
//   $('#contact_form').validate({
//     rules: {
//       name: {
//       minlength: 2,
//       required: true
//     },
//     email: {
//       required: true,
//       email: true
//     },
//     subject: {
//       minlength: 2,
//       required: true
//     },
//     message: {
//       minlength: 2,
//       required: true
//     }
//  },
//   highlight: function(element) {
//    $(element).closest('.control-group').removeClass('success').addClass('error');
//   },
//   success: function(element) {
//    element.text('OK!').addClass('valid').closest('.control-group').removeClass('error').addClass('success');
//   }, 
  
// 	submitHandler: function( data ) {
       
//         $.ajax({
//             url : '/website/contact/process',
//             data : $('#contact-form').serialize(),
//             type: "POST",
//             dataType: 'json',
//             success : function(data){
//             	$("#succes").html(data.success_msg);
//             },
//             error : function(data){
//             	$('#error').html(data.error_msg);
//             }
//         })

//  	},  
// }); // end document.ready

// $(document).ready(function() {
//     $('#contact_form')
//         .formValidation({
//             framework: 'bootstrap',
//             icon: {
//                 valid: 'glyphicon glyphicon-ok',
//                 invalid: 'glyphicon glyphicon-remove',
//                 validating: 'glyphicon glyphicon-refresh'
//             },
//             fields: {
//                 userName: {
//                     validators: {
//                         notEmpty: {
//                             message: 'The user name is required'
//                         },
//                         remote: {
//                             url: 'website/contact/process'
//                         }
//                     }
//                 }
//             }
//         })
//         // This event will be triggered when the field passes given validator
//         .on('success.validator.fv', function(e, data) {
//             // data.field     --> The field name
//             // data.element   --> The field element
//             // data.result    --> The result returned by the validator
//             // data.validator --> The validator name

//             if (data.field === 'name'
//                 && data.validator === 'remote'
//                 && (data.result.available === false || data.result.available === 'false'))
//             {
//                 // The userName field passes the remote validator
//                 data.element                    // Get the field element
//                     .closest('.form-group')     // Get the field parent

//                     // Add has-warning class
//                     .removeClass('has-success')
//                     .addClass('has-warning')

//                     // Show message
//                     .find('small[data-fv-validator="remote"][data-fv-for="name"]')
//                         .show();
//             }
//         })
//         // This event will be triggered when the field doesn't pass given validator
//         .on('err.validator.fv', function(e, data) {
//             // We need to remove has-warning class
//             // when the field doesn't pass any validator
//             if (data.field === 'name') {
//                 data.element
//                     .closest('.form-group')
//                     .removeClass('has-warning');
//             }
//         });
// });
