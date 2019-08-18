const site_url = gbl_phpshark_baseUrl;
const $api = "http://localhost:8888/new/crs/membership/api?source=";
const $forgot_password_link = 'http://localhost:8888/new/crs/password/forgot';
/**
 * Form Validation
 */

(function( $ ) {
	'use strict';

	//LOGIN FORM
	const login_form = document.getElementById("login-form");
	if(login_form){
		document.addEventListener('DOMContentLoaded', function(e) {
			FormValidation.formValidation(
				document.getElementById('login-form'),
				{
					fields: {
						username: {
							validators: {
								notEmpty: {
									message: 'The username/email is required'
								},
								remote: {
									url: $api + 'check-username',
									method: 'POST',
									message: "Username/Email is invalid."
								}
							},
						},
						password: {
							validators: {
								notEmpty: {
									message: 'Password is required field'
								},
							},
						},

					},
					plugins: {
						trigger: new FormValidation.plugins.Trigger(),
						submitButton: new FormValidation.plugins.SubmitButton(),
						// Submit the form when all fields are valid
						defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
						// Support the form made in Bootstrap 4
						bootstrap: new FormValidation.plugins.Bootstrap(),
						// Show the feedback icons taken from FontAwesome
						icon: new FormValidation.plugins.Icon({
							valid: 'fa fa-check',
							invalid: 'fa fa-times',
							validating: 'fa fa-refresh',
						}),
						// recaptcha: new FormValidation.plugins.Recaptcha({
						// 	element: 'g-recaptcha',
						// 	message: 'The captcha is not valid',
						// 	siteKey: '6LczXa0UAAAAAHSDbupAF9rcEQHMRvqKcFjTA-81',
						// 	theme: 'light',
						// }),
					},
				}
			);
		});
	}

	//REGISTER FORM
	const register_form = document.getElementById("register-form");
	if(register_form){
		document.addEventListener('DOMContentLoaded', function(e) {
			FormValidation.formValidation(
				document.getElementById('register-form'),
				{
					fields: {
						email: {
							validators: {
								notEmpty: {
									message: 'The email is required'
								},
								emailAddress:{
									message: 'The value is not a valid email address'
								},
								remote: {
									url: $api + 'check-email-id',
									method: 'POST',
									message: "This email id is already registered with us!"
								}
							},
						},
						firstname: {
							validators: {
								notEmpty: {
									message: 'First Name is required field'
								},
							},
						},
						lastname: {
							validators: {
								notEmpty: {
									message: 'Last Name is required field'
								},
							},
						},
					},
					plugins: {
						trigger: new FormValidation.plugins.Trigger(),
						submitButton: new FormValidation.plugins.SubmitButton(),
						// Submit the form when all fields are valid
						defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
						// Support the form made in Bootstrap 4
						bootstrap: new FormValidation.plugins.Bootstrap(),
						// Show the feedback icons taken from FontAwesome
						icon: new FormValidation.plugins.Icon({
							valid: 'fa fa-check',
							invalid: 'fa fa-times',
							validating: 'fa fa-refresh',
						}),
						// recaptcha: new FormValidation.plugins.Recaptcha({
						// 	element: 'g-recaptcha',
						// 	message: 'The captcha is not valid',
						// 	siteKey: '6LczXa0UAAAAAHSDbupAF9rcEQHMRvqKcFjTA-81',
						// 	theme: 'light',
						// }),
					},
				}
			);
		});
	}

	//REGISTER FORM COMPLETE
	const confirmation_form = document.getElementById("confirmation-form");
	if(confirmation_form){
		document.addEventListener('DOMContentLoaded', function(e) {
			FormValidation.formValidation(
				document.getElementById('confirmation-form'),
				{
					fields: {
						username: {
							validators: {
								notEmpty: {
									message: 'The username/email is required'
								},
								remote: {
									url: $api + 'check-username',
									method: 'POST',
									message: "Username/Email is invalid."
								}
							},
						},
						password: {
							validators: {
								notEmpty: {
									message: 'First Name is required field'
								},
							},
						},
						'repeat-password': {
							validators: {
								notEmpty: {
									message: 'Please re-enter your password'
								},
								identical: {
									compare: function() {
										return form.querySelector('[name="password"]').value;
									},
									message: 'The password and its confirm are not the same'
								}
							},
						},
					},
					plugins: {
						trigger: new FormValidation.plugins.Trigger(),
						submitButton: new FormValidation.plugins.SubmitButton(),
						// Submit the form when all fields are valid
						defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
						// Support the form made in Bootstrap 4
						bootstrap: new FormValidation.plugins.Bootstrap(),
						// Show the feedback icons taken from FontAwesome
						icon: new FormValidation.plugins.Icon({
							valid: 'fa fa-check',
							invalid: 'fa fa-times',
							validating: 'fa fa-refresh',
						}),
						// recaptcha: new FormValidation.plugins.Recaptcha({
						// 	element: 'g-recaptcha',
						// 	message: 'The captcha is not valid',
						// 	siteKey: '6LczXa0UAAAAAHSDbupAF9rcEQHMRvqKcFjTA-81',
						// 	theme: 'light',
						// }),
					},
				}
			);

			// Revalidate the confirmation password when changing the password
			form.querySelector('[name="password"]').addEventListener('input', function() {
				fv.revalidateField('repeat-password');
			});
		});
	}

	//RESET FORM
	const password_reset_form = document.getElementById("password-reset-form");
	if(password_reset_form){
		document.addEventListener('DOMContentLoaded', function(e) {
			FormValidation.formValidation(
				document.getElementById('password-reset-form'),
				{
					fields: {
						'username-email': {
							validators: {
								notEmpty: {
									message: 'The username/email is required'
								},
								remote: {
									url: $api + 'check-username',
									method: 'POST',
									message: "Username/Email is invalid."
								}
							},
						},
					},
					plugins: {
						trigger: new FormValidation.plugins.Trigger(),
						submitButton: new FormValidation.plugins.SubmitButton(),
						// Submit the form when all fields are valid
						defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
						// Support the form made in Bootstrap 4
						bootstrap: new FormValidation.plugins.Bootstrap(),
						// Show the feedback icons taken from FontAwesome
						icon: new FormValidation.plugins.Icon({
							valid: 'fa fa-check',
							invalid: 'fa fa-times',
							validating: 'fa fa-refresh',
						}),
						// recaptcha: new FormValidation.plugins.Recaptcha({
						// 	element: 'g-recaptcha',
						// 	message: 'The captcha is not valid',
						// 	siteKey: '6LczXa0UAAAAAHSDbupAF9rcEQHMRvqKcFjTA-81',
						// 	theme: 'light',
						// }),
					},
				}
			);
		});
	}


	//CONFIRMATION RESEND FORM
	const confirmation_resend_form = document.getElementById("confirmation-resend-form");
	if(confirmation_resend_form){
		document.addEventListener('DOMContentLoaded', function(e) {
			FormValidation.formValidation(
				document.getElementById('confirmation-resend-form'),
				{
					fields: {
						email: {
							validators: {
								notEmpty: {
									message: 'The username/email is required'
								},
								remote: {
									url: $api + 'resend-confirmation-link',
									method: 'POST',
									message: "Your ID does not qualify for resending a confirmation." +
												"Please try <a href=" + $forgot_password_link + ">" +
												"resetting</a> you password. "
								}
							},
						},
					},
					plugins: {
						trigger: new FormValidation.plugins.Trigger(),
						submitButton: new FormValidation.plugins.SubmitButton(),
						// Submit the form when all fields are valid
						defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
						// Support the form made in Bootstrap 4
						bootstrap: new FormValidation.plugins.Bootstrap(),
						// Show the feedback icons taken from FontAwesome
						icon: new FormValidation.plugins.Icon({
							valid: 'fa fa-check',
							invalid: 'fa fa-times',
							validating: 'fa fa-refresh',
						}),
						// recaptcha: new FormValidation.plugins.Recaptcha({
						// 	element: 'g-recaptcha',
						// 	message: 'The captcha is not valid',
						// 	siteKey: '6LczXa0UAAAAAHSDbupAF9rcEQHMRvqKcFjTA-81',
						// 	theme: 'light',
						// }),
					},
				}
			);
		});
	}

	var subscribe_form = document.getElementById("subscribe-form");
	if(subscribe_form){
		document.addEventListener('DOMContentLoaded', function(e) {
			FormValidation.formValidation(
				document.getElementById('subscribe-form'),
				{
					fields: {
						'subscription-email': {
							validators: {
								notEmpty: {
									message: 'The email is required'
								},
								emailAddress: {
									message: 'The value is not a valid email address'
								},
								remote: {
									url: $api + 'subscribe',
									method: 'POST',
									message: "Your email id is already registered!"
								}
							},
						},
					},
					plugins: {
						trigger: new FormValidation.plugins.Trigger(),
						submitButton: new FormValidation.plugins.SubmitButton(),
						// Submit the form when all fields are valid
						defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
						// Support the form made in Bootstrap 4
						bootstrap: new FormValidation.plugins.Bootstrap(),
						// Show the feedback icons taken from FontAwesome
						icon: new FormValidation.plugins.Icon({
							valid: 'fa fa-check',
							invalid: 'fa fa-times',
							validating: 'fa fa-refresh',
						}),
					},
				}
			);
		});
	}

	//Member Password Reset Form
	var member_reset_form = document.getElementById("member-reset-form");
	if(member_reset_form){
		document.addEventListener('DOMContentLoaded', function(e) {
			FormValidation.formValidation(
				document.getElementById('member-reset-form'),
				{
					fields: {
						'old-password': {
							validators: {
								notEmpty: {
									message: 'The old password is required'
								}
							}
						},
						password: {
							validators: {
								notEmpty: {
									message: 'The password is required'
								}
							}
						},
						'repeat-password': {
							validators: {
								notEmpty: {
									message: 'Please re-enter your password'
								},
								identical: {
									compare: function() {
										return form.querySelector('[name="password"]').value;
									},
									message: 'The password and its confirm are not the same'
								}
							},
						},
					},
					plugins: {
						trigger: new FormValidation.plugins.Trigger(),
						submitButton: new FormValidation.plugins.SubmitButton(),
						// Submit the form when all fields are valid
						defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
						// Support the form made in Bootstrap 4
						bootstrap: new FormValidation.plugins.Bootstrap(),
						// Show the feedback icons taken from FontAwesome
						icon: new FormValidation.plugins.Icon({
							valid: 'fa fa-check',
							invalid: 'fa fa-times',
							validating: 'fa fa-refresh',
						}),
					},
				}
			);
		});
	}

	//Member Profile Form
	var profile_form = document.getElementById("profile-form");
	if(profile_form){
		document.addEventListener('DOMContentLoaded', function(e) {
			FormValidation.formValidation(
				document.getElementById('profile-form'),
				{
					fields: {
						'first-name': {
							validators: {
								notEmpty: {
									message: 'The old password is required'
								}
							}
						},
						'last-name': {
							validators: {
								notEmpty: {
									message: 'The password is required'
								}
							}
						}
					},
					plugins: {
						trigger: new FormValidation.plugins.Trigger(),
						submitButton: new FormValidation.plugins.SubmitButton(),
						// Submit the form when all fields are valid
						defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
						// Support the form made in Bootstrap 4
						bootstrap: new FormValidation.plugins.Bootstrap(),
						// Show the feedback icons taken from FontAwesome
						icon: new FormValidation.plugins.Icon({
							valid: 'fa fa-check',
							invalid: 'fa fa-times',
							validating: 'fa fa-refresh',
						}),
					},
				}
			);
		});
	}
})( jQuery );


// var subscribe_form = document.getElementById("subscribe-form");
// if(subscribe_form){
// 	document.addEventListener('DOMContentLoaded', function(e) {
// 		FormValidation.formValidation(
// 			document.getElementById('subscribe-form'),
// 			{
// 				fields: {
// 					'subscription-email': {
// 						validators: {
// 							notEmpty: {
// 								message: 'The email is required'
// 							},
// 							emailAddress: {
// 								message: 'The value is not a valid email address'
// 							},
// 							// remote: {
// 							// 	url: $remote_base,
// 							// 	method: 'POST',
// 							// 	// data:{
// 							// 	// 	type : 'confirmed'
// 							// 	// },
// 							// 	// message: "It seems you are messaging us for the first time." +
// 							// 	// 		 "The site will send you a confirmation link." +
// 							// 	// 		 "you are requested to confirm you email." +
// 							// 	// 		 "The communication is continuous, then after!"
// 							// }
// 						},
// 					},
// 					firstname: {
// 						validators: {
// 							notEmpty: {
// 								message: 'Please provide a short description to your query'
// 							}
// 						},
// 					},
// 					lastname: {
// 						validators: {
// 							notEmpty: {
// 								message: 'Please provide a short description to your query'
// 							}
// 						},
// 					},
// 					post: {
// 						validators: {
// 							notEmpty: {
// 								message: 'Please provide a short description to your query'
// 							}
// 						},
// 					},
// 					description: {
// 						validators: {
// 							notEmpty: {
// 								message: 'You must agree with out term and conditions'
// 							}
// 						}
// 					},
// 				},
// 				plugins: {
// 					trigger: new FormValidation.plugins.Trigger(),
// 					submitButton: new FormValidation.plugins.SubmitButton(),
// 					// Submit the form when all fields are valid
// 					defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
// 					// Support the form made in Bootstrap 4
// 					bootstrap: new FormValidation.plugins.Bootstrap(),
// 					// Show the feedback icons taken from FontAwesome
// 					icon: new FormValidation.plugins.Icon({
// 						valid: 'fa fa-check',
// 						invalid: 'fa fa-times',
// 						validating: 'fa fa-refresh',
// 					}),
// 					// recaptcha: new FormValidation.plugins.Recaptcha({
// 					// 	element: 'g-recaptcha',
// 					// 	message: 'The captcha is not valid',
// 					// 	siteKey: '6LczXa0UAAAAAHSDbupAF9rcEQHMRvqKcFjTA-81',
// 					// 	theme: 'light',
// 					// }),
// 				},
// 			}
// 		);
// 	});
// }
