 $(document).ready(function(){
      var goodColor = "#66cc66";
      var badColor = "#ff6666"
    $('#password2').keyup(function(){
      // alert('hi');
      //Store the password field objects into variables ...
      var pass1 = $('#password1').val();
      var pass2 = $('#password2').val();
      //Store the Confimation Message Object ...
      var message = $('#confirmMessage');
      //Set the colors we will be using ...
      ;
      //Compare the values in the password field
      //and the confirmation field
      if(pass1 === pass2){
          //The passwords match.
          //Set the color to the good color and inform
          //the user that they have entered the correct password
          password2.style.backgroundColor = goodColor;
          message.css("color",goodColor);
          message.html('Passwords Match!');
           $(".btn").removeAttr("disabled");
          return true;

      }else{
          //The passwords do not match.
          //Set the color to the bad color and
          //notify the user.
          password2.style.backgroundColor = badColor;
          message.css("color",badColor);
          message.html("Passwords Do Not Match!");

          $('.btn').attr("disabled",'disabled');
          return false;
      }
    }); 
    $('#name').change(function(){
        // alert('hi');
        var username= $('#name').val();
          $.ajax({
                  type:'POST',
                  url : '../ajax/check_username.php',
                  data:'username=' + username,
                  cache: false,
                  success:function(result){
                  // alert(username); 
                //if the result is 1  
                if(result == 1){  
                    //show that the username is available  
                    $('#username_availability_result').html('Username ' + username + ' is available').css("color",goodColor);  
                }else{  
                    //show that the username is NOT available  
                    $('#username_availability_result').html('Username ' + username + ' is not available').css("color",badColor);  
                }  
          }



        
        });

    });




});




  
