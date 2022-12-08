<form>
    <div class="form-group">
        <input type="text" name="username" id="username" placeholder="Username">
    </div>
    <div class="form-group">
        <input type="password" name="password" id="password" placeholder="Password">
    </div>
    <input class="btn btn-primary" onclick="login()" type="button" value="login">
    <div class="msg"></div>
</form>
<script src="fetchData.js"></script>
<script>
    const login = () => {
        let formData = new FormData(document.querySelector('form'))
        let config = {
            method : 'POST',
            body : formData
        }
        postData('../server/login.php',config,renderMsg)
    }
    const renderMsg = (data) => {
        console.log(data)
        data.success ? location.href='./index.php' : document.querySelector('.msg').innerHTML = data.msg
    }
</script>