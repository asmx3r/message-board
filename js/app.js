// https://www.phpzag.com/ajax-registration-script-with-php-mysql-and-jquery/

$('document').ready(function() {
/* handle form validation */
   $("#postas").validate({
      rules:
      {
         fullname: {
            required: true,
            minlength: 5
         },
         gimdienis: {
            required: true
         },
         email: {
            required: true,
            email: true
         },
         zinute: {
            required: true,
            minlength: 2
         },
      },

      // error messages
      messages:
      {
         fullname: {
            required: "Irasykite varda, pavarde",
            minlength: "Vardas negali buti toks trumpas"
         }
         gimdienis:{
            required: "Irasykite gimimo data"
         },
         user_email: "Irasykite tinkama email adresa",
         zinute:{
            required: "Irasykite zinute",
            equalTo: "Zinute turi but ilgesne nei 2 simboliai"
         }
      },
      submitHandler: submitForm
   });
/* handle form submit */
   function submitForm() {
      var data = $("#postas").serialize();
      $.ajax({
         type : 'POST',
         url : 'post.php',
         data : data,
         beforeSend: function() {
            $("#pranesimas").fadeOut();
            $("#skelbti").html(' Sunciama ...');
         },
         success : function(response) {
            if(response==1){
               $("#pranesimas").fadeIn(1000, function(){
               $("#pranesimas").html('<div class="alert alert-danger">   Sorry email already taken !</div>');
               $("#skelbti").html('<span class="glyphicon glyphicon-log-in"></span>   Skelbti (Create Account)');
            });
         } else if(response=="irasyta"){
               $("#skelbti").html('<img src="ajax-loader.gif" />   Siunciama ...');
               setTimeout('$(".form-signin").fadeOut(500, function(){ $(".register_container").load("postas()"); }); ',3000);
            } else {
               $("#pranesimas").fadeIn(1000, function(){
               $("#pranesimas").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span>   '+data+' !</div>');
               $("#skelbti").html('<span class="glyphicon glyphicon-log-in"></span>   Skelbti(Create Account)');
               });
            }
         }
      });
      return false;
   }

   // when data recorded to database
   .done(function() {
      // Clear the form.
      $('#fullname').val('');
      $('#birthdate').val('');
      $('#email').val('');
      $('#message').val('');
   });

});
