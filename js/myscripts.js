$(document).ready(function(){
    
   
   $('.iframe iframe').attr('width','560');
   $('.iframe iframe').attr('height','315');
   
   
   $(".comment-form").validate({
    
    
        rules:{
            
            author:{
                required: true,
                minlength: 4,
                maxlength: 16
            },
            
            text:{
                required: true,
                maxlength: 500
            },
            
            captcha2:{         
                required: true,
                digits: true,
                maxlength:5,
                minlength: 5,
            },
            
        },
        
        
        messages:{
            
            
            author:{
                required: "Это поле обязательно для заполнения",
                minlength: "Это поле должно быть минимум 4 символа",
                maxlength: "Это поле должно быть максимум 16 символов",
            },
            
            text:{
                required: "Это поле обязательно для заполнения",
                maxlength: "Это поле должно быть максимум 500 символов",
            },
            
            captcha2:{         
                required: "Это поле обязательно для заполнения",
                minlength: "Это поле должно быть минимум 5 символов",
                maxlength: "Это поле должно быть максимум 5 символов",
                digits: "Символы с картинки должны содержать только цифры"
            },
            
        }
    
    
   });
   
   
    
});