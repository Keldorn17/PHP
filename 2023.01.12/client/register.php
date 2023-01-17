<div class="register">
<form class="form-signin shadow mt-2">
    <div class="w-100 text-center">
         <img class="mb-4" src="log-in.png" alt="" width="72" height="72">
    </div>
 
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

  <label for="username" >Username</label>
  <input type="username" id="username" name="username" class="form-control" placeholder="username" required autofocus onblur="verifyUsername(this)">
  <div class="vrfUsername text-danger"></div>
  <label for="email" >Email address</label>
  <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus onblur="verifyEmail(this)">
  <div class="vrfEmail text-danger"></div>
  <label for="password" >Password</label>
  <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
  
  <input class="btn btn-lg btn-primary btn-block" type="button" value = "Sign up" onclick = "newUser()">

</form>
<div class="msg w-100 text-center"></div>
<hr>

<script>
  let user = {email:false, username:false}

  const newUser = async () => {
    if (user.email && user.username){
      const myFormData = new FormData(document.querySelector('form'))
      let config = {
        method: 'POST',
        body: myFormData
      }
      dataUser('../server/insertUser.php', config, render)
      user.email = false
      user.username = false
    } 
  }

  const render = (data) => {
    console.log(data.msg)
    document.querySelector('.msg').innerHTML = data.msg
  }

  const verifyUsername = (obj) => {
    if (obj.value.length > 0)
      verifyUser(`../server/verifyUser.php?username=${obj.value}`,renderVrfUsername)
  }
  const verifyEmail = (obj) => {
    if (obj.value.length > 0)
      verifyUser(`../server/verifyUser.php?email=${obj.value}`,renderVrfEmail)
  }
  
  const renderVrfUsername = (data) => {
    if (data.nr == 1){
      document.querySelector('.vrfUsername').innerHTML = "Foglalt felhaszálónév"
      user.username = false
    }
    else{
      document.querySelector('.vrfUsername').innerHTML = ""
      user.username = true
    }
  }
  const renderVrfEmail = (data) => {
    if (data.nr == 1){
      document.querySelector('.vrfEmail').innerHTML = "Foglalt email"
      user.email = false
    }
    else{
      document.querySelector('.vrfEmail').innerHTML = ""
      user.email = true
    }
  }


  
</script>

