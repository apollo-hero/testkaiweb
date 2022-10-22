
//SETTINGS
var input_1   = $("#InputEmail"           );
var input_2   = $("#InputFirstName"       );
var input_3   = $("#InputLastName"        );
var input_4   = $("#SelectCountry"        );
var input_5   = $("#InputNewPassword"     );
var input_6   = $("#InputNewPasswordAgain");
var input_7   = $("#InputActualPassword"  );
var check_1   = $("#check");
var button_1  = document.getElementById("ButtonUpdateSettings" );

$(document).ready(function() {

    function field_1(){
      if (input_1.val().length == 0 || input_1.val() == ""){ 
        input_1.addClass('border border-danger');
        button_1.disabled=true;
      }
      else{ 
        input_1.removeClass('border border-danger');
        button_1.disabled=false;
      }
    }

    function field_2(){
      if (input_2.val().length == 0 || input_2.val() == ""){ 
        input_2.addClass('border border-danger');
        button_1.disabled=true;
      }
      else{
        input_2.removeClass('border border-danger');
        button_1.disabled=false;
      }
    }

    function field_3(){
      if (input_3.val().length == 0 || input_3.val() == ""){ 
        input_3.addClass('border border-danger');
        button_1.disabled=true;
      }
      else{
        input_3.removeClass('border border-danger');
        button_1.disabled=false;
      }
    }

    function field_4(){
      if (input_4.val().length == 0 || input_4.val() == ""){ 
        input_4.addClass('border border-danger');
        button_1.disabled=true;
      }
      else{
        input_4.removeClass('border border-danger');
        button_1.disabled=false;
      }
    }

    input_1.keyup(function(){ field_1(); });
    input_2.keyup(function(){ field_2(); });
    input_3.keyup(function(){ field_3(); });
    input_4.keyup(function(){ field_4(); });
});

  function check_psw(){

    if (document.getElementById('InputNewPassword').disabled == false) {
      if (input_7.val().length == 0 || input_7.val() == "") {
        input_7.addClass('border border-danger');
        button_1.disabled = true;
      }
      else {
        input_7.removeClass('border border-danger');
        button_1.disabled = false;
      }

      if (input_5.val() != input_6.val() || input_5.val().length == 0 || input_5.val() == "" || input_6.val().length == 0 || input_6.val() == "") { 
        input_5.addClass('border border-danger');
        input_6.addClass('border border-danger');
        button_1.disabled = true;
      }
      else {
        input_5.removeClass('border border-danger');
        input_6.removeClass('border border-danger');
        button_1.disabled = false;
      }
    }
    else{
        input_5.removeClass('border border-danger');
        input_6.removeClass('border border-danger');
        input_7.removeClass('border border-danger');
        button_1.disabled = false;
    }
  }

  input_5.keyup(function(){ check_psw(); });
  input_6.keyup(function(){ check_psw(); });
  input_7.keyup(function(){ check_psw(); });