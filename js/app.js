$(function(){

    $(document).on("change", "#type_compte", function(e){
       var value = $(this).val();

       if(value == "professeur"){
           $(".student").fadeOut();
           $(".professeur").fadeIn();
       }else{
           $(".student").fadeIn();
           $(".professeur").fadeOut();
       }

    });

});