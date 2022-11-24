<style>
   h3{
    width: 100%;
    text-align: center;
   } 
   .holder{
    width: 250px;
    text-align: center;
   }
   #kiado{
    margin: 10px;
   }
</style>
<h3>Új Kiadó bevezetése</h3>
<div class="holder">
    <form>
        <label for="kiado">Kiadó neve:</label>
        <input type="text" name="kiado" id="kiado">
        <div class="btn btn-primary" onclick="addData()">mentés</div>
    </form>
</div>

<script>
    const addData = async () =>{
        const myFormData = new FormData(document.querySelector('form'))
        let config = {
            method : 'POST',
            body : myFormData
        }
        const response = await fetch('../server/insert.php',config)
        const data = await response.json()
        console.log(data.msg)
        document.querySelector('#kiado').value = ""
    }

</script>