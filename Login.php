<script type="text/javascript">
  $('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
<body background="assets/img/hero-bg.jpg">
  <link href="assets/css/signin.css" rel="stylesheet">
<div class="login-page">
  <div class="form">
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="SignUp.html">Sign In</a></p>
    </form>
    <form class="login-form">
      <input type="text" placeholder="username"/>
      <input type="password" placeholder="password"/>
      <button>login</button>
      <p class="message">Not registered? <a href="SignUp.html">Create an account</a></p>
    </form>
  </div>
</div>
</body>

</html>

