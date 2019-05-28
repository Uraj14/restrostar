validateLogin(){
  var email = document.getElementById('email')
  var password = document.getElementById('password')

  var x=email.value;
  var atpos = x.indexOf("@");
  var dotpos = x.lastIndexOf(".");
  if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length){
    email.style.border = "1px solid red";
    document.getElementById('email').style.color = "red";
    email.textContent = "Please enter a valid e-mail address";
    alert("");
    email.focus();
    return false;
     }
   }

  // validate password
  if (password.value == "") {
    password.style.border = "1px solid red";
    document.getElementById('password').style.color = "red";
    password_confirm.style.border = "1px solid red";
    password_error.textContent = "Password is required";
    password.focus();
    return false;
  }

}
