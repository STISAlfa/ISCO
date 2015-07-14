var Login = function () {

	var handleLogin = function() {
		$('.login-form').validate({
	            errorElement: 'label', //default input error message container
	            errorClass: 'help-inline', // default input error message class
	            focusInvalid: false, // do not focus the last invalid input
	            rules: {
	                username: {
	                    required: true
	                },
	                password: {
	                    required: true
	                },
	                remember: {
	                    required: false
	                }
	            },

	            messages: {
	                username: {
	                    required: "Username is required."
	                },
	                password: {
	                    required: "Password is required."
	                }
	            },

	            invalidHandler: function (event, validator) { //display error alert on form submit   
	                $('.alert-error', $('.login-form')).show();
	            },

	            highlight: function (element) { // hightlight error inputs
	                $(element)
	                    .closest('.control-group').addClass('error'); // set error class to the control group
	            },

	            success: function (label) {
	                label.closest('.control-group').removeClass('error');
	                label.remove();
	            },

	            errorPlacement: function (error, element) {
	                error.addClass('help-small no-left-padding').insertAfter(element.closest('.input-icon'));
	            },

	            submitHandler: function (form) {
	                form.submit();
	            }
	        });
			
	        $('.login-form input').keypress(function (e) {
	            if (e.which == 13) {
	                if ($('.login-form').validate().form()) {
	                    $('.login-form').submit();
	                }
	                return false;
	            }
	        });
			
	}


	var handleEssay = function() {
		$('#essay-form').validate({
	            errorElement: 'label', //default input error message container
	            errorClass: 'help-inline', // default input error message class
	            focusInvalid: false, // do not focus the last invalid input
	            rules: {
	                nama: {
	                    required: true
	                },
	                universitas: {
	                    required: true
	                },
	                jurusan: {
	                    required: true
	                },
	                nim: {
	                    required: true
	                },
	                angkatan: {
	                    required: true
	                },
	                email: {
	                    required: true,
	                    email: true
	                },
	                handphone: {
	                    required: true
	                },
	                ktm: {
	                    required: true,
	                    extension: "jpg|jpeg"
	                },
	                judulessay: {
	                	required: true
	                },
	                essay: {
	                    required: true,
	                    extension: "pdf"
	                },
	                captcha: {
	                	required:true
	                }
	            },

	            messages: {
	                username: {
	                    required: "Username is required."
	                },
	                password: {
	                    required: "Password is required."
	                }
	            }
	        });

	            
			/*
	        $('.essay-form').keypress(function (e) {
	            if (e.which == 13) {
	                if ($('.essay-form').validate().form()) {
	                    $('.essay-form').submit();
	                }
	                return false;
	            }
	        });
			*/
			$(document).ready(function() {
				$(".essay-form").validate();
			});
	}


	var handlePaper = function() {
		$('#paper-form').validate({
	            errorElement: 'label', //default input error message container
	            errorClass: 'error', // default input error message class
	            focusInvalid: false, // do not focus the last invalid input
	            rules: {
	                kp1: {
	                    required: true,
	                    extension: "jpg|jpeg"
	                },
	                kp2: {
	                    required: true,
	                    extension: "jpg|jpeg"
	                },
	                kp3: {
	                    required: true,
	                    extension: "jpg|jpeg"
	                },
	                judulpaper: {
	                	required: true
	                },
	                paper: {
	                    required: true,
	                    extension: "pdf"
	                },
	                captcha: {
	                	required:true
	                }
	            },

	            messages: {
	                username: {
	                    required: "Username is required."
	                },
	                password: {
	                    required: "Password is required."
	                }
	            }
	        });

	            
			
	        $('.paper-form').keypress(function (e) {
	            if (e.which == 13) {
	                if ($('.paper-form').validate().form()) {
	                    $('.paper-form').submit();
	                }
	                return false;
	            }
	        });
			/*
			$(document).ready(function() {
				$(".essay-form").validate();
			});
			*/
	}

	var handleForgetPassword = function () {
		$('.forget-form').validate({
	            errorElement: 'label', //default input error message container
	            errorClass: 'help-inline', // default input error message class
	            focusInvalid: false, // do not focus the last invalid input
	            ignore: "",
	            rules: {
	                email: {
	                    required: true,
	                    email: true
	                }
	            },

	            messages: {
	                email: {
	                    required: "Email is required."
	                }
	            },

	            invalidHandler: function (event, validator) { //display error alert on form submit   

	            },

	            highlight: function (element) { // hightlight error inputs
	                $(element)
	                    .closest('.control-group').addClass('error'); // set error class to the control group
	            },

	            success: function (label) {
	                label.closest('.control-group').removeClass('error');
	                label.remove();
	            },

	            errorPlacement: function (error, element) {
	                error.addClass('help-small no-left-padding').insertAfter(element.closest('.input-icon'));
	            },

	            submitHandler: function (form) {
	                form.submit();
	            }
	        });

	        $('.forget-form input').keypress(function (e) {
	            if (e.which == 13) {
	                if ($('.forget-form').validate().form()) {
	                    $('.forget-form').submit();
	                }
	                return false;
	            }
	        });

	        jQuery('#forget-password').click(function () {
	            jQuery('.login-form').hide();
	            jQuery('.forget-form').show();
	        });

	        jQuery('#back-btn').click(function () {
	            jQuery('.login-form').show();
	            jQuery('.forget-form').hide();
	        });

	}

	var handleRegister = function () {

		function format(state) {
            if (!state.id) return state.text; // optgroup
            return "<img class='flag' src='assets/img/flags/" + state.id.toLowerCase() + ".png'/>&nbsp;&nbsp;" + state.text;
        }


		$("#select2_sample4").select2({
		  	placeholder: '<i class="icon-map-marker"></i>&nbsp;Select a Country',
            allowClear: true,
            formatResult: format,
            formatSelection: format,
            escapeMarkup: function (m) {
                return m;
            }
        });


			$('#select2_sample4').change(function () {
                $('.register-form').validate().element($(this)); //revalidate the chosen dropdown value and show error or success message for the input
            });



         $('.register-form').validate({
	            errorElement: 'label', //default input error message container
	            errorClass: 'help-inline', // default input error message class
	            focusInvalid: false, // do not focus the last invalid input
	            ignore: "",
	            rules: {
	                
	                ketuatim: {
	                    required: true
	                },
	                email: {
	                    required: true,
	                    email: true,
	                    remote: "check-email.php"
	                },
	                handphone: {
	                    required: true,
	                    minlength: 11
	                },
	                asal_sekolah: {
	                    required: true
	                },
	                alamat_sekolah: {
	                    required: true
	                },

	                username: {
	                    required: true,
	                	remote: "check-username.php"
	                },
	                password: {
	                    required: true
	                },
	                password_reminder: {
	                    equalTo: "#register_password"
	                },

	                tnc: {
	                    required: true
	                },
	                captcha: {
	                	required: true
	                }
	            },

	            messages: { // custom messages for radio buttons and checkboxes
	                tnc: {
	                    required: "Please accept TNC first."
	                },
	                username:{
			                remote: "This username is already taken! Try another."
			        },
			        email:{
			                remote: "This email is already taken! Try another."
			        }
	            },

	            invalidHandler: function (event, validator) { //display error alert on form submit   

	            },

	            highlight: function (element) { // hightlight error inputs
	                $(element)
	                    .closest('.control-group').addClass('error'); // set error class to the control group
	            },

	            success: function (label) {
	                label.closest('.control-group').removeClass('error');
	                label.remove();
	            },

	            errorPlacement: function (error, element) {
	                if (element.attr("name") == "tnc") { // insert checkbox errors after the container                  
	                    error.addClass('help-small no-left-padding').insertAfter($('#register_tnc_error'));
	                } else if (element.closest('.input-icon').size() === 1) {
	                    error.addClass('help-small no-left-padding').insertAfter(element.closest('.input-icon'));
	                } else {
	                	error.addClass('help-small no-left-padding').insertAfter(element);
	                }
	            },

	            submitHandler: function (form) {
	                form.submit();
	            }
	        });

			$('.register-form input').keypress(function (e) {
	            if (e.which == 13) {
	                if ($('.register-form').validate().form()) {
	                    $('.register-form').submit();
	                }
	                return false;
	            }
	        });

	        jQuery('#register-btn').click(function () {
	            jQuery('.login-form').hide();
	            jQuery('.register-form').show();
	        });

	        jQuery('#register-back-btn').click(function () {
	            jQuery('.login-form').show();
	            jQuery('.register-form').hide();
	        });
	}
    
    return {
        //main function to initiate the module
        init: function () {
        	
            handleLogin();
            handleForgetPassword();
            handleRegister();
            handleEssay();        
			handlePaper();   
            $.backstretch([
		        "assets/img/bg/5.jpg",
		        ], {
		          fade: 1000,
		          duration: 500
		    });
	       
        }

    };

}();