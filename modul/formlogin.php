<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Pakar</title>
  <link rel="stylesheet" href="aset/login/css/style.css">
</head>
<body>
<div class="ayaem">
  <div class="hand"></div>
  <div class="hand hand-r"></div>
  <div class="arms">
    <div class="arm"></div>
    <div class="arm arm-r"></div>
  </div>
</div>
<div class="formku">
  <div class="info">
    <h4><i class="fa fa-paper-plane"></i> Login Pakar</h4><br>
  </div>
  <form class="login-form" action="login.php" method="post" name="text_form" onsubmit="return Blank_TextField_Validator()">
    <input type="text" name="username" id="username" placeholder="&#xf007;  Username" style="font-family:Arial, FontAwesome" />
    <input type="password" name="password" id="password" placeholder="&#xf023;  Password" style="font-family:Arial, FontAwesome" />
    <input type="submit" name="submit" id="submitku" value="   Login   " /><br>
  </form>
</div>

<script>
function Blank_TextField_Validator() {
  if (text_form.username.value === "") {
    alert("Isi dulu username!");
    text_form.username.focus();
    return false;
  }
  if (text_form.password.value === "") {
    alert("Isi dulu password!");
    text_form.password.focus();
    return false;
  }
  return true;
}

document.querySelector('input[type="password"]').addEventListener('focus', () => {
  document.querySelectorAll('*').forEach(el => el.classList.add('password'));
});
document.querySelector('input[type="password"]').addEventListener('blur', () => {
  document.querySelectorAll('*').forEach(el => el.classList.remove('password'));
});

var d = document.getElementById("pakarayam");
if (d) {
  d.className += " sidebar-collapse";
}
</script>
</body>
</html>
