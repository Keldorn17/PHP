<div class="container">
	<h2 class="text-center">Termékek</h2>
	<div class="text-right">
		<i class="fa-sharp fa-solid fa-cart-shopping" onclick="showCart()"></i>
		<span id="qty">0</span>
	</div>
	<div class="row justify-content-center shadow p-1 bg-light products"></div>
</div>
<script>
	const showProducts = (data) => {
		console.log(data)
		document.querySelector('.products').innerHTML = data.map(obj => `
		<div class="card" style="width: 18rem;">
  			<img src="img/${obj.picture}" class="card-img-top" alt="...">
  			<div class="card-body">
    			<h5 class="card-title">${obj.name}</h5>
    			<p class="card-text">${obj.description}</p>
				<p class="card-text">Price: ${obj.price}€</p>
    			<button class="btn btn-primary w-100" onclick = "addToCart(this)" id=${obj.id} data-prod='${JSON.stringify(obj)}'>Add to Cart</button>
  			</div>
		</div>
		`).join('')
	}
	getData('../server/read.php',showProducts)

	const renderCart = (data) => {
		console.log('server: ', data)
		document.querySelector('#qty').innerHTML = data
	}

	const addToCart = (obj) => {
		console.log(obj.id)
		console.log(obj.dataset.prod)
		let product = JSON.parse(obj.dataset.prod)
		let formData = new FormData();
		Object.entries(product).forEach(([key, value]) => formData.append(key,value))
		
		let config = {
			method: "POST",
			body: formData
		}
		postData("../server/addToCart.php", config, renderCart)
	}
	const showCart = () => {
		location.href = './index.php?prog=cart.php'
	}
	
	
</script>