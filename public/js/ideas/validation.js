/* eslint quotes: ["error", "double"], no-unused-vars: ["error", {"args":"none"}] */
$(function() {
    // $.validator.addMethod(
    //     "regex",
    //     function(value, element, regexp) {
    //         return this.optional(element) || regexp.test(value);
    //     },
    //     "Please check your input."
    // );

    $("#form").validate({
        errorElement: "em",
        rules: {
            first_name: "required",
            last_name: "required",
            phone: {
                required: true,
                //regex: /^[0-9]*[1-9][1-9][1-9][0-9]*$/,
                minlength: 10
            },
            address: "required",
            city: "required",
            state:"required" ,
            country: "required",
            postalcode:"required",
            email: {
                required: true,
                email: true,
            }
        },
        messages: {
            firstname: "Required",
            lastname: "Required",
            address1: "Required",
            city: "Required",
            state: "Required",
            postalcode: "Required",
            country: "Required",
            email: {
                required: "Required",
                email: "Supply a valid email."
            },
            phone1: {
                required: "Required",
                number: "Use numbers only.",
                regex: "Invalid phone number.",
                minlength: "Minimum of 10 characters."
            }
        }
        
    });

    $('#step2Val1').on('click', function() {
        
        $("#form2").validate({
            errorElement: "em",
            rules: {
                idea_name: "required",
                idea_description: "required",
                ack_eighteen: "required",
                initial: "required"
            },
            messages: {
                idea_name: "Required",
                idea_description: "Required",
                ack_eighteen: "Required",
                initial: "Required"
            }
        });

        
    });

    $('#step2Val2').on('click', function() {


        $('#form2 input').each(function() {
            $(this).rules('remove');
        });

        $('#form2 textarea').each(function() {
            $(this).rules('remove');
        });
       
    });
   
    

    $('#step3Val1').on('click', function() {
        $("#form3").validate({
            errorElement: "em",
            rules: {
                agreement_aff: "required"
            },
            messages: {
                agreement_aff: " Please check that you've read and understand the above information."
            }
        });
    });

    $('#step3Val2').on('click', function() {


        $('#form3 input').each(function() {
            $(this).rules('remove');
        });

      
       
    });




    $('#step4Val1').on('click', function() {

        $("#form4").validate({
            errorElement: "em",
            rules: {
                agreement_disc: "required"
            },
            messages: {
                agreement_disc: " Please check that you've read and understand the above information."
            }
        });
    });


    $('#step4Val2').on('click', function() {


        $('#form4 input').each(function() {
            $(this).rules('remove');
        });

      
       
    });

});
