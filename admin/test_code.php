<div class="container">
  <form class="form" onsubmit="validateForm(event)">
    <div>
      <label id="FullNameLabel">Full Name</label></br>
      <input type="text" placeholder="John Doe" id="FullName" />
    </div>
    <div>
      <label id="EmailLabel">Email</label></br>
      <input type="text" placeholder="johndoe@email.com" id="Email" />
    </div>
    <div>
      <label id="PhoneNumberLabel">Phone Number</label></br>
      <input type="text" placeholder="(123) 456-7890" id="PhoneNumber" />
    </div>
    <div>
      <label id="PasswordLabel">Password</label></br>
      <input name="Password" id="Password" type="password" placeholder="Password" onkeyup='passConfirm();' />
    </div>
    <div>
      <label id="ConfirmPswdLabel">Confirm Password</label></br>
      <input type="password" placeholder="Confirm Password" id="ConfirmPassword" onkeyup='passConfirm();' />
    </div>
    <span id="Message"></span>
  </form>
  <button type="submit" value="submit">Sign Me Up!</button>
</div>


<script>
      var passConfirm = function() {
          if (document.getElementById("Password").value ==
            document.getElementById("ConfirmPassword").value) {
            document.getElementById("Message").style.color = "Green";
            document.getElementById("Message").innerHTML = "Passwords match!"
          } else {
            document.getElementById("Message").style.color = "Red";
            document.getElementById("Message").innerHTML = "Passwords do NOT match!"
          }
        }
</script>
