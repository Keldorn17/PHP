<div class="row border">
    <div class="col-md-6 col-12">
        <h3>Order Details</h3>
        <table class="table table-striped table-responsive bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Qty</th>
                    <th>€</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody></tbody>
            <tfoot>
                <tr>
                    <td colspan = "3">Sum</td>
                    <td id = "total">...</td>
                </tr>
            </tfoot>
        </table>
    <a href="./index.php?prog=products.php">Continue Shopping...</a>

    </div>
    <div class="col-md-6 col-12">
        <h3>Contact details</h3>
        <form>
            <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="phone" placeholder="Phone Number" required>
            </div>
            <div class="form-group">
                <textarea name="address" id="" cols="60" rows="2" placeholder="Address" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <input type="button" value="Place order" onclick="placeOrder()" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
<script>
    const render = (data) => {
        console.log(data)
        let tbl = '';
        let total = 0;
        let products = Object.values(data)
        if (!data?.error) {
            for(let obj of products) {
                total += obj.quantity * obj.price
                tbl += `
                <tr>
                    <td>${obj.name}</td>
                    <td>${obj.quantity}</td>
                    <td>${obj.price} €</td>
                    <td>${obj.quantity * obj.price} €</td>
                </tr>
                `
            }
            document.querySelector('tbody').innerHTML = tbl
            document.querySelector('#total').innerHTML = total + " €"
        }
        else{
            console.log('A kosár üres')
            location.href='./index.php?prog=products.php'
        }
    }
    
    getData('../server/cartContent.php',render)

    const placeOrder = () => {
        let formData = new FormData(document.querySelector('form'))
        let configObj = {
            method : 'POST',
            body : formData
        }
        postData('../server/placeOrder.php',configObj,renderOrder)
    }

    const renderOrder = (data) => {
        console.log(data)
        location.href = "./index.php?prog=products.php"
    }
</script>