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
            first_name:"required",
            last_name: "required",
            phone: {
                required: true,
                //regex: /^[0-9]*[1-9][1-9][1-9][0-9]*$/,
                minlength: 10
            },
            address: "required",
            city: "required",
            state:"required" ,
            postalcode:"required",
              
            
            country: "required",
            email: {
                required: true,
                email: true,
            }
        },
        messages: {
            first_name: "مطلوب",
            last_name: "مطلوب",
            address: "مطلوب",
            city: "مطلوب",
            state: "مطلوب",
            postalcode: "مطلوب",
            country: "مطلوب",
            email: {
                required: "مطلوب",
                email: "أدخل ايميل صحيح"
            },
            phone: {
                required: "مطلوب",
                number: "استخدم ارقام فقط",
                regex: "رقم الهاتف غير صحيح",
                minlength: "أقل من 10 ارقام"
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
                idea_name: "مطلوب",
                idea_description: "مطلوب",
                ack_eighteen: "مطلوب",
                initial: "مطلوب"
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
                agreement_aff: " تأكد من انك قرأت وفهمت المعلومات في الأعلى"
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
                agreement_disc: "   تأكد من انك قرأت وفهمت المعلومات في الأعلى"
                
            }
        });
    });

    
    $('#step4Val2').on('click', function() {


        $('#form4 input').each(function() {
            $(this).rules('remove');
        });

      
       
    });
});
