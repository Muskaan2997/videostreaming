var FormValidator = function () {
	"use strict";
	var validateCheckRadio = function (val) {
        $("input[type='radio'], input[type='checkbox']").on('ifChecked', function(event) {
			$(this).parent().closest(".has-error").removeClass("has-error").addClass("has-success").find(".help-block").hide().end().find('.symbol').addClass('ok');
		});
    };
	
	// function to initiate Validation Sample 4
    var runValidator13 = function () {
        var form1 = $('#edit-dealer');
        var errorHandler1 = $('.errorHandler', form1);
        var successHandler1 = $('.successHandler', form1);
      
        $('#edit-dealer').validate({
            errorElement: "span", // contain the error msg in a span tag
            errorClass: 'help-block',
            errorPlacement: function (error, element) { // render error placement for each input type
                if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
                    error.insertAfter($(element).closest('.form-group').children('div').children().last());
                } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
                    error.insertAfter($(element).closest('.form-group').children('div'));
                } else {
                    error.insertAfter(element);
                    // for other inputs, just perform default behavior
                }
            },
            ignore: "",
            rules: {
				state: {
                    required: true
                },
			
                district: {
                    required: true
                },
				name: {
                    required: true
                },
				address: {
                    required: true
                },
				city: {
                    required: true
                },
				contact: {
                    required: true
                }
            },
            messages: {
			    state: "Please select state",
				district: "Please select district",
				name: "Please enter agency name",
				address: "Please enter agent address",
				city: "Please enter agent city",
				contact: "Please enter agent contact no"
            },
            invalidHandler: function (event, validator) { //display error alert on form submit
                successHandler1.hide();
                errorHandler1.show();
            },
            highlight: function (element) {
                $(element).closest('.help-block').removeClass('valid');
                // display OK icon
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
                // add the Bootstrap error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element).closest('.form-group').removeClass('has-error');
                // set error class to the control group
            },
            success: function (label, element) {
                label.addClass('help-block valid');
                // mark the current input as valid and display OK icon
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
            },
            submitHandler: function (form) {
               $('#edit-distributor').find('button').prop('disabled',true);
				$('#edit-distributor').find('button').after('<img id="loading" src="../images/wpspin_light.gif" style="padding-left:10px;"/>');
                // submit form
                //form.submit();
				$.ajax({
            url: form.action,
            type: form.method,
            data: new FormData(form),
		    cache:false,
            contentType: false,
            processData: false,
            success: function(response) {
               if(response=="oku")
				{
                   
					successHandler1.text('Update Successfully!');
					successHandler1.show().delay(1000).fadeOut(500,function(){
						 window.location.href='dealers.php';
					});
                    errorHandler1.hide();
					$('#edit-dealer').find('button').prop('disabled',false);
					$('#loading').remove();
				}
			   else
			   {
				    errorHandler1.text('Error : '+response);
				    successHandler1.hide();
                    errorHandler1.show();
					$('#edit-dealer').find('button').prop('disabled',false);
					$('#loading').remove();
			   }
                    			 
            }            
        });
            }
        });
    };
	
	
	    // function to initiate Validation Sample 4
    var runValidator11 = function () {
        var form1 = $('#edit-test');
        var errorHandler1 = $('.errorHandler', form1);
        var successHandler1 = $('.successHandler', form1);
      
        $('#edit-test').validate({
            errorElement: "span", // contain the error msg in a span tag
            errorClass: 'help-block',
            errorPlacement: function (error, element) { // render error placement for each input type
                if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
                    error.insertAfter($(element).closest('.form-group').children('div').children().last());
                } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
                    error.insertAfter($(element).closest('.form-group').children('div'));
                } else {
                    error.insertAfter(element);
                    // for other inputs, just perform default behavior
                }
            },
            ignore: "",
            rules: {
				type: {
                    required: true
                },
				tid: {
                    required: true
                },
				time: {
                    required: true,
					number: true
                },
				sub_allowed: {
                    required: true,
					number: true
                }
            },
            messages: {
			    type: "Please specify test type",
				time: "Please specify test total time in minutes",
				sub_allowed: "Please specify Submission Allowed for test",
				tid: "Please specify Name for test"
            },
            invalidHandler: function (event, validator) { //display error alert on form submit
                successHandler1.hide();
                errorHandler1.show();
            },
            highlight: function (element) {
                $(element).closest('.help-block').removeClass('valid');
                // display OK icon
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
                // add the Bootstrap error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element).closest('.form-group').removeClass('has-error');
                // set error class to the control group
            },
            success: function (label, element) {
                label.addClass('help-block valid');
                // mark the current input as valid and display OK icon
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
            },
            submitHandler: function (form) {
                
				var error = 0;
				if($('#type').val() == "Paid")
				{
					if($('#price').val() == "")
					{
						$('#price').closest('.help-block').removeClass('valid');
						$('#price').closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
						$('<span id="price-error" class="help-block">Please specify Price for test</span>').insertAfter('#price');
						error++;
					}
					else{
						 $('#price').closest('.form-group').removeClass('has-error');
						 $('#price').closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
					}
					if($('#currency').val() == "")
					{
						$('#currency').closest('.help-block').removeClass('valid');
						$('#currency').closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
						$('<span id="currency-error" class="help-block">Please select currency type for test</span>').insertAfter('#currency');
						error++;
					}
					else{
						 $('#currency').closest('.form-group').removeClass('has-error');
						 $('#currency').closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
					}
					if($('#validity').val() == "")
					{
						$('#validity').closest('.help-block').removeClass('valid');
						$('#validity').closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
						$('<span id="validity-error" class="help-block">Please specify Validity for test</span>').insertAfter('#validity');
						error++;
					}
					else{
						 $('#validity').closest('.form-group').removeClass('has-error');
						 $('#validity').closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
					}
					
				}
				if(error > 0)
					return false;
                // submit form
                //form.submit();
				$.ajax({
            url: form.action,
            type: form.method,
            data: new FormData(form),
		    cache:false,
            contentType: false,
            processData: false,
			beforeSend: function () {
                   $("body").addClass("loading"); 
             },
            success: function(response) {
				$("body").removeClass("loading"); 
                if(response=="ok")
				{

					successHandler1.text('Test Update Successfully!');
					successHandler1.show().delay(2000).fadeOut(500,function(){
						 window.location.href='tests.php';
					});
                    errorHandler1.hide();
				}
			   else
			   {
				    errorHandler1.text('Error : '+response);
				    successHandler1.hide();
                    errorHandler1.show();
			   }
                    			 
            }            
        });
            }
        });
    };
	
	
		    // function to initiate Validation Sample 4
    var runValidator10 = function () {
        var form1 = $('#test-form');
        var errorHandler1 = $('.errorHandler', form1);
        var successHandler1 = $('.successHandler', form1);
      
        $('#test-form').validate({
            errorElement: "span", // contain the error msg in a span tag
            errorClass: 'help-block',
            errorPlacement: function (error, element) { // render error placement for each input type
                if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
                    error.insertAfter($(element).closest('.form-group').children('div').children().last());
                } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
                    error.insertAfter($(element).closest('.form-group').children('div'));
                } else {
                    error.insertAfter(element);
                    // for other inputs, just perform default behavior
                }
            },
            ignore: "",
            rules: {
				type: {
                    required: true
                },
				tid: {
                    required: true
                },
				time: {
                    required: true,
					number: true
                },
				sub_allowed: {
                    required: true,
					number: true
                }
            },
            messages: {
			    type: "Please specify test type",
				time: "Please specify test total time in minutes",
				sub_allowed: "Please specify Submission Allowed for test",
				tid: "Please specify Name for test"
            },
            invalidHandler: function (event, validator) { //display error alert on form submit
                successHandler1.hide();
                errorHandler1.show();
            },
            highlight: function (element) {
                $(element).closest('.help-block').removeClass('valid');
                // display OK icon
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
                // add the Bootstrap error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element).closest('.form-group').removeClass('has-error');
                // set error class to the control group
            },
            success: function (label, element) {
                label.addClass('help-block valid');
                // mark the current input as valid and display OK icon
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
            },
            submitHandler: function (form) {
                
				var error = 0;
				if($('#type').val() == "Paid")
				{
					if($('#price').val() == "")
					{
						$('#price').closest('.help-block').removeClass('valid');
						$('#price').closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
						$('<span id="price-error" class="help-block">Please specify Price for test</span>').insertAfter('#price');
						error++;
					}
					else{
						 $('#price').closest('.form-group').removeClass('has-error');
						 $('#price').closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
					}
					if($('#currency').val() == "")
					{
						$('#currency').closest('.help-block').removeClass('valid');
						$('#currency').closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
						$('<span id="currency-error" class="help-block">Please select currency type for test</span>').insertAfter('#currency');
						error++;
					}
					else{
						 $('#currency').closest('.form-group').removeClass('has-error');
						 $('#currency').closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
					}
					if($('#validity').val() == "")
					{
						$('#validity').closest('.help-block').removeClass('valid');
						$('#validity').closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
						$('<span id="validity-error" class="help-block">Please specify Validity for test</span>').insertAfter('#validity');
						error++;
					}
					else{
						 $('#validity').closest('.form-group').removeClass('has-error');
						 $('#validity').closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
					}
					
				}
				if(error > 0)
					return false;
				 
				
                // submit form
                //form.submit();
				$.ajax({
            url: form.action,
            type: form.method,
            data: new FormData(form),
		    cache:false,
            contentType: false,
            processData: false,
			beforeSend: function () {
                   $("body").addClass("loading"); 
             },
            success: function(response) {
				$("body").removeClass("loading"); 
                if(response=="ok")
				{
                  
					successHandler1.text('Test Added Successfully!');
					successHandler1.show().delay(3000).fadeOut();
                    errorHandler1.hide();
				}
			   else
			   {
				    errorHandler1.text('Error : '+response);
				    successHandler1.hide();
                    errorHandler1.show();
			   }
                    			 
            }            
        });
            }
        });
    };
	// function to initiate Validation Sample 4
    var runValidator12 = function () {
        var form1 = $('#edit-distributor');
        var errorHandler1 = $('.errorHandler', form1);
        var successHandler1 = $('.successHandler', form1);
      
        $('#edit-distributor').validate({
            errorElement: "span", // contain the error msg in a span tag
            errorClass: 'help-block',
            errorPlacement: function (error, element) { // render error placement for each input type
                if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
                    error.insertAfter($(element).closest('.form-group').children('div').children().last());
                } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
                    error.insertAfter($(element).closest('.form-group').children('div'));
                } else {
                    error.insertAfter(element);
                    // for other inputs, just perform default behavior
                }
            },
            ignore: "",
            rules: {
				state: {
                    required: true
                },
				division: {
                    required: true
                },
                'districts[]': {
                    required: true
                },
				name: {
                    required: true
                },
				address: {
                    required: true
                },
				city: {
                    required: true
                },
				contact: {
                    required: true
                },
				userid: {
                    required: true
                },
		
            },
            messages: {
			    state: "Please select state",
				division: "Please select division",
				'districts[]': "Please select districts",
				name: "Please enter agency name",
				address: "Please enter agent address",
				city: "Please enter agent city",
				userid: "Please enter agent userid",
				contact: "Please enter agent contact no"
            },
            invalidHandler: function (event, validator) { //display error alert on form submit
                successHandler1.hide();
                errorHandler1.show();
            },
            highlight: function (element) {
                $(element).closest('.help-block').removeClass('valid');
                // display OK icon
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
                // add the Bootstrap error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element).closest('.form-group').removeClass('has-error');
                // set error class to the control group
            },
            success: function (label, element) {
                label.addClass('help-block valid');
                // mark the current input as valid and display OK icon
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
            },
            submitHandler: function (form) {
               $('#edit-distributor').find('button').prop('disabled',true);
				$('#edit-distributor').find('button').after('<img id="loading" src="../images/wpspin_light.gif" style="padding-left:10px;"/>');
                // submit form
                //form.submit();
				$.ajax({
            url: form.action,
            type: form.method,
            data: new FormData(form),
		    cache:false,
            contentType: false,
            processData: false,
            success: function(response) {
               if(response=="oku")
				{
                   
					successHandler1.text('Update Successfully!');
					successHandler1.show().delay(1000).fadeOut(500,function(){
						 window.location.href='distributor.php';
					});
                    errorHandler1.hide();
					$('#edit-distributor').find('button').prop('disabled',false);
					$('#loading').remove();
				}
			   else
			   {
				    errorHandler1.text('Error : '+response);
				    successHandler1.hide();
                    errorHandler1.show();
					$('#edit-distributor').find('button').prop('disabled',false);
					$('#loading').remove();
			   }
                    			 
            }            
        });
            }
        });
    };
	
	
	// function to initiate Validation Sample 4
    var runValidator9 = function () {
        var form1 = $('#distributor-form');
        var errorHandler1 = $('.errorHandler', form1);
        var successHandler1 = $('.successHandler', form1);
      
        $('#distributor-form').validate({
            errorElement: "span", // contain the error msg in a span tag
            errorClass: 'help-block',
            errorPlacement: function (error, element) { // render error placement for each input type
                if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
                    error.insertAfter($(element).closest('.form-group').children('div').children().last());
                } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
                    error.insertAfter($(element).closest('.form-group').children('div'));
                } else {
                    error.insertAfter(element);
                    // for other inputs, just perform default behavior
                }
            },
            ignore: "",
            rules: {
				state: {
                    required: true
                },
				division: {
                    required: true
                },
                'districts[]': {
                    required: true
                },
				name: {
                    required: true
                },
				address: {
                    required: true
                },
				city: {
                    required: true
                },
				contact: {
                    required: true
                },
				userid: {
                    required: true
                },
				password: {
                    minlength: 6,
                    required: true
                }
            },
            messages: {
			    state: "Please select state",
				division: "Please select division",
				'districts[]': "Please select districts",
				name: "Please enter agency name",
				address: "Please enter agent address",
				city: "Please enter agent city",
				userid: "Please enter agent userid",
				password: "Please enter agent password",
				contact: "Please enter agent contact no"
            },
            invalidHandler: function (event, validator) { //display error alert on form submit
                successHandler1.hide();
                errorHandler1.show();
            },
            highlight: function (element) {
                $(element).closest('.help-block').removeClass('valid');
                // display OK icon
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
                // add the Bootstrap error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element).closest('.form-group').removeClass('has-error');
                // set error class to the control group
            },
            success: function (label, element) {
                label.addClass('help-block valid');
                // mark the current input as valid and display OK icon
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
            },
            submitHandler: function (form) {
               $('#distributor-form').find('button').prop('disabled',true);
				$('#distributor-form').find('button').after('<img id="loading" src="../images/wpspin_light.gif" style="padding-left:10px;"/>');
                // submit form
                //form.submit();
				$.ajax({
            url: form.action,
            type: form.method,
            data: new FormData(form),
		    cache:false,
            contentType: false,
            processData: false,
            success: function(response) {
                if(response=="ok")
				{
                   
					successHandler1.text('Added Successfully!');
					successHandler1.show().delay(3000).fadeOut();
                    errorHandler1.hide();
					$('#distributor-form').find('button').prop('disabled',false);
					$('#loading').remove();
				}
				else  if(response=="oku")
				{
                   
					successHandler1.text('Update Successfully!');
					successHandler1.show().delay(1000).fadeOut(500,function(){
						 window.location.href='distributor.php';
					});
                    errorHandler1.hide();
					$('#distributor-form').find('button').prop('disabled',false);
					$('#loading').remove();
				}
			   else
			   {
				    errorHandler1.text('Error : '+response);
				    successHandler1.hide();
                    errorHandler1.show();
					$('#distributor-form').find('button').prop('disabled',false);
					$('#loading').remove();
			   }
                    			 
            }            
        });
            }
        });
    };
	
	
			    // function to initiate Validation Sample 4
    var runValidator8 = function () {
        var form1 = $('#division-form');
        var errorHandler1 = $('.errorHandler', form1);
        var successHandler1 = $('.successHandler', form1);
      
        $('#division-form').validate({
            errorElement: "span", // contain the error msg in a span tag
            errorClass: 'help-block',
            errorPlacement: function (error, element) { // render error placement for each input type
                if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
                    error.insertAfter($(element).closest('.form-group').children('div').children().last());
                } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
                    error.insertAfter($(element).closest('.form-group').children('div'));
                } else {
                    error.insertAfter(element);
                    // for other inputs, just perform default behavior
                }
            },
            ignore: "",
            rules: {
				state: {
                    required: true
                },
				name: {
                    required: true
                },
                'districts[]': {
                    required: true
                }
            },
            messages: {
			    state: "Please select state",
				name: "Please enter division name",
				'districts[]': "Please select districts"
            },
            invalidHandler: function (event, validator) { //display error alert on form submit
                successHandler1.hide();
                errorHandler1.show();
            },
            highlight: function (element) {
                $(element).closest('.help-block').removeClass('valid');
                // display OK icon
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
                // add the Bootstrap error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element).closest('.form-group').removeClass('has-error');
                // set error class to the control group
            },
            success: function (label, element) {
                label.addClass('help-block valid');
                // mark the current input as valid and display OK icon
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
            },
            submitHandler: function (form) {
               $('#division-form').find('button').prop('disabled',true);
				$('#division-form').find('button').after('<img id="loading" src="../images/wpspin_light.gif" style="padding-left:10px;"/>');
                // submit form
                //form.submit();
				$.ajax({
            url: form.action,
            type: form.method,
            data: new FormData(form),
		    cache:false,
            contentType: false,
            processData: false,
            success: function(response) {
                if(response=="ok")
				{
                   
					successHandler1.text('Added Successfully!');
					successHandler1.show().delay(3000).fadeOut();
                    errorHandler1.hide();
					$('#division-form').find('button').prop('disabled',false);
					$('#loading').remove();
				}
				else  if(response=="oku")
				{
                   
					successHandler1.text('Update Successfully!');
					successHandler1.show().delay(1000).fadeOut(500,function(){
						 window.location.href='division.php';
					});
                    errorHandler1.hide();
					$('#division-form').find('button').prop('disabled',false);
					$('#loading').remove();
				}
			   else
			   {
				    errorHandler1.text('Error : '+response);
				    successHandler1.hide();
                    errorHandler1.show();
					$('#division-form').find('button').prop('disabled',false);
					$('#loading').remove();
			   }
                    			 
            }            
        });
            }
        });
    };
	
	
	
	// function to initiate Validation Sample 1
    var runValidator7 = function () {
        var form1 = $('#edit-product');
        var errorHandler1 = $('.errorHandler', form1);
        var successHandler1 = $('.successHandler', form1);
        $('#edit-product').validate({
            errorElement: "span", // contain the error msg in a span tag
            errorClass: 'help-block',
            errorPlacement: function (error, element) { // render error placement for each input type
                if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
                    error.insertAfter($(element).closest('.form-group').children('div').children().last());
                } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
                    error.insertAfter($(element).closest('.form-group').children('div'));
                } else {
                    error.insertAfter(element);
                    // for other inputs, just perform default behavior
                }
            },
            ignore: "",
            rules: {
				category: {
                    required: true
                },
				brand: {
                    required: true
                },
                'colors[]': {
                    required: true
                },
                modal: {
                    minlength: 2,
                    required: true
                },
				price: {
                    required: true,
                    number: true
                }
            },
            messages: {
				category: "Please select product category",
                brand: "Please select product brand",
                'colors[]': "Please select atleat one color",
                modal: "Please specify product modal",
                price: "Please specify product price"
            },
            
            invalidHandler: function (event, validator) { //display error alert on form submit
                successHandler1.hide();
                errorHandler1.show();
            },
            highlight: function (element) {
                $(element).closest('.help-block').removeClass('valid');
                // display OK icon
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
                // add the Bootstrap error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element).closest('.form-group').removeClass('has-error');
                // set error class to the control group
            },
            success: function (label, element) {
                label.addClass('help-block valid');
                // mark the current input as valid and display OK icon
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
            },
            submitHandler: function (form) {
                $('#edit-product button').prop('disabled', true);
                // submit form
                //form.submit();
				$.ajax({
            url: form.action,
            type: form.method,
            data: new FormData(form),
		    cache:false,
            contentType: false,
            processData: false,
            success: function(response) {
                if(response=="ok")
				{
					successHandler1.text('Update Successfully!');
					successHandler1.show().delay(1000).fadeOut(500,function(){
						 window.location.href='products.php';
					});
                    errorHandler1.hide();
				}
			   else
			   {
				    errorHandler1.text('Error : '+response);
				    successHandler1.hide();
                    errorHandler1.show();
			   }
                    			 
            }            
        });
            }
        });
    };
	
	
	
// function to initiate Validation Sample 1
    var runValidator6 = function () {
        var form1 = $('#product-form');
        var errorHandler1 = $('.errorHandler', form1);
        var successHandler1 = $('.successHandler', form1);
        $('#product-form').validate({
            errorElement: "span", // contain the error msg in a span tag
            errorClass: 'help-block',
            errorPlacement: function (error, element) { // render error placement for each input type
                if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
                    error.insertAfter($(element).closest('.form-group').children('div').children().last());
                } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
                    error.insertAfter($(element).closest('.form-group').children('div'));
                } else {
                    error.insertAfter(element);
                    // for other inputs, just perform default behavior
                }
            },
            ignore: "",
            rules: {
				category: {
                    required: true
                },
				brand: {
                    required: true
                },
				'colors[]': {
                    required: true
                },
                modal: {
                    minlength: 2,
                    required: true
                },
				price: {
                    required: true,
                    number: true
                },
               pic1: {
                    required: true
                }
            },
            messages: {
				category: "Please select product category",
                brand: "Please select product brand",
                'colors[]': "Please select atleat one color",
                modal: "Please specify product modal",
                price: "Please specify product price",
				pic1: "Please specify product main image"
            },
            
            invalidHandler: function (event, validator) { //display error alert on form submit
                successHandler1.hide();
                errorHandler1.show();
            },
            highlight: function (element) {
                $(element).closest('.help-block').removeClass('valid');
                // display OK icon
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
                // add the Bootstrap error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element).closest('.form-group').removeClass('has-error');
                // set error class to the control group
            },
            success: function (label, element) {
                label.addClass('help-block valid');
                // mark the current input as valid and display OK icon
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
            },
            submitHandler: function (form) {
                $('#product-form button').prop('disabled', true);
                // submit form
                //form.submit();
				$.ajax({
            url: form.action,
            type: form.method,
            data: new FormData(form),
		    cache:false,
            contentType: false,
            processData: false,
            success: function(response) {
	
                if(response=="ok")
				{
					successHandler1.text('Added Successfully!');
					successHandler1.show().delay(1000).fadeOut(500,function(){
						 window.location.href='new_product.php';
					});
                    errorHandler1.hide();
				}
			   else
			   {
				    errorHandler1.text('Error : '+response);
				    successHandler1.hide();
                    errorHandler1.show();
			   }
                    			 
            },
 error: function(textStatus){
       alert('request failed'+textStatus.responseText);
    }            
        });
            }
        });
    };
    // function to initiate Validation Sample 4
    var runValidator5 = function () {
        var form1 = $('#edit-brand');
        var errorHandler1 = $('.errorHandler', form1);
        var successHandler1 = $('.successHandler', form1);
      
        $('#edit-brand').validate({
            errorElement: "span", // contain the error msg in a span tag
            errorClass: 'help-block',
            errorPlacement: function (error, element) { // render error placement for each input type
                if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
                    error.insertAfter($(element).closest('.form-group').children('div').children().last());
                } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
                    error.insertAfter($(element).closest('.form-group').children('div'));
                } else {
                    error.insertAfter(element);
                    // for other inputs, just perform default behavior
                }
            },
            ignore: "",
            rules: {
				name: {
                    minlength: 2,
                    required: true
                }
            },
            messages: {
			    name: "Please specify brand name"
				
            },
            invalidHandler: function (event, validator) { //display error alert on form submit
                successHandler1.hide();
                errorHandler1.show();
            },
            highlight: function (element) {
                $(element).closest('.help-block').removeClass('valid');
                // display OK icon
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
                // add the Bootstrap error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element).closest('.form-group').removeClass('has-error');
                // set error class to the control group
            },
            success: function (label, element) {
                label.addClass('help-block valid');
                // mark the current input as valid and display OK icon
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
            },
            submitHandler: function (form) {
                
                // submit form
                //form.submit();
				$.ajax({
            url: form.action,
            type: form.method,
            data: new FormData(form),
		    cache:false,
            contentType: false,
            processData: false,
            success: function(response) {
                if(response=="ok")
				{
                    var location=$('#location option:last').val();
					$('#location').children().removeAttr("selected");
					$('.cs-placeholder').text((parseInt(location)+1));
					$('.cs-options ul').append('<li data-option="" data-value="'+(parseInt(location)+1)+'"><span>'+(parseInt(location)+1)+'</span></li>');
					$('#location').append('<option value="'+(parseInt(location)+1)+'" selected>'+(parseInt(location)+1)+'</option>');
					successHandler1.text('Update Successfully!');
					successHandler1.show().delay(2000).fadeOut(500,function(){
						 window.location.href='brands.php';
					});
                    errorHandler1.hide();
				}
			   else
			   {
				    errorHandler1.text('Error : '+response);
				    successHandler1.hide();
                    errorHandler1.show();
			   }
                    			 
            }            
        });
            }
        });
    };
	
	
		    // function to initiate Validation Sample 4
    var runValidator4 = function () {
        var form1 = $('#brand-form');
        var errorHandler1 = $('.errorHandler', form1);
        var successHandler1 = $('.successHandler', form1);
      
        $('#brand-form').validate({
            errorElement: "span", // contain the error msg in a span tag
            errorClass: 'help-block',
            errorPlacement: function (error, element) { // render error placement for each input type
                if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
                    error.insertAfter($(element).closest('.form-group').children('div').children().last());
                } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
                    error.insertAfter($(element).closest('.form-group').children('div'));
                } else {
                    error.insertAfter(element);
                    // for other inputs, just perform default behavior
                }
            },
            ignore: "",
            rules: {
				name: {
                    minlength: 2,
                    required: true
                },
                brand_pic: {
                    required: true
                }
            },
            messages: {
			    name: "Please specify brand name",
				brand_pic: "Please specify brand_pic"
            },
            invalidHandler: function (event, validator) { //display error alert on form submit
                successHandler1.hide();
                errorHandler1.show();
            },
            highlight: function (element) {
                $(element).closest('.help-block').removeClass('valid');
                // display OK icon
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
                // add the Bootstrap error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element).closest('.form-group').removeClass('has-error');
                // set error class to the control group
            },
            success: function (label, element) {
                label.addClass('help-block valid');
                // mark the current input as valid and display OK icon
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
            },
            submitHandler: function (form) {
                
                // submit form
                //form.submit();
				$.ajax({
            url: form.action,
            type: form.method,
            data: new FormData(form),
		    cache:false,
            contentType: false,
            processData: false,
            success: function(response) {
                if(response=="ok")
				{
                    var location=$('#location option:last').val();
					$('#location').children().removeAttr("selected");
					$('.cs-placeholder').text((parseInt(location)+1));
					$('.cs-options ul').append('<li data-option="" data-value="'+(parseInt(location)+1)+'"><span>'+(parseInt(location)+1)+'</span></li>');
					$('#location').append('<option value="'+(parseInt(location)+1)+'" selected>'+(parseInt(location)+1)+'</option>');
					successHandler1.text('Added Successfully!');
					successHandler1.show().delay(3000).fadeOut();
                    errorHandler1.hide();
				}
			   else
			   {
				    errorHandler1.text('Error : '+response);
				    successHandler1.hide();
                    errorHandler1.show();
			   }
                    			 
            }            
        });
            }
        });
    };
	
	
	    // function to initiate Validation Sample 3
	var runValidator3 = function () {
        var form1 = $('#settings-form');
        var errorHandler1 = $('.errorHandler', form1);
        var successHandler1 = $('.successHandler', form1);
      
        $('#settings-form').validate({
            errorElement: "span", // contain the error msg in a span tag
            errorClass: 'help-block',
            errorPlacement: function (error, element) { // render error placement for each input type
                if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
                    error.insertAfter($(element).closest('.form-group').children('div').children().last());
                } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
                    error.insertAfter($(element).closest('.form-group').children('div'));
                } else {
                    error.insertAfter(element);
                    // for other inputs, just perform default behavior
                }
            },
            ignore: "",
            rules: {
				name: {
                    minlength: 2,
                    required: true
                },
				username: {
                    minlength: 2,
                    required: true
                },
                password: {
                    minlength: 6,
                    required: true
                }
            },
            messages: {
			    name: "Please specify your name",
				username: "Please specify your user name"
            },
            invalidHandler: function (event, validator) { //display error alert on form submit
                successHandler1.hide();
                errorHandler1.show();
            },
            highlight: function (element) {
                $(element).closest('.help-block').removeClass('valid');
                // display OK icon
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
                // add the Bootstrap error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element).closest('.form-group').removeClass('has-error');
                // set error class to the control group
            },
            success: function (label, element) {
                label.addClass('help-block valid');
                // mark the current input as valid and display OK icon
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
            },
            submitHandler: function (form) {
                
                // submit form
                //form.submit();
				$.ajax({
            url: form.action,
            type: form.method,
            data: new FormData(form),
		    cache:false,
            contentType: false,
            processData: false,
            success: function(response) {
                if(response=="ok")
				{
					$('#load_pic').load('load_pic.php');$('.load_top').load('load_top.php');
					successHandler1.text('Updated Successfully!');
					successHandler1.show();
                    errorHandler1.hide();
				}
			   else
			   {
				    errorHandler1.text('Error : '+response);
				    successHandler1.hide();
                    errorHandler1.show();
			   }
                    			 
            }            
        });
            }
        });
    };
	
	
	  // function to initiate Validation Sample 14
	var runValidator14 = function () {
        var form1 = $('#settings-center');
        var errorHandler1 = $('.errorHandler', form1);
        var successHandler1 = $('.successHandler', form1);
      
        $('#settings-center').validate({
            errorElement: "span", // contain the error msg in a span tag
            errorClass: 'help-block',
            errorPlacement: function (error, element) { // render error placement for each input type
                if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
                    error.insertAfter($(element).closest('.form-group').children('div').children().last());
                } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
                    error.insertAfter($(element).closest('.form-group').children('div'));
                } else {
                    error.insertAfter(element);
                    // for other inputs, just perform default behavior
                }
            },
            ignore: "",
            rules: {
				name: {
                    minlength: 2,
                    required: true
                }
            },
            messages: {
			    name: "Please specify your center name",
            },
            invalidHandler: function (event, validator) { //display error alert on form submit
                successHandler1.hide();
                errorHandler1.show();
            },
            highlight: function (element) {
                $(element).closest('.help-block').removeClass('valid');
                // display OK icon
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
                // add the Bootstrap error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element).closest('.form-group').removeClass('has-error');
                // set error class to the control group
            },
            success: function (label, element) {
                label.addClass('help-block valid');
                // mark the current input as valid and display OK icon
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
            },
            submitHandler: function (form) {
                
                // submit form
                //form.submit();
				$.ajax({
            url: form.action,
            type: form.method,
            data: new FormData(form),
		    cache:false,
            contentType: false,
            processData: false,
            success: function(response) {
                if(response=="ok")
				{
					$('#form').load('load_center_form.php');
					successHandler1.text('Updated Successfully!');
					successHandler1.show();
                    errorHandler1.hide();
				}
			   else
			   {
				    errorHandler1.text('Error : '+response);
				    successHandler1.hide();
                    errorHandler1.show();
			   }
                    			 
            }            
        });
            }
        });
    };
	
    // function to initiate Validation Sample 1
    var runValidator1 = function () {
        var form1 = $('#form');
        var errorHandler1 = $('.errorHandler', form1);
        var successHandler1 = $('.successHandler', form1);
        $.validator.addMethod("FullDate", function () {
            //if all values are selected
            if ($("#dd").val() != "" && $("#mm").val() != "" && $("#yyyy").val() != "") {
                return true;
            } else {
                return false;
            }
        }, 'Please select a day, month, and year');
        $('#form').validate({
            errorElement: "span", // contain the error msg in a span tag
            errorClass: 'help-block',
            errorPlacement: function (error, element) { // render error placement for each input type
                if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
                    error.insertAfter($(element).closest('.form-group').children('div').children().last());
                } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
                    error.insertAfter($(element).closest('.form-group').children('div'));
                } else {
                    error.insertAfter(element);
                    // for other inputs, just perform default behavior
                }
            },
            ignore: "",
            rules: {
                firstname: {
                    minlength: 2,
                    required: true
                },
                lastname: {
                    minlength: 2,
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                password: {
                    minlength: 6,
                    required: true
                },
                password_again: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password"
                },
                yyyy: "FullDate",
                gender: {
                    required: true
                },
                zipcode: {
                    required: true,
                    number: true,
                    minlength: 5
                },
                city: {
                    required: true
                },
                newsletter: {
                    required: true
                }
            },
            messages: {
                firstname: "Please specify your first name",
                lastname: "Please specify your last name",
                email: {
                    required: "We need your email address to contact you",
                    email: "Your email address must be in the format of name@domain.com"
                },
                gender: "Please check a gender!"
            },
            groups: {
                DateofBirth: "dd mm yyyy",
            },
            invalidHandler: function (event, validator) { //display error alert on form submit
                successHandler1.hide();
                errorHandler1.show();
            },
            highlight: function (element) {
                $(element).closest('.help-block').removeClass('valid');
                // display OK icon
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
                // add the Bootstrap error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element).closest('.form-group').removeClass('has-error');
                // set error class to the control group
            },
            success: function (label, element) {
                label.addClass('help-block valid');
                // mark the current input as valid and display OK icon
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
            },
            submitHandler: function (form) {
                successHandler1.show();
                errorHandler1.hide();
                // submit form
                //$('#form').submit();
            }
        });
    };
    // function to initiate Validation Sample 2
    var runValidator2 = function () {
        var form2 = $('#form2');
        var errorHandler2 = $('.errorHandler', form2);
        var successHandler2 = $('.successHandler', form2);
        $.validator.addMethod("getEditorValue", function () {
            $("#editor1").val($('#form2 .summernote').code());
            if ($("#editor1").val() != "" && $("#editor1").val().replace(/(<([^>]+)>)/ig, "") != "") {
                $('#editor1').val('');
                return true;
            } else {
                return false;
            }
        }, 'This field is required.');
        form2.validate({
            errorElement: "span", // contain the error msg in a small tag
            errorClass: 'help-block',
            errorPlacement: function (error, element) { // render error placement for each input type
                if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
                    error.insertAfter($(element).closest('.form-group').children('div').children().last());
                } else if (element.hasClass("ckeditor")) {
                    error.appendTo($(element).closest('.form-group'));
                } else {
                    error.insertAfter(element);
                    // for other inputs, just perform default behavior
                }
            },
            ignore: "",
            rules: {
                firstname2: {
                    minlength: 2,
                    required: true
                },
                lastname2: {
                    minlength: 2,
                    required: true
                },
                email2: {
                    required: true,
                    email: true
                },
                occupation: {
                    required: true
                },
                dropdown: {
                    required: true
                },
                services: {
                    required: true,
                    minlength: 2
                },
                creditcard: {
                    required: true,
                    creditcard: true
                },
                url: {
                    required: true,
                    url: true
                },
                zipcode2: {
                    required: true,
                    number: true,
                    minlength: 5
                },
                city2: {
                    required: true
                },
                editor1: "getEditorValue",
                editor2: {
                    required: true
                }
            },
            messages: {
                firstname: "Please specify your first name",
                lastname: "Please specify your last name",
                email: {
                    required: "We need your email address to contact you",
                    email: "Your email address must be in the format of name@domain.com"
                },
                services: {
                    minlength: jQuery.validator.format("Please select  at least {0} types of Service")
                }
            },
            invalidHandler: function (event, validator) { //display error alert on form submit
                successHandler2.hide();
                errorHandler2.show();
            },
            highlight: function (element) {
                $(element).closest('.help-block').removeClass('valid');
                // display OK icon
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
                // add the Bootstrap error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element).closest('.form-group').removeClass('has-error');
                // set error class to the control group
            },
            success: function (label, element) {
                label.addClass('help-block valid');
                // mark the current input as valid and display OK icon
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
            },
            submitHandler: function (form) {
                successHandler2.show();
                errorHandler2.hide();
                // submit form
                //$('#form2').submit();
            }
        });
      
    };
	   // function to initiate Validation Sample 4
    var runValidator15 = function () {
        var form1 = $('#staff-form');
        var errorHandler1 = $('.errorHandler', form1);
        var successHandler1 = $('.successHandler', form1);
      
        $('#staff-form').validate({
            errorElement: "span", // contain the error msg in a span tag
            errorClass: 'help-block',
            errorPlacement: function (error, element) { // render error placement for each input type
                if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
                    error.insertAfter($(element).closest('.form-group').children('div').children().last());
                } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
                    error.insertAfter($(element).closest('.form-group').children('div'));
                } else {
                    error.insertAfter(element);
                    // for other inputs, just perform default behavior
                }
            },
            ignore: "",
            rules: {
				name: {
                    required: true
                },
				position: {
                    required: true
                }
            },
            messages: {
			    name: "Please specify staff name",
				position: "Please specify staff position"
            },
            invalidHandler: function (event, validator) { //display error alert on form submit
                successHandler1.hide();
                errorHandler1.show();
            },
            highlight: function (element) {
                $(element).closest('.help-block').removeClass('valid');
                // display OK icon
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
                // add the Bootstrap error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element).closest('.form-group').removeClass('has-error');
                // set error class to the control group
            },
            success: function (label, element) {
                label.addClass('help-block valid');
                // mark the current input as valid and display OK icon
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
            },
            submitHandler: function (form) {
				$.ajax({
				url: form.action,
				type: form.method,
				data: new FormData(form),
				cache:false,
				contentType: false,
				processData: false,
				beforeSend: function () {
                   $("body").addClass("loading"); 
				},
				success: function(response) {
				$("body").removeClass("loading"); 
                if(response=="ok")
				{
                  
					successHandler1.text('Staff Added Successfully!');
					successHandler1.show().delay(3000).fadeOut();
                    errorHandler1.hide();
				}
			   else
			   {
				    errorHandler1.text('Error : '+response);
				    successHandler1.hide();
                    errorHandler1.show();
			   }
                    			 
            }            
        });
            }
        });
    };
	  // function to initiate Validation Sample 4
    var runValidator16 = function () {
        var form1 = $('#paper-form');
        var errorHandler1 = $('.errorHandler', form1);
        var successHandler1 = $('.successHandler', form1);
      
        $('#paper-form').validate({
            errorElement: "span", // contain the error msg in a span tag
            errorClass: 'help-block',
            errorPlacement: function (error, element) { // render error placement for each input type
                if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
                    error.insertAfter($(element).closest('.form-group').children('div').children().last());
                } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
                    error.insertAfter($(element).closest('.form-group').children('div'));
                } else {
                    error.insertAfter(element);
                    // for other inputs, just perform default behavior
                }
            },
            ignore: "",
            rules: {
				date: {
                    required: true
                },
				qimage: {
                    required: true
                }
            },
            messages: {
			    date: "Please specify paper date",
				qimage: "Please select a pdf file"
            },
            invalidHandler: function (event, validator) { //display error alert on form submit
                successHandler1.hide();
                errorHandler1.show();
            },
            highlight: function (element) {
                $(element).closest('.help-block').removeClass('valid');
                // display OK icon
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
                // add the Bootstrap error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element).closest('.form-group').removeClass('has-error');
                // set error class to the control group
            },
            success: function (label, element) {
                label.addClass('help-block valid');
                // mark the current input as valid and display OK icon
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
            },
            submitHandler: function (form) {
				$.ajax({
				url: form.action,
				type: form.method,
				data: new FormData(form),
				cache:false,
				contentType: false,
				processData: false,
				beforeSend: function () {
                   $("body").addClass("loading"); 
				},
				success: function(response) {
				$("body").removeClass("loading"); 
                if(response=="ok")
				{
                  
					successHandler1.text('Paper Added Successfully!');
					successHandler1.show().delay(3000).fadeOut();
                    errorHandler1.hide();
				}
			   else
			   {
				    errorHandler1.text('Error : '+response);
				    successHandler1.hide();
                    errorHandler1.show();
			   }
                    			 
            }            
        });
            }
        });
    };
	// function to initiate Validation Sample 4
    var runValidator17 = function () {
        var form1 = $('#news-form');
        var errorHandler1 = $('.errorHandler', form1);
        var successHandler1 = $('.successHandler', form1);
      
        $('#news-form').validate({
            errorElement: "span", // contain the error msg in a span tag
            errorClass: 'help-block',
            errorPlacement: function (error, element) { // render error placement for each input type
                if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
                    error.insertAfter($(element).closest('.form-group').children('div').children().last());
                } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
                    error.insertAfter($(element).closest('.form-group').children('div'));
                } else {
                    error.insertAfter(element);
                    // for other inputs, just perform default behavior
                }
            },
            ignore: "",
            rules: {
				title: {
                    required: true
                },
				details: {
                    required: true
                },
				qimage: {
                    required: true
                },
				link: {
                    required: true
                }
            },
            messages: {
			    title: "Please specify title",
				qimage: "Please select a image",
				details: "Please specify details",
				link: "Please specify a link"
            },
            invalidHandler: function (event, validator) { //display error alert on form submit
                successHandler1.hide();
                errorHandler1.show();
            },
            highlight: function (element) {
                $(element).closest('.help-block').removeClass('valid');
                // display OK icon
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
                // add the Bootstrap error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element).closest('.form-group').removeClass('has-error');
                // set error class to the control group
            },
            success: function (label, element) {
                label.addClass('help-block valid');
                // mark the current input as valid and display OK icon
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
            },
            submitHandler: function (form) {
				$.ajax({
				url: form.action,
				type: form.method,
				data: new FormData(form),
				cache:false,
				contentType: false,
				processData: false,
				beforeSend: function () {
                   $("body").addClass("loading"); 
				},
				success: function(response) {
				$("body").removeClass("loading"); 
                if(response=="ok")
				{
                  
					successHandler1.text('Added Successfully!');
					successHandler1.show().delay(3000).fadeOut();
                    errorHandler1.hide();
				}
			   else
			   {
				    errorHandler1.text('Error : '+response);
				    successHandler1.hide();
                    errorHandler1.show();
			   }
                    			 
            }            
        });
            }
        });
    };
	// function to initiate Validation Sample 4
    var runValidator18 = function () {
        var form1 = $('#video-form');
        var errorHandler1 = $('.errorHandler', form1);
        var successHandler1 = $('.successHandler', form1);
      
        $('#video-form').validate({
            errorElement: "span", // contain the error msg in a span tag
            errorClass: 'help-block',
            errorPlacement: function (error, element) { // render error placement for each input type
                if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
                    error.insertAfter($(element).closest('.form-group').children('div').children().last());
                } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
                    error.insertAfter($(element).closest('.form-group').children('div'));
                } else {
                    error.insertAfter(element);
                    // for other inputs, just perform default behavior
                }
            },
            ignore: "",
            rules: {
				title: {
                    required: true
                },
				link: {
                    required: true
                }
            },
            messages: {
			    title: "Please specify video name",
				link: "Please specify video id"
            },
            invalidHandler: function (event, validator) { //display error alert on form submit
                successHandler1.hide();
                errorHandler1.show();
            },
            highlight: function (element) {
                $(element).closest('.help-block').removeClass('valid');
                // display OK icon
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
                // add the Bootstrap error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element).closest('.form-group').removeClass('has-error');
                // set error class to the control group
            },
            success: function (label, element) {
                label.addClass('help-block valid');
                // mark the current input as valid and display OK icon
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
            },
            submitHandler: function (form) {
				$.ajax({
				url: form.action,
				type: form.method,
				data: new FormData(form),
				cache:false,
				contentType: false,
				processData: false,
				beforeSend: function () {
                   $("body").addClass("loading"); 
				},
				success: function(response) {
				$("body").removeClass("loading"); 
                if(response=="ok")
				{
                  
					successHandler1.text('Video Added Successfully!');
					successHandler1.show().delay(3000).fadeOut();
                    errorHandler1.hide();
				}
			   else
			   {
				    errorHandler1.text('Error : '+response);
				    successHandler1.hide();
                    errorHandler1.show();
			   }
                    			 
            }            
        });
            }
        });
    };
	// function to initiate Validation Sample 4
    var runValidator19 = function () {
        var form1 = $('#subject-form');
        var errorHandler1 = $('.errorHandler', form1);
        var successHandler1 = $('.successHandler', form1);
      
        $('#subject-form').validate({
            errorElement: "span", // contain the error msg in a span tag
            errorClass: 'help-block',
            errorPlacement: function (error, element) { // render error placement for each input type
                if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
                    error.insertAfter($(element).closest('.form-group').children('div').children().last());
                } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
                    error.insertAfter($(element).closest('.form-group').children('div'));
                } else {
                    error.insertAfter(element);
                    // for other inputs, just perform default behavior
                }
            },
            ignore: "",
            rules: {
				tid: {
                    required: true
                }
            },
            messages: {
				tid: "Please specify Name for subject"
            },
            invalidHandler: function (event, validator) { //display error alert on form submit
                successHandler1.hide();
                errorHandler1.show();
            },
            highlight: function (element) {
                $(element).closest('.help-block').removeClass('valid');
                // display OK icon
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
                // add the Bootstrap error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element).closest('.form-group').removeClass('has-error');
                // set error class to the control group
            },
            success: function (label, element) {
                label.addClass('help-block valid');
                // mark the current input as valid and display OK icon
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
            },
            submitHandler: function (form) {
 
				$.ajax({
            url: form.action,
            type: form.method,
            data: new FormData(form),
		    cache:false,
            contentType: false,
            processData: false,
			beforeSend: function () {
                   $("body").addClass("loading"); 
             },
            success: function(response) {
				$("body").removeClass("loading"); 
                if(response=="ok")
				{
                  
					successHandler1.text('Subject Added Successfully!');
					successHandler1.show().delay(3000).fadeOut();
                    errorHandler1.hide();
				}
			   else
			   {
				    errorHandler1.text('Error : '+response);
				    successHandler1.hide();
                    errorHandler1.show();
			   }
                    			 
            }            
        });
            }
        });
    };
	// function to initiate Validation Sample 4
    var runValidator20 = function () {
        var form1 = $('#module-form');
        var errorHandler1 = $('.errorHandler', form1);
        var successHandler1 = $('.successHandler', form1);
      
        $('#module-form').validate({
            errorElement: "span", // contain the error msg in a span tag
            errorClass: 'help-block',
            errorPlacement: function (error, element) { // render error placement for each input type
                if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
                    error.insertAfter($(element).closest('.form-group').children('div').children().last());
                } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
                    error.insertAfter($(element).closest('.form-group').children('div'));
                } else {
                    error.insertAfter(element);
                    // for other inputs, just perform default behavior
                }
            },
            ignore: "",
            rules: {
				tid: {
                    required: true
                },
				type: {
                    required: true
                }
            },
            messages: {
				tid: "Please specify Name for module",
				type: "Please select module type"
            },
            invalidHandler: function (event, validator) { //display error alert on form submit
                successHandler1.hide();
                errorHandler1.show();
            },
            highlight: function (element) {
                $(element).closest('.help-block').removeClass('valid');
                // display OK icon
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
                // add the Bootstrap error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element).closest('.form-group').removeClass('has-error');
                // set error class to the control group
            },
            success: function (label, element) {
                label.addClass('help-block valid');
                // mark the current input as valid and display OK icon
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
            },
            submitHandler: function (form) {
 
				$.ajax({
            url: form.action,
            type: form.method,
            data: new FormData(form),
		    cache:false,
            contentType: false,
            processData: false,
			beforeSend: function () {
                   $("body").addClass("loading"); 
             },
            success: function(response) {
				$("body").removeClass("loading"); 
                if(response=="ok")
				{
                  
					successHandler1.text('Module Added Successfully!');
					successHandler1.show().delay(3000).fadeOut();
                    errorHandler1.hide();
				}
			   else
			   {
				    errorHandler1.text('Error : '+response);
				    successHandler1.hide();
                    errorHandler1.show();
			   }
                    			 
            }            
        });
            }
        });
    };
	
	// function to initiate Validation Sample 4
    var runValidator21 = function () {
        var form1 = $('#edit-module');
        var errorHandler1 = $('.errorHandler', form1);
        var successHandler1 = $('.successHandler', form1);
      
        $('#edit-module').validate({
            errorElement: "span", // contain the error msg in a span tag
            errorClass: 'help-block',
            errorPlacement: function (error, element) { // render error placement for each input type
                if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
                    error.insertAfter($(element).closest('.form-group').children('div').children().last());
                } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
                    error.insertAfter($(element).closest('.form-group').children('div'));
                } else {
                    error.insertAfter(element);
                    // for other inputs, just perform default behavior
                }
            },
            ignore: "",
            rules: {
				tid: {
                    required: true
                },
				type: {
                    required: true
                }
            },
            messages: {
				tid: "Please specify Name for module",
				type: "Please select module type"
            },
            invalidHandler: function (event, validator) { //display error alert on form submit
                successHandler1.hide();
                errorHandler1.show();
            },
            highlight: function (element) {
                $(element).closest('.help-block').removeClass('valid');
                // display OK icon
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
                // add the Bootstrap error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element).closest('.form-group').removeClass('has-error');
                // set error class to the control group
            },
            success: function (label, element) {
                label.addClass('help-block valid');
                // mark the current input as valid and display OK icon
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
            },
            submitHandler: function (form) {
 
				$.ajax({
            url: form.action,
            type: form.method,
            data: new FormData(form),
		    cache:false,
            contentType: false,
            processData: false,
			beforeSend: function () {
                   $("body").addClass("loading"); 
             },
            success: function(response) {
				$("body").removeClass("loading"); 
                if(response=="ok")
				{
                  
					successHandler1.text('Module Update Successfully!');
					successHandler1.show().delay(3000).fadeOut();
                    errorHandler1.hide();
				}
			   else
			   {
				    errorHandler1.text('Error : '+response);
				    successHandler1.hide();
                    errorHandler1.show();
			   }
                    			 
            }            
        });
            }
        });
    };
	// function to initiate Validation Sample 4
    var runValidator22 = function () {
        var form1 = $('#edit-subject');
        var errorHandler1 = $('.errorHandler', form1);
        var successHandler1 = $('.successHandler', form1);
      
        $('#edit-subject').validate({
            errorElement: "span", // contain the error msg in a span tag
            errorClass: 'help-block',
            errorPlacement: function (error, element) { // render error placement for each input type
                if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
                    error.insertAfter($(element).closest('.form-group').children('div').children().last());
                } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
                    error.insertAfter($(element).closest('.form-group').children('div'));
                } else {
                    error.insertAfter(element);
                    // for other inputs, just perform default behavior
                }
            },
            ignore: "",
            rules: {
				tid: {
                    required: true
                }
            },
            messages: {
				tid: "Please specify Name for subject"
            },
            invalidHandler: function (event, validator) { //display error alert on form submit
                successHandler1.hide();
                errorHandler1.show();
            },
            highlight: function (element) {
                $(element).closest('.help-block').removeClass('valid');
                // display OK icon
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
                // add the Bootstrap error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element).closest('.form-group').removeClass('has-error');
                // set error class to the control group
            },
            success: function (label, element) {
                label.addClass('help-block valid');
                // mark the current input as valid and display OK icon
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
            },
            submitHandler: function (form) {
 
				$.ajax({
            url: form.action,
            type: form.method,
            data: new FormData(form),
		    cache:false,
            contentType: false,
            processData: false,
			beforeSend: function () {
                   $("body").addClass("loading"); 
             },
            success: function(response) {
				$("body").removeClass("loading"); 
                if(response=="ok")
				{
                  
					successHandler1.text('Subject Update Successfully!');
					successHandler1.show().delay(3000).fadeOut();
                    errorHandler1.hide();
				}
			   else
			   {
				    errorHandler1.text('Error : '+response);
				    successHandler1.hide();
                    errorHandler1.show();
			   }
                    			 
            }            
        });
            }
        });
    };
    return {
        //main function to initiate template pages
        init: function () {
        	validateCheckRadio();
            runValidator1();
            runValidator2(); 
			runValidator3();
			runValidator4();
			runValidator5();
			runValidator6();
			runValidator7();
			runValidator8();
			runValidator9();
			runValidator10();
			runValidator11();
			runValidator12();
			runValidator13();
			runValidator14();
			runValidator15();
			runValidator16();
			runValidator17();
			runValidator18();
			runValidator19();
			runValidator20();
			runValidator21();
			runValidator22();
        }
    };
}();