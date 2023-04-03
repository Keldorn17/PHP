<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzazo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid">
        <header class="d-flex justify-content-center align-items-center">
            <h1>Pizza rendelés gyorsan, kényelmesen</h1>
        </header>
        <div class="row Data w-75"></div>
        <footer class="d-flex justify-content-center align-items-center">
            <div class="row w-100">
                <div class="col-6">
                    <p class="float-right">Kapcsolatok:</p>
                </div>
                <div class="col-6">
                    <p>Csudajó Étterem</p>
                    <p>6000 Kecskemét</p>
                    <p>Vicces utca 13</p>
                    <p>Telefon: +36 70/123-1234</p>
                    <p>Email: asd@gmail.com</p>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>

<script>
    const GetData = async (url, render) => {
        const response = await fetch(url)
        const data = await response.json()
        render(data)
    }
    const render = (data) => {
        document.querySelector(".Data").innerHTML = data.map(obj => `
            <div class="col-md-3 mt-2 mb-2 d-flex justify-content-center">
                <div class="card p-2" style="width: 18rem;">
                    <img src="./images/${obj.img_url}" class="card-img-top rounded img-fluid" alt="${obj.name}">
                    <div class="card-body">
                        <h5 class="card-title">${obj.name}</h5>
                        <a class="btn btn-success">Részletek</a>
                    </div>
                </div>
            </div>
        `).join("")
    }

    GetData("../server/ReadObjects.php", render)

</script>