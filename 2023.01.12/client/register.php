<div class="register">
<form class="form-signin shadow mt-2">
    <div class="w-100 text-center">
         <img class="mb-4" src="log-in.png" alt="" width="72" height="72">
    </div>
 
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

  <label for="username" >Username</label>
  <input type="username" id="username" name="username" class="form-control" placeholder="username" required autofocus>
  <label for="email" >Email address</label>
  <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
  <label for="password" >Password</label>
  <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
  
  <input class="btn btn-lg btn-primary btn-block" type="button" value = "Sign up" onclick = "newUser()">

</form>
<div class="msg w-100 text-center"></div>
</div>
<hr>

<script>
  const newUser = async () => {
    const myFormData = new FormData(document.querySelector('form'))
    let config = {
      method: 'POST',
      body: myFormData
    }
    insertUser('../server/insertUser.php', config, render)
  }

  const render = (data) => {
    console.log(data.msg)
    document.querySelector("msg").innerHTML = data.msg
  }
</script>

