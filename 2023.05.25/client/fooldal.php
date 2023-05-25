<style>
    .col-md-4{
        border: 1px solid white;
        border-radius: 10px;
        text-align: center;
        color: white;
        font-weight: 700;
        padding: 10px;
    }
    img{
        max-height: 300px;
        aspect-ratio: 1 / 1;
    }
</style>
<div class="row p-2">
    
</div>

<script>
    const render = (data) => {
        console.log(data)
        document.querySelector(".row").innerHTML = data.map(obj => `
            <div class="col-md-4 p-2 mb-2">
                <img src="./images/${obj.foto}" alt="" class="img-fluid rounded">
                <p class="text-center">${obj.vezeteknev} ${obj.keresztnev}</p>
            </div>
        `).join("")
    }
    GetData("../server/fooldal.php", render)
</script>