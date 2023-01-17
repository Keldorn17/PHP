<div class="login">
<form class="form-signin shadow mt-2">
    <div class="w-100 text-center">
         <img class="mb-4" src="log-in.png" alt="" width="72" height="72">
    </div>
 
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="username" >Username</label>
  <input type="username" id="username" name="username" class="form-control" placeholder="username" required autofocus>
  <label for="password" >Password</label>
  <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
  
  <input type="button" class="btn btn-lg btn-primary btn-block" value = "Sing in" onclick = "Login()">

</form>
<div class="msg text-center w-100"></div>
</div>
<hr>

<script>
  const Login = () => {
    const myFormData = new FormData(document.querySelector('form'))
    let config = {
      method: 'POST',
      body: myFormData
    }
    dataUser('../server/login.php', config, render)
  }
  const render = (data) => {
    console.log(data.msg)
    document.querySelector('.msg').innerHTML = data.msg
    if (data.msg == "Sikeres bejelentkezés!")
      location.href = "./index.php"
  }

</script>
