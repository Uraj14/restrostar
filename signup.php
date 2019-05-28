<html>
<head>
  <title>RestoStar | Signup</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="shortcut icon" href="images/logo2.png" type="image/x-icon" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyCXFJ-lc7cHHcEklG2_oIhTnPKTWsLwHEU"></script>
  <!-- <meta name="google-signin-client_id" content="1047018957941-c99a4imf38mmr0cf6d6l3e53kojti2fs.apps.googleusercontent.com">
  <script src="https://apis.google.com/js/client:platform.js?onload=renderButton" async defer></script> -->
</head>
<link rel="stylesheet" href="signup.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style media="screen">

body {
  background: url(images/background1.png) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.the-legend {
    border-style: none;
    border-width: 0;
    font-size: 14px;
    line-height: 20px;
    margin-bottom: 0;
    width: auto;
    padding: 0 10px;
    border: 1px solid rgb(146,14,3);
}
.the-fieldset {
    border: 1px solid rgb(146,14,3);
    padding: 10px;
}
</style>
<body>

  <div class="card container shadow form-bod" >
    <div class="card-body">
      <a href="index.php">
<span style="float:left;color:rgb(14,146,3)"><i class="fa fa-home"></i>Home</span></a>
        <h5 style="text-align:center;color:rgb(14,146,3);margin-right:50px;" class="card-title"><b>Create Account</b></h5>
        <!-- <h6 style="text-align:center;color:rgb(14,146,3);"><b>Let's create your account</b></h6> -->
      <form style="width:100%" class="form" id="vform" method="post" action="signupProcess.php">
        <b><div id="headingChange2"></div></b>
        <div  id="headingChange">
          <fieldset class="the-fieldset">
            <legend align="center" style="color:rgb(14,146,3);font-size:15px;;" class="the-legend"><b>Signup Here</b></legend>
      <div class="row">




    </div>
        <div id="parent">
          <div id="seller">
            <div id="step1">
              <div class="row">
                    <div class="col form-group">
                        <label id = "fname" for="name">First Name <span class="required">*</span></label>
                        <input type="text" class="form-control form-control-sm" name="firstName" id="firstName" placeholder="First Name" pattern="[a-zA-Z][a-zA-Z ]{2,}" required>
                        <!--<div id ="belowfname" class="Invalid invalidFirstName">
                          Please enter your First Name
                        </div>-->
                        <div id="errorfirstname"></div>
                    </div>
                <div class="col">
                  <div class="form-group">
                    <label for="">Last Name<span class="required">*</span></label>
                    <input type="text" name="lastName" class="form-control form-control-sm" placeholder="Last Name" id="lastName" value="" pattern="[a-zA-Z][a-zA-Z ]{2,}" required>
                        <div id="errorlastname"></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label for="sellMbNo">Contact Number<span class="required">*</span></label>
                    <input type="number" size="10" maxlength="10"  class="form-control form-control-sm" name="MbNo" id="contact" placeholder="Your number" required>
                        <div id="errorcontact"></div>
                  </div>
                </div>

                <div class="col">
                  <label for="exampleInputEmail1">Email address<span class="required">*</span></label>
                  <input type="text" class="form-control form-control-sm" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  <!--<div class="Invalid invalidEmail">
                    Please enter a valid Email address!
                  </div>-->
                      <div id="erroremail"></div>
                </div>
              </div>

              <div id="passwordParent">
                <div  id="passwordDiv">
                  <div class="form-group">
                    <label for="password">Password<span class="required">*</span></label>
                    <input type="password"  name="password"  pattern=".{8,}"    title="Either 0 OR (8 chars minimum)"  class="form-control form-control-sm" id="password" placeholder="Password" required >
                    <small class="form-text text-muted">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</small>
                    <!--<div class="Invalid invalidPassword">

                    </div>-->
                        <div id="errorpass"></div>
                  </div>

                  <div class="form-group">
                    <label for="confPassword">Confirm Password<span class="required">*</span></label>
                    <input type="password"  name="confPassword" class="form-control form-control-sm" id="confPassword" placeholder="Confirm Password" required>
                    <small id="" class="form-text text-muted">Password should match.</small>
                    <!--<div class="confPassword" style="color:red;">

                    </div>-->
                        <div id="errorconpass"></div>
                  </div>
                  <hr>

                </div>

                  <!-- <button type="button" class="btn btn-primary btn-sm" onclick="getLocation()" name="button">Get My Location</button> -->
                    <div class="form-group">
                      <label for="inputAddress">Your Address<span class="required">*</span></label>

                      <input type="text" class="form-control form-control-sm" ondragover=""id="ownPlaces" name="Place" pattern="[a-zA-Z][a-zA-Z ]{2,}" placeholder="(Example-Shri Mahadev Mandir, Ambedkar Nagar, Sadashiv Nagar, Belgaum)" required>
                      <small id="ownPlaces" class="form-text text-muted">Your address should start with a street name.</small>
                    <!--  <div class="Invalid invalidAddress">

                    </div>-->
                        <div id="errorplace"></div>
                    </div>
                    <div class="form-group">
                      <label for="inputCitySell">City/Town/Panchayat/Village<span class="required">*</span></label>
                      <input type="text" class="form-control form-control-sm" name="City" id="ownCity" placeholder="Bangalore" pattern="[a-zA-Z][a-zA-Z ]{2,}" autocomplete="on" required>
                    <!--  <div class="Invalid invalidCity">

                    </div>-->
                    <div id="errorcity"></div>
                    </div>
                    <div class="form-group">
                      <label for="inputStateSell">State<span class="required">*</span></label>
                      <input type="text" class="form-control form-control-sm" name="State" id="ownState"  pattern="[a-zA-Z][a-zA-Z ]{2,}" placeholder="Karnataka" required>
                      <!--<div class="Invalid invalidState">
                      </div>-->
                      <div id="errorstate"></div>
                    </div>

                    <div class="form-group">
                      <label for="ownPinCodeSell">Pincode<span class="required">*</span></label>
                      <input  type="number" maxlength="6" size="6" class="form-control form-control-sm" name="PinCode" id="ownPinCode" placeholder="530068" required>
                      <!--<div class="Invalid invalidPincode">
                      </div>-->
                      <div id="errorpin"></div>
                    </div>





              <button type="submit" class="btn btn-success btnsize" style="float:right;" id="submitBtn" onclick="return Validate()" >Continue</button>
            </div>
          </div>
        </div>



        <!-- <button type="submit" class="btn btn-success" id="submitBtn" onclick="return Validate()" disabled>Continue</button> -->
      </form>
    </fieldset>

    </div>
</body>

</html>



<script type="text/javascript">
  /*  function Validate() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confPassword").value;
        if (password != confirmPassword) {
            $(".confPassword").html("Passwords do not match.");
            return false;

        }
        $(".confPassword").html("");
        return true;

    }*/
  var fname = document.forms['vform']['firstName'];
  var lname = document.forms['vform']['lastName'];
  var phno = document.forms['vform']['contact'];
  var email = document.forms['vform']['exampleInputEmail1'];
  var password = document.forms['vform']['password'];
  var password_confirm = document.forms['vform']['confPassword'];
  var place = document.forms['vform']['ownPlaces'];
  var city = document.forms['vform']['ownCity'];
  var state = document.forms['vform']['ownState'];
  var pin = document.forms['vform']['ownPinCode'];
  // SELECTING ALL ERROR DISPLAY ELEMENTS
  var firstname_error = document.getElementById('errorfirstname');
  var lastname_error = document.getElementById('errorlastname');
  var contact_error = document.getElementById('errorcontact');
  var email_error = document.getElementById('erroremail');
  var password_error = document.getElementById('errorpass');
  var conpass_error = document.getElementById('errorconpass');
  var place_error = document.getElementById('errorplace');
  var city_error = document.getElementById('errorcity');
  var state_error = document.getElementById('errorstate');
  var pin_error = document.getElementById('errorpin');


  console.log(email);// validation function
  function Validate() {
  // validate firstname
      if (fname.value == "") {
        fname.style.border = "1px solid red";
        document.getElementById('firstName').style.color = "red";
        firstname_error.textContent = "Firstname is required";
        fname.focus();
        return false;
      }
      // validate firstname
      if (fname.value.length < 3) {
        fname.style.border = "1px solid red";
        document.getElementById('firstName').style.color = "red";
        firstname_error.textContent = "Firstname must be at least 3 characters";
        fname.focus();
        return false;

      }
        // validate lastname
      if (lname.value == "") {
        lname.style.border = "1px solid red";
        document.getElementById('lastName').style.color = "red";
        lastname_error.textContent = "Lastname is required";
        lname.focus();
        return false;
      }
      // validate lastname
      if (lname.value.length < 3) {
        lname.style.border = "1px solid red";
        document.getElementById('lastName').style.color = "red";
        lastname_error.textContent = "Lastname must be at least 3 characters";
        lname.focus();
        return false;
      }

      //phone numbers
      if (phno.value.length < 10 || phno.value.length > 10 ) {
        phno.style.border = "1px solid red";
        document.getElementById('contact').style.color = "red";
        contact_error.textContent = "Number must be of 10 digits ";
        phno.focus();
        return false;
      }
      // validate email
      if (email.value == "") {
        email.style.border = "1px solid red";
        document.getElementById('exampleInputEmail1').style.color = "red";
        email_error.textContent = "Email is required";
        email.focus();
        return false;
      }else{

      //validate email syntax
      var x=email.value;
      var atpos = x.indexOf("@");
      var dotpos = x.lastIndexOf(".");
      if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length){
        email.style.border = "1px solid red";
        document.getElementById('exampleInputEmail1').style.color = "red";
        email_error.textContent = "Please enter a valid e-mail address";
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
      // check if the two passwords match
      if (password.value != password_confirm.value) {
        password.style.border = "1px solid red";
        document.getElementById('confPassword').style.color = "red";
        password_confirm.style.border = "1px solid red";
        password_error.innerHTML = "The two passwords do not match";
        return false;
      }

      if (place.value == "") {
        place.style.border = "1px solid red";
        document.getElementById('ownPlaces').style.color = "red";
        place_error.textContent = "Place is required";
        place.focus();
        return false;
      }
      // validate place
      if (place.value.length < 3) {
        place.style.border = "1px solid red";
        document.getElementById('ownPlaces').style.color = "red";
        place_error.textContent = "Place must be at least 3 characters";
        place.focus();
        return false;
      }


          if (city.value == "") {
            city.style.border = "1px solid red";
            document.getElementById('ownCity').style.color = "red";
            city_error.textContent = "City is required";
            city.focus();
            return false;
          }
          // validate state
          if (city.value.length < 3) {
            city.style.border = "1px solid red";
            document.getElementById('ownCity').style.color = "red";
            city_error.textContent = "City must be at least 3 characters";
            city.focus();
            return false;
          }
        if (state.value == "") {
          state.style.border = "1px solid red";
          document.getElementById('ownState').style.color = "red";
          state_error.textContent = "State is required";
          state.focus();
          return false;
        }
        // validate state
        if (state.value.length < 3) {
          state.style.border = "1px solid red";
          document.getElementById('ownState').style.color = "red";
          state_error.textContent = "State must be at least 3 characters";
          state.focus();
          return false;
        }


        if (pin.value == "") {
          pin.style.border = "1px solid red";
          document.getElementById('ownPinCode').style.color = "red";
          pin_error.textContent = "City is required";
          pin.focus();
          return false;
        }
        // validate state
        if (pin.value.length !=6) {
          pin.style.border = "1px solid red";
          document.getElementById('ownPinCode').style.color = "red";
          pin_error.textContent = "Pincode must be 6 characters";
          pin.focus();
          return false;
        }

    }

</script>
